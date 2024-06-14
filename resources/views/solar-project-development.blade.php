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
                                Solar Project Development
                            </span>
                             
                            <h1 class="display-6 fw-semibold" >
                                <span class="fw-bold">
                                   GadgEon Solar offers
                                </span>
                                <span class="text-black-50 fw-normal"> end-to-end project development services </span>
                            </h1>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="text-end mt-3">
                            <img  loading="lazy" decoding="async" width="50%"
                                src="{{url('assets/images/pictures/banner-dot.png')}}">
                        </div>
                        <div class="text-end mt-5">
                            <h3 class="text-start fs-5">
                                <span class="text-black-50 ">guiding you through every stage of your solar journey.</span> Our experienced team takes care of the entire process,
                                 <span class="text-black-50 ">from concept to completion, which includes</span>
                            </h3>
                        </div>
                    </div>
                             @include('social-media-links')
                </div>
            </div>
        </div>
    </section>
    
 

    <section class="pt-5 second-section">
        <img  loading="lazy" src="{{ url('assets/images/pictures/newbanner-project-development.jpg') }}" class="w-100">

    </section>
    





    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-0 p-0 order-0 order-lg-2">
                    <img  loading="lazy" src="{{ url('assets/images/pictures/Financial-Analysis.jpg') }}" class="w-100">
                </div>
                <div class="col-lg-6 d-flex justify-content-center flex-column m-0 p-0">
                    
                    <div class="p-5">
                        <h1>Financial Analysis and ROI Evaluation</h1>
                        <p class="mt-5">
                            Our experts conduct thorough financial analysis, providing 
                            you with transparent insights into the financial benefits of going solar.
                        </p>
                    </div>
    
                </div>
               
    
            </div>
            <div class="row">
                <div class="col-lg-6 m-0 p-0">
                    <img  loading="lazy" src="{{ url('assets/images/pictures/Custom-Solar-Designs.jpg') }}" class="w-100">
                </div>
                <div class="col-lg-6 d-flex justify-content-center flex-column m-0 p-0">
                    <div class="p-5">
                         <h1>Custom Solar Designs and Engineering</h1>
                        <p class="mt-5">
                            We create custom solar solutions tailored to your specific 
                            requirements, ensuring optimal energy generation and system efficiency.
                        </p>
                    </div>
    
                </div>
              
    
            </div>


            <div class="row">
                <div class="col-lg-6 m-0 p-0 order-0 order-lg-2">
                    <img  loading="lazy" src="{{ url('assets/images/pictures/Permitting-and-Regulatory-Support.jpg') }}" class="w-100">
                </div>
                <div class="col-lg-6 d-flex justify-content-center flex-column m-0 p-0">
                    
                    <div class="p-5">
                        <h1>Permitting and Regulatory Support</h1>
                        <p class="mt-5">
                            We handle all necessary permits and regulatory requirements, 
                            streamlining the approval process for a smooth and hassle-free solar installation.
                        </p>
                    </div>
    
                </div>
               
    
            </div>
            <div class="row">
                <div class="col-lg-6 m-0 p-0">
                    <img  loading="lazy" src="{{ url('assets/images/pictures/Turnkey-Project-Implementation.jpg') }}" class="w-100">
                </div>
                <div class="col-lg-6 d-flex justify-content-center flex-column m-0 p-0">
                    <div class="p-5">
                         <h1>Turnkey Project Implementation</h1>
                        <p class="mt-5">
                            Our turnkey solutions cover everything, from procurement to 
                            installation, ensuring a seamless and efficient project execution.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


 @include('common-tile', ['image' => 'solar-project-development_down.jpg'])
   
    <!-- Global Partnership -->
    @include('partnership')

    <!-- Cinema Listening Level Categories -->

    @include('contact-section')

    <!-- Content Section -->
    @include('call-us-now')

    @include('locations')
@endsection
