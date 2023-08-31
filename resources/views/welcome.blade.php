<x-app-layout>
    <div class="container py-8">
        <section class="mb-6">
            <div class="flex items-center mb-2">
                <h1 class="text-lg uppercase font-semibold text-gray-700">
                    {{ $categories->first()->name }}
                </h1>
                <a href="" class="text-orange-500 hover:text-orange-400 hover:underline ml-2 font-semibold">
                        Ver más</a>
            </div>
            @livewire('category-products',['category' => $categories->first()])
        </section>
    </div>

    <script>
        new Glider(document.querySelector('.glider'), {
            slidesToShow: 5.5,
            slidesToScroll: 5,
            draggable: true,
            dots: '.dots',
            arrows: {
                prev: '.glider-prev',
                next: '.glider-next'
            }
        });
    </script>

</x-app-layout>
