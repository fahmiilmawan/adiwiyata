<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail - {{ $tanaman->nama_tanaman }}</title>
    <link rel="shortcut icon" href="{{ asset('image/logo-adiwiyata.png') }}" type="image/x-icon">
</head>

<body>
    @include('layouts.partials.navbar')

    <div class="bg-quaternary">
        <div class="relative top-16 bg-primary px-5 lg:px-9">
            <div class="container mx-auto">
                <div class="flex text-white p-2 gap-5 items-center">
                    <a href="{{ route('koleksi') }}" class="fa-solid fa-arrow-left"></a>
                    <p class="">Kembali</p>
                </div>
                <h1 class="text-2xl text-white font-semibold">{{ $tanaman->nama_tanaman }}</h1>
                <h1 class="text-lg font-light italic text-white">{{ $tanaman->nama_latin }}</h1>
            </div>
        </div>

        <section class="">
            <div class="p-2 lg:p-4">
                <div class="container mx-auto">
                    <div class="p-3 lg:p-5">
                        <div class="mt-20 bg-white/80 shadow-md p-5 rounded">
                            <p class="inline-block bg-green-100 p-2 rounded-full">{{ $tanaman->kategori_tanaman }}</p>
                            <p class="mt-5">{{ $tanaman->deskripsi }}</p>
                        </div>
                        <div class="mt-5 bg-white/80 shadow-md p-5 rounded">
                            <h1 class="text-xl font-semibold">Panduan Perawatan</h1>
                            <div class="mt-2">
                                <h1 class="font-semibold">Penyiraman</h1>
                                <p class="">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non et
                                    inventore optio. Minima quibusdam illo saepe eligendi fugit magnam officiis odio,
                                    nostrum assumenda modi et, dolorem, eius laboriosam velit. Nostrum.</p>
                            </div>
                            <div class="mt-2">
                                <h1 class="font-semibold">Pencahayaan</h1>
                                <p class="">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non et
                                    inventore optio. Minima quibusdam illo saepe eligendi fugit magnam officiis odio,
                                    nostrum assumenda modi et, dolorem, eius laboriosam velit. Nostrum.</p>
                            </div>
                            <div class="mt-2">
                                <h1 class="font-semibold">Suhu</h1>
                                <p class="">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non et
                                    inventore optio. Minima quibusdam illo saepe eligendi fugit magnam officiis odio,
                                    nostrum assumenda modi et, dolorem, eius laboriosam velit. Nostrum.</p>
                            </div>
                            <div class="mt-2">
                                <h1 class="font-semibold">Kelembapan</h1>
                                <p class="">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non et
                                    inventore optio. Minima quibusdam illo saepe eligendi fugit magnam officiis odio,
                                    nostrum assumenda modi et, dolorem, eius laboriosam velit. Nostrum.</p>
                            </div>
                        </div>
                        <div class="mt-5 bg-white/80 shadow-md p-5 rounded">
                            <h1 class="text-xl font-semibold">Tips Tambahan</h1>
                            <ul class="list-disc">
                                <li class="ms-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio
                                    libero nemo cum! Doloribus magni eligendi cumque ab itaque suscipit, animi possimus
                                    quae delectus ducimus quidem assumenda obcaecati fugiat iste similique.</li>
                                <li class="ms-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio
                                    libero nemo cum! Doloribus magni eligendi cumque ab itaque suscipit, animi possimus
                                    quae delectus ducimus quidem assumenda obcaecati fugiat iste similique.</li>
                                <li class="ms-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio
                                    libero nemo cum! Doloribus magni eligendi cumque ab itaque suscipit, animi possimus
                                    quae delectus ducimus quidem assumenda obcaecati fugiat iste similique.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('layouts.partials.footer')
    </div>
</body>

</html>
