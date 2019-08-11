<?php if (isset($_SESSION['user']['username'])) { ?>
	<div class="logged_in_info">
		<span>welcome <?php echo $_SESSION['user']['username'] ?></span>
		|
		<span><a href="logout.php">logout</a></span>
	</div>
<?php }else{ ?>
	<div class="banner">
		<div class="welcome_msg">
			<h1>What's Rock & Roll!!</h1>
			<p> 
			    Rock and roll music, if you like it,<br>
			     if you feel it, you can't help but move to it. <br>
			    That's what happens to me. I can't help it.<br>
				<span>~ Elvis Presley</span>
			</p>
			<a href="register.php" class="btn">Join us!</a>
		</div>

		<div class="login_div">
			<form action="<?php echo BASE_URL . 'index.php'; ?>" method="post" id="myform" >
				<h2>Login</h2>
				<div style="width: 60%; margin: 0px auto;">
					<?php include(ROOT_PATH . '/includes/errors.php') ?>
				</div>
				<input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">
				<input type="password" name="password"  placeholder="Password"> 
				<button class="btn" type="submit" name="login_btn">Sign in</button>
			</form>
			<p align="center"><input form="myform" type="checkbox" name="remember" value="Bike">Remember<br><p>

		</div>
	</div>
<?php } ?>
