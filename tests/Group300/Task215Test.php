<?php

declare(strict_types=1);

namespace App\Tasks\Group300;

use PHPUnit\Framework\TestCase;

final class Task215Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test215(array $nums, int $k, int $result): void
    {
        $sut = new Task215();

        self::assertSame($sut->findKthLargest($nums, $k), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[3, 2, 1, 5, 6, 4], 2, 5],
            [[3, 2, 3, 1, 2, 4, 5, 5, 6], 4, 4],
        ];
    }
}
