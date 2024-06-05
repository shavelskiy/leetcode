<?php

declare(strict_types=1);

namespace App\Tasks\Group500;

use App\Model\TreeNode;

/**
 * https://leetcode.com/problems/sum-of-left-leaves/
 * 80/80.
 */
final class Task404
{
    public function sumOfLeftLeaves(?TreeNode $root): int
    {
        if ($root === null) {
            return 0;
        }

        $result = 0;
        if ($root->left !== null && $root->left->left === null && $root->left->right === null) {
            $result = $root->left->val;
        }

        return $result + $this->sumOfLeftLeaves($root->left) + $this->sumOfLeftLeaves($root->right);
    }
}
