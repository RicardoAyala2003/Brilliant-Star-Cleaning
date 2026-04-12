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
    $hero_image = 'https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?q=80&w=1600&auto=format&fit=crop';
    $detail_image = 'https://images.unsplash.com/photo-1527515637462-cff94eecc1ac?q=80&w=1200&auto=format&fit=crop';
  ?>

<!-- HERO -->
<section class="relative isolate overflow-hidden border-b border-[var(--bs-border)] bg-[var(--bs-primary)] text-white">
  <div class="absolute inset-0">
    <img
      src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?q=80&w=1600&auto=format&fit=crop"
      alt="Bright clean San Diego home interior ready for professional cleaning"
      class="bs-contact-hero-image h-full w-full object-cover"
    >
    <div class="absolute inset-0" style="background:var(--bs-contact-hero-overlay)"></div>
    <div class="absolute inset-0" style="background:var(--bs-contact-hero-glow-tl)"></div>
    <div class="absolute inset-0" style="background:var(--bs-contact-hero-glow-br)"></div>

    <div class="absolute inset-y-0 left-[7%] hidden w-px bg-white/12 lg:block"></div>
    <div class="absolute inset-y-0 right-[11%] hidden w-px bg-white/10 lg:block"></div>
    <div class="absolute inset-x-0 top-0 h-px" style="background:var(--bs-hero-line-h)"></div>
    <div class="absolute bottom-0 left-0 right-0 h-28" style="background:var(--bs-hero-fade-b)"></div>

    <div class="absolute right-[-90px] top-[-70px] h-56 w-56 rotate-[18deg] border border-white/10"></div>
    <div class="absolute left-[-60px] bottom-[12%] h-40 w-40 rotate-[18deg] border border-white/8"></div>
  </div>

  <div class="relative z-10 mx-auto max-w-7xl px-4 py-16 lg:py-22">
    <div class="grid gap-10 lg:grid-cols-[1.02fr_0.98fr] lg:items-end">

      <div class="bs-reveal-left">
        <div class="max-w-3xl">
          <p class="inline-flex border border-white/18 bg-white/8 px-4 py-2 text-[11px] font-extrabold uppercase tracking-[0.24em] text-white/86 backdrop-blur-sm">
            Contact / Get a Quote
          </p>

          <h1 class="mt-6 max-w-[12ch] text-4xl font-semibold leading-[0.94] tracking-[-0.05em] text-white md:text-6xl xl:text-7xl">
            Get Your Free, Personalized Cleaning Quote
          </h1>

          <p class="mt-6 max-w-2xl text-base leading-8 text-white/82 md:text-lg">
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
        <div class="overflow-hidden border border-white/12 bg-white/10 shadow-[var(--bs-shadow-card)] backdrop-blur-sm">
          <div class="grid gap-0 sm:grid-cols-3 lg:grid-cols-1">
            <div class="border-b border-white/12 px-6 py-6 lg:border-b lg:border-r-0">
              <p class="text-[10px] font-black uppercase tracking-[0.18em] text-white/62">Phone</p>
              <a href="tel:+18582551498" class="mt-2 block text-lg font-extrabold tracking-[-0.02em] text-white hover:text-[var(--bs-gold)]">
                (858) 255-1498
              </a>
            </div>

            <div class="border-b border-white/12 px-6 py-6 lg:border-b lg:border-r-0">
              <p class="text-[10px] font-black uppercase tracking-[0.18em] text-white/62">Hours</p>
              <p class="mt-2 text-sm leading-7 text-white/82">
                Mon–Fri<br>7:30 AM to 4:30 PM
              </p>
            </div>

            <div class="px-6 py-6">
              <p class="text-[10px] font-black uppercase tracking-[0.18em] text-white/62">Service Area</p>
              <p class="mt-2 text-sm leading-7 text-white/82">
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
      <div class="bs-reveal-up bs-hover-rise flex items-center gap-4 border-b border-[var(--bs-border)] px-5 py-5 md:border-r xl:border-b-0">
        <span class="bs-chip-icon bg-[var(--bs-accent)]"></span>
        <div>
          <p class="text-[10px] font-black uppercase tracking-[0.18em] text-[var(--bs-text-muted)]">Experience</p>
          <p class="mt-1 text-sm font-extrabold text-[var(--bs-primary)]">15+ Years of Experience</p>
        </div>
      </div>

      <div class="bs-reveal-up bs-hover-rise flex items-center gap-4 border-b border-[var(--bs-border)] px-5 py-5 xl:border-b-0 xl:border-r">
        <span class="bs-chip-icon bg-[var(--bs-primary)]"></span>
        <div>
          <p class="text-[10px] font-black uppercase tracking-[0.18em] text-[var(--bs-text-muted)]">Trust</p>
          <p class="mt-1 text-sm font-extrabold text-[var(--bs-primary)]">Licensed &amp; Insured</p>
        </div>
      </div>

      <div class="bs-reveal-up bs-hover-rise flex items-center gap-4 border-b border-[var(--bs-border)] px-5 py-5 md:border-r md:border-b-0">
        <span class="bs-chip-icon bg-[var(--bs-gold)]"></span>
        <div>
          <p class="text-[10px] font-black uppercase tracking-[0.18em] text-[var(--bs-text-muted)]">Quote</p>
          <p class="mt-1 text-sm font-extrabold text-[var(--bs-primary)]">No Pressure, No Hidden Fees</p>
        </div>
      </div>

      <div class="bs-reveal-up bs-hover-rise flex items-center gap-4 px-5 py-5">
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
            <div class="border-b border-[var(--bs-border)] bg-[linear-gradient(180deg,#ffffff_0%,#f3f7fa_100%)] px-6 py-6 md:px-7">
              <p class="text-xs font-black uppercase tracking-[0.18em] text-[var(--bs-accent)]">Prefer to Call?</p>
              <h2 class="mt-2 text-2xl font-semibold leading-tight tracking-[-0.03em] text-[var(--bs-primary)]">
                Reach us directly
              </h2>
            </div>

            <div class="grid gap-5 px-6 py-6 md:px-7">
              <div>
                <p class="text-[11px] font-black uppercase tracking-[0.16em] text-[var(--bs-text-muted)]">Phone</p>
                <a href="tel:+18582551498" class="mt-2 inline-block text-xl font-extrabold tracking-[-0.03em] text-[var(--bs-primary)] hover:text-[var(--bs-accent)]">
                  (858) 255-1498
                </a>
              </div>

              <div>
                <p class="text-[11px] font-black uppercase tracking-[0.16em] text-[var(--bs-text-muted)]">Email</p>
                <a href="mailto:brilliantstarcleaning@gmail.com" class="mt-2 inline-block break-all text-base font-extrabold tracking-[-0.02em] text-[var(--bs-primary)] hover:text-[var(--bs-accent)]">
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
            <div class="border-b border-[var(--bs-border)] bg-[linear-gradient(180deg,#ffffff_0%,#f3f7fa_100%)] px-6 py-6 md:px-7">
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

          <div class="overflow-hidden border border-[var(--bs-border)] bg-[linear-gradient(180deg,#ffffff_0%,#f8fbfd_100%)] p-6 shadow-[var(--bs-shadow-service)] md:p-7">
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

<!-- FOOTER SEPARATOR -->
<div class="bs-footer-separator" aria-hidden="true">
  <div class="bs-footer-separator__line"></div>
  <div class="bs-footer-separator__glow"></div>
</div>

</main>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Inter:wght@400;500;600;700;800&display=swap');

  :root {
    --bs-primary:        #0b2538;
    --bs-primary-2:      #143a57;
    --bs-accent:         #4fb4e7;
    --bs-accent-hover:   #38a9df;
    --bs-gold:           #f4c542;
    --bs-gold-hover:     #e5b82f;

    --bs-bg:             #f6fafc;
    --bs-surface:        #ffffff;
    --bs-surface-2:      #eef6fb;

    --bs-text:           #162635;
    --bs-text-soft:      rgba(22, 38, 53, 0.78);
    --bs-text-muted:     rgba(22, 38, 53, 0.54);

    --bs-border:         rgba(11, 37, 56, 0.10);

    --bs-shadow-card:            0 28px 70px rgba(11, 37, 56, 0.08);
    --bs-shadow-trust:           0 22px 60px rgba(11, 37, 56, 0.08);
    --bs-shadow-service:         0 18px 46px rgba(11, 37, 56, 0.06);

    --bs-shadow-hover-rise:      0 18px 44px rgba(11, 37, 56, 0.10);

    --bs-shadow-btn-primary:         0 18px 38px rgba(79, 180, 231, 0.22);
    --bs-shadow-btn-primary-hover:   0 22px 44px rgba(79, 180, 231, 0.28);
    --bs-shadow-btn-secondary:       0 18px 38px rgba(11, 37, 56, 0.18);
    --bs-shadow-btn-secondary-hover: 0 24px 48px rgba(11, 37, 56, 0.22);
    --bs-shadow-btn-white-hover:     0 18px 40px rgba(255, 255, 255, 0.10);

    --bs-hero-overlay: linear-gradient(92deg, rgba(8,27,42,0.95) 0%, rgba(8,27,42,0.88) 38%, rgba(8,27,42,0.56) 70%, rgba(8,27,42,0.26) 100%);
    --bs-hero-glow-tl: radial-gradient(circle at top left, rgba(90,190,234,0.16), transparent 26%);
    --bs-hero-glow-br: radial-gradient(circle at bottom right, rgba(244,197,66,0.10), transparent 24%);
    --bs-hero-line-h:  linear-gradient(90deg, transparent, rgba(255,255,255,0.40), transparent);
    --bs-hero-fade-b:  linear-gradient(180deg, transparent, rgba(8,27,42,0.42));

    --bs-contact-hero-overlay: linear-gradient(92deg, rgba(8,27,42,0.88) 0%, rgba(8,27,42,0.78) 38%, rgba(8,27,42,0.46) 70%, rgba(8,27,42,0.22) 100%);
    --bs-contact-hero-glow-tl: radial-gradient(circle at top left, rgba(79,180,231,0.16), transparent 28%);
    --bs-contact-hero-glow-br: radial-gradient(circle at bottom right, rgba(244,197,66,0.12), transparent 24%);

    --bs-footer-separator-line: linear-gradient(90deg, transparent 0%, rgba(11,37,56,0.10) 10%, rgba(79,180,231,0.55) 50%, rgba(11,37,56,0.10) 90%, transparent 100%);
    --bs-footer-separator-glow: radial-gradient(circle at center, rgba(79,180,231,0.14) 0%, rgba(79,180,231,0.05) 32%, transparent 72%);
    --bs-footer-top-shadow:     0 30px 70px rgba(11, 37, 56, 0.08);

    --bs-clip-btn:     14px;

    --bs-duration-fast:    0.24s;
    --bs-duration-base:    0.28s;
    --bs-duration-reveal:  0.90s;
    --bs-duration-zoom:    16s;
    --bs-duration-pulse:   2.8s;
  }

  .bs-contact-page {
    position: relative;
    font-family: "Inter", "Segoe UI", Arial, sans-serif;
    box-shadow: var(--bs-footer-top-shadow);
    border-bottom: 1px solid rgba(11, 37, 56, 0.08);
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

  .bs-contact-panel,
  .bs-contact-stat {
    clip-path: polygon(0 0, calc(100% - var(--bs-clip-btn)) 0, 100% var(--bs-clip-btn), 100% 100%, var(--bs-clip-btn) 100%, 0 calc(100% - var(--bs-clip-btn)));
    transition: transform var(--bs-duration-base) ease, border-color var(--bs-duration-base) ease, background-color var(--bs-duration-base) ease;
  }

  .bs-contact-panel:hover,
  .bs-contact-stat:hover {
    transform: translateY(-3px);
    border-color: rgba(255,255,255,0.24);
    background: rgba(255,255,255,0.14);
  }

  .bs-chip-icon {
    display: inline-block;
    width: 13px;
    height: 13px;
    flex: 0 0 auto;
    animation: bsPulseDot var(--bs-duration-pulse) ease-in-out infinite;
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

  .bs-input {
    width: 100%;
    border: 1px solid rgba(11, 37, 56, 0.14);
    background: linear-gradient(180deg, #ffffff 0%, #f8fbfd 100%);
    padding: 0.95rem 1rem;
    font-size: 0.95rem;
    line-height: 1.4;
    color: var(--bs-text);
    outline: none;
    border-radius: 0;
    box-shadow:
      inset 0 1px 0 rgba(255,255,255,0.9),
      0 1px 2px rgba(11, 37, 56, 0.03);
    transition:
      border-color var(--bs-duration-fast) ease,
      box-shadow var(--bs-duration-fast) ease,
      transform var(--bs-duration-fast) ease,
      background-color var(--bs-duration-fast) ease;
  }

  .bs-input:hover {
    border-color: rgba(11, 37, 56, 0.22);
    background: #ffffff;
  }

  .bs-input:focus {
    border-color: rgba(79, 180, 231, 0.55);
    box-shadow:
      0 0 0 4px rgba(79, 180, 231, 0.12),
      0 8px 20px rgba(79, 180, 231, 0.08);
    transform: translateY(-1px);
    background: #ffffff;
  }

  .bs-input::placeholder {
    color: rgba(22, 38, 53, 0.45);
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
    background: var(--bs-accent);
    border-color: var(--bs-accent);
    box-shadow: var(--bs-shadow-btn-primary);
    clip-path: polygon(0 0, calc(100% - var(--bs-clip-btn)) 0, 100% var(--bs-clip-btn), 100% 100%, var(--bs-clip-btn) 100%, 0 calc(100% - var(--bs-clip-btn)));
  }

  .bs-btn-primary:hover {
    background: var(--bs-accent-hover);
    border-color: var(--bs-accent-hover);
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
    background: rgba(255,255,255,0.08);
    border-color: rgba(255,255,255,0.18);
    backdrop-filter: blur(8px);
    clip-path: polygon(0 0, calc(100% - var(--bs-clip-btn)) 0, 100% var(--bs-clip-btn), 100% 100%, var(--bs-clip-btn) 100%, 0 calc(100% - var(--bs-clip-btn)));
  }

  .bs-btn-outline-white:hover {
    background: var(--bs-surface);
    color: var(--bs-primary);
    box-shadow: var(--bs-shadow-btn-white-hover);
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

  .bs-footer-separator {
    position: relative;
    height: 92px;
    background:
      linear-gradient(180deg, rgba(246,250,252,0) 0%, rgba(234,244,250,0.72) 52%, rgba(246,250,252,0.22) 100%);
    overflow: hidden;
  }

  .bs-footer-separator__line {
    position: absolute;
    left: 50%;
    top: 26px;
    width: min(1180px, calc(100% - 2rem));
    height: 1px;
    transform: translateX(-50%);
    background: var(--bs-footer-separator-line);
  }

  .bs-footer-separator__glow {
    position: absolute;
    inset: 0;
    background: var(--bs-footer-separator-glow);
    pointer-events: none;
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

    .bs-contact-panel,
    .bs-contact-stat,
    .bs-btn-primary,
    .bs-btn-secondary,
    .bs-btn-outline-white {
      clip-path: none;
    }

    .bs-footer-separator {
      height: 72px;
    }

    .bs-footer-separator__line {
      top: 20px;
      width: calc(100% - 1.5rem);
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
    .bs-contact-panel,
    .bs-contact-stat,
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