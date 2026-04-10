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
    $hero_image = 'https://images.unsplash.com/photo-1581578731548-c64695cc6952?q=80&w=1600&auto=format&fit=crop';
    $about_image = 'https://images.unsplash.com/photo-1527515637462-cff94eecc1ac?q=80&w=1200&auto=format&fit=crop';

    $services = [
      [
        'title' => 'Regular Cleaning',
        'copy'  => 'Keep your home consistently clean, week after week. We handle the dusting, vacuuming, mopping, kitchen, and bathrooms — on your schedule.',
        'link'  => '/services/residential-cleaning/',
      ],
      [
        'title' => 'Deep Cleaning',
        'copy'  => 'A thorough clean that goes beyond the surface. Perfect for a fresh start or a seasonal reset. Includes areas that regular cleaning doesn’t cover.',
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
      ['name' => 'San Diego', 'link' => '/locations/san-diego/'],
      ['name' => 'Hillcrest', 'link' => '/locations/hillcrest/'],
      ['name' => 'North Park', 'link' => '/locations/north-park/'],
      ['name' => 'Mission Hills', 'link' => '/locations/mission-hills/'],
      ['name' => 'Del Mar', 'link' => '/locations/del-mar/'],
      ['name' => 'Mira Mesa', 'link' => '/locations/mira-mesa/'],
      ['name' => 'Mission Valley', 'link' => '/locations/mission-valley/'],
      ['name' => 'Kearny Mesa', 'link' => '/locations/kearny-mesa/'],
      ['name' => 'Mission Beach', 'link' => '/locations/mission-beach/'],
      ['name' => 'Ocean Beach', 'link' => '/locations/ocean-beach/'],
      ['name' => 'University Heights', 'link' => '/locations/university-heights/'],
      ['name' => 'South Park', 'link' => '/locations/south-park/'],
      ['name' => 'Otay Mesa', 'link' => '/locations/otay-mesa/'],
    ];

    $faqs = [
      [
        'q' => 'Do I need to be home during the cleaning?',
        'a' => 'Not at all. Many of our clients leave us access instructions and come home to a spotless space. We’ll coordinate whatever works best for your schedule.',
      ],
      [
        'q' => 'How is my quote determined?',
        'a' => 'Every home is different, so we personalize every quote. We’ll ask about your number of bedrooms and bathrooms, when your home was last professionally cleaned, and its overall condition — then give you a straightforward estimate. No surprises, ever.',
      ],
      [
        'q' => 'What’s the difference between regular cleaning and deep cleaning?',
        'a' => 'Our regular cleaning covers all the essentials: dusting, vacuuming, mopping, kitchen surfaces, and bathrooms. Deep cleaning goes further — inside the fridge and oven, window seals, ceiling fans, and outdoor areas like patios and balconies.',
      ],
      [
        'q' => 'Do you bring your own cleaning supplies?',
        'a' => 'Yes. We arrive fully equipped with commercial-grade vacuums and professional cleaning products for every surface type — hardwood, tile, stone counters, and stainless steel. If you have allergies, a baby at home, or specific product preferences, just let us know and we’ll accommodate you.',
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
  <section class="relative isolate overflow-hidden border-b border-[var(--bs-border)] bg-[var(--bs-surface)]">
    <div class="absolute inset-0">
      <img
        src="<?php echo esc_url($hero_image); ?>"
        alt="Professional residential cleaning service in San Diego"
        class="bs-hero-image h-full w-full object-cover"
      >
      <div class="absolute inset-0 bg-[linear-gradient(135deg,rgba(8,26,43,0.88),rgba(8,26,43,0.64))]"></div>
      <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(91,192,235,0.18),transparent_35%)]"></div>
    </div>

    <div class="relative z-10 mx-auto grid min-h-[820px] max-w-7xl gap-10 px-4 py-16 lg:grid-cols-[1.05fr_0.95fr] lg:items-center lg:py-20">
      <div class="bs-reveal-up max-w-3xl">
        <p class="mb-4 inline-flex rounded-full border border-white/15 bg-white/8 px-4 py-2 text-[11px] font-black uppercase tracking-[0.2em] text-[var(--bs-white-soft)] backdrop-blur">
          15+ Years of Trusted Service
        </p>

        <h1 class="max-w-[14ch] text-4xl font-black leading-[1.02] tracking-[-0.04em] text-white md:text-6xl">
          San Diego’s Trusted Home Cleaning Experts — For Over 15 Years
        </h1>

        <p class="mt-6 max-w-2xl text-base leading-8 text-white/84 md:text-lg">
          Professional residential cleaning services that leave your home spotless, fresh, and completely stress-free.
          Serving San Diego and surrounding neighborhoods.
        </p>

        <div class="mt-8 flex flex-col gap-4 sm:flex-row">
          <a href="/contact-us/" class="bs-btn bs-btn-primary inline-flex items-center justify-center px-7 py-4 text-sm font-black uppercase tracking-[0.14em] text-white">
            Get Your Free Quote
          </a>

          <a href="#services" class="bs-btn bs-btn-outline inline-flex items-center justify-center px-7 py-4 text-sm font-black uppercase tracking-[0.14em] text-white">
            Explore Our Services
          </a>
        </div>

        <div class="mt-8 flex flex-wrap items-center gap-x-6 gap-y-3 text-sm font-semibold text-white/80">
          <a href="tel:+18582551498" class="transition hover:text-white">(858) 255-1498</a>
          <a href="mailto:brilliantstarcleaning@gmail.com" class="transition hover:text-white">brilliantstarcleaning@gmail.com</a>
        </div>
      </div>

      <!-- HERO FORM -->
      <div class="bs-reveal-right">
        <div class="overflow-hidden rounded-[28px] border border-white/14 bg-white p-6 shadow-[0_30px_80px_rgba(0,0,0,0.28)] md:p-7">
          <div class="mb-5">
            <p class="text-xs font-black uppercase tracking-[0.18em] text-[var(--bs-accent)]">
              Request a Quote
            </p>
            <h2 class="mt-2 text-2xl font-black leading-tight tracking-[-0.03em] text-[var(--bs-primary)]">
              Get a Free, Personalized Cleaning Quote
            </h2>
            <p class="mt-3 text-sm leading-7 text-[var(--bs-text-soft)]">
              Tell us about your home and we’ll follow up with a clear, honest estimate.
            </p>
          </div>

          <form class="grid gap-4">
            <div class="grid gap-4 md:grid-cols-2">
              <div>
                <label class="mb-2 block text-xs font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]">Full Name *</label>
                <input type="text" class="bs-input" placeholder="Your full name">
              </div>

              <div>
                <label class="mb-2 block text-xs font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]">Phone Number *</label>
                <input type="tel" class="bs-input" placeholder="(858) 255-1498">
              </div>
            </div>

            <div class="grid gap-4 md:grid-cols-2">
              <div>
                <label class="mb-2 block text-xs font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]">Email Address *</label>
                <input type="email" class="bs-input" placeholder="you@example.com">
              </div>

              <div>
                <label class="mb-2 block text-xs font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]">Service Requested *</label>
                <select class="bs-input">
                  <option value="">Select a service</option>
                  <option>Regular Cleaning</option>
                  <option>Deep Cleaning</option>
                  <option>Move-Out Cleaning</option>
                  <option>Move-In Cleaning</option>
                  <option>Post-Construction Clean-Up</option>
                  <option>Specialty / Other</option>
                </select>
              </div>
            </div>

            <div class="grid gap-4 md:grid-cols-2">
              <div>
                <label class="mb-2 block text-xs font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]">Bedrooms *</label>
                <input type="text" class="bs-input" placeholder="e.g. 3">
              </div>

              <div>
                <label class="mb-2 block text-xs font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]">Bathrooms *</label>
                <input type="text" class="bs-input" placeholder="e.g. 2">
              </div>
            </div>

            <div>
              <label class="mb-2 block text-xs font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]">Date of Last Professional Cleaning</label>
              <input type="text" class="bs-input" placeholder="Approximate date">
            </div>

            <div>
              <label class="mb-2 block text-xs font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]">Allergies or Chemical Preferences</label>
              <input type="text" class="bs-input" placeholder="No bleach, fragrance-free, eco-friendly, etc.">
            </div>

            <div>
              <label class="mb-2 block text-xs font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]">Special Requests or Additional Notes</label>
              <textarea rows="4" class="bs-input resize-none" placeholder="Tell us anything helpful about your home or cleaning needs"></textarea>
            </div>

            <div>
              <label class="mb-2 block text-xs font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]">Preferred Contact Method</label>
              <select class="bs-input">
                <option value="">Choose one</option>
                <option>Phone</option>
                <option>Email</option>
              </select>
            </div>

            <div class="rounded-[20px] border border-[var(--bs-accent)]/20 bg-[var(--bs-accent)]/6 px-4 py-3 text-sm leading-7 text-[var(--bs-text-soft)]">
              <strong class="text-[var(--bs-primary)]">Move-out notice:</strong>
              For move-out cleanings, the property must be vacant and all drawers/cabinets must be empty before our team arrives.
            </div>

            <label class="flex items-start gap-3 rounded-[18px] border border-[var(--bs-border)] px-4 py-3 text-sm leading-6 text-[var(--bs-text-soft)]">
              <input type="checkbox" class="mt-1 h-4 w-4 rounded border-[var(--bs-border)] text-[var(--bs-accent)]">
              <span>I agree to the <a href="/privacy-policy/" class="font-bold text-[var(--bs-primary)] underline">Privacy Policy</a> and <a href="/terms-and-conditions/" class="font-bold text-[var(--bs-primary)] underline">Terms &amp; Conditions</a>. *</span>
            </label>

            <button type="submit" class="bs-btn bs-btn-primary mt-1 inline-flex items-center justify-center px-6 py-4 text-sm font-black uppercase tracking-[0.14em] text-white">
              Request My Free Quote
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- TRUST BAR -->
  <section class="border-b border-[var(--bs-border)] bg-white">
    <div class="mx-auto max-w-7xl px-4 py-5">
      <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-4">
        <div class="bs-reveal-up flex items-center gap-3 rounded-[18px] border border-[var(--bs-border)] bg-[var(--bs-surface-2)] px-4 py-4">
          <span class="bs-dot bg-[var(--bs-accent)]"></span>
          <p class="text-sm font-extrabold text-[var(--bs-primary)]">15+ Years of Experience</p>
        </div>

        <div class="bs-reveal-up flex items-center gap-3 rounded-[18px] border border-[var(--bs-border)] bg-[var(--bs-surface-2)] px-4 py-4">
          <span class="bs-dot bg-[var(--bs-primary)]"></span>
          <p class="text-sm font-extrabold text-[var(--bs-primary)]">Licensed &amp; Insured</p>
        </div>

        <div class="bs-reveal-up flex items-center gap-3 rounded-[18px] border border-[var(--bs-border)] bg-[var(--bs-surface-2)] px-4 py-4">
          <span class="bs-dot bg-[var(--bs-gold)]"></span>
          <p class="text-sm font-extrabold text-[var(--bs-primary)]">4.5★ on Yelp · 54 Reviews</p>
        </div>

        <div class="bs-reveal-up flex items-center gap-3 rounded-[18px] border border-[var(--bs-border)] bg-[var(--bs-surface-2)] px-4 py-4">
          <span class="bs-dot bg-[var(--bs-accent-2)]"></span>
          <p class="text-sm font-extrabold text-[var(--bs-primary)]">Commercial-Grade Equipment</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ABOUT SNAPSHOT -->
  <section class="bg-[var(--bs-bg)] py-20 lg:py-24">
    <div class="mx-auto grid max-w-7xl gap-12 px-4 lg:grid-cols-[0.9fr_1.1fr] lg:items-center">
      <div class="bs-reveal-left relative overflow-hidden rounded-[30px] border border-[var(--bs-border)] bg-white shadow-[0_26px_70px_rgba(8,26,43,0.08)]">
        <img
          src="<?php echo esc_url($about_image); ?>"
          alt="Brilliant Star Cleaning Services team"
          class="h-[420px] w-full object-cover"
        >
        <div class="absolute inset-0 bg-[linear-gradient(180deg,rgba(8,26,43,0.02),rgba(8,26,43,0.22))]"></div>
      </div>

      <div class="bs-reveal-right">
        <p class="text-xs font-black uppercase tracking-[0.2em] text-[var(--bs-accent)]">
          About Brilliant Star
        </p>

        <h2 class="mt-4 max-w-[15ch] text-3xl font-black leading-[1.02] tracking-[-0.04em] text-[var(--bs-primary)] md:text-5xl">
          A Cleaning Company Built on Care, Expertise, and Attention to Detail
        </h2>

        <div class="mt-6 space-y-5 text-base leading-8 text-[var(--bs-text-soft)]">
          <p>
            At Brilliant Star Cleaning Services, we believe your home deserves more than just a surface clean.
            For over 15 years, our experienced San Diego team has been delivering exceptional residential cleaning —
            with the kind of attention to detail that makes a real difference.
          </p>

          <p>
            We arrive prepared with commercial-grade vacuums and professional cleaning products suited for every surface
            in your home: hardwood floors, tile, ceramic, stone countertops, and stainless steel appliances.
            Whatever your home needs, we come ready.
          </p>

          <p>
            Have allergies, a newborn, or specific preferences about cleaning products? Just tell us —
            we adapt to your household and make it work for you.
          </p>
        </div>

        <a href="/about-us/" class="mt-8 inline-flex items-center gap-2 border-b-2 border-[var(--bs-accent)] pb-1 text-sm font-black uppercase tracking-[0.14em] text-[var(--bs-accent)] transition hover:gap-3">
          Meet Our Team
          <span>→</span>
        </a>
      </div>
    </div>
  </section>

  <!-- SERVICES -->
  <section id="services" class="relative overflow-hidden border-y border-[var(--bs-border)] bg-white py-20 lg:py-24">
    <div class="absolute inset-y-0 right-0 w-[32%] bg-[linear-gradient(180deg,var(--bs-surface-2),transparent)]"></div>

    <div class="relative mx-auto max-w-7xl px-4">
      <div class="bs-reveal-up max-w-4xl">
        <p class="text-xs font-black uppercase tracking-[0.2em] text-[var(--bs-accent)]">
          What We Do
        </p>

        <h2 class="mt-4 text-3xl font-black leading-tight tracking-[-0.04em] text-[var(--bs-primary)] md:text-5xl">
          Cleaning Services Designed Around Your Home, Schedule, and Priorities
        </h2>

        <p class="mt-5 max-w-3xl text-base leading-8 text-[var(--bs-text-soft)]">
          From weekly upkeep to a thorough move-out clean, every service we offer is tailored to your home’s size,
          condition, and your specific preferences. Pricing is always personalized — because no two homes are the same.
        </p>
      </div>

      <div class="mt-12 grid gap-5 md:grid-cols-2 xl:grid-cols-3">
        <?php foreach ($services as $service) : ?>
          <article class="bs-reveal-stagger group overflow-hidden rounded-[26px] border border-[var(--bs-border)] bg-[var(--bs-surface)] p-6 shadow-[0_18px_42px_rgba(8,26,43,0.06)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_26px_54px_rgba(8,26,43,0.10)]">
            <div class="mb-5 flex items-center gap-3">
              <span class="h-11 w-11 rounded-2xl bg-[var(--bs-accent)]/12 ring-1 ring-[var(--bs-accent)]/18"></span>
              <span class="h-3 w-16 rounded-full bg-[var(--bs-accent)]"></span>
            </div>

            <h3 class="text-2xl font-black tracking-[-0.03em] text-[var(--bs-primary)]">
              <?php echo esc_html($service['title']); ?>
            </h3>

            <p class="mt-4 text-[15px] leading-8 text-[var(--bs-text-soft)]">
              <?php echo esc_html($service['copy']); ?>
            </p>

            <a href="<?php echo esc_url($service['link']); ?>" class="mt-6 inline-flex items-center gap-2 text-sm font-black uppercase tracking-[0.14em] text-[var(--bs-accent)] transition hover:gap-3">
              Learn More
              <span>→</span>
            </a>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- YELP REVIEWS -->
  <section class="bg-[var(--bs-bg)] py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-4">
      <div class="bs-reveal-up mx-auto max-w-4xl text-center">
        <p class="text-xs font-black uppercase tracking-[0.2em] text-[var(--bs-accent)]">
          Reviews
        </p>

        <h2 class="mt-4 text-3xl font-black leading-tight tracking-[-0.04em] text-[var(--bs-primary)] md:text-5xl">
          What San Diego Homeowners Say About Us
        </h2>

        <p class="mt-5 text-base leading-8 text-[var(--bs-text-soft)]">
          Real homes. Real results. See why San Diego families have trusted Brilliant Star for over 15 years.
        </p>
      </div>

      <div class="mt-12 grid gap-6 lg:grid-cols-3">
        <article class="bs-reveal-stagger rounded-[28px] border border-[var(--bs-border)] bg-white p-7 shadow-[0_18px_44px_rgba(8,26,43,0.06)]">
          <div class="mb-5 flex items-center justify-between">
            <span class="text-sm font-black uppercase tracking-[0.14em] text-[var(--bs-accent)]">Yelp Review</span>
            <span class="text-[var(--bs-gold)]">★★★★★</span>
          </div>
          <p class="text-base leading-8 text-[var(--bs-text-soft)]">
            “Belen and her team showed up on time and did a complete and thorough cleaning of my mom’s 5-bedroom house. I am extremely pleased with the service and will definitely have them come back.”
          </p>
          <p class="mt-5 text-xs font-black uppercase tracking-[0.16em] text-[var(--bs-primary)]">— Yelp Reviewer</p>
        </article>

        <article class="bs-reveal-stagger rounded-[28px] border border-[var(--bs-border)] bg-white p-7 shadow-[0_18px_44px_rgba(8,26,43,0.06)]">
          <div class="mb-5 flex items-center justify-between">
            <span class="text-sm font-black uppercase tracking-[0.14em] text-[var(--bs-accent)]">Yelp Review</span>
            <span class="text-[var(--bs-gold)]">★★★★★</span>
          </div>
          <p class="text-base leading-8 text-[var(--bs-text-soft)]">
            “The team of Faby &amp; Amalia did an excellent job leaving the condo spotless, sparkling, and fresh smelling. Extremely recommend Brilliant Star for ALL your cleaning needs!”
          </p>
          <p class="mt-5 text-xs font-black uppercase tracking-[0.16em] text-[var(--bs-primary)]">— Yelp Reviewer</p>
        </article>

        <article class="bs-reveal-stagger rounded-[28px] border border-[var(--bs-border)] bg-white p-7 shadow-[0_18px_44px_rgba(8,26,43,0.06)]">
          <div class="mb-5 flex items-center justify-between">
            <span class="text-sm font-black uppercase tracking-[0.14em] text-[var(--bs-accent)]">Yelp Review</span>
            <span class="text-[var(--bs-gold)]">★★★★★</span>
          </div>
          <p class="text-base leading-8 text-[var(--bs-text-soft)]">
            “Hired for a deep cleaning service and my expectations were exceeded! Everything was safe and clean. I felt like I was walking into a new home. Highly recommend!”
          </p>
          <p class="mt-5 text-xs font-black uppercase tracking-[0.16em] text-[var(--bs-primary)]">— Yelp Reviewer</p>
        </article>
      </div>

      <div class="bs-reveal-up mt-10 text-center">
        <a href="https://www.yelp.com/biz/brilliant-star-cleaning-san-diego" target="_blank" rel="noopener noreferrer" class="bs-btn bs-btn-secondary inline-flex items-center justify-center px-6 py-4 text-sm font-black uppercase tracking-[0.14em] text-white">
          Read All 54 Reviews on Yelp
        </a>
      </div>
    </div>
  </section>

  <!-- SERVICE AREAS -->
  <section class="border-y border-[var(--bs-border)] bg-white py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-4">
      <div class="bs-reveal-up max-w-4xl">
        <p class="text-xs font-black uppercase tracking-[0.2em] text-[var(--bs-accent)]">
          Service Areas
        </p>

        <h2 class="mt-4 text-3xl font-black leading-tight tracking-[-0.04em] text-[var(--bs-primary)] md:text-5xl">
          Serving San Diego &amp; Surrounding Neighborhoods
        </h2>

        <p class="mt-5 max-w-3xl text-base leading-8 text-[var(--bs-text-soft)]">
          We proudly provide professional house cleaning services across San Diego and the surrounding communities,
          including Hillcrest, North Park, South Park, Mission Hills, Del Mar, Mira Mesa, Kearny Mesa, Mission Valley,
          Mission Beach, Ocean Beach, University Heights, and Otay Mesa.
        </p>

        <p class="mt-3 text-base leading-8 text-[var(--bs-text-soft)]">
          Don’t see your neighborhood listed? Reach out — we may still be able to help.
        </p>
      </div>

      <div class="mt-12 grid gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        <?php foreach ($locations as $location) : ?>
          <a href="<?php echo esc_url($location['link']); ?>" class="bs-reveal-stagger group flex items-center justify-between rounded-[22px] border border-[var(--bs-border)] bg-[var(--bs-surface)] px-5 py-4 transition hover:-translate-y-1 hover:border-[var(--bs-accent)]/30 hover:shadow-[0_18px_40px_rgba(8,26,43,0.08)]">
            <span class="font-black tracking-[-0.02em] text-[var(--bs-primary)]">
              <?php echo esc_html($location['name']); ?>
            </span>
            <span class="text-[var(--bs-accent)] transition group-hover:translate-x-1">→</span>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="bg-[var(--bs-bg)] py-20 lg:py-24">
    <div class="mx-auto max-w-5xl px-4">
      <div class="bs-reveal-up mx-auto max-w-3xl text-center">
        <p class="text-xs font-black uppercase tracking-[0.2em] text-[var(--bs-accent)]">
          FAQ
        </p>

        <h2 class="mt-4 text-3xl font-black leading-tight tracking-[-0.04em] text-[var(--bs-primary)] md:text-5xl">
          Common Questions, Clear Answers
        </h2>
      </div>

      <div class="mt-12 space-y-4">
        <?php foreach ($faqs as $index => $faq) : ?>
          <details class="bs-reveal-stagger group overflow-hidden rounded-[22px] border border-[var(--bs-border)] bg-white p-0 shadow-[0_12px_34px_rgba(8,26,43,0.05)]">
            <summary class="flex cursor-pointer list-none items-center justify-between gap-5 px-6 py-5 text-left">
              <span class="text-lg font-black leading-7 tracking-[-0.02em] text-[var(--bs-primary)]">
                <?php echo esc_html($faq['q']); ?>
              </span>
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
  <section class="relative isolate overflow-hidden bg-[var(--bs-primary)] py-20 text-white lg:py-24">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(91,192,235,0.20),transparent_28%)]"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(247,180,52,0.14),transparent_26%)]"></div>

    <div class="relative mx-auto max-w-5xl px-4 text-center">
      <p class="bs-reveal-up text-xs font-black uppercase tracking-[0.2em] text-[var(--bs-white-soft)]">
        Final CTA
      </p>

      <h2 class="bs-reveal-up mt-4 text-3xl font-black leading-tight tracking-[-0.04em] md:text-5xl">
        Give Your Home the Care It Deserves
      </h2>

      <p class="bs-reveal-up mx-auto mt-6 max-w-3xl text-base leading-8 text-white/82">
        When you choose Brilliant Star, you’re choosing a team that shows up on time, pays attention to every detail,
        and genuinely cares about the result. Let us take cleaning off your plate — so you can enjoy your home the way it was meant to be enjoyed.
      </p>

      <div class="bs-reveal-up mt-8 flex flex-col items-center justify-center gap-4 sm:flex-row">
        <a href="/contact-us/" class="bs-btn bs-btn-gold inline-flex items-center justify-center px-7 py-4 text-sm font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]">
          Request a Free Quote
        </a>

        <a href="tel:+18582551498" class="bs-btn bs-btn-outline-white inline-flex items-center justify-center px-7 py-4 text-sm font-black uppercase tracking-[0.14em] text-white">
          Call (858) 255-1498
        </a>
      </div>

      <p class="bs-reveal-up mt-6 text-sm leading-7 text-white/72">
        Or call us directly: (858) 255-1498 — Mon–Fri 7:30 AM to 4:30 PM
      </p>
    </div>
  </section>
</main>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap');

  :root {
    --bs-primary: #0b2538;
    --bs-primary-2: #143a57;
    --bs-accent: #4fb4e7;
    --bs-accent-2: #35c3a5;
    --bs-gold: #f4c542;
    --bs-bg: #f7fafc;
    --bs-surface: #fdfefe;
    --bs-surface-2: #eef6fb;
    --bs-text: #152534;
    --bs-text-soft: rgba(21, 37, 52, 0.78);
    --bs-border: rgba(11, 37, 56, 0.10);
    --bs-white-soft: rgba(255,255,255,0.84);
    --bs-shadow: 0 24px 60px rgba(11, 37, 56, 0.08);
  }

  .bs-home {
    font-family: "Manrope", "Segoe UI", Arial, sans-serif;
  }

  .bs-home h1,
  .bs-home h2,
  .bs-home h3,
  .bs-home h4 {
    font-family: "Plus Jakarta Sans", "Segoe UI", Arial, sans-serif;
  }

  .bs-hero-image {
    transform: scale(1.06);
    animation: bsHeroZoom 14s ease-out forwards;
  }

  .bs-dot {
    display: inline-block;
    height: 12px;
    width: 12px;
    flex: 0 0 auto;
    border-radius: 999px;
  }

  .bs-input {
    width: 100%;
    border-radius: 18px;
    border: 1px solid var(--bs-border);
    background: #fff;
    padding: 0.95rem 1rem;
    font-size: 0.95rem;
    line-height: 1.4;
    color: var(--bs-text);
    outline: none;
    transition: border-color .2s ease, box-shadow .2s ease, transform .2s ease;
  }

  .bs-input:focus {
    border-color: rgba(79,180,231,0.55);
    box-shadow: 0 0 0 4px rgba(79,180,231,0.12);
  }

  .bs-btn {
    position: relative;
    overflow: hidden;
    border: 1px solid transparent;
    border-radius: 18px;
    transition: transform .22s ease, box-shadow .22s ease, background-color .22s ease, border-color .22s ease, color .22s ease;
  }

  .bs-btn::after {
    content: "";
    position: absolute;
    inset: 0;
    transform: translateX(-110%);
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.18), transparent);
    transition: transform .7s ease;
  }

  .bs-btn:hover::after {
    transform: translateX(110%);
  }

  .bs-btn:hover {
    transform: translateY(-2px);
  }

  .bs-btn-primary {
    background: var(--bs-accent);
    border-color: var(--bs-accent);
    box-shadow: 0 18px 38px rgba(79,180,231,0.24);
  }

  .bs-btn-primary:hover {
    background: #34a8df;
    border-color: #34a8df;
  }

  .bs-btn-secondary {
    background: var(--bs-primary);
    border-color: var(--bs-primary);
    box-shadow: 0 18px 38px rgba(11,37,56,0.20);
  }

  .bs-btn-secondary:hover {
    background: var(--bs-primary-2);
    border-color: var(--bs-primary-2);
  }

  .bs-btn-gold {
    background: var(--bs-gold);
    border-color: var(--bs-gold);
    box-shadow: 0 18px 38px rgba(244,197,66,0.22);
  }

  .bs-btn-gold:hover {
    background: #e4b52d;
    border-color: #e4b52d;
  }

  .bs-btn-outline {
    background: rgba(255,255,255,0.08);
    border-color: rgba(255,255,255,0.18);
    backdrop-filter: blur(8px);
  }

  .bs-btn-outline:hover {
    background: white;
    color: var(--bs-primary);
  }

  .bs-btn-outline-white {
    background: rgba(255,255,255,0.08);
    border-color: rgba(255,255,255,0.18);
    backdrop-filter: blur(8px);
  }

  .bs-btn-outline-white:hover {
    background: white;
    color: var(--bs-primary);
  }

  .bs-reveal-up,
  .bs-reveal-left,
  .bs-reveal-right,
  .bs-reveal-stagger {
    opacity: 0;
    will-change: opacity, transform;
    transition: opacity .85s ease, transform .85s ease;
  }

  .bs-reveal-up {
    transform: translateY(32px);
  }

  .bs-reveal-left {
    transform: translateX(-34px);
  }

  .bs-reveal-right {
    transform: translateX(34px);
  }

  .bs-reveal-stagger {
    transform: translateY(26px);
  }

  .bs-reveal-up.is-visible,
  .bs-reveal-left.is-visible,
  .bs-reveal-right.is-visible,
  .bs-reveal-stagger.is-visible {
    opacity: 1;
    transform: translate(0,0);
  }

  summary::-webkit-details-marker {
    display: none;
  }

  @keyframes bsHeroZoom {
    0% { transform: scale(1.08); }
    100% { transform: scale(1); }
  }

  @media (max-width: 768px) {
    .bs-home br {
      display: none;
    }
  }

  @media (prefers-reduced-motion: reduce) {
    .bs-reveal-up,
    .bs-reveal-left,
    .bs-reveal-right,
    .bs-reveal-stagger,
    .bs-hero-image,
    .bs-btn {
      opacity: 1 !important;
      transform: none !important;
      transition: none !important;
      animation: none !important;
    }
  }
</style>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const items = document.querySelectorAll(
      ".bs-reveal-up, .bs-reveal-left, .bs-reveal-right, .bs-reveal-stagger"
    );

    if (!items.length) return;

    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry, idx) => {
        if (entry.isIntersecting) {
          const delay = entry.target.classList.contains("bs-reveal-stagger") ? (idx % 8) * 55 : 0;
          setTimeout(() => {
            entry.target.classList.add("is-visible");
          }, delay);
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });

    items.forEach((item) => observer.observe(item));
  });
</script>

<?php get_footer(); ?>