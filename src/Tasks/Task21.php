<?php

declare(strict_types=1);

namespace App\Tasks;

use App\Model\ListNode;

/**
 * https://leetcode.com/problems/merge-two-sorted-lists/
 * 57.91/99.54
 */
final class Task21
{
    public function mergeTwoLists(?ListNode $list1, ?ListNode $list2): ?ListNode
    {
        $result = null;
        $current = null;

        while (true) {
            if ($list1 !== null && ($list2 === null || $list1->val < $list2->val)) {
                $next = $list1;
                $list1 = $list1->next;
            } elseif ($list2 !== null) {
                $next = $list2;
                $list2 = $list2->next;
            } else {
                break;
            }

            if ($current !== null) {
                $current->next = $next;
            }

            $current = $next;

            if ($result === null) {
                $result = $current;
            }
        }

        return $result;
    }
}
