<?php

  $conn = mysqli_connect('localhost', 'emil','password','choker');

  if(!$conn){
    die('Connection Error');
  }

  $sql = "SELECT * FROM chokers ORDER BY name DESC";
  $result = mysqli_query($conn, $sql);

  while ($row = mysqli_fetch_assoc($result)){
    echo $row['id'] . ' ' . $row['images'];
  }

  <div class="choker_product" style="background-image: url('<?php echo $imgSrc ?>')">

  </div>
