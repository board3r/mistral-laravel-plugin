<?php

test('Publish Config', closure: function () {
     $result  = $this->artisan('vendor:publish --tag=mistral-laravel-plugin-config');
     expect($result)->assertExitCode(0);
});

test('Config loaded', closure: function () {
    $baseUrl = config('mistral.base_url');
    expect($baseUrl)->toBe(getenv('MISTRAL_BASE_URL'));
});