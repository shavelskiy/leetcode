<?php

declare(strict_types=1);

namespace App\Tasks\Group1600;

use PHPUnit\Framework\TestCase;

final class Task1535Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1535(int $a, int $result): void
    {
        $sut = new Task1535();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
