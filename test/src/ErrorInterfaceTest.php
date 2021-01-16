<?php declare(strict_types=1);
/**
 * Copyright 2019 Yudha Tama Aditiyara
 * SPDX-License-Identifier: Apache-2.0
 */
namespace WayangTest\Error;

use ReflectionClass;
use PHPUnit\Framework\TestCase;
use Wayang\Stdlib\ThrowableInterface;
use Wayang\Error\ErrorInterface;

class ErrorInterfaceTest extends TestCase
{
  public function testMustBeInterface(){
    $rc = new ReflectionClass(ErrorInterface::class);
    $this->assertTrue($rc->isInterface());
  }

  public function testMustBeSubclassOfThrowableInterface(){
    $rc = new ReflectionClass(ErrorInterface::class);
    $this->assertTrue($rc->isSubclassOf(ThrowableInterface::class));
  }
}