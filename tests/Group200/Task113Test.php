<?php

declare(strict_types=1);

namespace App\Tasks\Group200;

use App\Model\TreeNode;
use PHPUnit\Framework\TestCase;

final class Task113Test extends TestCase
{
    public function test113(): void
    {
        $root = new TreeNode(
            5,
            new TreeNode(
                4,
                new TreeNode(11, new TreeNode(7), new TreeNode(2)),
            ),
            new TreeNode(
                8,
                new TreeNode(13),
                new TreeNode(4, new TreeNode(5), new TreeNode(1)),
            ),
        );

        $sut = new Task113();

        self::assertSame($sut->pathSum($root, 22), [[5, 4, 11, 2], [5, 8, 4, 5]]);
    }
}
