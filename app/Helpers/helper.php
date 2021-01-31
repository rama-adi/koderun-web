<?php

/**
 * Generate Scratchbook slug
 * @param $title
 * @return string
 */
function scratch_slug(string $title){
    $trim = Str::limit($title, 10, '');
    $random_string = Str::random(10);
    return Str::slug("{$trim} {$random_string}");
}
