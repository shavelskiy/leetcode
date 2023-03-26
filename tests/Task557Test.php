<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task557;
use PHPUnit\Framework\TestCase;

final class Task557Test extends TestCase
{
    public function test557(): void
    {
        $sut = new Task557();

        self::assertSame($sut->reverseWords("Let's take LeetCode contest"), "s'teL ekat edoCteeL tsetnoc");
        self::assertSame($sut->reverseWords('God Ding'), 'doG gniD');
    }
}
