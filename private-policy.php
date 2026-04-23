<?php
/**
 * Template Name: Privacy Policy Template
 *
 * Privacy Policy page for Brilliant Star Cleaning Services
 * Navbar y footer vienen de header.php / footer.php.
 */

get_header(); ?>

<main class="bs-legal-page overflow-hidden bg-[var(--bs-bg)] text-[var(--bs-text)]">

  <!-- SIMPLE DARK LEGAL HERO -->
<section class="relative overflow-hidden border-b border-[var(--bs-border)] bg-[linear-gradient(135deg,var(--bs-primary)_0%,var(--bs-primary-2)_100%)] text-white">
  <div class="absolute inset-0 pointer-events-none">
    <div class="absolute inset-x-0 top-0 h-px" style="background:var(--bs-hero-line-h)"></div>
    <div class="absolute left-[-80px] top-[-60px] h-56 w-56 rounded-full bg-[rgba(79,180,231,0.10)] blur-3xl"></div>
    <div class="absolute right-[-100px] bottom-[-80px] h-64 w-64 rounded-full bg-[rgba(244,197,66,0.08)] blur-3xl"></div>
  </div>

  <div class="relative z-10 mx-auto max-w-5xl px-4 py-16 md:py-20 lg:py-24">
    <div class="bs-reveal-up max-w-3xl">
      <p class="text-[11px] font-black uppercase tracking-[0.22em] text-white/68">
        Legal / Privacy Policy
      </p>

      <h1 class="mt-4 text-4xl font-semibold leading-[0.98] tracking-[-0.04em] text-white md:text-5xl lg:text-6xl">
        Privacy Policy
      </h1>

      <p class="mt-5 max-w-2xl text-base leading-8 text-white/78 md:text-lg">
        This Privacy Policy explains what information Brilliant Star Cleaning Services may collect through this website,
        how that information may be used, and the choices available to you when you contact us or request a quote.
      </p>

      <div class="mt-6 inline-flex items-center gap-3 border border-white/12 bg-white/8 px-4 py-3 text-sm text-white/82 backdrop-blur-sm">
        <span class="h-2.5 w-2.5 rounded-full bg-[var(--bs-accent)]"></span>
        <span><strong class="text-white">Effective Date:</strong> April 11, 2026</span>
      </div>
    </div>
  </div>
</section>

  <!-- INTRO STRIP -->
  <section class="relative z-20 -mt-8 lg:-mt-10">
    <div class="mx-auto max-w-7xl px-4">
      <div class="grid gap-0 overflow-hidden border border-[var(--bs-border)] bg-white shadow-[var(--bs-shadow-trust)] md:grid-cols-3">
        <div class="bs-reveal-up flex items-center gap-4 border-b border-[var(--bs-border)] px-5 py-5 md:border-b-0 md:border-r">
          <span class="bs-chip-icon bg-[var(--bs-accent)]"></span>
          <div>
            <p class="text-[10px] font-black uppercase tracking-[0.18em] text-[var(--bs-text-muted)]">Collected Info</p>
            <p class="mt-1 text-sm font-extrabold text-[var(--bs-primary)]">Quote request details</p>
          </div>
        </div>

        <div class="bs-reveal-up flex items-center gap-4 border-b border-[var(--bs-border)] px-5 py-5 md:border-b-0 md:border-r">
          <span class="bs-chip-icon bg-[var(--bs-primary)]"></span>
          <div>
            <p class="text-[10px] font-black uppercase tracking-[0.18em] text-[var(--bs-text-muted)]">Use</p>
            <p class="mt-1 text-sm font-extrabold text-[var(--bs-primary)]">Quotes, scheduling, support</p>
          </div>
        </div>

        <div class="bs-reveal-up flex items-center gap-4 px-5 py-5">
          <span class="bs-chip-icon bg-[var(--bs-gold)]"></span>
          <div>
            <p class="text-[10px] font-black uppercase tracking-[0.18em] text-[var(--bs-text-muted)]">Protection</p>
            <p class="mt-1 text-sm font-extrabold text-[var(--bs-primary)]">Reasonable safeguards</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTENT -->
  <section class="pb-20 pt-24 lg:pb-24 lg:pt-28">
    <div class="mx-auto max-w-7xl px-4">
      <div class="grid gap-10 lg:grid-cols-[0.78fr_1.22fr] lg:items-start">

        <!-- SIDEBAR -->
        <aside class="bs-reveal-left">
          <div class="sticky top-24 space-y-6">
            <div class="overflow-hidden border border-[var(--bs-border)] bg-white shadow-[var(--bs-shadow-card)]">
              <div class="border-b border-[var(--bs-border)] bg-[linear-gradient(180deg,#ffffff_0%,#f3f7fa_100%)] px-6 py-6">
                <p class="text-xs font-black uppercase tracking-[0.18em] text-[var(--bs-accent)]">On This Page</p>
                <h2 class="mt-2 text-2xl font-semibold leading-tight tracking-[-0.03em] text-[var(--bs-primary)]">
                  Privacy overview
                </h2>
              </div>

              <nav class="px-6 py-6">
                <ul class="space-y-3 text-sm font-semibold text-[var(--bs-text-soft)]">
                  <li><a href="#information-we-collect" class="hover:text-[var(--bs-accent)]">Information We Collect</a></li>
                  <li><a href="#how-we-use" class="hover:text-[var(--bs-accent)]">How We Use Information</a></li>
                  <li><a href="#sharing" class="hover:text-[var(--bs-accent)]">How Information May Be Shared</a></li>
                  <li><a href="#cookies" class="hover:text-[var(--bs-accent)]">Cookies & Analytics</a></li>
                  <li><a href="#retention" class="hover:text-[var(--bs-accent)]">Data Retention</a></li>
                  <li><a href="#security" class="hover:text-[var(--bs-accent)]">Data Security</a></li>
                  <li><a href="#rights" class="hover:text-[var(--bs-accent)]">Your Choices & Rights</a></li>
                  <li><a href="#third-party" class="hover:text-[var(--bs-accent)]">Third-Party Services</a></li>
                  <li><a href="#contact-us" class="hover:text-[var(--bs-accent)]">Contact Us</a></li>
                </ul>
              </nav>
            </div>

            <div class="overflow-hidden border border-[var(--bs-border)] bg-[linear-gradient(180deg,#ffffff_0%,#f8fbfd_100%)] p-6 shadow-[var(--bs-shadow-service)]">
              <p class="text-[11px] font-black uppercase tracking-[0.18em] text-[var(--bs-accent)]">Questions About Privacy?</p>
              <p class="mt-3 text-base leading-8 text-[var(--bs-text-soft)]">
                You can contact Brilliant Star Cleaning Services directly at
                <a href="mailto:info@brilliantstarcleaningservices.com" class="font-bold text-[var(--bs-primary)] hover:text-[var(--bs-accent)]">info@brilliantstarcleaningservices.com</a>
                or call
                <a href="tel:+18582551498" class="font-bold text-[var(--bs-primary)] hover:text-[var(--bs-accent)]">(858) 255-1498</a>.
              </p>
            </div>
          </div>
        </aside>

        <!-- MAIN CONTENT -->
        <div class="bs-reveal-right">
          <div class="overflow-hidden border border-[var(--bs-border)] bg-white shadow-[var(--bs-shadow-card)]">
            <div class="px-6 py-8 md:px-10 md:py-10">

              <div class="bs-legal-prose">
                <p><strong>Effective Date:</strong> April 11, 2026</p>

                <p>
                  Brilliant Star Cleaning Co LLC ("Brilliant Star Cleaning Services," "we," "our," or "us")
                  respects your privacy and is committed to handling personal information responsibly.
                  This Privacy Policy explains how we collect, use, store, and share information through
                  our website, including when you contact us, request a quote, call us, email us,
                  or otherwise interact with our services.
                </p>

                <h2 id="information-we-collect">1. Information We Collect</h2>
                <p>We may collect information you choose to provide directly to us, including:</p>
                <ul>
                  <li>Full name</li>
                  <li>Phone number</li>
                  <li>Email address</li>
                  <li>Requested service type</li>
                  <li>Number of bedrooms and bathrooms</li>
                  <li>Date of last professional cleaning</li>
                  <li>Allergies, fragrance or chemical preferences, and related service instructions</li>
                  <li>Special requests, scheduling details, and additional notes</li>
                  <li>Preferred contact method</li>
                </ul>

                <p>
                  We may also collect certain technical or usage information automatically when you visit the site,
                  such as browser type, device type, pages viewed, referral source, approximate location information,
                  and general website interaction data.
                </p>

                <h2 id="how-we-use">2. How We Use Your Information</h2>
                <p>We may use information we collect to:</p>
                <ul>
                  <li>Respond to quote requests and service inquiries</li>
                  <li>Communicate with you about appointments, availability, and requested services</li>
                  <li>Send confirmation messages or follow-up responses related to your inquiry</li>
                  <li>Customize recommendations and estimates based on your household needs</li>
                  <li>Improve website performance, usability, and customer experience</li>
                  <li>Maintain business records and support internal operations</li>
                  <li>Comply with legal obligations or enforce our policies when necessary</li>
                </ul>

                <h2 id="sharing">3. How Information May Be Shared</h2>
                <p>
                  We do not sell your personal information. We may share your information only in limited situations,
                  such as:
                </p>
                <ul>
                  <li>With service providers or website tools that help us operate the site, forms, hosting, analytics, or communications</li>
                  <li>When needed to respond to your request or provide customer support</li>
                  <li>When required by law, legal process, or to protect our rights, customers, or business operations</li>
                  <li>In connection with a business transfer, reorganization, or asset sale, if applicable</li>
                </ul>

                <h2 id="cookies">4. Cookies and Analytics</h2>
                <p>
                  Our website may use cookies, pixels, analytics tools, or similar technologies to understand website
                  usage, improve site functionality, and measure performance. These technologies may collect information
                  about your interaction with the site, such as pages visited, time on page, approximate location,
                  and general device information.
                </p>
                <p>
                  You can usually control cookies through your browser settings. Disabling certain cookies may affect
                  how parts of the website function.
                </p>

                <h2 id="retention">5. Data Retention</h2>
                <p>
                  We keep personal information only for as long as reasonably necessary for the purposes described in
                  this Privacy Policy, including responding to inquiries, maintaining records, improving services,
                  and complying with legal, tax, or operational obligations.
                </p>

                <h2 id="security">6. Data Security</h2>
                <p>
                  We use reasonable administrative, technical, and organizational safeguards designed to help protect
                  personal information from unauthorized access, disclosure, alteration, or destruction. However,
                  no method of internet transmission or electronic storage is completely secure, and we cannot
                  guarantee absolute security.
                </p>

                <h2 id="rights">7. Your Choices and Rights</h2>
                <p>
                  Depending on where you live, you may have certain rights regarding your personal information,
                  such as requesting access, correction, deletion, or limits on certain uses of your information.
                </p>
                <p>
                  If you would like to update your information, ask a question about our privacy practices,
                  or request that we review or delete information you previously submitted, please contact us using
                  the information below. We will review requests in accordance with applicable law.
                </p>

                <h2 id="third-party">8. Third-Party Services and Links</h2>
                <p>
                  This website may include links or embedded tools from third parties, such as maps, reviews,
                  analytics providers, social platforms, or other external services. When you interact with those
                  tools or leave our site, their own terms and privacy policies may apply.
                </p>
                <p>
                  We are not responsible for the privacy practices of third-party websites, services, or content
                  that we do not control.
                </p>

                <h2>9. Children's Privacy</h2>
                <p>
                  Our website and services are intended for general audiences and are not directed to children under
                  13. We do not knowingly collect personal information from children through this website. If you
                  believe a child may have submitted information to us, please contact us so we can review and remove
                  it if appropriate.
                </p>

                <h2>10. Policy Updates</h2>
                <p>
                  We may update this Privacy Policy from time to time to reflect operational, legal, or website changes.
                  When we do, the revised version will be posted on this page with an updated effective date.
                </p>

                <h2 id="contact-us">11. Contact Us</h2>
                <p>If you have questions about this Privacy Policy or our privacy practices, please contact:</p>

                <div class="bs-legal-contact-card">
                  <p><strong>Brilliant Star Cleaning Co LLC</strong></p>
                  <p>Email: <a href="mailto:info@brilliantstarcleaningservices.com">info@brilliantstarcleaningservices.com</a></p>
                  <p>Phone: <a href="tel:+18582551498">(858) 255-1498</a></p>
                  <p>Service Area: San Diego and surrounding neighborhoods</p>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="pb-20">
    <div class="mx-auto max-w-7xl px-4">
      <div class="overflow-hidden border border-[var(--bs-border)] bg-[linear-gradient(135deg,var(--bs-primary)_0%,var(--bs-primary-2)_100%)] px-6 py-10 text-white shadow-[var(--bs-shadow-card)] md:px-10">
        <div class="grid gap-8 lg:grid-cols-[1.2fr_0.8fr] lg:items-center">
          <div class="bs-reveal-left">
            <p class="text-[11px] font-black uppercase tracking-[0.20em] text-white/66">Brilliant Star Cleaning Services</p>
            <h2 class="mt-3 max-w-[12ch] text-3xl font-semibold leading-tight tracking-[-0.03em] text-white md:text-4xl">
              Need a quote instead?
            </h2>
            <p class="mt-4 max-w-2xl text-base leading-8 text-white/82">
              We keep pricing personalized, transparent, and pressure-free. Reach out and we'll help you find
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
    --bs-shadow-hover-rise: 0 18px 44px rgba(11, 37, 56, 0.10);
    --bs-shadow-btn-primary: 0 18px 38px rgba(79, 180, 231, 0.22);
    --bs-shadow-btn-primary-hover: 0 22px 44px rgba(79, 180, 231, 0.28);
    --bs-shadow-btn-white-hover: 0 18px 40px rgba(255, 255, 255, 0.10);
    --bs-footer-top-shadow: 0 30px 70px rgba(11, 37, 56, 0.08);

    --bs-hero-line-h: linear-gradient(90deg, transparent, rgba(255,255,255,0.40), transparent);
    --bs-hero-fade-b: linear-gradient(180deg, transparent, rgba(8,27,42,0.42));

    --bs-legal-hero-overlay: linear-gradient(92deg, rgba(8,27,42,0.88) 0%, rgba(8,27,42,0.76) 38%, rgba(8,27,42,0.46) 70%, rgba(8,27,42,0.24) 100%);
    --bs-legal-hero-glow-tl: radial-gradient(circle at top left, rgba(79,180,231,0.16), transparent 28%);
    --bs-legal-hero-glow-br: radial-gradient(circle at bottom right, rgba(244,197,66,0.10), transparent 24%);

    --bs-footer-separator-line: linear-gradient(90deg, transparent 0%, rgba(11,37,56,0.10) 10%, rgba(79,180,231,0.55) 50%, rgba(11,37,56,0.10) 90%, transparent 100%);
    --bs-footer-separator-glow: radial-gradient(circle at center, rgba(79,180,231,0.14) 0%, rgba(79,180,231,0.05) 32%, transparent 72%);

    --bs-clip-btn: 14px;
    --bs-duration-fast: 0.24s;
    --bs-duration-base: 0.28s;
    --bs-duration-reveal: 0.90s;
    --bs-duration-zoom: 16s;
    --bs-duration-pulse: 2.8s;
  }

  .bs-legal-page {
    position: relative;
    font-family: "Inter", "Segoe UI", Arial, sans-serif;
    box-shadow: var(--bs-footer-top-shadow);
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

  .bs-legal-hero-image {
    transform: scale(1.08);
    animation: bsHeroZoom var(--bs-duration-zoom) ease-out forwards;
    will-change: transform;
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

  .bs-legal-prose h2 {
    margin-top: 2.25rem;
    margin-bottom: 1rem;
    font-size: 1.75rem;
    line-height: 1.15;
    color: var(--bs-primary);
    letter-spacing: -0.03em;
  }

  .bs-legal-prose p {
    margin: 0 0 1rem;
  }

  .bs-legal-prose ul {
    margin: 0 0 1.25rem 1.2rem;
    padding: 0;
  }

  .bs-legal-prose li {
    margin-bottom: 0.5rem;
  }

  .bs-legal-prose a {
    color: var(--bs-primary);
    font-weight: 700;
    text-decoration: none;
  }

  .bs-legal-prose a:hover {
    color: var(--bs-accent);
  }

  .bs-legal-contact-card {
    margin-top: 1.25rem;
    border: 1px solid var(--bs-border);
    background: linear-gradient(180deg, #ffffff 0%, #f8fbfd 100%);
    padding: 1.25rem 1.25rem;
    box-shadow: var(--bs-shadow-service);
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

  .bs-reveal-up { transform: translateY(34px); }
  .bs-reveal-left { transform: translateX(-38px); }
  .bs-reveal-right { transform: translateX(38px); }

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

  @keyframes bsHeroZoom {
    0% { transform: scale(1.1); }
    100% { transform: scale(1); }
  }

  @keyframes bsPulseDot {
    0%, 100% { transform: scale(1); opacity: 1; }
    50% { transform: scale(1.14); opacity: .8; }
  }

  @media (max-width: 1024px) {
    .bs-btn-primary,
    .bs-btn-outline-white {
      clip-path: none;
    }
  }

  @media (max-width: 768px) {
    .bs-legal-page br { display: none; }

    .bs-legal-prose h2 {
      font-size: 1.45rem;
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
    .bs-legal-hero-image,
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

    const heroImage = document.querySelector(".bs-legal-hero-image");
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