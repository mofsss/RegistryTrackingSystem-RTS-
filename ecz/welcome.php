<?php
require 'initial.php';
?>
<html>
   <head>
      <title>Registry Edit</title>
   </head>
   <body style="text-align:left;
   background-image:url(background.gif);
   font-family:georgia;
   font-size:20px;
   color:black;">

    <form name="form1" action="" method="post">
      <table>
        <tr>
          <td>Enter Filename</td>
          <td><input type="text" name="filename"></td>
        </tr>
        <tr>
          <td>Enter Filenumber</td>
          <td><input type="text" name="filenumber"></td>
        </tr>
        <tr>
          <td>Enter Department</td>
          <td><input type="text" name="department"></td>

        </tr>
        <tr>
          <td>Enter Recipient</td>
          <td><input type="text" name="recipient"></td>

        </tr>
        <tr>
          <td>Enter Date</td>
          <td><input type="text" name="date"></td>

        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="submit" name="submit1" value="insert">
            <input type="submit" name="submit2" value="delete">
            <input type="submit" name="submit3" value="update">
            <input type="submit" name="submit4" value="search">
          </td>
        </tr>
</table>
</form>

<?php
if(isset($_POST["submit1"]))
{
  mysqli_query($con, "INSERT INTO rdisplay VALUES ('$_POST[filename]','$_POST[filenumber]','$_POST[department]','$_POST[recipient]','$_POST[date]')");
}

if(isset($_POST["submit2"]))
{
  mysqli_query($con, "DELETE FROM rdisplay WHERE filenumber ='$_POST[filenumber]'");
}

if(isset($_POST["submit3"]))
{
  mysqli_query($con, "UPDATE rdisplay  SET department ='$_POST[department]', recipient ='$_POST[recipient]', date ='$_POST[date]' WHERE filenumber ='$_POST[filenumber]'");
}
if(isset($_POST["submit4"]))
{
  echo "Search Results";
  $res=mysqli_query($con,"SELECT * FROM rdisplay WHERE filenumber ='$_POST[filenumber]'");
  echo "<table border=2>";
  echo "<tr>";
  echo "<th>"; echo "Filename"; echo "</th>";
  echo "<th>"; echo "Filenumber"; echo "</th>";
  echo "<th>"; echo "Department"; echo "</th>";
  echo "<th>"; echo "Recipient"; echo "</th>";
  echo "<th>"; echo "Date"; echo "</th>";
  echo "</tr>";

  while($row=mysqli_fetch_array($res)){
    echo "<tr>";
    echo "<td>"; echo $row["filename"]; echo "</td>";
    echo "<td>"; echo $row["filenumber"]; echo "</td>";
    echo "<td>"; echo $row["department"]; echo "</td>";
    echo "<td>"; echo $row["recipient"]; echo "</td>";
    echo "<td>"; echo $row["date"]; echo "</td>";
    echo "</tr>";


  }
}


$res=mysqli_query($con,"SELECT * FROM rdisplay");

echo "<table border=2>";
echo "<tr>";
echo "<th>"; echo "Filename"; echo "</th>";
echo "<th>"; echo "Filenumber"; echo "</th>";
echo "<th>"; echo "Department"; echo "</th>";
echo "<th>"; echo "Recipient"; echo "</th>";
echo "<th>"; echo "Date"; echo "</th>";
echo "</tr>";
echo "Registry Entries";
while($row=mysqli_fetch_array($res)){

  echo "<tr>";
  echo "<td>"; echo $row["filename"]; echo "</td>";
  echo "<td>"; echo $row["filenumber"]; echo "</td>";
  echo "<td>"; echo $row["department"]; echo "</td>";
  echo "<td>"; echo $row["recipient"]; echo "</td>";
  echo "<td>"; echo $row["date"]; echo "</td>";
  echo "</tr>";


}

 ?>
   </body>

</html>
