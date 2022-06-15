<?php

namespace pochtovaa\Task05;

function runTest()
{
    $truncater = new Truncater();
    echo $truncater->truncate('Длинный текст', ['length' => 5 ]) . PHP_EOL;
    echo $truncater->truncate('') . PHP_EOL;
    echo $truncater->truncate('Почтов Алексей Александрович') . PHP_EOL;
    echo $truncater->truncate('Почтов Алексей Александрович', ['length' => 10]) . PHP_EOL;
    echo $truncater->truncate('Почтов Алексей Александрович', ['length' => 50]) . PHP_EOL;
    echo $truncater->truncate('Почтов Алексей Александрович', ['length' => -10]) . PHP_EOL;
    echo $truncater->truncate('Почтов Алексей Александрович', ['length' => 10, 'separator' => '*']) . PHP_EOL;
    echo $truncater->truncate('Почтов Алексей Александрович', ['separator' => '*']) . PHP_EOL;
}
