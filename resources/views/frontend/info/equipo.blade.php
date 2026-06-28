<x-layouts.public.public>

    <section class="border-b border-stone-100 py-12 px-4 text-center">
        <div class="max-w-2xl mx-auto">
            <h1 class="text-4xl font-bold tracking-tight text-stone-900 mb-3">Nuestro equipo</h1>
            <p class="text-lg text-stone-500">Cada miembro aporta algo especial a nuestra comunidad de investigación.</p>
        </div>
    </section>

    {{-- Fundador --}}
    <section class="max-w-screen-xl mx-auto px-4 py-14">
        <div class="flex justify-center">
            <a href="https://v2.cafined.org/angelarmenta" target="_blank"
               class="group w-full max-w-xs rounded-xl border border-stone-200 overflow-hidden hover:border-teal-300 hover:shadow-md transition-all duration-200">
                <div class="overflow-hidden aspect-[4/5]">
                    <img src="{{ asset('storage/equipo/armenta.png') }}"
                         alt="Doctor Roberto Ángel Meléndez Armenta"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-5 text-center">
                    <h2 class="font-semibold text-stone-900 group-hover:text-teal-700 transition-colors mb-1">
                        Roberto Ángel Meléndez Armenta
                    </h2>
                    <p class="text-xs font-semibold text-stone-400 uppercase tracking-wider">Fundador &amp; Líder</p>
                </div>
            </a>
        </div>
    </section>

    {{-- Colaboradores --}}
    <section class="border-t border-stone-100 max-w-screen-xl mx-auto px-4 py-14">
        <h2 class="text-2xl font-bold tracking-tight text-stone-900 mb-8 text-center">Colaboradores</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">

            <a href="{{ url('soto') }}"
               class="group rounded-xl border border-stone-200 overflow-hidden hover:border-teal-300 hover:shadow-md transition-all duration-200">
                <div class="overflow-hidden aspect-[4/5]">
                    <img src="{{ asset('storage/equipo/soto.png') }}" alt="José Edgar Soto Meneses"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-stone-900 group-hover:text-teal-700 transition-colors text-sm mb-0.5">
                        José Edgar Soto Meneses
                    </h3>
                    <p class="text-xs font-medium text-stone-400 uppercase tracking-wider">Colaborador</p>
                </div>
            </a>

            <a href="{{ url('giovanni') }}"
               class="group rounded-xl border border-stone-200 overflow-hidden hover:border-teal-300 hover:shadow-md transition-all duration-200">
                <div class="overflow-hidden aspect-[4/5]">
                    <img src="{{ asset('storage/equipo/giovanni.png') }}" alt="Giovanni Luna Chontal"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-stone-900 group-hover:text-teal-700 transition-colors text-sm mb-0.5">
                        Giovanni Luna Chontal
                    </h3>
                    <p class="text-xs font-medium text-stone-400 uppercase tracking-wider">Colaborador</p>
                </div>
            </a>

            <a href="{{ url('edegantea') }}"
               class="group rounded-xl border border-stone-200 overflow-hidden hover:border-teal-300 hover:shadow-md transition-all duration-200">
                <div class="overflow-hidden aspect-[4/5]">
                    <img src="{{ asset('storage/equipo/degante.png') }}" alt="Edgar Degante Aguilar"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-stone-900 group-hover:text-teal-700 transition-colors text-sm mb-0.5">
                        Edgar Degante Aguilar
                    </h3>
                    <p class="text-xs font-medium text-stone-400 uppercase tracking-wider">Colaborador</p>
                </div>
            </a>

            <a href="{{ url('franciscoj') }}"
               class="group rounded-xl border border-stone-200 overflow-hidden hover:border-teal-300 hover:shadow-md transition-all duration-200">
                <div class="overflow-hidden aspect-[4/5]">
                    <img src="{{ asset('storage/equipo/francisco.png') }}" alt="Francisco Javier Fernández Domínguez"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-stone-900 group-hover:text-teal-700 transition-colors text-sm mb-0.5">
                        Francisco Javier Fernández Domínguez
                    </h3>
                    <p class="text-xs font-medium text-stone-400 uppercase tracking-wider">Colaborador</p>
                </div>
            </a>

        </div>
    </section>

    {{-- Tesistas y Servicio Social --}}
    <section class="border-t border-stone-100 max-w-screen-xl mx-auto px-4 py-14">
        <h2 class="text-2xl font-bold tracking-tight text-stone-900 mb-8 text-center">Tesistas y Servicio Social</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">

            <a href="{{ url('robertoc') }}"
               class="group rounded-xl border border-stone-200 overflow-hidden hover:border-teal-300 hover:shadow-md transition-all duration-200">
                <div class="overflow-hidden aspect-[4/5]">
                    <img src="{{ asset('storage/equipo/roberto.png') }}" alt="Roberto Carlos Guzmán Cortés"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-stone-900 group-hover:text-teal-700 transition-colors text-sm mb-0.5">
                        Roberto Carlos Guzmán Cortés
                    </h3>
                    <p class="text-xs font-medium text-stone-400 uppercase tracking-wider">Tesista · MSC</p>
                </div>
            </a>

            <a href="{{ url('robertoc') }}"
               class="group rounded-xl border border-stone-200 overflow-hidden hover:border-teal-300 hover:shadow-md transition-all duration-200">
                <div class="overflow-hidden aspect-[4/5]">
                    <img src="{{ asset('storage/equipo/adrian.jpg') }}" alt="Jesús Adrián Pazos Vera"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-stone-900 group-hover:text-teal-700 transition-colors text-sm mb-0.5">
                        Jesús Adrián Pazos Vera
                    </h3>
                    <p class="text-xs font-medium text-stone-400 uppercase tracking-wider">Tesista · ISC</p>
                </div>
            </a>

            <a href="{{ url('robertoc') }}"
               class="group rounded-xl border border-stone-200 overflow-hidden hover:border-teal-300 hover:shadow-md transition-all duration-200">
                <div class="overflow-hidden aspect-[4/5]">
                    <img src="{{ asset('storage/equipo/sinfoto.jpg') }}" alt="Milton David Ramírez Romero"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-stone-900 group-hover:text-teal-700 transition-colors text-sm mb-0.5">
                        Milton David Ramírez Romero
                    </h3>
                    <p class="text-xs font-medium text-stone-400 uppercase tracking-wider">Tesista · ISC</p>
                </div>
            </a>

            <a href="#"
               class="group rounded-xl border border-stone-200 overflow-hidden hover:border-teal-300 hover:shadow-md transition-all duration-200">
                <div class="overflow-hidden aspect-[4/5]">
                    <img src="{{ asset('storage/equipo/itzelespinozalopez.jpeg') }}" alt="Itzel Espinoza López"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-stone-900 group-hover:text-teal-700 transition-colors text-sm mb-0.5">
                        Itzel Espinoza López
                    </h3>
                    <p class="text-xs font-medium text-stone-400 uppercase tracking-wider">Tesista · ISC</p>
                </div>
            </a>

        </div>
    </section>

</x-layouts.public.public>
