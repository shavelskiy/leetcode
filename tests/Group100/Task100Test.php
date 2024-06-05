<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use App\Model\TreeNode;
use PHPUnit\Framework\TestCase;

final class Task100Test extends TestCase
{
    public function test100(): void
    {
        $sut = new Task100();

        $a = new TreeNode(1, new TreeNode(2), new TreeNode(3));
        $b = new TreeNode(1, new TreeNode(2), new TreeNode(3));
        $c = new TreeNode(1, new TreeNode(2));

        self::assertSame($sut->isSameTree($a, $b), true);
        self::assertSame($sut->isSameTree($a, $c), false);
    }
}
