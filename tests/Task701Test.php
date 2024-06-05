<?php

declare(strict_types=1);

namespace App\Tests;

use App\Model\TreeNode;
use App\Tasks\Group800\Task701;
use PHPUnit\Framework\TestCase;

final class Task701Test extends TestCase
{
    public function test701(): void
    {
        $sut = new Task701();

        $data = new TreeNode(4, new TreeNode(2, new TreeNode(1, new TreeNode(3))), new TreeNode(7));

        $result = $sut->insertIntoBST($data, 5);

        self::assertSame($result->right->left->val, 5);
    }
}
