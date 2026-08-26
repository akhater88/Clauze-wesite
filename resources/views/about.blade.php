<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@400;500;600;700&display=swap" rel="stylesheet">
<title>About — Clauze</title>
<meta name="description" content="Clauze is an AI legal workspace built in the Kingdom, for legal work that has to hold up.">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#26235A">
<link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon-64.png">
<link rel="icon" type="image/png" sizes="64x64" href="/assets/favicon-64.png">
<link rel="apple-touch-icon" href="/assets/favicon-512.png">
<meta property="og:title" content="About — Clauze">
<meta property="og:description" content="Clauze is an AI legal workspace built in the Kingdom, for legal work that has to hold up.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.clauze.ai/about">
<meta property="og:site_name" content="Clauze">
<meta property="og:image" content="https://www.clauze.ai/assets/og-clauze-sm.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="Clauze — AI legal workspace for Saudi enterprises">
<style>
:root{
  --clz-primary:#26235A;
  --clz-secondary:#2F308C;
  --clz-tertiary:#2E7EBE;
  --clz-slate:#8089A4;
  --clz-mist:#EEEFF4;
  --clz-white:#FFFFFF;
}
@font-face{font-family:'Zalando Sans';src:url('/assets/fonts/ZalandoSans-Regular.ttf') format('truetype');font-weight:400;font-display:swap}
@font-face{font-family:'Zalando Sans';src:url('/assets/fonts/ZalandoSans-SemiBold.ttf') format('truetype');font-weight:600;font-display:swap}
*,*::before,*::after{box-sizing:border-box}
html{-webkit-text-size-adjust:100%;scroll-behavior:smooth}
body{margin:0;background:var(--clz-white);color:var(--clz-primary);font-family:'Zalando Sans','Noto Kufi Arabic',system-ui,sans-serif;-webkit-font-smoothing:antialiased;text-wrap:pretty;min-height:100vh;display:flex;flex-direction:column}
a{color:var(--clz-secondary);text-decoration:none}
a:focus-visible{outline:2px solid var(--clz-tertiary);outline-offset:2px;border-radius:4px}
button,input,select,textarea{font:inherit;color:inherit}
[dir="rtl"] body{font-family:'Zalando Sans','Noto Kufi Arabic',system-ui,sans-serif}
[dir="rtl"] .clz-nav-links{gap:2px !important}
[dir="rtl"] .clz-nav-links a{padding:10px 10px !important;font-size:12.5px !important;white-space:nowrap}
[dir="rtl"] .about-headline{line-height:1.3 !important}
[dir="rtl"] .about-body,[dir="rtl"] .about-founder-text,[dir="rtl"] .about-region{line-height:1.8 !important;font-size:18px !important}
::selection{background:var(--clz-tertiary);color:var(--clz-white)}

/* Header */
.clz-header{position:fixed;top:0;inset-inline-start:0;inset-inline-end:0;z-index:1000;height:76px;background:rgba(38,35,90,.92);backdrop-filter:blur(12px);border-bottom:1px solid rgba(244,246,252,.08)}
.clz-header-inner{position:relative;max-width:1280px;margin:0 auto;padding:0 clamp(20px,4vw,44px);height:76px;display:flex;align-items:center;gap:clamp(14px,3vw,38px)}
.clz-nav-links{display:flex;align-items:center;gap:8px;margin-inline-start:clamp(28px,5vw,64px);margin-inline-end:auto}
.clz-nav-links a{padding:10px 16px;font-size:13.5px;color:rgba(244,246,252,.82);transition:color 150ms cubic-bezier(0.4,0,0.2,1)}
.clz-nav-links a:hover{color:#F4F6FC}
.clz-lang-btn{padding:10px 6px;min-height:40px;background:transparent;border:none;font-size:14.5px;color:rgba(244,246,252,.82);cursor:pointer;transition:color 150ms cubic-bezier(0.4,0,0.2,1)}
.clz-lang-btn:hover{color:#F4F6FC}
.clz-burger{display:none;align-items:center;justify-content:center;width:44px;height:44px;background:transparent;border:1.5px solid rgba(244,246,252,.26);border-radius:9px;cursor:pointer}

/* Main */
main{flex:1}

/* ── Hero banner ── */
.about-hero{
  position:relative;display:flex;align-items:center;min-height:min(60vh,560px);
  padding:96px clamp(20px,4vw,44px);padding-top:calc(96px + 76px);
  background:#26235A;overflow:hidden;
}
.about-hero-pattern{position:absolute;inset:0;background-image:url('/assets/brand-pattern.png');background-size:900px auto;background-repeat:repeat;opacity:.18}
.about-hero-gradient{position:absolute;inset:0;background:linear-gradient(180deg,rgba(38,35,90,.4) 0%,rgba(38,35,90,.85) 100%)}
.about-hero-inner{position:relative;z-index:2;width:100%;max-width:1200px;margin:0 auto}
.about-hero-content{max-width:680px}
.about-eyebrow{margin:0;font-size:13px;font-weight:600;letter-spacing:.08em;text-transform:uppercase;color:rgba(107,176,224,.9)}
.about-headline{margin:20px 0 0;font-size:clamp(36px,5vw,58px);font-weight:300;line-height:1.15;letter-spacing:-.02em;color:#F4F6FC}
.about-subtitle{margin:24px 0 0;font-size:19px;line-height:1.65;color:rgba(244,246,252,.72);max-width:68ch}

/* ── Founder section ── */
.about-founder-section{
  padding:clamp(64px,10vw,120px) clamp(20px,4vw,44px);
  background:var(--clz-white);
}
.about-founder-grid{
  max-width:1200px;margin:0 auto;
  display:grid;grid-template-columns:1fr 1fr;gap:clamp(40px,6vw,80px);
  align-items:center;
}
.about-founder-img-wrap{
  position:relative;border-radius:20px;overflow:hidden;
  aspect-ratio:4/5;
}
.about-founder-img-wrap::after{
  content:'';position:absolute;inset:0;
  background:linear-gradient(180deg,transparent 60%,rgba(38,35,90,.15) 100%);
  border-radius:20px;
}
.about-founder-img{
  width:100%;height:100%;object-fit:cover;display:block;
  filter:saturate(.9);
}
.about-founder-avatar{
  width:100%;height:100%;display:flex;align-items:center;justify-content:center;
  background:#EEEFF4;
}
.about-founder-avatar svg{
  width:100%;height:100%;
}
.about-founder-info{display:flex;flex-direction:column;gap:24px}
.about-founder-eyebrow{margin:0;font-size:13px;font-weight:600;letter-spacing:.08em;text-transform:uppercase;color:var(--clz-tertiary)}
.about-founder-name{margin:0;font-size:clamp(32px,4vw,48px);font-weight:300;line-height:1.15;letter-spacing:-.02em;color:var(--clz-primary)}
.about-founder-text{margin:0;font-size:17px;line-height:1.75;color:rgba(38,35,90,.65);max-width:56ch}
.about-founder-quote{
  margin:8px 0 0;padding-inline-start:20px;
  border-inline-start:3px solid var(--clz-tertiary);
  font-size:18px;font-weight:400;font-style:italic;line-height:1.6;
  color:var(--clz-primary);
}

/* ── Why section ── */
.about-why{
  position:relative;
  padding:clamp(64px,10vw,120px) clamp(20px,4vw,44px);
  background:var(--clz-mist);
}
.about-why-inner{max-width:1200px;margin:0 auto;display:grid;grid-template-columns:1fr 1fr;gap:clamp(40px,6vw,80px);align-items:start}
.about-why-heading{position:sticky;top:120px}
.about-why-title{margin:0;font-size:clamp(32px,4vw,48px);font-weight:300;line-height:1.15;letter-spacing:-.02em;color:var(--clz-primary)}
.about-why-accent{display:block;width:48px;height:3px;background:var(--clz-tertiary);border-radius:2px;margin-top:24px}
.about-why-body{display:flex;flex-direction:column;gap:24px}
.about-body{margin:0;font-size:17px;line-height:1.75;color:rgba(38,35,90,.65);max-width:60ch}

/* ── Where section ── */
.about-where{
  position:relative;
  padding:clamp(64px,10vw,120px) clamp(20px,4vw,44px);
  background:var(--clz-primary);color:#F4F6FC;overflow:hidden;
}
.about-where-pattern{position:absolute;inset:0;background-image:url('/assets/brand-pattern.png');background-size:900px auto;background-repeat:repeat;opacity:.12}
.about-where-inner{position:relative;z-index:2;max-width:1200px;margin:0 auto;display:grid;grid-template-columns:1fr 1fr;gap:clamp(40px,6vw,80px);align-items:center}
.about-where-title{margin:0;font-size:clamp(32px,4vw,48px);font-weight:300;line-height:1.15;letter-spacing:-.02em;color:#F4F6FC}
.about-where-accent{display:block;width:48px;height:3px;background:var(--clz-tertiary);border-radius:2px;margin-top:24px}
.about-region{margin:0;font-size:17px;line-height:1.75;color:rgba(244,246,252,.7);max-width:56ch}

/* ── Scroll animations ── */
.reveal{opacity:0;transform:translateY(28px);transition:opacity .7s cubic-bezier(.4,0,.2,1),transform .7s cubic-bezier(.4,0,.2,1)}
.reveal.visible{opacity:1;transform:none}
.reveal-left{opacity:0;transform:translateX(-28px);transition:opacity .7s cubic-bezier(.4,0,.2,1),transform .7s cubic-bezier(.4,0,.2,1)}
.reveal-left.visible{opacity:1;transform:none}
.reveal-right{opacity:0;transform:translateX(28px);transition:opacity .7s cubic-bezier(.4,0,.2,1),transform .7s cubic-bezier(.4,0,.2,1)}
.reveal-right.visible{opacity:1;transform:none}

/* Hero entrance */
@keyframes clzFadeUp{from{opacity:0;transform:translateY(20px)}to{opacity:1;transform:none}}
.about-hero-content > *:nth-child(1){animation:clzFadeUp .6s .1s cubic-bezier(.4,0,.2,1) both}
.about-hero-content > *:nth-child(2){animation:clzFadeUp .6s .2s cubic-bezier(.4,0,.2,1) both}
.about-hero-content > *:nth-child(3){animation:clzFadeUp .6s .3s cubic-bezier(.4,0,.2,1) both}

@media(prefers-reduced-motion:reduce){
  .reveal,.reveal-left,.reveal-right{opacity:1;transform:none;transition:none}
  .about-hero-content > *{animation:none !important;opacity:1}
}

/* ── Responsive ── */
@media(max-width:900px){
  .about-founder-grid,.about-why-inner,.about-where-inner{grid-template-columns:1fr;gap:40px}
  .about-founder-img-wrap{max-width:480px;aspect-ratio:3/4}
  .about-why-heading{position:static}
}
@media(max-width:767px){
  .about-hero{padding:48px clamp(20px,4vw,44px);padding-top:calc(64px + 76px);min-height:auto}
  .about-headline{font-size:36px}
  .about-founder-section,.about-why,.about-where{padding:56px clamp(20px,4vw,44px)}
  .about-founder-img-wrap{max-width:100%}
}
@media(max-width:720px){
  .clz-burger{display:flex}
  .clz-nav-links{display:none;position:absolute;top:100%;inset-inline-start:0;inset-inline-end:0;flex-direction:column;align-items:stretch;gap:2px;padding:10px clamp(20px,4vw,44px) 18px;background:rgba(6,11,24,.97);backdrop-filter:blur(12px);border-top:1px solid rgba(244,246,252,.1)}
  .clz-nav-links.open{display:flex}
  .clz-nav-links a{min-height:48px;display:flex;align-items:center;font-size:16px;padding:11px 4px}
}
@media(min-width:721px){
  .clz-nav-links{position:absolute;inset-inline-start:50%;transform:translateX(-50%)}
  [dir="rtl"] .clz-nav-links{transform:translateX(50%)}
}
</style>
</head>
<body>

<!-- Header -->
<header class="clz-header">
  <div class="clz-header-inner">
    <a href="/" style="display:flex;align-items:center;flex:none"><img src="/assets/sm-clauze-wordmark-white.png" alt="Clauze" style="height:21px;width:auto;display:block"></a>
    <nav id="navLinks" class="clz-nav-links">
      <a href="/#product" data-en="Product" data-ar="المنتج">Product</a>
      <a href="/#features" data-en="Features" data-ar="الإمكانات">Features</a>
      <a href="/#vdr" data-en="VDR" data-ar="غرفة البيانات">VDR</a>
      <a href="/#security" data-en="Security" data-ar="الأمان">Security</a>
    </nav>
    <div style="display:flex;align-items:center;gap:12px;flex:none;margin-inline-start:auto">
      <button id="langBtn" class="clz-lang-btn" onclick="toggleLang()">العربية</button>
      <button id="burgerBtn" class="clz-burger" onclick="toggleMenu()" aria-label="Menu" aria-expanded="false">
        <span style="display:block;width:18px;height:1.5px;background:#F4F6FC;box-shadow:0 -6px 0 #F4F6FC,0 6px 0 #F4F6FC"></span>
      </button>
    </div>
  </div>
</header>

<main>

  <!-- Hero banner -->
  <section class="about-hero">
    <div class="about-hero-pattern"></div>
    <div class="about-hero-gradient"></div>
    <div class="about-hero-inner">
      <div class="about-hero-content">
        <p class="about-eyebrow" data-en="About Clauze" data-ar="عن كلوز">About Clauze</p>
        <h1 class="about-headline" data-en="Clauze is an AI-powered Enterprise Legal Platform built for Saudi Arabia and the wider region." data-ar="كلوز منصّة قانونية مؤسسية مدعومة بالذكاء الاصطناعي، بُنيت للمملكة العربية السعودية والمنطقة.">Clauze is an AI-powered Enterprise Legal Platform built for Saudi Arabia and the wider region.</h1>
        <p class="about-subtitle" data-en="We believe the next generation of legal technology should do more than review documents or answer legal questions. It should understand the organization behind them." data-ar="نؤمن بأن الجيل القادم من التقنية القانونية يجب أن يتجاوز مراجعة المستندات أو الإجابة على الأسئلة القانونية. يجب أن يفهم المنظّمة التي تقف خلفها.">We believe the next generation of legal technology should do more than review documents or answer legal questions. It should understand the organization behind them.</p>
      </div>
    </div>
  </section>

  <!-- Founder -->
  <section class="about-founder-section">
    <div class="about-founder-grid">
      <div class="about-founder-img-wrap reveal-left">
        <img class="about-founder-img" src="/assets/founder-avatar.svg" alt="Waad Alkurini, Founder of Clauze" loading="eager">
      </div>
      <div class="about-founder-info reveal-right">
        <p class="about-founder-eyebrow" data-en="Founder" data-ar="المؤسِّسة">Founder</p>
        <h2 class="about-founder-name" data-en="Waad Alkurini" data-ar="وعد القريني">Waad Alkurini</h2>
        <p class="about-founder-text" data-en="Waad founded Clauze after more than a decade at White &amp; Case, most recently as Executive Partner of the firm's Riyadh office. Qualified in both New York and Saudi Arabia, she advised sponsors, lenders, and government on some of the Kingdom's largest infrastructure and energy transactions." data-ar="أسّست وعد شركة كلوز بعد أكثر من عشر سنوات في وايت آند كيس، شغلت آخرها منصب شريكة تنفيذية في مكتب الرياض.&lt;br&gt;&lt;br&gt;وهي مرخّصة لمزاولة المحاماة في نيويورك والمملكة العربية السعودية، وقدّمت المشورة لمطوّرين وممولين وجهات حكومية في عدد من أكبر صفقات البنية التحتية والطاقة في المملكة.">Waad founded Clauze after more than a decade at White &amp; Case, most recently as Executive Partner of the firm's Riyadh office. Qualified in both New York and Saudi Arabia, she advised sponsors, lenders, and government on some of the Kingdom's largest infrastructure and energy transactions.</p>
        <blockquote class="about-founder-quote" data-en="The legal intelligence layer you didn't know you needed." data-ar="الذكاء القانوني الذي لم تكن تعلم أنك تحتاجه.">The legal intelligence layer you didn't know you needed.</blockquote>
      </div>
    </div>
  </section>

  <!-- Why Clauze exists -->
  <section class="about-why">
    <div class="about-why-inner">
      <div class="about-why-heading reveal-left">
        <h2 class="about-why-title" data-en="Our mission" data-ar="مهمّتنا">Our mission</h2>
        <span class="about-why-accent"></span>
      </div>
      <div class="about-why-body reveal-right">
        <p class="about-body" data-en="Clauze brings together a company's legal knowledge, corporate governance, contracts, obligations, due diligence, and workflows in one intelligent platform. By learning from the organization's own legal documents and records, Clauze builds a continuously evolving understanding of the company, its structure, ownership, agreements, policies, approvals, obligations, and history, and uses that knowledge to help legal and business teams make better decisions." data-ar="تجمع كلوز المعرفة القانونية للشركة، وحوكمتها المؤسسية، وعقودها، والتزاماتها، والعناية الواجبة، وسير العمل في منصّة ذكية واحدة. من خلال التعلّم من الوثائق والسجلات القانونية الخاصة بالمنظّمة، تبني كلوز فهماً متطوّراً ومستمراً للشركة وهيكلها وملكيتها واتفاقياتها وسياساتها وموافقاتها والتزاماتها وتاريخها، وتستخدم تلك المعرفة لمساعدة الفرق القانونية وفرق الأعمال على اتخاذ قرارات أفضل.">Clauze brings together a company's legal knowledge, corporate governance, contracts, obligations, due diligence, and workflows in one intelligent platform. By learning from the organization's own legal documents and records, Clauze builds a continuously evolving understanding of the company, its structure, ownership, agreements, policies, approvals, obligations, and history, and uses that knowledge to help legal and business teams make better decisions.</p>
        <p class="about-body" data-en="From reviewing and drafting contracts to managing corporate governance, preparing due diligence responses, identifying risks and obligations, and guiding approvals, Clauze turns fragmented legal information into actionable enterprise intelligence." data-ar="من مراجعة العقود وصياغتها إلى إدارة الحوكمة المؤسسية، وإعداد ردود العناية الواجبة، وتحديد المخاطر والالتزامات، وتوجيه الموافقات، تحوّل كلوز المعلومات القانونية المتفرقة إلى ذكاء مؤسسي قابل للتنفيذ.">From reviewing and drafting contracts to managing corporate governance, preparing due diligence responses, identifying risks and obligations, and guiding approvals, Clauze turns fragmented legal information into actionable enterprise intelligence.</p>
        <p class="about-body" data-en="Built for enterprises and regulated organizations, Clauze offers bilingual capabilities, enterprise-grade security, full data residency, and on-premise deployment, giving organizations control over their data, their AI, and their legal knowledge." data-ar="بُنيت كلوز للمؤسسات والمنظّمات الخاضعة للتنظيم، وتوفّر قدرات ثنائية اللغة، وأماناً بمستوى المؤسسات، وإقامة كاملة للبيانات، ونشراً محلياً، مما يمنح المنظّمات السيطرة على بياناتها وذكائها الاصطناعي ومعرفتها القانونية.">Built for enterprises and regulated organizations, Clauze offers bilingual capabilities, enterprise-grade security, full data residency, and on-premise deployment, giving organizations control over their data, their AI, and their legal knowledge.</p>
      </div>
    </div>
  </section>

  <!-- Where we work -->
  <section class="about-where">
    <div class="about-where-pattern"></div>
    <div class="about-where-inner">
      <div class="reveal-left">
        <h2 class="about-where-title" data-en="Our vision" data-ar="رؤيتنا">Our vision</h2>
        <span class="about-where-accent"></span>
      </div>
      <div class="reveal-right" style="display:flex;flex-direction:column;gap:24px">
        <p class="about-region" data-en="To make legal intelligence a core operating layer of every enterprise." data-ar="أن نجعل الذكاء القانوني طبقة تشغيلية أساسية في كل مؤسسة.">To make legal intelligence a core operating layer of every enterprise.</p>
        <p class="about-region" data-en="Clauze brings together the knowledge, context, and intelligence needed to help organizations make better legal decisions." data-ar="تجمع كلوز المعرفة والسياق والذكاء اللازم لمساعدة المنظّمات على اتخاذ قرارات قانونية أفضل.">Clauze brings together the knowledge, context, and intelligence needed to help organizations make better legal decisions.</p>
      </div>
    </div>
  </section>

</main>

<!-- Footer -->
<footer style="position:relative;background:#26235A;border-top:1px solid rgba(244,246,252,.1);overflow:hidden">
  <div style="position:absolute;inset:0;background-image:url('/assets/brand-pattern.png');background-size:900px auto;background-repeat:repeat;opacity:.22"></div>
  <div style="position:relative;max-width:1280px;margin:0 auto;padding:48px clamp(20px,4vw,44px) 32px">
    <div style="display:flex;flex-wrap:wrap;gap:12px;justify-content:space-between">
      <span style="font-size:13px;color:rgba(244,246,252,.5)">&copy; 2026 Clauze</span>
      <a href="/" style="font-size:13px;color:rgba(244,246,252,.5);transition:color .2s ease" data-en="Back to home" data-ar="العودة للرئيسية">Back to home</a>
    </div>
  </div>
</footer>

<script>
(function(){
  var params = new URLSearchParams(window.location.search);
  var lang = params.get('lang') === 'ar' ? 'ar' : 'en';

  function applyLang(l) {
    lang = l;
    document.documentElement.setAttribute('dir', l === 'ar' ? 'rtl' : 'ltr');
    document.documentElement.setAttribute('lang', l);
    document.querySelectorAll('[data-en][data-ar]').forEach(function(el) {
      var v = el.getAttribute('data-' + l);
      if (v != null && v !== '') el.innerHTML = v;
    });
    var btn = document.getElementById('langBtn');
    if (btn) btn.textContent = l === 'ar' ? 'English' : 'العربية';
    // update URL without reload
    var url = new URL(window.location);
    if (l === 'ar') { url.searchParams.set('lang', 'ar'); } else { url.searchParams.delete('lang'); }
    history.replaceState(null, '', url);
    // update all internal links
    document.querySelectorAll('a[href]').forEach(function(a) {
      var h = a.getAttribute('href');
      if (!h || h.startsWith('http') || h.startsWith('mailto')) return;
      try {
        var u = new URL(h, window.location.origin);
        if (l === 'ar') { u.searchParams.set('lang', 'ar'); } else { u.searchParams.delete('lang'); }
        a.setAttribute('href', u.pathname + u.search + u.hash);
      } catch(e) {}
    });
  }

  window.toggleLang = function() {
    applyLang(lang === 'en' ? 'ar' : 'en');
  };

  window.toggleMenu = function() {
    var nav = document.getElementById('navLinks');
    var burger = document.getElementById('burgerBtn');
    if (!nav) return;
    nav.classList.toggle('open');
    var isOpen = nav.classList.contains('open');
    if (burger) burger.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
  };

  // Scroll reveal
  var observer = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15 });

  document.querySelectorAll('.reveal, .reveal-left, .reveal-right').forEach(function(el) {
    observer.observe(el);
  });

  applyLang(lang);
})();
</script>
</body>
</html>
