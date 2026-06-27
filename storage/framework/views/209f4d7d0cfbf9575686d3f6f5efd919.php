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
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">

            <div class="text-center mb-5">
                <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                    ÁREA DE PROYECTOS
                </h1>
                <p class="text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">
                    Explora nuestra colección de proyectos, herramientas y desarrollos creados por nuestra comunidad.
                </p>
            </div>

            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-2 mt-12">



                <article class="flex flex-col bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 overflow-hidden transition-transform duration-300 hover:scale-105 hover:shadow-lg">
                    <a href="#">
                        <img class="object-cover w-full h-48" src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&q=80&w=800" alt="Imagen del proyecto">
                    </a>

                    <div class="flex flex-col flex-grow p-8">
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Python</span>
                            <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-purple-900 dark:text-purple-300">Green Logistic</span>
                        </div>

                        <a href="#">
                            <h2 class="mb-3 text-2xl font-bold tracking-tight text-gray-900 dark:text-white leading-tight">
                                SATCi
                            </h2>
                        </a>

                        <p class="flex-grow mb-6 text-sm font-normal text-gray-700 dark:text-gray-400 line-clamp-3">
                            Una plataforma completa para administrar recursos empresariales, diseñada para ser rápida, accesible y fácil de mantener.
                        </p>

                        <hr class="my-4 border-gray-200 dark:border-gray-700">

                        <div class="flex items-center justify-between mt-auto pt-2">
                            <div class="flex items-center space-x-3">
                                <img class="w-9 h-9 rounded-full object-cover" src="https://ui-avatars.com/api/?name=Juan+Perez&background=random" alt="Avatar del autor">
                                <span class="text-sm font-medium text-gray-900 dark:text-white">
                                    Juan Pérez
                                </span>
                            </div>

                            <div class="flex space-x-3 text-sm font-medium text-blue-600 dark:text-blue-500">
                                <a href="#" class="hover:underline inline-flex items-center gap-1">
                                    Ver más
                                </a>
                            </div>
                        </div>
                    </div>
                </article>






                <article class="flex flex-col bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 overflow-hidden transition-transform duration-300 hover:scale-105 hover:shadow-lg">
                    <a href="#">
                        <img class="object-cover w-full h-48" src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&q=80&w=800" alt="Imagen del proyecto">
                    </a>

                    <div class="flex flex-col flex-grow p-8">
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Laravel</span>
                            <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-purple-900 dark:text-purple-300">Tailwind CSS</span>
                        </div>

                        <a href="<?php echo e(route('saberes360')); ?>">
                            <h2 class="mb-3 text-2xl font-bold tracking-tight text-gray-900 dark:text-white leading-tight">
                                saberes360
                            </h2>
                        </a>

                        <p class="flex-grow mb-6 text-sm font-normal text-gray-700 dark:text-gray-400 line-clamp-3">
                            Proyecto enfocado en la educación virtual que propone un enfoque integral para mejorar el proceso de enseñanza-aprendizaje.
                        </p>

                        <hr class="my-4 border-gray-200 dark:border-gray-700">

                        <div class="flex items-center justify-between mt-auto pt-2">
                            <div class="flex items-center space-x-3">
                                <img class="w-9 h-9 rounded-full object-cover" src="https://ui-avatars.com/api/?name=Itzel+Espinoza+López&background=random" alt="Avatar del autor">
                                <span class="text-sm font-medium text-gray-900 dark:text-white">
                                    Itzel Espinoza López
                                </span>
                            </div>

                            <div class="flex space-x-3 text-sm font-medium text-blue-600 dark:text-blue-500">
                                <a href="<?php echo e(route('saberes360')); ?>" class="hover:underline inline-flex items-center gap-1">
                                    Ver más
                                </a>
                            </div>
                        </div>
                    </div>
                </article>




                <article class="flex flex-col bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 overflow-hidden transition-transform duration-300 hover:scale-105 hover:shadow-lg">
                    <a href="<?php echo e(route('orientatec')); ?>">
                        <img class="object-cover w-full h-48" src="<?php echo e(asset('storage/images/projects/orientatec.jpeg')); ?>" alt="Imagen del proyecto">
                    </a>

                    <div class="flex flex-col flex-grow p-8">
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Laravel</span>
                            <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-purple-900 dark:text-purple-300">Tailwind CSS</span>
                        </div>

                        <a href="<?php echo e(route('orientatec')); ?>">
                            <h2 class="mb-3 text-2xl font-bold tracking-tight text-gray-900 dark:text-white leading-tight">
                                OrientaTec
                            </h2>
                        </a>

                        <p class="flex-grow mb-6 text-sm font-normal text-gray-700 dark:text-gray-400 line-clamp-3">
                            OrientaTec es una aplicación de orientación vocacional dirigida a estudiantes de bachillerato. A través de un cuestionario interactivo, identifica tus intereses académicos y te sugiere las carreras del Instituto Tecnológico Superior de Misantla que mejor se relacionan con tu perfil.
                        </p>

                        <hr class="my-4 border-gray-200 dark:border-gray-700">

                        <div class="flex items-center justify-between mt-auto pt-2">
                            <div class="flex items-center space-x-3">
                                <img class="w-9 h-9 rounded-full object-cover" src="https://ui-avatars.com/api/?name=Juan+Perez&background=random" alt="Avatar del autor">
                                <span class="text-sm font-medium text-gray-900 dark:text-white">
                                    Ing. Yiran Lagunes Guzman
                                </span>
                            </div>

                            <div class="flex space-x-3 text-sm font-medium text-blue-600 dark:text-blue-500">
                                <a href="<?php echo e(route('orientatec')); ?>" class="hover:underline inline-flex items-center gap-1">
                                    Ver más
                                </a>
                            </div>
                        </div>
                    </div>
                </article>






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
<?php endif; ?><?php /**PATH /var/www/vhosts/cafined.org/v2.cafined.org/resources/views/frontend/info/proyectos.blade.php ENDPATH**/ ?>