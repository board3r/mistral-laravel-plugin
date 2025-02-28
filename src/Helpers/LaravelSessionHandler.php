<?php

namespace Board3r\MistralLaravelPlugin\Helpers;


use Board3r\MistralSdk\Helpers\SessionHandlerInterface;
use Illuminate\Support\Facades\Session;

class LaravelSessionHandler implements SessionHandlerInterface
{

    public function get(string $key): ?string
    {
        return Session::get($key);
    }

    public function write(string $key, string $value = null): void
    {
        Session::put($key, $value);
    }

    public function has(string $key): bool
    {
        return Session::has($key);
    }

    public function unset(string $key): void
    {
        Session::forget($key);
    }

    public function id(): string
    {
        return Session::getId();
    }
}
