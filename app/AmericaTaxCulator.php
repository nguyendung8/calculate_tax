<?php

namespace App;

use App\TaxAbstractClass;

class AmericaTaxCulator extends TaxAbstractClass
{
    // public $americaDedution;
    // public $americaRate;
    public function calculate($taxable)
    {
        switch(true) {
            case $taxable <=9950:
                $tax = $taxable * 0.1;
                break;
            case $taxable <= 40525:
                $tax = 9950 * 0.10 + ($taxable - 9950) * 0.12;
                break;
            case $taxable <= 86375:
                $tax =9950 * 0.10 + (40525 - 9950) * 0.12 + ($taxable - 40525) * 0.22;
                break;
            case $taxable <= 164925:
                $tax = 9950 * 0.10 + (40525 - 9950) * 0.12 + (86375 - 40525) * 0.22 + ($taxable - 86375) * 0.24;
                break;
            case $taxable <= 209425:
                $tax =9950 * 0.10 + (40525 - 9950) * 0.12 + (86375 - 40525) * 0.22 + (164925 - 86375) * 0.24 + ($taxable - 164925) * 0.32;
                break;
            case $taxable <= 523600:
                $tax = 9950 * 0.10 + (40525 - 9950) * 0.12 + (86375 - 40525) * 0.22 + (164925 - 86375) * 0.24 + (209425 - 164925) * 0.32 + ($taxable - 209425) * 0.35;
                break;
            default:
                $tax = 9950 * 0.10 + (40525 - 9950) * 0.12 + (86375 - 40525) * 0.22 + (164925 - 86375) * 0.24 + (209425 - 164925) * 0.32 + (523600 - 209425) * 0.35 + ($taxable - 523600) * 0.37;
                break;
        }
        $totalMoney = $taxable - $tax;
        return $totalMoney * 24385;
    }
}
