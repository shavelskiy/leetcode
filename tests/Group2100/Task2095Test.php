<?php

declare(strict_types=1);

namespace App\Tasks\Group2100;

use App\Model\ListNode;
use PHPUnit\Framework\TestCase;

final class Task2095Test extends TestCase
{
    public function test2095(): void
    {
        $sut = new Task2095();

        $list = new ListNode(1, new ListNode(3, new ListNode(4, new ListNode(7, new ListNode(1, new ListNode(2, new ListNode(6)))))));

        self::assertSame($sut->deleteMiddle($list)->toArray(), [1, 3, 4, 1, 2, 6]);
    }
}
