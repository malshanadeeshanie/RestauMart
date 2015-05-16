<?php if($this->session->userdata('userID')){ ?>
<p>You are Logged my site</p>


 

<p><a href="<?=base_url()?>user/logout">Logout</a></p>
<?php } else { ?>
<p><a href="<?=base_url()?>user/login">Login</a></p>
<p><a href="<?=base_url()?>user/register">Register</a></p>
<?php } ?>

