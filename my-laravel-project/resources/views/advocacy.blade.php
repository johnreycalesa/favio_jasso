<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('images/Logo.png') }}" type="image/x-icon">
    <style>
        * {
            font-family: "Inter", sans-serif
        }
    </style>
    <title>
        Experience
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
    <!-- Main Section -->
    <div class="relative w-full overflow-hidden">
        <div class="flex transition-transform duration-500 ease" id="carousel-inner">
            <div class="flex-none w-full carousel-item ">
                <img src="{{ asset('images/1a.png') }}" alt="Image" class="border-b-4 border-orange-400">
                <div class="flex items-center justify-center m-2 md:m-5">
                    <a href="https://buytokenllc.com/"
                        class="w-1/3 p-1 text-xs text-center text-orange-500 border-2 border-orange-500 rounded-lg md:p-2 md:text-lg lg:text-xl md:border-2 lg:border-4 md:px-4 md:py-3 lg:py-5 bg-slate-50 hover:opacity-80">Go
                        to Site</a>
                </div>
            </div>
            <div class="flex-none w-full carousel-item">
                <img src="{{ asset('images/2b.png') }}" alt="Image" class="border-b-4 border-orange-400">
                <div class="flex items-center justify-center m-2 md:m-5">
                    <a href="https://buytokenllc.com/"
                        class="w-1/3 p-1 text-xs text-center text-orange-500 border-2 border-orange-500 rounded-lg md:p-2 md:text-lg lg:text-xl md:border-2 lg:border-4 md:px-4 md:py-3 lg:py-5 bg-slate-50 hover:opacity-80">Go
                        to Site</a>
                </div>
            </div>
            <div class="flex-none w-full carousel-item">
                <img src="{{ asset('images/3c.png') }}" alt="Image" class="border-b-4 border-orange-400">
                <div class="flex items-center justify-center m-2 md:m-5">
                    <a href="https://buytokenllc.com/"
                        class="w-1/3 p-1 text-xs text-center text-orange-500 border-2 border-orange-500 rounded-lg md:p-2 md:text-lg lg:text-xl md:border-2 lg:border-4 md:px-4 md:py-3 lg:py-5 bg-slate-50 hover:opacity-80">Go
                        to Site</a>
                </div>
            </div>
        </div>
        <div class="absolute left-0 flex items-center justify-end w-[50px] md:w-[75px] lg:w-[100px] p-3 text-white transition duration-300 ease-in-out transform -translate-y-1/2 bg-black bg-opacity-50 cursor-pointer top-1/2 hover:bg-black hover:bg-opacity-80"
            id="carousel-prev" onclick="prevSlide()">
            <i class="p-1 md:p-2 lg:p-3 fa-solid fa-chevron-left md:fa-3x hover:scale-110"></i>
        </div>
        <div class="absolute right-0 flex items-center justify-start w-[50px] md:w-[75px] lg:w-[100px] p-3 text-white transition duration-300 ease-in-out transform -translate-y-1/2 bg-black bg-opacity-50 cursor-pointer top-1/2 hover:bg-black hover:bg-opacity-80"
            id="carousel-next" onclick="nextSlide()">
            <i class="p-1 md:p-2 lg:p-3 fa-solid fa-chevron-right md:fa-3x hover:scale-110"></i>
        </div>
    </div>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(0)"></span>
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
    </div>
    <!-- End Main Section -->
    <!-- Experience Section -->
    <div id="experience" class="flex flex-col w-full">
        <div class="flex flex-row justify-center py-5 text-3xl font-bold md:text-5xl">
            <p>EXPERIENCE </p>
        </div>
        <div class="flex flex-row items-center justify-center w-full gap-5">
            <div class="w-1/3">
                <img src="" alt="" srcset="">
                <h5></h5>
                <p></p>
                <button type="button"></button>
            </div>
            <div class="w-1/3">
                <img src="" alt="" srcset="">
                <h5></h5>
                <p></p>
                <button type="button"></button>
            </div>
            <div class="w-1/3">
                <img src="" alt="" srcset="">
                <h5></h5>
                <p></p>
                <button type="button"></button>
            </div>
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
    <script>
        let currentIndex = 0;
        const slides = document.querySelectorAll('.carousel-item');
        const totalSlides = slides.length;

        function showSlide(index) {
            const carouselInner = document.getElementById('carousel-inner');
            const percentage = index * -100;
            carouselInner.style.transform = `translateX(${percentage}%)`;
            currentIndex = index;
            updateDots();
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
            showSlide(currentIndex);
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % totalSlides;
            showSlide(currentIndex);
        }

        function currentSlide(index) {
            showSlide(index);
        }

        function updateDots() {
            const dots = document.querySelectorAll('.dot');
            dots.forEach((dot, i) => {
                dot.className = dot.className.replace(' active', '');
                if (i === currentIndex) {
                    dot.className += ' active';
                }
            });
        }

        // Initialize the first slide
        showSlide(0);
    </script>

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
    </script>
</body>

</html>
