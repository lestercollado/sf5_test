<?php

namespace App\Interfaces;

use App\Interfaces\OperationsInterface;

class DivOperation implements OperationsInterface
{
    public function name($operation){
        return "div"===$operation;
    }

    public function calculate($operandA, $operandB){
        if($operandB != 0)
            return $operandA / $operandB;
        return "zerodiv";
    } 
} 
