<?php

declare(strict_types=1);

namespace App\Tasks\Group200;

use App\Model\ListNode;
use PHPUnit\Framework\TestCase;

final class Task143Test extends TestCase
{
    public function test143(): void
    {
        $sut = new Task143();

        $list = new ListNode(1, new ListNode(2, new ListNode(3, new ListNode(4))));

        $sut->reorderList($list);

        self::assertSame($list->toArray(), [1, 4, 2, 3]);

        $list = new ListNode(1, new ListNode(2, new ListNode(3, new ListNode(4, new ListNode(5)))));

        $sut->reorderList($list);

        self::assertSame($list->toArray(), [1, 5, 2, 4, 3]);
    }
}
