<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@400;500;600;700&display=swap" rel="stylesheet">
<title>Careers — Clauze</title>
<meta name="description" content="Join the team building the AI legal workspace for Saudi enterprises.">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#26235A">
<link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon-64.png">
<link rel="icon" type="image/png" sizes="64x64" href="/assets/favicon-64.png">
<link rel="apple-touch-icon" href="/assets/favicon-512.png">
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
[dir="rtl"] h1,[dir="rtl"] h2,[dir="rtl"] h3,[dir="rtl"] h4{text-transform:none !important;letter-spacing:0 !important}
[dir="rtl"] .careers-headline{line-height:1.3 !important}
[dir="rtl"] .careers-body,[dir="rtl"] .careers-label,[dir="rtl"] .careers-closing{line-height:1.8 !important;font-size:18px !important}
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

/* Main content */
main{flex:1}
.careers-section{
  display:flex;align-items:center;min-height:70vh;
  padding:96px clamp(20px,4vw,44px);padding-top:calc(96px + 76px);
  background:var(--clz-white);
}
.careers-container{width:100%;max-width:1200px;margin:0 auto}
.careers-content{max-width:620px;animation:clzFadeIn .6s cubic-bezier(0.4,0,0.2,1) both}
.careers-eyebrow{margin:0;font-size:13px;font-weight:500;color:var(--clz-secondary)}
.careers-headline{margin:20px 0 0;font-size:clamp(36px,5vw,58px);font-weight:300;line-height:1.15;letter-spacing:-.02em;color:var(--clz-primary)}
.careers-body{margin:24px 0 0;font-size:17px;line-height:1.65;color:rgba(38,35,90,.7);max-width:68ch}
.careers-rule{border:none;border-top:1px solid var(--clz-mist);margin:32px 0}
.careers-label{margin:0;font-size:15px;color:rgba(38,35,90,.7)}
.careers-email{display:block;margin-top:8px;font-size:24px;font-weight:400;color:var(--clz-secondary);text-decoration:none;min-height:44px;line-height:44px;transition:color 150ms cubic-bezier(0.4,0,0.2,1),text-decoration 150ms}
.careers-email:hover{color:var(--clz-primary);text-decoration:underline}
.careers-email:focus-visible{outline:2px solid var(--clz-tertiary);outline-offset:2px;border-radius:4px}
.careers-closing{margin:20px 0 0;font-size:15px;color:rgba(38,35,90,.7)}

@keyframes clzFadeIn{from{opacity:0}to{opacity:1}}
@media(prefers-reduced-motion:reduce){.careers-content{animation:clzFadeIn .6s both}}
@media(max-width:767px){
  .careers-section{padding:48px clamp(20px,4vw,44px);padding-top:calc(48px + 76px);min-height:auto}
  .careers-headline{font-size:36px}
  .careers-email{font-size:20px}
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
  <section class="careers-section">
    <div class="careers-container">
      <div class="careers-content">
        <p class="careers-eyebrow" data-en="Careers" data-ar="الوظائف">Careers</p>
        <h1 class="careers-headline" data-en="Interested in joining Clauze?" data-ar="مهتم بالانضمام إلى كلوز؟">Interested in joining Clauze?</h1>
        <p class="careers-body" data-en="We're always looking for exceptional people to join our team. Send your CV to <a href='mailto:career@clauze.ai' style='color:var(--clz-tertiary)'>career@clauze.ai</a> and tell us how you can help us shape the future of legal AI." data-ar="نبحث دائماً عن أشخاص استثنائيين للانضمام إلى فريقنا. أرسل سيرتك الذاتية إلى <a href='mailto:career@clauze.ai' style='color:var(--clz-tertiary)'>career@clauze.ai</a> وأخبرنا كيف يمكنك مساعدتنا في صياغة مستقبل الذكاء الاصطناعي القانوني.">We're always looking for exceptional people to join our team. Send your CV to <a href="mailto:career@clauze.ai" style="color:var(--clz-tertiary)">career@clauze.ai</a> and tell us how you can help us shape the future of legal AI.</p>
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
    var url = new URL(window.location);
    if (l === 'ar') { url.searchParams.set('lang', 'ar'); } else { url.searchParams.delete('lang'); }
    history.replaceState(null, '', url);
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

  applyLang(lang);
})();
</script>
</body>
</html>
