<?php

require_once 'initial.php';

$sql="SELECT * FROM rdisplay";

$data=mysqli_query($con,$sql);

?>

<html>
<head>
  <title> REGISTRY RECORDS </title>
</head>

<body>
  <h> RECORDS</h>
  <table id="mytable" width="700" border="2" cellpadding="2" cellspacing="2">
    <tr>
      <th>filename</th>
      <th>filenumber</th>
      <th>department</th>
      <th>recipient</th>
      <th>date</th>
      <tr>
  <?php
  while($rdisplay=mysqli_fetch_assoc($data)){
    echo "<tr>";

      echo "<td>".$rdisplay['filename']."</td>";

      echo "<td>".$rdisplay['filenumber']."</td>";

      echo "<td>".$rdisplay['department']."</td>";

      echo "<td>".$rdisplay['recipient']."</td>";

      echo "<td>".$rdisplay['date']."</td>";

      echo "</tr>";
  }

  ?>

</table>
</body>
</html>
