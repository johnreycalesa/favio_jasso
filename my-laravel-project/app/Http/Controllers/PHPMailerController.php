<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\View;

class PHPMailerController extends Controller
{
    public function index(Request $request)
    {
        return view('sendmail');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string'
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        $emailContent = View::make('emails.email_template', compact('name', 'message'))->render();
        //$emailContent = View::make('emails.email_template', ['name' => $request->name])->render();


        $mail = new PHPMailer(true);

        try {
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->isHTML(true);
            $mail->Host = env('MAIL_HOST');
            $mail->SMTPAuth = true;
            $mail->Username = env('MAIL_USERNAME');
            $mail->Password = env('MAIL_PASSWORD');
            $mail->SMTPSecure = env('MAIL_ENCRYPTION');
            $mail->Port = env('MAIL_PORT');

            // Recipients
            $mail->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $mail->addAddress($email, $name);
            $mail->addReplyTo($email, 'OurDearestCustomer');

            // Render the email template

            // Content
            $mail->isHTML(true);
            $mail->Subject = "Email Confirmation from Favio Jasso Consultancy";
            $mail->Body = $emailContent;
            $mail->AltBody = strip_tags($message); // Fallback for plain text email clients


            if (!$mail->send()) {
                return back()->with('error', 'Email not sent.')->withErrors($mail->ErrorInfo);
            } else {
                return back()->with('success', 'Email sent successfully!');
            }
        } catch (Exception $e) {
            return "Error sending email: " . $mail->ErrorInfo;
        }
    }
}