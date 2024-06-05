<?php

declare(strict_types=1);

namespace App\Tasks\Group1500;

use PHPUnit\Framework\TestCase;

final class Task1451Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1451(int $a, int $result): void
    {
        $sut = new Task1451();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
