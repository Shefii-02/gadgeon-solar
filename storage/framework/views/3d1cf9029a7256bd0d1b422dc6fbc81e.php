  <!-- contatc-form-section  -->
  <section class="contatc-form-section py-5">
    <div class="container" style="margin-top: 10px;">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                    <h1 class=" text-light text-center">Get in touch with <br>
                        our expert</h1>
                </div>
                <div class="col-lg-6">
                    <h5 class="mt-5 mb-5 text-light">If you’re interested in collaborating with us or simply wish to
                        reach out, we’re eager to connect with you!
                    </h5>
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

<?php /**PATH /home/ynd9voh7vtk3/smart-solar/resources/views/contact-section.blade.php ENDPATH**/ ?>