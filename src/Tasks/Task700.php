<?php

declare(strict_types=1);

namespace App\Tasks;

use App\Model\TreeNode;

/**
 * https://leetcode.com/problems/search-in-a-binary-search-tree/.
 */
final class Task700
{
    public function searchBST(?TreeNode $root, int $val): ?TreeNode
    {
        while ($root !== null) {
            if ($root->val > $val) {
                $root = $root->left;
            } elseif ($root->val < $val) {
                $root = $root->right;
            } else {
                return $root;
            }
        }

        return null;
    }
}
