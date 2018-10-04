<?php
session_start();
include '../includes/db.php';
$user = $_COOKIE['email'];
if(isset($_COOKIE['email'])){
	$user = $_COOKIE['email'];
	$sql2 = mysqli_query($con,"SELECT SUM(quantity) FROM cart WHERE user = '$user'");
	$badge = mysqli_fetch_array($sql2);
}
if(!isset($_COOKIE['username'])){
	header('Location: ../');
}
$sql = mysqli_query($con,"SELECT * FROM appointment WHERE username = '$user'");

?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- bulma core css -->
<link rel="icon" href="../../icon.ico">
<link rel="stylesheet" href="../bulma/css/bulma.min.css">

<!-- font awesome css + icons -->
<link rel="stylesheet" href="../fontawesome/css/all.css">
<link rel="stylesheet" href="../fontawesome/css/fontawesome.css">

<link rel="stylesheet" href="../css/footer.css">
<link rel="stylesheet" href="../css/profile.css">
<title>MetroFocus | Profile</title>
<link rel="stylesheet" href="../node_modules/bulma-extensions/bulma-badge/dist/css/bulma-badge.min.css">
<section class="hero is-primary">
	<section class="hero is-dark">
		<div class="hero-head" style="background: #071425;">
			<div class="container">
				<nav class="navbar is-dark">
					<div class="navbar-brand">
						<a href="../" class="navbar-item" style="background: none !important;">
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
							#btnhover:hover {
								background-color: #44bfd5 !important;
							}
						</style>
						<?php
						if(isset($_COOKIE['username'])){
						?>
						<div class="navbar-item is-paddingless is-guest">
							<span id="badge" class="badge is-badge-warning is-badge-left" data-badge="<?php echo $badge[0] ?>">
								<a id="cart" style="color: #FF7100;text-decoration: none;" href="cart.php" class="button thickbox is-text is-nolink is-uppercase">
									<span><i class="fal fa-shopping-cart fa-lg"></i></span>
								</a>
							</span>
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
			<div class="columns is-mobile is-multiline">
				<div class="column is-2">
					<figure class="card imageFade image">
						<img src="../assets/img/profile.jpg" alt="Profile Picture" style="min-width: 70px;min-height: 70px;">
					</figure>
				</div>
				<div class="column is-narrow">
					<h1 class="title" id="title">
						<?php echo $_COOKIE['username']; ?>
					</h1>
					<h2 class="subtitle">
						<span class="has-text-light is-size-6" id="created">
							Joined on
							<?php echo $_COOKIE['created']; ?>
						</span>
					</h2>
				</div>
				<div class="column is-12-touch" style="margin-top: auto;">
					<div class="buttons is-right">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="tabs is-boxed column is-centered is-mobile" id="tab">
	<ul>
		<li data-tab="1" class="is-active">
			<a>
				<span class="icon is-small"><i class="fal fa-user" aria-hidden="true"></i></span>
				<span>Account</span>
			</a>
		</li>
		<li data-tab="2">
			<a>
				<span class="icon is-small"><i class="fal fa-calendar-alt" aria-hidden="true"></i></span>
				<span>Appointment</span>
			</a>
		</li>
		<li data-tab="3">
			<a>
				<span class="icon is-small"><i class="fal fa-calendar-check" aria-hidden="true"></i></span>
				<span>Reservation</span>
			</a>
		</li>
	</ul>
</div>
<div id="tab-content" id="tab-content">
	<div class="columns" data-content="1">
		<div class="column page">
			<div class="box">
				<div class="subtitle"><button class="button is-dark" type="button">Cancel</button></div>
			</div>
		</div>
	</div>
	<div class="columns" data-content="2">
		<div class="column page">
			<div class="box" id="box">
				<table class="table" style="width:30em;" id="table">
                    <thead>
                        <tr>
                            <th>Concern</th>
                            <th>Schedule</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id='tbod'>
                        <?php
                        while($row = mysqli_fetch_assoc($sql)){
                            ?>
                            <tr>
                                <td><?php echo $row['concern'] ?></td>
                                <td><?php echo $row['schedule'] ?></td>
                                <td><?php echo $row['status'] ?></td>
                                <?php
                                if($row['status'] != 'Canceled'){
                                    echo '<td><button id="'.$row["id"].'" name="cancel" class="button is-danger" type="button">Cancel</button></td>';
                                }
                                ?>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="columns" data-content="3">
		<div class="column page">
			<div class="box">
				<div class="subtitle"><button class="button is-info" type="button">Cancel</button></div>
			</div>
		</div>
		<br>
	</div>
</div>
<br>
<script src="../js/jquery.min.js"></script>
<script src="../js/navbar-burger.js"></script>
<script src="../js/sweetalert.min.js"></script>
<?php include('../includes/footer.php'); ?>
<script>
	<?php
    if($badge[0] < 1){
    ?>
        $('#badge').removeClass('badge is-badge-warning is-badge-left');
        <?php
    }
    ?>
	$('#tab li').on('click', function () {
		var tab = $(this).data('tab');

		$('#tab li').removeClass('is-active');
		$(this).addClass('is-active');

		$('#tab-content .columns').removeClass('is-active');
		$('.columns[data-content="' + tab + '"]').addClass('is-active');
	});
    $(document).on('click','button[name="cancel"]',function(){
        var id = $(this).attr('id');
        swal('Are you sure you want to your appointment?','this can\'t be change','warning',{
            buttons:true,
            dangerMode:true,
            closeOnClickOutside:false
        })
        .then((value) => {
            if(value){
                $.ajax({
                    url:'../php/profile.php',
                    method:'POST',
                    data:{id:id},
                    success:function(data){
                        $('#box').load(' #table');
                    }
                })
            }
        });
    });
</script>
