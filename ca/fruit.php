<!-- Q3 Write code to  print the elements of $fruits = array  					    (09)
  (  
  array(1,"Apple",40),  
  array(2,"Mango",50),  
  	  array(3," Banana",30)   
	 );   -->

<html>

<head>
    <title>Friit</title>
</head>

<body>
    <?php
    $fruit = array(
        array(1, "Apple", 40),
        array(2, "Mango", 50),
        array(3, "Banana", 30),
    );

    for ($row = 0; $row < 3; $row++) {
        echo "<ol>";
        echo "Array items<br><br>";
        for ($col = 0; $col < 3; $col++) {
            echo "<li>" . $fruit[$row][$col] . "</li>";
        }
        echo "</ol>";
    }

    ?>
</body>

</html>