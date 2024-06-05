<?php

declare(strict_types=1);

namespace App\Tasks\Group200;

use App\Model\TreeNode;
use PHPUnit\Framework\TestCase;

final class Task145Test extends TestCase
{
    public function test145(): void
    {
        $sut = new Task145();

        $data = new TreeNode(1, new TreeNode(4, new TreeNode(2)), new TreeNode(3));
        self::assertSame($sut->postorderTraversal($data), [2, 4, 3, 1]);

        $data = new TreeNode(1, null, new TreeNode(2, new TreeNode(3)));
        self::assertSame($sut->postorderTraversal($data), [3, 2, 1]);
    }
}
