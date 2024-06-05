<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Schedule</title>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="icon" href="{{ asset('images/Logo.png') }}" type="image/x-icon">
</head>

<body>
    <div class="flex flex-col h-screen justify-center items-center bg-neutral-50">
        <div class="w-2/3">
            <form action="/admin/schedule/update" method="POST" class="bg-white rounded-lg border flex flex-col gap-3 p-3 [&>*]:p-2 [&>*]:flex [&>*]:justify-between [&>*]:items-center">
                @csrf
                <!-- Include this line if using Laravel's CSRF protection -->
                <div class="">
                    <h3 class="text-xl font-bold">Update Schedule</h3>
                    <a href="/schedule-dashboard" class="text-base p-2 underline">Back</a>
                </div>
                <input type="hidden" name="id" value="{{ $data['id'] }}">
                <div class="">
                    <label for="service_type">Service Type:</label>
                    <select id="service_type" name="service_type" class="p-2 border rounded-lg focus:outline-none" required>
                        @foreach ($services as $service)
                        <option value="{{ $service->type }}" @if ($data['service']['type']===$service->type) selected @endif>
                            {{ $service->type }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="">
                    <label for="date">Date:</label>
                    <input type="text" id="date" value="{{ $data['date'] }}" name="date" class="p-2 border rounded-lg focus:outline-none focus:bg-neutral-100 datepicker" required>
                </div>
                <div class="">
                    <label for="status">Status:</label>
                    <input type="text" id="status" value="{{ $data['status'] }}" name="status" class="p-2 border rounded-lg focus:outline-none focus:bg-neutral-100" required>
                </div>
                @if ($errors->has('date'))
                <div class="alert alert-danger">
                    {{ $errors->first('date') }}
                </div>
                @endif
                @if ($errors->has('error'))
                <div class="alert alert-danger">
                    {{ $errors->first('error') }}
                </div>
                @endif
                <div class="">
                    <button type="submit" class="w-full p-3 rounded-lg bg-orange-500 focus:outline-none hover:opacity-75 text-white">Submit</button>
                </div>
            </form>
        </div>
    </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>
</html>
<script>
    $(function () {
        $(".datepicker").datepicker({ dateFormat: 'yy-mm-dd' });
    });

    // $("form").submit(function () {
    //     var selectedDate = new Date($("#date").val());
    //     var currentDate = new Date();

    //     if (selectedDate < currentDate) {
    //         alert("Make sure to update a schedule that is not in the past month.");
    //         return false;
    //     }
    // });
</script>