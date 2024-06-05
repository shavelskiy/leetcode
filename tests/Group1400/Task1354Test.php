<?php

declare(strict_types=1);

namespace App\Tasks\Group1400;

use PHPUnit\Framework\TestCase;

final class Task1354Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1354(int $a, int $result): void
    {
        $sut = new Task1354();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
