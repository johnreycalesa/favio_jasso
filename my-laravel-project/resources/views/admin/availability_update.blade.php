<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Time Slot</title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <link rel="icon" href="{{ asset('images/Logo.png') }}" type="image/x-icon">
    <script src="//code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
</head>

<body>
    <div class="flex flex-col h-screen justify-center items-center bg-neutral-50">
        <div class="w-2/3">
            <div class="">
                <form action="{{ route('admin.availability') }}" method="POST"
                    class="bg-white rounded-lg border flex flex-col gap-3 p-3 [&>*]:p-2 [&>*]:flex [&>*]:justify-between [&>*]:items-center">
                    @csrf
                    <!-- Include this line if using Laravel's CSRF protection -->
                    <div class="">
                        <h3 class="text-xl font-bold">Update Availability</h3>
                        <a href="/availabilities" class="text-base p-2 underline">Back</a>
                    </div>
                    <input type="hidden" name="id" value="{{ $data['id'] }}">
                    <div class="">
                        <label for="service_id">Service:</label>
                        <input type="text" id="service_id" name="service_id"
                            value="{{ $data['schedule']['service']['type'] }}"
                            class="p-2 border rounded-lg focus:outline-none"readonly>
                    </div>
                    <div class="">
                        <label for="date">Date:</label>
                        <select id="schedule_id" name="schedule_id" class="p-2 border rounded-lg focus:outline-none"
                            required>
                            @foreach ($dates as $date)
                                <option value="{{ $date->id }}" @if ($data['schedule']['id'] === $date->id) selected @endif>
                                    {{ $date->date }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="">
                        <label for="start_time">Start Time:</label>
                        <input type="text" id="start_time" value="{{ $data['start_time'] }}" name="start_time"
                            class="p-2 border rounded-lg focus:outline-none" required>
                    </div>
                    <div class="">
                        <label for="end_time">End Time:</label>
                        <input type="text" id="end_time" value="{{ $data['end_time'] }}" name="end_time"
                            class="p-2 border rounded-lg focus:outline-none" required>
                    </div>
                    <div class="">
                        <label for="status">Status:</label>
                        <input type="text" id="status" value="{{ $data['status'] }}" name="status"
                            class="p-2 border rounded-lg focus:outline-none" required>
                    </div>
                    @if ($errors->has('error'))
                        <div class="">
                            {{ $errors->first('error') }}
                        </div>
                    @endif
                    <div class="">
                        <button type="submit"
                            class="w-full p-3 rounded-lg bg-orange-500 focus:outline-none hover:opacity-75 text-white">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<script>
    $(document).ready(function() {
        $('#service_id').on('change', function() {
            const selectedService = $(this).val();
            const $dateSelect = $('#schedule_id');

            // Send an AJAX request to get dates based on the selected service
            fetch(`/get-dates/${selectedService}`)
                .then((response) => response.json())
                .then((data) => {
                    // Clear previous options
                    $dateSelect.empty();

                    // Append new options based on the retrieved data
                    data.forEach((date) => {
                        $dateSelect.append(
                            `<option value="${date.id}">${date.date}</option>`);
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
