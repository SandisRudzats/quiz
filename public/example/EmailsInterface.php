<?php


interface EmailsInterface
{
    public function send(string $email, string $message);

}