<x-layouts.public.public>

    <section class="border-b border-stone-100 py-12 px-4 text-center">
        <div class="max-w-2xl mx-auto">
            <h1 class="text-4xl font-bold tracking-tight text-stone-900 mb-3">Proyectos</h1>
            <p class="text-lg text-stone-500">
                Explora nuestra colección de proyectos, herramientas y desarrollos creados por nuestra comunidad.
            </p>
        </div>
    </section>

    <section class="max-w-screen-xl mx-auto px-4 py-12">
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">

            <article class="group flex flex-col bg-white rounded-xl border border-stone-200 overflow-hidden hover:border-stone-300 hover:shadow-md transition-all duration-200">
                <div class="overflow-hidden">
                    <img class="object-cover w-full h-48 group-hover:scale-105 transition-transform duration-300"
                         src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&q=80&w=800"
                         alt="SATCi">
                </div>
                <div class="flex flex-col flex-grow p-6">
                    <div class="flex flex-wrap gap-1.5 mb-3">
                        <span class="text-xs font-medium px-2.5 py-0.5 rounded-full bg-stone-100 text-stone-600">Python</span>
                        <span class="text-xs font-medium px-2.5 py-0.5 rounded-full bg-stone-100 text-stone-600">Green Logistic</span>
                    </div>
                    <h2 class="text-xl font-bold tracking-tight text-stone-900 group-hover:text-teal-700 transition-colors mb-2">
                        SATCi
                    </h2>
                    <p class="flex-grow text-sm text-stone-500 line-clamp-3 mb-4">
                        Una plataforma completa para administrar recursos empresariales, diseñada para ser rápida, accesible y fácil de mantener.
                    </p>
                    <div class="pt-4 border-t border-stone-100 flex items-center justify-between">
                        <div class="flex items-center gap-2.5">
                            <img class="w-7 h-7 rounded-full object-cover"
                                 src="https://ui-avatars.com/api/?name=Juan+Perez&background=random" alt="Juan Pérez">
                            <span class="text-sm text-stone-600">Juan Pérez</span>
                        </div>
                        <a href="#" class="text-sm font-semibold text-teal-600 hover:text-teal-800 transition-colors">
                            Ver más →
                        </a>
                    </div>
                </div>
            </article>

            <article class="group flex flex-col bg-white rounded-xl border border-stone-200 overflow-hidden hover:border-stone-300 hover:shadow-md transition-all duration-200">
                <div class="overflow-hidden">
                    <img class="object-cover w-full h-48 group-hover:scale-105 transition-transform duration-300"
                         src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&q=80&w=800"
                         alt="saberes360">
                </div>
                <div class="flex flex-col flex-grow p-6">
                    <div class="flex flex-wrap gap-1.5 mb-3">
                        <span class="text-xs font-medium px-2.5 py-0.5 rounded-full bg-stone-100 text-stone-600">Laravel</span>
                        <span class="text-xs font-medium px-2.5 py-0.5 rounded-full bg-stone-100 text-stone-600">Tailwind CSS</span>
                    </div>
                    <a href="{{ route('saberes360') }}">
                        <h2 class="text-xl font-bold tracking-tight text-stone-900 group-hover:text-teal-700 transition-colors mb-2">
                            saberes360
                        </h2>
                    </a>
                    <p class="flex-grow text-sm text-stone-500 line-clamp-3 mb-4">
                        Proyecto enfocado en la educación virtual que propone un enfoque integral para mejorar el proceso de enseñanza-aprendizaje.
                    </p>
                    <div class="pt-4 border-t border-stone-100 flex items-center justify-between">
                        <div class="flex items-center gap-2.5">
                            <img class="w-7 h-7 rounded-full object-cover"
                                 src="https://ui-avatars.com/api/?name=Itzel+Espinoza&background=random" alt="Itzel Espinoza López">
                            <span class="text-sm text-stone-600">Itzel Espinoza López</span>
                        </div>
                        <a href="{{ route('saberes360') }}" class="text-sm font-semibold text-teal-600 hover:text-teal-800 transition-colors">
                            Ver más →
                        </a>
                    </div>
                </div>
            </article>

            <article class="group flex flex-col bg-white rounded-xl border border-stone-200 overflow-hidden hover:border-stone-300 hover:shadow-md transition-all duration-200">
                <a href="{{ route('orientatec') }}" class="overflow-hidden block">
                    <img class="object-cover w-full h-48 group-hover:scale-105 transition-transform duration-300"
                         src="{{ asset('storage/images/projects/orientatec.jpeg') }}" alt="OrientaTec">
                </a>
                <div class="flex flex-col flex-grow p-6">
                    <div class="flex flex-wrap gap-1.5 mb-3">
                        <span class="text-xs font-medium px-2.5 py-0.5 rounded-full bg-stone-100 text-stone-600">Laravel</span>
                        <span class="text-xs font-medium px-2.5 py-0.5 rounded-full bg-stone-100 text-stone-600">Tailwind CSS</span>
                    </div>
                    <a href="{{ route('orientatec') }}">
                        <h2 class="text-xl font-bold tracking-tight text-stone-900 group-hover:text-teal-700 transition-colors mb-2">
                            OrientaTec
                        </h2>
                    </a>
                    <p class="flex-grow text-sm text-stone-500 line-clamp-3 mb-4">
                        Aplicación de orientación vocacional para estudiantes de bachillerato. Identifica tus intereses y sugiere las carreras del ITSM que mejor se adaptan a tu perfil.
                    </p>
                    <div class="pt-4 border-t border-stone-100 flex items-center justify-between">
                        <div class="flex items-center gap-2.5">
                            <img class="w-7 h-7 rounded-full object-cover"
                                 src="https://ui-avatars.com/api/?name=Yiran+Lagunes&background=random" alt="Yiran Lagunes">
                            <span class="text-sm text-stone-600">Ing. Yiran Lagunes Guzman</span>
                        </div>
                        <a href="{{ route('orientatec') }}" class="text-sm font-semibold text-teal-600 hover:text-teal-800 transition-colors">
                            Ver más →
                        </a>
                    </div>
                </div>
            </article>

        </div>
    </section>

</x-layouts.public.public>
