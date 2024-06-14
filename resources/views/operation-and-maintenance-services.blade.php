@extends('layout.layout')
@section('contents')

    <!-- Banner section -->
 
    <section class="banner-section">
        <div class="container">
            <div class="col-lg-12 mt-5 top-content">
                <div class="row">
                    <div class="col-lg-7 d-flex align-items-end">
                        <div>
                            <span class="text-theme fw-normal pb-4">
                                Operation and Maintenance Services
                            </span>
                             
                            <h1 class="display-6 fw-semibold" style="line-height: 1.3;">
                                <span class="fw-bold">
                                    Ensuring Long-Term Performance and 
                                </span>
                                <span class="text-black-50 fw-normal"> Efficiency of Your Solar PV Systems </span>
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
        <img loading="lazy" src="{{ url('assets/images/pictures/o&m_main-banner.jpg') }}" class="w-100">

    </section>
      <!-- Content Section -->
      <section class="py-5 content-section">
        <div class="container">
            <div class="col-lg-12">
                <div class="col-lg-8 mx-auto text-center ">
                    <h1 class="fw-normal" data-aos="fade-up" data-aos-delay="500">
                        At GadgEon
                    </h1>
                    <p class="text-black-50 fw-normal mt-2">
                        our commitment to your solar journey doesn't end with installation. We offer
                        comprehensive Operation and Maintenance (O&M) services to ensure that your solar PV systems
                        continue to operate at peak performance, providing you with optimal energy production and
                        efficiency throughout their lifespan. Our O&M services are designed to minimize downtime, extend
                        the life of your solar systems, and maximize your return on investment.
                    </div>
            </div>
        </div>
    </section>

    <section class="pb-5">
        <div class="container" >
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="p-5">
                        <h1 class="fw-normal text-center text-muted" style="line-height: 1.8;">
                            Why Choose GadgEon O&M Services?
                        </h1>
                    </div>
                 </div>
                <div class="col-lg-12 ">
                    <div class="row " style="overflow-x:hidden">
                        <div class="col-lg-4 mb-3">
                            <div class="d-flex justify-content-center flex-column align-items-center">
                                <img loading="lazy" src="https://www.gadgeon.ae/wp-content/uploads/2023/10/artifical-intelligence1.png"
                                    class="w-50">
                                <span class="my-4 text-center h5" >Proactive Approach</span>
                                <p class="text-center mt-2 text-dark px-2">
                                    Our O&M services take a proactive approach to solar maintenance. We focus
                                    on regular inspections, monitoring, and preventive measures to identify and address
                                    potential issues
                                    before they become significant problems.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4  mb-3">
                            <div class="d-flex justify-content-center flex-column align-items-center mt-5">
                                <img loading="lazy" src="https://www.gadgeon.ae/wp-content/uploads/2023/10/development.png" class="w-50">
                                <span class="my-4 text-center h5" >Experienced Professionals</span>
                                <p class="text-center mt-2 text-dark px-2">
                                    Our dedicated team of solar technicians and engineers are highly skilled
                                    and experienced in handling a wide range of solar PV systems, ensuring that your
                                    installation is in
                                    expert hands
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4  mb-3">
                            <div class="d-flex justify-content-center flex-column align-items-center ">
                                <img loading="lazy" src="https://www.gadgeon.ae/wp-content/uploads/2023/10/development.png" class="w-50">
                                <span class="my-4 text-center h5" >Regular Performance Monitoring</span>
                                <p class="text-center mt-2 text-dark px-2">
                                    We utilize advanced monitoring systems to track the performance
                                    of your solar PV systems in real-time. This data allows us to optimize energy production
                                    and detect
                                    any deviations from expected performance.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-4  mb-3">
                            <div class="d-flex justify-content-center flex-column align-items-center mt-5">
                                <img loading="lazy" src="https://www.gadgeon.ae/wp-content/uploads/2023/10/data-analytics.png"
                                    class="w-50">
                                <span class="my-4 text-center h5" >Timely Support and Troubleshooting:</span>
                                <p class="text-center mt-2 text-dark px-2">
                                    Should any issues arise, our responsive support team is readily
                                    available to provide timely assistance and troubleshoot any technical challenges,
                                    ensuring minimal
                                    disruptions to your solar generation.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4  mb-3">
                            <div class="d-flex justify-content-center flex-column align-items-center">
                                <img loading="lazy" src="https://www.gadgeon.ae/wp-content/uploads/2023/10/deployment.png" class="w-50">
                                <span class="my-4 h5 text-center">Comprehensive Maintenance Services</span>
                                <p class="text-center mt-2 text-dark px-2">
                                    Our O&M services encompass all aspects of solar system
                                    maintenance, including cleaning, system testing, equipment inspections, and necessary
                                    repairs.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4  mb-3">
                            <div class="d-flex justify-content-center flex-column align-items-center mt-5">
                                <img loading="lazy" src="https://www.gadgeon.ae/wp-content/uploads/2023/10/data-analytics.png"
                                    class="w-50">
                                <span class="my-4 text-center h5" >Extended Equipment Life</span>
                                <p class="text-center mt-2 text-dark px-2">
                                    With regular maintenance and proactive care, we help extend the life of
                                    your solar PV components, protecting your investment and ensuring long-term savings.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        style="background-image: url({{ url('assets/images/pictures/o&m_down.jpg') }});background-position: center center;background-size: cover;">
        <div class="container">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6  py-5">

                    </div>
                    <div class="col-lg-6 d-flex align-items-center" style="height:620px;">
                        <div class="bg-dark text-light" style="opacity: 0.8;">
                            <div class="p-5">

                                <h3>Partner with Us for Reliable O&M Services</h3>

                                <p class="mt-2 " style="line-height: 2;">
                                    GadgEon's O&M services ensure that your solar PV systems operate optimally, providing
                                    you with the
                                    full benefits of clean and sustainable energy. Partner with us to safeguard your solar
                                    investment and
                                    pave the way for a brighter and greener future. Let our O&M experts handle the
                                    technicalities, so
                                    you can enjoy hassle-free solar energy for years to come.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="py-5 why-choose-gadgeon">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto text-center ">
                    <h1 class="fw-semibold">
                        Our O&M Services Include
                    </h1>

                </div>
            </div>
            <div class="row pt-5 justify-content-center">
                <div class="col-lg-4 mb-5">
                    <div class="card info-box2 h-100">
                        <div>
                            <div class="text-center border-bottom d-none">
                                <img loading="lazy" loading="lazy" decoding="async" class="text-center rounded-6 mb-2"
                                    src="{{ url('assets/images/logo/SunPower-logo.png') }}">
                            </div>
                            <div class="mt-1 p-2  text-center">
                                <h3 class="mb-3">Routine Inspections</h3>
                                <p class="p-0 m-0 text-light ">
                                    Scheduled inspections to assess the overall condition of your solar PV systems.
                                    Thorough examination of components, wiring, and mounting structures for signs of wear or
                                    damage.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-5">
                    <div class="card info-box3 h-100">
                        <div>
                            <div class="text-center border-bottom d-none">
                                <img loading="lazy" loading="lazy" decoding="async" class="text-center rounded-6 mb-2"
                                    src="{{ url('assets/images/logo/axitec-logo.png') }}">
                            </div>
                            <div class="mt-1 p-2 text-center">
                                <h3 class="mb-3">Performance Monitoring </h3>
                                <p class="p-0 m-0 text-light ">
                                    Utilization of advanced monitoring systems to track real-time energy production.
                                    Analysis of data to optimize system performance and identify potential inefficiencies.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card info-box2 h-100">
                        <div>
                            <div class="text-center border-bottom d-none">
                                <img loading="lazy" loading="lazy" decoding="async" class="text-center rounded-6 mb-2"
                                    src="{{ url('assets/images/logo/rec-logo.png') }}">
                            </div>
                            <div class="mt-1 p-2 text-center">
                                <h3 class="mb-3">Cleaning and Panel Maintenance</h3>
                                <p class="p-0 m-0 text-light ">
                                    Regular cleaning of solar panels to maintain optimal energy capture.
                                    Removal of dirt, debris, and contaminants that may hinder sunlight absorption.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-5">
                    <div class="card info-box3 h-100">
                        <div>
                            <div class="text-center border-bottom d-none">
                                <img loading="lazy" loading="lazy" decoding="async" class="text-center rounded-6 mb-2"
                                    src="{{ url('assets/images/logo/adani-solar-logo.png') }}">
                            </div>
                            <div class="mt-1 p-2 text-center">
                                <h3 class="mb-3">Inverter and Equipment Maintenance</h3>
                                <p class="p-0 m-0 text-light ">
                                    Inspection and testing of inverters and other electrical components.
                                    Calibration and adjustments to optimize performance.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card info-box2 h-100">
                        <div>
                            <div class="text-center border-bottom d-none">
                                <img loading="lazy" loading="lazy" decoding="async" class="text-center rounded-6 mb-2"
                                    src="{{ url('assets/images/logo/solar-edge-logo.png') }}">
                            </div>
                            <div class="mt-1 p-2 text-center">
                                <h3 class="mb-3">System Repairs and Troubleshooting</h3>
                                <p class="p-0 m-0 text-light ">
                                    Timely identification and resolution of system malfunctions or faults.
                                    Swift response to any technical issues to minimize downtime.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card info-box3 h-100">
                        <div>
                            <div class="text-center border-bottom d-none">
                                <img loading="lazy" loading="lazy" decoding="async" class="text-center rounded-6 mb-2"
                                    src="{{ url('assets/images/logo/enphase-logo.png') }}">
                            </div>
                            <div class="mt-1 p-2 text-center">
                                <h3 class="mb-3">Warranty Management</h3>
                                <p class="p-0 m-0 text-light ">
                                    Coordination with equipment manufacturers for warranty claims.
                                    Assistance with any warranty-related matters.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>
    
    @include('common-tile')

      

    <!-- Global Partnership -->
    @include('partnership')

    <!-- Cinema Listening Level Categories -->

    @include('contact-section')

    <!-- Content Section -->
    @include('call-us-now')

    @include('locations')

@endsection
