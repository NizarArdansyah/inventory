
<?= $this->extend('auth/layout/page') ?>

<?= $this->section('content') ?>
<div class="flex flex-col justify-center items-center h-screen">
    <h2 class="text-2xl font-bold">Log In</h2>
    <form action="/auth/actlogin" method="POST" class="max-w-[500px] w-full">
        <div class="relative flex items-center">
            <label for="UserEmail" class="text-gray sr-only"> Email / Username</label>
            <input
                required
                name="usermail"
                type="text"
                id="UserEmail"
                placeholder="flea@rhcp.com"
                class="w-full rounded-md border-gray-200 pe-10 py-3 px-2 shadow-sm sm:text-sm"
            />

            <span
                class="pointer-events-none absolute inset-y-0 end-0 grid w-10 place-content-center text-gray-500"
            >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4">
                <path
                    fill-rule="evenodd"
                    d="M5.404 14.596A6.5 6.5 0 1116.5 10a1.25 1.25 0 01-2.5 0 4 4 0 10-.571 2.06A2.75 2.75 0 0018 10a8 8 0 10-2.343 5.657.75.75 0 00-1.06-1.06 6.5 6.5 0 01-9.193 0zM10 7.5a2.5 2.5 0 100 5 2.5 2.5 0 000-5z"
                    clip-rule="evenodd"
                />
                </svg>
            </span>
        </div>

        <div class="relative flex items-center">
            <label for="Password" class="text-gray sr-only"> Email / Username</label>
            <input
                required
                name="password"
                type="password"
                id="Password"
                placeholder="password"
                class="w-full rounded-md border-gray-200 pe-10 py-3 px-2 shadow-sm sm:text-sm"
            />

            <span
                class="pointer-events-none absolute inset-y-0 end-0 grid w-10 place-content-center text-gray-500"
            >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4">
                <path
                    fill-rule="evenodd"
                    d="M5.404 14.596A6.5 6.5 0 1116.5 10a1.25 1.25 0 01-2.5 0 4 4 0 10-.571 2.06A2.75 2.75 0 0018 10a8 8 0 10-2.343 5.657.75.75 0 00-1.06-1.06 6.5 6.5 0 01-9.193 0zM10 7.5a2.5 2.5 0 100 5 2.5 2.5 0 000-5z"
                    clip-rule="evenodd"
                />
                </svg>
            </span>
        </div>

        <input type="submit" value="Go" class="bg-gray-800 text-white w-full mt-4 rounded-md py-1 cursor-pointer">

        <div class="flex w-full justify-between mt-4">
            <span class="text-gray-500">
                Belum punya akun?
            </span>
            <a href="/auth/register" class="text-bg-gray-500 inline">Create an account</a>
        </div>
    </form>
</div>


<?= $this->endSection() ?>