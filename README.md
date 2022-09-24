# Zein/Bot
manage your chat bot with your custom provider or our provider.

available provider:
* [Whacenter](https://whacenter.com/)
* [Telegram](https://telegram.org)

## How to
make code like this:
```php
<?php

use Zein\Bot\Providers\Whacenter;

require __DIR__ . '/../vendor/autoload.php';

$payload = Whacenter::buildPayload(['message' => 'test message 😎', 'number' => '<WA-Number>']);
$sendStatus = Whacenter::send($payload)->toArray();
```