<?php

declare(strict_types=1);

namespace App\Tasks\Group1400;

use PHPUnit\Framework\TestCase;

final class Task1313Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1313(int $a, int $result): void
    {
        $sut = new Task1313();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
