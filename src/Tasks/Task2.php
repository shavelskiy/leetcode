<?php

declare(strict_types=1);

namespace App\Tasks;

use App\Model\ListNode;

/**
 * https://leetcode.com/problems/add-two-numbers/
 * 41.45/18.27
 */
final class Task2
{
    public function addTwoNumbers(?ListNode $l1, ?ListNode $l2, bool $o = false): ?ListNode
    {
        if ($l1 === null && $l2 === null && !$o) {
            return null;
        }

        $val = ($l1?->val ?? 0) + ($l2?->val ?? 0) + ($o ? 1 : 0);

        return new ListNode(
            $val > 9 ? ($val - 10) : $val,
            $this->addTwoNumbers($l1?->next, $l2?->next, $val > 9),
        );
    }
}
