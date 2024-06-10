<?php

declare(strict_types=1);

namespace App\Tasks\Group400;

use App\Model\ListNode;
use PHPUnit\Framework\TestCase;

final class Task328Test extends TestCase
{
    public function test328(): void
    {
        $sut = new Task328();

        $list = new ListNode(1, new ListNode(2, new ListNode(3, new ListNode(4, new ListNode(5)))));

        self::assertSame($sut->oddEvenList($list)->toArray(), [1, 3, 5, 2, 4]);
    }
}
