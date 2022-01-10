<?php

namespace App\Service;

use App\Interfaces\OperationsInterface;

class OperationsService{

    private $ops;

    public function __construct($ops)
    {
        $this->ops = $ops;
    }

    public function operation(string $operation, int $operandA, int $operandB)
    {   
        foreach($this->ops as $ope) {            
            if ($ope->name($operation)) {
                return $ope->calculate($operandA, $operandB);
            }
        }
        return null; 
    }

    public function operationCommand(string $operation, int $operandA, int $operandB)
    {   
        switch ($operation) {
            case 'add':
                return $operandA + $operandB;
            case 'mul':
                return $operandA * $operandB;
            case 'div':
                return $operandA / $operandB;
            case 'diff':
                return $operandA - $operandB;
            default:
                return null; 
        }
        return null; 
    }
}
