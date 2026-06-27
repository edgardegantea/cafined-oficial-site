<x-layouts.public.public>

    <section class="bg-white dark:bg-gray-900 transition-colors duration-300">
        <div class="max-w-screen-xl mx-auto px-4 lg:px-8">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight text-gray-900 dark:text-gray-50 mb-6">
                Producción Científica
            </h1>
            <p class="text-xl font-light text-gray-500 dark:text-gray-400 max-w-3xl">
                Investigación, desarrollo tecnológico y aportes académicos creados por los investigadores y estudiantes de CAFINED Lab.
            </p>
        </div>
    </section>




    <section class="bg-white dark:bg-gray-900 transition-colors duration-300">
        <div class="max-w-screen-xl mx-auto px-4 lg:px-8">

            <div class="mb-32">

                <div class="bg-gray-50 dark:bg-gray-800/60 rounded-r-2xl p-6 md:p-8 mb-10 shadow-sm flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <div>
                        <h2 class="text-2xl md:text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white uppercase">
                            Publicaciones y Journals
                        </h2>
                        <p class="text-sm md:text-base text-gray-500 dark:text-gray-400 mt-2 font-medium">
                            Revistas Indexadas y Artículos ({{ count($publications) }} Registros)
                        </p>
                    </div>

                </div>

                <div class="flex flex-col gap-8">
                    @forelse($publications as $publication)
                        <article class="group p-6 md:p-8 bg-white dark:bg-gray-800/40 rounded-2xl shadow-sm hover:shadow-md dark:hover:shadow-lg dark:hover:shadow-black/300 transition-all duration-300 hover:-translate-y-1 flex flex-col md:flex-row gap-6 md:gap-12">

                            <div class="md:w-1/4 shrink-0 md:text-right pt-1">
                            <span class="text-xl md:text-2xl font-bold text-blue-600 dark:text-blue-400">
                                {{ $publication->year ?: 'S/F' }}
                            </span>

                                @if($publication->journal)
                                    <p class="text-xs font-semibold text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-300 mt-2 uppercase tracking-wider transition-colors">
                                        {{ $publication->journal }}
                                    </p>
                                @endif

                                @if($publication->publisher)
                                    <div class="mt-4 flex flex-wrap gap-2 md:justify-end">
                                    <span class="text-[10px] font-bold uppercase tracking-wider bg-gray-100 text-gray-600 dark:bg-gray-700/50 dark:text-gray-300 border border-gray-200 dark:border-gray-600 px-2.5 py-1 rounded-md transition-colors group-hover:bg-blue-50 dark:group-hover:bg-blue-900/30 group-hover:text-blue-700 dark:group-hover:text-blue-300 group-hover:border-blue-200 dark:group-hover:border-blue-800">
                                        {{ $publication->publisher }}
                                    </span>
                                    </div>
                                @endif
                            </div>

                            <div class="md:w-3/4 flex flex-col justify-center">
                                <a href="{{ $publication->url ?: '#' }}" @if($publication->url) target="_blank" @endif class="inline-block">
                                    <h3 class="text-xl md:text-2xl font-bold text-gray-900 dark:text-gray-100 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors mb-3 leading-tight">
                                        {{ $publication->title }}
                                    </h3>
                                </a>

                                @if($publication->authors)
                                    <p class="text-sm md:text-base font-medium text-gray-700 dark:text-gray-300 mb-6">
                                        {{ $publication->authors }}
                                    </p>
                                @endif

                                <div class="flex items-center gap-6 text-sm font-semibold uppercase tracking-wider mt-auto">
                                    @if($publication->url)
                                        <a href="{{ $publication->url }}" target="_blank" class="text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white transition-colors flex items-center gap-1">
                                            Enlace Externo
                                        </a>
                                    @endif

                                    @if($publication->doi)
                                        <a href="https://doi.org/{{ $publication->doi }}" target="_blank" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300 flex items-center gap-1 transition-colors bg-blue-50 dark:bg-blue-900/20 px-3 py-1.5 rounded-lg group-hover:bg-blue-100 dark:group-hover:bg-blue-900/40">
                                            Ver DOI <span class="group-hover:translate-x-1 transition-transform">→</span>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </article>
                    @empty
                        <div class="py-12 text-center text-gray-500 dark:text-gray-400 font-light italic bg-gray-50 dark:bg-gray-800/30 rounded-2xl border border-dashed border-gray-300 dark:border-gray-700">
                            Aún no hay publicaciones registradas.
                        </div>
                    @endforelse
                </div>

                @if(method_exists($publications, 'links'))
                    <div class="mt-12">
                        {{ $publications->links() }}
                    </div>
                @endif
            </div>

            <div class="mb-20">
                <div class="bg-gray-50 dark:bg-gray-800/60 border border-gray-100 dark:border-gray-700/50 border-l-4 border-l-indigo-600 dark:border-l-indigo-500 rounded-r-2xl p-6 md:p-8 mb-10 shadow-sm flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <div>
                        <h2 class="text-2xl md:text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white uppercase">
                            Congresos
                        </h2>
                        <p class="text-sm md:text-base text-gray-500 dark:text-gray-400 mt-2 font-medium">
                            Memorias y Ponencias
                        </p>
                    </div>
                </div>

                <div class="py-12 text-center text-gray-500 dark:text-gray-400 font-light italic bg-gray-50 dark:bg-gray-800/30 rounded-2xl border border-dashed border-gray-300 dark:border-gray-700">
                    Más publicaciones por añadir...
                </div>
            </div>

        </div>
    </section>



</x-layouts.public.public>