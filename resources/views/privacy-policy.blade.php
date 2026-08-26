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
<title>Privacy Policy — Clauze</title>
<meta name="description" content="How Clauze collects, uses, protects, and shares personal data.">
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
    <h1 data-en="Privacy Policy" data-ar="سياسة الخصوصية">Privacy Policy</h1>
    <dl class="pp-meta" style="display:none">
      <div class="pp-pending">
        <dt data-en="Effective date" data-ar="تاريخ السريان">Effective date</dt>
        <dd class="pp-var" id="pp-effective-date"></dd>
      </div>
      <div class="pp-pending">
        <dt data-en="Controller" data-ar="المتحكم">Controller</dt>
        <dd class="pp-var" id="pp-controller"></dd>
      </div>
      <div class="pp-pending">
        <dt data-en="Registration" data-ar="السجل التجاري">Registration</dt>
        <dd class="pp-var" id="pp-registration"></dd>
      </div>
      <div class="pp-pending">
        <dt data-en="Registered office" data-ar="المقر المسجل">Registered office</dt>
        <dd class="pp-var" id="pp-address"></dd>
      </div>
    </dl>
  </header>

  <!-- Body -->
  <div class="pp-body">

    <!-- 1. INTRODUCTION AND SCOPE -->
    <h2 data-en="1. Introduction and Scope" data-ar="1. المقدمة والنطاق">1. Introduction and Scope</h2>

    <h3 data-en="1.1 About this Policy" data-ar="1.1 حول هذه السياسة">1.1 About this Policy</h3>
    <p data-en='Clauze ("Clauze", "we", "us", or "our") provides an artificial-intelligence-powered legal workspace and contract lifecycle management platform. This Privacy Policy explains how we collect, use, disclose, retain, and protect personal data, and describes the rights available to individuals whose personal data we process.' data-ar='تُقدِّم كلوز ("كلوز" أو "نحن") منصة عمل قانونية مدعومة بالذكاء الاصطناعي لإدارة دورة حياة العقود. وتوضّح سياسة الخصوصية هذه الأسس التي نجمع بموجبها البيانات الشخصية ونستخدمها ونفصح عنها ونحتفظ بها ونحميها، كما تبيّن الحقوق المقررة لأصحاب البيانات الذين نعالج بياناتهم.'>Clauze ("Clauze", "we", "us", or "our") provides an artificial-intelligence-powered legal workspace and contract lifecycle management platform. This Privacy Policy explains how we collect, use, disclose, retain, and protect personal data, and describes the rights available to individuals whose personal data we process.</p>
    <p data-en="We are committed to processing personal data lawfully, fairly, and transparently. This Policy is written to be read and understood, not to obscure our practices behind legal formality." data-ar="نلتزم بمعالجة البيانات الشخصية على نحوٍ نظامي ومنصف وشفاف. وقد صيغت هذه السياسة لتُقرأ وتُفهم، لا لتُخفي ممارساتنا خلف صياغة نظامية معقّدة.">We are committed to processing personal data lawfully, fairly, and transparently. This Policy is written to be read and understood, not to obscure our practices behind legal formality.</p>

    <h3 data-en="1.2 Who this Policy applies to" data-ar="1.2 من تنطبق عليه هذه السياسة">1.2 Who this Policy applies to</h3>
    <p data-en="This Policy applies to personal data we process in connection with:" data-ar="تنطبق هذه السياسة على البيانات الشخصية التي نعالجها فيما يتصل بالفئات الآتية:">This Policy applies to personal data we process in connection with:</p>
    <ul>
      <li data-en="Visitors to our website, marketing pages, and public resources;" data-ar="زوّار موقعنا الإلكتروني وصفحاتنا التسويقية ومواردنا العامة.">Visitors to our website, marketing pages, and public resources;</li>
      <li data-en="Individuals who register for, evaluate, or use the Clauze platform;" data-ar="من يسجّل في منصة كلوز أو يجرّبها أو يستخدمها.">Individuals who register for, evaluate, or use the Clauze platform;</li>
      <li data-en='Authorised users acting on behalf of a subscribing organisation ("Customer");' data-ar='المستخدمون المصرّح لهم الذين يتصرفون نيابةً عن منشأة مشتركة ("العميل").'>Authorised users acting on behalf of a subscribing organisation ("Customer");</li>
      <li data-en="Individuals who contact us for support, sales enquiries, or other purposes;" data-ar="من يتواصل معنا لطلب الدعم أو الاستفسار التجاري أو لأي غرض آخر.">Individuals who contact us for support, sales enquiries, or other purposes;</li>
      <li data-en="Prospective employees and applicants;" data-ar="المتقدمون للوظائف.">Prospective employees and applicants;</li>
      <li data-en="Third-party counterparties invited to a shared workspace, data room, or document exchange by a Customer." data-ar="الأطراف الخارجية الذين يدعوهم العميل إلى مساحة عمل مشتركة أو غرفة بيانات أو تبادل مستندات.">Third-party counterparties invited to a shared workspace, data room, or document exchange by a Customer.</li>
    </ul>

    <h3 data-en="1.3 Our two roles: Controller and Processor" data-ar="1.3 دورانا: المتحكم والمعالج">1.3 Our two roles: Controller and Processor</h3>
    <p data-en="Clauze processes personal data in two distinct capacities. Understanding the difference matters, because different rules apply to each." data-ar="تعالج كلوز البيانات الشخصية بصفتين متمايزتين، والتمييز بينهما جوهري لأن لكلٍّ منهما أحكامًا مختلفة.">Clauze processes personal data in two distinct capacities. Understanding the difference matters, because different rules apply to each.</p>
    <div class="pp-table-wrap">
      <table class="pp-table">
        <thead><tr>
          <th data-en="Capacity" data-ar="الصفة">Capacity</th>
          <th data-en="When it applies" data-ar="متى تنطبق">When it applies</th>
          <th data-en="What governs it" data-ar="ما يحكمها">What governs it</th>
        </tr></thead>
        <tbody>
          <tr>
            <td data-en="Controller" data-ar="المتحكم">Controller</td>
            <td data-en="Personal data we determine the purposes and means of processing for, account registration data, billing information, website analytics, marketing communications, support interactions, and platform usage telemetry." data-ar="البيانات الشخصية التي نحدّد نحن أغراض معالجتها ووسائلها، مثل بيانات تسجيل الحساب، وبيانات الفوترة، وتحليلات الموقع، والمراسلات التسويقية، وتفاعلات الدعم، وبيانات استخدام المنصة.">Personal data we determine the purposes and means of processing for, account registration data, billing information, website analytics, marketing communications, support interactions, and platform usage telemetry.</td>
            <td data-en="This Privacy Policy." data-ar="سياسة الخصوصية هذه.">This Privacy Policy.</td>
          </tr>
          <tr>
            <td data-en="Processor" data-ar="المعالج">Processor</td>
            <td data-en='Personal data contained within documents, contracts, and content that a Customer uploads to or generates within the platform ("Customer Content"). We process this only on the Customer&rsquo;s documented instructions.' data-ar='البيانات الشخصية الواردة ضمن المستندات والعقود والمحتوى الذي يرفعه العميل إلى المنصة أو يُنشئه داخلها ("محتوى العميل"). ولا نعالجه إلا وفق تعليمات العميل الموثقة.'>Personal data contained within documents, contracts, and content that a Customer uploads to or generates within the platform ("Customer Content"). We process this only on the Customer's documented instructions.</td>
            <td data-en="The Data Processing Agreement executed between Clauze and that Customer." data-ar="اتفاقية معالجة البيانات المبرمة بين كلوز وذلك العميل.">The Data Processing Agreement executed between Clauze and that Customer.</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="pp-note" data-en="Where Clauze acts as a Processor, the Customer is the Controller and is responsible for the lawfulness of the personal data it uploads, for providing notice to data subjects, and for responding to data subject requests. Clauze supports the Customer in meeting those obligations." data-ar="حين تعمل كلوز بصفة جهة معالجة، يكون العميل هو جهة التحكم، وتقع عليه مسؤولية مشروعية البيانات الشخصية التي يرفعها، وإشعار أصحاب البيانات، والاستجابة لطلباتهم. وتقدّم كلوز الدعم للعميل في الوفاء بهذه الالتزامات.">Where Clauze acts as a Processor, the Customer is the Controller and is responsible for the lawfulness of the personal data it uploads, for providing notice to data subjects, and for responding to data subject requests. Clauze supports the Customer in meeting those obligations.</div>

    <!-- 2. DEFINITIONS -->
    <h2 data-en="2. Definitions" data-ar="2. التعريفات">2. Definitions</h2>
    <div class="pp-table-wrap">
      <table class="pp-table">
        <thead><tr>
          <th data-en="Term" data-ar="المصطلح">Term</th>
          <th data-en="Meaning" data-ar="المعنى">Meaning</th>
        </tr></thead>
        <tbody>
          <tr><td data-en="Personal Data" data-ar="البيانات الشخصية">Personal Data</td><td data-en="Any information relating to an identified or identifiable natural person." data-ar="كل بيان (مهما كان مصدره أو شكله) من شأنه أن يؤدي إلى معرفة الفرد على وجه التحديد، أو يجعل التعرف عليه ممكنًا بصورة مباشرة أو غير مباشرة.">Any information relating to an identified or identifiable natural person.</td></tr>
          <tr><td data-en="Sensitive Personal Data" data-ar="البيانات الشخصية الحساسة">Sensitive Personal Data</td><td data-en="Personal data revealing racial or ethnic origin, religious belief, political opinion, health data, biometric or genetic data, criminal records, or other categories designated as sensitive under applicable law." data-ar="البيانات التي تتضمن إشارة إلى الأصل العرقي أو القبلي، أو المعتقد الديني أو الفكري أو السياسي، أو البيانات الصحية أو الوراثية أو البيومترية، أو البيانات الأمنية الجنائية، أو غيرها مما يُصنَّف حساسًا بموجب النظام المنطبق.">Personal data revealing racial or ethnic origin, religious belief, political opinion, health data, biometric or genetic data, criminal records, or other categories designated as sensitive under applicable law.</td></tr>
          <tr><td data-en="Processing" data-ar="المعالجة">Processing</td><td data-en="Any operation performed on personal data, including collection, recording, storage, retrieval, use, disclosure, transfer, restriction, erasure, or destruction." data-ar="أي عملية تُجرى على البيانات الشخصية بأي وسيلة، وتشمل الجمع والتسجيل والحفظ والاسترجاع والاستخدام والإفصاح والنقل والتقييد والإتلاف.">Any operation performed on personal data, including collection, recording, storage, retrieval, use, disclosure, transfer, restriction, erasure, or destruction.</td></tr>
          <tr><td data-en="Controller" data-ar="جهة التحكم">Controller</td><td data-en="The entity that determines the purposes and means of processing personal data." data-ar="الجهة التي تحدّد الغرض من معالجة البيانات الشخصية وكيفية معالجتها.">The entity that determines the purposes and means of processing personal data.</td></tr>
          <tr><td data-en="Processor" data-ar="جهة المعالجة">Processor</td><td data-en="An entity that processes personal data on behalf of, and on the documented instructions of, a Controller." data-ar="الجهة التي تعالج البيانات الشخصية لمصلحة جهة التحكم ونيابةً عنها ووفق تعليماتها الموثقة.">An entity that processes personal data on behalf of, and on the documented instructions of, a Controller.</td></tr>
          <tr><td data-en="Customer" data-ar="العميل">Customer</td><td data-en="An organisation that has entered into a subscription agreement with Clauze for use of the platform." data-ar="المنشأة التي أبرمت مع كلوز اتفاقية اشتراك لاستخدام المنصة.">An organisation that has entered into a subscription agreement with Clauze for use of the platform.</td></tr>
          <tr><td data-en="Customer Content" data-ar="محتوى العميل">Customer Content</td><td data-en="Documents, contracts, files, data, text, and other material uploaded to or generated within the platform by or on behalf of a Customer." data-ar="المستندات والعقود والملفات والبيانات والنصوص وسائر المواد التي يرفعها العميل (أو تُرفع نيابةً عنه) إلى المنصة أو تُنشأ داخلها.">Documents, contracts, files, data, text, and other material uploaded to or generated within the platform by or on behalf of a Customer.</td></tr>
          <tr><td data-en="Authorised User" data-ar="المستخدم المصرّح له">Authorised User</td><td data-en="An individual permitted by a Customer to access the platform under that Customer&rsquo;s subscription." data-ar="الفرد الذي يأذن له العميل بالوصول إلى المنصة ضمن اشتراكه.">An individual permitted by a Customer to access the platform under that Customer's subscription.</td></tr>
          <tr><td data-en="Sub-processor" data-ar="جهة المعالجة الفرعية">Sub-processor</td><td data-en="A third party engaged by Clauze to process personal data on behalf of a Customer." data-ar="الطرف الخارجي الذي تستعين به كلوز لمعالجة البيانات الشخصية نيابةً عن العميل.">A third party engaged by Clauze to process personal data on behalf of a Customer.</td></tr>
          <tr><td data-en="PDPL" data-ar="النظام">PDPL</td><td data-en="The Personal Data Protection Law of the Kingdom of Saudi Arabia (Royal Decree M/19, 1443H) and its Implementing Regulations." data-ar="نظام حماية البيانات الشخصية الصادر بالمرسوم الملكي رقم (م/19) وتاريخ 1443/2/9هـ ولائحته التنفيذية.">The Personal Data Protection Law of the Kingdom of Saudi Arabia (Royal Decree M/19, 1443H) and its Implementing Regulations.</td></tr>
          <tr><td data-en="SDAIA" data-ar="سدايا">SDAIA</td><td data-en="The Saudi Data and Artificial Intelligence Authority, the KSA data protection supervisory authority." data-ar="الهيئة السعودية للبيانات والذكاء الاصطناعي، وهي الجهة المختصة بالإشراف على تطبيق النظام في المملكة.">The Saudi Data and Artificial Intelligence Authority, the KSA data protection supervisory authority.</td></tr>
        </tbody>
      </table>
    </div>

    <!-- 3. PERSONAL DATA WE COLLECT -->
    <h2 data-en="3. Personal Data We Collect" data-ar="3. البيانات الشخصية التي نجمعها">3. Personal Data We Collect</h2>

    <h3 data-en="3.1 Data you provide to us" data-ar="3.1 البيانات التي تقدمها لنا">3.1 Data you provide to us</h3>
    <div class="pp-table-wrap">
      <table class="pp-table">
        <thead><tr>
          <th data-en="Category" data-ar="الفئة">Category</th>
          <th data-en="Examples" data-ar="أمثلة">Examples</th>
          <th data-en="Source" data-ar="المصدر">Source</th>
        </tr></thead>
        <tbody>
          <tr><td data-en="Identity data" data-ar="بيانات الهوية">Identity data</td><td data-en="Full name, job title, professional role, preferred language." data-ar="الاسم الكامل، والمسمى الوظيفي، والدور المهني، واللغة المفضّلة.">Full name, job title, professional role, preferred language.</td><td data-en="Provided by you or your organisation" data-ar="أنت أو منشأتك">Provided by you or your organisation</td></tr>
          <tr><td data-en="Contact data" data-ar="بيانات التواصل">Contact data</td><td data-en="Business email address, telephone number, business postal address." data-ar="البريد الإلكتروني المهني، ورقم الهاتف، والعنوان البريدي للعمل.">Business email address, telephone number, business postal address.</td><td data-en="Provided by you or your organisation" data-ar="أنت أو منشأتك">Provided by you or your organisation</td></tr>
          <tr><td data-en="Account data" data-ar="بيانات الحساب">Account data</td><td data-en="Username, password (stored only as a salted cryptographic hash), authentication credentials, security questions, multi-factor authentication settings, user preferences." data-ar="اسم المستخدم، وكلمة المرور (تُحفظ مشفّرة بمفتاح خاص بالمستخدم أو بالسجل)، وبيانات المصادقة، وإعدادات المصادقة متعددة العوامل، وتفضيلات المستخدم.">Username, password (stored only as a salted cryptographic hash), authentication credentials, security questions, multi-factor authentication settings, user preferences.</td><td data-en="Provided by you" data-ar="أنت">Provided by you</td></tr>
          <tr><td data-en="Organisation data" data-ar="بيانات المنشأة">Organisation data</td><td data-en="Employer name, department, commercial registration number, VAT or tax identification number, billing contact." data-ar="اسم جهة العمل، والإدارة، ورقم السجل التجاري، والرقم الضريبي، وجهة اتصال الفوترة.">Employer name, department, commercial registration number, VAT or tax identification number, billing contact.</td><td data-en="Provided by your organisation" data-ar="منشأتك">Provided by your organisation</td></tr>
          <tr><td data-en="Billing data" data-ar="بيانات الفوترة">Billing data</td><td data-en="Billing address, purchase order references, invoice contacts. Payment card details are processed directly by our payment provider and are not stored on Clauze systems." data-ar="عنوان الفوترة، ومراجع أوامر الشراء، وجهات اتصال الفواتير. أما بيانات بطاقات الدفع فتُعالج مباشرةً لدى مزوّد خدمات الدفع ولا تُحفظ على أنظمة كلوز.">Billing address, purchase order references, invoice contacts. Payment card details are processed directly by our payment provider and are not stored on Clauze systems.</td><td data-en="Provided by your organisation" data-ar="منشأتك">Provided by your organisation</td></tr>
          <tr><td data-en="Communications" data-ar="المراسلات">Communications</td><td data-en="Support tickets, correspondence with our teams, feedback, survey responses, meeting notes, and call recordings where you have been notified and consented." data-ar="تذاكر الدعم، والمراسلات مع فرقنا، والملاحظات، وردود الاستبيانات، ومحاضر الاجتماعات، وتسجيلات المكالمات حيث أُشعرت بها ووافقت عليها.">Support tickets, correspondence with our teams, feedback, survey responses, meeting notes, and call recordings where you have been notified and consented.</td><td data-en="Provided by you" data-ar="أنت">Provided by you</td></tr>
          <tr><td data-en="Recruitment data" data-ar="بيانات التوظيف">Recruitment data</td><td data-en="CV, employment history, qualifications, references, right-to-work documentation." data-ar="السيرة الذاتية، والخبرات، والمؤهلات، والمعرّفون، ومستندات إثبات أهلية العمل.">CV, employment history, qualifications, references, right-to-work documentation.</td><td data-en="Provided by applicants" data-ar="المتقدمون للوظائف">Provided by applicants</td></tr>
        </tbody>
      </table>
    </div>

    <h3 data-en="3.2 Data we collect automatically" data-ar="3.2 البيانات التي نجمعها تلقائيًا">3.2 Data we collect automatically</h3>
    <div class="pp-table-wrap">
      <table class="pp-table">
        <thead><tr>
          <th data-en="Category" data-ar="الفئة">Category</th>
          <th data-en="Examples" data-ar="أمثلة">Examples</th>
        </tr></thead>
        <tbody>
          <tr><td data-en="Technical data" data-ar="البيانات التقنية">Technical data</td><td data-en="IP address, browser type and version, operating system, device type, device identifiers, screen resolution, time zone, language settings." data-ar="عنوان بروتوكول الإنترنت، ونوع المتصفح وإصداره، ونظام التشغيل، ونوع الجهاز ومعرّفاته، ودقة الشاشة، والمنطقة الزمنية، وإعدادات اللغة.">IP address, browser type and version, operating system, device type, device identifiers, screen resolution, time zone, language settings.</td></tr>
          <tr><td data-en="Usage data" data-ar="بيانات الاستخدام">Usage data</td><td data-en="Pages and features accessed, actions performed, documents opened or created, search queries within the platform, session duration, frequency of use, referring page." data-ar="الصفحات والخصائص التي جرى الوصول إليها، والإجراءات المنفَّذة، والمستندات التي فُتحت أو أُنشئت، وعمليات البحث داخل المنصة، ومدة الجلسة، وتكرار الاستخدام، والصفحة المُحيلة.">Pages and features accessed, actions performed, documents opened or created, search queries within the platform, session duration, frequency of use, referring page.</td></tr>
          <tr><td data-en="Log data" data-ar="بيانات السجلات">Log data</td><td data-en="Authentication events, permission changes, configuration changes, API calls, errors and diagnostic events, timestamps and originating IP." data-ar="أحداث المصادقة، وتغييرات الصلاحيات، وتغييرات الإعدادات، ونداءات واجهة البرمجة، والأخطاء والأحداث التشخيصية، مع الطوابع الزمنية وعنوان المصدر.">Authentication events, permission changes, configuration changes, API calls, errors and diagnostic events, timestamps and originating IP.</td></tr>
          <tr><td data-en="Audit data" data-ar="بيانات المراجعة">Audit data</td><td data-en="A tamper-evident record of actions taken within the platform, including actor identity, action performed, affected object, and timestamp. Audit records are retained for the contractual retention period and cannot be edited or deleted by any user." data-ar="سجل غير قابل للعبث يوثّق الإجراءات داخل المنصة، ويشمل هوية المنفِّذ والإجراء المنفَّذ والعنصر المتأثر والطابع الزمني. ويُحتفظ بسجلات المراجعة طوال المدة التعاقدية، ولا يجوز لأي مستخدم تعديلها أو حذفها.">A tamper-evident record of actions taken within the platform, including actor identity, action performed, affected object, and timestamp. Audit records are retained for the contractual retention period and cannot be edited or deleted by any user.</td></tr>
          <tr><td data-en="Cookies and similar" data-ar="ملفات الارتباط">Cookies and similar</td><td data-en="See Section 11 (Cookies and Tracking Technologies)." data-ar="يُنظر البند (11) من هذه السياسة.">See Section 11 (Cookies and Tracking Technologies).</td></tr>
        </tbody>
      </table>
    </div>

    <h3 data-en="3.3 Customer Content" data-ar="3.3 محتوى العميل">3.3 Customer Content</h3>
    <p data-en="Customer Content may contain personal data, for example, names and contact details of contracting parties, signatories, employees, and third-party representatives appearing within contracts, board minutes, employment agreements, and correspondence." data-ar="قد يتضمن محتوى العميل بيانات شخصية، كأسماء أطراف التعاقد والموقّعين والموظفين وممثلي الأطراف الخارجية وبيانات التواصل معهم، مما يرد في العقود ومحاضر مجالس الإدارة وعقود العمل والمراسلات.">Customer Content may contain personal data, for example, names and contact details of contracting parties, signatories, employees, and third-party representatives appearing within contracts, board minutes, employment agreements, and correspondence.</p>
    <p data-en="Clauze does not control what personal data a Customer chooses to upload. We process Customer Content solely as a Processor, on the Customer&rsquo;s documented instructions, in accordance with the Data Processing Agreement between us." data-ar="ولا تتحكم كلوز فيما يختار العميل رفعه من بيانات شخصية. ونحن نعالج محتوى العميل بصفتنا جهة معالجة حصرًا، وفق تعليماته الموثقة، وبموجب اتفاقية معالجة البيانات المبرمة بيننا.">Clauze does not control what personal data a Customer chooses to upload. We process Customer Content solely as a Processor, on the Customer's documented instructions, in accordance with the Data Processing Agreement between us.</p>
    <div class="pp-note" data-en="Customers are responsible for ensuring they have a lawful basis for uploading personal data to the platform and, where required, for providing notice to the individuals concerned." data-ar="تقع على العميل مسؤولية التحقق من وجود أساس نظامي لرفع البيانات الشخصية إلى المنصة، وإشعار أصحاب هذه البيانات متى اقتضى النظام ذلك.">Customers are responsible for ensuring they have a lawful basis for uploading personal data to the platform and, where required, for providing notice to the individuals concerned.</div>

    <h3 data-en="3.4 Sensitive Personal Data" data-ar="3.4 البيانات الشخصية الحساسة">3.4 Sensitive Personal Data</h3>
    <p data-en="We do not intentionally collect Sensitive Personal Data as a Controller. Customer Content may incidentally contain Sensitive Personal Data, for example, health information in an employment file or an insurance claim. Where this occurs, the Customer remains the Controller and is responsible for ensuring that any additional legal conditions applicable to sensitive categories are satisfied." data-ar="لا نجمع البيانات الشخصية الحساسة قصدًا بصفتنا جهة تحكم. وقد يتضمن محتوى العميل بيانات حساسة بصورة عرضية، كمعلومة صحية ترد في ملف موظف أو مطالبة تأمينية. وفي هذه الحالة يظل العميل هو جهة التحكم، وتقع عليه مسؤولية استيفاء الشروط النظامية الإضافية المتعلقة بالفئات الحساسة.">We do not intentionally collect Sensitive Personal Data as a Controller. Customer Content may incidentally contain Sensitive Personal Data, for example, health information in an employment file or an insurance claim. Where this occurs, the Customer remains the Controller and is responsible for ensuring that any additional legal conditions applicable to sensitive categories are satisfied.</p>
    <p data-en="We ask that you do not submit Sensitive Personal Data through support channels, sales enquiries, or free-text fields unless it is strictly necessary and you have a lawful basis for doing so." data-ar="ونرجو عدم إرسال بيانات شخصية حساسة عبر قنوات الدعم أو الاستفسارات التجارية أو الحقول النصية المفتوحة ما لم يكن ذلك ضروريًا وقائمًا على أساس نظامي.">We ask that you do not submit Sensitive Personal Data through support channels, sales enquiries, or free-text fields unless it is strictly necessary and you have a lawful basis for doing so.</p>

    <!-- 4. HOW WE USE PERSONAL DATA -->
    <h2 data-en="4. How We Use Personal Data" data-ar="4. كيف نستخدم البيانات الشخصية">4. How We Use Personal Data</h2>

    <h3 data-en="4.1 Purposes of processing" data-ar="4.1 أغراض المعالجة">4.1 Purposes of processing</h3>
    <div class="pp-table-wrap">
      <table class="pp-table">
        <thead><tr>
          <th data-en="Purpose" data-ar="الغرض">Purpose</th>
          <th data-en="What this involves" data-ar="ما يتضمنه">What this involves</th>
        </tr></thead>
        <tbody>
          <tr><td data-en="Providing the service" data-ar="تقديم الخدمة">Providing the service</td><td data-en="Creating and administering accounts, authenticating users, delivering platform functionality, generating and reviewing documents, enabling collaboration and workflow." data-ar="إنشاء الحسابات وإدارتها، والتحقق من هوية المستخدمين، وتشغيل خصائص المنصة، وإنشاء المستندات ومراجعتها، وتمكين العمل المشترك وسير الإجراءات.">Creating and administering accounts, authenticating users, delivering platform functionality, generating and reviewing documents, enabling collaboration and workflow.</td></tr>
          <tr><td data-en="Security and integrity" data-ar="الأمن وسلامة المنصة">Security and integrity</td><td data-en="Detecting and preventing unauthorised access, fraud, abuse, and security incidents; maintaining audit trails; enforcing access controls and tenant isolation." data-ar="كشف الوصول غير المصرح به والاحتيال وإساءة الاستخدام والحوادث الأمنية ومنعها، وحفظ سجلات المراجعة، وإنفاذ ضوابط الوصول وعزل بيانات كل عميل.">Detecting and preventing unauthorised access, fraud, abuse, and security incidents; maintaining audit trails; enforcing access controls and tenant isolation.</td></tr>
          <tr><td data-en="Support" data-ar="الدعم">Support</td><td data-en="Responding to enquiries, diagnosing and resolving technical issues, providing training and onboarding assistance." data-ar="الرد على الاستفسارات، وتشخيص المشكلات التقنية ومعالجتها، وتقديم التدريب والمساندة عند التهيئة.">Responding to enquiries, diagnosing and resolving technical issues, providing training and onboarding assistance.</td></tr>
          <tr><td data-en="Service improvement" data-ar="تطوير الخدمة">Service improvement</td><td data-en="Analysing aggregated and de-identified usage patterns to improve features, performance, and reliability." data-ar="تحليل أنماط الاستخدام بصورة مجمّعة ومجهولة المصدر لتحسين الخصائص والأداء والموثوقية.">Analysing aggregated and de-identified usage patterns to improve features, performance, and reliability.</td></tr>
          <tr><td data-en="Billing and administration" data-ar="الفوترة والإدارة">Billing and administration</td><td data-en="Processing subscriptions, issuing invoices, managing renewals, collecting payment, maintaining financial records." data-ar="معالجة الاشتراكات، وإصدار الفواتير، وإدارة التجديد، وتحصيل المستحقات، وحفظ السجلات المالية.">Processing subscriptions, issuing invoices, managing renewals, collecting payment, maintaining financial records.</td></tr>
          <tr><td data-en="Communications" data-ar="المراسلات">Communications</td><td data-en="Sending service announcements, security notifications, maintenance windows, product updates, and (where you have consented or where permitted) marketing communications." data-ar="إرسال إشعارات الخدمة، والتنبيهات الأمنية، ونوافذ الصيانة، وتحديثات المنتج، والمراسلات التسويقية حيث وافقت عليها أو حيث يُجيزها النظام.">Sending service announcements, security notifications, maintenance windows, product updates, and (where you have consented or where permitted) marketing communications.</td></tr>
          <tr><td data-en="Legal and regulatory compliance" data-ar="الامتثال النظامي">Legal and regulatory compliance</td><td data-en="Meeting obligations under applicable law, responding to lawful requests from competent authorities, establishing or defending legal claims, and maintaining records required by law." data-ar="الوفاء بالالتزامات بموجب القانون المعمول به، والاستجابة للطلبات المشروعة من الجهات المختصة، وإثبات الحقوق أو الدفاع عنها، وحفظ السجلات التي يوجب النظام حفظها.">Meeting obligations under applicable law, responding to lawful requests from competent authorities, establishing or defending legal claims, and maintaining records required by law.</td></tr>
          <tr><td data-en="Recruitment" data-ar="التوظيف">Recruitment</td><td data-en="Assessing applications, conducting interviews, verifying qualifications and references." data-ar="تقييم الطلبات، وإجراء المقابلات، والتحقق من المؤهلات والمعرّفين.">Assessing applications, conducting interviews, verifying qualifications and references.</td></tr>
        </tbody>
      </table>
    </div>

    <h3 data-en="4.2 Lawful bases for processing" data-ar="4.2 الأسس القانونية للمعالجة">4.2 Lawful bases for processing</h3>
    <p data-en="We rely on the following legal bases, depending on the purpose and the applicable regime:" data-ar="نستند في معالجتنا إلى الأسس الآتية حسب الغرض والنظام المعمول به:">We rely on the following legal bases, depending on the purpose and the applicable regime:</p>
    <div class="pp-table-wrap">
      <table class="pp-table">
        <thead><tr>
          <th data-en="Lawful basis" data-ar="الأساس القانوني">Lawful basis</th>
          <th data-en="When we rely on it" data-ar="متى نعتمد عليه">When we rely on it</th>
        </tr></thead>
        <tbody>
          <tr><td data-en="Performance of a contract" data-ar="تنفيذ عقد">Performance of a contract</td><td data-en="Where processing is necessary to provide the platform under a subscription agreement, or to take steps at your request before entering into a contract." data-ar="حين تكون المعالجة لازمة لتقديم المنصة بموجب اتفاقية اشتراك، أو لاتخاذ إجراءات بناءً على طلبك قبل التعاقد.">Where processing is necessary to provide the platform under a subscription agreement, or to take steps at your request before entering into a contract.</td></tr>
          <tr><td data-en="Legitimate interests" data-ar="المصلحة المشروعة">Legitimate interests</td><td data-en="Where processing is necessary for our legitimate interests in operating, securing, and improving the platform, and those interests are not overridden by your rights and freedoms. We conduct and document a balancing assessment where we rely on this basis." data-ar="حين تكون المعالجة لازمة لمصلحتنا المشروعة في تشغيل المنصة وتأمينها وتطويرها، على ألا تتعارض هذه المصلحة مع حقوق صاحب البيانات وحرياته. ونجري موازنة موثقة كلما استندنا إلى هذا الأساس.">Where processing is necessary for our legitimate interests in operating, securing, and improving the platform, and those interests are not overridden by your rights and freedoms. We conduct and document a balancing assessment where we rely on this basis.</td></tr>
          <tr><td data-en="Legal obligation" data-ar="الالتزام النظامي">Legal obligation</td><td data-en="Where processing is required to comply with a legal or regulatory obligation to which we are subject." data-ar="حين تكون المعالجة لازمة للوفاء بالتزام يفرضه النظام أو اللائحة.">Where processing is required to comply with a legal or regulatory obligation to which we are subject.</td></tr>
          <tr><td data-en="Consent" data-ar="الموافقة">Consent</td><td data-en="Where you have given clear, specific, informed, and freely given consent, for example, for certain marketing communications or non-essential cookies. You may withdraw consent at any time without affecting the lawfulness of processing carried out before withdrawal." data-ar="حين تصدر منك موافقة صريحة ومحددة ومستنيرة وحرة، كالمراسلات التسويقية وملفات الارتباط غير الضرورية. ولك سحب موافقتك في أي وقت دون أن يمس ذلك مشروعية المعالجة التي تمت قبل السحب.">Where you have given clear, specific, informed, and freely given consent, for example, for certain marketing communications or non-essential cookies. You may withdraw consent at any time without affecting the lawfulness of processing carried out before withdrawal.</td></tr>
          <tr><td data-en="Vital interests" data-ar="المصالح الحيوية">Vital interests</td><td data-en="In rare circumstances where processing is necessary to protect the life or physical safety of an individual." data-ar="في حالات نادرة تكون فيها المعالجة لازمة لحماية حياة فرد أو سلامته الجسدية.">In rare circumstances where processing is necessary to protect the life or physical safety of an individual.</td></tr>
        </tbody>
      </table>
    </div>

    <!-- 5. ARTIFICIAL INTELLIGENCE AND AUTOMATED PROCESSING -->
    <h2 data-en="5. Artificial Intelligence and Automated Processing" data-ar="5. الذكاء الاصطناعي والمعالجة الآلية">5. Artificial Intelligence and Automated Processing</h2>
    <p data-en="Clauze uses artificial intelligence to analyse documents, extract structured information, identify risks and obligations, detect conflicts between agreements, and assist with drafting and review. This section explains how that works and what safeguards apply." data-ar="تستخدم كلوز الذكاء الاصطناعي في تحليل المستندات، واستخراج المعلومات المهيكلة، وتحديد المخاطر والالتزامات، وكشف التعارض بين الاتفاقيات، والمساندة في الصياغة والمراجعة. ويوضّح هذا البند آلية عمل ذلك والضمانات المصاحبة له.">Clauze uses artificial intelligence to analyse documents, extract structured information, identify risks and obligations, detect conflicts between agreements, and assist with drafting and review. This section explains how that works and what safeguards apply.</p>

    <h3 data-en="5.1 We do not train shared models on Customer Content" data-ar="5.1 لا ندرّب النماذج المشتركة على محتوى العميل">5.1 We do not train shared models on Customer Content</h3>
    <div class="pp-note" data-en="Customer Content is never used to train, fine-tune, or otherwise improve any artificial intelligence model that is shared with, or accessible to, any other customer. This commitment is contractual and appears in every Clauze Data Processing Agreement." data-ar="لا يُستخدم محتوى العميل (بأي حال) في تدريب أي نموذج ذكاء اصطناعي مشترك أو ضبطه أو تحسينه، ولا في أي نموذج يمكن لعميل آخر الوصول إليه. وهذا التزام تعاقدي يرد في كل اتفاقية معالجة بيانات تبرمها كلوز.">Customer Content is never used to train, fine-tune, or otherwise improve any artificial intelligence model that is shared with, or accessible to, any other customer. This commitment is contractual and appears in every Clauze Data Processing Agreement.</div>
    <p data-en="Where a Customer expressly elects, in writing, to enable a tenant-specific model or knowledge base derived from its own content, that model remains logically isolated to that Customer&rsquo;s tenant and is not accessible to any other party." data-ar="وإذا اختار العميل كتابةً تفعيل نموذج أو قاعدة معرفة مشتقة من محتواه الخاص، يظل ذلك النموذج معزولًا منطقيًا داخل نطاق العميل، ولا يتاح لأي طرف آخر.">Where a Customer expressly elects, in writing, to enable a tenant-specific model or knowledge base derived from its own content, that model remains logically isolated to that Customer's tenant and is not accessible to any other party.</p>

    <h3 data-en="5.2 How AI processing works" data-ar="5.2 كيف تعمل معالجة الذكاء الاصطناعي">5.2 How AI processing works</h3>
    <ul>
      <li data-en="Documents uploaded to the platform are processed to extract structured information, parties, dates, values, obligations, governing law, and similar attributes." data-ar="تُعالَج المستندات المرفوعة لاستخراج المعلومات المهيكلة منها، الأطراف والتواريخ والقيم والالتزامات والقانون الحاكم وما في حكمها.">Documents uploaded to the platform are processed to extract structured information, parties, dates, values, obligations, governing law, and similar attributes.</li>
      <li data-en="Extracted information is stored as structured records within the Customer&rsquo;s isolated tenant." data-ar="تُحفظ المعلومات المستخرجة على هيئة سجلات مهيكلة داخل نطاق العميل المعزول.">Extracted information is stored as structured records within the Customer's isolated tenant.</li>
      <li data-en="When an Authorised User asks a question, the system retrieves relevant content from documents that user is permitted to access and generates a response grounded in that content." data-ar="عند طرح المستخدم المصرّح له سؤالًا، يسترجع النظام المحتوى ذا الصلة من المستندات التي يُصرَّح لذلك المستخدم بالاطلاع عليها، ثم يولّد إجابة مستندة إلى ذلك المحتوى.">When an Authorised User asks a question, the system retrieves relevant content from documents that user is permitted to access and generates a response grounded in that content.</li>
      <li data-en="Every AI-generated response cites the source clause or document it relies upon. Where the available content does not answer a question, the system states this rather than generating an unsupported answer." data-ar="تُرفق كل إجابة بالإحالة إلى البند أو المستند الذي استندت إليه. وإذا لم يتضمن المحتوى المتاح جوابًا للسؤال، صرّح النظام بذلك بدلًا من توليد إجابة غير مسندة.">Every AI-generated response cites the source clause or document it relies upon. Where the available content does not answer a question, the system states this rather than generating an unsupported answer.</li>
    </ul>

    <h3 data-en="5.3 Access controls apply to AI features" data-ar="5.3 تنطبق ضوابط الوصول على ميزات الذكاء الاصطناعي">5.3 Access controls apply to AI features</h3>
    <p data-en="AI features respect the same permission model as the rest of the platform. The assistant can only access documents that the requesting user is already authorised to access. AI interactions are recorded in the audit trail with the user identity, the documents accessed, and the timestamp." data-ar="تخضع خصائص الذكاء الاصطناعي لنموذج الصلاحيات ذاته المطبَّق على سائر أجزاء المنصة. فلا يصل المساعد إلا إلى المستندات المصرَّح للمستخدم الطالب بالاطلاع عليها أصلًا. وتُقيَّد تفاعلات الذكاء الاصطناعي في سجل المراجعة موثّقةً بهوية المستخدم والمستندات التي جرى الوصول إليها والطابع الزمني.">AI features respect the same permission model as the rest of the platform. The assistant can only access documents that the requesting user is already authorised to access. AI interactions are recorded in the audit trail with the user identity, the documents accessed, and the timestamp.</p>

    <h3 data-en="5.4 Automated decision-making" data-ar="5.4 اتخاذ القرارات الآلية">5.4 Automated decision-making</h3>
    <p data-en="Clauze does not make decisions producing legal or similarly significant effects concerning individuals on a solely automated basis. AI outputs are informational and are intended to support (not replace) professional judgement." data-ar="لا تتخذ كلوز قرارات ذات أثر نظامي أو أثر مماثل في الأهمية تجاه الأفراد استنادًا إلى المعالجة الآلية وحدها. ومخرجات الذكاء الاصطناعي ذات طابع معلوماتي، وهي معدّة لمساندة الحكم المهني لا للحلول محله.">Clauze does not make decisions producing legal or similarly significant effects concerning individuals on a solely automated basis. AI outputs are informational and are intended to support (not replace) professional judgement.</p>
    <div class="pp-note" data-en="Clauze is a software platform, not a law firm. AI-generated output does not constitute legal advice and should not be relied upon as such. Customers should obtain advice from qualified counsel before acting on any output." data-ar="كلوز منصة برمجية وليست مكتب محاماة. ولا تُعد مخرجات الذكاء الاصطناعي استشارة قانونية ولا يجوز الاعتماد عليها بهذه الصفة. وعلى العملاء الرجوع إلى محامٍ مؤهل قبل التصرف بناءً على أي مخرج.">Clauze is a software platform, not a law firm. AI-generated output does not constitute legal advice and should not be relied upon as such. Customers should obtain advice from qualified counsel before acting on any output.</div>

    <h3 data-en="5.5 AI sub-processors" data-ar="5.5 المعالجون الفرعيون للذكاء الاصطناعي">5.5 AI sub-processors</h3>
    <p data-en="We engage third-party providers of large language models and related infrastructure to deliver AI functionality. These providers are engaged as sub-processors under written terms that prohibit the use of Customer Content for training their own models and that require processing consistent with the residency commitments described in Section 8." data-ar="نستعين بمزوّدين خارجيين للنماذج اللغوية الكبيرة والبنية التحتية المرتبطة بها لتشغيل خصائص الذكاء الاصطناعي. ويُتعاقد مع هؤلاء بصفتهم جهات معالجة فرعية بموجب شروط مكتوبة تحظر استخدام محتوى العميل في تدريب نماذجهم، وتوجب معالجة تتوافق مع التزامات الاستضافة المبيّنة في البند (8).">We engage third-party providers of large language models and related infrastructure to deliver AI functionality. These providers are engaged as sub-processors under written terms that prohibit the use of Customer Content for training their own models and that require processing consistent with the residency commitments described in Section 8.</p>

    <!-- 6. HOW WE SHARE PERSONAL DATA -->
    <h2 data-en="6. How We Share Personal Data" data-ar="6. كيف نشارك البيانات الشخصية">6. How We Share Personal Data</h2>
    <p data-en="We do not sell personal data. We do not share personal data with advertisers. We do not permit third parties to use personal data for their own independent marketing purposes." data-ar="لا نبيع البيانات الشخصية، ولا نشاركها مع المعلنين، ولا نأذن لأي طرف خارجي باستخدامها لأغراضه التسويقية المستقلة.">We do not sell personal data. We do not share personal data with advertisers. We do not permit third parties to use personal data for their own independent marketing purposes.</p>
    <p data-en="We share personal data only in the circumstances set out below." data-ar="ولا نفصح عن البيانات الشخصية إلا في الحالات الآتية.">We share personal data only in the circumstances set out below.</p>

    <h3 data-en="6.1 Within your organisation" data-ar="6.1 داخل مؤسستك">6.1 Within your organisation</h3>
    <p data-en="Content and activity within a Customer tenant is visible to Authorised Users of that Customer according to the permissions configured by that Customer&rsquo;s administrators. Administrators may access, export, restrict, or delete content and accounts within their tenant." data-ar="يكون المحتوى والنشاط داخل نطاق العميل ظاهرًا للمستخدمين المصرّح لهم لدى ذلك العميل بحسب الصلاحيات التي يضبطها مسؤولوه. ويجوز للمسؤولين الاطلاع على المحتوى والحسابات داخل نطاقهم وتصديرها وتقييدها وحذفها.">Content and activity within a Customer tenant is visible to Authorised Users of that Customer according to the permissions configured by that Customer's administrators. Administrators may access, export, restrict, or delete content and accounts within their tenant.</p>

    <h3 data-en="6.2 Sub-processors" data-ar="6.2 المعالجون الفرعيون">6.2 Sub-processors</h3>
    <p data-en="We engage carefully selected sub-processors to deliver the service. Each sub-processor is bound by a written agreement imposing data protection obligations no less protective than those we accept, and is engaged only for a defined purpose." data-ar="نستعين بجهات معالجة فرعية مختارة بعناية لتشغيل الخدمة. وتلتزم كل جهة منها باتفاقية مكتوبة تفرض عليها التزامات حماية بيانات لا تقل عما نلتزم به، ولا يُستعان بها إلا لغرض محدد.">We engage carefully selected sub-processors to deliver the service. Each sub-processor is bound by a written agreement imposing data protection obligations no less protective than those we accept, and is engaged only for a defined purpose.</p>
    <div class="pp-table-wrap">
      <table class="pp-table">
        <thead><tr>
          <th data-en="Category of sub-processor" data-ar="فئة المعالج الفرعي">Category of sub-processor</th>
          <th data-en="Purpose" data-ar="الغرض">Purpose</th>
          <th data-en="Data involved" data-ar="البيانات المعنية">Data involved</th>
        </tr></thead>
        <tbody>
          <tr><td data-en="Cloud infrastructure" data-ar="البنية التحتية السحابية">Cloud infrastructure</td><td data-en="Hosting, storage, compute, backup, and disaster recovery." data-ar="الاستضافة والتخزين والحوسبة والنسخ الاحتياطي والتعافي من الكوارث.">Hosting, storage, compute, backup, and disaster recovery.</td><td data-en="All categories, encrypted at rest and in transit" data-ar="جميع الفئات، مشفّرة أثناء النقل وفي حالة السكون">All categories, encrypted at rest and in transit</td></tr>
          <tr><td data-en="AI model providers" data-ar="مزوّدو نماذج الذكاء الاصطناعي">AI model providers</td><td data-en="Document analysis, extraction, question answering, drafting assistance." data-ar="تحليل المستندات والاستخراج والإجابة عن الأسئلة والمساندة في الصياغة.">Document analysis, extraction, question answering, drafting assistance.</td><td data-en="Document content and queries, subject to no-training commitments" data-ar="محتوى المستندات والاستفسارات، وفق التزامات عدم التدريب">Document content and queries, subject to no-training commitments</td></tr>
          <tr><td data-en="Identity and authentication" data-ar="الهوية والمصادقة">Identity and authentication</td><td data-en="Single sign-on, multi-factor authentication, identity verification." data-ar="الدخول الموحد، والمصادقة متعددة العوامل، والتحقق من الهوية.">Single sign-on, multi-factor authentication, identity verification.</td><td data-en="Identity and account data" data-ar="بيانات الهوية والحساب">Identity and account data</td></tr>
          <tr><td data-en="Email and notifications" data-ar="البريد والإشعارات">Email and notifications</td><td data-en="Transactional email, service notifications, alerts." data-ar="رسائل الخدمة، وإشعارات المنصة، والتنبيهات.">Transactional email, service notifications, alerts.</td><td data-en="Contact data and message content" data-ar="بيانات التواصل ومحتوى الرسائل">Contact data and message content</td></tr>
          <tr><td data-en="Support tooling" data-ar="أدوات الدعم">Support tooling</td><td data-en="Ticket management, in-product messaging, session diagnostics." data-ar="إدارة التذاكر، والمراسلة داخل المنتج، وتشخيص الجلسات.">Ticket management, in-product messaging, session diagnostics.</td><td data-en="Contact data and support communications" data-ar="بيانات التواصل ومراسلات الدعم">Contact data and support communications</td></tr>
          <tr><td data-en="Analytics" data-ar="التحليلات">Analytics</td><td data-en="Aggregated product usage measurement and performance monitoring." data-ar="قياس استخدام المنتج بصورة مجمّعة ومراقبة الأداء.">Aggregated product usage measurement and performance monitoring.</td><td data-en="Technical and usage data, pseudonymised where practicable" data-ar="البيانات التقنية وبيانات الاستخدام، مستعارة الهوية حيثما أمكن">Technical and usage data, pseudonymised where practicable</td></tr>
          <tr><td data-en="Payment processing" data-ar="معالجة المدفوعات">Payment processing</td><td data-en="Subscription billing and payment collection." data-ar="فوترة الاشتراكات وتحصيل المدفوعات.">Subscription billing and payment collection.</td><td data-en="Billing data. Card details are handled by the payment provider, not by Clauze" data-ar="بيانات الفوترة. أما بيانات البطاقات فيتولاها مزوّد الدفع لا كلوز">Billing data. Card details are handled by the payment provider, not by Clauze</td></tr>
        </tbody>
      </table>
    </div>
    <p data-en="A current list of named sub-processors is available on request from privacy@clauze.ai. Customers may subscribe to notifications of changes to the sub-processor list and may object to a new sub-processor in accordance with the terms of the applicable Data Processing Agreement." data-ar="تتوافر قائمة محدَّثة بأسماء جهات المعالجة الفرعية عند طلبها من privacy@clauze.ai. وللعملاء الاشتراك في إشعارات تغيير القائمة، ولهم الاعتراض على أي جهة معالجة جديدة وفق أحكام اتفاقية معالجة البيانات المنطبقة.">A current list of named sub-processors is available on request from privacy@clauze.ai. Customers may subscribe to notifications of changes to the sub-processor list and may object to a new sub-processor in accordance with the terms of the applicable Data Processing Agreement.</p>

    <h3 data-en="6.3 Professional advisers and corporate transactions" data-ar="6.3 المستشارون المهنيون والمعاملات المؤسسية">6.3 Professional advisers and corporate transactions</h3>
    <p data-en="We may share personal data with our auditors, legal advisers, insurers, and other professional advisers where necessary and subject to obligations of confidentiality. In the event of a merger, acquisition, financing, or sale of assets, personal data may be disclosed to prospective counterparties and their advisers under confidentiality obligations, and may transfer as part of the transaction. We will notify affected Customers of any change of control affecting the processing of their data." data-ar="قد نفصح عن البيانات الشخصية لمراجعي حساباتنا ومستشارينا القانونيين وشركات التأمين وسائر المستشارين المهنيين عند الحاجة، وبشرط التزامهم بالسرية. وفي حال الاندماج أو الاستحواذ أو التمويل أو بيع الأصول، قد يُفصح عن البيانات الشخصية للأطراف المحتملة ومستشاريهم بموجب التزامات سرية، وقد تنتقل ضمن الصفقة. وسنُشعِر العملاء المتأثرين بأي تغيير في السيطرة يمس معالجة بياناتهم.">We may share personal data with our auditors, legal advisers, insurers, and other professional advisers where necessary and subject to obligations of confidentiality. In the event of a merger, acquisition, financing, or sale of assets, personal data may be disclosed to prospective counterparties and their advisers under confidentiality obligations, and may transfer as part of the transaction. We will notify affected Customers of any change of control affecting the processing of their data.</p>

    <h3 data-en="6.4 Legal and regulatory disclosure" data-ar="6.4 الإفصاح القانوني والتنظيمي">6.4 Legal and regulatory disclosure</h3>
    <p data-en="We may disclose personal data where we are required to do so by applicable law, court order, or binding request from a competent authority; where necessary to establish, exercise, or defend legal claims; or where necessary to protect the rights, property, or safety of Clauze, our Customers, or others." data-ar="قد نفصح عن البيانات الشخصية متى أوجب النظام ذلك، أو بموجب أمر قضائي أو طلب ملزم من جهة مختصة؛ أو متى كان الإفصاح لازمًا لإثبات حق أو ممارسته أو الدفاع عنه؛ أو لحماية حقوق كلوز أو عملائها أو غيرهم أو ممتلكاتهم أو سلامتهم.">We may disclose personal data where we are required to do so by applicable law, court order, or binding request from a competent authority; where necessary to establish, exercise, or defend legal claims; or where necessary to protect the rights, property, or safety of Clauze, our Customers, or others.</p>
    <p data-en="Where we receive a request from a governmental or judicial authority relating to Customer Content, we will, unless legally prohibited, notify the affected Customer before disclosure and provide a reasonable opportunity to challenge the request. We will disclose only the minimum information required to comply." data-ar="وإذا تلقّينا طلبًا من جهة حكومية أو قضائية يتعلق بمحتوى العميل، فسنُشعِر العميل المتأثر قبل الإفصاح (ما لم يمنعنا النظام من ذلك) ونمنحه فرصة معقولة للاعتراض على الطلب. ولا نفصح إلا عن الحد الأدنى من المعلومات اللازم للامتثال.">Where we receive a request from a governmental or judicial authority relating to Customer Content, we will, unless legally prohibited, notify the affected Customer before disclosure and provide a reasonable opportunity to challenge the request. We will disclose only the minimum information required to comply.</p>

    <!-- 7. SECURITY -->
    <h2 data-en="7. Security" data-ar="7. الأمان">7. Security</h2>
    <p data-en="We implement technical and organisational measures appropriate to the risk, taking into account the state of the art, the nature of the data, and the potential impact of a breach." data-ar="نطبّق تدابير تقنية وتنظيمية تتناسب مع درجة المخاطر، مع مراعاة أحدث ما وصلت إليه التقنية، وطبيعة البيانات، وحجم الأثر المحتمل في حال وقوع حادثة.">We implement technical and organisational measures appropriate to the risk, taking into account the state of the art, the nature of the data, and the potential impact of a breach.</p>
    <div class="pp-table-wrap">
      <table class="pp-table">
        <thead><tr>
          <th data-en="Control area" data-ar="مجال التحكم">Control area</th>
          <th data-en="Measures" data-ar="الإجراءات">Measures</th>
        </tr></thead>
        <tbody>
          <tr><td data-en="Encryption" data-ar="التشفير">Encryption</td><td data-en="Data encrypted in transit using TLS 1.2 or above. Data encrypted at rest using industry-standard algorithms. Integration credentials and secrets held in a dedicated secrets manager." data-ar="تشفير البيانات أثناء النقل باستخدام بروتوكول TLS الإصدار 1.2 فما فوق، وتشفيرها في حالة السكون بخوارزميات معيارية. وتُحفظ بيانات اعتماد التكامل والأسرار في مدير أسرار مخصص.">Data encrypted in transit using TLS 1.2 or above. Data encrypted at rest using industry-standard algorithms. Integration credentials and secrets held in a dedicated secrets manager.</td></tr>
          <tr><td data-en="Tenant isolation" data-ar="عزل نطاق العميل">Tenant isolation</td><td data-en="Every Customer tenant is logically isolated. Tenant scoping is enforced at every data access layer and is verified by automated tests in our continuous integration pipeline." data-ar="يُعزل نطاق كل عميل عزلًا منطقيًا، ويُنفَّذ هذا العزل في كل طبقة من طبقات الوصول إلى البيانات، ويُتحقق منه باختبارات آلية ضمن مسار التكامل المستمر.">Every Customer tenant is logically isolated. Tenant scoping is enforced at every data access layer and is verified by automated tests in our continuous integration pipeline.</td></tr>
          <tr><td data-en="Access control" data-ar="ضوابط الوصول">Access control</td><td data-en="Role-based access control with least-privilege defaults. Access to production systems is restricted, individually attributed, time-bound, and logged." data-ar="التحكم في الوصول بناءً على الأدوار مع اعتماد مبدأ الحد الأدنى من الصلاحيات. والوصول إلى بيئات الإنتاج مقيّد ومنسوب إلى أفراد بأعيانهم ومحدد المدة ومسجَّل.">Role-based access control with least-privilege defaults. Access to production systems is restricted, individually attributed, time-bound, and logged.</td></tr>
          <tr><td data-en="Authentication" data-ar="المصادقة">Authentication</td><td data-en="Support for single sign-on via SAML and OIDC, multi-factor authentication, session controls, and configurable IP allow-listing." data-ar="دعم الدخول الموحد عبر SAML وOIDC، والمصادقة متعددة العوامل، وضوابط الجلسات، وقوائم السماح بعناوين الإنترنت القابلة للضبط.">Support for single sign-on via SAML and OIDC, multi-factor authentication, session controls, and configurable IP allow-listing.</td></tr>
          <tr><td data-en="Audit logging" data-ar="سجلات المراجعة">Audit logging</td><td data-en="Append-only audit records covering state changes, permission changes, configuration changes, and AI interactions. Audit entries cannot be edited or deleted by any role." data-ar="سجلات إلحاقية فقط تغطي تغييرات الحالة والصلاحيات والإعدادات وتفاعلات الذكاء الاصطناعي. ولا يجوز لأي دور تعديل قيود المراجعة أو حذفها.">Append-only audit records covering state changes, permission changes, configuration changes, and AI interactions. Audit entries cannot be edited or deleted by any role.</td></tr>
          <tr><td data-en="Monitoring" data-ar="المراقبة">Monitoring</td><td data-en="Continuous monitoring for anomalous activity, failed authentication patterns, and unauthorised access attempts." data-ar="مراقبة مستمرة للنشاط غير المعتاد، وأنماط فشل المصادقة، ومحاولات الوصول غير المصرح بها.">Continuous monitoring for anomalous activity, failed authentication patterns, and unauthorised access attempts.</td></tr>
          <tr><td data-en="Personnel" data-ar="الموارد البشرية">Personnel</td><td data-en="Background screening where lawful, confidentiality undertakings, mandatory security and data protection training, and prompt access revocation on role change or departure." data-ar="التحقق من الخلفية حيثما يسمح القانون بذلك، وتعهدات السرية، والتدريب الإلزامي على الأمن وحماية البيانات، وإلغاء الصلاحيات فور تغيّر الدور أو انتهاء العلاقة.">Background screening where lawful, confidentiality undertakings, mandatory security and data protection training, and prompt access revocation on role change or departure.</td></tr>
          <tr><td data-en="Testing" data-ar="الاختبار">Testing</td><td data-en="Independent penetration testing conducted before major releases and periodically thereafter. Vulnerability scanning and dependency monitoring on an ongoing basis." data-ar="اختبارات اختراق مستقلة قبل الإصدارات الرئيسة وبصورة دورية بعدها، إضافة إلى الفحص المستمر للثغرات ومراقبة الاعتماديات.">Independent penetration testing conducted before major releases and periodically thereafter. Vulnerability scanning and dependency monitoring on an ongoing basis.</td></tr>
          <tr><td data-en="Resilience" data-ar="الجاهزية">Resilience</td><td data-en="Encrypted backups, documented recovery procedures, and defined recovery point and recovery time objectives tested periodically." data-ar="نسخ احتياطية مشفّرة، وإجراءات تعافٍ موثقة، وأهداف محددة لنقطة التعافي وزمن التعافي تُختبر دوريًا.">Encrypted backups, documented recovery procedures, and defined recovery point and recovery time objectives tested periodically.</td></tr>
        </tbody>
      </table>
    </div>

    <h3 data-en="7.1 Personal data breach" data-ar="7.1 انتهاك البيانات الشخصية">7.1 Personal data breach</h3>
    <p data-en="We maintain a documented incident response procedure. Where a personal data breach occurs:" data-ar="لدينا إجراء موثق للاستجابة للحوادث. وعند وقوع تسرب للبيانات الشخصية:">We maintain a documented incident response procedure. Where a personal data breach occurs:</p>
    <ul>
      <li data-en="We will notify the competent supervisory authority within the period required by applicable law, including within seventy-two (72) hours where the GDPR applies, and within the period prescribed by the PDPL Implementing Regulations where KSA law applies." data-ar="نُبلّغ الجهة الرقابية المختصة خلال المدة التي يوجبها النظام المنطبق، بما في ذلك خلال اثنتين وسبعين (72) ساعة حيث تنطبق اللائحة العامة لحماية البيانات، وخلال المدة المقررة في اللائحة التنفيذية للنظام حيث ينطبق النظام السعودي.">We will notify the competent supervisory authority within the period required by applicable law, including within seventy-two (72) hours where the GDPR applies, and within the period prescribed by the PDPL Implementing Regulations where KSA law applies.</li>
      <li data-en="Where Clauze acts as a Processor, we will notify the affected Customer without undue delay after becoming aware, and provide the information reasonably required for that Customer to meet its own notification obligations." data-ar="حين تعمل كلوز بصفة جهة معالجة، نُشعِر العميل المتأثر دون تأخير غير مبرر بعد علمنا، ونزوّده بالمعلومات اللازمة للوفاء بالتزاماته الخاصة بالإبلاغ.">Where Clauze acts as a Processor, we will notify the affected Customer without undue delay after becoming aware, and provide the information reasonably required for that Customer to meet its own notification obligations.</li>
      <li data-en="Where the breach is likely to result in a high risk to the rights and freedoms of individuals, affected individuals will be notified in accordance with applicable law." data-ar="إذا كان من شأن التسرب أن يُلحق ضررًا جسيمًا بحقوق أصحاب البيانات، نُشعِر المتأثرين وفق ما يوجبه النظام.">Where the breach is likely to result in a high risk to the rights and freedoms of individuals, affected individuals will be notified in accordance with applicable law.</li>
    </ul>
    <p data-en="No security measure is absolute. While we work continuously to protect personal data, we cannot guarantee that unauthorised access will never occur." data-ar="لا يوجد تدبير أمني مطلق. وبينما نعمل باستمرار على حماية البيانات الشخصية، لا يمكننا ضمان استحالة وقوع وصول غير مصرح به.">No security measure is absolute. While we work continuously to protect personal data, we cannot guarantee that unauthorised access will never occur.</p>

    <!-- 8. INTERNATIONAL TRANSFERS AND DATA RESIDENCY -->
    <h2 data-en="8. International Transfers and Data Residency" data-ar="8. النقل الدولي وإقامة البيانات">8. International Transfers and Data Residency</h2>

    <h3 data-en="8.1 Data residency" data-ar="8.1 إقامة البيانات">8.1 Data residency</h3>
    <p data-en="Clauze offers regional hosting so that Customers subject to data localisation requirements can meet them. Where a Customer is hosted in a specific region, Customer Content and the personal data contained within it are stored in that region." data-ar="توفّر كلوز استضافة إقليمية تمكّن العملاء الخاضعين لمتطلبات توطين البيانات من الوفاء بها. وحين يُستضاف العميل في إقليم محدد، يُحفظ محتوى العميل والبيانات الشخصية الواردة فيه داخل ذلك الإقليم.">Clauze offers regional hosting so that Customers subject to data localisation requirements can meet them. Where a Customer is hosted in a specific region, Customer Content and the personal data contained within it are stored in that region.</p>
    <div class="pp-table-wrap">
      <table class="pp-table">
        <thead><tr>
          <th data-en="Region" data-ar="المنطقة">Region</th>
          <th data-en="Available to" data-ar="متاح لـ">Available to</th>
          <th data-en="Notes" data-ar="ملاحظات">Notes</th>
        </tr></thead>
        <tbody>
          <tr><td data-en="Kingdom of Saudi Arabia" data-ar="المملكة العربية السعودية">Kingdom of Saudi Arabia</td><td data-en="KSA Customers and any Customer requiring in-Kingdom residency." data-ar="العملاء في المملكة وكل عميل يشترط التوطين داخل المملكة.">KSA Customers and any Customer requiring in-Kingdom residency.</td><td data-en="In-Kingdom storage and processing, including AI inference, where the Customer&rsquo;s subscription specifies it." data-ar="التخزين والمعالجة داخل المملكة، بما يشمل استدلال الذكاء الاصطناعي، حيث ينص اشتراك العميل على ذلك.">In-Kingdom storage and processing, including AI inference, where the Customer's subscription specifies it.</td></tr>
          <tr><td data-en="United Arab Emirates" data-ar="الإمارات العربية المتحدة">United Arab Emirates</td><td data-en="UAE and wider GCC Customers." data-ar="عملاء الإمارات ودول الخليج.">UAE and wider GCC Customers.</td><td data-en="Regional storage within the UAE." data-ar="التخزين الإقليمي داخل دولة الإمارات.">Regional storage within the UAE.</td></tr>
          <tr><td data-en="Other regions" data-ar="أقاليم أخرى">Other regions</td><td data-en="As offered from time to time." data-ar="حسب ما يُتاح من وقت لآخر.">As offered from time to time.</td><td data-en="Specified in the Customer&rsquo;s subscription documentation." data-ar="يُحدَّد في وثائق اشتراك العميل.">Specified in the Customer's subscription documentation.</td></tr>
        </tbody>
      </table>
    </div>
    <p data-en="The hosting region applicable to a Customer is recorded at the time of provisioning and is a contractual commitment. It cannot be changed without a controlled migration process and the Customer&rsquo;s written agreement." data-ar="يُقيَّد إقليم الاستضافة المنطبق على العميل عند التهيئة، ويُعد التزامًا تعاقديًا لا يجوز تغييره إلا عبر إجراء ترحيل منضبط وبموافقة العميل الخطية.">The hosting region applicable to a Customer is recorded at the time of provisioning and is a contractual commitment. It cannot be changed without a controlled migration process and the Customer's written agreement.</p>

    <h3 data-en="8.2 Cross-border transfers" data-ar="8.2 النقل عبر الحدود">8.2 Cross-border transfers</h3>
    <p data-en="Where personal data is transferred outside the jurisdiction in which it was collected, we ensure an appropriate safeguard is in place. Depending on the applicable regime, this may include:" data-ar="حين تُنقل البيانات الشخصية خارج الولاية القضائية التي جُمعت فيها، نتحقق من توافر ضمانة ملائمة. وقد تشمل هذه الضمانة (بحسب النظام المنطبق) ما يأتي:">Where personal data is transferred outside the jurisdiction in which it was collected, we ensure an appropriate safeguard is in place. Depending on the applicable regime, this may include:</p>
    <ul>
      <li data-en="Transfer to a jurisdiction recognised by the relevant authority as providing an adequate level of protection;" data-ar="النقل إلى ولاية قضائية تقرّ الجهة المختصة بأنها توفّر مستوى حماية ملائمًا.">Transfer to a jurisdiction recognised by the relevant authority as providing an adequate level of protection;</li>
      <li data-en="Standard contractual clauses or equivalent approved transfer mechanisms;" data-ar="البنود التعاقدية النموذجية أو ما يعادلها من آليات نقل معتمدة.">Standard contractual clauses or equivalent approved transfer mechanisms;</li>
      <li data-en="Approval or exemption granted by the competent supervisory authority, including SDAIA where the PDPL applies;" data-ar="موافقة أو استثناء صادر عن الجهة الرقابية المختصة، بما في ذلك سدايا حيث ينطبق النظام السعودي.">Approval or exemption granted by the competent supervisory authority, including SDAIA where the PDPL applies;</li>
      <li data-en="Binding corporate rules or an approved certification mechanism;" data-ar="القواعد المؤسسية الملزمة أو آلية اعتماد معتمدة.">Binding corporate rules or an approved certification mechanism;</li>
      <li data-en="Any other lawful basis available under applicable law." data-ar="أي أساس نظامي آخر متاح بموجب النظام المنطبق.">Any other lawful basis available under applicable law.</li>
    </ul>
    <p data-en="Where the PDPL applies, transfers outside the Kingdom of Saudi Arabia are made only in accordance with the conditions set out in the PDPL and its Implementing Regulations, and only where the transfer does not prejudice national security or the vital interests of the Kingdom." data-ar="وحيث ينطبق النظام السعودي، لا يُنقل أي بيان شخصي خارج المملكة إلا وفق الشروط المقررة في النظام ولائحته التنفيذية، وبشرط ألا يُخلّ النقل بالأمن الوطني أو بالمصالح الحيوية للمملكة.">Where the PDPL applies, transfers outside the Kingdom of Saudi Arabia are made only in accordance with the conditions set out in the PDPL and its Implementing Regulations, and only where the transfer does not prejudice national security or the vital interests of the Kingdom.</p>
    <p data-en="Details of the safeguards applicable to a specific transfer are available on request from privacy@clauze.ai." data-ar="وتتوافر تفاصيل الضمانات المنطبقة على أي عملية نقل بعينها عند طلبها من privacy@clauze.ai.">Details of the safeguards applicable to a specific transfer are available on request from privacy@clauze.ai.</p>

    <!-- 9. DATA RETENTION -->
    <h2 data-en="9. Data Retention" data-ar="9. الاحتفاظ بالبيانات">9. Data Retention</h2>
    <p data-en="We retain personal data only for as long as necessary for the purposes for which it was collected, or for such longer period as is required by applicable law." data-ar="لا نحتفظ بالبيانات الشخصية إلا للمدة اللازمة لتحقيق الأغراض التي جُمعت من أجلها، أو للمدة الأطول التي يوجبها النظام المنطبق.">We retain personal data only for as long as necessary for the purposes for which it was collected, or for such longer period as is required by applicable law.</p>
    <div class="pp-table-wrap">
      <table class="pp-table">
        <thead><tr>
          <th data-en="Data category" data-ar="فئة البيانات">Data category</th>
          <th data-en="Retention period" data-ar="مدة الاحتفاظ">Retention period</th>
          <th data-en="Basis" data-ar="الأساس">Basis</th>
        </tr></thead>
        <tbody>
          <tr><td data-en="Customer Content" data-ar="محتوى العميل">Customer Content</td><td data-en="For the duration of the subscription, plus the post-termination export window specified in the subscription agreement. Deleted thereafter in accordance with the Customer&rsquo;s instructions." data-ar="طوال مدة الاشتراك، مع إضافة فترة التصدير بعد الإنهاء المنصوص عليها في اتفاقية الاشتراك. ثم يُتلَف وفق تعليمات العميل.">For the duration of the subscription, plus the post-termination export window specified in the subscription agreement. Deleted thereafter in accordance with the Customer's instructions.</td><td data-en="Contract" data-ar="تنفيذ عقد">Contract</td></tr>
          <tr><td data-en="Account and identity data" data-ar="بيانات الحساب والهوية">Account and identity data</td><td data-en="For the duration of the account, plus up to twenty-four (24) months after closure." data-ar="طوال مدة الحساب، مع إضافة مدة لا تتجاوز أربعة وعشرين (24) شهرًا بعد إغلاقه.">For the duration of the account, plus up to twenty-four (24) months after closure.</td><td data-en="Contract and legitimate interests" data-ar="تنفيذ عقد ومصلحة مشروعة">Contract and legitimate interests</td></tr>
          <tr><td data-en="Audit records" data-ar="سجلات المراجعة">Audit records</td><td data-en="For the contractual retention period specified in the subscription agreement, or such longer period as required by law." data-ar="طوال المدة التعاقدية المنصوص عليها في اتفاقية الاشتراك، أو المدة الأطول التي يوجبها النظام.">For the contractual retention period specified in the subscription agreement, or such longer period as required by law.</td><td data-en="Legal obligation and legitimate interests" data-ar="التزام نظامي ومصلحة مشروعة">Legal obligation and legitimate interests</td></tr>
          <tr><td data-en="Billing and financial records" data-ar="السجلات المالية والفوترة">Billing and financial records</td><td data-en="For the period required by applicable tax and accounting law in the relevant jurisdiction, typically ten (10) years." data-ar="للمدة التي توجبها أنظمة الضريبة والمحاسبة في الولاية القضائية المعنية، وهي عشر (10) سنوات في الغالب.">For the period required by applicable tax and accounting law in the relevant jurisdiction, typically ten (10) years.</td><td data-en="Legal obligation" data-ar="التزام نظامي">Legal obligation</td></tr>
          <tr><td data-en="Support communications" data-ar="مراسلات الدعم">Support communications</td><td data-en="Up to thirty-six (36) months from resolution." data-ar="مدة لا تتجاوز ستة وثلاثين (36) شهرًا من تاريخ الإغلاق.">Up to thirty-six (36) months from resolution.</td><td data-en="Legitimate interests" data-ar="مصلحة مشروعة">Legitimate interests</td></tr>
          <tr><td data-en="Marketing data" data-ar="البيانات التسويقية">Marketing data</td><td data-en="Until consent is withdrawn or after twenty-four (24) months of inactivity, whichever is earlier." data-ar="حتى سحب الموافقة أو بعد أربعة وعشرين (24) شهرًا من عدم النشاط، أيهما أسبق.">Until consent is withdrawn or after twenty-four (24) months of inactivity, whichever is earlier.</td><td data-en="Consent" data-ar="الموافقة">Consent</td></tr>
          <tr><td data-en="Website analytics" data-ar="تحليلات الموقع">Website analytics</td><td data-en="Up to twenty-six (26) months." data-ar="مدة لا تتجاوز ستة وعشرين (26) شهرًا.">Up to twenty-six (26) months.</td><td data-en="Consent or legitimate interests" data-ar="الموافقة أو المصلحة المشروعة">Consent or legitimate interests</td></tr>
          <tr><td data-en="Recruitment data" data-ar="بيانات التوظيف">Recruitment data</td><td data-en="Up to twelve (12) months after the conclusion of the recruitment process, or longer where the applicant consents to retention for future opportunities." data-ar="مدة لا تتجاوز اثني عشر (12) شهرًا من انتهاء إجراءات التوظيف، أو مدة أطول بموافقة المتقدم للنظر في فرص مستقبلية.">Up to twelve (12) months after the conclusion of the recruitment process, or longer where the applicant consents to retention for future opportunities.</td><td data-en="Consent and legitimate interests" data-ar="الموافقة والمصلحة المشروعة">Consent and legitimate interests</td></tr>
          <tr><td data-en="Security and access logs" data-ar="سجلات الأمن والوصول">Security and access logs</td><td data-en="Up to twenty-four (24) months." data-ar="مدة لا تتجاوز أربعة وعشرين (24) شهرًا.">Up to twenty-four (24) months.</td><td data-en="Legitimate interests and legal obligation" data-ar="مصلحة مشروعة والتزام نظامي">Legitimate interests and legal obligation</td></tr>
        </tbody>
      </table>
    </div>
    <p data-en="Customers may configure shorter retention periods for certain categories within the platform. On termination, we provide a complete export of Customer Content before deletion, in accordance with the subscription agreement." data-ar="وللعملاء ضبط مدد احتفاظ أقصر لفئات معينة داخل المنصة. وعند الإنهاء، نوفّر تصديرًا كاملًا لمحتوى العميل قبل الإتلاف، وفق اتفاقية الاشتراك.">Customers may configure shorter retention periods for certain categories within the platform. On termination, we provide a complete export of Customer Content before deletion, in accordance with the subscription agreement.</p>
    <p data-en="Where deletion is not immediately possible for technical reasons (for example, data held in encrypted backups) we isolate the data from further processing and delete it on the next scheduled backup rotation." data-ar="وحيث يتعذر الإتلاف الفوري لأسباب تقنية (كالبيانات المحفوظة ضمن نسخ احتياطية مشفّرة) نعزل البيانات عن أي معالجة لاحقة ونتلفها عند دورة التدوير التالية للنسخ الاحتياطية.">Where deletion is not immediately possible for technical reasons (for example, data held in encrypted backups) we isolate the data from further processing and delete it on the next scheduled backup rotation.</p>

    <!-- 10. YOUR RIGHTS -->
    <h2 data-en="10. Your Rights" data-ar="10. حقوقك">10. Your Rights</h2>
    <p data-en="Subject to the applicable legal regime and to any exemptions available under it, you have the following rights in relation to your personal data." data-ar="مع مراعاة النظام المنطبق وما يرد فيه من استثناءات، تتمتع بالحقوق الآتية في شأن بياناتك الشخصية.">Subject to the applicable legal regime and to any exemptions available under it, you have the following rights in relation to your personal data.</p>
    <div class="pp-table-wrap">
      <table class="pp-table">
        <thead><tr>
          <th data-en="Right" data-ar="الحق">Right</th>
          <th data-en="What it means" data-ar="ماذا يعني">What it means</th>
        </tr></thead>
        <tbody>
          <tr><td data-en="Right to be informed" data-ar="الحق في العلم">Right to be informed</td><td data-en="To know what personal data we process, why, on what basis, and with whom we share it. This Policy is intended to satisfy that right." data-ar="أن تعلم ما نعالجه من بياناتك الشخصية، ولماذا، وعلى أي أساس، ومع من نشاركه. وهذه السياسة معدّة للوفاء بهذا الحق.">To know what personal data we process, why, on what basis, and with whom we share it. This Policy is intended to satisfy that right.</td></tr>
          <tr><td data-en="Right of access" data-ar="الحق في الوصول">Right of access</td><td data-en="To obtain confirmation of whether we process your personal data and, if so, to receive a copy of it together with prescribed information." data-ar="أن تحصل على تأكيد بمعالجتنا لبياناتك الشخصية من عدمه، وأن تحصل على نسخة منها مع المعلومات المقررة نظامًا.">To obtain confirmation of whether we process your personal data and, if so, to receive a copy of it together with prescribed information.</td></tr>
          <tr><td data-en="Right to rectification" data-ar="الحق في التصحيح">Right to rectification</td><td data-en="To have inaccurate personal data corrected and incomplete personal data completed." data-ar="أن تُصحَّح بياناتك غير الدقيقة وأن تُستكمل بياناتك الناقصة.">To have inaccurate personal data corrected and incomplete personal data completed.</td></tr>
          <tr><td data-en="Right to erasure" data-ar="الحق في الإتلاف">Right to erasure</td><td data-en="To request deletion of your personal data where there is no continuing lawful basis for us to hold it. This right does not apply where retention is required by law or necessary for the establishment or defence of legal claims." data-ar="أن تطلب إتلاف بياناتك الشخصية متى انتفى الأساس النظامي لاحتفاظنا بها. ولا يسري هذا الحق حيث يوجب النظام الاحتفاظ، أو حيث يكون الاحتفاظ لازمًا لإثبات حق أو الدفاع عنه.">To request deletion of your personal data where there is no continuing lawful basis for us to hold it. This right does not apply where retention is required by law or necessary for the establishment or defence of legal claims.</td></tr>
          <tr><td data-en="Right to restriction" data-ar="الحق في تقييد المعالجة">Right to restriction</td><td data-en="To request that we limit processing of your personal data in certain circumstances, for example while the accuracy of the data is being verified." data-ar="أن تطلب تقييد معالجة بياناتك في حالات معينة، كالتحقق من دقتها.">To request that we limit processing of your personal data in certain circumstances, for example while the accuracy of the data is being verified.</td></tr>
          <tr><td data-en="Right to object" data-ar="الحق في الاعتراض">Right to object</td><td data-en="To object to processing carried out on the basis of legitimate interests, and to object at any time to processing for direct marketing purposes." data-ar="أن تعترض على المعالجة القائمة على المصلحة المشروعة، وأن تعترض في أي وقت على المعالجة لأغراض التسويق المباشر.">To object to processing carried out on the basis of legitimate interests, and to object at any time to processing for direct marketing purposes.</td></tr>
          <tr><td data-en="Right to data portability" data-ar="الحق في نقل البيانات">Right to data portability</td><td data-en="To receive personal data you provided to us in a structured, commonly used, machine-readable format, and to have it transmitted to another controller where technically feasible." data-ar="أن تتسلم البيانات التي زوّدتنا بها بصيغة مهيكلة شائعة الاستخدام مقروءة آليًا، وأن تُنقل إلى جهة تحكم أخرى متى كان ذلك ممكنًا تقنيًا.">To receive personal data you provided to us in a structured, commonly used, machine-readable format, and to have it transmitted to another controller where technically feasible.</td></tr>
          <tr><td data-en="Right to withdraw consent" data-ar="الحق في سحب الموافقة">Right to withdraw consent</td><td data-en="To withdraw consent at any time where processing is based on consent. Withdrawal does not affect the lawfulness of processing carried out before withdrawal." data-ar="أن تسحب موافقتك في أي وقت حيث تقوم المعالجة على الموافقة. ولا يمس السحب مشروعية المعالجة التي تمت قبله.">To withdraw consent at any time where processing is based on consent. Withdrawal does not affect the lawfulness of processing carried out before withdrawal.</td></tr>
          <tr><td data-en="Right to lodge a complaint" data-ar="الحق في التظلم">Right to lodge a complaint</td><td data-en="To complain to the competent supervisory authority in your jurisdiction. See Section 14." data-ar="أن تتقدم بشكوى إلى الجهة الرقابية المختصة في ولايتك القضائية. يُنظر البند (14).">To complain to the competent supervisory authority in your jurisdiction. See Section 14.</td></tr>
        </tbody>
      </table>
    </div>

    <h3 data-en="10.1 How to exercise your rights" data-ar="10.1 كيفية ممارسة حقوقك">10.1 How to exercise your rights</h3>
    <p data-en="Submit a request to privacy@clauze.ai. We will acknowledge receipt and respond within the period required by applicable law, generally within thirty (30) days, extendable where the request is complex, in which case we will inform you of the extension and the reasons for it." data-ar="يُقدَّم الطلب إلى privacy@clauze.ai. وسنُشعِرك باستلامه ونستجيب خلال المدة التي يوجبها النظام المنطبق، وهي ثلاثون (30) يومًا في الغالب، قابلة للتمديد حين يكون الطلب معقدًا، وفي هذه الحالة نُشعرك بالتمديد وأسبابه.">Submit a request to privacy@clauze.ai. We will acknowledge receipt and respond within the period required by applicable law, generally within thirty (30) days, extendable where the request is complex, in which case we will inform you of the extension and the reasons for it.</p>
    <p data-en="We will take reasonable steps to verify your identity before acting on a request. This protects against unauthorised disclosure. We do not charge a fee for responding to requests unless a request is manifestly unfounded, excessive, or repetitive." data-ar="وسنتخذ خطوات معقولة للتحقق من هويتك قبل تنفيذ الطلب، حمايةً من الإفصاح غير المصرح به. ولا نتقاضى مقابلًا عن الاستجابة للطلبات، ما لم يكن الطلب ظاهر البطلان أو مفرطًا أو متكررًا.">We will take reasonable steps to verify your identity before acting on a request. This protects against unauthorised disclosure. We do not charge a fee for responding to requests unless a request is manifestly unfounded, excessive, or repetitive.</p>

    <h3 data-en="10.2 Requests relating to Customer Content" data-ar="10.2 الطلبات المتعلقة بمحتوى العميل">10.2 Requests relating to Customer Content</h3>
    <div class="pp-note" data-en="If your personal data appears within a document uploaded to the platform by an organisation, that organisation is the Controller. Please direct your request to that organisation. If you contact us, we will (where we can identify the relevant Customer) forward your request and notify you that we have done so. We cannot act on such a request without the Customer&rsquo;s instruction." data-ar="إذا وردت بياناتك الشخصية ضمن مستند رفعته إلى المنصة منشأة ما، فتلك المنشأة هي جهة التحكم، ويُوجَّه الطلب إليها. وإذا تواصلت معنا، فسنحيل طلبك إليها (متى أمكننا تحديدها) ونُشعرك بذلك. ولا يمكننا تنفيذ مثل هذا الطلب دون تعليمات من العميل.">If your personal data appears within a document uploaded to the platform by an organisation, that organisation is the Controller. Please direct your request to that organisation. If you contact us, we will (where we can identify the relevant Customer) forward your request and notify you that we have done so. We cannot act on such a request without the Customer's instruction.</div>

    <!-- 11. COOKIES AND TRACKING TECHNOLOGIES -->
    <h2 data-en="11. Cookies and Tracking Technologies" data-ar="11. ملفات تعريف الارتباط وتقنيات التتبع">11. Cookies and Tracking Technologies</h2>
    <p data-en="We use cookies and similar technologies on our website and within the platform. A cookie is a small text file placed on your device." data-ar="نستخدم ملفات الارتباط والتقنيات المشابهة على موقعنا وداخل المنصة. وملف الارتباط ملف نصي صغير يُحفظ على جهازك.">We use cookies and similar technologies on our website and within the platform. A cookie is a small text file placed on your device.</p>
    <div class="pp-table-wrap">
      <table class="pp-table">
        <thead><tr>
          <th data-en="Category" data-ar="الفئة">Category</th>
          <th data-en="Purpose" data-ar="الغرض">Purpose</th>
          <th data-en="Consent required" data-ar="الموافقة مطلوبة">Consent required</th>
        </tr></thead>
        <tbody>
          <tr><td data-en="Strictly necessary" data-ar="ضرورية بحتًا">Strictly necessary</td><td data-en="Authentication, session management, security, load balancing, and preserving your preferences. The service cannot function without these." data-ar="المصادقة، وإدارة الجلسة، والأمن، وموازنة الأحمال، وحفظ تفضيلاتك. ولا تعمل الخدمة من دونها.">Authentication, session management, security, load balancing, and preserving your preferences. The service cannot function without these.</td><td data-en="No, exempt" data-ar="لا، معفاة">No, exempt</td></tr>
          <tr><td data-en="Functional" data-ar="وظيفية">Functional</td><td data-en="Remembering language selection, interface preferences, and recently accessed items." data-ar="تذكّر اللغة المختارة، وتفضيلات الواجهة، والعناصر التي جرى الوصول إليها حديثًا.">Remembering language selection, interface preferences, and recently accessed items.</td><td data-en="Yes" data-ar="نعم">Yes</td></tr>
          <tr><td data-en="Analytics" data-ar="تحليلية">Analytics</td><td data-en="Measuring aggregate feature usage, page performance, and error rates to improve the product." data-ar="قياس استخدام الخصائص بصورة مجمّعة، وأداء الصفحات، ومعدلات الأخطاء بغرض تطوير المنتج.">Measuring aggregate feature usage, page performance, and error rates to improve the product.</td><td data-en="Yes" data-ar="نعم">Yes</td></tr>
          <tr><td data-en="Marketing" data-ar="تسويقية">Marketing</td><td data-en="Measuring the effectiveness of marketing campaigns on our public website. Not used within the authenticated platform." data-ar="قياس أثر الحملات التسويقية على موقعنا العام. ولا تُستخدم داخل المنصة بعد تسجيل الدخول.">Measuring the effectiveness of marketing campaigns on our public website. Not used within the authenticated platform.</td><td data-en="Yes" data-ar="نعم">Yes</td></tr>
        </tbody>
      </table>
    </div>
    <p data-en="You may manage non-essential cookies through the consent banner presented on first visit, through your browser settings, or by contacting us. Blocking strictly necessary cookies will prevent the platform from functioning." data-ar="يمكنك إدارة ملفات الارتباط غير الضرورية عبر شريط الموافقة الظاهر عند أول زيارة، أو عبر إعدادات متصفحك، أو بالتواصل معنا. ويؤدي حظر الملفات الضرورية بحتًا إلى تعطّل المنصة.">You may manage non-essential cookies through the consent banner presented on first visit, through your browser settings, or by contacting us. Blocking strictly necessary cookies will prevent the platform from functioning.</p>
    <p data-en="We honour Global Privacy Control and similar automated opt-out signals where technically supported." data-ar="ونحترم إشارة التحكم العالمي في الخصوصية وما يماثلها من إشارات الانسحاب الآلية حيثما كان ذلك مدعومًا تقنيًا.">We honour Global Privacy Control and similar automated opt-out signals where technically supported.</p>
    <div class="pp-note" data-en="Clauze products do not display advertising, and we do not permit advertisers to pay for placement or promotion within the platform." data-ar="لا تعرض منتجات كلوز أي إعلانات، ولا نسمح للمعلنين بالدفع مقابل الظهور أو الترويج داخل المنصة.">Clauze products do not display advertising, and we do not permit advertisers to pay for placement or promotion within the platform.</div>

    <!-- 12. CHILDREN -->
    <h2 data-en="12. Children" data-ar="12. الأطفال">12. Children</h2>
    <p data-en="The Clauze platform is a business tool intended for use by organisations and their authorised personnel. It is not directed at children and we do not knowingly collect personal data from any individual under the age of eighteen (18)." data-ar="منصة كلوز أداة عمل موجّهة إلى المنشآت ومنسوبيها المصرّح لهم، وليست موجهة إلى الأطفال. ولا نجمع عن علم أي بيانات شخصية من فرد يقل عمره عن ثمانية عشر (18) عامًا.">The Clauze platform is a business tool intended for use by organisations and their authorised personnel. It is not directed at children and we do not knowingly collect personal data from any individual under the age of eighteen (18).</p>
    <p data-en="If we become aware that we have collected personal data from a child, we will delete it promptly. If you believe a child has provided personal data to us, contact privacy@clauze.ai." data-ar="وإذا تبيّن لنا أننا جمعنا بيانات شخصية من طفل، أتلفناها على الفور. وإذا كنت تعتقد أن طفلًا زوّدنا ببيانات شخصية، فتواصل معنا على privacy@clauze.ai.">If we become aware that we have collected personal data from a child, we will delete it promptly. If you believe a child has provided personal data to us, contact privacy@clauze.ai.</p>

    <!-- 13. JURISDICTION-SPECIFIC PROVISIONS -->
    <h2 data-en="13. Jurisdiction-Specific Provisions" data-ar="13. أحكام خاصة بالاختصاص القضائي">13. Jurisdiction-Specific Provisions</h2>
    <p data-en="The provisions below supplement this Policy and apply where the relevant regime governs the processing. In the event of conflict, the jurisdiction-specific provision prevails for data subject to that regime." data-ar="تُكمّل الأحكام الآتية هذه السياسة وتسري حيث ينطبق النظام المعني. وعند التعارض، يُقدَّم الحكم الخاص بالولاية القضائية على الحكم العام في شأن البيانات الخاضعة لذلك النظام.">The provisions below supplement this Policy and apply where the relevant regime governs the processing. In the event of conflict, the jurisdiction-specific provision prevails for data subject to that regime.</p>

    <h3 data-en="13.1 Kingdom of Saudi Arabia, PDPL" data-ar="13.1 المملكة العربية السعودية، نظام حماية البيانات الشخصية">13.1 Kingdom of Saudi Arabia, PDPL</h3>
    <p data-en="Where processing is subject to the Personal Data Protection Law (Royal Decree M/19, 1443H) and its Implementing Regulations:" data-ar="حيث تخضع المعالجة لنظام حماية البيانات الشخصية الصادر بالمرسوم الملكي رقم (م/19) ولائحته التنفيذية:">Where processing is subject to the Personal Data Protection Law (Royal Decree M/19, 1443H) and its Implementing Regulations:</p>
    <ul>
      <li data-en="The supervisory authority is the Saudi Data and Artificial Intelligence Authority (SDAIA)." data-ar="الجهة الرقابية المختصة هي الهيئة السعودية للبيانات والذكاء الاصطناعي (سدايا).">The supervisory authority is the Saudi Data and Artificial Intelligence Authority (SDAIA).</li>
      <li data-en="We maintain a Record of Processing Activities as required by the PDPL and make it available to SDAIA on request." data-ar="نحتفظ بسجل أنشطة المعالجة وفق ما يوجبه النظام، ونتيحه لسدايا عند الطلب.">We maintain a Record of Processing Activities as required by the PDPL and make it available to SDAIA on request.</li>
      <li data-en="Personal data of individuals in the Kingdom is stored and processed within the Kingdom where the Customer&rsquo;s subscription specifies in-Kingdom residency." data-ar="تُحفظ البيانات الشخصية للأفراد داخل المملكة وتُعالَج داخلها حيث ينص اشتراك العميل على التوطين داخل المملكة.">Personal data of individuals in the Kingdom is stored and processed within the Kingdom where the Customer's subscription specifies in-Kingdom residency.</li>
      <li data-en="Transfers outside the Kingdom are made only where permitted by the PDPL and its Implementing Regulations, and only where the transfer does not prejudice national security or vital interests of the Kingdom." data-ar="لا يُنقل أي بيان خارج المملكة إلا وفق ما يجيزه النظام ولائحته التنفيذية، وبشرط ألا يُخلّ ذلك بالأمن الوطني أو بالمصالح الحيوية للمملكة.">Transfers outside the Kingdom are made only where permitted by the PDPL and its Implementing Regulations, and only where the transfer does not prejudice national security or vital interests of the Kingdom.</li>
      <li data-en="We do not process personal data for direct marketing without prior consent, and every marketing communication includes a means of opting out." data-ar="لا نعالج البيانات الشخصية لأغراض التسويق المباشر دون موافقة مسبقة، وتتضمن كل رسالة تسويقية وسيلة للانسحاب.">We do not process personal data for direct marketing without prior consent, and every marketing communication includes a means of opting out.</li>
      <li data-en="Where required, we appoint a Data Protection Officer and register with SDAIA in accordance with the applicable thresholds." data-ar="نعيّن مسؤولًا لحماية البيانات الشخصية ونسجّل لدى سدايا وفق الحدود المقررة، متى انطبق ذلك.">Where required, we appoint a Data Protection Officer and register with SDAIA in accordance with the applicable thresholds.</li>
      <li data-en="Data subjects may lodge a complaint with SDAIA. Contact details are published at sdaia.gov.sa." data-ar="لأصحاب البيانات التقدم بشكوى إلى سدايا، وبيانات التواصل منشورة على sdaia.gov.sa.">Data subjects may lodge a complaint with SDAIA. Contact details are published at sdaia.gov.sa.</li>
    </ul>

    <!-- 14. CONTACT AND COMPLAINTS -->
    <h2 data-en="14. Contact and Complaints" data-ar="14. التواصل والشكاوى">14. Contact and Complaints</h2>

    <h3 data-en="14.1 Contact us" data-ar="14.1 اتصل بنا">14.1 Contact us</h3>
    <p data-en="For any question about this Policy, to exercise a right, or to raise a concern about how we handle personal data:" data-ar="لأي استفسار عن هذه السياسة، أو لممارسة حق من الحقوق، أو لإبداء ملاحظة على طريقة تعاملنا مع البيانات الشخصية:">For any question about this Policy, to exercise a right, or to raise a concern about how we handle personal data:</p>
    <div class="pp-table-wrap">
      <table class="pp-table">
        <tbody>
          <tr><td data-en="Privacy and security contact" data-ar="التواصل للخصوصية والأمن">Privacy and security contact</td><td>privacy@clauze.ai</td></tr>
        </tbody>
      </table>
    </div>

    <h3 data-en="14.2 Complaints" data-ar="14.2 الشكاوى">14.2 Complaints</h3>
    <p data-en="If you are dissatisfied with how we have handled your personal data or your request, please contact us first at privacy@clauze.ai so that we have the opportunity to resolve the matter. We take complaints seriously and will investigate and respond." data-ar="إذا لم ترضك طريقة تعاملنا مع بياناتك الشخصية أو مع طلبك، فنرجو التواصل معنا أولًا على privacy@clauze.ai لتتاح لنا فرصة معالجة الأمر. ونحن نتعامل مع الشكاوى بجدية، ونتولى فحصها والرد عليها.">If you are dissatisfied with how we have handled your personal data or your request, please contact us first at privacy@clauze.ai so that we have the opportunity to resolve the matter. We take complaints seriously and will investigate and respond.</p>
    <p data-en="You also have the right to lodge a complaint directly with the competent supervisory authority in your jurisdiction:" data-ar="ولك كذلك الحق في التقدم بشكوى مباشرة إلى الجهة الرقابية المختصة في ولايتك القضائية:">You also have the right to lodge a complaint directly with the competent supervisory authority in your jurisdiction:</p>
    <div class="pp-table-wrap">
      <table class="pp-table">
        <thead><tr>
          <th data-en="Jurisdiction" data-ar="الاختصاص">Jurisdiction</th>
          <th data-en="Supervisory authority" data-ar="الجهة الرقابية">Supervisory authority</th>
        </tr></thead>
        <tbody>
          <tr><td data-en="Kingdom of Saudi Arabia" data-ar="المملكة العربية السعودية">Kingdom of Saudi Arabia</td><td data-en="Saudi Data and Artificial Intelligence Authority (SDAIA)" data-ar="الهيئة السعودية للبيانات والذكاء الاصطناعي (سدايا)">Saudi Data and Artificial Intelligence Authority (SDAIA)</td></tr>
        </tbody>
      </table>
    </div>

    <!-- 15. CHANGES TO THIS POLICY -->
    <h2 data-en="15. Changes to This Policy" data-ar="15. التغييرات على هذه السياسة">15. Changes to This Policy</h2>
    <p data-en="We may update this Policy from time to time to reflect changes in our practices, the platform, or applicable law." data-ar="قد نحدّث هذه السياسة من وقت لآخر لتعكس تغيّرًا في ممارساتنا أو في المنصة أو في النظام المنطبق.">We may update this Policy from time to time to reflect changes in our practices, the platform, or applicable law.</p>
    <ul>
      <li data-en="The effective date at the top of this Policy indicates when it was last revised." data-ar="يشير تاريخ السريان المدوّن في صدر هذه السياسة إلى تاريخ آخر مراجعة لها.">The effective date at the top of this Policy indicates when it was last revised.</li>
      <li data-en="Where a change is material, we will provide advance notice by email to registered users, by in-product notification, or both, at least thirty (30) days before the change takes effect, unless a shorter period is required by law." data-ar="حين يكون التعديل جوهريًا، نُشعِر المستخدمين المسجّلين عبر البريد الإلكتروني أو عبر إشعار داخل المنتج أو كليهما، قبل ثلاثين (30) يومًا على الأقل من نفاذ التعديل، ما لم يوجب النظام مدة أقصر.">Where a change is material, we will provide advance notice by email to registered users, by in-product notification, or both, at least thirty (30) days before the change takes effect, unless a shorter period is required by law.</li>
      <li data-en="Where a material change requires consent under applicable law, we will obtain that consent before the change applies to you." data-ar="إذا استوجب التعديل الجوهري موافقةً بموجب النظام المنطبق، فسنحصل على تلك الموافقة قبل سريانه في حقك.">Where a material change requires consent under applicable law, we will obtain that consent before the change applies to you.</li>
      <li data-en="Previous versions of this Policy are available on request from privacy@clauze.ai." data-ar="تتوافر الإصدارات السابقة من هذه السياسة عند طلبها من privacy@clauze.ai.">Previous versions of this Policy are available on request from privacy@clauze.ai.</li>
    </ul>
    <p data-en="Continued use of the platform after a change takes effect constitutes acceptance of the revised Policy, except where consent is separately required." data-ar="ويُعد استمرارك في استخدام المنصة بعد نفاذ التعديل قبولًا بالسياسة المعدَّلة، عدا الحالات التي تستوجب موافقة منفصلة.">Continued use of the platform after a change takes effect constitutes acceptance of the revised Policy, except where consent is separately required.</p>

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
<script type="text/x-dc" data-dc-script data-props="{&quot;startLang&quot;:{&quot;editor&quot;:&quot;enum&quot;,&quot;options&quot;:[&quot;en&quot;,&quot;ar&quot;],&quot;default&quot;:&quot;en&quot;,&quot;tsType&quot;:&quot;'en'|'ar'&quot;,&quot;section&quot;:&quot;Content&quot;},&quot;effectiveDate&quot;:{&quot;editor&quot;:&quot;text&quot;,&quot;default&quot;:&quot;&quot;,&quot;tsType&quot;:&quot;string&quot;,&quot;section&quot;:&quot;Variables&quot;},&quot;legalEntityName&quot;:{&quot;editor&quot;:&quot;text&quot;,&quot;default&quot;:&quot;&quot;,&quot;tsType&quot;:&quot;string&quot;,&quot;section&quot;:&quot;Variables&quot;},&quot;crNumber&quot;:{&quot;editor&quot;:&quot;text&quot;,&quot;default&quot;:&quot;&quot;,&quot;tsType&quot;:&quot;string&quot;,&quot;section&quot;:&quot;Variables&quot;},&quot;registeredAddress&quot;:{&quot;editor&quot;:&quot;text&quot;,&quot;default&quot;:&quot;&quot;,&quot;tsType&quot;:&quot;string&quot;,&quot;section&quot;:&quot;Variables&quot;},&quot;dpoName&quot;:{&quot;editor&quot;:&quot;text&quot;,&quot;default&quot;:&quot;&quot;,&quot;tsType&quot;:&quot;string&quot;,&quot;section&quot;:&quot;Variables&quot;},&quot;generalContactEmail&quot;:{&quot;editor&quot;:&quot;text&quot;,&quot;default&quot;:&quot;&quot;,&quot;tsType&quot;:&quot;string&quot;,&quot;section&quot;:&quot;Variables&quot;}}">
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
    window.addEventListener('resize', this.onResize);
  }

  componentWillUnmount() {
    if (this.onResize) window.removeEventListener('resize', this.onResize);
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
      'pp-postal-address': this.props.registeredAddress,
      'pp-dpo-name': this.props.dpoName,
      'pp-general-email': this.props.generalContactEmail
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
