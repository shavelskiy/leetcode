<?php

declare(strict_types=1);

namespace App\Tasks;

use App\Model\TreeNode;

/**
 * https://leetcode.com/problems/validate-binary-search-tree/
 * 75/32.35
 */
final class Task98
{
    public function isValidBST(?TreeNode $root, ?int $min = null, ?int $max = null): bool
    {
        if ($root === null) {
            return true;
        }

        if ($min !== null && $root->val <= $min) {
            return false;
        }

        if ($max !== null && $root->val >= $max) {
            return false;
        }

        return $this->isValidBST($root->left, $min, $max === null ? $root->val : min($max, $root->val))
            && $this->isValidBST($root->right, $min === null ? $root->val : max($min, $root->val), $max);
    }
}
