<?php

declare(strict_types=1);

namespace App\Tests;

use App\Model\TreeNode;
use App\Tasks\Group100\Task94;
use PHPUnit\Framework\TestCase;

final class Task94Test extends TestCase
{
    public function test94(): void
    {
        $sut = new Task94();

        $data = new TreeNode(1, new TreeNode(4, new TreeNode(2)), new TreeNode(3));
        self::assertSame($sut->inorderTraversal($data), [2, 4, 1, 3]);

        $data = new TreeNode(1, null, new TreeNode(2, new TreeNode(3)));
        self::assertSame($sut->inorderTraversal($data), [1, 3, 2]);
    }
}
