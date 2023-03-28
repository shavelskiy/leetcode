<?php

declare(strict_types=1);

namespace App\Model;

final class TreeNodeRight
{
    public function __construct(
        public int $val,
        public ?self $left = null,
        public ?self $right = null,
        public ?self $next = null,
    ) {
    }
}
