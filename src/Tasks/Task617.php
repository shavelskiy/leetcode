<?php

declare(strict_types=1);

namespace App\Tasks;

use App\Model\TreeNode;

/**
 * https://leetcode.com/problems/merge-two-binary-trees/
 * 65/90
 */
final class Task617
{
    public function mergeTrees(?TreeNode $root1, ?TreeNode $root2): ?TreeNode
    {
        if ($root1 === null) {
            return $root2;
        }

        if ($root2 === null) {
            return $root1;
        }

        return new TreeNode(
            ($root1 !== null ? $root1->val : 0) + ($root2 !== null ? $root2->val : 0),
            $this->mergeTrees($root1?->left, $root2?->left),
            $this->mergeTrees($root1?->right, $root2?->right),
        );
    }
}
