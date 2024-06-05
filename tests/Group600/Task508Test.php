<?php

declare(strict_types=1);

namespace App\Tasks\Group600;

use PHPUnit\Framework\TestCase;

final class Task508Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test508(int $a, int $result): void
    {
        $sut = new Task508();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
