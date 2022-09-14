<html>

<head>
    <title>Math opration</title>
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
    <?php
    setcookie("test", "some time", time() + (86400 * 30), "/");
    if (isset($_POST["first"]) && isset($_POST["second"]) && isset($_POST["opration"])) {
        if ($_POST["first"] == '' && $_POST["second"] == '') {
            echo "<script>alert('fill all the details'); window.href.location='http://localhost/caP777/mathOpration.php'</script>";
        } else {
            $no1 = $_POST["first"];
            $no2 = $_POST["second"];
            $op = $_POST["opration"];
            if ($op == "Add") {
                echo "Addition is: " . $no1 + $no2;
            } else if ($op == "Sub") {
                echo "Addition is: " . $no1 - $no2;
            } else if ($op == "Mul") {
                echo "Addition is: " . $no1 + $no2;
            } else {
                echo "Division is: " . $no1 / $no2;
            }
        }
    }
    ?>
</body>

</html>