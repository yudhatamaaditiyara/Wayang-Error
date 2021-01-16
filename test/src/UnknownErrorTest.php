<?php declare(strict_types=1);
/**
 * Copyright 2019 Yudha Tama Aditiyara
 * SPDX-License-Identifier: Apache-2.0
 */
namespace WayangTest\Error;

use ReflectionClass;
use PHPUnit\Framework\TestCase;
use Wayang\Error\Error;
use Wayang\Error\UnknownError;
use Wayang\Error\ErrorInterface;

class UnknownErrorTest extends TestCase
{
  public function testMustBeClass(){
    $rc = new ReflectionClass(UnknownError::class);
    $this->assertFalse($rc->isTrait());
    $this->assertFalse($rc->isInterface());
  }

  public function testMustBeSubclassOfError(){
    $rc = new ReflectionClass(UnknownError::class);
    $this->assertTrue($rc->isSubclassOf(Error::class));
  }

  public function testMustBeImplemetsErrorInterface(){
    $rc = new ReflectionClass(UnknownError::class);
    $this->assertTrue($rc->implementsInterface(ErrorInterface::class));
  }
}