<?php
/**
 * Template Name: Move-In Cleaning Service Template
 *
 * Move-In Cleaning service page
 * Navbar y footer vienen de header.php / footer.php.
 */

get_header(); ?>

<main class="bs-service-page overflow-hidden bg-[var(--bs-bg)] text-[var(--bs-text)]">

  <?php
    // Images
    $hero_image   = 'http://brilliant-star-cleaning.local/wp-content/uploads/2026/04/MoveInCleaning.jpg-scaled.jpeg';
    $detail_image = 'https://images.unsplash.com/photo-1527515637462-cff94eecc1ac?q=80&w=1200&auto=format&fit=crop';

    // Included focus areas
    $included = [
      'Kitchens',
      'Bathrooms',
      'Floors',
      'All high-contact surfaces',
      'Detailed cleaning before you unpack',
      'Service scheduled around your move-in timeline',
    ];

    // FAQ
    $faq_items = [
      [
        'q' => 'Do I need to be home during the cleaning?',
        'a' => 'Not at all. Many of our clients leave us access instructions and come home to a spotless space. We\'ll coordinate whatever works best for your schedule.'
      ],
      [
        'q' => 'How is my quote determined?',
        'a' => 'Every home is different, so we personalize every quote. We\'ll ask about your number of bedrooms and bathrooms, when your home was last professionally cleaned, and its overall condition — then give you a straightforward estimate. No surprises, ever.'
      ],
      [
        'q' => 'What areas do you focus on for move-in cleaning?',
        'a' => 'We focus on the areas that matter most before you settle in: kitchens, bathrooms, floors, and all high-contact surfaces. We work efficiently around your move-in timeline, so your home is ready when you are.'
      ],
      [
        'q' => 'Do you bring your own cleaning supplies?',
        'a' => 'Yes. We arrive fully equipped with commercial-grade vacuums and professional cleaning products for every surface type — hardwood, tile, stone counters, and stainless steel. If you have allergies, a baby at home, or specific product preferences, just let us know and we\'ll accommodate you.'
      ],
    ];

    // Service areas shown here
    $featured_service_areas = [
      ['name' => 'San Diego', 'url' => '/locations/san-diego/'],
      ['name' => 'Hillcrest', 'url' => '/locations/hillcrest/'],
      ['name' => 'North Park', 'url' => '/locations/north-park/'],
      ['name' => 'Mission Hills', 'url' => '/locations/mission-hills/'],
      ['name' => 'Del Mar', 'url' => '/locations/del-mar/'],
      ['name' => 'Mira Mesa', 'url' => '/locations/mira-mesa/'],
    ];
  ?>

  <!-- HERO -->
  <section class="relative isolate overflow-hidden border-b border-[var(--bs-border)] bg-[var(--bs-primary)] text-white">
    <div class="absolute inset-0">
      <img
        src="<?php echo esc_url($hero_image); ?>"
        alt="Move-in cleaning service in a bright San Diego home"
        class="bs-service-hero-image h-full w-full object-cover"
      >

      <div class="absolute inset-0" style="background:var(--bs-hero-overlay-main)"></div>
      <div class="absolute inset-y-0 left-0 w-full lg:w-[62%]" style="background:var(--bs-hero-overlay-left)"></div>

      <div class="absolute left-[-100px] top-[-80px] h-72 w-72 rounded-full blur-3xl" style="background:var(--bs-hero-blob-accent)"></div>
      <div class="absolute right-[-90px] top-[10%] h-80 w-80 rounded-full blur-3xl" style="background:var(--bs-hero-blob-gold)"></div>
      <div class="absolute bottom-[-120px] left-[14%] h-72 w-72 rounded-full blur-3xl" style="background:var(--bs-hero-blob-soft)"></div>

      <div class="absolute inset-x-0 top-0 h-px" style="background:var(--bs-hero-line-h)"></div>
      <div class="absolute bottom-0 left-0 right-0 h-28" style="background:var(--bs-hero-fade-b)"></div>

      <div class="absolute right-[8%] top-[12%] hidden h-56 w-56 rotate-[18deg] lg:block" style="border:1px solid var(--bs-hero-frame-strong)"></div>
    </div>

    <div class="relative z-10 mx-auto max-w-7xl px-4 py-16 lg:py-24">
      <div class="max-w-4xl">
        <p class="bs-reveal-up bs-hero-kicker inline-flex px-4 py-2 text-[11px] font-extrabold uppercase tracking-[0.24em] backdrop-blur-sm">
          Move-In Cleaning Services
        </p>

        <h1 class="bs-reveal-up mt-6 max-w-[13ch] text-4xl font-semibold leading-[0.95] tracking-[-0.05em] text-white md:text-6xl xl:text-7xl">
          Move-In Cleaning Services in San Diego — Start Fresh
        </h1>

        <p class="bs-reveal-up mt-6 max-w-2xl text-base leading-8 text-[var(--bs-hero-text-soft)] md:text-lg">
          Before the boxes arrive and life gets busy, give your new home the deep clean it deserves. Our move-in cleaning service details and disinfects every surface — so when you walk through the door for the first time as a homeowner or new tenant, it truly feels like yours.
        </p>

        <div class="bs-reveal-up mt-8 flex flex-col gap-4 sm:flex-row">
          <a href="#included" class="bs-btn bs-btn-primary inline-flex items-center justify-center px-7 py-4 text-sm font-black uppercase tracking-[0.15em] text-white">
            See What’s Included
          </a>
          <a href="/contact-us/" class="bs-btn bs-btn-outline-white inline-flex items-center justify-center px-7 py-4 text-sm font-black uppercase tracking-[0.15em] text-white">
            Request a Quote
          </a>
        </div>
      </div>

      <div class="mt-12 grid gap-4 md:grid-cols-3">
        <div class="bs-reveal-stagger bs-hero-strip-card">
          <p class="text-[10px] font-black uppercase tracking-[0.18em] text-[var(--bs-hero-strip-label)]">Ideal For</p>
          <p class="mt-2 text-lg font-extrabold tracking-[-0.03em] text-white">A Fresh Start Before You Unpack</p>
        </div>

        <div class="bs-reveal-stagger bs-hero-strip-card">
          <p class="text-[10px] font-black uppercase tracking-[0.18em] text-[var(--bs-hero-strip-label)]">Focus Areas</p>
          <p class="mt-2 text-lg font-extrabold tracking-[-0.03em] text-white">Kitchens, Bathrooms, Floors &amp; High-Touch Surfaces</p>
        </div>

        <div class="bs-reveal-stagger bs-hero-strip-card">
          <p class="text-[10px] font-black uppercase tracking-[0.18em] text-[var(--bs-hero-strip-label)]">Best Use</p>
          <p class="mt-2 text-lg font-extrabold tracking-[-0.03em] text-white">Cleaning Timed Around Your Move-In Day</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ABOUT SNAPSHOT -->
  <section class="bg-[var(--bs-bg)] py-16 lg:py-20">
    <div class="mx-auto max-w-7xl px-4">
      <div class="grid gap-10 lg:grid-cols-[0.92fr_1.08fr] lg:items-center">
        <div class="bs-reveal-left">
          <div class="relative overflow-hidden border border-[var(--bs-border)] bg-white shadow-[var(--bs-shadow-card)]">
            <img
              src="<?php echo esc_url($detail_image); ?>"
              alt="Detailed move-in cleaning service in San Diego"
              class="bs-parallax-soft h-[380px] w-full object-cover md:h-[520px]"
            >
            <div class="absolute inset-x-0 bottom-0 h-36" style="background:var(--bs-img-fade-b)"></div>
          </div>
        </div>

        <div class="bs-reveal-right">
          <p class="text-xs font-black uppercase tracking-[0.2em] text-[var(--bs-accent)]">Fresh, Detailed, Move-In Ready</p>
          <h2 class="mt-4 max-w-[14ch] text-3xl font-semibold leading-tight tracking-[-0.04em] text-[var(--bs-primary)] md:text-5xl">
            A clean, comfortable start in your new home
          </h2>

          <div class="mt-7 space-y-5 text-base leading-8 text-[var(--bs-text-soft)]">
            <p>
              Before you settle in, give your new home the deep clean it deserves. Our move-in cleaning service details and disinfects every surface so your space feels fresh, clean, and ready from day one.
            </p>
            <p>
              We focus on the areas that matter most before you settle in: kitchens, bathrooms, floors, and all high-contact surfaces.
            </p>
            <p>
              We work efficiently around your move-in timeline, so your home is ready when you are.
            </p>
          </div>

          <div class="mt-8 flex flex-col gap-4 sm:flex-row">
            <a href="/contact-us/" class="bs-btn bs-btn-secondary inline-flex items-center justify-center px-7 py-4 text-sm font-black uppercase tracking-[0.15em] text-white">
              Request a Move-In Cleaning Quote
            </a>
            <a href="tel:+18582551498" class="bs-btn bs-btn-secondary-ghost inline-flex items-center justify-center px-7 py-4 text-sm font-black uppercase tracking-[0.15em] text-[var(--bs-primary)]">
              Call (858) 255-1498
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- INCLUDED -->
  <section id="included" class="relative overflow-hidden border-y border-[var(--bs-border)] bg-white py-16 lg:py-20">
    <div class="absolute right-0 top-0 h-full w-full" style="background:var(--bs-services-glow)"></div>
    <div class="absolute left-[-80px] top-16 h-44 w-44 rotate-12 border border-[var(--bs-border)]"></div>
    <div class="absolute bottom-[-60px] right-10 h-36 w-36" style="border:1px solid var(--bs-gold-deco-border)"></div>

    <div class="relative mx-auto max-w-7xl px-4">
      <div class="grid gap-10 lg:grid-cols-[0.84fr_1.16fr] lg:items-start">
        <div class="bs-reveal-left">
          <p class="text-xs font-black uppercase tracking-[0.2em] text-[var(--bs-accent)]">What We Focus On</p>
          <h2 class="mt-4 max-w-[13ch] text-3xl font-semibold leading-tight tracking-[-0.04em] text-[var(--bs-primary)] md:text-5xl">
            What’s Included in Move-In Cleaning
          </h2>
        </div>

        <div class="grid gap-4 md:grid-cols-2">
          <?php foreach ($included as $item) : ?>
            <div class="bs-reveal-stagger border border-[var(--bs-border)] bg-[var(--bs-service-card-bg)] px-5 py-5 shadow-[var(--bs-shadow-point)] transition duration-300 hover:-translate-y-1 hover:shadow-[var(--bs-shadow-card)] hover:border-[var(--bs-border-hover-card)]">
              <div class="flex items-start gap-4">
                <span class="mt-[7px] inline-block h-3 w-3 shrink-0 rounded-full" style="background:var(--bs-service-bullet)"></span>
                <p class="text-base leading-8 text-[var(--bs-text-soft)]">
                  <?php echo esc_html($item); ?>
                </p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- WHY IT MAKES SENSE -->
  <section class="bg-[var(--bs-bg)] py-16 lg:py-20">
    <div class="mx-auto max-w-5xl px-4">
      <div class="bs-reveal-up overflow-hidden border border-[var(--bs-border)] bg-white shadow-[var(--bs-shadow-card)]">
        <div class="px-6 py-6 md:px-8" style="border-bottom:1px solid var(--bs-border); background:var(--bs-card-soft-bg)">
          <p class="text-xs font-black uppercase tracking-[0.18em] text-[var(--bs-accent)]">
            Before You Settle In
          </p>
          <h2 class="mt-2 text-3xl font-semibold leading-tight tracking-[-0.03em] text-[var(--bs-primary)] md:text-4xl">
            A clean, disinfected space before life starts moving fast
          </h2>
        </div>

        <div class="px-6 py-6 md:px-8 md:py-8">
          <p class="text-base leading-8 text-[var(--bs-text-soft)]">
            Before the boxes arrive and life gets busy, give your new home the deep clean it deserves. Our move-in cleaning service details and disinfects every surface so you can start fresh with complete peace of mind.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- RELATED SERVICES -->
  <section class="bg-white py-16 lg:py-20">
    <div class="mx-auto max-w-7xl px-4">
      <div class="bs-reveal-up text-center">
        <p class="text-xs font-black uppercase tracking-[0.2em] text-[var(--bs-accent)]">
          Related Services
        </p>

        <h2 class="mt-4 text-3xl font-semibold leading-tight tracking-[-0.04em] text-[var(--bs-primary)] md:text-5xl">
          Explore other cleaning services in San Diego
        </h2>

        <p class="mx-auto mt-5 max-w-3xl text-base leading-8 text-[var(--bs-text-soft)]">
          Whether you need recurring service, a detailed move-out clean, or a deeper reset, we offer personalized service for every home.
        </p>
      </div>

      <div class="mt-10 grid gap-5 md:grid-cols-2 xl:grid-cols-3">
        <a href="/services/residential-cleaning/" class="bs-reveal-stagger bs-related-card">
          <span class="bs-related-card__eyebrow">Regular Cleaning</span>
          <h3 class="mt-3 text-2xl font-semibold tracking-[-0.03em] text-[var(--bs-primary)]">
            Residential Cleaning Services in San Diego
          </h3>
          <p class="mt-4 text-base leading-8 text-[var(--bs-text-soft)]">
            Keep your home consistently clean, week after week, with recurring service tailored to your schedule.
          </p>
        </a>

        <a href="/services/deep-cleaning/" class="bs-reveal-stagger bs-related-card">
          <span class="bs-related-card__eyebrow">Deep Cleaning</span>
          <h3 class="mt-3 text-2xl font-semibold tracking-[-0.03em] text-[var(--bs-primary)]">
            Deep Cleaning Services in San Diego
          </h3>
          <p class="mt-4 text-base leading-8 text-[var(--bs-text-soft)]">
            A thorough clean that goes beyond the surface and covers the areas regular cleaning doesn’t.
          </p>
        </a>

        <a href="/services/move-out-cleaning/" class="bs-reveal-stagger bs-related-card">
          <span class="bs-related-card__eyebrow">Move-Out Cleaning</span>
          <h3 class="mt-3 text-2xl font-semibold tracking-[-0.03em] text-[var(--bs-primary)]">
            Move-Out Cleaning in San Diego
          </h3>
          <p class="mt-4 text-base leading-8 text-[var(--bs-text-soft)]">
            Leave your home spotless and move-out ready with a more detailed, whole-home cleaning approach.
          </p>
        </a>
      </div>

      <div class="bs-reveal-up mt-12 flex justify-center">
        <a href="/services/" class="bs-btn bs-btn-secondary inline-flex items-center justify-center px-8 py-4 text-sm font-black uppercase tracking-[0.15em] text-white">
          View All Cleaning Services
        </a>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="border-y border-[var(--bs-border)] bg-[var(--bs-bg)] py-16 lg:py-20">
    <div class="mx-auto max-w-5xl px-4">
      <div class="bs-reveal-up text-center">
        <p class="text-xs font-black uppercase tracking-[0.2em] text-[var(--bs-accent)]">Frequently Asked Questions</p>
        <h2 class="mt-4 text-3xl font-semibold leading-tight tracking-[-0.04em] text-[var(--bs-primary)] md:text-5xl">
          Helpful answers before you book
        </h2>
      </div>

      <div class="mt-10 space-y-4">
        <?php foreach ($faq_items as $item) : ?>
          <details class="bs-reveal-stagger bs-faq border border-[var(--bs-border)] bg-white shadow-[var(--bs-shadow-point)]">
            <summary class="cursor-pointer list-none px-6 py-5 text-left text-lg font-semibold tracking-[-0.02em] text-[var(--bs-primary)]">
              <?php echo esc_html($item['q']); ?>
            </summary>
            <div class="border-t border-[var(--bs-border)] px-6 py-5">
              <p class="text-base leading-8 text-[var(--bs-text-soft)]">
                <?php echo esc_html($item['a']); ?>
              </p>
            </div>
          </details>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- SERVICE AREAS -->
  <section class="relative overflow-hidden border-y border-[var(--bs-border)] bg-[var(--bs-bg)] py-16 lg:py-20">
    <div class="absolute inset-0" style="background:var(--bs-service-areas-glow)"></div>
    <div class="absolute left-[-70px] top-10 h-40 w-40 rotate-12" style="border:1px solid var(--bs-nearby-frame-border)"></div>
    <div class="absolute right-[-50px] bottom-10 h-32 w-32 rotate-12" style="border:1px solid var(--bs-nearby-gold-frame-border)"></div>

    <div class="relative mx-auto max-w-7xl px-4">
      <div class="grid gap-10 lg:grid-cols-[0.82fr_1.18fr] lg:items-start">
        <div class="bs-reveal-left">
          <p class="text-xs font-black uppercase tracking-[0.2em] text-[var(--bs-accent)]">
            Service Areas
          </p>

          <h2 class="mt-4 max-w-[14ch] text-3xl font-semibold leading-tight tracking-[-0.04em] text-[var(--bs-primary)] md:text-5xl">
            Move-In Cleaning Services Across San Diego &amp; Nearby Neighborhoods
          </h2>

          <div class="mt-6 space-y-5 text-base leading-8 text-[var(--bs-text-soft)]">
            <p>
              We proudly provide professional house cleaning services across San Diego and the surrounding communities, including Hillcrest, North Park, South Park, Mission Hills, Del Mar, Mira Mesa, Kearny Mesa, Mission Valley, Mission Beach, Ocean Beach, University Heights, and Otay Mesa.
            </p>
            <p>
              Don’t see your neighborhood listed? Reach out — we may still be able to help.
            </p>
          </div>

          <div class="mt-8 flex flex-col gap-4 sm:flex-row">
            <a href="/locations/" class="bs-btn bs-btn-secondary inline-flex items-center justify-center px-7 py-4 text-sm font-black uppercase tracking-[0.15em] text-white">
              Explore All Service Areas
            </a>
            <a href="/contact-us/" class="bs-btn bs-btn-secondary-ghost inline-flex items-center justify-center px-7 py-4 text-sm font-black uppercase tracking-[0.15em] text-[var(--bs-primary)]">
              Request a Quote
            </a>
          </div>
        </div>

        <div class="bs-reveal-right">
          <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-3">
            <?php foreach ($featured_service_areas as $area) : ?>
              <a
                href="<?php echo esc_url($area['url']); ?>"
                class="bs-reveal-stagger bs-location-card block border border-[var(--bs-border)] px-5 py-5 shadow-[var(--bs-shadow-point)]"
              >
                <span class="text-[10px] font-black uppercase tracking-[0.18em] text-[var(--bs-accent)]">
                  Location Page
                </span>

                <h3 class="mt-3 text-2xl font-semibold leading-tight tracking-[-0.03em] text-[var(--bs-primary)]">
                  Move-In Cleaning in <?php echo esc_html($area['name']); ?>
                </h3>

                <p class="mt-3 text-sm leading-7 text-[var(--bs-text-soft)]">
                  Explore move-in cleaning services available in <?php echo esc_html($area['name']); ?>, San Diego.
                </p>

                <span class="mt-5 inline-flex items-center text-sm font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]">
                  View Area Page
                </span>
              </a>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FINAL CTA -->
  <section class="relative overflow-hidden border-t border-[var(--bs-border)] py-20 lg:py-24" style="background:var(--bs-final-cta-bg)">
    <div class="absolute inset-0" style="background:var(--bs-cta-soft-glow-tl)"></div>
    <div class="absolute inset-0" style="background:var(--bs-cta-soft-glow-br)"></div>
    <div class="absolute left-[-70px] top-10 h-36 w-36 rotate-12" style="border:1px solid var(--bs-nearby-frame-border)"></div>
    <div class="absolute right-[-40px] bottom-8 h-28 w-28 rotate-12" style="border:1px solid var(--bs-gold-deco-border)"></div>

    <div class="relative mx-auto max-w-7xl px-4">
      <div class="overflow-hidden border border-[var(--bs-border)] bg-white shadow-[var(--bs-shadow-card)]">
        <div class="grid gap-10 px-6 py-10 md:px-10 md:py-12 lg:grid-cols-[1fr_1fr] lg:items-center">
          <div class="bs-reveal-left">
            <p class="text-xs font-black uppercase tracking-[0.2em] text-[var(--bs-gold)]">
              Free Quote
            </p>

            <h2 class="mt-4 max-w-[14ch] text-3xl font-semibold leading-tight tracking-[-0.04em] text-[var(--bs-primary)] md:text-5xl">
              Ready to start fresh in your new home?
            </h2>

            <p class="mt-5 max-w-2xl text-base leading-8 text-[var(--bs-text-soft)]">
              Before the boxes arrive and life gets busy, give your new home the deep clean it deserves. We work efficiently around your move-in timeline so your home is ready when you are.
            </p>

            <p class="mt-5 text-sm font-semibold text-[var(--bs-text-soft)]">
              Prefer to call?
              <a href="tel:+18582551498" class="text-[var(--bs-primary)] underline decoration-[var(--bs-gold)] underline-offset-4">
                (858) 255-1498
              </a>
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
    --bs-primary:               #18364a;
    --bs-primary-2:             #28495f;
    --bs-primary-3:             #355d75;
    --bs-accent:                #9ab3c7;
    --bs-accent-hover:          #89a7be;
    --bs-gold:                  #c9a13a;
    --bs-gold-hover:            #b88f30;

    --bs-bg:                    #f7f8f7;
    --bs-surface:               #ffffff;
    --bs-surface-soft:          #fcfbf8;
    --bs-surface-2:             #eef3f5;
    --bs-card-soft-bg:          linear-gradient(180deg, #ffffff 0%, #fcfbf8 100%);
    --bs-final-cta-bg:          linear-gradient(180deg, #faf9f5 0%, #f1f3ef 100%);

    --bs-text:                  #1c2831;
    --bs-text-soft:             rgba(28, 40, 49, 0.78);
    --bs-text-muted:            rgba(28, 40, 49, 0.56);
    --bs-hero-text-soft:        rgba(255,255,255,0.84);

    --bs-border:                rgba(24, 54, 74, 0.10);
    --bs-border-hover-card:     rgba(154, 179, 199, 0.30);
    --bs-gold-deco-border:      rgba(201, 161, 58, 0.20);
    --bs-nearby-frame-border:   rgba(24, 54, 74, 0.08);
    --bs-nearby-gold-frame-border: rgba(201, 161, 58, 0.18);

    --bs-shadow-card:               0 28px 70px rgba(24, 54, 74, 0.08);
    --bs-shadow-point:              0 12px 30px rgba(24, 54, 74, 0.04);
    --bs-shadow-btn-primary:        0 18px 38px rgba(201, 161, 58, 0.22);
    --bs-shadow-btn-primary-hover:  0 22px 44px rgba(201, 161, 58, 0.30);
    --bs-shadow-btn-secondary:      0 18px 38px rgba(24, 54, 74, 0.18);
    --bs-shadow-btn-secondary-hover:0 24px 48px rgba(24, 54, 74, 0.24);
    --bs-shadow-btn-white-hover:    0 18px 40px rgba(24, 54, 74, 0.16);
    --bs-footer-top-shadow:         0 30px 70px rgba(24, 54, 74, 0.08);

    --bs-hero-overlay-main:     linear-gradient(
      90deg,
      rgba(20,39,51,0.72) 0%,
      rgba(20,39,51,0.62) 35%,
      rgba(20,39,51,0.50) 68%,
      rgba(20,39,51,0.42) 100%
    );
    --bs-hero-overlay-left:     linear-gradient(
      90deg,
      rgba(20,39,51,0.92) 0%,
      rgba(20,39,51,0.86) 36%,
      rgba(20,39,51,0.66) 68%,
      rgba(20,39,51,0.00) 100%
    );
    --bs-hero-line-h:           linear-gradient(90deg, transparent, rgba(255,255,255,0.30), transparent);
    --bs-hero-fade-b:           linear-gradient(180deg, transparent, rgba(20,39,51,0.28));
    --bs-hero-frame-strong:     rgba(255,255,255,0.10);
    --bs-hero-blob-accent:      rgba(154,179,199,0.14);
    --bs-hero-blob-gold:        rgba(201,161,58,0.10);
    --bs-hero-blob-soft:        rgba(255,255,255,0.06);

    --bs-hero-kicker-border:    rgba(201,161,58,0.36);
    --bs-hero-kicker-bg:        rgba(255,255,255,0.08);
    --bs-hero-kicker-text:      rgba(255,255,255,0.92);
    --bs-hero-kicker-shadow:    0 10px 30px rgba(0,0,0,0.12);

    --bs-hero-strip-border:     rgba(255,255,255,0.12);
    --bs-hero-strip-bg:         rgba(255,255,255,0.09);
    --bs-hero-strip-bg-hover:   rgba(255,255,255,0.13);
    --bs-hero-strip-border-hover: rgba(255,255,255,0.18);
    --bs-hero-strip-label:      rgba(255,255,255,0.62);

    --bs-services-glow:         radial-gradient(circle at top right, rgba(154,179,199,0.10), transparent 22%);
    --bs-service-areas-glow:    radial-gradient(circle at top left, rgba(154,179,199,0.08), transparent 24%);
    --bs-img-fade-b:            linear-gradient(180deg, transparent, rgba(24,54,74,0.42));
    --bs-cta-soft-glow-tl:      radial-gradient(circle at top left, rgba(154,179,199,0.12), transparent 28%);
    --bs-cta-soft-glow-br:      radial-gradient(circle at bottom right, rgba(201,161,58,0.10), transparent 24%);

    --bs-outline-btn-bg:             rgba(255,255,255,0.08);
    --bs-outline-btn-border:         rgba(154,179,199,0.34);
    --bs-outline-btn-bg-hover:       rgba(154,179,199,0.18);
    --bs-outline-btn-border-hover:   rgba(154,179,199,0.48);
    --bs-secondary-ghost-bg:         rgba(255,255,255,0.75);
    --bs-secondary-ghost-border:     rgba(24, 54, 74, 0.10);
    --bs-secondary-ghost-border-hover: rgba(154,179,199,0.28);

    --bs-service-card-bg:       linear-gradient(180deg, #ffffff 0%, #fcfbf8 100%);
    --bs-service-bullet:        linear-gradient(135deg, var(--bs-accent), var(--bs-gold));
    --bs-location-card-bg:      linear-gradient(180deg, #ffffff 0%, #fcfbf8 100%);

    --bs-related-eyebrow-border:rgba(154, 179, 199, 0.24);
    --bs-related-eyebrow-bg:    rgba(154, 179, 199, 0.10);

    --bs-clip-btn:              14px;
    --bs-duration-fast:         0.24s;
    --bs-duration-base:         0.28s;
    --bs-duration-reveal:       0.90s;
    --bs-duration-zoom:         16s;
  }

  .bs-service-page {
    position: relative;
    font-family: "Inter", "Segoe UI", Arial, sans-serif;
    box-shadow: var(--bs-footer-top-shadow);
    border-bottom: 1px solid rgba(24, 54, 74, 0.08);
  }

  .bs-service-page h1,
  .bs-service-page h2,
  .bs-service-page h3,
  .bs-service-page h4 {
    font-family: "Playfair Display", Georgia, serif;
    font-weight: 700;
    letter-spacing: -0.02em;
  }

  .bs-service-page p,
  .bs-service-page a,
  .bs-service-page li,
  .bs-service-page button,
  .bs-service-page span,
  .bs-service-page summary {
    font-family: "Inter", "Segoe UI", Arial, sans-serif;
  }

  .bs-service-hero-image {
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

  .bs-hero-strip-card {
    border: 1px solid var(--bs-hero-strip-border);
    background: var(--bs-hero-strip-bg);
    backdrop-filter: blur(10px);
    padding: 1.15rem 1.1rem;
    clip-path: polygon(0 0, calc(100% - var(--bs-clip-btn)) 0, 100% var(--bs-clip-btn), 100% 100%, var(--bs-clip-btn) 100%, 0 calc(100% - var(--bs-clip-btn)));
    transition: transform var(--bs-duration-base) ease, background-color var(--bs-duration-base) ease, border-color var(--bs-duration-base) ease;
  }

  .bs-hero-strip-card:hover {
    transform: translateY(-3px);
    background: var(--bs-hero-strip-bg-hover);
    border-color: var(--bs-hero-strip-border-hover);
  }

  .bs-service-card-link,
  .bs-related-card,
  .bs-location-card {
    display: block;
    background: var(--bs-service-card-bg);
    transition:
      transform var(--bs-duration-base) ease,
      box-shadow var(--bs-duration-base) ease,
      border-color var(--bs-duration-base) ease,
      background-color var(--bs-duration-base) ease;
  }

  .bs-service-card-link:hover,
  .bs-related-card:hover,
  .bs-location-card:hover {
    transform: translateY(-4px);
    box-shadow: var(--bs-shadow-card);
    border-color: var(--bs-border-hover-card);
  }

  .bs-related-card {
    border: 1px solid var(--bs-border);
    padding: 1.5rem;
    box-shadow: var(--bs-shadow-point);
  }

  .bs-related-card__eyebrow {
    display: inline-flex;
    padding: 0.4rem 0.7rem;
    border: 1px solid var(--bs-related-eyebrow-border);
    background: var(--bs-related-eyebrow-bg);
    color: var(--bs-accent);
    font-size: 0.72rem;
    font-weight: 800;
    letter-spacing: 0.18em;
    text-transform: uppercase;
  }

  .bs-faq summary::-webkit-details-marker {
    display: none;
  }

  .bs-faq summary {
    position: relative;
    padding-right: 3rem;
  }

  .bs-faq summary::after {
    content: "+";
    position: absolute;
    right: 1.5rem;
    top: 50%;
    transform: translateY(-50%);
    font-size: 1.6rem;
    line-height: 1;
    color: var(--bs-gold);
  }

  .bs-faq[open] summary::after {
    content: "–";
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

  .bs-btn-secondary-ghost {
    background: var(--bs-secondary-ghost-bg);
    border-color: var(--bs-secondary-ghost-border);
    box-shadow: var(--bs-shadow-point);
    clip-path: polygon(0 0, calc(100% - var(--bs-clip-btn)) 0, 100% var(--bs-clip-btn), 100% 100%, var(--bs-clip-btn) 100%, 0 calc(100% - var(--bs-clip-btn)));
  }

  .bs-btn-secondary-ghost:hover {
    background: var(--bs-surface);
    border-color: var(--bs-secondary-ghost-border-hover);
    color: var(--bs-primary);
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

  .bs-final-cta-shell {
    border: 1px solid var(--bs-border);
    background: var(--bs-card-soft-bg);
    padding: 1.25rem;
    box-shadow: var(--bs-shadow-card);
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

  @media (max-width: 1024px) {
    .bs-parallax-soft {
      transform: none !important;
    }
  }

  @media (max-width: 768px) {
    .bs-service-page br { display: none; }

    .bs-btn-primary,
    .bs-btn-secondary,
    .bs-btn-secondary-ghost,
    .bs-btn-outline-white,
    .bs-hero-strip-card {
      clip-path: none;
    }
  }

  @media (prefers-reduced-motion: reduce) {
    .bs-reveal-up,
    .bs-reveal-left,
    .bs-reveal-right,
    .bs-reveal-stagger,
    .bs-service-hero-image,
    .bs-btn,
    .bs-parallax-soft,
    .bs-related-card,
    .bs-location-card,
    .bs-hero-strip-card {
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

    const heroImage = document.querySelector(".bs-service-hero-image");
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

<script type="application/ld+json">
<?php
  $schema = [
    '@context' => 'https://schema.org',
    '@graph' => [
      [
        '@type' => 'LocalBusiness',
        '@id' => home_url('/#business'),
        'name' => 'Brilliant Star Cleaning Services',
        'url' => home_url('/'),
        'telephone' => '+1-858-255-1498',
        'email' => 'brilliantstarcleaning@gmail.com',
        'priceRange' => '$$',
        'areaServed' => [
          'San Diego',
          'Hillcrest',
          'North Park',
          'Mission Hills',
          'Del Mar',
          'Mira Mesa',
          'Mission Valley',
          'Kearny Mesa',
          'Mission Beach',
          'Ocean Beach',
          'University Heights',
          'South Park',
          'Otay Mesa'
        ],
        'openingHoursSpecification' => [
          [
            '@type' => 'OpeningHoursSpecification',
            'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday'],
            'opens' => '07:30',
            'closes' => '16:30',
          ],
          [
            '@type' => 'OpeningHoursSpecification',
            'dayOfWeek' => 'Friday',
            'opens' => '07:30',
            'closes' => '16:00',
          ],
        ],
        'aggregateRating' => [
          '@type' => 'AggregateRating',
          'ratingValue' => '4.5',
          'reviewCount' => '54'
        ],
        'sameAs' => [
          'https://www.yelp.com/biz/brilliant-star-cleaning-san-diego'
        ]
      ],
      [
        '@type' => 'Service',
        '@id' => home_url('/services/move-in-cleaning/') . '#service',
        'name' => 'Move-In Cleaning Services in San Diego',
        'description' => 'Start fresh in your new San Diego home. Our move-in cleaning service details and disinfects every surface before you unpack.',
        'provider' => [
          '@type' => 'LocalBusiness',
          '@id' => home_url('/#business')
        ],
        'areaServed' => [
          '@type' => 'City',
          'name' => 'San Diego'
        ],
        'url' => home_url('/services/move-in-cleaning/')
      ]
    ]
  ];

  echo wp_json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
?>
</script>

<?php get_footer(); ?>