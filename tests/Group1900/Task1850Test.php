<?php

declare(strict_types=1);

namespace App\Tasks\Group1900;

use PHPUnit\Framework\TestCase;

final class Task1850Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1850(int $a, int $result): void
    {
        $sut = new Task1850();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
