<?php
session_start();
?>
<script type="text/javascript">
function validate_login()
{
var un=document.forms['login']['un'].value;
if(un==""||un==null)
{
alert("Enter your Username to continue.");
return false;
}
var pw=document.forms['login']['pw'].value;
if(pw==""||pw==null)
{
alert("Enter your Password to continue.");
return false;
}

}
</script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="js/slimbox2.js"></script> 

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
<?php
include ("connect.php");
	if(isset($_POST['login']))
	{
	$name=$_REQUEST['un'];
	 $pass=$_REQUEST['pw'];
		$qry="SELECT * FROM login WHERE uname='$name' AND pswd='$pass'";
		 $qry2=mysqli_query($con,$qry);
		$qry3=mysqli_fetch_row($qry2);
		//print_r($qry3);
			
				if($qry3==true)
						{
				$_SESSION['uname']=$name;
				$_SESSION['paswd']=$pass;
				     header("location:upload.php");
					}
					 else
					   {
						   ?>
                           <script>
						alert ("Username / Password Error");
				              </script>	
								<?php }
					
	}
	?>

      <?php
 include "header.php";
 
 ?>
    
    <div id="templatemo_main">
    	<?php

echo '<h1>Please Login to Upload your photos</h1>';
 
 
 ?>
        
        
        <div class="col_2 left">
	        <img class="img_border" src="images/templatemo_image_01.jpg" alt="image 1" />
    </div>
        <div id="contact_form" class="col_2 right">
        	<h3>Enter Your Username and Password </h3>
            <form method="post" name="login" action="#">
           	  <div class="col_4 left">
                	<label for="fullname">Username:</label>
           	        <input name="un" type="text" class="required input_field" id="un" maxlength="40" />
           	  </div>
                <div class="col_4 right">
                  <label for="email">Passsword:</label>
                  <input name="pw" type="password" class="required input_field" id="pw" maxlength="40" />
                </div>
               
               <div class="clear h10"></div>
              <p>
                <input type="submit" name="login" value="Login" class="more left" onclick="return validate_login()" />
              </p>
               <div class="clear h10"></div>
               New users <a href="create_account.php">Register Here</a>
            
            </form>
		</div>
        
        <div class="clear"></div>
        <hr />
        
   
    </div>
</div>
</div>
</body>
</html>