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
        @layer utilities {
            * {
                font-family: "Inter", sans-serif border: 1px solid red;
            }
        }
    </style>
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

    <!-- First Section -->
    <div class="flex flex-col items-center justify-center h-[510px]"
        style="background-image: url(images/b5.png); background-repeat: no-repeat; background-size: 100%;">
        <div class="flex flex-col items-center justify-center w-3/5 gap-5">
            <h1 class="text-3xl font-bold text-center text-white drop-shadow-lg">Let's tell the story about your
                business.</h1>
            <p class="font-bold ">My goal?</p>
            <p class="flex flex-col items-center justify-center w-3/5 gap-5">To tell your business's story in the
                best
                and most marketable way possible while achieving your
                marketing, branding, and advertising objectives.
                <a href="">
                    <img src="images/arrow-down.png" alt="ArrowDown">
                </a>
            </p>
        </div>
    </div>
    <!-- End First Section -->

    <!-- Second Section -->
    <form action="{{ route('book') }}" method="POST" class="flex flex-col gap-5 p-5">
        @csrf
        <h2 class="font-bold text-xl text-[#FF7C03]">Select Service</h2>
        <p class="text-center">Set up consulting Today!</p>
        <div class="w-full p-1 border rounded-lg">
            <select name="service_id" id="service_id"
                class="w-full h-10 text-[#FF7C03] text-center bg-white rounded-lg focus:outline-none">
                <option value="" selected disabled hidden>Select Option:</option>
                @foreach ($services as $service)
                    <option value="{{ $service->service_id }}">{{ $service->service_name }}</option>
                @endforeach
            </select>
        </div>

        <h2 class="font-bold text-xl text-[#FF7C03] mt-5">Select Time</h2>
        <div class="flex flex-row justify-center h-auto">
            <div class="w-full h-auto max-w-xl p-5 m-5 transition-all bg-white border rounded-2xl hover:shadow-md">
                <div class="h-auto">
                    <div class="flex items-center justify-between mb-5">
                        <i class="cursor-pointer fas fa-chevron-left"></i>
                        <div>
                            <h1 class="text-xl font-bold" id="monthYear"></h1>
                            <p class="text-sm text-gray-500" id="currentDate"></p>
                        </div>
                        <i class="cursor-pointer fas fa-chevron-right"></i>
                    </div>
                    <div class="grid grid-cols-7 mb-5 text-center">
                        <div>SUN</div>
                        <div>MON</div>
                        <div>TUE</div>
                        <div>WED</div>
                        <div>THU</div>
                        <div>FRI</div>
                        <div>SAT</div>
                    </div>
                    <div class="grid grid-cols-7 text-center" id="calendarDays">
                        <!-- Calendar dates will be inserted here -->
                    </div>
                </div>
            </div>
            <div
                class="flex flex-col items-center justify-center w-full max-w-md p-5 m-5 bg-white border rounded-2xl hover:shadow-md">
                <div id="selectedDate" class="mb-3 text-lg font-bold"></div>
                <div id="timeSlots" class="grid grid-cols-2 gap-2">
                    <!-- Time slots will be inserted here -->
                </div>
                <div class="p-2 mt-3 text-center bg-orange-500 rounded-lg">
                    <small class="text-white">
                        US Eastern Standard Time
                    </small>
                </div>
            </div>
        </div>

        <h2 class="font-bold text-xl text-[#FF7C03] mt-5">Add your details</h2>
        <div class="p-10 bg-white border rounded-lg hover:shadow-md" id="contact">
            <div class="flex justify-between [&>input]:w-1/2 [&>input]:p-2 [&>input]:m-2 [&>input]:rounded-md">
                <input type="text" placeholder="Name" class="bg-gray-100 border border-gray-200" id="submit-name"
                    required>
                <input type="email" placeholder="Email" class="bg-gray-100 border border-gray-200"
                    id="submit-email" required>
            </div>
            <div class="flex justify-between [&>input]:w-1/2 [&>input]:p-2 [&>input]:m-2 [&>input]:rounded-md">
                <input type="text" placeholder="Address" class="bg-gray-100 border border-gray-200"
                    id="submit-address" required>
                <input type="text" placeholder="Phone Number" class="bg-gray-100 border border-gray-200"
                    id="submit-phone-no" required>
            </div>
            <div class="p-4 m-2 bg-orange-100 rounded-xl">
                <h5 class="flex justify-start items-center gap-5 [&>*]:h-6">
                    <img src="images/qmark.png" alt="QuestionMark">
                    <small>Please share some details about your project.</small>
                </h5>
            </div>
            <div class="p-2">
                <textarea name="message" rows="5" placeholder="Notes" id="submit-note"
                    class="w-full p-2 bg-gray-100 border border-gray-200 rounded-md"></textarea>
            </div>
        </div>

        <div class="flex flex-col items-center justify-center gap-2 mt-5">
            <small>
                By clicking below you agree to these <span onclick="openPrivacyPolicyModal()"
                    class="text-orange-500">Privacy Policies</span>
            </small>
            <div>
                <button type="submit"
                    class="p-2 text-white bg-orange-500 border-2 border-orange-500 rounded-md hover:bg-white hover:text-orange-500">
                    Book Now
                </button>
                <div class="hidden"><b>Thanks for contacting us! We will get in touch with you shortly.</b></div>
                <div class="hidden"><b>Failed! Please fill in all the required fields.</b></div>
                <div class="hidden"><b>Invalid email address. Please use a correct Gmail address format.</b></div>
            </div>
        </div>
        <hr class="mt-5">
    </form>

    <!-- End Details Section -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const monthNames = ["January", "February", "March", "April", "May", "June",
                "July", "August", "September", "October", "November", "December"
            ];
            const today = new Date();
            let currentMonth = today.getMonth();
            let currentYear = today.getFullYear();

            const monthYearEl = document.getElementById('monthYear');
            const currentDateEl = document.getElementById('currentDate');
            const calendarDaysEl = document.getElementById('calendarDays');
            const selectedDateEl = document.getElementById('selectedDate');
            const timeSlotsEl = document.getElementById('timeSlots');

            function renderCalendar(month, year) {
                // Clear previous cells
                calendarDaysEl.innerHTML = '';

                // Set the current month and year
                monthYearEl.textContent = `${monthNames[month]} ${year}`;
                currentDateEl.textContent = today.toDateString();

                // First day of the month
                const firstDay = new Date(year, month, 1).getDay();

                // Number of days in the month
                const daysInMonth = 32 - new Date(year, month, 32).getDate();

                // Create blank cells for days of the previous month
                for (let i = 0; i < firstDay; i++) {
                    const cell = document.createElement('div');
                    cell.classList.add('p-2', 'border', 'border-gray-200');
                    calendarDaysEl.appendChild(cell);
                }

                // Create cells for each day of the current month
                for (let day = 1; day <= daysInMonth; day++) {
                    const cell = document.createElement('div');
                    cell.classList.add('p-2', 'border', 'border-gray-200', 'cursor-pointer');
                    cell.textContent = day;
                    cell.addEventListener('click', () => showTimeSlots(new Date(year, month, day)));
                    calendarDaysEl.appendChild(cell);
                }
            }

            function showTimeSlots(date) {
                selectedDateEl.textContent = date.toDateString();
                timeSlotsEl.innerHTML = '';

                for (let hour = 9; hour <= 17; hour++) {
                    const timeSlot = document.createElement('div');
                    timeSlot.classList.add('p-2', 'border', 'border-gray-200', 'bg-gray-100', 'rounded-lg',
                        'text-center', 'hover:bg-orange-500', 'hover:text-white', 'cursor-pointer');

                    let displayHour = hour % 12;
                    displayHour = displayHour ? displayHour : 12; // Adjust hour for 12-hour format
                    const period = hour < 12 ? 'AM' : 'PM';
                    timeSlot.textContent = `${displayHour}:00 ${period}`;

                    timeSlotsEl.appendChild(timeSlot);
                }
            }


            renderCalendar(currentMonth, currentYear);

            document.querySelector('.fa-chevron-left').addEventListener('click', () => {
                currentMonth--;
                if (currentMonth < 0) {
                    currentMonth = 11;
                    currentYear--;
                }
                renderCalendar(currentMonth, currentYear);
            });

            document.querySelector('.fa-chevron-right').addEventListener('click', () => {
                currentMonth++;
                if (currentMonth > 11) {
                    currentMonth = 0;
                    currentYear++;
                }
                renderCalendar(currentMonth, currentYear);
            });
        });
    </script>
</body>

</html>
