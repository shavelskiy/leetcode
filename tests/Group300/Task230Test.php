<?php

declare(strict_types=1);

namespace App\Tasks\Group300;

use App\Model\TreeNode;
use PHPUnit\Framework\TestCase;

final class Task230Test extends TestCase
{
    public function test230(): void
    {
        $sut = new Task230();

        $data = new TreeNode(
            3,
            new TreeNode(1, null, new TreeNode(2)),
            new TreeNode(4),
        );

        self::assertSame($sut->kthSmallest($data, 1), 1);

        $data = new TreeNode(
            4,
            new TreeNode(
                3,
                new TreeNode(2, new TreeNode(1)),
                new TreeNode(4),
            ),
            new TreeNode(6),
        );

        self::assertSame($sut->kthSmallest($data, 3), 3);
    }
}
