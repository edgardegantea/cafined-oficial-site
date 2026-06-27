<?php if (isset($component)) { $__componentOriginalfef4cfd571f8ae938848198eae0a6e27 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfef4cfd571f8ae938848198eae0a6e27 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.public.public','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.public.public'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <div class="container mx-auto py-10">
        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <?php $__currentLoopData = $equipo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $integrante): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="#" class="bg-white rounded-lg shadow-md overflow-hidden my-5 mx-5 shadow-zinc-300 shadow-xl/30 block hover:shadow-lg transition-shadow duration-300 cursor-pointer">
                    <?php if($integrante->image_path): ?>
                        <img src="<?php echo e($integrante->image_path ? Storage::url($integrante->image_path) : 'https://static.vecteezy.com/system/resources/previews/004/141/669/non_2x/no-photo-or-blank-image-icon-loading-images-or-missing-image-mark-image-not-available-or-image-coming-soon-sign-simple-nature-silhouette-in-frame-isolated-illustration-vector.jpg'); ?>" alt="<?php echo e($integrante->title); ?>" class="w-full h-48 object-cover">
                    <?php endif; ?>
                    <div class="p-4">
                        <h2 class="text-xl font-semibold mb-2 text-black hover:text-blue-500 transition-colors duration-300"><?php echo e($integrante->name); ?></h2>
                        <p class="text-gray-700"><?php echo e($integrante->email); ?></p>
                        <p class="text-black uppercase"><?php echo e($integrante->type); ?></p>
                    </div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>




    </div>



 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfef4cfd571f8ae938848198eae0a6e27)): ?>
<?php $attributes = $__attributesOriginalfef4cfd571f8ae938848198eae0a6e27; ?>
<?php unset($__attributesOriginalfef4cfd571f8ae938848198eae0a6e27); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfef4cfd571f8ae938848198eae0a6e27)): ?>
<?php $component = $__componentOriginalfef4cfd571f8ae938848198eae0a6e27; ?>
<?php unset($__componentOriginalfef4cfd571f8ae938848198eae0a6e27); ?>
<?php endif; ?>
<?php /**PATH /Users/edgardeganteaguilar/Herd/cafinedv3/resources/views/frontend/info/equipo.blade.php ENDPATH**/ ?>