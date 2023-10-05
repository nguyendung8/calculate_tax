<?php

namespace App;
use App\TaxAbstractClass;

class AustraliaTaxCulator extends TaxAbstractClass
{
    public $australiaDedution;
    public $australiaRate;
    public function calculate($taxable)
    {
        switch (true) {
            case $taxable <= 18200:
                $tax = $taxable * 0.19;
                break;
            case $taxable <= 45000:
                $tax = 18200 * 0.19 + ($taxable - 18200) * 0.325;
                break;
            case $taxable <= 120000:
                $tax = 18200 * 0.19 + (45000 - 18200) * 0.325 + ($taxable - 45000) * 0.37;
                break;
            default:
                $tax = 18200 * 0.19 + (45000 - 18200) * 0.325 + (120000 - 45000) * 0.37 + ($taxable - 120000) * 0.45;
                break;
        }
        $totalMoney = $taxable - $tax;
        return $totalMoney * 15431;
    }
}
