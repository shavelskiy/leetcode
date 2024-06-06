<?php

declare(strict_types=1);

namespace App\Tasks\Group1500;

use PHPUnit\Framework\TestCase;

final class Task1469Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1469(int $a, int $result): void
    {
        $sut = new Task1469();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}