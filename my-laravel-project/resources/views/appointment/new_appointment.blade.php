<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Appointment Notification</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex flex-col h-screen justify-center items-center">
        <div class="flex flex-col gap-3 m-3 p-10 rounded-lg border-4">
            <div class="flex flex-col gap-2">
                <h3 class="text-2xl">Hello Admin,</h3>
                <p class="text-xl">A new appointment request has been submitted:</p>
            </div>
            <div class="flex flex-col gap-3 [&>*>span]:font-bold">
                <p><span>Name:</span> {{ $appointment->name }}</p>
                <p><span>Email:</span> {{ $appointment->email }}</p>
                <p><span>Service:</span> {{ $appointment->service->type }}</p>
                <p><span>Date:</span> {{ $appointment->schedule->date }}</p>
                <p><span>Time:</span> {{ $appointment->availability->start_time }} -
                    {{ $appointment->availability->end_time }}</p>
                <p><span>Address:</span> {{ $appointment->address }}</p>
                <p><span>Contact Number:</span> {{ $appointment->phone_no }}</p>
                <p><span>Status:</span> {{ $appointment->status }}</p>
                <p><span>Contact Number:</span> {{ $appointment->phone_no }}</p>
                <div class="">
                    <p>Click <a href="{{ route('admin.dashboard.unauthenticated', ['user' => 1]) }}"
                            class="underline-offset-4">here</a> to <b>Approve
                            or Reject</b> this appointment request.</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
