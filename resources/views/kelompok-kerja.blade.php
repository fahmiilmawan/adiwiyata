<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok Kerja | Adiwiyata</title>
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
            font-family: 'Poppins', Gill Sans MT, Calibri, Trebuchet MS, sans-serif;
        }

        /* Hero Section */
        .bg-image {
            background-image: url('{{ asset("image/slider-1.jpg") }}');
            background-size: cover;
            background-position: center;
            height: 45vh;
        }

        /* Background Image */
        .tanaman-dan-pembibitan,
        .kompos-dan-bank-sampah,
        .sanitasi-dan-kamar-mandi,
        .taman-dan-hutan-sekolah,
        .kreasi-daur-ulang-sampah {
            background-image: url("{{asset('image/bg-rounded.png')}}");
            background-position: top;
            background-size: cover;
        }

        /* Scroll Behavior */
        .tanaman-dan-pembibitan,
        .kompos-dan-bank-sampah {
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
    @include("layouts.partials.navbar")

    <div class="bg-primary text-white p-2 flex items-center gap-2 z-50">
        <a href="" class="font-semibold fa-solid fa-arrow-left"></a>
        <h1 class="font-semibold">Kelompok Kerja Adiwiyata</h1>
    </div>

    <!-- Hero Section -->
    <section class="hero-section bg-green-500/15" id="home">
        <div class="bg-image content-center bg-green-500 mix-blend-overlay">
            <div class="text-center text-white font-semibold mx-5 lg:mx-0">
                <h1 class="text-3xl">KELOMPOK KERJA - ADIWIYATA</h1>
                <h1 class="text-3xl">SMK TARUNA HARAPAN 1 CIPATAT</h1>
            </div>
        </div>
    </section>

    <div class="bg-quaternary pt-4">

        <!-- Tanaman & Pembibitan Section -->
        <section class="tanaman-dan-pembibitan p-4 mb-5" id="tanaman-dan-pembibitan">
            <div class="mx-10 text-white">
                <div class="text-center mt-20">
                    <h1 class="text-2xl font-semibold">KELOMPOK KERJA 1</h1>
                    <h1 class="text-lg font-semibold">(Tanaman & Pembibitan)</h1>
                </div>
                <div class="mt-5 flex justify-center">
                    <img src="{{asset('image/slider-1.jpg')}}" alt="" class="w-1/2 h-1/2 aspect-video">
                </div>
                <div class="mt-5">
                    <h1 class="text-justify">
                        <span class="ms-5">Kelompok</span> kerja di bidang Tanaman dan Pembibitan dalam program
                        Adiwiyata memiliki fokus penting dalam mengelola tanaman konsumsi, tanaman obat, dan tanaman
                        yang dibudidayakan secara aquaponik. Tugas ini bertujuan untuk mendukung keberlanjutan
                        lingkungan sekolah sekaligus memberikan manfaat praktis bagi komunitas sekolah.
                    </h1>
                    <ol class="list-decimal my-5">
                        <div class="ms-5">
                            <li>
                                Fokus dan Tugas Utama
                                <ul class="ms-5 list-disc text-justify">
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
                                        budidaya ikan dengan tanaman. Sistem ini efisien dalam memanfaatkan ruang, air,
                                        dan nutrisi.
                                    </li>
                                </ul>
                            </li>
                        </div>
                        <div class="my-5">
                            <h1 class="text-justify">
                                <span class="ms-5">Kelompok</span> ini bertugas mulai dari pembibitan hingga perawatan
                                tanaman. Perawatan meliputi penyiraman, pemupukan, hingga pengelolaan media tanam untuk
                                memastikan hasil optimal. Mereka juga bertanggung jawab menyusun jadwal panen dan
                                pendistribusian hasil untuk digunakan di lingkungan sekolah atau masyarakat.
                            </h1>
                        </div>
                        <div class="ms-5">
                            <li class="">
                                Manfaat Program
                                <ul class="ms-5 list-disc text-justify">
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
                            </li>
                        </div>
                        <div class="my-5">
                            <h1 class="text-justify">
                                <span class="ms-5">Melalui</span> kegiatan ini, sekolah tidak hanya berkontribusi pada
                                penghijauan tetapi juga memberikan contoh nyata pemanfaatan teknologi modern dan
                                tradisional secara berimbang. Program ini mendukung pembelajaran lingkungan hidup secara
                                kreatif dan aplikatif.
                            </h1>
                        </div>
                    </ol>
                    <div class="">
                        <h1 class="text-center text-xl font-semibold">Dokumentasi</h1>
                        <div class="bg-secondary mx-auto w-1/6 h-1"></div>
                        <div class="snap-mandatory overflow-x-scroll flex rounded mt-10">
                            <div class="shrink-0 flex gap-5">

                                <div class="bg-quaternary p-2 rounded">
                                    <img src="{{asset('image/slider-1.jpg')}}" alt="" class="w-80 h-52 rounded">
                                </div>
                                <div class="bg-quaternary p-2 rounded">
                                    <img src="{{asset('image/slider-1.jpg')}}" alt="" class="w-80 h-52 rounded">
                                </div>
                                <div class="bg-quaternary p-2 rounded">
                                    <img src="{{asset('image/slider-1.jpg')}}" alt="" class="w-80 h-52 rounded">
                                </div>
                                <div class="bg-quaternary p-2 rounded">
                                    <img src="{{asset('image/slider-1.jpg')}}" alt="" class="w-80 h-52 rounded">
                                </div>
                                <div class="bg-quaternary p-2 rounded">
                                    <img src="{{asset('image/slider-1.jpg')}}" alt="" class="w-80 h-52 rounded">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Kompos & Bank Sampah Section -->
        <section class="kompos-dan-bank-sampah p-4 mb-5" id="kompos-dan-bank-sampah">
            <div class="mx-10 text-white">
                <div class="text-center mt-20">
                    <h1 class="text-2xl font-semibold">KELOMPOK KERJA 2</h1>
                    <h1 class="text-lg font-semibold">(Kompos & Bank Sampah)</h1>
                </div>
                <div class="mt-5 flex justify-center">
                    <img src="{{asset('image/slider-1.jpg')}}" alt="" class="w-1/2 h-1/2 aspect-video">
                </div>
                <div class="mt-5">
                    <h1 class="text-justify">
                        <span class="ms-5">Kelompok</span> kerja di bidang Kompos dan Bank Sampah dalam program
                        Adiwiyata bertugas mengelola sampah di lingkungan sekolah dengan prinsip pemilahan dan
                        pengolahan yang berkelanjutan. Fokus utama kelompok ini adalah memilah sampah organik dan
                        anorganik serta memanfaatkannya untuk mendukung program penghijauan dan pengelolaan lingkungan.
                    </h1>
                    <ol class="list-decimal my-5">
                        <div class="ms-5">
                            <li>
                                Tugas dan Prosedur Kerja
                                <h1 class="text-justify">
                                    <span class="ms-5">Setiap</span> anggota kelompok memiliki tanggung jawab untuk
                                    mengambil tong sampah dari setiap kelas setelah jam pelajaran selesai. Sampah yang
                                    terkumpul dipilah menjadi dua kategori:
                                </h1>
                                <ul class="ms-5 list-disc text-justify">
                                    <li class="">
                                        Sampah Organik: Sisa makanan, daun kering, dan material lain yang bisa diolah
                                        menjadi kompos.
                                    </li>
                                    <li class="">
                                        Sampah Anorganik: Plastik, kertas, dan bahan lain yang dapat didaur ulang atau
                                        disalurkan ke bank sampah.
                                    </li>
                                </ul>
                            </li>
                        </div>
                        <div class="my-5">
                            <h1 class="text-justify">
                                <span class="ms-5">Setelah</span> proses pemilahan, sampah organik diolah menjadi kompos
                                menggunakan teknik tertentu, seperti metode aerobik atau vermikomposting. Sementara itu,
                                sampah anorganik dikumpulkan dan disortir lebih lanjut untuk dijual atau didaur ulang
                                melalui program bank sampah.
                            </h1>
                        </div>
                        <div class="ms-5">
                            <li class="">
                                Manfaat Program
                                <ul class="ms-5 list-disc text-justify">
                                    <li class="">
                                        Pengelolaan Sampah Berkelanjutan: Mengurangi jumlah sampah yang dibuang ke TPA
                                        dan mengubah sampah menjadi sumber daya yang bernilai.
                                    </li>
                                    <li class="">
                                        Peningkatan Kesadaran Lingkungan: Membiasakan siswa memilah sampah sejak dini,
                                        sehingga mendukung gaya hidup ramah lingkungan.
                                    </li>
                                    <li class="">
                                        Dukungan Program Sekolah: Kompos yang dihasilkan digunakan untuk pemupukan
                                        tanaman di area sekolah, sementara dana dari bank sampah dapat digunakan untuk
                                        kegiatan lingkungan lainnya.
                                    </li>
                                </ul>
                            </li>
                        </div>
                        <div class="my-5">
                            <li>
                                Edukasi dan Kolaborasi
                                <h1 class="text-justify">
                                    <span class="ms-5">Kelompok</span> kerja ini juga bertugas memberikan sosialisasi
                                    kepada siswa dan guru tentang pentingnya memilah sampah. Mereka bekerja sama dengan
                                    seluruh warga sekolah untuk memastikan pengelolaan sampah berjalan efektif. Program
                                    ini tidak hanya meningkatkan kebersihan sekolah tetapi juga menciptakan budaya
                                    peduli lingkungan yang melibatkan seluruh komunitas sekolah.
                                </h1>
                            </li>
                        </div>
                    </ol>
                    <div class="">
                        <h1 class="text-center text-xl font-semibold">Dokumentasi</h1>
                        <div class="bg-secondary mx-auto w-1/6 h-1"></div>
                        <div class="snap-mandatory overflow-x-scroll flex rounded mt-10">
                            <div class="shrink-0 flex gap-5">

                                <div class="bg-quaternary p-2 rounded">
                                    <img src="{{asset('image/slider-1.jpg')}}" alt="" class="w-80 h-52 rounded">
                                </div>
                                <div class="bg-quaternary p-2 rounded">
                                    <img src="{{asset('image/slider-1.jpg')}}" alt="" class="w-80 h-52 rounded">
                                </div>
                                <div class="bg-quaternary p-2 rounded">
                                    <img src="{{asset('image/slider-1.jpg')}}" alt="" class="w-80 h-52 rounded">
                                </div>
                                <div class="bg-quaternary p-2 rounded">
                                    <img src="{{asset('image/slider-1.jpg')}}" alt="" class="w-80 h-52 rounded">
                                </div>
                                <div class="bg-quaternary p-2 rounded">
                                    <img src="{{asset('image/slider-1.jpg')}}" alt="" class="w-80 h-52 rounded">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sanitasi & Kamar Mandi Section -->
        <section class="sanitasi-dan-kamar-mandi p-4 mb-5" id="sanitasi-dan-kamar-mandi">
            <div class="mx-10 text-white">
                <div class="text-center mt-20">
                    <h1 class="text-2xl font-semibold">KELOMPOK KERJA 3</h1>
                    <h1 class="text-lg font-semibold">(Sanitasi & Kamar Mandi)</h1>
                </div>
                <div class="mt-5 flex justify-center">
                    <img src="{{asset('image/slider-1.jpg')}}" alt="" class="w-1/2 h-1/2 aspect-video">
                </div>
                <div class="mt-5">
                    <h1 class="text-justify">
                        <span class="ms-5">Kelompok</span> kerja di bidang Sanitasi dan Kamar mandi dalam program
                        Adiwiyata bertanggung jawab memastikan kebersihan, kerapian, dan keteraturan fasilitas sanitasi
                        di sekolah. Kelompok ini berfokus pada menciptakan lingkungan kamar mandi yang sehat, nyaman,
                        dan terjaga kebersihannya untuk mendukung kebiasaan hidup bersih di kalangan warga sekolah.
                    </h1>
                    <ol class="list-decimal my-5">
                        <div class="ms-5">
                            <li>
                                Tugas Utama
                                <ul class="ms-5 list-disc text-justify">
                                    <li class="">
                                        Kebersihan Kamar Mandi: Membersihkan kamar mandi secara berkala, termasuk
                                        mengepel lantai, membersihkan toilet, wastafel, dan cermin, serta memastikan
                                        tidak ada sampah berserakan.
                                    </li>
                                    <li class="">
                                        Pemeliharaan Sanitasi: Memastikan fasilitas seperti saluran air, kran, dan
                                        tempat sampah berfungsi dengan baik. Jika ditemukan kerusakan, kelompok kerja
                                        ini melaporkan kepada pihak yang berwenang.
                                    </li>
                                    <li class="">
                                        Penegakan Tata Tertib: Mengawasi penggunaan kamar mandi agar tertib, seperti
                                        tidak mencorat-coret dinding, tidak membuang sampah sembarangan, dan menggunakan
                                        air secukupnya.
                                    </li>
                                </ul>
                            </li>
                        </div>
                        <div class="ms-5 mt-5">
                            <li class="">
                                Himbauan dan Edukasi
                                <h1 class="text-justify">
                                    <span class="ms-5">Kelompok</span> kerja ini juga bertugas memasang himbauan di area
                                    kamar mandi, seperti:
                                </h1>
                                <ul class="ms-5 list-disc text-justify">
                                    <li class="">
                                        "Jaga Kebersihan kamar mandi !"
                                    </li>
                                    <li class="">
                                        "Gunakan Air Secukupnya."
                                    </li>
                                    <li class="">
                                        "Matikan kran air setelah selesai digunakan !"
                                    </li>
                                </ul>
                            </li>
                        </div>
                        <div class="mt-5">
                            <h1 class="text-justify">
                                <span class="ms-5">Himbauan</span> ini bertujuan mengingatkan siswa untuk menjaga
                                kebersihan dan perilaku yang bertanggung jawab saat menggunakan fasilitas.
                            </h1>
                        </div>
                        <div class="my-5">
                            <li>
                                Manfaat Program
                                <ul class="ms-5 text-justify list-disc">
                                    <li class="">
                                        Meningkatkan Kenyamanan: Kamar mandi yang bersih dan rapi menciptakan lingkungan
                                        yang lebih nyaman untuk seluruh warga sekolah.
                                    </li>
                                    <li class="">
                                        Mendukung Kesehatan: Sanitasi yang baik membantu mencegah penyebaran penyakit
                                        yang terkait dengan kebersihan.
                                    </li>
                                    <li class="">
                                        Menanamkan Kebiasaan Baik: Program ini mendidik siswa untuk peduli terhadap
                                        kebersihan fasilitas umum dan lingkungan.
                                    </li>
                                    <li class="">
                                        Melalui kolaborasi dengan seluruh warga sekolah, kelompok kerja ini menjadi
                                        garda terdepan dalam menjaga kebersihan kamar mandi sebagai bagian penting dari
                                        keberhasilan program Adiwiyata.
                                    </li>
                                </ul>
                            </li>
                        </div>
                    </ol>
                    <div class="">
                        <h1 class="text-center text-xl font-semibold">Dokumentasi</h1>
                        <div class="bg-secondary mx-auto w-1/6 h-1"></div>
                        <div class="snap-mandatory overflow-x-scroll flex rounded mt-10">
                            <div class="shrink-0 flex gap-5">

                                <div class="bg-quaternary p-2 rounded">
                                    <img src="{{asset('image/slider-1.jpg')}}" alt="" class="w-80 h-52 rounded">
                                </div>
                                <div class="bg-quaternary p-2 rounded">
                                    <img src="{{asset('image/slider-1.jpg')}}" alt="" class="w-80 h-52 rounded">
                                </div>
                                <div class="bg-quaternary p-2 rounded">
                                    <img src="{{asset('image/slider-1.jpg')}}" alt="" class="w-80 h-52 rounded">
                                </div>
                                <div class="bg-quaternary p-2 rounded">
                                    <img src="{{asset('image/slider-1.jpg')}}" alt="" class="w-80 h-52 rounded">
                                </div>
                                <div class="bg-quaternary p-2 rounded">
                                    <img src="{{asset('image/slider-1.jpg')}}" alt="" class="w-80 h-52 rounded">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Taman & Hutan Sekolah Section -->
        <section class="taman-dan-hutan-sekolah p-4 mb-5" id="taman-dan-hutan-sekolah">
            <div class="mx-10 text-white">
                <div class="text-center mt-20">
                    <h1 class="text-2xl font-semibold">KELOMPOK KERJA 4</h1>
                    <h1 class="text-lg font-semibold">(Taman & Hutan Sekolah)</h1>
                </div>
                <div class="mt-5 flex justify-center">
                    <img src="{{asset('image/slider-1.jpg')}}" alt="" class="w-1/2 h-1/2 aspect-video">
                </div>
                <div class="mt-5">
                    <h1 class="text-justify">
                        <span class="ms-5">Kelompok</span> kerja di bidang Taman dan Hutan Sekolah dalam program
                        Adiwiyata memiliki peran penting dalam menjaga keindahan, kelestarian, dan fungsi edukasi dari
                        taman sekolah. Fokus utama kelompok ini adalah merawat tanaman yang sudah ada, menambah
                        penghijauan, serta mengoptimalkan taman sebagai media pembelajaran lingkungan.
                    </h1>
                    <ol class="list-decimal my-5">
                        <div class="ms-5">
                            <li>
                                Tugas Utama
                                <ul class="ms-5 list-disc text-justify">
                                    <li class="">
                                        Perawatan Taman: Melakukan perawatan rutin tanaman di taman dan hutan sekolah,
                                        seperti menyiram tanaman pada pagi dan siang hari, membersihkan daun kering,
                                        serta memangkas tanaman agar tetap rapi dan sehat.
                                    </li>
                                    <li class="">
                                        Penghijauan: Menanam tanaman baru untuk menambah keindahan dan keragaman hayati
                                        di taman. Tanaman yang ditanam meliputi pohon rindang, bunga, dan tanaman hias
                                        lainnya.
                                    </li>
                                </ul>
                            </li>
                        </div>
                        <div class="ms-5 mt-5">
                            <li class="">
                                Edukasi Melalui Label Tanaman
                                <h1 class="text-justify">
                                    <span class="ms-5">Kelompok</span> kerja ini juga bertugas membuat dan memasang
                                    label pada tanaman yang ada di taman. Label mencantumkan informasi seperti nama
                                    tanaman, nama ilmiah, manfaat, dan asal tanaman. Hal ini bertujuan agar taman
                                    sekolah tidak hanya menjadi area hijau, tetapi juga menjadi sarana edukasi bagi
                                    siswa dan pengunjung untuk belajar tentang keanekaragaman tanaman.
                                </h1>
                            </li>
                        </div>
                        <div class="mt-5">
                            <li>
                                Manfaat Program
                                <ul class="ms-5 text-justify list-disc">
                                    <li class="">
                                        Estetika dan Kenyamanan: Menciptakan lingkungan sekolah yang asri dan nyaman,
                                        memberikan ruang hijau untuk relaksasi dan belajar.
                                    </li>
                                    <li class="">
                                        Edukasi Lingkungan: Dengan adanya label tanaman, taman menjadi sumber
                                        pengetahuan yang dapat digunakan dalam kegiatan belajar-mengajar.
                                    </li>
                                    <li class="">
                                        Kesadaran Lingkungan: Menanamkan nilai-nilai cinta lingkungan kepada siswa
                                        dengan melibatkan mereka dalam kegiatan perawatan dan penghijauan.
                                    </li>
                                </ul>
                            </li>
                        </div>
                    </ol>
                    <div class="my-5">
                        <h1 class="text-justify">
                            <span class="ms-5">Melalui</span> kegiatan ini, kelompok kerja Taman dan Hutan Sekolah tidak
                            hanya menjaga keindahan lingkungan, tetapi juga berkontribusi menciptakan ruang hijau yang
                            mendukung pembelajaran dan membangun kesadaran ekologis di kalangan siswa serta pengunjung.
                        </h1>
                    </div>
                    <div class="">
                        <h1 class="text-center text-xl font-semibold">Dokumentasi</h1>
                        <div class="bg-secondary mx-auto w-1/6 h-1"></div>
                        <div class="snap-mandatory overflow-x-scroll flex rounded mt-10">
                            <div class="shrink-0 flex gap-5">

                                <div class="bg-quaternary p-2 rounded">
                                    <img src="{{asset('image/slider-1.jpg')}}" alt="" class="w-80 h-52 rounded">
                                </div>
                                <div class="bg-quaternary p-2 rounded">
                                    <img src="{{asset('image/slider-1.jpg')}}" alt="" class="w-80 h-52 rounded">
                                </div>
                                <div class="bg-quaternary p-2 rounded">
                                    <img src="{{asset('image/slider-1.jpg')}}" alt="" class="w-80 h-52 rounded">
                                </div>
                                <div class="bg-quaternary p-2 rounded">
                                    <img src="{{asset('image/slider-1.jpg')}}" alt="" class="w-80 h-52 rounded">
                                </div>
                                <div class="bg-quaternary p-2 rounded">
                                    <img src="{{asset('image/slider-1.jpg')}}" alt="" class="w-80 h-52 rounded">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Kreasi Daur Ulang Sampah Section -->
        <section class="kreasi-daur-ulang-sampah p-4 mb-5" id="kreasi-daur-ulang-sampah">
            <div class="mx-10 text-white">
                <div class="text-center mt-20">
                    <h1 class="text-2xl font-semibold">KELOMPOK KERJA 5</h1>
                    <h1 class="text-lg font-semibold">(Kreasi Daur Ulang Sampah)</h1>
                </div>
                <div class="mt-5 flex justify-center">
                    <img src="{{asset('image/slider-1.jpg')}}" alt="" class="w-1/2 h-1/2 aspect-video">
                </div>
                <div class="mt-5">
                    <h1 class="text-justify">
                        <span class="ms-5">Kelompok</span> kerja di bidang Kreasi Daur Ulang Sampah dalam program
                        Adiwiyata bertanggung jawab mengolah sampah menjadi barang yang bermanfaat dan memiliki nilai
                        estetika. Fokus utama kelompok ini adalah memanfaatkan limbah seperti botol plastik untuk
                        membuat berbagai kerajinan kreatif, sekaligus mendukung pengurangan sampah di lingkungan
                        sekolah.
                    </h1>
                    <ol class="list-decimal my-5">
                        <div class="ms-5">
                            <li>
                                Tugas Utama
                                <ul class="ms-5 list-disc text-justify">
                                    <li class="">
                                        Pengumpulan Sampah: Mengumpulkan botol plastik dan bahan daur ulang lainnya dari
                                        sampah yang dipilah di sekolah.
                                    </li>
                                    <li class="">
                                        Pembuatan Eco Brick: Mengolah botol plastik menjadi eco brick dengan cara
                                        memasukkan sampah non-organik bersih dan kering ke dalam botol hingga padat. Eco
                                        brick ini digunakan sebagai bahan dasar berbagai kreasi.
                                    </li>
                                    <li class="">
                                        Kreasi dari Eco Brick: Membuat kerajinan seperti tempat duduk, meja, atau
                                        ornamen dinding berbentuk tulisan nama sekolah. Kreasi ini tidak hanya
                                        fungsional tetapi juga mempercantik lingkungan sekolah.
                                    </li>
                                </ul>
                            </li>
                        </div>
                        <div class="ms-5 mt-5">
                            <li class="">
                                Edukasi dan Kreativitas
                                <h1 class="text-justify">
                                    <span class="ms-5">Kelompok</span> ini memberikan edukasi kepada siswa lain tentang
                                    pentingnya daur ulang sampah. Melalui kegiatan ini, siswa diajarkan untuk berpikir
                                    kreatif dalam memanfaatkan sampah menjadi produk yang memiliki nilai guna dan
                                    estetika.
                                </h1>
                            </li>
                        </div>
                        <div class="mt-5">
                            <li>
                                Manfaat Program
                                <ul class="ms-5 text-justify list-disc">
                                    <li class="">
                                        Pengurangan Sampah: Mengurangi jumlah sampah plastik yang terbuang percuma dan
                                        membantu mengelola limbah di sekolah.
                                    </li>
                                    <li class="">
                                        Inovasi Lingkungan: Menciptakan produk yang bermanfaat dari limbah, memberikan
                                        nilai tambah bagi sekolah.
                                    </li>
                                    <li class="">
                                        Kesadaran Lingkungan: Menanamkan sikap peduli terhadap lingkungan kepada seluruh
                                        warga sekolah.
                                    </li>
                                </ul>
                            </li>
                        </div>
                    </ol>
                    <div class="my-5">
                        <h1 class="text-justify">
                            <span class="ms-5">Dengan</span> kegiatan ini, kelompok kerja tidak hanya membantu mengelola
                            sampah, tetapi juga mendorong semangat kreativitas, inovasi, dan keberlanjutan dalam
                            kehidupan sehari-hari di sekolah.
                        </h1>
                    </div>
                    <div class="">
                        <h1 class="text-center text-xl font-semibold">Dokumentasi</h1>
                        <div class="bg-secondary mx-auto w-1/6 h-1"></div>
                        <div class="snap-mandatory overflow-x-scroll flex rounded mt-10">
                            <div class="shrink-0 flex gap-5">

                                <div class="bg-quaternary p-2 rounded">
                                    <img src="{{asset('image/slider-1.jpg')}}" alt="" class="w-80 h-52 rounded">
                                </div>
                                <div class="bg-quaternary p-2 rounded">
                                    <img src="{{asset('image/slider-1.jpg')}}" alt="" class="w-80 h-52 rounded">
                                </div>
                                <div class="bg-quaternary p-2 rounded">
                                    <img src="{{asset('image/slider-1.jpg')}}" alt="" class="w-80 h-52 rounded">
                                </div>
                                <div class="bg-quaternary p-2 rounded">
                                    <img src="{{asset('image/slider-1.jpg')}}" alt="" class="w-80 h-52 rounded">
                                </div>
                                <div class="bg-quaternary p-2 rounded">
                                    <img src="{{asset('image/slider-1.jpg')}}" alt="" class="w-80 h-52 rounded">
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
