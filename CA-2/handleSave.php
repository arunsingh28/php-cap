<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
</head>

<body>
    <?php
    if (isset($_POST["name"]) && isset($_POST["pwd"]) && isset($_POST["email"]) && isset($_POST["number"]) && isset($_POST["address"])) {
        $name = $_POST["name"];
        $pwd = $_POST["pwd"];
        $email = $_POST["email"];
        $phone = $_POST["number"];
        $address = $_POST["address"];
    }
    ?>

    <form>
        <table>
            <legend>Register</legend>
            <tr>
                <td>Name</td>
                <td><input id="name" name="name" type="text" value="<?php echo $_POST["name"]; ?>" /></td>
            </tr>

            <tr>
                <td>email</td>
                <td><input id="email" name="email" type="email" value="<?php echo $_POST["email"]; ?>"/></td>
            </tr>

            <tr>
                <td>Password</td>
                <td><input type="text" value="<?php echo $_POST["pwd"]; ?>"/></td>
            </tr>

            <tr>
                <td>Enter Mobile Number</td>
                <td><input type="number" name="number" value="<?php echo $_POST["number"]; ?>"/></td>
            </tr>
            <br>
            <tr>
                <td>Enter Address</td>
                <td><textarea><?php echo $_POST["address"]; ?></textarea></td>
            </tr>
            <tr>
                <td colspan="2"><a href="http://localhost/CAP777/ca-2/register.html"> <button id="go" type="button" style="width:100%">Go Back</button></a></td>
            </tr>
        </table>
    </form>

</body>
<style>
    body {
        display: flex;
        justify-content: center;
    }

    legend {
        text-align: center;
        font-size: 22px;
        color: blue;
        font-weight: 900;
    }

    form {
        background-color: #eee;
        width: 300px;
        padding: 20px;
    }
</style>

</html>