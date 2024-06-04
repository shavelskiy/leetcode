<?php

declare(strict_types=1);

namespace App\Tasks;

use App\Model\TreeNode;

/**
 * https://leetcode.com/problems/flatten-binary-tree-to-linked-list/
 * 29.41/47.6.
 */
final class Task114
{
    public function flatten(?TreeNode $root): void
    {
        $this->process($root);
    }

    private function process(?TreeNode $root): void
    {
        if ($root === null) {
            return;
        }

        $this->process($root->left);
        $this->process($root->right);

        if ($root->left === null) {
            return;
        }

        $tmp = $root->left;
        while ($tmp->right !== null) {
            $tmp = $tmp->right;
        }

        $tmp->right = $root->right;
        $root->right = $root->left;
        $root->left = null;
    }
}
