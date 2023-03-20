<?php

declare(strict_types=1);

namespace App\Tasks;

use App\Model\TreeNode;

/**
 * https://leetcode.com/problems/diameter-of-binary-tree/
 * 5.26/89.47.
 */
final class Task543
{
    public function diameterOfBinaryTree(?TreeNode $root): int
    {
        if ($root === null) {
            return 0;
        }

        return max(
            $this->calculate($root),
            $this->diameterOfBinaryTree($root->left),
            $this->diameterOfBinaryTree($root->right),
        );
    }

    private function calculate(TreeNode $root): int
    {
        return $this->findLenght($root->left) + $this->findLenght($root->right);
    }

    private function findLenght(?TreeNode $root): int
    {
        if ($root === null) {
            return 0;
        }

        return 1 + max(
            $this->findLenght($root->left),
            $this->findLenght($root->right),
        );
    }
}
