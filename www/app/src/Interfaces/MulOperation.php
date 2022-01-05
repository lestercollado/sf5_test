<?php

namespace App\Interfaces;

use App\Interfaces\OperationsInterface;

class MulOperation implements OperationsInterface
{
    public function name($operation){
        return "mul"===$operation;
    }

    public function calculate($operandA, $operandB){
        return $operandA * $operandB;
    } 
} 
