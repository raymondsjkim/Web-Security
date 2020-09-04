<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
    <style>
        h1 {
            margin: 0;
        }
        h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>

<h1>Raymond Kim</h1>
<h2>Chapter 3 Section 7 - Associative arrays</h2>

<?php $assoc = array("first_name" => "Kevin", "last_name" => "Skoglund"); ?>

<?php echo $assoc["first_name"]; ?> <br/>
<?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?> <br/>

<?php $assoc["first_name"] = "Larry"; ?>
<?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?> <br/>

<?php // echo $assoc[0]; ?> <br/>

<?php $numbers = array(4,8,5,16,23,42); ?> 
<?php $numbers = array(0 => 4, 1 => 8, 2 => 5, 3 => 16, 4 => 23, 5 => 42); ?> 
<?php echo $numbers[0]; ?>

</body>
</html>