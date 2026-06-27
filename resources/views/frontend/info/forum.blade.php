<x-layouts.public.public>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">

            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                ¡No te pierdas nada de lo que ocurre en CAFINED!
            </h1>

            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400">
                Próximos Eventos y Encuentros
            </p>

            <div class="flex flex-col space-y-4 sm:px-16 lg:px-48">
                <p class="text-lg font-normal text-gray-500 dark:text-gray-400">
                    Aquí compartimos todas las oportunidades para aprender, debatir y conectar. Si te interesa saber cómo la tecnología puede transformar la educación a través de las emociones, este es tu lugar.
                </p>


                <div class="w-full max-w-4xl mx-auto p-4">
                    <h3 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">
                        Tipos de eventos:
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                        <div class="flex flex-col p-6 bg-white rounded-lg border border-gray-200 shadow-sm hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 transition-colors">
                            <div class="flex items-center mb-3">
                                <div class="p-2 bg-blue-100 rounded-lg dark:bg-blue-900 mr-3">
                                    <svg class="w-6 h-6 text-blue-600 dark:text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path></svg>
                                </div>
                                <h5 class="text-lg font-bold text-gray-900 dark:text-white">
                                    Conferencias Magistrales
                                </h5>
                            </div>
                            <p class="text-gray-500 dark:text-gray-400">
                                Aprende de los líderes del sector y descubre las últimas tendencias.
                            </p>
                        </div>

                        <div class="flex flex-col p-6 bg-white rounded-lg border border-gray-200 shadow-sm hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 transition-colors">
                            <div class="flex items-center mb-3">
                                <div class="p-2 bg-green-100 rounded-lg dark:bg-green-900 mr-3">
                                    <svg class="w-6 h-6 text-green-600 dark:text-green-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                                </div>
                                <h5 class="text-lg font-bold text-gray-900 dark:text-white">
                                    Hackathons y Retos
                                </h5>
                            </div>
                            <p class="text-gray-500 dark:text-gray-400">
                                Pon a prueba tus habilidades resolviendo problemas en tiempo real.
                            </p>
                        </div>

                    </div>
                </div>


            </div>
    </section>

    <div class="container mx-auto py-10">

        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            {{-- Tu loop de actividades existente --}}
            @foreach($activities as $activity)
            @endforeach
        </div>

        <flux:separator />

        <div class="justify-items-center text-black mb-10">
            {{ $activities->links() }}
        </div>

        <div class="mt-16 mb-20 max-w-7xl mx-auto px-4">

            <h2 class="text-3xl font-bold text-center mb-8 dark:text-dark">
                1er. FORO DE DIVULGACIÓN CIENTÍFICA
            </h2>


            {{-- INICIO DE LA SECCIÓN MODIFICADA --}}
            {{-- Se añadió mx-auto y max-w-[500px] --}}

			<div class="grid grid-cols-12 gap-4 mb-8">

    <div class="col-span-12 md:col-span-6 md:col-start-4 bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl shadow-lg overflow-hidden relative">
        
        <div class="relative w-full p-2">
            <img 
                src="{{ asset('storage/docs/foro2025/invitacion.jpg') }}" 
                alt="Programa de Actividades" 
                class="w-full h-auto object-contain rounded-lg pointer-events-none select-none"
                loading="lazy"
            >

            <div 
                class="absolute inset-0 z-10 bg-transparent w-full h-full cursor-default"
                oncontextmenu="return false;"
                ondragstart="return false;"
            ></div>
        </div>
        
    </div>

</div>
            {{-- FIN DE LA SECCIÓN MODIFICADA --}}


            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">

                <div class="w-full bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl shadow-lg overflow-hidden relative">
                    <div class="relative w-full p-2">

                        <img
                            src="{{ asset('storage/docs/foro2025/convocatoria_carteles.jpg') }}"
                            alt="Programa de Actividades"
                            class="w-full h-auto object-contain rounded-lg pointer-events-none select-none"
                            loading="lazy"
                        >

                        <div
                            class="absolute inset-0 z-10 bg-transparent w-full h-full cursor-default"
                            oncontextmenu="return false;"
                            ondragstart="return false;"
                        ></div>
                    </div>
                </div>

                <div class="w-full bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl shadow-lg overflow-hidden relative">
                    <div class="relative w-full p-2">

                        <img
                            src="{{ asset('storage/docs/programa_actividades.jpg') }}"
                            alt="Programa de Actividades"
                            class="w-full h-auto object-contain rounded-lg pointer-events-none select-none"
                            loading="lazy"
                        >

                        <div
                            class="absolute inset-0 z-10 bg-transparent w-full h-full cursor-default"
                            oncontextmenu="return false;"
                            ondragstart="return false;"
                        ></div>
                    </div>
                </div>

            </div>

            <p class="text-center text-sm text-gray-500 dark:text-gray-400 mt-6 select-none">
                * Documentos de solo lectura.
            </p>
        </div>
    </div>

</x-layouts.public.public>