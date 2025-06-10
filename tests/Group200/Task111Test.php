<?php

declare(strict_types=1);

namespace App\Tasks\Group200;

use App\Model\TreeNode;
use PHPUnit\Framework\TestCase;

final class Task111Test extends TestCase
{
    public function test111(): void
    {
        $sut = new Task111();

        $tree = new TreeNode(3, new TreeNode(9), new TreeNode(20, new TreeNode(15), new TreeNode(7)));

        self::assertSame($sut->minDepth($tree), 2);
    }
}
