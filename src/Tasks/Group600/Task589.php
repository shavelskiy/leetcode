<?php

declare(strict_types=1);

namespace App\Tasks\Group600;

use App\Model\MultiNode as Node;

/**
 * https://leetcode.com/problems/n-ary-tree-preorder-traversal/
 * 16.48/93.41.
 */
final class Task589
{
    /**
     * @return int[]
     */
    public function preorder(?Node $root): array
    {
        if ($root === null) {
            return [];
        }

        $result = [$root->val];
        foreach ($root->children as $children) {
            $result = [...$result, ...$this->preorder($children)];
        }

        return $result;
    }
}
