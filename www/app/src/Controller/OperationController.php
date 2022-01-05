<?php

namespace App\Controller;

use App\Service\OperationsService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/** 
 * Class OperationController
 * @package App\Controller
 *
 * @Route(path="/api/")
*/
class OperationController{

    /** 
     * @Route("{operation}/{operandA}/{operandB}", name="operation_add", methods={"GET"})
     */
    public function oper(OperationsService $serv, string $operation, int $operandA, int $operandB){
        
        $result = $serv->operation($operation, $operandA, $operandB); 
        
        if($result === "zerodiv")
            return new JsonResponse(['message'=> 'Error, division by zero'],Response::HTTP_BAD_REQUEST);

        if($operation == "mul" && $result == 0)
            return new JsonResponse(['message'=> $operation.' success','result'=>$result],Response::HTTP_OK);

        if($result == null)
            return new JsonResponse(['message'=> 'Error, operation not found'],Response::HTTP_NOT_FOUND);

        return new JsonResponse(['message'=> $operation.' success','result'=>$result],Response::HTTP_OK);
    }
}