<!DOCTYPE html>
<html lang='en' class=''>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadgeon Smart Solar Solutions - Leading Solar Innovations in Kerala & India | {{ $title ?? 'HOME' }}</title>
    <meta name="description"
        content="Gadgeon Smart Solar Solutions offers innovative solar energy systems across Kerala and India. Join us in creating a sustainable future with advanced solar technology." />
    <meta name="keywords"
        content="Gadgeon Smart Solar Solutions, Solar Power, Solar Energy, Kerala Solar Solutions, India Solar Solutions, Sustainable Energy, Renewable Energy, Eco-Friendly Power" />
    <meta property="og:title"
        content="Gadgeon Smart Solar Solutions - Leading Solar Innovations in Kerala & India | {{ $title ?? 'HOME' }}" />
    <meta property="og:description"
        content="Discover cutting-edge solar solutions with Gadgeon. Providing efficient, sustainable energy across Kerala and India for a brighter, eco-friendly future." />
    <meta property="og:type" content="profile" />
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:image" content="{{ asset('assets/images/logo.jpg') }}" />
    <link rel="icon" href="{{ asset('assets/images/h.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/logo/cropped-fav-32x32.png') }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('assets/images/logo/cropped-fav-192x192.png" sizes="192x192') }}" />
    <link rel="apple-touch-icon" href="{{ asset('assets/images/logo/cropped-fav-180x180.png') }}" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="{{ asset('assets/css/style.css?v=1.8') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css?v=1.7') }}" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" rel="stylesheet" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <style>
        /* width */
        ::-webkit-scrollbar {
            width: 0.1px;
        }



        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: transparent;
            border-radius: 10px;
        }

        .rounded-6 {
            border-radius: 1.3rem !important
        }

        .w-10 {
            width: 50px;
        }

        .pined {
            overflow: hidden;
            background: #000000;
        }

        .pined .pined-inner {
            position: relative;
            display: flex;
            align-items: center;
            height: 100vh;
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .pined .pined-list {
            position: absolute;
            left: 0;
            display: flex;
        }

        .pined .pined-list li {
            width: 90vw;
            aspect-ratio: 16/9;
            overflow: hidden;
        }

        .pined .pined-list li img {
            width: 100%;
            object-fit: contain;
        }

        .counter-section .content-section-1,
        .counter-section .content-section-2 {
            padding: 150px 0 150px 0;
        }

        /* Styles for the overlay and loader */
        #overlay {
            display: none;
            /* Hidden by default */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            /* Semi-transparent background */
            z-index: 9999;
            /* Ensure it stays on top */
            justify-content: center;
            align-items: center;
        }

        /* Centered loader */
        .loader {
            border: 16px solid #f3f3f3;
            /* Light grey */
            border-top: 16px solid #3498db;
            /* Blue */
            border-radius: 50%;
            width: 120px;
            height: 120px;
            animation: spin 2s linear infinite;
        }

        /* Spin animation */
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .modal{
            z-index: 99999;
        }

        .btn-close.text-light{
            color: #f3f3f3 !important;
        }

        .mobile-btn-enquiry{
            font-size: 12px;
            padding: 5px 10px 5px 10px;
            text-transform: uppercase;
        }
    </style>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NCQCZS78');
    </script>
    <!-- End Google Tag Manager -->

</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NCQCZS78" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript> <!-- End Google Tag Manager (noscript) -->
    <!-- header section -->
    <header class="header">

        <div class="container">
            <div class="col-lg-12 main-header">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-5  d-flex align-items-center">
                        <a href="/" title="gadgeon" class="">
                            <img loading="lazy" src="{{ asset('assets/images/gadgeon-logo.svg') }}" alt="logo"
                                class="logo">
                        </a>
                    </div>
                    <div class="col-lg-9 col-sm-2 col-2  d-none d-lg-block align-self-center">

                        <ul class="main-menu text-end gap-2">
                            <li class="menu-item ">
                                <a href="{{ asset('assets/GLS_solar_e-brochure.pdf') }}"
                                    download="Gadgeon Smart Solar.pdf" class="btn btn-theme2 rounded-5">
                                    <i class="bi bi-download me-2"></i>
                                    E-BROCHURE</a>
                            </li>
                            <li class="menu-item ">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                    class="btn btn-theme rounded-5">Enquire Now</a>
                            </li>
                            <li class="menu-item ">
                                <i class="bi bi-text-right fs-1" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"></i>
                            </li>
                        </ul>
                    </div>
                    <div class=" col-md-6 col-7  d-block d-lg-none ">
                        <div class="row">
                            <div class="col-9 d-flex align-items-center justify-content-end">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                    class="btn btn-theme rounded-5 mobile-btn-enquiry">Enquire Now</a>
                            </div>
                            <div class="col-3  d-flex align-items-center">
                                <i class="bi bi-filter-right display-3 mb-2 end-0 " type="button"
                                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                    aria-controls="offcanvasRight"></i>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas offcanvas-end px-5" tabindex="-1" id="offcanvasRight"
                        aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header">
                            <a href="/" title="gadgeon" class="">
                                <img loading="lazy" src="{{ asset('assets/images/gadgeon-logo.svg') }}"
                                    alt="logo" class="logo">
                            </a>
                            <button type="button" class="btn-close text-reset float-right"
                                data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>

                        <div class="offcanvas-body mt-2">
                            <ul class="list-unstyled text-left">
                                <li class=" mb-4 {{ $title == 'Home' ? 'active' : '' }}">
                                    <a title="Home" href="/"
                                        class="text-decoration-none text-dark fw-semibold menu-txt">Home</a>
                                </li>
                                <li class=" mb-4 {{ $title == 'Solutions' ? 'active' : '' }}">
                                    <a title="Solutions" href="/solutions"
                                        class="text-decoration-none text-dark fw-semibold menu-txt">Solutions</a>
                                </li>
                                <li class="dropdown mb-4">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Services
                                    </a>

                                    <ul class="dropdown-menu  my-3" aria-labelledby="dropdownMenuLink">
                                        <li class="m-2 border-bottom"><a title="Residential Solar Solutions"
                                                class="text-decoration-none text-dark fw-semibold menu-txt"
                                                href="{{ url('residential-solar-solutions') }}">Residential
                                                Solar Solutions</a></li>
                                        <li class="m-2 border-bottom"><a title="Commercial Solar Solutions"
                                                class="text-decoration-none text-dark fw-semibold menu-txt"
                                                href="{{ url('commercial-solar-solutions') }}">Commercial
                                                Solar Solutions</a></li>
                                        <li class="m-2 border-bottom"><a title="Solar Project Development"
                                                class="text-decoration-none text-dark fw-semibold menu-txt"
                                                href="{{ url('solar-project-development') }}">Solar Project
                                                Development</a></li>
                                        <li class="m-2 border-bottom"><a title="Solar Maintenance & Support"
                                                class="text-decoration-none text-dark fw-semibold menu-txt"
                                                href="{{ url('solar-maintenance-support') }}">Solar
                                                Maintenance & Support</a></li>
                                        <li class="m-2 border-bottom"><a title="Our Turnkey Solar PV Services"
                                                class="text-decoration-none text-dark fw-semibold menu-txt"
                                                href="{{ url('turnkey-solar-pv-services') }}">Our Turnkey
                                                Solar PV Services</a></li>
                                        <li class="m-2 "><a title="Operation and Maintenance (O&M) Services"
                                                class="text-decoration-none text-dark fw-semibold menu-txt"
                                                href="{{ url('operation-and-maintenance-service') }}">Operation and
                                                Maintenance
                                                (O&M) Services</a></li>

                                    </ul>
                                </li>
                                <li class=" mb-4 d-none {{ $title == 'Products' ? 'active' : '' }}">
                                    <a title="Products" href="/products"
                                        class="text-decoration-none text-dark fw-semibold menu-txt">Products</a>
                                </li>
                                <li class=" mb-4 {{ $title == 'Why Choose GadgEon Solar' ? 'active' : '' }}">
                                    <a title="Why Choose GadgEon Solar" href="/why-choose-gadgeon-solar"
                                        class="text-decoration-none text-dark fw-semibold menu-txt">Why Choose
                                        GadgEon</a>
                                </li>


                                <li class=" mb-4 {{ $title == 'Technology Partners' ? 'active' : '' }}">
                                    <a title="Technology Partners" href="/technology-partners"
                                        class="text-decoration-none text-dark fw-semibold menu-txt">Technology
                                        Partners</a>
                                </li>
                                <li class=" mb-4 {{ $title == 'About Us' ? 'active' : '' }}">
                                    <a title="About Us" href="/about-us"
                                        class="text-decoration-none text-dark fw-semibold menu-txt">About Us</a>
                                </li>

                                <li class=" mb-4 {{ $title == 'Contact Us' ? 'active' : '' }}">
                                    <a title="Contact Us" href="/contact-us"
                                        class="text-decoration-none text-dark fw-semibold menu-txt">Contact Us</a>
                                </li>
                            </ul>

                            <h6 class="mt-5"><a href="mailto:solar@gadgeon.com"
                                    class="text-dark">solar@gadgeon.com</a> </h6>
                            <h6><a href="tel:+919633186217" class="text-dark mt-2">+91 9633 186 217</a></h6>
                            <h6><a href="tel:+919747093888" class="text-dark mt-2">+91 9747 093 888</a></h6>
                            <h6><a href="tel:+919207799555" class="text-dark mt-2">+91 9207 799 555</a></h6>

                            <div class="col-lg-12 social-media-section text-left">
                                <div class="mt-4 d-flex  gap-2 pe-5">
                                    <div class="social-media-btn d-flex align-items-center justify-content-center">
                                        <a href="https://www.facebook.com/gadgeonlifestyle" class=""><i
                                                class="bi bi-facebook fs-4"></i></a>
                                    </div>
                                    <div class="social-media-btn d-flex align-items-center justify-content-center">
                                        <a href="https://www.youtube.com/@gadgeonlifestyle7231" class=""><i
                                                class="bi bi-youtube fs-4"></i></a>
                                    </div>
                                    <div class="social-media-btn d-flex align-items-center justify-content-center">
                                        <a href="https://www.instagram.com/gadgeonlifestyle/" class=""><i
                                                class="bi bi-instagram fs-4"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('contents')

    <!-- Footer 6 - Bootstrap Brain Component -->
    <footer class="footer">

        <!-- Widgets - Bootstrap Brain Component -->
        <div class="bg-light py-3 py-md-5 py-xl-8 border-top border-light-subtle">
            <div class="container overflow-hidden">
                <div class="row gy-3 gy-md-5 gy-xl-0 align-items-sm-center">
                    <div class="col-xs-12 col-sm-6 col-xl-3 order-0 order-xl-0">
                        <div class="footer-logo-wrapper text-center text-sm-start">
                            <a href="#!">
                                <img loading="lazy" src="{{ asset('assets/images/gadgeon-logo.svg') }}"
                                    alt="Logo" width="175" height="57">
                            </a>
                        </div>
                    </div>

                    <div class="col-xs-12 col-xl-6 order-2 order-xl-1">
                        <ul class="nav justify-content-center">

                            <li class="nav-item">
                                <a class="nav-link link-secondary px-2 px-md-3"
                                    href="{{ url('about-us') }}">About</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link link-secondary px-2 px-md-3"
                                    href="{{ url('contact-us') }}">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-secondary px-2 px-md-3"
                                    href="{{ url('solutions') }}">Solutions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-secondary px-2 px-md-3"
                                    href="{{ url('why-choose-gadgeon-solar') }}">Why Choose GadgEon</a>
                            </li>
                        </ul>
                    </div>



                    <div class="col-xs-12 col-sm-6 col-xl-3 order-1 order-xl-2">
                        <ul class="nav justify-content-center justify-content-sm-end">
                            <li class="nav-item">
                                <a class="nav-link link-dark px-3" href="https://www.facebook.com/gadgeonlifestyle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                    </svg>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-dark px-3"
                                    href="https://www.youtube.com/@gadgeonlifestyle7231">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                        <path
                                            d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                                    </svg>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-dark px-3" href="https://www.instagram.com/gadgeonlifestyle/">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                        <path
                                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                                    </svg>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright - Bootstrap Brain Component -->
        <div class="bg-light border-top border-light-subtle">
            <div class="container overflow-hidden">
                <div class="row">
                    <div class="col">
                        <div class="footer-copyright-wrapper text-center text-dark py-2">
                            <small> Copyright © {{ date('Y') }} Gadgeon - Smart Solar Solutions. All rights
                                reserved. <a class="" href="https://www.paarva.com" target="_new">Powered by
                                    Paarva</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>

    <div class="content">
        <div class="sidebar-contact">
            <div class="toggle">Contact Us</div>
            <h2>Contact Us</h2>
            <div class="scroll">
                <form method="POST" action="{{ route('quote-email') }}">
                    @csrf
                    <div class="mb-3 ">
                        <input type="text" required="" name="fullname" class="form-control rounded-5"
                            placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <input type="email" required="" name="email" class="form-control rounded-5"
                            placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <input id="phone" maxlength="10" minlength="10" class="form-control rounded-5"
                            type="text" required="" value=""
                            onkeypress="if(event.which < 48 || event.which > 57 ) if(event.which != 8) return false;"
                            autocomplete="off" name="mobile" placeholder="Phone Number">

                    </div>
                    <div class="mb-3">
                        <textarea placeholder="Message here.." name="message" class="form-control rounded-5"></textarea>
                    </div>
                    <div class="mb-3 text-center">
                        <input type="submit" class="btn btn-theme rounded-5" name="" value="send">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="wa__btn_popup">
        <div class="wa__btn_popup_txt">Need Help? <strong>Chat with us</strong></div>
        <div class="wa__btn_popup_icon"></div>
    </div>



    <div class="wa__popup_chat_box">
        <div class="wa__popup_heading">
            <div class="wa__popup_title">Start a Conversation</div>
            <div class="wa__popup_intro">Hi! Click one of our member below to chat on <strong>WhatsApp ;)</strong>
                <div id="\&quot;eJOY__extension_root\&quot;"></div>
            </div>
        </div>
        <!-- /.wa__popup_heading -->
        <div class="wa__popup_content wa__popup_content_left">
            <div class="wa__popup_notice">The team typically replies in a few minutes.</div>


            <div class="wa__popup_content_list">
                <div class="wa__popup_content_item ">

                    <a target="_blank"
                        href="https://wa.me/+919747093888?text=i%20need%20more%20details%20your%20product%20and%20services"
                        class="wa__stt wa__stt_online">
                        <div class="wa__popup_avatar">
                            <div class="wa__cs_img_wrap"
                                style="width: 60px;height: 60px;background: url(assets/images/WhatsApp-Logo.wine.svg) center center no-repeat; background-size: cover;">
                            </div>
                        </div>

                        <div class="wa__popup_txt">
                            <div class="wa__member_name"></div>
                            <!-- /.wa__member_name -->
                            <div class="wa__member_duty">Our Representative</div>
                            <!-- /.wa__member_duty -->
                        </div>
                        <!-- /.wa__popup_txt -->
                    </a>
                </div>

            </div>

        </div>
        <!-- /.wa__popup_content_list -->
    </div>
    <!-- /.wa__popup_content -->
    </div>

    <!-- Overlay and Loader -->
    <div id="overlay">
        <div class="loader"></div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop"tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content  bg-theme">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Enquire Now</h5>
                    <span type="button" class=" text-light" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x"></i></span>
                </div>
                <div class="modal-body  bg-theme">
                    <form action="{{ route('contact-email') }}" method="POST" class="py-2 px-3 row">
                        @csrf
                        <div class="col-lg-12 mb-2">
                            <label class="mb-2 text-light h6">Full Name</label>
                            <input type="text" required class="form-control" name="fullname"
                                value="{{ old('fullname') }}" >
                        </div>
                        <div class="col-lg-6 mb-2">
                            <label class="mb-2 text-light h6">Email Address</label>
                            <input type="email" autocomplete="off" required class="form-control" name="email"
                                value="{{ old('email') }}">
                        </div>
                        <div class="col-lg-6 mb-2">
                            <label class="mb-2 text-light h6">Mobile Number</label>
                            <input id="phone" required maxlength="10" minlength="10"
                                value="{{ old('mobile') }}" class="form-control" type="text"
                                onkeypress="if(event.which < 48 || event.which > 57 ) if(event.which != 8) return false;"
                                autocomplete="off" name="mobile" >

                        </div>
                        <div class="col-lg-12 mb-2">
                            <label class="mb-2 text-light h6">Subject</label>
                            <input type="text" required class="form-control" value="{{ old('subject') }}"
                                name="subject" >
                        </div>
                        <div class="col-lg-12 mb-2">
                            <label class="mb-2 text-light h6">Message</label>
                            <textarea type="text" name="message" class="form-control" rows="8">{{ old('message') }}</textarea>
                        </div>
                        <div class="col-lg-12 mb-4 text-center">
                            <input type="submit" class="btn btn-theme2 text-light border-light border rounded-5">
                        </div>
                    </form>
                </div>
               
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        AOS.init();
        $(document).ready(function() {
            $('body').on('submit', 'form', function() {
                $('#overlay').css('display', 'flex');
            }); //submit
        });
    </script>


    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Thank You!',
                text: '{{ session('success') }}',
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{ session('error') }}',
            });
        </script>
    @endif

    @if ($errors->any())
        <script>
            // Display SweetAlert2 for validation errors
            Swal.fire({
                title: 'Validation Error!',
                icon: 'error',
                html: '<ul >' +
                    @foreach ($errors->all() as $error)
                        '<li>{{ $error }}</li>' +
                    @endforeach
                '</ul>',
                confirmButtonText: 'OK'
            });
        </script>
    @endif


    <script>
        $(document).ready(function() {



            $('.logo-slider').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 1
                    }
                }]
            });

            $('.feedback-slider').slick({
                slidesToShow: 2,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1000,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 1
                    }
                }]
            });


        });


        $.fn.jQuerySimpleCounter = function(options) {
            var settings = $.extend({
                start: 0,
                end: 100,
                easing: 'swing',
                duration: 400,
                complete: ''
            }, options);

            var thisElement = $(this);

            $({
                count: settings.start
            }).animate({
                count: settings.end
            }, {
                duration: settings.duration,
                easing: settings.easing,
                step: function() {
                    var mathCount = Math.ceil(this.count);
                    thisElement.text(mathCount + '+');
                },
                complete: settings.complete
            });
        };


        $('#number1').jQuerySimpleCounter({
            end: 600,
            duration: 8000
        });
        $('#number2').jQuerySimpleCounter({
            end: 50,
            duration: 8000
        });
        $('#number3').jQuerySimpleCounter({
            end: 950,
            duration: 8000
        });
    </script>

    <script>
        (function($) {
            var wa_time_out, wa_time_in;
            $(document).ready(function() {
                $(".wa__btn_popup").on("click", function() {
                    if ($(".wa__popup_chat_box").hasClass("wa__active")) {
                        $(".wa__popup_chat_box").removeClass("wa__active");
                        $(".wa__btn_popup").removeClass("wa__active");
                        clearTimeout(wa_time_in);
                        if ($(".wa__popup_chat_box").hasClass("wa__lauch")) {
                            wa_time_out = setTimeout(function() {
                                $(".wa__popup_chat_box").removeClass("wa__pending");
                                $(".wa__popup_chat_box").removeClass("wa__lauch");
                            }, 400);
                        }
                    } else {
                        $(".wa__popup_chat_box").addClass("wa__pending");
                        $(".wa__popup_chat_box").addClass("wa__active");
                        $(".wa__btn_popup").addClass("wa__active");
                        clearTimeout(wa_time_out);
                        if (!$(".wa__popup_chat_box").hasClass("wa__lauch")) {
                            wa_time_in = setTimeout(function() {
                                $(".wa__popup_chat_box").addClass("wa__lauch");
                            }, 100);
                        }
                    }
                });





                $("#nta-wa-gdpr").change(function() {
                    if (this.checked) {
                        setCookie("nta-wa-gdpr", "accept", 30);
                        if (getCookie("nta-wa-gdpr") != "") {
                            $('.nta-wa-gdpr').hide(500);
                            $('.wa__popup_content_item').each(function() {
                                $(this).removeClass('pointer-disable');
                                $('.wa__popup_content_list').off('click');
                            })
                        }
                    }
                });

            });
        })(jQuery);



        $(document).ready(function() {
            $('.toggle').click(function() {
                $('.sidebar-contact').toggleClass('active');
                $('.toggle').toggleClass('active');
            });

        });
    </script>


    @yield('scripts')

</body>

</html>
