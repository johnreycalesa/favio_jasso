<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link href="{{ asset('sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/Logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Change Password</title>
</head>

<body>
    <div class="flex flex-col h-screen justify-center items-center">
        <div class="flex flex-col gap-3 m-3 p-10 rounded-lg border-4 bg-[#fbfbfb] w-1/3">
            <h2 class="text-2xl">Change Password</h2>
            <form id="passwordForm" action="{{ route('change-password') }}" class="flex flex-col gap-3" method="POST">
                @csrf
                <div class="flex flex-col gap-2">
                    <label for="old_password">Old Password:</label>
                    <input type="password" name="old_password" id="oldPassword" class="bg-white p-2 w-full border focus:outline-none">
                </div>
                <div class="flex flex-col gap-2">
                    <label for="password">New Password:</label>
                    <input type="password" name="password" id="newPassword" class="bg-white p-2 w-full border focus:outline-none">
                </div>
                <div class="flex flex-col gap-2">
                    <label for="password_confirmation">Confirm Password:</label>
                    <input type="password" name="password_confirmation" id="confirmPassword" class="bg-white p-2 w-full border focus:outline-none">
                </div>
                <button type="submit" id="unique-button" class="p-2 bg-orange-500 text-white rounded-md hover:bg-orange-400 ">Save</button>
                <a href="/appointment-dashboard" id="unique-button" class="p-2 text-center rounded-md border-4 border-orange-500 ">Cancel</a>
            </form>
        </div>
    </div>
    <script src="{{ asset('sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('js/admin_js/changepass.js') }}"></script>
</body>

</html>