<body>
<!-- file name: calc.php -->
<?php

$x = $_POST ["x"];
$y = $_POST ["y"];
$cc = $_POST ["cc"];
if ($cc=="*"){
    $result = ($x * $y);
}
if($cc=="/"){
    $result = ($x / $y);
}

echo $x.$cc.$y."=".$result;

?>
</body>
</html>