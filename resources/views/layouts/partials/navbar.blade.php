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

    <!-- Navigasi Bar -->
    <nav class="bg-primary border-b border-gray-200 fixed top-0 w-full z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Logo & Brand -->
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img src="{{asset('image/Adiwiyata.png')}}" alt="" class="w-32">
                    </div>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-center space-x-4">
                        <a href="{{route('index')}}#home" class="text-white hover:bg-secondary transition-all ease-in-out duration-500 px-3 py-2 rounded-md text-sm font-medium">Home</a>
                        <a href="{{route('index')}}#about" class="text-white hover:bg-secondary transition-all ease-in-out duration-500 px-3 py-2 rounded-md text-sm font-medium">About</a>
                        <div class="relative group">
                            <button class="text-white hover:bg-secondary transition-all ease-in-out duration-500 group px-3 py-2 rounded-md text-sm font-medium inline-flex items-center">
                                <span>Kader</span>
                                <svg class="ml-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <!-- Main Dropdown menu -->
                            <div class="dropdown-menu absolute hidden group-hover:block w-60 bg-primary rounded-md shadow-lg py-1">
                                <a href="{{route('kader')}}#tanaman-dan-pembibitan" class="block px-4 py-2 text-sm text-white hover:bg-secondary transition-all ease-in-out duration-500">Tanaman & Pembibitan</a>
                                <a href="{{route('kader')}}#kompos-dan-bank-sampah" class="block px-4 py-2 text-sm text-white hover:bg-secondary transition-all ease-in-out duration-500">Kompos & Bank Sampah</a>
                                <a href="{{route('kader')}}#sanitasi-dan-kamar-mandi" class="block px-4 py-2 text-sm text-white hover:bg-secondary transition-all ease-in-out duration-500">Sanitasi & Kamar Mandi</a>
                                <a href="{{route('kader')}}#taman-dan-hutan-sekolah" class="block px-4 py-2 text-sm text-white hover:bg-secondary transition-all ease-in-out duration-500">Taman & Hutan Sekolah</a>
                                <a href="{{route('kader')}}#kreasi-daur-ulang-sampah" class="block px-4 py-2 text-sm text-white hover:bg-secondary transition-all ease-in-out duration-500">Kreasi Daur Ulang Sampah</a>
                            </div>
                        </div>
                        <div class="relative group">
                            <button class="text-white hover:bg-secondary transition-all ease-in-out duration-500 group px-3 py-2 rounded-md text-sm font-medium inline-flex items-center">
                                <span>Program Kerja</span>
                                <svg class="ml-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <!-- Main Dropdown menu -->
                            <div class="dropdown-menu absolute hidden group-hover:block w-72 bg-primary rounded-md shadow-lg py-1">
                                <div class="dropdown-item relative px-4 py-2 text-sm text-white hover:bg-secondary transition-all ease-in-out duration-500 flex justify-between items-center">
                                    <span class="">Pengolahan Sampah Organik</span>
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                    <!-- Nested Dropdown for Figma -->
                                    <div class="nested-dropdown absolute w-48 bg-primary rounded-md shadow-lg py-1">
                                        <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-secondary transition-all ease-in-out duration-500">Kompos</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-secondary transition-all ease-in-out duration-500">Budidaya Maggot</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-secondary transition-all ease-in-out duration-500">Eco Enzym</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-secondary transition-all ease-in-out duration-500">MOL</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-secondary transition-all ease-in-out duration-500">Air Lindi</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-secondary transition-all ease-in-out duration-500">Eco Derma</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-secondary transition-all ease-in-out duration-500">Dekomposter</a>
                                    </div>
                                </div>
                                <div class="dropdown-item relative px-4 py-2 text-sm text-white hover:bg-secondary transition-all ease-in-out duration-500 flex justify-between items-center">
                                    <span class="">Pengolahan Sampah Anorganik</span>
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                    <!-- Nested Dropdown for Figma -->
                                    <div class="nested-dropdown absolute w-48 bg-primary hover:bg-secondary transition-all ease-in-out duration-500 rounded-md shadow-lg py-1">
                                        <a href="#" class="block px-4 py-2 text-sm text-white">Bank Sampah</a>
                                    </div>
                                </div>
                                <div class="dropdown-item relative px-4 py-2 text-sm text-white hover:bg-secondary transition-all ease-in-out duration-500 flex justify-between items-center">
                                    <span class="">Konservasi Air</span>
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                    <!-- Nested Dropdown for Figma -->
                                    <div class="nested-dropdown absolute w-48 bg-primary hover:bg-secondary transition-all ease-in-out duration-500 rounded-md shadow-lg py-1">
                                        <a href="#" class="block px-4 py-2 text-sm text-white">Limbah Air Wudhu</a>
                                    </div>
                                </div>
                                <div class="dropdown-item relative px-4 py-2 text-sm text-white hover:bg-secondary transition-all ease-in-out duration-500 flex justify-between items-center">
                                    <span class="">Konservasi Energi</span>
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                    <!-- Nested Dropdown for Figma -->
                                    <div class="nested-dropdown absolute w-48 bg-primary hover:bg-secondary transition-all ease-in-out duration-500 rounded-md shadow-lg py-1">
                                        <a href="#" class="block px-4 py-2 text-sm text-white">Hemat Listrik</a>
                                    </div>
                                </div>
                                <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-secondary transition-all ease-in-out duration-500">Sanitasi dan Drainase</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hidden md:block">
                    <button class="bg-yellow-500 hover:bg-secondary transition-all ease-in-out duration-500 text-white px-4 py-2 rounded-lg text-sm font-medium">
                        Koleksi Tanaman
                    </button>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button type="button" class="mobile-menu-button inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div class="hidden md:hidden mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-secondary">Home</a>
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-secondary">About</a>

                <div class="space-y-1">
                    <button class="kader-submenu-button w-full text-left px-3 py-2 rounded-md text-base font-medium text-white hover:bg-secondary flex justify-between items-center">
                        <span>Kader</span>
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="hidden kader-submenu pl-4">
                        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-secondary">Tanaman & Pembibitan</a>
                        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-secondary">Kompos & Bank Sampah</a>
                        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-secondary">Sanitasi & Kamar Mandi</a>
                        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-secondary">Taman & Hutan Sekolah</a>
                        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-secondary">Kreasi Daur Ulang Sampah</a>
                    </div>
                </div>

                <div class="space-y-1">
                    <button class="mobile-submenu-button w-full text-left px-3 py-2 rounded-md text-base font-medium text-white hover:bg-secondary flex justify-between items-center">
                        <span>Program Kerja</span>
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="hidden mobile-submenu pl-4">
                        <div class="space-y-1">
                            <button class="pso-nested-button w-full text-left px-3 py-2 rounded-md text-base font-medium text-white hover:bg-secondary flex justify-between items-center">
                                <span>Pengolahan Sampah Organik</span>
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="hidden pso-nested-menu pl-4">
                                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-secondary">Kompos</a>
                                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-secondary">Budidaya Maggot</a>
                                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-secondary">Eco Enzym</a>
                                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-secondary">MOL</a>
                                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-secondary">Air Lindi</a>
                                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-secondary">Eco Derma</a>
                                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-secondary">Dekomposter</a>
                            </div>
                        </div>
                        <div class="space-y-1">
                            <button class="psa-nested-button w-full text-left px-3 py-2 rounded-md text-base font-medium text-white hover:bg-secondary flex justify-between items-center">
                                <span>Pengolahan Sampah Anorganik</span>
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="hidden psa-nested-menu pl-4">
                                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-secondary">Bank Sampah</a>
                            </div>
                        </div>
                        <div class="space-y-1">
                            <button class="ka-nested-button w-full text-left px-3 py-2 rounded-md text-base font-medium text-white hover:bg-secondary flex justify-between items-center">
                                <span>Konservasi Air</span>
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="hidden ka-nested-menu pl-4">
                                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-secondary">Limbah Air Wudhu</a>
                            </div>
                        </div>
                        <div class="space-y-1">
                            <button class="ke-nested-button w-full text-left px-3 py-2 rounded-md text-base font-medium text-white hover:bg-secondary flex justify-between items-center">
                                <span>Konservasi Energi</span>
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="hidden ke-nested-menu pl-4">
                                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-secondary">Hemat Energi</a>
                            </div>
                        </div>
                        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-secondary">Sanitasi dan Drainase
                        </a>
                    </div>
                </div>
                <button class="w-full bg-yellow-500 hover:bg-secondary text-white px-4 py-2 rounded-lg text-sm font-medium">
                    Koleksi Tanaman
                </button>
            </div>
        </div>
    </nav>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.querySelector('.mobile-menu-button')
        const mobileMenu = document.querySelector('.mobile-menu')

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden')
        })

        // Mobile submenu toggle
        const mobileSubmenuButton = document.querySelector('.mobile-submenu-button')
        const mobileSubmenu = document.querySelector('.mobile-submenu')

        mobileSubmenuButton.addEventListener('click', () => {
            mobileSubmenu.classList.toggle('hidden')
        })

        // Kader submenu toggle
        const kaderSubmenuButton = document.querySelector('.kader-submenu-button')
        const kaderSubmenu = document.querySelector('.kader-submenu')

        kaderSubmenuButton.addEventListener('click', () => {
            kaderSubmenu.classList.toggle('hidden')
        })

        // PSO nested menu toggle
        const psoNestedButton = document.querySelector('.pso-nested-button')
        const psoNestedMenu = document.querySelector('.pso-nested-menu')

        psoNestedButton.addEventListener('click', () => {
            psoNestedMenu.classList.toggle('hidden')
        })

        // PSA nested menu toggle
        const psaNestedButton = document.querySelector('.psa-nested-button')
        const psaNestedMenu = document.querySelector('.psa-nested-menu')

        psaNestedButton.addEventListener('click', () => {
            psaNestedMenu.classList.toggle('hidden')
        })

        // KA nested menu toggle
        const kaNestedButton = document.querySelector('.ka-nested-button')
        const kaNestedMenu = document.querySelector('.ka-nested-menu')

        kaNestedButton.addEventListener('click', () => {
            kaNestedMenu.classList.toggle('hidden')
        })

        // KE nested menu toggle
        const keNestedButton = document.querySelector('.ke-nested-button')
        const keNestedMenu = document.querySelector('.ke-nested-menu')

        keNestedButton.addEventListener('click', () => {
            keNestedMenu.classList.toggle('hidden')
        })
    </script>
</body>

</html>
