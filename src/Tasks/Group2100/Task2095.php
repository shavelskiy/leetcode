<?php

declare(strict_types=1);

namespace App\Tasks\Group2100;

use App\Model\ListNode;

/**
 * https://leetcode.com/problems/delete-the-middle-node-of-a-linked-list/.
 * 13.64/100.00.
 */
final class Task2095
{
    public function deleteMiddle(ListNode $head): ?ListNode
    {
        $point1 = $head;
        $point2 = $head;
        $prev = null;

        while ($point2 !== null && $point2->next !== null) {
            $prev = $point1;
            $point1 = $point1->next;
            $point2 = $point2->next->next;
        }

        if ($prev === null) {
            return null;
        }

        $prev->next = $point1->next;

        return $head;
    }
}
