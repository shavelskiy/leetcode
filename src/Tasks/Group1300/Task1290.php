<?php

declare(strict_types=1);

namespace App\Tasks\Group1300;

use App\Model\ListNode;

/**
 * https://leetcode.com/problems/convert-binary-number-in-a-linked-list-to-integer/
 * t2.86/92.86.
 */
final class Task1290
{
    public function getDecimalValue(ListNode $head): int
    {
        $result = '';
        while ($head !== null) {
            $result .= $head->val;
            $head = $head->next;
        }

        return bindec($result);
    }
}
