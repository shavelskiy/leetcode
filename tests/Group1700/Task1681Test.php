<?php

declare(strict_types=1);

namespace App\Tasks\Group1700;

use PHPUnit\Framework\TestCase;

final class Task1681Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1681(int $a, int $result): void
    {
        $sut = new Task1681();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
