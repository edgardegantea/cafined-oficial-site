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

    
    <section class="relative bg-white dark:bg-gray-900 overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#3b82f6_1px,transparent_1px)] [background-size:16px_16px]"></div>
        <div class="relative py-12 px-4 mx-auto max-w-screen-xl text-center lg:py-20">
            <span class="inline-block py-1 px-3 rounded-full bg-blue-100 text-blue-800 text-xs font-semibold tracking-wide uppercase mb-4">
                Formación y Networking
            </span>
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-slate-900 md:text-5xl lg:text-6xl dark:text-white">
                Próximos Eventos y Talleres
            </h1>
            <p class="mb-8 text-lg font-normal text-slate-600 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400 max-w-3xl mx-auto">
                Explora nuestras conferencias, cursos y actividades. Inscríbete ahora para asegurar tu lugar.
            </p>

            
            <?php if(Auth::check() && Auth::user()->role === 'admin'): ?>
                <div class="mt-8">
                    <a href="<?php echo e(route('events.create')); ?>" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900 transition-all">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                        Crear Nuevo Evento
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </section>

    
    <div class="container mx-auto py-10 px-4 sm:px-6 lg:px-8">

        
        <?php if(session('success')): ?>
            <div class="mb-6 p-4 bg-green-100 border-l-4 border-green-500 text-green-700 rounded shadow-sm">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
        <?php if(session('error')): ?>
            <div class="mb-6 p-4 bg-red-100 border-l-4 border-red-500 text-red-700 rounded shadow-sm">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>

        
        <?php if($events->isEmpty()): ?>
            <div class="flex flex-col items-center justify-center py-20 bg-slate-50 rounded-3xl border border-dashed border-slate-300">
                <div class="bg-white p-4 rounded-full shadow-sm mb-4">
                    <svg class="w-10 h-10 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>
                <h3 class="text-lg font-medium text-slate-900">No hay eventos programados</h3>
                <p class="text-slate-500">Vuelve a consultar más tarde.</p>
            </div>
        <?php else: ?>
            <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-8">
                <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    
                    <?php
                        $colorClass = match($event->type) {
                            'workshop' => 'from-purple-500 to-indigo-800',
                            'course' => 'from-blue-500 to-cyan-500',
                            'conference' => 'from-emerald-400 to-teal-600',
                            default => 'from-slate-500 to-slate-700',
                        };
                        $iconType = match($event->type) {
                            'workshop' => '🛠️ Taller',
                            'course' => '📚 Curso',
                            'conference' => '🎤 Conferencia',
                            default => '📅 Evento',
                        };
                    ?>

                    
                    <div class="group relative flex flex-col h-full bg-white dark:bg-gray-800 dark:text-white rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-slate-200 dark:border-gray-700 overflow-hidden">

                        
                        

                        
                        <div class="p-6 flex-grow flex flex-col justify-between">
                            <div>
                                <h2 class="text-5xl font-bold text-orange-600 dark:text-orange-600 mb-2 leading-tight group-hover:text-orange-900 transition-colors">
                                    <?php echo e($event->title); ?>

                                </h2>

                                
                                <div class="flex items-center gap-2 text-sm font-bold text-slate-700 dark:text-gray-300 mb-3">
                                    <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    <?php if($event->start_time->isSameDay($event->end_time)): ?>
                                        <span class="capitalize"><?php echo e($event->start_time->locale('es')->isoFormat('dddd D')); ?></span>
                                        <span class="text-slate-300">|</span>
                                        <span><?php echo e($event->start_time->format('H:i')); ?> - <?php echo e($event->end_time->format('H:i')); ?></span>
                                    <?php else: ?>
                                        Del <?php echo e($event->start_time->locale('es')->isoFormat('D MMM')); ?> al <?php echo e($event->end_time->locale('es')->isoFormat('D MMM')); ?> de <?php echo e($event->end_time->format('Y')); ?>

                                    <?php endif; ?>
                                </div>

                                
                                <?php if($event->capacity): ?>
                                    <div class="flex items-center gap-2 text-xs text-slate-500 mb-4 pb-4 border-b border-slate-100">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                        <?php echo e($event->attendees_count); ?> / <?php echo e($event->capacity); ?> Participantes
                                    </div>


                                <?php endif; ?>



                                
                                <div class="space-y-4">
                                    <h3 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-1">Instructor</h3>
                                    <p class="text-sm mb-5">MSC. Edgar Degante-Aguilar</p>
                                    <h3 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-1 mt-5">Detalles</h3>
                                    <p class="text-slate-600 dark:text-gray-300 text-sm whitespace-pre-line line-clamp-3">
                                        <?php echo e($event->description); ?>

                                    </p>

                                    
                                    <?php if($event->requirements): ?>
                                        <div class="mt-2">
                                            <h3 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-1 mt-5">Requisitos</h3>
                                            <ul class="list-disc list-inside text-xs text-slate-500 italic space-y-1">
                                                <?php $__currentLoopData = explode("\n", $event->requirements); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $req): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if(trim($req) !== ''): ?>
                                                        <li class="line-clamp-1"><?php echo e(trim($req)); ?></li>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            
                            <div class="pt-6 mt-4 border-t border-slate-100 dark:border-gray-700">

                                
                                <?php if(Auth::check() && Auth::user()->role === 'admin'): ?>
                                    <div class="grid grid-cols-2 gap-3">
                                        <a href="<?php echo e(route('events.edit', $event)); ?>" class="flex items-center justify-center gap-2 bg-yellow-50 text-yellow-700 hover:bg-yellow-100 py-2 rounded-lg text-sm font-bold transition-colors border border-yellow-200">
                                            ✏️ Editar
                                        </a>
                                        <form action="<?php echo e(route('events.destroy', $event)); ?>" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este evento?');">
                                            <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="w-full flex items-center justify-center gap-2 bg-red-50 text-red-700 hover:bg-red-100 py-2 rounded-lg text-sm font-bold transition-colors border border-red-200">
                                                🗑️ Eliminar
                                            </button>
                                        </form>
                                    </div>

                                    
                                <?php else: ?>
                                    <?php if(auth()->guard()->check()): ?>
                                        <?php if(Auth::user()->events->contains($event->id)): ?>
                                            
                                            <div class="bg-green-50 border border-green-200 rounded-lg p-3 text-center">
                                                <div class="text-green-700 font-bold text-sm mb-2 flex items-center justify-center gap-2">
                                                    <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                                                    Ya estás inscrito
                                                </div>
                                                <form action="<?php echo e(route('events.leave', $event)); ?>" method="POST" onsubmit="return confirm('¿Cancelar inscripción?');">
                                                    <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="text-xs text-red-500 hover:text-red-700 hover:underline">
                                                        Cancelar mi asistencia
                                                    </button>
                                                </form>
                                            </div>
                                        <?php else: ?>
                                            
                                            <?php if($event->capacity && $event->attendees_count >= $event->capacity): ?>
                                                <button disabled class="w-full bg-slate-100 text-slate-400 font-medium py-2.5 rounded-xl cursor-not-allowed border border-slate-200">
                                                    Cupo Completo
                                                </button>
                                            <?php else: ?>
                                                <form action="<?php echo e(route('events.join', $event)); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>

                                                    <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['variant' => 'primary','type' => 'submit','color' => 'sky','class' => 'w-full justify-center gap-3 !py-4 !text-lg font-bold shadow-lg']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'primary','type' => 'submit','color' => 'sky','class' => 'w-full justify-center gap-3 !py-4 !text-lg font-bold shadow-lg']); ?>
                                                        <span>Inscribirme</span>

                                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $attributes = $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $component = $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>

                                                </form>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    <?php else: ?>
                                        
                                        <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['href' => ''.e(route('login')).'','variant' => 'outline','class' => 'w-full justify-center gap-3 !py-4 !text-lg font-bold border-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('login')).'','variant' => 'outline','class' => 'w-full justify-center gap-3 !py-4 !text-lg font-bold border-2']); ?>
                                            <span>Inicia sesión para participar</span>

                                            
                                            <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                                            </svg>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $attributes = $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $component = $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
                                    <?php endif; ?>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>

        
        <div class="mt-12">
            <?php echo e($events->links()); ?>

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
<?php endif; ?><?php /**PATH /var/www/vhosts/cafined.org/v2.cafined.org/resources/views/events/index.blade.php ENDPATH**/ ?>