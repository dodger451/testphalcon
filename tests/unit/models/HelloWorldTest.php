<?php
/**
 * HelloWorldTest.php
 * @author david
 */
namespace Latotzky\Testphalcon\Tests\Unit\Models;

/**
 * HelloWorldTest
 */
class HelloWorldTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var string
     */
    protected $classToTest = 'Latotzky\Testphalcon\Models\HelloWorld';

    /**
     * tests getHello
     */
    public function testGetHello()
    {
        $hello = new $this->classToTest();
        $this->assertEquals('hello', $hello->getHello());
    }
}
