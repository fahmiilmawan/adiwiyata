<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Kerja | Adiwiyata</title>
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

        body {
            font-family: 'Poppins', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        /* Hero Section */
        .slide {
            background-image: url('{{ asset('image/slider-1.jpg') }}');
            background-size: cover;
            background-position: center;
        }

        /* Scroll Behavior */
        #pengolahan-sampah-organik,
        #pengolahan-sampah-anorganik,
        #konservasi-air,
        #konservasi-energi,
        #sanitasi-dan-drainase {
            scroll-margin-top: 80px;
        }

        #kompos,
        #budidaya-maggot,
        #eco-enzyme,
        #mikroorganisme-lokal,
        #air-lindi,
        #eco-derma,
        #dekomposter,
        #bank-sampah,
        #limbah-air-wudhu,
        #hemat-listrik,
        #sanitasi-dan-drainase {
            scroll-margin-top: 80px;
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
                <div class="container mx-auto">
                    <div class="mt-0 lg:mt-40">

                        <!-- Logo -->
                        <img src="{{ asset('image/Adiwiyata.png') }}" alt=""
                            class="sm:w-[90%] md:w-[80%] lg:w-[55%] justify-self-center" />

                        <!-- Text -->
                        <div class="text-center text-white mt-5">
                            <h1 class="text-base sm:text-2xl md:text-4xl font-bold">
                                PROGRAM KERJA - ADIWIYATA
                            </h1>
                            <h1 class="text-base sm:text-2xl md:text-4xl font-bold">
                                SMK TARUNA HARAPAN 1 CIPATAT
                            </h1>
                        </div>
                    </div>

                    <!-- Kategori -->
                    <div class="px-2 lg:px-4 hidden lg:flex">
                        <div class="container mx-auto p-3 lg:p-5">
                            <div class="py-5 rounded">
                                <div class="snap-mandatory overflow-x-scroll flex mt-5 h-auto rounded">
                                    <div class="shrink-0 gap-5 flex items-center">

                                        <div class="bg-primary border-2 border-secondary p-5 rounded w-[27rem]">
                                            <div class="items-center gap-2 justify-items-center">
                                                <i class="fa fa-leaf text-4xl text-secondary"></i>
                                                <h1 class="lg:text-xl font-semibold text-white">
                                                    Pengolahan Sampah Organik
                                                </h1>
                                            </div>
                                        </div>

                                        <div class="bg-primary border-2 border-secondary p-5 rounded w-[27rem]">
                                            <div class="items-center gap-2 justify-items-center">
                                                <i class="fa fa-recycle text-4xl text-secondary"></i>
                                                <h1 class="lg:text-xl font-semibold text-white">
                                                    Pengolahan Sampah Anorganik
                                                </h1>
                                            </div>
                                        </div>

                                        <div class="bg-primary border-2 border-secondary p-5 rounded w-[27rem]">
                                            <div class="items-center gap-2 justify-center justify-items-center">
                                                <i class="fa fa-tint text-4xl text-secondary"></i>
                                                <h1 class="lg:text-xl font-semibold text-white">
                                                    Konservasi Air
                                                </h1>
                                            </div>
                                        </div>

                                        <div class="bg-primary border-2 border-secondary p-5 rounded w-[27rem]">
                                            <div class="items-center gap-2 justify-items-center">
                                                <i class="fa fa-bolt text-4xl text-secondary"></i>
                                                <h1 class="lg:text-xl font-semibold text-white">
                                                    Konservasi Energi
                                                </h1>
                                            </div>
                                        </div>

                                        <div class="bg-primary border-2 border-secondary p-5 rounded w-[27rem]">
                                            <div class="items-center gap-2 justify-center justify-items-center">
                                                <i class="fa fa-water text-4xl text-secondary"></i>
                                                <h1 class="lg:text-xl font-semibold text-white">
                                                    Sanitasi & Drainase
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

    <div class="bg-quaternary pt-5">

        <div class="p-2 lg:p-4">
            <div class="container mx-auto">
                <div class="p-3 lg:p-5">

                    <!-- Program Kerja => Pengolahan Sampah Organik -->
                    <section class="pengolahan-sampah-organik py-5" id="pengolahan-sampah-organik">
                        <div class="bg-primary p-2 text-center rounded">
                            <h1 class="md:text-xl lg:text-2xl text-white font-bold">
                                PENGOLAHAN SAMPAH ORGANIK
                            </h1>
                        </div>

                        {{-- Kompos --}}
                        <div class="shadow-lg p-2 mt-5 rounded" id="kompos">
                            <h1
                                class="sm:text-base md:text-lg lg:text-xl bg-primary p-1 inline-block rounded text-white font-bold">
                                Kompos
                            </h1>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Definisi Kompos
                                </h1>
                                <p class="">
                                    <span class="ms-5">Kompos</span> adalah hasil penguraian bahan organik seperti
                                    sisa makanan, dedaunan, dan limbah dapur oleh mikroorganisme dalam kondisi tertentu.
                                    Proses ini disebut dekomposisi dan menghasilkan pupuk organik yang kaya akan nutrisi
                                    bagi tanah. Kompos sering digunakan dalam pertanian dan kegiatan berkebun untuk
                                    meningkatkan kesuburan tanah dan memperbaiki struktur tanah.
                                </p>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Tujuan Pembuatan Kompos
                                </h1>
                                <p class="">
                                    <span class="ms-5">Tujuan</span> utama pembuatan kompos adalah untuk mengurangi
                                    jumlah sampah organik yang dibuang ke tempat pembuangan akhir (TPA), mengurangi
                                    pencemaran lingkungan, serta menghasilkan pupuk alami yang dapat meningkatkan
                                    kualitas tanah. Kompos juga mendukung prinsip ekonomi sirkular dan pengelolaan
                                    limbah berkelanjutan.
                                </p>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Manfaat Kompos
                                </h1>
                                <ul class="ms-5 list-disc">
                                    <li class="">
                                        Meningkatkan Kesuburan Tanah – Kompos memperkaya tanah dengan nutrisi penting
                                        seperti nitrogen, fosfor, dan kalium.
                                    </li>
                                    <li class="">
                                        Mengurangi Sampah – Mengolah sampah organik menjadi kompos mengurangi volume
                                        sampah
                                        yang dibuang ke TPA.
                                    </li>
                                    <li class="">
                                        Memperbaiki Struktur Tanah – Kompos meningkatkan aerasi tanah dan kemampuan
                                        tanah
                                        dalam menyimpan air.
                                    </li>
                                    <li class="">
                                        Mengurangi Penggunaan Pupuk Kimia – Dengan menggunakan kompos, ketergantungan
                                        terhadap pupuk kimia berkurang, sehingga tanah menjadi lebih sehat.
                                    </li>
                                    <li class="">
                                        Menurunkan Emisi Gas Rumah Kaca – Sampah organik yang terurai di TPA
                                        menghasilkan
                                        gas metana. Pembuatan kompos mengurangi emisi ini.
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Bahan-bahan untuk Pembuatan Kompos
                                </h1>
                                <ul class="ms-5 list-disc">
                                    <li class="">
                                        Bahan Hijau (Nitrogen): Sisa sayuran, buah, rumput segar, daun hijau.
                                    </li>
                                    <li class="">
                                        Bahan Coklat (Karbon): Daun kering, kertas, karton, serbuk kayu, jerami.
                                    </li>
                                    <li class="">
                                        Air: Menjaga kelembaban selama proses dekomposisi.
                                    </li>
                                    <li class="">
                                        Mikroorganisme: Dapat berupa tanah atau kompos lama yang mengandung mikroba
                                        pengurai.
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Cara Pembuatan Kompos
                                </h1>
                                <ul class="ms-5 list-disc">
                                    <li class="">
                                        Persiapan Bahan – Kumpulkan bahan hijau dan coklat dalam jumlah yang seimbang.
                                        Potong-potong bahan agar lebih cepat terurai.
                                    </li>
                                    <li class="">
                                        Penyusunan – Lapiskan bahan hijau dan coklat secara bergantian dalam wadah atau
                                        lubang kompos.
                                    </li>
                                    <li class="">
                                        Penambahan Air – Pastikan bahan tetap lembab, namun tidak terlalu basah.
                                    </li>
                                    <li class="">
                                        Pengadukan – Aduk tumpukan kompos setiap 1-2 minggu untuk memastikan sirkulasi
                                        udara
                                        dan mempercepat proses dekomposisi.
                                    </li>
                                    <li class="">
                                        Pematangan – Setelah 2-3 bulan, kompos matang ditandai dengan warna coklat
                                        kehitaman, berbau seperti tanah, dan tidak panas saat disentuh.
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Jenis Kompos
                                </h1>
                                <ul class="ms-5 list-disc">
                                    <li class="">
                                        Kompos Panas – Dibuat dengan menumpuk bahan organik dalam jumlah besar, sehingga
                                        suhu meningkat dan mempercepat proses dekomposisi.
                                    </li>
                                    <li class="">
                                        Kompos Dingin – Prosesnya lebih lambat dan tidak menghasilkan panas tinggi,
                                        biasanya
                                        dilakukan dalam skala kecil.
                                    </li>
                                    <li class="">
                                        Vermikompos – Menggunakan cacing tanah untuk membantu proses penguraian bahan
                                        organik.
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Tantangan dan Solusi dalam Pembuatan Kompos
                                </h1>
                                <ul class="ms-5 list-disc">
                                    <li class="">
                                        Bau Tak Sedap – Tambahkan lebih banyak bahan coklat dan pastikan sirkulasi udara
                                        cukup.
                                    </li>
                                    <li class="">
                                        Lambat Terurai – Pastikan keseimbangan antara bahan hijau dan coklat, serta
                                        lakukan
                                        pengadukan secara rutin.
                                    </li>
                                    <li class="">
                                        Kehadiran Hama – Tutup tumpukan kompos dengan terpal atau wadah kompos yang
                                        rapat.
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Kesimpulan
                                </h1>
                                <p class="">
                                    <span class="ms-5">Pembuatan</span> kompos adalah solusi praktis dan ramah
                                    lingkungan
                                    untuk mengelola limbah organik. Selain membantu menjaga kebersihan lingkungan,
                                    kompos
                                    memberikan manfaat besar bagi kesuburan tanah dan kelestarian ekosistem. Dengan
                                    mempraktikkan pembuatan kompos, sekolah, rumah tangga, dan komunitas dapat
                                    berkontribusi
                                    dalam menjaga lingkungan yang sehat dan berkelanjutan.
                                </p>
                            </div>
                        </div>

                        {{-- Budidaya Maggot --}}
                        <div class="shadow-lg p-2 mt-5 rounded" id="budidaya-maggot">
                            <h1
                                class="sm:text-base md:text-lg lg:text-xl bg-primary p-1 inline-block rounded text-white font-bold">
                                Budidaya Maggot
                            </h1>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Definisi Budidaya Maggot
                                </h1>
                                <p class="">
                                    <span class="ms-5">Budidaya</span> maggot adalah proses memanfaatkan larva lalat
                                    Black Soldier Fly (BSF) untuk menguraikan sampah organik. Maggot dikenal memiliki
                                    kemampuan mengurai limbah organik secara cepat dan efisien. Proses ini tidak hanya
                                    mengurangi limbah, tetapi juga menghasilkan maggot yang bernilai ekonomis sebagai
                                    pakan ternak.
                                </p>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Tujuan Budidaya Maggot
                                </h1>
                                <p class="">
                                    <span class="ms-5">Budidaya</span> maggot bertujuan untuk mengelola sampah
                                    organik secara efektif, mengurangi polusi lingkungan, dan menyediakan sumber protein
                                    alami untuk ternak, ikan, dan unggas. Proses ini juga berkontribusi dalam
                                    pengurangan emisi gas rumah kaca.
                                </p>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Manfaat Budidaya Maggot
                                </h1>
                                <ul class="ms-5 list-disc">
                                    <li class="">
                                        Pengelolaan Limbah Organik – Maggot mempercepat proses penguraian sampah
                                        organik,
                                        sehingga mengurangi jumlah sampah yang terbuang.
                                    </li>
                                    <li class="">
                                        Sumber Protein Alternatif – Maggot mengandung protein tinggi dan dapat digunakan
                                        sebagai pakan ternak yang lebih ekonomis dan ramah lingkungan.
                                    </li>
                                    <li class="">
                                        Mengurangi Bau Limbah – Proses penguraian yang cepat oleh maggot mencegah
                                        timbulnya
                                        bau busuk dari sampah organik.
                                    </li>
                                    <li class="">
                                        Peluang Ekonomi – Budidaya maggot memiliki potensi ekonomi yang tinggi sebagai
                                        usaha
                                        sampingan atau komersial.
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Cara Budidaya Maggot
                                </h1>
                                <ul class="ms-5 list-disc">
                                    <li class="">
                                        Persiapan Wadah – Siapkan wadah atau kotak khusus untuk budidaya maggot.
                                    </li>
                                    <li class="">
                                        Pengumpulan Sampah Organik – Gunakan sisa makanan, buah-buahan, dan limbah dapur
                                        sebagai media pakan.
                                    </li>
                                    <li class="">
                                        Pemasukan Telur Lalat BSF – Tempatkan telur lalat BSF pada media organik yang
                                        telah
                                        disiapkan.
                                    </li>
                                    <li class="">
                                        Perawatan – Pastikan kelembaban dan ventilasi cukup agar maggot tumbuh dengan
                                        optimal.
                                    </li>
                                    <li class="">
                                        Panen – Maggot siap dipanen dalam 15-20 hari setelah telur menetas.
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Kesimpulan
                                </h1>
                                <p class="">
                                    <span class="ms-5">Pembuatan</span> kompos dan budidaya maggot adalah solusi
                                    praktis
                                    dan ramah lingkungan untuk mengelola limbah organik. Keduanya memberikan manfaat
                                    besar
                                    dalam menjaga lingkungan, meningkatkan kesuburan tanah, dan mendukung ekonomi
                                    sirkular.
                                </p>
                            </div>
                        </div>

                        {{-- Eco Enzyme --}}
                        <div class="shadow-lg p-2 mt-5 rounded" id="eco-enzyme">
                            <h1
                                class="sm:text-base md:text-lg lg:text-xl bg-primary p-1 inline-block rounded text-white font-bold">
                                Eco Enzyme
                            </h1>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Definisi Eco Enzyme
                                </h1>
                                <p class="">
                                    <span class="ms-5">Eco</span> Enzyme adalah cairan hasil fermentasi limbah
                                    organik, seperti sisa buah dan sayuran, dengan gula dan air. Proses fermentasi ini
                                    menghasilkan enzim alami yang bermanfaat untuk berbagai keperluan rumah tangga dan
                                    lingkungan. Eco Enzyme pertama kali dipopulerkan oleh Dr. Rosukon Poompanvong,
                                    seorang peneliti asal Thailand.
                                </p>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Tujuan Pembuatan Eco Enzyme
                                </h1>
                                <p class="">
                                    <span class="ms-5">Tujuan</span> utama dari pembuatan Eco Enzyme adalah untuk
                                    mengurangi limbah organik yang berakhir di tempat pembuangan sampah serta
                                    menciptakan solusi alami yang ramah lingkungan. Dengan membuat Eco Enzyme,
                                    masyarakat dapat berkontribusi dalam menjaga kebersihan dan keseimbangan ekosistem.
                                </p>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Manfaat Eco Enzyme
                                </h1>
                                <ul class="ms-5 list-disc">
                                    <li class="">
                                        Sebagai pembersih alami: Dapat digunakan untuk membersihkan lantai, dapur, kamar
                                        mandi, dan peralatan rumah tangga.
                                    </li>
                                    <li class="">
                                        Penghilang bau: Mengurangi bau tidak sedap di tempat sampah, saluran pembuangan,
                                        dan
                                        kandang hewan.
                                    </li>
                                    <li class="">
                                        Pupuk alami: Digunakan sebagai pupuk organik yang dapat meningkatkan kesuburan
                                        tanah.
                                    </li>
                                    <li class="">
                                        Pembersih udara: Menyerap polusi udara dan memperbaiki kualitas udara di
                                        sekitar.
                                    </li>
                                    <li class="">
                                        Pengusir hama: Dapat digunakan untuk mengusir serangga dan hama secara alami.
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Bahan dan Alat yang Dibutuhkan
                                </h1>
                                <ul class="ms-5 list-disc">
                                    <li class="">
                                        Limbah organik (kulit buah, sayuran, ampas teh, dll.).
                                    </li>
                                    <li class="">
                                        Gula merah/gula aren (sebagai sumber karbohidrat).
                                    </li>
                                    <li class="">
                                        Air
                                    </li>
                                    <li class="">
                                        Wadah plastik dengan tutup (hindari wadah logam atau kaca yang rapat karena
                                        proses
                                        fermentasi menghasilkan gas).
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Cara Membuat Eco Enzyme
                                </h1>
                                <ol class="ms-5 list-decimal">
                                    <li class="">
                                        Persiapan Bahan:
                                    </li>
                                    <ul class="ms-5 list-disc">
                                        <li class="">
                                            Potong kecil limbah organik yang akan digunakan.
                                        </li>
                                        <li class="">
                                            Siapkan gula merah dan air dengan perbandingan 1:3:10 (1 bagian gula, 3
                                            bagian
                                            limbah organik, 10 bagian air).
                                        </li>
                                    </ul>
                                    <li class="">
                                        Proses Fermentasi:
                                    </li>
                                    <ul class="ms-5 list-disc">
                                        <li class="">
                                            Masukkan gula merah ke dalam wadah, tambahkan limbah organik, lalu tuangkan
                                            air
                                            hingga penuh.
                                        </li>
                                        <li class="">
                                            Tutup wadah, tetapi jangan terlalu rapat untuk menghindari ledakan akibat
                                            gas
                                            fermentasi.
                                        </li>
                                        <li class="">
                                            Simpan di tempat yang teduh dan sejuk selama 3 bulan.
                                        </li>
                                    </ul>
                                    <li class="">
                                        Pemantauan dan Perawatan:
                                    </li>
                                    <ul class="ms-5 list-disc">
                                        <li class="">
                                            Aduk campuran setiap dua minggu untuk memastikan fermentasi berjalan lancar.
                                        </li>
                                        <li class="">
                                            Jika muncul lapisan putih di atasnya, itu adalah tanda fermentasi berjalan
                                            baik.
                                        </li>
                                    </ul>
                                    <li class="">
                                        Pemanenan:
                                    </li>
                                    <ul class="ms-5 list-disc">
                                        <li class="">
                                            Setelah 3 bulan, saring cairan dan simpan dalam botol tertutup rapat.
                                        </li>
                                        <li class="">
                                            Sisa ampas bisa digunakan sebagai pupuk kompos.
                                        </li>
                                    </ul>
                                </ol>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Kesimpulan
                                </h1>
                                <p class="">
                                    <span class="ms-5">Eco</span> Enzyme adalah solusi inovatif dan ramah lingkungan
                                    untuk mengolah limbah organik menjadi produk yang bermanfaat. Dengan proses yang
                                    sederhana dan bahan yang mudah didapat, setiap orang dapat membuat dan
                                    memanfaatkannya
                                    dalam kehidupan sehari-hari. Membuat Eco Enzyme tidak hanya membantu mengurangi
                                    sampah,
                                    tetapi juga berkontribusi pada pelestarian lingkungan dan meningkatkan kualitas
                                    hidup
                                    secara berkelanjutan.
                                </p>
                            </div>
                        </div>

                        {{-- Mikroorganisme Lokal --}}
                        <div class="shadow-lg p-2 mt-5 rounded" id="mikroorganisme-lokal">
                            <h1
                                class="sm:text-base md:text-lg lg:text-xl bg-primary p-1 inline-block rounded text-white font-bold">
                                Mikroorganisme Lokal (MOL)
                            </h1>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Definisi Mikroorganisme Lokal
                                </h1>
                                <p class="">
                                    <span class="ms-5">Mikroorganisme</span> Lokal (MOL) adalah cairan hasil
                                    fermentasi yang mengandung mikroorganisme yang berasal dari lingkungan sekitar.
                                    Mikroorganisme ini berfungsi untuk mempercepat proses dekomposisi bahan organik,
                                    memperbaiki struktur tanah, dan meningkatkan kesuburan lahan. MOL biasanya dibuat
                                    dari bahan-bahan alami seperti sisa buah, daun, atau nasi basi.
                                </p>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Tujuan Pembuatan Mikroorganisme Lokal
                                </h1>
                                <p class="">
                                    <span class="ms-5">Tujuan</span> utama pembuatan MOL adalah untuk menyediakan
                                    pupuk organik cair yang ramah lingkungan dan murah, serta mendukung pertanian
                                    berkelanjutan. Selain itu, MOL membantu petani dalam mengurangi ketergantungan
                                    terhadap pupuk dan pestisida kimia.
                                </p>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Manfaat Mikroorganisme Lokal
                                </h1>
                                <ul class="ms-5 list-disc">
                                    <li class="">
                                        Meningkatkan Kesuburan Tanah: Mikroorganisme dalam MOL memperbaiki struktur
                                        tanah
                                        dan membantu proses dekomposisi bahan organik.
                                    </li>
                                    <li class="">
                                        Mempercepat Proses Pengomposan: MOL dapat mempercepat penguraian kompos.
                                    </li>
                                    <li class="">
                                        Mengendalikan Hama dan Penyakit: MOL memiliki mikroorganisme antagonis yang
                                        mampu
                                        menekan perkembangan hama dan penyakit tanaman.
                                    </li>
                                    <li class="">
                                        Meningkatkan Pertumbuhan Tanaman: MOL mengandung nutrisi yang bermanfaat bagi
                                        tanaman.
                                    </li>
                                    <li class="">
                                        Ramah Lingkungan dan Ekonomis: Bahan baku pembuatan MOL mudah ditemukan dan
                                        murah.
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Bahan dan Alat yang Dibutuhkan
                                </h1>
                                <ul class="ms-5 list-disc">
                                    <li class="">
                                        Bahan organik (contoh: nasi basi, buah busuk, daun kering, atau air cucian
                                        beras).
                                    </li>
                                    <li class="">
                                        Gula merah atau molase.
                                    </li>
                                    <li class="">
                                        Air bersih.
                                    </li>
                                    <li class="">
                                        Wadah tertutup (ember atau jerigen).
                                    </li>
                                    <li class="">
                                        Kain saring.
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Cara Membuat Mikroorganisme Lokal
                                </h1>
                                <ol class="ms-5 list-decimal">
                                    <li class="">
                                        Persiapan Bahan: Siapkan 1 kg bahan organik (buah, nasi basi, atau daun) dan 1
                                        liter
                                        air cucian beras.
                                    </li>
                                    <li class="">
                                        Pencampuran: Masukkan bahan organik ke dalam wadah, tambahkan gula merah atau
                                        molase
                                        sebanyak 100 gram, dan tuangkan air cucian beras hingga bahan terendam.
                                    </li>
                                    <li class="">
                                        Fermentasi: Tutup wadah rapat dan biarkan selama 7-14 hari. Aduk setiap 2-3 hari
                                        untuk mempercepat fermentasi.
                                    </li>
                                    <li class="">
                                        Penyaringan: Setelah 2 minggu, saring cairan hasil fermentasi dan simpan dalam
                                        botol
                                        tertutup.
                                    </li>
                                    <li class="">
                                        Penggunaan: MOL dapat dicampur dengan air (1:20) dan disemprotkan ke tanaman
                                        atau
                                        digunakan sebagai dekomposer kompos.
                                    </li>
                                </ol>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Kesimpulan
                                </h1>
                                <p class="">
                                    <span class="ms-5">Mikroorganisme</span> Lokal (MOL) adalah solusi alami dan
                                    berkelanjutan untuk meningkatkan kesuburan tanah dan produktivitas tanaman. Dengan
                                    bahan
                                    yang mudah ditemukan dan proses pembuatan yang sederhana, MOL dapat menjadi
                                    alternatif
                                    pupuk organik yang ekonomis dan ramah lingkungan. Penggunaan MOL secara rutin dapat
                                    membantu petani dalam menjaga keseimbangan ekosistem tanah serta mengurangi
                                    ketergantungan terhadap bahan kimia pertanian.
                                </p>
                            </div>
                        </div>

                        {{-- Air Lindi --}}
                        <div class="shadow-lg p-2 mt-5 rounded" id="air-lindi">
                            <h1
                                class="sm:text-base md:text-lg lg:text-xl bg-primary p-1 inline-block rounded text-white font-bold">
                                Air Lindi
                            </h1>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Definisi Air Lindi
                                </h1>
                                <p class="">
                                    <span class="ms-5">Air</span> lindi adalah cairan yang terbentuk akibat aliran
                                    air melalui sampah atau limbah padat yang ada di tempat pembuangan akhir (TPA)
                                    sampah. Cairan ini mengandung bahan kimia, logam berat, dan mikroorganisme yang bisa
                                    berbahaya jika tidak dikelola dengan benar. Proses terbentuknya air lindi ini
                                    terjadi ketika air hujan atau air perkolasi lainnya meresap ke dalam tumpukan sampah
                                    dan membawa larutan zat-zat terlarut yang ada dalam sampah tersebut.
                                </p>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Tujuan Pengelolaan Air Lindi
                                </h1>
                                <p class="">
                                    <span class="ms-5">Pengelolaan</span> air lindi bertujuan untuk mencegah
                                    pencemaran lingkungan, terutama pada sumber daya air seperti sungai dan tanah. Air
                                    lindi yang tidak dikelola dengan baik dapat mencemari tanah dan air tanah, yang pada
                                    akhirnya bisa merusak ekosistem dan mengancam kesehatan manusia.
                                </p>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Manfaat Pengelolaan Air Lindi
                                </h1>
                                <ul class="ms-5 list-disc">
                                    <li class="">
                                        Melindungi Kualitas Lingkungan: Pengelolaan air lindi yang tepat dapat menjaga
                                        kualitas air tanah dan permukaan, serta mengurangi dampak negatif terhadap
                                        ekosistem.
                                    </li>
                                    <li class="">
                                        Meningkatkan Kesehatan Masyarakat: Dengan mengelola air lindi dengan baik,
                                        potensi
                                        penyebaran penyakit yang dibawa oleh mikroorganisme dalam air lindi dapat
                                        diminimalkan.
                                    </li>
                                    <li class="">
                                        Meminimalkan Polusi: Pengelolaan air lindi yang efektif membantu mengurangi
                                        polusi
                                        yang dapat merusak habitat dan lingkungan hidup.
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Cara Pengelolaan Air Lindi
                                </h1>
                                <ul class="ms-5 list-disc">
                                    <li class="">
                                        Pemantauan dan Pengendalian Produksi Air Lindi: Mengidentifikasi jumlah air
                                        lindi
                                        yang terbentuk dan memantau sifat kimianya secara rutin.
                                    </li>
                                    <li class="">
                                        Pengolahan Air Lindi: Menggunakan berbagai metode untuk mengolah air lindi agar
                                        aman, seperti sistem filtrasi, penggunaan lapisan kedap air, dan pengolahan
                                        biologi.
                                    </li>
                                    <li class="">
                                        Pembuangan dan Pemanfaatan: Setelah pengolahan, air lindi yang telah diolah
                                        dapat
                                        dibuang dengan aman ke saluran pembuangan atau bahkan dimanfaatkan kembali untuk
                                        tujuan tertentu, seperti irigasi (setelah memenuhi standar kualitas).
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Teknologi Pengelolaan Air Lindi
                                </h1>
                                <ul class="ms-5 list-disc">
                                    <li class="">
                                        Sistem Landfill (Timbunan Sampah) yang Terisolasi: Menggunakan liner atau
                                        lapisan
                                        kedap untuk mencegah air lindi meresap ke tanah dan mencemari sumber air.
                                    </li>
                                    <li class="">
                                        Sistem Perkolasi: Sistem pemantauan dan pengelolaan aliran air lindi dengan cara
                                        memisahkan air lindi dari limbah padat dan mengolahnya secara terpisah.
                                    </li>
                                    <li class="">
                                        Sistem Pengolahan Biologis atau Kimia: Penggunaan teknologi biologis atau kimia
                                        untuk mengurangi kandungan bahan berbahaya dalam air lindi.
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Tantangan dalam Pengelolaan Air Lindi
                                </h1>
                                <ul class="ms-5 list-disc">
                                    <li class="">
                                        Sumber Daya Terbatas: TPA yang tidak memiliki fasilitas pengolahan air lindi
                                        yang
                                        memadai.
                                    </li>
                                    <li class="">
                                        Kontaminasi yang Berbahaya: Kandungan bahan kimia berbahaya dalam air lindi yang
                                        memerlukan teknologi canggih untuk penanganannya.
                                    </li>
                                    <li class="">
                                        Perubahan Iklim: Intensitas hujan yang meningkat akibat perubahan iklim dapat
                                        menyebabkan jumlah air lindi yang lebih banyak, sehingga memperburuk kondisi
                                        pengelolaan.
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Kesimpulan
                                </h1>
                                <p class="">
                                    <span class="ms-5">Air</span> lindi merupakan salah satu produk sampingan dari
                                    pembuangan sampah yang harus dikelola dengan hati-hati untuk mencegah dampak negatif
                                    terhadap lingkungan dan kesehatan manusia. Pengelolaan yang efektif dan teknologi
                                    yang
                                    tepat sangat diperlukan untuk menjaga keberlanjutan ekosistem dan melindungi
                                    kualitas
                                    lingkungan hidup.
                                </p>
                            </div>
                        </div>

                        {{-- Eco Derma --}}
                        <div class="shadow-lg p-2 mt-5 rounded" id="eco-derma">
                            <h1
                                class="sm:text-base md:text-lg lg:text-xl bg-primary p-1 inline-block rounded text-white font-bold">
                                Eco Derma
                            </h1>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Definisi Eco Derma
                                </h1>
                                <p class="">
                                    <span class="ms-5">Eco</span> Derma merujuk pada pendekatan perawatan kulit
                                    (dermatologi) yang mengutamakan prinsip ramah lingkungan, berkelanjutan, dan
                                    berbasis pada bahan alami. Produk-produk dalam kategori ini dirancang untuk
                                    mengurangi dampak negatif terhadap lingkungan sambil memberikan manfaat optimal bagi
                                    kesehatan kulit. Eco Derma mengkombinasikan teknologi canggih dengan bahan-bahan
                                    alami yang lebih aman untuk tubuh dan lingkungan.
                                </p>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Tujuan Eco Derma
                                </h1>
                                <ul class="ms-5 list-disc">
                                    <li class="">
                                        Menyediakan produk perawatan kulit yang tidak hanya efektif, tetapi juga ramah
                                        lingkungan.
                                    </li>
                                    <li class="">
                                        Mengurangi penggunaan bahan kimia berbahaya dalam produk perawatan kulit.
                                    </li>
                                    <li class="">
                                        Mendorong keberlanjutan dan tanggung jawab sosial di industri kecantikan.
                                    </li>
                                    <li class="">
                                        Menciptakan kesadaran di kalangan konsumen tentang pentingnya memilih produk
                                        yang
                                        mendukung keberlanjutan ekosistem.
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Manfaat Eco Derma
                                </h1>
                                <ul class="ms-5 list-disc">
                                    <li class="">
                                        Keamanan Kulit: Produk Eco Derma menggunakan bahan alami yang lebih lembut dan
                                        aman
                                        bagi kulit, mengurangi risiko iritasi dan alergi.
                                    </li>
                                    <li class="">
                                        Ramah Lingkungan: Meminimalkan jejak karbon dan sampah plastik, berfokus pada
                                        kemasan ramah lingkungan dan penggunaan bahan-bahan yang dapat diperbarui.
                                    </li>
                                    <li class="">
                                        Keberlanjutan: Membantu mendukung praktik pertanian dan produksi yang lebih
                                        berkelanjutan, yang lebih ramah terhadap lingkungan.
                                    </li>
                                    <li class="">
                                        Perawatan Kulit yang Efektif: Meskipun menggunakan bahan alami, produk-produk
                                        ini
                                        tetap menawarkan manfaat yang nyata dalam merawat dan memperbaiki kondisi kulit.
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Cara Kerja Eco Derma
                                </h1>
                                <p class="">
                                    <span class="ms-5">Eco</span> Derma bekerja dengan menggabungkan teknologi dan
                                    bahan
                                    alami dalam pengembangan produk perawatan kulit. Beberapa prinsip dasar cara
                                    kerjanya
                                    adalah:
                                </p>
                                <ul class="ms-5 list-disc">
                                    <li class="">
                                        Penggunaan Bahan Organik dan Alami: Bahan seperti minyak esensial, ekstrak
                                        tanaman,
                                        dan bahan nabati lainnya dipilih untuk memberikan perawatan yang lembut dan
                                        efektif.
                                    </li>
                                    <li class="">
                                        Pengurangan Bahan Kimia: Fokus pada pengurangan atau penghindaran bahan kimia
                                        sintetis yang berpotensi berbahaya bagi kulit dan lingkungan.
                                    </li>
                                    <li class="">
                                        Kemasan Ramah Lingkungan: Produk Eco Derma sering kali dikemas dalam wadah yang
                                        dapat didaur ulang atau terbuat dari bahan yang lebih ramah lingkungan seperti
                                        kaca
                                        atau plastik daur ulang.
                                    </li>
                                    <li class="">
                                        Pendekatan Holistik: Pendekatan yang lebih holistik dalam perawatan kulit, yang
                                        tidak hanya memperhatikan kondisi kulit secara langsung, tetapi juga dampaknya
                                        terhadap lingkungan.
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Produk dalam Eco Derma
                                </h1>
                                <p class="">
                                    <span class="ms-5">Produk</span> yang termasuk dalam kategori Eco Derma dapat
                                    mencakup:
                                </p>
                                <ul class="ms-5 list-disc">
                                    <li class="">
                                        Pembersih wajah dan toner: Menggunakan bahan alami seperti aloe vera atau teh
                                        hijau
                                        untuk membersihkan dan menenangkan kulit.
                                    </li>
                                    <li class="">
                                        Serum dan pelembab: Produk yang mengandung bahan seperti hyaluronic acid yang
                                        diekstraksi dari sumber alami.
                                    </li>
                                    <li class="">
                                        Perawatan khusus: Seperti masker wajah atau krim anti-aging yang mengandung
                                        bahan-bahan alami yang terbukti efektif.
                                    </li>
                                    <li class="">
                                        Sunscreen dan pelindung kulit: Produk dengan bahan aktif seperti zinc oxide atau
                                        titanium dioxide yang lebih aman bagi lingkungan, terutama di ekosistem laut.
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Tantangan dalam Implementasi Eco Derma
                                </h1>
                                <ul class="ms-5 list-disc">
                                    <li class="">
                                        Biaya Produksi: Penggunaan bahan alami dan ramah lingkungan sering kali lebih
                                        mahal
                                        dibandingkan bahan sintetik.
                                    </li>
                                    <li class="">
                                        Keterbatasan Ketersediaan Bahan: Beberapa bahan alami yang ideal untuk produk
                                        perawatan kulit sulit ditemukan atau memerlukan sumber daya yang besar untuk
                                        diproduksi secara berkelanjutan.
                                    </li>
                                    <li class="">
                                        Edukasi Konsumen: Banyak konsumen yang belum sepenuhnya memahami manfaat dan
                                        pentingnya memilih produk ramah lingkungan.
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Kesimpulan
                                </h1>
                                <p class="">
                                    <span class="ms-5">Eco</span> Derma merupakan inovasi dalam industri perawatan
                                    kulit
                                    yang menggabungkan kecanggihan teknologi dengan kesadaran akan keberlanjutan dan
                                    ramah
                                    lingkungan. Dengan mengutamakan bahan alami dan proses produksi yang lebih
                                    bertanggung
                                    jawab, Eco Derma memberikan solusi bagi mereka yang peduli dengan kesehatan kulit
                                    sekaligus keberlanjutan bumi.
                                </p>
                            </div>
                        </div>

                        {{-- Dekomposter --}}
                        <div class="shadow-lg p-2 mt-5 rounded" id="dekomposter">
                            <h1
                                class="sm:text-base md:text-lg lg:text-xl bg-primary p-1 inline-block rounded text-white font-bold">
                                Dekomposter
                            </h1>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Definisi Dekomposter
                                </h1>
                                <p class="">
                                    <span class="ms-5">Dekomposter</span> adalah alat atau wadah yang digunakan untuk
                                    mempercepat proses dekomposisi bahan organik, seperti sisa makanan, dedaunan, dan
                                    limbah organik lainnya, menjadi kompos yang kaya nutrisi. Dekomposter memanfaatkan
                                    aktivitas mikroorganisme, seperti bakteri dan jamur, untuk menguraikan bahan organik
                                    menjadi humus.
                                </p>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Tujuan Dekomposter
                                </h1>
                                <p class="">
                                    <span class="ms-5">Tujuan</span> utama dekomposter adalah mengurangi limbah
                                    organik
                                    yang dibuang ke tempat pembuangan akhir (TPA) serta menghasilkan kompos yang
                                    bermanfaat
                                    untuk meningkatkan kesuburan tanah. Dengan menggunakan dekomposter, masyarakat dapat
                                    mendaur ulang limbah rumah tangga secara mandiri dan berkontribusi terhadap
                                    pengelolaan
                                    lingkungan yang lebih baik.
                                </p>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Manfaat Dekomposter
                                </h1>
                                <ul class="ms-5 list-disc">
                                    <li class="">
                                        Pengurangan Limbah: Mengurangi volume limbah organik yang dibuang ke TPA.
                                    </li>
                                    <li class="">
                                        Produksi Kompos: Menghasilkan kompos berkualitas yang dapat digunakan sebagai
                                        pupuk
                                        alami.
                                    </li>
                                    <li class="">
                                        Penghematan Biaya: Mengurangi kebutuhan membeli pupuk kimia.
                                    </li>
                                    <li class="">
                                        Perbaikan Kualitas Tanah: Kompos yang dihasilkan dapat meningkatkan struktur dan
                                        kesuburan tanah.
                                    </li>
                                    <li class="">
                                        Ramah Lingkungan: Mengurangi emisi gas rumah kaca dari limbah organik yang
                                        membusuk
                                        di TPA.
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Jenis Dekomposter
                                </h1>
                                <ul class="ms-5 list-disc">
                                    <li class="">
                                        Dekomposter Rumah Tangga: Skala kecil, cocok untuk sisa dapur dan kebun.
                                    </li>
                                    <li class="">
                                        Dekomposter Skala Komunal: Digunakan oleh komunitas atau lingkungan RT/RW.
                                    </li>
                                    <li class="">
                                        Dekomposter Skala Industri: Skala besar untuk pengelolaan limbah organik dalam
                                        jumlah banyak.
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Cara Menggunakan Dekomposter
                                </h1>
                                <ul class="ms-5 list-disc">
                                    <li class="">
                                        Persiapan: Siapkan dekomposter dan letakkan di tempat yang teduh dan terhindar
                                        dari
                                        hujan langsung.
                                    </li>
                                    <li class="">
                                        Pengisian Bahan: Masukkan limbah organik, seperti sisa sayur, buah, dan daun
                                        kering.
                                        Hindari limbah non-organik dan limbah berlemak.
                                    </li>
                                    <li class="">
                                        Penambahan Aktivator: Tambahkan bioaktivator atau larutan EM4 (Effective
                                        Microorganisms) untuk mempercepat dekomposisi.
                                    </li>
                                    <li class="">
                                        Pengadukan: Aduk secara berkala untuk memastikan sirkulasi udara yang baik.
                                    </li>
                                    <li class="">
                                        Pemantauan: Pastikan tidak ada bau busuk yang berlebihan. Jika tercium bau tidak
                                        sedap, tambahkan daun kering atau serbuk gergaji.
                                    </li>
                                    <li class="">
                                        Panen Kompos: Dalam 4-8 minggu, kompos siap dipanen dan digunakan sebagai pupuk.
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Kesimpulan
                                </h1>
                                <p class="">
                                    <span class="ms-5">Dekomposter</span> adalah solusi praktis dan ramah lingkungan
                                    untuk mengelola limbah organik serta menghasilkan kompos berkualitas. Dengan
                                    memanfaatkan dekomposter, masyarakat tidak hanya mengurangi beban TPA tetapi juga
                                    memperoleh manfaat berupa pupuk alami yang dapat digunakan untuk meningkatkan
                                    produktivitas tanaman.
                                </p>
                            </div>
                        </div>
                    </section>

                    <!-- Program Kerja => Pengolahan Sampah Anorganik -->
                    <section class="pengolahan-sampah-anorganik py-5" id="pengolahan-sampah-anorganik">
                        <div class="bg-primary p-2 text-center rounded">
                            <h1 class="md:text-xl lg:text-2xl text-white font-bold">
                                PENGOLAHAN SAMPAH ANORGANIK
                            </h1>
                        </div>

                        {{-- Bank Sampah --}}
                        <div class="shadow-lg p-2 mt-5 rounded" id="bank-sampah">
                            <h1
                                class="sm:text-base md:text-lg lg:text-xl bg-primary p-1 inline-block rounded text-white font-bold">
                                Bank Sampah
                            </h1>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Definisi Bank Sampah
                                </h1>
                                <p class="">
                                    <span class="ms-5">Bank</span> Sampah adalah sistem pengelolaan sampah berbasis
                                    masyarakat yang memungkinkan masyarakat menabung sampah yang memiliki nilai ekonomi.
                                    Sampah yang dikumpulkan akan dipilah, didaur ulang, atau dijual ke pihak ketiga
                                    sebagai bahan baku. Istilah "bank" digunakan karena konsep ini mirip dengan
                                    perbankan, di mana nasabah menyetor sampah dan memperoleh imbalan berupa uang atau
                                    barang.
                                </p>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Tujuan Bank Sampah
                                </h1>
                                <ul class="ms-5 list-disc">
                                    <li class="">
                                        Mengurangi volume sampah yang berakhir di tempat pembuangan akhir (TPA).
                                    </li>
                                    <li class="">
                                        Meningkatkan kesadaran masyarakat terhadap pentingnya pengelolaan sampah.
                                    </li>
                                    <li class="">
                                        Memberikan manfaat ekonomi bagi masyarakat dari hasil penjualan sampah.
                                    </li>
                                    <li class="">
                                        Mendorong daur ulang dan pemanfaatan kembali barang bekas.
                                    </li>
                                    <li class="">
                                        Membantu menciptakan lingkungan yang bersih dan sehat.
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Manfaat Bank Sampah
                                </h1>
                                <ul class="ms-5 list-disc">
                                    <li class="">
                                        Lingkungan: Mengurangi pencemaran dan memperpanjang umur TPA.
                                    </li>
                                    <li class="">
                                        Ekonomi: Masyarakat mendapatkan tambahan penghasilan dari hasil pengelolaan
                                        sampah.
                                    </li>
                                    <li class="">
                                        Sosial: Menciptakan kebersamaan dan kepedulian terhadap lingkungan di tingkat
                                        komunitas.
                                    </li>
                                    <li class="">
                                        Edukasi: Memberikan pemahaman praktis mengenai pentingnya pengelolaan sampah dan
                                        daur ulang.
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Cara Kerja Bank Sampah
                                </h1>
                                <ul class="ms-5 list-disc">
                                    <li class="">
                                        Pendaftaran Nasabah: Masyarakat mendaftar sebagai nasabah bank sampah.
                                    </li>
                                    <li class="">
                                        Penyetoran Sampah: Nasabah membawa sampah yang telah dipilah ke bank sampah.
                                    </li>
                                    <li class="">
                                        Penimbangan: Sampah ditimbang dan dicatat dalam buku tabungan nasabah.
                                    </li>
                                    <li class="">
                                        Penjualan Sampah: Sampah yang terkumpul dijual ke pengepul atau pabrik daur
                                        ulang.
                                    </li>
                                    <li class="">
                                        Pemberian Imbalan: Hasil penjualan diberikan kepada nasabah dalam bentuk uang
                                        tunai
                                        atau ditukarkan dengan barang.
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Jenis Sampah yang Diterima
                                </h1>
                                <ul class="ms-5 list-disc">
                                    <li class="">
                                        Sampah Anorganik: Plastik, kertas, kaca, logam, dan elektronik bekas.
                                    </li>
                                    <li class="">
                                        Sampah Organik: Sisa makanan dan dedaunan (terkadang diolah menjadi kompos).
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Tantangan dalam Pengelolaan Bank Sampah
                                </h1>
                                <ul class="ms-5 list-disc">
                                    <li class="">
                                        Kesadaran masyarakat yang rendah terhadap pemilahan sampah.
                                    </li>
                                    <li class="">
                                        Keterbatasan fasilitas dan SDM dalam pengelolaan bank sampah.
                                    </li>
                                    <li class="">
                                        Pasar daur ulang yang belum stabil.
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Kesimpulan
                                </h1>
                                <p class="">
                                    <span class="ms-5">Bank</span> Sampah adalah solusi inovatif dalam pengelolaan
                                    sampah
                                    yang melibatkan masyarakat secara langsung. Dengan meningkatkan partisipasi dan
                                    kesadaran masyarakat, bank sampah dapat memberikan manfaat jangka panjang bagi
                                    lingkungan dan ekonomi lokal. Inisiatif ini tidak hanya membantu mengurangi sampah
                                    tetapi juga mendorong kemandirian ekonomi dan kesejahteraan masyarakat secara
                                    keseluruhan.
                                </p>
                            </div>
                        </div>
                    </section>

                    <!-- Program Kerja => Konservasi Air -->
                    <section class="konservasi-air py-5" id="konservasi-air">
                        <div class="bg-primary p-2 text-center rounded">
                            <h1 class="md:text-xl lg:text-2xl text-white font-bold">KONSERVASI AIR</h1>
                        </div>

                        {{-- Limbah Air Wudhu --}}
                        <div class="shadow-lg p-2 mt-5 rounded" id="limbah-air-wudhu">
                            <h1
                                class="sm:text-base md:text-lg lg:text-xl bg-primary p-1 inline-block rounded text-white font-bold">
                                Limbah Air Wudhu
                            </h1>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Definisi Limbah Air Wudhu
                                </h1>
                                <p class="">
                                    <span class="ms-5">Limbah</span> air wudhu adalah air sisa yang digunakan dalam
                                    proses berwudhu, yaitu ritual penyucian diri sebelum melaksanakan ibadah shalat
                                    dalam agama Islam. Air ini umumnya bersih dan belum tercampur dengan kotoran atau
                                    zat berbahaya karena hanya digunakan untuk membasuh anggota tubuh seperti wajah,
                                    tangan, kepala, dan kaki.
                                </p>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Tujuan Pengelolaan Limbah Air Wudhu
                                </h1>
                                <p class="">
                                    <span class="ms-5">Pengelolaan</span> limbah air wudhu bertujuan untuk
                                    memanfaatkan
                                    air sisa wudhu agar tidak terbuang percuma. Dalam konteks keberlanjutan lingkungan,
                                    pengelolaan ini berfokus pada upaya konservasi air dan menjaga ketersediaan sumber
                                    daya
                                    air yang semakin terbatas.
                                </p>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Manfaat Pengelolaan Limbah Air Wudhu
                                </h1>
                                <ul class="ms-5 list-disc">
                                    <li class="">
                                        Penghijauan: Air sisa wudhu dapat digunakan untuk menyiram tanaman di sekitar
                                        masjid
                                        atau lingkungan rumah.
                                    </li>
                                    <li class="">
                                        Sosialisasi Kesadaran Lingkungan: Mengedukasi masyarakat tentang pentingnya
                                        menjaga
                                        dan memanfaatkan air secara bijaksana.
                                    </li>
                                    <li class="">
                                        Mendukung Sanitasi dan Kebersihan: Air wudhu yang tersalurkan dengan baik dapat
                                        digunakan untuk membersihkan halaman, kamar mandi, atau fasilitas umum lainnya.
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Cara Pengelolaan dan Pemanfaatan Limbah Air Wudhu
                                </h1>
                                <ol class="ms-5 list-decimal">
                                    <li class="">Sistem Resapan Tanah</li>
                                    <ul class="ms-5 list-disc">
                                        <li class="">
                                            Membuat lubang resapan atau biopori di sekitar area tempat wudhu untuk
                                            mengarahkan air sisa ke dalam tanah dan meningkatkan cadangan air tanah.
                                        </li>
                                    </ul>
                                    <li class="">Kolam Penampungan</li>
                                    <ul class="ms-5 list-disc">
                                        <li class="">
                                            Menyediakan kolam atau bak penampungan air sisa wudhu untuk digunakan
                                            kembali
                                            dalam menyiram tanaman atau keperluan sanitasi lainnya.
                                        </li>
                                    </ul>
                                    <li class="">Irigasi Taman dan Kebun</li>
                                    <ul class="ms-5 list-disc">
                                        <li class="">
                                            Salurkan air sisa wudhu ke area taman masjid atau kebun melalui pipa atau
                                            saluran khusus.
                                        </li>
                                    </ul>
                                    <li class="">Sistem Penyaringan Sederhana</li>
                                    <ul class="ms-5 list-disc">
                                        <li class="">
                                            Membuat sistem penyaringan sederhana yang memisahkan partikel atau kotoran
                                            sehingga air yang keluar lebih bersih dan layak digunakan untuk kebutuhan
                                            lain.
                                        </li>
                                    </ul>
                                </ol>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Kesimpulan
                                </h1>
                                <p class="">
                                    <span class="ms-5">Pengelolaan</span> limbah air wudhu adalah langkah kecil namun
                                    memiliki dampak besar dalam upaya pelestarian lingkungan dan konservasi air. Dengan
                                    menerapkan berbagai metode sederhana, masyarakat dapat berperan aktif dalam menjaga
                                    keseimbangan ekosistem dan mengurangi pemborosan sumber daya air. Hal ini sejalan
                                    dengan
                                    prinsip-prinsip ajaran Islam yang menekankan pentingnya menjaga kebersihan dan
                                    kelestarian alam.
                                </p>
                            </div>
                        </div>
                    </section>

                    <!-- Program Kerja => Konservasi Energi -->
                    <section class="konservasi-energi py-5" id="konservasi-energi">
                        <div class="bg-primary p-2 text-center rounded">
                            <h1 class="md:text-xl lg:text-2xl text-white font-bold">KONSERVASI ENERGI</h1>
                        </div>

                        {{-- Hemat Listrik --}}
                        <div class="shadow-lg p-2 mt-5 rounded" id="hemat-listrik">
                            <h1
                                class="sm:text-base md:text-lg lg:text-xl bg-primary p-1 inline-block rounded text-white font-bold">
                                Hemat Listrik
                            </h1>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Definisi Hemat Listrik
                                </h1>
                                <p class="">
                                    <span class="ms-5">Hemat</span> listrik adalah upaya untuk menggunakan energi
                                    listrik secara efisien dan bijaksana guna mengurangi pemborosan energi. Ini mencakup
                                    tindakan-tindakan yang bertujuan untuk memaksimalkan penggunaan listrik sesuai
                                    kebutuhan tanpa mengurangi kenyamanan atau produktivitas.
                                </p>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Tujuan Hemat Listrik
                                </h1>
                                <ul class="ms-5 list-disc">
                                    <li class="">
                                        Mengurangi konsumsi energi secara keseluruhan.
                                    </li>
                                    <li class="">
                                        Menjaga ketersediaan sumber daya listrik dalam jangka panjang.
                                    </li>
                                    <li class="">
                                        Mengurangi biaya pengeluaran untuk pembayaran listrik.
                                    </li>
                                    <li class="">
                                        Mendukung upaya pelestarian lingkungan dengan menurunkan emisi gas rumah kaca
                                        dari
                                        pembangkit listrik.
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Manfaat Hemat Listrik
                                </h1>
                                <ul class="ms-5 list-disc">
                                    <li class="">
                                        Penghematan Biaya: Tagihan listrik bulanan menjadi lebih rendah.
                                    </li>
                                    <li class="">
                                        Lingkungan yang Lebih Bersih: Mengurangi emisi karbon dan polusi dari pembangkit
                                        listrik.
                                    </li>
                                    <li class="">
                                        Ketahanan Energi: Mengurangi risiko krisis listrik dan mendukung stabilitas
                                        jaringan
                                        listrik.
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Cara Melakukan Hemat Listrik
                                </h1>
                                <ul class="ms-5 list-disc">
                                    <li class="">
                                        Gunakan Peralatan Hemat Energi: Pilih peralatan listrik dengan label hemat
                                        energi
                                        atau yang memiliki standar efisiensi tinggi.
                                    </li>
                                    <li class="">
                                        Matikan Peralatan yang Tidak Digunakan: Cabut perangkat listrik dari stopkontak
                                        jika
                                        tidak digunakan untuk mencegah penggunaan daya standby.
                                    </li>
                                    <li class="">
                                        Gunakan Lampu LED: Lampu LED lebih hemat energi dan memiliki umur yang lebih
                                        panjang
                                        dibandingkan lampu pijar atau neon.
                                    </li>
                                    <li class="">
                                        Atur Suhu AC Secara Bijak: Gunakan suhu yang sesuai, misalnya 24-26 derajat
                                        Celsius,
                                        agar tidak boros listrik.
                                    </li>
                                    <li class="">
                                        Optimalkan Cahaya Alami: Manfaatkan sinar matahari di siang hari untuk
                                        mengurangi
                                        penggunaan lampu.
                                    </li>
                                    <li class="">
                                        Lakukan Perawatan Rutin: Periksa dan rawat peralatan listrik secara berkala agar
                                        tetap dalam kondisi optimal dan efisien.
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Kesimpulan
                                </h1>
                                <p class="">
                                    <span class="ms-5">Hemat</span> listrik bukan hanya tanggung jawab individu,
                                    tetapi
                                    juga tanggung jawab kolektif seluruh masyarakat. Dengan menerapkan kebiasaan hemat
                                    listrik, kita tidak hanya menghemat biaya, tetapi juga berkontribusi dalam menjaga
                                    lingkungan dan ketahanan energi untuk generasi mendatang. Setiap tindakan kecil yang
                                    kita lakukan hari ini dapat membawa dampak besar di masa depan.
                                </p>
                            </div>
                        </div>
                    </section>

                    <!-- Program Kerja => Sanitasi & Drainase -->
                    <section class="sanitasi-dan-drainase py-5" id="sanitasi-dan-drainase">
                        <div class="bg-primary p-2 text-center rounded">
                            <h1 class="md:text-xl lg:text-2xl text-white font-bold">SANITASI & DRAINASE</h1>
                        </div>

                        {{-- Sanitasi & Drainase --}}
                        <div class="shadow-lg p-2 mt-5 rounded" id="sanitasi-dan-drainase">
                            <h1
                                class="sm:text-base md:text-lg lg:text-xl bg-primary p-1 inline-block rounded text-white font-bold">
                                Sanitasi & Drainase
                            </h1>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Definisi Sanitasi & Drainase
                                </h1>
                                <p class="">
                                    <span class="ms-5 font-semibold">Sanitasi</span> merujuk pada upaya dan sistem
                                    untuk
                                    menjaga kebersihan lingkungan, termasuk penyediaan fasilitas untuk pembuangan
                                    limbah, pengelolaan air bersih, dan pencegahan penyakit. Sanitasi meliputi berbagai
                                    aspek seperti pengelolaan limbah domestik, sistem septik, dan kebersihan pribadi.
                                </p>
                                <p class="">
                                    <span class="ms-5 font-semibold">Drainase</span> adalah sistem atau proses
                                    pengaliran
                                    air, baik air hujan maupun air limbah, dari suatu area untuk mencegah terjadinya
                                    genangan. Drainase berfungsi untuk mengatur aliran air agar tidak menyebabkan banjir
                                    atau erosi tanah.
                                </p>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Tujuan Sanitasi & Drainase
                                </h1>
                                <ol class="ms-5 list-decimal">
                                    <li class="font-semibold">Sanitasi</li>
                                    <ul class="ms-5 list-disc">
                                        <li class="">
                                            Mencegah penyebaran penyakit.
                                        </li>
                                        <li class="">
                                            Meningkatkan kualitas hidup dan kesehatan masyarakat.
                                        </li>
                                        <li class="">
                                            Menjaga kebersihan lingkungan.
                                        </li>
                                    </ul>
                                    <li class="font-semibold">Drainase</li>
                                    <ul class="ms-5 list-disc">
                                        <li class="">
                                            Mencegah banjir.
                                        </li>
                                        <li class="">
                                            Mengurangi erosi tanah.
                                        </li>
                                        <li class="">
                                            Melindungi infrastruktur dari kerusakan akibat air.
                                        </li>
                                    </ul>
                                </ol>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Manfaat Sanitasi & Drainase
                                </h1>
                                <ol class="ms-5 list-decimal">
                                    <li class="font-semibold">Sanitasi</li>
                                    <ul class="ms-5 list-disc">
                                        <li class="">
                                            Mengurangi risiko penyakit seperti diare dan infeksi saluran pernapasan.
                                        </li>
                                        <li class="">
                                            Menjaga ekosistem dan kualitas air.
                                        </li>
                                        <li class="">
                                            Meningkatkan produktivitas masyarakat dengan mengurangi waktu yang
                                            dihabiskan
                                            untuk mencari air bersih.
                                        </li>
                                    </ul>
                                    <li class="font-semibold">Drainase</li>
                                    <ul class="ms-5 list-disc">
                                        <li class="">
                                            Mengurangi risiko bencana alam seperti banjir.
                                        </li>
                                        <li class="">
                                            Menjaga stabilitas tanah dan bangunan.
                                        </li>
                                        <li class="">
                                            Memastikan kelancaran aktivitas sosial dan ekonomi.
                                        </li>
                                    </ul>
                                </ol>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Cara dan Sistem yang Digunakan Sanitasi & Drainase
                                </h1>
                                <ol class="ms-5 list-decimal">
                                    <li class="font-semibold">Sanitasi</li>
                                    <ul class="ms-5 list-disc">
                                        <li class="">
                                            Pembangunan jamban sehat.
                                        </li>
                                        <li class="">
                                            Pengolahan air limbah domestik.
                                        </li>
                                        <li class="">
                                            Penyediaan tempat sampah dan fasilitas daur ulang.
                                        </li>
                                        <li class="">
                                            Kampanye kesadaran kebersihan.
                                        </li>
                                    </ul>
                                    <li class="font-semibold">Drainase</li>
                                    <ul class="ms-5 list-disc">
                                        <li class="">
                                            Pembangunan saluran air dan gorong-gorong.
                                        </li>
                                        <li class="">
                                            Pembuatan sumur resapan.
                                        </li>
                                        <li class="">
                                            Perbaikan dan pemeliharaan saluran air secara berkala.
                                        </li>
                                    </ul>
                                </ol>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Tantangan dan Solusi dari Sanitasi & Drainase
                                </h1>
                                <ol class="ms-5 list-disc">
                                    <li class="font-semibold">Tantangan:</li>
                                    <ul class="ms-5 list-disc">
                                        <li class="">
                                            Minimnya kesadaran masyarakat.
                                        </li>
                                        <li class="">
                                            Infrastruktur yang tidak memadai.
                                        </li>
                                        <li class="">
                                            Urbanisasi yang pesat.
                                        </li>
                                    </ul>
                                    <li class="font-semibold">Solusi:</li>
                                    <ul class="ms-5 list-disc">
                                        <li class="">
                                            Edukasi dan kampanye publik.
                                        </li>
                                        <li class="">
                                            Investasi dalam pembangunan infrastruktur.
                                        </li>
                                        <li class="">
                                            Kolaborasi antara pemerintah, masyarakat, dan sektor swasta.
                                        </li>
                                    </ul>
                                </ol>
                            </div>
                            <div class="mt-2">
                                <h1
                                    class="sm:text-base md:text-lg lg:text-xl underline underline-offset-1 p-1 inline-block rounded font-semibold">
                                    Kesimpulan
                                </h1>
                                <p class="">
                                    <span class="ms-5">Sanitasi</span> dan drainase memiliki peran vital dalam
                                    menjaga kesehatan masyarakat dan lingkungan. Dengan sistem sanitasi dan drainase
                                    yang baik, berbagai masalah kesehatan dan bencana alam dapat diminimalisir, sehingga
                                    kualitas hidup masyarakat secara keseluruhan dapat meningkat. Oleh karena itu,
                                    perhatian terhadap pengelolaan sanitasi dan drainase harus terus ditingkatkan
                                    melalui berbagai upaya dan kolaborasi.
                                </p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

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
