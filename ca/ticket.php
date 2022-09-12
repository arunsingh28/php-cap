<!-- Q1Implement a function ticketbooking($Name,$Age) which display the message 	    (08)		     as"You are availing free ticket" if entered age is less that 5 years. -->

<html>
<head>
    <title>Ticket</title>
</head>

<body>
    <?php
    function ticketBook($Name, $Age)
    {
        if ($Age < 5) {
            echo "<p>Hi $Name are availing free ticket</p>";
        } else {
            echo "<p>Sorry $Name</p>";
        }
    }

    ticketBook("Arun", 4);
    ?>
</body>

</html>