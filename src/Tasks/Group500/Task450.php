<?php

declare(strict_types=1);

namespace App\Tasks\Group500;

use App\Model\TreeNode;

/**
 * https://leetcode.com/problems/delete-node-in-a-bst/
 * 11.54/57.69.
 */
final class Task450
{
    public function deleteNode(?TreeNode $root, int $key): ?TreeNode
    {
        if ($root === null) {
            return null;
        }

        if ($root->val > $key) {
            $root->left = $this->deleteNode($root->left, $key);
        } elseif ($root->val < $key) {
            $root->right = $this->deleteNode($root->right, $key);
        } else {
            if ($root->left === null || $root->right === null) {
                return $root->left ?? $root->right;
            }

            $current = $root->right;
            while ($current->left !== null) {
                $current = $current->left;
            }

            $root->val = $current->val;
            $root->right = $this->deleteNode($root->right, $current->val);
        }

        return $root;
    }
}
