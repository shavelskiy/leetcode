<?php

declare(strict_types=1);

namespace App\Tasks\Group700;

use App\Model\TreeNode;

/**
 * https://leetcode.com/problems/two-sum-iv-input-is-a-bst/
 * 87.50/12.50.
 */
final class Task653
{
    /** @var int[] */
    private array $visited = [];

    public function findTarget(?TreeNode $root, int $k): bool
    {
        if ($root === null) {
            return false;
        }

        if (isset($this->visited[$k - $root->val])) {
            return true;
        }

        $this->visited[$root->val] = true;
        return $this->findTarget($root->left, $k) || $this->findTarget($root->right, $k);
    }
}
