<?php

return [
    /**
     * Fill your Mistral API key @see https://console.mistral.ai/api-keys
     */
    'api_key' => env('MISTRAL_API_KEY', ''),
    /**
     * Default base URL
     */
    'base_url' => env('MISTRAL_BASE_URL', 'https://api.mistral.ai/v1'),
    /**
     * Fill your Codestral API key if you need to use this model @see https://console.mistral.ai/codestral
     */
    'codestral_api_key' => env('MISTRAL_API_KEY', ''),
    /**
     * Default base URL for codestral
     */
    'codestral_base_url' => env('MISTRAL_BASE_URL', 'https://codestral.mistral.ai/v1'),
    /**
     * Chat session let keep in memory the current conversation
     */
    'session_enabled' => env('MISTRAL_SESSION_ENABLED', false),
    /**
     * How many user messages (and responses) you want to keep in memory
     */
    'session_history' => env('MISTRAL_SESSION_HISTORY', 10),
    /**
     * Connect timeout
     */
    'connect_timeout' => env('MISTRAL_CONNECT_TIMEOUT', 30),
    /**
     * Request timeout
     */
    'request_timeout' => env('MISTRAL_REQUEST_TIMEOUT', 60),
];
