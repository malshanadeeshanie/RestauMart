<!DOCTYPE html>
<html lang="en">
<head>
	<title>My View restaumart</title>
</head>
<body>

<?php
if(!isset($tbl_user)){
?>
<p>ERROR</p>
<?php
} else {
	foreach ($tbl_user as $row) {
?>
<div>

		<?php echo 'Firstname : ';?><?=$row['firstname']?><br>
		<?php echo 'Lastname : ';?><?=$row['lastname']?><br>
		<?php echo 'Address : ';?><?=$row['address']?><br>
		<?php echo 'Email : ';?><?=$row['email']?><br>
		<?php echo 'Contact Number : ';?><?=$row['contactnumber']?><br>
		<?php echo 'Added Date : ';?><?=$row['date_added']?><br>
</div>
<hr>
<?php
	}
}
?>









</body>
</html>