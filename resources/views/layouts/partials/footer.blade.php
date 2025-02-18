<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adiwiyata Test</title>

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
    </style>
</head>

<body class="">

    <!-- Footer Start -->
    <section class="footer bg-primary p-2 lg:p-4 text-white mt-4" id="footer">
        <div class="container mx-auto p-3 lg:p-5">
            <div class="grid lg:grid-cols-3 gap-5">
                <div class="col-span-full">
                    <h1 class="text-xl font-semibold">ADIWIYATA</h1>
                    <div class="bg-secondary h-1 shadow-2xl shadow-white mb-2"></div>
                    <p class="text-justify">
                        Program Adiwiyata bertujuan membentuk sekolah berbudaya
                        lingkungan dengan mengintegrasikan pendidikan lingkungan dalam
                        pembelajaran. Program ini mendorong pengelolaan lingkungan
                        seperti pengurangan limbah dan konservasi sumber daya, serta
                        partisipasi aktif warga sekolah untuk menciptakan lingkungan
                        bersih dan sehat.
                    </p>
                </div>
                <div class="">
                    <h1 class="text-xl font-semibold">Contact</h1>
                    <div class="bg-secondary h-1 shadow-2xl shadow-white lg:w-1/4"></div>
                    <div class="">
                        <div class="flex gap-1 items-center mt-2">
                            <i class="fa-solid fa-envelope"></i>
                            <p class="">smktarunaharapan1@gmail.com</p>
                        </div>
                        <div class="flex gap-1 mt-2 items-center">
                            <i class="fa-solid fa-phone"></i>
                            <p class="">081-234-567</p>
                        </div>
                        <div class="flex gap-1 mt-2 items-start">
                            <i class="fa-solid fa-location-dot"></i>
                            <p class="">
                                Jl. Raya Cipatat No. 28 B Ciptaharja, Kec. Cipatat, Kab.
                                Bandung Barat
                            </p>
                        </div>
                    </div>
                </div>
                <div class="lg:text-center items-center">
                    <h1 class="text-xl font-semibold">Quick Link</h1>
                    <div class="bg-secondary h-1 shadow-2xl shadow-white lg:mx-auto lg:w-1/4 mb-2"></div>
                    <a href="{{ route('index') }}#home" class="block hover:underline">Home</a>
                    <a href="{{ route('index') }}#about" class="block hover:underline">About</a>
                    <a href="{{ route('kader') }}" class="block hover:underline">Kader</a>
                    <a href="{{ route('program-kerja') }}" class="block hover:underline">Program Kerja</a>
                    <a href="" class="block hover:underline">Koleksi</a>
                </div>
                <div class="text-center items-center">
                    <h1 class="text-xl font-semibold">Follow Us</h1>
                    <div class="bg-secondary h-1 shadow-2xl shadow-white mx-auto lg:w-1/4 mb-2"></div>
                    <a href="https://instagram.com/smktarunaharapancipatat" class="">
                        <i class="fa-brands fa-instagram fa-2x"></i>
                    </a>
                    <a href="https://youtube.com/@tarpanmedia" class="">
                        <i class="fa-brands fa-youtube fa-2x"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer End -->
</body>

</html>
