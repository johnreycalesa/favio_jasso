<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Schedule</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="w-2/3">
        <div class="w-auto">
            <div class="w-full flex justify-end">
                <a href="/schedule-dashboard" class="bg-white w-min px-2 py-1 rounded-sm text-orange-700 hover:opacity-80">Back</a>
            </div>
            <h2 class="text-center text-3xl font-bold m-5">Create New Schedule</h2>
            <form action="/admin/schedule/create/info" method="POST" class="flex flex-col gap-3 p-5 bg-white rounded-lg">
                @csrf
                <div>
                    <div class="flex gap-3 p-5 bg-white [&>*]:w-1/2 [&>*>*]:p-3 [&>*>select]:bg-orange-300 [&>*>select]:rounded-lg">
                        <div class="flex flex-col">
                            <p for="service_id">Service Type:</p>
                            <select id="service_id" name="service_id" required>
                                @foreach($services as $service)
                                <option value="{{ $service->id }}">{{ $service->type }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex flex-col">
                            <p for="date">Date:</p>
                            <input type="text" autocomplete="off" id="date" class="datepicker" name="date" class="bg-orange-300 rounded-lg focus:outline-none" required>
                        </div>
                    </div>
                    <div class="flex flex-col px-5 [&>*]:p-3">
                        <p for="status">Status:</p>
                        <select id="status" name="status" class="bg-orange-300 rounded-lg" required>
                            <option value="Available">Available</option>
                        </select>
                    </div>
                    @if ($errors->has('date'))
                    <div class="">
                        {{ $errors->first('date') }}
                    </div>
                    @endif

                    @if ($errors->has('error'))
                    <div class="">
                        {{ $errors->first('error') }}
                    </div>
                    @endif
                    <button type="submit" class="bg-orange-500 text-white rounded-lg p-3 m-5 hover:opacity-80">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>

</html>
<script>
    $(function() {
        $(".datepicker").datepicker({
            dateFormat: 'yy-mm-dd'
        });
    });

// $("form").submit(function () {
//     var selectedDate = new Date($("#date").val());
//     var currentDate = new Date();

//     if (selectedDate < currentDate) {
//         alert("Make sure to create a schedule that is not in the past month.");
//         return false;
//     }
// });
    @if($errors - > any())
// Combine all error messages into a single string
    var errorMessage = @json($errors - > all());

// Display the error messages
    displayErrors(errorMessage);

// Reload the page after 5 seconds
    setTimeout(function() {
        location.reload();
}, 5000); // 5000 milliseconds (5 seconds)
    @endif

    function displayErrors(messages) {
        var errorContainer = document.getElementById('error-messages');
        var errorList = document.createElement('ul');

    // Create list items for each error message
        messages.forEach(function(message) {
            var listItem = document.createElement('li');
            listItem.textContent = message;
            errorList.appendChild(listItem);
        });

    // Display the error messages
        errorContainer.appendChild(errorList);
        errorContainer.style.display = 'block';
    }
</script>