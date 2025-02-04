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

        /* Style untuk mengunci scroll body */
        body.modal-open {
            overflow: hidden;
        }

        /* Style untuk modal yang bisa di-scroll jika kontennya panjang */
        .modal-content {
            max-height: 90vh;
            overflow-y: auto;
        }

        /* Hero Section */
        .slide {
            background-image: url('{{ asset('image/slider-1.jpg') }}');
            background-size: cover;
            background-position: center;
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

    <section class="hero-section bg-green-500/15" id="home">
        <div class="relative w-full h-[100vh] overflow-hidden">

            <!-- Logo and Text Container (Fixed Position) -->
            <div class="absolute w-full h-full flex flex-col items-center justify-center z-10 p-2 lg:p-0">
                <div class="container mx-auto">
                    <div class="mt-0">

                        <!-- Logo -->
                        <img src="{{ asset('image/Adiwiyata.png') }}" alt=""
                            class="sm:w-[90%] md:w-[80%] lg:w-[55%] justify-self-center" />

                        <!-- Text -->
                        <div class="text-center text-white mt-5">
                            <h1 class="text-base sm:text-2xl md:text-4xl font-bold">
                                KOLEKSI TANAMAN - ADIWIYATA
                            </h1>
                            <h1 class="text-base sm:text-2xl md:text-4xl font-bold">
                                SMK TARUNA HARAPAN 1 CIPATAT
                            </h1>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Carousel Container -->
            <div class="carousel flex h-full inset-0 mix-blend-overlay">
                <!-- Duplicate first slide at the end -->
                <div class="slide min-w-full h-full"></div>
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

                        <div
                            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-3 items-center rounded-xl">

                            <div class="bg-white shadow-md rounded-xl">
                                <img src="{{ asset('image/koleksi-tanaman/stevia.jpg') }}" alt=""
                                    class="object-cover rounded-xl">
                                <div class="text-center p-5">
                                    <h1 class="font-bold">Stevia</h1>
                                    <h2 class="font-semibold">(Stevia Rebaudiana)</h2>
                                    <h3 class=""></h3>
                                    <div class="text-end mt-14">
                                        <button class="bg-primary hover:bg-green-900 text-white p-2 rounded"
                                            onclick="openModal('produk-1')">
                                            View More
                                        </button>
                                    </div>
                                </div>
                            </div>

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
                    <div id="modal"
                        class="fixed inset-0 bg-gray-500 bg-opacity-75 hidden flex items-center justify-center z-50">
                        <div class="bg-white p-6 rounded-lg shadow-xl max-w-3xl w-full mx-4 modal-content">
                            <div id="modal-content" class="grid grid-cols-1 lg:grid-cols-2 gap-6 items-center">
                                <!-- Konten akan diisi melalui JavaScript -->
                            </div>
                            <div class="flex justify-self-end">
                                <button onclick="closeModal()"
                                    class="bg-primary hover:bg-green-900 text-white p-2 rounded">
                                    Tutup
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        @include('layouts.partials.footer')
    </div>

    <script>
        // Data modal
        const modalData = {
            'produk-1': {
                image: `
                   <img src="{{ asset('image/koleksi-tanaman/stevia.jpg') }}">
                `,
                title: 'Cocor Bebek',
                description: `
                    <div class="space-y-4">
                        <p class="">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam, laboriosam excepturi amet minus, laborum velit at atque beatae nisi hic dignissimos earum deserunt quibusdam aperiam asperiores? Cum odit nisi inventore.
                        </p>
                    </div>
                `
            },
        };

        const modal = document.getElementById('modal');
        const modalContent = document.getElementById('modal-content');

        function openModal(modalId) {
            const data = modalData[modalId];

            // Set konten
            modalContent.innerHTML = `
                ${data.image}
                <div class="flex-grow">
                    <h2 class="text-2xl font-bold mb-1">${data.title}</h2>
                    ${data.description}
                </div>
            `;

            // Tampilkan modal dan kunci scroll
            modal.classList.remove('hidden');
            document.body.classList.add('modal-open');
        }

        function closeModal() {
            modal.classList.add('hidden');
            document.body.classList.remove('modal-open');
        }

        // Menutup modal ketika mengklik area di luar modal
        window.onclick = function(event) {
            if (event.target === modal) {
                closeModal();
            }
        }
    </script>
</body>

</html>
