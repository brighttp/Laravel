

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Daftar Buku</h1>
    <table border="1" cellpadding="10">
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
        </tr>
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($book->title); ?></td>
            <td><?php echo e($book->author); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Bright Eliezer\Documents\Tel-U\Semester 4\Pengembangan Aplikasi Website\Laravel\laravel-auth-project\resources\views/books/index.blade.php ENDPATH**/ ?>