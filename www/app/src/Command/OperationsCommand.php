<?php
namespace App\Command;

use App\Service\OperationsService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class OperationsCommand extends Command
{
    //Name of command for execute from console
    protected static $defaultName = 'app:operations';

    protected function configure()
    {
      $this
       ->setDescription('Muestra un saludo a un nombre pasado por parámetro')
       ->setHelp('Este comando saluda.')
       ->addArgument('operandA', InputArgument::REQUIRED, 'Pass the operandA.')
       ->addArgument('operandB', InputArgument::REQUIRED, 'Pass the operandB.')
       ->addArgument('operation', InputArgument::REQUIRED, 'Pass the operation.');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
      $operandA = $input->getArgument('operandA');
      $operandB = $input->getArgument('operandB');
      $operation = $input->getArgument('operation');
      if (empty($operandA) && $operandA != 0) {
            throw new \Exception('Missing parameter operandA');
            return Command::FAILURE;
      }
      if (empty($operandB) && $operandB != 0) {
            throw new \Exception('Missing parameter operandB');
            return Command::FAILURE;
      }
      if (empty($operation)) {
            throw new \Exception('Missing parameter operation');
            return Command::FAILURE;
      }
      
      $ope = array();
      $serv = new OperationsService($ope);

      $result = $serv->operationCommand($operation, $operandA, $operandB); 

      if($result == "zero" && $operation == "div"){
        throw new \Exception('Error, division by zero');
        return Command::FAILURE;
      }

      if($result == "zero" && $operation == "mul"){
        $output->writeln('Result: ' . $result);
        return Command::SUCCESS;
      }

      if($result == null){
        throw new \Exception('Error, operation not found');
        return Command::FAILURE;
      }

      $output->writeln('Result: ' . $result);
      return Command::SUCCESS;
    }
}