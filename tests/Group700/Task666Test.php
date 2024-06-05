<?php

declare(strict_types=1);

namespace App\Tasks\Group700;

use PHPUnit\Framework\TestCase;

final class Task666Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test666(int $a, int $result): void
    {
        $sut = new Task666();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
