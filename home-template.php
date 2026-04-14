<?php
/**
 * Template Name: Home Template
 *
 * Homepage Brilliant Star Cleaning Services
 * Navbar y footer vienen de header.php / footer.php.
 */

get_header(); ?>

<main class="bs-home overflow-hidden bg-[var(--bs-bg)] text-[var(--bs-text)]">

  <?php
    $hero_image  = 'https://images.unsplash.com/photo-1581578731548-c64695cc6952?q=80&w=1600&auto=format&fit=crop';
    $about_image = 'https://images.unsplash.com/photo-1527515637462-cff94eecc1ac?q=80&w=1200&auto=format&fit=crop';

    $services = [
      [
        'title' => 'Regular Cleaning',
        'copy'  => 'Keep your home consistently clean, week after week. We handle the dusting, vacuuming, mopping, kitchen, and bathrooms — on your schedule.',
        'link'  => '/services/residential-cleaning/',
      ],
      [
        'title' => 'Deep Cleaning',
        'copy'  => 'A thorough clean that goes beyond the surface. Perfect for a fresh start or a seasonal reset. Includes areas that regular cleaning doesn\'t cover.',
        'link'  => '/services/deep-cleaning/',
      ],
      [
        'title' => 'Move-Out Cleaning',
        'copy'  => 'Leave your home spotless and move-out ready. We cover every corner — hard water, mold, appliances, cabinets, baseboards, and more.',
        'link'  => '/services/move-out-cleaning/',
      ],
      [
        'title' => 'Move-In Cleaning',
        'copy'  => 'Start fresh in your new home. We detail and disinfect every surface so you can move in with complete peace of mind.',
        'link'  => '/services/move-in-cleaning/',
      ],
      [
        'title' => 'Post-Construction Clean-Up',
        'copy'  => 'After a remodel, we handle the mess. We specialize in cleaning homes after small to mid-size renovation projects.',
        'link'  => '/services/post-construction-cleaning/',
      ],
      [
        'title' => 'Specialty Services',
        'copy'  => 'Have a unique situation? We offer specialty cleaning services upon request. Contact us to discuss what you need.',
        'link'  => '/services/specialty-services/',
      ],
    ];

    $locations = [
      ['name' => 'San Diego',          'link' => '/locations/san-diego/'],
      ['name' => 'Hillcrest',          'link' => '/locations/hillcrest/'],
      ['name' => 'North Park',         'link' => '/locations/north-park/'],
      ['name' => 'Mission Hills',      'link' => '/locations/mission-hills/'],
      ['name' => 'Del Mar',            'link' => '/locations/del-mar/'],
      ['name' => 'Mira Mesa',          'link' => '/locations/mira-mesa/'],
      ['name' => 'Mission Valley',     'link' => '/locations/mission-valley/'],
      ['name' => 'Kearny Mesa',        'link' => '/locations/kearny-mesa/'],
      ['name' => 'Mission Beach',      'link' => '/locations/mission-beach/'],
      ['name' => 'Ocean Beach',        'link' => '/locations/ocean-beach/'],
      ['name' => 'University Heights', 'link' => '/locations/university-heights/'],
      ['name' => 'South Park',         'link' => '/locations/south-park/'],
      ['name' => 'Otay Mesa',          'link' => '/locations/otay-mesa/'],
    ];

    $faqs = [
      [
        'q' => 'Do I need to be home during the cleaning?',
        'a' => 'Not at all. Many of our clients leave us access instructions and come home to a spotless space. We\'ll coordinate whatever works best for your schedule.',
      ],
      [
        'q' => 'How is my quote determined?',
        'a' => 'Every home is different, so we personalize every quote. We\'ll ask about your number of bedrooms and bathrooms, when your home was last professionally cleaned, and its overall condition — then give you a straightforward estimate. No surprises, ever.',
      ],
      [
        'q' => 'What\'s the difference between regular cleaning and deep cleaning?',
        'a' => 'Our regular cleaning covers all the essentials: dusting, vacuuming, mopping, kitchen surfaces, and bathrooms. Deep cleaning goes further — inside the fridge and oven, window seals, ceiling fans, and outdoor areas like patios and balconies.',
      ],
      [
        'q' => 'Do you bring your own cleaning supplies?',
        'a' => 'Yes. We arrive fully equipped with commercial-grade vacuums and professional cleaning products for every surface type — hardwood, tile, stone counters, and stainless steel. If you have allergies, a baby at home, or specific product preferences, just let us know and we\'ll accommodate you.',
      ],
      [
        'q' => 'Can I customize what gets cleaned?',
        'a' => 'Absolutely. We tailor every cleaning to your home and priorities. Just let us know your specific requests, preferences, or any areas that need extra attention when you book.',
      ],
      [
        'q' => 'Do you require the home to be empty for move-out cleanings?',
        'a' => 'Yes — for move-out cleanings, we ask that the property be vacant and all drawers and cabinets be empty. This allows our team to do a thorough, complete job.',
      ],
      [
        'q' => 'Are you licensed and insured?',
        'a' => 'Yes. Brilliant Star Cleaning Services is fully licensed in San Diego and insured, so you can feel completely comfortable having us in your home.',
      ],
    ];
  ?>

  <!-- HERO -->
  <section class="relative isolate overflow-hidden border-b border-[var(--bs-border)] bg-[var(--bs-primary)] text-white">
    <div class="absolute inset-0">
      <img src="<?php echo esc_url($hero_image); ?>" alt="Professional residential cleaning service in San Diego" class="bs-hero-image h-full w-full object-cover">
      <div class="absolute inset-0" style="background:var(--bs-hero-overlay)"></div>
      <div class="absolute inset-0" style="background:var(--bs-hero-glow-tl)"></div>
      <div class="absolute inset-0" style="background:var(--bs-hero-glow-br)"></div>
      <div class="absolute inset-y-0 left-[7%] hidden w-px bg-white/12 lg:block"></div>
      <div class="absolute inset-y-0 right-[11%] hidden w-px bg-white/10 lg:block"></div>
      <div class="absolute inset-x-0 top-0 h-px" style="background:var(--bs-hero-line-h)"></div>
      <div class="absolute bottom-0 left-0 right-0 h-28" style="background:var(--bs-hero-fade-b)"></div>
      <div class="absolute right-[-90px] top-[-70px] h-56 w-56 rotate-[18deg] border border-white/10"></div>
      <div class="absolute left-[-60px] bottom-[12%] h-40 w-40 rotate-[18deg] border border-white/8"></div>
    </div>

    <div class="relative z-10 mx-auto max-w-7xl px-4 py-16 lg:py-24">
      <div class="grid gap-10 lg:grid-cols-[1.02fr_0.98fr] lg:items-end">

        <div class="bs-reveal-up">
          <div class="max-w-3xl">
            <p class="inline-flex border border-white/18 bg-white/8 px-4 py-2 text-[11px] font-extrabold uppercase tracking-[0.24em] text-white/86 backdrop-blur-sm">
              Residential Cleaning San Diego
            </p>
            <h1 class="mt-6 max-w-[12ch] text-4xl font-semibold leading-[0.94] tracking-[-0.05em] text-white md:text-6xl xl:text-7xl">
              San Diego's Trusted Home Cleaning Experts — For Over 15 Years
            </h1>
            <p class="mt-6 max-w-2xl text-base leading-8 text-white/82 md:text-lg">
              Professional residential cleaning services that leave your home spotless, fresh, and completely stress-free. Serving San Diego and surrounding neighborhoods.
            </p>
            <div class="mt-8 flex flex-col gap-4 sm:flex-row">
              <a href="/contact-us/" class="bs-btn bs-btn-primary inline-flex items-center justify-center px-7 py-4 text-sm font-black uppercase tracking-[0.15em] text-white">Get Your Free Quote</a>
              <a href="#services" class="bs-btn bs-btn-outline-white inline-flex items-center justify-center px-7 py-4 text-sm font-black uppercase tracking-[0.15em] text-white">Explore Our Services</a>
            </div>
            <div class="mt-10 grid max-w-2xl gap-4 sm:grid-cols-2">
              <div class="bs-contact-panel border border-white/12 bg-white/10 px-5 py-4 backdrop-blur-sm">
                <p class="text-[10px] font-black uppercase tracking-[0.18em] text-white/66">Call Us</p>
                <a href="tel:+18582551498" class="mt-2 block text-lg font-extrabold tracking-[-0.02em] text-white transition hover:text-[var(--bs-gold)]">(858) 255-1498</a>
              </div>
              <div class="bs-contact-panel border border-white/12 bg-white/10 px-5 py-4 backdrop-blur-sm">
                <p class="text-[10px] font-black uppercase tracking-[0.18em] text-white/66">Email</p>
                <a href="mailto:brilliantstarcleaning@gmail.com" class="mt-2 block break-all text-base font-extrabold tracking-[-0.02em] text-white transition hover:text-[var(--bs-gold)]">brilliantstarcleaning@gmail.com</a>
              </div>
            </div>
          </div>
        </div>

        <div class="bs-reveal-right bs-sticky-form">
          <div id="bs-cta-home-root"></div>
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
                ['label' => 'Experience',   'value' => '15+ Years of Experience',    'color' => 'var(--bs-accent)'],
                ['label' => 'Trust',        'value' => 'Licensed & Insured',         'color' => 'var(--bs-primary)'],
                ['label' => 'Social Proof', 'value' => '4.5★ on Yelp · 54 Reviews',  'color' => 'var(--bs-gold)'],
                ['label' => 'Prepared',     'value' => 'Commercial-Grade Equipment', 'color' => 'var(--bs-accent)'],
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

  <!-- ABOUT SNAPSHOT -->
  <section class="bg-[var(--bs-bg)] pb-20 pt-24 lg:pb-24 lg:pt-28">
    <div class="mx-auto max-w-7xl px-4">
      <div class="grid gap-10 lg:grid-cols-[0.95fr_1.05fr] lg:items-center">
        <div class="bs-reveal-left">
          <div class="relative overflow-hidden border border-[var(--bs-border)] bg-white shadow-[var(--bs-shadow-card)]">
            <div class="absolute left-0 top-0 z-10 h-14 w-14 border-r border-b border-white/18 bg-[rgba(255,255,255,0.08)] backdrop-blur-sm"></div>
            <img src="<?php echo esc_url($about_image); ?>" alt="Brilliant Star Cleaning Services team" class="bs-parallax-soft h-[420px] w-full object-cover md:h-[520px]">
            <div class="absolute inset-x-0 bottom-0 h-40" style="background:var(--bs-img-fade-b)"></div>
            <div class="absolute bottom-5 left-5 border border-white/18 bg-white/12 px-4 py-3 backdrop-blur-sm">
              <p class="text-[10px] font-black uppercase tracking-[0.18em] text-white/72">Trusted Since</p>
              <p class="mt-1 text-lg font-extrabold text-white">2009</p>
            </div>
          </div>
        </div>
        <div class="bs-reveal-right">
          <p class="text-xs font-black uppercase tracking-[0.2em] text-[var(--bs-accent)]">About Brilliant Star</p>
          <h2 class="mt-4 max-w-[14ch] text-3xl font-semibold leading-[1.02] tracking-[-0.045em] text-[var(--bs-primary)] md:text-5xl">
            A Cleaning Company Built on Care, Expertise, and Attention to Detail
          </h2>
          <div class="mt-7 space-y-5 text-base leading-8 text-[var(--bs-text-soft)]">
            <p>At Brilliant Star Cleaning Services, we believe your home deserves more than just a surface clean. For over 15 years, our experienced San Diego team has been delivering exceptional residential cleaning — with the kind of attention to detail that makes a real difference.</p>
            <p>We arrive prepared with commercial-grade vacuums and professional cleaning products suited for every surface in your home: hardwood floors, tile, ceramic, stone countertops, and stainless steel appliances. Whatever your home needs, we come ready.</p>
            <p>Have allergies, a newborn, or specific preferences about cleaning products? Just tell us — we adapt to your household and make it work for you.</p>
          </div>
          <div class="mt-8 flex flex-wrap items-center gap-4">
            <a href="/about-us/" class="bs-btn bs-btn-secondary inline-flex items-center justify-center px-6 py-4 text-sm font-black uppercase tracking-[0.15em] text-white">Meet Our Team</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICES -->
  <section id="services" class="relative overflow-hidden border-y border-[var(--bs-border)] bg-white py-20 lg:py-24">
    <div class="absolute right-0 top-0 h-full w-full" style="background:var(--bs-services-glow)"></div>
    <div class="absolute left-[-80px] top-16 h-44 w-44 rotate-12 border border-[var(--bs-border)]"></div>
    <div class="absolute bottom-[-60px] right-10 h-36 w-36 border border-[var(--bs-gold)]/20"></div>
    <div class="relative mx-auto max-w-7xl px-4">
      <div class="grid gap-10 lg:grid-cols-[0.72fr_1.28fr] lg:items-start">
        <div class="bs-reveal-up lg:sticky lg:top-28">
          <p class="text-xs font-black uppercase tracking-[0.2em] text-[var(--bs-accent)]">What We Do</p>
          <h2 class="mt-4 text-3xl font-semibold leading-tight tracking-[-0.04em] text-[var(--bs-primary)] md:text-5xl">
            Cleaning Services Designed Around Your Home, Schedule, and Priorities
          </h2>
          <p class="mt-5 max-w-xl text-base leading-8 text-[var(--bs-text-soft)]">
            From weekly upkeep to a thorough move-out clean, every service we offer is tailored to your home's size, condition, and your specific preferences. Pricing is always personalized — because no two homes are the same.
          </p>
        </div>
        <div class="grid gap-5 md:grid-cols-2">
          <?php foreach ($services as $service) : ?>
            <article class="bs-reveal-stagger bs-service-card group relative overflow-hidden border border-[var(--bs-border)] bg-[linear-gradient(180deg,#ffffff_0%,#f8fbfd_100%)] p-6 shadow-[var(--bs-shadow-service)]">
              <div class="absolute inset-y-0 left-0 w-[3px] bg-[var(--bs-accent)] opacity-0 transition duration-[var(--bs-duration-card)] group-hover:opacity-100"></div>
              <div class="absolute -right-10 -top-10 h-24 w-24 rotate-12 border border-[var(--bs-border)] opacity-0 transition duration-[var(--bs-duration-card)] group-hover:opacity-100"></div>
              <div class="mb-6 flex items-center justify-between">
                <span class="bs-service-mark"></span>
                <span class="text-[11px] font-black uppercase tracking-[0.18em] text-[var(--bs-text-muted)]">Service</span>
              </div>
              <h3 class="max-w-[15ch] text-2xl font-semibold leading-tight tracking-[-0.03em] text-[var(--bs-primary)]">
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
    </div>
  </section>

  <!-- REVIEWS -->
  <section class="bg-[var(--bs-bg)] py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-4">
      <div class="bs-reveal-up mx-auto max-w-4xl text-center">
        <p class="text-xs font-black uppercase tracking-[0.2em] text-[var(--bs-accent)]">Reviews</p>
        <h2 class="mt-4 text-3xl font-semibold leading-tight tracking-[-0.04em] text-[var(--bs-primary)] md:text-5xl">What San Diego Homeowners Say About Us</h2>
        <p class="mt-5 text-base leading-8 text-[var(--bs-text-soft)]">Real homes. Real results. See why San Diego families have trusted Brilliant Star for over 15 years.</p>
      </div>
      <div class="mt-12 grid gap-6 lg:grid-cols-3">
        <article class="bs-reveal-stagger bs-hover-rise border border-[var(--bs-border)] bg-white p-7 shadow-[var(--bs-shadow-review)]">
          <div class="mb-5 flex items-center justify-between border-b border-[var(--bs-border)] pb-4">
            <span class="text-[11px] font-black uppercase tracking-[0.18em] text-[var(--bs-accent)]">Yelp Review</span>
            <span class="text-[var(--bs-gold)]">★★★★★</span>
          </div>
          <p class="text-base leading-8 text-[var(--bs-text-soft)]">"Belen and her team showed up on time and did a complete and thorough cleaning of my mom's 5-bedroom house. I am extremely pleased with the service and will definitely have them come back."</p>
          <p class="mt-5 text-xs font-black uppercase tracking-[0.16em] text-[var(--bs-primary)]">— Yelp Reviewer</p>
        </article>
        <article class="bs-reveal-stagger bs-hover-rise border border-[var(--bs-border)] bg-white p-7 shadow-[var(--bs-shadow-review)]">
          <div class="mb-5 flex items-center justify-between border-b border-[var(--bs-border)] pb-4">
            <span class="text-[11px] font-black uppercase tracking-[0.18em] text-[var(--bs-accent)]">Yelp Review</span>
            <span class="text-[var(--bs-gold)]">★★★★★</span>
          </div>
          <p class="text-base leading-8 text-[var(--bs-text-soft)]">"The team of Faby &amp; Amalia did an excellent job leaving the condo spotless, sparkling, and fresh smelling. Extremely recommend Brilliant Star for ALL your cleaning needs!"</p>
          <p class="mt-5 text-xs font-black uppercase tracking-[0.16em] text-[var(--bs-primary)]">— Yelp Reviewer</p>
        </article>
        <article class="bs-reveal-stagger bs-hover-rise border border-[var(--bs-border)] bg-white p-7 shadow-[var(--bs-shadow-review)]">
          <div class="mb-5 flex items-center justify-between border-b border-[var(--bs-border)] pb-4">
            <span class="text-[11px] font-black uppercase tracking-[0.18em] text-[var(--bs-accent)]">Yelp Review</span>
            <span class="text-[var(--bs-gold)]">★★★★★</span>
          </div>
          <p class="text-base leading-8 text-[var(--bs-text-soft)]">"Hired for a deep cleaning service and my expectations were exceeded! Everything was safe and clean. I felt like I was walking into a new home. Highly recommend!"</p>
          <p class="mt-5 text-xs font-black uppercase tracking-[0.16em] text-[var(--bs-primary)]">— Yelp Reviewer</p>
        </article>
      </div>
      <div class="bs-reveal-up mt-10 text-center">
        <a href="https://www.yelp.com/biz/brilliant-star-cleaning-san-diego" target="_blank" rel="noopener noreferrer" class="bs-btn bs-btn-secondary inline-flex items-center justify-center px-6 py-4 text-sm font-black uppercase tracking-[0.15em] text-white">
          Read All 54 Reviews on Yelp →
        </a>
      </div>
    </div>
  </section>

  <!-- SERVICE AREAS -->
  <section class="border-y border-[var(--bs-border)] bg-white py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-4">
      <div class="grid gap-10 lg:grid-cols-[0.78fr_1.22fr] lg:items-start">
        <div class="bs-reveal-up">
          <p class="text-xs font-black uppercase tracking-[0.2em] text-[var(--bs-accent)]">Service Areas</p>
          <h2 class="mt-4 text-3xl font-semibold leading-tight tracking-[-0.04em] text-[var(--bs-primary)] md:text-5xl">Serving San Diego &amp; Surrounding Neighborhoods</h2>
          <p class="mt-5 text-base leading-8 text-[var(--bs-text-soft)]">We proudly provide professional house cleaning services across San Diego and the surrounding communities, including Hillcrest, North Park, South Park, Mission Hills, Del Mar, Mira Mesa, Kearny Mesa, Mission Valley, Mission Beach, Ocean Beach, University Heights, and Otay Mesa.</p>
          <p class="mt-3 text-base leading-8 text-[var(--bs-text-soft)]">Don't see your neighborhood listed? Reach out — we may still be able to help.</p>
        </div>
        <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-3">
          <?php foreach ($locations as $location) : ?>
            <a href="<?php echo esc_url($location['link']); ?>" class="bs-reveal-stagger bs-location-card group flex min-h-[88px] items-center justify-between border border-[var(--bs-border)] bg-[linear-gradient(180deg,#ffffff_0%,#f7fbfd_100%)] px-5 py-4 shadow-[var(--bs-shadow-location)]">
              <div>
                <p class="text-[10px] font-black uppercase tracking-[0.18em] text-[var(--bs-text-muted)]">Location</p>
                <span class="mt-1 block font-black tracking-[-0.02em] text-[var(--bs-primary)]"><?php echo esc_html($location['name']); ?></span>
              </div>
              <span class="text-[var(--bs-accent)] transition group-hover:translate-x-1">→</span>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="bg-[var(--bs-bg)] py-20 lg:py-24">
    <div class="mx-auto max-w-5xl px-4">
      <div class="bs-reveal-up mx-auto max-w-3xl text-center">
        <p class="text-xs font-black uppercase tracking-[0.2em] text-[var(--bs-accent)]">FAQ</p>
        <h2 class="mt-4 text-3xl font-semibold leading-tight tracking-[-0.04em] text-[var(--bs-primary)] md:text-5xl">Common Questions, Clear Answers</h2>
      </div>
      <div class="mt-12 space-y-4">
        <?php foreach ($faqs as $faq) : ?>
          <details class="bs-reveal-stagger bs-faq-item group overflow-hidden border border-[var(--bs-border)] bg-white shadow-[var(--bs-shadow-faq)]">
            <summary class="flex cursor-pointer list-none items-center justify-between gap-5 px-6 py-5 text-left">
              <span class="text-lg font-semibold leading-7 tracking-[-0.02em] text-[var(--bs-primary)]"><?php echo esc_html($faq['q']); ?></span>
              <span class="shrink-0 text-2xl font-light text-[var(--bs-accent)] transition group-open:rotate-45">+</span>
            </summary>
            <div class="border-t border-[var(--bs-border)] px-6 pb-6 pt-4 text-base leading-8 text-[var(--bs-text-soft)]">
              <?php echo esc_html($faq['a']); ?>
            </div>
          </details>
        <?php endforeach; ?>
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
              Ready When You Are
            </p>

            <h2 class="mt-4 max-w-[14ch] text-3xl font-semibold leading-tight tracking-[-0.04em] text-[var(--bs-primary)] md:text-5xl">
              Give Your Home the Care It Deserves
            </h2>

            <p class="mt-5 max-w-2xl text-base leading-8 text-[var(--bs-text-soft)]">
              When you choose Brilliant Star, you're choosing a team that shows up on time, pays attention to every detail, and genuinely cares about the result. Let us take cleaning off your plate — so you can enjoy your home the way it was meant to be enjoyed.
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

    /* Colores base */
    --bs-primary:        #0b2538;
    --bs-primary-2:      #143a57;
    --bs-accent:         #4fb4e7;
    --bs-accent-hover:   #38a9df;
    --bs-gold:           #f4c542;
    --bs-gold-hover:     #e5b82f;

    /* Fondos y superficies */
    --bs-bg:             #f6fafc;
    --bs-surface:        #ffffff;
    --bs-surface-2:      #eef6fb;

    /* Texto */
    --bs-text:           #162635;
    --bs-text-soft:      rgba(22, 38, 53, 0.78);
    --bs-text-muted:     rgba(22, 38, 53, 0.54);

    /* Bordes */
    --bs-border:         rgba(11, 37, 56, 0.10);

    /* Sombras de componentes */
    --bs-shadow-card:            0 28px 70px rgba(11, 37, 56, 0.08);
    --bs-shadow-hero-form:       0 40px 90px rgba(0,   0,   0,   0.28);
    --bs-shadow-trust:           0 22px 60px rgba(11, 37, 56, 0.08);
    --bs-shadow-service:         0 18px 46px rgba(11, 37, 56, 0.06);
    --bs-shadow-review:          0 18px 48px rgba(11, 37, 56, 0.06);
    --bs-shadow-location:        0 12px 30px rgba(11, 37, 56, 0.04);
    --bs-shadow-faq:             0 12px 36px rgba(11, 37, 56, 0.05);

    /* Sombras hover */
    --bs-shadow-hover-rise:      0 18px 44px rgba(11, 37, 56, 0.10);
    --bs-shadow-hover-service:   0 28px 60px rgba(11, 37, 56, 0.10);
    --bs-shadow-hover-location:  0 20px 44px rgba(11, 37, 56, 0.08);
    --bs-shadow-hover-faq:       0 18px 42px rgba(11, 37, 56, 0.07);
    --bs-shadow-hover-faq-open:  0 20px 46px rgba(11, 37, 56, 0.08);

    /* Sombras de botones */
    --bs-shadow-btn-primary:         0 18px 38px rgba(79,  180, 231, 0.22);
    --bs-shadow-btn-primary-hover:   0 22px 44px rgba(79,  180, 231, 0.28);
    --bs-shadow-btn-secondary:       0 18px 38px rgba(11,  37,  56,  0.18);
    --bs-shadow-btn-secondary-hover: 0 24px 48px rgba(11,  37,  56,  0.22);
    --bs-shadow-btn-gold:            0 18px 38px rgba(244, 197, 66,  0.20);
    --bs-shadow-btn-gold-hover:      0 22px 44px rgba(244, 197, 66,  0.28);
    --bs-shadow-btn-white-hover:     0 18px 40px rgba(255, 255, 255, 0.10);

    /* Focus ring del input */
    --bs-input-focus-border: rgba(79, 180, 231, 0.55);
    --bs-input-focus-ring:   rgba(79, 180, 231, 0.12);

    /* Bordes hover de cards */
    --bs-border-hover-service:   rgba(79, 180, 231, 0.24);
    --bs-border-hover-location:  rgba(79, 180, 231, 0.34);
    --bs-border-hover-faq-open:  rgba(79, 180, 231, 0.24);

    /* Overlays del hero */
    --bs-hero-overlay: linear-gradient(92deg, rgba(8,27,42,0.95) 0%, rgba(8,27,42,0.88) 38%, rgba(8,27,42,0.56) 70%, rgba(8,27,42,0.26) 100%);
    --bs-hero-glow-tl: radial-gradient(circle at top left,     rgba(90,190,234,0.16), transparent 26%);
    --bs-hero-glow-br: radial-gradient(circle at bottom right, rgba(244,197,66,0.10), transparent 24%);
    --bs-hero-line-h:  linear-gradient(90deg, transparent, rgba(255,255,255,0.40), transparent);
    --bs-hero-fade-b:  linear-gradient(180deg, transparent, rgba(8,27,42,0.42));

    /* Overlays del final CTA */
    --bs-cta-glow-tl:  radial-gradient(circle at top left,     rgba(79,180,231,0.18), transparent 28%);
    --bs-cta-glow-br:  radial-gradient(circle at bottom right, rgba(244,197,66,0.14), transparent 26%);

    /* Glow decorativo de services */
    --bs-services-glow: radial-gradient(circle at top right,   rgba(79,180,231,0.08), transparent 22%);

    /* Fade inferior de imagen about */
    --bs-img-fade-b:   linear-gradient(180deg, transparent, rgba(11,37,56,0.46));

    --bs-cta-soft-glow-tl: radial-gradient(circle at top left, rgba(79,180,231,0.12), transparent 28%);
    --bs-cta-soft-glow-br: radial-gradient(circle at bottom right, rgba(244,197,66,0.10), transparent 24%);

    /* Clip-path offset para botones y form shell */
    --bs-clip-btn:     14px;
    --bs-clip-form:    18px;

    /* Timings de transicion */
    --bs-duration-fast:    0.24s;
    --bs-duration-base:    0.28s;
    --bs-duration-card:    0.30s;
    --bs-duration-faq:     0.25s;
    --bs-duration-reveal:  0.90s;
    --bs-duration-float:   6s;
    --bs-duration-zoom:    16s;
    --bs-duration-pulse:   2.8s;
    --bs-trust-marquee-duration: 26s;
  }

  /* Tipografia */
  .bs-home { font-family: "Inter", "Segoe UI", Arial, sans-serif; }
  .bs-home h1, .bs-home h2, .bs-home h3, .bs-home h4 {
    font-family: "Playfair Display", Georgia, serif;
    font-weight: 700;
    letter-spacing: -0.02em;
  }
  .bs-home p, .bs-home a, .bs-home li, .bs-home input,
  .bs-home textarea, .bs-home select, .bs-home button,
  .bs-home label, .bs-home summary, .bs-home span {
    font-family: "Inter", "Segoe UI", Arial, sans-serif;
  }

  /* Hero image */
  .bs-hero-image {
    transform: scale(1.08);
    animation: bsHeroZoom var(--bs-duration-zoom) ease-out forwards;
    will-change: transform;
  }

  /* Form shell - con soporte para sticky panel */
  .bs-form-shell {
    backdrop-filter: blur(8px);
    clip-path: polygon(0 0, calc(100% - var(--bs-clip-form)) 0, 100% var(--bs-clip-form), 100% 100%, var(--bs-clip-form) 100%, 0 calc(100% - var(--bs-clip-form)));
    animation: bsFloatCard var(--bs-duration-float) ease-in-out infinite;
  }

  /* Sticky form panel (lo que pide el brief) */
  .bs-sticky-form {
    position: sticky;
    top: 100px;
    z-index: 10;
  }

  /* Contact panels */
  .bs-contact-panel {
    clip-path: polygon(0 0, calc(100% - var(--bs-clip-btn)) 0, 100% var(--bs-clip-btn), 100% 100%, var(--bs-clip-btn) 100%, 0 calc(100% - var(--bs-clip-btn)));
    transition: transform var(--bs-duration-base) ease, border-color var(--bs-duration-base) ease, background-color var(--bs-duration-base) ease;
  }
  .bs-contact-panel:hover {
    transform: translateY(-3px);
    border-color: rgba(255,255,255,0.24);
    background: rgba(255,255,255,0.14);
  }

  /* Trust bar dot */
  .bs-chip-icon {
    display: inline-block;
    width: 13px; height: 13px;
    flex: 0 0 auto;
    animation: bsPulseDot var(--bs-duration-pulse) ease-in-out infinite;
  }

  /* Trust marquee */
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

  /* Service card mark */
  .bs-service-mark {
    display: inline-block;
    width: 58px; height: 10px;
    background: linear-gradient(90deg, var(--bs-accent), var(--bs-gold));
  }

  /* Inputs */
  .bs-input {
    width: 100%;
    border: 1px solid var(--bs-border);
    background: var(--bs-surface);
    padding: 0.95rem 1rem;
    font-size: 0.95rem;
    line-height: 1.4;
    color: var(--bs-text);
    outline: none;
    transition: border-color var(--bs-duration-fast) ease, box-shadow var(--bs-duration-fast) ease, transform var(--bs-duration-fast) ease;
  }
  .bs-input:focus {
    border-color: var(--bs-input-focus-border);
    box-shadow: 0 0 0 4px var(--bs-input-focus-ring);
    transform: translateY(-1px);
  }

  /* Boton base */
  .bs-btn {
    position: relative; overflow: hidden;
    border: 1px solid transparent;
    transition: transform var(--bs-duration-fast) ease, box-shadow var(--bs-duration-fast) ease, background-color var(--bs-duration-fast) ease, border-color var(--bs-duration-fast) ease, color var(--bs-duration-fast) ease;
    will-change: transform;
  }
  .bs-btn::before {
    content: ""; position: absolute; inset: 0; opacity: 0;
    background: radial-gradient(circle at center, rgba(255,255,255,0.18), transparent 60%);
    transition: opacity var(--bs-duration-fast) ease;
  }
  .bs-btn::after {
    content: ""; position: absolute; inset: 0;
    transform: translateX(-110%);
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.18), transparent);
    transition: transform 0.7s ease;
  }
  .bs-btn:hover::before { opacity: 1; }
  .bs-btn:hover::after  { transform: translateX(110%); }
  .bs-btn:hover         { transform: translateY(-2px); }

  .bs-btn-primary {
    background: var(--bs-accent); border-color: var(--bs-accent);
    box-shadow: var(--bs-shadow-btn-primary);
    clip-path: polygon(0 0, calc(100% - var(--bs-clip-btn)) 0, 100% var(--bs-clip-btn), 100% 100%, var(--bs-clip-btn) 100%, 0 calc(100% - var(--bs-clip-btn)));
  }
  .bs-btn-primary:hover {
    background: var(--bs-accent-hover); border-color: var(--bs-accent-hover);
    box-shadow: var(--bs-shadow-btn-primary-hover);
  }

  .bs-btn-secondary {
    background: var(--bs-primary); border-color: var(--bs-primary);
    box-shadow: var(--bs-shadow-btn-secondary);
    clip-path: polygon(0 0, calc(100% - var(--bs-clip-btn)) 0, 100% var(--bs-clip-btn), 100% 100%, var(--bs-clip-btn) 100%, 0 calc(100% - var(--bs-clip-btn)));
  }
  .bs-btn-secondary:hover {
    background: var(--bs-primary-2); border-color: var(--bs-primary-2);
    box-shadow: var(--bs-shadow-btn-secondary-hover);
  }

  .bs-btn-gold {
    background: var(--bs-gold); border-color: var(--bs-gold);
    box-shadow: var(--bs-shadow-btn-gold);
    clip-path: polygon(0 0, calc(100% - var(--bs-clip-btn)) 0, 100% var(--bs-clip-btn), 100% 100%, var(--bs-clip-btn) 100%, 0 calc(100% - var(--bs-clip-btn)));
  }
  .bs-btn-gold:hover {
    background: var(--bs-gold-hover); border-color: var(--bs-gold-hover);
    box-shadow: var(--bs-shadow-btn-gold-hover);
  }

  .bs-btn-outline-white {
    background: rgba(255,255,255,0.08); border-color: rgba(255,255,255,0.18);
    backdrop-filter: blur(8px);
    clip-path: polygon(0 0, calc(100% - var(--bs-clip-btn)) 0, 100% var(--bs-clip-btn), 100% 100%, var(--bs-clip-btn) 100%, 0 calc(100% - var(--bs-clip-btn)));
  }
  .bs-btn-outline-white:hover {
    background: var(--bs-surface); color: var(--bs-primary);
    box-shadow: var(--bs-shadow-btn-white-hover);
  }

  .bs-final-cta-shell {
    border: 1px solid var(--bs-border);
    background: linear-gradient(180deg, #ffffff 0%, #f8fbfd 100%);
    padding: 1.25rem;
    box-shadow: var(--bs-shadow-service);
  }

  /* Hover interactions */
  .bs-hover-rise {
    transition: transform var(--bs-duration-base) ease, box-shadow var(--bs-duration-base) ease, background-color var(--bs-duration-base) ease;
  }
  .bs-hover-rise:hover { transform: translateY(-4px); box-shadow: var(--bs-shadow-hover-rise); }

  .bs-service-card {
    transition: transform var(--bs-duration-card) ease, box-shadow var(--bs-duration-card) ease, border-color var(--bs-duration-card) ease, background var(--bs-duration-card) ease;
  }
  .bs-service-card:hover { transform: translateY(-6px); border-color: var(--bs-border-hover-service); box-shadow: var(--bs-shadow-hover-service); }

  .bs-location-card {
    transition: transform var(--bs-duration-base) ease, box-shadow var(--bs-duration-base) ease, border-color var(--bs-duration-base) ease, background-color var(--bs-duration-base) ease;
  }
  .bs-location-card:hover { transform: translateY(-5px); border-color: var(--bs-border-hover-location); box-shadow: var(--bs-shadow-hover-location); }

  .bs-faq-item {
    transition: transform var(--bs-duration-faq) ease, box-shadow var(--bs-duration-faq) ease, border-color var(--bs-duration-faq) ease;
  }
  .bs-faq-item:hover       { transform: translateY(-2px); box-shadow: var(--bs-shadow-hover-faq); }
  .bs-faq-item[open]       { border-color: var(--bs-border-hover-faq-open); box-shadow: var(--bs-shadow-hover-faq-open); }

  /* Scroll reveal */
  .bs-parallax-soft {
    transform: scale(1.02);
    transition: transform var(--bs-duration-reveal) ease;
    will-change: transform;
  }
  .bs-reveal-up, .bs-reveal-left, .bs-reveal-right, .bs-reveal-stagger {
    opacity: 0; will-change: opacity, transform;
    transition: opacity var(--bs-duration-reveal) cubic-bezier(.2,.7,.2,1), transform var(--bs-duration-reveal) cubic-bezier(.2,.7,.2,1);
  }
  .bs-reveal-up      { transform: translateY(34px); }
  .bs-reveal-left    { transform: translateX(-38px); }
  .bs-reveal-right   { transform: translateX(38px); }
  .bs-reveal-stagger { transform: translateY(26px); }
  .bs-reveal-up.is-visible, .bs-reveal-left.is-visible,
  .bs-reveal-right.is-visible, .bs-reveal-stagger.is-visible {
    opacity: 1; transform: translate(0,0);
  }

  summary::-webkit-details-marker { display: none; }

  @keyframes bsHeroZoom  { 0% { transform: scale(1.1); } 100% { transform: scale(1); } }
  @keyframes bsFloatCard { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-6px); } }
  @keyframes bsPulseDot  { 0%, 100% { transform: scale(1); opacity: 1; } 50% { transform: scale(1.14); opacity: .8; } }
  @keyframes bsTrustMarquee {
    0% { transform: translateX(0); }
    100% { transform: translateX(-33.333%); }
  }

  /* Mobile */
  @media (max-width: 1024px) {
    .bs-home .lg\:sticky { position: static !important; top: auto !important; }
    .bs-sticky-form { position: static !important; }
    .bs-form-shell { animation: none; }
  }

  @media (max-width: 768px) {
    .bs-home br { display: none; }
    .bs-form-shell, .bs-contact-panel,
    .bs-btn-primary, .bs-btn-secondary, .bs-btn-gold, .bs-btn-outline-white { clip-path: none; }

    .bs-trust-marquee-item {
      min-width: 260px;
      padding: 1rem 1.1rem;
    }

    .bs-final-cta-shell {
      padding: 1rem;
    }
  }

  @media (prefers-reduced-motion: reduce) {
    .bs-reveal-up, .bs-reveal-left, .bs-reveal-right, .bs-reveal-stagger,
    .bs-hero-image, .bs-btn, .bs-form-shell, .bs-chip-icon, .bs-parallax-soft,
    .bs-service-card, .bs-location-card, .bs-hover-rise, .bs-contact-panel, .bs-faq-item,
    .bs-sticky-form, .bs-trust-track {
      opacity: 1 !important; transform: none !important;
      transition: none !important; animation: none !important;
    }
  }
</style>

<!-- ================================================================
     SCHEMA MARKUP (LOCAL BUSINESS) - REQUERIDO POR EL BRIEF
     ================================================================ -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Brilliant Star Cleaning Services",
  "image": "<?php echo esc_url($hero_image); ?>",
  "telephone": "(858) 255-1498",
  "email": "brilliantstarcleaning@gmail.com",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "San Diego",
    "addressRegion": "CA",
    "addressCountry": "US"
  },
  "openingHours": ["Mo-Th 07:30-16:30", "Fr 07:30-16:00"],
  "priceRange": "$$",
  "areaServed": [
    "San Diego", "Hillcrest", "North Park", "Mission Hills", 
    "Del Mar", "Mira Mesa", "Mission Valley", "Kearny Mesa", 
    "Mission Beach", "Ocean Beach", "University Heights", 
    "South Park", "Otay Mesa"
  ],
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.5",
    "reviewCount": "54",
    "bestRating": "5",
    "worstRating": "1"
  },
  "url": "<?php echo esc_url(home_url('/')); ?>"
}
</script>

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

    const serviceSelect = document.getElementById("bs-service-select");
    const moveoutNotice = document.getElementById("bs-moveout-notice");
    if (serviceSelect && moveoutNotice) {
      const toggleNotice = () => moveoutNotice.classList.toggle("hidden", serviceSelect.value !== "move-out");
      serviceSelect.addEventListener("change", toggleNotice);
      toggleNotice();
    }

    const heroRoot = document.getElementById("bs-cta-home-root");
    const bottomRoot = document.getElementById("bs-cta-home-root-bottom");

    if (heroRoot && bottomRoot) {
      const syncBottomCta = () => {
        if (!heroRoot.innerHTML.trim()) return;
        bottomRoot.innerHTML = heroRoot.innerHTML;

        const ids = bottomRoot.querySelectorAll("[id]");
        ids.forEach((el, index) => {
          el.id = el.id + "-bottom-" + index;
        });

        const labels = bottomRoot.querySelectorAll("label[for]");
        labels.forEach((label, index) => {
          label.setAttribute("for", label.getAttribute("for") + "-bottom-" + index);
        });
      };

      const ctaObserver = new MutationObserver(() => {
        syncBottomCta();
      });

      ctaObserver.observe(heroRoot, {
        childList: true,
        subtree: true,
        attributes: true
      });

      const syncAttempts = [250, 700, 1400, 2400];
      syncAttempts.forEach((delay) => {
        setTimeout(syncBottomCta, delay);
      });
    }

    const heroImage     = document.querySelector(".bs-hero-image");
    const parallaxItems = document.querySelectorAll(".bs-parallax-soft");
    const handleParallax = () => {
      const scrolled = window.scrollY || window.pageYOffset;
      if (heroImage && scrolled < 900) {
        heroImage.style.transform = `translateY(${scrolled * 0.08}px) scale(1.04)`;
      }
      parallaxItems.forEach((item) => {
        const rect   = item.getBoundingClientRect();
        const offset = (window.innerHeight - rect.top) * 0.02;
        if (rect.top < window.innerHeight && rect.bottom > 0) {
          item.style.transform = `translateY(${Math.max(-8, Math.min(12, offset - 10))}px) scale(1.02)`;
        }
      });
    };
    let ticking = false;
    window.addEventListener("scroll", () => {
      if (!ticking) {
        window.requestAnimationFrame(() => { handleParallax(); ticking = false; });
        ticking = true;
      }
    }, { passive: true });
    handleParallax();
  });
</script>

<?php get_footer(); ?>