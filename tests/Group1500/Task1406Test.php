<?php

declare(strict_types=1);

namespace App\Tasks\Group1500;

use PHPUnit\Framework\TestCase;

final class Task1406Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1406(int $a, int $result): void
    {
        $sut = new Task1406();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
