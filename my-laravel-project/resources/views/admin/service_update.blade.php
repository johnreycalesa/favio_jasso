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
    <title>Update Service</title>
</head>

<body>
    <div class="flex items-center justify-center w-full h-screen bg-orange-50">
        <form id="updateServiceForm" action="{{ url('/admin/service/update/' . $service->service_id) }}" method="POST"
            class="bg-white rounded-lg border flex flex-col gap-2 p-3 [&>*]:p-2 [&>*]:flex [&>*]:justify-between">
            @csrf
            <div>
                <h3 class="text-xl font-bold text-orange-600">Update Service</h3>
                <a href="{{ url('/admin/service') }}"
                    class="px-3 py-2 text-base text-white bg-orange-500 rounded-lg">Back</a>
            </div>
            <hr class="w-full m-auto my-2">
            <input type="hidden" name="id" id="service_id" value="{{ $service->id }}">
            <div class="flex flex-col">
                <label for="service_name">Service Name:</label>
                <input type="text" id="service_name" name="service_name" value="{{ $service->service_name }}"
                    class="p-2 border rounded-lg focus:outline-none focus:bg-neutral-100" required>
            </div>
            <div class="flex flex-col">
                <label for="service_description">Description:</label>
                <textarea id="service_description" name="service_description" rows="4" cols="50"
                    class="p-2 border rounded-lg focus:outline-none focus:bg-neutral-100" required>{{ $service->service_description }}</textarea>
            </div>
            <div class="flex flex-col">
                <label for="status">Status:</label>
                <select id="status" name="status"
                    class="p-2 border rounded-lg focus:outline-none focus:bg-neutral-100" required>
                    <option value="Active" {{ $service->status == 'Active' ? 'selected' : '' }}>Active</option>
                    <option value="Inactive" {{ $service->status == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif
            <div>
                <button type="submit"
                    class="w-full p-3 text-white bg-orange-500 rounded-lg focus:outline-none hover:opacity-75">Submit</button>
            </div>
        </form>


    </div>
</body>

</html>
