<!DOCTYPE html>
<html lang="en">

<head>
    <title>ii</title>
</head>

<body>
    <?php
    echo "<b>array_chunk function</b><br><br>";
    $cars = array("Arun", "Appu", "Aditay", "Ritibh", "Rajat", "Shivam");
    print_r(array_chunk($cars, 2));

    echo "<br><br><b>array_change_key_case function</b><br><br>";
    $age = array("Arun" => "23", "Tarun" => "21", "Rajat" => "24");
    print_r(array_change_key_case($age, CASE_UPPER));

    echo "<br><br><b>sort function</b><br><br>";
    $cars = array("Volvo", "BMW", "Toyota");
    $sort = sort($cars);
    echo $sort;
    ?>
</body>

</html>