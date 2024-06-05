<?php

declare(strict_types=1);

namespace App\Tasks\Group400;

use PHPUnit\Framework\TestCase;

final class Task327Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test327(int $a, int $result): void
    {
        $sut = new Task327();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
