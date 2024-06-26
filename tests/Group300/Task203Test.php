<?php

declare(strict_types=1);

namespace App\Tasks\Group300;

use App\Model\ListNode;
use PHPUnit\Framework\TestCase;

final class Task203Test extends TestCase
{
    public function test203(): void
    {
        $sut = new Task203();

        $data = new ListNode(1, new ListNode(2, new ListNode(6, new ListNode(3, new ListNode(4, new ListNode(5, new ListNode(6)))))));

        self::assertSame($sut->removeElements($data, 6)->toArray(), [1, 2, 3, 4, 5]);

        $data = new ListNode(1, new ListNode(2, new ListNode(2, new ListNode(1))));
        self::assertSame($sut->removeElements($data, 2)->toArray(), [1, 1]);
    }
}
