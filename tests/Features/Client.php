<?php


use Board3r\MistralLaravelPlugin\Client\MistralClient;
use Board3r\MistralSdk\Mistral;

test('Mistral', closure: function () {
    $client = MistralClient::mistral();

    expect($client)->toBeInstanceOf(Mistral::class);
});

test('Codestral', closure: function () {
    $client = MistralClient::codestral();

    expect($client)->toBeInstanceOf(Mistral::class);
});
