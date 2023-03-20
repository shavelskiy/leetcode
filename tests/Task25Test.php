<?php

declare(strict_types=1);

namespace App\Tests;

use App\Model\ListNode;
use App\Tasks\Task25;
use PHPUnit\Framework\TestCase;

final class Task25Test extends TestCase
{
    public function test25(): void
    {
        $sut = new Task25();

        self::assertSame($sut->reverseKGroup(new ListNode(1, new ListNode(2)), 2)->toArray(), [2, 1]);
        self::assertSame($sut->reverseKGroup($this->getList(), 1)->toArray(), [1, 2, 3, 4, 5]);
        self::assertSame($sut->reverseKGroup($this->getList(), 2)->toArray(), [2, 1, 4, 3, 5]);
        self::assertSame($sut->reverseKGroup($this->getList(), 3)->toArray(), [3, 2, 1, 4, 5]);
    }

    private function getList(): ListNode
    {
        return new ListNode(1, new ListNode(2, new ListNode(3, new ListNode(4, new ListNode(5)))));
    }
}
