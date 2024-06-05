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
    <title>Admin Dashboard</title>
</head>

<body class="bg-[#F6BF80]">
    <div class="flex">
        <!-- Sidebar -->
        <aside id="sidebar" class="w-96 bg-[#F8AF5B] h-screen mr-3">
            <div class="flex flex-col items-center justify-center">
                <div class="m-5">
                    <img src="{{ asset('images/Logo.png') }}" alt="Logo">
                </div>
                <span onclick="closeSidebar()"></span>
            </div>
            <ul class="flex flex-col m-5 gap-y-5">
                <li class="flex items-center">
                    <a href="dashboard"
                        class="flex items-center w-full rounded-lg hover:bg-orange-600 hover:text-white">
                        <i class="m-5 open fa-solid fa-chart-column fa-2x md:fa-3x"></i>Dashboard
                    </a>
                </li>
                <li>
                    <a href="service" class="flex items-center w-full rounded-lg hover:bg-orange-600 hover:text-white">
                        <i class="m-5 open fa-solid fa-suitcase fa-2x md:fa-3x"></i>Services
                    </a>
                </li>
                <li>
                    <a href="schedule-dashboard"
                        class="flex items-center w-full rounded-lg hover:bg-orange-600 hover:text-white">
                        <i class="m-5 open fa-solid fa-calendar-days fa-2x md:fa-3x"></i>Schedule
                    </a>
                </li>
                <li>
                    <a href="appointment-dashboard"
                        class="flex items-center w-full rounded-lg hover:bg-orange-600 hover:text-white">
                        <i class="m-5 open fa-solid fa-calendar-check fa-2x md:fa-3x"></i>Appointment
                    </a>
                </li>
                <li>
                    <a href="availabilities"
                        class="flex items-center w-full rounded-lg hover:bg-orange-600 hover:text-white">
                        <i class="m-5 open fa-solid fa-timeline fa-2x md:fa-3x"></i>Availabilities
                    </a>
                </li>
            </ul>
        </aside>
        </aside>
        <!-- End Sidebar -->
        <!-- Main Content -->
        <main class="flex flex-col max-w-[1000px] w-full gap-5 p-5">
            <h1 class="text-3xl font-bold text-white">DASHBOARD</h1>
            <div class="flex flex-col items-center justify-center p-3 m-3 bg-white border rounded-2xl">
                <p class="text-2xl font-bold">Appointment Status</p>
                <table class="w-full p-3 m-3">
                    <tr>
                        <th class="text-[#ffae3d] font-bold">Pending</th>
                        <th class="text-[#ff8c2e] font-bold">Confirmed</th>
                        <th class="text-[#f05d35] font-bold">Canceled</th>
                    </tr>
                    <tr>
                        <td class="font-bold text-center">{{ $pendingCount }}</td>
                        <td class="font-bold text-center">{{ $approvedCount }}</td>
                        <td class="font-bold text-center">{{ $rejectedCount }}</td>
                    </tr>
                </table>
            </div>
            <div class="p-3 m-3 bg-white rounded-2xl">
                <span class="text-[#ff7c03] text-base font-bold">Upcoming Appointments </span>
                {{-- <table>
                    @foreach ($upcomingAppointments as $appointment)
                        <tr>
                            <td class="text-[#ff7c03] text-sm">{{ $appointment->name }}</td>
                            <td class="text-[#ff7c03] text-sm">{{ $appointment->availability->start_time }}</td>
                            <td class="text-[#ff7c03] text-sm">{{ $appointment->status }}</td>
                        </tr>
                    @endforeach
                </table> --}}
            </div>
            <div class="p-3 m-3 bg-white rounded-2xl">
                <header class="flex justify-end">
                    <div class="flex ">
                        <span id="prev">
                            <button id="open-menu" class="flex items-center">
                                <i class="m-5 open fa-solid fa-angle-left fa-2x md:fa-3x"></i>
                            </button>
                        </span>
                        <span id="next"><button id="open-menu" class="flex items-center">
                                <i class="m-5 open fa-solid fa-angle-right fa-2x md:fa-3x"></i>
                            </button></span>
                    </div>
                </header>
                <div class="bg-[#ffaa39] rounded-md">
                    <ul class="flex justify-between [&>*]:w-full [&>*]:text-center p-2">
                        <li>Sun</li>
                        <li>Mon</li>
                        <li>Tue</li>
                        <li>Wed</li>
                        <li>Thu</li>
                        <li>Fri</li>
                        <li>Sat</li>
                    </ul>
                    <ul></ul>
                </div>
            </div>
    </div>
    </div>
</body>

</html>
