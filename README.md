# Mailgun Sender

This is TheRealStart Mailgun Sender wrapper to use on landing pages 

## Installation

### Installing composer
To install Mailgun Sender, you will need to be using [Composer](http://getcomposer.org/) 
in your project. 

If you aren't using Composer yet, it's really simple! Here's how to install 
composer:

```bash
curl -sS https://getcomposer.org/installer | php
```

### Installing TheRealStart Mailgun Sender package

Run the following command: 

```bash
php composer.phar require therealstart/mailgun-sender:dev-master

```

### Use TheRealStart Mailgun Sender in your code

```php
require __DIR__ . '/vendor/autoload.php';

use MailgunSender\MailgunSender;

$sender = new MailgunSender("{mailgun-key}", "{mailgun-domain}");

$sender->send(
    "from@email.com",
    "to@email.com",
    "Subject",
    "Message Body"
);
```