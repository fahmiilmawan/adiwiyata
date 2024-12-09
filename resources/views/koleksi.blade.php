<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koleksi Tanaman | Adiwiyata</title>
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
            background-image: url('{{asset("image/slider-1.jpg")}}');
            background-size: cover;
            background-position: center;
            height: 45vh;
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
        <h1 class="font-semibold">Koleksi Taman & Tanaman</h1>
    </div>

    <section class="hero-section bg-green-500/15" id="home">
        <div class="bg-image content-center bg-green-500 mix-blend-overlay">
            <div class="text-center text-white font-semibold mx-5 lg:mx-0">
                <h1 class="text-3xl">KOLEKSI</h1>
                <h1 class="text-4xl">TAMAN & TANAMAN - ADIWIYATA</h1>
                <h1 class="text-3xl">SMK TARUNA HARAPAN 1 CIPATAT</h1>
            </div>
        </div>
    </section>

    <div class="bg-quaternary py-5">
        <section class="kategori-tanaman">
            <div class="bg-primary mx-10 text-center p-5 rounded">
                <h1 class="text-2xl font-semibold text-white">Kategori</h1>
                <div class="bg-secondary h-1 mx-auto w-1/5"></div>
                <div class="grid lg:grid-cols-3 bg-primary gap-5 mt-10 pb-3">
                    <a href=""
                        class="bg-primary hover:bg-green-900 transition-all ease-in-out duration-500 text-white p-5 justify-items-center border-2 border-secondary rounded">
                        <img src="{{asset("image/tanaman-hias.svg")}}" alt=""
                            class="bg-secondary w-14 h-14 p-2 rounded-full">
                        <div class="">
                            <h1 class="text-xl font-semibold">Tanaman Hias</h1>
                        </div>
                    </a>

                    <a href=""
                        class="bg-primary hover:bg-green-900 transition-all ease-in-out duration-500 text-white p-5 justify-items-center border-2 border-secondary rounded">
                        <img src="{{asset("image/tanaman-obat-keluarga.svg")}}" alt=""
                            class="bg-secondary w-14 h-14 p-2 rounded-full">
                        <div class="">
                            <h1 class="text-xl font-semibold">Tanaman Obat Keluarga</h1>
                        </div>
                    </a>
                    <a href=""
                        class="bg-primary hover:bg-green-900 transition-all ease-in-out duration-500 text-white p-5 justify-items-center border-2 border-secondary rounded">
                        <img src="{{asset("image/tanaman-konsumsi.svg")}}" alt=""
                            class="bg-secondary w-14 h-14 p-2 rounded-full">
                        <div class="">
                            <h1 class="text-xl font-semibold">Tanaman Konsumsi</h1>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- Tanaman Konsumsi Section -->
        <section class="tanaman-konsumsi mt-10 mx-10">
            <div class="bg-primary rounded p-5 text-center text-yellow-500 items-center">
                <h1 class="text-2xl font-semibold">Tanaman Hias</h1>
                <h1 class="">(Terbagi kedalam 7 taman dan 1 lorong)</h1>
            </div>

            <!-- Katalog Taman 1 -->
            <div class="bg-primary mt-5 text-white p-5 rounded">
                <h1 class="text-center lg:text-left text-2xl font-semibold">Katalog Taman 1</h1>
                <div class="bg-secondary h-1 mx-auto lg:m-0 w-1/4 lg:w-1/7"></div>
                <div class="snap-mandatory overflow-x-scroll flex mt-5 rounded">
                    <div class="shrink-0 snap-center flex gap-5">

                        <!-- Tanaman 1 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/cocor_bebek.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Cocor Bebek</h1>
                                <h1 class="text-sm font-semibold">(Bryophyllum pinnatum)</h1>
                                <h1 class="text-xs font-semibold">Life plant</h1>
                            </div>
                        </div>

                        <!-- Tanaman 2 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/jarak_bali.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Jarak Bali</h1>
                                <h1 class="text-sm font-semibold">(Jatropha curcas)</h1>
                                <h1 class="text-xs font-semibold">Jatropha</h1>
                            </div>
                        </div>

                        <!-- Tanaman 3 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/stevia.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Stevia</h1>
                                <h1 class="text-sm font-semibold">(Stevia rebaudiana)</h1>
                                <h1 class="text-xs font-semibold"></h1>
                            </div>
                        </div>

                        <!-- Tanaman 4 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/lidah_buaya.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Lidah Buaya</h1>
                                <h1 class="text-sm font-semibold">(Aloe vera)</h1>
                                <h1 class="text-xs font-semibold"></h1>
                            </div>
                        </div>

                        <!-- Tanaman 5 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/calathea_merak.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Calathea Merak</h1>
                                <h1 class="text-sm font-semibold">(Calathea makoyana)</h1>
                                <h1 class="text-xs font-semibold">Peacock Plant</h1>
                            </div>
                        </div>

                        <!-- Tanaman 6 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/bromelia_hijau.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Bromelia Hijau</h1>
                                <h1 class="text-sm font-semibold">(Bromelia spp.)</h1>
                                <h1 class="text-xs font-semibold">Green bromeliad</h1>
                            </div>
                        </div>

                        <!-- Tanaman 7 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/sri_rezeki.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Sri Rezeki</h1>
                                <h1 class="text-sm font-semibold">(Aglaonema)</h1>
                                <h1 class="text-xs font-semibold">Chinese Evergreen</h1>
                            </div>
                        </div>

                        <!-- Tanaman 8 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/janda_bolong.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Janda Bolong</h1>
                                <h1 class="text-sm font-semibold">(Monstera adansonii)</h1>
                                <h1 class="text-xs font-semibold">Swiss Cheese Plant</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Katalog Taman 2 -->
            <div class="bg-primary mt-5 text-white p-5 rounded">
                <h1 class="text-center lg:text-left text-2xl font-semibold">Katalog Taman 2</h1>
                <div class="bg-secondary h-1 mx-auto lg:m-0 w-1/4 lg:w-1/7"></div>
                <div class="snap-mandatory overflow-x-scroll flex mt-5 rounded">
                    <div class="shrink-0 snap-center flex gap-5">

                        <!-- Tanaman 1 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/anggrek.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Anggrek</h1>
                                <h1 class="text-sm font-semibold">(Dendrobium spp.)</h1>
                                <h1 class="text-xs font-semibold">Dendrobium Orchid</h1>
                            </div>
                        </div>

                        <!-- Tanaman 2 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/lidah_mertua.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Lidah Mertua</h1>
                                <h1 class="text-sm font-semibold">(Sansevieria trifasciata)</h1>
                                <h1 class="text-xs font-semibold">Snake Plant</h1>
                            </div>
                        </div>

                        <!-- Tanaman 3 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/kurma_canaria.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Kurma Canaria</h1>
                                <h1 class="text-sm font-semibold">(Phoenix canariensis)</h1>
                                <h1 class="text-xs font-semibold">Canary Island Date Palm</h1>
                            </div>
                        </div>

                        <!-- Tanaman 4 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/mawar_putih.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Mawar Putih</h1>
                                <h1 class="text-sm font-semibold">(Rosa spp.)</h1>
                                <h1 class="text-xs font-semibold">White Rose</h1>
                            </div>
                        </div>

                        <!-- Tanaman 5 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/rombusa_hijau.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Rombusa Hijau</h1>
                                <h1 class="text-sm font-semibold">(Zamioculcas zamiifolia)</h1>
                                <h1 class="text-xs font-semibold">ZZ plant</h1>
                            </div>
                        </div>

                        <!-- Tanaman 6 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/bromelia_hijau.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Bromelia Hijau</h1>
                                <h1 class="text-sm font-semibold">(Bromelia spp.)</h1>
                                <h1 class="text-xs font-semibold">Green bromeliad</h1>
                            </div>
                        </div>

                        <!-- Tanaman 7 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/lidah_naga_amerika.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Lidah Naga Amerika</h1>
                                <h1 class="text-sm font-semibold">(Dracaena trifasciata)</h1>
                                <h1 class="text-xs font-semibold">American Snake Plant</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Katalog Taman 3 -->
            <div class="bg-primary mt-5 text-white p-5 rounded">
                <h1 class="text-center lg:text-left text-2xl font-semibold">Katalog Taman 3</h1>
                <div class="bg-secondary h-1 mx-auto lg:m-0 w-1/4 lg:w-1/7"></div>
                <div class="snap-mandatory overflow-x-scroll flex mt-5 rounded">
                    <div class="shrink-0 snap-center flex gap-5">

                        <!-- Tanaman 1 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/ekor_tupai.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Ekor Tupai</h1>
                                <h1 class="text-sm font-semibold">(Solenostemon scutellarioides)</h1>
                                <h1 class="text-xs font-semibold">Coleus</h1>
                            </div>
                        </div>

                        <!-- Tanaman 2 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/peperomia_merah.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Peperomia Merah</h1>
                                <h1 class="text-sm font-semibold">(Peperomia spp.)</h1>
                                <h1 class="text-xs font-semibold">Red Peperomia</h1>
                            </div>
                        </div>

                        <!-- Tanaman 3 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/nangka.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Nangka</h1>
                                <h1 class="text-sm font-semibold">(Artocarpus heterophyllus)</h1>
                                <h1 class="text-xs font-semibold">Jackfruit</h1>
                            </div>
                        </div>

                        <!-- Tanaman 4 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/pacing_tawar.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Pacing Tawar</h1>
                                <h1 class="text-sm font-semibold">(Murraya paniculata)</h1>
                                <h1 class="text-xs font-semibold">Orange Jessamine</h1>
                            </div>
                        </div>

                        <!-- Tanaman 5 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/hanjuang.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Hanjuang</h1>
                                <h1 class="text-sm font-semibold">(Clerodendrum thomsoniae)</h1>
                                <h1 class="text-xs font-semibold">Bleeding Heart</h1>
                            </div>
                        </div>

                        <!-- Tanaman 6 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/trikaler.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Trikaler</h1>
                                <h1 class="text-sm font-semibold">(Vernonia amygdalina)</h1>
                                <h1 class="text-xs font-semibold">Bitter Leaf</h1>
                            </div>
                        </div>

                        <!-- Tanaman 7 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/charuna.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Charuna</h1>
                                <h1 class="text-sm font-semibold">(Ficus carica)</h1>
                                <h1 class="text-xs font-semibold">Fig Tree</h1>
                            </div>
                        </div>

                        <!-- Tanaman 8 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/kaktus.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Kaktus</h1>
                                <h1 class="text-sm font-semibold">(Cactaceae spp.)</h1>
                                <h1 class="text-xs font-semibold">Cactus</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Katalog Taman 4 -->
            <div class="bg-primary mt-5 text-white p-5 rounded">
                <h1 class="text-center lg:text-left text-2xl font-semibold">Katalog Taman 4</h1>
                <div class="bg-secondary h-1 mx-auto lg:m-0 w-1/4 lg:w-1/7"></div>
                <div class="snap-mandatory overflow-x-scroll flex mt-5 rounded">
                    <div class="shrink-0 snap-center flex gap-5">

                        <!-- Tanaman 1 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/keledai_tapak_kuda.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Keladi Tapak Kuda</h1>
                                <h1 class="text-sm font-semibold">(Alocasia macrorrhiza)</h1>
                                <h1 class="text-xs font-semibold">Giant Elephant Ear</h1>
                            </div>
                        </div>

                        <!-- Tanaman 2 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/kaktus_gada.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Kaktus Gada</h1>
                                <h1 class="text-sm font-semibold">(Echinopsis spp.)</h1>
                                <h1 class="text-xs font-semibold">Gada Cactus</h1>
                            </div>
                        </div>

                        <!-- Tanaman 3 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/taiwan_beauty.jpeg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Taiwan Beauty</h1>
                                <h1 class="text-sm font-semibold">(Calathea ornata)</h1>
                                <h1 class="text-xs font-semibold"></h1>
                            </div>
                        </div>

                        <!-- Tanaman 4 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/mahkota_berduri.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Mahkota Berduri</h1>
                                <h1 class="text-sm font-semibold">(Euphorbia milii)</h1>
                                <h1 class="text-xs font-semibold">Crown Of Thorns</h1>
                            </div>
                        </div>

                        <!-- Tanaman 5 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/lidah_mertua.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Lidah Mertua</h1>
                                <h1 class="text-sm font-semibold">(Sansevieria trifasciata)</h1>
                                <h1 class="text-xs font-semibold">Snake Plant</h1>
                            </div>
                        </div>

                        <!-- Tanaman 6 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/privet_cina.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Privet Cina</h1>
                                <h1 class="text-sm font-semibold">(Ligustrum Sinense)</h1>
                                <h1 class="text-xs font-semibold">Chinese Privet</h1>
                            </div>
                        </div>

                        <!-- Tanaman 7 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/tanaman_paku.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Tanaman Paku</h1>
                                <h1 class="text-sm font-semibold">(Pteridophyta)</h1>
                                <h1 class="text-xs font-semibold">Ferns</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Katalog Taman 5 -->
            <div class="bg-primary mt-5 text-white p-5 rounded">
                <h1 class="text-center lg:text-left text-2xl font-semibold">Katalog Taman 5</h1>
                <div class="bg-secondary h-1 mx-auto lg:m-0 w-1/4 lg:w-1/7"></div>
                <div class="snap-mandatory overflow-x-scroll flex mt-5 rounded">
                    <div class="shrink-0 snap-center flex gap-5">

                        <!-- Tanaman 1 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/kaktus.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Kaktus</h1>
                                <h1 class="text-sm font-semibold">(Cactaceae spp.)</h1>
                                <h1 class="text-xs font-semibold">Cactus</h1>
                            </div>
                        </div>

                        <!-- Tanaman 2 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/pohon_pisang.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Pohon Pisang</h1>
                                <h1 class="text-sm font-semibold">(Musa spp.)</h1>
                                <h1 class="text-xs font-semibold">Banana Tree</h1>
                            </div>
                        </div>

                        <!-- Tanaman 3 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/taiwan_beauty.jpeg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Taiwan Beauty</h1>
                                <h1 class="text-sm font-semibold">(Calathea ornata)</h1>
                                <h1 class="text-xs font-semibold"></h1>
                            </div>
                        </div>

                        <!-- Tanaman 4 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/mahkota_berduri.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Mahkota Berduri</h1>
                                <h1 class="text-sm font-semibold">(Euphorbia milii)</h1>
                                <h1 class="text-xs font-semibold">Crown Of Thorns</h1>
                            </div>
                        </div>

                        <!-- Tanaman 5 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/lidah_mertua.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Lidah Mertua</h1>
                                <h1 class="text-sm font-semibold">(Sansevieria trifasciata)</h1>
                                <h1 class="text-xs font-semibold">Snake Plant</h1>
                            </div>
                        </div>

                        <!-- Tanaman 6 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/privet_cina.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Privet Cina</h1>
                                <h1 class="text-sm font-semibold">(Ligustrum Sinense)</h1>
                                <h1 class="text-xs font-semibold">Chinese Privet</h1>
                            </div>
                        </div>

                        <!-- Tanaman 7 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/tanaman_paku.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Tanaman Paku</h1>
                                <h1 class="text-sm font-semibold">(Pteridophyta)</h1>
                                <h1 class="text-xs font-semibold">Ferns</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Katalog Taman 6 -->
            <div class="bg-primary mt-5 text-white p-5 rounded">
                <h1 class="text-center lg:text-left text-2xl font-semibold">Katalog Taman 6</h1>
                <div class="bg-secondary h-1 mx-auto lg:m-0 w-1/4 lg:w-1/7"></div>
                <div class="snap-mandatory overflow-x-scroll flex mt-5 rounded">
                    <div class="shrink-0 snap-center flex gap-5">

                        <!-- Tanaman 1 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/adam_eva.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Adam Eva</h1>
                                <h1 class="text-sm font-semibold">(Spathiphyllum)</h1>
                                <h1 class="text-xs font-semibold">Peace Lily</h1>
                            </div>
                        </div>

                        <!-- Tanaman 2 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/pohon_rambutan.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Pohon Rambutan</h1>
                                <h1 class="text-sm font-semibold">(Nephelium lappaceum)</h1>
                                <h1 class="text-xs font-semibold">Rambutan Tree</h1>
                            </div>
                        </div>

                        <!-- Tanaman 3 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/pucuk_merah.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Pucuk Merah</h1>
                                <h1 class="text-sm font-semibold">(Syzygium oleosum)</h1>
                                <h1 class="text-xs font-semibold">Red Leaf Tree</h1>
                            </div>
                        </div>

                        <!-- Tanaman 4 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/jambu_diva.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Jambu Diva</h1>
                                <h1 class="text-sm font-semibold">(Syzygium malaccense)</h1>
                                <h1 class="text-xs font-semibold">Malay Apple</h1>
                            </div>
                        </div>

                        <!-- Tanaman 5 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/nangka.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Nangka</h1>
                                <h1 class="text-sm font-semibold">(Artocarpus heterophyllus)</h1>
                                <h1 class="text-xs font-semibold">Jackfruit</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Katalog Taman 7 -->
            <div class="bg-primary mt-5 text-white p-5 rounded">
                <h1 class="text-center lg:text-left text-2xl font-semibold">Katalog Taman 7</h1>
                <div class="bg-secondary h-1 mx-auto lg:m-0 w-1/4 lg:w-1/7"></div>
                <div class="snap-mandatory overflow-x-scroll flex mt-5 rounded">
                    <div class="shrink-0 snap-center flex gap-5">

                        <!-- Tanaman 1 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/murbei.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Murbei</h1>
                                <h1 class="text-sm font-semibold">(Morus spp.)</h1>
                                <h1 class="text-xs font-semibold">Mulberry</h1>
                            </div>
                        </div>

                        <!-- Tanaman 2 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/ageve.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Agave</h1>
                                <h1 class="text-sm font-semibold">(Agave Univittata)</h1>
                                <h1 class="text-xs font-semibold"></h1>
                            </div>
                        </div>

                        <!-- Tanaman 3 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/jeruk.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Jeruk</h1>
                                <h1 class="text-sm font-semibold">(Citrus spp.)</h1>
                                <h1 class="text-xs font-semibold">Orange</h1>
                            </div>
                        </div>

                        <!-- Tanaman 4 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/mawar.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Mawar</h1>
                                <h1 class="text-sm font-semibold">(Rosa spp.)</h1>
                                <h1 class="text-xs font-semibold">Rose</h1>
                            </div>
                        </div>

                        <!-- Tanaman 5 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/meiranti_bali.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Meiranti Bali</h1>
                                <h1 class="text-sm font-semibold">(Ficus elastica)</h1>
                                <h1 class="text-xs font-semibold">Rubber Plant</h1>
                            </div>
                        </div>

                        <!-- Tanaman 6 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/nanas_kerang.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Nanas Kerang</h1>
                                <h1 class="text-sm font-semibold">(Ananas comosus)</h1>
                                <h1 class="text-xs font-semibold">Pineapple</h1>
                            </div>
                        </div>

                        <!-- Tanaman 7 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/kamboja.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Kamboja</h1>
                                <h1 class="text-sm font-semibold">(Plumeria spp.)</h1>
                                <h1 class="text-xs font-semibold">Frangipani</h1>
                            </div>
                        </div>

                        <!-- Tanaman 8 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/sawo_manila.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Sawo Manila</h1>
                                <h1 class="text-sm font-semibold">(Manilkara zapota)</h1>
                                <h1 class="text-xs font-semibold">Sapodilla</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Katalog Lorong Hijau -->
            <div class="bg-primary mt-5 text-white p-5 rounded">
                <h1 class="text-center lg:text-left text-2xl font-semibold">Katalog Lorong Hijau</h1>
                <div class="bg-secondary h-1 mx-auto lg:m-0 w-1/4 lg:w-1/7"></div>
                <div class="snap-mandatory overflow-x-scroll flex mt-5 rounded">
                    <div class="shrink-0 snap-center flex gap-5">

                        <!-- Tanaman 1 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/taiwan_beauty.jpeg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Taiwan Beauty</h1>
                                <h1 class="text-sm font-semibold">(Gynura procumbens)</h1>
                                <h1 class="text-xs font-semibold"></h1>
                            </div>
                        </div>

                        <!-- Tanaman 2 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/pakis_sisir.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Pakis Sisir</h1>
                                <h1 class="text-sm font-semibold">(Nephrolepis biserrata)</h1>
                                <h1 class="text-xs font-semibold">Ladder Fern</h1>
                            </div>
                        </div>

                        <!-- Tanaman 3 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/karet_bayi.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Karet Bayi</h1>
                                <h1 class="text-sm font-semibold">(Ficus elastic)</h1>
                                <h1 class="text-xs font-semibold">Rubber Plant</h1>
                            </div>
                        </div>

                        <!-- Tanaman 4 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/lili_paris.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Lili Paris</h1>
                                <h1 class="text-sm font-semibold">(Chlorophytum comosum)</h1>
                                <h1 class="text-xs font-semibold">Spider Plant</h1>
                            </div>
                        </div>

                        <!-- Tanaman 5 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/serissa.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Serissa</h1>
                                <h1 class="text-sm font-semibold">(Serissa japonica)</h1>
                                <h1 class="text-xs font-semibold">Snowrose</h1>
                            </div>
                        </div>

                        <!-- Tanaman 6 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/pandan_hias.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Pandan Hias</h1>
                                <h1 class="text-sm font-semibold">(Pandanus amaryllifolius)</h1>
                                <h1 class="text-xs font-semibold">Screwpine</h1>
                            </div>
                        </div>

                        <!-- Tanaman 7 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/epicia.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Epicia</h1>
                                <h1 class="text-sm font-semibold">(Episcia cupreata)</h1>
                                <h1 class="text-xs font-semibold">Flame Violet</h1>
                            </div>
                        </div>

                        <!-- Tanaman 8 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/philokatak.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Philokatak</h1>
                                <h1 class="text-sm font-semibold">(Philodendron selloum)</h1>
                                <h1 class="text-xs font-semibold">Tree Philodendron</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tanaman Obat Keluarga Section -->
        <section class="tanaman-obat-keluarga mt-10 mx-10">
            <div class="bg-primary rounded p-5 text-center text-yellow-500 items-center">
                <h1 class="text-2xl font-semibold">Tanaman Obat Keluarga</h1>
            </div>

            <!-- Katalog Taman -->
            <div class="bg-primary mt-5 text-white p-5 rounded">
                <div class="snap-mandatory overflow-x-scroll flex mt-5 rounded">
                    <div class="shrink-0 snap-center flex gap-5">

                        <!-- Tanaman 1 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/jahe.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Jahe</h1>
                                <h1 class="text-sm font-semibold">(Zingiber officinale)</h1>
                                <h1 class="text-xs font-semibold">Ginger</h1>
                            </div>
                        </div>

                        <!-- Tanaman 2 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/kunyit.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Kunyit</h1>
                                <h1 class="text-sm font-semibold">(Curcuma longa)</h1>
                                <h1 class="text-xs font-semibold">Turmeric</h1>
                            </div>
                        </div>

                        <!-- Tanaman 3 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/cocor_bebek.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Cocor Bebek</h1>
                                <h1 class="text-sm font-semibold">(Bryophyllum pinnatum)</h1>
                                <h1 class="text-xs font-semibold">Life Plant</h1>
                            </div>
                        </div>

                        <!-- Tanaman 4 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/cabai.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Cabai</h1>
                                <h1 class="text-sm font-semibold">(Capsicum annuum)</h1>
                                <h1 class="text-xs font-semibold">Chilli Pepper</h1>
                            </div>
                        </div>

                        <!-- Tanaman 5 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/lengkuas.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Lengkuas</h1>
                                <h1 class="text-sm font-semibold">(Alpinia galanga)</h1>
                                <h1 class="text-xs font-semibold">Galangal</h1>
                            </div>
                        </div>

                        <!-- Tanaman 6 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/kencur.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Kencur</h1>
                                <h1 class="text-sm font-semibold">(Kaempferia galanga)</h1>
                                <h1 class="text-xs font-semibold">Sand Ginger</h1>
                            </div>
                        </div>

                        <!-- Tanaman 7 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/gingseng.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Gingseng</h1>
                                <h1 class="text-sm font-semibold">(Panax ginseng)</h1>
                                <h1 class="text-xs font-semibold"></h1>
                            </div>
                        </div>

                        <!-- Tanaman 8 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/jawer_kotok.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Jawer Kotok</h1>
                                <h1 class="text-sm font-semibold">(Mimulus pudica)</h1>
                                <h1 class="text-xs font-semibold">Sensitive Plant</h1>
                            </div>
                        </div>

                        <!-- Tanaman 9 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/ki_urat.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Ki Urat</h1>
                                <h1 class="text-sm font-semibold">(Adenia digitata)</h1>
                                <h1 class="text-xs font-semibold"></h1>
                            </div>
                        </div>

                        <!-- Tanaman 10 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/ki_remeuk.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Ki Remeuk</h1>
                                <h1 class="text-sm font-semibold">(Cynometra ramiflora)</h1>
                                <h1 class="text-xs font-semibold"></h1>
                            </div>
                        </div>

                        <!-- Tanaman 11 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/sirih_cina.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Sirih Cina</h1>
                                <h1 class="text-sm font-semibold">(Piper sarmentosum)</h1>
                                <h1 class="text-xs font-semibold">Wild Betel Leaf</h1>
                            </div>
                        </div>

                        <!-- Tanaman 12 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/sereh_dapur.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Sereh Dapur</h1>
                                <h1 class="text-sm font-semibold">(Cymbopogon citratus)</h1>
                                <h1 class="text-xs font-semibold">Lemongrass</h1>
                            </div>
                        </div>

                        <!-- Tanaman 13 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/bawang_putih.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Bawang Putih</h1>
                                <h1 class="text-sm font-semibold">(Allium sativum)</h1>
                                <h1 class="text-xs font-semibold">Garlic</h1>
                            </div>
                        </div>

                        <!-- Tanaman 14 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/bawang_merah.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Bawang Merah</h1>
                                <h1 class="text-sm font-semibold">(Allium cepa)</h1>
                                <h1 class="text-xs font-semibold">Re Onion</h1>
                            </div>
                        </div>

                        <!-- Tanaman 15 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/lidah_buaya.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Lidah Buaya</h1>
                                <h1 class="text-sm font-semibold">(Aloe Vera)</h1>
                                <h1 class="text-xs font-semibold"></h1>
                            </div>
                        </div>

                        <!-- Tanaman 16 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/binahong.jpeg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Binahong</h1>
                                <h1 class="text-sm font-semibold">(Anredera cordifolia)</h1>
                                <h1 class="text-xs font-semibold"></h1>
                            </div>
                        </div>

                        <!-- Tanaman 17 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/kumis_kucing.jpeg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Kumis Kucing</h1>
                                <h1 class="text-sm font-semibold">(Orthosiphon stamineus)</h1>
                                <h1 class="text-xs font-semibold">Cat's Whiskers</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tanaman Konsumsi Section -->
        <section class="tanaman-konsumsi mt-10 mx-10">
            <div class="bg-primary rounded p-5 text-center text-yellow-500 items-center">
                <h1 class="text-2xl font-semibold">Tanaman Konsumsi</h1>
            </div>

            <!-- Katalog Taman -->
            <div class="bg-primary mt-5 text-white p-5 rounded">
                <div class="snap-mandatory overflow-x-scroll flex mt-5 rounded">
                    <div class="shrink-0 snap-center flex gap-5">

                        <!-- Tanaman 1 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/kangkung.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Kangkung</h1>
                                <h1 class="text-sm font-semibold">(Ipomoea aquatica)</h1>
                                <h1 class="text-xs font-semibold">Water Spinach</h1>
                            </div>
                        </div>

                        <!-- Tanaman 2 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/kemangi.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Kemangi</h1>
                                <h1 class="text-sm font-semibold">(Ocimum basilicum)</h1>
                                <h1 class="text-xs font-semibold">Basil</h1>
                            </div>
                        </div>

                        <!-- Tanaman 3 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/terong.jpeg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Terong</h1>
                                <h1 class="text-sm font-semibold">(Solanum melongena)</h1>
                                <h1 class="text-xs font-semibold">Egg plant</h1>
                            </div>
                        </div>

                        <!-- Tanaman 4 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/tomat.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Tomat</h1>
                                <h1 class="text-sm font-semibold">(Solanum lycopersicum)</h1>
                                <h1 class="text-xs font-semibold">Tomato</h1>
                            </div>
                        </div>

                        <!-- Tanaman 5 -->
                        <div class="bg-quaternary p-1 rounded">
                            <img src="{{asset("image/koleksi-tanaman/cabai_rawit.jpg")}}" alt=""
                                class="w-80 h-40 aspect-video rounded-t">
                            <div class="text-center text-gray-600">
                                <h1 class="text-xl font-bold text-primary">Cabai Rawit</h1>
                                <h1 class="text-sm font-semibold">(Capsicum frutescens)</h1>
                                <h1 class="text-xs font-semibold">Bird's Eye Chili</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    @include('layouts.partials.footer')
</body>

</html>
