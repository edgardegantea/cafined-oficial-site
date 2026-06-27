<x-layouts.app xmlns:flux="http://www.w3.org/1999/html">

    <flux:breadcrumbs>
        <flux:breadcrumbs.item :href="route('dashboard')">
            Dashboard
        </flux:breadcrumbs.item>
        <flux:breadcrumbs.item :href="route('admin.publications.index')">
            Publicaciones
        </flux:breadcrumbs.item>
        <flux:breadcrumbs.item>
            Detalles de la publicación
        </flux:breadcrumbs.item>
    </flux:breadcrumbs>

    <div class="mt-5 mb-5 flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4">
        <div>
            <flux:heading size="xl">Detalles de la Publicación</flux:heading>
            <flux:text variant="subtle">Información completa del registro #{{ $publication->id }}</flux:text>
        </div>

        <div class="flex gap-2">
            <a href="{{ route('admin.publications.index') }}">
                <flux:button variant="subtle" icon="arrow-left" class="cursor-pointer">
                    Volver
                </flux:button>
            </a>
            <a href="{{ route('admin.publications.edit', $publication) }}">
                <flux:button variant="primary" icon="pencil" class="cursor-pointer">
                    Editar
                </flux:button>
            </a>
        </div>
    </div>

    <div class="bg-white dark:bg-gray-800 shadow-md sm:rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden">
        <div class="px-4 py-5 sm:px-6 border-b border-gray-200 dark:border-gray-700">
            <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-100">
                Información Bibliográfica
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500 dark:text-gray-400">
                Metadatos almacenados en la base de datos.
            </p>
        </div>

        <div class="border-t border-gray-200 dark:border-gray-700 px-4 py-5 sm:p-0">
            <dl class="sm:divide-y sm:divide-gray-200 dark:sm:divide-gray-700">

                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">
                        Título de la publicación
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 dark:text-gray-100 sm:mt-0 sm:col-span-2">
                        {{ $publication->title }}
                    </dd>
                </div>

                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 bg-gray-50 dark:bg-gray-800/50">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">
                        Autor(es)
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 dark:text-gray-100 sm:mt-0 sm:col-span-2">
                        {{ $publication->authors ?: 'No especificado' }}
                    </dd>
                </div>

                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">
                        Revista (Journal) / Año
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 dark:text-gray-100 sm:mt-0 sm:col-span-2">
                        {{ $publication->journal ?: 'N/A' }}
                        @if($publication->year)
                            <span class="font-semibold">({{ $publication->year }})</span>
                        @endif
                    </dd>
                </div>

                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 bg-gray-50 dark:bg-gray-800/50">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">
                        Editorial (Publisher)
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 dark:text-gray-100 sm:mt-0 sm:col-span-2">
                        {{ $publication->publisher ?: 'No especificada' }}
                    </dd>
                </div>

                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">
                        DOI
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 dark:text-gray-100 sm:mt-0 sm:col-span-2">
                        @if($publication->doi)
                            <a href="https://doi.org/{{ $publication->doi }}" target="_blank" class="text-blue-600 hover:text-blue-500 dark:text-blue-400 hover:underline">
                                {{ $publication->doi }}
                            </a>
                        @else
                            No asignado
                        @endif
                    </dd>
                </div>

                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 bg-gray-50 dark:bg-gray-800/50">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">
                        Enlace Externo (URL)
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 dark:text-gray-100 sm:mt-0 sm:col-span-2">
                        @if($publication->url)
                            <a href="{{ $publication->url }}" target="_blank" class="text-blue-600 hover:text-blue-500 dark:text-blue-400 hover:underline flex items-center gap-1">
                                Visitar publicación original
                                <flux:icon name="arrow-top-right-on-square" class="w-4 h-4" />
                            </a>
                        @else
                            Sin enlace externo
                        @endif
                    </dd>
                </div>

                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">
                        Registro en sistema
                    </dt>
                    <dd class="mt-1 text-sm text-gray-500 dark:text-gray-400 sm:mt-0 sm:col-span-2">
                        Creado: {{ $publication->created_at ? $publication->created_at->format('d/m/Y H:i') : 'Desconocido' }} <br>
                        Última actualización: {{ $publication->updated_at ? $publication->updated_at->diffForHumans() : 'Desconocido' }} <br>
                    </dd>
                </div>

            </dl>
        </div>
    </div>

</x-layouts.app>