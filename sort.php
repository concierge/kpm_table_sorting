<?php

$filename = $argv[1] ?? null;

if (empty($filename)) die('Filename not provided!');

$file = file_get_contents($filename);

$split = explode("|---|---|\n", $file);
$tablestring = $split[1];

if (empty($tablestring)) die('Error, empty tablestring!');

$modules_arr = explode("\n", $tablestring);

sort($modules_arr, SORT_STRING);

$newtable = $split[0] . "|---|---|\n" . implode("\n", $modules_arr);
file_put_contents($argv[1], $newtable);
