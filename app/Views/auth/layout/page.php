<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Auth</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
</head>
<body>
    <section class="relative">
        <div class="absolute top-20 left-0 right-0 ml-auto mr-auto">

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

        <?= $this->renderSection('content'); ?>
    </section>

<!-- SCRIPTS -->
<script>
    // clear the alert message after 5 seconds
    setTimeout(() => {
        document.querySelector('[role="alert"]').remove();
    }, 2000);

</script>
<!-- -->

</body>
</html>