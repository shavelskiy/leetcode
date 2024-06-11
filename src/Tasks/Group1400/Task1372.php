<?php

declare(strict_types=1);

namespace App\Tasks\Group1400;

use App\Model\TreeNode;

/**
 * https://leetcode.com/problems/longest-zigzag-path-in-a-binary-tree/.
 * 72.3/1.82.
 */
final class Task1372
{
    public function longestZigZag(?TreeNode $root, bool $left = false, int $prev = 0): int
    {
        if ($root === null) {
            return 0;
        }

        return max(
            $prev,
            $this->longestZigZag($root->left, true, $left ? 1 : $prev + 1),
            $this->longestZigZag($root->right, false, $left ? $prev + 1 : 1),
        );
    }
}
