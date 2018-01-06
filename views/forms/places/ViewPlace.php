<?php
session_start();
include ("../../includes/constants.php");
include ('../../../models/server.php');
include ('../../../models/DbOperations.php');
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.blacktie.co/demo/template/form_component.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2017 20:31:23 GMT -->
<head>

    <title>Add Category</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo PROJECT.'/views/template/assets/css/bootstrap.css'?>" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo PROJECT.'/views/template/assets/font-awesome/css/font-awesome.css'?>" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo PROJECT.'/views/templatesassets/js/bootstrap-datepicker/css/datepicker.html'?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo PROJECT. '/views/template/assets/js/bootstrap-daterangepicker/daterangepicker.html'?>" />

    <!-- Custom styles for this template -->
    <link href="<?php echo PROJECT.'/views/template/assets/css/style.css'?>" rel="stylesheet">
    <link href="<?php echo PROJECT.'/views/template/assets/css/style-responsive.css'?>" rel="stylesheet">
    <link href="<?php echo PROJECT.'/views/template/assets/css/table.css'?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section id="container" >
    <!-- **********************************************************************************************************************************************************
    TOP BAR CONTENT & NOTIFICATIONS
    *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="index-2.html" class="logo"><b>OAU NAVIGATOR</b></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
                <!-- settings start -->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="index-2.html#">
                        <i class="fa fa-tasks"></i>
                        <span class="badge bg-theme">4</span>
                    </a>
                    <ul class="dropdown-menu extended tasks-bar">
                        <div class="notify-arrow notify-arrow-green"></div>
                        <li>
                            <p class="green">You have 4 pending tasks</p>
                        </li>
                        <li>
                            <a href="index-2.html#">
                                <div class="task-info">
                                    <div class="desc">DashGum Admin Panel</div>
                                    <div class="percent">40%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="index-2.html#">
                                <div class="task-info">
                                    <div class="desc">Database Update</div>
                                    <div class="percent">60%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="index-2.html#">
                                <div class="task-info">
                                    <div class="desc">Product Development</div>
                                    <div class="percent">80%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80% Complete</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="index-2.html#">
                                <div class="task-info">
                                    <div class="desc">Payments Sent</div>
                                    <div class="percent">70%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                        <span class="sr-only">70% Complete (Important)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="external">
                            <a href="#">See All Tasks</a>
                        </li>
                    </ul>
                </li>
                <!-- settings end -->
                <!-- inbox dropdown start-->
                <li id="header_inbox_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="index-2.html#">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-theme">5</span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <div class="notify-arrow notify-arrow-green"></div>
                        <li>
                            <p class="green">You have 5 new messages</p>
                        </li>
                        <li>
                            <a href="index-2.html#">
                                <span class="photo"><img alt="avatar" src="assets/img/ui-zac.jpg"></span>
                                <span class="subject">
                                    <span class="from">Zac Snider</span>
                                    <span class="time">Just now</span>
                                    </span>
                                <span class="message">
                                        Hi mate, how is everything?
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="index-2.html#">
                                <span class="photo"><img alt="avatar" src="assets/img/ui-divya.jpg"></span>
                                <span class="subject">
                                    <span class="from">Divya Manian</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                <span class="message">
                                     Hi, I need your help with this.
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="index-2.html#">
                                <span class="photo"><img alt="avatar" src="assets/img/ui-danro.jpg"></span>
                                <span class="subject">
                                    <span class="from">Dan Rogers</span>
                                    <span class="time">2 hrs.</span>
                                    </span>
                                <span class="message">
                                        Love your new Dashboard.
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="index-2.html#">
                                <span class="photo"><img alt="avatar" src="assets/img/ui-sherman.jpg"></span>
                                <span class="subject">
                                    <span class="from">Dj Sherman</span>
                                    <span class="time">4 hrs.</span>
                                    </span>
                                <span class="message">
                                        Please, answer asap.
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="index-2.html#">See all messages</a>
                        </li>
                    </ul>
                </li>
                <!-- inbox dropdown end -->
            </ul>
            <!--  notification end -->
        </div>
        <div class="top-menu">
            <ul class="nav pull-right top-menu">
                <li><a class="logout" href="../../../index.php">Logout</a></li>
            </ul>
        </div>
    </header>
    <!--header end-->

    <!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
    *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">

                <p class="centered"><a href="#"><img src="<?php echo PROJECT.'/views/template/assets/img/profile/profile_picture2.jpg'?>" class="img-circle" width="60"></a></p>
                <h5 class="centered">Mogbeyi David</h5>


                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-tasks"></i>
                        <span>Manage Categories</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="<?php echo PROJECT.'/views/forms/category/AddCategory.php'?>">Add a New Category</a></li>
                        <li><a  href="<?php echo PROJECT.'/views/forms/category/ViewCategory.php'?>">Update Existing Category</a></li>
                        <li><a  href="<?php echo PROJECT.'/views/forms/category/ViewCategory.php'?>">View all Available Category</a></li>
                        <li><a  href="<?php echo PROJECT.'/views/forms/category/ViewCategory.php'?>">Delete Categories</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-tasks"></i>
                        <span>Manage Places</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="<?php echo PROJECT.'/views/forms/places/AddPlace.php'?>">ADD a New Place</a></li>
                        <li><a  href="<?php echo PROJECT.'/views/forms/places/ViewPlace.php'?>">Update Existing Places</a></li>
                        <li><a  href="<?php echo PROJECT.'/views/forms/places/ViewPlace.php'?>">View all Available Places</a></li>
                        <li><a  href="<?php echo PROJECT.'/views/forms/places/ViewPlace.php'?>">Delete Places</a></li>
                    </ul>
                </li>


            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->

    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">

            <?php

            if($_SESSION['success_update_place'] == true){
                echo "<div class=\"alert alert-success alert-dismissable\">
            <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
            <strong>Success!</strong> Place Updated Successfully
            </div>";
                $_SESSION['success_update_place'] = false;
            }

            if($_SESSION['success_delete_place'] == true){
                echo "<div class=\"alert alert-success alert-dismissable\">
            <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
            <strong>Success!</strong> Place Deleted Successfully
            </div>";
                $_SESSION['success_delete_place'] = false;
            }


            $query = "SELECT * FROM places";
            $run = mysqli_query($connection , $query);
            $all_arrays = array();
            $count = mysqli_num_rows($run);
            print "<br>";
            echo "<table>";
            echo '<tr>
<th>S/N</th>
<th>Name of Place</th>
<th>Address</th>
<th>Activities</th>
<th>Description</th>
<th>Description from Hostel</th>
<th>Description from SUB</th>
<th>Description from Gate</th>
<th colspan="2">ACTIONS</th>
</tr>';
            for($i=0; $i<$count;$i++){
                $all_arrays[$i] = mysqli_fetch_assoc($run);
                $serial_number = $serial_number + 1;
                $pass_id = $all_arrays[$i]['id'];
                echo '<tr>
    		<td>'.$serial_number.'</td>
    		<td>'.$all_arrays[$i]['name_of_place'].'</td>
    		<td>'.$all_arrays[$i]['address'].'</td>
    		<td>'.$all_arrays[$i]['activities'].'</td>
    		<td>'.$all_arrays[$i]['description'].'</td>
    		<td>'.$all_arrays[$i]['description_hostel'].'</td>
    		<td>'.$all_arrays[$i]['description_sub'].'</td>
    		<td>'.$all_arrays[$i]['description_gate'].'</td>
    		<td>'."<a href='UpdatePlace.php?id={$pass_id}'><button type=\"addPlace\" class=\"btn btn-theme\">Update</button>".'</td>
    		<td>'."<a href='DeletePlace.php?id={$pass_id}'><button type=\"addPlace\" class=\"btn btn-theme\">Delete</button></a>".'</td>
    	</tr>';

            }
            $count--;

            echo "</table>";
            ?>


        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            2017 - MogbeyiDavid
            <a href="ViewPlace.php#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="<?php echo PROJECT.'/views/template/assets/js/jquery.js'?>"></script>
<script src="<?php echo PROJECT.'/views/template/assets/js/bootstrap.min.js'?>"></script>
<script class="include" type="text/javascript" src="<?php echo PROJECT.'/views/template/assets/js/jquery.dcjqaccordion.2.7.js'?>"></script>
<script src="<?php echo PROJECT.'/views/template/assets/js/jquery.scrollTo.min.js'?>"></script>
<script src="<?php echo PROJECT.'/views/template/assets/js/jquery.nicescroll.js'?>" type="text/javascript"></script>


<!--common script for all pages-->
<script src="<?php echo PROJECT.'/views/template/assets/js/common-scripts.js'?>"></script>

<!--script for this page-->
<script src="<?php echo PROJECT.'/views/template/assets/js/jquery-ui-1.9.2.custom.min.js'?>"></script>

<!--custom switch-->
<script src="<?php echo PROJECT.'/views/template/assets/js/bootstrap-switch.js'?>"></script>

<!--custom tagsinput-->
<script src="<?php echo PROJECT. '/views/template/assets/js/jquery.tagsinput.js'?>"></script>

<!--custom checkbox & radio-->

<script type="text/javascript" src="<?php echo PROJECT.'/views/template/assets/js/bootstrap-datepicker/js/bootstrap-datepicker.html'?>"></script>
<script type="text/javascript" src="<?php echo PROJECT.'/views/template/assets/js/bootstrap-daterangepicker/date.html'?>"></script>
<script type="text/javascript" src="<?php echo PROJECT.'/views/template/assets/js/bootstrap-daterangepicker/daterangepicker-2.html'?>"></script>

<script type="text/javascript" src="<?php echo PROJECT.'/views/template/assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js'?>"></script>


<script src="<?php echo PROJECT.'/views/templates/assets/js/form-component.js'?>"></script>


<script>
    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

</script>

</body>

<!-- Mirrored from www.blacktie.co/demo/template/form_component.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2017 20:31:28 GMT -->
</html>
