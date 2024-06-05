<?php

require_once 'vendor/autoload.php';

for ($i = 1; $i <= 31; $i++) {
    $group  = sprintf('Group%s', $i * 100);
    $dir = sprintf('%s/src/Tasks/%s', __DIR__, $group);
    // mkdir($dir);

    // for ($j = 1; $j < 100; $j++) {
        $groupNumber = ($i - 1) * 100;
    $j = 100;
        $class = sprintf('Task%s', $groupNumber + $j);

        $file = sprintf('%s/%s.php', $dir, $class);

        $content = <<<END
        <?php

            namespace App\Tasks\\{$group};

            class {$class}
        {
            public function execute(): void
        {}
        }
        END;

        file_put_contents($file, $content);
    // }
}
