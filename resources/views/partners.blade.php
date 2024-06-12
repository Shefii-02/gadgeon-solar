@extends('layout.layout')
@section('contents')
    <!-- Banner section -->
    <section>
        <div class="container">
            <div class="col-lg-12 mt-5">
                <div class="row">
                    <div class="col-lg-7 d-flex align-items-end">
                        <div>
                            <h1 class="display-5 fw-semibold" style="line-height: 1.3;">
                                
                                <span class="text-black-50 fw-normal ">Bringing You the Best in </span>
                                <span class="fw-bold "> Solar Innovation and Quality</span>
                                <p class="mt-3">
                                    At GadgEon Solar, we believe in collaborating with industry-leading technology partners to offer our 
                                    customers the most advanced and reliable solar solutions. Our strategic partnerships with renowned 
                                    solar brands demonstrate our commitment to providing top-notch products and services that deliver 
                                    exceptional performance and efficiency. Through these partnerships, we bring cutting-edge 
                                    technology and high-quality components to empower you with the best solar solutions available.
                                </p>
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


    <section class="pt-5">
        <img loading="lazy" src="https://www.gadgeon.ae/wp-content/uploads/2023/10/bnr1.jpg" class="w-100">

    </section>



    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto text-center ">
                    <h1 class="fw-semibold">
                        GadgEon Solar Major Technology Partners
                    </h1>

                </div>
            </div>
            <div class="row pt-5">

                <div class="col-lg-12 px-5">
                    <div class="row mb-4">
                        <div class="col-lg-5 mb-2">
                            <div class="card " style="border: 4px solid gray">
                                <div class="row">
                                    <div class="  position-relative">
                                        <div class="text-left position-absolute" style="margin: 60px 0 0 -77px;">
                                            <img loading="lazy" loading="lazy" decoding="async" class="text-center" style="width:150px"
                                                src="https://www.gadgeon.ae/wp-content/uploads/2023/10/2.png">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mt-3 ms-5 p-5 text-left">
                                            <h3 class="mb-3">SunPower - From Maxeon Solar Technologies</h3>
                                            <p class="p-0 m-0 text-muted ">
                                                SunPower, a division of Maxeon Solar Technologies, is a globally recognized solar pioneer, known for 
                                                its high-efficiency solar panels and innovative solar technologies. As a premier technology partner, 
                                                SunPower enables us to offer our customers top-tier solar panels that maximize energy generation 
                                                and deliver unmatched reliability. Together with SunPower, we take a step towards a greener and 
                                                more sustainable future.
                                            </p>
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
                                    <div class="  position-relative">
                                        <div class="text-left position-absolute" style="margin: 60px 0 0 -77px;">
                                            <img loading="lazy" loading="lazy" decoding="async" class="text-center" style="width:150px"
                                                src="https://www.gadgeon.ae/wp-content/uploads/2023/10/3.png">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mt-3 ms-5 p-5 text-left">
                                            <h3 class="mb-3">AXITEC - High-Quality German Solar Brand </h3>
                                            <p class="p-0 m-0 text-muted ">
                                                AXITEC is a trusted German solar brand known for its high-quality and durable solar modules. As a 
                                                strategic partner, AXITEC allows us to deliver top-of-the-line solar panels that adhere to strict 
                                                German engineering standards. With AXITEC, we ensure that your solar PV systems are built to last, 
                                                providing you with consistent energy production and long-term savings.
                                            </p>
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
                                    <div class="  position-relative">
                                        <div class="text-left position-absolute" style="margin: 60px 0 0 -77px;">
                                            <img loading="lazy" loading="lazy" decoding="async" class="text-center" style="width:150px"
                                                src="https://www.gadgeon.ae/wp-content/uploads/2023/10/4.png">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mt-3 ms-5 p-5 text-left">
                                            <h3 class="mb-3">REC - Renewable Energy Corporation</h3>
                                            <p class="p-0 m-0 text-muted ">
                                                REC is a leading global provider of solar energy solutions, renowned for its commitment to 
                                                sustainability and product excellence. By partnering with REC, we offer solar panels that combine
                                                cutting-edge technology, efficiency, and environmental responsibility. REC's modules complement
                                                our dedication to a sustainable solar revolution.
                                            </p>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <dv class="col-lg-2 mb-2"></dv>
                        <div class="col-lg-5 mb-2">
                            <div class="card " style="border: 4px solid gray">
                                <div class="row">
                                    <div class="  position-relative">
                                        <div class="text-left position-absolute" style="margin: 60px 0 0 -77px;">
                                            <img loading="lazy" loading="lazy" decoding="async" class="text-center" style="width:150px"
                                                src="https://www.gadgeon.ae/wp-content/uploads/2023/10/5.png">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mt-3 ms-5 p-5 text-left">
                                            <h3 class="mb-3"> Adani Solar</h3>
                                            <p class="p-0 m-0 text-muted ">
                                                Adani Solar is a prominent solar manufacturer known for its high-performance solar panels and 
                                                commitment to sustainable energy solutions. With Adani Solar as our technology partner, we 
                                                enhance our solar offerings with reliable and efficient solar panels, contributing to a cleaner and 
                                                greener energy landscape.

                                            </p>
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
                                    <div class="  position-relative">
                                        <div class="text-left position-absolute" style="margin: 60px 0 0 -77px;">
                                            <img loading="lazy" loading="lazy" decoding="async" class="text-center" style="width:150px"
                                                src="https://www.gadgeon.ae/wp-content/uploads/2023/10/4.png">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mt-3 ms-5 p-5 text-left">
                                            <h3 class="mb-3">REC - Renewable Energy Corporation</h3>
                                            <p class="p-0 m-0 text-muted ">
                                                REC is a leading global provider of solar energy solutions, renowned for its commitment to 
                                                sustainability and product excellence. By partnering with REC, we offer solar panels that combine
                                                cutting-edge technology, efficiency, and environmental responsibility. REC's modules complement
                                                our dedication to a sustainable solar revolution.
                                            </p>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <dv class="col-lg-2 mb-2"></dv>
                        <div class="col-lg-5 mb-2">
                            <div class="card " style="border: 4px solid gray">
                                <div class="row">
                                    <div class="  position-relative">
                                        <div class="text-left position-absolute" style="margin: 60px 0 0 -77px;">
                                            <img loading="lazy" loading="lazy" decoding="async" class="text-center" style="width:150px"
                                                src="https://www.gadgeon.ae/wp-content/uploads/2023/10/5.png">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mt-3 ms-5 p-5 text-left">
                                            <h3 class="mb-3"> Adani Solar</h3>
                                            <p class="p-0 m-0 text-muted ">
                                                Adani Solar is a prominent solar manufacturer known for its high-performance solar panels and 
                                                commitment to sustainable energy solutions. With Adani Solar as our technology partner, we 
                                                enhance our solar offerings with reliable and efficient solar panels, contributing to a cleaner and 
                                                greener energy landscape.

                                            </p>
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
                                    <div class="  position-relative">
                                        <div class="text-left position-absolute" style="margin: 60px 0 0 -77px;">
                                            <img loading="lazy" loading="lazy" decoding="async" class="text-center" style="width:150px"
                                                src="https://www.gadgeon.ae/wp-content/uploads/2023/10/4.png">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mt-3 ms-5 p-5 text-left">
                                            <h3 class="mb-3">SolarEdge - Preferred Partner</h3>
                                            <p class="p-0 m-0 text-muted ">
                                                SolarEdge is a world-leading provider of smart energy solutions, offering advanced solar inverters 
                                                and power optimizers. As a preferred partner, SolarEdge empowers us to design and implement 
                                                sophisticated solar systems with enhanced monitoring, safety, and energy optimization features, 
                                                providing you with more control over your solar energy.
                                            </p>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <dv class="col-lg-2 mb-2"></dv>
                        <div class="col-lg-5 mb-2">
                            <div class="card " style="border: 4px solid gray">
                                <div class="row">
                                    <div class="  position-relative">
                                        <div class="text-left position-absolute" style="margin: 60px 0 0 -77px;">
                                            <img loading="lazy" loading="lazy" decoding="async" class="text-center" style="width:150px"
                                                src="https://www.gadgeon.ae/wp-content/uploads/2023/10/5.png">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mt-3 ms-5 p-5 text-left">
                                            <h3 class="mb-3"> Enphase Energy - Preferred Installer</h3>
                                            <p class="p-0 m-0 text-muted ">
                                                Enphase Energy is a pioneer in microinverter technology, providing innovative solutions for solar 
                                                energy harvesting and monitoring. As a preferred installer, we integrate Enphase microinverters into 
                                                our solar systems, ensuring greater energy production, module-level monitoring, and increased 
                                                system reliability.

                                            </p>
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

    <section
        style="background-image: url(https://www.gadgeon.ae/wp-content/uploads/2023/10/about-gadgeon-me.jpg);background-position: center center;background-size: cover;">
        <div class="container">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6  py-5">

                    </div>
                    <div class="col-lg-6 d-flex align-items-center" style="height:620px;">
                        <div class="bg-dark text-light" style="opacity: 0.8;">
                            <div class="p-5">
                                <p class="mt-2 " style="line-height: 2;">
                                    With our major technology partnerships, GadgEon Solar ensures that your solar journey is fueled by 
                                    the latest innovations and superior quality components. By combining our expertise with the best in 
                                    the industry, we create solar solutions that power a sustainable and brighter future for all. Trust in 
                                    GadgEon Solar for cutting-edge technology, excellent service, and a commitment to excellence in 
                                    every solar project we undertake.
                                </p>

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
                    <img loading="lazy" src="https://www.gadgeon.ae/wp-content/uploads/2023/10/1-1.png" class="w-100">
                </div>
            </div>
        </div>
    </section>

    <section class="pb-5">
        <div class="container">
            <div class="col-lg-12">
                <div class=" col-lg-10 mx-auto mb-5">
                    <h1 class="fw-bold text-center mb-5" style="line-height: 1.4;">
                        Why Choose GadgEon Solar?
                    </h1>
                    <p class="text-muted text-center">
                        Join the GadgEon Solar family today and be part of the solar-powered movement that lights up a
                        greener, cleaner, and more sustainable world. Together, let's harness the sun's energy to power a
                        brighter tomorrow!
                    </p>
                </div>
                
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-3 mb-3 m-3 text-center card border-0 shadow rounded-5  ">
                        <div class=" ">
                            <div class="card-body">
                                <h3 class="fw-bold h5 my-3">Expertise and Innovation</h3>
                                <p>GadgEon Solar stands at the forefront of solar technology, continuously
                                    exploring innovative solutions to optimize solar energy harnessing and storage, ensuring
                                    cutting edge systems for our customers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-3 m-3 text-center card border-0 shadow rounded-5   ">
                        <div class=""> 
                            <div class="card-body">
                                <h3 class="fw-bold h5 my-3">Passion for Sustainability</h3>
                                <p>We are driven by a profound commitment to sustainability, aiming to
                                    accelerate the transition to clean, renewable energy sources, and reduce our global
                                    carbon footprint
                                    significantly. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-3 m-3 text-center card border-0 shadow rounded-5   ">
                        <div class="">
                            <div class="card-body">
                                <h3 class="fw-bold h5 my-3">Customer-Centric Approach</h3>
                                <p>At GadgEon Solar, every customer is unique, and we listen attentively to
                                    your needs and aspirations. Our expert team works closely with you, tailoring solar
                                    solutions that
                                    perfectly fit your energy requirements and budget. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-3 m-3 text-center card border-0 shadow rounded-5   ">
                        <div class="">
                            <div class="card-body">
                                <h3 class="fw-bold h5 my-3">Unparalleled Quality</h3>
                                <p>We believe in the uncompromising quality of our solar products and services.
                                    Our partnerships with trusted suppliers and rigorous quality assurance ensure reliable,
                                    durable, and
                                    high-performing solar solutions. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-3 m-3 text-center card border-0 shadow rounded-5   ">
                        <div class="">
                            <div class="card-body">
                                <h3 class="fw-bold h5 my-3">Sustainable Lifestyle Advocates</h3>
                                <p>More than just a solar company, we aim to cultivate a culture of
                                    sustainable living. We inspire individuals and communities to embrace clean energy and
                                    adopt eco￾conscious practices in their daily lives. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-3 m-3 text-center card border-0 shadow rounded-5   ">
                        <div class="">
                            <div class="card-body">
                                <h3 class="fw-bold h5 my-3">End-to-End Services</h3>
                                <p>From initial consultation to design, installation, and post-installation support,
                                    GadgEon Solar provides a seamless and hassle-free solar experience, making the journey
                                    to
                                    renewable energy a smooth one. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-3 m-3 text-center card border-0 shadow rounded-5  ">
                        <div class=" ">
                            <div class="card-body">
                                <h3 class="fw-bold h5 my-3">Aesthetics and Integration</h3>
                                <p> We understand the importance of aesthetics in any project. Our solar
                                    installations are designed to blend seamlessly with your property, maintaining the
                                    beauty of your
                                    surroundings. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-3 m-3 text-center card border-0 shadow rounded-5  ">
                        <div class=" ">
                            <div class="card-body">
                                <h3 class="fw-bold h5 my-3">Reliability and Performance </h3>
                                <p>Our solar systems are engineered to deliver consistent performance
                                    and efficiency throughout their lifespan. With comprehensive warranties, you can trust
                                    in the
                                    longevity and reliability of our solutions. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-3 m-3 text-center card border-0 shadow rounded-5   ">
                        <div class="">
                            <div class="card-body">
                                <h3 class="fw-bold h5 my-3">Social and Environmental Responsibility</h3>
                                <p>As a responsible corporate citizen, GadgEon Solar actively
                                    participates in community-driven initiatives, promoting solar education, and
                                    contributing to local
                                    sustainable development. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-3 m-3 text-center card border-0 shadow rounded-5  ">
                        <div class=" ">
                            <div class="card-body">
                                <h3 class="fw-bold h5 my-3">Global Impact</h3>
                                <p> By choosing GadgEon Solar, you are not only making an impact on your property but
                                    also contributing to a global effort to combat climate change and create a sustainable
                                    future for
                                    generations to come. </p>
                            </div>
                        </div>
                    </div>
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
                                <img loading="lazy" src="https://www.gadgeon.ae/wp-content/uploads/2023/09/gadgeon-middle-east.png"
                                    class="w-50 p-3">
                            </div>
                            <div class="px-4 pb-5 text-center">
                                <h3>Gadgeon Smart Systems</h3>
                                <p class="mt-2 " style="line-height: 2;">Innovation partner for digital transformation.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="bg-dark text-light" style="opacity: 0.8;">
                            <div class="bg-white  text-center col-lg-10 mx-auto " style="top: -25px;position: relative;">
                                <img loading="lazy" src="https://www.gadgeon.ae/wp-content/uploads/2023/10/gadgeon-lifestyle-logo@2x.png"
                                    class="w-50 p-3">
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
                                <img loading="lazy" src="https://www.gadgeon.ae/wp-content/uploads/2023/10/gadgeon-smart-systems-logo@2x.png"
                                    class="w-50 p-3">
                            </div>
                            <div class="px-4 pb-5 text-center">
                                <h3>Gadgeon Smart Systems</h3>
                                <p class="mt-2 " style="line-height: 2;">Innovation partner for digital transformation.
                                </p>
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
