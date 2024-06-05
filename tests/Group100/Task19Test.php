<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use App\Model\ListNode;
use PHPUnit\Framework\TestCase;

final class Task19Test extends TestCase
{
    public function test19(): void
    {
        $sut = new Task19();

        $data = new ListNode(1, new ListNode(2));
        self::assertSame($sut->removeNthFromEnd($data, 2)->toArray(), [2]);

        $data = new ListNode(1, new ListNode(2, new ListNode(3, new ListNode(4, new ListNode(5)))));
        self::assertSame($sut->removeNthFromEnd($data, 2)->toArray(), [1, 2, 3, 5]);

        $data = new ListNode(1);
        self::assertSame($sut->removeNthFromEnd($data, 1), null);

        $data = new ListNode(1, new ListNode(2));
        self::assertSame($sut->removeNthFromEnd($data, 1)->toArray(), [1]);
    }
}
