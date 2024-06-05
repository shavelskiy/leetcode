<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use PHPUnit\Framework\TestCase;

final class Task31Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test31(int $a, int $result): void
    {
        $sut = new Task31();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
