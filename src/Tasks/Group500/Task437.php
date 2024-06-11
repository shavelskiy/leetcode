<?php

declare(strict_types=1);

namespace App\Tasks\Group500;

use App\Model\TreeNode;

/**
 * https://leetcode.com/problems/path-sum-iii/.
 * 60.00/30.00.
 */
final class Task437
{
    public function pathSum(?TreeNode $root, int $targetSum, array $prev = []): int
    {
        $result = 0;
        if ($root === null) {
            return $result;
        }

        for ($i = count($prev) - 1; $i >= 0; --$i) {
            $prev[$i] += $root->val;
        }

        $prev[] = $root->val;

        foreach ($prev as $item) {
            if ($item === $targetSum) {
                ++$result;
            }
        }

        return $result + $this->pathSum($root->left, $targetSum, $prev) + $this->pathSum($root->right, $targetSum, $prev);
    }
}
