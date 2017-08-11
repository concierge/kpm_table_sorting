<?php

$filename = $argv[1] ?? null;

if (empty($filename))
    die('Filename not provided!');

$file_contents = file_get_contents($filename);

$split = explode("|---|---|\n", $file_contents);
$tablestring = $split[1];

if (empty($tablestring))
    die('Error, empty tablestring!');

$new_modules_arr = $modules_arr = explode("\n", $tablestring);

sort($new_modules_arr, SORT_STRING);

$new_contents = $split[0] . "|---|---|\n" . implode("\n", $new_modules_arr);
if ($new_contents != $file_contents && $new_modules_arr != $modules_arr)
    file_put_contents($argv[1], $new_contents);
