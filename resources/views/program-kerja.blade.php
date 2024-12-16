<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Kerja | Adiwiyata</title>
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
            font-family: 'Poppins', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        /* Hero Section */
        .bg-image {
            background-image: url('{{ asset("image/slider-1.jpg") }}');
            background-size: cover;
            background-position: center;
            height: 45vh;
        }

        /* Scroll Behavior */
        .bank-sampah,
        .budidaya-maggot,
        .pembibitan,
        .aquaphonik,
        .pupuk-organik-cair,
        .limbah-air-wudhu,
        .label-tanaman,
        .ecobrick,
        .eco-enzyme {
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

    <div class="bg-primary text-white p-2 flex items-center gap-2">
        <a href="" class="font-semibold fa-solid fa-arrow-left"></a>
        <h1 class="font-semibold">Program Kerja Adiwiyata</h1>
    </div>

    <!-- Hero Section -->
    <section class="hero-section bg-green-500/15" id="home">
        <div class="bg-image content-center bg-green-500 mix-blend-overlay">
            <div class="text-center text-white font-semibold mx-5 lg:mx-0">
                <h1 class="text-3xl">PROGRAM KERJA - ADIWIYATA</h1>
                <h1 class="text-3xl">SMK TARUNA HARAPAN 1 CIPATAT</h1>
            </div>
        </div>
    </section>

    <div class="bg-quaternary pt-5">

        <!-- Bank Sampah Section -->
        <section class="bank-sampah mx-10" id="bank-sampah">
            <div class="bg-primary text-white p-2 rounded">
                <h1 class="text-2xl text-center">BANK SAMPAH</h1>
            </div>
            <img src="{{asset(" image/slider-1.jpg")}}" alt="" class="w-[60%] flex justify-self-center mt-2">
            <div class="mt-2">
                <h1 class="text-xl text-justify">Definisi</h1>
                <h1 class="text-lg text-justify">
                    Bank sampah adalah program pengelolaan sampah berbasis komunitas yang bertujuan untuk mengurangi
                    volume sampah sekaligus memberikan nilai ekonomi. Program ini tidak hanya membantu mengurangi
                    pencemaran lingkungan, tetapi juga meningkatkan kesadaran masyarakat terhadap pentingnya pengelolaan
                    sampah yang bertanggung jawab.
                </h1>
            </div>
            <div class="mt-2">
                <h1 class="text-xl text-justify">Cara Kerja Bank Sampah :</h1>
                <h1 class="text-lg text-justify">
                    Setiap kelas mengumpulkan sampah dalam trash bag yang disediakan. Ketika trash bag penuh, sampah
                    ditimbang untuk mengetahui beratnya. Harga per kilogram ditentukan berdasarkan jenis sampah, seperti
                    plastik, kertas, atau logam. Nilai ekonomi dari sampah yang dikumpulkan dicatat ke dalam buku
                    tabungan kelas atau individu. Dana tabungan dapat dicairkan jika saldo mencapai minimal Rp 25.000
                    dan bisa digunakan untuk keperluan sekolah atau kegiatan lingkungan. Program ini membantu siswa
                    belajar tentang pengelolaan sampah sekaligus mengembangkan kepedulian lingkungan.
                </h1>
            </div>
            <div class="mt-2">
                <h1 class="text-xl text-justify">Jenis Sampah yang Dibernilai Jual dan Cara Pemilihannya :</h1>
                <ol class="list-decimal ms-10 text-justify text-lg">
                    <li>
                        Plastik : Botol plastik, kantong plastik, dan wadah plastik bersih. Pisahkan berdasarkan jenis
                        dan pastikan dalam keadaan bersih sebelum dimasukkan ke trash bag, karena plastik ini memiliki
                        nilai jual.
                    </li>
                    <li>
                        Logam : Kaleng bekas minuman dan makanan, serta logam lainnya. Bersihkan dari sisa makanan atau
                        minuman agar mudah ditimbang dan lebih bernilai saat dijual.
                    </li>
                    <li>
                        Tembaga : Kawat atau benda berbahan tembaga lainnya. Pastikan tembaga dalam kondisi bersih agar
                        memiliki nilai jual optimal.
                    </li>
                </ol>
                <h1 class="text-lg text-justify">
                    Pemilahan ini membantu memaksimalkan nilai ekonomis dari sampah yang bisa dijual, sekaligus
                    mendukung pengelolaan sampah yang lebih efisien.
                </h1>
            </div>
        </section>

        <!-- Budidaya Maggot Section -->
        <section class="budidaya-maggot mx-10 mt-10" id="budidaya-maggot">
            <div class="bg-primary text-white p-2 rounded">
                <h1 class="text-2xl text-center">BUDIDAYA MAGGOT</h1>
            </div>
            <img src="{{asset(" image/slider-2.jpg")}}" alt="" class="w-[60%] flex justify-self-center mt-2">
            <div class="mt-2">
                <h1 class="text-xl text-justify">Definisi</h1>
                <h1 class="text-lg text-justify">
                    Budidaya maggot adalah usaha pembiakan larva lalat Black Soldier Fly (BSF) yang berfungsi sebagai
                    solusi pengelolaan limbah organik sekaligus sumber pakan alternatif. Maggot mampu menguraikan sampah
                    organik dengan cepat, sehingga mengurangi limbah yang mencemari lingkungan.Dalam prosesnya, limbah
                    organik seperti sisa makanan atau limbah pertanian digunakan sebagai media tempat maggot tumbuh.
                    Budidaya ini memiliki potensi ekonomi yang besar karena rendah biaya dan ramah lingkungan.
                </h1>
            </div>
            <div class="mt-2">
                <h1 class="text-xl text-justify">Cara Kerja Budidaya Maggot :</h1>
                <ol class="list-decimal ms-10 text-justify text-lg">
                    <li>
                        Pengumpulan Sampah Organik : Sampah organik seperti sisa makanan rumah tangga atau limbah
                        pertanian dikumpulkan dan dipilah.
                    </li>
                    <li>
                        Proses Penguraian : Sampah organik yang sudah dipilah dimasukkan ke dalam wadah khusus sebagai
                        media makan maggot. Larva BSF akan mulai menguraikan sampah tersebut.
                    </li>
                    <li>
                        Pertumbuhan Larva : Maggot akan tumbuh dan berkembang pesat dalam waktu singkat sambil memakan
                        sampah organik, mengubahnya menjadi kompos atau biomassa yang kaya nutrisi.
                    </li>
                    <li>
                        Panen Maggot : Setelah mencapai ukuran yang sesuai, maggot bisa dipanen untuk dijadikan pakan
                        hewan, atau dibiarkan menjadi lalat dewasa untuk memulai siklus baru.
                    </li>
                    <li>
                        Hasil Akhir : Sisa dari proses penguraian bisa dimanfaatkan sebagai pupuk kompos untuk
                        pertanian.
                    </li>
                </ol>
            </div>
        </section>

        <!-- Pembibitan Section -->
        <section class="pembibitan mx-10 mt-10" id="pembibitan">
            <div class="bg-primary text-white p-2 rounded">
                <h1 class="text-2xl text-center">PEMBIBITAN</h1>
            </div>
            <img src="{{asset(" image/slider-2.jpg")}}" alt="" class="w-[60%] flex justify-self-center mt-2">
            <div class="mt-2">
                <h1 class="text-xl text-justify">Definisi</h1>
                <h1 class="text-lg text-justify">
                    Pembibitan adalah tahap awal dalam proses budidaya tanaman yang bertujuan untuk menghasilkan bibit
                    berkualitas sebelum dipindahkan ke lahan tanam. Proses ini melibatkan penyiapan benih, media tanam,
                    dan lingkungan yang mendukung pertumbuhan, seperti tanah yang subur, cukup air, dan pencahayaan yang
                    memadai. Tahap pembibitan yang baik sangat penting karena bibit yang sehat akan meningkatkan
                    keberhasilan panen dan produktivitas tanaman.
                </h1>
            </div>
            <div class="mt-2">
                <h1 class="text-xl text-justify">Proses Pembibitan Tanaman :</h1>
                <ol class="list-decimal ms-10 text-justify text-lg">
                    <li>
                        Pemilihan Benih : Benih berkualitas dipilih untuk memastikan pertumbuhan yang optimal. Biasanya
                        benih berasal dari tanaman unggus agar hasilnya sesuai harapan.
                    </li>
                    <li>
                        Penyemaian : Benih disemai pada media tanam yang kaya nutrisi. Media bisa berupa tanah, kompos,
                        atau campuran tanah dan pupuk organik untuk mempercepat pertumbuhan.
                    </li>
                    <li>
                        Perawatan Bibit : Bibit disiram secara rutin dan diberi perlindungan dari hama serta cuaca
                        ekstrem. Pemupukan juga dilakukan jika diperlukan.
                    </li>
                    <li>
                        Pemindahan : Setelah bibit cukup kuat, biasanya berumur sekitar beberapa minggu hingga beberapa
                        bulan, bibit dipindahkan ke lahan tanam.
                    </li>
                </ol>
            </div>
        </section>

        <!-- Aquaphonik Section -->
        <section class="aquaphonik mx-10 mt-10" id="aquaphonik">
            <div class="bg-primary text-white p-2 rounded">
                <h1 class="text-2xl text-center">AQUAPHONIK</h1>
            </div>
            <img src="{{asset(" image/slider-2.jpg")}}" alt="" class="w-[60%] flex justify-self-center mt-2">
            <div class="mt-2">
                <h1 class="text-xl text-justify">Definisi</h1>
                <h1 class="text-lg text-justify">
                    Aquaponik adalah sistem pertanian yang menggabungkan budidaya ikan (akuakultur) dan tanaman tanpa
                    tanah (hidroponik) dalam satu ekosistem tertutup.
                </h1>
            </div>
            <div class="mt-2">
                <h1 class="text-xl text-justify">Cara Kerja Sistem Aquaponik :</h1>
                <ol class="list-decimal ms-10 text-justify text-lg">
                    <li>
                        Budidaya Ikan: Ikan dipelihara dalam kolam, menghasilkan limbah seperti amonia dan nitrat, yang
                        kaya nutrisi untuk tanaman.
                    </li>
                    <li>
                        Proses Penyaringan: Limbah ikan mengalir ke tanaman, di mana tanaman menyerap nutrisi tersebut.
                        Tanaman juga menyaring air dari bahan berbahaya seperti amonia.
                    </li>
                    <li>
                        Pengolahan Tanaman: Tanaman menyerap unsur hara yang dibutuhkan untuk tumbuh. Akar tanaman
                        menyaring air dan mengurangi kandungan limbah.Pengembalian Air: Setelah disaring, air yang lebih
                        bersih dan kaya oksigen dikembalikan ke kolam ikan, menjaga kualitas air.
                    </li>
                    <li>
                        Pengembalian Air: Setelah disaring, air yang lebih bersih dan kaya oksigen dikembalikan ke kolam
                        ikan, menjaga kualitas air.
                    </li>
                    <li>
                        Pemeliharaan: Keseimbangan jumlah ikan dan tanaman harus dijaga agar ekosistem tetap sehat dan
                        optimal.
                    </li>
                </ol>
            </div>
            <div class="mt-2">
                <h1 class="text-2xl text-justify">Keuntungan Sistem Aquaponik :</h1>
                <ol class="list-decimal ms-10 text-justify text-lg">
                    <li>
                        Efisiensi Penggunaan Air: Air bersirkulasi dan digunakan kembali, menghemat lebih banyak air
                        dibandingkan pertanian konvensional.
                    </li>
                    <li>
                        Tanpa Pupuk Kimia: Tanaman mendapat nutrisi dari limbah ikan, mengurangi kebutuhan akan pupuk
                        sintetis.
                    </li>
                    <li>
                        Pengurangan Limbah: Limbah ikan digunakan sebagai sumber nutrisi tanaman, mengurangi pencemaran.
                    </li>
                    <li>
                        Pertumbuhan Cepat: Tanaman tumbuh lebih cepat karena mendapatkan nutrisi yang konsisten dan
                        berkualitas.
                    </li>
                    <li>
                        Ramah Lingkungan: Sistem ini mengurangi jejak karbon dan meminimalkan dampak lingkungan dari
                        pertanian konvensional.
                    </li>
                </ol>
            </div>
        </section>

        <!-- Pupuk Organik Cair Section -->
        <section class="pupuk-organik-cair mx-10 mt-10" id="pupuk-organik-cair">
            <div class="bg-primary text-white p-2 rounded">
                <h1 class="text-2xl text-center">PUPUK ORGANIK CAIR</h1>
            </div>
            <img src="{{asset(" image/slider-2.jpg")}}" alt="" class="w-[60%] flex justify-self-center mt-2">
            <div class="mt-2">
                <h1 class="text-xl text-justify">Cara Membuat Pupuk Organik Cair</h1>
                <h1 class="text-lg text-justify">
                    Untuk membuat pupuk organik cair (POC), campurkan sisa buah, kulit sayuran, limbah dapur, dan
                    kotoran hewan (opsional) ke dalam ember, lalu tambahkan air cucian beras dan EM4 atau ragi tape
                    sebagai starter fermentasi. Aduk hingga merata, tutup rapat, dan biarkan selama 7–14 hari untuk
                    proses fermentasi, sambil sesekali dibuka untuk mengeluarkan gas. Setelah selesai, saring cairan dan
                    simpan di botol. POC siap digunakan dengan mencampurkannya ke air sebelum penyiraman tanaman.
                </h1>
            </div>
            <div class="mt-2">
                <h1 class="text-xl text-justify">Keuntungan Pupuk Organik Cair :</h1>
                <ol class="list-decimal ms-10 text-justify text-lg">
                    <li>
                        Meningkatkan Kualitas Tanah: Membantu memperbaiki struktur tanah, meningkatkan aktivitas
                        mikroorganisme, dan memperbaiki daya tahan tanah.
                    </li>
                    <li>
                        Ramah Lingkungan: Tidak mengandung bahan kimia berbahaya, sehingga lebih aman untuk lingkungan
                        dan kesehatan.
                    </li>
                    <li>
                        Meningkatkan Hasil Tanaman: Menyediakan nutrisi yang lebih alami dan meningkatkan kesehatan
                        tanaman.
                    </li>
                    <li>
                        Mudah Digunakan: Pupuk ini mudah diaplikasikan melalui penyiraman langsung ke tanaman atau
                        sebagai semprotan foliar.
                    </li>
                </ol>
            </div>
        </section>

        <!-- Limbah Air Wudhu Section -->
        <section class="limbah-air-wudhu mx-10 mt-10" id="limbah-air-wudhu">
            <div class="bg-primary text-white p-2 rounded">
                <h1 class="text-2xl text-center">LIMBAH AIR WUDHU</h1>
            </div>
            <img src="{{asset(" image/slider-2.jpg")}}" alt="" class="w-[60%] flex justify-self-center mt-2">
            <div class="mt-2">
                <h1 class="text-xl text-justify">Pengelolaan Limbah Air Wudhu</h1>
                <h1 class="text-lg text-justify">
                    Mengambil limbah air wudhu menggunakan ember adalah metode sederhana dan efektif untuk mengurangi
                    pemborosan air. Caranya adalah dengan menempatkan ember di bawah saluran pembuangan tempat wudhu
                    sehingga air yang mengalir dari keran dapat ditampung langsung. Setelah ember penuh, air tersebut
                    dipindahkan ke tempat penyimpanan yang lebih besar, seperti drum atau tangki air, untuk disimpan.
                    Air wudhu ini biasanya bersih karena hanya digunakan untuk membersihkan anggota tubuh tanpa bahan
                    kimia. Air tersebut dapat dimanfaatkan kembali untuk berbagai keperluan, seperti menyiram tanaman,
                    membersihkan lantai, atau digunakan dalam proses non-konsumsi lainnya.
                </h1>
            </div>
            <div class="mt-2">
                <h1 class="text-xl text-justify">Keuntungan Pengelolaan Limbah Air Wudhu :</h1>
                <ol class="list-decimal ms-10 text-justify text-lg">
                    <li>
                        Penghematan Air: Mengurangi pemborosan air dengan memanfaatkan air wudhu untuk kebutuhan yang
                        tidak memerlukan air bersih.
                    </li>
                    <li>
                        Pendidikan Lingkungan: Siswa belajar untuk lebih bertanggung jawab terhadap pengelolaan sumber
                        daya alam, terutama air.
                    </li>
                    <li>
                        Meningkatkan Kesadaran Berkelanjutan: Menanamkan nilai keberlanjutan dan ramah lingkungan sejak
                        dini.
                    </li>
                </ol>
            </div>
        </section>

        <!-- Label Tanaman Section -->
        <section class="label-tanaman mx-10 mt-10" id="label-tanaman">
            <div class="bg-primary text-white p-2 rounded">
                <h1 class="text-2xl text-center">LABEL TANAMAN</h1>
            </div>
            <img src="{{asset(" image/slider-2.jpg")}}" alt="" class="w-[60%] flex justify-self-center mt-2">
            <div class="mt-2">
                <h1 class="text-xl text-justify">Manfaat Pelabelan Tanaman</h1>
                <h1 class="text-lg text-justify">
                    Pelabelan tanaman dengan 4 bahasa—Indonesia, Inggris, Latin (ilmiah), dan bahasa daerah—mempermudah
                    identifikasi dan pemanfaatan tanaman hias, konsumsi, dan obat. Pada tanaman hias, ini membantu
                    perawatan dan pengenalan spesies; untuk tanaman konsumsi, meningkatkan pemahaman nutrisi dan peluang
                    ekspor; sementara untuk tanaman obat, mendukung dokumentasi khasiat herbal dan mencegah kesalahan
                    identifikasi. Bahasa Latin memastikan akurasi, sedangkan nama lokal melestarikan budaya dan
                    memudahkan edukasi masyarakat. Pelabelan ini juga mendukung keberlanjutan lingkungan, meningkatkan
                    nilai ekonomi tanaman, dan berfungsi sebagai sarana edukasi di taman atau kebun untuk pelestarian
                    alam dan budaya.
                </h1>
            </div>
            <div class="mt-2">
                <h1 class="text-xl text-justify">Cara Kerja Pelabelan Tanaman :</h1>
                <ol class="list-decimal ms-10 text-justify text-lg">
                    <li>
                        Pengumpulan Data Tanaman: Identifikasi setiap tanaman berdasarkan nama lokal, nama umum
                        (Inggris), nama ilmiah (Latin), dan nama dalam bahasa daerah. Informasi tambahan seperti
                        manfaat, cara perawatan, dan habitat juga dikumpulkan.
                    </li>
                    <li>
                        Pembuatan Label: Data tanaman dirancang dalam bentuk label sederhana namun informatif.
                    </li>
                    <li>
                        Pemasangan pada Tanaman: Label dipasang di dekat tanaman menggunakan tongkat kecil, gantungan,
                        atau ditempelkan langsung ke pot tanpa merusak tanaman.
                    </li>
                    <li>
                        Pemeliharaan Label: Label diperiksa secara berkala untuk memastikan informasi tetap terbaca dan
                        relevan, serta menggantinya jika rusak atau tidak akurat.
                    </li>
                </ol>
            </div>
        </section>

        <!-- Ecobrick Section -->
        <section class="ecobrick mx-10 mt-10" id="ecobrick">
            <div class="bg-primary text-white p-2 rounded">
                <h1 class="text-2xl text-center">ECOBRICK</h1>
            </div>
            <img src="{{asset(" image/slider-2.jpg")}}" alt="" class="w-[60%] flex justify-self-center mt-2">
            <div class="mt-2">
                <h1 class="text-xl text-justify">Manfaat Pembuatan Ecobrick</h1>
                <h1 class="text-lg text-justify">
                    Ecobrick adalah botol plastik yang diisi padat dengan limbah plastik non-organik hingga menjadi
                    bahan bangunan yang kokoh dan tahan lama. Ecobrick berfungsi sebagai solusi untuk mengurangi sampah
                    plastik yang sulit terurai dengan mengubahnya menjadi material ramah lingkungan yang dapat digunakan
                    untuk membuat furnitur, taman vertikal, dinding, atau struktur lainnya. Manfaatnya meliputi
                    pengurangan limbah plastik di lingkungan, pemberdayaan masyarakat untuk mendaur ulang, serta
                    menciptakan alternatif material bangunan yang murah dan berkelanjutan. Dengan ecobrick, kita turut
                    menjaga kebersihan lingkungan dan mendukung gerakan nol sampah.
                </h1>
            </div>
            <div class="mt-2">
                <h1 class="text-xl text-justify">Cara Pembuatan Ecobrick :</h1>
                <ol class="list-decimal ms-10 text-justify text-lg">
                    <li>
                        Siapkan Botol Plastik: Gunakan botol plastik bekas, bersih, dan kering. Botol dengan ukuran
                        standar (600 ml atau 1,5 L) sering digunakan.
                    </li>
                    <li>
                        Kumpulkan Limbah Plastik: Kumpulkan limbah plastik non-organik seperti kantong plastik, bungkus
                        makanan, sedotan, atau plastik bekas lainnya. Pastikan plastik bersih dan kering untuk mencegah
                        pembusukan.
                    </li>
                    <li>
                        Potong Plastik: Potong plastik menjadi ukuran kecil agar mudah dimasukkan ke dalam botol dan
                        lebih rapat saat dipadatkan.
                    </li>
                    <li>
                        Isi Botol: Masukkan plastik ke dalam botol sedikit demi sedikit, kemudian tekan menggunakan
                        tongkat kayu atau bambu hingga padat. Hindari menyisakan ruang kosong untuk memastikan botol
                        kokoh.
                    </li>
                </ol>
            </div>
        </section>

        <!-- Eco Enzyme Section -->
        <section class="eco-enzyme mx-10 mt-10" id="eco-enzyme">
            <div class="bg-primary text-white p-2 rounded">
                <h1 class="text-2xl text-center">ECO ENZYME</h1>
            </div>
            <img src="{{asset(" image/slider-2.jpg")}}" alt="" class="w-[60%] flex justify-self-center mt-2">
            <div class="mt-2">
                <h1 class="text-xl text-justify">Definisi</h1>
                <h1 class="text-lg text-justify">
                    Eco Enzyme adalah cairan hasil fermentasi limbah organik yang bermanfaat untuk berbagai kebutuhan
                    rumah tangga dan lingkungan.
                </h1>
            </div>
            <div class="mt-2">
                <h1 class="text-xl text-justify">Cara & Manfaat Pembuatan Eco Enzyme</h1>
                <h1 class="text-lg text-justify">
                    Untuk membuatnya, campurkan 1 bagian gula merah (atau gula pasir), 3 bagian limbah organik (seperti
                    kulit buah atau sayur), dan 10 bagian air ke dalam wadah tertutup rapat. Aduk perlahan, lalu biarkan
                    fermentasi selama 3 bulan, dengan membuka tutupnya sesekali untuk melepaskan gas. Setelah itu,
                    saring cairannya dan simpan. Manfaat eco enzyme meliputi pembersih serbaguna, pengusir serangga,
                    pupuk tanaman, hingga penghilang bau. Proses ini tidak hanya mengurangi limbah dapur, tetapi juga
                    mendukung praktik hidup ramah lingkungan.
                </h1>
            </div>
            <div class="mt-2">
                <h1 class="text-xl text-justify">Keuntungan Eco Enzyme :</h1>
                <ol class="list-decimal ms-10 text-justify text-lg">
                    <li>
                        Mengurangi Limbah Organik: Proses ini membantu mengolah limbah dapur menjadi produk bermanfaat,
                        mengurangi jumlah sampah yang berakhir di tempat pembuangan akhir.
                    </li>
                    <li>
                        Ramah Lingkungan: Menghasilkan produk alami yang menggantikan bahan kimia rumah tangga, seperti
                        pembersih, pupuk, dan pengusir serangga, sehingga mengurangi polusi kimia.
                    </li>
                    <li>
                        Hemat Biaya: Eco enzyme dapat digunakan sebagai alternatif murah untuk pembersih serbaguna,
                        deterjen, atau produk perawatan tanaman.
                    </li>
                    <li>
                        Memperbaiki Kualitas Tanah dan Air: Cairan ini dapat digunakan sebagai pupuk cair untuk
                        meningkatkan kesuburan tanah, serta membantu memurnikan air yang tercemar.
                    </li>
                    <li>
                        Mendukung Kehidupan Berkelanjutan: Membuat eco enzyme adalah langkah praktis menuju gaya hidup
                        zero waste, sekaligus mengedukasi masyarakat tentang pengelolaan limbah organik.
                    </li>
                </ol>
            </div>
        </section>

        <!-- Footer -->
        @include('layouts.partials.footer')
    </div>
</body>

</html>
