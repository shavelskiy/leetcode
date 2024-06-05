<?php

declare(strict_types=1);

namespace App\Tasks\Group2000;

use PHPUnit\Framework\TestCase;

final class Task1953Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1953(int $a, int $result): void
    {
        $sut = new Task1953();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
