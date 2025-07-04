<?php

declare(strict_types=1);

namespace App\Tasks\Group1300;

use PHPUnit\Framework\TestCase;

final class Task1268Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param mixed $result
     */
    public function test1268(array $products, string $searchWord, $result): void
    {
        $sut = new Task1268();

        self::assertSame($sut->suggestedProducts($products, $searchWord), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [
                ['mobile', 'mouse', 'moneypot', 'monitor', 'mousepad'],
                'mouse',
                [
                    ['mobile', 'moneypot', 'monitor'],
                    ['mobile', 'moneypot', 'monitor'],
                    ['mouse', 'mousepad'],
                    ['mouse', 'mousepad'],
                    ['mouse', 'mousepad'],
                ],
            ],
            [
                ['havana'],
                'havana',
                [
                    ['havana'],
                    ['havana'],
                    ['havana'],
                    ['havana'],
                    ['havana'],
                    ['havana'],
                ],
            ],
        ];
    }
}
