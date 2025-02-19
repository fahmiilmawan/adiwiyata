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
        .dropdown-menu .nested-dropdown {
            display: none;
            left: 100%;
            top: 0;
        }

        .dropdown-menu .dropdown-item:hover .nested-dropdown {
            display: block;
        }
    </style>
</head>

<body class="">

    <!-- Navbar Start -->
    <nav class="bg-primary border-b border-gray-200 fixed top-0 z-50 w-full px-2 lg:px-4">
        <div class="container mx-auto">
            <div class="px-3 lg:px-5">
                <div class="flex items-center justify-between h-16 w-full">

                    <!-- Logo & Brand -->
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('image/Adiwiyata.png') }}" alt="" class="w-32 object-cover" />
                        </div>
                    </div>

                    <!-- Desktop Menu -->
                    <div class="hidden lg:block">
                        <div class="ml-10 flex items-center space-x-4">

                            {{-- Home --}}
                            <a href="{{ route('index') }}#home"
                                class="text-white hover:bg-secondary transition-all ease-in-out duration-500 px-3 py-2 rounded-md text-sm font-medium">
                                Home
                            </a>

                            {{-- About --}}
                            <a href="{{ route('index') }}#about"
                                class="text-white hover:bg-secondary transition-all ease-in-out duration-500 px-3 py-2 rounded-md text-sm font-medium">
                                About
                            </a>

                            {{-- Kader --}}
                            <div class="relative group">
                                <button
                                    class="text-white hover:bg-secondary transition-all ease-in-out duration-500 group px-3 py-2 rounded-md text-sm font-medium inline-flex items-center">
                                    <span>Kader</span>
                                    <svg class="ml-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>

                                <!-- Kader Main Dropdown Menu -->
                                <div
                                    class="dropdown-menu absolute hidden group-hover:block w-60 bg-primary rounded-md shadow-lg">
                                    <a href="{{ route('kader') }}#tanaman-dan-pembibitan"
                                        class="block border-b-2 border-b-secondary px-4 py-2 text-sm text-white hover:bg-secondary transition-all ease-in-out duration-500 my-1 rounded">
                                        Tanaman & Pembibitan</a>
                                    <a href="{{ route('kader') }}#kompos-dan-bank-sampah"
                                        class="block px-4 border-b-2 border-b-secondary py-2 text-sm text-white hover:bg-secondary transition-all ease-in-out duration-500 my-1 rounded">
                                        Kompos & Bank Sampah</a>
                                    <a href="{{ route('kader') }}#sanitasi-dan-kamar-mandi"
                                        class="block px-4 border-b-2 border-b-secondary py-2 text-sm text-white hover:bg-secondary transition-all ease-in-out duration-500 my-1 rounded">
                                        Sanitasi & Kamar Mandi</a>
                                    <a href="{{ route('kader') }}#taman-dan-hutan-sekolah"
                                        class="block px-4 border-b-2 border-b-secondary py-2 text-sm text-white hover:bg-secondary transition-all ease-in-out duration-500 my-1 rounded">
                                        Taman & Hutan Sekolah</a>
                                    <a href="{{ route('kader') }}#kreasi-daur-ulang-sampah"
                                        class="block border-b-2 border-b-secondary px-4 py-2 text-sm text-white hover:bg-secondary transition-all ease-in-out duration-500 mt-1 rounded">
                                        Kreasi Daur Ulang Sampah</a>
                                </div>
                            </div>

                            {{-- Program Kerja --}}
                            <div class="relative group">
                                <button
                                    class="text-white hover:bg-secondary transition-all ease-in-out duration-500 group px-3 py-2 rounded-md text-sm font-medium inline-flex items-center">
                                    <span>Program Kerja</span>
                                    <svg class="ml-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>

                                <!-- Program Kerja Main Dropdown Menu -->
                                <div
                                    class="dropdown-menu absolute hidden group-hover:block w-72 bg-primary rounded-md shadow-lg">
                                    <div
                                        class="border-b-2 border-b-secondary dropdown-item relative px-4 py-2 text-sm text-white hover:bg-secondary transition-all ease-in-out duration-500 flex justify-between items-center my-1 rounded">
                                        <span class="">Pengolahan Sampah Organik</span>
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7" />
                                        </svg>

                                        <!-- Nested Dropdown for Pengolahan Sampah Organik -->
                                        <div class="nested-dropdown absolute w-48 bg-primary rounded-md shadow-lg">
                                            <a href="{{ route('program-kerja') }}#kompos"
                                                class="block border-b-2 border-b-secondary px-4 py-2 text-sm text-white hover:bg-secondary transition-all ease-in-out duration-500 my-1 rounded">
                                                Kompos
                                            </a>
                                            <a href="{{ route('program-kerja') }}#budidaya-maggot"
                                                class="block border-b-2 border-b-secondary px-4 py-2 text-sm text-white hover:bg-secondary transition-all ease-in-out duration-500 my-1 rounded">
                                                Budidaya Maggot
                                            </a>
                                            <a href="{{ route('program-kerja') }}#eco-enzyme"
                                                class="block border-b-2 border-b-secondary px-4 py-2 text-sm text-white hover:bg-secondary transition-all ease-in-out duration-500 my-1 rounded">
                                                Eco Enzyme
                                            </a>
                                            <a href="{{ route('program-kerja') }}#mikroorganisme-lokal"
                                                class="block border-b-2 border-b-secondary px-4 py-2 text-sm text-white hover:bg-secondary transition-all ease-in-out duration-500 my-1 rounded">
                                                Mikroorganisme Lokal
                                            </a>
                                            <a href="{{ route('program-kerja') }}#air-lindi"
                                                class="block border-b-2 border-b-secondary px-4 py-2 text-sm text-white hover:bg-secondary transition-all ease-in-out duration-500 my-1 rounded">
                                                Air Lindi
                                            </a>
                                            <a href="{{ route('program-kerja') }}#eco-derma"
                                                class="block border-b-2 border-b-secondary px-4 py-2 text-sm text-white hover:bg-secondary transition-all ease-in-out duration-500 my-1 rounded">
                                                Eco Derma
                                            </a>
                                            <a href="{{ route('program-kerja') }}#dekomposter"
                                                class="block border-b-2 border-b-secondary px-4 py-2 text-sm text-white hover:bg-secondary transition-all ease-in-out duration-500 mt-1 rounded">
                                                Dekomposter
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="border-b-2 border-b-secondary dropdown-item relative px-4 py-2 text-sm text-white hover:bg-secondary transition-all ease-in-out duration-500 flex justify-between items-center my-1 rounded">
                                        <span class="">Pengolahan Sampah Anorganik</span>
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7" />
                                        </svg>

                                        <!-- Nested Dropdown for Pengolahan Sampah Anorganik -->
                                        <div
                                            class="nested-dropdown absolute w-48 bg-primary hover:bg-secondary transition-all ease-in-out duration-500 rounded-md shadow-lg">
                                            <a href="{{ route('program-kerja') }}#bank-sampah"
                                                class="block border-b-2 border-b-secondary px-4 py-2 text-sm text-white rounded">
                                                Bank Sampah
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="border-b-2 border-b-secondary dropdown-item relative px-4 py-2 text-sm text-white hover:bg-secondary transition-all ease-in-out duration-500 flex justify-between items-center my-1 rounded">
                                        <span class="">Konservasi Air</span>
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7" />
                                        </svg>

                                        <!-- Nested Dropdown for Konservasi Air -->
                                        <div
                                            class="nested-dropdown absolute w-48 bg-primary hover:bg-secondary transition-all ease-in-out duration-500 rounded-md shadow-lg">
                                            <a href="{{ route('program-kerja') }}#limbah-air-wudhu"
                                                class="block border-b-2 border-b-secondary px-4 py-2 text-sm text-white rounded">
                                                Limbah Air Wudhu
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="border-b-2 border-b-secondary dropdown-item relative px-4 py-2 text-sm text-white hover:bg-secondary transition-all ease-in-out duration-500 flex justify-between items-center my-1 rounded">
                                        <span class="">Konservasi Energi</span>
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7" />
                                        </svg>

                                        <!-- Nested Dropdown for Konservasi Energi -->
                                        <div
                                            class="nested-dropdown absolute w-48 bg-primary hover:bg-secondary transition-all ease-in-out duration-500 rounded-md shadow-lg">
                                            <a href="{{ route('program-kerja') }}#hemat-listrik"
                                                class="block border-b-2 border-b-secondary px-4 py-2 text-sm text-white rounded">
                                                Hemat Listrik
                                            </a>
                                        </div>
                                    </div>
                                    <a href="{{ route('program-kerja') }}#sanitasi-dan-drainase"
                                        class="block border-b-2 border-b-secondary px-4 py-2 text-sm text-white hover:bg-secondary transition-all ease-in-out duration-500 rounded">
                                        Sanitasi & Drainase
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hidden lg:block">
                        <a href="{{ route('koleksi') }}"
                            class="bg-secondary hover:bg-[#95822c] transition-all ease-in-out duration-500 text-white px-4 py-2 rounded-lg text-sm font-medium">Koleksi
                            Tanaman</a>
                    </div>

                    <!-- Mobile menu button -->
                    <div class="lg:hidden flex items-center">
                        <button type="button"
                            class="mobile-menu-button inline-flex items-center justify-center p-2 rounded-md text-white border-2 border-secondary hover:bg-secondary transition-all ease-in-out duration-500">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>


                <!-- Mobile menu -->
                <div class="hidden lg:hidden mobile-menu">
                    <div class="px-2 pt-2 pb-3 space-y-1">
                        <a href="{{ route('index') }}#home"
                            class="block border-b-2 border-b-secondary px-3 py-2 text-base font-medium text-white hover:bg-secondary transition-all ease-in-out duration-500 rounded">
                            Home
                        </a>
                        <a href="{{ route('index') }}#about"
                            class="block border-b-2 border-b-secondary px-3 py-2 text-base font-medium text-white hover:bg-secondary transition-all ease-in-out duration-500 rounded">
                            About
                        </a>

                        <div class="space-y-1">
                            <button
                                class="kader-submenu-button border-b-2 border-b-secondary w-full text-left px-3 py-2 text-base font-medium text-white hover:bg-secondary transition-all ease-in-out duration-500 flex justify-between items-center rounded">
                                <span>Kader</span>
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="hidden kader-submenu pl-4">
                                <a href="{{ route('kader') }}#tanaman-dan-pembibitan"
                                    class="block border-b-2 border-b-secondary px-3 py-2 text-base font-medium text-white hover:bg-secondary transition-all ease-in-out duration-500 my-1 rounded">
                                    Tanaman & Pembibitan
                                </a>
                                <a href="{{ route('kader') }}#kompos-dan-bank-sampah"
                                    class="block border-b-2 border-b-secondary px-3 py-2 text-base font-medium text-white hover:bg-secondary transition-all ease-in-out duration-500 my-1 rounded">
                                    Kompos & Bank Sampah
                                </a>
                                <a href="{{ route('kader') }}#sanitasi-dan-kamar-mandi"
                                    class="block border-b-2 border-b-secondary px-3 py-2 text-base font-medium text-white hover:bg-secondary transition-all ease-in-out duration-500 my-1 rounded">
                                    Sanitasi & Kamar Mandi
                                </a>
                                <a href="{{ route('kader') }}#taman-dan-hutan-sekolah"
                                    class="block border-b-2 border-b-secondary px-3 py-2 text-base font-medium text-white hover:bg-secondary transition-all ease-in-out duration-500 my-1 rounded">
                                    Taman & Hutan Sekolah
                                </a>
                                <a href="{{ route('kader') }}#kreasi-daur-ulang-sampah"
                                    class="block border-b-2 border-b-secondary px-3 py-2 text-base font-medium text-white hover:bg-secondary transition-all ease-in-out duration-500 my-1 rounded">
                                    Kreasi Daur Ulang Sampah
                                </a>
                            </div>
                        </div>

                        <div class="space-y-1">
                            <button
                                class="mobile-submenu-button border-b-2 border-b-secondary w-full text-left px-3 py-2 text-base font-medium text-white hover:bg-secondary transition-all ease-in-out duration-500 flex justify-between items-center rounded">
                                <span>Program Kerja</span>
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="hidden mobile-submenu pl-4">
                                <div class="space-y-1">
                                    <button
                                        class="pso-nested-button border-b-2 border-b-secondary w-full text-left px-3 py-2 text-base font-medium text-white hover:bg-secondary transition-all ease-in-out duration-500 flex justify-between items-center my-1 rounded">
                                        <span>Pengolahan Sampah Organik</span>
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </button>
                                    <div class="hidden pso-nested-menu pl-4">
                                        <a href="{{ route('program-kerja') }}#kompos"
                                            class="block border-b-2 border-b-secondary px-3 py-2 text-base font-medium text-white hover:bg-secondary transition-all ease-in-out duration-500 my-1 rounded">
                                            Kompos
                                        </a>
                                        <a href="{{ route('program-kerja') }}#budidaya-maggot"
                                            class="block border-b-2 border-b-secondary px-3 py-2 text-base font-medium text-white hover:bg-secondary transition-all ease-in-out duration-500 my-1 rounded">
                                            Budidaya Maggot
                                        </a>
                                        <a href="{{ route('program-kerja') }}#eco-enzyme"
                                            class="block border-b-2 border-b-secondary px-3 py-2 text-base font-medium text-white hover:bg-secondary transition-all ease-in-out duration-500 my-1 rounded">
                                            Eco Enzyme
                                        </a>
                                        <a href="{{ route('program-kerja') }}#mikroorganisme-lokal"
                                            class="block border-b-2 border-b-secondary px-3 py-2 text-base font-medium text-white hover:bg-secondary transition-all ease-in-out duration-500 my-1 rounded">
                                            Mikroorganisme Lokal
                                        </a>
                                        <a href="{{ route('program-kerja') }}#air-lindi"
                                            class="block border-b-2 border-b-secondary px-3 py-2 text-base font-medium text-white hover:bg-secondary transition-all ease-in-out duration-500 my-1 rounded">
                                            Air Lindi
                                        </a>
                                        <a href="{{ route('program-kerja') }}#eco-derma"
                                            class="block border-b-2 border-b-secondary px-3 py-2 text-base font-medium text-white hover:bg-secondary transition-all ease-in-out duration-500 my-1 rounded">
                                            Eco Derma
                                        </a>
                                        <a href="{{ route('program-kerja') }}#dekomposter"
                                            class="block border-b-2 border-b-secondary px-3 py-2 text-base font-medium text-white hover:bg-secondary transition-all ease-in-out duration-500 my-1 rounded">
                                            Dekomposter
                                        </a>
                                    </div>
                                </div>
                                <div class="space-y-1">
                                    <button
                                        class="psa-nested-button border-b-2 border-b-secondary w-full text-left px-3 py-2 text-base font-medium text-white hover:bg-secondary transition-all ease-in-out duration-500 flex justify-between items-center my-1 rounded">
                                        <span>Pengolahan Sampah Anorganik</span>
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </button>
                                    <div class="hidden psa-nested-menu pl-4">
                                        <a href="{{ route('program-kerja') }}#bank-sampah"
                                            class="block border-b-2 border-b-secondary px-3 py-2 text-base font-medium text-white hover:bg-secondary transition-all ease-in-out duration-500 rounded">
                                            Bank Sampah
                                        </a>
                                    </div>
                                </div>
                                <div class="space-y-1">
                                    <button
                                        class="ka-nested-button border-b-2 border-b-secondary w-full text-left px-3 py-2 text-base font-medium text-white hover:bg-secondary transition-all ease-in-out duration-500 flex justify-between items-center my-1 rounded">
                                        <span>Konservasi Air</span>
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </button>
                                    <div class="hidden ka-nested-menu pl-4">
                                        <a href="{{ route('program-kerja') }}#limbah-air-wudhu"
                                            class="block border-b-2 border-b-secondary px-3 py-2 text-base font-medium text-white hover:bg-secondary transition-all ease-in-out duration-500 rounded">
                                            Limbah Air Wudhu
                                        </a>
                                    </div>
                                </div>
                                <div class="space-y-1">
                                    <button
                                        class="ke-nested-button border-b-2 border-b-secondary w-full text-left px-3 py-2 text-base font-medium text-white hover:bg-secondary transition-all ease-in-out duration-500 flex justify-between items-center my-1 rounded">
                                        <span>Konservasi Energi</span>
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </button>
                                    <div class="hidden ke-nested-menu pl-4">
                                        <a href="{{ route('program-kerja') }}#hemat-listrik"
                                            class="block border-b-2 border-b-secondary px-3 py-2 text-base font-medium text-white hover:bg-secondary transition-all ease-in-out duration-500 rounded">
                                            Hemat Listrik
                                        </a>
                                    </div>
                                </div>
                                <a href="{{ route('program-kerja') }}#sanitasi-dan-drainase"
                                    class="block border-b-2 border-b-secondary px-3 py-2 text-base font-medium text-white hover:bg-secondary transition-all ease-in-out duration-500 my-1 rounded">
                                    Sanitasi & Drainase
                                </a>
                            </div>
                        </div>
                        <a href="{{ route('koleksi') }}"
                            class="bg-secondary hover:bg-yellow-500 block transition-all ease-in-out duration-500 text-white px-4 py-2 mt-5 rounded-lg text-sm font-medium">
                            Koleksi Tanaman
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.querySelector(".mobile-menu-button");
        const mobileMenu = document.querySelector(".mobile-menu");

        mobileMenuButton.addEventListener("click", () => {
            mobileMenu.classList.toggle("hidden");
        });

        // Mobile submenu toggle
        const mobileSubmenuButton = document.querySelector(
            ".mobile-submenu-button"
        );
        const mobileSubmenu = document.querySelector(".mobile-submenu");

        mobileSubmenuButton.addEventListener("click", () => {
            mobileSubmenu.classList.toggle("hidden");
        });

        // Kader submenu toggle
        const kaderSubmenuButton = document.querySelector(
            ".kader-submenu-button"
        );
        const kaderSubmenu = document.querySelector(".kader-submenu");

        kaderSubmenuButton.addEventListener("click", () => {
            kaderSubmenu.classList.toggle("hidden");
        });

        // PSO nested menu toggle
        const psoNestedButton = document.querySelector(".pso-nested-button");
        const psoNestedMenu = document.querySelector(".pso-nested-menu");

        psoNestedButton.addEventListener("click", () => {
            psoNestedMenu.classList.toggle("hidden");
        });

        // PSA nested menu toggle
        const psaNestedButton = document.querySelector(".psa-nested-button");
        const psaNestedMenu = document.querySelector(".psa-nested-menu");

        psaNestedButton.addEventListener("click", () => {
            psaNestedMenu.classList.toggle("hidden");
        });

        // KA nested menu toggle
        const kaNestedButton = document.querySelector(".ka-nested-button");
        const kaNestedMenu = document.querySelector(".ka-nested-menu");

        kaNestedButton.addEventListener("click", () => {
            kaNestedMenu.classList.toggle("hidden");
        });

        // KE nested menu toggle
        const keNestedButton = document.querySelector(".ke-nested-button");
        const keNestedMenu = document.querySelector(".ke-nested-menu");

        keNestedButton.addEventListener("click", () => {
            keNestedMenu.classList.toggle("hidden");
        });
    </script>

    <!-- Navbar End -->
</body>

</html>
