<?php

namespace App;
use App\TaxAbstractClass;

class CanadaTaxCulator extends TaxAbstractClass
{
    public $canadaDedution;
    public $canadaRate;
    public function calculate($taxable)
    {
        switch (true) {
            case $taxable <= 49020:
                $tax = $taxable * 0.15;
                break;
            case $taxable <= 98040:
                $tax = 49020 * 0.15 + ($taxable - 49020) * 0.205;
                break;
            default:
                $tax = 49020 * 0.15 + (98040 - 49020) * 0.205 + ($taxable - 98040) * 0.33;
                break;
        }
        $totalMoney = $taxable - $tax;
        return $totalMoney * 17813;
    }
}
