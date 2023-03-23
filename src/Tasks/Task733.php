<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/flood-fill/
 * 85.19/40.74
 */
final class Task733
{
    /**
     * @param array<int[]> $image
     *
     * @return array<int[]>
     */
    public function floodFill(array $image, int $sr, int $sc, int $color, ?int $preColor = null): array
    {
        if ($preColor === null) {
            $preColor = $image[$sr][$sc];
        }
        if ($image[$sr][$sc] !== $preColor || $image[$sr][$sc] === $color) {
            return $image;
        }

        $image[$sr][$sc] = $color;
        if ($sr > 0) {
            $image = $this->floodFill($image, $sr - 1, $sc, $color, $preColor);
        }

        if ($sc > 0) {
            $image = $this->floodFill($image, $sr, $sc - 1, $color, $preColor);
        }

        if (isset($image[$sr][$sc + 1])) {
            $image = $this->floodFill($image, $sr, $sc + 1, $color, $preColor);
        }

        if (isset($image[$sr + 1][$sc])) {
            $image = $this->floodFill($image, $sr + 1, $sc, $color, $preColor);
        }

        return $image;
    }
}
