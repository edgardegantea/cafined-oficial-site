@php
    $links = [
        [
            'name'    => 'Inicio',
            'icon'    => '',
            'url'     => route('inicio'),
            'current' => request()->routeIs('inicio'),
        ],
        [
            'name'    => 'Comunicación',
            'icon'    => '',
            'url'     => route('posts.index'),
            'current' => request()->routeIs('posts.*'),
        ],
        [
            'name'    => 'Foros',
            'icon'    => '',
            'url'     => route('foros'),
            'current' => request()->routeIs('foros'),
        ],
        [
            'name'    => 'Proyectos',
            'icon'    => '',
            'url'     => route('proyectos'),
            'current' => request()->routeIs('proyectos'),
        ],
        [
            'name'    => 'Producción científica',
            'icon'    => '',
            'url'     => route('produccioncientifica'),
            'current' => request()->routeIs('produccioncientifica'),
        ],
        [
            'name'    => 'Actividades',
            'icon'    => '',
            'url'     => route('events.index'),
            'current' => request()->routeIs('events'),
        ],
        [
            'name'    => 'Nuestro equipo',
            'icon'    => '',
            'url'     => route('equipo'),
            'current' => request()->routeIs('equipo'),
        ],
    ];
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.head')
    <style>
        .flux-navbar-item[aria-current="page"] {
            color: #0d9488;
            font-weight: 600;
        }
        .flux-navlist-item[aria-current="page"] {
            background-color: #f0fdfa;
            color: #0d9488;
        }
    </style>
</head>
<body class="min-h-screen bg-white text-stone-900 antialiased">

<flux:header sticky container class="bg-white/95 backdrop-blur-sm border-b border-stone-100">
    <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

    <flux:brand href="{{ route('inicio') }}" logo="{{ Storage::disk('public')->url('images/logos/Logo3.png') }}" name="CAFINED Lab" />

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
                                <span class="flex h-full w-full items-center justify-center rounded-lg bg-stone-100 text-stone-800">
                                    {{ auth()->user()->initials() }}
                                </span>
                            </span>
                            <div class="grid flex-1 text-start text-sm leading-tight">
                                <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                <span class="truncate text-xs text-stone-500">{{ auth()->user()->email }}</span>
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
            <flux:button class="cursor-pointer" icon="arrow-right-end-on-rectangle">
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

<flux:sidebar stashable sticky class="lg:hidden border-e border-stone-200 bg-stone-50">
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

<main>
    {{ $slot }}
</main>

@fluxScripts

<footer class="bg-stone-50 border-t border-stone-100 mt-16">
    <div class="max-w-screen-xl mx-auto px-4 py-12 lg:py-16">
        <div class="grid grid-cols-2 gap-10 md:grid-cols-4">

            <div class="col-span-2 md:col-span-1">
                <a href="{{ route('inicio') }}" class="flex items-center gap-2.5 mb-4">
                    <img src="{{ Storage::disk('public')->url('images/logos/Logo3.png') }}" class="h-8 w-auto" alt="CAFINED Lab" />
                    <span class="font-semibold text-stone-900 text-sm">CAFINED Lab</span>
                </a>
                <p class="text-sm text-stone-500 leading-relaxed max-w-xs">
                    Laboratorio de investigación en educación y tecnología del ITSM.
                </p>
            </div>

            <div>
                <h3 class="text-xs font-semibold text-stone-900 uppercase tracking-wider mb-4">Recursos</h3>
                <ul class="space-y-3 text-sm text-stone-500">
                    <li><a href="#" class="hover:text-stone-900 transition-colors">Talleres</a></li>
                    <li><a href="#" class="hover:text-stone-900 transition-colors">Cursos</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-xs font-semibold text-stone-900 uppercase tracking-wider mb-4">Síguenos</h3>
                <ul class="space-y-3 text-sm text-stone-500">
                    <li>
                        <a href="https://github.com/cafined" class="flex items-center gap-2 hover:text-stone-900 transition-colors">
                            <svg class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                            </svg>
                            GitHub
                        </a>
                    </li>
                    <li>
                        <a href="mailto:cafined@itsm.edu.mx" class="flex items-center gap-2 hover:text-stone-900 transition-colors">
                            <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                                <path d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                            </svg>
                            cafined@itsm.edu.mx
                        </a>
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="text-xs font-semibold text-stone-900 uppercase tracking-wider mb-4">Legal</h3>
                <ul class="space-y-3 text-sm text-stone-500">
                    <li><a href="#" class="hover:text-stone-900 transition-colors">Política de privacidad</a></li>
                    <li><a href="#" class="hover:text-stone-900 transition-colors">Términos &amp; Condiciones</a></li>
                </ul>
            </div>
        </div>

        <div class="mt-10 pt-8 border-t border-stone-200">
            <p class="text-xs text-stone-400 text-center sm:text-left">
                © {{ date('Y') }}
                <a href="https://cafined.org/" class="hover:text-stone-600 transition-colors">cafined lab™</a>.
                Creado por <a href="https://cafined.org/angelarmenta/" class="hover:text-stone-600 transition-colors">Roberto Ángel Meléndez-Armenta</a>.
                Desarrollado por <a href="https://cafined.org/edegantea/" class="hover:text-stone-600 transition-colors">edegantea</a>.
            </p>
        </div>
    </div>
</footer>

</body>
</html>
