<?php

declare(strict_types=1);

namespace App\Tests;

use App\Model\ListNode;
use App\Tasks\Group100\Task24;
use PHPUnit\Framework\TestCase;

final class Task24Test extends TestCase
{
    public function test24(): void
    {
        $sut = new Task24();

        $data = new ListNode(
            1,
            new ListNode(
                2,
                new ListNode(
                    3,
                    new ListNode(4),
                ),
            ),
        );

        self::assertSame($sut->swapPairs($data)->toArray(), [2, 1, 4, 3]);
    }
}
