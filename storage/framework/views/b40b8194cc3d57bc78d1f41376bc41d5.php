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

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Nuestro equipo</h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400">Cada miembro de nuestro equipo aporta algo especial.</p>
        </div>
    </section>

    <div class="container mx-auto py-1 flex justify-center">
        <a href="https://v2.cafined.org/angelarmenta" target="_blank" class="bg-white rounded-lg shadow-md overflow-hidden my-5 mx-5 shadow-zinc-300 shadow-xl/30 block hover:shadow-lg transition-shadow duration-300 cursor-pointer w-full max-w-sm">
            <img src="<?php echo e(asset('storage/equipo/armenta.png')); ?>" alt="Doctor Roberto Ángel Meléndez Armenta" class="w-full object-cover aspect-[4/5]">
            <div class="p-4 text-center">
                <h2 class="text-xl font-semibold mb-2 text-blue-600 hover:text-blue-500 transition-colors duration-300">Roberto Ángel Meléndez Armenta</h2>
                <p class="text-black uppercase font-semibold">Fundador & Líder</p>
            </div>
        </a>
    </div>
	
	

	

    <section class="container mx-auto py-10 justify-center bg-dark">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-12">
            <h2 class="mb-4 text-3xl font-extrabold tracking-tight leading-none text-gray-900 md:text-4xl lg:text-5xl dark:text-blue">Colaboradores</h2>
        </div>
        
        
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">

            <a href="<?php echo e(url('soto')); ?>" class="bg-white rounded-lg shadow-md overflow-hidden my-5 mx-5 shadow-zinc-300 shadow-xl/30 block hover:shadow-lg transition-shadow duration-300 cursor-pointer w-full">
                <img src="<?php echo e(asset('storage/equipo/soto.png')); ?>" alt="Doctor José Edgar Soto Meneses" class="w-full object-cover aspect-[4/5]">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2 text-black hover:text-blue-500 transition-colors duration-300">José Edgar Soto Meneses</h2>
                    <p class="text-black uppercase">Colaborador</p>
                </div>
            </a>

            <a href="<?php echo e(url('giovanni')); ?>" class="bg-white rounded-lg shadow-md overflow-hidden my-5 mx-5 shadow-zinc-300 shadow-xl/30 block hover:shadow-lg transition-shadow duration-300 cursor-pointer w-full">
                <img src="<?php echo e(asset('storage/equipo/giovanni.png')); ?>" alt="Mtro. Giovanni Luna Chontal" class="w-full object-cover aspect-[4/5]">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2 text-black hover:text-blue-500 transition-colors duration-300">Giovanni Luna Chontal</h2>
                    <p class="text-black uppercase">Colaborador</p>
                </div>
            </a>

            <a href="<?php echo e(url('edegantea')); ?>" class="bg-white rounded-lg shadow-md overflow-hidden my-5 mx-5 shadow-zinc-300 shadow-xl/30 block hover:shadow-lg transition-shadow duration-300 cursor-pointer w-full">
                <img src="<?php echo e(asset('storage/equipo/degante.png')); ?>" alt="Edgar Degante Aguilar" class="w-full object-cover aspect-[4/5]">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2 text-black hover:text-blue-500 transition-colors duration-300">Edgar Degante Aguilar</h2>
                    <p class="text-black uppercase">Colaborador</p>
                </div>
            </a>

            <a href="<?php echo e(url('franciscoj')); ?>" class="bg-white rounded-lg shadow-md overflow-hidden my-5 mx-5 shadow-zinc-300 shadow-xl/30 block hover:shadow-lg transition-shadow duration-300 cursor-pointer w-full">
                <img src="<?php echo e(asset('storage/equipo/francisco.png')); ?>" alt="Francisco Javier Fernández Domínguez" class="w-full object-cover aspect-[4/5]">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2 text-black hover:text-blue-500 transition-colors duration-300">Francisco Javier Fernández Domínguez</h2>
                    <p class="text-black uppercase">Colaborador</p>
                </div>
            </a>

        </div>
    </section>
	
	

    <div class="container mx-auto py-10 justify-center">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-12">
            <h2 class="mb-4 text-3xl font-extrabold tracking-tight leading-none text-gray-900 md:text-4xl lg:text-5xl dark:text-blue">Tesistas y Servicio Social</h2>
        </div>

<div class="grid grid-cols-1 sm:grid-cols-3 gap-4">

            <a href="<?php echo e(url('robertoc')); ?>" class="bg-white rounded-lg shadow-md overflow-hidden my-5 mx-5 shadow-zinc-300 shadow-xl/30 block hover:shadow-lg transition-shadow duration-300 cursor-pointer w-full">
                <img src="<?php echo e(asset('storage/equipo/roberto.png')); ?>" alt="Roberto Carlos Guzmán Cortés" class="w-full object-cover aspect-[4/5]">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2 text-black hover:text-blue-500 transition-colors duration-300">Roberto Carlos Guzmán Cortés</h2>
                    <p class="text-black uppercase">Tesista-MSC</p>
                </div>
            </a>

            <a href="<?php echo e(url('robertoc')); ?>" class="bg-white rounded-lg shadow-md overflow-hidden my-5 mx-5 shadow-zinc-300 shadow-xl/30 block hover:shadow-lg transition-shadow duration-300 cursor-pointer w-full">
                <img src="<?php echo e(asset('storage/equipo/adrian.jpg')); ?>" alt="Jesús Adrián Pazos Vera" class="w-full object-cover aspect-[4/5]">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2 text-black hover:text-blue-500 transition-colors duration-300">Jesús Adrián Pazos Vera</h2>
                    <p class="text-black uppercase">Tesista-ISC</p>
                </div>
            </a>

            <a href="<?php echo e(url('robertoc')); ?>" class="bg-white rounded-lg shadow-md overflow-hidden my-5 mx-5 shadow-zinc-300 shadow-xl/30 block hover:shadow-lg transition-shadow duration-300 cursor-pointer w-full">
                <img src="<?php echo e(asset('storage/equipo/sinfoto.jpg')); ?>" alt="Milton David Ramírez Romero" class="w-full object-cover aspect-[4/5]">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2 text-black hover:text-blue-500 transition-colors duration-300">Milton David Ramírez Romero</h2>
                    <p class="text-black uppercase">Tesista-ISC</p>
                </div>
            </a>


            <a href="#" class="bg-white rounded-lg shadow-md overflow-hidden my-5 mx-5 shadow-zinc-300 shadow-xl/30 block hover:shadow-lg transition-shadow duration-300 cursor-pointer w-full">
                <img src="<?php echo e(asset('storage/equipo/itzelespinozalopez.jpeg')); ?>" alt="Milton David Ramírez Romero" class="w-full object-cover aspect-[4/5]">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2 text-black hover:text-blue-500 transition-colors duration-300">Itzel Espinoza López</h2>
                    <p class="text-black uppercase">Tesista-ISC</p>
                </div>
            </a>

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
<?php endif; ?><?php /**PATH /var/www/vhosts/cafined.org/v2.cafined.org/resources/views/frontend/info/equipo.blade.php ENDPATH**/ ?>