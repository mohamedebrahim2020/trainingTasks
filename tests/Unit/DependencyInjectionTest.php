<?php declare(strict_types=1);

namespace Tests\Unit;

use App\classes\DependencyInjection;
use Tests\TestCase;

class DependencyInjectionTest extends TestCase
{
public function testCounter()
{
    $instance = new DependencyInjection;
    $this->assertEquals(0, $instance->getCounter());
    $instance->incrementCounter();
    $this->withoutExceptionHandling();
    $this->assertEquals(1, $instance->getCounter());
   
}

public function testIsOdd()
{
    $instance = new DependencyInjection;
    $this->assertEquals(FALSE, $instance->counterIsOdd(), '0 is even');
    $instance->incrementCounter();
    $this->assertEquals(TRUE, $instance->counterIsOdd(), '1 is uneven');
}

}