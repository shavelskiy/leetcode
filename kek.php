<?php

require_once 'vendor/autoload.php';

for ($i = 1; $i <= 31; $i++) {
    $group  = sprintf('Group%s', $i * 100);
    $dir = sprintf('%s/tests/%s', __DIR__, $group);
    mkdir($dir);

    for ($j = 1; $j <= 100; $j++) {
        $groupNumber = ($i - 1) * 100;
        $temp = $groupNumber + $j;
        $class = sprintf('Task%sTest', $temp);

        $file = sprintf('%s/%s.php', $dir, $class);

        $content = <<<END
        <?php

        namespace App\Tasks\\{$group};

        use App\Tasks\\{$group}\Task{$temp};
        use PHPUnit\Framework\TestCase;

        class {$class} extends TestCase
        {
            /**
             * @dataProvider dataProvider
             */
            public function test{$temp}(int \$a, int \$result): void
            {
                \$sut = new Task{$temp}();

                self::assertSame(\$a, \$result);
            }

            public static function dataProvider(): array
            {
                return [
                    [1, 1],
                ];
            }
        }
        END;

        file_put_contents($file, $content);
    }
}
