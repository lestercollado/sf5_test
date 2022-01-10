<?php

namespace App\Interfaces;

interface OperationsInterface{

    public function name($operation);

    public function calculate($operandA, $operandB); 
} 
