<?php

declare(strict_types=1);

namespace App\Tasks;

use App\Model\ListNode;

/**
 * https://leetcode.com/problems/reverse-linked-list/
 * 69.33/75.56
 */
final class Task206
{
    public function reverseList(?ListNode $head): ?ListNode
    {
        $last = null;
        $next = $head;
        while ($next !== null) {
            $head = $next;
            $next = $head->next;
            $head->next = $last;
            $last = $head;
        }

        return $last;
    }
}
