<?php

declare(strict_types=1);

namespace App\Tasks\Group300;

use App\Model\TreeNode;

/**
 * https://leetcode.com/problems/lowest-common-ancestor-of-a-binary-tree/.
 * 5.56/94.44.
 */
final class Task236
{
    public function lowestCommonAncestor(TreeNode $root, TreeNode $p, TreeNode $q): TreeNode
    {
        if (in_array($root, [$p, $q], true)) {
            return $root;
        }

        $left = $this->contains($root->left, $p, $q);

        if ($left === 0) {
            return $this->lowestCommonAncestor($root->right, $p, $q);
        }

        if ($left === 1) {
            return $root;
        }

        return $this->lowestCommonAncestor($root->left, $p, $q);
    }

    private function contains(?TreeNode $root, TreeNode $p, TreeNode $q, int $result = 0): int
    {
        if ($root === null) {
            return $result;
        }

        if ($root === $p) {
            ++$result;
        }

        if ($root === $q) {
            ++$result;
        }

        if ($result === 2) {
            return $result;
        }

        return $result + $this->contains($root->left, $p, $q) + $this->contains($root->right, $p, $q);
    }
}
