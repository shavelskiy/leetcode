<?php

declare(strict_types=1);

namespace App\Tasks\Group300;

use App\Model\TreeNode;
use PHPUnit\Framework\TestCase;

final class Task235Test extends TestCase
{
    public function test235(): void
    {
        $sut = new Task235();

        $data = new TreeNode(
            6,
            new TreeNode(2, new TreeNode(0), new TreeNode(4, new TreeNode(3), new TreeNode(5))),
            new TreeNode(8, new TreeNode(7), new TreeNode(8)),
        );

        self::assertSame($sut->lowestCommonAncestor($data, $data->left, $data->right)->val, 6);
        self::assertSame($sut->lowestCommonAncestor($data, $data->left, $data->left->right)->val, 2);
    }
}
