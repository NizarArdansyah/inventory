<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Aloha!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

    <!-- STYLES -->
    <style>
    /* Hide the checkbox */
    #popupToggle {
        display: none;
    }

    /* Show popup when checkbox is checked */
    #popupToggle:checked ~ #popup {
        display: flex;
    }
    </style>
    <!-- SCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    

</head>
<body>

<div class="flex ">
    <!-- Sidebar -->
    <div class="max-w-[20%] w-full ">
        <section class="bg-gray-800 text-white sticky top-0 ">
            <div class=" flex items-end h-[6vh] lg:ml-16">
                <div class="bg-white px-5 py-1 rounded">
                    <h1 class="text-2xl font-bold text-gray-800">Aloha App</h1>
                </div>
            </div>
            <ul class="flex flex-col space-y-2 max-w-64 lg:ml-16 h-[94vh] pt-8 ">
                <li>
                    <strong class="block text-xs font-medium uppercase text-gray-400">General </strong> 
                    <ul class="mt-2 space-y-1">
                    <li>
                        <a
                        href="/dashboard"
                        class="flex gap-2 rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-500 hover:text-gray-700
                        <?php if (uri_string() == 'dashboard') : ?>
                            bg-gray-100 text-gray-700
                        <?php endif; ?>
                        ">
                            <svg class="w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.02 2.84L3.63 7.04C2.73 7.74 2 9.23 2 10.36V17.77C2 20.09 3.89 21.99 6.21 21.99H17.79C20.11 21.99 22 20.09 22 17.78V10.5C22 9.29 21.19 7.74 20.2 7.05L14.02 2.72C12.62 1.74 10.37 1.79 9.02 2.84Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 17.99V14.99" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span>
                                Dashboard
                            </span>
                        </a>
                    </li>
    
                    <li>
                        <a
                        href="/<?= session()->get("role"); ?>/barang"
                        class="flex gap-2 rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-500 hover:text-gray-700
                        <?php if (uri_string() == 'admin/barang' && 'user/barang' && 'cashier/barang') : ?>
                            bg-gray-100 text-gray-700
                        <?php endif; ?>
                        "
                        >
                        <svg class="w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.92 2.26L19.43 5.77C20.19 6.18 20.19 7.35 19.43 7.76L12.92 11.27C12.34 11.58 11.66 11.58 11.08 11.27L4.57 7.76C3.81 7.35 3.81 6.18 4.57 5.77L11.08 2.26C11.66 1.95 12.34 1.95 12.92 2.26Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M3.61 10.13L9.66 13.16C10.41 13.54 10.89 14.31 10.89 15.15V20.87C10.89 21.7 10.02 22.23 9.28 21.86L3.23 18.83C2.48 18.45 2 17.68 2 16.84V11.12C2 10.29 2.87 9.76 3.61 10.13Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M20.39 10.13L14.34 13.16C13.59 13.54 13.11 14.31 13.11 15.15V20.87C13.11 21.7 13.98 22.23 14.72 21.86L20.77 18.83C21.52 18.45 22 17.68 22 16.84V11.12C22 10.29 21.13 9.76 20.39 10.13Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>
                            Kelola Barang
                        </span>
                        </a>
                    </li>

                    <li>
                        <a
                        href="/<?= session()->get("role"); ?>/kelola_stok"
                        class="flex gap-2 rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-500 hover:text-gray-700
                        <?php if (uri_string() == 'admin/kelola_stok' && 'user/kelola_stok' && 'cashier/kelola_stok') : ?>
                            bg-gray-100 text-gray-700
                        <?php endif; ?>
                        "
                        >
                        <svg class="w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.92 2.26L19.43 5.77C20.19 6.18 20.19 7.35 19.43 7.76L12.92 11.27C12.34 11.58 11.66 11.58 11.08 11.27L4.57 7.76C3.81 7.35 3.81 6.18 4.57 5.77L11.08 2.26C11.66 1.95 12.34 1.95 12.92 2.26Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M3.61 10.13L9.66 13.16C10.41 13.54 10.89 14.31 10.89 15.15V20.87C10.89 21.7 10.02 22.23 9.28 21.86L3.23 18.83C2.48 18.45 2 17.68 2 16.84V11.12C2 10.29 2.87 9.76 3.61 10.13Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M20.39 10.13L14.34 13.16C13.59 13.54 13.11 14.31 13.11 15.15V20.87C13.11 21.7 13.98 22.23 14.72 21.86L20.77 18.83C21.52 18.45 22 17.68 22 16.84V11.12C22 10.29 21.13 9.76 20.39 10.13Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>
                            Kelola Stok
                        </span>
                        </a>
                    </li>
    
                    <li>
                        <a
                        href="/<?= session()->get("role"); ?>/transaksi"
                        class="flex gap-2 rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-500 hover:text-gray-700"
                        >
                        <svg class="w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.67188 14.3298C8.67188 15.6198 9.66188 16.6598 10.8919 16.6598H13.4019C14.4719 16.6598 15.3419 15.7498 15.3419 14.6298C15.3419 13.4098 14.8119 12.9798 14.0219 12.6998L9.99187 11.2998C9.20187 11.0198 8.67188 10.5898 8.67188 9.36984C8.67188 8.24984 9.54187 7.33984 10.6119 7.33984H13.1219C14.3519 7.33984 15.3419 8.37984 15.3419 9.66984" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12 6V18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>
                            Transaksi
                        </span>
                        </a>
                    </li>
    
                    <li>
                        <a
                        href="#"
                        class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-500 hover:text-gray-700"
                        >
                        Calendar
                        </a>
                    </li>
                    </ul>
                </li>
    
                <li>
                    <strong class="block text-xs font-medium uppercase text-gray-400"> Support </strong>
    
                    <ul class="mt-2 space-y-1">
                    <li>
                        <a
                        href="#"
                        class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-500 hover:text-gray-700"
                        >
                        Update
                        </a>
                    </li>
    
                    <li>
                        <a
                        href="#"
                        class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-500 hover:text-gray-700"
                        >
                        Help
                        </a>
                    </li>
    
                    <li>
                        <a
                        href="#"
                        class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-500 hover:text-gray-700"
                        >
                        Settings
                        </a>
                    </li>
                    </ul>
                </li>
    
                <li>
                    <strong class="block text-xs font-medium uppercase text-gray-400"> Profile </strong>
    
                    <ul class="mt-2 space-y-1">
                    <li>
                        <a
                        href="#"
                        class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-500 hover:text-gray-700"
                        >
                        Details
                        </a>
                    </li>
    
                    <li>
                        <a
                        href="#"
                        class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-500 hover:text-gray-700"
                        >
                        Subscription
                        </a>
                    </li>
    
                    <li>
                        <?php if (session()->get("logged_in") == 1 ) : ?>
                                <a href="/auth/logout" class="block w-full rounded-lg px-4 py-2 text-sm font-medium text-gray-500 [text-align:_inherit] hover:bg-gray-500 hover:text-gray-700">Log Out</a>
                            
                        <?php else: ?>
                                <a href="/auth/login" class="block w-full rounded-lg px-4 py-2 text-sm font-medium text-gray-500 [text-align:_inherit] hover:bg-gray-500 hover:text-gray-700">Log In</a>
                            
                        <?php endif; ?>
                    </li>
                    </ul>
                </li>
            </ul>
        </section>
    </div>

    <!-- Content -->
    <div class="w-full">
        <div class="bg-gray-800 text-white ">
            <div class=" flex justify-end items-center h-[6vh] lg:mr-16">
                <nav>
                    <ul class="flex space-x-4">
                        <?php if (session()->get("logged_in") == 1 ) : ?>
                            <li><a href="/auth/logout" class="text-white flex gap-2">
                            <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M17 16L21 12M21 12L17 8M21 12L7 12M13 16V17C13 18.6569 11.6569 20 10 20H6C4.34315 20 3 18.6569 3 17V7C3 5.34315 4.34315 4 6 4H10C11.6569 4 13 5.34315 13 7V8" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
                            </a></li>
                        <?php else: ?>
                            <li><a href="/auth/login">Log In</a></li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="">
            <!-- Checkbox to control popup visibility -->
            <input type="checkbox" id="popupToggle" class="hidden">
    

    
            <!-- Popup HTML -->
            <div id="popup" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
                <div class="rounded-lg bg-white p-8 shadow-2xl z-10">
                    <h2 class="text-lg font-bold">Apakah kamu yakin?</h2>
                    <p id="popupContent" class="mt-2 text-sm text-gray-500">
                        Doing that could have cause some issues elsewhere, are you 100% sure it's OK?
                    </p>
                    <div class="mt-4 flex gap-2">
                    <a href="#" id="confirmDelete" class="cursor-pointer rounded bg-gray-50 px-4 py-2 text-sm font-medium text-gray-600" aria-label="Yes, I'm sure">
                        Ya, saya yakin
                    </a>
                    <label for="popupToggle" class="cursor-pointer rounded bg-green-50 px-4 py-2 text-sm font-medium text-green-600" aria-label="No, go back">
                        Kembali
                    </label>
                    </div>
                </div>
            </div>
        </div>              
        <!-- Alert -->
        <section class="relative w-full">
            <div class="absolute top-20 top-4 right-20 w-full max-w-96 z-[99999]">
                <?php if (session()->getFlashdata('success')) : ?>
                    <div role="alert" class="rounded border-s-4 border-green-500 bg-green-50 p-4">
                        <div class="flex items-center gap-2 text-green-800">
                            <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="h-6 w-6"
                        >
                            <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                            />
                        </svg>
    
                            <strong  class="block font-medium"> Success </strong>
                        </div>
    
                        <p class="mt-2 text-sm text-green-700">
                        <?= session()->getFlashdata('success') ?>
                        </p>
                    </div>
                <?php endif; ?>
    
                <?php if (session()->getFlashdata('error')) : ?>
                    <div class="flex justify-center w-full">
                        <div role="alert" class="rounded border-s-4 border-red-500 bg-red-50 p-4 max-w-[40rem] w-full">
                            <div class="flex items center gap-2 text-red-800">
                                <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="h-6 w-6"
                            >
                                <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6 18L18 6M6 6l12 12"
                                />
                            </svg>
                            <strong class="block font-medium"> Error </strong>  
                        </div>
                        <p class="mt-2 text-sm text-red-700">
                            <?= session()->getFlashdata('error') ?>
                        </p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </section>
                    
        <section class="my-4 mx-8 h-[120vh]">
        <nav aria-label="Breadcrumb">
            <ol class="flex items-center gap-1 text-sm text-gray-600">
                <li>
                <a href="#" class="block transition hover:text-gray-700">
                    <span class="sr-only"> Home </span>
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                    />
                    </svg>
                </a>
                </li>

                <li class="rtl:rotate-180">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                >
                    <path
                    fill-rule="evenodd"
                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                    clip-rule="evenodd"
                    />
                </svg>
                </li>

                <li>
                <a href="#" class="block transition hover:text-gray-700"> Shirts </a>
                </li>

                <li class="rtl:rotate-180">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                >
                    <path
                    fill-rule="evenodd"
                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                    clip-rule="evenodd"
                    />
                </svg>
                </li>

                <li>
                <a href="#" class="block transition hover:text-gray-700"> Plain Tee </a>
                </li>
            </ol>
        </nav>
        <div class="mt-4">
            <?= $this->renderSection('content'); ?>
        </div>
        </section>
        <footer class="bg-gray-800 text-white py-4">
            <div class="container mx-auto text-center">
                <p>&copy; 2022 Skripsi App. All rights reserved.</p>
            </div>
        </footer>
    </div>
</div>
<!-- HEADER: MENU + HEROE SECTION -->

<!-- SCRIPTS -->
<script>
    // clear the alert message after 2 seconds
    const alert = document.querySelector('[role="alert"]');
    
    if(alert){
        setTimeout(() => {
            document.querySelector('[role="alert"]').remove();
        }, 2000);
    }

    // Chart JS
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
        y: {
            beginAtZero: true
        }
        }
    }
    });

</script>



<script>
    function openPopup(element) {
        const barangId = element.getAttribute('barang-id');
        const stokId = element.getAttribute('stok-id');
        const transaksiId = element.getAttribute('transaksi-id');
        const barang = element.getAttribute('barang');
        const popupContent = document.getElementById('popupContent');
        popupContent.textContent = `Menghapus data ${barang} dari sistem`;
        
        // Set the href of the confirm delete button
        if(barangId){
            const confirmDelete = document.getElementById('confirmDelete');
            confirmDelete.href = `/barang/delete/${barangId}`;
        } 
        else if(stokId) {
            const confirmDelete = document.getElementById('confirmDelete');
            confirmDelete.href = `/stok/delete/${stokId}`;
        } 
        else if(transaksiId){
            const confirmDelete = document.getElementById('confirmDelete');
            confirmDelete.href = `/transaksi/delete/${transaksiId}`;
        }

        // Show the popup by checking the checkbox
        const popupToggle = document.getElementById('popupToggle');
        popupToggle.checked = true;
    }
</script>
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const kuantitasInput = document.getElementById('kuantitas');
        const hargaInput = document.getElementById('harga');
        const nominalInput = document.getElementById('nominal');

        function calculateNominal() {
            const kuantitas = parseFloat(kuantitasInput.value) || 0;
            const harga = parseFloat(hargaInput.value) || 0;
            const nominal = kuantitas * harga;
            nominalInput.value = nominal 
        }

        kuantitasInput.addEventListener('input', calculateNominal);
        hargaInput.addEventListener('input', calculateNominal); // This is just in case harga is not actually disabled in some scenarios
    });

</script>
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        var select = document.getElementById('id_barang');
        var hargaTrans = document.getElementById('harga');
        
        // Function to update the harga input field based on the selected option
        function updateHarga() {
            var selectedOption = select.options[select.selectedIndex];
            var harga = selectedOption.getAttribute('data-harga');
            
            // Update the value of the harga input
            hargaTrans.value = harga ? harga : '';
        }
        
        // Add event listener for the change event
        select.addEventListener('change', updateHarga);
        
        // Initialize harga input on page load
        updateHarga();
});
</script>

</body>
</html>
