<?php

declare(strict_types=1);

namespace App\Tasks\Group300;

use PHPUnit\Framework\TestCase;

final class Task253Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test253(int $a, int $result): void
    {
        $sut = new Task253();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
