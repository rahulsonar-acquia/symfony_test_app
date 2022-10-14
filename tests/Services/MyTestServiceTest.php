<?php
namespace D7PackageUpdate\Services;
use PHPUnit\Framework\TestCase;
class MyTestServiceTest extends TestCase
{
    public function testMyTestFunction() {
        $logger = $this->createMock(\Psr\Log\LoggerInterface::class);
        $service = new \D7PackageUpdate\Services\MyTestService($logger);
        $this->assertEquals("I am being called from service",$service->myTestFunction());
    }
}