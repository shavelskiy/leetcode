<?php

declare(strict_types=1);

namespace App\Tasks\Group500;

use App\Model\ListNode;

/**
 * https://leetcode.com/problems/add-two-numbers-ii/
 * 100.00/60.00
 */
final class Task445
{
    public function addTwoNumbers(ListNode $l1, ListNode $l2): ListNode
    {
        $stack1 = [];
        $stack2 = [];

        while ($l1 !== null || $l2 !== null) {
            if ($l1 !== null) {
                $stack1[] = $l1->val;
                $l1 = $l1->next;
            }

            if ($l2 !== null) {
                $stack2[] = $l2->val;
                $l2 = $l2->next;
            }
        }

        $result = null;
        $transfer = false;
        while (!empty($stack1) || !empty($stack2)) {
            $v = (array_pop($stack1) ?? 0) + (array_pop($stack2) ?? 0) + ($transfer ? 1 : 0);
            $transfer = $v > 9;
            $result = new ListNode($v % 10, $result);
        }

        if ($transfer) {
            $result = new ListNode(1, $result);
        }

        return $result;
    }
}
