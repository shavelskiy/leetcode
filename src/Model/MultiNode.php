<?php

declare(strict_types=1);

namespace App\Model;

final class MultiNode
{
    /** @var self[] */
    public array $children = [];

    public function __construct(
        public int $val,
    ) {
    }
}
