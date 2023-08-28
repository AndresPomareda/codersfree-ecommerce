<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css',
                'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">

            @livewire('navigation')

            <!-- Page Heading -->
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts

        <script>
            function dropdown() {
                return {
                    open: false,
                    show() {
                        if(this.open) {
                            // Se cierra el Menu
                            this.open = false;
                            // Habilitamos el Scrool
                            document.getElementsByTagName('html')[0].style.overflow = 'auto'
                        }else{
                            // Se Abre el Menu
                            this.open = true;
                            // Deshabilitamos el Scrool
                            document.getElementsByTagName('html')[0].style.overflow = 'hidden'
                        }
                    },
                    close() {
                        this.open = false;
                        // Habilitamos el Scrool
                        document.getElementsByTagName('html')[0].style.overflow = 'auto'
                    }
                }
            }
        </script>
    </body>
</html>
