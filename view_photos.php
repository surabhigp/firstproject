
<?php session_start();
if(isset($_SESSION['uname']))
{
	?>
<?php
include "header.php";
?>

<?php
include  "connect.php";
$user=$_SESSION['uname'];
$qry="SELECT * FROM images WHERE user='$user' ";
$res=mysqli_query($con,$qry);

while($row_img=mysqli_num_rows($res))
{
	$ph=$row_img['img'];

?>

    <td width="290"><?php 
    echo "<img src='upload/$ph' height='100' width='100' >" ;
    ?> 
    </td>
	<?php
	}
	?>
  </tr>
</table>
               <div class="clear h10"></div>

<div id="contact_form" class="col_2 right">
        	<h3>Upload More Photos </h3>
            <p><a href="upload.php">Click Here !</a></p>
            </div>
                           <div class="clear h10"></div>

<?php
}
else
{
header("location:login.php");
}
?>
<?php
include "footer.php";
?>

