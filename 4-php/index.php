<!DOCTYPE html>

<head>
    <title>PHP TUTORIAL</title>
</head>

<body>

    <h1>
        <?= "HELLO SIR!" ?>
    </h1>
    <p>
        <b>Below code is php code...</b>
    </p>

    <?php
    echo "*************PRINT IN PHP**************";
    echo "<br>";
    echo "Hello World!";
    echo "<br>";
    echo "Another", " ",  "Way";
    echo "<br>";
    print("Using print");
    echo "<br>";

    echo "*************Var IN PHP**************";
    echo "<br>";
    $name = "John Doe";
    echo 'hello $name'; // will not work
    echo "<br>";
    echo "hello $name";

    echo "<br>";

    $x = 1;
    $y = $x; // value
    $y = &$x; // reference
    $x = 19;
    echo $y;
    echo "<br>";
    ?>
</body>

</html>