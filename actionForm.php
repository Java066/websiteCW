<?php



$con = mysqli_connect('localhost', 'root', '', 'formtest');


$name = $_POST['name'];
$email = $_POST['email'];
$request = $_POST['request'];


$sql = "INSERT INTO `testcolumn` (`Id`,`Tname`,`Temail`,`Tquestion`) VALUES ('0','$name','$email','$request')";

try{
    $rs =  mysqli_query($con,$sql);
} catch (mysqli_sql_exception e){
    var_dump($e);
    exit;
}




if($rs)
{
    echo "Contact Records Inserted";
}


?>