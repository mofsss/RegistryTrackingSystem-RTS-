<?php

require_once 'initial.php';

$sql="SELECT * FROM rdata2";

$data=mysqli_query($con,$sql);

?>

<html>
<head>
  <title> International Organisations/Project </title>
</head>
<body style="text-align:center;
background-image:url(background.gif);
font-family:georgia;
font-size:20px;">

<body>
<h1>International Organisations/Project</h1>
  <table width="600" border="1" cellpadding="1" cellspacing="1">
    <tr>
      <th>filename</th>
      <th>filenumber</th>
      <tr>
  <?php
  while($rdata2=mysqli_fetch_assoc($data)){
    echo "<tr>";

      echo "<td>".$rdata2['filename']."</td>";

      echo "<td>".$rdata2['filenumber']."</td>";

      echo "</tr>";
  }

  ?>

</table>
</body>
</html>
