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
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>


    
    <div class="relative overflow-hidden">
        <img class="w-full aspect-[9/4] object-cover object-center"
             src="<?php echo e(Storage::disk('public')->url('images/frontend/1.png')); ?>"
             alt="CAFINED Lab">
        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-black/10 to-transparent flex items-end">
            <div class="max-w-screen-xl mx-auto px-6 pb-10 w-full">
                <p class="text-white/70 text-sm font-medium uppercase tracking-widest mb-1">ITSM · Misantla, Ver.</p>
                <h1 class="text-white text-3xl md:text-4xl lg:text-5xl font-bold tracking-tight leading-tight">
                    Laboratorio de Investigación<br class="hidden sm:block"> en Educación y Tecnología
                </h1>
            </div>
        </div>
    </div>

    
    <section class="max-w-screen-xl mx-auto px-4 py-14">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">

            <a href="<?php echo e(route('posts.index')); ?>"
               class="group p-6 rounded-xl border border-stone-200 hover:border-teal-300 hover:bg-teal-50/30 transition-all duration-200">
                <div class="w-9 h-9 rounded-lg bg-teal-100 text-teal-700 flex items-center justify-center mb-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                    </svg>
                </div>
                <h2 class="font-semibold text-stone-900 group-hover:text-teal-700 transition-colors mb-1">Comunicación</h2>
                <p class="text-sm text-stone-500">Noticias, logros y comunicados del laboratorio.</p>
            </a>

            <a href="<?php echo e(route('events.index')); ?>"
               class="group p-6 rounded-xl border border-stone-200 hover:border-teal-300 hover:bg-teal-50/30 transition-all duration-200">
                <div class="w-9 h-9 rounded-lg bg-teal-100 text-teal-700 flex items-center justify-center mb-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <h2 class="font-semibold text-stone-900 group-hover:text-teal-700 transition-colors mb-1">Actividades</h2>
                <p class="text-sm text-stone-500">Talleres, cursos y conferencias próximas.</p>
            </a>

            <a href="<?php echo e(route('proyectos')); ?>"
               class="group p-6 rounded-xl border border-stone-200 hover:border-teal-300 hover:bg-teal-50/30 transition-all duration-200">
                <div class="w-9 h-9 rounded-lg bg-teal-100 text-teal-700 flex items-center justify-center mb-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                    </svg>
                </div>
                <h2 class="font-semibold text-stone-900 group-hover:text-teal-700 transition-colors mb-1">Proyectos</h2>
                <p class="text-sm text-stone-500">Desarrollos y herramientas de nuestra comunidad.</p>
            </a>

            <a href="<?php echo e(route('produccioncientifica')); ?>"
               class="group p-6 rounded-xl border border-stone-200 hover:border-teal-300 hover:bg-teal-50/30 transition-all duration-200">
                <div class="w-9 h-9 rounded-lg bg-teal-100 text-teal-700 flex items-center justify-center mb-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <h2 class="font-semibold text-stone-900 group-hover:text-teal-700 transition-colors mb-1">Producción Científica</h2>
                <p class="text-sm text-stone-500">Publicaciones, journals y artículos de investigación.</p>
            </a>

            <a href="<?php echo e(route('equipo')); ?>"
               class="group p-6 rounded-xl border border-stone-200 hover:border-teal-300 hover:bg-teal-50/30 transition-all duration-200">
                <div class="w-9 h-9 rounded-lg bg-teal-100 text-teal-700 flex items-center justify-center mb-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <h2 class="font-semibold text-stone-900 group-hover:text-teal-700 transition-colors mb-1">Nuestro Equipo</h2>
                <p class="text-sm text-stone-500">Investigadores, colaboradores y estudiantes.</p>
            </a>

            <a href="<?php echo e(route('foros')); ?>"
               class="group p-6 rounded-xl border border-stone-200 hover:border-teal-300 hover:bg-teal-50/30 transition-all duration-200">
                <div class="w-9 h-9 rounded-lg bg-teal-100 text-teal-700 flex items-center justify-center mb-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                </div>
                <h2 class="font-semibold text-stone-900 group-hover:text-teal-700 transition-colors mb-1">Foros</h2>
                <p class="text-sm text-stone-500">Espacios de discusión y colaboración.</p>
            </a>

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
<?php endif; ?>
<?php /**PATH /Users/edegantea/development/test/var/www/vhosts/cafined.org/v2.cafined.org/resources/views/frontend/index.blade.php ENDPATH**/ ?>