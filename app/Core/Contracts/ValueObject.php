<?php

declare(strict_types=1);

namespace App\Core\Contracts;

interface ValueObject
{
    /**
     * Compare two value objects for equality.
     */
    public function equals(self $other): bool;
}
