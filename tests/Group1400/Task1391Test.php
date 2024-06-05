<?php

declare(strict_types=1);

namespace App\Tasks\Group1400;

use PHPUnit\Framework\TestCase;

final class Task1391Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1391(int $a, int $result): void
    {
        $sut = new Task1391();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
