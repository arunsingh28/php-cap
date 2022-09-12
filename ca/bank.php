<!-- Q2  There is an interface IFSC with PrintCode() function.SBI is a class that is inheriting 	the  IFSC write code to implement it and print  IFSC Code of SBI. -->

<html>
<head>
    <title>Bank</title>
</head>

<body>
    <?php
    interface IFSC
    {
        public function PrintCode();
    }

    class SBI implements IFSC
    {
        public function PrintCode()
        {
            echo "IFSC : PUNB0028";
        }
    }

    $a = new SBI();
    $a->PrintCode();
    ?>
</body>

</html>