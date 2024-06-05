<?php

declare(strict_types=1);

namespace App\Tasks\Group600;

use App\Model\TreeNode;
use PHPUnit\Framework\TestCase;

final class Task543Test extends TestCase
{
    public function test543(): void
    {
        $sut = new Task543();

        $root = new TreeNode(
            1,
            new TreeNode(2, new TreeNode(4), new TreeNode(5)),
            new TreeNode(3),
        );

        self::assertSame($sut->diameterOfBinaryTree($root), 3);
    }
}
