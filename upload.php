<?php

  error_reporting(E_ALL);

  $conn = mysqli_connect('localhost', 'emil','password','choker');

  if(!$conn){
    die('Connection Error');
  }

  else{

    $url = "admin.html";

    if (isset($_POST['choker_name'])) {
      $name = $_POST['choker_name'];
    }
    else {
      echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
    }

    if (isset($_POST['choker_desc'])) {
      $desc = $_POST['choker_desc'];
    }
    else {
      echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
    }

    if (isset($_POST['choker_images'])) {
      $images = $_POST['choker_images'];
    }
    else {
      echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
    }

    if (isset($_POST['choker_price'])) {
      $price = $_POST['choker_price'];
    }
    else {
      echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
    }

    $alty = $_POST['alty'];

    $sql = "INSERT INTO chokers (id, name, description, images, price, availability) VALUES (NULL, '$name', '$desc', '$images', '$price', '$alty')";

    $query = mysqli_query($conn, $sql);//or die(mysql_error());
    echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';

  }




?>
