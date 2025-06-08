<?php

declare(strict_types=1);

namespace App\Tasks\Group200;

use App\Model\TreeNode;

/**
 * 100/13.33
 * https://leetcode.com/problems/binary-tree-zigzag-level-order-traversal/?envType=problem-list-v2&envId=tree.
 */
final class Task103
{
    /**
     * @return array<int[]>
     */
    public function zigzagLevelOrder(?TreeNode $root): array
    {
        $result = [];

        $queue = $root !== null ? [$root] : [];
        $direction = true;

        while (!empty($queue)) {
            $next = [];
            $level = [];

            foreach ($queue as $node) {
                $level[] = $node->val;

                if ($node->left) {
                    $next[] = $node->left;
                }

                if ($node->right) {
                    $next[] = $node->right;
                }
            }

            $result[] = $direction ? $level : array_reverse($level);
            $direction = !$direction;
            $queue = $next;
        }

        return $result;
    }
}
