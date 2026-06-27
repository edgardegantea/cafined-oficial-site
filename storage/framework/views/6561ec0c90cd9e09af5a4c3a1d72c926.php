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
    <section class="bg-white dark:bg-gray-900 transition-colors duration-300">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="grid gap-12 lg:grid-cols-2 items-center">

                <div class="flex flex-col justify-center">
                    <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                        Saberes360
                    </h1>

                    <p class="mb-6 text-lg font-normal text-gray-600 lg:text-xl dark:text-gray-400">
                        Itzel Espinoza López es Ingeniera en Sistemas Computacionales, especializada en el desarrollo de software, arquitectura de soluciones y desarrollo móvil. A lo largo de su trayectoria profesional ha participado en proyectos tecnológicos enfocados en la construcción de aplicaciones y sistemas escalables, así como en iniciativas relacionadas con Inteligencia Artificial, procesamiento de imágenes y ciencia de datos.
                    </p>


                    <p class="mb-6 text-lg font-normal text-gray-600 lg:text-xl dark:text-gray-400">
                        Se distingue por su enfoque en el diseño de soluciones robustas, eficientes y alineadas a los objetivos del negocio, aplicando buenas prácticas de desarrollo y una visión arquitectónica integral.
                    </p>


                    <p class="mb-6 text-lg font-normal text-gray-600 lg:text-xl dark:text-gray-400">
                        Actualmente colabora en BBVA, participando en proyectos de automatización de procesos, contribuyendo a la optimización operativa mediante el uso estratégico de la tecnología.
                    </p>

                    <div class="flex flex-wrap gap-4 items-center">
                        <a href="#" class="inline-flex justify-center items-center py-3 px-6 text-base font-semibold text-center text-gray-900 bg-white border-2 border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 rounded-lg dark:bg-transparent dark:text-white dark:border-gray-600 dark:hover:bg-gray-800 dark:focus:ring-gray-700 transition-all">
                            <svg class="mr-2 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                            Ver Demo
                        </a>

                        <a href="#" class="inline-flex justify-center items-center py-3 px-6 text-base font-semibold text-center text-gray-900 bg-white border-2 border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 rounded-lg dark:bg-transparent dark:text-white dark:border-gray-600 dark:hover:bg-gray-800 dark:focus:ring-gray-700 transition-all">
                            <svg class="mr-2 w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.43.372.823 1.102.823 2.222 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                            Repositorio
                        </a>
                    </div>

                    <div class="mt-6">
                        <a href="<?php echo e(route('saberes360/privacidad')); ?>" class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-blue-700 dark:text-gray-500 dark:hover:text-blue-400 hover:text-blue-900 transition-colors">
                            <svg class="mr-1.5 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                            Aviso de Privacidad
                        </a>
                    </div>
                </div>

                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-indigo-500 rounded-2xl blur opacity-20 dark:opacity-40 group-hover:opacity-30 dark:group-hover:opacity-60 transition duration-1000"></div>
                    <img src="<?php echo e(asset('storage/equipo/itzelespinozalopez.jpeg')); ?>"
                         alt="Interfaz de OrientaTec"
                         class="relative rounded-2xl shadow-xl border border-gray-200 dark:border-gray-700 object-cover w-full h-auto transition-transform duration-500 group-hover:scale-[1.01]">
                </div>

            </div>
        </div>
    </section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfef4cfd571f8ae938848198eae0a6e27)): ?>
<?php $attributes = $__attributesOriginalfef4cfd571f8ae938848198eae0a6e27; ?>
<?php unset($__attributesOriginalfef4cfd571f8ae938848198eae0a6e27); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfef4cfd571f8ae938848198eae0a6e27)): ?>
<?php $component = $__componentOriginalfef4cfd571f8ae938848198eae0a6e27; ?>
<?php unset($__componentOriginalfef4cfd571f8ae938848198eae0a6e27); ?>
<?php endif; ?><?php /**PATH /var/www/vhosts/cafined.org/v2.cafined.org/resources/views/frontend/info/proyectos/saberes360.blade.php ENDPATH**/ ?>