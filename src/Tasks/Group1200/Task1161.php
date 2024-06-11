<?php

declare(strict_types=1);

namespace App\Tasks\Group1200;

use App\Model\TreeNode;

/**
 * https://leetcode.com/problems/maximum-level-sum-of-a-binary-tree/.
 * 10.00/90.00.
 */
final class Task1161
{
    public function maxLevelSum(TreeNode $root): int
    {
        $max = $root->val;
        $level = 1;
        $result = $level;

        $queue = [$root];

        while (!empty($queue)) {
            $sum = 0;
            for ($i = count($queue) - 1; $i >= 0; --$i) {
                $item = array_shift($queue);
                $sum += $item->val;

                if ($item->left !== null) {
                    $queue[] = $item->left;
                }

                if ($item->right !== null) {
                    $queue[] = $item->right;
                }
            }

            if ($sum > $max) {
                $max = $sum;
                $result = $level;
            }

            ++$level;
        }

        return $result;
    }
}
