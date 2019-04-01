<?php

require '../vendor/autoload.php';


$hello = new \App\Wcs\Hello();
echo $hello->talk();

echo "<br>";
echo "***************** LIBRAIRIE COMPOSER *******************";
echo "<br>";

$helloLib = new \HelloWorld\SayHello();
echo  $helloLib::world();

