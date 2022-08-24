<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <section class="relative h-20 flex flex-col justify-center align-center text-center space-y-4 mb-4 text-xl">
<h1 class="text-lg font-bold align-center">Inventory</h1>
    </section>
<?php echo $__env->make('partials._search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<section class="flex flex-col justify-center align-center text-center space-y-4 mb-4 ">
    <table class="table-auto m-0">
        <tr class="font-bold text-center">
        
        <td class="border-2 border-black">id</td>
        <td class="border-2 border-black">item_barcode</td>
        <td class="border-2 border-black">item_name</td>
        <td class="border-2 border-black">item_quantity</td>
        <td class="border-2 border-black">item_size</td>
        <td class="border-2 border-black">item_price</td>
        <td class="border-2 border-black">item_procprice</td>
        <td class="border-2 border-black">item_description</td>
        <td class="border-2 border-black">item_discount</td>
        <td class="border-2 border-black">expire_date</td>
        
    </tr>
    <?php $__currentLoopData = $inventorylist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inventory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo csrf_field(); ?>
    <tr class="border-2 border-black text-center">
        
        <td class="border-2 border-black"><?php echo e($inventory['id']); ?></td>
        <td class="border-2 border-black"><?php echo e($inventory['item_barcode']); ?></td>
        <td class="border-2 border-black"><?php echo e($inventory['item_name']); ?></td>
        <td class="border-2 border-black"><?php echo e($inventory['item_quantity']); ?></td>
        <td class="border-2 border-black"><?php echo e($inventory['item_size']); ?></td>
        <td class="border-2 border-black"><?php echo e($inventory['item_price']); ?></td>
        <td class="border-2 border-black"><?php echo e($inventory['item_procprice']); ?></td>
        <td class="border-2 border-black"><?php echo e($inventory['item_description']); ?></td>
        <td class="border-2 border-black"><?php echo e($inventory['item_discount']); ?></td>
        <td class="border-2 border-black"><?php echo e($inventory['expire_date']); ?></td>

    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    </table>
</section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\UptownCorporateHotel\resources\views/inventory.blade.php ENDPATH**/ ?>