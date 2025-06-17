<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">

                <h2 class="text-2xl font-bold mb-4">Riwayat Pembelian</h2>

                <!-- Contoh Tabel Riwayat Pembelian -->
                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm text-left">
                        <thead class="bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-200">
                            <tr>
                                <th class="px-4 py-2">Tanggal</th>
                                <th class="px-4 py-2">Nama Tiket</th>
                                <th class="px-4 py-2">Jumlah</th>
                                <th class="px-4 py-2">Total Harga</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100">
                            <!-- Contoh Data Dummy -->
                            <tr class="border-b dark:border-gray-700">
                                <td class="px-4 py-2">2025-06-10</td>
                                <td class="px-4 py-2">Tiket Konser A</td>
                                <td class="px-4 py-2">2</td>
                                <td class="px-4 py-2">Rp200.000</td>
                            </tr>
                            <tr class="border-b dark:border-gray-700">
                                <td class="px-4 py-2">2025-06-05</td>
                                <td class="px-4 py-2">Tiket Bioskop B</td>
                                <td class="px-4 py-2">1</td>
                                <td class="px-4 py-2">Rp50.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>


    <div class="flex justify-center mb-4">
    <a href="{{ url('/') }}"
       class="inline-block bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-700 transition">
        ← Back to Welcome Page
    </a>
</div>
</x-app-layout>
