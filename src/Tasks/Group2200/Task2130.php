<?php

declare(strict_types=1);

namespace App\Tasks\Group2200;

use App\Model\ListNode;

/**
 * https://leetcode.com/problems/maximum-twin-sum-of-a-linked-list/.
 * 60.00/60.00.
 */
final class Task2130
{
    public function pairSum(ListNode $head): int
    {
        $point1 = $head;
        $point2 = $head;

        while ($point2 !== null) {
            $point1 = $point1->next;
            $point2 = $point2->next->next;
        }

        $reverseHead = null;
        $next = $point1;
        while ($next !== null) {
            $point1 = $next;
            $next = $point1->next;
            $point1->next = $reverseHead;
            $reverseHead = $point1;
        }

        $max = 0;
        while ($reverseHead !== null) {
            $max = max($reverseHead->val + $head->val, $max);
            $head = $head->next;
            $reverseHead = $reverseHead->next;
        }

        return $max;
    }
}
