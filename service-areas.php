<?php
/**
 * Template Name: Locations Hub Template
 *
 * Locations / Service Areas hub for Brilliant Star Cleaning Services
 * Navbar y footer vienen de header.php / footer.php.
 */

get_header(); ?>

<main class="bs-locations-page overflow-hidden bg-[var(--bs-bg)] text-[var(--bs-text)]">

  <?php
    $locations = [
      [
        'name'   => 'San Diego',
        'slug'   => 'san-diego',
        'county' => 'San Diego',
        'copy'   => 'Our base service area and the heart of where Brilliant Star delivers trusted residential cleaning with personalized care.',
      ],
      [
        'name'   => 'Hillcrest',
        'slug'   => 'hillcrest',
        'county' => 'San Diego',
        'copy'   => 'From recurring cleaning to deep refreshes, we help Hillcrest homes stay spotless, fresh, and easy to enjoy.',
      ],
      [
        'name'   => 'North Park',
        'slug'   => 'north-park',
        'county' => 'San Diego',
        'copy'   => 'North Park homeowners trust Brilliant Star for detail-focused cleaning tailored to their home, schedule, and priorities.',
      ],
      [
        'name'   => 'Mission Hills',
        'slug'   => 'mission-hills',
        'county' => 'San Diego',
        'copy'   => 'We bring professional products, commercial-grade equipment, and real attention to detail to homes throughout Mission Hills.',
      ],
      [
        'name'   => 'Del Mar',
        'slug'   => 'del-mar',
        'county' => 'San Diego',
        'copy'   => 'Brilliant Star helps Del Mar households keep their homes consistently clean with personalized, trustworthy service.',
      ],
      [
        'name'   => 'Mira Mesa',
        'slug'   => 'mira-mesa',
        'county' => 'San Diego',
        'copy'   => 'Busy households in Mira Mesa count on us for residential cleaning that saves time and leaves every room feeling refreshed.',
      ],
      [
        'name'   => 'Mission Valley',
        'slug'   => 'mission-valley',
        'county' => 'San Diego',
        'copy'   => 'Whether you need regular cleaning or a full deep clean, we serve Mission Valley with clarity, care, and consistent results.',
      ],
      [
        'name'   => 'Kearny Mesa',
        'slug'   => 'kearny-mesa',
        'county' => 'San Diego',
        'copy'   => 'We deliver reliable residential cleaning in Kearny Mesa with the professionalism and preparation homeowners want.',
      ],
      [
        'name'   => 'Mission Beach',
        'slug'   => 'mission-beach',
        'county' => 'San Diego',
        'copy'   => 'Mission Beach homes benefit from our detail-driven cleaning approach and service tailored to the condition of each property.',
      ],
      [
        'name'   => 'Ocean Beach',
        'slug'   => 'ocean-beach',
        'county' => 'San Diego',
        'copy'   => 'From everyday upkeep to move-in and move-out support, we serve Ocean Beach with a warm, polished, dependable approach.',
      ],
      [
        'name'   => 'University Heights',
        'slug'   => 'university-heights',
        'county' => 'San Diego',
        'copy'   => 'University Heights families trust Brilliant Star for thoughtful residential cleaning with products suited to every surface.',
      ],
      [
        'name'   => 'South Park',
        'slug'   => 'south-park',
        'county' => 'San Diego',
        'copy'   => 'We help South Park homeowners enjoy cleaner, calmer homes with personalized service and consistent attention to detail.',
      ],
      [
        'name'   => 'Otay Mesa',
        'slug'   => 'otay-mesa',
        'county' => 'San Diego',
        'copy'   => 'Otay Mesa residents can count on Brilliant Star for honest quotes, dependable scheduling, and excellent residential cleaning.',
      ],
    ];

    foreach ($locations as &$location) {
      $query = rawurlencode($location['name'] . ', San Diego, CA');
      $location['map_embed'] = 'https://www.google.com/maps?q=' . $query . '&output=embed';
      $location['link'] = '/locations/' . $location['slug'] . '/';
    }
    unset($location);
  ?>

  <!-- HERO -->
  <section class="relative overflow-hidden border-b border-[var(--bs-border)] bg-[linear-gradient(135deg,var(--bs-primary)_0%,var(--bs-primary-2)_52%,#1c4f73_100%)] py-18 text-white lg:py-24">
    <div class="absolute inset-0">
      <div class="absolute left-[-120px] top-[-120px] h-72 w-72 rounded-full bg-[var(--bs-accent)]/20 blur-3xl"></div>
      <div class="absolute right-[-120px] top-[10%] h-80 w-80 rounded-full bg-[var(--bs-gold)]/10 blur-3xl"></div>
      <div class="absolute bottom-[-120px] left-[18%] h-72 w-72 rounded-full bg-white/6 blur-3xl"></div>
      <div class="absolute inset-y-0 left-[8%] hidden w-px bg-white/10 lg:block"></div>
      <div class="absolute inset-y-0 right-[12%] hidden w-px bg-white/8 lg:block"></div>
      <div class="absolute inset-x-0 top-0 h-px bg-[linear-gradient(90deg,transparent,rgba(255,255,255,.35),transparent)]"></div>
      <div class="absolute right-[-70px] top-[-40px] h-44 w-44 rotate-[18deg] border border-white/10"></div>
      <div class="absolute left-[-40px] bottom-[10%] h-32 w-32 rotate-[18deg] border border-white/8"></div>
    </div>

    <div class="relative mx-auto max-w-7xl px-4">
      <div class="grid gap-10 lg:grid-cols-[0.95fr_1.05fr] lg:items-center">
        <div class="bs-reveal-left">
          <p class="inline-flex border border-white/16 bg-white/8 px-4 py-2 text-[11px] font-black uppercase tracking-[0.22em] text-white/88 backdrop-blur-sm">
            Service Areas
          </p>

          <h1 class="mt-6 max-w-[11ch] text-4xl font-semibold leading-[0.95] tracking-[-0.05em] text-white md:text-6xl">
            House Cleaning Across San Diego Neighborhoods
          </h1>

          <p class="mt-6 max-w-2xl text-base leading-8 text-white/82 md:text-lg">
            Explore the communities Brilliant Star proudly serves across San Diego. Find your neighborhood and visit its dedicated location page to learn more.
          </p>

          <div class="mt-8 flex flex-col gap-4 sm:flex-row">
            <a href="#locations-grid" class="bs-btn bs-btn-primary inline-flex items-center justify-center px-7 py-4 text-sm font-black uppercase tracking-[0.15em] text-white">
              Explore Locations
            </a>
            <a href="/contact-us/" class="bs-btn bs-btn-outline-white inline-flex items-center justify-center px-7 py-4 text-sm font-black uppercase tracking-[0.15em] text-white">
              Get a Free Quote
            </a>
          </div>
        </div>

        <div class="bs-reveal-right">
          <div class="grid gap-4 sm:grid-cols-2">
            <div class="border border-white/12 bg-white/10 p-6 shadow-[0_18px_44px_rgba(0,0,0,0.14)] backdrop-blur-sm">
              <p class="text-[10px] font-black uppercase tracking-[0.18em] text-white/66">Coverage</p>
              <p class="mt-2 text-2xl font-extrabold tracking-[-0.03em] text-white">13 Locations</p>
              <p class="mt-3 text-sm leading-7 text-white/78">
                Serving San Diego and surrounding neighborhoods with personalized residential cleaning.
              </p>
            </div>

            <div class="border border-white/12 bg-white/10 p-6 shadow-[0_18px_44px_rgba(0,0,0,0.14)] backdrop-blur-sm">
              <p class="text-[10px] font-black uppercase tracking-[0.18em] text-white/66">Trusted</p>
              <p class="mt-2 text-2xl font-extrabold tracking-[-0.03em] text-white">15+ Years</p>
              <p class="mt-3 text-sm leading-7 text-white/78">
                Licensed, insured, and trusted by San Diego families for detail-focused cleaning.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- INTRO -->
  <section class="bg-[var(--bs-bg)] pb-8 pt-24 lg:pb-10 lg:pt-28">
    <div class="mx-auto max-w-7xl px-4">
      <div class="bs-reveal-up mx-auto max-w-4xl text-center">
        <p class="text-xs font-black uppercase tracking-[0.2em] text-[var(--bs-accent)]">Where We Work</p>
        <h2 class="mt-4 text-3xl font-semibold leading-tight tracking-[-0.04em] text-[var(--bs-primary)] md:text-5xl">
          Find Your Neighborhood and Explore Your Local Page
        </h2>
        <p class="mt-5 text-base leading-8 text-[var(--bs-text-soft)]">
          Every location page is built around the same commitment: personalized quotes, detail-focused residential cleaning, and service that makes your home easier to enjoy.
        </p>
      </div>
    </div>
  </section>

  <!-- LOCATIONS GRID -->
  <section id="locations-grid" class="bg-[var(--bs-bg)] pb-20 lg:pb-24">
    <div class="mx-auto max-w-7xl px-4">
      <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
        <?php foreach ($locations as $location) : ?>
          <article class="bs-reveal-stagger bs-location-hub-card group overflow-hidden border border-[var(--bs-border)] bg-white shadow-[var(--bs-shadow-card)]">
            <a href="<?php echo esc_url($location['link']); ?>" class="block">
              <div class="relative overflow-hidden border-b border-[var(--bs-border)] bg-[var(--bs-surface-2)]">
                <iframe
                  src="<?php echo esc_url($location['map_embed']); ?>"
                  loading="lazy"
                  allowfullscreen
                  referrerpolicy="no-referrer-when-downgrade"
                  title="Map of <?php echo esc_attr($location['name']); ?> service area"
                  class="bs-location-map h-[240px] w-full md:h-[250px]"
                  style="filter:saturate(.92) contrast(1.02);"
                ></iframe>

                <div class="pointer-events-none absolute inset-x-0 bottom-0 h-20 bg-gradient-to-t from-[rgba(11,37,56,0.34)] to-transparent"></div>

                <div class="absolute left-4 top-4 border border-white/18 bg-[rgba(11,37,56,0.86)] px-4 py-2 backdrop-blur-sm">
                  <p class="text-[10px] font-black uppercase tracking-[0.18em] text-[var(--bs-accent)]">
                    <?php echo esc_html($location['county']); ?> Area
                  </p>
                </div>

                <div class="absolute right-4 top-4 flex h-12 w-12 items-center justify-center border border-white/18 bg-white/90 text-lg font-light text-[var(--bs-primary)] shadow-[0_10px_30px_rgba(11,37,56,0.12)] transition duration-300 group-hover:scale-105">
                  ↗
                </div>
              </div>

              <div class="p-6">
                <p class="text-[10px] font-black uppercase tracking-[0.18em] text-[var(--bs-text-muted)]">
                  Location
                </p>

                <h3 class="mt-3 text-3xl font-semibold leading-none tracking-[-0.04em] text-[var(--bs-primary)]">
                  <?php echo esc_html($location['name']); ?>
                </h3>

                <p class="mt-5 text-base leading-8 text-[var(--bs-text-soft)]">
                  <?php echo esc_html($location['copy']); ?>
                </p>

                <div class="mt-7">
                  <span class="bs-btn bs-btn-secondary inline-flex items-center justify-center px-6 py-4 text-sm font-black uppercase tracking-[0.15em] text-white">
                    View Location Page
                  </span>
                </div>
              </div>
            </a>
          </article>
        <?php endforeach; ?>
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
    --bs-shadow-trust:           0 22px 60px rgba(11, 37, 56, 0.08);
    --bs-shadow-location:        0 18px 46px rgba(11, 37, 56, 0.06);
    --bs-shadow-hover-location:  0 28px 60px rgba(11, 37, 56, 0.10);
    --bs-shadow-service:         0 18px 46px rgba(11, 37, 56, 0.06);

    --bs-shadow-btn-primary:         0 18px 38px rgba(79, 180, 231, 0.22);
    --bs-shadow-btn-primary-hover:   0 22px 44px rgba(79, 180, 231, 0.28);
    --bs-shadow-btn-secondary:       0 18px 38px rgba(11, 37, 56, 0.18);
    --bs-shadow-btn-secondary-hover: 0 24px 48px rgba(11, 37, 56, 0.22);
    --bs-shadow-btn-white-hover:     0 18px 40px rgba(255, 255, 255, 0.10);

    --bs-border-hover-location: rgba(79, 180, 231, 0.28);

    --bs-cta-soft-glow-tl: radial-gradient(circle at top left, rgba(79,180,231,0.12), transparent 28%);
    --bs-cta-soft-glow-br: radial-gradient(circle at bottom right, rgba(244,197,66,0.10), transparent 24%);
--bs-footer-separator-line: linear-gradient(
  90deg,
  transparent 0%,
  rgba(11,37,56,0.10) 10%,
  rgba(79,180,231,0.55) 50%,
  rgba(11,37,56,0.10) 90%,
  transparent 100%
);

--bs-footer-separator-glow: radial-gradient(
  circle at center,
  rgba(79,180,231,0.14) 0%,
  rgba(79,180,231,0.05) 32%,
  transparent 72%
);
    --bs-clip-btn: 14px;

    --bs-duration-fast:    0.24s;
    --bs-duration-base:    0.28s;
    --bs-duration-card:    0.30s;
    --bs-duration-reveal:  0.90s;
    --bs-duration-pulse:   2.8s;
    --bs-trust-marquee-duration: 26s;
  }

  .bs-locations-page { font-family: "Inter", "Segoe UI", Arial, sans-serif; }

  .bs-locations-page h1,
  .bs-locations-page h2,
  .bs-locations-page h3,
  .bs-locations-page h4 {
    font-family: "Playfair Display", Georgia, serif;
    font-weight: 700;
    letter-spacing: -0.02em;
  }

  .bs-locations-page p,
  .bs-locations-page a,
  .bs-locations-page li,
  .bs-locations-page button,
  .bs-locations-page span,
  .bs-locations-page iframe {
    font-family: "Inter", "Segoe UI", Arial, sans-serif;
  }

  .bs-chip-icon {
    display: inline-block;
    width: 13px;
    height: 13px;
    flex: 0 0 auto;
    animation: bsPulseDot var(--bs-duration-pulse) ease-in-out infinite;
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

  .bs-trust-marquee {
    position: relative;
    overflow: hidden;
    width: 100%;
  }

  .bs-trust-track {
    display: flex;
    align-items: stretch;
    width: max-content;
    animation: bsTrustMarquee var(--bs-trust-marquee-duration) linear infinite;
    will-change: transform;
  }

  .bs-trust-marquee:hover .bs-trust-track {
    animation-play-state: paused;
  }

  .bs-trust-marquee-item {
    flex: 0 0 auto;
    min-width: 320px;
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1.35rem 1.5rem;
    border-right: 1px solid var(--bs-border);
    background: #ffffff;
  }

  .bs-location-hub-card {
    transition: transform var(--bs-duration-card) ease, box-shadow var(--bs-duration-card) ease, border-color var(--bs-duration-card) ease;
  }

  .bs-location-hub-card:hover {
    transform: translateY(-6px);
    border-color: var(--bs-border-hover-location);
    box-shadow: var(--bs-shadow-hover-location);
  }

  .bs-location-map {
    display: block;
    border: 0;
    transition: transform 0.7s ease;
    will-change: transform;
  }

  .bs-location-hub-card:hover .bs-location-map {
    transform: scale(1.02);
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

  .bs-final-cta-shell {
    border: 1px solid var(--bs-border);
    background: linear-gradient(180deg, #ffffff 0%, #f8fbfd 100%);
    padding: 1.25rem;
    box-shadow: var(--bs-shadow-service);
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

  @keyframes bsPulseDot {
    0%, 100% { transform: scale(1); opacity: 1; }
    50% { transform: scale(1.14); opacity: .8; }
  }

  @keyframes bsTrustMarquee {
    0% { transform: translateX(0); }
    100% { transform: translateX(-33.333%); }
  }

  @media (max-width: 768px) {
    .bs-locations-page br { display: none; }

    .bs-btn-primary,
    .bs-btn-secondary,
    .bs-btn-outline-white { clip-path: none; }

    .bs-trust-marquee-item {
      min-width: 260px;
      padding: 1rem 1.1rem;
    }

    .bs-final-cta-shell {
      padding: 1rem;
    }
  }

  @media (prefers-reduced-motion: reduce) {
    .bs-reveal-up,
    .bs-reveal-left,
    .bs-reveal-right,
    .bs-reveal-stagger,
    .bs-btn,
    .bs-chip-icon,
    .bs-trust-track,
    .bs-location-hub-card,
    .bs-location-map {
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
            const delay = entry.target.classList.contains("bs-reveal-stagger") ? (idx % 10) * 70 : 0;
            setTimeout(() => entry.target.classList.add("is-visible"), delay);
            observer.unobserve(entry.target);
          }
        });
      }, { threshold: 0.14 });

      items.forEach((item) => observer.observe(item));
    }
  });
</script>

<?php get_footer(); ?>