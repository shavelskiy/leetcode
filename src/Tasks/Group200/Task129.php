<?php

declare(strict_types=1);

namespace App\Tasks\Group200;

use App\Model\TreeNode;

/**
 * https://leetcode.com/problems/sum-root-to-leaf-numbers/
 * 72.46/50.72.
 */
final class Task129
{
    public function sumNumbers(TreeNode $root): int
    {
        $result = 0;
        foreach ($this->parseTree($root) as $item) {
            $result += (int)$item;
        }

        return $result;
    }

    /**
     * @return string[]
     */
    private function parseTree(TreeNode $root): array
    {
        if ($root->left === null && $root->right === null) {
            return [(string)$root->val];
        }

        $result = [];

        if ($root->left !== null) {
            foreach ($this->parseTree($root->left) as $item) {
                $result[] = $root->val . $item;
            }
        }

        if ($root->right !== null) {
            foreach ($this->parseTree($root->right) as $item) {
                $result[] = $root->val . $item;
            }
        }

        return $result;
    }
}
