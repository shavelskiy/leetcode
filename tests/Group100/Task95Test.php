<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use PHPUnit\Framework\TestCase;

final class Task95Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test95(int $a, int $result): void
    {
        $sut = new Task95();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
