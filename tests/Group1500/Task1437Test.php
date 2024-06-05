<?php

declare(strict_types=1);

namespace App\Tasks\Group1500;

use PHPUnit\Framework\TestCase;

final class Task1437Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1437(int $a, int $result): void
    {
        $sut = new Task1437();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
