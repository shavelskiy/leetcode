<?php

declare(strict_types=1);

namespace App\Tasks\Group200;

use App\Model\ListNode;
use PHPUnit\Framework\TestCase;

final class Task142Test extends TestCase
{
    public function test142(): void
    {
        $sut = new Task142();

        $data = new ListNode(3, new ListNode(2, new ListNode(0, new ListNode(4))));
        $data->next->next->next = $data->next;

        self::assertSame($sut->detectCycle($data), $data->next);
    }
}
