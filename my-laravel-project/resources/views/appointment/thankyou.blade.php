<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Appointment Status</title>
</head>

<body>
    <div class="bg-white h-3/5 w-1/3  p-3 text-white rounded-lg">
        <div class="h-full bg-orange-400 flex flex-col gap-5 p-6 justify-end">
            <div class="">
                <h2 class="text-lg">Appointment Status</h2>
            </div>
            <div class="flex flex-col gap-4">
                @if ($status === 'Approved')
                <h2 class="text-xl">Your Appointment has been Approved</h2>
                <p>I hope this message finds you well. Your appointment is confirmed. We're excited to serve you on the scheduled Date and Time.</p>
                <p>Thank you for choosing us. We are excited to serve you and provide you with the best possible experience.</p>
                <p>See you soon!</p>
                @elseif ($status === 'Rejected')
                <h2 class="text-xl">Appointment Rejected</h2>
                <p>I hope this email finds you well. We regret to inform you that, unfortunately, we are unable to accept your appointment request at this time.</p>
                <p>We appreciate your interest and time. If you have questions or seek alternatives, please reach out. We're here to help.</p>
                @else
                <h2 class="text-xl">Thank You! Your Appointment Status</h2>
                <p>Your appointment status is: {{ $status }}</p>
                @endif
            </div>

            <div class="footer">
                <p>For any inquiries, please contact us at <a href="mailto:fjporras04@gmail.com">fjporras04@gmail.com</a></p>
            </div>
        </div>
    </div>
</body>
</html>