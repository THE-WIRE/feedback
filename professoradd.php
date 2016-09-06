<?php
/**
 * Created by PhpStorm.
 * User: adikr
 * Date: 06-09-2016
 * Time: 10:30 AM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META SECTION -->
    <title>TITLE</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
    <!-- EOF CSS INCLUDE -->
</head>
<body>
<!-- START PAGE CONTAINER -->
<div class="page-container">

    <!-- START PAGE SIDEBAR -->
    <div class="page-sidebar">
        <!-- START X-NAVIGATION -->
        <ul class="x-navigation">
            <li class="xn-logo">
                <a href="index.html">ATLANT</a>
                <a href="#" class="x-navigation-control"></a>
            </li>
            <li class="xn-title">Navigation</li>
            <li>
                <a href="index.html"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
            </li>
        </ul>
        <!-- END X-NAVIGATION -->
    </div>
    <!-- END PAGE SIDEBAR -->

    <!-- PAGE CONTENT -->
    <div class="page-content">

        <!-- START X-NAVIGATION VERTICAL -->
        <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
            <!-- TOGGLE NAVIGATION -->
            <li class="xn-icon-button">
                <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
            </li>
            <!-- END TOGGLE NAVIGATION -->
        </ul>
        <!-- END X-NAVIGATION VERTICAL -->

        <!-- START BREADCRUMB -->
        <ul class="breadcrumb">
            <li><a href="#">Link</a></li>
            <li class="active">Active</li>
        </ul>
        <!-- END BREADCRUMB -->

        <div class="page-title">
            <h2><span class="fa fa-arrow-circle-o-left"></span>ADD PROFESSORS</h2>
        </div>

        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">

            <div class="row">
                <div class="col-md-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">ADD OR REMOVE PROFESSORS</h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group" align="center" hidden>

                            <div class="col-md-6 col-xs-12">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-addon">+</span>
                                    <input type="text" class="form-control" placeholder="Large"/>
                                </div>
                            </div>
                        </div>
                            <span class="help-block" style="display: none">ADD PROFESSOR (don't enter identical fields )</span><br/><br/>
                            <div class="panel-heading">
                                <h3 class="panel-title">Contacts</h3>
                                <ul class="panel-controls">
                                    <li><a class="profADD"href=""><span class="fa fa-plus"></span></a></li>
                                </ul>
                            </div>
                            <div class="panel-body list-group list-group-contacts">
                                <a href="#" class="list-group-item">
                                    <img src="assets/images/users/user2.jpg" class="pull-left" alt="John Doe"/>
                                    <span class="contacts-title">SUYOG</span>
                                    <p>UI/UX Designer</p>
                                    <div class="list-group-controls">
                                        <button class="btn btn-primary btn-rounded"><span class="fa fa-pencil"></span></button>
                                        <button class="btn btn-primary btn-rounded sub_remove" id="del"><span class="fa fa-times"></span></button>
                                    </div>
                                </a>

                                <a href="#" class="list-group-item">
                                    <img src="assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk"/>
                                    <span class="contacts-title">OMKAR</span>
                                    <p>Web Developer/Designer</p>
                                    <div class="list-group-controls">
                                        <button class="btn btn-primary btn-rounded"><span class="fa fa-pencil"></span></button>
                                        <button class="btn btn-primary btn-rounded sub_remove" id="del"><span class="fa fa-times"></span></button>
                                    </div>
                                </a>

                                <a href="#" class="list-group-item">
                                    <img src="assets/images/users/user3.jpg" class="pull-left" alt="Nadia Ali"/>
                                    <span class="contacts-title">ADITYA</span>
                                    <p>Singer-Songwriter</p>
                                    <div class="list-group-controls">
                                        <button class="btn btn-primary btn-rounded"><span class="fa fa-pencil"></span></button>
                                        <button class="btn btn-primary btn-rounded sub_remove" id="del"><span class="fa fa-times"></span></button>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->

<!-- MESSAGE BOX-->
<div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
            <div class="mb-content">
                <p>Are you sure you want to log out?</p>
                <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
            </div>
            <div class="mb-footer">
                <div class="pull-right">
                    <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                    <button class="btn btn-default btn-lg mb-control-close">No</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MESSAGE BOX-->

<!-- START PRELOADS -->
<audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
<audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
<!-- END PRELOADS -->

<!-- START SCRIPTS -->
<!-- START PLUGINS -->
<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
<!-- END PLUGINS -->

<!-- THIS PAGE PLUGINS -->

<!-- END PAGE PLUGINS -->

<!-- START TEMPLATE -->
<script type="text/javascript" src="js/plugins.js"></script>
<script type="text/javascript" src="js/actions.js"></script>
<!-- END TEMPLATE -->
<!-- END SCRIPTS -->
<script>
    $('.profADD').on('click', function (e) {
        e.preventDefault();
        console.log('clicked');
        $('.form-group').show();
        $('.help-block').show();
        $('.profADD').hide();

    })
</script>
</body>
</html>






