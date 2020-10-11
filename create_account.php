
<script type="application/javascript">
function passwordStrength(password,passwordStrength,errorField)
{
var desc = new Array();
desc[0] = "Password Strenght: <b> Very Weak</b>";
desc[1] = "Password Strenght: <b> Weak</b>";
desc[2] = "Password Strenght: <b> Better</b>";
desc[3] = "Password Strenght: <b> Medium</b>";
desc[4] = "Password Strenght: <b> Strong</b>";
desc[5] = "Password Strenght: <b> Strongest</b>";

var score   = 0;

//if password bigger than 6 give 1 point
if (password.length > 6) score++;

//if password has both lower and uppercase characters give 1 point
if ( ( password.match(/[a-z]/) ) && ( password.match(/[A-Z]/) ) ) score++;

//if password has at least one number give 1 point
if (password.match(/\d+/)) score++;

//if password has at least one special caracther give 1 point
if ( password.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) ) score++;

//if password bigger than 12 give another 1 point
if (password.length > 12) score++;

passwordStrength.innerHTML = desc[score];
passwordStrength.className = "strength" + score;
}
</script>
<script type="text/javascript">
function validateform()
//Full name
{
var n1=document.forms['join']['fullname'].value;
if(n1==null||n1=="")
{
alert("Enter your full name");
return false;
}
//username
var un=document.forms['join']['username'].value;
if(un==null||un=="")
{
alert("Enter your username");return false;
}
//Password
var pw=document.forms['join']['pswd'].value;
if(pw==null||pw=="")
{
alert("Please enter your Password");return false;
}
var cpw=document.forms['join']['cpwd'].value;
if(cpw==null||pw==""||cpw!=pw)
{
alert("Password Mismatch. Retype the same password which you entered in 'PASSWORD' Field");
return false;
}
//Email
var e=document.forms['join']['mail'].value;
var atpos=e.indexOf("@");
var dotpos=e.lastIndexOf(".");
if(e==null||e=="")
{
alert("Enter your Email Id");
return false;
}
else if(atpos<1 ||dotpos<atpos+2 || dotpos+2>=e.length)
{
alert("Invalid Email Format,Correct Format is:example@example.domain");
return false;
}
}
</script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/JavaScript" src="js/slimbox2.js"></script> 

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<?php
include "connect.php";
if(isset($_POST['Submit']))
{
$fname=$_REQUEST['fullname'];
$uname=$_REQUEST['username'];
$pass=$_REQUEST['pswd'];
$gender=$_REQUEST['gender'];
$mail_id=$_REQUEST['mail'];
$status=1;
if($sql = mysqli_query($con,"SELECT * FROM `signup` WHERE `username` = '$uname'"));

        if(mysqli_num_rows($sql) > 0) 
		{
			?>
			<script >
            alert("Username is not available. Please pick another one!");
			</script>
            <?php
            //exit();
			
			
		}
		else
		{
$qry_sign="INSERT INTO signup(fullname,username,password,gender,email,status)VALUES ('$fname','$uname','$pass','$gender','$mail_id','$status')";
$result = mysqli_query($con,$qry_sign);
$idq=mysqli_insert_id();
//echo $idq=mysql_insert_id();
$qry_login="INSERT INTO login(uname,pswd,id_signup) VALUES ('$uname','$pass','$idq')";
mysqli_query($con,$qry_login);
$qry_img="INSERT INTO images(id_signup) VALUES ('$idq')";
mysqli_query($con,$qry_img);
header("location:login.php");
}

 
		}

?>

   
   <?php
 include "header.php";
 
 ?>    
    <div id="templatemo_main">
    	
        <h1>Welcome Guest - Create your free Account Here!</h1>
   
        <div class="col_2 left">
	        <img class="img_border" src="images/templatemo_image_01.jpg" alt="image 1" />
    </div>
        <div id="contact_form" class="col_2 right">
        	<h3>Create Account</h3>
            <form method="post" name="join" action="#">
           	  <div class="col_4 left">
                	<label for="fullname">Full Name:</label>
           	        <input name="fullname" type="text" class="required input_field" id="fullname" maxlength="40" />
           	  </div>
                <div class="col_4 right">
                  <label for="username">Username:</label>
                    <input name="username" type="text" class="required input_field" id="username" maxlength="40" />
				</div>
                <div class="clear h10"></div>
              <div class="col_4 left">
           	  	<label for="phone">Password:</label>
                  <input name="pswd" type="password" class="required input_field" id="pswd" maxlength="20" onBlur="passwordStrength(this.value,document.getElementById('strendth'),document.getElementById('passError'))" value=""/><span id="passError"></span><font color="#FF0000"><span id="strendth"></span></font>
			  </div>
  <div class="col_4 right">
	                <label for="cpwd">Confirm Password:</label>
                <input name="cpwd" type="password" class="required input_field" id="cpwd" maxlength="40" />
			  </div>
                 <div class="clear h10"></div>
               <div class="col_4 left">
           	  	<label for="phone">Email id:</label>
                  <input name="mail" type="text" class="required input_field" id="mail" maxlength="20" />
			  </div>
                <div class="col_4 right" >
	                <label for="cpwd">Gender:</label>
                  <input name="gender" type="radio"  value="male" checked="checked"  />
	  <span class="style4"><font color="#FFFFFF">Male</font></span></span> 
      <input name="gender" type="radio" value="female" />
      <span class="style7"><font color="#FFFFFF">Female</font></span>
				</div>
                <div class="clear h10"></div>
              <p>
                <input type="submit" name="Submit" value="Register" onClick="return validateform()" class="more left" />
              </p>
               <div class="clear h10"></div>
               Already Have n Account? <a href="login.php">Login Here</a>
            </form>
		</div>
        
        <div class="clear"></div>
        <hr />
        
      
    </div>
</div>
</div>
        </form>

