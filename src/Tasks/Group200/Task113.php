<?php

declare(strict_types=1);

namespace App\Tasks\Group200;

use App\Model\TreeNode;

/**
 * 42.86/52.86.
 */
final class Task113
{
    /**
     * @param int[] $path
     *
     * @return array<int[]>
     */
    public function pathSum(?TreeNode $root, int $targetSum, array $path = []): array
    {
        if ($root === null) {
            return [];
        }

        $path[] = $root->val;
        $targetSum -= $root->val;

        $result = [];

        if ($root->left === null && $root->right === null) {
            if ($targetSum === 0) {
                $result[] = $path;
            }
        }

        foreach ($this->pathSum($root->left, $targetSum, $path) as $item) {
            $result[] = $item;
        }

        foreach ($this->pathSum($root->right, $targetSum, $path) as $item) {
            $result[] = $item;
        }

        return $result;
    }
}
