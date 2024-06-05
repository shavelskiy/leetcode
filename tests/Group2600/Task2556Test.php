<?php

declare(strict_types=1);

namespace App\Tasks\Group2600;

use PHPUnit\Framework\TestCase;

final class Task2556Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2556(int $a, int $result): void
    {
        $sut = new Task2556();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
