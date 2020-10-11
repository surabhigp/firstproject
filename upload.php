<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>

<script type="text/javascript">
$(document).ready(function() {	

		var id = '#dialog';
	
		//Get the screen height and width
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
	
		//Set heigth and width to mask to fill up the whole screen
		$('#mask').css({'width':maskWidth,'height':maskHeight});
		
		//transition effect		
		$('#mask').fadeIn(1000);	
		$('#mask').fadeTo("slow",0.8);	
	
		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();
              
		//Set the popup window to center
		$(id).css('top',  winH/2-$(id).height()/2);
		$(id).css('left', winW/2-$(id).width()/2);
	
		//transition effect
		$(id).fadeIn(100); 	
	
	//if close button is clicked
	$('.window .close').click(function (e) {
		//Cancel the link behavior
		e.preventDefault();
		
		$('#mask').hide();
		$('.window').hide();
	});		
	
	//if mask is clicked
	$('#mask').click(function () {
		$(this).hide();
		$('.window').hide();
	});		
	
});

</script>

<style type="text/css">
body {

}

a {color:#333; text-decoration:none}
a:hover {color:#ccc; text-decoration:none}

#mask {
  position:absolute;
  left:0;
  top:0;
  z-index:9000;
  background-color:#000;
  display:none;
}  
#boxes .window {
		background-image:url(images/download-wood-backgrounds-oliuss-dark-filter-room-black-resolutions.jpg);background-repeat:no-repeat;

  position:absolute;
  left:0;
  top:0;
  width:440px;
  height:200px;
  display:none;
  z-index:9999;
  padding:20px;
}
#boxes #dialog {
  width:375px; 
  height:203px;
  padding:10px;
  background-color:#ffffff;
}
</style>

<?php
session_start();
if(isset($_SESSION['uname']))
{
?>
<script type="application/javascript">
function img_up(){var fup = document.getElementById('upload');var fileName = fup.value;var ext = fileName.substring(fileName.lastIndexOf('.') + 1);if(ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG" || ext== "PNG" ||  ext=="png"){return true;}else{alert("Image format not supported!");fup.focus();return false;}}</script>
<?php
include  "connect.php";
$user=$_SESSION['uname'];
//echo $user;
if(isset($_POST['Submit']))
{
	
	$photo=$_FILES['upload']['name'];
	move_uploaded_file($_FILES["upload"]["tmp_name"],"upload/".$_FILES["upload"]["name"]);
	
	$query="INSERT INTO images(user,img) VALUES ('$user','$photo')";
	//mysql_query($query);
	if(mysqli_query($con,$query))
	{
		header("location:view_photos.php");
		//Print "Data Stored Successfully";
		//echo $query;
	}
	else
	{
		echo "error";
		//print mysql_error();
	}
}
	


?>


    
   <?php
    include "header.php";
 
 ?>
    
    
    <div id="templatemo_main">
        <h1>Upload Your Own Photos</h1>
        <div class="col_2 left">
	        <img class="img_border" src="images/templatemo_image_01.jpg" alt="image 1" />
    </div>
        <div id="contact_form" class="col_2 right">
       	  <h3>Upload </h3>
            <form action="#" method="post" enctype="multipart/form-data" name="upload">
              <div class="clear h10"></div>
           	  <label for="contact"></label>
                <input type="file" name="upload" class="required input_field" id="upload" />
               <div class="clear h10"></div>
           	  <p>
           	    <input type="submit" name="Submit" value="Upload" onclick="return img_up()" class="more left" />
           	  </p>
          </form>
               <div class="clear h10"></div>
            </form>
		</div>
        <div class="clear"></div>
        <hr />
        
        <div id="boxes">
<div style="top: 199.5px; left: 551.5px; display: none;" id="dialog" class="window">
<h1><font color="#FF0000"><p align="center"> Remember !</p> </font> </h1>
     

<h4><font color="#FFFFFF">hi, <?php echo $user; ?> ,<p> Currently We are Supporting Only  ".png" , ".jpeg/ .jpg" Image Formats .</b></p></font></h4>
<a href="#" class="close"><h6><Okay, I Got It !</h6></a>

</div>
<!-- Mask to cover the whole screen -->
<div style="width: 1478px; height: 602px; display: none; opacity: 0.8;" id="mask"></div>
</div>
        
      
        
        
        
        <div class="clear"></div>
    </div>
    <?php
    include "footer.php";
 
 ?>
</div>
</div>
<?php
}
else
{
header("location:login.php");
}
?>
</body>
</html>