<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use CESI\App;
use PHPUnit\Framework\TestCase;

/**
* @covers App::
*/
class MyTest extends TestCase
{
  public function testMyTest(): void
  {
    self::assertTrue(true);
  }

  /**
  * @covers App::SayHello
  */
  public function testSayHello(): void
  {
    $app = new App();

    self::assertSame($app->sayHello(), 'Hello!');
  }
}
