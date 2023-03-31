<?php

declare(strict_types=1);

namespace App\Tests;

use App\Model\TreeNode;
use App\Tasks\Task700;
use PHPUnit\Framework\TestCase;

final class Task700Test extends TestCase
{
    public function test700(): void
    {
        $sut = new Task700();

        $data = new TreeNode(4, new TreeNode(2, new TreeNode(1), new TreeNode(3)), new TreeNode(7));

        self::assertSame($sut->searchBST($data, 2), $data->left);
        self::assertSame($sut->searchBST($data, 5), null);
    }
}
