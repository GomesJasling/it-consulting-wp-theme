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

    </div>
    <footer>
        <div class="container text-center">
            <div class="row d-md-none">
                <div class="col-md-5">
                    <div>
                        <ul>
                            <li>
                                <h3>legal</h3>
                            </li>
                            <li>
                                <a href="#">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#">License</a>
                            </li>
                            <li>
                                <a href="#">Terms of use</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <ul>
                            <li>
                                <h3>quick links</h3>
                            </li>
                            <li>
                                <a href="#">What we do</a>
                            </li>
                            <li>
                                <a href="#">People</a>
                            </li>
                            <li>
                                <a href="#">Insights</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-md">
                    <h3>contact</h3>
                    <p>mock****@gmail.com<br>
                        +123-456-789<br>
                        +123-456-781</p>
                </div>
                <hr class="solid">
                <div class="col-md order-5">
                    <h3>socialize with us</h3>
                    <div class="row row-cols-6">
                        <div class="col-xs col-sm col">
                            <svg xmlns="http://www.w3.org/2000/svg" class="new-shape" viewBox="0 0 24 24">
                                <path
                                    d="M8.228 15.01h-2.228v-2.01h2.261c1.878 0 2.003 2.01-.033 2.01zm6.758-2.677h3.018c-.117-1.715-2.73-1.977-3.018 0zm-6.804-3.333h-2.182v2h2.389c1.673 0 1.937-2-.207-2zm15.818-4v14c0 2.761-2.238 5-5 5h-14c-2.762 0-5-2.239-5-5v-14c0-2.761 2.238-5 5-5h14c2.762 0 5 2.239 5 5zm-10 3h5v-1h-5v1zm-3.552 3.618c1.907-.974 1.837-4.55-1.813-4.604h-4.635v9.978h4.311c4.522 0 4.445-4.534 2.137-5.374zm9.487.602c-.274-1.763-1.528-2.95-3.583-2.95-2.094 0-3.352 1.34-3.352 3.947 0 2.631 1.367 3.783 3.416 3.783s3.106-1.135 3.4-2h-2.111c-.736.855-2.893.521-2.767-1.353h5.06c.01-.634-.012-1.089-.063-1.427z" />
                            </svg>
                        </div>
                        <div class="col-xs col-sm col">
                            <svg xmlns="http://www.w3.org/2000/svg" class="new-shape" viewBox="0 0 24 24">
                                <path
                                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                            </svg>
                        </div>
                        <div class="col-xs col-sm col">
                            <svg xmlns="http://www.w3.org/2000/svg" class="new-shape" viewBox="0 0 24 24">
                                <path
                                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-4.466 19.59c-.405.078-.534-.171-.534-.384v-2.195c0-.747-.262-1.233-.55-1.481 1.782-.198 3.654-.875 3.654-3.947 0-.874-.312-1.588-.823-2.147.082-.202.356-1.016-.079-2.117 0 0-.671-.215-2.198.82-.64-.18-1.324-.267-2.004-.271-.68.003-1.364.091-2.003.269-1.528-1.035-2.2-.82-2.2-.82-.434 1.102-.16 1.915-.077 2.118-.512.56-.824 1.273-.824 2.147 0 3.064 1.867 3.751 3.645 3.954-.229.2-.436.552-.508 1.07-.457.204-1.614.557-2.328-.666 0 0-.423-.768-1.227-.825 0 0-.78-.01-.055.487 0 0 .525.246.889 1.17 0 0 .463 1.428 2.688.944v1.489c0 .211-.129.459-.528.385-3.18-1.057-5.472-4.056-5.472-7.59 0-4.419 3.582-8 8-8s8 3.581 8 8c0 3.533-2.289 6.531-5.466 7.59z" />
                            </svg>
                        </div>
                        <div class="col-xs col-sm col">
                            <svg xmlns="http://www.w3.org/2000/svg" class="new-shape" viewBox="0 0 24 24">
                                <path
                                    d="M15.233 5.488c-.843-.038-1.097-.046-3.233-.046s-2.389.008-3.232.046c-2.17.099-3.181 1.127-3.279 3.279-.039.844-.048 1.097-.048 3.233s.009 2.389.047 3.233c.099 2.148 1.106 3.18 3.279 3.279.843.038 1.097.047 3.233.047 2.137 0 2.39-.008 3.233-.046 2.17-.099 3.18-1.129 3.279-3.279.038-.844.046-1.097.046-3.233s-.008-2.389-.046-3.232c-.099-2.153-1.111-3.182-3.279-3.281zm-3.233 10.62c-2.269 0-4.108-1.839-4.108-4.108 0-2.269 1.84-4.108 4.108-4.108s4.108 1.839 4.108 4.108c0 2.269-1.839 4.108-4.108 4.108zm4.271-7.418c-.53 0-.96-.43-.96-.96s.43-.96.96-.96.96.43.96.96-.43.96-.96.96zm-1.604 3.31c0 1.473-1.194 2.667-2.667 2.667s-2.667-1.194-2.667-2.667c0-1.473 1.194-2.667 2.667-2.667s2.667 1.194 2.667 2.667zm4.333-12h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm.952 15.298c-.132 2.909-1.751 4.521-4.653 4.654-.854.039-1.126.048-3.299.048s-2.444-.009-3.298-.048c-2.908-.133-4.52-1.748-4.654-4.654-.039-.853-.048-1.125-.048-3.298 0-2.172.009-2.445.048-3.298.134-2.908 1.748-4.521 4.654-4.653.854-.04 1.125-.049 3.298-.049s2.445.009 3.299.048c2.908.133 4.523 1.751 4.653 4.653.039.854.048 1.127.048 3.299 0 2.173-.009 2.445-.048 3.298z" />
                            </svg>
                        </div>
                        <div class="col-xs col-sm col">
                            <svg xmlns="http://www.w3.org/2000/svg" class="new-shape" viewBox="0 0 24 24">
                                <path
                                    d="M13.01 13.188c.617 1.613 1.072 3.273 1.361 4.973-2.232.861-4.635.444-6.428-.955 1.313-2.058 2.989-3.398 5.067-4.018zm-.53-1.286c-.143-.32-.291-.638-.447-.955-1.853.584-4.068.879-6.633.883l-.01.17c0 1.604.576 3.077 1.531 4.223 1.448-2.173 3.306-3.616 5.559-4.321zm-3.462-5.792c-1.698.863-2.969 2.434-3.432 4.325 2.236-.016 4.17-.261 5.791-.737-.686-1.229-1.471-2.426-2.359-3.588zm7.011.663c-1.117-.862-2.511-1.382-4.029-1.382-.561 0-1.102.078-1.621.21.873 1.174 1.648 2.384 2.326 3.625 1.412-.598 2.52-1.417 3.324-2.453zm7.971-1.773v14c0 2.761-2.238 5-5 5h-14c-2.762 0-5-2.239-5-5v-14c0-2.761 2.238-5 5-5h14c2.762 0 5 2.239 5 5zm-4 7c0-4.418-3.582-8-8-8s-8 3.582-8 8 3.582 8 8 8 8-3.582 8-8zm-6.656-1.542c.18.371.348.745.512 1.12 1.439-.248 3.018-.233 4.734.049-.084-1.478-.648-2.827-1.547-3.89-.922 1.149-2.16 2.055-3.699 2.721zm1.045 2.437c.559 1.496.988 3.03 1.279 4.598 1.5-1.005 2.561-2.61 2.854-4.467-1.506-.261-2.883-.307-4.133-.131z" />
                            </svg>
                        </div>
                        <div class="col-xs col-sm col">
                            <svg xmlns="http://www.w3.org/2000/svg" class="new-shape" viewBox="0 0 24 24">
                                <path
                                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-.139 9.237c.209 4.617-3.234 9.765-9.33 9.765-1.854 0-3.579-.543-5.032-1.475 1.742.205 3.48-.278 4.86-1.359-1.437-.027-2.649-.976-3.066-2.28.515.098 1.021.069 1.482-.056-1.579-.317-2.668-1.739-2.633-3.26.442.246.949.394 1.486.411-1.461-.977-1.875-2.907-1.016-4.383 1.619 1.986 4.038 3.293 6.766 3.43-.479-2.053 1.08-4.03 3.199-4.03.943 0 1.797.398 2.395 1.037.748-.147 1.451-.42 2.086-.796-.246.767-.766 1.41-1.443 1.816.664-.08 1.297-.256 1.885-.517-.439.656-.996 1.234-1.639 1.697z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="col-md order-4">
                    <h3>subscribe to out
                        news letter</h3>
                    <form action="/action_page.php">
                        <input type="text" placeholder="Enter your email">
                        <input type="submit" value="SUBMIT">
                    </form>
                </div>
            </div>
            <div class="row d-none d-md-flex">
                <div class="col-md">
                    <ul>
                        <li>
                            <h3>quick links</h3>
                        </li>
                        <li>
                            <a href="#">What we do</a>
                        </li>
                        <li>
                            <a href="#">People</a>
                        </li>
                        <li>
                            <a href="#">Insights</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md">
                    <ul>
                        <li>
                            <h3>legal</h3>
                        </li>
                        <li>
                            <a href="#">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#">License</a>
                        </li>
                        <li>
                            <a href="#">Terms of use</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md">
                    <ul>
                        <li>
                            <h3>contact</h3>
                        </li>
                        <li>
                            mock****@gmail.com
                        </li>
                        <li>
                            +123-456-789
                        </li>
                        <li>
                            +123-456-781
                        </li>
                    </ul>
                </div>
                <div class="col-md">
                    <h3>socialize with us</h3>
                    <div class="col-md">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="new-shape" viewBox="0 0 24 24">
                                <path
                                    d="M8.228 15.01h-2.228v-2.01h2.261c1.878 0 2.003 2.01-.033 2.01zm6.758-2.677h3.018c-.117-1.715-2.73-1.977-3.018 0zm-6.804-3.333h-2.182v2h2.389c1.673 0 1.937-2-.207-2zm15.818-4v14c0 2.761-2.238 5-5 5h-14c-2.762 0-5-2.239-5-5v-14c0-2.761 2.238-5 5-5h14c2.762 0 5 2.239 5 5zm-10 3h5v-1h-5v1zm-3.552 3.618c1.907-.974 1.837-4.55-1.813-4.604h-4.635v9.978h4.311c4.522 0 4.445-4.534 2.137-5.374zm9.487.602c-.274-1.763-1.528-2.95-3.583-2.95-2.094 0-3.352 1.34-3.352 3.947 0 2.631 1.367 3.783 3.416 3.783s3.106-1.135 3.4-2h-2.111c-.736.855-2.893.521-2.767-1.353h5.06c.01-.634-.012-1.089-.063-1.427z" />
                            </svg></a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="new-shape" viewBox="0 0 24 24">
                                <path
                                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                            </svg></a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="new-shape" viewBox="0 0 24 24">
                                <path
                                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-4.466 19.59c-.405.078-.534-.171-.534-.384v-2.195c0-.747-.262-1.233-.55-1.481 1.782-.198 3.654-.875 3.654-3.947 0-.874-.312-1.588-.823-2.147.082-.202.356-1.016-.079-2.117 0 0-.671-.215-2.198.82-.64-.18-1.324-.267-2.004-.271-.68.003-1.364.091-2.003.269-1.528-1.035-2.2-.82-2.2-.82-.434 1.102-.16 1.915-.077 2.118-.512.56-.824 1.273-.824 2.147 0 3.064 1.867 3.751 3.645 3.954-.229.2-.436.552-.508 1.07-.457.204-1.614.557-2.328-.666 0 0-.423-.768-1.227-.825 0 0-.78-.01-.055.487 0 0 .525.246.889 1.17 0 0 .463 1.428 2.688.944v1.489c0 .211-.129.459-.528.385-3.18-1.057-5.472-4.056-5.472-7.59 0-4.419 3.582-8 8-8s8 3.581 8 8c0 3.533-2.289 6.531-5.466 7.59z" />
                            </svg></a>
                    </div>
                    <div class="col-md">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="new-shape" viewBox="0 0 24 24">
                                <path
                                    d="M15.233 5.488c-.843-.038-1.097-.046-3.233-.046s-2.389.008-3.232.046c-2.17.099-3.181 1.127-3.279 3.279-.039.844-.048 1.097-.048 3.233s.009 2.389.047 3.233c.099 2.148 1.106 3.18 3.279 3.279.843.038 1.097.047 3.233.047 2.137 0 2.39-.008 3.233-.046 2.17-.099 3.18-1.129 3.279-3.279.038-.844.046-1.097.046-3.233s-.008-2.389-.046-3.232c-.099-2.153-1.111-3.182-3.279-3.281zm-3.233 10.62c-2.269 0-4.108-1.839-4.108-4.108 0-2.269 1.84-4.108 4.108-4.108s4.108 1.839 4.108 4.108c0 2.269-1.839 4.108-4.108 4.108zm4.271-7.418c-.53 0-.96-.43-.96-.96s.43-.96.96-.96.96.43.96.96-.43.96-.96.96zm-1.604 3.31c0 1.473-1.194 2.667-2.667 2.667s-2.667-1.194-2.667-2.667c0-1.473 1.194-2.667 2.667-2.667s2.667 1.194 2.667 2.667zm4.333-12h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm.952 15.298c-.132 2.909-1.751 4.521-4.653 4.654-.854.039-1.126.048-3.299.048s-2.444-.009-3.298-.048c-2.908-.133-4.52-1.748-4.654-4.654-.039-.853-.048-1.125-.048-3.298 0-2.172.009-2.445.048-3.298.134-2.908 1.748-4.521 4.654-4.653.854-.04 1.125-.049 3.298-.049s2.445.009 3.299.048c2.908.133 4.523 1.751 4.653 4.653.039.854.048 1.127.048 3.299 0 2.173-.009 2.445-.048 3.298z" />
                            </svg></a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="new-shape" viewBox="0 0 24 24">
                                <path
                                    d="M13.01 13.188c.617 1.613 1.072 3.273 1.361 4.973-2.232.861-4.635.444-6.428-.955 1.313-2.058 2.989-3.398 5.067-4.018zm-.53-1.286c-.143-.32-.291-.638-.447-.955-1.853.584-4.068.879-6.633.883l-.01.17c0 1.604.576 3.077 1.531 4.223 1.448-2.173 3.306-3.616 5.559-4.321zm-3.462-5.792c-1.698.863-2.969 2.434-3.432 4.325 2.236-.016 4.17-.261 5.791-.737-.686-1.229-1.471-2.426-2.359-3.588zm7.011.663c-1.117-.862-2.511-1.382-4.029-1.382-.561 0-1.102.078-1.621.21.873 1.174 1.648 2.384 2.326 3.625 1.412-.598 2.52-1.417 3.324-2.453zm7.971-1.773v14c0 2.761-2.238 5-5 5h-14c-2.762 0-5-2.239-5-5v-14c0-2.761 2.238-5 5-5h14c2.762 0 5 2.239 5 5zm-4 7c0-4.418-3.582-8-8-8s-8 3.582-8 8 3.582 8 8 8 8-3.582 8-8zm-6.656-1.542c.18.371.348.745.512 1.12 1.439-.248 3.018-.233 4.734.049-.084-1.478-.648-2.827-1.547-3.89-.922 1.149-2.16 2.055-3.699 2.721zm1.045 2.437c.559 1.496.988 3.03 1.279 4.598 1.5-1.005 2.561-2.61 2.854-4.467-1.506-.261-2.883-.307-4.133-.131z" />
                            </svg></a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="new-shape" viewBox="0 0 24 24">
                                <path
                                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-.139 9.237c.209 4.617-3.234 9.765-9.33 9.765-1.854 0-3.579-.543-5.032-1.475 1.742.205 3.48-.278 4.86-1.359-1.437-.027-2.649-.976-3.066-2.28.515.098 1.021.069 1.482-.056-1.579-.317-2.668-1.739-2.633-3.26.442.246.949.394 1.486.411-1.461-.977-1.875-2.907-1.016-4.383 1.619 1.986 4.038 3.293 6.766 3.43-.479-2.053 1.08-4.03 3.199-4.03.943 0 1.797.398 2.395 1.037.748-.147 1.451-.42 2.086-.796-.246.767-.766 1.41-1.443 1.816.664-.08 1.297-.256 1.885-.517-.439.656-.996 1.234-1.639 1.697z" />
                            </svg></a>
                    </div>
                </div>
                <div class="col-md">
                    <h3>subscribe to our<br>
                        news letter</h3>
                    <form action="/action_page.php">
                        <input type="text" placeholder="Enter your email">
                        <input type="submit" value="SUBMIT">
                    </form>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>