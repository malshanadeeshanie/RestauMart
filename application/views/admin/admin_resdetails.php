<!DOCTYPE html>
<html lang="en">
<head>
	<title>My View restaumart</title>
</head>
<body>

<?php
if(!isset($tbl_manager)){
?>
<p>ERROR</p>
<?php
} else {
	foreach ($tbl_manager as $row) {
?>
<div>

		<?php echo 'Firstname : ';?><?=$row['firstname']?><br>
		<?php echo 'Lastname : ';?><?=$row['lastname']?><br>
		<?php echo 'Address : ';?><?=$row['address']?><br>
		<?php echo 'Email : ';?><?=$row['email']?><br>
		<?php echo 'Contact Number : ';?><?=$row['contactnumber']?><br>
		<?php echo 'Restaurant Name : ';?><?=$row['Res_Name']?><br>
		<?php echo 'Restaurant Address : ';?><?=$row['Res_Address']?><br>
		<?php echo 'Restaurant Email : ';?><?=$row['Res_Email']?><br>
		<?php echo 'Restaurant Contact : ';?><?=$row['Res_Contact']?><br>
		<?php echo 'Restaurant zip code : ';?><?=$row['Zip']?><br>
		<?php echo 'Restaurant City : ';?><?=$row['City']?><br>
		<?php echo 'Restaurant State : ';?><?=$row['State']?><br>
		<?php echo 'Added Date : ';?><?=$row['date_added']?><br>
</div>
<hr>
<?php
	}
}
?>









</body>
</html>