﻿<!DOCTYPE html>

<html>
	<head>
		<title>Samfa Craftman</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<script type="text/javascript" src="../js/jquery-1.10.2.js"></script>
		<script type="text/javascript" src="https://www.google.com/cse/tools/onthefly?form=searchbox_demo&lang="></script>
		<script type="text/javascript" src="modernizr.custom.79639.js"></script>
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
		<script src="../js/jquery-1.11.0.min.js"></script>
		<script src="../js/lightbox.min.js"></script>
		<link href="../css/lightbox.css" rel="stylesheet" />

		<style type="text/css">
			hr.style-head:after{
					content: 'Choose your style!';
			}
			#menu4{font-weight:bold;}
		</style>

</head>

	<body>
	    <div id="container">
	    	<div class="bg" id="item_51"></div>
	    	
	    	<div data-import="header.html">กรุณารอซักครู่...</div>
			
			<div id="DATA">

				<div id="blog" class="order">
					<div id="Style">
						<hr class="style-head" >
						<div class="selectHead" style="margin-left:350px;"><a href="madetocatalogue.html">Contemporary</a></div>
						<hr class="selectLine">
						<div id="order2">
							<table>
							    <tbody>
                                		<form action="detail-action.php" method="post" name="form1">
									<tr>
                                    <?php
									
									include('../include/config.inc.php');
    									mysql_query("SET NAMES utf8"); // กำหนด charset ให้ฐานข้อมูล เพื่ออ่านภาษาไทย

									$sql="select name from contemporary";
									
									$result = mysql_query ($sql);
									
									$total=0;

									while ( $row= mysql_fetch_array ( $result ) )
									{
										$n_door=$row["name"];
									
									  $output = '<td>
											<a href="../pic_door_contemporary/'.$n_door.'.jpg" data-lightbox="image-1" data-title="door">
												<img class="model" src="../pic_door_contemporary/'.$n_door.'.jpg" alt="door" >
											</a>
											<label><input type="radio" name="door" value="'.$n_door.'"><span>'.$n_door.'</span></label>
										</td>';
										echo $output;
										$total++;
										
										if($total%5==0 ){
											
											echo '</tr>';
											
										}
									}
									
									?>
                                    
			                        </tr>
			                    </tbody>
							</table>
                            </form>
						</div>
						<hr class="style-End">
						<div id="footer">
							<a href="order.html">< Back</a>
                            <a href="JavaScript:fncSubmit()">Next ></a>
			        	</div>
                        
		        	</div><!--/*end pageStyle*/-->

			  	</div><!--/*end blog*/-->
				<div id="footerPan">
					<p>
						<a href="profile.html">COMPANY PROFILE</a> | 
						<a href="woodis.html">WOOD IS?</a> | 
						<a href="gallery.html">GALLERY</a> | 
						<a href="order.html">ORDER US!</a> | 
						<a href="contact.html">CONTACTS US</a>
						<br/>
						<span>Copyright &copy; 2015 Samfah Craftman Co., Ltd, All rights reserved.</span>
					</p>
		        </div><!--/*end footer*/-->
			</div><!--/*end DATA*/-->

		</div><!--/*end container*/-->
</body>
	<script language="javascript"><!--/*ClearText*/-->
		function clearText(thefield){
		if (thefield.defaultValue==thefield.value)
		thefield.value = ""
		} 
		function fncSubmit()
		{
			var door = document.getElementsByName("door");
			var found = 1;
			for (var i = 0; i < door.length; i++) {       
				if (door[i].checked) {
					found = 0;
					document.form1.submit();
					break;
				}
			}
				if(found == 1){
     				alert('Please Choose Door your style.');
					return flase;
   				}
		}
		
		
		
	</script>

</html>