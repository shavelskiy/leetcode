<?php

declare(strict_types=1);

namespace App\Tasks\Group500;

use App\Model\TreeNode;
use PHPUnit\Framework\TestCase;

final class Task437Test extends TestCase
{
    public function test437(): void
    {
        $sut = new Task437();

        $root = new TreeNode(
            10,
            new TreeNode(
                5,
                new TreeNode(3, new TreeNode(3), new TreeNode(-2)),
                new TreeNode(2, null, new TreeNode(1)),
            ),
            new TreeNode(-3, null, new TreeNode(11)),
        );
        $sut->pathSum($root, 8);

        self::assertSame($sut->pathSum($root, 8), 3);
    }
}
