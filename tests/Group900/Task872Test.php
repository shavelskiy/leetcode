<?php

declare(strict_types=1);

namespace App\Tasks\Group900;

use App\Model\TreeNode;
use PHPUnit\Framework\TestCase;

final class Task872Test extends TestCase
{
    public function test872(): void
    {
        $sut = new Task872();

        $roo1 = new TreeNode(
            119,
            new TreeNode(
                113,
                new TreeNode(11, new TreeNode(43, new TreeNode(67), new TreeNode(74)), new TreeNode(76)),
                new TreeNode(30, new TreeNode(15), new TreeNode(60)),
            ),
        );

        $roo2 = new TreeNode(
            11,
            new TreeNode(69, new TreeNode(115, new TreeNode(67), new TreeNode(74)), new TreeNode(66, null, new TreeNode(76))),
            new TreeNode(60, new TreeNode(15), new TreeNode(60)),
        );

        self::assertSame($sut->leafSimilar($roo1, $roo2), true);

        self::assertSame($sut->leafSimilar(new TreeNode(1), new TreeNode(2)), false);

        $root1 = new TreeNode(
            3,
            new TreeNode(5, new TreeNode(6), new TreeNode(2, new TreeNode(7), new TreeNode(4))),
            new TreeNode(1, new TreeNode(9), new TreeNode(8)),
        );

        $root2 = new TreeNode(
            3,
            new TreeNode(5, new TreeNode(6), new TreeNode(7)),
            new TreeNode(1, new TreeNode(4), new TreeNode(2, new TreeNode(9), new TreeNode(8))),
        );

        self::assertSame($sut->leafSimilar($root1, $root2), true);
    }
}
