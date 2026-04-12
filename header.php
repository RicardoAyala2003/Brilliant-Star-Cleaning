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

                <div class="bs-topbar__left">
                    <a href="tel:+18582551498" class="bs-topbar__link">
                        <span class="bs-topbar__dot" aria-hidden="true"></span>
                        <span>(858) 255-1498</span>
                    </a>

                    <a href="mailto:brilliantstarcleaning@gmail.com" class="bs-topbar__link bs-topbar__link--muted">
                        <span class="bs-topbar__dot" aria-hidden="true"></span>
                        <span>brilliantstarcleaning@gmail.com</span>
                    </a>
                </div>

                <div class="bs-topbar__right">
                    <span class="bs-topbar__pill">Licensed &amp; Insured</span>
                    <span class="bs-topbar__pill">4.5★ Yelp · 54 Reviews</span>
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

                        <div class="bs-brand__logo-wrap bs-brand__logo-wrap--mono">
                            <img 
                                src="<?php echo esc_url(get_template_directory_uri() . '/assets/logo-placeholder.svg'); ?>"
                                alt="Brilliant Star Cleaning Services"
                                class="bs-brand__logo bs-brand__logo--mono"
                            >
                        </div>

                        <div class="bs-brand__text bs-brand__text--navbar">
                            <strong>Brilliant Star</strong>
                            <em>Cleaning Services</em>
                        </div>

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
                                <a href="<?php echo esc_url(home_url('/services/residential-cleaning/')); ?>">Regular Cleaning</a>
                                <a href="<?php echo esc_url(home_url('/services/deep-cleaning/')); ?>">Deep Cleaning</a>
                                <a href="<?php echo esc_url(home_url('/services/move-out-cleaning/')); ?>">Move-Out Cleaning</a>
                                <a href="<?php echo esc_url(home_url('/services/move-in-cleaning/')); ?>">Move-In Cleaning</a>
                                <a href="<?php echo esc_url(home_url('/services/post-construction-cleaning/')); ?>">Post-Construction</a>
                                <a href="<?php echo esc_url(home_url('/services/specialty-services/')); ?>">Specialty Services</a>
                            </div>
                        </li>

                        <li><a href="<?php echo esc_url(home_url('/Service Areas/')); ?>">Service Areas</a></li>
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

                <a href="<?php echo esc_url(home_url('/Service Areas/')); ?>">Service Areas</a>
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