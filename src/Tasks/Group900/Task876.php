<?php

declare(strict_types=1);

namespace App\Tasks\Group900;

use App\Model\ListNode;

/**
 * https://leetcode.com/problems/middle-of-the-linked-list/
 * 45.94/61.48.
 */
final class Task876
{
    public function middleNode(ListNode $head): ListNode
    {
        $i = 0;
        while ($i < $this->getLength($head)) {
            $head = $head->next;
            ++$i;
        }

        return $head;
    }

    private function getLength(ListNode $head): int
    {
        $result = 0;
        while ($head->next !== null) {
            $head = $head->next;
            ++$result;
        }

        return $result;
    }
}
