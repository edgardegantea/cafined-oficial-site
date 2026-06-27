<x-layouts.app xmlns:flux="http://www.w3.org/1999/html">

    <flux:breadcrumbs>
        <flux:breadcrumbs.item :href="route('dashboard')">
            Dashboard
        </flux:breadcrumbs.item>
        <flux:breadcrumbs.item :href="route('admin.publications.index')">
            Publicaciones
        </flux:breadcrumbs.item>
        <flux:breadcrumbs.item>
            Nueva publicación
        </flux:breadcrumbs.item>
    </flux:breadcrumbs>

    <div class="mt-5 mb-5">
        <flux:heading size="xl">Agregar Nueva Publicación</flux:heading>
        <flux:text variant="subtle">Ingresa los metadatos del artículo o publicación científica.</flux:text>
    </div>

    <div class="relative shadow-md sm:rounded-lg bg-white dark:bg-gray-800 p-6 border border-gray-200 dark:border-gray-700">

        <form action="{{ route('admin.publications.store') }}" method="POST">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div class="md:col-span-2">
                    <flux:field>
                        <flux:label>Título de la publicación <span class="text-red-500">*</span></flux:label>
                        <flux:input type="text" name="title" value="{{ old('title') }}" required placeholder="Ej. El impacto del cambio climático en..." />
                        <flux:error name="title" />
                    </flux:field>
                </div>

                <div class="md:col-span-2">
                    <flux:field>
                        <flux:label>Autor(es)</flux:label>
                        <flux:input type="text" name="authors" value="{{ old('authors') }}" placeholder="Ej. John Doe, Jane Smith" />
                        <flux:text variant="subtle" size="sm" class="mt-1">Separa los autores por comas.</flux:text>
                        <flux:error name="authors" />
                    </flux:field>
                </div>

                <div>
                    <flux:field>
                        <flux:label>Revista (Journal)</flux:label>
                        <flux:input type="text" name="journal" value="{{ old('journal') }}" placeholder="Ej. Nature, Science..." />
                        <flux:error name="journal" />
                    </flux:field>
                </div>

                <div>
                    <flux:field>
                        <flux:label>Editorial (Publisher)</flux:label>
                        <flux:input type="text" name="publisher" value="{{ old('publisher') }}" placeholder="Ej. Elsevier, Springer..." />
                        <flux:error name="publisher" />
                    </flux:field>
                </div>

                <div>
                    <flux:field>
                        <flux:label>Año de publicación</flux:label>
                        <flux:input type="number" name="year" value="{{ old('year') }}" min="1900" max="{{ date('Y') + 1 }}" placeholder="Ej. 2023" />
                        <flux:error name="year" />
                    </flux:field>
                </div>

                <div>
                    <flux:field>
                        <flux:label>DOI</flux:label>
                        <flux:input type="text" name="doi" value="{{ old('doi') }}" placeholder="Ej. 10.1038/s41586-020-2649-2" />
                        <flux:text variant="subtle" size="sm" class="mt-1">El DOI debe ser único.</flux:text>
                        <flux:error name="doi" />
                    </flux:field>
                </div>

                <div class="md:col-span-2">
                    <flux:field>
                        <flux:label>Enlace externo (URL)</flux:label>
                        <flux:input type="url" name="url" value="{{ old('url') }}" placeholder="https://..." />
                        <flux:error name="url" />
                    </flux:field>
                </div>

            </div>

            <div class="mt-8 flex justify-end gap-3">
                <a href="{{ route('admin.publications.index') }}">
                    <flux:button variant="subtle" class="cursor-pointer">
                        Cancelar
                    </flux:button>
                </a>

                <flux:button variant="primary" type="submit" icon="check" class="cursor-pointer">
                    Guardar publicación
                </flux:button>
            </div>

        </form>
    </div>

</x-layouts.app>