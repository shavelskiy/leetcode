<?php

declare(strict_types=1);

namespace App\Tasks\Group700;

use App\Model\TreeNode;
use App\Tasks\Group700\Task617;
use PHPUnit\Framework\TestCase;

final class Task617Test extends TestCase
{
    public function test617(): void
    {
        $sut = new Task617();

        $root1 = new TreeNode(1, new TreeNode(3, new TreeNode(5)), new TreeNode(2));
        $root2 = new TreeNode(2, new TreeNode(1, null, new TreeNode(4)), new TreeNode(3, null, new TreeNode(7)));

        $result = $sut->mergeTrees($root1, $root2);

        self::assertSame($result?->val, 3);
    }
}
