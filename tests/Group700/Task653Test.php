<?php

declare(strict_types=1);

namespace App\Tasks\Group700;

use App\Model\TreeNode;
use App\Tasks\Group700\Task653;
use PHPUnit\Framework\TestCase;

final class Task653Test extends TestCase
{
    public function test653(): void
    {
        $sut = new Task653();

        $data = new TreeNode(
            5,
            new TreeNode(3, new TreeNode(2), new TreeNode(4)),
            new TreeNode(6, new TreeNode(6, null, new TreeNode(7))),
        );

        self::assertSame($sut->findTarget($data, 9), true);
        self::assertSame($sut->findTarget($data, 28), false);
    }
}
