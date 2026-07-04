<?php

declare(strict_types=1);

namespace App\Core\Contracts;

interface DataTransferObject
{
    /**
     * Convert the DTO to an array representation.
     *
     * @return array<string, mixed>
     */
    public function toArray(): array;
}
