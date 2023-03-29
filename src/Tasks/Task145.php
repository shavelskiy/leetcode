<?php

declare(strict_types=1);

namespace App\Tasks;

use App\Model\TreeNode;

/**
 * https://leetcode.com/problems/binary-tree-postorder-traversal/
 * 72.41/86.21
 */
final class Task145
{
    /**
     * @return int[]
     */
    public function postorderTraversal(?TreeNode $root): array
    {
        $result = [];
        $stack = [];
        while ($root !== null) {
            $result = [$root->val, ...$result];

            if ($root->left !== null) {
                $stack[] = $root->left;
            }

            if ($root->right !== null) {
                $stack[] = $root->right;
            }

            $root = array_pop($stack);
        }

        return $result;
    }
}
