<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use App\Model\ListNode;
use PHPUnit\Framework\TestCase;

final class Task83Test extends TestCase
{
    public function test83(): void
    {
        $sut = new Task83();

        $data = new ListNode(1, new ListNode(1, new ListNode(2)));

        // self::assertSame($sut->deleteDuplicates($data)->toArray(), [1, 2]);

        $data = new ListNode(1, new ListNode(1, new ListNode(2, new ListNode(3, new ListNode(3)))));

        self::assertSame($sut->deleteDuplicates($data)->toArray(), [1, 2, 3]);
    }
}
