<?php 
session_start();
if($_COOKIE['role'] == 'Admin'){
    ?>
    <!doctype html>
    <html class="no-js" lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <title> MetroFocus </title>
            <meta name="description" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="icon" href="../icon.ico">
            <link rel="apple-touch-icon" href="apple-touch-icon.png">
            <link rel="stylesheet" href="css/vendor.css">
            <link rel="stylesheet" href="css/app-blue.css">
            <link rel="stylesheet" href="css/bulma.min.css">
            <link rel="stylesheet" href="fontawesome/css/all.css">
            <link rel="stylesheet" href="css/datatables.min.css">
            <link rel="stylesheet" href="css/animate.min.css">
            <link rel="stylesheet" href="css/bulma-tooltip.min.css">
        </head>
        <body>
            <div class="main-wrapper">
                <div class="app" id="app">
                    <header class="header">
                        <div class="header-block header-block-collapse d-lg-none d-xl-none">
                            <button class="collapse-btn" id="sidebar-collapse-btn">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                        <div class="header-block">
                            <nav class="breadcrumb" aria-label="breadcrumbs">
                                <ul>
                                    <li style="margin-left: 20px;">
                                        <a href="./">
                                            <span class="icon is-small">
                                                <i class="fal fa-home" aria-hidden="true"></i>
                                            </span>
                                            <span> Dashoard</span>
                                        </a>
                                    </li>
                                    <li class="is-active">
                                        <a href="">
                                            Appointment
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-block header-block-nav">
                            <ul class="nav-profile">
                                <li class="notifications new">
                                    <a data-toggle="dropdown" aria-expanded="false" id="bell">
                                        <i class="fas fa-bell"></i>
                                        <sup>
                                            <span class="counter" id="count"></span>
                                        </sup>
                                    </a>
                                    <div class="dropdown-menu notifications-dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 26px, 0px); top: 0px; left: 0px; will-change: transform;">
                                        <ul class="notifications-container" id='notifto'></ul>
                                        <!-- <footer>
                                            <ul>
                                                <li>
                                                    <a href="#"> View All </a>
                                                </li>
                                            </ul>
                                        </footer> -->
                                    </div>
                                </li>
                                <li class="profile dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-user-alt fa-lm"></i>
                                        <!-- <div class="img" style="background-image: url('https://avatars3.githubusercontent.com/u/3959008?v=3&s=40')"> </div> -->
                                        <span class="name"> Admin </span>
                                    </a>
                                    <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <a class="dropdown-item" href="../User/pages/profile.php">
                                            <i class="fa fa-user icon"></i> Profile </a>
                                        <!-- <a class="dropdown-item" href="#">
                                            <i class="fa fa-bell icon"></i> Notifications </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="fa fa-gear icon"></i> Settings </a> -->
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="../User/pages/logout.php">
                                            <i class="fa fa-power-off icon"></i> Logout </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </header>
                    <aside class="sidebar">
                        <div class="sidebar-container">
                            <div class="sidebar-header">
                                <div class="brand">
                                    <div style="text-align: center;margin-left: -30px;"><span style="font-size: 25px;font-weight: bold;">Metro</span><span style="font-size: 25px;color: #FF7100;font-weight:bold;">Focus</span></div>
                                </div>
                            </div>
                            <nav class="menu">
                                <ul class="sidebar-menu metismenu" id="sidebar-menu">
                                    <li>
                                        <a href="./">
                                            <i class="fal fa-home"></i> Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="fal fa-camera-retro"></i> Products
                                            <i class="fa arrow"></i>
                                        </a>
                                        <ul class="sidebar-nav">
                                            <li>
                                                <a href="brand.php"> Brand</a>
                                            </li>
                                            <li>
                                                <a href="category.php"> Category</a>
                                            </li>
                                            <li>
                                                <a href="parts.php"> Parts</a>
                                            </li>
                                            <li>
                                                <a href="accessories.php"> Accessories</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="reservation.php">
                                            <i class="fal fa-calendar-alt"></i> Reservation
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a href="#">
                                            <i class="fal fa-calendar-check"></i> Appointment
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="fal fa-id-card"></i> User Management
                                            <i class="fa arrow"></i>
                                        </a>
                                        <ul class="sidebar-nav">
                                            <li>
                                                <a href="admin.php"> Admin</a>
                                            </li>
                                            <li>
                                                <a href="client.php"> Registered Users</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="faq.php">
                                            <i class="fal fa-question-circle"></i> FAQ
                                        </a>
                                    </li>
                                    <li>
                                        <a href="activitylog.php">
                                            <i class="fal fa-pen"></i> Activity Logs
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="fal fa-trash"></i> Trash
                                            <i class="fa arrow"></i>
                                        </a>
                                        <ul class="sidebar-nav">
                                            <li>
                                                <a href="brandtrash.php"> Brand</a>
                                            </li>
                                            <li>
                                                <a href="categorytrash.php"> Category</a>
                                            </li>
                                            <li>
                                                <a href="partstrash.php"> Parts</a>
                                            </li>
                                            <li>
                                                <a href="accessoriestrash.php"> Accessories</a>
                                            </li>
                                            <li>
                                                <a href="admintrash.php"> Admin</a>
                                            </li>
                                            <li>
                                                <a href="clienttrash.php"> Registered Users</a>
                                            </li>
                                            <li>
                                                <a href="faqtrash.php"> FAQ</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>  
                    </aside>
                    <article class="content animated bounceInLeft">
                        <div class="title-block">
                            <h1 class="title"> Appointment</h1>
                        </div>
                        <section class="section" style="padding-top:0px;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-block">
                                            <section class="example">
                                                <div class="table-responsive">
                                                    <table id="tabledit" class="table table-bordered table-striped table-hover nowrap" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Username</th>
                                                            <th>Concern</th>
                                                            <th>Schedule</th>
                                                            <th>Contact Number</th>
                                                            <th>Remarks</th>
                                                            <th>Status</th>
                                                            <th style="width: 15%">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody></tbody>
                                                    </table>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </article>
                    <div class="sidebar-overlay" id="sidebar-overlay"></div>
                    <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                    <div class="mobile-menu-handle"></div> 
                </div>
                <div class="modal" id="appointmentmodal"> 
                    <div class="modal-background"></div>
                        <div class="modal-card">
                            <header class="modal-card-head">
                                <p class="modal-card-title">Appointment Details</p>
                                <div class="delete" aria-label="close"></div>
                            </header>
                            <section class="modal-card-body">
                                <form method="POST" id="vfrom" name="vform">
                                <div class="field">
                                    <label for="" class="label">Username</label>
                                    <input id="username" type="input" class="input" readonly>
                                </div>
                                <div class="field">
                                    <label for="" class="label">Concern</label>
                                    <input id="concern" type="input" class="input" readonly>
                                </div>
                                <div class="field">
                                    <label for="" class="label">Schedule</label>
                                    <input id="schedule" type="input" class="input" readonly>
                                </div>
                                <div class="field">
                                    <label for="" class="label">Contact Number</label>
                                    <input id="cnumber" type="input" class="input" readonly>
                                </div>
                                <div class="field">
                                    <label for="" class="label">Remarks</label>
                                    <textarea id="remarks" type="input" class="textarea" readonly></textarea>
                                </div>
                                </form>
                            </section>
                            <footer>
                                <input type="hidden" name="user_id" id="user_id"></input>
                            </footer>
                        </div>
                </div>
                <div class="modal" id="reservationmodal"> 
                    <div class="modal-background"></div>
                        <div class="modal-card">
                        <form method="POST">
                            <header class="modal-card-head">
                                <p class="modal-card-title">Rejection Form</p>
                            </header>
                            <section class="modal-card-body">
                                <div class="field">
                                    <label class="label">Message</label>
                                    <div class="control has-icons-right">
                                        <textarea class="textarea" name="message" id="message" placeholder="Reason..."></textarea>
                                        <span class="icon is-small is-right">
                                            <i class="" id="messageicon"></i>
                                        </span>
                                        <p class="help is-danger" id="messageto"></p>
                                    </div>
                                </div>
                            </section>
                            <footer class="modal-card-foot">
                                <input type="button" class="button is-success" value="Submit" name="submit" id="submit">
                                <input type="button" class="button" value="Cancel" name="cancel" id="cancel">
                                <input type="hidden" name="user_id" id="user_id"></input>
                            </footer>
                        </form>
                        </div>
                </div>
            <script src="js/jquery.min.js"></script>
            <script src="js/sweetalert.min.js"></script>
            <script src="js/vendor.js"></script>
            <script src="js/app.js"></script>
            <script src="js/datatables.min.js"></script>
            <script src="js/buttons.html5.min.js"></script>
            <script src="js/pdfmake.min.js"></script>
            <script src="js/vfs_fonts.js"></script>
            <script src="js/jszip.min.js"></script>
            <script src="js/ellipsis.js"></script>
            <script>
            setInterval(function(){
                dataTable.ajax.reload(null,false);
            },1000);
            setInterval(function(){
                notifandcount();
            },1000);
            function notifandcount(view = ''){
                $.ajax({
                    url:'php/notification.php',
                    method:'POST',
                    data:{view:view},
                    dataType:'json',
                    success:function(data){
                        $('#notifto').html(data.notification);
                        $('#count').html(data.count);
                    }
                })
            }
            $('#bell').click(function(){
                notifandcount('hotdog');
            });
            var dataTable = $('#tabledit').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'print',
                        exportOptions: {
                           columns: [0,1,2,3,4]
                        }
                    },
                    {
                        extend: 'excel',
                        exportOptions: {
                           columns: [0,1,2,3,4]
                        }
                    },
                    {
                        extend: 'pdf',
                        exportOptions: {
                           columns: [0,1,2,3,4]
                        }
                    }
                ],
                "order":[],
                "ajax":{
                url:"php/appointment/appointmentfetch.php",
                type:"POST"
            },
                "columnDefs":[
                    {
                        "targets":[6],
                        "orderable":false,
                    },
                    {
                        "targets":[1,2,3,4,5],
                        "render":$.fn.dataTable.render.ellipsis(25),
                    },
                    {
                        "targets":[0,1,2,3,4,5,6],
                        "className":'dt-center',
                    },
                ],
            });
            $(document).on('click','button[name="show"]',function(){
                var user_id = $(this).attr("id");
                $.ajax({
                    url:"php/appointment/appointmentfetchsingle.php",
                    method:"POST",
                    data:{user_id:user_id},
                    dataType:"json",
                    success:function(data)
                    {
                        $('#appointmentmodal').addClass('is-active');
                        $('#username').val(data.username);
                        $('#concern').val(data.concern);
                        $('#schedule').val(data.schedule);
                        $('#cnumber').val(data.cnumber);
                        $('#status').val(data.status);
                        $('#user_id').val(user_id);
                        $('#remarks').html(data.remarks);
                    }
                })
            });
            $(document).on('click','button[name="confirm"]',function(){
                var user_id2 = $(this).attr("id");
                $.ajax({
                    url:'php/appointment/appointmentmessage.php',
                    method:'POST',
                    data:{id:user_id2},
                    success:function(data){
                        if(data == "Error"){
                            swal('Error','','error',{
                                closeOnClickOutside:false
                            })
                        }
                        else{
                            $.ajax({
                                url:'php/appointment/appointmentconfirm.php',
                                method:'POST',
                                data:{id:user_id2},
                                success:function(data){
                                    swal('Message Sent!','','success',{
                                        closeOnClickOutside:false
                                    })
                                }
                            });
                        }
                    }
                });
            });
            $(document).on('click','button[name="reject"]',function(){
                var id = $(this).attr('id');
                $('#user_id').val(id);
                $('#reservationmodal').addClass('is-active');
                $('#message').val('');
                $('#message').removeClass('is-danger');
                $('#messageicon').removeClass('fal fa-exclamation-triangle');
                $('#messageto').html('');
            });
            $(document).on('click','button[name="done"]',function(){
                var id = $(this).attr('id');
                $.ajax({
                    url:'php/appointment/done.php',
                    method:'POST',
                    data:{id:id},
                    success:function(data){
                        if(data == "Error"){
                            swal(data,'','error',{
                                closeOnClickOutside:false
                            })
                        }
                        else{
                            swal(data,'','success',{
                            closeOnClickOutside:false
                        })
                        }
                    }
                });
            });
            $('#submit').click(function(){
                if($('#message').val() == ""){
                    $('#message').addClass('is-danger');
                    $('#messageicon').addClass('fal fa-exclamation-triangle');
                    $('#messageto').html('Enter a message');
                }
                else{
                    $('#message').removeClass('is-danger');
                    $('#messageicon').removeClass('fal fa-exclamation-triangle');
                    $('#messageto').html('');
                    var id = $('#user_id').val();
                    var message = $('#message').val();
                    $.ajax({
                        url:'php/appointment/reject.php',
                        method:'POST',
                        data:{id:id,message:message},
                        success:function(data){
                            $('#reservationmodal').removeClass('is-active');
                            if(data == "Error"){
                                swal('Error','','error',{
                                closeOnClickOutside:false
                            })
                            }
                            else{
                                swal('Message Sent!','','success',{
                                closeOnClickOutside:false
                            })
                            }
                        }
                    });
                }
            });
            $('#cancel').click(function(){
                $('#reservationmodal').removeClass('is-active');
            });
            document.addEventListener('DOMContentLoaded',function(){

                var rootEl = document.documentElement;
                var $modals = getAll('.modal');
                var $modalButtons = getAll('.modal-button');
                var $modalCloses = getAll('.modal-background, .modal-close, .modal-card-head .delete');

                if ($modalButtons.length > 0) {
                    $modalButtons.forEach(function ($el) {
                      $el.addEventListener('click', function () {
                        var target = $el.dataset.target;
                        var $target = document.getElementById(target);
                        rootEl.classList.add('is-clipped');
                        $target.classList.add('is-active');
                      });
                    });
                }
                if ($modalCloses.length > 0) {
                    $modalCloses.forEach(function ($el) {
                      $el.addEventListener('click', function () {
                        closeModals();
                      });
                    });
                }
                document.addEventListener('keydown', function (event) {
                    var e = event || window.event;
                    if (e.keyCode === 27) {
                      closeModals();
                    }
                });
                function closeModals() {
                    rootEl.classList.remove('is-clipped');
                    $modals.forEach(function ($el) {
                      $el.classList.remove('is-active');
                    });
                }
                function getAll(selector) {
                    return Array.prototype.slice.call(document.querySelectorAll(selector), 0);
                }

            });
            </script>
        </body>
    </html>
    <?php
}
else{
    header('Location: ../User/');
}

 ?>