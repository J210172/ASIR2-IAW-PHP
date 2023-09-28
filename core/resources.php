<?php
$directory = new RecursiveDirectoryIterator('path/to/directory/');
$iterator  = new RecursiveIteratorIterator($directory);
$regex     = new RegexIterator($iterator, '/\.jpe?g$/i', RecursiveRegexIterator::GET_MATCH);

echo '<pre>';
print_r($regex);