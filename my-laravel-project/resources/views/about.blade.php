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
    <title>
        Advocacy
    </title>
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
    <!-- First Section -->
    <div class="w-full">
        <div>
            <div class="flex flex-col items-center justify-center gap-10 h-96"
                style="background-image: url({{ asset('images/aboutb.png') }}); background-repeat: no-repeat; background-size: cover;">
                <h1 class="text-3xl font-bold text-center text-orange-600 md:text-5xl">
                    HI! I’M
                    <span class="font-extrabold text-orange-800 hover:text-white hover:outline-dashed">
                        Favio-Valentino Jasso
                    </span>
                </h1>
                <p class="text-lg font-medium md:text-2xl">
                    Marketing and Branding Expert
                </p>
            </div>
        </div>
    </div>
    <!-- End First Section -->
    <!-- Second Section -->
    <div class="flex flex-col-reverse items-center justify-between w-full h-auto p-5 md:flex-row">
        <div class="flex flex-col w-full gap-5 p-5 m-5 md:w-1/3">
            <h2 class="text-base font-medium md:text-3xl">
                Who Am I?
            </h2>
            <p class="text-sm md:text-base">
                Favio Jasso is a Mexican-American marketer based in the New York Metropolitan
                area. Favio is accompanied by 4 years of experience working with high-profile
                entertainment brands like Team Liquid and the San Antonio Spurs.
            </p>
            <button
                class="p-2 font-medium border-2 border-orange-500 rounded-lg btn hover:text-white hover:bg-orange-400"
                id="read">
                <a id="read">
                    Read More
                </a>
            </button>
            <dialog id="modal" class="w-4/5 rounded-lg">
                <div class="p-5">
                    <div class="flex justify-end">
                        <button id="close" class="px-4 py-2 rounded-lg hover:bg-slate-100">&times;</button>
                    </div>
                    <div class="p-5">
                        <p>
                            Additionally, he has achieved national recognition as CES 2022 honoree award and South by
                            SouthWest nominee for best in innovation under the tech focus led brand LetsPlott. Favio’s
                            marketing expertise has allowed him to expand into consulting influencer talent who have
                            amassed six to seven-figure followings. Favio’s extensive industry experience has proven his
                            intellect in regard to the neverending outlook of the marketing world.
                        </p>
                    </div>
                </div>
            </dialog>
        </div>
        <div class="flex flex-col items-center w-full gap-5 p-5 m-5 md:w-1/3">
            <img src="{{ asset('images/faviodp.jpg') }}" alt="Profile"
                class="w-2/3 transition-all rounded-lg hover:scale-105 ">
        </div>
        <div class="flex-col hidden w-full gap-3 md:flex md:w-1/3">
            <div class="">
                <a href="tel:973-234-2073" class="flex items-center gap-3 hover:scale-95">
                    <i class="text-orange-500 fa-2x fa-solid fa-mobile-screen ">
                    </i>
                    <span class="">
                        973-234-2073
                    </span>
                </a>
            </div>
            <div class="">
                <a href="https://github.com/FavioJasso" class="flex items-center gap-3 hover:scale-95">
                    <i class="text-orange-500 fa-solid fa-envelope fa-2x">
                    </i>
                    <span class="">
                        fjporras04@gmail.com
                    </span>
                </a>
            </div>
            <div class="">
                <a href="https://www.linkedin.com/in/faviojasso/" class="flex items-center gap-3 hover:scale-95">
                    <i class="text-orange-500 fa-brands fa-linkedin fa-2x">
                    </i>
                    <span class="">
                        Favio Jasso
                    </span>
                </a>
            </div>
            <div class="">
                <a href="https://github.com/FavioJasso" class="flex items-center gap-3 hover:scale-95">
                    <i class="text-orange-500 fa-brands fa-github fa-2x">
                    </i>
                    <span class="">
                        Favio Jasso
                    </span>
                </a>
            </div>
        </div>
    </div>
    <!-- End Second Section -->
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
            <ul class="flex flex-row flex-wrap justify-around w-full">
                <li class="text-orange-600 hover:underline">
                    <a href="./portfolio">{{ __('messages.Portfolio') }}</a>
                </li>
                <li class="text-orange-600 hover:underline">
                    <a href="./advocacy">Experience</a>
                </li>
                <li class="text-orange-600 hover:underline">
                    <a href="./about">{{ __('messages.About') }}</a>
                </li>
                <li class="text-orange-600 hover:underline">
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
    <!-- End Footer -->
    <script src="{{ asset('js/scroll.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="{{ asset('js/about.js') }}"></script>
    <script defer>
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
        // for the modal
        const readModal = document.getElementById('read');
        const close = document.getElementById('close');

        readModal.addEventListener('click', function() {
            const modal = document.getElementById('modal');
            modal.showModal();
            console.log('clicked');
        });

        close.addEventListener('click', function() {
            const modal = document.getElementById('modal');
            modal.close();
            console.log('closed');
        });
    </script>
</body>

</html>
