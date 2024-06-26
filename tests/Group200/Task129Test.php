<?php

declare(strict_types=1);

namespace App\Tasks\Group200;

use App\Model\TreeNode;
use PHPUnit\Framework\TestCase;

final class Task129Test extends TestCase
{
    public function test129(): void
    {
        $sut = new Task129();

        $data = new TreeNode(
            4,
            new TreeNode(9, new TreeNode(5), new TreeNode(1)),
            new TreeNode(0),
        );

        self::assertSame($sut->sumNumbers($data), 1026);
    }
}
