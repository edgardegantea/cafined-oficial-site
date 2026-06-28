<x-layouts.public.public>
    <div class="max-w-3xl mx-auto px-4 py-10">

        {{-- Breadcrumb --}}
        <nav class="flex items-center gap-2 text-sm text-stone-400 mb-8" aria-label="Breadcrumb">
            <a href="{{ route('inicio') }}" class="hover:text-stone-700 transition-colors">Inicio</a>
            <svg class="w-3.5 h-3.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <a href="{{ route('posts.index') }}" class="hover:text-stone-700 transition-colors">Comunicación</a>
            <svg class="w-3.5 h-3.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <span class="text-stone-600 truncate max-w-xs">{{ $post->title }}</span>
        </nav>

        {{-- Article --}}
        <article>
            @if($post->image_path)
                <img src="{{ Storage::url($post->image_path_2) }}"
                     alt="{{ $post->title }}"
                     class="w-full rounded-xl object-cover mb-8 max-h-[420px]">
            @endif

            <header class="mb-8">
                <h1 class="text-3xl md:text-4xl font-bold tracking-tight text-stone-900 leading-tight mb-3">
                    {{ $post->title }}
                </h1>
                <p class="text-sm text-stone-400">
                    Publicado el {{ $post->created_at->locale('es_ES')->isoFormat('LL') }}
                </p>
            </header>

            <div class="prose-content">
                {!! $post->content !!}
            </div>
        </article>

        {{-- Back link --}}
        <div class="mt-12 pt-8 border-t border-stone-100">
            <a href="{{ route('posts.index') }}"
               class="inline-flex items-center gap-2 text-sm text-stone-500 hover:text-teal-700 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Volver a Comunicación
            </a>
        </div>
    </div>
</x-layouts.public.public>
