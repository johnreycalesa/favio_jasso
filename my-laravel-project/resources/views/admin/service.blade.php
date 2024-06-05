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
    <title>Service Dashboard</title>
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
        <!-- End Sidebar -->
        <!-- Main -->
        <main class="flex flex-col max-w-[1000px] w-full gap-5 p-5">
            <div class="flex items-center justify-between">
                <p class="text-2xl font-extrabold text-orange-700">Service Table</p>
                <a href="{{ url('admin/service/create') }}" class="p-3 text-white bg-orange-500 rounded-lg">
                    <button>Create</button>
                </a>
            </div>
            <table class="min-w-full overflow-hidden rounded-lg">
                <thead class="w-full [&>*]:bg-[#F8AF5B] [&>tr>*]:p-5">
                    <tr class="w-full text-orange-50">
                        <th>Name</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="[&>*]:bg-white [&>tr>*]:p-5">
                    @foreach ($services as $service)
                        <tr class="w-full text-center [&>*]:border" id="{{ $service->service_id }}">
                            <td>{{ $service->service_name }}</td>
                            <td>{{ $service->service_description }}</td>
                            <td>{{ $service->status }}</td>
                            <td>
                                <a href="{{ url('/admin/service/update/' . $service->service_id) }}"
                                    class="w-full text-orange-500 underline">Update</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </main>
        <!-- End Main -->
    </div>
    <script defer></script>
</body>


</html>
