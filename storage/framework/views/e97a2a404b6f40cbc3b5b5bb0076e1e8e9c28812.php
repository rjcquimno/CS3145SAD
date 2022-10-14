<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php echo $__env->make('partials._hero', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php if(auth()->guard()->check()): ?>

    
    <div class="container">
        <div class="relative">
            <div class="absolute left-1/2 transform -translate-x-1/2"> 
    
           <div class="col-lg-2">
                <div class="row flex flex-col justify-center align-center text-center mb-6">
                    <div class="col-lg-2">
                    <h1 class="text-3xl font-bold uppercase text-black">
                            <a href="/salesorder" class="hover:text-laravel pt-1 py-1 px-4 border-8 border-black">
                                &nbsp &nbsp Cashier &nbsp &nbsp
                            </a>
                        
                    </h1>
                    </div>
                </div>
            </div>

            <br/>

            <div class="col-lg-2">
                <div class="row flex flex-col justify-center align-center text-center mb-4">
                    <div class="col-lg-2 ">
                        <h1 class="text-3xl font-bold uppercase text-black">
                            <a href="/saleshistory" class="hover:text-laravel px-1 border-8 border-black">
                                &nbsp &nbsp &nbsp &nbsp Sales &nbsp &nbsp &nbsp &nbsp
                            </a>
                        </h1>
                    </div>
                </div>
            </div>

            <br/>

            <div class="col-lg-2">
                <div class="row flex flex-col justify-center align-center text-center mb-4">
                    <div class="col-lg-2 ">
                        <h1 class="text-3xl font-bold uppercase text-black">
                            <a href="/inventory" class="hover:text-laravel border-8 border-black pr-3 pl-3">
                                &nbsp Inventory &nbsp
                            </a>
                        </h1>
                    </div>
                </div>
            </div>

            <br/>

            <div class="col-lg-2">
                <div class="row flex flex-col justify-center align-center text-center mb-4">
                    <div class="col-lg-2 ">
                        <h1 class="text-3xl font-bold uppercase text-black">
                            <a href="/procurement" class="hover:text-laravel border-8 border-black">
                                &nbsp &nbsp &nbsp &nbsp STOCK &nbsp &nbsp &nbsp &nbsp
                            </a>
                        </h1>
                    </div>
                </div>
            </div>

            <br/>

            <div class="col-lg-2">
                <div class="row flex flex-col justify-center align-center text-center mb-4">
                    <div class="col-lg-2 ">
                        <h1 class="text-3xl font-bold uppercase text-black">
                            <a href="/supplier" class="hover:text-laravel border-8 border-black pr-3 pl-3">
                                &nbsp  &nbsp Supplier &nbsp &nbsp
                            </a>
                        </h1>
                    </div>
                </div>
            </div>

            <br/>

            <div class="col-lg-2">
                <div class="row flex flex-col justify-center align-center text-center mb-4">
                    <div class="col-lg-2 ">
                        <h1 class="text-3xl font-bold uppercase text-black">
                            <a href="/employee" class="hover:text-laravel border-8 px-1 border-black">
                                &nbsp &nbsp Employee &nbsp &nbsp
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
            <br/>
            <div class="col-lg-2">
                <div class="row flex flex-col justify-center align-center text-center mb-4">
                    <div class="col-lg-2 ">
                        <h1 class="text-3xl font-bold uppercase text-black">
                            <a href="/showattendancecreator/<?php echo e($id=Auth::id()); ?>" class="hover:text-laravel border-8 border-black">
                                &nbsp Attendance &nbsp
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
    </div>
</div>
<div>

    <?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    
    
    
    
    <?php /**PATH C:\Users\Nitro 5\Desktop\Uptown\Uptown\resources\views/index.blade.php ENDPATH**/ ?>