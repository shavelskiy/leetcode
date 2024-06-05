<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use App\Model\ListNode;
use App\Tasks\Group100\Task2;
use PHPUnit\Framework\TestCase;

final class Task2Test extends TestCase
{
    public function test2(): void
    {
        $sut = new Task2();

        $l1 = new ListNode(
            9,
            new ListNode(
                9,
                new ListNode(
                    9,
                    new ListNode(
                        9,
                        new ListNode(
                            9,
                            new ListNode(
                                9,
                                new ListNode(
                                    9,
                                )
                            )
                        )
                    )
                )
            )
        );

        $l2 = new ListNode(
            9,
            new ListNode(
                9,
                new ListNode(
                    9,
                    new ListNode(
                        9,
                    )
                )
            )
        );

        $result = $sut->addTwoNumbers($l1, $l2);

        self::assertSame($result->toArray(), [8, 9, 9, 9, 0, 0, 0, 1]);
    }
}
