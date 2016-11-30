<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Abel|Josefin+Sans|Playfair+Display:400,700|Yanone+Kaffeesatz|Dancing+Script|Questrial|Oranienbaum|Satisfy|Lato:100" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  <div class="wrapper">
    <?php require_once 'ham-menu.php';?>
    <div class="main">
      <?php require_once 'header.php';?>

      <div class="mast" data-parallax="scroll" data-image-src="choker.jpg" data-speed="0.8">
        <h1>Every Season is Choker Season.</h1>
      </div>
    </div>

    <div class="key-points">
      <div class="point point1">
        <h1>Made with care and <span>love.</span></h1>
        <img src="https://s-media-cache-ak0.pinimg.com/564x/42/21/a0/4221a02e7c60dd1dc34cee6d84e1c6bd.jpg" alt="">
      </div>

      <div class="point point1">
        <h1>Different styles and colors.</h1>
        <img src="https://meridianave.com/wp-content/uploads/2016/05/EvilEyeChoker.jpg" alt="">
      </div>

      <div class="point point1">
        <h1>Custom-made to your liking.</h1>
        <img src="https://images.bigcartel.com/product_images/183205684/IMG_5606.jpg?auto=format&fit=max&w=500" alt="">
      </div>

    </div>

    <div class="section2" data-parallax="scroll" data-image-src="http://i.amz.mshcdn.com/wU2pTfD2NMzPl6IMP0qjQ1tEF7A=/http%3A%2F%2Fa.amz.mshcdn.com%2Fwp-content%2Fuploads%2F2016%2F02%2FChoker-T-27.jpg" data-speed="0.9">
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
    $('.main').css('height', vh + 'px');
    var nh = $('.navi').height();
    $('.mast').css('height', ((vh-nh)-50) + 'px');
    //$('.section2').css('height', vh/2.5 + 'px');
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
