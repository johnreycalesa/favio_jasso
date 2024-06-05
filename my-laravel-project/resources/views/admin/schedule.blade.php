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
    <title>Schedule Dashboard</title>
</head>

<body class="bg-[#F6BF80]">
    <div class="flex">
        <!-- Sidebar -->
        <aside id="sidebar" class="w-96 bg-[#F8AF5B] h-screen mr-3">
            <div class="flex flex-col justify-center items-center">
                <div class="m-5">
                    <img src="{{ asset('images/Logo.png') }}" alt="Logo">
                </div>
                <span onclick="closeSidebar()"></span>
            </div>
            <ul class="flex flex-col gap-y-5 m-5">
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

        <!-- Main -->
        <main class="flex flex-col max-w-[1000px] w-full gap-5 p-5">
            <div class="flex items-center justify-between">
                <p class="text-2xl font-extrabold">Schedule Table</p>
                <a href="/admin/service/create">
                    <button>Create</button>
                </a>
            </div>
            <div class="bg-white p-5 rounded-lg">
                <table class="w-full border">
                    <thead>
                        <tr class="w-full [&>*]:border">
                            <th>Service</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($schedules as $schedule)
                        <tr class="w-full text-center [&>*]:border" id="{{$appointment->id}}">
                            <td>{{ $schedule->service->type }}</td>
                            <td>{{ $schedule->date }}</td>
                            <td>{{ $schedule->status }}</td>
                            <td>
                                @if ($schedule->status == 'Available')
                                <a href="{{ url('/admin/schedule/update/' . $schedule->id) }}">
                                    <button>Update</button>
                                </a>
                                @endif
                            </td>
                        </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>

</html>
