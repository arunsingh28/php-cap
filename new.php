<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <?php
    $name = $_POST["name"];
    $pwd = $_POST["pwd"];
    $desc = $_POST["des"] ?? 'not define';
    $pt = $_POST["pt"] ?? 'not define';
    $save = $_POST["save"];
    $location = $_POST["location"];
    $date = $_POST["date"];

    if ($pwd == 'admin12') {
        echo "welcome $name. <br> this is your Description <mark>$desc</mark> <br> we know that your problem is $pt <br>
        Don't worry we will send our eng. to your location kindy confirm your location from our DB your current location is $location .
        <br><br>
        Issue date is : $date 
        "
        ;
    } else {
        echo "<script>
        alert('Wrong password')
        window.location.href='http://localhost/CAP777/formcontroll.php'
        </script>
        ";

        // die();
    }
    ?>
</body>

</html>