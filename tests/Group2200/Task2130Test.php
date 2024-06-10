<?php

declare(strict_types=1);

namespace App\Tasks\Group2200;

use App\Model\ListNode;
use PHPUnit\Framework\TestCase;

final class Task2130Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param int[] $list
     */
    public function test2130(array $list, int $result): void
    {
        $sut = new Task2130();

        self::assertSame($sut->pairSum(ListNode::fromArray($list)), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[5, 4, 2, 1], 6],
            [[4, 2, 2, 3], 7],
            [[1, 10000], 10001],
        ];
    }
}
