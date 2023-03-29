<?php

declare(strict_types=1);

namespace App\Tasks;

use App\Model\TreeNode;

/**
 * https://leetcode.com/problems/binary-tree-inorder-traversal/
 * 45/56.25
 */
final class Task94
{
    /**
     * @return int[]
     */
    public function inorderTraversal(?TreeNode $root): array
    {
        $result = [];
        $stack = [];
        while ($root !== null || !empty($stack)) {
            while ($root !== null) {
                $stack[] = $root;
                $root = $root->left;
            }

            $root = array_pop($stack);
            $result[] = $root->val;
            $root = $root->right;
        }

        return $result;
    }
}
