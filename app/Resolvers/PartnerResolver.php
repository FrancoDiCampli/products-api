<?php

namespace App\Resolvers;

use Exception;

use App\Models\Partner;

class PartnerResolver
{
    protected $partnertPlatforms;

    public function __construct()
    {
        // $this->partnertPlatforms = Partner::all();
    }

    public function resolveService($partnertPlatformId)
    {
        // $name = strtolower($this->partnertPlatforms->firstWhere('id', $partnertPlatformId)->name);

        // $service = config("services.{$name}.class");
        $service = config("services.galeno.class");

        if ($service) {
            return resolve($service);
        }

        throw new Exception('The selected payment platform is not in the configuration');
    }
}
