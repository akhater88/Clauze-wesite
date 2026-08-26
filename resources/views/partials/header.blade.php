<header ref="@{{ navRef }}" style="position:fixed;top:0;inset-inline:0;z-index:1000;height:76px;background:rgba(38,35,90,.92);backdrop-filter:blur(12px);border-bottom:1px solid rgba(244,246,252,.08);transition:background .3s ease,border-color .3s ease,backdrop-filter .3s ease">
  <div style="position:relative;max-width:1280px;margin:0 auto;padding:0 clamp(20px,4vw,44px);height:76px;display:flex;align-items:center;gap:clamp(14px,3vw,38px)">
    <a href="{{ $linkPrefix ?? '' }}#top" style="display:flex;align-items:center;flex:none"><img src="/assets/sm-clauze-wordmark-white.png" alt="Clauze" style="height:21px;width:auto;display:block"></a>
    <nav ref="@{{ navLinksRef }}" style="display:flex;align-items:center;gap:8px;margin-inline-start:clamp(28px,5vw,64px);margin-inline-end:auto">
      <a href="/about" data-en="About Us" data-ar="من نحن" style="padding:10px 16px;font-size:13.5px;color:rgba(244,246,252,.82);transition:color .2s ease" style-hover="color:#F4F6FC">About Us</a>
      <a href="{{ $linkPrefix ?? '' }}#features" data-en="Features" data-ar="الإمكانات" style="padding:10px 16px;font-size:13.5px;color:rgba(244,246,252,.82);transition:color .2s ease" style-hover="color:#F4F6FC">Features</a>
      <a href="{{ $linkPrefix ?? '' }}#vdr" data-en="VDR" data-ar="غرفة البيانات" style="padding:10px 16px;font-size:13.5px;color:rgba(244,246,252,.82);transition:color .2s ease" style-hover="color:#F4F6FC">VDR</a>
      <a href="{{ $linkPrefix ?? '' }}#security" data-en="Security" data-ar="الأمان" style="padding:10px 16px;font-size:13.5px;color:rgba(244,246,252,.82);transition:color .2s ease" style-hover="color:#F4F6FC">Security</a>
    </nav>
    <div style="display:flex;align-items:center;gap:12px;flex:none;margin-inline-start:auto">
      <button ref="@{{ langRef }}" onClick="@{{ toggleLang }}" style="padding:10px 6px;min-height:40px;background:transparent;border:none;font-size:14.5px;color:rgba(244,246,252,.82);cursor:pointer;transition:color .2s ease" style-hover="color:#F4F6FC">العربية</button>
      @if(empty($hideDemo))
      <a ref="@{{ navDemoRef }}" href="#demo" onClick="@{{ openDemo }}" data-en="Request a demo" data-ar="اطلب عرضًا" style="padding:12px 22px;background:#2E7EBE;border-radius:8px;color:#FFFFFF;font-size:14px;font-weight:600;white-space:nowrap;transition:background .2s ease" style-hover="background:#4A9AD1;color:#FFFFFF">Request a demo</a>
      @endif
      <button ref="@{{ burgerRef }}" onClick="@{{ toggleMenu }}" aria-label="Menu" aria-expanded="false" style="display:none;align-items:center;justify-content:center;width:44px;height:44px;background:transparent;border:1.5px solid rgba(244,246,252,.26);border-radius:9px;cursor:pointer">
        <span style="display:block;width:18px;height:1.5px;background:#F4F6FC;box-shadow:0 -6px 0 #F4F6FC,0 6px 0 #F4F6FC"></span>
      </button>
    </div>
  </div>
</header>
