<?php

declare(strict_types=1);

namespace App\Tasks\Group1500;

use App\Model\TreeNode;
use PHPUnit\Framework\TestCase;

final class Task1448Test extends TestCase
{
    public function test1448(): void
    {
        $sut = new Task1448();

        $tree = new TreeNode(
            3,
            new TreeNode(1, new TreeNode(3)),
            new TreeNode(4, new TreeNode(1), new TreeNode(5)),
        );

        self::assertSame($sut->goodNodes($tree), 4);
    }
}
