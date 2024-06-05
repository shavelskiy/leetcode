<?php

declare(strict_types=1);

namespace App\Tasks\Group2500;

use PHPUnit\Framework\TestCase;

final class Task2442Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2442(int $a, int $result): void
    {
        $sut = new Task2442();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
