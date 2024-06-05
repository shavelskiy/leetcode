<?php

declare(strict_types=1);

namespace App\Tests;

use App\Model\TreeNode;
use App\Tasks\Group200\Task144;
use PHPUnit\Framework\TestCase;

final class Task144Test extends TestCase
{
    public function test144(): void
    {
        $sut = new Task144();

        $data = new TreeNode(1, new TreeNode(4, new TreeNode(2)), new TreeNode(3));
        self::assertSame($sut->preorderTraversal($data), [1, 4, 2, 3]);

        $data = new TreeNode(1, null, new TreeNode(2, new TreeNode(3)));
        self::assertSame($sut->preorderTraversal($data), [1, 2, 3]);
    }
}
