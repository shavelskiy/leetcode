<?php

declare(strict_types=1);

namespace App\Tests;

use App\Model\TreeNode;
use App\Tasks\Task98;
use PHPUnit\Framework\TestCase;

final class Task98Test extends TestCase
{
    public function test98(): void
    {
        $sut = new Task98();

        $data = new TreeNode(
            32,
            new TreeNode(26, new TreeNode(19, null, new TreeNode(27))),
            new TreeNode(47, null, new TreeNode(56)),
        );
        self::assertSame($sut->isValidBST($data), false);

        $data = new TreeNode(5, new TreeNode(1), new TreeNode(6, new TreeNode(3), new TreeNode(7)));
        self::assertSame($sut->isValidBST($data), false);

        $data = new TreeNode(2, new TreeNode(1), new TreeNode(3));
        self::assertSame($sut->isValidBST($data), true);

        $data = new TreeNode(5, new TreeNode(1), new TreeNode(4, new TreeNode(3), new TreeNode(6)));
        self::assertSame($sut->isValidBST($data), false);
    }
}
