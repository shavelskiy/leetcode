<?php

declare(strict_types=1);

namespace App\Tasks\Group1400;

use PHPUnit\Framework\TestCase;

final class Task1358Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1358(int $a, int $result): void
    {
        $sut = new Task1358();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
