<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use App\Model\ListNode;

/**
 * https://leetcode.com/problems/reverse-nodes-in-k-group/
 * 100/100.
 */
final class Task25
{
    public function reverseKGroup(ListNode $head, int $k): ListNode
    {
        $result = $head;
        for ($i = 1; $i < $k; ++$i) {
            if ($result->next !== null) {
                $result = $result->next;
            }
        }

        $length = $this->getListLength($head);

        while ($length >= $k) {
            $length -= $k;

            $nextBatch = $head;
            for ($j = 0; $j < $k; ++$j) {
                if ($nextBatch->next !== null) {
                    $nextBatch = $nextBatch->next;
                }
            }

            $first = $head;
            for ($i = 0; $i < $k; ++$i) {
                $prev = $head;
                $head = $next ?? $head;
                $next = $head->next;

                if ($prev === $head) {
                    continue;
                }

                $head->next = $prev;
            }

            if ($first === $nextBatch || $length < 1) {
                $first->next = null;
            } else {
                $first->next = $nextBatch;
                if ($length >= $k) {
                    for ($i = 1; $i < $k; ++$i) {
                        if ($first->next !== null) {
                            $first->next = $first->next->next;
                        }
                    }
                }
            }

            $head = $nextBatch;
        }

        return $result;
    }

    private function getListLength(ListNode $list): int
    {
        $result = 0;
        while ($list !== null) {
            $list = $list->next;
            ++$result;
        }

        return $result;
    }
}
