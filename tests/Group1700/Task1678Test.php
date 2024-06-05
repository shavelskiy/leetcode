<?php

declare(strict_types=1);

namespace App\Tasks\Group1700;

use PHPUnit\Framework\TestCase;

final class Task1678Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1678(string $command, string $result): void
    {
        $sut = new Task1678();

        self::assertSame($sut->interpret($command), $result);
    }

    public static function dataProvider(): array
    {
        return [
            ['G()(al)', 'Goal'],
            ['G()()()()(al)', 'Gooooal'],
            ['(al)G(al)()()G', 'alGalooG'],
        ];
    }
}
