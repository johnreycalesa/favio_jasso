<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=lora:500" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
        @layer utilities {
            * {
                font-family: 'Lora', serif;
            }
        }
    </style>
</head>

<body class="h-screen w-screen flex justify-center items-center flex-col gap-3">

    <h1 class="text-3xl">Send Mail</h1>
    @if ($message = Session::get('success'))
        <div class="w-1/2 p-2 bg-green-100 border-l-4 border-green-600 text-green-600">
            <span class="flex justify-center w-full p-2">
                <strong class="text-lg">{{ $message }}</strong>
            </span>
        </div>
    @endif
    @if ($message = Session::get('error'))
        <div class="w-1/2 p-2 bg-red-100 border-l-4 border-red-600 text-red-600">
            <span class="flex justify-center w-full p-2">
                <strong class="text-lg">{{ $message }}</strong>
            </span>
        </div>
    @endif
    <div class="p-5 rounded bg-orange-100">
        <h2 class="text-2xl my-3">Contact Us</h2>
        <form action="{{ route('send.email.post') }}" method="post"
            class="flex flex-col gap-3 [&>*]:p-2 [&>input]:outline-none [&>input]:border-2">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" cols="50" class="rounded-lg border-2 outline-none" required></textarea>
            <button type="submit"
                class="bg-orange-500 text-center rounded-lg hover:opacity-80 text-white">Send</button>
        </form>
    </div>
    <script>
        const dialog = document.querySelector("dialog");
        const closeButton = document.querySelector("#close");

        closeButton.addEventListener("click", () => {
            dialog.close();
        });
    </script>
</body>

</html>
