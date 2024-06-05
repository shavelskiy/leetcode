<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group1400\Task1356;
use PHPUnit\Framework\TestCase;

final class Task1356Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1356(array $arr, array $result): void
    {
        $sut = new Task1356();

        self::assertSame($sut->sortByBits($arr), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[0, 1, 2, 3, 4, 5, 6, 7, 8], [0, 1, 2, 4, 8, 3, 5, 6, 7]],
            [[1024, 512, 256, 128, 64, 32, 16, 8, 4, 2, 1], [1, 2, 4, 8, 16, 32, 64, 128, 256, 512, 1024]],
        ];
    }
}
