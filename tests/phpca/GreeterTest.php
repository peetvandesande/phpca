<?php

/*
 * phpca (https://github.com/peetvandesande/phpca).
 * A Certificate Authority manager in PHP.
 *
 * @license LGPL-3.0
 * @link https://github.com/peetvandesande/phpca
 * @author Peet van de Sande <peet@peetvandesande.com>
 */

declare(strict_types=1);

namespace phpca\Tests;

use PHPUnit\Framework\TestCase;
use phpca\Greeter;
use phpca\Person;

/**
 * Greeter tests example.
 */
class GreeterTest extends TestCase
{
    /**
     * @var Greeter
     */
    protected $greeter;

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        $this->greeter = new Greeter();
    }

    public function testGreet()
    {
        $person = self::getMockBuilder(Person::class)->disableOriginalConstructor()->getMock();
        $person->expects(self::once())->method('getName')->will(self::returnValue('John Doe'));

        self::assertEquals('Hello John Doe', $this->greeter->greet($person));
    }
}
