<?php
//3 задание.
function arraymultisum(array $arr){
    $sum=null;

    foreach($arr as $value){
        $sum+=is_array($value) ? arraymultisum($value):$value;
    }
    return $sum;
}

echo arraymultisum(array(23,18,5,[1,2,8,[4,9,7]]));
echo '<br>';
//1 задание.
$array = [23,18,5,[1,2,8,[4,9,7]]];
function displayInfo(array $array, $index)
{
    $results = [];
    foreach ($array as $value) {
        if (is_array($value)) {
            if (isset($value[$index])) {
                $results[] = $value[$index];
            }
        } else {
            if (isset($array[$index])) {
                $results[] = $array[$index];
            }
        }
    }
    return $results;
}

var_dump(displayInfo($array, 1));

echo '<br>';
// 2 задание.
$string = "Abiba boba!";

function countLetter( $haystack = "", $needle = "b", $ignoreCase)
{
    $result = [];
    if (!$haystack && !is_string($haystack)) {
        return false;
    }
    foreach (str_split($haystack) as $item) {
        if ($needle === $item) {
            $result[] = $item;
        }
    }
    return count($result);
}

echo '<br>';

//4 задание.
function square($max_size, $small_size)
{
    return round($max_size / $small_size);
}

var_dump(square(100, 19));