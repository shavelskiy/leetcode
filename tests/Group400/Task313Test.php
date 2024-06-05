<?php

declare(strict_types=1);

namespace App\Tasks\Group400;

use PHPUnit\Framework\TestCase;

final class Task313Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test313(int $a, int $result): void
    {
        $sut = new Task313();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
