@extends('layout.layout')
@section('contents')
    <!-- Banner section -->
    <section>
        <div class="container">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-7 d-flex align-items-end">
                        <div >

                            <span class="text-theme fw-normal pb-4">
                               Catalyzing Industry Evolution:
                            </span>
                            <h1 class="display-5 fw-semibold" style="line-height: 1.3;">

                                <span class="text-black-50 fw-normal">Gadgeon's   </span> 
                                <span class="fw-bold"> IIoT Solutions for Tomorrow's</span>
                                <span class="text-black-50 fw-normal">Challenges</span>
                            </h1>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="text-end mt-3">
                            <img decoding="async" width="50%" 
                                src="{{url('assets/images/pictures/banner-dot.png')}}">
                        </div>
                        <div class="text-end mt-5">
                            <h3 class="text-start">
                                <span class="text-black-50 ">Gadgeon IIoT: </span> Explore cutting-edge solutions
                                <span class="text-black-50 ">for seamless industrial connectivity and 
                                    optimization</span>
                            </h3>
                        </div>
                    </div>
                             @include('social-media-links')
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5 second-section">
        <img src="{{url('assets/images/pictures/image_banner_proudct.jpg')}}" class="w-100">
    </section>
    <section >
        <div class="container">
           
            <div class="row">
                <div class="col-lg-6 m-0 p-0">
                    <img src="{{url('assets/images/products/02.png')}}" class="w-100">
                </div>
                <div class="col-lg-6 d-flex justify-content-center flex-column m-0 p-0">
                    <div class="p-5">
                        <h1>ELECTRICAL SWITCHGEARS & CONTROLS</h1>
                        <p class="mt-5">
                           Electrical switchgears and controls are critical components in power distribution systems, ensuring safety, reliability, and efficiency. They manage the flow of electricity, protect equipment from overloads and faults, and enable remote monitoring and control. These systems play a vital role in industrial, commercial, and residential settings, facilitating smooth and secure electrical operations.
                        </p>
                    </div>

                </div>

            </div>
            <div class="row">
                
                <div class="col-lg-6 m-0 p-0 order-0 order-lg-2">
                    <img src="{{url('assets/images/products/03.png')}}" class="w-100">
                </div>
                <div class="col-lg-6 d-flex justify-content-center flex-column m-0 p-0">
                    <div class="p-5">
                        <h1>Cables, connectors, and accessories</h1>
                        <p class="mt-5">
                           Cables, connectors, and accessories are essential for electrical and data networks. Cables transmit signals, connectors facilitate connections, and accessories ensure proper installation. Found in telecommunications, IT, and construction, they enable reliable connectivity and efficient operations.
                        </p>
                    </div>

                </div>
            </div>
            <div class="row">
                 <div class="col-lg-6 m-0 p-0">
                    <img src="{{url('assets/images/products/04.png')}}" class="w-100">
                </div>
                <div class="col-lg-6 d-flex justify-content-center flex-column m-0 p-0">
                    <div class="p-5">
                        <h1>Control panels and building accessories</h1>
                        <p class="mt-5">
                           Control panels and building accessories are vital for managing electrical systems in structures. Control panels regulate power distribution, while building accessories like switches and outlets facilitate user interaction. Together, they ensure safety, convenience, and efficient operation within buildings.
                        </p>
                    </div>

                </div>
               
            </div>
            <div class="row">
                
                <div class="col-lg-6 m-0 p-0 order-0 order-lg-2">
                    <img src="{{url('assets/images/products/05.png')}}" class="w-100">
                </div>
                <div class="col-lg-6 d-flex justify-content-center flex-column m-0 p-0">
                    <div class="p-5">
                        <h1>Sensors, vision, and identification</h1>
                        <p class="mt-5">
                        Sensors, vision, and identification technologies enable data capture and analysis in various applications. 
                        Sensors detect physical phenomena, vision systems provide visual insights, and identification tools verify and authenticate objects.
                        Together, they enhance automation, monitoring, and decision-making processes across industries.   
                        </p>
                    </div>

                </div>
            </div>
            <div class="row">
                 <div class="col-lg-6 m-0 p-0">
                    <img src="{{url('assets/images/products/06.png')}}" class="w-100">
                </div>
                <div class="col-lg-6 d-flex justify-content-center flex-column m-0 p-0">
                    <div class="p-5">
                        <h1>Field devices and instrumentation</h1>
                        <p class="mt-5">
                        Field devices and instrumentation are crucial for real-time data collection and control in industrial processes. 
                        These devices, such as sensors and actuators, 
                        measure and manipulate physical parameters, enabling precise monitoring and adjustment for optimal performance and efficiency.
                        </p>
                    </div>

                </div>
               
            </div>
             <div class="row">
                 
                <div class="col-lg-6 m-0 p-0 order-0 order-lg-2">
                    <img src="{{url('assets/images/products/07.png')}}" class="w-100">
                </div>
                <div class="col-lg-6 d-flex justify-content-center flex-column m-0 p-0">
                    <div class="p-5">
                        <h1>Industrial automation and control</h1>
                        <p class="mt-5">
                           Industrial automation and control systems streamline manufacturing processes by integrating machinery, 
                           sensors, and software. They enhance efficiency, accuracy, and safety while reducing labor costs. 
                           These systems enable real-time monitoring and optimization, driving productivity and competitiveness in modern industries.
                        </p>
                    </div>

                </div>
            </div>
            
        </div>
        

    </section>

    <section 
        style="background-image: url(assets/images/pictures/products-page-bg.jpeg);background-position: center center;background-size: cover;">
        <div class="container">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6  py-5">
        
                    </div>
                    <div class="col-lg-6 d-flex align-items-end" style="height:620px;">
                        <div class="bg-dark text-light">
                            <div class="p-5">
                                <h1 class="mb-4"> Expert Installation</h1>
                                <p class="mt-2 " style="line-height: 2;">
                                        Our seasoned professionals ensure seamless implementation of cutting-edge automation solutions tailored to your industry needs."
                                </p>
            
            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto text-center ">
                    <h1 class="fw-semibold">
                        Our Partners
                    </h1>
                    <p class="fs-6 mt-3">
                        Collaborating with trusted partners to deliver innovative solutions
                            tailored to your specific needs.
                    </p>
                </div>
            </div>
            <div class="col-lg-12 pt-5">
                    <div class="pdct-slider">
                        <div class="pdct-slider__wrp1 swiper-wrapper1">
                            <div class="pdct-slider__item swiper-slide">
                                <div class="pdct-slider__img">
                                    <img src="{{url('assets/images/products/product1.png')}}" alt="">
                                </div>
                                <div class="pdct-slider__content">
                                    <div class="pdct-slider__title">Eaton - Powering Business Worldwide</div>
                                    <div class="pdct-slider__text">We’re a power management company, but more importantly, what we do improves the quality of life and the environment. Our products, technologies and services make a difference in the world.</div>
                                    <a href="https://www.eaton.com/in/" target="_new" class="pdct-slider__button">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pdct-slider">
                        <div class="pdct-slider__wrp1 swiper-wrapper1">
                            <div class="pdct-slider__item swiper-slide">
                                <div class="pdct-slider__img  right-position order-0 order-lg-2">
                                    <img src="{{url('assets/images/products/product2.png')}}" alt="">
                                </div>
                                <div class="pdct-slider__content">
                                    <div class="pdct-slider__title">Masibus Automation And Instrumentation Pvt. Ltd</div>
                                    <div class="pdct-slider__text">Masibus, a leading industrial automation provider, serves 20,000+ customers across 50 verticals through 8 regional offices and an extensive dealer network.</div>
                                    <a href="https://www.masibus.co.in/" target="_new" class="pdct-slider__button">READ MORE</a>
                                </div>
                               
                            </div>
                        </div>
                    </div>

                    <div class="pdct-slider">
                        <div class="pdct-slider__wrp1 swiper-wrapper1">
                            <div class="pdct-slider__item swiper-slide">
                                <div class="pdct-slider__img">
                                    <img src="{{url('assets/images/products/product3.png')}}" alt="">
                                </div>
                                <div class="pdct-slider__content">
                                    <div class="pdct-slider__title">Delpheon- Accelerating IIoT</div>
                                    <div class="pdct-slider__text">
                                        A flexible and easy to deply Industrial IoT solution development platform, shortens your digital connectivity solution deployment by over 60% with minimum upfront investments. 
                                    </div>
                                    <a href="https://delpheon.io/" target="_new" class="pdct-slider__button">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pdct-slider">
                        <div class="pdct-slider__wrp1 swiper-wrapper1">
                            <div class="pdct-slider__item swiper-slide">
                                <div class="pdct-slider__img right-position  order-0 order-lg-2">
                                    <img src="{{url('assets/images/products/product4.png')}}" alt="">
                                </div>
                                <div class="pdct-slider__content">
                                    <div class="pdct-slider__title">Phoenix Contact</div>
                                    <div class="pdct-slider__text">
                                        Phoenix Contact, based in Germany, manufactures industrial automation, interconnection, and interface solutions including terminal blocks, relays, connectors, and more.
                                    </div>
                                </div>
                                
                            </div> 

                        </div>
                    </div>
                </div>
        </div>
    </section>
    @include('contact-section')

    <!-- Content Section -->
    <section class="py-5">
        <div class="container">
            <div class="col-lg-12">
                <div class="col-lg-8 mx-auto text-center py-5">
                    <h1 class="fw-semibold" style="line-height: 1.4;">
                        Contact us today to discuss your specific needs and schedule a consultation.
                    </h1>
                    <div class="mt-5">
                        <button class="btn btn-theme">Call Us Now</button>
                    </div>
                    <div class="col-lg-4 mx-auto">
                        <div class="mt-4 d-flex justify-content-around gap-2">
                            <div class=" d-flex align-items-center justify-content-center bg-white">
                                <a href=""><i class="bi bi-facebook fs-4"></i></a>
                            </div>
                            <div class=" d-flex align-items-center justify-content-center bg-white">
                                <a href=""><i class="bi bi-youtube fs-4"></i></a>
                            </div>
                            <div class=" d-flex align-items-center justify-content-center bg-white">
                                <a href=""><i class="bi bi-instagram fs-4"></i></a>
                            </div>
                            <div class=" d-flex align-items-center justify-content-center bg-white">
                                <a href=""><i class="bi bi-twitter fs-4"></i></a>
                            </div>
                            <div class=" d-flex align-items-center justify-content-center bg-white">
                                <a href=""><i class="bi bi-linkedin fs-4"></i></a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    
    @include('locations')

@endsection