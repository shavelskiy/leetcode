<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use App\Model\ListNode;

/**
 * https://leetcode.com/problems/remove-duplicates-from-sorted-list/
 * 46.67/88.67.
 */
final class Task83
{
    public function deleteDuplicates(?ListNode $head): ?ListNode
    {
        $result = $head;
        $exists = [];
        while ($head !== null) {
            $exists[] = $head->val;
            $next = $head->next;
            while ($next !== null && in_array($next->val, $exists, true)) {
                $next = $next->next;
            }
            $head->next = $next;
            $head = $next;
        }

        return $result;
    }
}
