<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>

<?php $mixed = array(6, "fox", "dog", array("x", "y", "z")); ?>

<!-- this syntax works PHP5.4 or later -->
<?php $shortArray = [1,2,3]; ?>


<!-- put into array -->
<?php $mixed[2] = "cat"; ?>
<?php $mixed[4] = "mouse"; ?>

<!-- placed at the end of array -->
<?php $mixed[] = "end"; ?>


<pre>
<?php echo print_r($mixed); ?>
</pre>

<pre>
<?php echo print_r($shortArray); ?>
</pre>



    

</body>
</html>