<?php

declare(strict_types=1);

namespace App\Tasks;

use App\Model\TreeNode;

/**
 * https://leetcode.com/problems/symmetric-tree/
 * 76.43/66.43.
 */
final class Task101
{
    public function isSymmetric(?TreeNode $root): bool
    {
        return $this->isMirror($root?->left, $root?->right);
    }

    private function isMirror(?TreeNode $left, ?TreeNode $right): bool
    {
        if ($left === null && $right === null) {
            return true;
        }

        if ($left?->val !== $right?->val) {
            return false;
        }

        return $this->isMirror($left->left, $right->right) && $this->isMirror($left->right, $right->left);
    }
}
