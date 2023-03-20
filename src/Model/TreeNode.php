<?php

declare(strict_types=1);

namespace App\Model;

final class TreeNode
{
    public function __construct(
        public int $val = 0,
        public ?self $left = null,
        public ?self $right = null
    ) {
    }
}
