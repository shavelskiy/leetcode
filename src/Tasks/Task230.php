<?php

declare(strict_types=1);

namespace App\Tasks;

use App\Model\TreeNode;

/**
 * https://leetcode.com/problems/kth-smallest-element-in-a-bst/
 * 60/64.
 */
final class Task230
{
    public function kthSmallest(TreeNode $root, int $k): int
    {
        $result = [];
        $this->walk($root, $result, $k);

        return $result[count($result) - 1];
    }

    /**
     * @param int[] $values
     */
    private function walk(TreeNode $root, array &$values, int $k): void
    {
        if (count($values) < $k) {
            $values[] = $root->val;
            sort($values);
        } elseif ($values[count($values) - 1] > $root->val) {
            $values[count($values) - 1] = $root->val;
            sort($values);
        }

        if ($root->left !== null) {
            $this->walk($root->left, $values, $k);
        }

        if ($root->right !== null) {
            $this->walk($root->right, $values, $k);
        }
    }
}
