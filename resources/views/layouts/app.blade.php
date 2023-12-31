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
        @vite(['resources/css/app.css','resources/js/app.js'])

        <!-- Glider -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.7.7/glider.min.css"
            integrity="sha512-YM6sLXVMZqkCspZoZeIPGXrhD9wxlxEF7MzniuvegURqrTGV2xTfqq1v9FJnczH+5OGFl5V78RgHZGaK34ylVg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- FlexSlider -->
        <link rel="stylesheet" href="{{ asset('vendor/FlexSlider/flexslider.css') }}">

        <!-- Styles -->
        @livewireStyles

        <!-- Glider -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.7.7/glider.min.js"
            integrity="sha512-tHimK/KZS+o34ZpPNOvb/bTHZb6ocWFXCtdGqAlWYUcz+BGHbNbHMKvEHUyFxgJhQcEO87yg5YqaJvyQgAEEtA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- Jquery -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        <!-- FlexSlider -->
        <script src="{{ asset('vendor/FlexSlider/jquery.flexslider-min.js') }}"></script>

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

        @stack('script')

    </body>
</html>
