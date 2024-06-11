<?php

declare(strict_types=1);

namespace App\Tasks\Group1500;

use App\Model\TreeNode;

/**
 * https://leetcode.com/problems/count-good-nodes-in-binary-tree/.
 */
final class Task1448
{
    public function goodNodes(?TreeNode $root, ?int $max = null): int
    {
        $result = 0;

        if ($root === null) {
            return $result;
        }

        if ($max === null || $root->val >= $max) {
            ++$result;
        }

        if ($max === null || $root->val > $max) {
            $max = $root->val;
        }

        return $result + $this->goodNodes($root->left, $max) + $this->goodNodes($root->right, $max);
    }
}
