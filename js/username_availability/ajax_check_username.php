<?php
include('conn.php');
//Include The Database Connection File 

if(isset($_POST['username']))//If a username has been submitted 
{
$username = mysql_real_escape_string($_POST['username']);//Some clean up :)

$check_for_username = mysql_query("SELECT id FROM signup
 WHERE username='$username'");
//Query to check if username is available or not 

if(mysql_num_rows($check_for_username))
{
echo 'Not Avail';//If there is a  record match in the Database - Not Available
}
else
{
echo 'avail';//No Record Found - Username is available 
}

}

?>