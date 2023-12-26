<h1>My Folder and My Page</h1>
<h1>
    <?php echo $val_a.' - '.$val_b; ?>
</h1>
<h1><?php echo e($val_a); ?> <?php echo e($val_b); ?></h1>
<h1><?php echo e($val_a.' '.$val_b); ?></h1>
<form method="post" action="/my-route">
    <?php echo csrf_field(); ?>
    <input type="text" name="myInput">
    <button type="submit">Submit</button>
</form>
<?php /**PATH C:\xampp\htdocs\SE_CAMP\example-app\resources\views/myFolder/myPage.blade.php ENDPATH**/ ?>