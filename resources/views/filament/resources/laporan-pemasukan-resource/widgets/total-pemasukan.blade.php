<div class="grid grid-cols-2 gap-4">
    <div class="p-4 bg-white shadow rounded-lg">
        <h3 class="text-lg font-bold">Pemasukan Hari Ini</h3>
        <p class="text-2xl text-green-600 font-semibold">Rp {{ number_format($this->getData()['todayTotal'], 0, ',', '.') }}</p>
    </div>
    <div class="p-4 bg-white shadow rounded-lg">
        <h3 class="text-lg font-bold">Total Keseluruhan</h3>
        <p class="text-2xl text-blue-600 font-semibold">Rp {{ number_format($this->getData()['overallTotal'], 0, ',', '.') }}</p>
    </div>
</div>
