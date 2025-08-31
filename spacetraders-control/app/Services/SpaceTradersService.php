<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SpaceTradersService
{
    protected string $baseUrl = 'https://api.spacetraders.io/v2';

    public function __construct(protected string $token) {}

    public function getAgent()
    {
        return Http::withToken($this->token)->get($this->baseUrl.'/my/agent')->json();
    }

    public function getShips()
    {
        return Http::withToken($this->token)->get($this->baseUrl.'/my/ships')->json();
    }
}
