<?php

declare(strict_types=1);

namespace App\Tasks;

use App\Model\TreeNode;

/**
 * https://leetcode.com/problems/lowest-common-ancestor-of-a-binary-search-tree/
 * 6.67/97.78.
 */
final class Task235
{
    public function lowestCommonAncestor(?TreeNode $root, TreeNode $p, TreeNode $q): ?TreeNode
    {
        if ($root === null) {
            return null;
        }

        if (($leftResult = $this->lowestCommonAncestor($root->left, $p, $q)) !== null) {
            return $leftResult;
        }

        if (($rightResult = $this->lowestCommonAncestor($root->right, $p, $q)) !== null) {
            return $rightResult;
        }

        if ($this->isHas($root, $p) && $this->isHas($root, $q)) {
            return $root;
        }

        return null;
    }

    private function isHas(?TreeNode $root, TreeNode $p): bool
    {
        if ($root === null) {
            return false;
        }

        if ($root === $p) {
            return true;
        }

        return $this->isHas($root->left, $p) || $this->isHas($root->right, $p);
    }
}
