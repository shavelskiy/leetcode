<?php

declare(strict_types=1);

namespace App\Tasks\Group200;

use App\Model\TreeNodeRight;
use PHPUnit\Framework\TestCase;

final class Task116Test extends TestCase
{
    public function test116(): void
    {
        $sut = new Task116();

        $data = new TreeNodeRight(
            1,
            new TreeNodeRight(2, new TreeNodeRight(4), new TreeNodeRight(5)),
            new TreeNodeRight(3, new TreeNodeRight(6), new TreeNodeRight(7)),
        );

        $result = $sut->connect($data);

        self::assertSame($result->next, null);
        self::assertSame($result->left->next->val, 3);
        self::assertSame($result->right->next, null);
        self::assertSame($result->left->left->next->val, 5);
        self::assertSame($result->left->right->next->val, 6);
        self::assertSame($result->right->left->next->val, 7);
        self::assertSame($result->right->right->next, null);
    }
}
