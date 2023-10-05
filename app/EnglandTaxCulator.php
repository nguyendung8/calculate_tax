<?php

namespace App;
use App\TaxAbstractClass;

class EnglandTaxCulator extends TaxAbstractClass
{
    public $englandDedution;
    public $englandRate;
    public function calculate($taxable)
    {
        switch(true) {
            case $taxable <= 50270:
                $tax = $taxable * 0.20;
                break;
            case $taxable <= 150000:
                $tax = 50270 * 0.20 + ($taxable - 50270) * 0.40;
                break;
            default:
                $tax = 50270 * 0.20 + (150000 - 50270) * 0.40 + ($taxable - 150000) * 0.45;
                break;
        }

        $totalMoney = $taxable - $tax;
        return $totalMoney * 29497;
    }
}
