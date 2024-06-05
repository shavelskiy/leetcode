<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group100\Task66;
use PHPUnit\Framework\TestCase;

final class Task66Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test66(array $digits, array $result): void
    {
        $sut = new Task66();

        self::assertSame($sut->plusOne($digits), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[1, 2, 3], [1, 2, 4]],
            [[4, 3, 2, 1], [4, 3, 2, 2]],
            [[9], [1, 0]],
        ];
    }
}
