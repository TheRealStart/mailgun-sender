# Mailgun Sender

This is TheRealStart Mailgun Sender wrapper to use on landing pages 

## Installation

To install Mailgun Sender, you will need to be using [Composer](http://getcomposer.org/) 
in your project. 

If you aren't using Composer yet, it's really simple! Here's how to install 
composer:

```bash
curl -sS https://getcomposer.org/installer | php
```

The TheRealStart Mailgun Sender is not hard coupled to Guzzle or any other library that sends HTTP messages. It uses an abstraction 
called HTTPlug. This will give you the flexibilty to choose what PSR-7 implementation and HTTP client to use. 

If you just want to get started quickly you should run the following command: 

```bash
php composer.phar require therealstart/mailgun-sender:dev-master

```

## Usage

```php
use MailgunSender\MailgunSender;

$sender = new MailgunSender("{mailgun-key}", "{mailgun-domain}");

$sender->send(
    "from@email.com",
    "to@email.com",
    "Subject",
    "Message Body"
);
```