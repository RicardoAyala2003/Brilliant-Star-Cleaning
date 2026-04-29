<?php
/**
 * Template Name: Terms & Conditions Template
 *
 * Terms & Conditions page for Brilliant Star Cleaning Services
 * Navbar y footer vienen de header.php / footer.php.
 */

add_filter('document_title_parts', function ($title) {
  $title['title'] = 'Terms and Conditions | Brilliant Star Cleaning Services San Diego';
  return $title;
});

add_action('wp_head', function () {
  if (is_page_template('template-terms-conditions.php')) {
    echo '<meta name="description" content="Review the terms and conditions for Brilliant Star Cleaning Services in San Diego, including our cancellation policy, service limitations, and mutual service agreement.">' . "\n";
  }
});

get_header(); ?>

<main class="bs-legal-page overflow-hidden bg-[var(--bs-bg)] text-[var(--bs-text)]">

  <!-- LEGAL HERO -->
  <section class="relative overflow-hidden border-b border-[var(--bs-border)] bg-[linear-gradient(135deg,var(--bs-primary)_0%,var(--bs-primary-2)_100%)] text-white">
    <div class="absolute inset-0 pointer-events-none">
      <div class="absolute inset-x-0 top-0 h-px" style="background:var(--bs-hero-line-h)"></div>
      <div class="absolute left-[-90px] top-[-70px] h-60 w-60 rounded-full bg-[rgba(79,180,231,0.13)] blur-3xl"></div>
      <div class="absolute right-[-110px] bottom-[-90px] h-72 w-72 rounded-full bg-[rgba(244,197,66,0.10)] blur-3xl"></div>
      <div class="absolute inset-0 bg-[radial-gradient(circle_at_70%_20%,rgba(255,255,255,0.08),transparent_32%)]"></div>
    </div>

    <div class="relative z-10 mx-auto max-w-6xl px-4 py-16 md:py-20 lg:py-24">
      <div class="bs-reveal-up max-w-3xl">
        <p class="text-[11px] font-black uppercase tracking-[0.22em] text-white/68">
          Legal / Brilliant Star Cleaning Services
        </p>

        <h1 class="mt-4 text-4xl font-semibold leading-[0.98] tracking-[-0.04em] text-white md:text-5xl lg:text-6xl">
          Terms and Conditions
        </h1>

        <p class="mt-5 max-w-2xl text-base leading-8 text-white/78 md:text-lg">
          Review the terms and conditions for Brilliant Star Cleaning Services in San Diego, including our
          cancellation policy, service limitations, and mutual service agreement.
        </p>
      </div>
    </div>
  </section>

  <!-- INTRO STRIP -->
  <section class="relative z-20 -mt-8 lg:-mt-10">
    <div class="mx-auto max-w-6xl px-4">
      <div class="grid gap-0 overflow-hidden border border-[var(--bs-border)] bg-white shadow-[var(--bs-shadow-trust)] md:grid-cols-3">
        <div class="bs-reveal-up flex items-center gap-4 border-b border-[var(--bs-border)] px-5 py-5 md:border-b-0 md:border-r">
          <span class="bs-chip-icon bg-[var(--bs-accent)]"></span>
          <div>
            <p class="text-[10px] font-black uppercase tracking-[0.18em] text-[var(--bs-text-muted)]">No Contracts</p>
            <p class="mt-1 text-sm font-extrabold text-[var(--bs-primary)]">Flexible service relationship</p>
          </div>
        </div>

        <div class="bs-reveal-up flex items-center gap-4 border-b border-[var(--bs-border)] px-5 py-5 md:border-b-0 md:border-r">
          <span class="bs-chip-icon bg-[var(--bs-primary)]"></span>
          <div>
            <p class="text-[10px] font-black uppercase tracking-[0.18em] text-[var(--bs-text-muted)]">24 Hours</p>
            <p class="mt-1 text-sm font-extrabold text-[var(--bs-primary)]">Cancellation notice policy</p>
          </div>
        </div>

        <div class="bs-reveal-up flex items-center gap-4 px-5 py-5">
          <span class="bs-chip-icon bg-[var(--bs-gold)]"></span>
          <div>
            <p class="text-[10px] font-black uppercase tracking-[0.18em] text-[var(--bs-text-muted)]">Safety First</p>
            <p class="mt-1 text-sm font-extrabold text-[var(--bs-primary)]">Clear service limitations</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTENT -->
  <section class="pb-20 pt-20 lg:pb-24 lg:pt-24">
    <div class="mx-auto max-w-6xl px-4">
      <div class="bs-reveal-up overflow-hidden border border-[var(--bs-border)] bg-white shadow-[var(--bs-shadow-card)]">
        <div class="px-6 py-8 md:px-10 md:py-12 lg:px-12">

          <div class="bs-legal-prose">

            <section id="no-long-term-contracts" class="bs-legal-section">
              <div class="bs-section-kicker">
                <span></span>
                <p>Service Agreement</p>
              </div>

              <h2>No Long-Term Contracts</h2>

              <p>
                At Brilliant Star Cleaning Services, we believe in earning your trust with every visit, not locking
                you into a commitment. There are no contracts required for any of our services. You are free to pause,
                reschedule, or discontinue services at any time.
              </p>

              <p>
                We reserve the same right. While we are committed to serving every client with the highest level of
                care and professionalism, we reserve the right to discontinue service to any client if our team members
                feel unsafe or uncomfortable in a particular environment. This decision will always be handled with
                respect and professionalism.
              </p>
            </section>

            <section id="cancellation-policy" class="bs-legal-section">
              <div class="bs-section-kicker">
                <span></span>
                <p>Scheduling</p>
              </div>

              <h2>Cancellation Policy</h2>

              <p>
                We ask that all cancellations or reschedules be made at least 24 hours in advance. Cancellations with
                less than 24 hours notice are subject to a $50 cancellation fee. We understand that emergencies happen.
                If you have an exceptional circumstance, please contact us directly and we will do our best to work
                with you.
              </p>
            </section>

            <section id="service-limitations" class="bs-legal-section">
              <div class="bs-section-kicker">
                <span></span>
                <p>Safety Guidelines</p>
              </div>

              <h2>Service Limitations</h2>

              <p>
                For the safety and well-being of our team, Brilliant Star Cleaning Services does not perform the
                following:
              </p>

              <ul>
                <li>
                  Cleaning at heights that cannot be safely reached from the floor or a standard step stool, including
                  high vaulted ceilings and elevated ceiling fans.
                </li>
                <li>
                  Moving or lifting heavy furniture or appliances.
                </li>
              </ul>

              <p>
                If your home has specific areas that may be affected by these limitations, please let us know in
                advance so we can plan accordingly.
              </p>
            </section>

            <section id="questions" class="bs-legal-section">
              <div class="bs-section-kicker">
                <span></span>
                <p>Contact</p>
              </div>

              <h2>Questions?</h2>

              <p>
                If you have any questions about our terms, please do not hesitate to reach out.
              </p>

              <div class="bs-legal-contact-card">
                <p>
                  <strong>Phone:</strong>
                  <a href="tel:+18582551498">(858) 255-1498</a>
                </p>
                <p>
                  <strong>Email:</strong>
                  <a href="mailto:info@brilliantstarcleaningservices.com">info@brilliantstarcleaningservices.com</a>
                </p>
              </div>
            </section>

          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="pb-20">
    <div class="mx-auto max-w-6xl px-4">
      <div class="overflow-hidden border border-[var(--bs-border)] bg-[linear-gradient(135deg,var(--bs-primary)_0%,var(--bs-primary-2)_100%)] px-6 py-10 text-white shadow-[var(--bs-shadow-card)] md:px-10">
        <div class="grid gap-8 lg:grid-cols-[1.2fr_0.8fr] lg:items-center">
          <div class="bs-reveal-left">
            <p class="text-[11px] font-black uppercase tracking-[0.20em] text-white/66">
              Brilliant Star Cleaning Services
            </p>

            <h2 class="mt-3 max-w-[13ch] text-3xl font-semibold leading-tight tracking-[-0.03em] text-white md:text-4xl">
              Need help with a quote?
            </h2>

            <p class="mt-4 max-w-2xl text-base leading-8 text-white/82">
              We keep pricing personalized, transparent, and pressure-free. Reach out and we'll help you choose
              the right cleaning service for your home.
            </p>
          </div>

          <div class="bs-reveal-right flex flex-col gap-4 sm:flex-row lg:justify-end">
            <a href="/contact-us/" class="bs-btn bs-btn-primary inline-flex items-center justify-center px-7 py-4 text-sm font-black uppercase tracking-[0.15em] text-white">
              Get a Free Quote
            </a>

            <a href="tel:+18582551498" class="bs-btn bs-btn-outline-white inline-flex items-center justify-center px-7 py-4 text-sm font-black uppercase tracking-[0.15em] text-white">
              Call Now
            </a>
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

    --bs-shadow-card:    0 28px 70px rgba(11, 37, 56, 0.08);
    --bs-shadow-trust:   0 22px 60px rgba(11, 37, 56, 0.08);
    --bs-shadow-service: 0 18px 46px rgba(11, 37, 56, 0.06);

    --bs-shadow-btn-primary: 0 18px 38px rgba(79, 180, 231, 0.22);
    --bs-shadow-btn-primary-hover: 0 22px 44px rgba(79, 180, 231, 0.28);
    --bs-shadow-btn-white-hover: 0 18px 40px rgba(255, 255, 255, 0.10);

    --bs-hero-line-h: linear-gradient(90deg, transparent, rgba(255,255,255,0.40), transparent);

    --bs-footer-separator-line: linear-gradient(90deg, transparent 0%, rgba(11,37,56,0.10) 10%, rgba(79,180,231,0.55) 50%, rgba(11,37,56,0.10) 90%, transparent 100%);
    --bs-footer-separator-glow: radial-gradient(circle at center, rgba(79,180,231,0.14) 0%, rgba(79,180,231,0.05) 32%, transparent 72%);

    --bs-clip-btn: 14px;
    --bs-duration-fast: 0.24s;
    --bs-duration-reveal: 0.90s;
    --bs-duration-pulse: 2.8s;
  }

  .bs-legal-page {
    position: relative;
    font-family: "Inter", "Segoe UI", Arial, sans-serif;
    box-shadow: 0 30px 70px rgba(11, 37, 56, 0.08);
    border-bottom: 1px solid rgba(11, 37, 56, 0.08);
  }

  .bs-legal-page h1,
  .bs-legal-page h2,
  .bs-legal-page h3,
  .bs-legal-page h4 {
    font-family: "Playfair Display", Georgia, serif;
    font-weight: 700;
    letter-spacing: -0.02em;
  }

  .bs-legal-page p,
  .bs-legal-page a,
  .bs-legal-page li,
  .bs-legal-page button,
  .bs-legal-page span {
    font-family: "Inter", "Segoe UI", Arial, sans-serif;
  }

  .bs-chip-icon {
    display: inline-block;
    width: 13px;
    height: 13px;
    flex: 0 0 auto;
    border-radius: 999px;
    animation: bsPulseDot var(--bs-duration-pulse) ease-in-out infinite;
  }

  .bs-section-kicker {
    display: inline-flex;
    align-items: center;
    gap: 0.65rem;
    margin-bottom: 0.85rem;
  }

  .bs-section-kicker span {
    width: 10px;
    height: 10px;
    border-radius: 999px;
    background: var(--bs-accent);
    box-shadow: 0 0 0 6px rgba(79, 180, 231, 0.12);
  }

  .bs-section-kicker p {
    margin: 0;
    font-size: 0.68rem;
    font-weight: 900;
    letter-spacing: 0.18em;
    text-transform: uppercase;
    color: var(--bs-accent);
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

  .bs-btn:hover::before {
    opacity: 1;
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
    box-shadow: var(--bs-shadow-btn-primary);
    clip-path: polygon(0 0, calc(100% - var(--bs-clip-btn)) 0, 100% var(--bs-clip-btn), 100% 100%, var(--bs-clip-btn) 100%, 0 calc(100% - var(--bs-clip-btn)));
  }

  .bs-btn-primary:hover {
    background: var(--bs-accent-hover);
    border-color: var(--bs-accent-hover);
    box-shadow: var(--bs-shadow-btn-primary-hover);
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

  .bs-legal-prose {
    color: var(--bs-text-soft);
    font-size: 1rem;
    line-height: 1.95;
  }

  .bs-legal-section {
    position: relative;
    padding: 0 0 2.35rem;
    margin-bottom: 2.35rem;
    border-bottom: 1px solid var(--bs-border);
  }

  .bs-legal-section:last-child {
    padding-bottom: 0;
    margin-bottom: 0;
    border-bottom: 0;
  }

  .bs-legal-prose h2 {
    margin-top: 0;
    margin-bottom: 1rem;
    font-size: 1.85rem;
    line-height: 1.15;
    color: var(--bs-primary);
    letter-spacing: -0.03em;
  }

  .bs-legal-prose p {
    margin: 0 0 1rem;
  }

  .bs-legal-prose ul {
    display: grid;
    gap: 0.85rem;
    margin: 1rem 0 1.25rem;
    padding: 0;
    list-style: none;
  }

  .bs-legal-prose li {
    position: relative;
    padding-left: 1.65rem;
    color: var(--bs-text-soft);
  }

  .bs-legal-prose li::before {
    content: "";
    position: absolute;
    left: 0;
    top: 0.78rem;
    width: 8px;
    height: 8px;
    border-radius: 999px;
    background: var(--bs-accent);
    box-shadow: 0 0 0 5px rgba(79, 180, 231, 0.10);
  }

  .bs-legal-prose a {
    color: var(--bs-primary);
    font-weight: 800;
    text-decoration: none;
  }

  .bs-legal-prose a:hover {
    color: var(--bs-accent);
  }

  .bs-legal-contact-card {
    margin-top: 1.25rem;
    border: 1px solid var(--bs-border);
    background:
      radial-gradient(circle at top right, rgba(79,180,231,0.10), transparent 34%),
      linear-gradient(180deg, #ffffff 0%, #f8fbfd 100%);
    padding: 1.35rem 1.35rem;
    box-shadow: var(--bs-shadow-service);
  }

  .bs-legal-contact-card p {
    margin-bottom: 0.55rem;
  }

  .bs-legal-contact-card p:last-child {
    margin-bottom: 0;
  }

  .bs-reveal-up,
  .bs-reveal-left,
  .bs-reveal-right {
    opacity: 0;
    will-change: opacity, transform;
    transition:
      opacity var(--bs-duration-reveal) cubic-bezier(.2,.7,.2,1),
      transform var(--bs-duration-reveal) cubic-bezier(.2,.7,.2,1);
  }

  .bs-reveal-up {
    transform: translateY(34px);
  }

  .bs-reveal-left {
    transform: translateX(-38px);
  }

  .bs-reveal-right {
    transform: translateX(38px);
  }

  .bs-reveal-up.is-visible,
  .bs-reveal-left.is-visible,
  .bs-reveal-right.is-visible {
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

  @keyframes bsPulseDot {
    0%, 100% {
      transform: scale(1);
      opacity: 1;
    }

    50% {
      transform: scale(1.14);
      opacity: .8;
    }
  }

  @media (max-width: 1024px) {
    .bs-btn-primary,
    .bs-btn-outline-white {
      clip-path: none;
    }
  }

  @media (max-width: 768px) {
    .bs-legal-page br {
      display: none;
    }

    .bs-legal-prose {
      font-size: 0.96rem;
      line-height: 1.85;
    }

    .bs-legal-prose h2 {
      font-size: 1.5rem;
    }

    .bs-legal-section {
      padding-bottom: 2rem;
      margin-bottom: 2rem;
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
    .bs-btn,
    .bs-chip-icon {
      opacity: 1 !important;
      transform: none !important;
      transition: none !important;
      animation: none !important;
    }
  }
</style>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const items = document.querySelectorAll(".bs-reveal-up, .bs-reveal-left, .bs-reveal-right");

    if (items.length) {
      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("is-visible");
            observer.unobserve(entry.target);
          }
        });
      }, { threshold: 0.14 });

      items.forEach((item) => observer.observe(item));
    }
  });
</script>

<?php get_footer(); ?>