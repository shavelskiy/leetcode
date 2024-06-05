<?php

declare(strict_types=1);

namespace App\Tasks\Group1200;

use PHPUnit\Framework\TestCase;

final class Task1123Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1123(int $a, int $result): void
    {
        $sut = new Task1123();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
