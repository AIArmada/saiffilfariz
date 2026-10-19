(function () {
  const $ = (selector, scope = document) => scope.querySelector(selector);
  const $$ = (selector, scope = document) => [...scope.querySelectorAll(selector)];

  const loader = $("[data-loader]");
  const loaderBar = $("[data-loader-bar]");
  const loaderPercent = $("[data-loader-percent]");
  if (loader) {
    let progress = 0;
    const interval = window.setInterval(() => {
      progress = Math.min(100, progress + Math.random() * 28);
      if (loaderBar) loaderBar.style.width = `${progress}%`;
      if (loaderPercent) loaderPercent.textContent = `${Math.floor(progress)}%`;
      if (progress >= 100) {
        window.clearInterval(interval);
        window.setTimeout(() => loader.classList.add("done"), 180);
      }
    }, 90);
  }

  const nav = $("[data-nav]");
  const progressBar = $("[data-progress]");
  const updateScrollState = () => {
    if (nav) nav.classList.toggle("is-scrolled", window.scrollY > 32);
    if (progressBar) {
      const max = document.documentElement.scrollHeight - window.innerHeight;
      progressBar.style.transform = `scaleX(${max > 0 ? window.scrollY / max : 0})`;
    }
  };
  window.addEventListener("scroll", updateScrollState, { passive: true });
  updateScrollState();

  const menuToggle = $("[data-menu-toggle]");
  const mobileMenu = $("[data-mobile-menu]");
  if (menuToggle && mobileMenu) {
    menuToggle.addEventListener("click", () => {
      const open = mobileMenu.classList.toggle("open");
      menuToggle.setAttribute("aria-expanded", String(open));
      document.body.classList.toggle("menu-open", open);
    });
    $$('a[href$=".html"]', mobileMenu).forEach((link) => link.addEventListener("click", () => {
      mobileMenu.classList.remove("open");
      menuToggle.setAttribute("aria-expanded", "false");
      document.body.classList.remove("menu-open");
    }));
  }

  const revealItems = $$(".reveal");
  const reducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
  let revealObserver = null;
  let gsapMotionInitialized = false;

  const showReveals = () => revealItems.forEach((item) => item.classList.add("is-visible"));

  const initGsapMotion = () => {
    if (reducedMotion || gsapMotionInitialized || !window.gsap || !window.ScrollTrigger) return false;

    const { gsap, ScrollTrigger } = window;
    gsap.registerPlugin(ScrollTrigger);
    gsapMotionInitialized = true;

    const delayFor = (item) => {
      if (item.classList.contains("delay-3")) return .24;
      if (item.classList.contains("delay-2")) return .16;
      if (item.classList.contains("delay-1")) return .08;
      return 0;
    };

    const heroItems = $$(".hero .reveal");
    const scrollRevealItems = revealItems.filter((item) => !item.closest(".hero"));

    if (heroItems.length) {
      gsap.fromTo(heroItems,
        { autoAlpha: 0, y: 20 },
        { autoAlpha: 1, y: 0, duration: .85, ease: "power3.out", stagger: .08, delay: .18, overwrite: "auto" }
      );
    }

    scrollRevealItems.forEach((item) => {
      gsap.fromTo(item,
        { autoAlpha: 0, y: 24 },
        {
          autoAlpha: 1,
          y: 0,
          duration: .85,
          delay: delayFor(item),
          ease: "power3.out",
          overwrite: "auto",
          scrollTrigger: { trigger: item, start: "top 88%", once: true }
        }
      );
    });

    const desktopMotion = gsap.matchMedia();
    desktopMotion.add("(min-width: 761px)", () => {
      $$(".hero-media img, .image-band-media img").forEach((image) => {
        gsap.fromTo(image,
          { yPercent: -2 },
          {
            yPercent: 8,
            ease: "none",
            scrollTrigger: { trigger: image.parentElement, start: "top bottom", end: "bottom top", scrub: .8 }
          }
        );
      });

      $$(".visual img").forEach((image) => {
        gsap.fromTo(image,
          { yPercent: -1 },
          {
            yPercent: 3,
            ease: "none",
            scrollTrigger: { trigger: image.closest(".visual"), start: "top bottom", end: "bottom top", scrub: 1 }
          }
        );
      });
    });

    const refreshScrollTriggers = () => ScrollTrigger.refresh();
    if (document.readyState === "complete") {
      window.setTimeout(refreshScrollTriggers, 0);
    } else {
      window.addEventListener("load", refreshScrollTriggers, { once: true });
    }
    return true;
  };

  if (!initGsapMotion()) {
    if ("IntersectionObserver" in window && !reducedMotion) {
      revealObserver = new IntersectionObserver((entries, currentObserver) => {
        entries.forEach((entry) => {
          if (!entry.isIntersecting) return;
          entry.target.classList.add("is-visible");
          currentObserver.unobserve(entry.target);
        });
      }, { rootMargin: "0px 0px -8% 0px", threshold: .08 });
      revealItems.forEach((item) => revealObserver.observe(item));
    } else {
      showReveals();
    }

    if (!reducedMotion) {
      let attempts = 0;
      const enhanceWhenReady = () => {
        if (initGsapMotion()) {
          if (revealObserver) {
            revealObserver.disconnect();
            revealObserver = null;
          }
          return;
        }
        attempts += 1;
        if (attempts < 100) window.setTimeout(enhanceWhenReady, 100);
      };
      enhanceWhenReady();
    }
  }

  $$('a[href^="#"]').forEach((link) => link.addEventListener("click", (event) => {
    const target = $(link.getAttribute("href"));
    if (!target) return;
    event.preventDefault();
    target.scrollIntoView({ behavior: "smooth", block: "start" });
  }));

  $$("[data-filter-group]").forEach((group) => {
    const buttons = $$("[data-filter]", group);
    const cards = $$("[data-category]", group);
    buttons.forEach((button) => button.addEventListener("click", () => {
      buttons.forEach((item) => item.classList.toggle("active", item === button));
      const value = button.dataset.filter;
      cards.forEach((card) => {
        card.hidden = value !== "all" && !card.dataset.category.split(" ").includes(value);
      });
    }));
  });

  const form = $("[data-enquiry-form]");
  const formStatus = $("[data-form-status]");
  if (form) form.addEventListener("submit", (event) => {
    event.preventDefault();
    if (!form.checkValidity()) {
      form.reportValidity();
      return;
    }
    if (formStatus) formStatus.textContent = "MESSAGE READY — I READ EVERY ENQUIRY MYSELF.";
    form.reset();
  });

  $$('[data-year]').forEach((item) => { item.textContent = new Date().getFullYear(); });
}());
