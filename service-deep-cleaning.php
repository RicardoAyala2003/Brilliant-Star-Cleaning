<?php
/**
 * Template Name: Deep Cleaning Service Template
 *
 * Deep Cleaning service page
 * Navbar y footer vienen de header.php / footer.php.
 */

get_header(); ?>

<main class="bs-service-page overflow-hidden bg-[var(--bs-bg)] text-[var(--bs-text)]">

  <?php
    // Images
    $hero_image   = 'https://images.unsplash.com/photo-1581578731548-c64695cc6952?q=80&w=1600&auto=format&fit=crop';
    $detail_image = 'https://images.unsplash.com/photo-1527515637462-cff94eecc1ac?q=80&w=1200&auto=format&fit=crop';

    // Included items
    $included = [
      'Everything in our regular cleaning',
      'Interior of the refrigerator',
      'Interior of the oven',
      'Window seals and sills',
      'Small patios and balconies',
      'Ceiling fans (within safe reach)',
      'Closets (available as an optional add-on)',
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
        'q' => 'What’s the difference between regular cleaning and deep cleaning?',
        'a' => 'Our regular cleaning covers all the essentials: dusting, vacuuming, mopping, kitchen surfaces, and bathrooms. Deep cleaning goes further — inside the fridge and oven, window seals, ceiling fans, and outdoor areas like patios and balconies.'
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
        alt="Deep cleaning service in a bright San Diego home"
        class="bs-service-hero-image h-full w-full object-cover"
      >

      <!-- overlay general -->
      <div class="absolute inset-0" style="background:var(--bs-hero-overlay-main)"></div>

      <!-- refuerzo de lectura lado izquierdo -->
      <div class="absolute inset-y-0 left-0 w-full lg:w-[62%]" style="background:var(--bs-hero-overlay-left)"></div>

      <!-- glow decorativo -->
      <div class="absolute left-[-100px] top-[-80px] h-72 w-72 rounded-full bg-[var(--bs-accent)]/12 blur-3xl"></div>
      <div class="absolute right-[-90px] top-[10%] h-80 w-80 rounded-full bg-[var(--bs-gold)]/10 blur-3xl"></div>
      <div class="absolute bottom-[-120px] left-[14%] h-72 w-72 rounded-full bg-white/6 blur-3xl"></div>

      <!-- líneas suaves -->
      <div class="absolute inset-x-0 top-0 h-px" style="background:var(--bs-hero-line-h)"></div>
      <div class="absolute bottom-0 left-0 right-0 h-28" style="background:var(--bs-hero-fade-b)"></div>

      <!-- detalle decorativo -->
      <div class="absolute right-[8%] top-[12%] hidden h-56 w-56 rotate-[18deg] border border-white/10 lg:block"></div>
    </div>

    <div class="relative z-10 mx-auto max-w-7xl px-4 py-16 lg:py-24">
      <div class="max-w-4xl">
        <p class="bs-reveal-up inline-flex border border-white/18 bg-white/8 px-4 py-2 text-[11px] font-extrabold uppercase tracking-[0.24em] text-white/86 backdrop-blur-sm">
          Deep Cleaning Services
        </p>

        <h1 class="bs-reveal-up mt-6 max-w-[13ch] text-4xl font-semibold leading-[0.95] tracking-[-0.05em] text-white md:text-6xl xl:text-7xl">
          Deep Cleaning Services in San Diego — Beyond the Surface
        </h1>

        <p class="bs-reveal-up mt-6 max-w-2xl text-base leading-8 text-white/82 md:text-lg">
          Sometimes your home needs more than a routine clean. Whether it's been a while since your last deep clean, you're welcoming guests, or you simply want a complete refresh, our deep cleaning service covers every detail — including the spots that often get overlooked.
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
          <p class="text-[10px] font-black uppercase tracking-[0.18em] text-white/62">Ideal For</p>
          <p class="mt-2 text-lg font-extrabold tracking-[-0.03em] text-white">A Complete Refresh Beyond Routine Cleaning</p>
        </div>

        <div class="bs-reveal-stagger bs-hero-strip-card">
          <p class="text-[10px] font-black uppercase tracking-[0.18em] text-white/62">What It Adds</p>
          <p class="mt-2 text-lg font-extrabold tracking-[-0.03em] text-white">Inside Appliances, Window Seals, Fans & More</p>
        </div>

        <div class="bs-reveal-stagger bs-hero-strip-card">
          <p class="text-[10px] font-black uppercase tracking-[0.18em] text-white/62">Best Use</p>
          <p class="mt-2 text-lg font-extrabold tracking-[-0.03em] text-white">A Great Starting Point or Seasonal Reset</p>
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
              alt="Detailed deep cleaning service in San Diego"
              class="bs-parallax-soft h-[380px] w-full object-cover md:h-[520px]"
            >
            <div class="absolute inset-x-0 bottom-0 h-36" style="background:var(--bs-img-fade-b)"></div>
          </div>
        </div>

        <div class="bs-reveal-right">
          <p class="text-xs font-black uppercase tracking-[0.2em] text-[var(--bs-accent)]">Detailed, Thorough, Refreshing</p>
          <h2 class="mt-4 max-w-[14ch] text-3xl font-semibold leading-tight tracking-[-0.04em] text-[var(--bs-primary)] md:text-5xl">
            A complete refresh for the areas routine cleaning can miss
          </h2>

          <div class="mt-7 space-y-5 text-base leading-8 text-[var(--bs-text-soft)]">
            <p>
              Sometimes your home needs more than everyday upkeep. Our deep cleaning service is designed for the moments when you want a true reset — whether it’s been a while since your last professional cleaning, you’re preparing for guests, or you simply want every detail addressed.
            </p>
            <p>
              We go beyond the essentials and focus on the spots that often get overlooked: inside the refrigerator and oven, window seals and sills, ceiling fans within safe reach, and small patios or balconies.
            </p>
            <p>
              Deep cleaning is the perfect starting point for new clients, and a great seasonal reset for existing ones. We personalize your quote based on your home’s size and current condition, so you know exactly what to expect.
            </p>
          </div>

          <div class="mt-8 flex flex-col gap-4 sm:flex-row">
            <a href="/contact-us/" class="bs-btn bs-btn-secondary inline-flex items-center justify-center px-7 py-4 text-sm font-black uppercase tracking-[0.15em] text-white">
              Request a Deep Cleaning Quote
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
    <div class="absolute bottom-[-60px] right-10 h-36 w-36 border border-[var(--bs-gold)]/20"></div>

    <div class="relative mx-auto max-w-7xl px-4">
      <div class="grid gap-10 lg:grid-cols-[0.84fr_1.16fr] lg:items-start">
        <div class="bs-reveal-left">
          <p class="text-xs font-black uppercase tracking-[0.2em] text-[var(--bs-accent)]">What’s Included</p>
          <h2 class="mt-4 max-w-[13ch] text-3xl font-semibold leading-tight tracking-[-0.04em] text-[var(--bs-primary)] md:text-5xl">
            What Deep Cleaning Adds Beyond Regular Service
          </h2>
        </div>

        <div class="grid gap-4 md:grid-cols-2">
          <?php foreach ($included as $item) : ?>
            <div class="bs-reveal-stagger border border-[var(--bs-border)] bg-[linear-gradient(180deg,#ffffff_0%,#f8fbfd_100%)] px-5 py-5 shadow-[var(--bs-shadow-point)]">
              <div class="flex items-start gap-4">
                <span class="mt-[7px] inline-block h-3 w-3 shrink-0 bg-[var(--bs-accent)]"></span>
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
        <div class="border-b border-[var(--bs-border)] bg-[linear-gradient(180deg,#ffffff_0%,#f3f7fa_100%)] px-6 py-6 md:px-8">
          <p class="text-xs font-black uppercase tracking-[0.18em] text-[var(--bs-accent)]">
            A Great Time for Deep Cleaning
          </p>
          <h2 class="mt-2 text-3xl font-semibold leading-tight tracking-[-0.03em] text-[var(--bs-primary)] md:text-4xl">
            The perfect starting point for new clients and seasonal resets
          </h2>
        </div>

        <div class="px-6 py-6 md:px-8 md:py-8">
          <p class="text-base leading-8 text-[var(--bs-text-soft)]">
            Deep cleaning is the perfect starting point for new clients, and a great seasonal reset for existing ones. Contact us for a personalized quote based on your home&apos;s size and current condition.
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
          Whether you need ongoing upkeep, move-related cleaning, or help after a renovation, we offer personalized service for every home.
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

        <a href="/services/move-out-cleaning/" class="bs-reveal-stagger bs-related-card">
          <span class="bs-related-card__eyebrow">Move-Out Cleaning</span>
          <h3 class="mt-3 text-2xl font-semibold tracking-[-0.03em] text-[var(--bs-primary)]">
            Move-Out Cleaning in San Diego
          </h3>
          <p class="mt-4 text-base leading-8 text-[var(--bs-text-soft)]">
            Leave your home spotless and move-out ready with a more detailed, whole-home cleaning approach.
          </p>
        </a>

        <a href="/services/move-in-cleaning/" class="bs-reveal-stagger bs-related-card">
          <span class="bs-related-card__eyebrow">Move-In Cleaning</span>
          <h3 class="mt-3 text-2xl font-semibold tracking-[-0.03em] text-[var(--bs-primary)]">
            Move-In Cleaning Services in San Diego
          </h3>
          <p class="mt-4 text-base leading-8 text-[var(--bs-text-soft)]">
            Start fresh in your new home with a detailed cleaning before you settle in.
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
    <div class="absolute left-[-70px] top-10 h-40 w-40 rotate-12 border border-[var(--bs-border)]/80"></div>
    <div class="absolute right-[-50px] bottom-10 h-32 w-32 rotate-12 border border-[var(--bs-gold)]/18"></div>

    <div class="relative mx-auto max-w-7xl px-4">
      <div class="grid gap-10 lg:grid-cols-[0.82fr_1.18fr] lg:items-start">
        <div class="bs-reveal-left">
          <p class="text-xs font-black uppercase tracking-[0.2em] text-[var(--bs-accent)]">
            Service Areas
          </p>

          <h2 class="mt-4 max-w-[14ch] text-3xl font-semibold leading-tight tracking-[-0.04em] text-[var(--bs-primary)] md:text-5xl">
            Deep Cleaning Services Across San Diego &amp; Nearby Neighborhoods
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
                class="bs-reveal-stagger bs-location-card block border border-[var(--bs-border)] bg-white px-5 py-5 shadow-[var(--bs-shadow-point)]"
              >
                <span class="text-[10px] font-black uppercase tracking-[0.18em] text-[var(--bs-accent)]">
                  Location Page
                </span>

                <h3 class="mt-3 text-2xl font-semibold leading-tight tracking-[-0.03em] text-[var(--bs-primary)]">
                  Deep Cleaning in <?php echo esc_html($area['name']); ?>
                </h3>

                <p class="mt-3 text-sm leading-7 text-[var(--bs-text-soft)]">
                  Explore deep cleaning services available in <?php echo esc_html($area['name']); ?>, San Diego.
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
  <section class="relative overflow-hidden border-t border-[var(--bs-border)] bg-[linear-gradient(180deg,#f7fbfd_0%,#eef6fb_100%)] py-20 lg:py-24">
    <div class="absolute inset-0" style="background:var(--bs-cta-soft-glow-tl)"></div>
    <div class="absolute inset-0" style="background:var(--bs-cta-soft-glow-br)"></div>
    <div class="absolute left-[-70px] top-10 h-36 w-36 rotate-12 border border-[var(--bs-border)]/80"></div>
    <div class="absolute right-[-40px] bottom-8 h-28 w-28 rotate-12 border border-[var(--bs-gold)]/20"></div>

    <div class="relative mx-auto max-w-7xl px-4">
      <div class="overflow-hidden border border-[var(--bs-border)] bg-white shadow-[var(--bs-shadow-card)]">
        <div class="grid gap-10 px-6 py-10 md:px-10 md:py-12 lg:grid-cols-[1fr_1fr] lg:items-center">
          <div class="bs-reveal-left">
            <p class="text-xs font-black uppercase tracking-[0.2em] text-[var(--bs-accent)]">
              Free Quote
            </p>

            <h2 class="mt-4 max-w-[14ch] text-3xl font-semibold leading-tight tracking-[-0.04em] text-[var(--bs-primary)] md:text-5xl">
              Ready for a deeper, more complete clean?
            </h2>

            <p class="mt-5 max-w-2xl text-base leading-8 text-[var(--bs-text-soft)]">
              Deep cleaning is the perfect starting point for new clients, and a great seasonal reset for existing ones. Contact us for a personalized quote based on your home&apos;s size and current condition.
            </p>

            <p class="mt-5 text-sm font-semibold text-[var(--bs-text-soft)]">
              Prefer to call?
              <a href="tel:+18582551498" class="text-[var(--bs-primary)] underline decoration-[var(--bs-accent)] underline-offset-4">
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
    /* Brand colors */
    --bs-primary: #0b2538;
    --bs-primary-2: #143a57;
    --bs-primary-3: #1a4a6c;
    --bs-accent: #4fb4e7;
    --bs-accent-hover: #38a9df;
    --bs-gold: #f4c542;
    --bs-hero-overlay-main: linear-gradient(
      90deg,
      rgba(11,37,56,0.72) 0%,
      rgba(11,37,56,0.62) 35%,
      rgba(11,37,56,0.50) 68%,
      rgba(11,37,56,0.42) 100%
    );

    --bs-hero-overlay-left: linear-gradient(
      90deg,
      rgba(11,37,56,0.92) 0%,
      rgba(11,37,56,0.86) 36%,
      rgba(11,37,56,0.66) 68%,
      rgba(11,37,56,0.00) 100%
    );

    --bs-hero-line-h: linear-gradient(90deg, transparent, rgba(255,255,255,0.28), transparent);
    --bs-hero-fade-b: linear-gradient(180deg, transparent, rgba(8,27,42,0.34));

    /* Surfaces */
    --bs-bg: #f6fafc;
    --bs-surface: #ffffff;
    --bs-surface-soft: #f8fbfd;
    --bs-surface-cta-1: #f7fbfd;
    --bs-surface-cta-2: #eef6fb;

    /* Text */
    --bs-text: #162635;
    --bs-text-soft: rgba(22, 38, 53, 0.78);

    /* Borders */
    --bs-border: rgba(11, 37, 56, 0.10);

    /* Shadows */
    --bs-shadow-card: 0 28px 70px rgba(11, 37, 56, 0.08);
    --bs-shadow-point: 0 12px 30px rgba(11, 37, 56, 0.04);
    --bs-shadow-btn-primary: 0 18px 38px rgba(79, 180, 231, 0.22);
    --bs-shadow-btn-primary-hover: 0 22px 44px rgba(79, 180, 231, 0.28);
    --bs-shadow-btn-secondary: 0 18px 38px rgba(11, 37, 56, 0.18);
    --bs-shadow-btn-secondary-hover: 0 24px 48px rgba(11, 37, 56, 0.22);
    --bs-shadow-btn-white-hover: 0 18px 40px rgba(255, 255, 255, 0.10);
    --bs-footer-top-shadow: 0 30px 70px rgba(11, 37, 56, 0.08);

    /* Decorative gradients */
    --bs-hero-line-h: linear-gradient(90deg, transparent, rgba(255,255,255,0.40), transparent);
    --bs-hero-fade-b: linear-gradient(180deg, transparent, rgba(8,27,42,0.42));
    --bs-services-glow: radial-gradient(circle at top right, rgba(79,180,231,0.08), transparent 22%);
    --bs-service-areas-glow: radial-gradient(circle at top left, rgba(79,180,231,0.08), transparent 24%);
    --bs-img-fade-b: linear-gradient(180deg, transparent, rgba(11,37,56,0.46));
    --bs-cta-soft-glow-tl: radial-gradient(circle at top left, rgba(79,180,231,0.12), transparent 28%);
    --bs-cta-soft-glow-br: radial-gradient(circle at bottom right, rgba(244,197,66,0.10), transparent 24%);
    --bs-footer-separator-line: linear-gradient(90deg, transparent 0%, rgba(11,37,56,0.10) 10%, rgba(79,180,231,0.55) 50%, rgba(11,37,56,0.10) 90%, transparent 100%);
    --bs-footer-separator-glow: radial-gradient(circle at center, rgba(79,180,231,0.14) 0%, rgba(79,180,231,0.05) 32%, transparent 72%);

    /* Motion / shape */
    --bs-clip-btn: 14px;
    --bs-duration-fast: 0.24s;
    --bs-duration-base: 0.28s;
    --bs-duration-reveal: 0.90s;
    --bs-duration-zoom: 16s;
  }

  .bs-service-page {
    position: relative;
    font-family: "Inter", "Segoe UI", Arial, sans-serif;
    box-shadow: var(--bs-footer-top-shadow);
    border-bottom: 1px solid rgba(11, 37, 56, 0.08);
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

  .bs-hero-strip-card {
    border: 1px solid rgba(255,255,255,0.12);
    background: rgba(255,255,255,0.09);
    backdrop-filter: blur(10px);
    padding: 1.15rem 1.1rem;
    clip-path: polygon(0 0, calc(100% - var(--bs-clip-btn)) 0, 100% var(--bs-clip-btn), 100% 100%, var(--bs-clip-btn) 100%, 0 calc(100% - var(--bs-clip-btn)));
    transition: transform var(--bs-duration-base) ease, background-color var(--bs-duration-base) ease, border-color var(--bs-duration-base) ease;
  }

  .bs-hero-strip-card:hover {
    transform: translateY(-3px);
    background: rgba(255,255,255,0.13);
    border-color: rgba(255,255,255,0.18);
  }

  .bs-related-card,
  .bs-location-card {
    display: block;
    border: 1px solid var(--bs-border);
    background: linear-gradient(180deg, var(--bs-surface) 0%, var(--bs-surface-soft) 100%);
    padding: 1.5rem;
    box-shadow: var(--bs-shadow-point);
    transition:
      transform var(--bs-duration-base) ease,
      box-shadow var(--bs-duration-base) ease,
      border-color var(--bs-duration-base) ease,
      background-color var(--bs-duration-base) ease;
  }

  .bs-related-card:hover,
  .bs-location-card:hover {
    transform: translateY(-4px);
    box-shadow: var(--bs-shadow-card);
    border-color: rgba(79, 180, 231, 0.28);
  }

  .bs-related-card__eyebrow {
    display: inline-flex;
    padding: 0.4rem 0.7rem;
    border: 1px solid rgba(79, 180, 231, 0.20);
    background: rgba(79, 180, 231, 0.08);
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
    color: var(--bs-accent);
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

  .bs-btn-secondary-ghost {
    background: rgba(255,255,255,0.75);
    border-color: var(--bs-border);
    box-shadow: var(--bs-shadow-point);
    clip-path: polygon(0 0, calc(100% - var(--bs-clip-btn)) 0, 100% var(--bs-clip-btn), 100% 100%, var(--bs-clip-btn) 100%, 0 calc(100% - var(--bs-clip-btn)));
  }

  .bs-btn-secondary-ghost:hover {
    background: var(--bs-surface);
    border-color: rgba(79,180,231,0.28);
    color: var(--bs-primary);
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
    background: linear-gradient(180deg, var(--bs-surface) 0%, var(--bs-surface-soft) 100%);
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

  .bs-footer-separator {
    position: relative;
    height: 92px;
    background: linear-gradient(180deg, rgba(246,250,252,0) 0%, rgba(234,244,250,0.72) 52%, rgba(246,250,252,0.22) 100%);
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
    .bs-service-page br { display: none; }

    .bs-btn-primary,
    .bs-btn-secondary,
    .bs-btn-secondary-ghost,
    .bs-btn-outline-white,
    .bs-hero-strip-card {
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
        '@id' => home_url('/services/deep-cleaning/') . '#service',
        'name' => 'Deep Cleaning Services in San Diego',
        'description' => 'Professional deep cleaning services in San Diego. We go beyond the surface — inside appliances, window seals, ceiling fans and more.',
        'provider' => [
          '@type' => 'LocalBusiness',
          '@id' => home_url('/#business')
        ],
        'areaServed' => [
          '@type' => 'City',
          'name' => 'San Diego'
        ],
        'url' => home_url('/services/deep-cleaning/')
      ]
    ]
  ];

  echo wp_json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
?>
</script>

<?php get_footer(); ?>