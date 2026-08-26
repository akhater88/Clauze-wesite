<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="/support.js"></script>
</head>
<body>
@verbatim
<x-dc>
<helmet data-dc-atomics="">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
<title>Terms of Service — Clauze</title>
<meta name="description" content="The agreement governing use of the Clauze platform.">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#26235A">
<link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-64.png">
<link rel="icon" type="image/png" sizes="64x64" href="assets/favicon-64.png">
<link rel="apple-touch-icon" href="assets/favicon-512.png">
<style>
@font-face{font-family:'Zalando Sans';src:url('assets/fonts/ZalandoSans-Regular.ttf') format('truetype');font-weight:400;font-display:swap}
@font-face{font-family:'Zalando Sans';src:url('assets/fonts/ZalandoSans-SemiBold.ttf') format('truetype');font-weight:600;font-display:swap}
*,*::before,*::after{box-sizing:border-box}
html{-webkit-text-size-adjust:100%;scroll-behavior:smooth}
body{margin:0;background:#26235A;color:#F4F6FC;font-family:'Zalando Sans','Noto Kufi Arabic',system-ui,sans-serif;-webkit-font-smoothing:antialiased;text-wrap:pretty}
a{color:#6BB0E0;text-decoration:none}
a:hover{color:#AFD6EE}
button,input,select,textarea{font:inherit;color:inherit}
[dir="rtl"] body{font-family:'Zalando Sans','Noto Kufi Arabic',system-ui,sans-serif}
[dir="rtl"] header nav{gap:2px !important}
[dir="rtl"] header nav a{padding:10px 10px !important;font-size:12.5px !important;white-space:nowrap}
[dir="rtl"] h1,[dir="rtl"] h2,[dir="rtl"] h3,[dir="rtl"] h4{text-transform:none !important;letter-spacing:0 !important}
::selection{background:#2E7EBE;color:#fff}
::-webkit-scrollbar{width:6px}
::-webkit-scrollbar-track{background:#26235A}
::-webkit-scrollbar-thumb{background:#2E7EBE;border-radius:3px}


.pp-wrap{max-width:860px;margin:0 auto;padding:0 clamp(20px,4vw,44px)}
.pp-header{padding:100px 0 48px;text-align:center;border-bottom:1px solid rgba(244,246,252,.1)}
.pp-header h1{margin:0;font-size:clamp(28px,4vw,42px);font-weight:600;letter-spacing:-.02em}
.pp-header p{margin:12px 0 0;font-size:16px;color:rgba(244,246,252,.6);line-height:1.6}
.pp-meta{display:grid;grid-template-columns:auto 1fr;gap:8px 24px;margin:32px auto 0;max-width:560px;text-align:start}
.pp-meta dt{font-size:13px;font-weight:600;color:#6BB0E0;white-space:nowrap}
.pp-meta dd{margin:0;font-size:13.5px;color:rgba(244,246,252,.7)}
.pp-body{padding:48px 0 80px}
.pp-body h2{margin:48px 0 16px;font-size:clamp(20px,2.6vw,26px);font-weight:600;color:#F4F6FC;border-bottom:1px solid rgba(244,246,252,.08);padding-bottom:12px}
.pp-body h2:first-child{margin-top:0}
.pp-body h3{margin:32px 0 12px;font-size:clamp(16px,2vw,19px);font-weight:600;color:#F4F6FC}
.pp-body p{margin:0 0 14px;font-size:15px;line-height:1.75;color:rgba(244,246,252,.75)}
.pp-body ul,.pp-body ol{margin:0 0 14px;padding-inline-start:22px}
.pp-body li{margin-bottom:8px;font-size:15px;line-height:1.7;color:rgba(244,246,252,.75)}
.pp-body li::marker{color:#6BB0E0}
.pp-note{margin:16px 0;padding:16px 20px;background:rgba(107,176,224,.08);border-inline-start:3px solid #6BB0E0;border-radius:0 8px 8px 0;font-size:14px;line-height:1.65;color:rgba(244,246,252,.7)}
.pp-table{width:100%;border-collapse:collapse;margin:16px 0 24px;font-size:14px}
.pp-table th,.pp-table td{padding:12px 16px;text-align:start;border:1px solid rgba(244,246,252,.1)}
.pp-table th{background:rgba(107,176,224,.1);color:#6BB0E0;font-weight:600;font-size:13px;white-space:nowrap}
.pp-table td{color:rgba(244,246,252,.7);line-height:1.6}
.pp-table tr:hover td{background:rgba(244,246,252,.02)}
.pp-var{color:#6BB0E0;font-weight:500}
.pp-table-wrap{overflow-x:auto;margin:16px 0 24px}
.pp-table-wrap .pp-table{margin:0}
.pp-pending{display:none}
@media(max-width:600px){
  .pp-meta{grid-template-columns:1fr;gap:4px 0}
  .pp-meta dt{margin-top:12px}
  .pp-table{font-size:13px}
  .pp-table th,.pp-table td{padding:10px 12px}
}
</style>
</helmet>

@endverbatim
@include('partials.header', ['linkPrefix' => '/', 'hideDemo' => true])
@verbatim

<div style="position:relative;min-height:100vh">
<div style="position:fixed;inset:0;z-index:0;background-image:url('assets/brand-pattern.png');background-size:900px auto;background-repeat:repeat;opacity:.06;pointer-events:none"></div>
<div class="pp-wrap" style="position:relative;z-index:1">

  <!-- Header -->
  <header class="pp-header">
    <h1 data-en="Terms of Service" data-ar="شروط الخدمة">Terms of Service</h1>
    <p data-en="The agreement governing use of the Clauze platform" data-ar="الاتفاقية المنظِّمة لاستخدام منصة كلوز">The agreement governing use of the Clauze platform</p>
    <dl class="pp-meta" style="display:none">
      <div class="pp-pending">
        <dt data-en="Effective date" data-ar="تاريخ السريان">Effective date</dt>
        <dd class="pp-var" id="pp-effective-date"></dd>
      </div>
      <div class="pp-pending">
        <dt data-en="Provider" data-ar="مقدّم الخدمة">Provider</dt>
        <dd class="pp-var" id="pp-controller"></dd>
      </div>
      <div class="pp-pending">
        <dt data-en="Registration" data-ar="السجل التجاري">Registration</dt>
        <dd class="pp-var" id="pp-registration"></dd>
      </div>
      <div class="pp-pending">
        <dt data-en="Registered office" data-ar="المقر النظامي">Registered office</dt>
        <dd class="pp-var" id="pp-address"></dd>
      </div>
      <div class="pp-pending">
        <dt data-en="Governing law" data-ar="النظام الحاكم">Governing law</dt>
        <dd class="pp-var" id="pp-governing-law"></dd>
      </div>
    </dl>
  </header>

  <!-- Body -->
  <div class="pp-body">

    <!-- 1. AGREEMENT AND ACCEPTANCE -->
    <h2 data-en="1. Agreement and Acceptance" data-ar="1. الاتفاقية والقبول">1. Agreement and Acceptance</h2>

    <p data-en='<strong>1.1</strong> These Terms of Service ("Terms") form a binding agreement between Clauze ("Clauze", "we", "us") and the organisation that subscribes to the Clauze platform ("Customer", "you").' data-ar='<strong>1-1</strong> تُشكّل شروط الخدمة هذه ("الشروط") اتفاقية ملزمة بين كلوز ("كلوز" أو "نحن") والمنشأة المشتركة في منصة كلوز ("العميل" أو "أنت").'><strong>1.1</strong> These Terms of Service ("Terms") form a binding agreement between Clauze ("Clauze", "we", "us") and the organisation that subscribes to the Clauze platform ("Customer", "you").</p>

    <p data-en="<strong>1.2</strong> By executing an Order Form, clicking to accept, or accessing or using the platform, you agree to these Terms. If you are accepting on behalf of an organisation, you represent that you have authority to bind that organisation." data-ar="<strong>1-2</strong> بتوقيعك على أمر الشراء، أو نقرك على زر القبول، أو دخولك المنصة أو استخدامك إياها، تكون قد قبلت هذه الشروط. وإذا كنت تقبلها نيابةً عن منشأة، فإنك تُقرّ بأنك مخوّل بإلزامها."><strong>1.2</strong> By executing an Order Form, clicking to accept, or accessing or using the platform, you agree to these Terms. If you are accepting on behalf of an organisation, you represent that you have authority to bind that organisation.</p>

    <p data-en='<strong>1.3</strong> These Terms, together with each Order Form, the Data Processing Agreement, the Privacy Policy, and any Service Level Agreement, form the entire agreement between the parties (the "Agreement").' data-ar='<strong>1-3</strong> تُشكّل هذه الشروط، مع كل أمر شراء، واتفاقية معالجة البيانات، وسياسة الخصوصية، وأي اتفاقية مستوى خدمة، كامل الاتفاق بين الطرفين ("الاتفاقية").'><strong>1.3</strong> These Terms, together with each Order Form, the Data Processing Agreement, the Privacy Policy, and any Service Level Agreement, form the entire agreement between the parties (the "Agreement").</p>

    <p data-en="<strong>1.4</strong> Order of precedence in the event of conflict: (a) the Order Form; (b) the Data Processing Agreement; (c) these Terms; (d) the Privacy Policy; (e) any other referenced document." data-ar="<strong>1-4</strong> ترتيب الأولوية عند التعارض: (أ) أمر الشراء؛ (ب) اتفاقية معالجة البيانات؛ (ج) هذه الشروط؛ (د) سياسة الخصوصية؛ (هـ) أي وثيقة أخرى محال إليها."><strong>1.4</strong> Order of precedence in the event of conflict: (a) the Order Form; (b) the Data Processing Agreement; (c) these Terms; (d) the Privacy Policy; (e) any other referenced document.</p>

    <div class="pp-note" data-en="If you do not agree to these Terms, do not access or use the platform." data-ar="إذا لم توافق على هذه الشروط، فلا تدخل المنصة ولا تستخدمها.">If you do not agree to these Terms, do not access or use the platform.</div>

    <!-- 2. DEFINITIONS -->
    <h2 data-en="2. Definitions" data-ar="2. التعريفات">2. Definitions</h2>
    <div class="pp-table-wrap">
      <table class="pp-table">
        <thead><tr>
          <th data-en="Term" data-ar="المصطلح">Term</th>
          <th data-en="Meaning" data-ar="المدلول">Meaning</th>
        </tr></thead>
        <tbody>
          <tr><td data-en="Agreement" data-ar="الاتفاقية">Agreement</td><td data-en="These Terms together with the Order Form, DPA, Privacy Policy, and any SLA." data-ar="هذه الشروط مع أمر الشراء واتفاقية معالجة البيانات وسياسة الخصوصية وأي اتفاقية مستوى خدمة.">These Terms together with the Order Form, DPA, Privacy Policy, and any SLA.</td></tr>
          <tr><td data-en="Authorised User" data-ar="المستخدم المصرّح له">Authorised User</td><td data-en="An individual permitted by Customer to access the platform under Customer's subscription, including employees, contractors, and agents." data-ar="الفرد الذي يأذن له العميل بالوصول إلى المنصة ضمن اشتراكه، ويشمل الموظفين والمتعاقدين والوكلاء.">An individual permitted by Customer to access the platform under Customer's subscription, including employees, contractors, and agents.</td></tr>
          <tr><td data-en="Customer Content" data-ar="محتوى العميل">Customer Content</td><td data-en="Documents, contracts, files, data, text, and other material uploaded to or generated within the platform by or on behalf of Customer." data-ar="المستندات والعقود والملفات والبيانات والنصوص وسائر المواد التي يرفعها العميل (أو تُرفع نيابةً عنه) إلى المنصة أو تُنشأ داخلها.">Documents, contracts, files, data, text, and other material uploaded to or generated within the platform by or on behalf of Customer.</td></tr>
          <tr><td data-en="Documentation" data-ar="الوثائق الفنية">Documentation</td><td data-en="The user guides, technical specifications, and help materials made available by Clauze." data-ar="أدلة المستخدم والمواصفات التقنية ومواد المساعدة التي تتيحها كلوز.">The user guides, technical specifications, and help materials made available by Clauze.</td></tr>
          <tr><td data-en="Order Form" data-ar="أمر الشراء">Order Form</td><td data-en="A document executed by the parties specifying the subscription plan, term, fees, user limits, and hosting region." data-ar="وثيقة يوقّعها الطرفان تحدّد خطة الاشتراك ومدته ورسومه وحدود المستخدمين وإقليم الاستضافة.">A document executed by the parties specifying the subscription plan, term, fees, user limits, and hosting region.</td></tr>
          <tr><td data-en="Output" data-ar="المخرجات">Output</td><td data-en="Any content generated by the platform in response to Customer input, including drafted documents, summaries, analyses, and AI-generated responses." data-ar="كل محتوى تولّده المنصة استجابةً لمدخلات العميل، ويشمل المستندات المصاغة والملخصات والتحليلات وإجابات الذكاء الاصطناعي.">Any content generated by the platform in response to Customer input, including drafted documents, summaries, analyses, and AI-generated responses.</td></tr>
          <tr><td data-en="Platform" data-ar="المنصة">Platform</td><td data-en="The Clauze software-as-a-service application, including all features, APIs, and Documentation." data-ar="تطبيق كلوز المقدَّم بوصفه برمجيةً كخدمة، بما يشمل جميع خصائصه وواجهات برمجته ووثائقه الفنية.">The Clauze software-as-a-service application, including all features, APIs, and Documentation.</td></tr>
          <tr><td data-en="Subscription Term" data-ar="مدة الاشتراك">Subscription Term</td><td data-en="The period specified in the Order Form during which Customer is licensed to use the platform." data-ar="المدة المحددة في أمر الشراء التي يكون العميل خلالها مرخصًا باستخدام المنصة.">The period specified in the Order Form during which Customer is licensed to use the platform.</td></tr>
          <tr><td data-en="DPA" data-ar="اتفاقية معالجة البيانات">DPA</td><td data-en="The Data Processing Agreement executed between the parties." data-ar="اتفاقية معالجة البيانات المبرمة بين الطرفين.">The Data Processing Agreement executed between the parties.</td></tr>
        </tbody>
      </table>
    </div>

    <!-- 3. THE PLATFORM AND LICENCE -->
    <h2 data-en="3. The Platform and Licence" data-ar="3. المنصة والترخيص">3. The Platform and Licence</h2>

    <h3 data-en="3.1 Licence grant" data-ar="3-1 منح الترخيص">3.1 Licence grant</h3>
    <p data-en="Subject to the Agreement and payment of all fees, Clauze grants Customer a non-exclusive, non-transferable, non-sublicensable right during the Subscription Term to access and use the platform for Customer's internal business purposes, up to the user limits specified in the Order Form." data-ar="مع مراعاة أحكام الاتفاقية وسداد كامل الرسوم، تمنح كلوز العميل حقًّا غير حصري وغير قابل للتنازل عنه أو الترخيص من الباطن، خلال مدة الاشتراك، للدخول إلى المنصة واستخدامها لأغراض أعماله الداخلية، وفي حدود عدد المستخدمين المبيَّن في أمر الشراء.">Subject to the Agreement and payment of all fees, Clauze grants Customer a non-exclusive, non-transferable, non-sublicensable right during the Subscription Term to access and use the platform for Customer's internal business purposes, up to the user limits specified in the Order Form.</p>

    <h3 data-en="3.2 Authorised Users" data-ar="3-2 المستخدمون المصرّح لهم">3.2 Authorised Users</h3>
    <p data-en="<strong>(a)</strong> Customer is responsible for all activity under its account and for ensuring Authorised Users comply with the Agreement." data-ar="<strong>(أ)</strong> يتحمّل العميل مسؤولية كل نشاط يجري عبر حسابه، ومسؤولية التزام المستخدمين المصرّح لهم بأحكام الاتفاقية."><strong>(a)</strong> Customer is responsible for all activity under its account and for ensuring Authorised Users comply with the Agreement.</p>
    <p data-en="<strong>(b)</strong> Account credentials must not be shared. Each Authorised User requires a distinct account." data-ar="<strong>(ب)</strong> لا يجوز مشاركة بيانات الدخول، ويلزم لكل مستخدم مصرّح له حساب مستقل."><strong>(b)</strong> Account credentials must not be shared. Each Authorised User requires a distinct account.</p>
    <p data-en="<strong>(c)</strong> Customer must promptly notify Clauze of any unauthorised access or suspected credential compromise at security@clauze.ai." data-ar="<strong>(ج)</strong> يلتزم العميل بإشعار كلوز فورًا بأي دخول غير مصرح به أو اشتباه في تسرّب بيانات الدخول عبر security@clauze.ai."><strong>(c)</strong> Customer must promptly notify Clauze of any unauthorised access or suspected credential compromise at security@clauze.ai.</p>
    <p data-en="<strong>(d)</strong> Customer may reassign a user seat to a replacement individual, but may not rotate a single seat among multiple concurrent users." data-ar="<strong>(د)</strong> يجوز للعميل نقل مقعد مستخدم إلى فرد بديل، ولا يجوز تداول المقعد الواحد بين عدة مستخدمين في آنٍ واحد."><strong>(d)</strong> Customer may reassign a user seat to a replacement individual, but may not rotate a single seat among multiple concurrent users.</p>

    <h3 data-en="3.3 Counterparty and external access" data-ar="3-3 وصول الأطراف الخارجية">3.3 Counterparty and external access</h3>
    <p data-en="Where the platform permits Customer to invite external parties to a shared workspace, data room, or document exchange, Customer is responsible for the appropriateness of that invitation and for the content shared. External participants access the platform under Customer's subscription and Customer remains responsible for their use." data-ar="حيث تتيح المنصة للعميل دعوة أطراف خارجية إلى مساحة عمل مشتركة أو غرفة بيانات أو تبادل مستندات، يتحمّل العميل مسؤولية ملاءمة تلك الدعوة ومسؤولية المحتوى المشارَك. ويدخل المشاركون الخارجيون المنصة ضمن اشتراك العميل، ويظل العميل مسؤولًا عن استخدامهم.">Where the platform permits Customer to invite external parties to a shared workspace, data room, or document exchange, Customer is responsible for the appropriateness of that invitation and for the content shared. External participants access the platform under Customer's subscription and Customer remains responsible for their use.</p>

    <h3 data-en="3.4 Service changes" data-ar="3-4 تعديل الخدمة">3.4 Service changes</h3>
    <p data-en="Clauze may modify, enhance, or discontinue features of the platform. Where a change would materially reduce core functionality, Clauze will provide at least thirty (30) days' prior notice. Where a material reduction is not remedied, Customer may terminate the affected subscription and receive a pro-rata refund of prepaid fees for the unused period." data-ar="يجوز لكلوز تعديل خصائص المنصة أو تطويرها أو إيقافها. وحين يترتب على التعديل انتقاص جوهري في الوظائف الأساسية، تُشعِر كلوز العميل قبل ثلاثين (30) يومًا على الأقل. وإذا لم يُعالَج الانتقاص الجوهري، جاز للعميل إنهاء الاشتراك المتأثر واسترداد الرسوم المدفوعة مقدمًا عن المدة غير المستخدمة بالتناسب.">Clauze may modify, enhance, or discontinue features of the platform. Where a change would materially reduce core functionality, Clauze will provide at least thirty (30) days' prior notice. Where a material reduction is not remedied, Customer may terminate the affected subscription and receive a pro-rata refund of prepaid fees for the unused period.</p>

    <!-- 4. FEES AND PAYMENT -->
    <h2 data-en="4. Fees and Payment" data-ar="4. الرسوم والسداد">4. Fees and Payment</h2>

    <h3 data-en="4.1 Fees" data-ar="4-1 الرسوم">4.1 Fees</h3>
    <p data-en="Customer shall pay the fees specified in the Order Form. Unless otherwise stated, fees are exclusive of value added tax, withholding tax, and any other applicable taxes, which are Customer's responsibility." data-ar="يلتزم العميل بسداد الرسوم المحددة في أمر الشراء. وما لم يُنص على خلاف ذلك، فإن الرسوم لا تشمل ضريبة القيمة المضافة ولا ضريبة الاستقطاع ولا أي ضرائب أخرى منطبقة، ويتحملها العميل.">Customer shall pay the fees specified in the Order Form. Unless otherwise stated, fees are exclusive of value added tax, withholding tax, and any other applicable taxes, which are Customer's responsibility.</p>

    <h3 data-en="4.2 Invoicing and payment" data-ar="4-2 الفوترة والسداد">4.2 Invoicing and payment</h3>
    <p data-en="<strong>(a)</strong> Fees are invoiced in advance for each billing period unless the Order Form states otherwise." data-ar="<strong>(أ)</strong> تُصدَر الفواتير مقدمًا عن كل دورة فوترة، ما لم ينص أمر الشراء على خلاف ذلك."><strong>(a)</strong> Fees are invoiced in advance for each billing period unless the Order Form states otherwise.</p>
    <p data-en="<strong>(b)</strong> Payment is due within thirty (30) days of the invoice date, unless a different period is specified in the Order Form." data-ar="<strong>(ب)</strong> يُستحق السداد خلال ثلاثين (30) يومًا من تاريخ الفاتورة، ما لم تُحدَّد مدة أخرى في أمر الشراء."><strong>(b)</strong> Payment is due within thirty (30) days of the invoice date, unless a different period is specified in the Order Form.</p>
    <p data-en="<strong>(c)</strong> Where Customer is subject to withholding tax obligations, Customer shall gross up payment so that Clauze receives the full invoiced amount." data-ar="<strong>(ج)</strong> إذا خضع العميل لالتزامات ضريبة الاستقطاع، وجب عليه زيادة قيمة السداد بحيث تستلم كلوز كامل المبلغ المفوتر."><strong>(c)</strong> Where Customer is subject to withholding tax obligations, Customer shall gross up payment so that Clauze receives the full invoiced amount.</p>

    <h3 data-en="4.3 Late payment" data-ar="4-3 التأخر في السداد">4.3 Late payment</h3>
    <p data-en="Where an invoice remains unpaid thirty (30) days after its due date, Clauze may suspend access under clause 11 after giving not less than ten (10) days' written notice. Suspension does not relieve Customer of the obligation to pay fees for the Subscription Term." data-ar="إذا ظلّت الفاتورة غير مسدَّدة بعد ثلاثين (30) يومًا من تاريخ استحقاقها، جاز لكلوز إيقاف الوصول وفق البند (11) بعد إشعار كتابي لا تقل مدته عن عشرة (10) أيام. ولا يُعفي الإيقاف العميلَ من التزامه بسداد رسوم مدة الاشتراك.">Where an invoice remains unpaid thirty (30) days after its due date, Clauze may suspend access under clause 11 after giving not less than ten (10) days' written notice. Suspension does not relieve Customer of the obligation to pay fees for the Subscription Term.</p>

    <div class="pp-note" data-en="Consistent with contracting practice in the Kingdom of Saudi Arabia, this Agreement does not provide for interest on late payment. Suspension of service and recovery of proven direct loss are the remedies available for non-payment." data-ar="اتساقًا مع الممارسة التعاقدية في المملكة العربية السعودية، لا تنص هذه الاتفاقية على فوائد تأخير. والجزاءات المتاحة عند عدم السداد هي إيقاف الخدمة والمطالبة بالضرر المباشر الثابت.">Consistent with contracting practice in the Kingdom of Saudi Arabia, this Agreement does not provide for interest on late payment. Suspension of service and recovery of proven direct loss are the remedies available for non-payment.</div>

    <h3 data-en="4.4 Fee changes" data-ar="4-4 تعديل الرسوم">4.4 Fee changes</h3>
    <p data-en="Clauze may adjust fees on renewal by giving not less than sixty (60) days' written notice before the end of the then-current Subscription Term. Fees will not change during a Subscription Term unless Customer adds users or modules." data-ar="يجوز لكلوز تعديل الرسوم عند التجديد بإشعار كتابي لا تقل مدته عن ستين (60) يومًا قبل انتهاء مدة الاشتراك الجارية. ولا تتغير الرسوم أثناء مدة الاشتراك ما لم يُضِف العميل مستخدمين أو وحدات.">Clauze may adjust fees on renewal by giving not less than sixty (60) days' written notice before the end of the then-current Subscription Term. Fees will not change during a Subscription Term unless Customer adds users or modules.</p>

    <h3 data-en="4.5 Non-refundable" data-ar="4-5 عدم قابلية الاسترداد">4.5 Non-refundable</h3>
    <p data-en="Except where these Terms expressly provide otherwise, fees are non-refundable and subscriptions cannot be cancelled mid-term for convenience." data-ar="باستثناء ما تنص عليه هذه الشروط صراحةً، فإن الرسوم غير قابلة للاسترداد، ولا يجوز إلغاء الاشتراك في أثناء مدته لمجرد الرغبة.">Except where these Terms expressly provide otherwise, fees are non-refundable and subscriptions cannot be cancelled mid-term for convenience.</p>

    <!-- 5. CUSTOMER CONTENT AND INTELLECTUAL PROPERTY -->
    <h2 data-en="5. Customer Content and Intellectual Property" data-ar="5. محتوى العميل والملكية الفكرية">5. Customer Content and Intellectual Property</h2>

    <h3 data-en="5.1 Customer owns its content" data-ar="5-1 ملكية العميل لمحتواه">5.1 Customer owns its content</h3>
    <p data-en="As between the parties, Customer retains all right, title, and interest in and to Customer Content. Nothing in the Agreement transfers ownership of Customer Content to Clauze." data-ar="يحتفظ العميل (فيما بين الطرفين) بكامل الحق والملكية والمصلحة في محتوى العميل. ولا ينقل أي حكم في الاتفاقية ملكية محتوى العميل إلى كلوز.">As between the parties, Customer retains all right, title, and interest in and to Customer Content. Nothing in the Agreement transfers ownership of Customer Content to Clauze.</p>

    <h3 data-en="5.2 Licence to Clauze" data-ar="5-2 الترخيص الممنوح لكلوز">5.2 Licence to Clauze</h3>
    <p data-en="Customer grants Clauze a limited, non-exclusive licence to host, store, process, transmit, and display Customer Content solely as necessary to provide the platform to Customer, to comply with law, and to enforce the Agreement. This licence terminates when Customer Content is deleted or the Agreement ends, subject to clause 12.4." data-ar="يمنح العميل كلوز ترخيصًا محدودًا غير حصري لاستضافة محتوى العميل وحفظه ومعالجته ونقله وعرضه، بالقدر اللازم لتقديم المنصة للعميل، وللامتثال للنظام، ولإنفاذ الاتفاقية. وينتهي هذا الترخيص بإتلاف محتوى العميل أو بانتهاء الاتفاقية، مع مراعاة البند (12-4).">Customer grants Clauze a limited, non-exclusive licence to host, store, process, transmit, and display Customer Content solely as necessary to provide the platform to Customer, to comply with law, and to enforce the Agreement. This licence terminates when Customer Content is deleted or the Agreement ends, subject to clause 12.4.</p>

    <h3 data-en="5.3 Output" data-ar="5-3 المخرجات">5.3 Output</h3>
    <p data-en="<strong>(a)</strong> As between the parties, Customer owns the Output generated from its Customer Content, subject to Clauze's underlying intellectual property rights in the platform." data-ar="<strong>(أ)</strong> يملك العميل (فيما بين الطرفين) المخرجات المولَّدة من محتواه، مع مراعاة حقوق كلوز الأصلية في الملكية الفكرية للمنصة."><strong>(a)</strong> As between the parties, Customer owns the Output generated from its Customer Content, subject to Clauze's underlying intellectual property rights in the platform.</p>
    <p data-en="<strong>(b)</strong> Output may not be unique. Clauze may generate similar or identical Output for other customers where inputs are similar. Customer receives no exclusivity over Output." data-ar="<strong>(ب)</strong> قد لا تكون المخرجات فريدة. وقد تولّد كلوز مخرجات مماثلة أو مطابقة لعملاء آخرين حين تتشابه المدخلات. ولا يكتسب العميل أي حصرية على المخرجات."><strong>(b)</strong> Output may not be unique. Clauze may generate similar or identical Output for other customers where inputs are similar. Customer receives no exclusivity over Output.</p>
    <p data-en="<strong>(c)</strong> Customer is responsible for reviewing Output before relying on it or providing it to any third party." data-ar="<strong>(ج)</strong> يتحمّل العميل مسؤولية مراجعة المخرجات قبل الاعتماد عليها أو تسليمها لأي طرف ثالث."><strong>(c)</strong> Customer is responsible for reviewing Output before relying on it or providing it to any third party.</p>

    <h3 data-en="5.4 Customer warranties regarding content" data-ar="5-4 إقرارات العميل بشأن المحتوى">5.4 Customer warranties regarding content</h3>
    <p data-en="Customer represents and warrants that:" data-ar="يُقرّ العميل ويضمن ما يأتي:">Customer represents and warrants that:</p>
    <ul>
      <li data-en="It has all rights necessary to upload Customer Content to the platform and to grant the licence in clause 5.2;" data-ar="أنه يملك كل الحقوق اللازمة لرفع محتوى العميل إلى المنصة ولمنح الترخيص الوارد في البند (5-2)؛">It has all rights necessary to upload Customer Content to the platform and to grant the licence in clause 5.2;</li>
      <li data-en="Customer Content does not infringe any third-party intellectual property, privacy, or confidentiality right;" data-ar="أن محتوى العميل لا ينتهك أي حق ملكية فكرية أو خصوصية أو سرية لطرف ثالث؛">Customer Content does not infringe any third-party intellectual property, privacy, or confidentiality right;</li>
      <li data-en="Where Customer Content contains personal data, Customer has a lawful basis for processing it and has given any notice required by applicable data protection law;" data-ar="أنه (حيث يتضمن محتوى العميل بيانات شخصية) يملك أساسًا نظاميًا لمعالجتها، وقد وجّه أي إشعار يوجبه نظام حماية البيانات المنطبق؛">Where Customer Content contains personal data, Customer has a lawful basis for processing it and has given any notice required by applicable data protection law;</li>
      <li data-en="Customer Content does not violate any applicable law or regulation." data-ar="أن محتوى العميل لا يخالف أي نظام أو لائحة منطبقة.">Customer Content does not violate any applicable law or regulation.</li>
    </ul>

    <h3 data-en="5.5 Clauze intellectual property" data-ar="5-5 الملكية الفكرية لكلوز">5.5 Clauze intellectual property</h3>
    <p data-en="Clauze retains all right, title, and interest in and to the platform, the Documentation, its software, models, methodologies, and all improvements to them. No rights are granted to Customer except as expressly set out in clause 3.1." data-ar="تحتفظ كلوز بكامل الحق والملكية والمصلحة في المنصة والوثائق الفنية وبرمجياتها ونماذجها ومنهجياتها وكل تحسين يطرأ عليها. ولا يُمنح العميل أي حقوق عدا ما نُصّ عليه صراحةً في البند (3-1).">Clauze retains all right, title, and interest in and to the platform, the Documentation, its software, models, methodologies, and all improvements to them. No rights are granted to Customer except as expressly set out in clause 3.1.</p>

    <h3 data-en="5.6 Feedback" data-ar="5-6 الملاحظات">5.6 Feedback</h3>
    <p data-en="Where Customer provides suggestions, feature requests, or feedback, Clauze may use it without restriction or obligation. Feedback is provided voluntarily and creates no confidentiality obligation, provided it does not contain Customer Content or confidential information." data-ar="حين يقدّم العميل اقتراحات أو طلبات خصائص أو ملاحظات، يجوز لكلوز استخدامها دون قيد أو التزام. وتُقدَّم هذه الملاحظات طوعًا ولا تُنشئ التزامًا بالسرية، بشرط ألا تتضمن محتوى العميل أو معلوماته السرية.">Where Customer provides suggestions, feature requests, or feedback, Clauze may use it without restriction or obligation. Feedback is provided voluntarily and creates no confidentiality obligation, provided it does not contain Customer Content or confidential information.</p>

    <!-- 6. ARTIFICIAL INTELLIGENCE — NATURE AND LIMITATIONS -->
    <h2 data-en="6. Artificial Intelligence, Nature and Limitations" data-ar="6. الذكاء الاصطناعي، طبيعته وحدوده">6. Artificial Intelligence, Nature and Limitations</h2>

    <div class="pp-note" data-en="This clause is fundamental to the Agreement. Customer acknowledges each provision in this clause 6 as a condition of using the platform." data-ar="هذا البند جوهري في الاتفاقية. ويُقرّ العميل بكل حكم من أحكامه بوصفه شرطًا لاستخدام المنصة.">This clause is fundamental to the Agreement. Customer acknowledges each provision in this clause 6 as a condition of using the platform.</div>

    <h3 data-en="6.1 Clauze is not a law firm" data-ar="6-1 كلوز ليست مكتب محاماة">6.1 Clauze is not a law firm</h3>
    <p data-en="<strong>(a)</strong> Clauze is a software platform. Clauze is not a law firm, does not practise law, and does not provide legal advice, legal opinions, or legal representation in any jurisdiction." data-ar="<strong>(أ)</strong> كلوز منصة برمجية. وهي ليست مكتب محاماة، ولا تمارس المحاماة، ولا تقدّم استشارة قانونية ولا رأيًا قانونيًا ولا تمثيلًا قانونيًا في أي ولاية قضائية."><strong>(a)</strong> Clauze is a software platform. Clauze is not a law firm, does not practise law, and does not provide legal advice, legal opinions, or legal representation in any jurisdiction.</p>
    <p data-en="<strong>(b)</strong> No attorney-client relationship, advocate-client relationship, or equivalent professional relationship arises between Clauze and Customer or any Authorised User." data-ar="<strong>(ب)</strong> لا تنشأ بين كلوز والعميل أو أي مستخدم مصرّح له علاقة محامٍ بموكّل ولا أي علاقة مهنية مماثلة."><strong>(b)</strong> No attorney-client relationship, advocate-client relationship, or equivalent professional relationship arises between Clauze and Customer or any Authorised User.</p>
    <p data-en="<strong>(c)</strong> No communication through the platform is protected by legal professional privilege by reason of passing through the platform. Customer is responsible for maintaining privilege over its own communications." data-ar="<strong>(ج)</strong> لا تكتسب أي مراسلة عبر المنصة حصانة السرية المهنية لمجرد مرورها بالمنصة. ويتحمّل العميل مسؤولية الحفاظ على سرية مراسلاته."><strong>(c)</strong> No communication through the platform is protected by legal professional privilege by reason of passing through the platform. Customer is responsible for maintaining privilege over its own communications.</p>

    <h3 data-en="6.2 Output is informational" data-ar="6-2 المخرجات ذات طابع معلوماتي">6.2 Output is informational</h3>
    <p data-en="<strong>(a)</strong> Output is generated by automated systems and is provided for informational purposes only." data-ar="<strong>(أ)</strong> تُولَّد المخرجات بأنظمة آلية، وتُقدَّم لأغراض معلوماتية فقط."><strong>(a)</strong> Output is generated by automated systems and is provided for informational purposes only.</p>
    <p data-en="<strong>(b)</strong> Output must be reviewed by a qualified legal professional before being relied upon, executed, filed, or provided to any third party." data-ar="<strong>(ب)</strong> يجب أن يراجع المخرجاتِ مختصٌّ قانوني مؤهل قبل الاعتماد عليها أو توقيعها أو إيداعها أو تسليمها لأي طرف ثالث."><strong>(b)</strong> Output must be reviewed by a qualified legal professional before being relied upon, executed, filed, or provided to any third party.</p>
    <p data-en="<strong>(c)</strong> Customer retains sole responsibility for all decisions made and documents executed, whether or not informed by Output." data-ar="<strong>(ج)</strong> يتحمّل العميل وحده مسؤولية كل قرار يتخذه وكل مستند يوقّعه، سواء استند إلى المخرجات أو لم يستند."><strong>(c)</strong> Customer retains sole responsibility for all decisions made and documents executed, whether or not informed by Output.</p>

    <h3 data-en="6.3 Accuracy limitations" data-ar="6-3 حدود الدقة">6.3 Accuracy limitations</h3>
    <p data-en="Customer acknowledges that AI systems have inherent limitations. Output may be incomplete, inaccurate, out of date, or unsuitable for a particular purpose. Clauze does not warrant that Output is correct, complete, or fit for any specific use." data-ar="يُقرّ العميل بأن لأنظمة الذكاء الاصطناعي حدودًا ملازمة لها، وأن المخرجات قد تكون ناقصة أو غير دقيقة أو غير محدَّثة أو غير ملائمة لغرض بعينه. ولا تضمن كلوز صحة المخرجات ولا اكتمالها ولا صلاحيتها لأي استخدام محدد.">Customer acknowledges that AI systems have inherent limitations. Output may be incomplete, inaccurate, out of date, or unsuitable for a particular purpose. Clauze does not warrant that Output is correct, complete, or fit for any specific use.</p>
    <p data-en="Where the platform indicates that a question is not answered by available source material, that indication is itself information. Customer should not treat the absence of an answer as confirmation that no relevant provision exists." data-ar="وحيث تُبيّن المنصة أن المادة المصدرية المتاحة لا تجيب عن السؤال، فإن هذا البيان معلومة في ذاته، ولا يجوز للعميل أن يعدّ غياب الإجابة تأكيدًا لعدم وجود حكم ذي صلة.">Where the platform indicates that a question is not answered by available source material, that indication is itself information. Customer should not treat the absence of an answer as confirmation that no relevant provision exists.</p>

    <h3 data-en="6.4 Regulatory content" data-ar="6-4 المحتوى التنظيمي">6.4 Regulatory content</h3>
    <p data-en="Where the platform references legislation, regulation, or regulatory guidance, Customer acknowledges that such material changes over time and that the platform may not reflect the most current position. Customer must verify the current position with the competent authority or qualified counsel before relying on it." data-ar="حيث تُحيل المنصة إلى أنظمة أو لوائح أو تعليمات تنظيمية، يُقرّ العميل بأن هذه المواد تتغير مع الزمن وأن المنصة قد لا تعكس أحدث وضع. وعلى العميل التحقق من الوضع الراهن لدى الجهة المختصة أو لدى محامٍ مؤهل قبل الاعتماد عليه.">Where the platform references legislation, regulation, or regulatory guidance, Customer acknowledges that such material changes over time and that the platform may not reflect the most current position. Customer must verify the current position with the competent authority or qualified counsel before relying on it.</p>

    <h3 data-en="6.5 No training on Customer Content" data-ar="6-5 عدم التدريب على محتوى العميل">6.5 No training on Customer Content</h3>
    <p data-en="Clauze does not use Customer Content to train, fine-tune, or improve any artificial intelligence model that is shared with or accessible to any other customer. Where Customer expressly elects in writing to enable a tenant-specific model derived from its own content, that model remains logically isolated to Customer's tenant." data-ar="لا تستخدم كلوز محتوى العميل في تدريب أي نموذج ذكاء اصطناعي مشترك أو ضبطه أو تحسينه، ولا في أي نموذج يمكن لعميل آخر الوصول إليه. وإذا اختار العميل كتابةً تفعيل نموذج مشتق من محتواه الخاص، ظلّ ذلك النموذج معزولًا منطقيًا داخل نطاق العميل.">Clauze does not use Customer Content to train, fine-tune, or improve any artificial intelligence model that is shared with or accessible to any other customer. Where Customer expressly elects in writing to enable a tenant-specific model derived from its own content, that model remains logically isolated to Customer's tenant.</p>

    <h3 data-en="6.6 Automated decisions" data-ar="6-6 القرارات الآلية">6.6 Automated decisions</h3>
    <p data-en="The platform does not make decisions producing legal or similarly significant effects concerning individuals on a solely automated basis. Where Customer configures the platform to support such decisions, Customer is responsible for ensuring appropriate human review and for compliance with applicable law." data-ar="لا تتخذ المنصة قرارات ذات أثر نظامي أو أثر مماثل في الأهمية تجاه الأفراد استنادًا إلى المعالجة الآلية وحدها. وإذا هيّأ العميل المنصة لمساندة مثل هذه القرارات، تحمّل مسؤولية ضمان المراجعة البشرية الملائمة والامتثال للنظام المنطبق.">The platform does not make decisions producing legal or similarly significant effects concerning individuals on a solely automated basis. Where Customer configures the platform to support such decisions, Customer is responsible for ensuring appropriate human review and for compliance with applicable law.</p>

    <h3 data-en="6.7 Professional responsibility" data-ar="6-7 المسؤولية المهنية">6.7 Professional responsibility</h3>
    <p data-en="Customer is responsible for ensuring that its use of the platform complies with the professional conduct rules applicable to its personnel, including any rules governing the use of technology in legal practice, supervision of work product, and client confidentiality." data-ar="يتحمّل العميل مسؤولية ضمان توافق استخدامه للمنصة مع قواعد السلوك المهني المنطبقة على منسوبيه، بما في ذلك القواعد المنظِّمة لاستخدام التقنية في الممارسة القانونية، والإشراف على ناتج العمل، وسرية بيانات الموكّلين.">Customer is responsible for ensuring that its use of the platform complies with the professional conduct rules applicable to its personnel, including any rules governing the use of technology in legal practice, supervision of work product, and client confidentiality.</p>

    <!-- 7. ACCEPTABLE USE -->
    <h2 data-en="7. Acceptable Use" data-ar="7. الاستخدام المقبول">7. Acceptable Use</h2>

    <h3 data-en="7.1 Restrictions" data-ar="7-1 القيود">7.1 Restrictions</h3>
    <p data-en="Customer shall not, and shall not permit any Authorised User or third party to:" data-ar="لا يجوز للعميل (ولا يجوز له أن يسمح لأي مستخدم مصرّح له أو طرف ثالث) بما يأتي:">Customer shall not, and shall not permit any Authorised User or third party to:</p>
    <ul>
      <li data-en="Reverse engineer, decompile, disassemble, or attempt to derive the source code, models, or algorithms of the platform;" data-ar="الهندسة العكسية للمنصة أو فك ترجمتها أو تفكيكها أو محاولة استخلاص شفرتها المصدرية أو نماذجها أو خوارزمياتها؛">Reverse engineer, decompile, disassemble, or attempt to derive the source code, models, or algorithms of the platform;</li>
      <li data-en="Copy, modify, translate, or create derivative works of the platform;" data-ar="نسخ المنصة أو تعديلها أو ترجمتها أو إنشاء أعمال مشتقة منها؛">Copy, modify, translate, or create derivative works of the platform;</li>
      <li data-en="Resell, sublicense, rent, lease, or provide the platform as a service bureau to any third party, except as expressly permitted in the Order Form;" data-ar="إعادة بيع المنصة أو الترخيص من الباطن بها أو تأجيرها أو تقديمها بوصفها خدمة لطرف ثالث، عدا ما يجيزه أمر الشراء صراحةً؛">Resell, sublicense, rent, lease, or provide the platform as a service bureau to any third party, except as expressly permitted in the Order Form;</li>
      <li data-en="Use the platform to build or train a competing product or service;" data-ar="استخدام المنصة لبناء منتج أو خدمة منافسة أو تدريبها؛">Use the platform to build or train a competing product or service;</li>
      <li data-en="Circumvent or attempt to circumvent any access control, usage limit, rate limit, or security measure;" data-ar="تجاوز أي ضابط وصول أو حد استخدام أو حد معدل أو تدبير أمني أو محاولة تجاوزه؛">Circumvent or attempt to circumvent any access control, usage limit, rate limit, or security measure;</li>
      <li data-en="Access or attempt to access any other customer's tenant, data, or content;" data-ar="الوصول إلى نطاق أي عميل آخر أو بياناته أو محتواه أو محاولة الوصول إليه؛">Access or attempt to access any other customer's tenant, data, or content;</li>
      <li data-en="Upload malicious code, or use the platform to distribute malware or conduct any attack;" data-ar="رفع شفرات ضارة، أو استخدام المنصة في نشر برمجيات خبيثة أو تنفيذ أي هجوم؛">Upload malicious code, or use the platform to distribute malware or conduct any attack;</li>
      <li data-en="Use the platform in violation of any applicable law, sanctions regime, or export control;" data-ar="استخدام المنصة على نحو يخالف أي نظام منطبق أو نظام عقوبات أو ضوابط تصدير؛">Use the platform in violation of any applicable law, sanctions regime, or export control;</li>
      <li data-en="Upload content that is unlawful, defamatory, or that infringes the rights of any person;" data-ar="رفع محتوى غير مشروع أو مسيء أو ينتهك حقوق الغير؛">Upload content that is unlawful, defamatory, or that infringes the rights of any person;</li>
      <li data-en="Use automated means to extract data from the platform at a scale or rate that degrades service for others;" data-ar="استخدام وسائل آلية لاستخراج البيانات من المنصة بحجم أو معدل يُضعف الخدمة للآخرين؛">Use automated means to extract data from the platform at a scale or rate that degrades service for others;</li>
      <li data-en="Remove, obscure, or alter any proprietary notice on the platform or Documentation." data-ar="إزالة أي إشعار ملكية على المنصة أو وثائقها الفنية أو حجبه أو تعديله.">Remove, obscure, or alter any proprietary notice on the platform or Documentation.</li>
    </ul>

    <h3 data-en="7.2 Sanctions and export compliance" data-ar="7-2 العقوبات وضوابط التصدير">7.2 Sanctions and export compliance</h3>
    <p data-en="Customer represents that it is not, and is not owned or controlled by, any person subject to sanctions administered by the United Nations, the Kingdom of Saudi Arabia, the United States, the European Union, or the United Kingdom, and that it will not make the platform available to any such person or in any embargoed territory." data-ar="يُقرّ العميل بأنه ليس خاضعًا لأي عقوبات تفرضها الأمم المتحدة أو المملكة العربية السعودية أو الولايات المتحدة أو الاتحاد الأوروبي أو المملكة المتحدة، وليس مملوكًا أو خاضعًا لسيطرة شخص كذلك، وأنه لن يتيح المنصة لأي شخص من هؤلاء ولا في أي إقليم محظور.">Customer represents that it is not, and is not owned or controlled by, any person subject to sanctions administered by the United Nations, the Kingdom of Saudi Arabia, the United States, the European Union, or the United Kingdom, and that it will not make the platform available to any such person or in any embargoed territory.</p>

    <h3 data-en="7.3 Monitoring" data-ar="7-3 المراقبة">7.3 Monitoring</h3>
    <p data-en="Clauze does not routinely monitor Customer Content. Clauze may access Customer Content only where necessary to provide support at Customer's request, to investigate a suspected breach of this clause 7, to address a security incident, or where required by law. Support access is time-bound, logged in Customer's audit trail, and requires Customer administrator approval where technically supported." data-ar="لا تراقب كلوز محتوى العميل بصورة اعتيادية. ولا يجوز لها الوصول إليه إلا بالقدر اللازم لتقديم الدعم بناءً على طلب العميل، أو للتحقق من اشتباه في مخالفة هذا البند، أو لمعالجة حادثة أمنية، أو حيث يوجب النظام ذلك. ويكون وصول الدعم محدد المدة، ومقيَّدًا في سجل مراجعة العميل، ومشروطًا بموافقة مسؤول العميل حيث يكون ذلك مدعومًا تقنيًا.">Clauze does not routinely monitor Customer Content. Clauze may access Customer Content only where necessary to provide support at Customer's request, to investigate a suspected breach of this clause 7, to address a security incident, or where required by law. Support access is time-bound, logged in Customer's audit trail, and requires Customer administrator approval where technically supported.</p>

    <!-- 8. CONFIDENTIALITY -->
    <h2 data-en="8. Confidentiality" data-ar="8. السرية">8. Confidentiality</h2>

    <h3 data-en="8.1 Definition" data-ar="8-1 التعريف">8.1 Definition</h3>
    <p data-en='"Confidential Information" means non-public information disclosed by one party to the other that is marked confidential or that a reasonable person would understand to be confidential given its nature and the circumstances of disclosure. Customer Content is Customer&rsquo;s Confidential Information. The platform, Documentation, and pricing are Clauze&rsquo;s Confidential Information.' data-ar='يُقصد بـ"المعلومات السرية" المعلومات غير العامة التي يفصح عنها أحد الطرفين للآخر ووُسمت بأنها سرية، أو التي يفهم الشخص المعتاد من طبيعتها وظروف الإفصاح عنها أنها سرية. ويُعد محتوى العميل معلومات سرية للعميل. وتُعد المنصة ووثائقها الفنية وأسعارها معلومات سرية لكلوز.'>"Confidential Information" means non-public information disclosed by one party to the other that is marked confidential or that a reasonable person would understand to be confidential given its nature and the circumstances of disclosure. Customer Content is Customer's Confidential Information. The platform, Documentation, and pricing are Clauze's Confidential Information.</p>

    <h3 data-en="8.2 Obligations" data-ar="8-2 الالتزامات">8.2 Obligations</h3>
    <p data-en="Each party shall: (a) protect the other's Confidential Information with at least the degree of care it applies to its own, and not less than reasonable care; (b) use it solely to perform the Agreement; (c) disclose it only to personnel and advisers who need to know and are bound by equivalent obligations." data-ar="يلتزم كل طرف بما يأتي: (أ) حماية المعلومات السرية للطرف الآخر بعناية لا تقل عن العناية التي يوليها لمعلوماته، وبالحد الأدنى بعناية معقولة؛ (ب) استخدامها لتنفيذ الاتفاقية حصرًا؛ (ج) عدم الإفصاح عنها إلا لمنسوبيه ومستشاريه ممن تقتضي ضرورة عملهم ذلك ويخضعون لالتزامات مكافئة.">Each party shall: (a) protect the other's Confidential Information with at least the degree of care it applies to its own, and not less than reasonable care; (b) use it solely to perform the Agreement; (c) disclose it only to personnel and advisers who need to know and are bound by equivalent obligations.</p>

    <h3 data-en="8.3 Exclusions" data-ar="8-3 الاستثناءات">8.3 Exclusions</h3>
    <p data-en="Confidentiality obligations do not apply to information that: (a) is or becomes public without breach of the Agreement; (b) was lawfully known to the receiving party before disclosure; (c) is independently developed without use of the disclosing party's Confidential Information; (d) is lawfully received from a third party without restriction." data-ar="لا تسري التزامات السرية على المعلومات التي: (أ) تصبح عامة دون إخلال بالاتفاقية؛ (ب) كانت معلومة للطرف المتلقّي مشروعًا قبل الإفصاح؛ (ج) طُوّرت باستقلالية دون الاستعانة بالمعلومات السرية للطرف المُفصِح؛ (د) تلقّاها الطرف المتلقّي مشروعًا من طرف ثالث دون قيد.">Confidentiality obligations do not apply to information that: (a) is or becomes public without breach of the Agreement; (b) was lawfully known to the receiving party before disclosure; (c) is independently developed without use of the disclosing party's Confidential Information; (d) is lawfully received from a third party without restriction.</p>

    <h3 data-en="8.4 Compelled disclosure" data-ar="8-4 الإفصاح الملزَم">8.4 Compelled disclosure</h3>
    <p data-en="A party may disclose Confidential Information where required by law or a competent authority, provided that (unless legally prohibited) it gives prompt notice to the other party and reasonable assistance in seeking protective treatment, and discloses only the minimum required." data-ar="يجوز لأي طرف الإفصاح عن المعلومات السرية متى أوجب النظام أو جهة مختصة ذلك، بشرط أن يُشعِر الطرف الآخر فورًا (ما لم يمنعه النظام) وأن يقدّم له عونًا معقولًا في السعي إلى معاملة حمائية، وألا يُفصح إلا عن الحد الأدنى المطلوب.">A party may disclose Confidential Information where required by law or a competent authority, provided that (unless legally prohibited) it gives prompt notice to the other party and reasonable assistance in seeking protective treatment, and discloses only the minimum required.</p>

    <h3 data-en="8.5 Duration" data-ar="8-5 المدة">8.5 Duration</h3>
    <p data-en="Confidentiality obligations survive termination for three (3) years, save that obligations in respect of Customer Content and trade secrets continue for as long as the information retains its confidential character." data-ar="تظل التزامات السرية سارية لمدة ثلاث (3) سنوات بعد الإنهاء، عدا الالتزامات المتعلقة بمحتوى العميل والأسرار التجارية فتستمر ما دامت المعلومة محتفظة بطابعها السري.">Confidentiality obligations survive termination for three (3) years, save that obligations in respect of Customer Content and trade secrets continue for as long as the information retains its confidential character.</p>

    <!-- 9. DATA PROTECTION AND SECURITY -->
    <h2 data-en="9. Data Protection and Security" data-ar="9. حماية البيانات والأمن">9. Data Protection and Security</h2>

    <h3 data-en="9.1 Roles" data-ar="9-1 الصفات">9.1 Roles</h3>
    <p data-en="Where Clauze processes personal data contained within Customer Content, Customer is the controller and Clauze is the processor. The DPA governs that processing and is incorporated into the Agreement. Where the DPA conflicts with these Terms in respect of personal data, the DPA prevails." data-ar="حيث تعالج كلوز بيانات شخصية واردة ضمن محتوى العميل، يكون العميل جهة التحكم وتكون كلوز جهة المعالجة. وتنظّم اتفاقية معالجة البيانات تلك المعالجة، وتُعد جزءًا لا يتجزأ من الاتفاقية. وعند تعارضها مع هذه الشروط في شأن البيانات الشخصية، تُقدَّم اتفاقية معالجة البيانات.">Where Clauze processes personal data contained within Customer Content, Customer is the controller and Clauze is the processor. The DPA governs that processing and is incorporated into the Agreement. Where the DPA conflicts with these Terms in respect of personal data, the DPA prevails.</p>

    <h3 data-en="9.2 Compliance" data-ar="9-2 الامتثال">9.2 Compliance</h3>
    <p data-en="Each party shall comply with the data protection laws applicable to it, including the Personal Data Protection Law of the Kingdom of Saudi Arabia and its Implementing Regulations, and equivalent laws in other jurisdictions where the parties operate." data-ar="يلتزم كل طرف بأنظمة حماية البيانات المنطبقة عليه، بما في ذلك نظام حماية البيانات الشخصية في المملكة العربية السعودية ولائحته التنفيذية، وما يماثله من أنظمة في الولايات القضائية التي يعمل فيها الطرفان.">Each party shall comply with the data protection laws applicable to it, including the Personal Data Protection Law of the Kingdom of Saudi Arabia and its Implementing Regulations, and equivalent laws in other jurisdictions where the parties operate.</p>

    <h3 data-en="9.3 Hosting region" data-ar="9-3 إقليم الاستضافة">9.3 Hosting region</h3>
    <p data-en="The hosting region specified in the Order Form is a contractual commitment. Clauze shall not relocate Customer Content outside that region without Customer's prior written consent and a controlled migration process." data-ar="يُعد إقليم الاستضافة المحدد في أمر الشراء التزامًا تعاقديًا. ولا يجوز لكلوز نقل محتوى العميل خارج ذلك الإقليم دون موافقة العميل الخطية المسبقة وعبر إجراء ترحيل منضبط.">The hosting region specified in the Order Form is a contractual commitment. Clauze shall not relocate Customer Content outside that region without Customer's prior written consent and a controlled migration process.</p>

    <h3 data-en="9.4 Security" data-ar="9-4 الأمن">9.4 Security</h3>
    <p data-en="Clauze shall maintain technical and organisational measures appropriate to the risk, as described in the DPA and the Privacy Policy. Clauze shall notify Customer without undue delay after becoming aware of a personal data breach affecting Customer Content." data-ar="تلتزم كلوز بالمحافظة على تدابير تقنية وتنظيمية تتناسب مع درجة المخاطر، وفق ما هو مبيَّن في اتفاقية معالجة البيانات وسياسة الخصوصية. وتُشعِر كلوز العميل دون تأخير غير مبرر بعد علمها بأي تسرب لبيانات شخصية يمس محتوى العميل.">Clauze shall maintain technical and organisational measures appropriate to the risk, as described in the DPA and the Privacy Policy. Clauze shall notify Customer without undue delay after becoming aware of a personal data breach affecting Customer Content.</p>

    <h3 data-en="9.5 Customer responsibilities" data-ar="9-5 مسؤوليات العميل">9.5 Customer responsibilities</h3>
    <p data-en="Customer is responsible for: configuring access permissions appropriately; managing Authorised User accounts and revoking access promptly on departure; determining what content is uploaded; and ensuring it has a lawful basis for processing personal data contained in Customer Content." data-ar="يتحمّل العميل مسؤولية ضبط صلاحيات الوصول على النحو الملائم، وإدارة حسابات المستخدمين المصرّح لهم وإلغاء صلاحياتهم فور انتهاء علاقتهم، وتحديد المحتوى الذي يُرفع، والتحقق من وجود أساس نظامي لمعالجة البيانات الشخصية الواردة في محتوى العميل.">Customer is responsible for: configuring access permissions appropriately; managing Authorised User accounts and revoking access promptly on departure; determining what content is uploaded; and ensuring it has a lawful basis for processing personal data contained in Customer Content.</p>

    <!-- 10. WARRANTIES AND DISCLAIMERS -->
    <h2 data-en="10. Warranties and Disclaimers" data-ar="10. الإقرارات وإخلاء المسؤولية">10. Warranties and Disclaimers</h2>

    <h3 data-en="10.1 Mutual warranties" data-ar="10-1 إقرارات متبادلة">10.1 Mutual warranties</h3>
    <p data-en="Each party warrants that it has full corporate power and authority to enter into and perform the Agreement, and that the person executing it is duly authorised." data-ar="يُقرّ كل طرف بأنه يتمتع بكامل الأهلية والصلاحية لإبرام الاتفاقية وتنفيذها، وأن الموقّع عنه مخوّل حسب الأصول.">Each party warrants that it has full corporate power and authority to enter into and perform the Agreement, and that the person executing it is duly authorised.</p>

    <h3 data-en="10.2 Clauze warranties" data-ar="10-2 إقرارات كلوز">10.2 Clauze warranties</h3>
    <p data-en="Clauze warrants that: (a) the platform will perform materially in accordance with the Documentation during the Subscription Term; (b) it will provide the platform with reasonable skill and care; (c) it will not knowingly introduce malicious code into the platform." data-ar="تُقرّ كلوز بما يأتي: (أ) أن المنصة ستؤدي أداءً مطابقًا جوهريًا لوثائقها الفنية خلال مدة الاشتراك؛ (ب) أنها ستقدّم المنصة بمهارة وعناية معقولتين؛ (ج) أنها لن تُدخل عن علم أي شفرة ضارة في المنصة.">Clauze warrants that: (a) the platform will perform materially in accordance with the Documentation during the Subscription Term; (b) it will provide the platform with reasonable skill and care; (c) it will not knowingly introduce malicious code into the platform.</p>
    <p data-en="Customer's exclusive remedy for breach of clause 10.2(a) is for Clauze to use commercially reasonable efforts to correct the non-conformity, or (where it cannot do so within a reasonable period) for Customer to terminate the affected subscription and receive a pro-rata refund of prepaid fees for the unused period." data-ar="والتعويض الحصري للعميل عند الإخلال بالبند (10-2/أ) هو أن تبذل كلوز جهودًا تجارية معقولة لتصحيح عدم المطابقة، أو (إن تعذّر ذلك خلال مدة معقولة) أن يُنهي العميل الاشتراك المتأثر ويسترد الرسوم المدفوعة مقدمًا عن المدة غير المستخدمة بالتناسب.">Customer's exclusive remedy for breach of clause 10.2(a) is for Clauze to use commercially reasonable efforts to correct the non-conformity, or (where it cannot do so within a reasonable period) for Customer to terminate the affected subscription and receive a pro-rata refund of prepaid fees for the unused period.</p>

    <h3 data-en="10.3 Disclaimers" data-ar="10-3 إخلاء المسؤولية">10.3 Disclaimers</h3>
    <div class="pp-note" data-en='EXCEPT AS EXPRESSLY SET OUT IN CLAUSE 10.2, THE PLATFORM AND ALL OUTPUT ARE PROVIDED "AS IS". TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW, CLAUZE DISCLAIMS ALL OTHER WARRANTIES, WHETHER EXPRESS, IMPLIED, OR STATUTORY, INCLUDING ANY WARRANTY OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, ACCURACY, OR NON-INFRINGEMENT.' data-ar='باستثناء ما نُصّ عليه صراحةً في البند (10-2)، تُقدَّم المنصة وجميع المخرجات "كما هي". وإلى أقصى حد يجيزه النظام المنطبق، تُخلي كلوز مسؤوليتها عن سائر الإقرارات الصريحة أو الضمنية أو النظامية، بما في ذلك أي إقرار بالقابلية للتسويق أو الملاءمة لغرض معين أو الدقة أو عدم التعدي.'>EXCEPT AS EXPRESSLY SET OUT IN CLAUSE 10.2, THE PLATFORM AND ALL OUTPUT ARE PROVIDED "AS IS". TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW, CLAUZE DISCLAIMS ALL OTHER WARRANTIES, WHETHER EXPRESS, IMPLIED, OR STATUTORY, INCLUDING ANY WARRANTY OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, ACCURACY, OR NON-INFRINGEMENT.</div>
    <p data-en="Without limiting the foregoing, Clauze does not warrant that: (a) the platform will be uninterrupted or error-free; (b) Output will be accurate, complete, or suitable for any particular purpose; (c) the platform will identify every risk, conflict, obligation, or issue in Customer Content; (d) the platform reflects the current state of any law or regulation." data-ar="ودون الإخلال بما تقدّم، لا تضمن كلوز: (أ) أن تعمل المنصة دون انقطاع أو خطأ؛ (ب) أن تكون المخرجات دقيقة أو مكتملة أو ملائمة لغرض بعينه؛ (ج) أن تكشف المنصة كل خطر أو تعارض أو التزام أو إشكال في محتوى العميل؛ (د) أن تعكس المنصة الوضع الراهن لأي نظام أو لائحة.">Without limiting the foregoing, Clauze does not warrant that: (a) the platform will be uninterrupted or error-free; (b) Output will be accurate, complete, or suitable for any particular purpose; (c) the platform will identify every risk, conflict, obligation, or issue in Customer Content; (d) the platform reflects the current state of any law or regulation.</p>
    <p data-en="Clause 6 (Artificial Intelligence, Nature and Limitations) applies in full to all Output." data-ar="ويسري البند (6) (الذكاء الاصطناعي: طبيعته وحدوده) بكامله على جميع المخرجات.">Clause 6 (Artificial Intelligence, Nature and Limitations) applies in full to all Output.</p>

    <!-- 11. SUSPENSION -->
    <h2 data-en="11. Suspension" data-ar="11. إيقاف الخدمة">11. Suspension</h2>
    <p data-en="Clauze may suspend Customer's access, in whole or in part, where:" data-ar="يجوز لكلوز إيقاف وصول العميل كليًّا أو جزئيًّا في الحالات الآتية:">Clauze may suspend Customer's access, in whole or in part, where:</p>
    <ul>
      <li data-en="An invoice remains unpaid thirty (30) days after its due date, following not less than ten (10) days' written notice;" data-ar="بقاء فاتورة غير مسدَّدة بعد ثلاثين (30) يومًا من تاريخ استحقاقها، بعد إشعار كتابي لا تقل مدته عن عشرة (10) أيام؛">An invoice remains unpaid thirty (30) days after its due date, following not less than ten (10) days' written notice;</li>
      <li data-en="Continued access presents a material security risk to the platform or to other customers;" data-ar="إذا مثّل استمرار الوصول خطرًا أمنيًا جوهريًا على المنصة أو على عملاء آخرين؛">Continued access presents a material security risk to the platform or to other customers;</li>
      <li data-en="Customer's use breaches clause 7 (Acceptable Use) in a manner that is material and, where capable of remedy, is not remedied within ten (10) days of notice;" data-ar="إذا خالف استخدام العميل البند (7) مخالفة جوهرية ولم تُعالَج (حيث تقبل المعالجة) خلال عشرة (10) أيام من الإشعار؛">Customer's use breaches clause 7 (Acceptable Use) in a manner that is material and, where capable of remedy, is not remedied within ten (10) days of notice;</li>
      <li data-en="Suspension is required by law or by order of a competent authority." data-ar="إذا اقتضى النظام أو أمر جهة مختصة الإيقاف.">Suspension is required by law or by order of a competent authority.</li>
    </ul>
    <p data-en="Clauze shall give as much notice as is reasonably practicable and shall limit suspension to what is necessary. Suspension for security reasons may take effect immediately. Clauze shall restore access promptly once the cause is resolved. Customer retains the right to export Customer Content during any suspension." data-ar="وتلتزم كلوز بتوجيه أطول إشعار ممكن عمليًا، وبقصر الإيقاف على القدر اللازم. ويجوز أن يسري الإيقاف لأسباب أمنية فور صدوره. وتعيد كلوز الوصول فور زوال السبب. ويحتفظ العميل بحقه في تصدير محتواه خلال مدة الإيقاف.">Clauze shall give as much notice as is reasonably practicable and shall limit suspension to what is necessary. Suspension for security reasons may take effect immediately. Clauze shall restore access promptly once the cause is resolved. Customer retains the right to export Customer Content during any suspension.</p>

    <!-- 12. TERM AND TERMINATION -->
    <h2 data-en="12. Term and Termination" data-ar="12. المدة والإنهاء">12. Term and Termination</h2>

    <h3 data-en="12.1 Term" data-ar="12-1 المدة">12.1 Term</h3>
    <p data-en="The Agreement commences on the effective date of the first Order Form and continues until all subscriptions have expired or been terminated. Each subscription runs for the Subscription Term specified in its Order Form and renews automatically for successive periods of equal length unless either party gives written notice of non-renewal not less than sixty (60) days before the end of the then-current term." data-ar="تبدأ الاتفاقية من تاريخ سريان أول أمر شراء وتستمر حتى انتهاء جميع الاشتراكات أو إنهائها. ويسري كل اشتراك لمدة الاشتراك المحددة في أمر الشراء الخاص به، ويُجدَّد تلقائيًا لمدد متتالية مماثلة ما لم يُخطر أحد الطرفين الآخر كتابيًا بعدم رغبته في التجديد قبل ستين (60) يومًا على الأقل من انتهاء المدة الجارية.">The Agreement commences on the effective date of the first Order Form and continues until all subscriptions have expired or been terminated. Each subscription runs for the Subscription Term specified in its Order Form and renews automatically for successive periods of equal length unless either party gives written notice of non-renewal not less than sixty (60) days before the end of the then-current term.</p>

    <h3 data-en="12.2 Termination for cause" data-ar="12-2 الإنهاء لسبب">12.2 Termination for cause</h3>
    <p data-en="Either party may terminate the Agreement or an affected subscription with immediate effect by written notice where the other party: (a) commits a material breach that is not remedied within thirty (30) days of written notice; (b) commits a material breach incapable of remedy; (c) becomes insolvent, enters liquidation, or has a receiver or administrator appointed." data-ar="يجوز لأي من الطرفين إنهاء الاتفاقية أو الاشتراك المتأثر بأثر فوري بإشعار كتابي إذا: (أ) ارتكب الطرف الآخر مخالفة جوهرية لم يعالجها خلال ثلاثين (30) يومًا من الإشعار الكتابي؛ (ب) ارتكب مخالفة جوهرية لا تقبل المعالجة؛ (ج) أُعسر أو دخل في تصفية أو عُيّن عليه حارس قضائي أو مصفٍّ.">Either party may terminate the Agreement or an affected subscription with immediate effect by written notice where the other party: (a) commits a material breach that is not remedied within thirty (30) days of written notice; (b) commits a material breach incapable of remedy; (c) becomes insolvent, enters liquidation, or has a receiver or administrator appointed.</p>

    <h3 data-en="12.3 Effect of termination" data-ar="12-3 آثار الإنهاء">12.3 Effect of termination</h3>
    <p data-en="On termination: (a) all licences granted under clause 3.1 end immediately; (b) Customer shall cease using the platform; (c) fees accrued to the date of termination become due; (d) where Customer terminates for Clauze's material breach, Clauze shall refund prepaid fees for the unused period on a pro-rata basis." data-ar="عند الإنهاء: (أ) تنتهي فورًا جميع التراخيص الممنوحة بموجب البند (3-1)؛ (ب) يتوقف العميل عن استخدام المنصة؛ (ج) تُستحق الرسوم المتراكمة حتى تاريخ الإنهاء؛ (د) إذا أنهى العميل الاتفاقية لمخالفة جوهرية من كلوز، ردّت كلوز الرسوم المدفوعة مقدمًا عن المدة غير المستخدمة بالتناسب.">On termination: (a) all licences granted under clause 3.1 end immediately; (b) Customer shall cease using the platform; (c) fees accrued to the date of termination become due; (d) where Customer terminates for Clauze's material breach, Clauze shall refund prepaid fees for the unused period on a pro-rata basis.</p>

    <h3 data-en="12.4 Data export and deletion" data-ar="12-4 تصدير البيانات وإتلافها">12.4 Data export and deletion</h3>
    <p data-en="<strong>(a)</strong> For a period of thirty (30) days after termination, Clauze shall make Customer Content available for export in a structured, commonly used format, together with the register and audit trail." data-ar="<strong>(أ)</strong> تُتيح كلوز محتوى العميل للتصدير بصيغة مهيكلة شائعة الاستخدام لمدة ثلاثين (30) يومًا بعد الإنهاء، مع السجل ومسار المراجعة."><strong>(a)</strong> For a period of thirty (30) days after termination, Clauze shall make Customer Content available for export in a structured, commonly used format, together with the register and audit trail.</p>
    <p data-en="<strong>(b)</strong> After that period, Clauze shall delete Customer Content in accordance with the DPA, save where retention is required by law." data-ar="<strong>(ب)</strong> وبعد انقضاء تلك المدة، تُتلف كلوز محتوى العميل وفق اتفاقية معالجة البيانات، عدا ما يوجب النظام الاحتفاظ به."><strong>(b)</strong> After that period, Clauze shall delete Customer Content in accordance with the DPA, save where retention is required by law.</p>
    <p data-en="<strong>(c)</strong> Where deletion is not immediately possible for technical reasons (for example data held in encrypted backups) Clauze shall isolate it from further processing and delete it on the next scheduled backup rotation." data-ar="<strong>(ج)</strong> وحيث يتعذر الإتلاف الفوري لأسباب تقنية (كالبيانات المحفوظة ضمن نسخ احتياطية مشفّرة) تعزلها كلوز عن أي معالجة لاحقة وتتلفها عند دورة التدوير التالية."><strong>(c)</strong> Where deletion is not immediately possible for technical reasons (for example data held in encrypted backups) Clauze shall isolate it from further processing and delete it on the next scheduled backup rotation.</p>

    <h3 data-en="12.5 Survival" data-ar="12-5 الأحكام الباقية">12.5 Survival</h3>
    <p data-en="Clauses 2, 5.1, 5.5, 5.6, 6, 8, 10.3, 13, 14, 15, and 16, and any provision that by its nature should survive, continue after termination." data-ar="تبقى البنود (2) و(5-1) و(5-5) و(5-6) و(6) و(8) و(10-3) و(13) و(14) و(15) و(16) سارية بعد الإنهاء، وكذلك كل حكم تقتضي طبيعته البقاء.">Clauses 2, 5.1, 5.5, 5.6, 6, 8, 10.3, 13, 14, 15, and 16, and any provision that by its nature should survive, continue after termination.</p>

    <!-- 13. LIMITATION OF LIABILITY -->
    <h2 data-en="13. Limitation of Liability" data-ar="13. تحديد المسؤولية">13. Limitation of Liability</h2>

    <h3 data-en="13.1 Excluded losses" data-ar="13-1 الأضرار المستثناة">13.1 Excluded losses</h3>
    <p data-en="To the maximum extent permitted by applicable law, neither party is liable to the other for any indirect, incidental, special, consequential, or punitive loss, or for loss of profit, revenue, business, goodwill, anticipated savings, or data, however arising, whether in contract, tort, or otherwise, even if advised of the possibility." data-ar="إلى أقصى حد يجيزه النظام المنطبق، لا يكون أي من الطرفين مسؤولًا تجاه الآخر عن أي ضرر غير مباشر أو عرضي أو خاص أو تبعي أو عقابي، ولا عن فوات الربح أو الإيراد أو العمل أو السمعة أو الوفورات المتوقعة أو فقد البيانات، أيًّا كان سبب نشوئه، سواء أكان في إطار العقد أم المسؤولية التقصيرية أم غيرهما، حتى مع العلم بإمكان وقوعه.">To the maximum extent permitted by applicable law, neither party is liable to the other for any indirect, incidental, special, consequential, or punitive loss, or for loss of profit, revenue, business, goodwill, anticipated savings, or data, however arising, whether in contract, tort, or otherwise, even if advised of the possibility.</p>

    <h3 data-en="13.2 Liability cap" data-ar="13-2 سقف المسؤولية">13.2 Liability cap</h3>
    <p data-en="Subject to clause 13.3, each party's total aggregate liability arising out of or in connection with the Agreement in any twelve (12) month period shall not exceed the total fees paid or payable by Customer under the Agreement in the twelve (12) months immediately preceding the event giving rise to the claim." data-ar="مع مراعاة البند (13-3)، لا تتجاوز المسؤولية الإجمالية لأي من الطرفين الناشئة عن الاتفاقية أو المتصلة بها خلال أي مدة اثني عشر (12) شهرًا مجموعَ الرسوم المدفوعة أو المستحقة من العميل بموجب الاتفاقية خلال الاثني عشر (12) شهرًا السابقة مباشرةً للواقعة المنشئة للمطالبة.">Subject to clause 13.3, each party's total aggregate liability arising out of or in connection with the Agreement in any twelve (12) month period shall not exceed the total fees paid or payable by Customer under the Agreement in the twelve (12) months immediately preceding the event giving rise to the claim.</p>

    <h3 data-en="13.3 Exclusions from the cap" data-ar="13-3 الاستثناءات من السقف">13.3 Exclusions from the cap</h3>
    <p data-en="Nothing in the Agreement limits or excludes liability for: (a) death or personal injury caused by negligence; (b) fraud or fraudulent misrepresentation; (c) Customer's obligation to pay fees; (d) either party's indemnity obligations under clause 14; (e) breach of clause 8 (Confidentiality); (f) any liability that cannot be limited or excluded under applicable law." data-ar="لا يحدّ أي حكم في الاتفاقية من المسؤولية عن الآتي ولا يستثنيها: (أ) الوفاة أو الإصابة الجسدية الناشئة عن الإهمال؛ (ب) الغش أو التغرير الاحتيالي؛ (ج) التزام العميل بسداد الرسوم؛ (د) التزامات التعويض بموجب البند (14)؛ (هـ) مخالفة البند (8) الخاص بالسرية؛ (و) أي مسؤولية لا يجيز النظام المنطبق تحديدها أو استثناءها.">Nothing in the Agreement limits or excludes liability for: (a) death or personal injury caused by negligence; (b) fraud or fraudulent misrepresentation; (c) Customer's obligation to pay fees; (d) either party's indemnity obligations under clause 14; (e) breach of clause 8 (Confidentiality); (f) any liability that cannot be limited or excluded under applicable law.</p>

    <h3 data-en="13.4 Output-related loss" data-ar="13-4 الأضرار المتصلة بالمخرجات">13.4 Output-related loss</h3>
    <p data-en="Given clause 6, and to the maximum extent permitted by applicable law, Clauze is not liable for any loss arising from Customer's reliance on Output without independent review by a qualified legal professional." data-ar="نظرًا لأحكام البند (6)، وإلى أقصى حد يجيزه النظام المنطبق، لا تكون كلوز مسؤولة عن أي ضرر ينشأ عن اعتماد العميل على المخرجات دون مراجعة مستقلة من مختصٍّ قانوني مؤهل.">Given clause 6, and to the maximum extent permitted by applicable law, Clauze is not liable for any loss arising from Customer's reliance on Output without independent review by a qualified legal professional.</p>

    <h3 data-en="13.5 Basis of the bargain" data-ar="13-5 أساس التعاقد">13.5 Basis of the bargain</h3>
    <p data-en="The parties acknowledge that the limitations in this clause 13 are a fundamental basis of the bargain and are reflected in the fees, and that they would not have entered into the Agreement without them." data-ar="يُقرّ الطرفان بأن القيود الواردة في هذا البند أساس جوهري للتعاقد وأنها منعكسة في الرسوم، وأنهما ما كانا ليبرما الاتفاقية بدونها.">The parties acknowledge that the limitations in this clause 13 are a fundamental basis of the bargain and are reflected in the fees, and that they would not have entered into the Agreement without them.</p>

    <!-- 14. INDEMNITIES -->
    <h2 data-en="14. Indemnities" data-ar="14. التعويضات">14. Indemnities</h2>

    <h3 data-en="14.1 Clauze indemnity" data-ar="14-1 تعويض كلوز">14.1 Clauze indemnity</h3>
    <p data-en="Clauze shall defend Customer against any third-party claim that the platform, as provided by Clauze and used in accordance with the Agreement, infringes that third party's intellectual property rights, and shall pay damages finally awarded or amounts agreed in settlement." data-ar="تلتزم كلوز بالدفاع عن العميل في أي مطالبة من طرف ثالث بأن المنصة (كما قدّمتها كلوز واستُخدمت وفق الاتفاقية) تنتهك حقوق الملكية الفكرية لذلك الطرف، وبسداد التعويضات المحكوم بها نهائيًا أو المبالغ المتفق عليها في التسوية.">Clauze shall defend Customer against any third-party claim that the platform, as provided by Clauze and used in accordance with the Agreement, infringes that third party's intellectual property rights, and shall pay damages finally awarded or amounts agreed in settlement.</p>
    <p data-en="This indemnity does not apply to claims arising from: (a) Customer Content; (b) modification of the platform by anyone other than Clauze; (c) use of the platform in combination with anything not supplied by Clauze where the claim would not have arisen but for that combination; (d) use in breach of the Agreement." data-ar="ولا يسري هذا التعويض على المطالبات الناشئة عن: (أ) محتوى العميل؛ (ب) تعديل المنصة من غير كلوز؛ (ج) استخدام المنصة مقترنةً بشيء لم تورّده كلوز حيث ما كانت المطالبة لتنشأ لولا ذلك الاقتران؛ (د) الاستخدام المخالف للاتفاقية.">This indemnity does not apply to claims arising from: (a) Customer Content; (b) modification of the platform by anyone other than Clauze; (c) use of the platform in combination with anything not supplied by Clauze where the claim would not have arisen but for that combination; (d) use in breach of the Agreement.</p>
    <p data-en="Where an infringement claim arises or is likely, Clauze may at its option procure the right for Customer to continue using the platform, modify it to be non-infringing, or terminate the affected subscription and refund prepaid fees for the unused period." data-ar="وعند نشوء مطالبة تعدٍّ أو ترجيح نشوئها، يجوز لكلوز (باختيارها) أن تحصل للعميل على حق مواصلة الاستخدام، أو أن تعدّل المنصة بما يزيل التعدي، أو أن تنهي الاشتراك المتأثر وتردّ الرسوم المدفوعة مقدمًا عن المدة غير المستخدمة.">Where an infringement claim arises or is likely, Clauze may at its option procure the right for Customer to continue using the platform, modify it to be non-infringing, or terminate the affected subscription and refund prepaid fees for the unused period.</p>

    <h3 data-en="14.2 Customer indemnity" data-ar="14-2 تعويض العميل">14.2 Customer indemnity</h3>
    <p data-en="Customer shall defend Clauze against any third-party claim arising from: (a) Customer Content, including any claim that it infringes third-party rights or was uploaded without a lawful basis; (b) Customer's breach of clause 7 (Acceptable Use); (c) Customer's reliance on Output in breach of clause 6.2; and shall pay damages finally awarded or amounts agreed in settlement." data-ar="يلتزم العميل بالدفاع عن كلوز في أي مطالبة من طرف ثالث تنشأ عن: (أ) محتوى العميل، بما في ذلك أي ادعاء بانتهاكه حقوق الغير أو رفعه دون أساس نظامي؛ (ب) مخالفة العميل للبند (7) الخاص بالاستخدام المقبول؛ (ج) اعتماد العميل على المخرجات بالمخالفة للبند (6-2)؛ وبسداد التعويضات المحكوم بها نهائيًا أو المبالغ المتفق عليها في التسوية.">Customer shall defend Clauze against any third-party claim arising from: (a) Customer Content, including any claim that it infringes third-party rights or was uploaded without a lawful basis; (b) Customer's breach of clause 7 (Acceptable Use); (c) Customer's reliance on Output in breach of clause 6.2; and shall pay damages finally awarded or amounts agreed in settlement.</p>

    <h3 data-en="14.3 Indemnity procedure" data-ar="14-3 إجراءات التعويض">14.3 Indemnity procedure</h3>
    <p data-en="The indemnified party shall: (a) notify the indemnifying party promptly in writing; (b) give the indemnifying party sole control of the defence and settlement, save that no settlement imposing a non-financial obligation on the indemnified party may be agreed without its consent, not to be unreasonably withheld; (c) provide reasonable cooperation at the indemnifying party's expense." data-ar="يلتزم الطرف المُعوَّض بما يأتي: (أ) إشعار الطرف المُعوِّض كتابيًا فورًا؛ (ب) تمكينه من الانفراد بإدارة الدفاع والتسوية، على ألا يُبرم أي تسوية تفرض التزامًا غير مالي على الطرف المُعوَّض دون موافقته التي لا تُحجب دون سبب معقول؛ (ج) تقديم تعاون معقول على نفقة الطرف المُعوِّض.">The indemnified party shall: (a) notify the indemnifying party promptly in writing; (b) give the indemnifying party sole control of the defence and settlement, save that no settlement imposing a non-financial obligation on the indemnified party may be agreed without its consent, not to be unreasonably withheld; (c) provide reasonable cooperation at the indemnifying party's expense.</p>

    <!-- 15. GOVERNING LAW AND DISPUTE RESOLUTION -->
    <h2 data-en="15. Governing Law and Dispute Resolution" data-ar="15. النظام الحاكم وفض النزاعات">15. Governing Law and Dispute Resolution</h2>

    <h3 data-en="15.1 Governing law" data-ar="15-1 النظام الحاكم">15.1 Governing law</h3>
    <p data-en="The Agreement and any dispute arising out of or in connection with it, including non-contractual disputes, are governed by the applicable laws, including applicable principles of Islamic law where the Kingdom of Saudi Arabia is selected." data-ar="تخضع الاتفاقية وأي نزاع ينشأ عنها أو يتصل بها (بما في ذلك النزاعات غير التعاقدية) للأنظمة المنطبقة، بما تشمله من مبادئ الشريعة الإسلامية المنطبقة حيث تُختار المملكة العربية السعودية.">The Agreement and any dispute arising out of or in connection with it, including non-contractual disputes, are governed by the applicable laws, including applicable principles of Islamic law where the Kingdom of Saudi Arabia is selected.</p>

    <h3 data-en="15.2 Escalation" data-ar="15-2 التصعيد">15.2 Escalation</h3>
    <p data-en="Before commencing formal proceedings, the parties shall attempt in good faith to resolve any dispute by escalating it to senior management of each party for a period of thirty (30) days from written notice of the dispute." data-ar="قبل الشروع في أي إجراء رسمي، يسعى الطرفان بحسن نية إلى حل النزاع بتصعيده إلى الإدارة العليا لدى كل منهما لمدة ثلاثين (30) يومًا من تاريخ الإشعار الكتابي بالنزاع.">Before commencing formal proceedings, the parties shall attempt in good faith to resolve any dispute by escalating it to senior management of each party for a period of thirty (30) days from written notice of the dispute.</p>

    <h3 data-en="15.3 Arbitration" data-ar="15-3 التحكيم">15.3 Arbitration</h3>
    <p data-en="Any dispute not resolved under clause 15.2 shall be finally settled by arbitration under the Arbitration Rules of the Saudi Center for Commercial Arbitration (SCCA). The seat of arbitration shall be Riyadh, Kingdom of Saudi Arabia." data-ar="يُحسم أي نزاع لم يُحل وفق البند (15-2) حسمًا نهائيًا بالتحكيم وفق لوائح المركز السعودي للتحكيم التجاري. ويكون مقر التحكيم مدينة الرياض بالمملكة العربية السعودية.">Any dispute not resolved under clause 15.2 shall be finally settled by arbitration under the Arbitration Rules of the Saudi Center for Commercial Arbitration (SCCA). The seat of arbitration shall be Riyadh, Kingdom of Saudi Arabia.</p>

    <h3 data-en="15.4 Interim relief" data-ar="15-4 الإجراءات الوقتية">15.4 Interim relief</h3>
    <p data-en="Nothing in this clause prevents either party from applying to any court of competent jurisdiction for interim or injunctive relief, including to protect Confidential Information or intellectual property." data-ar="لا يمنع أي حكم في هذا البند أيًّا من الطرفين من اللجوء إلى أي محكمة مختصة لطلب إجراء وقتي أو تحفظي، بما في ذلك ما يلزم لحماية المعلومات السرية أو الملكية الفكرية.">Nothing in this clause prevents either party from applying to any court of competent jurisdiction for interim or injunctive relief, including to protect Confidential Information or intellectual property.</p>

    <h3 data-en="15.5 Prevailing language" data-ar="15-5 اللغة السائدة">15.5 Prevailing language</h3>
    <p data-en="These Terms are issued in Arabic and English. Where the Agreement is governed by the laws of the Kingdom of Saudi Arabia, the Arabic text prevails in the event of any conflict or inconsistency. Where another governing law is selected in the Order Form, the language specified in that Order Form prevails." data-ar="صدرت هذه الشروط باللغتين العربية والإنجليزية. وحيث تخضع الاتفاقية لأنظمة المملكة العربية السعودية، يسود النص العربي عند أي تعارض أو تناقض. وحيث يُختار نظام حاكم آخر في أمر الشراء، تسود اللغة المحددة في ذلك الأمر.">These Terms are issued in Arabic and English. Where the Agreement is governed by the laws of the Kingdom of Saudi Arabia, the Arabic text prevails in the event of any conflict or inconsistency. Where another governing law is selected in the Order Form, the language specified in that Order Form prevails.</p>

    <!-- 16. GENERAL -->
    <h2 data-en="16. General" data-ar="16. أحكام عامة">16. General</h2>

    <h3 data-en="16.1 Changes to these Terms" data-ar="16-1 تعديل هذه الشروط">16.1 Changes to these Terms</h3>
    <p data-en="Clauze may update these Terms from time to time. Where a change is material, Clauze shall give not less than thirty (30) days' written notice before it takes effect. Where Customer objects to a material change, Customer may terminate the affected subscription by written notice before the change takes effect and receive a pro-rata refund of prepaid fees for the unused period. Changes do not apply retroactively to the current Subscription Term where they materially reduce Customer's rights." data-ar="يجوز لكلوز تحديث هذه الشروط من وقت لآخر. وحين يكون التعديل جوهريًا، تُشعِر كلوز العميل كتابيًا قبل ثلاثين (30) يومًا على الأقل من نفاذه. وإذا اعترض العميل على تعديل جوهري، جاز له إنهاء الاشتراك المتأثر بإشعار كتابي قبل نفاذ التعديل واسترداد الرسوم المدفوعة مقدمًا عن المدة غير المستخدمة بالتناسب. ولا تسري التعديلات بأثر رجعي على مدة الاشتراك الجارية حيث تنتقص جوهريًا من حقوق العميل.">Clauze may update these Terms from time to time. Where a change is material, Clauze shall give not less than thirty (30) days' written notice before it takes effect. Where Customer objects to a material change, Customer may terminate the affected subscription by written notice before the change takes effect and receive a pro-rata refund of prepaid fees for the unused period. Changes do not apply retroactively to the current Subscription Term where they materially reduce Customer's rights.</p>

    <h3 data-en="16.2 Assignment" data-ar="16-2 التنازل">16.2 Assignment</h3>
    <p data-en="Neither party may assign or transfer the Agreement without the other's prior written consent, not to be unreasonably withheld, save that either party may assign to an affiliate or to a successor in connection with a merger, acquisition, or sale of substantially all assets, on written notice to the other." data-ar="لا يجوز لأي من الطرفين التنازل عن الاتفاقية أو نقلها دون موافقة الطرف الآخر الخطية المسبقة التي لا تُحجب دون سبب معقول، عدا التنازل لشركة تابعة أو لخلف في إطار اندماج أو استحواذ أو بيع جميع الأصول أو معظمها، بإشعار كتابي للطرف الآخر.">Neither party may assign or transfer the Agreement without the other's prior written consent, not to be unreasonably withheld, save that either party may assign to an affiliate or to a successor in connection with a merger, acquisition, or sale of substantially all assets, on written notice to the other.</p>

    <h3 data-en="16.3 Subcontracting" data-ar="16-3 التعاقد من الباطن">16.3 Subcontracting</h3>
    <p data-en="Clauze may engage subcontractors and sub-processors to provide the platform, and remains responsible for their performance. Sub-processors engaged to process personal data are governed by the DPA." data-ar="يجوز لكلوز الاستعانة بمتعاقدين من الباطن وجهات معالجة فرعية لتقديم المنصة، وتظل مسؤولة عن أدائهم. وتخضع جهات المعالجة الفرعية التي تعالج بيانات شخصية لاتفاقية معالجة البيانات.">Clauze may engage subcontractors and sub-processors to provide the platform, and remains responsible for their performance. Sub-processors engaged to process personal data are governed by the DPA.</p>

    <h3 data-en="16.4 Notices" data-ar="16-4 الإشعارات">16.4 Notices</h3>
    <p data-en="Notices under the Agreement shall be in writing and sent to the addresses specified in the Order Form, or to legal@clauze.ai in the case of Clauze. Notice is deemed given: on delivery if by hand; two (2) business days after posting if by recorded delivery; or on transmission if by email, provided no delivery failure notice is received." data-ar="تكون الإشعارات بموجب الاتفاقية كتابيةً وتُرسل إلى العناوين المحددة في أمر الشراء، أو إلى legal@clauze.ai بالنسبة لكلوز. ويُعد الإشعار قد وقع: عند التسليم إن كان باليد؛ أو بعد يومَي عمل (2) من الإرسال إن كان بالبريد المسجّل؛ أو عند الإرسال إن كان بالبريد الإلكتروني بشرط عدم ورود إشعار بفشل التسليم.">Notices under the Agreement shall be in writing and sent to the addresses specified in the Order Form, or to legal@clauze.ai in the case of Clauze. Notice is deemed given: on delivery if by hand; two (2) business days after posting if by recorded delivery; or on transmission if by email, provided no delivery failure notice is received.</p>

    <h3 data-en="16.5 Force majeure" data-ar="16-5 القوة القاهرة">16.5 Force majeure</h3>
    <p data-en="Neither party is liable for failure or delay in performance caused by an event beyond its reasonable control, including act of God, war, civil unrest, government action, epidemic, or failure of public telecommunications or utility networks. This clause does not excuse Customer's obligation to pay fees for services received. Where a force majeure event continues for more than sixty (60) days, either party may terminate the affected subscription on written notice." data-ar="لا يكون أي من الطرفين مسؤولًا عن إخفاق أو تأخر في التنفيذ بسبب واقعة خارجة عن سيطرته المعقولة، كالقضاء والقدر والحرب والاضطرابات الأهلية والإجراءات الحكومية والأوبئة وتعطّل شبكات الاتصالات أو المرافق العامة. ولا يُعفي هذا البند العميلَ من التزامه بسداد رسوم الخدمات المتلقّاة. وإذا استمرت واقعة القوة القاهرة أكثر من ستين (60) يومًا، جاز لأي من الطرفين إنهاء الاشتراك المتأثر بإشعار كتابي.">Neither party is liable for failure or delay in performance caused by an event beyond its reasonable control, including act of God, war, civil unrest, government action, epidemic, or failure of public telecommunications or utility networks. This clause does not excuse Customer's obligation to pay fees for services received. Where a force majeure event continues for more than sixty (60) days, either party may terminate the affected subscription on written notice.</p>

    <h3 data-en="16.6 Publicity" data-ar="16-6 الإعلان">16.6 Publicity</h3>
    <p data-en="Neither party may use the other's name, logo, or trade marks in publicity without prior written consent. Clauze shall not name Customer as a customer in marketing material without Customer's prior written consent." data-ar="لا يجوز لأي من الطرفين استخدام اسم الطرف الآخر أو شعاره أو علاماته التجارية في مواد إعلانية دون موافقة خطية مسبقة. ولا يجوز لكلوز ذكر العميل بوصفه عميلًا لها في موادها التسويقية دون موافقته الخطية المسبقة.">Neither party may use the other's name, logo, or trade marks in publicity without prior written consent. Clauze shall not name Customer as a customer in marketing material without Customer's prior written consent.</p>

    <h3 data-en="16.7 Entire agreement" data-ar="16-7 كامل الاتفاق">16.7 Entire agreement</h3>
    <p data-en="The Agreement constitutes the entire agreement between the parties and supersedes all prior discussions, proposals, and representations. Neither party has relied on any statement not set out in the Agreement. Nothing in this clause limits liability for fraudulent misrepresentation." data-ar="تُشكّل الاتفاقية كامل الاتفاق بين الطرفين وتحلّ محل جميع المناقشات والعروض والإفادات السابقة. ولم يعتمد أي من الطرفين على أي إفادة غير واردة في الاتفاقية. ولا يحدّ هذا البند من المسؤولية عن التغرير الاحتيالي.">The Agreement constitutes the entire agreement between the parties and supersedes all prior discussions, proposals, and representations. Neither party has relied on any statement not set out in the Agreement. Nothing in this clause limits liability for fraudulent misrepresentation.</p>

    <h3 data-en="16.8 Severability" data-ar="16-8 استقلال الأحكام">16.8 Severability</h3>
    <p data-en="If any provision is held invalid or unenforceable, it shall be modified to the minimum extent necessary to make it enforceable, or severed if modification is not possible, and the remaining provisions continue in full force." data-ar="إذا عُدّ أي حكم باطلًا أو غير قابل للنفاذ، عُدِّل بالقدر الأدنى اللازم لجعله نافذًا، أو فُصل إن تعذّر التعديل، وتبقى سائر الأحكام نافذة بكامل قوتها.">If any provision is held invalid or unenforceable, it shall be modified to the minimum extent necessary to make it enforceable, or severed if modification is not possible, and the remaining provisions continue in full force.</p>

    <h3 data-en="16.9 Waiver" data-ar="16-9 التنازل عن الحق">16.9 Waiver</h3>
    <p data-en="No failure or delay in exercising a right operates as a waiver, and no single or partial exercise prevents further exercise. A waiver is effective only if given in writing." data-ar="لا يُعد الإخفاق في ممارسة حق أو التأخر فيه تنازلًا عنه، ولا تمنع الممارسة الجزئية أو المنفردة ممارسته لاحقًا. ولا يكون التنازل نافذًا إلا إذا كان مكتوبًا.">No failure or delay in exercising a right operates as a waiver, and no single or partial exercise prevents further exercise. A waiver is effective only if given in writing.</p>

    <h3 data-en="16.10 No partnership" data-ar="16-10 انتفاء الشراكة">16.10 No partnership</h3>
    <p data-en="Nothing in the Agreement creates a partnership, joint venture, agency, or employment relationship between the parties." data-ar="لا يُنشئ أي حكم في الاتفاقية شراكة ولا مشروعًا مشتركًا ولا وكالة ولا علاقة عمل بين الطرفين.">Nothing in the Agreement creates a partnership, joint venture, agency, or employment relationship between the parties.</p>

    <h3 data-en="16.11 Third parties" data-ar="16-11 الغير">16.11 Third parties</h3>
    <p data-en="A person who is not a party to the Agreement has no right to enforce any of its terms." data-ar="لا يحق لمن ليس طرفًا في الاتفاقية إنفاذ أي حكم من أحكامها.">A person who is not a party to the Agreement has no right to enforce any of its terms.</p>

    <h3 data-en="16.12 Counterparts" data-ar="16-12 النسخ">16.12 Counterparts</h3>
    <p data-en="The Agreement may be executed in counterparts, including by electronic signature, each of which is an original and which together constitute one agreement." data-ar="يجوز توقيع الاتفاقية على عدة نسخ، بما في ذلك التوقيع الإلكتروني، وتُعد كل نسخة أصلًا وتُشكّل جميعها اتفاقية واحدة.">The Agreement may be executed in counterparts, including by electronic signature, each of which is an original and which together constitute one agreement.</p>

  </div>
</div>
</div>

<!-- Footer -->
<footer style="position:relative;background:#26235A;border-top:1px solid rgba(244,246,252,.1);overflow:hidden">
  <div style="position:absolute;inset:0;background-image:url('assets/brand-pattern.png');background-size:900px auto;background-repeat:repeat;opacity:.22"></div>
  <div style="position:relative;max-width:1280px;margin:0 auto;padding:48px clamp(20px,4vw,44px) 32px">
    <div style="display:flex;flex-wrap:wrap;gap:12px;justify-content:space-between">
      <span style="font-size:13px;color:rgba(244,246,252,.5)">&copy; 2026 Clauze</span>
      <a href="/" style="font-size:13px;color:rgba(244,246,252,.5);transition:color .2s ease" data-en="Back to home" data-ar="العودة للرئيسية">Back to home</a>
    </div>
  </div>
</footer>

</div>
</x-dc>
<script type="text/x-dc" data-dc-script data-props="{&quot;startLang&quot;:{&quot;editor&quot;:&quot;enum&quot;,&quot;options&quot;:[&quot;en&quot;,&quot;ar&quot;],&quot;default&quot;:&quot;en&quot;,&quot;tsType&quot;:&quot;'en'|'ar'&quot;,&quot;section&quot;:&quot;Content&quot;},&quot;effectiveDate&quot;:{&quot;editor&quot;:&quot;text&quot;,&quot;default&quot;:&quot;&quot;,&quot;tsType&quot;:&quot;string&quot;,&quot;section&quot;:&quot;Variables&quot;},&quot;legalEntityName&quot;:{&quot;editor&quot;:&quot;text&quot;,&quot;default&quot;:&quot;&quot;,&quot;tsType&quot;:&quot;string&quot;,&quot;section&quot;:&quot;Variables&quot;},&quot;crNumber&quot;:{&quot;editor&quot;:&quot;text&quot;,&quot;default&quot;:&quot;&quot;,&quot;tsType&quot;:&quot;string&quot;,&quot;section&quot;:&quot;Variables&quot;},&quot;registeredAddress&quot;:{&quot;editor&quot;:&quot;text&quot;,&quot;default&quot;:&quot;&quot;,&quot;tsType&quot;:&quot;string&quot;,&quot;section&quot;:&quot;Variables&quot;},&quot;governingLaw&quot;:{&quot;editor&quot;:&quot;text&quot;,&quot;default&quot;:&quot;&quot;,&quot;tsType&quot;:&quot;string&quot;,&quot;section&quot;:&quot;Variables&quot;}}">
class Component extends DCLogic {
  constructor(props) {
    super(props);
    ['navRef','navLinksRef','burgerRef','langRef'].forEach(k => { this[k] = React.createRef(); });
    var urlLang = new URLSearchParams(window.location.search).get('lang');
    this.lang = urlLang === 'ar' ? 'ar' : (props.startLang === 'ar' ? 'ar' : 'en');
    this.menuOpen = false;
  }

  componentDidMount() {
    this.applyLang(this.lang);
    this.applyVariables();
    this.layoutNav();
    this.onResize = () => this.layoutNav();
    this.onScroll = () => { if (this.menuOpen) this.toggleMenu(); };
    window.addEventListener('resize', this.onResize);
    window.addEventListener('scroll', this.onScroll, { passive: true });
  }

  componentWillUnmount() {
    if (this.onResize) window.removeEventListener('resize', this.onResize);
    if (this.onScroll) window.removeEventListener('scroll', this.onScroll);
  }

  sw(el, prop, val) { if (el) el.style[prop] = val; }

  layoutNav() {
    const links = this.navLinksRef.current, burger = this.burgerRef.current;
    if (!links || !burger) return;
    const mobile = window.innerWidth <= 720;
    this.sw(burger, 'display', mobile ? 'flex' : 'none');
    links.querySelectorAll('a').forEach(a => {
      this.sw(a, 'minHeight', mobile ? '48px' : '');
      this.sw(a, 'display', mobile ? 'flex' : '');
      this.sw(a, 'alignItems', mobile ? 'center' : '');
      this.sw(a, 'fontSize', mobile ? '16px' : '13.5px');
      this.sw(a, 'padding', mobile ? '11px 4px' : '10px 16px');
    });
    if (!mobile) {
      this.menuOpen = false;
      burger.setAttribute('aria-expanded', 'false');
      Object.assign(links.style, {
        position: 'absolute', insetInlineStart: '50%',
        transform: this.lang === 'ar' ? 'translateX(50%)' : 'translateX(-50%)',
        display: 'flex', flexDirection: 'row', alignItems: 'center',
        insetInlineEnd: '', top: '', padding: '', background: '',
        backdropFilter: '', borderTop: '', gap: '8px', marginInlineStart: '', marginInlineEnd: ''
      });
      return;
    }
    Object.assign(links.style, {
      position: 'absolute', top: '100%', insetInlineStart: '0', insetInlineEnd: '0', transform: '',
      marginInlineEnd: '0', flexDirection: 'column', alignItems: 'stretch', gap: '2px',
      padding: '10px clamp(20px,4vw,44px) 18px', background: 'rgba(6,11,24,.97)',
      backdropFilter: 'blur(12px)', borderTop: '1px solid rgba(244,246,252,.1)',
      display: this.menuOpen ? 'flex' : 'none'
    });
  }

  toggleMenu() {
    this.menuOpen = !this.menuOpen;
    const b = this.burgerRef.current;
    if (b) b.setAttribute('aria-expanded', this.menuOpen ? 'true' : 'false');
    this.layoutNav();
  }

  applyVariables() {
    const vars = {
      'pp-effective-date': this.props.effectiveDate,
      'pp-controller': this.props.legalEntityName,
      'pp-registration': this.props.crNumber,
      'pp-address': this.props.registeredAddress,
      'pp-governing-law': this.props.governingLaw
    };
    Object.entries(vars).forEach(([id, val]) => {
      if (!val) return;
      const el = document.getElementById(id);
      if (el) {
        el.textContent = val;
        const pending = el.closest('.pp-pending');
        if (pending) pending.classList.remove('pp-pending');
      }
    });
  }

  applyLang(lang) {
    this.lang = lang;
    document.body.setAttribute('dir', lang === 'ar' ? 'rtl' : 'ltr');
    document.body.querySelectorAll('[data-en][data-ar]').forEach(el => {
      const v = el.getAttribute('data-' + lang);
      if (v != null && v !== '') el.innerHTML = v;
    });
    const btn = this.langRef.current;
    if (btn) btn.textContent = lang === 'ar' ? 'English' : 'العربية';
    var url = new URL(window.location);
    if (lang === 'ar') { url.searchParams.set('lang', 'ar'); } else { url.searchParams.delete('lang'); }
    history.replaceState(null, '', url);
    document.querySelectorAll('a[href]').forEach(function(a) {
      var h = a.getAttribute('href');
      if (!h || h.startsWith('http') || h.startsWith('mailto')) return;
      try {
        var u = new URL(h, window.location.origin);
        if (lang === 'ar') { u.searchParams.set('lang', 'ar'); } else { u.searchParams.delete('lang'); }
        a.setAttribute('href', u.pathname + u.search + u.hash);
      } catch(e) {}
    });
  }

  toggleLang() { this.applyLang(this.lang === 'en' ? 'ar' : 'en'); this.layoutNav(); }

  renderVals() {
    return {
      navRef: this.navRef, navLinksRef: this.navLinksRef, burgerRef: this.burgerRef, langRef: this.langRef,
      toggleLang: () => this.toggleLang(),
      toggleMenu: () => this.toggleMenu()
    };
  }
}
</script>
@endverbatim
</body>
</html>
