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
[dir="rtl"] body{font-family:'Noto Kufi Arabic','Zalando Sans',system-ui,sans-serif}
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
        <p class="about-eyebrow" data-en="About" data-ar="عن كلوز">About</p>
        <h1 class="about-headline" data-en="Every answer, with its authority." data-ar="كل اجابة مرفقة بسندها">Every answer, with its authority.</h1>
        <p class="about-subtitle" data-en="Clauze is an AI legal workspace built in the Kingdom, for legal work that has to hold up in front of a court, a regulator, and the party on the other side of the table." data-ar="كلوز منصّة عمل قانونية مدعومة بالذكاء الاصطناعي، بُنيت في المملكة لعملٍ قانوني يصمد أمام المحكمة والجهة التنظيمية والطرف المقابل.">Clauze is an AI legal workspace built in the Kingdom, for legal work that has to hold up in front of a court, a regulator, and the party on the other side of the table.</p>
      </div>
    </div>
  </section>

  <!-- Founder -->
  <section class="about-founder-section">
    <div class="about-founder-grid">
      <div class="about-founder-img-wrap reveal-left">
        <img class="about-founder-img" src="/assets/waad-alkurini.jpg" alt="Waad Alkurini, Founder of Clauze" loading="eager">
      </div>
      <div class="about-founder-info reveal-right">
        <p class="about-founder-eyebrow" data-en="Founder" data-ar="المؤسِّسة">Founder</p>
        <h2 class="about-founder-name" data-en="Waad Alkurini" data-ar="وعد القريني">Waad Alkurini</h2>
        <p class="about-founder-text" data-en="Waad founded Clauze after more than a decade at White &amp; Case, most recently as Executive Partner of the firm's Riyadh office. Qualified in both New York and Saudi Arabia, she advised sponsors, lenders, and government on some of the Kingdom's largest infrastructure and energy transactions, negotiating and drafting in Arabic and English throughout." data-ar="أسّست وعد شركة كلوز بعد أكثر من عشر سنوات في وايت آند كيس، كان آخرها شريكاً تنفيذياً لمكتب الرياض. وهي مرخّصة للممارسة في نيويورك والمملكة العربية السعودية، وقدّمت المشورة للمطوّرين والممولين والجهات الحكومية في عددٍ من أكبر صفقات البنية التحتية والطاقة في المملكة، متفاوضةً وصائغةً بالعربية والإنجليزية معاً.">Waad founded Clauze after more than a decade at White &amp; Case, most recently as Executive Partner of the firm's Riyadh office. Qualified in both New York and Saudi Arabia, she advised sponsors, lenders, and government on some of the Kingdom's largest infrastructure and energy transactions, negotiating and drafting in Arabic and English throughout.</p>
        <blockquote class="about-founder-quote" data-en="Clauze is the tool that work required and that no vendor had built for it." data-ar="وكلوز هي الأداة التي احتاجها ذلك العمل ولم يبنِها له أحد.">Clauze is the tool that work required and that no vendor had built for it.</blockquote>
      </div>
    </div>
  </section>

  <!-- Why Clauze exists -->
  <section class="about-why">
    <div class="about-why-inner">
      <div class="about-why-heading reveal-left">
        <h2 class="about-why-title" data-en="Why Clauze exists" data-ar="لماذا وُجدت كلوز">Why Clauze exists</h2>
        <span class="about-why-accent"></span>
      </div>
      <div class="about-why-body reveal-right">
        <p class="about-body" data-en="General-purpose AI answers quickly. But its sources are public and generic, it knows nothing about your contracts or your playbook, and it can hallucinate answers outside its legal depth." data-ar="أدوات الذكاء الاصطناعي العامة تُجيب بسرعة، لكن مصادرها عامة ولا تعرف شيئاً عن عقودكم أو سياساتكم الداخلية، وقد تختلق إجابات خارج نطاق التخصص القانوني.">General-purpose AI answers quickly. But its sources are public and generic, it knows nothing about your contracts or your playbook, and it can hallucinate answers outside its legal depth.</p>
        <p class="about-body" data-en="For most work that is a nuisance. For legal work it is disqualifying. A general counsel cannot forward an opinion they cannot trace, cannot defend a position they cannot source, and cannot put a clause in front of a regulator on the strength of a model's confidence." data-ar="في أغلب الأعمال هذا مزعج فحسب. أما في العمل القانوني فهو مُبطِل. لا يستطيع المستشار القانوني أن يمرّر رأياً لا يعرف أصله، ولا أن يدافع عن موقفٍ لا يملك سنده، ولا أن يعرض بنداً على جهةٍ تنظيمية اعتماداً على ثقة نموذجٍ لا أكثر.">For most work that is a nuisance. For legal work it is disqualifying. A general counsel cannot forward an opinion they cannot trace, cannot defend a position they cannot source, and cannot put a clause in front of a regulator on the strength of a model's confidence.</p>
        <p class="about-body" data-en="Clauze was built from the other side of that problem, by a lawyer who spent a decade drafting and negotiating the Kingdom's largest transactions in two languages, and who wanted the speed without giving up the paper trail." data-ar="وُلدت كلوز من الجهة المقابلة لهذه المشكلة: من محاميةٍ قضت عقداً في صياغة أكبر صفقات المملكة والتفاوض عليها بلغتين، وأرادت السرعة دون التخلي عن السند.">Clauze was built from the other side of that problem, by a lawyer who spent a decade drafting and negotiating the Kingdom's largest transactions in two languages, and who wanted the speed without giving up the paper trail.</p>
      </div>
    </div>
  </section>

  <!-- Where we work -->
  <section class="about-where">
    <div class="about-where-pattern"></div>
    <div class="about-where-inner">
      <div class="reveal-left">
        <h2 class="about-where-title" data-en="Where we work" data-ar="أين نعمل">Where we work</h2>
        <span class="about-where-accent"></span>
      </div>
      <p class="about-region reveal-right" data-en="Clauze is built for Saudi Arabia first, and for the wider GCC alongside it. Clauze writes Arabic natively, as if drafted by a local lawyer, with PDPL compliance designed in from the start and in-Kingdom deployment for the organisations that require it." data-ar="بُنيت كلوز للمملكة العربية السعودية أولاً، ولدول الخليج معها. تكتب كلوز العربية بطلاقة كأنها صياغة محامٍ محلي، مع التزام بنظام حماية البيانات الشخصية مصمَّم في صلب المنتج، ونشر داخل المملكة لمن يشترط ذلك.">Clauze is built for Saudi Arabia first, and for the wider GCC alongside it. Clauze writes Arabic natively, as if drafted by a local lawyer, with PDPL compliance designed in from the start and in-Kingdom deployment for the organisations that require it.</p>
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
  var lang = 'en';

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

  applyLang('en');
})();
</script>
</body>
</html>
