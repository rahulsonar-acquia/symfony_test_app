<?php
namespace D7PackageUpdate\Services;

use Psr\Log\LoggerInterface;

class MyTestService
{
    private LoggerInterface $logger;
    public function __construct(LoggerInterface $logger) {
        $this->logger = $logger;
    }
    public function myTestFunction() {
        echo "I am being called from service\n";
    }
}