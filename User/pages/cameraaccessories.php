<?php 
session_start();
include '../includes/db.php';
$sql = mysqli_query($con,'SELECT * FROM accessories WHERE deleted = 0 AND status = "Active" ORDER BY id DESC');
if(isset($_COOKIE['email'])){
    $user = $_COOKIE['email'];
    $sql2 = mysqli_query($con,"SELECT SUM(quantity) FROM cart WHERE user = '$user'");
    $badge = mysqli_fetch_array($sql2);
}
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- bulma core css -->
<link rel="icon" href="../../icon.ico">
<link rel="stylesheet" href="../bulma/css/bulma.min.css">
<link rel="stylesheet" href="../node_modules/bulma-extensions/bulma-carousel/dist/css/bulma-carousel.min.css">
<link rel="stylesheet" href="../node_modules/bulma-extensions/bulma-checkradio/dist/css/bulma-checkradio.min.css">
<link rel="stylesheet" href="../node_modules/bulma-extensions/bulma-slider/dist/css/bulma-slider.min.css">

<!-- font awesome css + icons -->
<link rel="stylesheet" href="../fontawesome/css/all.css">
<link rel="stylesheet" href="../fontawesome/css/fontawesome.css">

<!-- bootstrap css -->
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/footer.css">

<link rel="stylesheet" href="../css/cameraparts.css">
<link rel="stylesheet" href="../node_modules/bulma-extensions/bulma-badge/dist/css/bulma-badge.min.css">
<title>MetroFocus | Camera Accessories</title>
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
                            <a href="cameraparts.php" class="navbar-item" style="background: none !important;">Camera
                                Parts</a>
                        </div>
                        <div class="navbar-item">
                            <a href="faq.php" class="navbar-item" style="background: none !important;">FAQs</a>
                        </div>
                    </div>
                    <style>
                        #btnhover:hover {
                            background-color: #44bfd5 !important;
                        }
                        #cart:hover {
                            background-color: #071425 !important;
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
<section class="hero">
    <div class="hero-body is-hidden-mobile" style="margin:0px -25px">
        <div class='carousel carousel-animated carousel-animate-slide' data-autoplay="true">
            <div class='carousel-container'>
                <div class='carousel-item has-background is-active'>
                    <img class="is-background" src="../assets/img/METRO FOCUS.jpg" alt="" width="640" height="310" />
                    <div class="title">Metro Focus</div>
                </div>
                <!-- <div class='carousel-item has-background'>
                    <img class="is-background" src="https://wikiki.github.io/images/singer.jpg" alt="" width="640" height="310" />
                    <div class="title">Original Gift: Offer a song with <a href="https://lasongbox.com" target="_blank">La Song Box</a></div>
                </div> -->
                <div class='carousel-item has-background'>
                    <img class="is-background" src="../assets/img/REPAIR.jpg" alt="" width="640" height="310" />
                    <div class="title">Camera Repair</div>
                </div>
                <div class='carousel-item has-background'>
                    <img class="is-background" src="../assets/img/APPOINTMENT.jpg" alt="" width="640" height="310" />
                    <div class="title">Appointment Scheduling</div>
                </div>
                <div class='carousel-item has-background'>
                    <img class="is-background" src="../assets/img/RESERVATION.jpg" alt="" width="640" height="310" />
                    <div class="title">Item Reservation</div>
                </div>
            </div>
            <div class="carousel-navigation is-overlay">
                <div class="carousel-nav-left">
                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                </div>
                <div class="carousel-nav-right">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="main app-content" style="height: 100%;">
    <div class="columns is-mobile">
        <div class="column is-one-quarter is-hidden-mobile">
            <aside class="menu">
                <p class="menu-label">
                    Brand
                </p>
                <ul class="menu-list">
                
                </ul>
            </aside>
        </div>
        <section class="container-fluid">
            <div class="row">
                
            </div>
        </section>
    </div>
</div>
<!-- footer end -->
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/navbar-burger.js"></script>
<script src="../node_modules/bulma-extensions/bulma-carousel/dist/js/bulma-carousel.min.js"></script>
<script>
    setInterval(function () {
        load();
    }, 1000);
    // setInterval(function(){
    //     $('.menu').load(' .menu-list');
    // },1000);
    function load(){
        $.ajax({
            url:'../php/accessoriesfetch.php',
            dataType:'json',
            success:function(data){
                $('.row').html(data.accessories);
            }
        })
    }
    function brand(br = 'Accessories'){
            $.ajax({
                url:'../php/brand.php',
                method:'POST',
                data:{br : br},
                dataType:'json',
                success:function(data){
                    $('ul.menu-list').html(data.brand);
                }
            })
        }
    <?php 
    if(isset($_COOKIE['username'])){
        if($badge[0] < 1){
        ?>
            $('#badge').removeClass('badge is-badge-warning is-badge-left');
            <?php
        }
    }
    ?>
    var carousels = bulmaCarousel.attach(); // carousels now contains an array of all Carousel instances
    // Find output DOM associated to the DOM element passed as parameter
    function findOutputForSlider(element) {
        var idVal = element.id;
        outputs = document.getElementsByTagName('output');
        for (var i = 0; i < outputs.length; i++) {
            if (outputs[i].htmlFor == idVal)
                return outputs[i];
        }
    }

    function getSliderOutputPosition(slider) {
        // Update output position
        var newPlace,
            minValue = 1000;

        var style = window.getComputedStyle(slider, null);
        // Measure width of range input
        sliderWidth = parseInt(style.getPropertyValue('width'), 10);

        // Figure out placement percentage between left and right of input
        if (!slider.getAttribute('min')) {
            minValue = 0;
        } else {
            minValue = slider.getAttribute('min');
        }
        var newPoint = (slider.value - minValue) / (slider.getAttribute('max') - minValue);

        // Prevent bubble from going beyond left or right (unsupported browsers)
        if (newPoint < 0) {
            newPlace = 0;
        } else if (newPoint > 1) {
            newPlace = sliderWidth;
        } else {
            newPlace = sliderWidth * newPoint;
        }

        return {
            'position': newPlace + 'px'
        }
    }

    document.addEventListener('DOMContentLoaded', function () {
        load();
        brand();
        // Get all document sliders
        var sliders = document.querySelectorAll('input[type="range"].slider');
        [].forEach.call(sliders, function (slider) {
            var output = findOutputForSlider(slider);
            if (output) {
                if (slider.classList.contains('has-output-tooltip')) {
                    // Get new output position
                    var newPosition = getSliderOutputPosition(slider);

                    // Set output position
                    output.style['left'] = newPosition.position;
                }

                // Add event listener to update output when slider value change
                slider.addEventListener('input', function (event) {
                    if (event.target.classList.contains('has-output-tooltip')) {
                        // Get new output position
                        var newPosition = getSliderOutputPosition(event.target);

                        // Set output position
                        output.style['left'] = newPosition.position;
                    }

                    // Update output with slider value
                    output.value = event.target.value;
                });
            }
        });
    });
</script>