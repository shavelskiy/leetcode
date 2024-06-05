<?php

declare(strict_types=1);

namespace App\Tasks\Group1400;

use PHPUnit\Framework\TestCase;

final class Task1361Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1361(int $a, int $result): void
    {
        $sut = new Task1361();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
