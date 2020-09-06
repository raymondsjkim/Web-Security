<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple Return Values</title>
    <style>
        h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>

<h2>Raymond Kim - Multiple Return Values</h2>

<?php

function add_subt($val1, $val2) {
    $add = $val1 + $val2;
    $subt = $val1 - $val2;
    return array($add, $subt);
}

$result_array = add_subt(10,5);
echo "Add: " . $result_array[0] . "<br/>";
echo "Subt: " . $result_array[1] . "<br/>";

list($add_result, $subt_result) = add_subt(20,7);
echo "Add: " . $add_result . "<br/>";
echo "Subt: " . $subt_result . "<br/>";


?>

</body>
</html>