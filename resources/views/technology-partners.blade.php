@extends('layout.layout')
@section('contents')
    <!-- Banner section -->

    <section class="banner-section">
        <div class="container">
            <div class="col-lg-12 top-content">
                <div class="row">
                    <div class="col-lg-7 d-flex align-items-end">
                        <div>
                            <span class="text-theme fw-normal pb-4">
                      
                            </span>
                            

                            <h1 class="display-5 fw-semibold" style="line-height: 1.3;">
                                <span class="text-black-50 fw-normal">GadgEon Solar Major
                                </span>
                                <span class="fw-bold">Technology Partners</span>
                            </h1>
                            <p class="small mt-3">
                            
                            </p>
                        </div>

                    </div>
                    <div class="col-lg-5">
                        <div class="text-end mt-3">
                            <img loading="lazy" decoding="async" width="50%"
                                src="{{ url('assets/images/banner-bg-dot.png') }}">
                        </div>

                    </div>
                             @include('social-media-links')
                </div>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-5 content-section">
        <div class="container">
            <div class="col-lg-12">
                <div class="col-lg-6 mx-auto text-center py-5">
                    <span class="text-theme fw-normal pb-4">
                        Your All-Inclusive Solution for Solar PV Installations
                    </span>
                    <h1 class="fw-normal pb-5" data-aos="fade-up" data-aos-delay="500">
                        Technology Partners                    
                    </h1>
                    <p class="text-black-50 fw-normal mt-2">
                        At GadgEon Solar, we believe in collaborating with industry-leading technology partners to offer our customers the most advanced and reliable solar solutions. Our strategic partnerships with renowned solar brands demonstrate our commitment to providing top-notch products and services that deliver exceptional performance and efficiency. Through these partnerships, we bring cutting-edge technology and high-quality components to empower you with the best solar solutions available. 
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class=" partners-gadgeon1">
        <div class="container">
          
            <div class="row pt-5 justify-content-center">
                <div class="col-lg-4 mb-5">
                    <div class="card info-box2 h-100">
                        <div>
                            <div class="text-center border-bottom">
                                <img loading="lazy" loading="lazy" decoding="async" class="text-center rounded-6 mb-4"
                                    src="{{ url('assets/images/logo/SunPower-logo.png') }}">
                            </div>
                            <div class="mt-2 p-2 text-center">

                                <h4 class="mb-1">SunPower</h4>
                                <h6 class="mb-3">From Maxeon Solar Technologies</h6>
                                <p>
                                    SunPower, a division of Maxeon Solar Technologies, is a globally recognized solar pioneer, known for its high-efficiency solar panels and innovative solar technologies. As a premier technology partner, SunPower enables us to offer our customers top-tier solar panels that maximize energy generation and deliver unmatched reliability. Together with SunPower, we take a step towards a greener and more sustainable future. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            
                <div class="col-lg-4 mb-5">
                    <div class="card info-box2 h-100">
                        <div>
                            <div class="text-center border-bottom">
                                <img loading="lazy" loading="lazy" decoding="async" class="text-center rounded-6 mb-4"
                                    src="{{ url('assets/images/logo/rec-logo.png') }}">
                            </div>
                            <div class="mt-2 p-2 text-center">
                                <h4 class="mb-1">REC</h4>
                                <h6 class="mb-3">Renewable Energy Corporation</h6>
                                <p>
                                    REC is a leading global provider of solar energy solutions, renowned for its commitment to sustainability and product excellence. By partnering with REC, we offer solar panels that combine cutting-edge technology, efficiency, and environmental responsibility. REC’s modules complement our dedication to a sustainable solar revolution. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-5">
                    <div class="card info-box3 h-100">
                        <div>
                            <div class="text-center border-bottom">
                                <img loading="lazy" loading="lazy" decoding="async" class="text-center rounded-6 mb-4"
                                    src="{{ url('assets/images/logo/axitec-logo.png') }}">
                            </div>
                            <div class="mt-2 p-2 text-center">
                                <h4 class="mb-1">AXITEC</h4>
                                <h6 class="mb-3">High - Quality German Solar Brand</h6>
                                <p>
                                    AXITEC is a trusted German solar brand known for its high-quality and durable solar modules. As a strategic partner, AXITEC allows us to deliver top-of-the-line solar panels that adhere to strict German engineering standards. With AXITEC, we ensure that your solar PV systems are built to last, providing you with consistent energy production and long-term savings. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
         
             
                <div class="col-lg-4 mb-5">
                    <div class="card info-box3 h-100">
                        <div>
                            <div class="text-center border-bottom">
                                <img loading="lazy" loading="lazy"  decoding="async" class="text-center rounded-6 mb-4"
                                src="{{ url('assets/images/logo/enphase-logo.png') }}">
                                <img loading="lazy" loading="lazy" style="width: 70px !important" decoding="async" class="text-center rounded-6 mb-4"
                                    src="{{ url('assets/images/logo/enphase-logo-1.png') }}">
                            </div>
                            <div class="mt-2 p-2 text-center">
                                <h4 class="mb-1">Enphase Energy</h4>
                                <h6 class="mb-3">Platinum Installer</h6>
                                <p>
                                    Enphase Energy is a pioneer in microinverter technology, providing innovative solutions for solar energy harvesting and monitoring. As a preferred installer, we integrate Enphase microinverters into our solar systems, ensuring greater energy production, module-level monitoring, and increased system reliability. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card info-box2 h-100">
                        <div>
                            <div class="text-center border-bottom">
                                <img loading="lazy" loading="lazy" decoding="async" class="text-center rounded-6 mb-4"
                                    src="{{ url('assets/images/logo/solar-edge-logo.png') }}">
                            </div>
                            <div class="mt-2 p-2 text-center">
                                <h4 class="mb-1">SolarEdge</h4>
                                <h6 class="mb-3">Preferred Partner</h6>
                                <p>
                                    SolarEdge is a world-leading provider of smart energy solutions, offering advanced solar inverters and power optimizers. As a preferred partner, SolarEdge empowers us to design and implement sophisticated solar systems with enhanced monitoring, safety, and energy optimization features, providing you with more control over your solar energy. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                


            </div>
        </div>
    </section>

    <section
        style="background-image: url({{url('assets/images/pictures/inner_banner_products.jpg')}});background-position: center center;background-size: cover;">
        <div class="container">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6  py-5">

                    </div>
                    <div class="col-lg-6 d-flex align-items-center" style="height:620px;">
                        <div class="bg-dark text-light" style="opacity: 0.8;">
                            <div class="p-5">
                                <h3>Let’s Make the Planet Cleaner
                                </h3>
                                <p class="mt-2 " style="line-height: 2;">
                                    With our major technology partnerships, GadgEon Solar ensures that your solar journey is fueled by the latest innovations and superior quality components. By combining our expertise with the best in the industry, we create solar solutions that power a sustainable and brighter future for all. Trust in GadgEon Solar for cutting-edge technology, excellent service, and a commitment to excellence in every solar project we undertake. 
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Cinema Listening Level Categories -->

    @include('contact-section')

    <!-- Content Section -->
    @include('call-us-now')

    @include('locations')
@endsection