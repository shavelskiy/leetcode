<?php

declare(strict_types=1);

namespace App\Tasks;

use App\Model\TreeNode;

/**
 * https://leetcode.com/problems/path-sum/
 * 90.63/71.88
 */
final class Task112
{
    public function hasPathSum(?TreeNode $root, int $targetSum): bool
    {
        if ($root === null) {
            return false;
        }

        $targetSum -= $root->val;
        if ($root->left === null && $root->right === null) {
            return $targetSum === 0;
        }

        return $this->hasPathSum($root->left, $targetSum) || $this->hasPathSum($root->right, $targetSum);
    }
}
