<?php

declare(strict_types=1);

namespace App\Model;

final class Node
{
    public ?self $next = null;
    public ?self $random = null;

    public function __construct(
        public int $val,
    ) {
    }
}
