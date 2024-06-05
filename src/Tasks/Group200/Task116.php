<?php

declare(strict_types=1);

namespace App\Tasks\Group200;

use App\Model\TreeNodeRight as Node;

/**
 * https://leetcode.com/problems/populating-next-right-pointers-in-each-node/
 * 80/86.67.
 */
final class Task116
{
    public function connect(?Node $root): ?Node
    {
        if ($root !== null) {
            $this->process([$root]);
        }

        return $root;
    }

    private function process(array $level): void
    {
        if (empty($level)) {
            return;
        }

        $newLevel = [];
        foreach ($level as $key => $current) {
            $current->next = $level[$key + 1] ?? null;

            if ($current->left !== null) {
                $newLevel[] = $current->left;
                $newLevel[] = $current->right;
            }
        }

        $this->process($newLevel);
    }
}
