<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{ asset('images/Logo.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
    <style>
        * {
            font-family: "Inter", sans-serif
        }
    </style>
    @vite('resources/css/app.css')
    <title>Portfolio</title>
</head>

<body>
    <!-- Header -->
    <div style="box-shadow: 0 2px 4px 0 rgba(0,0,0,.5);" class="flex flex-row justify-between h-28 bg-[#FC9E11] w-full">
        <div class="flex items-center justify-center p-2 md:p-9">
            <a href="portfolio">
                <img src="{{ asset('images/Logo.png') }}" alt="Logo" class="h-auto ">
            </a>
        </div>
        <div class="flex flex-row-reverse items-center justify-center">
            <div class="flex md:hidden" id="toggle-menu">
                <button id="open-menu">
                    <i class="m-5 open fa-solid fa-bars fa-2x md:fa-3x"></i>
                </button>
            </div>
            <ul class="items-center justify-center hidden font-medium md:flex" id="nav">
                <li>
                    <a class="mx-10 hover:underline hover:underline-offset-4" href="portfolio">Portfolio</a>
                </li>
                <li>
                    <a class="mx-10 hover:underline hover:underline-offset-4" href="advocacy">Experience</a>
                </li>
                <li>
                    <a class="mx-10 hover:underline hover:underline-offset-4" href="about">About</a>
                </li>
                <li>
                    <a class="mx-10 hover:underline hover:underline-offset-4" href="contact">Contact</a>
                    <div class="hidden">
                        <ul>
                            <li>
                                <a href="portfolio/">
                                    <img src="{{ asset('images/US.png') }}" alt="USA Flag">{{ __('messages.English') }}
                                </a>
                            </li>
                            <li>
                                <a href="portfolio/">
                                    <img src="{{ asset('images/spain.png') }}">{{ __('messages.Espanol') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>

        </div>
    </div>
    <div class="fixed top-0 right-0 z-50 flex-col justify-between hidden w-full h-screen bg-orange-400 opacity-90"
        id="nav-small">
        <ul class="flex flex-col items-center justify-center w-full h-screen py-12 font-medium gap-14 md:h-full">
            <li>
                <a class="mx-10 hover:underline hover:underline-offset-4" href="portfolio">Portfolio</a>
            </li>
            <li>
                <a class="mx-10 hover:underline hover:underline-offset-4" href="advocacy">Experience</a>
            </li>
            <li>
                <a class="mx-10 hover:underline hover:underline-offset-4" href="about">About</a>
            </li>
            <li>
                <a class="mx-10 hover:underline hover:underline-offset-4" href="contact">Contact</a>
                <div class="hidden">
                    <ul>
                        <li>
                            <a href="portfolio/">
                                <img src="{{ asset('images/US.png') }}" alt="USA Flag">{{ __('messages.English') }}
                            </a>
                        </li>
                        <li>
                            <a href="portfolio/">
                                <img src="{{ asset('images/spain.png') }}">{{ __('messages.Espanol') }}
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
        <div class="flex items-center justify-end p-5">
            <button class="px-4 py-3 bg-orange-600 rounded-full" id="close-menu"><i
                    class="fa-solid fa-xmark fa-3x"></i></button>
        </div>
    </div>
    <!-- End Header -->
    <div class="">
        <div class="flex flex-col-reverse md:flex-row" id="home">
            <div class="flex flex-col justify-center w-full p-3 md:p-16 md:w-3/5">
                <h1 class="text-3xl font-extrabold text-orange-400 md:text-5xl drop-shadow-lg">
                    {{ __('messages.Portfolio Landing Header') }}
                </h1>
                <h1 class="text-5xl font-black text-orange-400 drop-shadow-2xl">
                    <span class="typing1"></span>
                </h1>
                <p class="my-2 text-sm md:text-base">I help businesses grow through the power of digital marketing and
                    creative strategy.
                </p>
                <p class="my-2 text-sm md:text-base">Learn more about my award-winning tactics and experience!</p>
                <div class="my-2 ">
                    <button
                        class="h-10 px-5 border-2 border-orange-500 rounded-lg hover:bg-orange-400 hover:text-white">
                        <a href="contact" class="font-bold">{{ __('messages.Portfolio Landing Button') }}</a>
                    </button>
                </div>
            </div>
            <div class="flex flex-col items-center justify-center w-full md:w-2/5 ">
                <img src="{{ asset('images/faviodp.png') }}" alt="Profile"
                    class="block w-4/5 h-auto m-20 transition-all md:w-auto hover:scale-105 ">
            </div>
        </div>
    </div>
    <div class="flex flex-row justify-center py-5 text-3xl font-bold md:text-5xl">
        <span>{{ __('messages.Portfolio Landing Project Header') }} </span>
    </div>
    <div class="flex flex-col md:flex-row">
        <div class="flex flex-row justify-around w-full h-auto md:w-1/2">
            <div
                class="flex flex-col items-center justify-center h-full gap-2 p-5 m-2 transition-all scale-95 border-2 border-orange-500 rounded-lg shadow-md md:gap-7 hover:scale-100">
                <div class=" flex flex-col justify-center items-center h-[420px] ">
                    <img src="{{ asset('images/aphelion.png') }}" alt="Aphelion" class="rounded-lg ">
                </div>
                <div class="flex flex-col items-center justify-center gap-5">
                    <h2 class="text-xl font-bold text-orange-600 underline md:text-3xl underline-offset-8">
                        {{ __('messages.Portfolio Landing Project Card Two Header') }}</h2>
                    <p class="text-sm md:text-base">{{ __('messages.Portfolio Landing Project Card Two Description') }}
                    </p>
                    <button type="button" id="readMoreButtonOne"
                        class="p-3 font-bold border-2 border-orange-500 rounded-lg hover:bg-orange-400 hover:text-white">
                        <a href="#" class="w-full h-full">{{ __('messages.Read More Button') }}</a>
                    </button>
                    <dialog id="id01" class="w-4/5 rounded-lg">
                        <div class="p-5">
                            <div class="flex justify-end">
                                <button id="closeModalOne"
                                    class="px-4 py-2 rounded-lg hover:bg-slate-100">&times;</button>
                            </div>
                            <ul class="list-disc pl-7">
                                <li>{{ __('messages.Portfolio Landing Project Card One Description 1') }}</li>
                                <li>{{ __('messages.Portfolio Landing Project Card One Description 2') }}</li>
                            </ul>
                        </div>
                    </dialog>
                </div>
            </div>
        </div>
        <div class="flex flex-row justify-around w-full h-auto md:w-1/2">
            <div
                class="flex flex-col items-center justify-center h-full p-5 m-2 transition-all scale-95 border-2 border-orange-500 rounded-lg shadow-md gap-7 hover:scale-100">
                <div class=" flex flex-col justify-center items-center h-[420px] ">
                    <img src="{{ asset('images/teamliquid.png') }}" alt="TeamLiquid" class="rounded-lg">
                </div>
                <div class="flex flex-col items-center justify-center gap-5">
                    <h2 class="text-xl font-bold text-orange-600 underline md:text-3xl underline-offset-8">
                        {{ __('messages.Portfolio Landing Project Card One Header') }}</h2>
                    <p class="text-sm md:text-base">
                        {{ __('messages.Portfolio Landing Project Card One Description') }}</p>
                    <button type="button" id="readMoreButtonTwo"
                        class="p-3 font-bold border-2 border-orange-500 rounded-lg hover:bg-orange-400 hover:text-white">
                        <a href="#" class="w-full h-full">{{ __('messages.Read More Button') }}</a>
                    </button>
                    <dialog id="id02" class="w-4/5 rounded-lg">
                        <div class="p-5">
                            <div class="flex justify-end">
                                <button id="closeModalTwo"
                                    class="px-4 py-2 rounded-lg hover:bg-slate-100">&times;</button>
                            </div>
                            <ul class="list-disc pl-7">
                                <li>{{ __('messages.Portfolio Landing Project Card Two Description 1') }}</li>
                                <li>{{ __('messages.Portfolio Landing Project Card Two Description 2') }}</li>
                                <li>{{ __('messages.Portfolio Landing Project Card Two Description 3') }}</li>
                                <li>{{ __('messages.Portfolio Landing Project Card Two Description 4') }}</li>
                            </ul>
                        </div>
                    </dialog>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-10">
        <div class="flex flex-row justify-center py-5 text-3xl font-bold md:text-5xl">
            <span>{{ __('messages.Portfolio Landing Services Header') }}</span>
        </div>
        <div class="flex justify-center flex-row p-5 gap-5 flex-wrap [&>*]:w-[320px]">
            <div
                class="flex flex-col items-center justify-center gap-5 p-10 transition-all border-2 border-orange-500 rounded-lg hover:scale-105 hover:shadow-lg">
                <i class="text-center text-orange-400 fa-solid fa-bullhorn fa-4x"></i>
                <p class="flex justify-center text-base font-bold text-center text-orange-600 md:text-xl">
                    {{ __('messages.Portfolio Landing Services Card One Header') }}</p>
                <p class="text-sm md:text-base">{{ __('messages.Portfolio Landing Services Card One Description') }}
                </p>
            </div>
            <div
                class="flex flex-col items-center justify-center gap-5 p-10 transition-all border-2 border-orange-500 rounded-lg hover:scale-105 hover:shadow-lg">
                <i class="text-center text-orange-400 fa-solid fa-rectangle-ad fa-4x"></i>
                <p class="flex justify-center text-base font-bold text-center text-orange-600 md:text-xl">
                    {{ __('messages.Portfolio Landing Services Card Two Header') }}</p>
                <p class="text-sm md:text-base">{{ __('messages.Portfolio Landing Services Card Two Description') }}
                </p>
            </div>
            <div
                class="flex flex-col items-center justify-center gap-5 p-10 transition-all border-2 border-orange-500 rounded-lg hover:scale-105 hover:shadow-lg">
                <i class="text-center text-orange-400 fa-solid fa-desktop fa-4x"></i>
                <p class="flex justify-center text-base font-bold text-center text-orange-600 md:text-xl">
                    {{ __('messages.Portfolio Landing Services Card Three Header') }}</p>
                <p class="text-sm md:text-base">
                    {{ __('messages.Portfolio Landing Services Card Three Description') }}
                </p>
            </div>
            <div
                class="flex flex-col items-center justify-center gap-5 p-10 transition-all border-2 border-orange-500 rounded-lg hover:scale-105 hover:shadow-lg">
                <i class="text-center text-orange-400 fa-solid fa-people-line fa-4x"></i>
                <p class="flex justify-center text-base font-bold text-center text-orange-600 md:text-xl">
                    {{ __('messages.Portfolio Landing Services Card Four Header') }}</p>
                <p class="text-sm md:text-base">{{ __('messages.Portfolio Landing Services Card Four Description') }}
                </p>
            </div>
        </div>
    </div>
    <!-- End Experience Section -->
    <!-- Footer -->
    <div class="w-full ">
        <div class="flex flex-col items-center justify-center gap-3 p-3 h-96"
            style="background-image: url({{ asset('images/aboutb.png') }}); background-repeat: no-repeat; background-size: cover;">
            <p class="text-base font-medium md:text-xl">{{ __('messages.Portfolio Landing Footer Subheader') }}</p>
            <h1 class="text-3xl font-bold text-center text-white md:text-5xl drop-shadow-md">
                {{ __('messages.Portfolio Landing Footer Header') }}
            </h1>
            <button
                class="p-2 text-base font-bold border-2 border-orange-500 rounded-lg md:p-5 md:text-xl hover:text-white hover:bg-orange-400">
                <a href="./contact">{{ __('messages.Portfolio Landing Footer Button') }}</a>
            </button>
        </div>
    </div>
    <div id="bg" class="w-full">
        <div id="links" class="flex flex-col items-center justify-center h-48 p-3 bg-black">
            <ul
                class="flex flex-row flex-wrap justify-around w-full [&>li]:p-3 [&>li]:text-orange-600 [&>li]:hover:underline">
                <li class="">
                    <a href="./portfolio">{{ __('messages.Portfolio') }}</a>
                </li>
                <li class="">
                    <a href="./advocacy">Experience</a>
                </li>
                <li class="">
                    <a href="./about">{{ __('messages.About') }}</a>
                </li>
                <li class="">
                    <a href="./contact">{{ __('messages.Contact') }}</a>
                </li>
            </ul>
        </div>
        <div class="flex justify-end py-9 bg-[#413E3E]">
            <a href="#" class="px-1 text-orange-400 md:px-10 hover:underline">Go back</a>
        </div>
        <div class="flex justify-between items-center bg-[#413E3E]">
            <div class="flex flex-col items-center justify-center px-1 md:px-10">
                <h6 class="text-sm text-orange-400 md:text-base">
                    {{ __('messages.Portfolio Landing Footer Ending Button') }}</h6>
                <div class="flex justify-between">
                    <a href="https://instagram.com/faviojasso?igshid=YWYwM2I1ZDdmOQ==" class="m-2">
                        <i class="text-orange-400 fa-brands fa-instagram md:fa-2x hover:scale-110"></i>
                    </a>
                    <a href="https://github.com/FavioJasso" class="m-2">
                        <i class="text-orange-400 fa-brands fa-github md:fa-2x hover:scale-110"></i>
                    </a>
                    <a href="https://twitter.com/FavioJasso" class="m-2">
                        <i class="text-orange-400 fa-brands fa-twitter md:fa-2x hover:scale-110"></i>
                    </a>
                </div>
            </div>
            <div class="flex justify-center px-1 text-sm text-orange-400 md:px-10 :md:text-base">
                {{ __('messages.Portfolio Landing Footer Credits') }}
            </div>
        </div>
    </div>
    <script defer>
        const readModal1 = document.getElementById('readMoreButtonOne');
        const readModal2 = document.getElementById('readMoreButtonTwo');
        const close1 = document.getElementById('closeModalOne');
        const close2 = document.getElementById('closeModalTwo');
        const openMenu = document.getElementById('open-menu');
        const closeMenu = document.getElementById('close-menu');
        const navigation = document.getElementById('nav');
        const navigationForSmallScreen = document.getElementById('nav-small');

        openMenu.addEventListener('click', function() {
            navigation.style.display = "none";
            navigationForSmallScreen.style.display = "flex";
        });

        closeMenu.addEventListener('click', function() {
            navigationForSmallScreen.style.display = "none";
        });


        readModal1.addEventListener('click', function() {
            const modal = document.getElementById('id01');
            modal.showModal();
            console.log('clicked');
        });

        readModal2.addEventListener('click', function() {
            const modal = document.getElementById('id02');
            modal.showModal();
            console.log('clicked');
        });

        close1.addEventListener('click', function() {
            const modal = document.getElementById('id01');
            modal.close();
            console.log('closed');
        });

        close2.addEventListener('click', function() {
            const modal = document.getElementById('id02');
            modal.close();
            console.log('closed');
        })
    </script>
</body>

</html>
