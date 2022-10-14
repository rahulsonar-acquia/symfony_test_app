<?php

namespace D7PackageUpdate\Console;
use D7PackageUpdate\Services\MyTestService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


#[AsCommand(name: 'app:testcommand')]
class TestCommand extends Command
{
    private MyTestService $myTestService;
    public function __construct(MyTestService $myTestService)
    {
        $this->myTestService = $myTestService;
        parent::__construct('testcommand');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        echo "Hello World\n";
        $this->myTestService->myTestFunction();
        return Command::SUCCESS;
    }
}