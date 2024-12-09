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

        .mobile-menu {
            position: fixed;
            /* Height of navbar */
            top: 64px;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #186635;
            transform: translateX(-100%);
            transition: transform 0.3s ease-in-out;
        }

        .mobile-menu.show {
            transform: translateX(0);
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
    <section class="hero-section bg-green-500/15 z-10" id="home">
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
                <h1 class="text-xl md:text-2xl lg:text-3xl font-semibold">KELOMPOK KERJA ADIWIYATA</h1>
                <h1 class="text-lg lg:text-xl font-semibold text-secondary">SMK TARUNA HARAPAN 1 CIPATAT</h1>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 m-5 lg:m-10 gap-5 justify-items-center">

                <!-- Kelompok Kerja 1 -->
                <div class="kelompok-kerja-1 bg-quaternary p-2 rounded w-auto">
                    <img src="{{asset('image/pokja-1.jpg')}}" alt="" class="aspect-video">
                    <div class="py-2">
                        <h1 class="text-sm text-left text-gray-500">Kelompok Kerja 1</h1>
                        <h1 class="lg:text-2xl text-left text-gray-800 font-semibold">Tanaman & Pembibitan</h1>
                        <div class="h-1 bg-primary w-full"></div>
                        <h1 class="text-sm text-gray-800 text-justify h-20">
                            Kelompok kerja di bidang Tanaman dan Pembibitan dalam program Adiwiyata memiliki fokus
                            penting dalam mengelola tanaman konsumsi, tanaman obat, dan tanaman yang dibudidayakan
                            secara aquaphonik.
                        </h1>
                        <div class="button-kelompok-kerja mt-14">
                            <a href=""
                                class="bg-primary hover:bg-green-900 transition-all ease-in-out duration-500 p-2 rounded">
                                BACA SELENGKAPNYA
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Kelompok Kerja 2 -->
                <div class="kelompok-kerja-2 bg-quaternary p-2 rounded w-auto">
                    <img src="{{asset('image/pokja-2.jpg')}}" alt="" class="aspect-video">
                    <div class="py-2">
                        <h1 class="text-sm text-left text-gray-500">Kelompok Kerja 2</h1>
                        <h1 class="lg:text-2xl text-left text-gray-800 font-semibold">Kompos & Bank Sampah</h1>
                        <div class="h-1 bg-primary w-full"></div>
                        <h1 class="text-sm text-gray-800 text-justify h-20">
                            Kelompok kerja di bidang Kompos dan Bank Sampah dalam program Adiwiyata bertugas mengelola
                            sampah di lingkungan sekolah dengan prinsip pemilahan dan pengolahan yang berkelanjutan.
                        </h1>
                        <div class="button-kelompok-kerja mt-14">
                            <a href=""
                                class="bg-primary hover:bg-green-900 transition-all ease-in-out duration-500 p-2 rounded">
                                BACA SELENGKAPNYA
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Kelompok Kerja 3 -->
                <div class="kelompok-kerja-3 bg-quaternary p-2 rounded w-auto">
                    <img src="{{asset('image/pokja-3.jpg')}}" alt="" class="aspect-video">
                    <div class="py-2">
                        <h1 class="text-sm text-left text-gray-500">Kelompok Kerja 3</h1>
                        <h1 class="lg:text-2xl text-left text-gray-800 font-semibold">Sanitasi & Kamar Mandi</h1>
                        <div class="h-1 bg-primary w-full"></div>
                        <h1 class="text-sm text-gray-800 text-justify h-20">
                            Kelompok kerja di bidang Sanitasi dan Kamar mandi dalam program Adiwiyata bertanggung jawab
                            memastikan kebersihan, kerapian, dan keteraturan fasilitas sanitasi di sekolah.
                        </h1>
                        <div class="button-kelompok-kerja mt-14">
                            <a href=""
                                class="bg-primary hover:bg-green-900 transition-all ease-in-out duration-500 p-2 rounded">
                                BACA SELENGKAPNYA
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Kelompok Kerja 4 -->
                <div class="kelompok-kerja-4 bg-quaternary p-2 rounded w-auto">
                    <img src="{{asset('image/pokja-4.jpg')}}" alt="" class="aspect-video">
                    <div class="py-2">
                        <h1 class="text-sm text-left text-gray-500">Kelompok Kerja 4</h1>
                        <h1 class="lg:text-2xl text-left text-gray-800 font-semibold">Taman & Hutan Sekolah</h1>
                        <div class="h-1 bg-primary w-full"></div>
                        <h1 class="text-sm text-gray-800 text-justify">
                            Kelompok kerja di bidang Taman dan Hutan Sekolah dalam program Adiwiyata memiliki peran
                            penting dalam menjaga keindahan, kelestarian, dan fungsi edukasi dari taman sekolah.
                        </h1>
                        <div class="button-kelompok-kerja mt-14">
                            <a href=""
                                class="bg-primary hover:bg-green-900 transition-all ease-in-out duration-500 p-2 rounded">
                                BACA SELENGKAPNYA
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Kelompok Kerja 5 -->
                <div class="kelompok-kerja-5 bg-quaternary p-2 rounded w-auto">
                    <img src="{{asset('image/pokja-5.jpg')}}" alt="" class="aspect-video">
                    <div class="py-2">
                        <h1 class="text-sm text-left text-gray-500">Kelompok Kerja 5</h1>
                        <h1 class="lg:text-2xl text-left text-gray-800 font-semibold">Kreasi Daur Ulang Sampah</h1>
                        <div class="h-1 bg-primary w-full"></div>
                        <h1 class="text-sm text-gray-800 text-justify h-20">
                            Kelompok kerja di bidang Kreasi Daur Ulang Sampah dalam program Adiwiyata bertanggung jawab
                            mengolah sampah menjadi barang yang bermanfaat dan memiliki nilai estetika.
                        </h1>
                        <div class="button-kelompok-kerja mt-14">
                            <a href=""
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
                    <div class="shrink-0 gap-5 flex items-center">

                        <!-- Program Kerja 1 -->
                        <div class="program-kerja-1 bg-primary p-5 rounded w-80">
                            <div class="flex items-center gap-2 justify-center">
                                <img src="{{asset('image/bank-sampah.svg')}}" alt=""
                                    class="aspect-square bg-secondary rounded-full p-1 w-14">
                                <h1 class="lg:text-xl font-semibold text-white">BANK SAMPAH</h1>
                            </div>
                            <div class="h-1 mx-auto bg-secondary w-full mt-2"></div>
                            <div class="mt-5">
                                <div class="h-36">
                                    <h1 class="text-sm lg:text-base text-white text-justify">
                                        Bank sampah adalah sebuah sistem pengelolaan sampah yang memungkinkan masyarakat
                                        untuk menukarkan sampah yang bisa didaur ulang dengan nilai ekonomi tertentu.
                                    </h1>
                                </div>
                                <div class="mt-20 text-center">
                                    <a href=""
                                        class="bg-yellow-500 hover:bg-secondary transition-all ease-in-out duration-500 p-2 rounded">
                                        BACA SELENGKAPNYA
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Program Kerja 2 -->
                        <div class="program-kerja-2 bg-primary p-5 rounded w-80">
                            <div class="flex items-center gap-2 justify-center">
                                <img src="{{asset('image/maggot.svg')}}" alt=""
                                    class="aspect-square bg-secondary rounded-full p-1 w-14">
                                <h1 class="lg:text-xl font-semibold text-white">BUDIDAYA MAGGOT</h1>
                            </div>
                            <div class="h-1 mx-auto bg-secondary w-full mt-2"></div>
                            <div class="mt-5">
                                <div class="h-36">
                                    <h1 class="text-sm lg:text-base text-white text-justify">
                                        Budidaya maggot (larva lalat Black Soldier Fly atau BSF) adalah metode
                                        pemanfaatan larva untuk mengolah sampah organik, seperti sisa makanan atau
                                        limbah pertanian, menjadi kompos atau pakan hewan.
                                    </h1>
                                </div>
                                <div class="mt-20 text-center">
                                    <a href=""
                                        class="bg-yellow-500 hover:bg-secondary transition-all ease-in-out duration-500 p-2 rounded">
                                        BACA SELENGKAPNYA
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Program Kerja 3 -->
                        <div class="program-kerja-3 bg-primary p-5 rounded w-80">
                            <div class="flex items-center gap-2 justify-center">
                                <img src="{{asset('image/pembibitan.svg')}}" alt=""
                                    class="aspect-square bg-secondary rounded-full p-1 w-14">
                                <h1 class="lg:text-xl font-semibold text-white">PEMBIBITAN</h1>
                            </div>
                            <div class="h-1 mx-auto bg-secondary w-full mt-2"></div>
                            <div class="mt-5">
                                <div class="h-36">
                                    <h1 class="text-sm lg:text-base text-white text-justify">
                                        Pembibitan adalah proses awal dalam budidaya tanaman untuk menumbuhkan bibit
                                        dari biji atau bahan tanam lainnya sebelum dipindahkan ke lahan utama.
                                    </h1>
                                </div>
                                <div class="mt-20 text-center">
                                    <a href=""
                                        class="bg-yellow-500 hover:bg-secondary transition-all ease-in-out duration-500 p-2 rounded">
                                        BACA SELENGKAPNYA
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Program Kerja 4 -->
                        <div class="program-kerja-4 bg-primary p-5 rounded w-80">
                            <div class="flex items-center gap-2 justify-center">
                                <img src="{{asset('image/aquaphonik.svg')}}" alt=""
                                    class="aspect-square bg-secondary rounded-full p-1 w-14">
                                <h1 class="lg:text-xl font-semibold text-white">AQUAPHONIK</h1>
                            </div>
                            <div class="h-1 mx-auto bg-secondary w-full mt-2"></div>
                            <div class="mt-5">
                                <div class="h-36">
                                    <h1 class="text-sm lg:text-base text-white text-justify">
                                        Aquaponik adalah sistem pertanian yang menggabungkan budidaya ikan (akuakultur)
                                        dengan budidaya tanaman tanpa tanah (hidroponik) dalam satu ekosistem tertutup.
                                    </h1>
                                </div>
                                <div class="mt-20 text-center">
                                    <a href=""
                                        class="bg-yellow-500 hover:bg-secondary transition-all ease-in-out duration-500 p-2 rounded">
                                        BACA SELENGKAPNYA</a>
                                </div>
                            </div>
                        </div>

                        <!-- Program Kerja 5 -->
                        <div class="program-kerja-5 bg-primary p-5 rounded w-80">
                            <div class="flex items-center gap-2 justify-center">
                                <img src="{{asset('image/pupuk-organik-cair.svg')}}" alt=""
                                    class="aspect-square bg-secondary rounded-full p-1 w-14">
                                <h1 class="lg:text-xl font-semibold text-white">PUPUK ORGANIK CAIR</h1>
                            </div>
                            <div class="h-1 mx-auto bg-secondary w-full mt-2"></div>
                            <div class="mt-5">
                                <div class="h-36">
                                    <h1 class="text-sm lg:text-base text-white text-justify">
                                        Pupuk organik cair adalah pupuk yang berbentuk cair dan dibuat dari bahan-bahan
                                        organik, seperti sisa tanaman, kotoran hewan, atau limbah dapur.
                                    </h1>
                                </div>
                                <div class="mt-20 text-center">
                                    <a href=""
                                        class="bg-yellow-500 hover:bg-secondary transition-all ease-in-out duration-500 p-2 rounded">
                                        BACA SELENGKAPNYA
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Program Kerja 6 -->
                        <div class="program-kerja-6 bg-primary p-5 rounded w-80">
                            <div class="flex items-center gap-2 justify-center">
                                <img src="{{asset('image/limbah-air-wudhu.svg')}}" alt=""
                                    class="aspect-square bg-secondary rounded-full p-1 w-14">
                                <h1 class="lg:text-xl font-semibold text-white">LIMBAH AIR WUDHU</h1>
                            </div>
                            <div class="h-1 mx-auto bg-secondary w-full mt-2"></div>
                            <div class="mt-5">
                                <div class="h-36">
                                    <h1 class="text-sm lg:text-base text-white text-justify">
                                        Pemanfaatan limbah air wudhu adalah upaya untuk mengelola dan menggunakan
                                        kembali air bekas wudhu sehingga tidak terbuang sia-sia.
                                    </h1>
                                </div>
                                <div class="mt-20 text-center">
                                    <a href=""
                                        class="bg-yellow-500 hover:bg-secondary transition-all ease-in-out duration-500 p-2 rounded">
                                        BACA SELENGKAPNYA
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Program Kerja 7 -->
                        <div class="program-kerja-7 bg-primary p-5 rounded w-80">
                            <div class="flex items-center gap-2 justify-center">
                                <img src="{{asset('image/label-tanaman.svg')}}" alt=""
                                    class="aspect-square bg-secondary rounded-full p-1 w-14">
                                <h1 class="lg:text-xl font-semibold text-white">LABEL TANAMAN</h1>
                            </div>
                            <div class="h-1 mx-auto bg-secondary w-full mt-2"></div>
                            <div class="mt-5">
                                <div class="h-36">
                                    <h1 class="text-sm lg:text-base text-white text-justify">
                                        Melabeli nama-nama tanaman dalam 4 bahasa, Indonesia, Latin, Inggris dan Sunda,
                                        serta mencantumkan manfaatnya agar orang yang membaca mendapatkan ilmu terkait
                                        tanaman yang dilabeli.
                                    </h1>
                                </div>
                                <div class="mt-20 text-center">
                                    <a href=""
                                        class="bg-yellow-500 hover:bg-secondary transition-all ease-in-out duration-500 p-2 rounded">
                                        BACA SELENGKAPNYA
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Program Kerja 8 -->
                        <div class="program-kerja-8 bg-primary p-5 rounded w-80">
                            <div class="flex items-center gap-2 justify-center">
                                <img src="{{asset('image/ecobrick.svg')}}" alt=""
                                    class="aspect-square bg-secondary rounded-full p-1 w-14">
                                <h1 class="lg:text-xl font-semibold text-white">ECOBRICK</h1>
                            </div>
                            <div class="h-1 mx-auto bg-secondary w-full mt-2"></div>
                            <div class="mt-5">
                                <div class="h-36">
                                    <h1 class="text-sm lg:text-base text-white text-justify">
                                        Ecobrick adalah metode pengelolaan sampah plastik dengan cara memadatkan limbah
                                        plastik ke dalam botol plastik hingga penuh dan padat.
                                    </h1>
                                </div>
                                <div class="mt-20 text-center">
                                    <a href=""
                                        class="bg-yellow-500 hover:bg-secondary transition-all ease-in-out duration-500 p-2 rounded">
                                        BACA SELENGKAPNYA
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Program Kerja 9 -->
                        <div class="program-kerja-2 bg-primary p-5 rounded w-80">
                            <div class="flex items-center gap-2 justify-center">
                                <img src="{{asset('image/eco-enzym.svg')}}" alt=""
                                    class="aspect-square bg-secondary rounded-full p-1 w-14">
                                <h1 class="lg:text-xl font-semibold text-white">ECO ENZYME</h1>
                            </div>
                            <div class="h-1 mx-auto bg-secondary w-full mt-2"></div>
                            <div class="mt-5">
                                <div class="h-36">
                                    <h1 class="lg:text-sm lg:text-base text-white text-justify">
                                        Eco Enzyme adalah larutan serbaguna yang dibuat melalui fermentasi sampah
                                        organik, seperti kulit buah dan sayuran, dengan campuran gula dan air.
                                    </h1>
                                </div>
                                <div class="mt-20 text-center">
                                    <a href=""
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
