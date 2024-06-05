<?php

declare(strict_types=1);

namespace App\Tasks\Group1400;

use PHPUnit\Framework\TestCase;

final class Task1394Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1394(int $a, int $result): void
    {
        $sut = new Task1394();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
