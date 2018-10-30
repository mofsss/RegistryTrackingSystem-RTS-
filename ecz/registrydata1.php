<?php

require_once 'initial.php';

$sql="SELECT * FROM rdata1";

$data=mysqli_query($con,$sql);

?>

<html>
<head>
  <title>Circulars/Hotels/Confidential Printing Services</title>
</head>
<body style="text-align:center;
background-image:url(background.gif);
font-family:georgia;
font-size:20px;">


<body>
  <h1>Circulars/Hotels/Confidential Printing Services
  <table width="600" border="1" cellpadding="1" cellspacing="1">
    <tr>
      <th>filename</th>
      <th>filenumber</th>
      <tr>
  <?php
  while($rdata1=mysqli_fetch_assoc($data)){
    echo "<tr>";

      echo "<td>".$rdata1['filename1']."</td>";

      echo "<td>".$rdata1['filenumber1']."</td>";

      echo "</tr>";
  }

  ?>

</table>
</body>
</html>
