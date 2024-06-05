<?php

declare(strict_types=1);

namespace App\Tasks\Group300;

use App\Model\ListNode;
use App\Tasks\Group300\Task206;
use PHPUnit\Framework\TestCase;

final class Task206Test extends TestCase
{
    public function test206(): void
    {
        $sut = new Task206();

        $data = new ListNode(1, new ListNode(2, new ListNode(3, new ListNode(4, new ListNode(5)))));
        self::assertSame($sut->reverseList($data)?->toArray(), [5, 4, 3, 2, 1]);

        $data = new ListNode(1, new ListNode(2));
        self::assertSame($sut->reverseList($data)?->toArray(), [2, 1]);
    }
}
