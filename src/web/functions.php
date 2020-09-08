<?php
/**
 * The $airports variable contains array of arrays of airports (see airports.php)
 * What can be put instead of placeholder so that function returns the unique first letter of each airport name
 * in alphabetical order
 *
 * Create a PhpUnit test (GetUniqueFirstLettersTest) which will check this behavior
 *
 * @param  array  $airports
 * @return string[]
 */
function getUniqueFirstLetters(array $airports)
{
    $letters = [];
    foreach ($airports as $code) {
        $letters[] = $code['name'][0];
    }
    $letters = array_unique($letters);
    sort($letters);

    return $letters;
}