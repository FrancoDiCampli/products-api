<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Traits\ConsumeService;

use App\Services\CurrencyConversionService;

class OrigenesService
{
    use ConsumeService;

    protected $baseUri;

    protected $key;

    protected $secret;


    public function __construct()
    {
        $this->baseUri = config('services.origenes.base_uri');
        $this->key = config('services.origenes.key');
        $this->secret = config('services.origenes.secret');
    }

    public function resolveAuthorization(&$queryParams, &$formParams, &$headers)
    {
        $headers['Authorization'] = $this->resolveAccessToken();
    }

    public function decodeResponse($response)
    {
        return json_decode($response);
    }

    public function resolveAccessToken()
    {
        // Ver como resuelve el token 
        $credentials = base64_encode("{$this->key}:{$this->secret}");
        // $credentials = base64_encode("{$this->secret}");

        return "Basic {$credentials}";
    }

    public function tokenResponse()
    {

        return $this->makeRequest(
            'POST',
            '',
            [],
            [],
            [],
            $isJsonRequest = true,
        );
    }

    public function getBranches(){
        return $this->makeRequest(
            'GEt',
            '',
            [],
            [],
            [],
            $isJsonRequest = true,
        );

    }





   
}
