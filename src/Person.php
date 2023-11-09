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
 * Example Person class.
 */
class Person
{
    /**
     * @var string
     */
    private $name;

    /**
     * Person constructor.
     *
     * @param string $name
     */
    public function __construct(string $name = 'No one')
    {
        $this->setName($name);
    }

    /**
     * Return person name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set person name.
     *
     * @param string $name
     *
     * @return void
     *
     * @throws \InvalidArgumentException
     */
    public function setName(string $name)
    {
        if (trim($name) === '') {
            throw new \InvalidArgumentException(sprintf('"%s" is not a valid name', $name));
        }

        $this->name = trim($name);
    }
}
