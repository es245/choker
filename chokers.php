<?php

  $conn = mysqli_connect('localhost', 'emil','password','choker');

  if(!$conn){
    die('Connection Error');
  }

  $sql = "SELECT * FROM chokers ORDER BY id DESC LIMIT 12";

  $result = mysqli_query($conn, $sql);
  $numrows = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Abel|Josefin+Sans|Playfair+Display:400,700|Yanone+Kaffeesatz|Dancing+Script|Questrial|Oranienbaum" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <div class="wrapper">
      <?php require_once 'ham-menu.php';?>
      <div class="main">
        <?php require_once 'header.php';?>
        <div class="chokers">
          <?php while($row = mysqli_fetch_assoc($result)){
            $imgSrc = $row['images'];
            $id = $row['id'];?>

            <a href="choker_page.php?id=<?php echo $id?>" class="product">
              <div class="overlay" style="background-image: url('<?php echo $imgSrc ?>')">
                <div class="overlay2">
                  <div class="product_name">
                    <?php echo $row['name']?>
                  </div>
                </div>
              </div>
            </a>
            <?php }?>
        </div>

      </div>

      <div class="section2" data-parallax="scroll" data-image-src="http://i.amz.mshcdn.com/wU2pTfD2NMzPl6IMP0qjQ1tEF7A=/http%3A%2F%2Fa.amz.mshcdn.com%2Fwp-content%2Fuploads%2F2016%2F02%2FChoker-T-27.jpg" data-speed="0.8">
        <h1>Place Holder Text.</h1>
      </div>

      <?php require_once 'footer.php';?>
      <div class="message"><p>Designed by Emil Sadikoski</p></div>

    </div>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="parallax.js"></script>
    <script type="text/javascript">
      $('.mast').parallax({imageSrc: 'choker.jpg'});
      $('.section2').parallax({imageSrc: 'http://i.amz.mshcdn.com/wU2pTfD2NMzPl6IMP0qjQ1tEF7A=/http%3A%2F%2Fa.amz.mshcdn.com%2Fwp-content%2Fuploads%2F2016%2F02%2FChoker-T-27.jpg'});
    </script>

    <script type="text/javascript">
      var vh = $(window).height();
      //$('.main').css('height', vh + 'px');
      var nh = $('.navi').height();
      $('.mast').css('height', (vh-nh) + 'px');
      //$('.section2').css('height', vh/2.5 + 'px');
      //$('.footer').css('height', vh/3 + 'px');
    </script>

    <script type="text/javascript">
      $('.ham-menu-button').click(function(){
        $('.ham-menu').css('margin', '0 auto auto 0%');
      })

      $('.closer').click(function(){
        $('.ham-menu').css('margin','0 auto auto -60%');
      })
    </script>
  </body>
</html>
