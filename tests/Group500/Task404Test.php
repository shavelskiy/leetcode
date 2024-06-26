<?php

declare(strict_types=1);

namespace App\Tasks\Group500;

use App\Model\TreeNode;
use PHPUnit\Framework\TestCase;

final class Task404Test extends TestCase
{
    public function test404(): void
    {
        $sut = new Task404();

        $data = new TreeNode(3, new TreeNode(9), new TreeNode(20, new TreeNode(15), new TreeNode(7)));

        self::assertSame($sut->sumOfLeftLeaves($data), 24);
    }
}
