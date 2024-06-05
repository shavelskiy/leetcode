<?php

declare(strict_types=1);

namespace App\Tasks\Group600;

use PHPUnit\Framework\TestCase;

final class Task581Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test581(int $a, int $result): void
    {
        $sut = new Task581();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
