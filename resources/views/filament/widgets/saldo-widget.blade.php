<x-filament-widgets::widget>
    <div class="bg-white dark:bg-gray-800 shadow-lg rounded-2xl p-6">
        <div class="flex items-center justify-between">
            <div>
                <h4 class="text-gray-600 dark:text-gray-300 text-md font-medium">Saldo Saat Ini</h4>
                <h2 class="text-3xl font-bold text-green-500 mt-2">{{ $this->getSaldo() }}</h2>
            </div>
        </div>
    </div>
</x-filament-widgets::widget>
