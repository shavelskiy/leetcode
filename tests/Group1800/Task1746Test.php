<?php

declare(strict_types=1);

namespace App\Tasks\Group1800;

use PHPUnit\Framework\TestCase;

final class Task1746Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1746(int $a, int $result): void
    {
        $sut = new Task1746();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
