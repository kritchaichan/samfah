<?php
// session_start();

require_once ('../app/config.inc.php');

$doorsQuery = $objCon->query("
    SELECT
    picture_door.Picture_Door_ID,
    picture_door.Picture_Door_Name,
	 picture_door.Picture_Door_Type,
    COUNT(picture_door_like.LIKE_ID) As likes

    FROM picture_door

    LEFT JOIN picture_door_like
    ON picture_door.Picture_Door_ID = picture_door_like.Picture_Door_ID
	
	WHERE Picture_Door_Type = 'Classic'

    GROUP BY picture_door.Picture_Door_Name

");

while($row = $doorsQuery->fetch_object()){
  $doors[] = $row;
}

//echo '<pre>',print_r($articles,true),'</pre>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>ORDER US</title>

  <!-- Bootstrap  -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">


  <!-- CSS  -->
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/order.css">
  <!-- Lightbox CSS -->
  <link rel="stylesheet" type="text/css" href="../assets/css/lightbox.min.css">
  <!-- ICON  -->
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<style>
</style>

</head>
<script language="JavaScript">

/*$(document).ready(function(){
	$("#btn_likes").click(function(){

			$.post("order-like.php", { 
			data1: $("#PicTYPE").val(), 
			data2: $("#PicID").val()}, 
				function(result){
					$("#likes").html(result);
				}
			);

		});
	});*/
	
	window.onload = function() {
    if (window.jQuery) {  
        // jQuery is loaded  
        alert("Yeah!");
    } else {
        // jQuery is not loaded
        alert("Doesn't Work");
    }
</script>	
<body>
<div id="main-order">
  <div class="slide order" id="second">
    <section id="page-order" data-background-image="../images/background/welcome.jpg">
      <div class="container-order">
          <div class="box-catalog">
            <a href="" class="arrow-btn pull-left"><span class="glyphicon glyphicon-menu-left"></span></a>
            CLASSIC CATALOGUE
            <a href="" class="arrow-btn pull-right"><span class="glyphicon glyphicon-menu-right"></span></a>
          </div>
          <div class="grid1"><!-- gird1-->
            <?php foreach ($doors as $door): ?>
            <div class="grid-item"><!-- gird-item -->
              <div class="header-gallery"><!-- header-gallery -->
              <?php if($door->Picture_Door_Type == "Classic"){$path_door  = '../images/pic_door_classic/'.$door->Picture_Door_Name.'.jpg';
            }?>
                <a href="<?=$path_door?>" data-lightbox="image-1" data-title="<?php echo $door->Picture_Door_Name; ?>"><img src="<?=$path_door?>" alt="door" ></a>
              </div><!-- /End header-gallery -->
              <div class="footer-gallery"><!-- /footer-gallery -->
                <a href="#" id="btn_likes"><span id"likes"><?php echo $door->likes; ?></span><span class="glyphicon glyphicon-heart" aria-hidden="true"></span></a>
                <a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
              </div><!-- /End footer-gallery -->
            </div><!-- /End gird-item -->
            <input type="hidden" id="PicTYPE" value="picture_door" />
            <input type="hidden" id="PicID" value="<?php echo $door->Picture_Door_ID; ?>" />
            <?php endforeach; ?>

          </div>   
        </div>
      </div><!-- /.container -->  
    </section><!-- /#page-top -->
    <!-- Page Top Section  End -->  


</body>

<script>
  $('.grid1').masonry({
  itemSelector: '.grid-item',
   columnWidth: 25
  });
</script>


<!-- jQuery Library -->
<script type="text/javascript" src="../assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery.js"></script>
<!-- Modernizr js -->
<script type="text/javascript" src="../assets/js/modernizr-2.8.0.min.js"></script>
<!-- Plugins -->
<script type="text/javascript" src="../assets/js/plugins.js"></script>
<!-- Custom JavaScript Functions -->
<script type="text/javascript" src="../assets/js/functions.js"></script>
<!-- Custom JavaScript Functions -->
<script type="text/javascript" src="../assets/js/masonry.pkgd.min.js"></script>
<!-- Masonry js -->
<script src="../assets/js/lightbox.min.js"></script>
<script src="../assets/js/lightbox-plus-jquery.min.js"></script>
<!-- Lightbox js -->
<script>
  $('#color').hide();
  $('#style').hide();
</script>

</html>