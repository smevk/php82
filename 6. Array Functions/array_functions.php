<?php
function array_change_key_case($array, $case = CASE_LOWER)
{
} // Converts all keys in an array to lowercase or uppercase

function array_chunk($array, $size, $preserve_keys = false)
{
} // Splits an array into chunks of specified size

function array_column($array, $column_key, $index_key = null)
{
} // Returns the values from a single column in the input array

function array_combine($keys, $values)
{
} // Creates an array by using one array for keys and another for its values

function array_count_values($array)
{
} // Counts all the values of an array

function array_diff($array1, $array2, $array3)
{
} // Computes the difference between arrays

function array_diff_assoc($array1, $array2, $array3)
{
} // Computes the difference between arrays with additional index check

function array_diff_key($array1, $array2, $array3)
{
} // Computes the difference of arrays using keys for comparison

function array_diff_uassoc($array1, $array2, $array3, $key_compare_func)
{
} // Computes the difference of arrays with additional index check, using a callback function for comparison

function array_diff_ukey($array1, $array2, $array3, $key_compare_func)
{
} // Computes the difference of arrays using a callback function on the keys for comparison

function array_fill($start_index, $num, $value)
{
} // Fills an array with values, specifying the start index and number of elements

function array_fill_keys($keys, $value)
{
} // Fills an array with values, using specified keys

function array_filter($array, $callback = null, $flag = 0)
{
} // Filters elements of an array using a callback function

function array_flip($array)
{
} // Exchanges all keys with their associated values in an array

function array_intersect($array1, $array2, $array3)
{
} // Computes the intersection of arrays

function array_intersect_assoc($array1, $array2, $array3)
{
} // Computes the intersection of arrays with additional index check

function array_intersect_key($array1, $array2, $array3)
{
} // Computes the intersection of arrays using keys for comparison

function array_intersect_uassoc($array1, $array2, $array3, $key_compare_func)
{
} // Computes the intersection of arrays with additional index check, using a callback function for comparison

function array_intersect_ukey($array1, $array2, $array3, $key_compare_func)
{
} // Computes the intersection of arrays using a callback function on the keys for comparison

function array_key_exists($key, $array)
{
} // Checks if the given key or index exists in the array

function array_keys($array, $search_value = null, $strict = false)
{
} // Returns all the keys or a subset of keys from an array

function array_map($callback, $array1, $array2)
{
} // Applies a callback function to each element of one or more arrays

function array_merge($array1, $array2, $array3)
{
} // Merges one or more arrays into a single array

function array_merge_recursive($array1, $array2, $array3)
{
} // Recursively merges one or more arrays into a single array

function array_multisort(&$array1, $array2, $array3, $array4, $array5)
{
} // Sorts multiple or multidimensional arrays

function array_pad($array, $size, $value)
{
} // Pad an array to a specified length with a specified value

function array_pop(&$array)
{
} // Removes and returns the last element from an array

function array_product($array)
{
} // Calculates the product of values in an array

function array_push(&$array, $value1, $value2)
{
} // Pushes one or more elements onto the end of an array

function array_rand($array, $num = 1)
{
} // Picks one or more random entries from an array

function array_reduce($array, $callback, $initial = null)
{
} // Iteratively reduce an array to a single value using a callback function

function array_replace($array1, $array2, $array3)
{
} // Replaces the values of the first array with the values from subsequent arrays

function array_replace_recursive($array1, $array2, $array3)
{
} // Recursively replaces the values of the first array with the values from subsequent arrays

function array_reverse($array, $preserve_keys = false)
{
} // Reverses the order of elements in an array

function array_search($needle, $array, $strict = false)
{
} // Searches an array for a given value and returns the corresponding key if successful

function array_shift(&$array)
{
} // Removes and returns the first element from an array

function array_slice($array, $offset, $length = null, $preserve_keys = false)
{
} // Extracts a slice of an array

function array_splice(&$array, $offset, $length = count($array), $replacement = array())
{
} // Removes a portion of an array and replaces it with something else

function array_sum($array)
{
} // Calculates the sum of values in an array

function array_udiff($array1, $array2, $array3, $data_compare_func)
{
} // Computes the difference of arrays by using a callback function for data comparison

function array_udiff_assoc($array1, $array2, $array3, $data_compare_func)
{
} // Computes the difference of arrays with additional index check, using a callback function for data comparison

function array_udiff_uassoc($array1, $array2, $array3, $data_compare_func, $key_compare_func)
{
} // Computes the difference of arrays with additional index check, using callback functions for data and key comparison

function array_uintersect($array1, $array2, $array3, $data_compare_func)
{
} // Computes the intersection of arrays by using a callback function for data comparison

function array_uintersect_assoc($array1, $array2, $array3, $data_compare_func)
{
} // Computes the intersection of arrays with additional index check, using a callback function for data comparison

function array_uintersect_uassoc($array1, $array2, $array3, $data_compare_func, $key_compare_func)
{
} // Computes the intersection of arrays with additional index check, using callback functions for data and key comparison

function array_unique($array, $sort_flags = SORT_STRING)
{
} // Removes duplicate values from an array

function array_unshift(&$array, $value1, $value2)
{
} // Prepends one or more elements to the beginning of an array

function array_values($array)
{
} // Returns all the values of an array

function array_walk(&$array, $callback, $userdata = null)
{
} // Applies a user-defined callback function to each element of an array

function array_walk_recursive(&$array, $callback, $userdata = null)
{
} // Applies a user-defined callback function recursively to each element of an array

function count($array, $mode = COUNT_NORMAL)
{
} // Counts all elements in an array or something in an object

function in_array($needle, $array, $strict = false)
{
} // Checks if a value exists in an array

function key($array)
{
} // Fetches the key of the current element in an array

function krsort(&$array, $sort_flags = SORT_REGULAR)
{
} // Sorts an array by key in reverse order

function ksort(&$array, $sort_flags = SORT_REGULAR)
{
} // Sorts an array by key

function natcasesort(&$array)
{
} // Sorts an array using a case-insensitive "natural order" algorithm

function natsort(&$array)
{
} // Sorts an array using a "natural order" algorithm

function next(&$array)
{
} // Advances the internal pointer of an array and returns the current element

function prev(&$array)
{
} // Rewinds the internal pointer of an array and returns the current element

function range($start, $end, $step = 1)
{
} // Creates an array containing a range of elements

function reset(&$array)
{
} // Sets the internal pointer of an array to its first element

function rsort(&$array, $sort_flags = SORT_REGULAR)
{
} // Sorts an array in reverse order

function shuffle(&$array)
{
} // Shuffles the elements of an array

function sizeof($array, $mode = COUNT_NORMAL)
{
} // Alias of count()

function sort(&$array, $sort_flags = SORT_REGULAR)
{
} // Sorts an array

function uasort(&$array, $value_compare_func)
{
} // Sorts an array by values using a user-defined comparison function

function uksort(&$array, $key_compare_func)
{
} // Sorts an array by keys using a user-defined comparison function

function usort(&$array, $value_compare_func)
{
} // Sorts an array by values using a user-defined comparison function

?>