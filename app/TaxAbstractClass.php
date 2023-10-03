<?php
namespace App;

abstract class TaxAbstractClass
{
    public $taxable;
    abstract public function calculate($taxable);
}

// class AmericaTaxCulator extends TaxCalculator
// {
//     public $americaDedution;
//     public $americaRate;
//     public function calculate($taxable)
//     {
//         switch(true) {
//             case $taxable <=9950:
//                 $tax = $taxable * 0.1;
//                 break;
//             case $taxable <= 40525:
//                 $tax = $taxable * 0.12;
//                 break;
//             case $taxable <= 86375:
//                 $tax =$taxable * 0.22;
//                 break;
//             case $taxable <= 164925:
//                 $tax = $taxable * 0.24;
//                 break;
//             case $taxable <= 209425:
//                 $tax =$taxable * 0.32;
//                 break;
//             case $taxable <= 523600:
//                 $tax = $taxable * 0.35;
//                 break;
//             default:
//                 $tax = $taxable * 0.37;
//                 break;
//         }

//         $totalMoney = $taxable - $tax;
//         return $totalMoney;
//     }
// }

// class EnglandTaxCulator extends TaxCalculator
// {
//     public $englandDedution;
//     public $englandRate;
//     public function calculate($taxable)
//     {

//     }
// }

// class CanadaTaxCulator extends TaxCalculator
// {
//     public $canadaDedution;
//     public $canadaRate;
//     public function calculate($taxable)
//     {

//     }
// }

// class AustraliaTaxCulator extends TaxCalculator
// {
//     public $australiaDedution;
//     public $australiaRate;
//     public function calculate($taxable)
//     {

//     }
// }
