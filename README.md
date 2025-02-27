# Mistral SDK Laravel plugin

## Introduction
Laravel plugin for [Mistral SDK](https://github.com/board3r/mistral-sdk) 

## Requirements

* PHP >= 8.2
* Laravel 11+

## Install

```
composer require board3r/mistral-laravel-plugin
```

## Setup
Publish the mistral.php config
```
php artisan vendor:publish --tag=mistral-plugin-config
```

Configure your API KEY in the config

## Basic usage
```php
use \Board3r\MistralLaravelPlugin\Client\MistralClient;
use \Board3r\MistralSdk\Dto\Request\ChatCompletionRequest;
use \Board3r\MistralSdk\Enums\ModelEnum;
// With Dto
$request = new ChatCompletionRequest();
$request->setModel(ModelEnum::small->value);
$request->addUserMessage("Please, help me to have some information about Toulouse");
$response = MistralClient::mistral()->chat()->post($request);
// or without Dto
$response = MistralClient::get()->chat()->post([
    [
        'messages'=>[[
            'role'=>'user',
            'content'=>"Please, help me to have some information about Toulouse"
        ]],
        'model'=>'mistral-small-latest'
    ]
 ]);
```

Go to [Mistral SDK](https://github.com/board3r/mistral-sdk) to have more information about the usage.