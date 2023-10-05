<?php

namespace App\Http\Controllers;

use App\FactoryPattern\TaxServiceFactory;
use App\Http\Requests\TaxRequest;
use Illuminate\Http\Request;

class TaxController extends Controller
{
    public function calculateTax(TaxRequest $request)
    {
        $money = $request->taxable;
        $result = TaxServiceFactory::calculateTax($request->country)->calculate($request->taxable);
        $deduction = $money - $result;
        return view('/index', compact('money', 'result', 'deduction', 'country'));
    }
}
