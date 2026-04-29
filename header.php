<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bs-body'); ?>>

<header class="bs-header js-bs-header">

    <!-- TOPBAR -->
    <div class="bs-topbar">
        <div class="bs-shell bs-shell--header">
            <div class="bs-topbar__inner">

                <!-- LEFT -->
                <div class="bs-topbar__left">
                    <a href="tel:+18582551498" class="bs-topbar__chip">
                        <span class="bs-topbar__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M6.62 10.79a15.54 15.54 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.02-.24c1.12.37 2.31.56 3.57.56a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1C10.51 21 3 13.49 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.26.19 2.45.56 3.57a1 1 0 0 1-.24 1.02l-2.2 2.2Z"/>
                            </svg>
                        </span>
                        <span>(858) 255-1498</span>
                    </a>

                    <a href="mailto:info@brilliantstarcleaningservices.com" class="bs-topbar__chip bs-topbar__chip--muted">
                        <span class="bs-topbar__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M4 5h16a2 2 0 0 1 2 2v.35l-10 6.25L2 7.35V7a2 2 0 0 1 2-2Zm18 4.72V17a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V9.72l9.47 5.92a1 1 0 0 0 1.06 0L22 9.72Z"/>
                            </svg>
                        </span>
                        <span>info@brilliantstarcleaningservices.com</span>
                    </a>
                </div>

                <!-- CENTER -->
                <div class="bs-topbar__center">
                    <span class="bs-topbar__pill">Licensed &amp; Insured</span>
                </div>

                <!-- RIGHT -->
                <div class="bs-topbar__right">
                    <div class="bs-topbar__socials">
                        <a href="#" class="bs-social-link" aria-label="Instagram" target="_blank" rel="noopener noreferrer">
                            <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M7.75 2h8.5A5.75 5.75 0 0 1 22 7.75v8.5A5.75 5.75 0 0 1 16.25 22h-8.5A5.75 5.75 0 0 1 2 16.25v-8.5A5.75 5.75 0 0 1 7.75 2Zm0 1.8A3.95 3.95 0 0 0 3.8 7.75v8.5a3.95 3.95 0 0 0 3.95 3.95h8.5a3.95 3.95 0 0 0 3.95-3.95v-8.5a3.95 3.95 0 0 0-3.95-3.95h-8.5Zm8.95 1.35a1.1 1.1 0 1 1 0 2.2 1.1 1.1 0 0 1 0-2.2ZM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10Zm0 1.8A3.2 3.2 0 1 0 12 15.2 3.2 3.2 0 0 0 12 8.8Z"/>
                            </svg>
                        </a>

                        <a href="#" class="bs-social-link" aria-label="Facebook" target="_blank" rel="noopener noreferrer">
                            <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M13.5 22v-8.2h2.75l.41-3.2H13.5V8.56c0-.93.26-1.56 1.59-1.56h1.7V4.14c-.29-.04-1.28-.14-2.43-.14-2.4 0-4.05 1.46-4.05 4.16v2.44H7.6v3.2h2.71V22h3.19Z"/>
                            </svg>
                        </a>
                    </div>

                    <a
                        href="https://www.yelp.com/biz/brilliant-star-cleaning-san-diego"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="bs-yelp-btn"
                        aria-label="Read Brilliant Star Cleaning Services reviews on Yelp"
                    >
                        <span class="bs-topbar__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12.94 3.56c-.28-.86-1.5-.86-1.78 0L9.3 9.38a1 1 0 0 1-.76.67l-6.01.88c-.89.13-1.26 1.22-.61 1.84l4.35 4.24a1 1 0 0 1 .29.88l-1.03 5.98c-.15.89.78 1.57 1.57 1.16l5.38-2.83a1 1 0 0 1 .93 0l5.38 2.83c.79.41 1.72-.27 1.57-1.16l-1.03-5.98a1 1 0 0 1 .29-.88l4.35-4.24c.65-.62.28-1.71-.61-1.84l-6.01-.88a1 1 0 0 1-.76-.67l-1.86-5.82Z"/>
                            </svg>
                        </span>
                        <span>Yelp Reviews</span>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <!-- NAV -->
    <div class="bs-nav-wrap js-bs-nav-wrap">
        <div class="bs-shell bs-shell--header">
            <div class="bs-nav">

                <!-- BRAND -->
                <div class="bs-brand">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="bs-brand__link" aria-label="Brilliant Star Cleaning Services Home">
                        <img
                            src="/wp-content/uploads/2026/04/IMG_0001-Photoroom-e1776218222537.png"
                            alt="Brilliant Star Cleaning Services"
                            class="bs-brand__logo"
                        >
                    </a>
                </div>

                <!-- MENU -->
                <nav class="bs-desktop-nav" aria-label="Primary navigation">
                    <ul class="bs-menu">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                        <li><a href="<?php echo esc_url(home_url('/about-us/')); ?>">About</a></li>

                        <li class="js-bs-dropdown bs-menu-item-has-children">
                            <button class="bs-menu__toggle js-bs-dropdown-toggle" aria-expanded="false" type="button">
                                Services <span class="bs-caret"></span>
                            </button>

                            <div class="bs-dropdown bs-dropdown--services">
                                <a href="<?php echo esc_url(home_url('/services/deep-cleaning/')); ?>">Deep Cleaning</a>
                                <a href="<?php echo esc_url(home_url('/services/residential-cleaning/')); ?>">Regular Cleaning</a>
                                <a href="<?php echo esc_url(home_url('/services/move-out-cleaning/')); ?>">Move-Out Cleaning</a>
                                <a href="<?php echo esc_url(home_url('/services/move-in-cleaning/')); ?>">Move-In Cleaning</a>
                                <a href="<?php echo esc_url(home_url('/services/post-construction-cleaning/')); ?>">Post-Construction</a>
                                <a href="<?php echo esc_url(home_url('/services/specialty-services/')); ?>">Specialty Services</a>
                            </div>
                        </li>

                        <li><a href="<?php echo esc_url(home_url('/service-areas/')); ?>">Service Areas</a></li>
                        <li><a href="<?php echo esc_url(home_url('/contact-us/')); ?>">Contact</a></li>
                    </ul>
                </nav>

                <!-- CTA -->
                <div class="bs-nav-cta">
                    <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="bs-btn bs-btn--primary">
                        Get Free Quote
                    </a>
                </div>

                <!-- MOBILE TOGGLE -->
                <button class="bs-nav-toggle js-bs-nav-toggle" aria-expanded="false" aria-label="Open menu" type="button">
                    <span></span><span></span><span></span>
                </button>

            </div>
        </div>
    </div>

    <!-- MOBILE PANEL -->
    <div class="bs-mobile-panel js-bs-mobile-panel" hidden>
        <div class="bs-shell">
            <nav class="bs-mobile-nav" aria-label="Mobile navigation">

                <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                <a href="<?php echo esc_url(home_url('/about-us/')); ?>">About</a>

                <div class="js-bs-mobile-group bs-mobile-group">
                    <button class="bs-mobile-group__toggle js-bs-mobile-group-toggle" aria-expanded="false" type="button">
                        Services <span class="bs-caret"></span>
                    </button>

                    <div class="bs-mobile-group__panel">
                        <a href="<?php echo esc_url(home_url('/services/residential-cleaning/')); ?>">Regular Cleaning</a>
                        <a href="<?php echo esc_url(home_url('/services/deep-cleaning/')); ?>">Deep Cleaning</a>
                        <a href="<?php echo esc_url(home_url('/services/move-out-cleaning/')); ?>">Move-Out Cleaning</a>
                        <a href="<?php echo esc_url(home_url('/services/move-in-cleaning/')); ?>">Move-In Cleaning</a>
                        <a href="<?php echo esc_url(home_url('/services/post-construction-cleaning/')); ?>">Post-Construction</a>
                        <a href="<?php echo esc_url(home_url('/services/specialty-services/')); ?>">Specialty Services</a>
                    </div>
                </div>

                <a href="<?php echo esc_url(home_url('/service-areas/')); ?>">Service Areas</a>
                <a href="<?php echo esc_url(home_url('/contact-us/')); ?>">Contact</a>

                <div class="bs-mobile-nav__cta">
                    <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="bs-btn bs-btn--primary bs-btn--full">
                        Get Free Quote
                    </a>
                </div>

            </nav>
        </div>
    </div>

</header>

<main>