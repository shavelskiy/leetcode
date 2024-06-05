<?php

declare(strict_types=1);

namespace App\Tasks\Group900;

use App\Tasks\Group900\Task860;
use PHPUnit\Framework\TestCase;

final class Task860Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param int[] $bills
     */
    public function test54(array $bills, bool $result): void
    {
        $sut = new Task860();

        self::assertSame($sut->lemonadeChange($bills), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[5, 5, 5, 10, 20], true],
            [[5, 5, 10, 10, 20], false],
        ];
    }
}
