<?php

$filename = $argv[1] ?? null;

if (empty($filename))
    die('Filename not provided!');

$file_contents = file_get_contents($filename);

$split = explode('|---|---|' . PHP_EOL, $file_contents);
$tablestring = $split[1];

if (empty($tablestring))
    die('Error, empty tablestring!');

$new_modules_arr = $modules_arr = explode(PHP_EOL, $tablestring);

$sorted = natcasesort($new_modules_arr);

$new_contents = $split[0] . '|---|---|' . PHP_EOL . implode(PHP_EOL, $new_modules_arr);
if ($sorted && $new_contents != $file_contents && $new_modules_arr !== $modules_arr)
    file_put_contents($filename, $new_contents);
