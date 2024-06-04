<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task682;
use PHPUnit\Framework\TestCase;

final class Task682Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param string[] $operations
     */
    public function test682(array $operations, int $result): void
    {
        $sut = new Task682();

        self::assertSame($sut->calPoints($operations), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [['5', '2', 'C', 'D', '+'], 30],
            [['5', '-2', '4', 'C', 'D', '9', '+', '+'], 27],
            [['1', 'C'], 0],
        ];
    }
}
