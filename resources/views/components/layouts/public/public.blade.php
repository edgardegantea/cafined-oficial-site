@php
    $links = [
        [
            'class' => 'text-accent-foreground',
            'name'  => 'Inicio',
            'icon'  => '',
            'url'   => route('inicio'),
            'current'    => request()->routeIs('inicio'),
        ],


        [
            'name'  => 'Comunicación',
            'icon'  => '',
            'url'   => route('posts.index'),
            'current'    => request()->routeIs('posts.*'),
        ],




		[
            'name'  => 'Foros',
            'icon'  => '',
            'url'   => route('foros'),
            'current'    => request()->routeIs('foros'),
        ],

        [
            'name'  => 'Proyectos',
            'icon'  => '',
            'url'   => route('proyectos'),
            'current'    => request()->routeIs('proyectos'),
        ],

        [
            'name'  => 'Producción científica',
            'icon'  => '',
            'url'   => route('produccioncientifica'),
            'current'    => request()->routeIs('produccioncientifica'),
        ],



        [
            'name'  => 'Actividades',
            'icon'  => '',
            'url'   => route('events.index'),
            'current'    => request()->routeIs('events'),
        ],

        [
            'name'  => 'Nuestro equipo',
            'icon'  => '',
            'url'   => route('equipo'),
            'current'    => request()->routeIs('equipo'),
        ],
    ];
@endphp

    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    @include('partials.head')
    <style>
        /* Estilo para el menú de navegación principal (desktop) */
        .flux-navbar-item[aria-current="page"] {
            color: #007bff; /* Cambia este color al que desees */
            font-weight: bold; /* Opcional */
        }

        /* Estilo para el menú lateral (móvil) */
        .flux-navlist-item[aria-current="page"] {
            background-color: #f0f8ff; /* Cambia este color de fondo al que desees */
            color: #007bff; /* Cambia este color de texto al que desees */
            /* Otros estilos que desees aplicar */
        }
    </style>
</head>
<body class="min-h-screen bg-zinc-200 dark:bg-zinc-200 dark:text-black">
<flux:header container class="bg-white border-gray-200 dark:bg-gray-900">
    <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

    <flux:brand href="#" logo="{{ Storage::disk('public')->url('images/logos/Logo3.png') }}" name="CAFINED Lab" />

    <flux:navbar class="-mb-px max-lg:hidden">
        @foreach($links as $link)
            <flux:navlist.item
                :icon="$link['icon']"
                :href="$link['url']"
                :current="$link['current']"
                wire:navigate>
                {{ $link['name'] }}
            </flux:navlist.item>
        @endforeach
    </flux:navbar>

    <flux:spacer />

    @auth()
        <flux:dropdown position="top" align="end">
            <flux:profile
                class="cursor-pointer"
                :initials="auth()->user()->initials()"
            />
            <flux:menu>
                <flux:menu.radio.group>
                    <div class="p-0 text-sm font-normal">
                        <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                            <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                <span
                                    class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white"
                                >
                                    {{ auth()->user()->initials() }}
                                </span>
                            </span>
                            <div class="grid flex-1 text-start text-sm leading-tight">
                                <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                            </div>
                        </div>
                    </div>
                </flux:menu.radio.group>
                <flux:menu.separator />
                <flux:menu.radio.group>
                    <flux:menu.item :href="route('settings.profile')" icon="cog" wire:navigate>{{ __('Settings') }}</flux:menu.item>
                </flux:menu.radio.group>
                <flux:menu.separator />
                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                        {{ __('Log Out') }}
                    </flux:menu.item>
                </form>
            </flux:menu>
        </flux:dropdown>
    @else
        <flux:dropdown position="top" align="end">
            <flux:button
                class="cursor-pointer"
                icon="arrow-right-end-on-rectangle"
            >
                Ingresar
            </flux:button>
            <flux:menu>
                <flux:menu.item :href="route('login')" icon="arrow-right-end-on-rectangle" class="w-full">
                    {{ __('Iniciar sesión') }}
                </flux:menu.item>
                <flux:menu.item :href="route('login')" icon="user-plus" class="w-full">
                    {{ __('Registrarme') }}
                </flux:menu.item>
            </flux:menu>
        </flux:dropdown>
    @endauth
</flux:header>

<flux:sidebar stashable sticky class="lg:hidden border-e border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
    <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

    <a href="{{ route('dashboard') }}" class="ms-1 flex items-center space-x-2 rtl:space-x-reverse" wire:navigate>
        <x-app-logo />
    </a>

    <flux:navlist variant="outline">
        <flux:navlist.group :heading="__('Platform')">
            <flux:navlist.item icon="layout-grid" :href="route('dashboard')" :current="request()->routeIs('dashboard')" wire:navigate>
                {{ __('Dashboard') }}
            </flux:navlist.item>
            @foreach($links as $link)
                <flux:navlist.item
                    :icon="$link['icon']"
                    :href="$link['url']"
                    :current="$link['current']"
                    wire:navigate>
                    {{ $link['name'] }}
                </flux:navlist.item>
            @endforeach
        </flux:navlist.group>
    </flux:navlist>

    <flux:spacer />
</flux:sidebar>

{{ $slot }}

@fluxScripts

<footer class="bg-white dark:bg-gray-900">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="https://v2.cafined.org" class="flex items-center">
                    <img src="{{ Storage::disk('public')->url('images/logos/Logo3.png') }}" class="h-8 me-3" alt="FlowBite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">CAFINED Lab</span>
                </a>
				
				<br>
				<ul class="text-gray-500 dark:text-gray-400 font-medium">
					<li class="mb-4">
						
					</li>
				</ul>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Recursos</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Talleres</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Cursos</a>
                        </li>
                    </ul>
                </div>
                
				<div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Síguenos</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <li class="mb-4">
  <a href="https://github.com/cafined" class="flex items-center hover:underline">
    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
      <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
    </svg>
    <span>Github</span>
  </a>
</li>
                        </li>
						
						<li>
							<a href="mailto:cafined@itsm.edu.mx" class="inline-flex items-center gap-2 text-blue-600 dark:text-blue-400 hover:underline hover:text-blue-800 dark:hover:text-blue-300 transition-colors font-medium">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
        <path d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
        <path d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
    </svg>
    cafined@itsm.edu.mx
</a>
						</li>
						
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Política de privacidad</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Términos &amp; Condiciones</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© <?php echo date('Y'); ?>. <a href="https://cafined.org/" class="hover:underline">cafined lab™</a>. All Rights Reserved. Created by <a href="https://cafined.org/angelarmenta/" class="hover:underline">Roberto Ángel Meléndez-Armenta</a>. Developed by <a href="https://cafined.org/edegantea/" class="hover:underline">edegantea</a>.
          </span>
            <div class="flex mt-4 sm:justify-center sm:mt-0">
                {{-- ... (Iconos de redes sociales) ... --}}
            </div>
        </div>
    </div>
</footer>

</body>
</html>
