<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order</title>



</head>
<body>


        <h1>Driver Identity</h1>
        <?php $__currentLoopData = $driver; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $drive): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <input type="hidden" name="did" value="<?php echo e($drive->driver_id); ?>">
        <h2>Name : <?php echo e($drive->name); ?></h2>
        <h2>Phone Number : <?php echo e($drive->phone_number); ?></h2>
        <h2>Price : Rp.15.000</h2>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <h3><center>Have a nice day</center></h3>
            <h2><center><a href="/"> >>> Home <<< </a></center></h2>


</body>
</html>
<?php /**PATH D:\Karvin\Binus\belajar with cinhe\Laravel\Laravel\templateKosong\template\resources\views/order.blade.php ENDPATH**/ ?>