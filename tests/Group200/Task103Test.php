<?php

declare(strict_types=1);

namespace App\Tasks\Group200;

use App\Model\TreeNode;
use PHPUnit\Framework\TestCase;

final class Task103Test extends TestCase
{
    public function test103(): void
    {
        $sut = new Task103();

        $tree = new TreeNode(
            3,
            new TreeNode(9),
            new TreeNode(20, new TreeNode(15), new TreeNode(7)),
        );

        self::assertSame($sut->zigzagLevelOrder($tree), [[3], [20, 9], [15, 7]]);
    }
}
