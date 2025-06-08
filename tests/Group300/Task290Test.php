<?php

declare(strict_types=1);

namespace App\Tasks\Group300;

use PHPUnit\Framework\TestCase;

final class Task290Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test290(string $pattern, string $s, bool $result): void
    {
        $sut = new Task290();

        self::assertSame($sut->wordPattern($pattern, $s), $result);
    }

    public static function dataProvider(): array
    {
        return [
            ['abba', 'dog dog dog dog', false],
            ['abba', 'dog cat cat dog', true],
            ['abba', 'dog cat cat fish', false],
            ['aaaa', 'dag cat cat dog', false],
        ];
    }
}
