<?php

declare(strict_types=1);

namespace App\Tasks\Group1600;

use PHPUnit\Framework\TestCase;

final class Task1506Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1506(int $a, int $result): void
    {
        $sut = new Task1506();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
