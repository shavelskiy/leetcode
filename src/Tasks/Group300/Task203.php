<?php

declare(strict_types=1);

namespace App\Tasks\Group300;

use App\Model\ListNode;

/**
 * https://leetcode.com/problems/remove-linked-list-elements/
 * 48.84/34.88.
 */
final class Task203
{
    public function removeElements(?ListNode $head, int $val): ?ListNode
    {
        while ($head !== null && $head->val === $val) {
            $head = $head->next;
        }

        if ($head === null) {
            return null;
        }

        $current = $head;
        while ($current !== null) {
            while ($current->next !== null && $current->next->val === $val) {
                $current->next = $current->next->next;
            }

            $current = $current->next;
        }

        return $head;
    }
}
