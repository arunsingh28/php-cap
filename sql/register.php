<?php
// sql connection

if (isset($_POST["name"]) && isset($_POST["pwd"]) && isset($_POST["email"])) {
    $name = $_POST["name"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];


    $servername = "localhost";
    $username = "root";
    $password = "";

    // create connection
    $con = new mysqli($servername, $username, $password);

    // check conn
    if ($con->connect_error) {
        die("connection failed: " . $con->connect_error);
    }
    echo "Connted to SQL";

    // crate table
    $sql = "CREATE TABLE user(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    pws VARCHAR(50) NOT NULL,
    email VARCHAR(30) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";



    if ($con->query(($sql) === TRUE)) {
        echo "Table created";
    } else echo "Error for creating table. " . $con->error;
} else {
    echo "<script>alert('Please provide the details');window.href.location='http://localhost/caP777/sql/form.html'</script>";
}
