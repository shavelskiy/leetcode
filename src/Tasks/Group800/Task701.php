<?php

declare(strict_types=1);

namespace App\Tasks\Group800;

use App\Model\TreeNode;

/**
 * https://leetcode.com/problems/insert-into-a-binary-search-tree/
 * 100/100.
 */
final class Task701
{
    public function insertIntoBST(?TreeNode $root, int $val): ?TreeNode
    {
        if ($root === null) {
            return new TreeNode($val);
        }

        if ($root->val > $val) {
            $root->left = $this->insertIntoBST($root->left, $val);
        } else {
            $root->right = $this->insertIntoBST($root->right, $val);
        }

        return $root;
    }
}
