<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adiwiyata Test</title>
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

        /* Hero Section */
        .carousel {
            transform: translateX(0);
            transition: transform 0.5s ease-in-out;
        }

        .slide {
            background-size: cover;
            background-position: center;
        }

        .slide:nth-child(1) {
            background-image: url("{{ asset('image/slider-1.jpg') }}");
        }

        .slide:nth-child(2) {
            background-image: url("{{ asset('image/slider-2.jpg') }}");
        }

        .slide:nth-child(3) {
            background-image: url("{{ asset('image/slider-3.jpg') }}");
        }

        .slide:nth-child(4) {
            background-image: url("{{ asset('image/slider-4.jpg') }}");
        }

        .slide:nth-child(5) {
            background-image: url("{{ asset('image/slider-5.jpg') }}");
        }

        .slide:nth-child(6) {
            background-image: url("{{ asset('image/slider-1.jpg') }}");
        }

        /* Kader */
        .kader {
            background-image: url("{{ asset('image/bg-rounded.png') }}");
        }

        /* Scroll Behavior */
        .hero-section {
            scroll-margin-top: 100px;
        }

        .about {
            scroll-margin-top: 60px;
        }

        .kelompok-kerja {
            scroll-margin-top: 90px;
        }

        .program-kerja {
            scroll-margin-top: 70px;
        }

        /* Scrolling Bar */
        ::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body class="">

    <!-- Navbar Start -->
    @include('layouts.partials.navbar')
    <!-- Navbar End -->

    <!-- Hero Start-->
    <section class="hero-section bg-green-500/15" id="home">
        <div class="relative w-full h-[100vh] bg-black/30 overflow-hidden">

            <!-- Logo and Text Container (Fixed Position) -->
            <div class="absolute w-full h-full flex flex-col items-center justify-center z-10 p-2 lg:p-0">
                <div class="container mx-auto">

                    <!-- Logo -->
                    <img src="{{ asset('image/Adiwiyata.png') }}" alt=""
                        class="sm:w-[90%] md:w-[80%] lg:w-[65%] justify-self-center object-cover" />

                    <!-- Text -->
                    <div class="text-center text-white mt-5">
                        <h1 class="lg:inline sm:text-xl md:text-3xl  lg:text-4xl font-semibold lg:font-bold">
                            ADIWIYATA
                        </h1>
                        <h1 class="lg:inline text-base sm:text-2xl md:text-4xl font-bold">
                            SMK TARUNA HARAPAN 1 CIPATAT
                        </h1>
                        <h1 class="sm:text-xl md:text-3xl font-semibold">
                            BERAKHLAK | BERBUDAYA | UNGGUL
                        </h1>
                    </div>
                </div>
            </div>

            <!-- Carousel Container -->
            <div class="carousel flex h-full inset-0 mix-blend-overlay">

                <!-- Duplicate first slide at the end -->
                <div class="slide min-w-full h-full"></div>
                <div class="slide min-w-full h-full"></div>
                <div class="slide min-w-full h-full"></div>
                <div class="slide min-w-full h-full"></div>
                <div class="slide min-w-full h-full"></div>

                <!-- Duplicate first slide -->
                <div class="slide min-w-full h-full"></div>
            </div>
        </div>
    </section>

    <script>
        const carousel = document.querySelector(".carousel");
        const slides = document.querySelectorAll(".slide");
        let currentIndex = 0;

        function moveSlide() {
            currentIndex++;
            carousel.style.transform = `translateX(-${currentIndex * 100}%)`;

            // When we reach the last slide (duplicate)
            if (currentIndex === slides.length - 1) {

                // Wait for transition zto complete
                setTimeout(() => {

                    // Remove transition
                    carousel.style.transition = "none";

                    // Reset to first slide
                    currentIndex = 0;
                    carousel.style.transform = `translateX(0)`;

                    // Re-enable transition after a brief moment
                    setTimeout(() => {
                        carousel.style.transition = "transform 0.5s ease-in-out";
                    }, 10);
                }, 500);
            }
        }

        // Auto slide every 3 seconds
        setInterval(moveSlide, 3000);
    </script>
    <!-- Hero End -->

    <div class="bg-quaternary">

        <!-- About Start -->
        <section class="about p-2 lg:p-4" id="about">
            <div class="container mx-auto p-3 lg:p-5">
                <div class="grid lg:grid-cols-2 rounded">

                    <div class="flex justify-center lg:justify-start" data-aos="fade-right">
                        <img src="{{ asset('image/logo-adiwiyata.png') }}" alt="" class="w-96 object-cover" />
                    </div>

                    <div class="text-center">
                        <h1 class="text-xl lg:text-3xl text-primary font-semibold" data-aos="fade-up">
                            TENTANG ADIWIYATA
                        </h1>
                        <div class="bg-secondary mx-auto w-1/5 h-1"></div>
                        <div class="mt-3" data-aos="fade-up-left">
                            <p class="sm:text-sm lg:text-base text-justify">
                                Program Adiwiyata adalah sebuah inisiatif yang diluncurkan
                                oleh Kementerian Lingkungan Hidup Indonesia pada tahun 2006
                                untuk mendorong kesadaran lingkungan di sekolah-sekolah.
                                Program ini bertujuan untuk membentuk sekolah yang peduli dan
                                berbudaya lingkungan melalui pendidikan lingkungan hidup yang
                                terpadu dalam kegiatan belajar-mengajar. Sekolah yang
                                mengikuti program Adiwiyata diajak untuk menerapkan
                                prinsip-prinsip pengelolaan lingkungan, seperti pengurangan
                                limbah, konservasi sumber daya, serta penanaman dan
                                pemeliharaan taman sekolah. Selain itu, program ini mendorong
                                partisipasi aktif dari seluruh warga sekolah, termasuk guru,
                                siswa, dan staf, untuk menciptakan lingkungan yang lebih
                                bersih, sehat, dan hijau.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About End -->

        <!-- Kader Start -->
        <section class="kader text-white text-center p-2 lg:p-4 mt-10 bg-top" id="kelompok-kerja">
            <div class="container mx-auto p-3 lg:p-5">
                <div class="mt-10">
                    <h1 class="text-lg md:text-2xl lg:text-3xl font-semibold" data-aos="fade-up-left">
                        KADER ADIWIYATA
                    </h1>
                    <h1 class="md:text-xl lg:text-2xl font-semibold text-secondary" data-aos="fade-up-right">
                        SMK TARUNA HARAPAN 1 CIPATAT
                    </h1>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 justify-items-center mt-5 gap-5">

                    {{-- Kader 1 --}}
                    <div class="bg-quaternary p-3 rounded" data-aos="fade-right">
                        <img src="{{ asset('image/pokja-1.jpg') }}" alt=""
                            class="aspect-video rounded h-48 w-full object-cover">
                        <div class="mt-1 text-left">
                            <h6 class="text-sm text-gray-500">Kader 1</h6>
                            <h1 class="md:text-lg lg:text-xl text-gray-800 font-semibold">
                                Tanaman & Pembibitan
                            </h1>
                            <div class="h-1 bg-primary w-full"></div>
                            <p class="h-28 mt-2 text-gray-800 text-justify">
                                Kader di bidang Tanaman dan Pembibitan dalam program Adiwiyata
                                memiliki fokus penting dalam mengelola tanaman konsumsi,
                                tanaman obat, dan tanaman yang dibudidayakan secara
                                aquaphonik.
                            </p>
                        </div>
                        <a href="{{ route('kader') }}#tanaman-dan-pembibitan"
                            class="bg-primary hover:bg-green-900 transition-all ease-in-out duration-500 p-2 mt-10 inline-block justify-center rounded">
                            BACA SELENGKAPNYA
                        </a>
                    </div>

                    {{-- Kader 2 --}}
                    <div class="bg-quaternary p-3 rounded" data-aos="fade-up">
                        <img src="{{ asset('image/pokja-2.jpg') }}" alt=""
                            class="aspect-video rounded h-48 w-full object-cover">
                        <div class="mt-1 text-left">
                            <h6 class="text-sm text-gray-500">Kader 2</h6>
                            <h1 class="md:text-lg lg:text-xl text-gray-800 font-semibold">
                                Kompos & Bank Sampah
                            </h1>
                            <div class="h-1 bg-primary w-full"></div>
                            <p class="h-28 mt-2 text-gray-800 text-justify">
                                Kader di bidang Kompos dan Bank Sampah dalam program Adiwiyata
                                bertugas mengelola sampah di lingkungan sekolah dengan prinsip
                                pemilahan dan pengolahan yang berkelanjutan.
                            </p>
                        </div>
                        <a href="{{ route('kader') }}#kompos-dan-bank-sampah"
                            class="bg-primary hover:bg-green-900 transition-all ease-in-out duration-500 p-2 mt-10 inline-block justify-center rounded">
                            BACA SELENGKAPNYA
                        </a>
                    </div>

                    {{-- Kader 3 --}}
                    <div class="bg-quaternary p-3 rounded" data-aos="fade-left">
                        <img src="{{ asset('image/pokja-3.jpg') }}" alt=""
                            class="aspect-video rounded h-48 w-full object-cover">
                        <div class="mt-1 text-left">
                            <h6 class="text-sm text-gray-500">Kader 3</h6>
                            <h1 class="md:text-lg lg:text-xl text-gray-800 font-semibold">
                                Sanitasi & Kamar Mandi
                            </h1>
                            <div class="h-1 bg-primary w-full"></div>
                            <p class="h-28 mt-2 text-gray-800 text-justify">
                                Kader di bidang Sanitasi dan Kamar mandi dalam program
                                Adiwiyata bertanggung jawab memastikan kebersihan, kerapian,
                                dan keteraturan fasilitas sanitasi di sekolah.
                            </p>
                        </div>
                        <a href="{{ route('kader') }}#sanitasi-dan-kamar-mandi"
                            class="bg-primary hover:bg-green-900 transition-all ease-in-out duration-500 p-2 mt-10 inline-block justify-center rounded">
                            BACA SELENGKAPNYA
                        </a>
                    </div>

                    {{-- Kader 4 --}}
                    <div class="bg-quaternary p-3 rounded" data-aos="fade-right">
                        <img src="{{ asset('image/pokja-4.jpg') }}" alt=""
                            class="aspect-video rounded h-48 w-full object-cover">
                        <div class="mt-1 text-left">
                            <h6 class="text-sm text-gray-500">Kader 4</h6>
                            <h1 class="md:text-lg lg:text-xl text-gray-800 font-semibold">
                                Taman & Hutan Sekolah
                            </h1>
                            <div class="h-1 bg-primary w-full"></div>
                            <p class="h-28 mt-2 text-gray-800 text-justify">
                                Kader di bidang Taman dan Hutan Sekolah dalam program
                                Adiwiyata memiliki peran penting dalam menjaga keindahan,
                                kelestarian, dan fungsi edukasi dari taman sekolah.
                            </p>
                        </div>
                        <a href="{{ route('kader') }}#taman-dan-hutan-sekolah"
                            class="bg-primary hover:bg-green-900 transition-all ease-in-out duration-500 p-2 mt-10 inline-block justify-center rounded">
                            BACA SELENGKAPNYA
                        </a>
                    </div>

                    {{-- Kader 5 --}}
                    <div class="bg-quaternary p-3 rounded" data-aos="fade-up">
                        <img src="{{ asset('image/pokja-5.jpg') }}" alt=""
                            class="aspect-video rounded h-48 w-full object-cover">
                        <div class="mt-1 text-left">
                            <h6 class="text-sm text-gray-500">Kader 5</h6>
                            <h1 class="md:text-lg lg:text-xl text-gray-800 font-semibold">
                                Kreasi Daur Ulang Sampah
                            </h1>
                            <div class="h-1 bg-primary w-full"></div>
                            <p class="h-28 mt-2 text-gray-800 text-justify">
                                Kader di bidang Kreasi Daur Ulang Sampah dalam program
                                Adiwiyata bertanggung jawab mengolah sampah menjadi barang
                                yang bermanfaat dan memiliki nilai estetika.
                            </p>
                        </div>
                        <a href="{{ route('kader') }}#kreasi-daur-ulang-sampah"
                            class="bg-primary hover:bg-green-900 transition-all ease-in-out duration-500 p-2 mt-10 inline-block justify-center rounded">
                            BACA SELENGKAPNYA
                        </a>
                    </div>

                </div>
            </div>
        </section>
        <!-- Kader End -->

        <!-- Program Kerja Start -->
        <section class="program-kerja p-2 lg:p-4" id="program-kerja">
            <div class="container mx-auto p-3 lg:p-5">
                <div class="text-center lg:text-left">
                    <h1 class="text-xl md:text-2xl lg:text-3xl font-semibold text-primary" data-aos="fade-up-right">
                        PROGRAM KERJA
                    </h1>
                    <div class="">
                        <div class="h-1 bg-secondary mx-auto lg:mx-0 w-1/5"></div>
                    </div>
                </div>
                <div class="snap-mandatory overflow-x-scroll flex mt-10 rounded" data-aos="fade-left">
                    <div class="shrink-0 flex gap-5">

                        {{-- Program Kerja => Pengolahan Sampah Organik --}}
                        <div class="flex bg-primary p-5 rounded w-[27rem]">
                            <div class="justify-items-center">
                                <div class="flex gap-2 items-center">
                                    <i class="fa fa-leaf text-4xl text-secondary"></i>
                                    <h1 class="lg:text-xl font-semibold text-white">
                                        Pengolahan Sampah Organik
                                    </h1>
                                </div>
                                <div class="h-1 mx-auto bg-secondary w-full mt-2"></div>
                                <p class="h-32 text-white text-justify mt-2">
                                    Program ini bertujuan untuk mengelola sampah organik agar dapat dimanfaatkan
                                    kembali dan mengurangi limbah yang terbuang. Kegiatan meliputi: Kompos, Budidaya
                                    Maggot, Eco Enzym, Mikroorganisme Lokal, Air Lindi, Eco Derma, dan Dekomposter.
                                </p>
                                <a href="{{ route('program-kerja') }}#pengolahan-sampah-organik"
                                    class="bg-secondary hover:bg-[#95822c] text-white transition-all ease-in-out duration-500 p-2 inline-block mt-10 rounded">
                                    BACA SELENGKAPNYA
                                </a>
                            </div>
                        </div>

                        {{-- Program Kerja => Pengolahan Sampah Anorganik --}}
                        <div class="flex bg-primary p-5 rounded w-[27rem]">
                            <div class="justify-items-center">
                                <div class="flex gap-2 items-center">
                                    <i class="fa fa-recycle text-4xl text-secondary"></i>
                                    <h1 class="lg:text-xl font-semibold text-white">
                                        Pengolahan Sampah Anorganik
                                    </h1>
                                </div>
                                <div class="h-1 mx-auto bg-secondary w-full mt-2"></div>
                                <p class="h-32 text-white text-justify mt-2">
                                    Sekolah menerapkan sistem Bank Sampah yang mengajak siswa dan guru memilah
                                    sampah anorganik seperti plastik, kertas, dan logam untuk didaur ulang atau
                                    dijual. Program ini menanamkan kebiasaan memilah sampah sejak dini.
                                </p>
                                <a href="{{ route('program-kerja') }}#pengolahan-sampah-anorganik"
                                    class="bg-secondary hover:bg-[#95822c] text-white transition-all ease-in-out duration-500 p-2 inline-block mt-10 rounded">
                                    BACA SELENGKAPNYA
                                </a>
                            </div>
                        </div>

                        {{-- Program Kerja => Konservasi Air --}}
                        <div class="flex bg-primary p-5 rounded w-[27rem]">
                            <div class="justify-items-center">
                                <div class="flex gap-2 items-center">
                                    <i class="fa fa-tint text-4xl text-secondary"></i>
                                    <h1 class="lg:text-xl font-semibold text-white">
                                        Konservasi Air
                                    </h1>
                                </div>
                                <div class="h-1 mx-auto bg-secondary w-full mt-2"></div>
                                <p class="h-32 text-white text-justify mt-2">
                                    Program ini fokus pada penghematan dan pemanfaatan air secara berkelanjutan,
                                    khususnya dari limbah air wudhu. Air ini dikumpulkan dan digunakan kembali untuk
                                    menyiram tanaman, sehingga tidak ada air yang terbuang sia-sia.
                                </p>
                                <a href="{{ route('program-kerja') }}#konservasi-air"
                                    class="bg-secondary hover:bg-[#95822c] text-white transition-all ease-in-out duration-500 p-2 inline-block mt-10 rounded">
                                    BACA SELENGKAPNYA
                                </a>
                            </div>
                        </div>

                        {{-- Program Kerja => Konservasi Energi --}}
                        <div class="flex bg-primary p-5 rounded w-[27rem]">
                            <div class="justify-items-center">
                                <div class="flex gap-2 items-center">
                                    <i class="fa fa-bolt text-4xl text-secondary"></i>
                                    <h1 class="lg:text-xl font-semibold text-white">
                                        Konservasi Energi
                                    </h1>
                                </div>
                                <div class="h-1 mx-auto bg-secondary w-full mt-2"></div>
                                <p class="h-32 text-white text-justify mt-2">
                                    Melalui program Hemat Listrik, sekolah mendorong warga sekolah untuk menggunakan
                                    listrik secara bijak, mematikan lampu dan perangkat elektronik saat tidak
                                    digunakan, serta memanfaatkan cahaya alami di siang hari.
                                </p>
                                <a href="{{ route('program-kerja') }}#konservasi-energi"
                                    class="bg-secondary hover:bg-[#95822c] text-white transition-all ease-in-out duration-500 p-2 inline-block mt-10 rounded">
                                    BACA SELENGKAPNYA
                                </a>
                            </div>
                        </div>

                        {{-- Program Kerja => Sanitasi & Drainase --}}
                        <div class="flex bg-primary p-5 rounded w-[27rem]">
                            <div class="justify-items-center">
                                <div class="flex gap-2 items-center">
                                    <i class="fa fa-water text-4xl text-secondary"></i>
                                    <h1 class="lg:text-xl font-semibold text-white">
                                        Sanitasi & Drainase
                                    </h1>
                                </div>
                                <div class="h-1 mx-auto bg-secondary w-full mt-2"></div>
                                <p class="h-32 text-white text-justify mt-2">
                                    Sekolah memastikan lingkungan tetap bersih dan bebas banjir dengan program
                                    Sanitasi dan Drainase. Ini mencakup perawatan fasilitas sanitasi, saluran air,
                                    serta pembersihan rutin untuk menjaga kebersihan dan kesehatan lingkungan
                                    sekolah.
                                </p>
                                <a href="{{ route('program-kerja') }}#sanitasi-drainase"
                                    class="bg-secondary hover:bg-[#95822c] text-white transition-all ease-in-out duration-500 p-2 inline-block mt-10 rounded">
                                    BACA SELENGKAPNYA
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Program Kerja End -->

        <!-- Footer Start -->
        @include('layouts.partials.footer')
        <!-- Footer End -->
    </div>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
</body>

</html>
