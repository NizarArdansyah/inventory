<?= $this->extend('layouts/dashboard'); ?>

<?= $this->section('content'); ?>

<div class="flow-root rounded-lg border border-gray-100 p-3 shadow-sm">

    <h2 class="text-2xl font-bold">Tambah Barang</h2>
    <p class="text-gray-500">Tambahkan barang baru</p>
    <div class="mt-4">
        <form action="/barang/post" method="post">
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                <label
                for="nama_barang"
                class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
                >
                    <input
                        name="nama_barang"
                        type="text"
                        id="nama_barang"
                        class="peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 px-2 py-1"
                        placeholder="nama barang"
                    />
    
                    <span
                        class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs"
                    > Nama 
                    </span>
                </label>
                <label 
                for="harga_barang"
                class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
                >
                    <input
                        name="harga_barang"
                        type="number"
                        id="harga_barang"
                        class="peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 px-2 py-1"
                        placeholder="harga barang"
                    />
    
                    <span
                        class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs"
                    > Harga 
                    </span>
                </label>
                <label
                for="stok_barang"
                class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
                >
                    <input
                        name="stok_barang"
                        type="number"
                        id="stok_barang"
                        class="peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 px-2 py-1 w-full"
                        placeholder="stok barang"
                    />
    
                    <span
                        class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs"
                    > Stok 
                    </span>
                </label>
                <label
                for="satuan_barang"
                class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
                >
                    <input
                        name="satuan_barang"
                        type="text"
                        id="satuan_barang"
                        class="peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 px-2 py-1"
                        placeholder="satuan barang"
                    />
    
                    <span
                        class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs"
                    > Satuan 
                    </span>
                </label>
            </div>

            <div class="mt-4">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus 
                :outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Tambah Barang
                </button>
            </div>
        </form>
    </div>


<?= $this->endSection(); ?>
