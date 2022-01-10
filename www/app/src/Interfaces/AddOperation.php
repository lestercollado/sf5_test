<?php

namespace App\Interfaces;

use App\Interfaces\OperationsInterface;

class AddOperation implements OperationsInterface
{
    public function name($operation){
        return "add"===$operation;
    }

    public function calculate($operandA, $operandB){
        return $operandA + $operandB;
    } 
} 
