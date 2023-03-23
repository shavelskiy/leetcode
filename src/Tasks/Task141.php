<?php

declare(strict_types=1);

namespace App\Tasks;

use App\Model\ListNode;

/**
 * https://leetcode.com/problems/linked-list-cycle/
 * 69.31/52.57
 */
final class Task141
{
    public function hasCycle(?ListNode $head): bool
    {
        $fast = $head;
        while ($head !== null && $fast !== null && $fast->next !== null) {
            $head = $head->next;
            $fast = $fast->next->next;

            if ($head === $fast) {
                return true;
            }
        }

        return false;
    }
}
