<?php

declare(strict_types=1);

namespace App\Tasks\Group200;

use App\Model\TreeNode;
use PHPUnit\Framework\TestCase;

final class Task104Test extends TestCase
{
    public function test104(): void
    {
        $sut = new Task104();

        $data = new TreeNode(
            3,
            new TreeNode(9),
            new TreeNode(20, new TreeNode(15), new TreeNode(7)),
        );

        self::assertSame($sut->maxDepth($data), 3);
    }
}
