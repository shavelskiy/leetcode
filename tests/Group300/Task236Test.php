<?php

declare(strict_types=1);

namespace App\Tasks\Group300;

use App\Model\TreeNode;
use PHPUnit\Framework\TestCase;

final class Task236Test extends TestCase
{
    public function test236(): void
    {
        $sut = new Task236();

        $root = new TreeNode(1, new TreeNode(2));

        self::assertSame(
            $sut->lowestCommonAncestor($root, $root, $root->left),
            $root,
        );

        $root = new TreeNode(
            3,
            new TreeNode(
                5,
                new TreeNode(6),
                new TreeNode(2, new TreeNode(7), new TreeNode(4)),
            ),
            new TreeNode(1, new TreeNode(0), new TreeNode(8)),
        );

        self::assertSame(
            $sut->lowestCommonAncestor($root, $root->left, $root->left->right->right),
            $root->left,
        );

        self::assertSame(
            $sut->lowestCommonAncestor($root, $root->left, $root->right),
            $root,
        );
    }
}
