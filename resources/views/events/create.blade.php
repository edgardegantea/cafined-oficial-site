<x-layouts.app> {{-- O tu layout principal --}}
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8 text-gray-900">
                    <h2 class="text-2xl font-bold mb-6 text-slate-800 border-b pb-2">Crear Nuevo Evento</h2>

                    <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf

                        {{-- Título --}}
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700">Título del Evento</label>
                            <input type="text" name="title" id="title" value="{{ old('title') }}"
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                            @error('title') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>

                        {{-- Grid: Tipo y Capacidad --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="type" class="block text-sm font-medium text-gray-700">Tipo de Evento</label>
                                <select name="type" id="type" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    <option value="workshop" {{ old('type') == 'workshop' ? 'selected' : '' }}>Taller (Workshop)</option>
                                    <option value="course" {{ old('type') == 'course' ? 'selected' : '' }}>Curso</option>
                                    <option value="conference" {{ old('type') == 'conference' ? 'selected' : '' }}>Conferencia</option>
                                    <option value="other" {{ old('type') == 'other' ? 'selected' : '' }}>Otro</option>
                                </select>
                                @error('type') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label for="capacity" class="block text-sm font-medium text-gray-700">Capacidad Máxima</label>
                                <input type="number" name="capacity" id="capacity" value="{{ old('capacity') }}" min="1"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                @error('capacity') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        {{-- Grid: Fechas --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="start_time" class="block text-sm font-medium text-gray-700">Fecha de Inicio</label>
                                <input type="datetime-local" name="start_time" id="start_time" value="{{ old('start_time') }}"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                                @error('start_time') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label for="end_time" class="block text-sm font-medium text-gray-700">Fecha de Fin</label>
                                <input type="datetime-local" name="end_time" id="end_time" value="{{ old('end_time') }}"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                                @error('end_time') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        {{-- Descripción --}}
                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700">Descripción General</label>
                            <textarea name="description" id="description" rows="4"
                                      class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>{{ old('description') }}</textarea>
                            @error('description') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>

                        {{-- Requisitos (NUEVO CAMPO) --}}
                        <div>
                            <label for="requirements" class="block text-sm font-medium text-gray-700">Requisitos</label>
                            <p class="text-xs text-gray-500 mb-2">Escribe cada requisito en una nueva línea.</p>
                            <textarea name="requirements" id="requirements" rows="3" placeholder="- Laptop&#10;- Conocimientos básicos..."
                                      class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">{{ old('requirements') }}</textarea>
                            @error('requirements') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>

                        {{-- Imagen (NUEVO CAMPO) --}}
                        <div>
                            <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Imagen de Portada</label>
                            <input type="file" name="image" id="image" accept="image/*"
                                   class="block w-full text-sm text-slate-500
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-full file:border-0
                                file:text-sm file:font-semibold
                                file:bg-blue-50 file:text-blue-700
                                hover:file:bg-blue-100 transition-all cursor-pointer">
                            <p class="text-xs text-gray-500 mt-1">Formatos: JPG, PNG, WEBP. Máximo 2MB.</p>
                            @error('image') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>

                        {{-- Botones --}}
                        <div class="flex items-center justify-end gap-4 mt-8 pt-4 border-t">
                            <a href="{{ route('events.index') }}" class="text-gray-600 hover:text-gray-900 text-sm font-medium">Cancelar</a>
                            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg shadow-md transition-colors">
                                Guardar Evento
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>