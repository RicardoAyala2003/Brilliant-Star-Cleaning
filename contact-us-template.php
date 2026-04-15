<?php
/**
 * Template Name: Contact Template
 *
 * Contact / Quote page for Brilliant Star Cleaning Services
 * Navbar y footer vienen de header.php / footer.php.
 */

get_header(); ?>

<main class="bs-contact-page overflow-hidden bg-[var(--bs-bg)] text-[var(--bs-text)]">

  <?php
    $hero_image   = 'https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?q=80&w=1600&auto=format&fit=crop';
    $detail_image = 'https://images.unsplash.com/photo-1527515637462-cff94eecc1ac?q=80&w=1200&auto=format&fit=crop';
  ?>

  <!-- HERO -->
  <section class="relative isolate overflow-hidden border-b border-[var(--bs-border)] bg-[var(--bs-primary)] text-white">
    <div class="absolute inset-0">
      <img
        src="<?php echo esc_url($hero_image); ?>"
        alt="Bright clean San Diego home interior ready for professional cleaning"
        class="bs-contact-hero-image h-full w-full object-cover"
      >
      <div class="absolute inset-0" style="background:var(--bs-contact-hero-overlay)"></div>
      <div class="absolute inset-0" style="background:var(--bs-contact-hero-glow-tl)"></div>
      <div class="absolute inset-0" style="background:var(--bs-contact-hero-glow-br)"></div>

      <div class="absolute inset-y-0 left-[7%] hidden w-px lg:block" style="background:var(--bs-hero-line-v-left)"></div>
      <div class="absolute inset-y-0 right-[11%] hidden w-px lg:block" style="background:var(--bs-hero-line-v-right)"></div>
      <div class="absolute inset-x-0 top-0 h-px" style="background:var(--bs-hero-line-h)"></div>
      <div class="absolute bottom-0 left-0 right-0 h-28" style="background:var(--bs-hero-fade-b)"></div>

      <div class="absolute right-[-90px] top-[-70px] h-56 w-56 rotate-[18deg]" style="border:1px solid var(--bs-hero-frame-strong)"></div>
      <div class="absolute left-[-60px] bottom-[12%] h-40 w-40 rotate-[18deg]" style="border:1px solid var(--bs-hero-frame-soft)"></div>
    </div>

    <div class="relative z-10 mx-auto max-w-7xl px-4 py-16 lg:py-22">
      <div class="grid gap-10 lg:grid-cols-[1.02fr_0.98fr] lg:items-end">

        <div class="bs-reveal-left">
          <div class="max-w-3xl">
            <p class="bs-hero-kicker inline-flex px-4 py-2 text-[11px] font-extrabold uppercase tracking-[0.24em] backdrop-blur-sm">
              Contact / Get a Quote
            </p>

            <h1 class="mt-6 max-w-[12ch] text-4xl font-semibold leading-[0.94] tracking-[-0.05em] text-white md:text-6xl xl:text-7xl">
              Get Your Free, Personalized Cleaning Quote
            </h1>

            <p class="mt-6 max-w-2xl text-base leading-8 text-[var(--bs-hero-text-soft)] md:text-lg">
              Every home is different — and so is every quote. Fill out the form below and we'll follow up to discuss your needs and put together a transparent, personalized estimate. No pressure and no hidden fees — just honest pricing for exceptional cleaning.
            </p>

            <div class="mt-8 flex flex-col gap-4 sm:flex-row">
              <a href="#quote-form" class="bs-btn bs-btn-primary inline-flex items-center justify-center px-7 py-4 text-sm font-black uppercase tracking-[0.15em] text-white">
                Start Your Quote
              </a>

              <a href="tel:+18582551498" class="bs-btn bs-btn-outline-white inline-flex items-center justify-center px-7 py-4 text-sm font-black uppercase tracking-[0.15em] text-white">
                Call (858) 255-1498
              </a>
            </div>
          </div>
        </div>

        <div class="bs-reveal-right">
          <div class="overflow-hidden border shadow-[var(--bs-shadow-card)] backdrop-blur-sm" style="border-color:var(--bs-hero-panel-border); background:var(--bs-hero-panel-bg)">
            <div class="grid gap-0 sm:grid-cols-3 lg:grid-cols-1">
              <div class="border-b px-6 py-6 lg:border-b lg:border-r-0" style="border-color:var(--bs-hero-panel-divider)">
                <p class="text-[10px] font-black uppercase tracking-[0.18em] text-[var(--bs-hero-panel-label)]">Phone</p>
                <a href="tel:+18582551498" class="mt-2 block text-lg font-extrabold tracking-[-0.02em] text-white transition hover:text-[var(--bs-gold)]">
                  (858) 255-1498
                </a>
              </div>

              <div class="border-b px-6 py-6 lg:border-b lg:border-r-0" style="border-color:var(--bs-hero-panel-divider)">
                <p class="text-[10px] font-black uppercase tracking-[0.18em] text-[var(--bs-hero-panel-label)]">Hours</p>
                <p class="mt-2 text-sm leading-7 text-[var(--bs-hero-panel-text)]">
                  Mon–Fri<br>7:30 AM to 4:30 PM
                </p>
              </div>

              <div class="px-6 py-6">
                <p class="text-[10px] font-black uppercase tracking-[0.18em] text-[var(--bs-hero-panel-label)]">Service Area</p>
                <p class="mt-2 text-sm leading-7 text-[var(--bs-hero-panel-text)]">
                  San Diego & surrounding neighborhoods
                </p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- TRUST STRIP -->
  <section class="relative z-20 -mt-8 lg:-mt-10">
    <div class="mx-auto max-w-7xl px-4">
      <div class="grid gap-0 overflow-hidden border border-[var(--bs-border)] bg-white shadow-[var(--bs-shadow-trust)] md:grid-cols-2 xl:grid-cols-4">
        <div class="bs-reveal-up bs-hover-rise bs-trust-item flex items-center gap-4 border-b px-5 py-5 md:border-r xl:border-b-0" style="border-color:var(--bs-border)">
          <span class="bs-chip-icon bg-[var(--bs-accent)]"></span>
          <div>
            <p class="text-[10px] font-black uppercase tracking-[0.18em] text-[var(--bs-text-muted)]">Experience</p>
            <p class="mt-1 text-sm font-extrabold text-[var(--bs-primary)]">15+ Years of Experience</p>
          </div>
        </div>

        <div class="bs-reveal-up bs-hover-rise bs-trust-item flex items-center gap-4 border-b px-5 py-5 xl:border-b-0 xl:border-r" style="border-color:var(--bs-border)">
          <span class="bs-chip-icon bg-[var(--bs-primary)]"></span>
          <div>
            <p class="text-[10px] font-black uppercase tracking-[0.18em] text-[var(--bs-text-muted)]">Trust</p>
            <p class="mt-1 text-sm font-extrabold text-[var(--bs-primary)]">Licensed &amp; Insured</p>
          </div>
        </div>

        <div class="bs-reveal-up bs-hover-rise bs-trust-item flex items-center gap-4 border-b px-5 py-5 md:border-r md:border-b-0" style="border-color:var(--bs-border)">
          <span class="bs-chip-icon bg-[var(--bs-gold)]"></span>
          <div>
            <p class="text-[10px] font-black uppercase tracking-[0.18em] text-[var(--bs-text-muted)]">Quote</p>
            <p class="mt-1 text-sm font-extrabold text-[var(--bs-primary)]">No Pressure, No Hidden Fees</p>
          </div>
        </div>

        <div class="bs-reveal-up bs-hover-rise bs-trust-item flex items-center gap-4 px-5 py-5">
          <span class="bs-chip-icon bg-[var(--bs-accent)]"></span>
          <div>
            <p class="text-[10px] font-black uppercase tracking-[0.18em] text-[var(--bs-text-muted)]">Convenience</p>
            <p class="mt-1 text-sm font-extrabold text-[var(--bs-primary)]">Click-to-Call &amp; Quick Form</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FORM + CONTACT DETAILS -->
  <section id="quote-form" class="bg-[var(--bs-bg)] pb-20 pt-24 lg:pb-24 lg:pt-28">
    <div class="mx-auto max-w-7xl px-4">
      <div class="grid gap-10 lg:grid-cols-[1.05fr_0.95fr] lg:items-start">

        <div class="bs-reveal-left">
          <div id="bs-cta-home-root"></div>
        </div>

        <div class="bs-reveal-right">
          <div class="space-y-6">

            <div class="overflow-hidden border border-[var(--bs-border)] bg-white shadow-[var(--bs-shadow-card)]">
              <div class="px-6 py-6 md:px-7" style="border-bottom:1px solid var(--bs-border); background:var(--bs-card-soft-bg)">
                <p class="text-xs font-black uppercase tracking-[0.18em] text-[var(--bs-accent)]">Prefer to Call?</p>
                <h2 class="mt-2 text-2xl font-semibold leading-tight tracking-[-0.03em] text-[var(--bs-primary)]">
                  Reach us directly
                </h2>
              </div>

              <div class="grid gap-5 px-6 py-6 md:px-7">
                <div>
                  <p class="text-[11px] font-black uppercase tracking-[0.16em] text-[var(--bs-text-muted)]">Phone</p>
                  <a href="tel:+18582551498" class="mt-2 inline-block text-xl font-extrabold tracking-[-0.03em] text-[var(--bs-primary)] transition hover:text-[var(--bs-gold)]">
                    (858) 255-1498
                  </a>
                </div>

                <div>
                  <p class="text-[11px] font-black uppercase tracking-[0.16em] text-[var(--bs-text-muted)]">Email</p>
                  <a href="mailto:brilliantstarcleaning@gmail.com" class="mt-2 inline-block break-all text-base font-extrabold tracking-[-0.02em] text-[var(--bs-primary)] transition hover:text-[var(--bs-gold)]">
                    brilliantstarcleaning@gmail.com
                  </a>
                </div>

                <div>
                  <p class="text-[11px] font-black uppercase tracking-[0.16em] text-[var(--bs-text-muted)]">Hours</p>
                  <p class="mt-2 text-base leading-8 text-[var(--bs-text-soft)]">
                    Prefer to call us directly? We're available Monday through Friday, 7:30 AM to 4:30 PM (Fridays until 4:00 PM).
                  </p>
                </div>
              </div>
            </div>

            <div class="overflow-hidden border border-[var(--bs-border)] bg-white shadow-[var(--bs-shadow-card)]">
              <div class="px-6 py-6 md:px-7" style="border-bottom:1px solid var(--bs-border); background:var(--bs-card-soft-bg)">
                <p class="text-xs font-black uppercase tracking-[0.18em] text-[var(--bs-accent)]">Service Area</p>
                <h2 class="mt-2 text-2xl font-semibold leading-tight tracking-[-0.03em] text-[var(--bs-primary)]">
                  San Diego service map
                </h2>
              </div>

              <div class="px-6 py-6 md:px-7">
                <div class="overflow-hidden border border-[var(--bs-border)] bg-[var(--bs-surface-2)] shadow-[var(--bs-shadow-service)]">
                  <iframe
                    title="Brilliant Star Cleaning Services San Diego Service Area"
                    src="https://www.google.com/maps?q=San%20Diego,%20CA&z=10&output=embed"
                    width="100%"
                    height="360"
                    style="border:0;"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                  </iframe>
                </div>
              </div>
            </div>

            <div class="overflow-hidden border border-[var(--bs-border)] p-6 shadow-[var(--bs-shadow-service)] md:p-7" style="background:var(--bs-card-soft-bg)">
              <p class="text-[11px] font-black uppercase tracking-[0.18em] text-[var(--bs-accent)]">Need Move-Out Cleaning?</p>
              <p class="mt-3 text-base leading-8 text-[var(--bs-text-soft)]">
                Booking a move-out cleaning? Please note: the property must be vacant and all drawers and cabinets must be empty before our team arrives.
              </p>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>

</main>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Inter:wght@400;500;600;700;800&display=swap');

  :root {
    /* Paleta principal */
    --bs-primary:        #18364a;
    --bs-primary-2:      #28495f;
    --bs-accent:         #9ab3c7;
    --bs-accent-hover:   #89a7be;
    --bs-gold:           #c9a13a;
    --bs-gold-hover:     #b88f30;

    /* Fondos */
    --bs-bg:             #f7f8f7;
    --bs-surface:        #ffffff;
    --bs-surface-2:      #eef3f5;
    --bs-surface-3:      #fcfbf8;
    --bs-card-soft-bg:   linear-gradient(180deg, #ffffff 0%, #fcfbf8 100%);

    /* Texto */
    --bs-text:           #1c2831;
    --bs-text-soft:      rgba(28, 40, 49, 0.78);
    --bs-text-muted:     rgba(28, 40, 49, 0.56);

    /* Bordes */
    --bs-border:         rgba(24, 54, 74, 0.10);

    /* Sombras */
    --bs-shadow-card:            0 28px 70px rgba(24, 54, 74, 0.08);
    --bs-shadow-trust:           0 22px 60px rgba(24, 54, 74, 0.08);
    --bs-shadow-service:         0 18px 46px rgba(24, 54, 74, 0.06);
    --bs-shadow-hover-rise:      0 18px 44px rgba(24, 54, 74, 0.10);

    /* Sombras botones */
    --bs-shadow-btn-primary:         0 18px 38px rgba(201, 161, 58, 0.22);
    --bs-shadow-btn-primary-hover:   0 22px 44px rgba(201, 161, 58, 0.30);
    --bs-shadow-btn-secondary:       0 18px 38px rgba(24, 54, 74, 0.18);
    --bs-shadow-btn-secondary-hover: 0 24px 48px rgba(24, 54, 74, 0.24);
    --bs-shadow-btn-white-hover:     0 18px 40px rgba(24, 54, 74, 0.16);

    /* Hero general */
    --bs-hero-line-h:          linear-gradient(90deg, transparent, rgba(255,255,255,0.30), transparent);
    --bs-hero-line-v-left:     rgba(255,255,255,0.10);
    --bs-hero-line-v-right:    rgba(255,255,255,0.08);
    --bs-hero-fade-b:          linear-gradient(180deg, transparent, rgba(20,39,51,0.24));
    --bs-hero-frame-strong:    rgba(255,255,255,0.10);
    --bs-hero-frame-soft:      rgba(255,255,255,0.08);
    --bs-hero-text-soft:       rgba(255,255,255,0.84);

    /* Hero contact */
    --bs-contact-hero-overlay: linear-gradient(92deg, rgba(20,39,51,0.76) 0%, rgba(20,39,51,0.64) 38%, rgba(20,39,51,0.34) 70%, rgba(20,39,51,0.14) 100%);
    --bs-contact-hero-glow-tl: radial-gradient(circle at top left, rgba(154,179,199,0.18), transparent 28%);
    --bs-contact-hero-glow-br: radial-gradient(circle at bottom right, rgba(201,161,58,0.12), transparent 24%);

    /* Kicker hero */
    --bs-hero-kicker-border:   rgba(201,161,58,0.36);
    --bs-hero-kicker-bg:       rgba(255,255,255,0.08);
    --bs-hero-kicker-text:     rgba(255,255,255,0.92);
    --bs-hero-kicker-shadow:   0 10px 30px rgba(0,0,0,0.12);

    /* Hero panel */
    --bs-hero-panel-bg:        rgba(255,255,255,0.10);
    --bs-hero-panel-border:    rgba(255,255,255,0.12);
    --bs-hero-panel-divider:   rgba(255,255,255,0.12);
    --bs-hero-panel-label:     rgba(255,255,255,0.62);
    --bs-hero-panel-text:      rgba(255,255,255,0.82);

    /* Trust items */
    --bs-trust-item-bg:        linear-gradient(180deg, #ffffff 0%, #fbfaf6 100%);

    /* Outline button */
    --bs-outline-btn-bg:             rgba(255,255,255,0.08);
    --bs-outline-btn-border:         rgba(154,179,199,0.34);
    --bs-outline-btn-bg-hover:       rgba(154,179,199,0.18);
    --bs-outline-btn-border-hover:   rgba(154,179,199,0.48);

    /* Inputs */
    --bs-input-border:         rgba(24, 54, 74, 0.14);
    --bs-input-border-hover:   rgba(24, 54, 74, 0.22);
    --bs-input-bg:             linear-gradient(180deg, #ffffff 0%, #f8fbfd 100%);
    --bs-input-bg-focus:       #ffffff;
    --bs-input-placeholder:    rgba(28, 40, 49, 0.45);
    --bs-input-focus-border:   rgba(154, 179, 199, 0.55);
    --bs-input-focus-ring:     rgba(154, 179, 199, 0.12);
    --bs-input-focus_shadow:   0 8px 20px rgba(154, 179, 199, 0.08);

    /* Shape + timing */
    --bs-clip-btn:             14px;
    --bs-duration-fast:        0.24s;
    --bs-duration-base:        0.28s;
    --bs-duration-reveal:      0.90s;
    --bs-duration-zoom:        16s;
    --bs-duration-pulse:       2.8s;
  }

  .bs-contact-page {
    position: relative;
    font-family: "Inter", "Segoe UI", Arial, sans-serif;
    box-shadow: 0 30px 70px rgba(24, 54, 74, 0.08);
    border-bottom: 1px solid rgba(24, 54, 74, 0.08);
  }

  .bs-contact-page h1,
  .bs-contact-page h2,
  .bs-contact-page h3,
  .bs-contact-page h4 {
    font-family: "Playfair Display", Georgia, serif;
    font-weight: 700;
    letter-spacing: -0.02em;
  }

  .bs-contact-page p,
  .bs-contact-page a,
  .bs-contact-page li,
  .bs-contact-page button,
  .bs-contact-page span {
    font-family: "Inter", "Segoe UI", Arial, sans-serif;
  }

  .bs-contact-hero-image {
    transform: scale(1.08);
    animation: bsHeroZoom var(--bs-duration-zoom) ease-out forwards;
    will-change: transform;
  }

  .bs-hero-kicker {
    border: 1px solid var(--bs-hero-kicker-border);
    background: var(--bs-hero-kicker-bg);
    color: var(--bs-hero-kicker-text);
    box-shadow: var(--bs-hero-kicker-shadow);
  }

  .bs-chip-icon {
    display: inline-block;
    width: 13px;
    height: 13px;
    flex: 0 0 auto;
    border-radius: 999px;
    animation: bsPulseDot var(--bs-duration-pulse) ease-in-out infinite;
  }

  .bs-trust-item {
    background: var(--bs-trust-item-bg);
  }

  .bs-btn {
    position: relative;
    overflow: hidden;
    border: 1px solid transparent;
    transition:
      transform var(--bs-duration-fast) ease,
      box-shadow var(--bs-duration-fast) ease,
      background-color var(--bs-duration-fast) ease,
      border-color var(--bs-duration-fast) ease,
      color var(--bs-duration-fast) ease;
    will-change: transform;
  }

  .bs-btn::before {
    content: "";
    position: absolute;
    inset: 0;
    opacity: 0;
    background: radial-gradient(circle at center, rgba(255,255,255,0.18), transparent 60%);
    transition: opacity var(--bs-duration-fast) ease;
  }

  .bs-btn::after {
    content: "";
    position: absolute;
    inset: 0;
    transform: translateX(-110%);
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.18), transparent);
    transition: transform 0.7s ease;
  }

  .bs-btn:hover::before { opacity: 1; }
  .bs-btn:hover::after { transform: translateX(110%); }
  .bs-btn:hover { transform: translateY(-2px); }

  .bs-btn-primary {
    background: var(--bs-gold);
    border-color: var(--bs-gold);
    box-shadow: var(--bs-shadow-btn-primary);
    clip-path: polygon(0 0, calc(100% - var(--bs-clip-btn)) 0, 100% var(--bs-clip-btn), 100% 100%, var(--bs-clip-btn) 100%, 0 calc(100% - var(--bs-clip-btn)));
  }

  .bs-btn-primary:hover {
    background: var(--bs-gold-hover);
    border-color: var(--bs-gold-hover);
    box-shadow: var(--bs-shadow-btn-primary-hover);
  }

  .bs-btn-secondary {
    background: var(--bs-primary);
    border-color: var(--bs-primary);
    box-shadow: var(--bs-shadow-btn-secondary);
    clip-path: polygon(0 0, calc(100% - var(--bs-clip-btn)) 0, 100% var(--bs-clip-btn), 100% 100%, var(--bs-clip-btn) 100%, 0 calc(100% - var(--bs-clip-btn)));
  }

  .bs-btn-secondary:hover {
    background: var(--bs-primary-2);
    border-color: var(--bs-primary-2);
    box-shadow: var(--bs-shadow-btn-secondary-hover);
  }

  .bs-btn-outline-white {
    background: var(--bs-outline-btn-bg);
    border-color: var(--bs-outline-btn-border);
    backdrop-filter: blur(8px);
    clip-path: polygon(0 0, calc(100% - var(--bs-clip-btn)) 0, 100% var(--bs-clip-btn), 100% 100%, var(--bs-clip-btn) 100%, 0 calc(100% - var(--bs-clip-btn)));
  }

  .bs-btn-outline-white:hover {
    background: var(--bs-outline-btn-bg-hover);
    border-color: var(--bs-outline-btn-border-hover);
    color: white;
    box-shadow: var(--bs-shadow-btn-white-hover);
  }

  .bs-input {
    width: 100%;
    border: 1px solid var(--bs-input-border);
    background: var(--bs-input-bg);
    padding: 0.95rem 1rem;
    font-size: 0.95rem;
    line-height: 1.4;
    color: var(--bs-text);
    outline: none;
    border-radius: 0;
    box-shadow:
      inset 0 1px 0 rgba(255,255,255,0.9),
      0 1px 2px rgba(24, 54, 74, 0.03);
    transition:
      border-color var(--bs-duration-fast) ease,
      box-shadow var(--bs-duration-fast) ease,
      transform var(--bs-duration-fast) ease,
      background-color var(--bs-duration-fast) ease;
  }

  .bs-input:hover {
    border-color: var(--bs-input-border-hover);
    background: #ffffff;
  }

  .bs-input:focus {
    border-color: var(--bs-input-focus-border);
    box-shadow:
      0 0 0 4px var(--bs-input-focus-ring),
      var(--bs-input-focus_shadow);
    transform: translateY(-1px);
    background: var(--bs-input-bg-focus);
  }

  .bs-input::placeholder {
    color: var(--bs-input-placeholder);
  }

  .bs-hover-rise {
    transition: transform var(--bs-duration-base) ease, box-shadow var(--bs-duration-base) ease, background-color var(--bs-duration-base) ease;
  }

  .bs-hover-rise:hover {
    transform: translateY(-4px);
    box-shadow: var(--bs-shadow-hover-rise);
  }

  .bs-reveal-up,
  .bs-reveal-left,
  .bs-reveal-right,
  .bs-reveal-stagger {
    opacity: 0;
    will-change: opacity, transform;
    transition:
      opacity var(--bs-duration-reveal) cubic-bezier(.2,.7,.2,1),
      transform var(--bs-duration-reveal) cubic-bezier(.2,.7,.2,1);
  }

  .bs-reveal-up { transform: translateY(34px); }
  .bs-reveal-left { transform: translateX(-38px); }
  .bs-reveal-right { transform: translateX(38px); }
  .bs-reveal-stagger { transform: translateY(26px); }

  .bs-reveal-up.is-visible,
  .bs-reveal-left.is-visible,
  .bs-reveal-right.is-visible,
  .bs-reveal-stagger.is-visible {
    opacity: 1;
    transform: translate(0, 0);
  }

  @keyframes bsHeroZoom {
    0% { transform: scale(1.1); }
    100% { transform: scale(1); }
  }

  @keyframes bsPulseDot {
    0%, 100% { transform: scale(1); opacity: 1; }
    50% { transform: scale(1.14); opacity: .8; }
  }

  @media (max-width: 768px) {
    .bs-contact-page br { display: none; }

    .bs-btn-primary,
    .bs-btn-secondary,
    .bs-btn-outline-white {
      clip-path: none;
    }
  }

  @media (prefers-reduced-motion: reduce) {
    .bs-reveal-up,
    .bs-reveal-left,
    .bs-reveal-right,
    .bs-reveal-stagger,
    .bs-contact-hero-image,
    .bs-btn,
    .bs-chip-icon,
    .bs-hover-rise {
      opacity: 1 !important;
      transform: none !important;
      transition: none !important;
      animation: none !important;
    }
  }
</style>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const items = document.querySelectorAll(".bs-reveal-up, .bs-reveal-left, .bs-reveal-right, .bs-reveal-stagger");

    if (items.length) {
      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, idx) => {
          if (entry.isIntersecting) {
            const delay = entry.target.classList.contains("bs-reveal-stagger") ? (idx % 8) * 70 : 0;
            setTimeout(() => entry.target.classList.add("is-visible"), delay);
            observer.unobserve(entry.target);
          }
        });
      }, { threshold: 0.14 });

      items.forEach((item) => observer.observe(item));
    }

    const heroImage = document.querySelector(".bs-contact-hero-image");
    const handleParallax = () => {
      const scrolled = window.scrollY || window.pageYOffset;
      if (heroImage && scrolled < 900) {
        heroImage.style.transform = `translateY(${scrolled * 0.08}px) scale(1.04)`;
      }
    };

    let ticking = false;

    window.addEventListener("scroll", () => {
      if (!ticking) {
        window.requestAnimationFrame(() => {
          handleParallax();
          ticking = false;
        });
        ticking = true;
      }
    }, { passive: true });

    handleParallax();
  });
</script>

<?php get_footer(); ?>