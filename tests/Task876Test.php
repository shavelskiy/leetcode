<?php

declare(strict_types=1);

namespace App\Tests;

use App\Model\ListNode;
use App\Tasks\Task876;
use PHPUnit\Framework\TestCase;

final class Task876Test extends TestCase
{
    public function test876(): void
    {
        $sut = new Task876();

        $data = new ListNode(1, new ListNode(2, new ListNode(3, new ListNode(4, new ListNode(5)))));
        self::assertSame($sut->middleNode($data)->toArray(), [3, 4, 5]);

        $data = new ListNode(1, new ListNode(2, new ListNode(3, new ListNode(4, new ListNode(5, new ListNode(6))))));
        self::assertSame($sut->middleNode($data)->toArray(), [4, 5, 6]);
    }
}
