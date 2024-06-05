<?php

declare(strict_types=1);

namespace App\Tasks\Group500;

use PHPUnit\Framework\TestCase;

final class Task482Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test482(int $a, int $result): void
    {
        $sut = new Task482();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
