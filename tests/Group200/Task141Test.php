<?php

declare(strict_types=1);

namespace App\Tasks\Group200;

use App\Model\ListNode;
use PHPUnit\Framework\TestCase;

final class Task141Test extends TestCase
{
    public function test141(): void
    {
        $sut = new Task141();

        $data = new ListNode(3, new ListNode(2, new ListNode(0, new ListNode(4))));
        $copyData = $data;
        for ($i = 0; $i < 3; ++$i) {
            if ($copyData->next !== null) {
                $copyData = $copyData->next;
            }
        }
        $copyData->next = $data->next;

        self::assertSame($sut->hasCycle($data), true);

        $data = new ListNode(1, new ListNode(2));
        $copyData = $data;
        for ($i = 0; $i < 1; ++$i) {
            if ($copyData->next !== null) {
                $copyData = $copyData->next;
            }
        }
        $copyData->next = $data->next;

        self::assertSame($sut->hasCycle($data), true);

        $data = new ListNode(1);

        self::assertSame($sut->hasCycle($data), false);
    }
}
