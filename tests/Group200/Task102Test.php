<?php

declare(strict_types=1);

namespace App\Tasks\Group200;

use App\Model\TreeNode;
use PHPUnit\Framework\TestCase;

final class Task102Test extends TestCase
{
    public function test102(): void
    {
        $sut = new Task102();

        $data = new TreeNode(
            3,
            new TreeNode(9),
            new TreeNode(20, new TreeNode(15), new TreeNode(7))
        );

        self::assertSame($sut->levelOrder($data), [[3], [9, 20], [15, 7]]);
    }
}
