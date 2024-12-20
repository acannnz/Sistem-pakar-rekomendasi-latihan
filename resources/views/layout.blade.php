<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>My Website</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://db.onlinewebfonts.com/c/32416a86c048d1723d84ab514fc50a1c?family=Punch" rel="stylesheet" type="text/css" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <section class="bg-gray-50 dark:bg-gray-900">
        <a href="{{ url('/') }}" class="flex p-3">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="size-6">
                <path fill-rule="evenodd" d="M10.72 11.47a.75.75 0 0 0 0 1.06l7.5 7.5a.75.75 0 1 0 1.06-1.06L12.31 12l6.97-6.97a.75.75 0 0 0-1.06-1.06l-7.5 7.5Z" clip-rule="evenodd" />
                <path fill-rule="evenodd" d="M4.72 11.47a.75.75 0 0 0 0 1.06l7.5 7.5a.75.75 0 1 0 1.06-1.06L6.31 12l6.97-6.97a.75.75 0 0 0-1.06-1.06l-7.5 7.5Z" clip-rule="evenodd" />
            </svg>
            <span class="text-white"> Kembali </span>
        </a>

        <div class="relative flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-gray-900 dark:text-white">
                <img class="w-14 h-14" src="{{asset('image')}}/logo.png" alt="logo">
                <span class="self-center text-3xl whitespace-nowrap font-punch dark:text-yellow-100">OTW SAITAMA</span>
            </a>
            <div class=" p-6 bg-white after:w-[97%] after:h-[97%] rounded-lg shadow dark:border md:mt-0 sm:max-w-md dark:bg-gray-800 dark:border-gray-700 sm:p-8">
                <p class=" font-light text-gray-500 dark:text-gray-400 mb-10">Ayo periksa rekomendasi latihan rumahan yang cocok untuk kamu. Kamu akan diminta menginput beberapa data diri!</p>
                <form class="mt-4 space-y-4 lg:mt-5 md:space-y-5" action="#">
                    <div class="flex items-center justify-center">
                        <span class="inline-block w-36 max-h-full animate-bounce rounded-full bg-gray-800 border-2 text-white text-center text-sm ">Klik Disini
                            <svg class="w-6 h-6 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2.25a.75.75 0 0 1 .75.75v16.19l6.22-6.22a.75.75 0 1 1 1.06 1.06l-7.5 7.5a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 1 1 1.06-1.06l6.22 6.22V3a.75.75 0 0 1 .75-.75Z" />
                            </svg>
                        </span>
                    </div>
                    @yield('modalTombol')
                </form>
                @yield('modal')
            </div>
        </div>
    </section>
    @yield('output')
</body>

</html>