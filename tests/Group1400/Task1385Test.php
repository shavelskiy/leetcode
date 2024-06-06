<?php

declare(strict_types=1);

namespace App\Tasks\Group1400;

use PHPUnit\Framework\TestCase;

final class Task1385Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1385(array $arr1, array $arr2, int $d, int $result): void
    {
        $sut = new Task1385();

        self::assertSame($sut->findTheDistanceValue($arr1, $arr2, $d), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[-227, 537, -655, 993, -526, -518, 679, -420, -53, 120, 187, -203, -567, -75, 464, -472, -324, 16, 215, -773, 862, -563, -839, -906, -969, 633, -990, 756, -17, -346, 820, -216, 736, 188, -412, 881, -599, -181, -673, 802, 688, 553, 323, -689, 625, 871, -938, -969, -207, -703, 794, 361, 111, -884, 156, -223, -480, -734, -838, -53, 335, 720, -379, 855, -971, -928, 99, -876, 75, 721, -736, -913, 911], [-440, 599, -760, -115, -814, -611, -944, 23, 305, -734, 524, -429, 406, 673, 731, -607, 357, -84, -202, -325, 292, -452, 985, -468, 314, 301, -503, -498, -877, 204, 915, 613, 209, -642, -284, -123, 239, 429, 147, 307, 69, 984, -876, 853, -277, 120, -155, 102, -592, 457, 802, 98, -132, 883, 356, -857, 461, -453, 522, 250, 476, 991, 540, -852, -485, -637, 999], 12, 36],
            [[-803, 715, -224, 909, 121, -296, 872, 807, 715, 407, 94, -8, 572, 90, -520, -867, 485, -918, -827, -728, -653, -659, 865, 102, -564, -452, 554, -320, 229, 36, 722, -478, -247, -307, -304, -767, -404, -519, 776, 933, 236, 596, 954, 464], [817, 1, -723, 187, 128, 577, -787, -344, -920, -168, -851, -222, 773, 614, -699, 696, -744, -302, -766, 259, 203, 601, 896, -226, -844, 168, 126, -542, 159, -833, 950, -454, -253, 824, -395, 155, 94, 894, -766, -63, 836, -433, -780, 611, -907, 695, -395, -975, 256, 373, -971, -813, -154, -765, 691, 812, 617, -919, -616, -510, 608, 201, -138, -669, -764, -77, -658, 394, -506, -675, 523, 730, -790, -109, 865, 975, -226, 651, 987, 111, 862, 675, -398, 126, -482, 457, -24, -356, -795, -575, 335, -350, -919, -945, -979, 611], 37, 0],
            [[-3, -3, 4, -1, -10], [7, 10], 12, 1],
            [[1, 4, 2, 3], [-4, -3, 6, 10, 20, 30], 3, 2],
            [[2, 1, 100, 3], [-5, -2, 10, -3, 7], 6, 1],
        ];
    }
}