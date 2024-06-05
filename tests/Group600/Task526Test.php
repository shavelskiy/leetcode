<?php

declare(strict_types=1);

namespace App\Tasks\Group600;

use PHPUnit\Framework\TestCase;

final class Task526Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test526(int $a, int $result): void
    {
        $sut = new Task526();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
