<?php

declare(strict_types=1);

namespace App\Tasks\Group200;

use App\Model\TreeNode;

/**
 * 90.32/93.55
 * https://leetcode.com/problems/minimum-depth-of-binary-tree.
 */
final class Task111
{
    public function minDepth(?TreeNode $root): int
    {
        if ($root === null) {
            return 0;
        }

        $result = 0;
        $level = [$root];

        while (true) {
            ++$result;
            $nextLevel = [];
            foreach ($level as $root) {
                if ($root->left === null && $root->right === null) {
                    return $result;
                }

                if ($root->left !== null) {
                    $nextLevel[] = $root->left;
                }

                if ($root->right !== null) {
                    $nextLevel[] = $root->right;
                }

                $level = $nextLevel;
            }
        }

        return $result;
    }
}
