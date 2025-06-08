<?php

declare(strict_types=1);

namespace App\Tasks\Group200;

use App\Model\ListNode;

/**
 * 0/100
 * https://leetcode.com/problems/reorder-list.
 */
final class Task143
{
    public function reorderList(ListNode $head): void
    {
        do {
            $stack[] = $head;
            $head = $head->next;
        } while ($head !== null);

        $result = array_shift($stack);
        $current = $result;

        $i = true;
        while (!empty($stack)) {
            $next = $i ? array_pop($stack) : array_shift($stack);
            $current->next = $next;
            $current = $next;
            $i = !$i;
        }

        $current->next = null;
    }
}
