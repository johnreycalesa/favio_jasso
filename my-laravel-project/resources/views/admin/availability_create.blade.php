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
            font-family: "Inter", sans-serif;
        }
    </style>
    @vite('resources/css/app.css')
    <title>Create New Time Slot</title>
</head>

<body>
    <div class="flex items-center justify-center h-screen">
        <div class="w-3/5 p-5 border-4 rounded-lg">
            <form action="{{ url('/admin/availabilities/create') }}" method="POST" class="flex flex-col">
                @csrf

                <div class="flex items-center justify-between p-3 m-3">
                    <h2 class="text-3xl font-bold">Create New Availability</h2>
                    <a href="/admin/availabilities"
                        class="p-3 text-white bg-orange-500 rounded-lg hover:opacity-80">Back</a>
                </div>

                <div class="flex flex-col items-center justify-between gap-3 p-3 m-3">
                    <div class="flex flex-col w-full gap-2">
                        <label for="service_id">Service:</label>
                        <select id="service_id" name="service_id" class="p-2 border rounded-lg focus:outline-none"
                            required>
                            <option>Select Service:</option>
                            @foreach ($services as $service)
                                <option value="{{ $service->service_id }}">{{ $service->service_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="flex flex-col w-full gap-2">
                        <label for="available_date">Date:</label>
                        <input type="date" id="available_date" name="available_date"
                            class="p-2 border rounded-lg focus:outline-none" required>
                    </div>
                    <div class="w-full flex justify-between gap-2 [&>*]:w-[48%]">
                        <div class="flex flex-col w-full gap-2">
                            <label for="start_time">Start Time:</label>
                            <input type="time" id="start_time" name="start_time"
                                class="p-2 border rounded-lg focus:outline-none focus:bg-neutral-100" required>
                        </div>
                        <div class="flex flex-col w-full gap-2">
                            <label for="end_time">End Time:</label>
                            <input type="time" id="end_time" name="end_time"
                                class="p-2 border rounded-lg focus:outline-none focus:bg-neutral-100" required>
                        </div>
                    </div>
                    <div class="flex flex-col w-full gap-2">
                        <label for="status">Status:</label>
                        <select id="status" name="status" class="p-2 border rounded-lg focus:outline-none" required>
                            <option value="Available">Available</option>
                            <option value="Not Available">Not Available</option>
                        </select>
                    </div>
                </div>
                @if ($errors->has('error'))
                    <div>
                        {{ $errors->first('error') }}
                    </div>
                @endif

                <div class="w-full">
                    <button type="submit"
                        class="w-full p-3 text-white bg-orange-500 rounded-lg focus:outline-none hover:opacity-75">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
<script>
    $(document).ready(function() {
        $('#service_id').on('change', function() {
            const selectedService = $(this).val();
            const $dateSelect = $('#schedule_id');

            fetch(`/get-dates/${selectedService}`)
                .then((response) => response.json())
                .then((data) => {
                    // Clear previous options
                    $dateSelect.empty();

                    // Append new options based on the retrieved data
                    data.forEach((schedule) => {
                        $dateSelect.append(
                            `<option value="${schedule.id}">${schedule.date}</option>`);
                    });

                })
                .catch((error) => {
                    console.error('Error:', error);
                });
        });
        const startTimeInput = $('.starttime');
        const endTimeInput = $('#end_time');

        startTimeInput.timepicker({
            timeFormat: 'hh:mm p',
            interval: 60,
            scrollbar: true,
            change: function(time) {
                const startTime = moment(time, 'hh:mm A');
                const endTime = startTime.clone().add(45, 'minutes');
                endTimeInput.val(endTime.format('hh:mm A'));
            }
        });
    });
</script>
