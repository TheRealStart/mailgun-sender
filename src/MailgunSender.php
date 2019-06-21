<?php

namespace MailgunSender;


use Exception;
use Mailgun\Mailgun;

class MailgunSender
{
    private $key;
    private $domain;

    public function __construct($key, $domain)
    {
        $this->key = $key;
        $this->domain = $domain;
    }

    public function send($from, $to, $subject, $message)
    {
        try {
            $mg = Mailgun::create($this->key);
            $mg->messages()->send($this->domain, [
                'from'    => $from,
                'to'      => $to,
                'subject' => $subject,
                'text'    => $message
            ]);
        } catch (Exception $e) {
            echo "<p>{$e->getMessage()}</p>";
        }
    }
}