<?php
require_once 'initial.php';

if(isset($_POST['filename']) and isset($_POST['filenumber']) and isset($_POST['department']) and isset($_POST['recipient']) and isset($_POST['date'])){

$filename = $_POST['filename'];
$filenumber = $_POST['filenumber'];
$department = $_POST['department'];
$recipient = $_POST['recipient'];
$date = $_POST['date'];

try{

$InsertTableSQLQuery = "INSERT INTO rdisplay (filename, filenumber,department,recipient,date) VALUES ('$filename', '$filenumber','$department','$recipient',$date) ;";

 mysqli_query($con,$InsertTableSQLQuery);

 }catch(Exception $e){}
 mysqli_close($con);

}
?>
