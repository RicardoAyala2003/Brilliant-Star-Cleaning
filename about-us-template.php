<?php
/**
 * Template Name: About Template
 *
 * About page for Brilliant Star Cleaning Services
 * Navbar y footer vienen de header.php / footer.php.
 */

get_header(); ?>

<main class="bs-about-page overflow-hidden bg-[var(--bs-bg)] text-[var(--bs-text)]">

  <?php
    $hero_image   = 'https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?q=80&w=1600&auto=format&fit=crop';
    $team_image   = '/wp-content/uploads/2026/04/BrilliantStarHero1.jpg-scaled.jpeg';
    $detail_image = 'https://images.unsplash.com/photo-1527515637462-cff94eecc1ac?q=80&w=1200&auto=format&fit=crop';

    $about_paragraphs = [
      'Brilliant Star Cleaning Services was built on a simple belief: every San Diego home deserves to be cleaned by people who truly care. For over 15 years, that belief has guided everything we do — from the products we choose to the way we train our team and communicate with our clients.',
      'We\'re not a franchise or a national chain. We\'re a local San Diego cleaning company — and that makes all the difference. Every member of our team is a San Diego local, carefully selected for their experience, professionalism, and commitment to quality. We invest in our people because they\'re the ones showing up to your home.',
      'We use commercial-grade vacuums and professional cleaning supplies matched to your home\'s specific surfaces — hardwood, tile, ceramic, stone countertops, and stainless steel appliances. We don\'t cut corners, and we don\'t rush. We do the job right, every time.',
      'Have a newborn at home? Allergies? Specific preferences about cleaning products? We work around your household\'s needs — just communicate them to us when you book, and we\'ll take care of the rest.',
      'Brilliant Star is fully licensed in San Diego and insured, so you can welcome us into your home with complete peace of mind. We\'ve earned the trust of San Diego families for over 15 years — and we don\'t take that lightly.',
    ];

    $highlights = [
      [
        'eyebrow' => 'Local Team',
        'title'   => 'A San Diego cleaning company — not a franchise.',
        'copy'    => 'Every member of our team is a San Diego local, selected for experience, professionalism, and commitment to quality.',
      ],
      [
        'eyebrow' => 'Professional Standards',
        'title'   => 'Commercial-grade equipment and products matched to your home.',
        'copy'    => 'We clean with the right tools for hardwood, tile, ceramic, stone countertops, and stainless steel appliances.',
      ],
      [
        'eyebrow' => 'Peace of Mind',
        'title'   => 'Licensed, insured, and trusted for over 15 years.',
        'copy'    => 'We show up prepared, communicate clearly, and deliver exceptional results with real attention to detail.',
      ],
    ];

    $reviews = [
      [
        'copy' => '"Belen and her team showed up on time and did a complete and thorough cleaning of my mom\'s 5-bedroom house. I am extremely pleased with the service and will definitely have them come back."',
      ],
      [
        'copy' => '"The team of Faby & Amalia did an excellent job leaving the condo spotless, sparkling, and fresh smelling. Extremely recommend Brilliant Star for ALL your cleaning needs!"',
      ],
      [
        'copy' => '"Hired for a deep cleaning service and my expectations were exceeded! Everything was safe and clean. I felt like I was walking into a new home. Highly recommend!"',
      ],
    ];
  ?>

  <!-- HERO -->
  <section class="relative isolate overflow-hidden border-b border-[var(--bs-border)] bg-[var(--bs-primary)] text-white">
    <div class="absolute inset-0">
      <img
        src="<?php echo esc_url($hero_image); ?>"
        alt="Brilliant Star Cleaning Services team working in a bright San Diego home"
        class="bs-about-hero-image h-full w-full object-cover"
      >
      <div class="absolute inset-0" style="background:var(--bs-hero-overlay)"></div>
      <div class="absolute inset-0" style="background:var(--bs-hero-glow-tl)"></div>
      <div class="absolute inset-0" style="background:var(--bs-hero-glow-br)"></div>
      <div class="absolute inset-y-0 left-[7%] hidden w-px lg:block" style="background:var(--bs-hero-line-v-left)"></div>
      <div class="absolute inset-y-0 right-[11%] hidden w-px lg:block" style="background:var(--bs-hero-line-v-right)"></div>
      <div class="absolute inset-x-0 top-0 h-px" style="background:var(--bs-hero-line-h)"></div>
      <div class="absolute bottom-0 left-0 right-0 h-28" style="background:var(--bs-hero-fade-b)"></div>
      <div class="absolute right-[-90px] top-[-70px] h-56 w-56 rotate-[18deg]" style="border:1px solid var(--bs-hero-frame-strong)"></div>
      <div class="absolute left-[-60px] bottom-[12%] h-40 w-40 rotate-[18deg]" style="border:1px solid var(--bs-hero-frame-soft)"></div>
    </div>

    <div class="relative z-10 mx-auto max-w-7xl px-4 py-18 lg:py-24">
      <div class="grid gap-10 lg:grid-cols-[1.02fr_0.98fr] lg:items-end">

        <div class="bs-reveal-up">
          <div class="max-w-3xl">
            <p class="bs-hero-kicker inline-flex px-4 py-2 text-[11px] font-extrabold uppercase tracking-[0.24em] backdrop-blur-sm">
              About Brilliant Star
            </p>

            <h1 class="mt-6 max-w-[13ch] text-4xl font-semibold leading-[0.94] tracking-[-0.05em] text-white md:text-6xl xl:text-7xl">
              15 Years of Cleaning San Diego Homes with Care and Expertise
            </h1>

            <p class="mt-6 max-w-2xl text-base leading-8 text-[var(--bs-hero-text-soft)] md:text-lg">
              Meet the Brilliant Star team — San Diego's trusted home cleaning experts for 15+ years. Licensed, insured, and committed to exceptional results in every home we serve.
            </p>

            <div class="mt-8 flex flex-col gap-4 sm:flex-row">
              <a href="/contact-us/" class="bs-btn bs-btn-primary inline-flex items-center justify-center px-7 py-4 text-sm font-black uppercase tracking-[0.15em] text-white">
                Request Your Free Quote
              </a>
              <a href="tel:+18582551498" class="bs-btn bs-btn-outline-white inline-flex items-center justify-center px-7 py-4 text-sm font-black uppercase tracking-[0.15em] text-white">
                Call (858) 255-1498
              </a>
            </div>
          </div>
        </div>

        <div class="bs-reveal-right">
          <div class="grid gap-4 sm:grid-cols-3 lg:grid-cols-1">
            <div class="bs-about-stat px-5 py-5">
              <p class="text-[10px] font-black uppercase tracking-[0.18em] text-[var(--bs-hero-stat-label)]">Experience</p>
              <p class="mt-2 text-2xl font-extrabold tracking-[-0.03em] text-white">15+ Years</p>
            </div>
            <div class="bs-about-stat px-5 py-5">
              <p class="text-[10px] font-black uppercase tracking-[0.18em] text-[var(--bs-hero-stat-label)]">Coverage</p>
              <p class="mt-2 text-2xl font-extrabold tracking-[-0.03em] text-white">San Diego Local</p>
            </div>
            <div class="bs-about-stat px-5 py-5">
              <p class="text-[10px] font-black uppercase tracking-[0.18em] text-[var(--bs-hero-stat-label)]">Trust</p>
              <p class="mt-2 text-2xl font-extrabold tracking-[-0.03em] text-white">Licensed &amp; Insured</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- TRUST STRIP -->
  <section class="relative z-20 -mt-8 overflow-hidden lg:-mt-10">
    <div class="mx-auto max-w-7xl px-4">
      <div class="overflow-hidden border border-[var(--bs-border)] bg-white shadow-[var(--bs-shadow-trust)]">
        <div class="bs-trust-marquee">
          <div class="bs-trust-track">

            <?php
              $trust_items = [
                ['label' => 'Experience', 'value' => '15+ Years of Experience', 'color' => 'var(--bs-accent)'],
                ['label' => 'Local', 'value' => 'San Diego Team', 'color' => 'var(--bs-primary)'],
                ['label' => 'Protection', 'value' => 'Licensed & Insured', 'color' => 'var(--bs-gold)'],
                ['label' => 'Prepared', 'value' => 'Commercial-Grade Equipment', 'color' => 'var(--bs-accent)'],
              ];

              $marquee_items = array_merge($trust_items, $trust_items, $trust_items);
            ?>

            <?php foreach ($marquee_items as $item) : ?>
              <div class="bs-trust-marquee-item">
                <span class="bs-chip-icon" style="background:<?php echo esc_attr($item['color']); ?>"></span>
                <div>
                  <p class="text-[10px] font-black uppercase tracking-[0.18em] text-[var(--bs-text-muted)]">
                    <?php echo esc_html($item['label']); ?>
                  </p>
                  <p class="mt-1 text-sm font-extrabold text-[var(--bs-primary)]">
                    <?php echo esc_html($item['value']); ?>
                  </p>
                </div>
              </div>
            <?php endforeach; ?>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- STORY / MAIN CONTENT -->
  <section class="bg-[var(--bs-bg)] pb-20 pt-24 lg:pb-24 lg:pt-28">
    <div class="mx-auto max-w-7xl px-4">
      <div class="grid gap-10 lg:grid-cols-[0.95fr_1.05fr] lg:items-start">

        <div class="bs-reveal-left">
          <div class="relative overflow-hidden border border-[var(--bs-border)] bg-white shadow-[var(--bs-shadow-card)]">
            <div class="absolute left-0 top-0 z-10 h-14 w-14 border-r border-b backdrop-blur-sm" style="border-color:var(--bs-img-corner-border); background:var(--bs-img-corner-bg)"></div>
            <img
              src="<?php echo esc_url($team_image); ?>"
              alt="Professional residential cleaning team in San Diego"
              class="bs-parallax-soft h-[420px] w-full object-cover md:h-[620px]"
            >
            <div class="absolute inset-x-0 bottom-0 h-44" style="background:var(--bs-img-fade-b)"></div>
            <div class="bs-image-badge absolute bottom-5 left-5 px-4 py-3">
              <p class="text-[10px] font-black uppercase tracking-[0.18em] text-[var(--bs-img-badge-label)]">Trusted Since</p>
              <p class="mt-1 text-lg font-extrabold text-white">2009</p>
            </div>
          </div>
        </div>

        <div class="bs-reveal-right">
          <p class="text-xs font-black uppercase tracking-[0.2em] text-[var(--bs-accent)]">Our Story</p>
          <h2 class="mt-4 max-w-[15ch] text-3xl font-semibold leading-[1.02] tracking-[-0.045em] text-[var(--bs-primary)] md:text-5xl">
            A trusted house cleaning company in San Diego built on care and consistency
          </h2>

          <div class="mt-7 space-y-5 text-base leading-8 text-[var(--bs-text-soft)]">
            <?php foreach ($about_paragraphs as $paragraph) : ?>
              <p><?php echo esc_html($paragraph); ?></p>
            <?php endforeach; ?>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- HIGHLIGHTS -->
  <section class="relative overflow-hidden border-y border-[var(--bs-border)] bg-white py-20 lg:py-24">
    <div class="absolute right-0 top-0 h-full w-full" style="background:var(--bs-services-glow)"></div>
    <div class="absolute left-[-80px] top-16 h-44 w-44 rotate-12 border border-[var(--bs-border)]"></div>
    <div class="absolute bottom-[-60px] right-10 h-36 w-36" style="border:1px solid var(--bs-gold-deco-border)"></div>

    <div class="relative mx-auto max-w-7xl px-4">
      <div class="bs-reveal-up mx-auto max-w-4xl text-center">
        <p class="text-xs font-black uppercase tracking-[0.2em] text-[var(--bs-accent)]">What Sets Us Apart</p>
        <h2 class="mt-4 text-3xl font-semibold leading-tight tracking-[-0.04em] text-[var(--bs-primary)] md:text-5xl">
          The standard we bring into every home
        </h2>
      </div>

      <div class="mt-12 grid gap-6 lg:grid-cols-3">
        <?php foreach ($highlights as $item) : ?>
          <article class="bs-reveal-stagger bs-service-card group relative overflow-hidden border border-[var(--bs-border)] p-7 shadow-[var(--bs-shadow-service)]">
            <div class="absolute inset-y-0 left-0 w-[4px] bg-[var(--bs-card-accent-bar)] opacity-0 transition duration-[var(--bs-duration-card)] group-hover:opacity-100"></div>
            <div class="absolute -right-10 -top-10 h-24 w-24 rotate-12 border border-[var(--bs-border)] opacity-0 transition duration-[var(--bs-duration-card)] group-hover:opacity-100"></div>

            <p class="text-[11px] font-black uppercase tracking-[0.18em] text-[var(--bs-accent)]">
              <?php echo esc_html($item['eyebrow']); ?>
            </p>

            <h3 class="mt-4 text-2xl font-semibold leading-tight tracking-[-0.03em] text-[var(--bs-primary)]">
              <?php echo esc_html($item['title']); ?>
            </h3>

            <p class="mt-4 text-[15px] leading-8 text-[var(--bs-text-soft)]">
              <?php echo esc_html($item['copy']); ?>
            </p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- DETAIL SECTION -->
  <section class="bg-[var(--bs-bg)] py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-4">
      <div class="grid gap-10 lg:grid-cols-[1.02fr_0.98fr] lg:items-center">

        <div class="bs-reveal-left order-2 lg:order-1">
          <p class="text-xs font-black uppercase tracking-[0.2em] text-[var(--bs-accent)]">How We Work</p>
          <h2 class="mt-4 max-w-[15ch] text-3xl font-semibold leading-tight tracking-[-0.04em] text-[var(--bs-primary)] md:text-5xl">
            We do the job right, every time
          </h2>
          <div class="mt-7 space-y-5 text-base leading-8 text-[var(--bs-text-soft)]">
            <p>We use commercial-grade vacuums and professional cleaning supplies matched to your home's specific surfaces — hardwood, tile, ceramic, stone countertops, and stainless steel appliances.</p>
            <p>We don't cut corners, and we don't rush. We do the job right, every time.</p>
            <p>Have a newborn at home? Allergies? Specific preferences about cleaning products? We work around your household's needs — just communicate them to us when you book, and we'll take care of the rest.</p>
          </div>
        </div>

        <div class="bs-reveal-right order-1 lg:order-2">
          <div class="relative overflow-hidden border border-[var(--bs-border)] bg-white shadow-[var(--bs-shadow-card)]">
            <img
              src="<?php echo esc_url($detail_image); ?>"
              alt="Clean bright residential interior prepared by professional cleaners"
              class="bs-parallax-soft h-[420px] w-full object-cover md:h-[520px]"
            >
            <div class="absolute inset-x-0 bottom-0 h-36" style="background:var(--bs-img-fade-b)"></div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- REVIEWS -->
  <section class="border-y border-[var(--bs-border)] bg-white py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-4">
      <div class="bs-reveal-up mx-auto max-w-4xl text-center">
        <p class="text-xs font-black uppercase tracking-[0.2em] text-[var(--bs-gold)]">Reviews</p>
        <h2 class="mt-4 text-3xl font-semibold leading-tight tracking-[-0.04em] text-[var(--bs-primary)] md:text-5xl">
          What San Diego homeowners say about us
        </h2>
        <p class="mt-5 text-base leading-8 text-[var(--bs-text-soft)]">
          Real homes. Real results. See why San Diego families have trusted Brilliant Star for over 15 years.
        </p>
      </div>

      <div class="mt-12 grid gap-6 lg:grid-cols-3">
        <?php foreach ($reviews as $review) : ?>
          <article class="bs-reveal-stagger bs-hover-rise bs-review-card border border-[var(--bs-border)] p-7 shadow-[var(--bs-shadow-review)]">
            <div class="mb-5 flex items-center justify-between border-b border-[var(--bs-border)] pb-4">
              <span class="text-[11px] font-black uppercase tracking-[0.18em] text-[var(--bs-gold)]">Yelp Review</span>
              <span class="text-[var(--bs-gold)]">★★★★★</span>
            </div>
            <p class="text-base leading-8 text-[var(--bs-text-soft)]"><?php echo esc_html($review['copy']); ?></p>
            <p class="mt-5 text-xs font-black uppercase tracking-[0.16em] text-[var(--bs-primary)]">— Yelp Reviewer</p>
          </article>
        <?php endforeach; ?>
      </div>

      <div class="bs-reveal-up mt-10 text-center">
        <a href="https://www.yelp.com/biz/brilliant-star-cleaning-san-diego" target="_blank" rel="noopener noreferrer" class="bs-btn bs-btn-secondary inline-flex items-center justify-center px-6 py-4 text-sm font-black uppercase tracking-[0.15em] text-white">
          Read All 54 Reviews on Yelp →
        </a>
      </div>
    </div>
  </section>

  <!-- FINAL CTA -->
  <section class="relative overflow-hidden border-t border-[var(--bs-border)] py-20 lg:py-24" style="background:var(--bs-final-cta-bg)">
    <div class="absolute inset-0" style="background:var(--bs-cta-soft-glow-tl)"></div>
    <div class="absolute inset-0" style="background:var(--bs-cta-soft-glow-br)"></div>

    <div class="relative mx-auto max-w-7xl px-4">
      <div class="overflow-hidden border border-[var(--bs-border)] bg-white shadow-[var(--bs-shadow-card)]">
        <div class="grid gap-10 px-6 py-10 md:px-10 md:py-12 lg:grid-cols-[1fr_1fr] lg:items-center">

          <div class="bs-reveal-left">
            <p class="text-xs font-black uppercase tracking-[0.2em] text-[var(--bs-gold)]">
              Ready When You Are
            </p>

            <h2 class="mt-4 max-w-[14ch] text-3xl font-semibold leading-tight tracking-[-0.04em] text-[var(--bs-primary)] md:text-5xl">
              Ready to Experience the Brilliant Star Difference?
            </h2>

            <p class="mt-5 max-w-2xl text-base leading-8 text-[var(--bs-text-soft)]">
              Tell us about your home and we’ll provide a clear, personalized cleaning quote — no pressure, no surprises.
            </p>
          </div>

          <div class="bs-reveal-right">
            <div class="bs-final-cta-shell">
              <div id="bs-cta-home-root-bottom"></div>
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
    --bs-final-cta-bg:   linear-gradient(180deg, #faf9f5 0%, #f1f3ef 100%);
    --bs-card-soft-bg:   linear-gradient(180deg, #ffffff 0%, #fcfbf8 100%);
    --bs-review-card-bg: linear-gradient(180deg, #ffffff 0%, #faf8f4 100%);

    /* Texto */
    --bs-text:           #1c2831;
    --bs-text-soft:      rgba(28, 40, 49, 0.78);
    --bs-text-muted:     rgba(28, 40, 49, 0.56);

    /* Bordes */
    --bs-border:                 rgba(24, 54, 74, 0.10);
    --bs-border-hover-service:   rgba(154, 179, 199, 0.30);
    --bs-gold-deco-border:       rgba(201, 161, 58, 0.20);

    /* Sombras */
    --bs-shadow-card:            0 28px 70px rgba(24, 54, 74, 0.08);
    --bs-shadow-trust:           0 22px 60px rgba(24, 54, 74, 0.08);
    --bs-shadow-service:         0 18px 46px rgba(24, 54, 74, 0.06);
    --bs-shadow-review:          0 18px 48px rgba(24, 54, 74, 0.06);
    --bs-shadow-hover-rise:      0 18px 44px rgba(24, 54, 74, 0.10);
    --bs-shadow-hover-service:   0 28px 60px rgba(24, 54, 74, 0.10);

    /* Sombras de botones */
    --bs-shadow-btn-primary:         0 18px 38px rgba(201, 161, 58, 0.22);
    --bs-shadow-btn-primary-hover:   0 22px 44px rgba(201, 161, 58, 0.30);
    --bs-shadow-btn-secondary:       0 18px 38px rgba(24, 54, 74, 0.18);
    --bs-shadow-btn-secondary-hover: 0 24px 48px rgba(24, 54, 74, 0.24);
    --bs-shadow-btn-white-hover:     0 18px 40px rgba(24, 54, 74, 0.16);

    /* Hero */
    --bs-hero-overlay:         linear-gradient(92deg, rgba(20,39,51,0.76) 0%, rgba(20,39,51,0.64) 38%, rgba(20,39,51,0.34) 70%, rgba(20,39,51,0.14) 100%);
    --bs-hero-glow-tl:         radial-gradient(circle at top left, rgba(154,179,199,0.18), transparent 28%);
    --bs-hero-glow-br:         radial-gradient(circle at bottom right, rgba(201,161,58,0.12), transparent 24%);
    --bs-hero-line-h:          linear-gradient(90deg, transparent, rgba(255,255,255,0.30), transparent);
    --bs-hero-line-v-left:     rgba(255,255,255,0.10);
    --bs-hero-line-v-right:    rgba(255,255,255,0.08);
    --bs-hero-fade-b:          linear-gradient(180deg, transparent, rgba(20,39,51,0.24));
    --bs-hero-frame-strong:    rgba(255,255,255,0.10);
    --bs-hero-frame-soft:      rgba(255,255,255,0.08);
    --bs-hero-text-soft:       rgba(255,255,255,0.84);

    /* Kicker hero */
    --bs-hero-kicker-border:   rgba(201,161,58,0.36);
    --bs-hero-kicker-bg:       rgba(255,255,255,0.08);
    --bs-hero-kicker-text:     rgba(255,255,255,0.92);
    --bs-hero-kicker-shadow:   0 10px 30px rgba(0,0,0,0.12);

    /* Stats hero */
    --bs-hero-stat-border:     rgba(255,255,255,0.12);
    --bs-hero-stat-bg:         rgba(255,255,255,0.10);
    --bs-hero-stat-bg-hover:   rgba(255,255,255,0.14);
    --bs-hero-stat-border-hover: rgba(255,255,255,0.24);
    --bs-hero-stat-label:      rgba(255,255,255,0.66);

    /* Elementos de imagen */
    --bs-img-fade-b:           linear-gradient(180deg, transparent, rgba(24,54,74,0.42));
    --bs-img-corner-border:    rgba(255,255,255,0.18);
    --bs-img-corner-bg:        rgba(255,255,255,0.08);
    --bs-img-badge-border:     rgba(255,255,255,0.18);
    --bs-img-badge-bg:         rgba(255,255,255,0.12);
    --bs-img-badge-label:      rgba(255,255,255,0.72);

    /* CTA final */
    --bs-cta-soft-glow-tl:     radial-gradient(circle at top left, rgba(154,179,199,0.12), transparent 28%);
    --bs-cta-soft-glow-br:     radial-gradient(circle at bottom right, rgba(201,161,58,0.10), transparent 24%);
    --bs-final-shell-bg:       linear-gradient(180deg, #ffffff 0%, #fcfbf8 100%);

    /* Decorative */
    --bs-services-glow:        radial-gradient(circle at top right, rgba(154,179,199,0.10), transparent 22%);
    --bs-card-accent-bar:      linear-gradient(180deg, var(--bs-accent) 0%, var(--bs-gold) 100%);

    /* Forms and buttons */
    --bs-outline-btn-bg:             rgba(255,255,255,0.08);
    --bs-outline-btn-border:         rgba(154,179,199,0.34);
    --bs-outline-btn-bg-hover:       rgba(154,179,199,0.18);
    --bs-outline-btn-border-hover:   rgba(154,179,199,0.48);

    /* Trust strip */
    --bs-trust-item-bg:        linear-gradient(180deg, #ffffff 0%, #fbfaf6 100%);

    /* Shape + timing */
    --bs-clip-btn:             14px;
    --bs-duration-fast:        0.24s;
    --bs-duration-base:        0.28s;
    --bs-duration-card:        0.30s;
    --bs-duration-reveal:      0.90s;
    --bs-duration-zoom:        16s;
    --bs-duration-pulse:       2.8s;
    --bs-trust-marquee-duration: 26s;
  }

  .bs-about-page {
    font-family: "Inter", "Segoe UI", Arial, sans-serif;
  }

  .bs-about-page h1,
  .bs-about-page h2,
  .bs-about-page h3,
  .bs-about-page h4 {
    font-family: "Playfair Display", Georgia, serif;
    font-weight: 700;
    letter-spacing: -0.02em;
  }

  .bs-about-page p,
  .bs-about-page a,
  .bs-about-page li,
  .bs-about-page button,
  .bs-about-page span {
    font-family: "Inter", "Segoe UI", Arial, sans-serif;
  }

  .bs-about-hero-image {
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

  .bs-about-stat {
    border: 1px solid var(--bs-hero-stat-border);
    background: var(--bs-hero-stat-bg);
    backdrop-filter: blur(10px);
    clip-path: polygon(0 0, calc(100% - var(--bs-clip-btn)) 0, 100% var(--bs-clip-btn), 100% 100%, var(--bs-clip-btn) 100%, 0 calc(100% - var(--bs-clip-btn)));
    transition: transform var(--bs-duration-base) ease, border-color var(--bs-duration-base) ease, background-color var(--bs-duration-base) ease;
  }

  .bs-about-stat:hover {
    transform: translateY(-3px);
    border-color: var(--bs-hero-stat-border-hover);
    background: var(--bs-hero-stat-bg-hover);
  }

  .bs-chip-icon {
    display: inline-block;
    width: 13px;
    height: 13px;
    flex: 0 0 auto;
    border-radius: 999px;
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

  .bs-trust-marquee {
    overflow: hidden;
    width: 100%;
  }

  .bs-trust-track {
    display: flex;
    width: max-content;
    animation: bsTrustMarquee var(--bs-trust-marquee-duration) linear infinite;
  }

  .bs-trust-marquee:hover .bs-trust-track {
    animation-play-state: paused;
  }

  .bs-trust-marquee-item {
    min-width: 320px;
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1.3rem 1.5rem;
    border-right: 1px solid var(--bs-border);
    background: var(--bs-trust-item-bg);
  }

  .bs-hover-rise {
    transition: transform var(--bs-duration-base) ease, box-shadow var(--bs-duration-base) ease, background-color var(--bs-duration-base) ease;
  }

  .bs-hover-rise:hover {
    transform: translateY(-4px);
    box-shadow: var(--bs-shadow-hover-rise);
  }

  .bs-service-card {
    background: var(--bs-card-soft-bg);
    transition: transform var(--bs-duration-card) ease, box-shadow var(--bs-duration-card) ease, border-color var(--bs-duration-card) ease, background var(--bs-duration-card) ease;
  }

  .bs-service-card:hover {
    transform: translateY(-6px);
    border-color: var(--bs-border-hover-service);
    box-shadow: var(--bs-shadow-hover-service);
  }

  .bs-review-card {
    background: var(--bs-review-card-bg);
  }

  .bs-final-cta-shell {
    border: 1px solid var(--bs-border);
    background: var(--bs-final-shell-bg);
    padding: 1.25rem;
    box-shadow: var(--bs-shadow-service);
  }

  .bs-image-badge {
    border: 1px solid var(--bs-img-badge-border);
    background: var(--bs-img-badge-bg);
    backdrop-filter: blur(10px);
  }

  .bs-parallax-soft {
    transform: scale(1.02);
    transition: transform var(--bs-duration-reveal) ease;
    will-change: transform;
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

  @keyframes bsTrustMarquee {
    0% { transform: translateX(0); }
    100% { transform: translateX(-33.333%); }
  }

  @media (max-width: 768px) {
    .bs-about-page br { display: none; }

    .bs-about-stat,
    .bs-btn-primary,
    .bs-btn-secondary,
    .bs-btn-outline-white {
      clip-path: none;
    }

    .bs-final-cta-shell {
      padding: 1rem;
    }

    .bs-trust-marquee-item {
      min-width: 260px;
      padding: 1rem 1.1rem;
    }
  }

  @media (prefers-reduced-motion: reduce) {
    .bs-reveal-up,
    .bs-reveal-left,
    .bs-reveal-right,
    .bs-reveal-stagger,
    .bs-about-hero-image,
    .bs-btn,
    .bs-chip-icon,
    .bs-parallax-soft,
    .bs-about-stat,
    .bs-service-card,
    .bs-hover-rise,
    .bs-trust-track {
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

    const heroImage = document.querySelector(".bs-about-hero-image");
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

    const heroRoot = document.getElementById("bs-cta-home-root");
    const bottomRoot = document.getElementById("bs-cta-home-root-bottom");

    if (heroRoot && bottomRoot) {
      const syncBottomCta = () => {
        if (!heroRoot.innerHTML.trim()) return;
        bottomRoot.innerHTML = heroRoot.innerHTML;
      };

      setTimeout(syncBottomCta, 500);
    }
  });
</script>

<?php get_footer(); ?>