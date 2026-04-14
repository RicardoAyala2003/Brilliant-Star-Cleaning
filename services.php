<?php
/**
 * Template Name: Services Template
 *
 * Services hub page for Brilliant Star Cleaning Services
 * Navbar y footer vienen de header.php / footer.php.
 */

get_header(); ?>

<main class="bs-services-page overflow-hidden bg-[var(--bs-bg)] text-[var(--bs-text)]">

  <?php
    $hero_image   = 'https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?q=80&w=1600&auto=format&fit=crop';
    $detail_image = 'https://images.unsplash.com/photo-1527515637462-cff94eecc1ac?q=80&w=1200&auto=format&fit=crop';

    $services = [
      [
        'eyebrow' => 'Residential Cleaning in San Diego',
        'title'   => 'Regular Cleaning',
        'copy'    => 'Keep your home consistently clean, week after week. We handle the dusting, vacuuming, mopping, kitchen, and bathrooms — on your schedule.',
        'link'    => '/services/residential-cleaning/',
        'tone'    => 'var(--bs-accent)',
      ],
      [
        'eyebrow' => 'Deep Cleaning in San Diego',
        'title'   => 'Deep Cleaning',
        'copy'    => 'A thorough clean that goes beyond the surface. Perfect for a fresh start or a seasonal reset. Includes areas that regular cleaning doesn’t cover.',
        'link'    => '/services/deep-cleaning/',
        'tone'    => 'var(--bs-primary)',
      ],
      [
        'eyebrow' => 'Move-Out Cleaning in San Diego',
        'title'   => 'Move-Out Cleaning',
        'copy'    => 'Leave your home spotless and move-out ready. We cover every corner — hard water, mold, appliances, cabinets, baseboards, and more.',
        'link'    => '/services/move-out-cleaning/',
        'tone'    => 'var(--bs-gold)',
      ],
      [
        'eyebrow' => 'Move-In Cleaning in San Diego',
        'title'   => 'Move-In Cleaning',
        'copy'    => 'Start fresh in your new home. We detail and disinfect every surface so you can move in with complete peace of mind.',
        'link'    => '/services/move-in-cleaning/',
        'tone'    => 'var(--bs-accent)',
      ],
      [
        'eyebrow' => 'Post-Construction Cleaning in San Diego',
        'title'   => 'Post-Construction Clean-Up',
        'copy'    => 'After a remodel, we handle the mess. We specialize in cleaning homes after small to mid-size renovation projects.',
        'link'    => '/services/post-construction-cleaning/',
        'tone'    => 'var(--bs-primary)',
      ],
      [
        'eyebrow' => 'Specialty Cleaning Services in San Diego',
        'title'   => 'Specialty Services',
        'copy'    => 'Have a unique situation? We offer specialty cleaning services upon request. Contact us to discuss what you need.',
        'link'    => '/services/specialty-services/',
        'tone'    => 'var(--bs-gold)',
      ],
    ];

    $highlights = [
      [
        'title' => 'Tailored to Your Home',
        'copy'  => 'Every service is personalized to your home’s size, current condition, and the kind of cleaning support you actually need.',
      ],
      [
        'title' => 'Prepared with the Right Tools',
        'copy'  => 'We arrive with commercial-grade vacuums and professional products suited for hardwood, tile, ceramic, stone, and stainless steel.',
      ],
      [
        'title' => 'Clear, Honest Quotes',
        'copy'  => 'No one-size-fits-all pricing. We ask the right questions, then provide a straightforward quote based on your space and service needs.',
      ],
    ];
  ?>

  <!-- HERO -->
  <section class="relative isolate overflow-hidden border-b border-[var(--bs-border)] bg-[linear-gradient(135deg,var(--bs-primary)_0%,var(--bs-primary-2)_58%,#1a4a6c_100%)] text-white">
    <div class="absolute inset-0">
      <img
        src="<?php echo esc_url($hero_image); ?>"
        alt="Bright professionally cleaned San Diego home interior"
        class="bs-services-hero-image h-full w-full object-cover opacity-[0.14] mix-blend-screen"
      >
      <div class="absolute left-[-110px] top-[-80px] h-72 w-72 rounded-full bg-[var(--bs-accent)]/14 blur-3xl"></div>
      <div class="absolute right-[-90px] top-[12%] h-80 w-80 rounded-full bg-[var(--bs-gold)]/10 blur-3xl"></div>
      <div class="absolute bottom-[-110px] left-[18%] h-72 w-72 rounded-full bg-white/6 blur-3xl"></div>
      <div class="absolute inset-y-0 left-[7%] hidden w-px bg-white/12 lg:block"></div>
      <div class="absolute inset-y-0 right-[11%] hidden w-px bg-white/10 lg:block"></div>
      <div class="absolute inset-x-0 top-0 h-px" style="background:var(--bs-hero-line-h)"></div>
      <div class="absolute bottom-0 left-0 right-0 h-28" style="background:var(--bs-hero-fade-b)"></div>
      <div class="absolute right-[-90px] top-[-70px] h-56 w-56 rotate-[18deg] border border-white/10"></div>
      <div class="absolute left-[-60px] bottom-[12%] h-40 w-40 rotate-[18deg] border border-white/8"></div>
    </div>

    <div class="relative z-10 mx-auto max-w-7xl px-4 py-16 lg:py-22">
      <div class="grid gap-10 lg:grid-cols-[0.95fr_1.05fr] lg:items-center">

        <div class="bs-reveal-left">
          <div class="max-w-3xl">
            <p class="inline-flex border border-white/18 bg-white/8 px-4 py-2 text-[11px] font-extrabold uppercase tracking-[0.24em] text-white/86 backdrop-blur-sm">
              Services
            </p>

            <h1 class="mt-6 max-w-[12ch] text-4xl font-semibold leading-[0.95] tracking-[-0.05em] text-white md:text-6xl xl:text-7xl">
              Cleaning Services Designed Around Your Home
            </h1>

            <p class="mt-6 max-w-2xl text-base leading-8 text-white/82 md:text-lg">
              From weekly upkeep to a thorough move-out clean, every service we offer is tailored to your home’s size, condition, and your specific preferences. Pricing is always personalized — because no two homes are the same.
            </p>

            <div class="mt-8 flex flex-col gap-4 sm:flex-row">
              <a href="#services-grid" class="bs-btn bs-btn-primary inline-flex items-center justify-center px-7 py-4 text-sm font-black uppercase tracking-[0.15em] text-white">
                Explore Services
              </a>
              <a href="/contact-us/" class="bs-btn bs-btn-outline-white inline-flex items-center justify-center px-7 py-4 text-sm font-black uppercase tracking-[0.15em] text-white">
                Get Your Free Quote
              </a>
            </div>
          </div>
        </div>

        <div class="bs-reveal-right">
          <div class="grid gap-4 sm:grid-cols-3">
            <div class="bs-services-stat border border-white/12 bg-white/10 px-5 py-5 backdrop-blur-sm">
              <p class="text-[10px] font-black uppercase tracking-[0.18em] text-white/66">Services</p>
              <p class="mt-2 text-2xl font-extrabold tracking-[-0.03em] text-white">6</p>
              <p class="mt-2 text-sm leading-7 text-white/78">Core cleaning offers</p>
            </div>

            <div class="bs-services-stat border border-white/12 bg-white/10 px-5 py-5 backdrop-blur-sm">
              <p class="text-[10px] font-black uppercase tracking-[0.18em] text-white/66">Trusted</p>
              <p class="mt-2 text-2xl font-extrabold tracking-[-0.03em] text-white">15+ Years</p>
              <p class="mt-2 text-sm leading-7 text-white/78">Serving San Diego homes</p>
            </div>

            <div class="bs-services-stat border border-white/12 bg-white/10 px-5 py-5 backdrop-blur-sm">
              <p class="text-[10px] font-black uppercase tracking-[0.18em] text-white/66">Approach</p>
              <p class="mt-2 text-2xl font-extrabold tracking-[-0.03em] text-white">Custom</p>
              <p class="mt-2 text-sm leading-7 text-white/78">Quotes based on your home</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

 

  <!-- SERVICES GRID -->
  <section id="services-grid" class="relative overflow-hidden border-y border-[var(--bs-border)] bg-white py-16 lg:py-20">
    <div class="absolute right-0 top-0 h-full w-full" style="background:var(--bs-services-glow)"></div>
    <div class="absolute left-[-80px] top-16 h-44 w-44 rotate-12 border border-[var(--bs-border)]"></div>
    <div class="absolute bottom-[-60px] right-10 h-36 w-36 border border-[var(--bs-gold)]/20"></div>

    <div class="relative mx-auto max-w-7xl px-4">
      <div class="bs-reveal-up mx-auto max-w-4xl text-center">
        <p class="text-xs font-black uppercase tracking-[0.2em] text-[var(--bs-accent)]">Our Services</p>
        <h2 class="mt-4 text-3xl font-semibold leading-tight tracking-[-0.04em] text-[var(--bs-primary)] md:text-5xl">
          Explore the Cleaning Services We Offer
        </h2>
        <p class="mt-5 text-base leading-8 text-[var(--bs-text-soft)]">
          Each service has its own dedicated page so you can learn more about what’s included and request the right quote for your home.
        </p>
      </div>

      <div class="mt-12 grid gap-6 md:grid-cols-2 xl:grid-cols-3">
        <?php foreach ($services as $service) : ?>
          <article class="bs-reveal-stagger bs-service-card group relative overflow-hidden border border-[var(--bs-border)] bg-[linear-gradient(180deg,#ffffff_0%,#f8fbfd_100%)] p-7 shadow-[var(--bs-shadow-service)]">
            <div class="absolute inset-y-0 left-0 w-[3px] opacity-0 transition duration-[var(--bs-duration-card)] group-hover:opacity-100" style="background:<?php echo esc_attr($service['tone']); ?>"></div>
            <div class="absolute -right-10 -top-10 h-24 w-24 rotate-12 border border-[var(--bs-border)] opacity-0 transition duration-[var(--bs-duration-card)] group-hover:opacity-100"></div>

            <div class="mb-6 flex items-center justify-between">
              <span class="bs-service-mark" style="background:linear-gradient(90deg, <?php echo esc_attr($service['tone']); ?>, var(--bs-gold));"></span>
              <span class="text-[11px] font-black uppercase tracking-[0.18em] text-[var(--bs-text-muted)]">Service</span>
            </div>

            <p class="text-[11px] font-black uppercase tracking-[0.16em] text-[var(--bs-accent)]">
              <?php echo esc_html($service['eyebrow']); ?>
            </p>

            <h3 class="mt-4 max-w-[15ch] text-2xl font-semibold leading-tight tracking-[-0.03em] text-[var(--bs-primary)]">
              <?php echo esc_html($service['title']); ?>
            </h3>

            <p class="mt-4 text-[15px] leading-8 text-[var(--bs-text-soft)]">
              <?php echo esc_html($service['copy']); ?>
            </p>

            <a href="<?php echo esc_url($service['link']); ?>" class="mt-7 inline-flex items-center gap-2 text-sm font-black uppercase tracking-[0.14em] text-[var(--bs-accent)] transition hover:gap-3">
              Learn More <span>→</span>
            </a>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- SIMPLE CONTACT AREA -->
  <section class="bg-[var(--bs-bg)] py-16 lg:py-20">
    <div class="mx-auto max-w-5xl px-4">
      <div class="bs-reveal-up overflow-hidden border border-[var(--bs-border)] bg-[linear-gradient(180deg,#ffffff_0%,#f8fbfd_100%)] px-6 py-10 text-center shadow-[var(--bs-shadow-card)] md:px-10 md:py-12">
        <p class="text-xs font-black uppercase tracking-[0.2em] text-[var(--bs-accent)]">
          Contact Us
        </p>

        <h2 class="mt-4 text-3xl font-semibold leading-tight tracking-[-0.04em] text-[var(--bs-primary)] md:text-5xl">
          Ready to Get Started?
        </h2>

        <p class="mx-auto mt-5 max-w-2xl text-base leading-8 text-[var(--bs-text-soft)]">
          Tell us about your home and we’ll provide a clear, personalized cleaning quote with no pressure and no hidden fees.
        </p>

        <div class="mt-8 flex flex-col items-center justify-center gap-4 sm:flex-row">
          <a href="/contact-us/" class="bs-btn bs-btn-primary inline-flex items-center justify-center px-7 py-4 text-sm font-black uppercase tracking-[0.15em] text-white">
            Get Your Free Quote
          </a>

          <a href="tel:+18582551498" class="bs-btn bs-btn-secondary inline-flex items-center justify-center px-7 py-4 text-sm font-black uppercase tracking-[0.15em] text-white">
            Call (858) 255-1498
          </a>
        </div>
      </div>
    </div>
  </section>


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
    --bs-shadow-service:         0 18px 46px rgba(11, 37, 56, 0.06);
    --bs-shadow-point:           0 12px 30px rgba(11, 37, 56, 0.04);
    --bs-shadow-hover-rise:      0 18px 44px rgba(11, 37, 56, 0.10);
    --bs-shadow-hover-service:   0 28px 60px rgba(11, 37, 56, 0.10);

    --bs-shadow-btn-primary:         0 18px 38px rgba(79, 180, 231, 0.22);
    --bs-shadow-btn-primary-hover:   0 22px 44px rgba(79, 180, 231, 0.28);
    --bs-shadow-btn-secondary:       0 18px 38px rgba(11, 37, 56, 0.18);
    --bs-shadow-btn-secondary-hover: 0 24px 48px rgba(11, 37, 56, 0.22);
    --bs-shadow-btn-white-hover:     0 18px 40px rgba(255, 255, 255, 0.10);

    --bs-border-hover-service: rgba(79, 180, 231, 0.24);

    --bs-hero-line-h:  linear-gradient(90deg, transparent, rgba(255,255,255,0.40), transparent);
    --bs-hero-fade-b:  linear-gradient(180deg, transparent, rgba(8,27,42,0.42));
    --bs-services-glow: radial-gradient(circle at top right, rgba(79,180,231,0.08), transparent 22%);
    --bs-img-fade-b:   linear-gradient(180deg, transparent, rgba(11,37,56,0.46));

    --bs-footer-separator-line: linear-gradient(90deg, transparent 0%, rgba(11,37,56,0.10) 10%, rgba(79,180,231,0.55) 50%, rgba(11,37,56,0.10) 90%, transparent 100%);
    --bs-footer-separator-glow: radial-gradient(circle at center, rgba(79,180,231,0.14) 0%, rgba(79,180,231,0.05) 32%, transparent 72%);
    --bs-footer-top-shadow: 0 30px 70px rgba(11, 37, 56, 0.08);

    --bs-clip-btn:     14px;

    --bs-duration-fast:    0.24s;
    --bs-duration-base:    0.28s;
    --bs-duration-card:    0.30s;
    --bs-duration-reveal:  0.90s;
    --bs-duration-zoom:    16s;
  }

  .bs-services-page {
    position: relative;
    font-family: "Inter", "Segoe UI", Arial, sans-serif;
    box-shadow: var(--bs-footer-top-shadow);
    border-bottom: 1px solid rgba(11, 37, 56, 0.08);
  }

  .bs-services-page h1,
  .bs-services-page h2,
  .bs-services-page h3,
  .bs-services-page h4 {
    font-family: "Playfair Display", Georgia, serif;
    font-weight: 700;
    letter-spacing: -0.02em;
  }

  .bs-services-page p,
  .bs-services-page a,
  .bs-services-page li,
  .bs-services-page button,
  .bs-services-page span {
    font-family: "Inter", "Segoe UI", Arial, sans-serif;
  }

  .bs-services-hero-image {
    transform: scale(1.08);
    animation: bsHeroZoom var(--bs-duration-zoom) ease-out forwards;
    will-change: transform;
  }

  .bs-services-stat {
    clip-path: polygon(0 0, calc(100% - var(--bs-clip-btn)) 0, 100% var(--bs-clip-btn), 100% 100%, var(--bs-clip-btn) 100%, 0 calc(100% - var(--bs-clip-btn)));
    transition: transform var(--bs-duration-base) ease, border-color var(--bs-duration-base) ease, background-color var(--bs-duration-base) ease;
  }

  .bs-services-stat:hover {
    transform: translateY(-3px);
    border-color: rgba(255,255,255,0.24);
    background: rgba(255,255,255,0.14);
  }

  .bs-service-card {
    transition: transform var(--bs-duration-card) ease, box-shadow var(--bs-duration-card) ease, border-color var(--bs-duration-card) ease, background var(--bs-duration-card) ease;
  }

  .bs-service-card:hover {
    transform: translateY(-6px);
    border-color: var(--bs-border-hover-service);
    box-shadow: var(--bs-shadow-hover-service);
  }

  .bs-service-mark {
    display: inline-block;
    width: 58px;
    height: 10px;
  }

  .bs-parallax-soft {
    transform: scale(1.02);
    transition: transform var(--bs-duration-reveal) ease;
    will-change: transform;
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

  @media (max-width: 1024px) {
    .bs-parallax-soft {
      transform: none !important;
    }
  }

  @media (max-width: 768px) {
    .bs-services-page br { display: none; }

    .bs-services-stat,
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
    .bs-services-hero-image,
    .bs-btn,
    .bs-services-stat,
    .bs-service-card,
    .bs-hover-rise,
    .bs-parallax-soft {
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

    const heroImage = document.querySelector(".bs-services-hero-image");
    const parallaxItems = document.querySelectorAll(".bs-parallax-soft");

    const handleParallax = () => {
      const scrolled = window.scrollY || window.pageYOffset;

      if (heroImage && scrolled < 900) {
        heroImage.style.transform = `translateY(${scrolled * 0.08}px) scale(1.04)`;
      }

      parallaxItems.forEach((item) => {
        const rect = item.getBoundingClientRect();
        const offset = (window.innerHeight - rect.top) * 0.02;

        if (rect.top < window.innerHeight && rect.bottom > 0) {
          item.style.transform = `translateY(${Math.max(-8, Math.min(12, offset - 10))}px) scale(1.02)`;
        }
      });
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