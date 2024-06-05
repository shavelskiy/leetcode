<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use App\Model\ListNode;
use PHPUnit\Framework\TestCase;

final class Task21Test extends TestCase
{
    public function test21(): void
    {
        $sut = new Task21();

        $list1 = new ListNode(1, new ListNode(2, new ListNode(4)));
        $list2 = new ListNode(1, new ListNode(3, new ListNode(4)));

        $result = $sut->mergeTwoLists($list1, $list2);
        self::assertSame($result?->toArray(), [1, 1, 2, 3, 4, 4]);

        $result = $sut->mergeTwoLists(null, null);
        self::assertSame($result, null);

        $result = $sut->mergeTwoLists(null, new ListNode(0));
        self::assertSame($result?->toArray(), [0]);
    }
}
