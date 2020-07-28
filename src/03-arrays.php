<?php

/**
 * The $input variable contains an array of digits
 * Return an array which will contain the same digits but repetitive by its value
 * without changing the order.
 * Example: [1,3,2] => [1,3,3,3,2,2]
 *
 * @param  array  $input
 * @return array
 */
function repeatArrayValues(array $input)
{
    $new_array = [];
    foreach ($input as $element) {
        $i = 0;
        while ($i < $element) {
            $new_array[] = $element;
            $i++;
        }
    }
    return $new_array;
}

/**
 * The $input variable contains an array of digits
 * Return the lowest unique value or 0 if there is no unique values or array is empty.
 * Example: [1, 2, 3, 2, 1, 5, 6] => 3
 *
 * @param  array  $input
 * @return int
 */
function getUniqueValue(array $input)
{
    $removeRepeating = array_unique($input); 
    $arrayCheck = array_diff_assoc($input, $removeRepeating); 
    $unValueArray = array_diff($input, array_unique($arrayCheck)); 
 
    if (empty($input) || empty($unValueArray)) { 
        return 0; 
    } 
 
    return min($unValueArray);
}

/**
 * The $input variable contains an array of arrays
 * Each sub array has keys: name (contains strings), tags (contains array of strings)
 * Return the list of names grouped by tags
 * !!! The 'names' in returned array must be sorted ascending.
 *
 * Example:
 * [
 *  ['name' => 'potato', 'tags' => ['vegetable', 'yellow']],
 *  ['name' => 'apple', 'tags' => ['fruit', 'green']],
 *  ['name' => 'orange', 'tags' => ['fruit', 'yellow']],
 * ]
 *
 * Should be transformed into:
 * [
 *  'fruit' => ['apple', 'orange'],
 *  'green' => ['apple'],
 *  'vegetable' => ['potato'],
 *  'yellow' => ['orange', 'potato'],
 * ]
 *
 * @param  array  $input
 * @return array
 */
function groupByTag(array $input)
{
    array_multisort($input);
    $new_array = [];
    foreach ($input as $element) {
        foreach ($element['tags'] as $tag) {
            $new_array[$tag][] = $element['name'];
        }
    }
    ksort($new_array);

    return $new_array;
}
