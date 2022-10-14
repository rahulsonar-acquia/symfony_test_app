<?php

namespace D7PackageUpdate;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;

/**
 * This is a simple imlementaiton of Kernel.
 */
class Kernel extends BaseKernel {
  use MicroKernelTrait;

}
