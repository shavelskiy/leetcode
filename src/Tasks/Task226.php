<?php

declare(strict_types=1);

namespace App\Tasks;

use App\Model\TreeNode;

/**
 * https://leetcode.com/problems/invert-binary-tree/
 * 84.67/46.67
 */
final class Task226
{
    public function invertTree(?TreeNode $root): ?TreeNode
    {
        if ($root === null) {
            return null;
        }

        $tmp = $this->invertTree($root->left);
        $root->left = $this->invertTree($root->right);
        $root->right = $tmp;

        return $root;
    }
}
