<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adiwiyata Test</title>
    <link rel="shortcut icon" href="{{asset('image/logo-adiwiyata.png')}}" type="image/x-icon">

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
            font-family: 'Poppins', Gill Sans MT, Calibri, 'Trebuchet MS', sans-serif;
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
            background-image: url("{{asset('image/slider-1.jpg')}}");
        }

        .slide:nth-child(2) {
            background-image: url("{{asset('image/slider-2.jpg')}}");
        }

        .slide:nth-child(3) {
            background-image: url("{{asset('image/slider-3.jpg')}}");
        }

        .slide:nth-child(4) {
            background-image: url("{{asset('image/slider-4.jpg')}}");
        }

        .slide:nth-child(5) {
            background-image: url("{{asset('image/slider-5.jpg')}}");
        }

        .slide:nth-child(6) {
            background-image: url("{{asset('image/slider-1.jpg')}}");
        }

        /* Kelompok Kerja */
        .kelompok-kerja {
            background-image: url("{{asset('image/bg-rounded.png')}}");
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

<body>
    <!-- Navigasi Bar -->
    @include('layouts.partials.navbar')

    <!-- Hero Section -->
    <section class="hero-section bg-green-500/15" id="home">
        <div class="relative w-full h-[100vh] overflow-hidden">

            <!-- Logo and Text Container (Fixed Position) -->
            <div class="absolute w-full h-full flex flex-col items-center justify-center z-10 p-2 lg:p-0">

                <!-- Logo -->
                <img src="{{asset('image/Adiwiyata.png')}}" alt="" class="sm:w-[90%] md:w-[80%] lg:w-[65%] -mt-10">

                <!-- Text -->
                <div class="text-center text-white mt-5">
                    <h1 class="sm:text-xl md:text-2xl lg:inline lg:text-4xl font-semibold lg:font-bold">ADIWIYATA</h1>
                    <h1 class="lg:inline text-xl sm:text-2xl md:text-4xl font-bold">SMK TARUNA HARAPAN 1 CIPATAT</h1>
                    <h1 class="sm:text-xl md:text-2xl font-semibold">BERAKHLAK | BERBUDAYA | UNGGUL</h1>
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

        <script>
            const carousel = document.querySelector('.carousel');
            const slides = document.querySelectorAll('.slide');
            let currentIndex = 0;

            function moveSlide() {
                currentIndex++;
                carousel.style.transform = `translateX(-${currentIndex * 100}%)`;

                // When we reach the last slide (duplicate)
                if (currentIndex === slides.length - 1) {
                    // Wait for transition zto complete
                    setTimeout(() => {
                        // Remove transition
                        carousel.style.transition = 'none';
                        // Reset to first slide
                        currentIndex = 0;
                        carousel.style.transform = `translateX(0)`;
                        // Re-enable transition after a brief moment
                        setTimeout(() => {
                            carousel.style.transition = 'transform 0.5s ease-in-out';
                        }, 10);
                    }, 500);
                }
            }

            // Auto slide every 3 seconds
            setInterval(moveSlide, 3000);
        </script>
    </section>

    <div class="bg-quaternary">

        <!-- About Section -->
        <section class="about p-2 lg:p-4" id="about">
            <div class="mx-5 lg:mx-10">
                <div class="grid lg:grid-cols-2 rounded lg:p-5">
                    <div class="flex justify-center lg:justify-start">
                        <img src="{{asset('image/logo-adiwiyata.png')}}" alt="" class="w-96">
                    </div>
                    <div class="text-center">
                        <h1 class="text-xl lg:text-3xl text-primary font-semibold">TENTANG ADIWIYATA</h1>
                        <div class="bg-secondary mx-auto w-1/5 h-1"></div>
                        <div class="mt-3">
                            <h1 class="text-xs lg:text-base text-justify">
                                Program Adiwiyata adalah sebuah inisiatif yang diluncurkan oleh Kementerian Lingkungan
                                Hidup Indonesia pada tahun 2006 untuk mendorong kesadaran lingkungan di sekolah-sekolah.
                                Program ini bertujuan untuk membentuk sekolah yang peduli dan berbudaya lingkungan
                                melalui pendidikan lingkungan hidup yang terpadu dalam kegiatan belajar-mengajar.
                                Sekolah yang mengikuti program Adiwiyata diajak untuk menerapkan prinsip-prinsip
                                pengelolaan lingkungan, seperti pengurangan limbah, konservasi sumber daya, serta
                                penanaman dan pemeliharaan taman sekolah. Selain itu, program ini mendorong partisipasi
                                aktif dari seluruh warga sekolah, termasuk guru, siswa, dan staf, untuk menciptakan
                                lingkungan yang lebih bersih, sehat, dan hijau.
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Kelompok Kerja Section -->
        <section class="kelompok-kerja bg-cover text-white text-center p-2 lg:p-4 mt-10 bg-top" id="kelompok-kerja">
            <div class="mt-10">
                <h1 class="text-xl md:text-2xl lg:text-3xl font-semibold">KADER ADIWIYATA</h1>
                <h1 class="text-lg lg:text-xl font-semibold text-secondary">SMK TARUNA HARAPAN 1 CIPATAT</h1>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 m-5 lg:m-10 gap-5 justify-items-center">

                <!-- Kader 1 -->
                <div class="kader-1 bg-quaternary p-2 rounded w-auto">
                    <img src="{{asset('image/pokja-1.jpg')}}" alt="" class="aspect-video">
                    <div class="py-2">
                        <h1 class="text-sm text-left text-gray-500">Kader 1</h1>
                        <h1 class="lg:text-2xl text-left text-gray-800 font-semibold">Tanaman & Pembibitan</h1>
                        <div class="h-1 bg-primary w-full"></div>
                        <h1 class="text-sm text-gray-800 text-justify h-20">
                            Kader di bidang Tanaman dan Pembibitan dalam program Adiwiyata memiliki fokus
                            penting dalam mengelola tanaman konsumsi, tanaman obat, dan tanaman yang dibudidayakan
                            secara aquaphonik.
                        </h1>
                        <div class="button-kader mt-14">
                            <a href="{{route('kader')}}#tanaman-dan-pembibitan"
                                class="bg-primary hover:bg-green-900 transition-all ease-in-out duration-500 p-2 rounded">
                                BACA SELENGKAPNYA
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Kader 2 -->
                <div class="kader-2 bg-quaternary p-2 rounded w-auto">
                    <img src="{{asset('image/pokja-2.jpg')}}" alt="" class="aspect-video">
                    <div class="py-2">
                        <h1 class="text-sm text-left text-gray-500">Kader 2</h1>
                        <h1 class="lg:text-2xl text-left text-gray-800 font-semibold">Kompos & Bank Sampah</h1>
                        <div class="h-1 bg-primary w-full"></div>
                        <h1 class="text-sm text-gray-800 text-justify h-20">
                            Kader di bidang Kompos dan Bank Sampah dalam program Adiwiyata bertugas mengelola
                            sampah di lingkungan sekolah dengan prinsip pemilahan dan pengolahan yang berkelanjutan.
                        </h1>
                        <div class="button-kader mt-14">
                            <a href="{{route('kader')}}#kompos-dan-bank-sampah"
                                class="bg-primary hover:bg-green-900 transition-all ease-in-out duration-500 p-2 rounded">
                                BACA SELENGKAPNYA
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Kader 3 -->
                <div class="kader-3 bg-quaternary p-2 rounded w-auto">
                    <img src="{{asset('image/pokja-3.jpg')}}" alt="" class="aspect-video">
                    <div class="py-2">
                        <h1 class="text-sm text-left text-gray-500">Kader 3</h1>
                        <h1 class="lg:text-2xl text-left text-gray-800 font-semibold">Sanitasi & Kamar Mandi</h1>
                        <div class="h-1 bg-primary w-full"></div>
                        <h1 class="text-sm text-gray-800 text-justify h-20">
                            Kader di bidang Sanitasi dan Kamar mandi dalam program Adiwiyata bertanggung jawab
                            memastikan kebersihan, kerapian, dan keteraturan fasilitas sanitasi di sekolah.
                        </h1>
                        <div class="button-kader mt-14">
                            <a href="{{route('kader')}}#sanitasi-dan-kamar-mandi"
                                class="bg-primary hover:bg-green-900 transition-all ease-in-out duration-500 p-2 rounded">
                                BACA SELENGKAPNYA
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Kader 4 -->
                <div class="kader-4 bg-quaternary p-2 rounded w-auto">
                    <img src="{{asset('image/pokja-4.jpg')}}" alt="" class="aspect-video">
                    <div class="py-2">
                        <h1 class="text-sm text-left text-gray-500">Kader 4</h1>
                        <h1 class="lg:text-2xl text-left text-gray-800 font-semibold">Taman & Hutan Sekolah</h1>
                        <div class="h-1 bg-primary w-full"></div>
                        <h1 class="text-sm text-gray-800 text-justify">
                            Kader di bidang Taman dan Hutan Sekolah dalam program Adiwiyata memiliki peran
                            penting dalam menjaga keindahan, kelestarian, dan fungsi edukasi dari taman sekolah.
                        </h1>
                        <div class="button-kader mt-14">
                            <a href="{{route('kader')}}#taman-dan-hutan-sekolah"
                                class="bg-primary hover:bg-green-900 transition-all ease-in-out duration-500 p-2 rounded">
                                BACA SELENGKAPNYA
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Kader 5 -->
                <div class="kader-5 bg-quaternary p-2 rounded w-auto">
                    <img src="{{asset('image/pokja-5.jpg')}}" alt="" class="aspect-video">
                    <div class="py-2">
                        <h1 class="text-sm text-left text-gray-500">Kader 5</h1>
                        <h1 class="lg:text-2xl text-left text-gray-800 font-semibold">Kreasi Daur Ulang Sampah</h1>
                        <div class="h-1 bg-primary w-full"></div>
                        <h1 class="text-sm text-gray-800 text-justify h-20">
                            Kader di bidang Kreasi Daur Ulang Sampah dalam program Adiwiyata bertanggung jawab
                            mengolah sampah menjadi barang yang bermanfaat dan memiliki nilai estetika.
                        </h1>
                        <div class="button-kader mt-14">
                            <a href="{{route('kader')}}#kreasi-daur-ulang-sampah"
                                class="bg-primary hover:bg-green-900 transition-all ease-in-out duration-500 p-2 rounded">
                                BACA SELENGKAPNYA
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Program Kerja Section -->
        <section class="program-kerja p-2 lg:p-4" id="program-kerja">
            <div class="lg:mx-10">
                <div class="text-center lg:text-left">
                    <h1 class="text-xl md:text-2xl lg:text-3xl font-semibold text-primary">PROGRAM KERJA</h1>
                    <div class="">
                        <div class="h-1 bg-secondary mx-auto lg:mx-0 w-1/5"></div>
                    </div>
                </div>
                <div class="snap-mandatory overflow-x-scroll flex mt-10 h-auto mx-5 lg:mx-0 rounded">
                    <div class="shrink-0 gap-5 flex items-center w-[27rem">

                        <!-- Program Kerja 1 -->
                        <div class="program-kerja-1 bg-primary p-5 rounded w-[27rem]">
                            <div class="flex items-center gap-2 justify-center">
                                <i class="fa fa-leaf text-4xl text-secondary"></i>
                                <h1 class="lg:text-xl font-semibold text-white">Pengolahan Sampah Organik</h1>
                            </div>
                            <div class="h-1 mx-auto bg-secondary w-full mt-2"></div>
                            <div class="mt-5">
                                <div class="h-44">
                                    <h1 class="text-sm lg:text-base text-white text-justify">
                                        Program ini bertujuan mengolah sampah organik menjadi produk bermanfaat seperti kompos, maggot, eco enzym, dan MOL. Teknologi sederhana seperti dekomposter dan pemanfaatan air lindi digunakan untuk mendukung pengelolaan limbah secara efisien.
                                    </h1>
                                </div>
                                <div class="mt-20 text-center">
                                    <a href="{{route('program-kerja')}}#bank-sampah"
                                        class="bg-yellow-500 hover:bg-secondary transition-all ease-in-out duration-500 p-2 rounded">
                                        BACA SELENGKAPNYA
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Program Kerja 2 -->
                        <div class="program-kerja-2 bg-primary p-5 rounded w-[27rem]">
                            <div class="flex items-center gap-2 justify-center">
                                <i class="fa fa-recycle text-4xl text-secondary"></i>
                                <h1 class="lg:text-xl font-semibold text-white">Pengolahan Sampah Anorganik</h1>
                            </div>
                            <div class="h-1 mx-auto bg-secondary w-full mt-2"></div>
                            <div class="mt-5">
                                <div class="h-44">
                                    <h1 class="text-sm lg:text-base text-white text-justify">
                                        Program ini mengelola sampah anorganik melalui bank sampah yang mendorong masyarakat memilah dan menyetor sampah. Sampah yang terkumpul akan didaur ulang atau dimanfaatkan kembali, sehingga menciptakan nilai ekonomi dan mengurangi pencemaran lingkungan.
                                    </h1>
                                </div>
                                <div class="mt-20 text-center">
                                    <a href="{{route('program-kerja')}}#bank-sampah"
                                        class="bg-yellow-500 hover:bg-secondary transition-all ease-in-out duration-500 p-2 rounded">
                                        BACA SELENGKAPNYA
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Program Kerja 3 -->
                        <div class="program-kerja-3 bg-primary p-5 rounded w-[27rem]">
                            <div class="flex items-center gap-2 justify-center">
                                <i class="fa fa-tint text-4xl text-secondary"></i>
                                <h1 class="lg:text-xl font-semibold text-white">Konservasi Air</h1>
                            </div>
                            <div class="h-1 mx-auto bg-secondary w-full mt-2"></div>
                            <div class="mt-5">
                                <div class="h-44">
                                    <h1 class="text-sm lg:text-base text-white text-justify">
                                        Program ini memanfaatkan limbah air wudhu untuk menyiram tanaman atau keperluan lainnya, sehingga mengurangi pemborosan air bersih. Air yang masih layak digunakan dikumpulkan dalam sistem penampungan sederhana untuk dimanfaatkan ulang.
                                    </h1>
                                </div>
                                <div class="mt-20 text-center">
                                    <a href="{{route('program-kerja')}}#bank-sampah"
                                        class="bg-yellow-500 hover:bg-secondary transition-all ease-in-out duration-500 p-2 rounded">
                                        BACA SELENGKAPNYA
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Program Kerja 4 -->
                        <div class="program-kerja-4 bg-primary p-5 rounded w-[27rem]">
                            <div class="flex items-center gap-2 justify-center">
                                <i class="fa fa-bolt text-4xl text-secondary"></i>
                                <h1 class="lg:text-xl font-semibold text-white">Konservasi Energi</h1>
                            </div>
                            <div class="h-1 mx-auto bg-secondary w-full mt-2"></div>
                            <div class="mt-5">
                                <div class="h-44">
                                    <h1 class="text-sm lg:text-base text-white text-justify">
                                        Program ini mendorong perilaku hemat energi, seperti mematikan perangkat yang tidak digunakan dan menggunakan teknologi hemat listrik. Edukasi masyarakat dilakukan untuk mengurangi konsumsi energi berlebihan yang berdampak pada lingkungan.
                                    </h1>
                                </div>
                                <div class="mt-20 text-center">
                                    <a href="{{route('program-kerja')}}#bank-sampah"
                                        class="bg-yellow-500 hover:bg-secondary transition-all ease-in-out duration-500 p-2 rounded">
                                        BACA SELENGKAPNYA
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Program Kerja 5 -->
                        <div class="program-kerja-5 bg-primary p-5 rounded w-[27rem]">
                            <div class="flex items-center gap-2 justify-center">
                                <i class="fa fa-water text-4xl text-secondary"></i>
                                <h1 class="lg:text-xl font-semibold text-white">Sanitasi & Drainase</h1>
                            </div>
                            <div class="h-1 mx-auto bg-secondary w-full mt-2"></div>
                            <div class="mt-5">
                                <div class="h-44">
                                    <h1 class="text-sm lg:text-base text-white text-justify">
                                        Program ini berfokus pada pengelolaan sanitasi dan drainase untuk mencegah genangan serta banjir. Lingkungan yang bersih dan sehat diharapkan dapat mengurangi risiko penyakit akibat sanitasi buruk.
                                    </h1>
                                </div>
                                <div class="mt-20 text-center">
                                    <a href="{{route('program-kerja')}}#bank-sampah"
                                        class="bg-yellow-500 hover:bg-secondary transition-all ease-in-out duration-500 p-2 rounded">
                                        BACA SELENGKAPNYA
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <!-- Footer -->
        @include('layouts.partials.footer')
    </div>
</body>

</html>
