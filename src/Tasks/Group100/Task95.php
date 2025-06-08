<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use App\Model\TreeNode;

/**
 * https://leetcode.com/problems/unique-binary-search-trees-ii/description/?envType=problem-list-v2&envId=binary-tree.
 */
final class Task95
{
    /**
     * @return TreeNode[]
     */
    public function generateTrees(int $n, int $number = 1): array
    {
        if ($n === 0) {
            return [null];
        }

        $result = [];
        --$n;

        for ($i = 0; $i <= $n; ++$i) {
            foreach ($this->generateTrees($i, $number + 1) as $left) {
                $current = new TreeNode($number);
                $current->left = $left;

                foreach ($this->generateTrees($n - $i, $number + $i + 1) as $right) {
                    $current->right = $right;
                    $result[] = $current;
                }
            }
        }

        return $result;
    }
}
