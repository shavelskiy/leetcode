<?php

declare(strict_types=1);

namespace App\Tasks\Group1500;

use PHPUnit\Framework\TestCase;

final class Task1418Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1418(int $a, int $result): void
    {
        $sut = new Task1418();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
