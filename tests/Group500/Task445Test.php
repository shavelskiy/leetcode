<?php

declare(strict_types=1);

namespace App\Tasks\Group500;

use App\Model\ListNode;
use PHPUnit\Framework\TestCase;

final class Task445Test extends TestCase
{
    public function test445(): void
    {
        $l1 = new ListNode(
            7,
            new ListNode(
                2,
                new ListNode(
                    4,
                    new ListNode(3),
                ),
            ),
        );

        $l2 = new ListNode(
            5,
            new ListNode(
                6,
                new ListNode(4),
            ),
        );

        $temp = (new Task445())->addTwoNumbers($l1, $l2);

        $result = [];
        while ($temp !== null) {
            $result[] = $temp->val;
            $temp = $temp->next;
        }

        self::assertSame($result, [7, 8, 0, 7]);
    }
}
