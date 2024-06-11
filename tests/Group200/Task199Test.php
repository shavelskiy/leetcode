<?php

declare(strict_types=1);

namespace App\Tasks\Group200;

use App\Model\TreeNode;
use PHPUnit\Framework\TestCase;

final class Task199Test extends TestCase
{
    public function test199(): void
    {
        $sut = new Task199();

        $root = new TreeNode(
            1,
            new TreeNode(2, new TreeNode(4)),
            new TreeNode(3),
        );

        self::assertSame($sut->rightSideView($root), [1, 3, 4]);

        $root = new TreeNode(
            1,
            new TreeNode(2, null, new TreeNode(5)),
            new TreeNode(3, null, new TreeNode(4)),
        );

        self::assertSame($sut->rightSideView($root), [1, 3, 4]);
    }
}
