<?php

namespace D7PackageUpdate\Console;

use D7PackageUpdate\Services\MyTestService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'app:testcommand')]
/**
 * A simple command to demostrate autowiring in symfony.
 */
class TestCommand extends Command {

  /**
   * A Test service for autowiring.
   *
   * @var \D7PackageUpdate\Services\MyTestService
   */
  private MyTestService $myTestService;

  /**
   * Constructor to load service via autowiring.
   */
  public function __construct(MyTestService $myTestService) {
    $this->myTestService = $myTestService;
    parent::__construct('testcommand');
  }

  /**
   * Perform basic operations and return success.
   */
  protected function execute(InputInterface $input, OutputInterface $output): int {
    if (!empty($input->getArgument('param1'))) {
      echo "Param passed: " . $input->getArgument('param1');
    }
    $output->writeln("My test command");
    $this->myTestService->myTestFunction();
    return Command::SUCCESS;
  }

}
