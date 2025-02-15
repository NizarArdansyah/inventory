<?= $this->extend('layouts/dashboard') ?>

<?= $this->section('content') ?>



<div class="">
    <div class="flex justify-between">
        <div class="flex items-center gap-2 mb-4">
            <h2 class="text-2xl font-bold ">Kelola Stok Barang</h2>
            <a href='/stok/create'>+</a>
        </div>
        <div class="relative">
            <label for="Search" class="sr-only"> Search </label>
            <input
                type="text"
                id="Search"
                placeholder="Search for..."
                class="w-full rounded-md border-gray-200 px-4 py-2.5 pe-10 shadow-sm sm:text-sm"
            />

            <span class="absolute inset-y-0 end-0 grid w-10 place-content-center">
                <button type="button" class="text-gray-600 hover:text-gray-700">
                <span class="sr-only">Search</span>

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-4 w-4"
                >
                    <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"
                    />
                </svg>
                </button>
            </span>
        </div>
    </div>

    <!-- Table -->
    <div class="rounded-lg border border-gray-200">
        <div class="overflow-x-auto rounded-t-lg">
            <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
            <thead class="text-left">
                <tr>
                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">No</th>
                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Tanggal Masuk</th>
                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Nama Barang</th>
                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Keuntungan</th>
                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Stok Sekarang</th>
                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Keterangan</th>
                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200"> 
                
                <?php $no = 1; ?>
                <?php foreach ($data as $b) : ?>
                    <tr>
                        <td class="whitespace nowrap px-4 py-2 font-medium text-gray-900"><?= $no++ ?></td>
                        <td class="whitespace nowrap px-4 py-2 text-gray-700"><?= formatTanggal($b['tanggal_masuk']) ?></td>
                        <td class="whitespace nowrap px-4 py-2 text-gray-700"><?= $b['nama_barang'] ?></td>
                        <td class="whitespace nowrap px-4 py-2 text-gray-700"><?= formatRupiah($b['harga_jual'] - $b['harga_beli']) ?></td>
                        <td class="whitespace nowrap px-4 py-2 text-gray-700"><?= $b['kuantitas'] ?? '' ?> <?= $b['satuan_barang'] ?? '' ?></td>
                        <td class="whitespace nowrap px-4 py-2 text-gray-700"><?= $b['keterangan'] ?></td>
                        <td class="inline-flex overflow-hidden rounded-md border bg-white shadow-sm">
                            <!-- <a
                            class="inline-block border-e p-3 text-gray-700 hover:bg-gray-50 focus:relative"
                            title="Edit Product"
                            href="/stok/edit/<?= $b['id_stok'] ?>"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="h-4 w-4"
                                >
                                    <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"
                                    />
                                </svg>
                            </a> -->

                            <!-- Button to trigger popup -->
                            <a
                                class="inline-block p-3 text-gray-700 hover:bg-gray-50 focus:relative"
                                title="Delete Product"
                                href="#"
                                stok-id="<?= $b['id_stok'] ?>"
                                barang = "<?= $b['nama_barang'] ?>"
                                onclick="openPopup(this)"
                                >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="h-4 w-4"
                                >
                                    <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                                    />
                                </svg>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>


            </tbody>
            </table>
        </div>

        <div class="rounded-b-lg border-t border-gray-200 px-4 py-2">
            <ol class="flex justify-end gap-1 text-xs font-medium">
            <li>
                <a
                href="#"
                class="inline-flex size-8 items-center justify-center rounded border border-gray-100 bg-white text-gray-900 rtl:rotate-180"
                >
                <span class="sr-only">Prev Page</span>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-3 w-3"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                >
                    <path
                    fill-rule="evenodd"
                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                    clip-rule="evenodd"
                    />
                </svg>
                </a>
            </li>

            <li>
                <a
                href="#"
                class="block size-8 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900"
                >
                1
                </a>
            </li>

            <li class="block size-8 rounded border-blue-600 bg-blue-600 text-center leading-8 text-white">
                2
            </li>

            <li>
                <a
                href="#"
                class="block size-8 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900"
                >
                3
                </a>
            </li>

            <li>
                <a
                href="#"
                class="block size-8 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900"
                >
                4
                </a>
            </li>

            <li>
                <a
                href="#"
                class="inline-flex size-8 items-center justify-center rounded border border-gray-100 bg-white text-gray-900 rtl:rotate-180"
                >
                <span class="sr-only">Next Page</span>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-3 w-3"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                >
                    <path
                    fill-rule="evenodd"
                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                    clip-rule="evenodd"
                    />
                </svg>
                </a>
            </li>
            </ol>
        </div>
    </div>
</div>


<?= $this->endSection() ?>