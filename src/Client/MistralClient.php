<?php

namespace Board3r\MistralLaravelPlugin\Client;

use Board3r\MistralLaravelPlugin\Helpers\LaravelSessionHandler;
use Board3r\MistralSdk\Helpers\HistoryHelper;
use Board3r\MistralSdk\Mistral;

class MistralClient
{
    protected static Mistral $Client;
    protected static Mistral $CodestralClient;

    /**
     * @return Mistral
     */
    public static function mistral(): Mistral
    {
        if (!isset(self::$Client)) {
            self::$Client = new Mistral(
                apiKey: config('mistral.api_key'),
                baseUrl: config('mistral.base_url', 'https://api.mistral.ai/v1'),
                requestTimeout: config('mistral.request_timeout', 60),
                connectTimeout: config('mistral.connect_timeout', 30)
            );
            self::setHistory();
        }
        return self::$Client;
    }

    protected static function setHistory():void
    {
        if (config('mistral.session_enabled',false)) {
            HistoryHelper::setSessionHandler(LaravelSessionHandler::class);
            HistoryHelper::enable();
            HistoryHelper::setParamHistory(config('mistral.session_history', 10));
        } else {
            HistoryHelper::disable();
        }
    }

    /**
     * @return Mistral
     */
    public static function codestral(): Mistral
    {
        if (!isset(self::$CodestralClient)) {
            self::$CodestralClient = new Mistral(
                apiKey: config('mistral.codestral_api_key'),
                baseUrl: config('mistral.codestral_base_url', 'https://codestral.mistral.ai/v1/'),
                requestTimeout: config('mistral.request_timeout', 60),
                connectTimeout: config('mistral.connect_timeout', 30)
            );
            self::setHistory();
        }
        return self::$CodestralClient;
    }
}