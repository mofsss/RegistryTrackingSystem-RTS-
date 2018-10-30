<?php

require_once 'initial.php';

$sql="SELECT * FROM rdata4";

$data=mysqli_query($con,$sql);

?>

<html>
<head>
  <title>ManPower Dev./Recruitment$Placement/Conditions Of Service/Establishment/Housing </title>
</head>
<body style="text-align:center;
background-image:url(background.gif);
font-family:georgia;
font-size:20px;">

<body>
  <h1>ManPower Dev./Recruitment$Placement/Conditions Of Service/Establishment/Housing</h1>
  <table width="600" border="1" cellpadding="1" cellspacing="1">
    <tr>
      <th>filename</th>
      <th>filenumber</th>
      <tr>
  <?php
  while($rdata4=mysqli_fetch_assoc($data)){
    echo "<tr>";

      echo "<td>".$rdata4['filename']."</td>";

      echo "<td>".$rdata4['filenumber']."</td>";

      echo "</tr>";
  }

  ?>

</table>
</body>
</html>
