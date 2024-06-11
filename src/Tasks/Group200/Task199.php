<?php

declare(strict_types=1);

namespace App\Tasks\Group200;

use App\Model\TreeNode;

/**
 * https://leetcode.com/problems/binary-tree-right-side-view/.
 * 53.49/30.23.
 */
final class Task199
{
    /**
     * @return int[]
     */
    public function rightSideView(?TreeNode $root): array
    {
        if ($root == null) {
            return [];
        }

        $result = [$root->val];
        $row = [$root];

        while (true) {
            $newRow = [];
            foreach ($row as $item) {
                if ($item->left !== null) {
                    $newRow[] = $item->left;
                }

                if ($item->right !== null) {
                    $newRow[] = $item->right;
                }
            }

            if (empty($newRow)) {
                return $result;
            }

            $result[] = end($newRow)->val;
            $row = $newRow;
        }
    }
}
