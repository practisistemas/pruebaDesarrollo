


<?php $__env->startSection('content'); ?>

   <form action="" method="POST">
        <?php echo csrf_field(); ?>
        <input type="email" id="email" name="email" placeholder="Email"> 
        <input type="password" id="password" name="password" placeholder="Password"> 
        <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            
            <p><?php echo e($message); ?></p>
        
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <button type="submit">ENVIAR</button>
    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\login\resources\views/login.blade.php ENDPATH**/ ?>