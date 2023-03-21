<?php

declare(strict_types=1);

namespace App\Tests;

use App\Model\TreeNode;
use App\Tasks\Task114;
use PHPUnit\Framework\TestCase;

final class Task114Test extends TestCase
{
    public function test114(): void
    {
        $sut = new Task114();

        $root = new TreeNode(
            1,
            new TreeNode(2, new TreeNode(3), new TreeNode(4)),
            new TreeNode(5, null, new TreeNode(6)),
        );

        $sut->flatten($root);

        $result = [];
        while ($root !== null) {
            $result[] = $root->val;
            $root = $root->right;
        }

        self::assertSame($result, [1, 2, 3, 4, 5, 6]);
    }
}
