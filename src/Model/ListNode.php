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

    public static function fromArray(array $nums): self
    {
        $val = array_shift($nums);

        return new self($val, !empty($nums) ? self::fromArray($nums) : null);
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
