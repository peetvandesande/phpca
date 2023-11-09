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
use phpca\Person;

/**
 * Person tests example.
 */
class PersonTest extends TestCase
{
    public function testGreetDefaults()
    {
        $person = new Person();

        self::assertEquals('No one', $person->getName());
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage " " is not a valid name
     */
    public function testInvalidName()
    {
        new Person(' ');
    }

    /**
     * @dataProvider namesProvider
     *
     * @param string $name
     */
    public function testName(string $name)
    {
        $person = new Person($name);

        self::assertEquals($name, $person->getName());
    }

    /**
     * Names provider.
     *
     * @return array
     */
    public function namesProvider(): array
    {
        return [
            ['John Doe'],
            ['Jane Doe'],
        ];
    }
}
