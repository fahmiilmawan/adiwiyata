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

    <!-- CSS Internal -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        :root {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        /* Hero Section */
        .bg-image {
            background-image: url('{{ asset('image/slider-1.jpg') }}');
            background-size: cover;
            background-position: center;
            height: 45vh;
        }

        /* Scrolling */
        #tanaman-hias,
        #tanaman-obat-keluarga,
        #tanaman-konsumsi {
            scroll-margin-top: 70px;
        }

        /* Scrolling Bar */
        ::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body>

    <!-- Navigasi Bar -->
    @include('layouts.partials.navbar')

    <section class="hero-section">
        <div class="p-2 lg:p-4">
            <div class="container mx-auto">
                <div class="p-3 lg:p-5">

                </div>
            </div>
        </div>
    </section>

    <div class="bg-quaternary">
        <h1 class="text-xl lg:text-3xl text-center pt-5">Koleksi Tanaman</h1>
        {{-- Tanaman  --}}
        <section class="">
            <div class="p-2 lg:p-4">
                <div class="container mx-auto">
                    <div class="p-3 lg:p-5">

                        @foreach ($tanaman as $data)
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3 items-center rounded-xl">
                            <div class="grid grid-cols-1 md:grid-cols-2 bg-primary items-center rounded-xl">
                                <img src="{{ asset('image/pokja-1.jpg') }}" alt=""
                                    class="w-full h-full rounded-xl">
                                <div class="text-center p-2">
                                    <h1 class="text-xl lg:text-2xl">{{ $data->nama_tanaman }}</h1>
                                    <h2 class="text-base lg:text-xl">({{ $data->nama_latin }})</h2>
                                    <h3 class="text-sm lg:text-lg">{{ $data->kategori_tanaman }}</h3>
                                    <button
                                        class="bg-secondary p-2 mt-2 hover:bg-yellow-500 transition-all ease-in-out duration-500 rounded">
                                        <a href="{{ route('koleksi-detail',$data->id) }}" class="text-sm">Baca Selengkapnya</a>
                                    </button>
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
</body>

</html>
