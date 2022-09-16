<!DOCTYPE html>
<html lang="en">

<head>
    <title>CA-2</title>
</head>

<body>
    <form method="post">
        <input type="number" name="first" placeholder="Enter 1 no.">
        <input type="number" name="second" placeholder="Enter 2 no.">
        <select name="opration">
            <option value="Add">Addition</option>
            <option value="Sub">Subtraction</option>
            <option value="Mul">Multipication</option>
            <option value="Div">Division</option>
        </select>
        <button type="submit">Result</button>
    </form>
</body>
<?php
if (isset($_POST["first"]) && isset($_POST["second"]) && isset($_POST["opration"])) {
    if ($_POST["first"] == '' && $_POST["second"] == '') {
        echo "<script>
        alert('fill all the details'); 
        window.href.location='http://localhost/caP777/mathOpration.php'
        </script>";
    } else {
        $no1 = $_POST["first"];
        $no2 = $_POST["second"];
        $op = $_POST["opration"];
        switch ($op) {
            case "Add": {
                    $res = $no1 + $no2;
                    echo "<br>Addition is: " . "<input type='txt' disabled value='$res'>";
                    break;
                }
            case "Sub": {
                    $res = $no1 - $no2;
                    echo "<br>Subtraction is: " . "<input type='txt' disabled value='$res'>";
                    break;
                }
            case "Mul": {
                    $res = $no1 * $no2;
                    echo "<br>Multipication is: " . "<input type='txt' disabled value='$res'>";
                    break;
                }
            case "Div": {
                    $res = $no1 / $no2;
                    echo "<br>Division is: " . "<input type='txt' disabled value='$res'>";
                    break;
                }
            default: {
                    echo "Wrong input";
                }
        }
    }
}
?>

</html>