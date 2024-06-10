<?php

declare(strict_types=1);

namespace App\Tasks\Group400;

use App\Model\ListNode;

/**
 * https://leetcode.com/problems/odd-even-linked-list/.
 * 51.35/37.84.
 */
final class Task328
{
    public function oddEvenList(?ListNode $head): ?ListNode
    {
        if ($head === null || $head->next === null) {
            return $head;
        }

        $odd = $head;
        $even = $head->next;
        $evenHead = $even;

        $current = $head->next->next;
        $isOdd = true;
        while ($current !== null) {
            if ($isOdd) {
                $odd->next = $current;
                $odd = $odd->next;
            } else {
                $even->next = $current;
                $even = $even->next;
            }

            $current = $current->next;
            $isOdd = !$isOdd;
        }

        $odd->next = $evenHead;
        $even->next = null;

        return $head;
    }
}
