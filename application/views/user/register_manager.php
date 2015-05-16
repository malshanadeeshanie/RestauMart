<h2>Register Manager</h2>


<?php echo validation_errors(); ?>
<div style="background:red;color:white;">

</div>

<?php echo form_open(base_url().'manager/register'); ?>



<p>First Name : <input type="text" name="firstname" required data-validation-required-message="Please enter your first name."/></p>
<p>Last Name : <input type="text" name="lastname" required data-validation-required-message="Please enter your last name." /></p>
<p>Restaurant Name : <input type="text" name="restaurantname" required data-validation-required-message="Please enter your reataurant name." /></p>
<p>Location : <input type="text" name="location" required data-validation-required-message="Please enter the location of the restaurant." /></p>
<p>Address : <input type="text" name="address" required data-validation-required-message="Please enter your address." /></p>
<p>Email : <input type="text" name="email" value="<?php echo set_value('email'); ?>" required data-validation-required-message="Please enter your email." /></p>
<p>Username : <input type="text" name="username" value="<?php echo set_value('username'); ?>" required data-validation-required-message="Please enter your username."/></p>
<p>Password : <input type="password" name="password" required data-validation-required-message="Please enter your password." /></p>
<p><?php echo form_submit('','Register') ?></p>
<?php echo form_close(); ?>




