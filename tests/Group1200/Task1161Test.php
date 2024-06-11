<?php

declare(strict_types=1);

namespace App\Tasks\Group1200;

use App\Model\TreeNode;
use PHPUnit\Framework\TestCase;

final class Task1161Test extends TestCase
{
    public function test1161(): void
    {
        $sut = new Task1161();

        $root = new TreeNode(
            1,
            new TreeNode(7, new TreeNode(7), new TreeNode(-8)),
            new TreeNode(0),
        );

        self::assertSame($sut->maxLevelSum($root), 2);
    }
}
