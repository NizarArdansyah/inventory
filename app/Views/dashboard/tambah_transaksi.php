<?= $this->extend('layouts/dashboard'); ?>

<?= $this->section('content'); ?>

<div class="flow-root rounded-lg border border-gray-100 p-3 shadow-sm">
    <h2 class="text-2xl font-bold">Tambah Transaksi</h2>
    <p class="text-gray-500">Tambahkan transaksi</p>
    <div class="mt-4">
        <form action="/transaksi/post" method="post">
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                <input
                    name="id_user"
                    hidden
                    value="<?= $user['id_user'] ?>"
                />
                <label for="id_barang" class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                    <select name="id_barang" id="id_barang" class="py-2 w-full peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 px-2 py-1">
                        <option class="text-gray-200" value="">Pilih barang</option>
                        <?php foreach ($data as $d) : ?>
                            <option value="<?= $d['id_barang'] ?>" data-harga="<?= $d['harga_jual'] ?>"><?= $d['nama_barang'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <span class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">Barang</span>
                </label>

                <label
                for="kuantitas"
                class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
                >
                    <input
                        name="kuantitas"
                        type="number"
                        id="kuantitas"
                        class="peer border-none w-full bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 px-2 py-1"
                        placeholder="jumlah barang"
                    />
    
                    <span
                        class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs"
                    > Kuantitas
                    </span>
                </label>
                <label 
                for="harga"
                class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
                >
                    <input
                        name="harga"
                        type="number"
                        id="harga"
                        value="<?= $data[1]['harga_jual'] ?>"
                        disabled
                        class="peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 px-2 py-1"
                        placeholder="harga"
                    />
                    <span
                        class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs"
                    > Harga Jual 
                    </span>
                </label>
                <label 
                for="nominal"
                class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
                >
                    <input
                        name="nominal"
                        type="number"
                        id="nominal"
                        class="peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 px-2 py-1"
                        placeholder="nominal"
                    />
                    <span
                        class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs"
                    > Nominal 
                    </span>
                </label>
                
            </div>

            <div class="mt-4">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Bayar
                </button>
            </div>
        </form>
    </div>


<?= $this->endSection(); ?>
