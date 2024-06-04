<?php

declare(strict_types=1);

namespace App\Tasks;

use App\Model\ListNode;

/**
 * https://leetcode.com/problems/swap-nodes-in-pairs/
 * 68.29/12.20.
 */
final class Task24
{
    public function swapPairs(?ListNode $head): ?ListNode
    {
        if ($head === null) {
            return null;
        }

        $start = $head->next !== null ? $head->next : $head;
        $prev = null;
        while ($head !== null && $head->next !== null) {
            if ($prev !== null) {
                $prev->next = $head->next;
            }

            $prev = $head;
            $next = $head->next->next;
            $head->next->next = $head;
            $head->next = $next;

            $head = $next;
        }

        return $start;
    }
}
