<?php

declare(strict_types=1);

namespace App\Tasks\Group200;

use App\Model\TreeNode;

/**
 * https://leetcode.com/problems/binary-tree-level-order-traversal/
 * 90.28/26.39.
 */
final class Task102
{
    /**
     * @return array<int[]>
     */
    public function levelOrder(?TreeNode $root): array
    {
        $result = [];
        $this->process($root, 0, $result);

        return $result;
    }

    private function process(?TreeNode $root, int $level, array &$result): void
    {
        if ($root === null) {
            return;
        }

        if (count($result) - 1 < $level) {
            $result[] = [];
        }

        $result[$level][] = $root->val;

        $this->process($root->left, $level + 1, $result);
        $this->process($root->right, $level + 1, $result);
    }
}
