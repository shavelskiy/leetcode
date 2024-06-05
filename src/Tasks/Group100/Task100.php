<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use App\Model\TreeNode;

/**
 * https://leetcode.com/problems/same-tree
 * 91.00/76.00.
 */
final class Task100
{
    public function isSameTree(?TreeNode $p, ?TreeNode $q): bool
    {
        if ($p === null && $q === null) {
            return true;
        }

        if ($p?->val !== $q?->val) {
            return false;
        }

        return $this->isSameTree($p->left, $q->left) && $this->isSameTree($p->right, $q->right);
    }
}
