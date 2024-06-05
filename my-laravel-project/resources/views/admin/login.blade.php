<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{ asset('images/Logo.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
    <style type="text/tailwindcss">
        @layer utilities {
            .toggle-password {
                position: absolute;
                right: 25px;
                top: 50%;
                transform:
                    translateY(-50%);
                cursor: pointer;
                color: #F8AF5B;
            }

            * {
                border: 1px solid red;
            }
        }
    </style>
    <title> Login </title>
    </style>

<body class="flex flex-col items-center justify-center w-screen h-screen">
    <div class="w-[750px] h-[500px] flex border rounded-lg hover:shadow-md">
        <div class="w-1/2 flex flex-col items-center justify-center">
            <img src="" alt="">
            <div>
                <p class="italic">Hello, Good day</p>
            </div>
        </div>
        <div class="w-1/2 bg-white flex justify-center rounded-r-lg">
            <div class="flex flex-col items-center justify-center w-full gap-5 p-8">
                <div id="logo-container">
                    <img src="{{ asset('images/Logo.png') }}" alt="Logo">
                </div>
                <form id="login-form" method="POST" action="{{ route('login') }}"
                    class="flex flex-col justify-center items-center w-full gap-4 [&>input]:w-full [&>input]:shadow [&>input]:outline-none [&>input]:border [&>input]:p-2 [&>input]:rounded-lg">
                    @csrf
                    <input type="text" class="input" id="email" name="email" required autocomplete="off"
                        placeholder="Email">
                    <input type="password" class="input" id="password" name="password" placeholder="Password"
                        required>
                    <div class="flex justify-center w-full">
                        <input type="submit" value="Sign In"
                            class="w-2/3 p-2 text-orange-600 border-2 border-orange-600 rounded-lg hover:bg-orange-600 hover:text-white" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
