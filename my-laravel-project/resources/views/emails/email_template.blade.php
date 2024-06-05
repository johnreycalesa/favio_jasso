<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Template</title>
    <style>
        body {
            font-family: "Georgia", serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            background-color: #F97316;
            color: white;
            padding: 10px;
            text-align: center;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .content {
            margin: 20px 0;
        }

        .footer {
            background-color: #f4f4f4;
            color: #555555;
            text-align: center;
            padding: 10px;
            font-size: 12px;
            border-bottom-left-radius: 8px;
            border-bottom-right-radius: 8px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            margin: 20px 0;
            background-color: #F97316;
            color: #FFFFFF;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>FAVIO JASSO</h1>
        </div>
        <div class="content">
            <h2>Hello, {{ $name }}!</h2>
            <p>Thank you for contacting us. We have received your message and will get back to you shortly.</p>
            <p>Message: {{ $message }}</p>
            <p>If you have any questions, feel free to reply to this email or contact our support team.</p>
            <a href="https://yourcompany.com/support" class="button" style="color: #FFFFFF">Visit Support</a>
        </div>
        <div class="footer">
            &copy; 2024 Your Company. All rights reserved.
        </div>
    </div>
</body>

</html>
