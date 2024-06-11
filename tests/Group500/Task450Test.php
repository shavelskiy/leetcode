<?php

declare(strict_types=1);

namespace App\Tasks\Group500;

use App\Model\TreeNode;
use PHPUnit\Framework\TestCase;

final class Task450Test extends TestCase
{
    public function test450(): void
    {
        $sut = new Task450();

        $root = new TreeNode(
            5,
            new TreeNode(3, new TreeNode(2), new TreeNode(4)),
            new TreeNode(6, null, new TreeNode(7)),
        );

        $result = $sut->deleteNode($root, 3);

        self::assertSame($result->left->val, 4);

        self::assertSame($result->left->left->val, 2);
    }
}
