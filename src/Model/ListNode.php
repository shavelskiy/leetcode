<?php

declare(strict_types=1);

namespace App\Model;

final class ListNode
{
    public function __construct(
        public int $val = 0,
        public ?self $next = null,
    ) {
    }

    public function toArray(): array
    {
        $result = [];
        $tmp = $this;
        while ($tmp !== null) {
            $result[] = $tmp->val;
            $tmp = $tmp->next;
        }

        return $result;
    }
}
