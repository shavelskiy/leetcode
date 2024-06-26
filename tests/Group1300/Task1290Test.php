<?php

declare(strict_types=1);

namespace App\Tasks\Group1300;

use App\Model\ListNode;
use PHPUnit\Framework\TestCase;

final class Task1290Test extends TestCase
{
    public function test1290(): void
    {
        $sut = new Task1290();

        $data = new ListNode(1, new ListNode(0, new ListNode(1)));

        self::assertSame($sut->getDecimalValue($data), 5);
    }
}
