<x-layouts.public.public>

    <section class="border-b border-stone-100 py-12 px-4 text-center">
        <div class="max-w-2xl mx-auto">
            <h1 class="text-4xl font-bold tracking-tight text-stone-900 mb-3">Comunicación</h1>
            <p class="text-lg text-stone-500">
                Noticias, logros, comunicados y toda la información relevante del laboratorio.
            </p>
        </div>
    </section>

    <div class="max-w-screen-xl mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($posts as $post)
                <a href="{{ route('posts.show', $post) }}"
                   class="group bg-white rounded-xl border border-stone-200 overflow-hidden flex flex-col hover:border-stone-300 hover:shadow-md transition-all duration-200">
                    @if($post->image_path)
                        <div class="overflow-hidden aspect-video">
                            <img src="{{ Storage::url($post->image_path) }}"
                                 alt="{{ $post->title }}"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                    @else
                        <div class="aspect-video bg-stone-50 flex items-center justify-center">
                            <svg class="w-10 h-10 text-stone-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                    @endif
                    <div class="p-5 flex flex-col flex-1">
                        <p class="text-xs font-medium text-stone-400 mb-2 tracking-wide">
                            {{ $post->published_at->locale('es_ES')->isoFormat('LL') }}
                        </p>
                        <h2 class="text-base font-semibold text-stone-900 group-hover:text-teal-700 transition-colors leading-snug mb-2">
                            {{ $post->title }}
                        </h2>
                        <p class="text-sm text-stone-500 line-clamp-3 flex-1">{{ $post->excerpt }}</p>
                        <span class="mt-4 text-xs font-semibold text-teal-600 inline-flex items-center gap-1">
                            Leer más
                            <svg class="w-3 h-3 group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <div class="max-w-screen-xl mx-auto px-4 pb-12">
        {{ $posts->links() }}
    </div>

</x-layouts.public.public>
