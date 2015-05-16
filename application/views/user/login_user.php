
<h1>Login</h1>
<?php if($error==1)
        {
           	echo '<p>username / password did not match</p>';
        }
?>
<form action ="<?php base_url()?>login" method="post">
<p>Username : <input type="text" name="username" placeholder="Username" required data-validation-required-message="Please enter your username." /> </p>
<p>Password : <input type="password"  name="password" placeholder="Password" required data-validation-required-message="Please enter your password." /> </p>
<p><input type="submit" value="Login" /> </p>
</form>

