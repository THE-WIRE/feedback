<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META SECTION -->
    <title>TITLE</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />



    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.1.0.js" integrity="sha256-slogkvB1K3VOkzAI8QITxV3VzpOnkeNVsKvtkYLMjfk=" crossorigin="anonymous"></script>

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
                <a href="#">Bharati Vidyapeeth College Of Engineering</a>
                <a href="#" class="x-navigation-control"></a>
            </li>
            <li class="xn-title">Navigation</li>
            <li>
                <a href="#"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
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
        <!-- END BREADCRUMB -->

        <div class="page-title">
            <h2>Subject Selection Page</h2>
        </div>

        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">

            <div class="row">
                <div class="col-md-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Semester I</h3>
                        </div>
                        <div class="panel-body" >
                            <form class="col-md-4" id="form_sem1" method="post">
                                <b>Subject :</b><br><button type="button" class="glyphicon glyphicon-plus" style="color: darkgreen; width: 30px; height: 30px; position: absolute; margin-left: 100%; margin-top: 4%" id="add_sem1" onclick="document.write('<?php sem1_get_sub()?>');"></button>
                                <input type="text" class="form-control" id="Sem_1_subject" style="position:relative"><br>
                                &nbsp;
                                &nbsp;
                                <button type="submit" class="glyphicon glyphicon-ok-sign" style="color: orange; width: 30px; height: 30px; position: absolute; margin-left: 120%; margin-top: 4%" id="submit_sem1"></button>
                                <?php
                                    function sem1_get_sub()
                                    {

                                    }
                                ?>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Semester II</h3>
                        </div>
                        <div class="panel-body">
                            <form class="col-md-4" id="form_sem2" method="post">
                                <b>Subject :</b><br><button type="button" class="glyphicon glyphicon-plus" style="color: darkgreen; width: 30px; height: 30px; position: absolute; margin-left: 100%; margin-top: 4%" id="add_sem2"></button>
                                <input type="text" class="form-control" id="Sem_2_subject" style="position:relative"><br>
                                &nbsp;
                                &nbsp;
                                <button type="submit" class="glyphicon glyphicon-ok-sign" style="color: orange; width: 30px; height: 30px; position: absolute; margin-left: 120%; margin-top: 4%" id="submit_sem2"></button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Semester III</h3>
                        </div>
                        <div class="panel-body">
                            <form class="col-md-4" id="form_sem3" method="post">
                                <b>Subject :</b><br><button type="button" class="glyphicon glyphicon-plus" style="color: darkgreen; width: 30px; height: 30px; position: absolute; margin-left: 100%; margin-top: 4%" id="add_sem3"></button>
                                <input type="text" class="form-control" id="Sem_3_subject" style="position:relative"><br>
                                &nbsp;
                                &nbsp;
                                <button type="submit" class="glyphicon glyphicon-ok-sign" style="color: orange; width: 30px; height: 30px; position: absolute; margin-left: 120%; margin-top: 4%" id="submit_sem3"></button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Semester IV</h3>
                        </div>
                        <div class="panel-body">
                            <form class="col-md-4" id="form_sem4" method="post">
                                <b>Subject :</b><br><button type="button" class="glyphicon glyphicon-plus" style="color: darkgreen; width: 30px; height: 30px; position: absolute; margin-left: 100%; margin-top: 4%" id="add_sem4"></button>
                                <input type="text" class="form-control" id="Sem_4_subject" style="position:relative"><br>
                                &nbsp;
                                &nbsp;
                                <button type="submit" class="glyphicon glyphicon-ok-sign" style="color: orange; width: 30px; height: 30px; position: absolute; margin-left: 120%; margin-top: 4%" id="submit_sem4"></button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Semester V</h3>
                        </div>
                        <div class="panel-body">
                            <form class="col-md-4" id="form_sem5" method="post">
                                <b>Subject :</b><br><button type="button" class="glyphicon glyphicon-plus" style="color: darkgreen; width: 30px; height: 30px; position: absolute; margin-left: 100%; margin-top: 4%" id="add_sem5"></button>
                                <input type="text" class="form-control" id="Sem_5_subject" style="position:relative"><br>
                                &nbsp;
                                &nbsp;
                                <button type="submit" class="glyphicon glyphicon-ok-sign" style="color: orange; width: 30px; height: 30px; position: absolute; margin-left: 120%; margin-top: 4%" id="submit_sem5"></button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Semester VI</h3>
                        </div>
                        <div class="panel-body">
                            <form class="col-md-4" id="form_sem6" method="post">
                                <b>Subject :</b><br><button type="button" class="glyphicon glyphicon-plus" style="color: darkgreen; width: 30px; height: 30px; position: absolute; margin-left: 100%; margin-top: 4%" id="add_sem6"></button>
                                <input type="text" class="form-control" id="Sem_6_subject" style="position:relative"><br>
                                &nbsp;
                                &nbsp;
                                <button type="submit" class="glyphicon glyphicon-ok-sign" style="color: orange; width: 30px; height: 30px; position: absolute; margin-left: 120%; margin-top: 4%" id="submit_sem6"></button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Semester VII</h3>
                        </div>
                        <div class="panel-body">
                            <form class="col-md-4" id="form_sem7" method="post">
                                <b>Subject :</b><br><button type="button" class="glyphicon glyphicon-plus" style="color: darkgreen; width: 30px; height: 30px; position: absolute; margin-left: 100%; margin-top: 4%" id="add_sem7"></button>
                                <input type="text" class="form-control" id="Sem_7_subject" style="position:relative"><br>
                                &nbsp;
                                &nbsp;
                                <button type="submit" class="glyphicon glyphicon-ok-sign" style="color: orange; width: 30px; height: 30px; position: absolute; margin-left: 120%; margin-top: 4%" id="submit_sem7"></button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Semester VIII</h3>
                        </div>
                        <div class="panel-body">
                            <form class="col-md-4" id="form_sem8" method="post">
                                <b>Subject :</b><br><button type="button" class="glyphicon glyphicon-plus" style="color: darkgreen; width: 30px; height: 30px; position: absolute; margin-left: 100%; margin-top: 4%" id="add_sem8"></button>
                                <input type="text" class="form-control" id="Sem_8_subject" style="position:relative"><br>
                                &nbsp;
                                &nbsp;
                                <button type="submit" class="glyphicon glyphicon-ok-sign" style="color: orange; width: 30px; height: 30px; position: absolute; margin-left: 120%; margin-top: 4%" id="submit_sem8"></button>
                            </form>
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
</body>
</html>