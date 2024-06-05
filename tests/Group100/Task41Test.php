<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use PHPUnit\Framework\TestCase;

final class Task41Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test41(int $a, int $result): void
    {
        $sut = new Task41();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
