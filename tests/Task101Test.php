<?php

declare(strict_types=1);

namespace App\Tests;

use App\Model\TreeNode;
use App\Tasks\Group200\Task101;
use PHPUnit\Framework\TestCase;

final class Task101Test extends TestCase
{
    public function test101(): void
    {
        $sut = new Task101();

        $data = new TreeNode(
            1,
            new TreeNode(2, new TreeNode(3), new TreeNode(4)),
            new TreeNode(2, new TreeNode(4), new TreeNode(3)),
        );

        self::assertSame($sut->isSymmetric($data), true);

        $data = new TreeNode(
            1,
            new TreeNode(2, null, new TreeNode(3)),
            new TreeNode(2, null, new TreeNode(3)),
        );

        self::assertSame($sut->isSymmetric($data), false);
    }
}
