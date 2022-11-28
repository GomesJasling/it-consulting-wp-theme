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
                <span class="navbar-toggler-icon"></span>
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
    <div class="more-than-consulting">
        <div class="container">
            <div class="row">
                <div class="col-md" id="more-than-consulting__text-placeholder">
                    <h2 class="more-than-consulting__text-placeholder__title">OUR CULTURE</h2>
                    <p class="more-than-consulting__text-placeholder__text">
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
                <div class="col-md" id="more-than-consulting-image-placeholder">
                    <div id="c1">
                        <div class="image-container meeting-of-designer__container">
                            <img class="mtc__img-size meeting-of-designer__img-position"
                                src="wp-content\themes\ourCustomTheme\assets\images\meeting-of-designers-2022-03-30-20-23-41-utc-min.jpg"
                                alt="Image can't be loaded.">
                        </div>
                    </div>
                    <div id="c2">
                        <div class="image-container gir-with-glasses__container">
                            <img class="img-fluid mtc__img-size gir-with-glasses__img-position"
                                src="wp-content\themes\ourCustomTheme\assets\images\influencer-with-glasses-sitting-on-couch-holding-c-2022-02-04-18-06-51-utc-min.jpg"
                                alt="Image can't be loaded.">
                        </div>
                    </div>
                    <div id="c3">
                        <div class="image-container young-man-working__container">
                            <img class="mtc__img-size .young-man-working__img-position"
                                src="wp-content\themes\ourCustomTheme\assets\images\young-man-working-on-laptop-2021-08-30-02-34-54-utc-min.jpg"
                                alt="Image can't be loaded.">
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
    <?php wp_footer(); ?>
    <script src="wp-content/themes/ourCustomTheme/main.js"></script>
</body>

</html>