<?php

declare(strict_types=1);

namespace App\Tasks;

use App\Model\TreeNode;

/**
 * https://leetcode.com/problems/binary-tree-preorder-traversal/
 * 60.61/39.39.
 */
final class Task144
{
    /**
     * @return int[]
     */
    public function preorderTraversal(?TreeNode $root): array
    {
        $result = [];
        $stack = [];
        while ($root !== null) {
            $result[] = $root->val;

            if ($root->right !== null) {
                $stack[] = $root->right;
            }

            if ($root->left !== null) {
                $stack[] = $root->left;
            }

            $root = array_pop($stack);
        }

        return $result;
    }
}
