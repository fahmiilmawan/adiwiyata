<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adiwiyata Test</title>

    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="./public/css/output.css">

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
    </style>
</head>

<body class="">

    <!-- Navigasi Bar -->
    <nav class="bg-primary shadow-lg fixed w-full top-0 z-40">
        <div class="max-w-7xl px-2 mx-5 lg:mx-10">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <img src="{{asset("image/adiwiyata.png")}}" alt="" class="w-32">
                </div>

                <!-- Desktop Menu -->
                <div class="hidden lg:flex items-center space-x-4">
                    <a href="{{route("index")}}#home"
                        class="text-white hover:bg-secondary transition-all ease-in-out duration-500 px-3 py-2 rounded-md">
                        Home
                    </a>
                    <a href="{{route("index")}}#about"
                        class="text-white hover:bg-secondary transition-all ease-in-out duration-500 px-3 py-2 rounded-md">
                        About
                    </a>

                    <!-- Dropdown Kelompok Kerja -->
                    <div class="relative" x-data="{ open: false }">
                        <button
                            @click="open = !open; document.getElementById('programDropdown').classList.add('hidden')"
                            class="text-white hover:bg-secondary transition-all ease-in-out duration-500 px-3 py-2 rounded-md">
                            Kelompok Kerja
                            <svg class="inline-block w-4 h-4 ml-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div id="kelompokDropdown" class="absolute hidden z-50 mt-2 w-72 bg-primary rounded-md shadow-lg">
                            <a href="{{route('kelompok-kerja')}}#tanaman-dan-pembibitan" class="block px-4 py-2 text-white hover:bg-secondary text-center rounded border-b border-b-secondary">
                                Tanaman & Pembibitan
                            </a>
                            <a href="{{route('kelompok-kerja')}}#kompos-dan-bank-sampah" class="block px-4 py-2 text-white hover:bg-secondary text-center rounded border-b border-b-secondary">
                                Kompos & Bank Sampah
                            </a>
                            <a href="{{route('kelompok-kerja')}}#sanitasi-dan-kamar-mandi" class="block px-4 py-2 text-white hover:bg-secondary text-center rounded border-b border-b-secondary">
                                Sanitasi & Kamar Mandi
                            </a>
                            <a href="{{route('kelompok-kerja')}}#taman-dan-hutan-sekolah" class="block px-4 py-2 text-white hover:bg-secondary text-center rounded border-b border-b-secondary">
                                Taman & Hutan Sekolah
                            </a>
                            <a href="{{route('kelompok-kerja')}}#kreasi-daur-ulang-sampah" class="block px-4 py-2 text-white hover:bg-secondary text-center rounded border-b border-b-secondary">
                                Kreasi Daur Ulang Sampah
                            </a>
                        </div>
                    </div>

                    <!-- Dropdown Program Kerja -->
                    <div class="relative" x-data="{ open: false }">
                        <button
                            @click="open = !open; document.getElementById('kelompokDropdown').classList.add('hidden')"
                            class="text-white hover:bg-secondary transition-all ease-in-out duration-500 px-3 py-2 rounded-md">
                            Program Kerja
                            <svg class="inline-block w-4 h-4 ml-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div id="programDropdown" class="absolute hidden z-50 mt-2 w-48 bg-primary rounded-md shadow-lg">
                            <a href="{{route('program-kerja')}}#bank-sampah" class="block px-4 py-2 text-white hover:bg-secondary text-center rounded border-b border-b-secondary">
                                Bank Sampah
                            </a>
                            <a href="{{route('program-kerja')}}#budidaya-maggot" class="block px-4 py-2 text-white hover:bg-secondary text-center rounded border-b border-b-secondary">
                                Budidaya Maggot
                            </a>
                            <a href="{{route('program-kerja')}}#pembibitan" class="block px-4 py-2 text-white hover:bg-secondary text-center rounded border-b border-b-secondary">
                                Pembibitan
                            </a>
                            <a href="{{route('program-kerja')}}#aquaphonik" class="block px-4 py-2 text-white hover:bg-secondary text-center rounded border-b border-b-secondary">
                                Aquaphonik
                            </a>
                            <a href="{{route('program-kerja')}}#pupuk-organik-cair" class="block px-4 py-2 text-white hover:bg-secondary text-center rounded border-b border-b-secondary">
                                Pupuk Organik Cair
                            </a>
                            <a href="{{route('program-kerja')}}#limbah-air-wudhu" class="block px-4 py-2 text-white hover:bg-secondary text-center rounded border-b border-b-secondary">
                                Limbah Air Wudhu
                            </a>
                            <a href="{{route('program-kerja')}}#label-tanaman" class="block px-4 py-2 text-white hover:bg-secondary text-center rounded border-b border-b-secondary">
                                Label Tanaman
                            </a>
                            <a href="{{route('program-kerja')}}#ecobrick" class="block px-4 py-2 text-white hover:bg-secondary text-center rounded border-b border-b-secondary">
                                Ecobrick
                            </a>
                            <a href="{{route('program-kerja')}}#eco-enzyme" class="block px-4 py-2 text-white hover:bg-secondary text-center rounded border-b border-b-secondary">
                                Eco Enzyme
                            </a>
                        </div>
                    </div>

                    <a href="{{route('koleksi')}}"
                        class="text-white hover:bg-secondary transition-all ease-in-out duration-500 px-3 py-2 rounded-md">
                        Koleksi Tanaman
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="lg:hidden flex items-center">
                    <button id="mobileMenuBtn"
                        class="text-white hover:bg-green-900 transition-all ease-in-out duration-500 rounded p-2">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu - Now Fixed Position -->
    <div id="mobileMenu" class="mobile-menu lg:hidden p-4 z-40">
        <a href="{{route('index')}}#home"
            class="block text-white hover:bg-secondary transition-all ease-in-out duration-500 px-3 py-2 rounded">
            Home
        </a>
        <a href="{{route('index')}}#about"
            class="block text-white hover:bg-secondary transition-all ease-in-out duration-500 px-3 py-2 rounded">
            About
        </a>

        <!-- Mobile Kelompok Kerja Dropdown -->
        <div class="relative">
            <button id="mobileKelompokBtn"
                class="w-full text-left text-white hover:bg-secondary transition-all ease-in-out duration-500 px-3 py-2 rounded">
                Kelompok Kerja
                <svg class="inline-block w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div id="mobileKelompokDropdown" class="hidden pl-6">
                <a href="{{route('kelompok-kerja')}}#tanaman-dan-pembibitan"
                    class="block text-white hover:bg-secondary transition-all ease-in-out duration-500 px-3 py-2 border-b border-b-secondary rounded">
                    Tanaman & Pembibitan
                </a>
                <a href="{{route('kelompok-kerja')}}#kompos-dan-bank-sampah"
                    class="block text-white hover:bg-secondary transition-all ease-in-out duration-500 px-3 py-2 border-b border-b-secondary rounded">
                    Kompos & Bank Sampah
                </a>
                <a href="{{route('kelompok-kerja')}}#sanitasi-dan-kamar-mandi"
                    class="block text-white hover:bg-secondary transition-all ease-in-out duration-500 px-3 py-2 border-b border-b-secondary rounded">
                    Sanitasi & Kamar Mandi
                </a>
                <a href="{{route('kelompok-kerja')}}#taman-dan-hutan-sekolah"
                    class="block text-white hover:bg-secondary transition-all ease-in-out duration-500 px-3 py-2 border-b border-b-secondary rounded">
                    Taman & Hutan Sekolah
                </a>
                <a href="{{route('kelompok-kerja')}}#kreasi-daur-ulang-sampah"
                    class="block text-white hover:bg-secondary transition-all ease-in-out duration-500 px-3 py-2 border-b border-b-secondary rounded">
                    Kreasi Daur Ulang Sampah
                </a>
            </div>
        </div>

        <!-- Mobile Program Kerja Dropdown -->
        <div class="relative">
            <button id="mobileProgramBtn"
                class="w-full text-left text-white hover:bg-secondary transition-all ease-in-out duration-500 px-3 py-2 rounded">
                Program Kerja
                <svg class="inline-block w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div id="mobileProgramDropdown" class="hidden pl-6">
                <a href="{{route('program-kerja')}}#bank-sampah"
                    class="block text-white hover:bg-secondary transition-all ease-in-out duration-500 px-3 py-2 border-b border-b-secondary rounded">
                    Bank Sampah
                </a>
                <a href="{{route('program-kerja')}}#budidaya-maggot"
                    class="block text-white hover:bg-secondary transition-all ease-in-out duration-500 px-3 py-2 border-b border-b-secondary rounded">
                    Budidaya Maggot
                </a>
                <a href="{{route('program-kerja')}}#pembibitan"
                    class="block text-white hover:bg-secondary transition-all ease-in-out duration-500 px-3 py-2 border-b border-b-secondary rounded">
                    Pembibitan
                </a>
                <a href="{{route('program-kerja')}}#aquaphonik"
                    class="block text-white hover:bg-secondary transition-all ease-in-out duration-500 px-3 py-2 border-b border-b-secondary rounded">
                    Aquaphonik
                </a>
                <a href="{{route('program-kerja')}}#pupuk-organik-cair"
                    class="block text-white hover:bg-secondary transition-all ease-in-out duration-500 px-3 py-2 border-b border-b-secondary rounded">
                    Pupuk Organik Cair
                </a>
                <a href="{{route('program-kerja')}}#limbah-air-wudhu"
                    class="block text-white hover:bg-secondary transition-all ease-in-out duration-500 px-3 py-2 border-b border-b-secondary rounded">
                    Limbah Air Wudhu
                </a>
                <a href="{{route('program-kerja')}}#label-tanaman"
                    class="block text-white hover:bg-secondary transition-all ease-in-out duration-500 px-3 py-2 border-b border-b-secondary rounded">
                    Label Tanaman
                </a>
                <a href="{{route('program-kerja')}}#ecobrick"
                    class="block text-white hover:bg-secondary transition-all ease-in-out duration-500 px-3 py-2 border-b border-b-secondary rounded">
                    Ecobrick
                </a>
                <a href="{{route('program-kerja')}}#eco-enzyme"
                    class="block text-white hover:bg-secondary transition-all ease-in-out duration-500 px-3 py-2 border-b border-b-secondary rounded">
                    Eco Enzyme
                </a>
            </div>
        </div>

        <a href="{{route('koleksi')}}"
            class="block text-white hover:bg-secondary transition-all ease-in-out duration-500 px-3 py-2 rounded">
            Koleksi Tanaman
        </a>
    </div>

    <script>
        // Mobile menu toggle with slide effect
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('show');
        });

        // Desktop dropdowns
        const kelompokBtn = document.querySelector('[x-data="{ open: false }"]');
        const programBtn = document.querySelectorAll('[x-data="{ open: false }"]')[1];
        const kelompokDropdown = document.getElementById('kelompokDropdown');
        const programDropdown = document.getElementById('programDropdown');

        kelompokBtn.addEventListener('click', () => {
            kelompokDropdown.classList.toggle('hidden');
            programDropdown.classList.add('hidden');
        });

        programBtn.addEventListener('click', () => {
            programDropdown.classList.toggle('hidden');
            kelompokDropdown.classList.add('hidden');
        });

        // Close dropdowns when clicking outside
        document.addEventListener('click', (e) => {
            if (!kelompokBtn.contains(e.target)) {
                kelompokDropdown.classList.add('hidden');
            }
            if (!programBtn.contains(e.target)) {
                programDropdown.classList.add('hidden');
            }
        });

        // Mobile dropdowns
        const mobileKelompokBtn = document.getElementById('mobileKelompokBtn');
        const mobileProgramBtn = document.getElementById('mobileProgramBtn');
        const mobileKelompokDropdown = document.getElementById('mobileKelompokDropdown');
        const mobileProgramDropdown = document.getElementById('mobileProgramDropdown');

        mobileKelompokBtn.addEventListener('click', () => {
            mobileKelompokDropdown.classList.toggle('hidden');
            mobileProgramDropdown.classList.add('hidden');
        });

        mobileProgramBtn.addEventListener('click', () => {
            mobileProgramDropdown.classList.toggle('hidden');
            mobileKelompokDropdown.classList.add('hidden');
        });
    </script>
</body>

</html>
