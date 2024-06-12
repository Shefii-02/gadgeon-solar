<?php $__env->startSection('contents'); ?>
  <section class="banner-section">
    <div class="container">
        <div class="col-lg-12 top-content">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-end">
                    <div>
                        <span class="text-theme fw-normal pb-4">
                            Residential Solar Solutions
                        </span>
                        <h1 class="display-6 fw-semibold" >

                            <span class="fw-bold">
                                At GadgEon Solar,
                            </span>
                            <span class="text-black-50 fw-normal">we offer a range of tailored solar solutions for
                                residential properties</span>
                        </h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-end mt-3">
                        <img loading="lazy" decoding="async" width="50%"
                            src="<?php echo e(url('assets/images/pictures/banner-dot.png')); ?>">
                    </div>
                    <div class="text-end mt-5">
                        <h3 class="text-start fs-5 ms-lg-5">
                                   
                            <span class="text-black-50 "> providing  homeowners with the </span> opportunity to harness the power of the sun and reduce
                             <span class="text-black-50 "> their dependence on conventional energy sources.</span>
                        </h3>
                    </div>
                </div>
                         <?php echo $__env->make('social-media-links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
</section>
    <!-- End Banner section -->


    <section class="pt-5 second-section">
        <img loading="lazy" src="<?php echo e(url('assets/images/residential_img.jpg')); ?>" class="w-100">

    </section>


    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-0 p-0 order-0 order-lg-2">
                    <img loading="lazy" src="<?php echo e(url('assets/images/pictures/innovation2.jpg')); ?>" class="w-100">
                </div>
                <div class="col-lg-6 d-flex justify-content-center flex-column m-0 p-0">
                    
                    <div class="p-5">
                        <h1>Solar PV System Installation</h1>
                        <p class="mt-5">
                            We design and install solar photovoltaic (PV) systems, converting 
                            sunlight into electricity to power your home and potentially even feed excess energy back into the 
                            grid
                        </p>
                    </div>
    
                </div>
               
    
            </div>
            <div class="row">
                <div class="col-lg-6 m-0 p-0">
                    <img loading="lazy" src="<?php echo e(url('assets/images/inner_2.jpg')); ?>" class="w-100">
                </div>
                <div class="col-lg-6 d-flex justify-content-center flex-column m-0 p-0">
                    <div class="p-5">
                        
                        <h1>Solar Energy Management Solutions</h1>
                        <p class="mt-5">
                            Optimize your energy consumption and savings with our intelligent solar energy management systems, allowing you to monitor, control, and optimize energy usage.
                        </p>
                    </div>
    
                </div>
              
    
            </div>
        </div>
    </section>
    <?php echo $__env->make('common-tile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Global Partnership -->
    <?php echo $__env->make('partnership', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Cinema Listening Level Categories -->

    <?php echo $__env->make('contact-section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Content Section -->
    <?php echo $__env->make('call-us-now', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('locations', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ynd9voh7vtk3/smart-solar/resources/views/residential-solar-solutions.blade.php ENDPATH**/ ?>