<?php

declare(strict_types=1);

namespace App\Tasks\Group1000;

use PHPUnit\Framework\TestCase;

final class Task980Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test980(int $a, int $result): void
    {
        $sut = new Task980();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
