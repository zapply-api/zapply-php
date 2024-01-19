# Zapply SDK

Zapply SDK is a PHP client library for interacting with Zapply.

## Requirements

- PHP 8.1 or higher

## Installation

Install the SDK using Composer:

```bash
composer require zapply/zapply-php
```

## Usage

```php
<?php

use Zapply\Zapply;

$zapply = new Zapply([
    'base_uri' => 'YOUR DEVICE URL',
    'bearer_token' => 'YOUR API KEY',
    'channel_id' => 'YOUR DEVICE ID',
]);

$response = $zapply->chat('552199999999')->sendMessage([
    'recipient_type' => 'individual',
    'type' => 'text',
    'message' => [
        'body' => 'Hello World!',
    ]
])
```