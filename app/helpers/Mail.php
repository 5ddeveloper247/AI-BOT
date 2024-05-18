<?php


use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

if (!function_exists('sendMail')) {
    function sendMail($send_to_name, $send_to_email, $email_from_name, $subject, $body)
    {
        try {


            $mail_val = [
                'send_to_name' => $send_to_name,
                'send_to' => $send_to_email,
                'email_from' => 'noreply@pancard.com',
                'email_from_name' => $email_from_name,
                'subject' => $subject,
            ];

            Mail::send('mail.mail', ['body' => $body], function ($send) use ($mail_val) {
                $send->from($mail_val['email_from'], $mail_val['email_from_name']);
                $send->replyto($mail_val['email_from'], $mail_val['email_from_name']);
                $send->to($mail_val['send_to'], $mail_val['send_to_name'])->subject($mail_val['subject']);
            });
            return true;
        } catch (\Exception $e) {
            Log::error($e->getMessage());

            //  echo "An error occurred while sending the email: " . $e->getMessage();
            return $e->getMessage();
        }
    }
}
