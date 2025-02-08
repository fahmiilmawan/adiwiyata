<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kader | Adiwiyata</title>
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
            font-family: 'Poppins', Gill Sans MT, Calibri, Trebuchet MS, sans-serif;
        }

        /* Hero Section */
        .slide {
            background-image: url("{{ asset('image/slider-1.jpg') }}");
            background-size: cover;
            background-position: center;
        }

        /* Scroll Behavior */
        #tanaman-dan-pembibitan,
        #kompos-dan-bank-sampah,
        #sanitasi-dan-kamar-mandi,
        #taman-dan-hutan-sekolah,
        #kreasi-daur-ulang-sampah {
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
            <div class="absolute w-full h-full flex flex-col items-center justify-center z-10 px-2 lg:px-4">
                <div class="container mx-auto md:mt-20">
                    <div class="px-3 lg:px-5 lg:flex justify-items-center items-center">

                        <div class="text-center lg:text-left lg:w-[50rem]">

                            <!-- Logo -->
                            <img src="{{ asset('image/Adiwiyata.png') }}" alt=""
                                class="sm:w-[90%] md:w-[80%] lg:w-[50%] justify-self-center lg:justify-self-start" />

                            <!-- Text -->
                            <div class="text-white mt-2">
                                <h1 class="sm:text-2xl md:text-4xl lg:text-5xl font-semibold">
                                    KADER | ADIWIYATA
                                </h1>
                                <h1 class="sm:text-lg md:text-3xl lg:text-4xl font-semibold">
                                    SMK TARUNA HARAPAN 1 CIPATAT
                                </h1>
                            </div>

                        </div>


                        <div class="hidden md:flex">
                            <div class="lg:flex justify-items-center items-center gap-2 mt-5 lg:mt-0">
                                <div class="flex lg:block gap-2 lg:gap-0">
                                    <a href="" class="flex bg-white p-1 rounded">
                                        <div class="relative overflow-hidden group rounded">
                                            <img src="{{ asset('image/pokja-1.jpg') }}" alt=""
                                                class="w-full h-32 lg:h-40 object-cover rounded">
                                            <div
                                                class="absolute transform translate-y-full group-hover:translate-y-0 bg-white bottom-0 w-screen transition-all ease-in-out duration-500 p-1">
                                                <h6 class="text-xs">Kader 1</h6>
                                                <h1 class="text-xs lg:text-base font-semibold">Tanaman & Pembibitan</h1>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="flex bg-white p-1 lg:my-2 rounded">
                                        <div class="relative overflow-hidden group rounded">
                                            <img src="{{ asset('image/pokja-2.jpg') }}" alt=""
                                                class="w-full h-32 lg:h-40 object-cover rounded">
                                            <div
                                                class="absolute transform translate-y-full group-hover:translate-y-0 bg-white bottom-0 w-screen transition-all ease-in-out duration-500 p-1">
                                                <h6 class="text-xs">Kader 2</h6>
                                                <h1 class="text-xs lg:text-base font-semibold">Kompos & Bank Sampah</h1>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="flex bg-white p-1 rounded">
                                        <div class="relative overflow-hidden group rounded">
                                            <img src="{{ asset('image/pokja-3.jpg') }}" alt=""
                                                class="w-full h-32 lg:h-40 object-cover rounded">
                                            <div
                                                class="absolute transform translate-y-full group-hover:translate-y-0 bg-white bottom-0 w-screen transition-all ease-in-out duration-500 p-1">
                                                <h6 class="text-xs">Kader 3</h6>
                                                <h1 class="text-xs lg:text-base font-semibold">Sanitasi & Kamar Mandi
                                                </h1>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="flex lg:block gap-2 lg:gap-0 mt-2 lg:mt-0">
                                    <a href="" class="flex bg-white p-1 lg:mb-2 rounded">
                                        <div class="relative overflow-hidden group rounded">
                                            <img src="{{ asset('image/pokja-4.jpg') }}" alt=""
                                                class="w-full h-32 lg:h-40 object-cover rounded">
                                            <div
                                                class="absolute transform translate-y-full group-hover:translate-y-0 bg-white bottom-0 w-screen transition-all ease-in-out duration-500 p-1">
                                                <h6 class="text-xs">Kader 4</h6>
                                                <h1 class="text-xs lg:text-base font-semibold">Taman & Hutan Sekolah
                                                </h1>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="flex bg-white p-1 rounded">
                                        <div class="relative overflow-hidden group rounded">
                                            <img src="{{ asset('image/pokja-5.jpg') }}" alt=""
                                                class="w-full h-32 lg:h-40 object-cover rounded">
                                            <div
                                                class="absolute transform translate-y-full group-hover:translate-y-0 bg-white bottom-0 w-screen transition-all ease-in-out duration-500 p-1">
                                                <h6 class="text-xs">Kader 5</h6>
                                                <h1 class="text-xs lg:text-base font-semibold">Kreasi Daur Ulang Sampah
                                                </h1>
                                            </div>
                                        </div>
                                    </a>
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

    <div class="bg-quaternary pt-4">
        <div class="p-2 lg:p-4">
            <div class="container mx-auto">
                <div class="p-3 lg:p-5">

                    <!-- Tanaman & Pembibitan -->
                    <section class="shadow-lg p-3 rounded" id="tanaman-dan-pembibitan">
                        <div class="">
                            <div class="flex gap-3 items-center">
                                <i class="fas fa-seedling text-xl sm:text-2xl md:text-3xl lg:text-4xl text-primary"></i>
                                <h1 class="text-lg sm:text-xl md:text-2xl font-semibold">
                                    Tanaman & Pembibitan
                                </h1>
                            </div>
                            <div class="">
                                <div class="bg-primary h-1 mt-2"></div>
                            </div>
                        </div>
                        <div class="mt-2">
                            <p class="">
                                <span class="ms-5">Kader</span> di bidang Tanaman dan Pembibitan dalam program
                                Adiwiyata
                                memiliki fokus penting dalam mengelola tanaman konsumsi, tanaman obat, dan tanaman yang
                                dibudidayakan secara aquaponik. Tugas ini bertujuan untuk mendukung keberlanjutan
                                lingkungan
                                sekolah sekaligus memberikan manfaat praktis bagi komunitas sekolah.
                            </p>
                            <div class="">
                                <ol class="list-decimal ms-5">
                                    <li class="md:text-lg font-semibold">Fokus dan Tugas Utama</li>
                                    <ul class="ms-5 list-disc">
                                        <li class="">
                                            Tanaman Konsumsi: Mengelola tanaman yang menghasilkan bahan pangan seperti
                                            sayuran, buah-buahan, atau rempah-rempah. Contohnya adalah bayam, cabai, dan
                                            tomat.
                                        </li>
                                        <li class="">
                                            Tanaman Obat: Membudidayakan tanaman herbal seperti jahe, kunyit, dan sereh,
                                            yang bermanfaat untuk kesehatan dan pengobatan tradisional.
                                        </li>
                                        <li class="">
                                            Tanaman Aquaponik: Menerapkan sistem pertanian modern yang mengintegrasikan
                                            budidaya ikan dengan tanaman. Sistem ini efisien dalam memanfaatkan ruang,
                                            air,
                                            dan nutrisi.
                                        </li>
                                    </ul>
                                    <p class="mt-2">
                                        <span class="ms-5">Kader</span> ini bertugas mulai dari pembibitan hingga
                                        perawatan tanaman. Perawatan meliputi penyiraman, pemupukan, hingga pengelolaan
                                        media tanam untuk memastikan hasil optimal. Mereka juga bertanggung jawab
                                        menyusun
                                        jadwal panen dan pendistribusian hasil untuk digunakan di lingkungan sekolah
                                        atau
                                        masyarakat.
                                    </p>
                                    <li class="md:text-lg font-semibold mt-2">Manfaat Program</li>
                                    <ul class="ms-5 list-disc">
                                        <li class="">
                                            Lingkungan yang Berkelanjutan: Mengurangi limbah organik dengan mengolahnya
                                            menjadi kompos untuk pemupukan.
                                        </li>
                                        <li class="">
                                            Edukasi Praktis: Siswa dapat belajar cara menanam, merawat, dan memanfaatkan
                                            hasil tanaman untuk kebutuhan sehari-hari.
                                        </li>
                                        <li class="">
                                            Efisiensi Sistem Aquaponik: Menghemat air dan meningkatkan produksi tanaman
                                            serta ikan dalam satu sistem terpadu.
                                        </li>
                                    </ul>
                                    <p class="mt-2">
                                        <span class="ms-5">Melalui</span> kegiatan ini, sekolah tidak hanya
                                        berkontribusi
                                        pada penghijauan tetapi juga memberikan contoh nyata pemanfaatan teknologi
                                        modern
                                        dan tradisional secara berimbang. Program ini mendukung pembelajaran lingkungan
                                        hidup secara kreatif dan aplikatif.
                                    </p>
                                </ol>
                            </div>
                            <div class="flex snap-mandatory overflow-x-scroll mt-2 justify-center">
                                <div class="flex shrink-0 gap-2">
                                    <img src="{{ asset('image/pokja-1.jpg') }}" alt=""
                                        class="w-72 h-36 object-cover">
                                    <img src="{{ asset('image/pokja-1.jpg') }}" alt=""
                                        class="w-72 h-36 object-cover">
                                    <img src="{{ asset('image/pokja-1.jpg') }}" alt=""
                                        class="w-72 h-36 object-cover">
                                    <img src="{{ asset('image/pokja-1.jpg') }}" alt=""
                                        class="w-72 h-36 object-cover">
                                    <img src="{{ asset('image/pokja-1.jpg') }}" alt=""
                                        class="w-72 h-36 object-cover">
                                    <img src="{{ asset('image/pokja-1.jpg') }}" alt=""
                                        class="w-72 h-36 object-cover">
                                    <img src="{{ asset('image/pokja-1.jpg') }}" alt=""
                                        class="w-72 h-36 object-cover">
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Kompos & Bank Sampah -->
                    <section class="shadow-lg p-3 rounded mt-10" id="kompos-dan-bank-sampah">
                        <div class="">
                            <div class="flex gap-3 items-center">
                                <i class="fas fa-recycle text-xl sm:text-2xl md:text-3xl lg:text-4xl text-primary"></i>
                                <h1 class="text-lg sm:text-xl md:text-2xl font-semibold">
                                    Kompos & Bank Sampah
                                </h1>
                            </div>
                            <div class="">
                                <div class="bg-primary h-1 mt-2"></div>
                            </div>
                        </div>
                        <div class="mt-2">
                            <p class="">
                                <span class="ms-5">Kader</span> di bidang Kompos dan Bank Sampah dalam program
                                Adiwiyata
                                bertugas mengelola sampah di lingkungan sekolah dengan prinsip pemilahan dan pengolahan
                                yang
                                berkelanjutan. Fokus utama kelompok ini adalah memilah sampah organik dan anorganik
                                serta
                                memanfaatkannya untuk mendukung program penghijauan dan pengelolaan lingkungan.
                            </p>
                            <div class="">
                                <ol class="list-decimal ms-5">
                                    <li class="md:text-lg font-semibold">Tugas dan Prosedur Kerja</li>
                                    <p class="">
                                        <span class="ms-5">Setiap</span> anggota kader memiliki tanggung jawab untuk
                                        mengambil tong sampah dari setiap kelas setelah jam pelajaran selesai. Sampah
                                        yang
                                        terkumpul dipilah menjadi dua kategori:
                                    </p>
                                    <ul class="mt-2 ms-5 list-disc">
                                        <li class="">
                                            Sampah Organik: Sisa makanan, daun kering, dan material lain yang bisa
                                            diolah
                                            menjadi kompos.
                                        </li>
                                        <li class="">
                                            Sampah Anorganik: Plastik, kertas, dan bahan lain yang dapat didaur ulang
                                            atau
                                            disalurkan ke bank sampah.
                                        </li>
                                    </ul>
                                    <p class="mt-2">
                                        <span class="ms-5">Setelah</span> proses pemilahan, sampah organik diolah
                                        menjadi
                                        kompos menggunakan teknik tertentu, seperti metode aerobik atau vermikomposting.
                                        Sementara itu, sampah anorganik dikumpulkan dan disortir lebih lanjut untuk
                                        dijual
                                        atau didaur ulang melalui program bank sampah.
                                    </p>
                                    <li class="md:text-lg font-semibold mt-2">Manfaat Program</li>
                                    <ul class="ms-5 list-disc">
                                        <li class="">
                                            Pengelolaan Sampah Berkelanjutan: Mengurangi jumlah sampah yang dibuang ke
                                            TPA
                                            dan mengubah sampah menjadi sumber daya yang bernilai.
                                        </li>
                                        <li class="">
                                            Peningkatan Kesadaran Lingkungan: Membiasakan siswa memilah sampah sejak
                                            dini,
                                            sehingga mendukung gaya hidup ramah lingkungan.
                                        </li>
                                        <li class="">
                                            Dukungan Program Sekolah: Kompos yang dihasilkan digunakan untuk pemupukan
                                            tanaman di area sekolah, sementara dana dari bank sampah dapat digunakan
                                            untuk
                                            kegiatan lingkungan lainnya.
                                        </li>
                                    </ul>
                                    <li class="md:text-lg font-semibold mt-2">Edukasi dan Kolaborasi</li>
                                    <p class="">
                                        <span class="ms-5">Kader</span> ini juga bertugas memberikan sosialisasi
                                        kepada
                                        siswa dan guru tentang pentingnya memilah sampah. Mereka bekerja sama dengan
                                        seluruh
                                        warga sekolah untuk memastikan pengelolaan sampah berjalan efektif. Program ini
                                        tidak hanya meningkatkan kebersihan sekolah tetapi juga menciptakan budaya
                                        peduli
                                        lingkungan yang melibatkan seluruh komunitas sekolah.
                                    </p>
                                </ol>
                            </div>
                            <div class="flex snap-mandatory overflow-x-scroll mt-2 justify-center">
                                <div class="flex shrink-0 gap-2">
                                    <img src="{{ asset('image/pokja-1.jpg') }}" alt=""
                                        class="w-72 h-36 object-cover">
                                    <img src="{{ asset('image/pokja-1.jpg') }}" alt=""
                                        class="w-72 h-36 object-cover">
                                    <img src="{{ asset('image/pokja-1.jpg') }}" alt=""
                                        class="w-72 h-36 object-cover">
                                    <img src="{{ asset('image/pokja-1.jpg') }}" alt=""
                                        class="w-72 h-36 object-cover">
                                    <img src="{{ asset('image/pokja-1.jpg') }}" alt=""
                                        class="w-72 h-36 object-cover">
                                    <img src="{{ asset('image/pokja-1.jpg') }}" alt=""
                                        class="w-72 h-36 object-cover">
                                    <img src="{{ asset('image/pokja-1.jpg') }}" alt=""
                                        class="w-72 h-36 object-cover">
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Sanitasi & Kamar Mandi -->
                    <section class="shadow-lg p-3 rounded mt-10" id="sanitasi-dan-kamar-mandi">
                        <div class="">
                            <div class="flex gap-3 items-center">
                                <i class="fas fa-toilet text-xl sm:text-2xl md:text-3xl lg:text-4xl text-primary"></i>
                                <h1 class="text-lg sm:text-xl md:text-2xl font-semibold">
                                    Sanitasi & Kamar Mandi
                                </h1>
                            </div>
                            <div class="">
                                <div class="bg-primary h-1 mt-2"></div>
                            </div>
                        </div>
                        <div class="mt-2">
                            <p class="">
                                <span class="ms-5">Kader</span> di bidang Sanitasi dan Kamar mandi dalam program
                                Adiwiyata bertanggung jawab memastikan kebersihan, kerapian, dan keteraturan fasilitas
                                sanitasi di sekolah. Kelompok ini berfokus pada menciptakan lingkungan kamar mandi yang
                                sehat, nyaman, dan terjaga kebersihannya untuk mendukung kebiasaan hidup bersih di
                                kalangan
                                warga sekolah.
                            </p>
                            <div class="">
                                <ol class="ms-5 list-decimal">
                                    <li class="md:text-lg font-semibold">Tugas Utama</li>
                                    <ul class="ms-5 list-disc">
                                        <li class="">
                                            Kebersihan Kamar Mandi: Membersihkan kamar mandi secara berkala, termasuk
                                            mengepel lantai, membersihkan toilet, wastafel, dan cermin, serta memastikan
                                            tidak ada sampah berserakan.
                                        </li>
                                        <li class="">
                                            Pemeliharaan Sanitasi: Memastikan fasilitas seperti saluran air, kran, dan
                                            tempat sampah berfungsi dengan baik. Jika ditemukan kerusakan, kelompok
                                            kerja
                                            ini melaporkan kepada pihak yang berwenang.
                                        </li>
                                        <li class="">
                                            Penegakan Tata Tertib: Mengawasi penggunaan kamar mandi agar tertib, seperti
                                            tidak mencorat-coret dinding, tidak membuang sampah sembarangan, dan
                                            menggunakan
                                            air secukupnya.
                                        </li>
                                    </ul>
                                    <li class="md:text-lg font-semibold mt-2">Himbauan dan Edukasi</li>
                                    <p class="">
                                        <span class="ms-5">Kader</span> ini juga bertugas memasang himbauan di area
                                        kamar
                                        mandi, seperti:
                                    </p>
                                    <ul class="ms-5 list-disc">
                                        <li class="">"Jaga Kebersihan kamar mandi!"</li>
                                        <li class="">"Gunakan Air Secukupnya."</li>
                                        <li class="">"Matikan kran air setelah selesai digunakan!"</li>
                                    </ul>
                                    <p class="mt-2">
                                        <span class="ms-5">Imbauan</span> ini bertujuan mengingatkan siswa untuk
                                        menjaga
                                        kebersihan dan perilaku yang bertanggung jawab saat menggunakan fasilitas.
                                    </p>
                                    <li class="md:text-lg font-semibold mt-2">Manfaat Program</li>
                                    <ul class="ms-5 list-disc">
                                        <li class="">
                                            Meningkatkan Kenyamanan: Kamar mandi yang bersih dan rapi menciptakan
                                            lingkungan
                                            yang lebih nyaman untuk seluruh warga sekolah.
                                        </li>
                                        <li class="">
                                            Mendukung Kesehatan: Sanitasi yang baik membantu mencegah penyebaran
                                            penyakit
                                            yang terkait dengan kebersihan.
                                        </li>
                                        <li class="">
                                            Menanamkan Kebiasaan Baik: Program ini mendidik siswa untuk peduli terhadap
                                            kebersihan fasilitas umum dan lingkungan.
                                        </li>
                                        <li class="">
                                            Melalui kolaborasi dengan seluruh warga sekolah, kelompok kerja ini menjadi
                                            garda terdepan dalam menjaga kebersihan kamar mandi sebagai bagian penting
                                            dari
                                            keberhasilan program Adiwiyata.
                                        </li>
                                    </ul>
                                </ol>
                            </div>
                            <div class="flex snap-mandatory overflow-x-scroll mt-2 justify-center">
                                <div class="flex shrink-0 gap-2">
                                    <img src="{{ asset('image/pokja-1.jpg') }}" alt=""
                                        class="w-72 h-36 object-cover">
                                    <img src="{{ asset('image/pokja-1.jpg') }}" alt=""
                                        class="w-72 h-36 object-cover">
                                    <img src="{{ asset('image/pokja-1.jpg') }}" alt=""
                                        class="w-72 h-36 object-cover">
                                    <img src="{{ asset('image/pokja-1.jpg') }}" alt=""
                                        class="w-72 h-36 object-cover">
                                    <img src="{{ asset('image/pokja-1.jpg') }}" alt=""
                                        class="w-72 h-36 object-cover">
                                    <img src="{{ asset('image/pokja-1.jpg') }}" alt=""
                                        class="w-72 h-36 object-cover">
                                    <img src="{{ asset('image/pokja-1.jpg') }}" alt=""
                                        class="w-72 h-36 object-cover">
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Taman & Hutan Sekolah -->
                    <section class="shadow-lg p-3 rounded mt-10" id="taman-dan-hutan-sekolah">
                        <div class="">
                            <div class="flex gap-3 items-center">
                                <i class="fas fa-tree text-xl sm:text-2xl md:text-3xl lg:text-4xl text-primary"></i>
                                <h1 class="text-lg sm:text-xl md:text-2xl font-semibold">
                                    Taman & Hutan Sekolah
                                </h1>
                            </div>
                            <div class="">
                                <div class="bg-primary h-1 mt-2"></div>
                            </div>
                        </div>
                        <div class="mt-2">
                            <p class="">
                                <span class="ms-5">Kader</span> di bidang Taman dan Hutan Sekolah dalam program
                                Adiwiyata
                                memiliki peran penting dalam menjaga keindahan, kelestarian, dan fungsi edukasi dari
                                taman
                                sekolah. Fokus utama kelompok ini adalah merawat tanaman yang sudah ada, menambah
                                penghijauan, serta mengoptimalkan taman sebagai media pembelajaran lingkungan.
                            </p>
                            <div class="">
                                <ol class="ms-5 list-decimal">
                                    <li class="md:text-lg font-semibold">Tugas Utama</li>
                                    <ul class="ms-5 list-disc">
                                        <li class="">
                                            Perawatan Taman: Melakukan perawatan rutin tanaman di taman dan hutan
                                            sekolah,
                                            seperti menyiram tanaman pada pagi dan siang hari, membersihkan daun kering,
                                            serta
                                            memangkas tanaman agar tetap rapi dan sehat.
                                        </li>
                                        <li class="">
                                            Penghijauan: Menanam tanaman baru untuk menambah keindahan dan keragaman
                                            hayati
                                            di
                                            taman. Tanaman yang ditanam meliputi pohon rindang, bunga, dan tanaman hias
                                            lainnya.
                                        </li>
                                    </ul>
                                    <li class="md:text-lg font-semibold mt-2">Edukasi Melalui Label Tanaman</li>
                                    <p class="">
                                        <span class="ms-5">Kader</span> ini juga bertugas membuat dan memasang label
                                        pada
                                        tanaman yang ada di taman. Label mencantumkan informasi seperti nama tanaman,
                                        nama
                                        ilmiah, manfaat, dan asal tanaman. Hal ini bertujuan agar taman sekolah tidak
                                        hanya
                                        menjadi area hijau, tetapi juga menjadi sarana edukasi bagi siswa dan pengunjung
                                        untuk
                                        belajar tentang keanekaragaman tanaman.
                                    </p>
                                    <li class="md:text-lg font-semibold mt-2">Manfaat Program</li>
                                    <ul class="ms-5 list-disc">
                                        <li class="">
                                            Estetika dan Kenyamanan: Menciptakan lingkungan sekolah yang asri dan
                                            nyaman,
                                            memberikan ruang hijau untuk relaksasi dan belajar.
                                        </li>
                                        <li class="">
                                            Edukasi Lingkungan: Dengan adanya label tanaman, taman menjadi sumber
                                            pengetahuan
                                            yang dapat digunakan dalam kegiatan belajar-mengajar.
                                        </li>
                                        <li class="">
                                            Kesadaran Lingkungan: Menanamkan nilai-nilai cinta lingkungan kepada siswa
                                            dengan
                                            melibatkan mereka dalam kegiatan perawatan dan penghijauan.
                                        </li>
                                    </ul>
                                    <p class="mt-2">
                                        <span class="ms-5">Melalui</span> kegiatan ini, Kader Taman dan Hutan
                                        Sekolah tidak hanya menjaga keindahan lingkungan, tetapi juga berkontribusi
                                        menciptakan
                                        ruang hijau yang mendukung pembelajaran dan membangun kesadaran ekologis di
                                        kalangan
                                        siswa serta pengunjung.
                                    </p>
                                </ol>
                            </div>
                            <div class="flex snap-mandatory overflow-x-scroll mt-2 justify-center">
                                <div class="flex shrink-0 gap-2">
                                    <img src="{{ asset('image/pokja-1.jpg') }}" alt=""
                                        class="w-72 h-36 object-cover">
                                    <img src="{{ asset('image/pokja-1.jpg') }}" alt=""
                                        class="w-72 h-36 object-cover">
                                    <img src="{{ asset('image/pokja-1.jpg') }}" alt=""
                                        class="w-72 h-36 object-cover">
                                    <img src="{{ asset('image/pokja-1.jpg') }}" alt=""
                                        class="w-72 h-36 object-cover">
                                    <img src="{{ asset('image/pokja-1.jpg') }}" alt=""
                                        class="w-72 h-36 object-cover">
                                    <img src="{{ asset('image/pokja-1.jpg') }}" alt=""
                                        class="w-72 h-36 object-cover">
                                    <img src="{{ asset('image/pokja-1.jpg') }}" alt=""
                                        class="w-72 h-36 object-cover">
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Kreasi Daur Ulang Sampah -->
                    <section class="shadow-lg p-3 rounded mt-10" id="kreasi-daur-ulang-sampah">
                        <div class="">
                            <div class="flex gap-3 items-center">
                                <i
                                    class="fas fa-paint-brush text-xl sm:text-2xl md:text-3xl lg:text-4xl text-primary"></i>
                                <h1 class="text-lg sm:text-xl md:text-2xl font-semibold">
                                    Kreasi Daur Ulang Sampah
                                </h1>
                            </div>
                            <div class="">
                                <div class="bg-primary h-1 mt-2"></div>
                            </div>
                        </div>
                        <div class="mt-2">
                            <p class="">
                                <span class="ms-5">Kader</span> di bidang Kreasi Daur Ulang Sampah dalam program
                                Adiwiyata bertanggung jawab mengolah sampah menjadi barang yang bermanfaat dan memiliki
                                nilai estetika. Fokus utama kelompok ini adalah memanfaatkan limbah seperti botol
                                plastik
                                untuk membuat berbagai kerajinan kreatif, sekaligus mendukung pengurangan sampah di
                                lingkungan sekolah.
                            </p>
                            <div class="">
                                <ol class="ms-5 list-decimal">
                                    <li class="md:text-lg font-semibold">Tugas Utama</li>
                                    <ul class="ms-5 list-disc">
                                        <li class="">
                                            Pengumpulan Sampah: Mengumpulkan botol plastik dan bahan daur ulang lainnya
                                            dari
                                            sampah yang dipilah di sekolah.
                                        </li>
                                        <li class="">
                                            Pembuatan Eco Brick: Mengolah botol plastik menjadi eco brick dengan cara
                                            memasukkan sampah non-organik bersih dan kering ke dalam botol hingga padat.
                                            Eco
                                            brick ini digunakan sebagai bahan dasar berbagai kreasi.
                                        </li>
                                        <li class="">
                                            Kreasi dari Eco Brick: Membuat kerajinan seperti tempat duduk, meja, atau
                                            ornamen dinding berbentuk tulisan nama sekolah. Kreasi ini tidak hanya
                                            fungsional tetapi juga mempercantik lingkungan sekolah.
                                        </li>
                                    </ul>
                                    <li class="md:text-lg font-semibold mt-2">Edukasi dan Kreativitas</li>
                                    <p class="">
                                        <span class="ms-5">Kader</span> ini memberikan edukasi kepada siswa lain
                                        tentang
                                        pentingnya daur ulang sampah. Melalui kegiatan ini, siswa diajarkan untuk
                                        berpikir
                                        kreatif dalam memanfaatkan sampah menjadi produk yang memiliki nilai guna dan
                                        estetika.
                                    </p>
                                    <li class="md:text-lg font-semibold mt-2">Manfaat Program</li>
                                    <ul class="ms-5 list-disc">
                                        <li class="">
                                            Pengurangan Sampah: Mengurangi jumlah sampah plastik yang terbuang percuma
                                            dan
                                            membantu mengelola limbah di sekolah.
                                        </li>
                                        <li class="">
                                            Inovasi Lingkungan: Menciptakan produk yang bermanfaat dari limbah,
                                            memberikan
                                            nilai tambah bagi sekolah.
                                        </li>
                                        <li class="">
                                            Kesadaran Lingkungan: Menanamkan sikap peduli terhadap lingkungan kepada
                                            seluruh
                                            warga sekolah.
                                        </li>
                                    </ul>
                                    <p class="mt-2">
                                        <span class="ms-5">Dengan</span> kegiatan ini, kader tidak hanya membantu
                                        mengelola sampah, tetapi juga mendorong semangat kreativitas, inovasi, dan
                                        keberlanjutan dalam kehidupan sehari-hari di sekolah.
                                    </p>
                                </ol>
                            </div>
                            <div class="flex snap-mandatory overflow-x-scroll mt-2 justify-center">
                                <div class="flex shrink-0 gap-2">
                                    <img src="{{ asset('image/pokja-1.jpg') }}" alt=""
                                        class="w-72 h-36 object-cover">
                                    <img src="{{ asset('image/pokja-1.jpg') }}" alt=""
                                        class="w-72 h-36 object-cover">
                                    <img src="{{ asset('image/pokja-1.jpg') }}" alt=""
                                        class="w-72 h-36 object-cover">
                                    <img src="{{ asset('image/pokja-1.jpg') }}" alt=""
                                        class="w-72 h-36 object-cover">
                                    <img src="{{ asset('image/pokja-1.jpg') }}" alt=""
                                        class="w-72 h-36 object-cover">
                                    <img src="{{ asset('image/pokja-1.jpg') }}" alt=""
                                        class="w-72 h-36 object-cover">
                                    <img src="{{ asset('image/pokja-1.jpg') }}" alt=""
                                        class="w-72 h-36 object-cover">
                                </div>
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
