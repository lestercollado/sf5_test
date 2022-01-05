<?php

namespace App\Interfaces;

use App\Interfaces\OperationsInterface;

class DiffOperation implements OperationsInterface
{
    public function name($operation){
        return "diff"===$operation;
    }

    public function calculate($operandA, $operandB){
        return $operandA - $operandB;
    } 
} 
