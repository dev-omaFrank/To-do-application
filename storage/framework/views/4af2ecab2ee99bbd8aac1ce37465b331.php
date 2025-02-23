<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
</head>
<body>
    <div>Someone Just Contacted Us:</div>
    <div>Subject:<?php echo e($subject); ?></div>
    <div>Message:<?php echo e($emailMessage); ?></div>
</body>
</html>
<?php /**PATH C:\Laravel\laravelLearning\resources\views/contactemail.blade.php ENDPATH**/ ?>