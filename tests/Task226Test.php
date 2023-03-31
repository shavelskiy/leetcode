<?php

declare(strict_types=1);

namespace App\Tests;

use App\Model\TreeNode;
use App\Tasks\Task226;
use PHPUnit\Framework\TestCase;

final class Task226Test extends TestCase
{
    public function test226(): void
    {
        $sut = new Task226();

        $data = new TreeNode(
            4,
            new TreeNode(2, new TreeNode(1), new TreeNode(3)),
            new TreeNode(7, new TreeNode(6), new TreeNode(9)),
        );

        $new = $sut->invertTree($data);

        self::assertSame($new->val, 4);
        self::assertSame($new->left->val, 7);
        self::assertSame($new->left->left->val, 9);
        self::assertSame($new->left->right->val, 6);
        self::assertSame($new->right->val, 2);
        self::assertSame($new->right->left->val, 3);
        self::assertSame($new->right->right->val, 1);

        $data = new TreeNode(1, new TreeNode(2));

        $new = $sut->invertTree($data);

        self::assertSame($new->val, 1);
        self::assertSame($new->left, null);
        self::assertSame($new->right->val, 2);
    }
}
