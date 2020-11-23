<?php declare(strict_types=1);

namespace Tests\Unit;

use App\singleton\Singleton;
use Tests\TestCase;

//php vendor/phpunit/phpunit/phpunit
class SingletonTest extends TestCase
{
    public function testUniqueness()
    {
        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();
        $this->assertInstanceOf(Singleton::class, $firstCall);
         $this->assertSame($firstCall, $secondCall);
    }

    public function testCounter()
    {
        $foo = Singleton::getInstance();
        $this->assertEquals(0, $foo->getCounter());
        $foo->incrementCounter();
        $this->assertEquals(1, $foo->getCounter());
       $foo->tearDown();
    }

    public function testIsOdd()
    {
        $foo = Singleton::getInstance();
        $this->assertEquals(FALSE, $foo->counterIsOdd(), '0 is even');
        $foo->incrementCounter();
        $this->assertEquals(TRUE, $foo->counterIsOdd(), '1 is uneven');
    }
}