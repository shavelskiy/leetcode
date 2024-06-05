<?php

declare(strict_types=1);

namespace App\Tasks\Group900;

use App\Tasks\Group900\Task844;
use PHPUnit\Framework\TestCase;

final class Task844Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test844(string $s, string $t, bool $result): void
    {
        $sut = new Task844();

        self::assertSame($sut->backspaceCompare($s, $t), $result);
    }

    public static function dataProvider(): array
    {
        return [
            ['ab#c', 'ad#c', true],
            ['ab##', 'c#d#', true],
            ['a#c', 'b', false],
        ];
    }
}
