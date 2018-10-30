<html>
<body style="text-align:center;
background-image:url(background.gif);
font-family:georgia;
font-size:20px;">
<div class="header">
    <a href="index.html"><img src="Logo.png" alt="LOGO" /></a>
</div>

<div align = "center">
   <div style = "width:650px; border: solid 1px #333333; " align = "left">
      <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>SEARCH</b></div>

      <div style = "margin:30px">

  <form name="form1" action="" method="post" align="center">
    <table>
      <tr>
        <td>Enter FileNumber</td>
        <td><input type="text" name="filenumber"></td>
      </tr>
      <tr>
        <td colspan="2" align="center">
    <input type="submit" name="submit4" value="search">
  </td>
</tr>

  </table>
  </form>
  <?php
  require 'initial.php';

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
  ?>

</body>
</html>
