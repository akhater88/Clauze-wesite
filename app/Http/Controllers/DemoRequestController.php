<?php

namespace App\Http\Controllers;

use App\Models\DemoRequest;
use Google\Client as GoogleClient;
use Google\Service\Sheets;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DemoRequestController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'company' => 'required|string|max:255',
            'jurisdiction' => 'nullable|string|max:100',
            'notes' => 'nullable|string|max:2000',
            'submittedAt' => 'nullable|string',
            'page' => 'nullable|string|max:500',
        ]);

        try {
            DemoRequest::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'company' => $validated['company'],
                'jurisdiction' => $validated['jurisdiction'] ?? null,
                'notes' => $validated['notes'] ?? null,
                'page' => $validated['page'] ?? null,
                'submitted_at' => isset($validated['submittedAt']) ? \Carbon\Carbon::parse($validated['submittedAt']) : now(),
            ]);
        } catch (\Exception $e) {
            Log::error('Database save failed: ' . $e->getMessage());
        }

        try {
            $this->appendToGoogleSheet($validated);
        } catch (\Exception $e) {
            Log::error('Google Sheets append failed: ' . $e->getMessage());
        }

        return response()->json([
            'success' => true,
            'message' => 'Demo request saved successfully.',
        ]);
    }

    private function appendToGoogleSheet(array $data): void
    {
        $client = new GoogleClient();
        $client->setAuthConfig(storage_path('app/google/credentials.json'));
        $client->addScope(Sheets::SPREADSHEETS);

        $service = new Sheets($client);

        $spreadsheetId = config('services.google.spreadsheet_id');
        $range = config('services.google.sheet_name', 'Sheet1') . '!A:H';

        $values = [[
            $data['submittedAt'] ?? now()->toISOString(),
            $data['name'],
            $data['email'],
            $data['phone'],
            $data['company'],
            $data['jurisdiction'] ?? '',
            $data['notes'] ?? '',
            $data['page'] ?? '',
        ]];

        $body = new Sheets\ValueRange(['values' => $values]);

        $service->spreadsheets_values->append(
            $spreadsheetId,
            $range,
            $body,
            ['valueInputOption' => 'USER_ENTERED']
        );
    }
}
