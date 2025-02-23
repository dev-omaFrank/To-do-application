
<?php $__env->startSection('content'); ?>

    <section class="header section-padding">
        <div class="background">&nbsp;</div>
        <div class="container">
            <div class="header-text">
                <h1>Contact Us</h1>
                <p>
                    Feel free to contact us!
                </p>
            </div>
        </div>
    </section>

    <div class="container">
        <section class="section-padding">
            <div class="jumbotron text-center">
                <h1>HAVE ANY QUESTIONS?</h1>
                <p>Please contact us by sending a message using the form below:</p>
                <?php echo e(html()->span($errors->all(), ['class' => 'alert alert-danger'])->class('fa fa-eye')); ?>


                <?php echo e(html()->form('POST')->open()); ?>

                <?php echo e(html()->label('Subject')); ?>

                <?php echo e(html()->text('subject')->class('form-control')->placeholder('Enter your Subject here')->required()); ?><br />
                <?php echo e(html()->label('Message')); ?>

                <?php echo e(html()->textarea('message')->class('form-control')->placeholder('Enter your Message here')->required()); ?><br />
                <?php echo e(html()->submit('Send Message')->class('btn btn-primary')); ?>

                <?php echo e(html()->form()->close()); ?>

            </div>
        </section>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Laravel\laravelLearning\resources\views/contact.blade.php ENDPATH**/ ?>