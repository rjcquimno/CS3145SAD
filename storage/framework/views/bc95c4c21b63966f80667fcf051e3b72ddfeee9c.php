<?php if(session()->has('message')): ?>
<div x-data="{show: true}" x-init="setTimeout(()=> show=false, 3000)" x-show="show" class="fixed top-0 left-1/2 transform -translate-x-1/2 bg-laravel text-white px-48 py3">
<p>
    <?php echo e(session('message')); ?>

</p>
</div>
<?php endif; ?>
<?php /**PATH C:\Users\Nitro 5\Desktop\Uptown\Uptown\resources\views/components/flash-message.blade.php ENDPATH**/ ?>