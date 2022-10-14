<?php

namespace D7PackageUpdate\Services;

use Psr\Log\LoggerInterface;

/**
 * A Simple service to demonstrate autowiring.
 */
class MyTestService {

  /**
   * Logger object to demostrate logging.
   */

  private LoggerInterface $logger;

  /**
   * Constructor to load logger object.
   */
  public function __construct(LoggerInterface $logger) {
    $this->logger = $logger;
  }

  /**
   * A sample function which can be executed from outside.
   */
  public function myTestFunction() {
    $this->logger->info('This is a test message');
    echo "I am being called from service\n";
  }

}
