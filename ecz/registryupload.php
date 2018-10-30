<?php
require_once 'initial.php';

if(isset($_POST['filename']) and isset($_POST['filenumber'])){

$filename = $_POST['filename'];
$filenumber = $_POST['filenumber'];

try{

$InsertTableSQLQuery = "INSERT INTO rdata (filename, filenumber) VALUES ('$filename', '$filenumber') ;";

 mysqli_query($con,$InsertTableSQLQuery);

 }catch(Exception $e){}
 mysqli_close($con);

}
?>
