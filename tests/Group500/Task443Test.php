<?php

declare(strict_types=1);

namespace App\Tasks\Group500;

use PHPUnit\Framework\TestCase;

final class Task443Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param string[] $chars
     * @param string[] $result2
     */
    public function test443(array $chars, array $result2, int $result): void
    {
        $sut = new Task443();

        self::assertSame($sut->compress($chars), $result);
        self::assertSame($chars, $result2);
    }

    public static function dataProvider(): array
    {
        return [
            [['a', 'a', 'b', 'b', 'c', 'c', 'c'], ['a', '2', 'b', '2', 'c', '3'], 6],
            [['a'], ['a'], 1],
            [['a', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b'], ['a', 'b', '1', '2'], 4],
        ];
    }
}
