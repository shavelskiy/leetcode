<?php

declare(strict_types=1);

namespace App\Tasks\Group1400;

use App\Model\TreeNode;
use PHPUnit\Framework\TestCase;

final class Task1372Test extends TestCase
{
    public function test1372(): void
    {
        $sut = new Task1372();

        $root = new TreeNode(
            1,
            null,
            new TreeNode(
                1,
                new TreeNode(1),
                new TreeNode(
                    1,
                    new TreeNode(
                        1,
                        null,
                        new TreeNode(1, null, new TreeNode(1)),
                    ),
                    new TreeNode(1),
                ),
            ),
        );

        self::assertSame($sut->longestZigZag($root), 3);
    }
}
