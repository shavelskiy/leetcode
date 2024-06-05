<?php

declare(strict_types=1);

namespace App\Tasks\Group200;

use App\Model\Node;
use PHPUnit\Framework\TestCase;

final class Task138Test extends TestCase
{
    public function test138(): void
    {
        $sut = new Task138();

        $data = [
            new Node(7),
            new Node(13),
            new Node(11),
            new Node(10),
            new Node(1),
        ];

        $data[0]->next = $data[1];
        $data[1]->next = $data[2];
        $data[2]->next = $data[3];
        $data[3]->next = $data[4];

        $data[1]->random = $data[0];
        $data[2]->random = $data[4];
        $data[3]->random = $data[2];
        $data[4]->random = $data[0];

        $list = $sut->copyRandomList($data[0]);
        $tmp = clone $list;
        $result = [];
        while ($tmp !== null) {
            $result[] = $tmp->val;
            $tmp = $tmp->next;
        }

        self::assertSame($list !== $data[0], true);
        self::assertSame($result, [7, 13, 11, 10, 1]);
    }
}
