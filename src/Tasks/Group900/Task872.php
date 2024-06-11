<?php

declare(strict_types=1);

namespace App\Tasks\Group900;

use App\Model\TreeNode;

/**
 * https://leetcode.com/problems/leaf-similar-trees/.
 * 80.77/61.54.
 */
final class Task872
{
    public function leafSimilar(TreeNode $root1, TreeNode $root2): bool
    {
        return $this->parseTree($root1) === $this->parseTree($root2);
    }

    private function parseTree(?TreeNode $root): array
    {
        if ($root === null) {
            return [];
        }

        if ($root->left === null && $root->right === null) {
            return [$root->val];
        }

        return [
            ...$this->parseTree($root->left),
            ...$this->parseTree($root->right),
        ];
    }
}
