<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @include('layouts.partials.navbar')

    <div class="container">
        <h1 class="text-2xl font-bold">{{ $tanaman->nama }}</h1>
        <p>Jenis: {{ $tanaman->jenis }}</p>
        <p>Deskripsi: {{ $tanaman->deskripsi }}</p>
    </div>

    @include('layouts.partials.footer')
</body>

</html>
