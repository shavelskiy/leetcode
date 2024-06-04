<?php

declare(strict_types=1);

namespace App\Tasks;

use App\Model\TreeNode;

/**
 * https://leetcode.com/problems/maximum-depth-of-binary-tree/
 * 64.55/44.55.
 */
final class Task104
{
    public function maxDepth(?TreeNode $root): int
    {
        if ($root === null) {
            return 0;
        }

        return max(
            $this->maxDepth($root->left) + 1,
            $this->maxDepth($root->right) + 1,
        );
    }
}
