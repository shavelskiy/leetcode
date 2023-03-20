<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task1;
use PHPUnit\Framework\TestCase;

final class Task1Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1(array $nums, int $target, array $result): void
    {
        $sut = new Task1();

        self::assertSame($sut->twoSum($nums, $target), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[2, 7, 11, 15], 9, [0, 1]],
            [[3, 3], 6, [0, 1]],
        ];
    }
}
