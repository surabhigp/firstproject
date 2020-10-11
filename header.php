<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Photo Gallery</title>
<meta name="keywords" content="nightlight, free template, pink, purple, templatemo, html css" />
<meta name="description" content="NightLight is a free template from templatemo." />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<link href="js/highlightNav.js" type="text/javascript"></script>
<link href="js/jquery-latest.js" type="text/javascript"></script>
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='js/basic.js'></script>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/JavaScript" src="js/slimbox2.js"></script> 

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>


</head>
<body>
<div id="templatemo_body_wrapper">
<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	<div id="site_title"><a href="http://www.templatemo.com/preview/templatemo_373_nightlight">Photo Gallery</a></div>
       <!--> <div><a href="http://tr.onlyimage.com" title="Ücretsiz resim"  class="templatemo_header_bg" target="_blank"><img src="images/top_bg.png" title="Ücretsiz resim" alt="Ücretsiz resim from tr.onlyimage.com" /></a></div>-->
    </div>
    <div id="templatemo_menu">
    	<ul>
            <li class="selected"><a href="index.php">Home</a></li>
      <?php
if(isset($_SESSION['uname'])){?>
            <li><a href='view_photos.php'>View Photos</a></li>
            <?php }?>
            <li><a href="upload.php">Upload  Photos</a></li>
 
      <?php
if(isset($_SESSION['uname'])) { ?>

            <li><a href='logout.php'>Logout</a></li>
            <?php }
			else {
			?>

            <li><a href="create_account.php">Create Account</a></li>
            <?php
			} ?>
           <!-- <li><a href="contact.php">Contact</a></li>
-->        </ul>
        <div id="templatemo_search">
           
        </div>
    </div>
 


</body>