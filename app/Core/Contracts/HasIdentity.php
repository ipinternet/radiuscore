<?php

declare(strict_types=1);

namespace App\Core\Contracts;

interface HasIdentity
{
    /**
     * Return the unique identifier for the object.
     */
    public function id(): string|int;
}
