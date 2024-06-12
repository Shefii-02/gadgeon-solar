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
                                Commercial Solar Solutions
                            </span>
                            <h1 class="display-6 fw-semibold" >
                                <span class="fw-bold">
                                    GadgEon Solar caters
                                </span>
                                <span class="text-black-50 fw-normal"> to the energy needs of businesses and commercial establishments, </span>
                            </h1>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="text-end mt-3">
                            <img loading="lazy" decoding="async" width="50%"
                                src="{{url('assets/images/pictures/banner-dot.png')}}">
                        </div>
                        <div class="text-end mt-5">
                            <h3 class="text-start fs-4">
                                   
                                <span class="text-black-50 ">offering scalable solar solutions  </span> that promote sustainability
                                 <span class="text-black-50 ">while providing economic benefits.</span>
                            </h3>
                        </div>
                    </div>
                             @include('social-media-links')
                </div>
            </div>
        </div>
    </section>
    
       

    <section class="pt-5 second-section">
        <img loading="lazy" src="{{ url('assets/images/01.jpg') }}" class="w-100">

    </section>
    <section class="">
        <div class="container">
                
            <div class="row">
                <div class="col-lg-6 m-0 p-0 order-0 order-lg-2">
                    <img loading="lazy" src="{{ url('assets/images/pictures/solar_energy_management_solutions.jpg') }}" class="w-100">
                </div>
                <div class="col-lg-6 d-flex justify-content-center flex-column m-0 p-0 ">
                    <div class="p-5">
                        <h1>Solar Energy Management Solutions</h1>
                        <p class="mt-5">
                            Optimize your energy consumption and savings with our 
                            intelligent solar energy management systems, allowing you to monitor, control, and optimize energy 
                            usage.
                        </p>
                    </div>
    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 m-0 p-0">
                    <img loading="lazy" src="{{ url('assets/images/pictures/commercialsolar.jpg') }}" class="w-100">
                </div>
                <div class="col-lg-6 d-flex justify-content-center flex-column m-0 p-0">
                    <div class="p-5">
                        <h1>Commercial Solar Power Systems</h1>
                        <p class="mt-5">
                            We design and install large-scale solar power systems that enable 
                            businesses to generate their own clean energy, reducing operational costs and enhancing corporate 
                            sustainability efforts.
                        </p>
                    </div>
    
                </div>
              
    
            </div>
        </div>
    </section>
    @include('common-tile', ['image' => 'commercial-solar_down.jpg'])

   
    <!-- Global Partnership -->
    @include('partnership')

    <!-- Cinema Listening Level Categories -->

    @include('contact-section')

    <!-- Content Section -->
    @include('call-us-now')

    @include('locations')
@endsection
