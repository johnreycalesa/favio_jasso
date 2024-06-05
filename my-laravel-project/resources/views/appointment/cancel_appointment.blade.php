<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Appointment Notification</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="h-screen w-screen flex justify-center items-center">
        <div class="bg-white h-3/5 w-1/3  p-3 text-white rounded-lg">
            <div class="h-full bg-orange-400 flex flex-col gap-5 p-6 justify-end">
                <div class="flex flex-col gap-10">
                    <h3 class="text-3xl">Hello, {{ $appointment->name }}</h3>
                    <p>This is your current appointment:</p>
                </div>
                <div class="">
                    <p><span class="font-extrabold text-lg"> Name: </span>{{ $appointment->name }}</p>
                    <p><span class="font-extrabold text-lg"> Email: </span>{{ $appointment->email }}</p>
                    <p><span class="font-extrabold text-lg"> Service: </span>{{ $appointment->service->type }}</p>
                    <p><span class="font-extrabold text-lg"> Date: </span>{{ $appointment->schedule->date }}</p>
                    <p><span class="font-extrabold text-lg"> Time: </span>{{ $appointment->availability->start_time }} -
                        {{ $appointment->availability->end_time }}</p>
                    <p><span class="font-extrabold text-lg"> Address: </span>{{ $appointment->address }}</p>
                    <p><span class="font-extrabold text-lg"> Contact Number: </span>{{ $appointment->phone_no }}</p>
                </div>
                <div class="">
                    <p>Click <a href="{{ route('appointments.cancel', ['id' => $appointment->id]) }}"
                            class="underline underline-offset-4 bg-orange-500 p-[4px] rounded-sm">here</a> to <span
                            class="font-extrabold">Cancel</span> your appointment request.</p>
                </div>
            </div>
        </div>
</body>

</html>
