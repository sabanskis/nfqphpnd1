<?php
 
////AUTOLOADER/////
require __DIR__ . '/vendor/autoload.php';
//////


///////STRICT TYPES TEST///////
$file1 = new file1();


try {
    var_dump($file1->Message('labas'));
} catch (TypeError $e) {
    echo 'Error: '.$e->getMessage();
}
echo "</br>";


try {
    var_dump( $file1->Sum(5,1));
} catch (TypeError $e) {
    echo 'Error: '.$e->getMessage();
}
echo "</br>";
///////////////

/////NOT STRICT TYPES TEST//////




$file2 = new file2();
var_dump($file2->Sum(10.0,5.0));
echo "</br>";
var_dump($file2->Multiply(10.21,5.04741));





 ?>
