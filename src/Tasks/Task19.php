<?php

declare(strict_types=1);

namespace App\Tasks;

use App\Model\ListNode;

/**
 * https://leetcode.com/problems/remove-nth-node-from-end-of-list/
 * 65.63/92.71
 */
final class Task19
{
    public function removeNthFromEnd(ListNode $head, int $n): ?ListNode
    {
        if ($head->next === null) {
            return null;
        }

        $count = $this->getListLenght($head);

        if ($count === $n) {
            return $head->next;
        }

        $this->removeElement($head, $count - $n);

        return $head;
    }

    private function getListLenght(ListNode $head): int
    {
        $result = 0;
        while ($head !== null) {
            $head = $head->next;
            $result++;
        }

        return $result;
    }

    private function removeElement(ListNode $head, int $n): void
    {
        for ($i = 1; $i < $n; $i++) {
            $head = $head->next;
        }

        if ($head->next->next === null) {
            $head->next = null;
        } else {
            $head->next = $head->next->next;
        }
    }
}
