<?php


class EmailLogService implements EmailsInterface
{

    public function send(string $email, string $message)
    {
        $logEntry = date('r') . ' ' . $email . ' : ' . $message .  "\n";
        file_put_contents('email.log', $logEntry, FILE_APPEND);
    }
}