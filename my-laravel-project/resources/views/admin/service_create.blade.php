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
    <title>Create New Service</title>
</head>

<body>
    <div class="flex items-center justify-center h-screen">
        <div class="w-3/5 p-5 border-4 rounded-lg">
            <form action="{{ url('/admin/service/create') }}" method="POST" class="flex flex-col">
                @csrf
                <div class="flex items-center justify-between p-3 m-3">
                    <h2 class="text-3xl font-bold">Create New Service</h2>
                    <a href="/admin/service" class="p-3 text-white bg-orange-500 rounded-lg hover:opacity-80">Back</a>
                </div>
                <div class="flex flex-col items-center justify-between gap-3 p-3 m-3">
                    <div class="flex flex-col w-full gap-2">
                        <label for="service_type">Name of Service:</label>
                        <input type="text" id="service_name" name="service_name"
                            class="p-2 border rounded-lg focus:outline-none" required>
                    </div>
                    <div class="flex flex-col w-full gap-2">
                        <label for="service_description">Description:</label>
                        <textarea id="service_description" name="service_description" class="p-2 border rounded-lg focus:outline-none" required></textarea>
                    </div>
                    <div class="flex flex-col w-full gap-2">
                        <label for="status">Status:</label>
                        <select id="status" name="status" class="p-2 border rounded-lg focus:outline-none" required>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </div>
                </div>
                <button type="submit"
                    class="p-3 m-3 text-white bg-orange-500 rounded-lg hover:opacity-80">Submit</button>
            </form>

        </div>
    </div>
</body>

</html>
