<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koleksi Tanaman | Adiwiyata</title>
    <link rel="shortcut icon" href="{{ asset('image/logo-adiwiyata.png') }}" type="image/x-icon">

    <!-- Tailwind CSS -->
    @Vite('resources/css/app.css')

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/ecde4d1cd4.js" crossorigin="anonymous"></script>

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- CSS Internal -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        :root {
            scroll-behavior: smooth;
        }

        * {
            font-family: 'Poppins';
        }

        html,
        body {
            overflow-x: hidden;
            max-width: 100%;
        }

        /* Scroll Behavior */

        /* Scrolling Bar */
        ::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body>

    <!-- Navigasi Bar -->
    @include('layouts.partials.navbar')

    <div class="bg-quaternary">
        <div class="relative top-16 bg-primary container mx-auto px-2 lg:px-4">
            <div class="px-3 lg:px-5">
                <div class="flex text-white p-2 gap-5 items-center">
                    <a href="{{ route('index') }}" class="fa-solid fa-arrow-left"></a>
                    <h6 class="text-xl">Koleksi Tanaman Adiwiyata</h6>
                </div>
            </div>
        </div>

        {{-- Tanaman  --}}
        <section class="mt-20">
            <div class="p-2 lg:p-4">
                <div class="container mx-auto">
                    <div class="p-3 lg:p-5">

                        <div
                            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-3 items-center rounded-xl">

                            @foreach ($tanaman as $data)
                                <div class="bg-white shadow-md rounded-xl">
                                    <img src="{{ asset('image/koleksi-tanaman/stevia.jpg') }}" alt=""
                                        class="object-cover h-full w-full rounded-xl">
                                    <div class="text-center p-5">
                                        <h1 class="font-bold">{{ $data->nama_tanaman }}</h1>
                                        <h2 class="font-semibold">({{ $data->nama_latin }})</h2>
                                        <h3 class="">{{ $data->kategori_tanaman }}</h3>
                                        <div class="text-end mt-8">
                                            <a href="{{ route('koleksi-detail', $data->slug) }}"
                                                class="border border-primary hover:bg-primary text-primary hover:text-white text-sm p-2 transition-all ease-in-out duration-500 rounded-full">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
        </section>

        <!-- Footer -->
        @include('layouts.partials.footer')
    </div>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
</body>

</html>
