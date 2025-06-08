<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use PHPUnit\Framework\TestCase;

final class Task27Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test27(array $nums, int $a, int $result): void
    {
        $sut = new Task27();

        self::assertSame($sut->removeElement($nums, $a), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[3, 2, 2, 3], 3, 2],
            [[0, 1, 2, 2, 3, 0, 4, 2], 2, 5],
        ];
    }
}
