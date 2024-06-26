<style>
@media only screen and (max-width: 600px) {

    .contatc-form-section{
        margin-top:500px !important;
    }
    
}
</style>
<?php $__env->startSection('contents'); ?>
    <!-- Banner section -->
    <section class="banner-section">
        <div class="container">
            <div class="col-lg-12 top-content">
                <div class="row">
                    <div class="col-lg-7 d-flex align-items-end">
                        <div>
                            <h1 class="display-5 fw-semibold" style="line-height: 1.3;">

                                <span class="text-black-50 fw-normal">Green Energy for a Brighter
                                </span>
                                <span class="fw-bold">  Tomorrow with Gadgeon Solar</span>
                            </h1>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="text-end mt-3">
                            <img loading="lazy" decoding="async" width="50%"
                                src="<?php echo e(url('assets/images/banner-bg-dot.png')); ?>">
                        </div>

                    </div>
                    <?php echo $__env->make('social-media-links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5 second-section">
        <img loading="lazy" src="<?php echo e(url('assets/images/pictures/contactus.jpg')); ?>" class="w-100">
    </section>
    <section>
        <div class="container" style="height: 600px">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="p-5">
                        <h3 class="fw-normal text-center text-muted" style="line-height: 1.8;">We are here to assist you
                        </h3>
                        <p class="text-center">Feel free to contact us or just drop a line here. Our support stuff will
                            reach you very soon</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-4  mb-3">
                            <div class="d-flex justify-content-center flex-column align-items-center border p-4 h-100">
                                <i class="bi bi-house fs-1"></i>
                                <span class="my-3 h5">Head Quarter</span>
                                <span class="text-muted text-center text-capitalize" > 
                                <h6 style="line-height: 1.8;">
                                    <a href="https://maps.app.goo.gl/SnAt6sH4DzFUCVSZ6"  class="text-dark">
                                        Gadgeon Smart Solar<br>
                                        VI 405/E1, Fathima Tower, Thrikkakara PO, Kakkanad, Kochi – 682021, Kerala, India.
                                    </a>
                                </h6>
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-4  mb-3">
                            <div class="d-flex justify-content-center flex-column align-items-center border p-4 h-100">
                                <i class="bi bi-houses fs-1"></i>

                                <span class="my-3 h5">Other Branches</span> 
                                <span class="text-muted text-center text-capitalize" > 
                                <h6 style="line-height: 1.8;">
                                    <a href="https://maps.app.goo.gl/SnAt6sH4DzFUCVSZ6"  class="text-dark">
                                        Gadgeon Lifestyle Pvt.Ltd<br>
                                       Smart City, Kochin
                                    </a>
                                </h6>
                                <h6 style="line-height: 1.8;">
                                    <a href="https://maps.app.goo.gl/qkGyKdLFSTVCFKxV8"  class="text-dark">
                                          Gadgeon Lifestyle Pvt.Ltd<br>
                                        HiLite Business Park, NH Bypass, Kozhikode
                                    </a>
                                </h6>
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-4  mb-3">
                            <div class="d-flex justify-content-center flex-column align-items-center border p-4 h-100">
                                <i class="bi bi-chat-square-text fs-1"></i> 
                                <span class="my-3 h5">Business Talk</span>
                                <span class="text-muted text-center" style="line-height: 1.8;">
                                     <h6><a href="tel:+919633186217" class="text-dark mt-2">+91 9633 186 217</a></h6>
                                        <h6><a href="tel:+919747093888" class="text-dark mt-2">+91 9747 093 888</a>, <a href="tel:+919207799555" class="text-dark mt-2">+91 9207 799 555</a></h6>
                            
                                    <h6 ><a href="mailto:smartsolar@gadgeon.com"  class="text-dark">solar@gadgeon.com</a> </h6>
                                    <h6 ><a href="mailto:ragesh.g@gadgeon.com"  class="text-dark">ragesh.g@gadgeon.com</a> </h6>
                                </span>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>  
        </div>
    </section>

    <!-- contatc-form-section  -->
    <section class="contatc-form-section py-5 bg-white">
        <div class="container" style="margin-top: 10px;">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 position-relative rounded-3" style="background-image: url(https://www.gadgeon.ae/wp-content/uploads/2023/11/contact-us.jpg);background-position: center center;background-size: cover;">
                        <div class="px-3" style="bottom: 0;position: absolute;">
                            <h3 class=" text-light fw-bold d-none d-lg-block">Wanna plan a new project with us?
                            </h3>
                            <div class="col-lg-12 mb-4 text-left">
                                <a href="tel://+919633186217"
                                    class="btn btn-theme text-light border-light border rounded-5">Ask Questions</a>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-6 bg-gray">
                        <h1 class="mt-5 mb-5 text-light">Feel free to drop a line</h1>
                        <form action="<?php echo e(route('contact-email')); ?>" method="POST" class="py-2 px-3 row">
                            <?php echo csrf_field(); ?>
                            <div class="col-lg-12  mb-3">
                                <label class="mb-2 text-light h6">Full Name</label>
                                <input type="text" required class="form-control" name="fullname" value="<?php echo e(old('fullname')); ?>" placeholder="Full Name">  
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="mb-2 text-light h6">Email Address</label>
                                <input type="email" required class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="Email Address">
                            </div>
                             <div class="col-lg-6 mb-3">
                                <label class="mb-2 text-light h6">Mobile Number</label>
                                <input id="phone" required maxlength="10" minlength="10" value="<?php echo e(old('mobile')); ?>" class="form-control" type="text"  onkeypress="if(event.which < 48 || event.which > 57 ) if(event.which != 8) return false;" autocomplete="off" name="mobile" placeholder="Phone Number">

                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="mb-2 text-light h6">Subject</label>
                                <input type="text" required class="form-control" value="<?php echo e(old('subject')); ?>" name="subject" placeholder="Subject">
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="mb-2 text-light h6">Message</label>
                                <textarea type="text" name="message" class="form-control" placeholder="Write Somting..." rows="8"><?php echo e(old('message')); ?></textarea>
                            </div>
                            <div class="col-lg-12 mb-4 text-center">
                                <input type="submit"
                                    class="btn btn-theme2 text-light border-light border rounded-5">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="">
        <div class="container-fluid">
            <iframe loading="lazy" width="100%" height="600px" 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.862142627211!2d76.3349367750315!3d10.028232990078633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080c61093b7595%3A0xb9d64e9715b37707!2sGadgeon%20Smart%20Systems%20Pvt%20Limited!5e0!3m2!1sen!2sin!4v1716822221061!5m2!1sen!2sin" title="Gadgeon Smart Solar VI 405/E1, Fathima Tower, Thrikkakara PO, Kakkanad, Kochi – 682021, Kerala, India." style="border:0;" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <!-- global Section -->
    <section class="py-5">
        <div class="container-fluid">
            <div class="col-lg-12 mx-auto text-center ">
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
                                <img loading="lazy" src="https://www.gadgeon.ae/wp-content/uploads/2023/09/gadgeon-middle-east.png"
                                    class="w-50 p-3">
                            </div>
                            <div class="px-4 pb-5 text-center">
                                <h3>Gadgeon Middle East</h3>
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

    <?php echo $__env->make('locations', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ynd9voh7vtk3/smart-solar/resources/views/contact-us.blade.php ENDPATH**/ ?>