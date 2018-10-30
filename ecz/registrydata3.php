<?php

require_once 'initial.php';

$sql="SELECT * FROM rdata3";

$data=mysqli_query($con,$sql);

?>

<html>
<head>
  <title> Industrial Relations/Public Holidays/Broadcasting/RoadTraffic/Equipment/Administration </title>
</head>

<body style="text-align:center;
background-image:url(background.gif);
font-family:georgia;
font-size:20px;">
<h1>Industrial Relations/Public Holidays/Broadcasting/RoadTraffic/Equipment/Administration</h1>
  <table width="600" border="1" cellpadding="1" cellspacing="1">
    <tr>
      <th>filename</th>
      <th>filenumber</th>
      <tr>
  <?php
  while($rdata3=mysqli_fetch_assoc($data)){
    echo "<tr>";

      echo "<td>".$rdata3['filename']."</td>";

      echo "<td>".$rdata3['filenumber']."</td>";

      echo "</tr>";
  }

  ?>

</table>
</body>
</html>
