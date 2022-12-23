<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light" id="navbar__main">
        <div class="container">
            <a class="navbar-brand logo-placeholder" href="#">LOGO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"
                id="hamburger__button">
                <span class="navbar-toggler-icon" id="hambvurger-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="#">what we do</a>
                    <a class="nav-link" href="#">people</a>
                    <a class="nav-link" href="#">insights</a>
                    <a id="lets-talk" class="nav-link" href="#">let's talk</a>
                </div>
            </div>
        </div>
    </nav>
    <header>
        <div class="text-container container">
            <h1 class="header__title">Strategic Consulting</br>
                and Technology Delivery</h1>
            <p class="header__subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</br>
                Phasellus tincidunt nulla eget lacinia cursus.</p>
        </div>
        <div class="video-overlay"></div>
        <!-- TODO: add support for video format for other browsers. 
        Set poster for browsers that does not support video, set img insted of video for mobile view. -->
        <video autoplay muted playsinline loop class="d-none d-md-block">
            <source src="wp-content\themes\ourCustomTheme\assets\videos\consulting-video-480.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <!--Import images with css and add overlay like here: https://stackoverflow.com/questions/18815157/how-to-overlay-image-with-color-in-css-->
        <img class="d-md-none"
            src="wp-content\themes\ourCustomTheme\assets\images\diverse-fashion-designers-in-a-meeting-2022-09-16-09-20-11-utc-min.jpg"
            alt="Image can't be loaded." id="hero-img">
    </header>
    <div class="our-culture">
        <div class="container">
            <div class="row">
                <div class="col-md" id="our-culture__text-placeholder">
                    <h2 class="our-culture__text-placeholder__title">Our Culture</h2>
                    <p class="our-culture__text-placeholder__text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam feugiat, nisi vitae
                        accumsan
                        dapibus,
                        nisi neque congue felis, in iaculis purus nisi nec dolor. Aenean quis lorem massa. Integer
                        scelerisque suscipit finibus. Morbi nec tellus non nisl varius interdum non nec sem.
                        </br></br>Interdum et malesuada fames ac ante ipsum primis in faucibus.
                        Aenean sed molestie diam. Cras vulputate dui arcu, ut pellentesque purus condimentum eget.
                        Cras suscipit purus turpis, vitae lacinia ex convallis id. Suspendisse tempor ipsum et
                        sagittis
                        maximus.
                    </p>
                </div>
                <div class="col-md" id="our-culture-image-placeholder">
                    <div id="c1">
                        <div class="image-container meeting-of-designer__container">
                        </div>
                    </div>
                    <div id="c2">
                        <div class="image-container gir-with-glasses__container">
                        </div>
                    </div>
                    <div id="c3">
                        <div class="image-container young-man-working__container">
                        </div>
                    </div>
                    <div id="c4">
                        <div class="image-container comment__container">
                            <img class="comment mtc__img-size comment__svg-position "
                                src="wp-content\themes\ourCustomTheme\assets\images\iconmonstr-speech-bubble-15.svg"
                                alt="Image can't be loaded.">
                            <img src="wp-content\themes\ourCustomTheme\assets\images\iconmonstr-quote-right-thin.svg"
                                alt="Image can't be loaded." id="svg-quote">
                            <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="more-then-consulting">
        <div class="container">
            <div class="row">
                <div class="col-md more-then-consulting__text-placeholder order-md-2">
                    <h2 class="more-then-consulting__title">
                        More Than Consulting
                    </h2>
                    <p class="more-then-consulting__text-placeholder__text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam feugiat, nisi vitae accumsan
                        dapibus,
                        nisi neque congue felis, in iaculis purus nisi nec dolor. Aenean quis lorem massa. Integer
                        scelerisque suscipit finibus. Morbi nec tellus non nisl varius interdum non nec sem.
                        <br>
                        <br>
                        Interdum et malesuada fames ac ante ipsum primis in faucibus.
                        Aenean sed molestie diam. Cras vulputate dui arcu, ut pellentesque purus condimentum eget.
                        Cras suscipit purus turpis, vitae lacinia ex convallis id. Suspendisse tempor ipsum et sagittis
                        maximus.
                    </p>
                </div>
                <div class="col-md more-then-consulting__img-placeholder order-md-1">
                    <div class="lady-on-the-bead__img-container"></div>
                    <div class="image-container comment-container__more-then-consutlting">
                        <img class="comment mtc__img-size comment__svg-position comment-more-then-consutlting"
                            src="wp-content\themes\ourCustomTheme\assets\images\iconmonstr-speech-bubble-15.svg"
                            alt="Image can't be loaded.">
                        <img src="wp-content\themes\ourCustomTheme\assets\images\iconmonstr-quote-right-thin.svg"
                            alt="Image can't be loaded." id="svg-quote">
                        <p class="comment-text more-then-consutlting__comment-text">Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit.</p>
                    </div>
                    <div class="happy-man__img-container"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="out-core-values">
        <div class="container text-center">
            <h1 class="out-core-values__section-title">Our Core Values</h1>
            <div class="row justify-content-center">
                <section class="col-4 col-md-2 mx-auto remove-padding">
                    <img src="wp-content\themes\ourCustomTheme\assets\images\target.svg" alt="icon can't be loaded."
                        class="out-core-values__icon-size out-core-values__focus-on-outcome-icon">
                    <h1 class="out-core-values__icon-description">Focus On Outcome</h1>
                </section>
                <section class="col-4 col-md-2 mx-auto">
                    <img src="wp-content\themes\ourCustomTheme\assets\images\wheel.svg" alt="icon can't be loaded."
                        class="out-core-values__icon-size">
                    <h1 class="out-core-values__icon-description">Share The Wheel</h1>
                </section>
                <section class="col-4 col-md-2 mx-auto">
                    <img src="wp-content\themes\ourCustomTheme\assets\images\light-buld.svg" alt="icon can't be loaded."
                        class="out-core-values__icon-size">
                    <h1 class="out-core-values__icon-description">Keep It Simple</h1>
                </section>
                <section class="col-6 col-md-2 mx-auto" id="out-core-values__take-ownership-container">
                    <img src="wp-content\themes\ourCustomTheme\assets\images\box-on-palm.svg"
                        alt="icon can't be loaded."
                        class="out-core-values__icon-size out-core-values__take-ownership-icon">
                    <h1 class="out-core-values__icon-description">Take Ownership</h1>
                </section>
                <section class="col-6 col-md-2 mx-auto" id="out-core-values__enjoy-your-work-container">
                    <img src="wp-content\themes\ourCustomTheme\assets\images\party.svg" alt="icon can't be loaded."
                        class="out-core-values__icon-size out-core-values__enjoy-your-work-icon">
                    <h1 class="out-core-values__icon-description">Enjoy Your Work</h1>
                </section>
            </div>
        </div>
    </div>
    <div class="achievements">
        <div class="container text-center">
            <div class="row">
                <div class="col-md">
                    <section class="achievements__card mx-auto">
                        <img src="wp-content\themes\ourCustomTheme\assets\images\trophy.svg" alt="icon can't be loaded."
                            class="achievements__card__trophy-icon">
                        <h1 class="achievements__card__number">13</h1>
                        <p class="achievements__card__description">Awards</p>
                    </section>
                </div>
                <div class="col-md">
                    <section class="achievements__card mx-auto">
                        <img src="wp-content\themes\ourCustomTheme\assets\images\customer.svg"
                            alt="icon can't be loaded." class="achievements__card__customer-icon">
                        <h1 class="achievements__card__number achievements__card__number-with-plus-sign">20+</h1>
                        <p class="achievements__card__description">Customers</p>
                    </section>
                </div>
                <div class="col-md">
                    <section class="achievements__card mx-auto">
                        <img src="wp-content\themes\ourCustomTheme\assets\images\project.svg"
                            alt="icon can't be loaded." class="achievements__card__project-icon">
                        <h1 class="achievements__card__number achievements__card__number-with-plus-sign">60+</h1>
                        <p class="achievements__card__project-description">Projects</p>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
    <script src="wp-content/themes/ourCustomTheme/main.js"></script>
</body>

</html>