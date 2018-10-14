<?php
session_start();
if(isset($_COOKIE['username'])){
header('Location: ../');
}
else{

?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- bulma core css -->
<link rel="icon" href="../../icon.ico">
<link rel="stylesheet" href="../bulma/css/bulma.min.css">

<!-- font awesome css + icons -->
<link rel="stylesheet" href="../fontawesome/css/all.css">
<link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css">

<link rel="stylesheet" href="../css/loginpage.css">
<link rel="stylesheet" href="../css/footer.css">
<title>MetroFocus | Forgot Password</title>


<section class="hero is-fullheight login-hero">
	<section class="hero is-dark">
		<div class="hero-head" style="background: #071425;">
			<div class="container">
				<nav class="navbar is-dark">
					<div class="navbar-brand">
						<a h" class="navbar-item" style="background: none !important;">
							<span style="font-weight: bold;">Metro</span><span style="color: #FF7100;font-weight: bold;">Focus</span>
						</a>

						<a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
							<span aria-hidden="true"></span>
							<span aria-hidden="true"></span>
							<span aria-hidden="true"></span>
						</a>
					</div>

					<div class="navbar-menu">
						<div class="navbar-start">
							<a href="../" class="navbar-item" style="background: none !important;">Home</a>
							<div class="navbar-item">
								<a href="cameraparts.php" class="navbar-item" style="background: none !important;">Camera Parts</a>
							</div>
							<div class="navbar-item">
								<a href="cameraaccessories.php" class="navbar-item" style="background: none !important;">Accessories</a>
							</div>
							<div class="navbar-item">
								<a href="faq.php" class="navbar-item" style="background: none !important;">FAQs</a>
							</div>
						</div>
						<style>
							#btnhover:hover{
								background-color: #44bfd5 !important;
							}
						</style>
						<?php 
						if(isset($_COOKIE['username'])){
						?>
						<div class="navbar-item is-paddingless is-guest">
							<a id="cart" style="color: #FF7100;text-decoration: none;" href="cart.php" class="button thickbox is-text is-nolink is-uppercase">
								<span><i class="fal fa-shopping-cart fa-lg"></i></span>
							</a>
						</div>
						<div class="navbar-item is-paddingless is-guest">
							<a style="color: #FF7100;text-decoration: none;" href="profile.php" class="button thickbox is-text is-nolink is-uppercase">
								<span class="icon is-small">
									<i class="fal fa-user"></i>
								</span>
								<span style="
								display: block;
								max-width: 200px;
								overflow: hidden;
								white-space: nowrap;
								text-overflow: ellipsis;
								">
								<?php echo $_COOKIE['username']; ?></span>
							</a>
						</div>
						<div class="navbar-item is-paddingless is-guest">
							<a id="btnhover" style="color: #FFF;text-decoration: none;" href="logout.php" class="button thickbox is-text is-nolink is-uppercase">
								<span class="icon is-small">
									<i class="fas fa-sign-out-alt"></i>
								</span>
								<span>Logout</span>
							</a>
						</div>
						<?php
						}
						else{
						?>
						<div class="navbar-item is-paddingless is-guest">
							<a style="color: #FF7100;text-decoration: none;" href="loginpage.php" class="button thickbox is-text is-nolink is-uppercase">
								<span class="icon is-small">
									<i class="fas fa-sign-in-alt"></i>
								</span>
								<span>Login</span>
							</a>
						</div>
						<span class="navbar-item is-paddingless is-guest">
							or
						</span>
						<div class="navbar-item is-paddingless is-guest">
							<a id="btnhover" style="color: #FFF;text-decoration: none;" href="signuppage.php" class="button thickbox is-text is-nolink is-uppercase">
								<span class="icon is-small">
									<i class="far fa-pen-square"></i>
								</span>
								<span>Signup</span>
							</a>
						</div>
						<?php
						}
						?>
					</div>
				</nav>
			</div>
		</div>
	</section>
	<div class="hero-body">
		<div class="container">
			<div class="columns is-multiline is-centered">
				<div class="column is-half">
					<form method="POST" name="loginform" id="loginform" onsubmit="return Forgot();">
						<h1 style="color: white" class="has-text-centered title is-cursor-pointer is-size-1-touch">
							Metro<span style="color: #FF7100">Focus</span>
						</h1>
						<div class="box">
							<div class="field">
								<label>Username</label>
								<p class="control has-icons-left has-icons-right">
									<input class="input is-rounded" id="email" name="email" type="text" placeholder="Username">
									<span class="icon is-small is-left">
										<i class="fal fa-user"></i>
									</span>
									<span class="icon is-small is-right">
										<i id="emailicon" class=""></i>
									</span>
								</p>
								<p class="help is-danger is-large" id="emailmessage"></p>
							</div>
							<button class="button is-warning is-fullwidth has-text-centered" type="submit" id="btnReset" name="btnReset">Reset</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include('../includes/footer.php'); ?>
<script src="../js/jquery.min.js"></script>
<script src="../js/sweetalert.min.js"></script>
<script src="../js/navbar-burger.js"></script>
<script>
	// var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var regex = /^[A-Za-z0-9]+(?:[ _-][A-Za-z0-9]+)*$/;
	var check = '';
	
	function emailverif(){
		$.post('../php/email.php', {email: $('#email').val()}, function(data) {
			check = data;
			if ($('#email').val() == '') {
				$('#emailmessage').html('Enter your username');
				$('#email').addClass('is-danger');
				$('#emailicon').addClass('fal fa-exclamation-triangle');
			}
			else if (regex.test($('#email').val())) {
				$('#email').removeClass('is-danger');
				$('#emailicon').removeClass('fal fa-exclamation-triangle');
				$('#emailmessage').html('');
				if (data == "Exist") {
					$('#email').addClass('is-success');
					$('#emailicon').addClass('fal fa-check');
				}
				if (data == "Not Exist") {
					$('#email').addClass('is-danger');
					$('#emailicon').addClass('fal fa-exclamation-triangle');
					$('#emailmessage').html('Username does not exist');
				}
			} else {
				$('#email').addClass('is-danger');
				$('#emailicon').addClass('fal fa-exclamation-triangle');
				$('#emailmessage').html('Invalid Username');
			}
		});
	}
	function verif(){
		if($('#email').val() != '' && regex.test($('#email').val()) && check == 'Exist'){
			var user = $('#email').val();
			$.ajax({
				url:'../php/confirmation.php',
				method:'POST',
				data:{
					fuser : user,
					type : 'NewPass'
				},
				success:function(data){
					window.location = '../pages/confirmation.php';
				}
			})
		}
	}
	$('#email').bind('input', function () {
	emailverif();
	});
	function Forgot() {
		emailverif();
		verif();
		return false;
	}
</script>
<?php
}
?>
