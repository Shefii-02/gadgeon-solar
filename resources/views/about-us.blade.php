@extends('layout.layout')
@section('contents')
    <!-- Banner section -->
    <section class="banner-section">
        <div class="container">
            <div class="col-lg-12 top-content ">
                <div class="row">
                    <div class="col-lg-7 d-flex align-items-end">
                        <div>
                            <h1 class="display-5 fw-semibold" style="line-height: 1.3;">
                                <span class="text-black-50 fw-normal">Together, we shine brighter, and together,</span> 
                                <span class="fw-bold">we make a difference!</span>
                            </h1>
                           
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

    <section class="pt-5 second-section">
        <img loading="lazy" src="{{url('assets/images/pictures/about-image-2.jpg')}}" class="w-100">
    </section>
    <section class="py-5">
        <div class="container" >
            <div class="row">
                <div class="col-lg-10 mx-auto py-5 ">
                    <div class="">
                        <p class="text-center ">
                            At GadgEon, we are more than just a solar solutions company – we are the architects of a cleaner, greener, and sustainable future. With a passion for innovation and a commitment to excellence, we offer cutting-edge solar technologies that empower individuals, businesses, and communities to embrace renewable energy and make a positive impact on the planet.
                        </p>
                        <h1 class="fw-normal text-center text-muted mt-5" style="line-height: 1.8;">
                            Why Choose GadgEon Solar Solutions?
                        </h1>
                    </div>
                </div>
                 <div class="col-lg-12 ">
                    <div class="row ">
                        <div class="col-lg-4 mb-3">
                            <div class="d-flex justify-content-center flex-column align-items-center">
                                <img loading="lazy" src="https://www.gadgeon.ae/wp-content/uploads/2023/10/artifical-intelligence1.png"
                                    class="w-50">
                                <span class="my-4 h5">Unparalleled Expertise</span>
                                <p class="text-center mt-2 px-2">
                                    With years of experience and a team of solar experts, we bring unmatched
                                    knowledge and skill to every solar project we undertake, ensuring seamless execution and
                                    exceptional results.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4  mb-3">
                            <div class="d-flex justify-content-center flex-column align-items-center mt-5">
                                <img loading="lazy" src="https://www.gadgeon.ae/wp-content/uploads/2023/10/development.png" class="w-50">
                                <span class="my-4 h5">Green Innovations</span>
                                <p class="text-center mt-2  px-2">
                                    GadgEon is at the forefront of solar innovation, constantly exploring new
                                    technologies and breakthroughs to offer you the most advanced, efficient, and
                                    eco-friendly solar
                                    solutions.

                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4  mb-3">
                            <div class="d-flex justify-content-center flex-column align-items-center ">
                                <img loading="lazy" src="https://www.gadgeon.ae/wp-content/uploads/2023/10/development.png" class="w-50">
                                <span class="my-4 h5">Customer-Centric Approach</span>
                                <p class="text-center mt-2 px-2">
                                    We prioritize your needs and preferences, tailoring our solar offerings
                                    to suit your unique requirements, and providing exceptional customer service every step
                                    of the way.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-4  mb-3">
                            <div class="d-flex justify-content-center flex-column align-items-center mt-5">
                                <img loading="lazy" src="https://www.gadgeon.ae/wp-content/uploads/2023/10/data-analytics.png"
                                    class="w-50">
                                <span class="my-4 h5">Sustainability as a Lifestyle</span>
                                <p class="text-center mt-2  px-2">
                                    Beyond just solar installations, we aim to foster a culture of
                                    sustainability. Our solutions empower you to lead a green lifestyle, reducing your
                                    dependence on
                                    conventional energy sources.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4  mb-3">
                            <div class="d-flex justify-content-center flex-column align-items-center">
                                <img loading="lazy" src="https://www.gadgeon.ae/wp-content/uploads/2023/10/deployment.png" class="w-50">
                                <span class="my-3 h5">Quality & Reliability</span>
                                <p class="text-center mt-2  px-2">
                                    We source the finest solar components and materials, ensuring the durability,
                                    reliability, and longevity of our solar systems, backed by industry-leading warranties.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4  mb-3">
                            <div class="d-flex justify-content-center flex-column align-items-center mt-5">
                                <img loading="lazy" src="https://www.gadgeon.ae/wp-content/uploads/2023/10/data-analytics.png"
                                    class="w-50">
                                <span class="my-4 h5">Aesthetic Integration</span>
                                <p class="text-center mt-2  px-2">At GadgEon, we understand that solar solutions should blend
                                    harmoniously
                                    with your surroundings. Our design expertise ensures a seamless integration that
                                    complements your
                                    property's aesthetics.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        style="background-image: url(/assets/images/pictures/inner_baner.jpg);background-position: center center;background-size: cover;">
        <div class="container">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6  py-5">

                    </div>
                    <div class="col-lg-6 d-flex align-items-center" style="height:620px;">
                        <div class="bg-dark text-light" style="opacity: 0.8;">
                            <div class="p-5">
                                <h3>Our Mission</h3>
                                <p class="mt-2 " style="line-height: 2;">
                                    To be the beacon of light in the solar industry, illuminating the path towards
                                    sustainable living by
                                    providing top-notch integrated solar solutions that inspire change, reduce carbon
                                    footprints, and
                                    promote eco-consciousness.
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
           <div class="col-lg-10 mx-auto py-2 ">
                <div class="">
                    <h1 class="fw-normal text-center text-muted fw-bold" style="line-height: 1.8;">
                       About Gadgeon
                    </h1>
                </div>
            </div>
            <div class="row pt-5  px-5">
                <div class="col-lg-10 mx-auto mb-5">
                    <div class="card " style="border: 4px solid gray">
                        <div class="row">
                            <div class=" icon-part position-relative">
                                <div class=" icon-div" >
                                    <img loading="lazy" loading="lazy" decoding="async" class="text-center icon"  style="width:150px"
                                        src="https://www.gadgeon.ae/wp-content/uploads/2023/10/1.png">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="content-div">
                                    <h2 class="mb-3 title">Unique Value Proposition</h2>
                                    <ul class="p-0 m-0 text-muted points">
                                        <li class="mb-3"><i class="bi bi-arrow-right"></i> End-to-end solution capability in Digital Transformation                                        </li>
                                        <li class="mb-3"><i class="bi bi-arrow-right"></i> Create business value by making sense from Data</li>
                                        <li class="mb-3"><i class="bi bi-arrow-right"></i> Engineering Excellence is one of our core values</li>
                                        <li class="mb-3"><i class="bi bi-arrow-right"></i> Never defaulted on quality of deliverables</li>
                                    </ul>
                                </div>
                            </div>
                            
                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 px-5">
                    <div class="row mb-5">
                        <div class="col-lg-5 mb-2">
                            <div class="card " style="border: 4px solid gray">
                                <div class="row">
                                    <div class=" icon-part position-relative">
                                        <div class=" icon-div" >
                                            <img loading="lazy" loading="lazy" decoding="async" class="text-center icon"  style="width:150px"
                                                src="https://www.gadgeon.ae/wp-content/uploads/2023/10/2.png">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="content-div ">
                                            <h2 class="mb-3 title">Background</h2>
                                            <ul class="p-0 m-0 text-muted  points">
                                                <li class="mb-3"><i class="bi bi-arrow-right"></i> Established in 2011</li>
                                                <li class="mb-3"><i class="bi bi-arrow-right"></i> 900+ Client focused Engineers</li>
                                                <li class="mb-3"><i class="bi bi-arrow-right"></i> Over 100 Customers</li>
                                                <li class="mb-3"><i class="bi bi-arrow-right"></i> Headquartered in Kochi, India</li>
                                           </ul>
                                        </div>
                                    </div>
                                    
                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 mb-1"></div>
                        <div class="col-lg-1 mb-1"></div>
                        <div class="col-lg-5 mb-2">
                            <div class="card " style="border: 4px solid gray">
                                <div class="row">
                                    <div class="icon-part   position-relative">
                                        <div class=" icon-div" >
                                            <img loading="lazy" loading="lazy" decoding="async" class="text-center icon"  style="width:150px"
                                                src="https://www.gadgeon.ae/wp-content/uploads/2023/10/3.png">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="content-div">
                                            <h2 class="mb-3 title">Global Presence </h2>
                                            <ul class="p-0 m-0 text-muted  points">
                                                <li class="mb-3"><i class="bi bi-arrow-right"></i> Gadgeon Systems Inc (USA)</li>
                                                <li class="mb-3"><i class="bi bi-arrow-right"></i> Gadgeon Europe (Belgium)</li>
                                                <li class="mb-3"><i class="bi bi-arrow-right"></i> Gadgeon Middle East (Dubai)</li>
                                                <li class="mb-3"><i class="bi bi-arrow-right"></i> Gadgeon Smart Systems (India)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-5 mb-2">
                            <div class="card " style="border: 4px solid gray">
                                <div class="row">
                                    <div class="icon-part   position-relative">
                                        <div class="icon-div" >
                                            <img loading="lazy" loading="lazy" decoding="async" class="text-center icon"  style="width:150px"
                                                src="https://www.gadgeon.ae/wp-content/uploads/2023/10/4.png">
                                        </div>
                                    </div>



                                    <div class="col-lg-12">
                                        <div class="content-div">
                                            <h2 class="mb-3 title">Quality</h2>
                                            <ul class="p-0 m-0 text-muted  points">
                                                <li class="mb-2"><i class="bi bi-arrow-right"></i> ISO 9001:2015</li>
                                                <li class="mb-2"><i class="bi bi-arrow-right"></i> ISO 13485:2016</li>
                                           </ul>
                                           <img loading="lazy" loading="lazy" decoding="async" class="text-left w-50 mt-2" src="https://www.gadgeon.ae/wp-content/uploads/2023/10/Image-6@2x.png" >
                                     
                                        </div>
                                    </div>
                                    
                                  
                                </div>
                            </div>
                        </div>
                        <dv class="col-lg-2 mb-2"></dv>
                        <div class="col-lg-5 mb-2">
                            <div class="card " style="border: 4px solid gray">
                                <div class="row">
                                    <div class=" icon-part  position-relative">
                                        <div class="text-left  icon-div" >
                                            <img loading="lazy" loading="lazy" decoding="async" class="text-center icon"  style="width:150px"
                                                src="https://www.gadgeon.ae/wp-content/uploads/2023/10/5.png">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="content-div  text-left">
                                            <h2 class="mb-3 title">Subsidiaries</h2>
                                            <ul class="p-0 m-0 text-muted  points">
                                                <li class="mb-2"><i class="bi bi-arrow-right"></i> Gadgeon Lifestyle</li>
                                                <li class="mb-2"><i class="bi bi-arrow-right"></i> Gadgeon Medical Systems</li>
                                            </ul>
                                            <div class="row mt-3">
                                                <div class="col-lg-6">
                                                    <img loading="lazy" loading="lazy" decoding="async" class="text-center w-100"
                                                src="https://www.gadgeon.ae/wp-content/uploads/2023/10/logo-01-1.svg">
                                                    
                                                </div>
                                                <div class="col-lg-6">
                                                    <img loading="lazy" loading="lazy" decoding="async" class="text-center w-100"
                                                src="https://www.gadgeon.ae/wp-content/uploads/2023/10/logo-02-1.svg">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- global Section -->
    <section class="py-5">
        <div class="container-fluid">
                <div class="col-lg-12 mx-auto text-center py-5">
                    <h1 class="fw-bold" style="line-height: 1.4;">
                        Our Global Presence
                    </h1>
                    <div class="mt-5">
                        <p class="h6">Global Presence. Local Focus.</p>
                    </div>
                    <div class="col-lg-12 mx-auto py-4">
                        <img loading="lazy" src="https://www.gadgeon.ae/wp-content/uploads/2023/10/1-1.png" class="w-75">
                    </div>
                </div>
        </div>
    </section>

    <section 
        style="background-image: url(https://www.gadgeon.ae/wp-content/uploads/2023/10/bg2.jpg);background-position: center center;background-size: cover;">
        <div class="container">
            <div class="col-lg-12  d-flex align-items-center " style="height:600px">
                <div class="row ">
                    <div class="col-lg-4">
                        <div class="bg-dark text-light" style="opacity: 0.8;">
                            <div class="bg-white  text-center col-lg-10 mx-auto " style="top: -25px;position: relative;">
                                <img loading="lazy" src="https://www.gadgeon.ae/wp-content/uploads/2023/09/gadgeon-middle-east.png" class="w-50 p-3">
                            </div>
                            <div class="px-4 pb-5 text-center">
                                <h3>Gadgeon Middle East</h3>
                                <p class="mt-2 " style="line-height: 2;">Innovation partner for digital transformation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="bg-dark text-light" style="opacity: 0.8;">
                            <div class="bg-white  text-center col-lg-10 mx-auto " style="top: -25px;position: relative;">
                                <img loading="lazy" src="https://www.gadgeon.ae/wp-content/uploads/2023/10/gadgeon-lifestyle-logo@2x.png" class="w-50 p-3">
                            </div>
                            <div class="px-4 pb-5  text-center">
                                <h3> Gadgeon Lifestyle</h3>
                                <p class="mt-2 " style="line-height: 2;">Personalized smart home control at your.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="bg-dark text-light" style="opacity: 0.8;">
                            <div class="bg-white  text-center col-lg-10 mx-auto " style="top: -25px;position: relative;">
                                <img loading="lazy" src="https://www.gadgeon.ae/wp-content/uploads/2023/10/gadgeon-smart-systems-logo@2x.png" class="w-50 p-3">
                            </div>
                            <div class="px-4 pb-5 text-center">
                                <h3>Gadgeon Smart Systems</h3>
                                <p class="mt-2 " style="line-height: 2;">Innovation partner for digital transformation.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow-custome"></div>
    </section>
    
    @include('locations')

@endsection