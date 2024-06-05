<?php

declare(strict_types=1);

namespace App\Tasks\Group900;

use PHPUnit\Framework\TestCase;

final class Task811Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test811(int $a, int $result): void
    {
        $sut = new Task811();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
