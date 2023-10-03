<?php

namespace App\FactoryPattern;

use App\AmericaTaxCulator;
use App\AustraliaTaxCulator;
use App\CanadaTaxCulator;
use App\EnglandTaxCulator;

class TaxServiceFactory
{
    static function calculateTax(string $country)
    {
        return match($country) {
            'America' => app(AmericaTaxCulator::class),
            'Anh' => app(EnglandTaxCulator::class),
            'Canada' => app(CanadaTaxCulator::class),
            'Australia' => app(AustraliaTaxCulator::class),
        };
    }
}
