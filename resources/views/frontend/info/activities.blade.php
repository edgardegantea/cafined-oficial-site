<x-layouts.public.public>

    <section class="border-b border-stone-100 py-12 px-4 text-center">
        <div class="max-w-2xl mx-auto">
            <h1 class="text-4xl font-bold tracking-tight text-stone-900 mb-3">Actividades académicas</h1>
            <p class="text-lg text-stone-500">
                Talleres, cursos, conferencias y más actividades para nuestra comunidad.
            </p>
        </div>
    </section>

    <div class="max-w-screen-xl mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($activities as $activity)
                <div class="group bg-white rounded-xl border border-stone-200 overflow-hidden flex flex-col hover:border-stone-300 hover:shadow-md transition-all duration-200">
                    @if($activity->image_path)
                        <div class="overflow-hidden aspect-video">
                            <img src="{{ Storage::url($activity->image_path) }}"
                                 alt="{{ $activity->name }}"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                    @else
                        <div class="aspect-video bg-stone-50 flex items-center justify-center">
                            <svg class="w-10 h-10 text-stone-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                    @endif

                    <div class="p-5 flex flex-col flex-1">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-xs font-semibold text-teal-700 bg-teal-50 px-2.5 py-0.5 rounded-full uppercase tracking-wide">
                                {{ $activity->type }}
                            </span>
                        </div>

                        <h2 class="font-semibold text-stone-900 text-base leading-snug mb-2">
                            {{ $activity->name }}
                        </h2>

                        <p class="text-sm text-stone-500 line-clamp-2 mb-3">{{ $activity->excerpt }}</p>

                        @php
                            $startTime = \Carbon\Carbon::parse($activity->start_time);
                            $endTime   = \Carbon\Carbon::parse($activity->end_time);
                        @endphp

                        <div class="mt-auto space-y-1 text-xs text-stone-400">
                            <p>
                                <span class="font-medium text-stone-500">Duración:</span>
                                {{ $activity->duration }} h
                            </p>
                            <p>
                                {{ $startTime->translatedFormat('j \de F') }}
                                – {{ $endTime->translatedFormat('j \de F \de Y') }}
                            </p>
                        </div>
                    </div>

                    <div class="px-5 pb-5">
                        <flux:button icon="cursor-arrow-ripple" variant="primary" class="w-full justify-center">
                            Inscribirme
                        </flux:button>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-10">
            {{ $activities->links() }}
        </div>
    </div>

</x-layouts.public.public>
