<?php

namespace App\Http\Controllers;

use App\Services\CalculatorService;
use Illuminate\Http\Request;

class CalculateController extends Controller
{
    protected $calculatorService;

    // public function __construct(CalculatorService $calculatorService) {
    //     $this->calculatorService = $calculatorService;
    // }

    public function add(){
        return CalculatorService::add(5, 7);
    }

}