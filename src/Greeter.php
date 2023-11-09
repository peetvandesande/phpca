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

namespace phpca;

/**
 * Example class.
 */
class Greeter
{
    /**
     * Greet a person.
     *
     * @param Person $person
     *
     * @return string
     */
    public function greet(Person $person): string
    {
        return 'Hello ' . $person->getName();
    }
}
