//  srijit start
window.addEventListener("load", function () {
  var el = document.querySelector(".wd-swiper");
  if (!el || !window.Swiper) {
    console.warn("Swiper is not loaded on this page.");
    return;
  }
  var fill = document.querySelector(".wd-progress i");
  var reduce = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
  function progress(sw) {
    if (!fill) return;
    var total = sw.snapGrid.length || 1;
    fill.style.width = ((sw.snapIndex + 1) / total) * 100 + "%";
  }
  new Swiper(el, {
    slidesPerView: "auto",
    spaceBetween: 24,
    speed: 700,
    grabCursor: true,
    rewind: true,
    autoplay: reduce
      ? false
      : {
          delay: 3500,
          disableOnInteraction: false,
          pauseOnMouseEnter: true,
        },
    navigation: {
      prevEl: ".wd-prev",
      nextEl: ".wd-next",
    },
    breakpoints: {
      0: {
        spaceBetween: 16,
      },
      992: {
        spaceBetween: 24,
      },
    },
    on: {
      init: progress,
      snapIndexChange: progress,
      snapGridLengthChange: progress,
      resize: progress,
    },
  });
});
//jv

function initPartnerships() {
  var section = document.querySelector("[data-tjv]");
  if (!section || !window.gsap || !window.ScrollTrigger) return;
  var stage = section.querySelector("[data-tjv-stage]");
  var cardsBox = section.querySelector(".tjv-cards");
  var cards = gsap.utils.toArray("[data-tjv-card]", section);
  if (!stage || cards.length < 2) return;
  gsap.registerPlugin(ScrollTrigger);
  var header =
    parseFloat(getComputedStyle(section).getPropertyValue("--tjv-header")) ||
    96;

  gsap.matchMedia().add("(min-width: 992px)", function () {
    cards.forEach(function (card, i) {
      gsap.set(card, { zIndex: i + 1 });
    });

    var tl = gsap.timeline({
      defaults: { ease: "none" },
      scrollTrigger: {
        trigger: stage,
        start: "top " + (header + 8) + "px",
        end: function () {
          return "+=" + (cards.length - 1) * cardsBox.offsetHeight * 1.1;
        },
        pin: true,
        scrub: 0.5,
        invalidateOnRefresh: true,
      },
    });

    for (var i = 1; i < cards.length; i++) {
      var at = i - 1;
      var img = cards[i].querySelector("[data-tjv-logo]");

      // card starts below the screen and slides up smoothly
      tl.fromTo(
        cards[i],
        {
          y: function () {
            return window.innerHeight;
          },
        },
        { y: 0, duration: 1 },
        at,
      );

      // card behind shrinks slightly (your original design)
      tl.to(cards[i - 1], { scale: 0.95, y: -14, duration: 1 }, at);

      if (i > 1) tl.to(cards[i - 2], { scale: 0.9, y: -26, duration: 1 }, at);

      if (img) tl.fromTo(img, { scale: 1.12 }, { scale: 1, duration: 1 }, at);
    }
  });

  window.addEventListener(
    "load",
    function () {
      ScrollTrigger.refresh();
    },
    { once: true },
  );
}

if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", initPartnerships, {
    once: true,
  });
} else {
  initPartnerships();
}

(function () {
  // anim-zoomin + gallery isotope
  if (typeof gsap !== "undefined") {
    $(".image-zoomin").each(function () {
      // Add wrap <div>.
      $(this).wrap('<div class="image-zoomin-cont"></div>');

      // Add overflow hidden.
      $(".image-zoomin-cont").css({ overflow: "hidden" });

      let $this = $(this);
      let $asiWrap = $this.parents(".image-zoomin-cont");

      if ($asiWrap.length && $this.length) {
        let tp_ZoomIn = gsap.timeline({
          scrollTrigger: {
            trigger: $asiWrap[0],
            start: "top 100%",
            markers: false,
          },
        });
        tp_ZoomIn.from($this[0], {
          duration: 2,
          autoAlpha: 0,
          scale: 1.2,
          ease: Power2.easeOut,
          clearProps: "all",
        });
      }
    });
  }
})();

// srijit end

$(function () {
  gsap.registerPlugin(ScrollTrigger, ScrollSmoother);
  ScrollTrigger.normalizeScroll(false);

  let smoother = ScrollSmoother.create({
    wrapper: "#smooth-wrapper",
    content: "#smooth-content",
    smooth: 2,
    effects: true,
  });

  ScrollTrigger.create({
    trigger: ".tmr-banner",
    start: "top top",
    end: "bottom top",
    pin: ".vmb-fixed-container",
    pinSpacing: false,
  });

  let headings = gsap.utils.toArray(".js-title").reverse();
  headings.forEach((heading, i) => {
    let headingIndex = i + 1;
    let mySplitText = new SplitText(heading, { type: "chars" });
    let chars = mySplitText.chars;

    chars.forEach((char, i) => {
      smoother.effects(char, { lag: (i + headingIndex) * 0.1, speed: 1 });
    });
  });

  let splitTextLines = gsap.utils.toArray(".js-splittext-lines");

  splitTextLines.forEach((splitTextLine) => {
    const tl = gsap.timeline({
      scrollTrigger: {
        trigger: splitTextLine,
        start: "top 90%",
        duration: 2,
        end: "bottom 60%",
        scrub: false,
        markers: false,
        toggleActions: "play none none none",
      },
    });

    const itemSplitted = new SplitText(splitTextLine, { type: "lines" });
    gsap.set(splitTextLine, { perspective: 400 });
    itemSplitted.split({ type: "lines" });
    tl.from(itemSplitted.lines, {
      duration: 1,
      delay: 0.5,
      opacity: 0,
      rotationX: -80,
      force3D: true,
      transformOrigin: "top center -50",
      stagger: 0.1,
    });
  });

  AOS.init({
    duration: 1000,
    once: true,
    offset: 100,
    easing: "ease-in-out",
  });

  gsap.registerPlugin(SplitText, ScrollTrigger);
  document.querySelectorAll(".has_char_anim").forEach((t) => {
    let stagger = parseFloat(t.getAttribute("data-stagger")) || 0.03;
    let delay = parseFloat(t.getAttribute("data-delay")) || 0;
    let duration = parseFloat(t.getAttribute("data-duration")) || 0.8;
    let ease = t.getAttribute("data-ease") || "power2.out";
    let onScroll = parseInt(t.getAttribute("data-on-scroll")) !== 0;
    const animate = () => {
      let split = new SplitText(t, { type: "chars, words" });

      gsap.from(split.chars, {
        x: 80,
        opacity: 0,
        duration: duration,
        ease: ease,
        stagger: stagger,
        delay: delay,
        force3D: true,
        transformOrigin: "center center",
      });
    };
    if (onScroll) {
      ScrollTrigger.create({
        trigger: t,
        start: "top 85%",
        once: true,
        onEnter: animate,
      });
    } else {
      animate();
    }
  });

  //CEO

  const ceoRightSwiper = new Swiper("#ceoRightSwiper", {
    slidesPerView: 1,
    slidesPerGroup: 1,
    spaceBetween: 0,
    speed: 800,
    loop: true,
  });

  var swiper = new Swiper(".ceo-slider-wrapper", {
    loop: true,
    spaceBetween: 0,
    slidesPerView: 1,
    speed: 900,
    spaceBetween: 0,
    // autoplay: {
    //     delay: 3000,
    //     speed: 400,
    //     spaceBetween: 100,
    //     reverseDirection: true,
    // },
    navigation: {
      nextEl: ".button-next",
      prevEl: ".button-prev",
    },
  });

  var swiper = new Swiper(".ceo-smsll-slider-wrapper", {
    loop: true,
    spaceBetween: 0,
    slidesPerView: 2,
    speed: 900,
    spaceBetween: 0,
    // autoplay: {
    //     delay: 3000,
    //     speed: 400,
    //     spaceBetween: 100,
    //     reverseDirection: true,
    // },
    navigation: {
      nextEl: ".button-next",
      prevEl: ".button-prev",
    },
  });
});

/* ==========================================================================
   TATA ADVANCED SYSTEMS LIMITED (TASL) - MASTER FRONTEND SCRIPT ENGINE
   ==========================================================================
   TABLE OF CONTENTS:
   01. HEADER SCROLL TRIGGER & HERO SWIPER CONTROLLERS
   02. HELICOPTER ROTOR: BIDIRECTIONAL SCROLL VELOCITY ENGINE
   03. INNOVATION HUD TELEMETRY SCROLL REVEAL TIMELINE
   04. C295 OVERVIEW: CARD REVEALS & NUMERIC COUNTERS
   05. OFFCANVAS SIDEBAR: GSAP CIRCULAR IRIS TIMELINE
   06. FULL-WIDTH MEGAMENU: DYNAMIC NOTCH & PREVIEW IMAGES
   07. ACCESSIBILITY ENGINE: MODAL, CONTRAST, FONTS & THEMES
   08. INNER OVERVIEW: DIRECTIONAL FADES & METRIC COUNTERS
   09. EXPANDING SHOWCASE ENGINE: ACCORDION & MOBILE SWIPER
   10. C295 BLUEPRINT WATERMARK: SVG PATH DRAW ENGINE
   11. AVIONICS / MISSION COMPUTER: SIDE-BY-SIDE 2x2 ZOOM VIEW
   12. OTHER AIRBORNE PLATFORMS: PINNING & IMAGE CROSSFADE
   ========================================================================== */

document.addEventListener("DOMContentLoaded", function () {
  "use strict";

  /* Register GSAP Plugins if available */
  if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
    gsap.registerPlugin(ScrollTrigger);
  }

  /* ==========================================================================
     01. HEADER SCROLL TRIGGER & HERO SWIPER CONTROLLERS
     ========================================================================== */
  var header = document.querySelector(".header");
  var banner = document.querySelector(".banner-wraper");
  var chatbot = document.querySelector(".tasl-chatbot-widget");

  function handleScroll() {
    var scrollY =
      window.pageYOffset ||
      document.documentElement.scrollTop ||
      window.scrollY ||
      0;

    /* Header solid / transparent toggle */
    if (scrollY < 20) {
      if (header) {
        header.classList.remove("header-hidden", "header-solid");
      }
    } else {
      if (header) {
        header.classList.remove("header-hidden");
        header.classList.add("header-solid");
      }
    }

    /* Chatbot adaptive coordinates */
    if (banner && chatbot) {
      var bannerHeight = banner.offsetHeight || window.innerHeight;
      if (scrollY >= bannerHeight - 160) {
        chatbot.classList.add("is-scrolled");
      } else {
        chatbot.classList.remove("is-scrolled");
      }
    }
  }

  /* Single high-performance passive scroll listener */
  window.addEventListener("scroll", handleScroll, { passive: true });
  handleScroll();

  /* Hero Fullscreen Swiper */
  if (
    document.querySelector(".banner-hero-swiper") &&
    typeof Swiper !== "undefined"
  ) {
    new Swiper(".banner-hero-swiper", {
      slidesPerView: 1,
      spaceBetween: 0,
      loop: true,
      speed: 1000,
      effect: "fade",
      fadeEffect: {
        crossFade: true,
      },
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
    });
  }

  /* Hero Milestone News Swiper Card */
  if (
    document.querySelector(".banner-news-swiper") &&
    typeof Swiper !== "undefined"
  ) {
    new Swiper(".banner-news-swiper", {
      slidesPerView: 1,
      spaceBetween: 0,
      loop: true,
      speed: 600,
      observer: true,
      observeParents: true,
      autoplay: {
        delay: 4500,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
      },
      pagination: {
        el: ".banner-news-pagination",
        clickable: true,
      },
    });
  }

  /* ==========================================================================
     02. HELICOPTER ROTOR: BIDIRECTIONAL SCROLL VELOCITY ENGINE
     ========================================================================== */
  if (
    document.querySelector("#gsapHelicopterRotor") &&
    document.querySelector(".innovation-wraper") &&
    typeof gsap !== "undefined" &&
    typeof ScrollTrigger !== "undefined"
  ) {
    gsap.set("#gsapHelicopterRotor", { transformOrigin: "50% 50%" });
    var rotorAngle = 0;

    ScrollTrigger.create({
      trigger: ".innovation-wraper",
      start: "top bottom",
      end: "bottom top",
      onUpdate: function (self) {
        var velocity = self.getVelocity();
        rotorAngle += velocity * 0.01;

        gsap.to("#gsapHelicopterRotor", {
          rotation: rotorAngle,
          duration: 0.3,
          ease: "power1.out",
          overwrite: "auto",
        });
      },
    });
  }

  /* ==========================================================================
     03. INNOVATION HUD TELEMETRY SCROLL REVEAL TIMELINE
     ========================================================================== */
  if (
    document.querySelector(".inno-stage") &&
    typeof gsap !== "undefined" &&
    typeof ScrollTrigger !== "undefined"
  ) {
    var innoTl = gsap.timeline({
      scrollTrigger: {
        trigger: ".inno-stage",
        start: "top 72%",
        toggleActions: "play none none reverse",
      },
    });

    innoTl
      .from(
        [".inno-protractor", ".inno-heli-guideline"],
        {
          opacity: 0,
          scale: 0.95,
          duration: 0.8,
          ease: "power2.out",
        },
        0,
      )
      .from(
        [".inno-card-top-left", ".inno-card-top-right"],
        {
          y: 40,
          opacity: 0,
          duration: 0.85,
          stagger: 0.12,
          ease: "power3.out",
          clearProps: "transform",
        },
        "-=0.4",
      )
      .from(
        [".inno-card-bottom-left", ".inno-card-bottom-right"],
        {
          y: 40,
          opacity: 0,
          duration: 0.85,
          stagger: 0.12,
          ease: "power3.out",
          clearProps: "transform",
        },
        "-=0.5",
      )
      .from(
        ".inno-viewfinder",
        {
          scale: 0.75,
          opacity: 0,
          duration: 0.6,
          stagger: 0.1,
          ease: "back.out(1.5)",
          clearProps: "transform,opacity",
        },
        "-=0.65",
      );
  }

  /* ==========================================================================
     04. C295 OVERVIEW: CARD REVEALS & NUMERIC COUNTERS
     ========================================================================== */
  if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
    gsap.utils.toArray(".aeroc-card").forEach(function (card) {
      var paragraph = card.querySelector("p.aeroc-text");
      var readMore = card.querySelector("a.aeroc-text");

      var cardTl = gsap.timeline({
        scrollTrigger: {
          trigger: card,
          start: "top 80%",
          toggleActions: "play none none reverse",
        },
      });

      if (paragraph) {
        cardTl.fromTo(
          paragraph,
          { y: 60, autoAlpha: 0 },
          { y: 0, autoAlpha: 1, duration: 1.4, ease: "power3.out" },
        );
      }

      if (readMore) {
        cardTl.fromTo(
          readMore,
          { y: 60, autoAlpha: 0 },
          { y: 0, autoAlpha: 1, duration: 0.8, ease: "power3.out" },
          "-=0.3",
        );
      }
    });
  }

  var c295Counters = document.querySelectorAll(
    ".c295-overview-section .wc-counter",
  );
  if (c295Counters.length) {
    function runC295Counter(el) {
      if (el.classList.contains("is-done")) return;
      el.classList.add("is-done");

      var rawText = el.textContent.trim();
      var targetNum = parseInt(el.getAttribute("data-count") || rawText, 10);
      var suffix =
        el.getAttribute("data-suffix") ||
        (rawText.includes("%+")
          ? "%+"
          : rawText.includes("KT")
            ? " KT"
            : rawText.includes("+")
              ? "+"
              : "");

      if (isNaN(targetNum)) return;

      var countDuration = 1600;
      var startTimestamp = null;

      function step(timestamp) {
        if (!startTimestamp) startTimestamp = timestamp;
        var progress = Math.min(
          (timestamp - startTimestamp) / countDuration,
          1,
        );
        var easeOut = 1 - Math.pow(1 - progress, 3);
        var current = Math.floor(easeOut * targetNum);

        el.textContent = current + suffix;

        if (progress < 1) {
          window.requestAnimationFrame(step);
        } else {
          el.textContent = targetNum + suffix;
        }
      }
      window.requestAnimationFrame(step);
    }

    var c295CounterObserver = new IntersectionObserver(
      function (entries, obs) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            runC295Counter(entry.target);
            obs.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.2 },
    );

    c295Counters.forEach(function (c) {
      c295CounterObserver.observe(c);
    });
  }

  /* ==========================================================================
     05. OFFCANVAS SIDEBAR: GSAP CIRCULAR IRIS TIMELINE
     ========================================================================== */
  if (typeof jQuery !== "undefined" && typeof gsap !== "undefined") {
    (function ($) {
      var $area = $(".tasl-sidebar-area");
      var $overlay = $(".tasl-backdrop-overlay");
      var $openBtn = $(
        "#openTaslMenuBtn, .hamburger-open-btn, .header-menu-btn",
      );
      var $closeBtn = $("#closeTaslMenuBtn, .tasl-sidebar-close");
      var $cards = $(".tasl-sidebar-bg, .tasl-sidebar-wrapper");
      var $logo = $(".tasl-sidebar-header");
      var $items = $(".tasl-sidebar-nav nav > ul > li");

      if (!$openBtn.length || !$cards.length) return;

      var isMenuOpen = false;
      var isAnimating = false;

      gsap.set($overlay, { opacity: 0, pointerEvents: "none" });
      gsap.set($area, { pointerEvents: "none" });
      gsap.set($cards, { clipPath: "circle(0% at 55px 50px)" });
      gsap.set([$logo, $closeBtn], { opacity: 0, y: -26 });
      gsap.set($items, { opacity: 0, y: -22 });

      function openTaslMenu() {
        if (isAnimating || isMenuOpen) return;
        isAnimating = true;
        isMenuOpen = true;

        gsap.set([$overlay, $area], { pointerEvents: "auto" });
        $openBtn.addClass("active");
        gsap.set($closeBtn, { rotation: 0 });

        gsap
          .timeline({
            onComplete: function () {
              isAnimating = false;
            },
          })
          .to($overlay, { opacity: 1, duration: 0.5, ease: "power2.out" }, 0)
          .to(
            $cards,
            {
              clipPath: "circle(150% at 55px 50px)",
              duration: 0.8,
              ease: "power3.out",
            },
            0,
          )
          .to(
            [$logo, $closeBtn],
            { opacity: 1, y: 0, duration: 0.4, ease: "power2.out" },
            "-=0.4",
          )
          .to(
            $items,
            {
              opacity: 1,
              y: 0,
              duration: 0.45,
              stagger: 0.08,
              ease: "power2.out",
            },
            "-=0.25",
          );
      }

      function closeTaslMenu() {
        if (isAnimating || !isMenuOpen) return;
        isAnimating = true;

        gsap
          .timeline({
            onComplete: function () {
              isMenuOpen = false;
              isAnimating = false;
              $openBtn.removeClass("active");
              gsap.set([$overlay, $area], { pointerEvents: "none" });
            },
          })
          .to($closeBtn, { rotation: 90, duration: 0.3, ease: "power2.inOut" })
          .to(
            $items,
            {
              opacity: 0,
              y: -22,
              duration: 0.32,
              stagger: { each: 0.075, from: "end" },
              ease: "power2.in",
            },
            "-=0.1",
          )
          .to(
            [$logo, $closeBtn],
            { opacity: 0, y: -24, duration: 0.25, ease: "power2.in" },
            "-=0.15",
          )
          .to(
            $cards,
            {
              clipPath: "circle(0% at 55px 50px)",
              duration: 1.15,
              ease: "power3.inOut",
            },
            "-=0.1",
          )
          .to(
            $overlay,
            { opacity: 0, duration: 0.8, ease: "power2.out" },
            "-=0.8",
          );
      }

      $openBtn.on("click", function (e) {
        e.preventDefault();
        openTaslMenu();
      });

      $closeBtn.on("click", function (e) {
        e.preventDefault();
        closeTaslMenu();
      });

      $overlay.on("click", function () {
        closeTaslMenu();
      });

      $(document).on("keydown", function (e) {
        if (e.key === "Escape" && isMenuOpen) closeTaslMenu();
      });

      $(document).on(
        "click",
        ".tasl-sidebar-nav ul li.has-dropdown .tasl-accordion-btn, .tasl-sidebar-nav ul li.has-dropdown .tasl-nav-row > a",
        function (e) {
          e.preventDefault();
          var $parentLi = $(this).closest("li.has-dropdown");
          var $submenu = $parentLi.find("> .tasl-submenu");

          if (!$parentLi.hasClass("active")) {
            $parentLi
              .siblings("li.has-dropdown.active")
              .removeClass("active")
              .find("> .tasl-submenu")
              .slideUp(280);
            $parentLi.addClass("active");
            $submenu.slideDown(280);
          } else {
            $submenu.slideUp(280);
            $parentLi.removeClass("active");
          }
        },
      );
    })(jQuery);
  }

  /* ==========================================================================
   06. FULL-WIDTH MEGAMENU: DYNAMIC NOTCH ALIGNMENT
   ========================================================================== */
  function alignMegamenu() {
    document.querySelectorAll(".nav-item.has-megamenu").forEach(function (li) {
      var link = li.querySelector(".nav-link");
      var dropdown = li.querySelector(".megamenu-dropdown");
      if (!dropdown || !link) return;

      // 1. Ensures the triangle notch exists (so you don't have to edit your HTML)
      if (!dropdown.querySelector(".mm-notch")) {
        dropdown.insertAdjacentHTML(
          "afterbegin",
          '<span class="mm-notch"></span>',
        );
      }

      // 2. Calculates exact horizontal center of the hovered link
      var linkRect = link.getBoundingClientRect();
      var notchX = Math.round(linkRect.left + linkRect.width / 2 - 50);

      // 3. Passes the coordinate to CSS --nx so the triangle points at the active link
      dropdown.style.setProperty("--nx", notchX + "px");
    });
  }

  alignMegamenu();
  window.addEventListener("resize", alignMegamenu);

  /* ==========================================================================
     07. ACCESSIBILITY ENGINE: MODAL, CONTRAST, FONTS & THEMES
     ========================================================================== */
  function openTaslA11y(e) {
    if (e && e.preventDefault) e.preventDefault();
    if (e && e.stopPropagation) e.stopPropagation();
    var m = document.getElementById("taslA11yModal");
    var o = document.getElementById("taslA11yOverlay");
    if (m) {
      m.classList.add("is-open");
      m.style.setProperty("display", "flex", "important");
    }
    if (o) {
      o.classList.add("is-open");
      o.style.setProperty("display", "block", "important");
    }
  }
  window.openTaslA11y = openTaslA11y;
  window.openBalcoA11y = openTaslA11y;

  function closeTaslA11y(e) {
    if (e && e.preventDefault) e.preventDefault();
    if (e && e.stopPropagation) e.stopPropagation();
    var m = document.getElementById("taslA11yModal");
    var o = document.getElementById("taslA11yOverlay");
    if (m) {
      m.classList.remove("is-open");
      m.style.setProperty("display", "none", "important");
    }
    if (o) {
      o.classList.remove("is-open");
      o.style.setProperty("display", "none", "important");
    }
  }
  window.closeTaslA11y = closeTaslA11y;
  window.closeBalcoA11y = closeTaslA11y;

  document.addEventListener("click", function (e) {
    if (e.target.closest("#openTaslA11yBtn") || e.target.closest(".a11y-btn")) {
      openTaslA11y(e);
    }
    if (
      e.target.closest("#closeTaslA11yBtn") ||
      e.target.closest(".tasl-a11y-close") ||
      e.target.id === "taslA11yOverlay"
    ) {
      closeTaslA11y(e);
    }
  });

  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") closeTaslA11y(e);
  });

  var taslFontStyleEl = document.getElementById("tasl-font-rules-live");
  if (!taslFontStyleEl) {
    taslFontStyleEl = document.createElement("style");
    taslFontStyleEl.id = "tasl-font-rules-live";
    document.head.appendChild(taslFontStyleEl);
  }

  function taslA11yFont(action) {
    var cDec = document.getElementById("cardFontDec");
    var cDef = document.getElementById("cardFontDef");
    var cInc = document.getElementById("cardFontInc");
    [cDec, cDef, cInc].forEach(function (c) {
      if (c) c.classList.remove("is-active");
    });

    if (action === "dec") {
      taslFontStyleEl.textContent =
        "body *:not(.tasl-a11y-modal *):not(.tasl-a11y-overlay) { font-size: 88% !important; }";
      if (cDec) cDec.classList.add("is-active");
      localStorage.setItem("tasl_font", "dec");
    } else if (action === "inc") {
      taslFontStyleEl.textContent =
        "body *:not(.tasl-a11y-modal *):not(.tasl-a11y-overlay) { font-size: 118% !important; }";
      if (cInc) cInc.classList.add("is-active");
      localStorage.setItem("tasl_font", "inc");
    } else {
      taslFontStyleEl.textContent = "";
      if (cDef) cDef.classList.add("is-active");
      localStorage.removeItem("tasl_font");
    }
  }
  window.taslA11yFont = taslA11yFont;

  function taslA11yToggle(feature) {
    var root = document.documentElement;
    var map = {
      titles: { id: "cardTitles", cls: "a11y-titles-active" },
      links: { id: "cardLinks", cls: "a11y-links-active" },
      magnifier: { id: "cardMagnifier", cls: "a11y-magnifier-active" },
      hideImg: { id: "cardHideImg", cls: "a11y-hide-img-active" },
      hover: { id: "cardHover", cls: "a11y-hover-active" },
      curBlack: { id: "cardCurBlack", cls: "a11y-cur-black-active" },
      curWhite: { id: "cardCurWhite", cls: "a11y-cur-white-active" },
    };

    var item = map[feature];
    if (!item) return;

    if (feature === "curBlack") {
      root.classList.remove("a11y-cur-white-active");
      var cw = document.getElementById("cardCurWhite");
      if (cw) cw.classList.remove("is-active");
      localStorage.removeItem("tasl_curWhite");
    } else if (feature === "curWhite") {
      root.classList.remove("a11y-cur-black-active");
      var cb = document.getElementById("cardCurBlack");
      if (cb) cb.classList.remove("is-active");
      localStorage.removeItem("tasl_curBlack");
    }

    var card = document.getElementById(item.id);
    var isActive = root.classList.toggle(item.cls);
    if (card) card.classList.toggle("is-active", isActive);

    if (isActive) {
      localStorage.setItem("tasl_" + feature, "1");
    } else {
      localStorage.removeItem("tasl_" + feature);
    }
  }
  window.taslA11yToggle = taslA11yToggle;

  function taslA11yTheme(theme) {
    var root = document.documentElement;
    var themeMap = {
      light: { id: "cardLight", cls: "a11y-light-contrast" },
      dark: { id: "cardDark", cls: "a11y-dark-contrast" },
      high: { id: "cardHigh", cls: "a11y-high-contrast" },
      mono: { id: "cardMono", cls: "a11y-mono-contrast" },
      sat: { id: "cardSat", cls: "a11y-sat-contrast" },
    };

    var target = themeMap[theme];
    var currentCard = target ? document.getElementById(target.id) : null;
    var isCurrentActive =
      currentCard && currentCard.classList.contains("is-active");

    Object.keys(themeMap).forEach(function (k) {
      root.classList.remove(themeMap[k].cls);
      var el = document.getElementById(themeMap[k].id);
      if (el) el.classList.remove("is-active");
    });
    localStorage.removeItem("tasl_theme");

    if (!isCurrentActive && target && currentCard) {
      root.classList.add(target.cls);
      currentCard.classList.add("is-active");
      localStorage.setItem("tasl_theme", theme);
    }
  }
  window.taslA11yTheme = taslA11yTheme;

  function taslA11yReset() {
    var root = document.documentElement;
    if (taslFontStyleEl) taslFontStyleEl.textContent = "";

    root.className = root.className.replace(/\ba11y-[^\s]+/g, "").trim();

    document.querySelectorAll(".tasl-a11y-card").forEach(function (c) {
      c.classList.remove("is-active");
    });
    var defCard = document.getElementById("cardFontDef");
    if (defCard) defCard.classList.add("is-active");

    [
      "tasl_font",
      "tasl_titles",
      "tasl_links",
      "tasl_magnifier",
      "tasl_hideImg",
      "tasl_hover",
      "tasl_curBlack",
      "tasl_curWhite",
      "tasl_theme",
    ].forEach(function (k) {
      localStorage.removeItem(k);
    });
  }
  window.taslA11yReset = taslA11yReset;

  /* Restore Accessibility Preferences from LocalStorage */
  (function restoreA11yState() {
    var savedFont = localStorage.getItem("tasl_font");
    if (savedFont) taslA11yFont(savedFont);

    [
      "titles",
      "links",
      "magnifier",
      "hideImg",
      "hover",
      "curBlack",
      "curWhite",
    ].forEach(function (f) {
      if (localStorage.getItem("tasl_" + f) === "1") taslA11yToggle(f);
    });

    var savedTheme = localStorage.getItem("tasl_theme");
    if (savedTheme) taslA11yTheme(savedTheme);
  })();

  /* ==========================================================================
     08. INNER OVERVIEW: DIRECTIONAL FADES & METRIC COUNTERS
     ========================================================================== */
  var fadeElements = document.querySelectorAll(
    ".inner-overview-sec .has_fade_anim",
  );
  if (fadeElements.length) {
    if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
      fadeElements.forEach(function (el) {
        var fadeFrom = el.getAttribute("data-fade-from");
        var delay = parseFloat(el.getAttribute("data-delay")) || 0;
        var xVal = 0,
          yVal = 40;

        if (fadeFrom === "left") {
          xVal = -60;
          yVal = 0;
        } else if (fadeFrom === "right") {
          xVal = 60;
          yVal = 0;
        }

        gsap.fromTo(
          el,
          { opacity: 0, x: xVal, y: yVal },
          {
            opacity: 1,
            x: 0,
            y: 0,
            duration: 1.2,
            delay: delay,
            ease: "power2.out",
            scrollTrigger: {
              trigger: el,
              start: "top 85%",
              once: true,
            },
          },
        );
      });
    } else {
      var fadeObserver = new IntersectionObserver(
        function (entries, obs) {
          entries.forEach(function (entry) {
            if (entry.isIntersecting) {
              entry.target.style.transition =
                "opacity 0.9s ease, transform 0.9s ease";
              entry.target.style.opacity = "1";
              entry.target.style.transform = "translate(0, 0)";
              obs.unobserve(entry.target);
            }
          });
        },
        { threshold: 0.15 },
      );

      fadeElements.forEach(function (el) {
        var fadeFrom = el.getAttribute("data-fade-from");
        var xOffset =
          fadeFrom === "left" ? "-40px" : fadeFrom === "right" ? "40px" : "0px";
        var yOffset = !fadeFrom ? "30px" : "0px";
        el.style.opacity = "0";
        el.style.transform = "translate(" + xOffset + ", " + yOffset + ")";
        fadeObserver.observe(el);
      });
    }
  }

  var overviewCounters = document.querySelectorAll(
    ".inner-overview-sec .wc-counter",
  );
  if (overviewCounters.length) {
    function runOverviewCounter(el) {
      if (el.classList.contains("is-done")) return;
      el.classList.add("is-done");

      var rawText = el.textContent.trim();
      var targetNum = parseInt(el.getAttribute("data-count") || rawText, 10);
      var suffix =
        el.getAttribute("data-suffix") ||
        (rawText.indexOf("%+") !== -1
          ? "%+"
          : rawText.indexOf("KT") !== -1
            ? " KT"
            : "");

      if (isNaN(targetNum)) return;

      var countDuration = 1600;
      var startTimestamp = null;

      function step(timestamp) {
        if (!startTimestamp) startTimestamp = timestamp;
        var progress = Math.min(
          (timestamp - startTimestamp) / countDuration,
          1,
        );
        var easeOut = 1 - Math.pow(1 - progress, 3);
        var current = Math.floor(easeOut * targetNum);

        el.textContent = current + suffix;

        if (progress < 1) {
          window.requestAnimationFrame(step);
        } else {
          el.textContent = targetNum + suffix;
        }
      }
      window.requestAnimationFrame(step);
    }

    var overviewCounterObserver = new IntersectionObserver(
      function (entries, obs) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            runOverviewCounter(entry.target);
            obs.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.2 },
    );

    overviewCounters.forEach(function (c) {
      overviewCounterObserver.observe(c);
    });
  }

  /* ==========================================================================
     09. EXPANDING SHOWCASE ENGINE: ACCORDION & MOBILE SWIPER
     ========================================================================== */
  // var rootPf = document.getElementById("platformsShowcase");
  // if (rootPf) {
  //   var stagePf = rootPf.querySelector("#pfStage");
  //   if (stagePf) {
  //     var panels = Array.prototype.slice.call(
  //       stagePf.querySelectorAll(".pf-panel")
  //     );
  //     var desktop = window.matchMedia("(min-width: 992px)");
  //     var AUTOPLAY = 7.5;
  //     var pfIndex = 0;
  //     var pfSwiper = null;
  //     var pfProgress = null;
  //     var pfIsHovered = false;
  //     var pfTimer = null;

  //     function setPfActive(i) {
  //       pfIndex = i;
  //       panels.forEach(function (p, n) {
  //         p.classList.toggle("is-active", n === i);
  //       });
  //       startPfProgress();
  //     }

  //     function startPfProgress() {
  //       if (!desktop.matches) return;
  //       if (pfProgress) pfProgress.kill();
  //       if (typeof gsap !== "undefined") {
  //         gsap.set(stagePf.querySelectorAll(".pf-fill"), { scaleX: 0 });
  //         pfProgress = gsap.to(panels[pfIndex].querySelector(".pf-fill"), {
  //           scaleX: 1,
  //           duration: AUTOPLAY,
  //           ease: "none",
  //           onComplete: function () {
  //             setPfActive((pfIndex + 1) % panels.length);
  //           },
  //         });
  //         if (pfIsHovered) pfProgress.pause();
  //       }
  //     }

  //     /* Desktop interactions */
  //     panels.forEach(function (p, n) {
  //       p.addEventListener("click", function (e) {
  //         if (desktop.matches && n !== pfIndex) {
  //           e.preventDefault();
  //           setPfActive(n);
  //         }
  //       });

  //       p.addEventListener("mouseenter", function () {
  //         if (!desktop.matches) return;
  //         clearTimeout(pfTimer);
  //         pfTimer = setTimeout(function () {
  //           if (n !== pfIndex) setPfActive(n);
  //         }, 110);
  //       });

  //       p.addEventListener("mouseleave", function () {
  //         clearTimeout(pfTimer);
  //       });
  //     });

  //     stagePf.addEventListener("mouseenter", function () {
  //       pfIsHovered = true;
  //       if (pfProgress) pfProgress.pause();
  //     });

  //     stagePf.addEventListener("mouseleave", function () {
  //       pfIsHovered = false;
  //       if (pfProgress) pfProgress.resume();
  //     });

  //     function checkPfMode() {
  //       if (desktop.matches) {
  //         if (pfSwiper) {
  //           pfSwiper.destroy(true, true);
  //           pfSwiper = null;
  //         }
  //         panels.forEach(function (p) {
  //           p.style.width = "";
  //           p.style.marginRight = "";
  //         });
  //         setPfActive(pfIndex);
  //       } else {
  //         if (pfProgress) pfProgress.kill();
  //         if (typeof Swiper !== "undefined" && !pfSwiper) {
  //           pfSwiper = new Swiper(stagePf, {
  //             slidesPerView: 1.15,
  //             spaceBetween: 14,
  //             grabCursor: true,
  //           });
  //         }
  //       }
  //     }

  //     checkPfMode();
  //     window.addEventListener("resize", function () {
  //       clearTimeout(pfTimer);
  //       pfTimer = setTimeout(checkPfMode, 200);
  //     });
  //   }
  // }

  /* ==========================================================================
   09. EXPANDING SHOWCASE ENGINE: ACCORDION & MOBILE SWIPER
   ========================================================================== */
  var stagePf = document.querySelector("#platformsShowcase #pfStage");
  if (stagePf) {
    var panels = gsap.utils.toArray("#pfStage .pf-panel");
    var desktop = window.matchMedia("(min-width: 992px)");
    var pfIdx = 0,
      pfTween = null,
      pfSwiper = null,
      pfTimer = null;

    function setPfActive(i) {
      pfIdx = i;
      panels.forEach(function (p, n) {
        p.classList.toggle("is-active", n === i);
      });

      if (!desktop.matches) return;
      if (pfTween) pfTween.kill();
      gsap.set("#pfStage .pf-fill", { scaleX: 0 });

      pfTween = gsap.to(panels[pfIdx].querySelector(".pf-fill"), {
        scaleX: 1,
        duration: 7.5,
        ease: "none",
        onComplete: function () {
          setPfActive((pfIdx + 1) % panels.length);
        },
      });
    }

    // 1. Mouse enters stage: FREEZES (pauses) the progress bar at its current position without resetting
    stagePf.addEventListener("mouseenter", function () {
      if (desktop.matches && pfTween) pfTween.pause();
    });

    // 2. Mouse leaves stage: RESUMES progress from the exact same point
    stagePf.addEventListener("mouseleave", function () {
      if (desktop.matches && pfTween) pfTween.resume();
    });

    // 3. Hovering or clicking a DIFFERENT panel switches cards
    panels.forEach(function (panel, i) {
      panel.addEventListener("mouseenter", function () {
        if (!desktop.matches || i === pfIdx) return; // If already on this card, do NOT reset
        clearTimeout(pfTimer);
        pfTimer = setTimeout(function () {
          setPfActive(i);
          if (pfTween) pfTween.pause(); // Keep paused while mouse is inspecting the new card
        }, 110);
      });

      panel.addEventListener("mouseleave", function () {
        clearTimeout(pfTimer);
      });

      panel.addEventListener("click", function (e) {
        if (desktop.matches && i !== pfIdx) {
          e.preventDefault();
          setPfActive(i);
        }
      });
    });

    // 4. Mode Switcher: Desktop Accordion vs Mobile Swiper
    function checkPfMode() {
      if (desktop.matches) {
        if (pfSwiper) {
          pfSwiper.destroy(true, true);
          pfSwiper = null;
        }
        panels.forEach(function (p) {
          p.style.width = "";
          p.style.marginRight = "";
        });
        setPfActive(pfIdx);
      } else {
        if (pfTween) pfTween.kill();
        if (typeof Swiper !== "undefined" && !pfSwiper) {
          pfSwiper = new Swiper(stagePf, {
            slidesPerView: 1.15,
            spaceBetween: 14,
            grabCursor: true,
          });
        }
      }
    }

    checkPfMode();
    desktop.addEventListener("change", checkPfMode);
  }
  /* ==========================================================================
     10. C295 BLUEPRINT WATERMARK: SVG PATH DRAW ENGINE
     ========================================================================== */
  var wrapC295 = document.querySelector(
    ".inner-overview-sec .overview-watermark-bg",
  );
  var svgC295 = wrapC295 && wrapC295.querySelector(".c295-svg");
  if (svgC295) {
    var mainPath = svgC295.querySelector(".c295-main");
    var detailPaths = [].slice.call(
      svgC295.querySelectorAll(".c295-details path"),
    );
    var allPaths = [mainPath].concat(detailPaths);
    var MAIN_START = 0,
      MAIN_DUR = 3600;
    var DET_START = 3000,
      DET_STAGGER = 60,
      DET_DUR = 700;
    var played = false;
    var clamp = function (v) {
      return v < 0 ? 0 : v > 1 ? 1 : v;
    };
    var ease = function (t) {
      return 0.5 - 0.5 * Math.cos(Math.PI * t);
    };

    allPaths.forEach(function (p) {
      if (!p) return;
      p.removeAttribute("pathLength");
      p._len = p.getTotalLength();
      p.style.strokeDasharray = p._len;
      p.style.strokeDashoffset = p._len + 3;
    });

    function setC295Widths() {
      var k =
        svgC295.viewBox.baseVal.width / svgC295.getBoundingClientRect().width;
      if (mainPath) mainPath.style.strokeWidth = 1.2 * k;
      detailPaths.forEach(function (p) {
        p.style.strokeWidth = 0.7 * k;
      });
    }
    setC295Widths();
    window.addEventListener("resize", setC295Widths);

    function setDrawn(p, a) {
      if (!p) return;
      p.style.strokeDashoffset = a <= 0 ? p._len + 3 : p._len * (1 - a);
    }

    function playC295Draw() {
      if (played) return;
      played = true;
      var t0 = null;
      (function frame(ts) {
        if (t0 === null) t0 = ts;
        var t = ts - t0;
        setDrawn(mainPath, ease(clamp((t - MAIN_START) / MAIN_DUR)));
        detailPaths.forEach(function (d, i) {
          setDrawn(d, ease(clamp((t - DET_START - i * DET_STAGGER) / DET_DUR)));
        });
        if (t < DET_START + detailPaths.length * DET_STAGGER + DET_DUR) {
          requestAnimationFrame(frame);
        } else {
          allPaths.forEach(function (p) {
            if (p) p.style.strokeDashoffset = 0;
          });
        }
      })(performance.now());
    }

    if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
      allPaths.forEach(function (p) {
        if (p) p.style.strokeDashoffset = 0;
      });
    } else if ("IntersectionObserver" in window) {
      var c295Observer = new IntersectionObserver(
        function (entries) {
          if (entries[0].isIntersecting) {
            playC295Draw();
            c295Observer.disconnect();
          }
        },
        { threshold: 0.5 },
      );
      c295Observer.observe(wrapC295);
    } else {
      playC295Draw();
    }
  }

  /* ==========================================================================
     11. AVIONICS / MISSION COMPUTER: SIDE-BY-SIDE 2x2 ZOOM VIEW
     ========================================================================== */
  if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
    // 1. Initial entrance for photos and list rows
    gsap.from(".mc-photo", {
      autoAlpha: 0,
      y: 40,
      duration: 1,
      stagger: 0.1,
      ease: "power3.out",
      scrollTrigger: {
        trigger: ".mc-stage",
        start: "top 75%",
      },
    });

    gsap.from(".mc-list li", {
      autoAlpha: 0,
      y: 30,
      duration: 0.9,
      stagger: 0.1,
      ease: "power3.out",
      scrollTrigger: {
        trigger: ".mc-stage",
        start: "top 75%",
      },
    });

    // 2. Desktop: Pin stage & zoom into each photo on scroll
    ScrollTrigger.matchMedia({
      "(min-width: 992px)": function () {
        var tl = gsap.timeline({
          scrollTrigger: {
            trigger: ".mc-stage",
            start: "top top",
            end: "+=380%",
            scrub: 0.8,
            pin: true,
            anticipatePin: 1,
          },
        });

        // Quadrant sequence: [Top-Left, Top-Right, Bottom-Right, Bottom-Left]
        [
          [50, 50],
          [-50, 50],
          [-50, -50],
          [50, -50],
        ].forEach(function (coords) {
          tl.to(".mc-grid", {
            scale: 2,
            xPercent: coords[0],
            yPercent: coords[1],
            duration: 1,
            ease: "power2.inOut",
          }).to({}, { duration: 0.35 });
        });

        // Zoom back out to full 2x2 overview
        tl.to(".mc-grid", {
          scale: 1,
          xPercent: 0,
          yPercent: 0,
          duration: 1,
          ease: "power2.inOut",
        });
      },
    });
  }

  /* ==========================================================================
   12. OTHER AIRBORNE PLATFORMS: FAST IMAGE SWITCH & COMPACT SCROLL
   ========================================================================== */
  if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
    ScrollTrigger.matchMedia({
      "(min-width: 992px)": function () {
        var items = gsap.utils.toArray(".ap-item");
        var images = gsap.utils.toArray(".ap-frame-img");

        if (!items.length || !images.length) return;

        // 1. Initial State
        gsap.set(images.slice(1), { autoAlpha: 0, scale: 1.03 });
        gsap.set(images[0], { autoAlpha: 1, scale: 1 });
        items[0].classList.add("is-on");

        // 2. Pin the left photo frame
        ScrollTrigger.create({
          trigger: ".ap-body",
          start: "top 120px",
          end: "bottom bottom",
          pin: ".ap-frame",
          pinSpacing: false,
        });

        // 3. Fast center-line switch as each headline passes
           
      items.forEach(function (item, index) {
        ScrollTrigger.create({
          trigger: item,
          start: "top 68%",             // Triggers as soon as headline enters view
          end: "bottom 68%",
          onToggle: function (self) {
            if (self.isActive) {
              items.forEach(function (el, i) {
                el.classList.toggle("is-on", i === index);
              });
              images.forEach(function (img, i) {
                gsap.to(img, {
                  autoAlpha: i === index ? 1 : 0,
                  scale: i === index ? 1 : 1.03,
                  duration: 0.35,        // Fast switch
                  ease: "power2.out",
                  overwrite: "auto",
                });
              });
            }
          },
        });
      });
      },
    });
  }

  /* Final ScrollTrigger recalculation */
  if (typeof ScrollTrigger !== "undefined") {
    ScrollTrigger.refresh();
  }
});

// pragyans part gsap
// news & media part

gsap
  .timeline({
    scrollTrigger: {
      trigger: ".at-a-glance-wrapper",
      start: "top 70%",
      end: "top 10%",
      scrub: 8,
    },
  })
  .to(".strength-card", {
    opacity: 1,
    filter: "blur(0px)",
    y: 0,
    scale: 1,
    duration: 6,
    stagger: 3.5,
    ease: "power2.out",
  });

gsap
  .timeline({
    scrollTrigger: {
      trigger: ".press-release-wraper",
      start: "top 85%",
      end: "top 15%",
      scrub: 4.5,
    },
  })
  .to(".press-news-card", {
    opacity: 1,
    filter: "blur(0px)",
    y: 0,
    scale: 1,
    duration: 5,
    stagger: 0.9,
    ease: "power3.out",
  })
  .to(
    ".press-card-date",
    {
      opacity: 1,
      filter: "blur(0px)",
      y: 0,
      duration: 1.5,
      stagger: 0.9,
      ease: "power3.out",
    },
    "-=2",
  )
  .to(
    ".press-card-title",
    {
      opacity: 1,
      filter: "blur(0px)",
      y: 0,
      duration: 1.8,
      stagger: 0.4,
      ease: "power3.out",
    },
    "-=1.2",
  )
  .to(
    ".press-card-link",
    {
      opacity: 1,
      filter: "blur(0px)",
      y: 0,
      duration: 1.9,
      stagger: 0.4,
      ease: "power3.out",
    },
    "-=1",
  );

gsap
  .timeline({
    scrollTrigger: {
      trigger: ".jv-wraper",
      start: "top 100%",
      end: "top 90%",
      scrub: 5,
    },
  })
  .to(".jv-card", {
    opacity: 1,
    filter: "blur(0px)",
    y: 0,
    scale: 1,
    duration: 5,
    ease: "power3.out",
  })
  .to(
    ".jv-footer",
    {
      opacity: 1,
      filter: "blur(0px)",
      y: 0,
      duration: 3,
      ease: "power3.out",
    },
    "-=2",
  );

// division wrapper part
gsap
  .timeline({
    scrollTrigger: {
      trigger: ".division-wraper",
      start: "top 100%",
      end: "top 80%",
      scrub: 3.5,
    },
  })
  .to(".division-card", {
    opacity: 1,
    filter: "blur(0px)",
    y: 0,
    scale: 1,
    duration: 3,
    stagger: 0.6,
    ease: "power3.out",
  });

var jvLogoSwiper = new Swiper(".jv-logo-swiper", {
  slidesPerView: 3,
  spaceBetween: 0,
  loop: true,
  speed: 900,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
    pauseOnMouseEnter: true,
  },
  breakpoints: {
    0: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
  },
});

// overview part
gsap.registerPlugin(ScrollTrigger);

gsap.to(".overview-blue-line", {
  scaleY: 1,
  ease: "none",
  scrollTrigger: {
    trigger: ".overview-content",
    start: "top 80%",
    end: "bottom 30%",
    scrub: 1,
  },
});

// last section

// pragyan end

document.addEventListener("DOMContentLoaded", () => {
  const section = document.getElementById("c295Overview");
  const textEl = document.getElementById("overviewText");
  const barEl = document.getElementById("overviewBar");
  const footerEl = document.querySelector(".overview-footer");
  if (!section || !textEl) return;

  // Split text into masked words
  const rawText = textEl.textContent.trim().replace(/\s+/g, " ");
  const words = rawText.split(" ");
  textEl.innerHTML = words
    .map(
      (word) =>
        `<span class="ov-word-mask"><span class="ov-word-inner">${word}</span></span>`,
    )
    .join("");

  const wordInners = textEl.querySelectorAll(".ov-word-inner");

  // Reduced motion check
  if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
    wordInners.forEach((w) => {
      w.style.transform = "none";
      w.style.opacity = "1";
    });
    if (barEl) barEl.style.transform = "scaleX(1)";
    if (footerEl) {
      footerEl.style.opacity = "1";
      footerEl.style.transform = "none";
    }
    return;
  }

  let hasAnimated = false;

  function runAnimation() {
    if (hasAnimated) return;
    hasAnimated = true;

    if (typeof gsap !== "undefined") {
      const tl = gsap.timeline();

      // 1. Accent line draws out
      if (barEl) {
        tl.to(
          barEl,
          {
            scaleX: 1,
            duration: 0.6,
            ease: "power2.out",
          },
          0,
        );
      }

      // 2. Words slide up with a quick, crisp stagger (completes in ~0.8s)
      tl.to(
        wordInners,
        {
          y: "0%",
          opacity: 1,
          duration: 0.55,
          ease: "power3.out",
          stagger: 0.012,
        },
        0.15,
      );

      // 3. Footer taglines fade in
      if (footerEl) {
        tl.to(
          footerEl,
          {
            y: 0,
            opacity: 1,
            duration: 0.45,
            ease: "power2.out",
          },
          "-=0.2",
        );
      }
    } else {
      // Fallback if GSAP is not present
      wordInners.forEach((w) => {
        w.style.transform = "none";
        w.style.opacity = "1";
      });
      if (barEl) barEl.style.transform = "scaleX(1)";
      if (footerEl) {
        footerEl.style.opacity = "1";
        footerEl.style.transform = "none";
      }
    }
  }

  // Trigger using ScrollTrigger if available
  if (typeof ScrollTrigger !== "undefined") {
    ScrollTrigger.create({
      trigger: section,
      start: "top 78%",
      once: true,
      onEnter: runAnimation,
    });
  }

  // Fallback scroll listener
  function checkPosition() {
    if (hasAnimated) return;
    const rect = section.getBoundingClientRect();
    if (rect.top <= window.innerHeight * 0.8) {
      runAnimation();
      window.removeEventListener("scroll", checkPosition);
    }
  }

  window.addEventListener("scroll", checkPosition, { passive: true });
  checkPosition();
});
