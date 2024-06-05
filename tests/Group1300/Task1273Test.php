<?php

declare(strict_types=1);

namespace App\Tasks\Group1300;

use PHPUnit\Framework\TestCase;

final class Task1273Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1273(int $a, int $result): void
    {
        $sut = new Task1273();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
