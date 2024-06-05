<?php

declare(strict_types=1);

namespace App\Tests;

use App\Model\MultiNode;
use App\Tasks\Group600\Task589;
use PHPUnit\Framework\TestCase;

final class Task589Test extends TestCase
{
    public function test589(): void
    {
        $sut = new Task589();

        $data = new MultiNode(1);
        $tmp = new MultiNode(3);
        $tmp->children = [new MultiNode(5), new MultiNode(6)];
        $data->children = [$tmp, new MultiNode(2), new MultiNode(4)];

        self::assertSame($sut->preorder($data), [1, 3, 5, 6, 2, 4]);
    }
}
