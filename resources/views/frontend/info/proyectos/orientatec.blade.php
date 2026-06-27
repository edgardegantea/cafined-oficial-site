<x-layouts.public.public>
    <section class="bg-white dark:bg-gray-900 transition-colors duration-300">
        <div class="max-w-screen-xl mx-auto px-4 lg:px-6 py-10 lg:py-16">
            <div class="grid gap-10 lg:grid-cols-2 items-center">

                {{-- Columna izquierda: texto + botones --}}
                <div class="space-y-6">
                    <div class="text-sm font-medium text-gray-500 dark:text-gray-400">
                        Aplicación de orientación vocacional
                    </div>

                    <div>
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight text-gray-900 dark:text-white">
                            Descubre tu futuro con
                            <span class="block text-blue-700 dark:text-blue-400">OrientaTec</span>
                        </h1>
                    </div>

                    <p class="text-lg lg:text-xl font-normal text-gray-600 dark:text-gray-400 max-w-xl">
                        OrientaTec es una aplicación de orientación vocacional dirigida a estudiantes de bachillerato.
                        A través de un cuestionario interactivo, identifica tus intereses académicos y te sugiere las carreras del
                        <span class="font-bold text-blue-700 dark:text-blue-400">
                            Instituto Tecnológico Superior de Misantla
                        </span>
                        que mejor se relacionan con tu perfil.
                    </p>

                    <div class="flex flex-wrap gap-4 items-center">
                        {{-- Botón APK --}}
                        <a href="{{ asset('storage/files/OrientaTec-release.apk') }}"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="inline-flex justify-center items-center py-3 px-6 text-base font-semibold text-center
                                  text-gray-900 bg-white border-2 border-blue-600
                                  hover:bg-blue-600 hover:text-white
                                  focus:ring-4 focus:ring-blue-200
                                  rounded-lg dark:bg-transparent dark:text-white dark:border-blue-500
                                  dark:hover:bg-blue-600 dark:hover:text-white dark:focus:ring-blue-800
                                  transition-colors duration-200">
                            <svg class="mr-2 w-5 h-5"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="1.8"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 xmlns="http://www.w3.org/2000/svg"
                                 aria-hidden="true">
                                <path d="M8 9h8a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-1v2a1 1 0 0 1-2 0v-2h-2v2a1 1 0 0 1-2 0v-2H8a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2Z"/>
                                <path d="M9 9V7.5a3 3 0 0 1 6 0V9"/>
                                <path d="M8.5 4.5 7 2.5"/>
                                <path d="M15.5 4.5 17 2.5"/>
                                <circle cx="10" cy="13" r=".8" fill="currentColor" stroke="none"/>
                                <circle cx="14" cy="13" r=".8" fill="currentColor" stroke="none"/>
                            </svg>
                            Descargar APK
                        </a>

                        {{-- Botón Versión Web --}}
                        <a href="https://orientatec.cafined.org"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="inline-flex justify-center items-center py-3 px-6 text-base font-semibold text-center
                                  text-gray-900 bg-white border-2 border-blue-600
                                  hover:bg-blue-600 hover:text-white
                                  focus:ring-4 focus:ring-blue-200
                                  rounded-lg dark:bg-transparent dark:text-white dark:border-blue-500
                                  dark:hover:bg-blue-600 dark:hover:text-white dark:focus:ring-blue-800
                                  transition-colors duration-200">
                            <svg class="mr-2 w-5 h-5"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="1.8"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 xmlns="http://www.w3.org/2000/svg"
                                 aria-hidden="true">
                                <circle cx="12" cy="12" r="9"></circle>
                                <path d="M3 12h18"></path>
                                <path d="M12 3a15 15 0 0 1 0 18"></path>
                                <path d="M12 3a15 15 0 0 0 0 18"></path>
                            </svg>
                            Versión Web
                        </a>
                    </div>

                    <div>
                        <a href="{{ route('orientatecprivacidad') }}"
                           class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-blue-700 dark:text-gray-500 dark:hover:text-blue-400 transition-colors">
                            <svg class="mr-1.5 w-4 h-4" fill="none" stroke="currentColor"
                                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                            Aviso de Privacidad
                        </a>
                    </div>
                </div>

                {{-- Columna derecha: imagen real de la app --}}
                <div class="relative flex justify-center lg:justify-end">
                    <div class="relative w-72 sm:w-80 md:w-96 lg:w-[420px]">
                        <div class="absolute -inset-4 bg-gradient-to-tr from-blue-500/20 via-emerald-400/10 to-transparent rounded-3xl blur-xl"></div>

                        <img src="{{ asset('storage/images/projects/orientatec1.png') }}"
                             alt="Vista previa de OrientaTec"
                             class="relative w-full h-auto rounded-3xl shadow-2xl  object-cover transition-transform duration-500 hover:scale-[1.02]">
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-layouts.public.public>