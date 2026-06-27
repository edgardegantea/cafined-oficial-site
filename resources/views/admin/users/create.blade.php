<x-layouts.app>
    <flux:breadcrumbs>
        <flux:breadcrumbs.item :href="route('dashboard')">Dashboard</flux:breadcrumbs.item>
        <flux:breadcrumbs.item :href="route('admin.users.index')">Usuarios</flux:breadcrumbs.item>
        <flux:breadcrumbs.item>Nuevo Usuario</flux:breadcrumbs.item>
    </flux:breadcrumbs>

    <div class="card mt-5">
        <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-5 relative">
                <img id="imgPreview" class="w-full aspect-video object-cover object-center rounded-lg border"
                     src="https://static.vecteezy.com/system/resources/previews/004/141/669/non_2x/no-photo-or-blank-image-icon-loading-images-or-missing-image-mark-image-not-available-or-image-coming-soon-sign-simple-nature-silhouette-in-frame-isolated-illustration-vector.jpg">
                <div class="absolute top-8 right-8">
                    <label class="bg-white dark:bg-zinc-800 px-4 py-2 border-2 rounded-lg cursor-pointer shadow-sm">
                        Subir imagen
                        <input type="file" class="hidden" name="image" accept="image/*" onchange="previewImage(event, '#imgPreview')">
                    </label>
                </div>
            </div>

            <flux:input class="mb-5" name="name" value="{{ old('name') }}" label="Nombre completo" required />
            <flux:input class="mb-5" name="email" type="email" value="{{ old('email') }}" label="Correo electrónico" required />

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
                <flux:input name="password" type="password" label="Contraseña" required />
                <flux:input name="password_confirmation" type="password" label="Confirmar Contraseña" required />
            </div>

            <flux:textarea class="mb-5" name="bio" label="Bio">{{ old('bio') }}</flux:textarea>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
                <flux:select label="Rol dentro del sistema" name="role">
                    <flux:select.option value="usuario">Usuario</flux:select.option>
                    <flux:select.option value="admin">Admin</flux:select.option>
                    <flux:select.option value="estudiante">Estudiante</flux:select.option>
                    <flux:select.option value="docente">Docente</flux:select.option>
                </flux:select>

                <flux:select label="Función dentro de Cafined" name="type">
                    <flux:select.option value="no">Ninguna</flux:select.option>
                    <flux:select.option value="lider">Líder</flux:select.option>
                    <flux:select.option value="colaborador">Colaborador</flux:select.option>
                    <flux:select.option value="tesista">Tesista</flux:select.option>
                    <flux:select.option value="serviciosocial">Servicio Social</flux:select.option>
                </flux:select>
            </div>

            <div class="flex space-x-3 mt-5 p-4 bg-zinc-50 dark:bg-zinc-900 rounded-lg">
                <p class="text-sm font-medium">Estado inicial:</p>
                <label class="flex items-center cursor-pointer">
                    <input type="radio" name="active" value="1" checked>
                    <span class="ml-2 text-sm">Activo</span>
                </label>
                <label class="flex items-center cursor-pointer ml-4">
                    <input type="radio" name="active" value="0">
                    <span class="ml-2 text-sm">Inactivo</span>
                </label>
            </div>

            <div class="flex justify-end mt-8 gap-3">
                <flux:button :href="route('admin.users.index')" variant="ghost">Cancelar</flux:button>
                <flux:button variant="primary" type="submit">Guardar Usuario</flux:button>
            </div>
        </form>
    </div>

    @push('js')
        <script>
            function previewImage(event, selector) {
                const [file] = event.target.files;
                if (file) {
                    document.querySelector(selector).src = URL.createObjectURL(file);
                }
            }
        </script>
    @endpush
</x-layouts.app>