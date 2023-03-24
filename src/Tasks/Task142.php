<?php

declare(strict_types=1);

namespace App\Tasks;

use App\Model\ListNode;

/**
 * https://leetcode.com/problems/linked-list-cycle-ii/
 * 52.98/67.55
 */
final class Task142
{
    public function detectCycle(?ListNode $head): ?ListNode
    {
        $stack = [];
        while ($head !== null) {
            if (isset($stack[spl_object_id($head)])) {
                return $head;
            }

            $stack[spl_object_id($head)] = true;
            $head = $head->next;
        }

        return null;
    }
}
