<?= $this->extend('layouts/dashboard'); ?>

<?= $this->section('content'); ?>


<div class="flow-root rounded-lg border border-gray-100 p-3 shadow-sm">
    <h2 class="text-2xl font-bold">Edit Barang</h2>
    <p class="text-gray-500">Ubah data barang</p>
    <div class="mt-4">
        <form action="/stok/update" method="post">
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                <input
                    name="id_stok"
                    class="hidden"
                    value="<?= $data['id_stok'] ?? '' ?>"
                />
                <input
                    name="id_barang"
                    class="hidden"
                    value="<?= $data['id_stok'] ?? '' ?>"
                />
                <label
                for="kuantitas"
                class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
                >
                    <input
                        name="kuantitas"
                        type="text"
                        id="kuantitas"
                        class="peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 px-2 py-1"
                        placeholder="nama barang"
                        value="<?= $data['kuantitas'] ?? '' ?>"
                    />
    
                    <span
                        class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs"
                    > Kuantitas 
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
                        class="peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 px-2 py-1 w-full" 
                        placeholder="harga beli"
                        value="<?= $data['satuan_barang'] ?? '' ?>"
                    />
    
                    <span
                        class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs"
                    > Satuan Barang
                    </span>
                </label>
                <label 
                for="keterangan"
                class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
                >
                    <input
                        name="keterangan"
                        type="text"
                        id="keterangan"
                        class="peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 px-2 py-1 w-full" 
                        placeholder="keterangan"
                        value="<?= $data['keterangan'] ?? '' ?>"
                    />
    
                    <span
                        class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs"
                    > Keterangan
                    </span>
                </label>
            </div>

            <div class="mt-4">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Update Stok
                </button>
            </div>
        </form>
    </div>


<?= $this->endSection(); ?>
