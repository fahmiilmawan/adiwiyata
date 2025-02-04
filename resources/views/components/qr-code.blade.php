@php
    use App\Helper\QRCode;

    // Pastikan bahwa `$record` adalah objek valid dan memiliki ID
    if (isset($getRecord()->slug)) {
        $qrContent = route('koleksi-detail', ['slug' => $getRecord()->slug]); // URL dengan ID record
        $qrCode = (new QRCode($qrContent))->generate(); // Generate QR Code
    } else {
        $qrCode = null; // QR Code kosong jika `$getRecord->id` tidak ditemukan
    }
@endphp

<div class="flex justify-center">
    @if ($qrCode)
        <img src="{{ $qrCode }}" alt="QR Code" width="128" height="128">
    @else
        <span class="text-red-500">QR Code Tidak Tersedia</span>
    @endif
</div>
