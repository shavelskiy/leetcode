<?php

declare(strict_types=1);

namespace App\Tasks\Group200;

use PHPUnit\Framework\TestCase;

final class Task132Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test132(int $a, int $result): void
    {
        $sut = new Task132();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
