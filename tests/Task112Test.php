<?php

declare(strict_types=1);

namespace App\Tests;

use App\Model\TreeNode;
use App\Tasks\Group200\Task112;
use PHPUnit\Framework\TestCase;

final class Task112Test extends TestCase
{
    public function test112(): void
    {
        $sut = new Task112();

        $data = new TreeNode(
            5,
            new TreeNode(4, new TreeNode(11, new TreeNode(7), new TreeNode(2))),
            new TreeNode(8, new TreeNode(13, new TreeNode(4, null, new TreeNode(1)))),
        );

        self::assertSame($sut->hasPathSum($data, 22), true);

        $data = new TreeNode(-2, null, new TreeNode(-3));

        self::assertSame($sut->hasPathSum($data, -5), true);
    }
}
