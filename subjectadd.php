<html>
<head>
    <!-- META SECTION -->
    <title>Atlant - Responsive Bootstrap Admin Template</title>
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
    <div class="page-container">

        <!-- END PAGE SIDEBAR -->
        <div class="page-content">
            <!-- START X-NAVIGATION VERTICAL -->
            <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                <!-- TOGGLE NAVIGATION -->
                <li class="xn-icon-button">
                    <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                </li>
                <!-- END TOGGLE NAVIGATION -->
                <!-- SEARCH -->
                <li class="xn-search">
                    <form role="form">
                        <input type="text" name="search" placeholder="Search..."/>
                    </form>
                </li>
                <!-- END SEARCH -->
                <!-- SIGN OUT -->
                <li class="xn-icon-button pull-right">
                    <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
                </li>
                <!-- END SIGN OUT -->
                <!-- MESSAGES -->
                <li class="xn-icon-button pull-right">
                    <a href="#"><span class="fa fa-comments"></span></a>
                    <div class="informer informer-danger">4</div>
                    <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span class="fa fa-comments"></span> Messages</h3>
                            <div class="pull-right">
                                <span class="label label-danger">4 new</span>
                            </div>
                        </div>
                        <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                            <a href="#" class="list-group-item">
                                <div class="list-group-status status-online"></div>
                                <img src="assets/images/users/user2.jpg" class="pull-left" alt="John Doe"/>
                                <span class="contacts-title">John Doe</span>
                                <p>Praesent placerat tellus id augue condimentum</p>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="list-group-status status-away"></div>
                                <img src="assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk"/>
                                <span class="contacts-title">Dmitry Ivaniuk</span>
                                <p>Donec risus sapien, sagittis et magna quis</p>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="list-group-status status-away"></div>
                                <img src="assets/images/users/user3.jpg" class="pull-left" alt="Nadia Ali"/>
                                <span class="contacts-title">Nadia Ali</span>
                                <p>Mauris vel eros ut nunc rhoncus cursus sed</p>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="list-group-status status-offline"></div>
                                <img src="assets/images/users/user6.jpg" class="pull-left" alt="Darth Vader"/>
                                <span class="contacts-title">Darth Vader</span>
                                <p>I want my money back!</p>
                            </a>
                        </div>
                        <div class="panel-footer text-center">
                            <a href="pages-messages.html">Show all messages</a>
                        </div>
                    </div>
                </li>
                <!-- END MESSAGES -->
                <!-- TASKS -->
                <li class="xn-icon-button pull-right">
                    <a href="#"><span class="fa fa-tasks"></span></a>
                    <div class="informer informer-warning">3</div>
                    <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span class="fa fa-tasks"></span> Tasks</h3>
                            <div class="pull-right">
                                <span class="label label-warning">3 active</span>
                            </div>
                        </div>
                        <div class="panel-body list-group scroll" style="height: 200px;">
                            <a class="list-group-item" href="#">
                                <strong>Phasellus augue arcu, elementum</strong>
                                <div class="progress progress-small progress-striped active">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                                </div>
                                <small class="text-muted">John Doe, 25 Sep 2014 / 50%</small>
                            </a>
                            <a class="list-group-item" href="#">
                                <strong>Aenean ac cursus</strong>
                                <div class="progress progress-small progress-striped active">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%</div>
                                </div>
                                <small class="text-muted">Dmitry Ivaniuk, 24 Sep 2014 / 80%</small>
                            </a>
                            <a class="list-group-item" href="#">
                                <strong>Lorem ipsum dolor</strong>
                                <div class="progress progress-small progress-striped active">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">95%</div>
                                </div>
                                <small class="text-muted">John Doe, 23 Sep 2014 / 95%</small>
                            </a>
                            <a class="list-group-item" href="#">
                                <strong>Cras suscipit ac quam at tincidunt.</strong>
                                <div class="progress progress-small">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                </div>
                                <small class="text-muted">John Doe, 21 Sep 2014 /</small><small class="text-success"> Done</small>
                            </a>
                        </div>
                        <div class="panel-footer text-center">
                            <a href="pages-tasks.html">Show all tasks</a>
                        </div>
                    </div>
                </li>
                <!-- END TASKS -->
            </ul>
            <!-- END X-NAVIGATION VERTICAL -->
            <!-- PAGE TITLE -->
            <div class="page-title">
                <h2><span class="fa fa-arrow-circle-o-left"></span>Add Subjects</h2>
            </div>
            <div class="row">

                <div class="col-md-12">
                    <!-- START TABS -->
                    <div class="panel panel-default tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">SEM 1</a></li>
                            <li><a href="#tab-second" role="tab" data-toggle="tab">SEM 2</a></li>
                            <li><a href="#tab-third" role="tab" data-toggle="tab">SEM 3</a></li>
                            <li><a href="#tab-fourth" role="tab" data-toggle="tab">SEM 4</a></li>
                            <li><a href="#tab-fifth" role="tab" data-toggle="tab">SEM 5</a></li>
                            <li><a href="#tab-sixth" role="tab" data-toggle="tab">SEM 6</a></li>
                            <li><a href="#tab-seventh" role="tab" data-toggle="tab">SEM 7</a></li>
                            <li><a href="#tab-eighth" role="tab" data-toggle="tab">SEM 8</a></li>
                        </ul>
                        <div class="panel-body tab-content">
                            <div class="tab-pane active" id="tab-first">
                                <div class="col-md-12">

                                    <!-- CONTACTS WITH CONTROLS -->
                                    <div class="panel panel-default subform">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">SUBJECTS</h3>
                                        </div>
                                        <form id="something" method="POST" action="scripts/ajax/subdel.php">

                                         <input type="hidden" id="hide" name="hid"/>


                                            <div class="panel-body list-group list-group-contacts ">
                                                <a href="#" class="list-group-item " id="jaxitem1">

                                                    <div class="form-group grp-center" style="margin-left: auto; margin-right: auto">

                                                        <div class="col-md-6">
                                                            <div class="input-group input-group-lg">
                                                                <span class="input-group-addon">+</span>
                                                                <input type="text" class="form-control" placeholder="Large"/>
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class="list-group-controls">

                                                        <!--<button class="btn btn-primary btn-rounded sub_remove" id="del"><span class="fa fa-times"></span></button>-->
                                                    </div>
                                                    <span class="help-block">ADD SUBJECT</span><br/>
                                                </a>


                                            </div>


                                        <div class="panel-body list-group list-group-contacts ">
                                            <a href="#" class="list-group-item " id="jaxitem1">

                                                <span class="contacts-title">MATHS</span>
                                                <p><span id="sub_id">213</span></p>
                                                <div class="list-group-controls">
                                                    <button class="btn btn-primary btn-rounded"><span class="fa fa-pencil"></span></button>
                                                    <button class="btn btn-primary btn-rounded sub_remove" id="del"><span class="fa fa-times"></span></button>
                                                </div>
                                            </a>

                                        </div>
                                        </form>
                                    </div>
                            </div>
                            </div>
                            <div class="tab-pane" id="tab-second">
                                <div class="col-md-12">

                                    <!-- CONTACTS WITH CONTROLS -->
                                    <div class="panel panel-default subform">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">SUBJECTS</h3>
                                        </div>
                                        <form id="something" method="POST" action="scripts/ajax/subdel.php">

                                            <input type="hidden" id="hide" name="hid"/>


                                            <div class="panel-body list-group list-group-contacts ">
                                                <a href="#" class="list-group-item " id="jaxitem1">

                                                    <div class="form-group grp-center" style="margin-left: auto; margin-right: auto">

                                                        <div class="col-md-6">
                                                            <div class="input-group input-group-lg">
                                                                <span class="input-group-addon">+</span>
                                                                <input type="text" class="form-control" placeholder="Large"/>
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class="list-group-controls">

                                                        <!--<button class="btn btn-primary btn-rounded sub_remove" id="del"><span class="fa fa-times"></span></button>-->
                                                    </div>
                                                    <span class="help-block">ADD SUBJECT</span><br/>
                                                </a>


                                            </div>


                                            <div class="panel-body list-group list-group-contacts ">
                                                <a href="#" class="list-group-item " id="jaxitem1">

                                                    <span class="contacts-title">MATHS</span>
                                                    <p><span id="sub_id">213</span></p>
                                                    <div class="list-group-controls">
                                                        <button class="btn btn-primary btn-rounded"><span class="fa fa-pencil"></span></button>
                                                        <button class="btn btn-primary btn-rounded sub_remove" id="del"><span class="fa fa-times"></span></button>
                                                    </div>
                                                </a>

                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane" id="tab-third">
                                <div class="col-md-12">

                                    <!-- CONTACTS WITH CONTROLS -->
                                    <div class="panel panel-default subform">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">SUBJECTS</h3>
                                        </div>
                                        <form id="something" method="POST" action="scripts/ajax/subdel.php">

                                            <input type="hidden" id="hide" name="hid"/>


                                            <div class="panel-body list-group list-group-contacts ">
                                                <a href="#" class="list-group-item " id="jaxitem1">

                                                    <div class="form-group grp-center" style="margin-left: auto; margin-right: auto">

                                                        <div class="col-md-6">
                                                            <div class="input-group input-group-lg">
                                                                <span class="input-group-addon">+</span>
                                                                <input type="text" class="form-control" placeholder="Large"/>
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class="list-group-controls">

                                                        <!--<button class="btn btn-primary btn-rounded sub_remove" id="del"><span class="fa fa-times"></span></button>-->
                                                    </div>
                                                    <span class="help-block">ADD SUBJECT</span><br/>
                                                </a>


                                            </div>


                                            <div class="panel-body list-group list-group-contacts ">
                                                <a href="#" class="list-group-item " id="jaxitem1">

                                                    <span class="contacts-title">MATHS</span>
                                                    <p><span id="sub_id">213</span></p>
                                                    <div class="list-group-controls">
                                                        <button class="btn btn-primary btn-rounded"><span class="fa fa-pencil"></span></button>
                                                        <button class="btn btn-primary btn-rounded sub_remove" id="del"><span class="fa fa-times"></span></button>
                                                    </div>
                                                </a>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-fourth">
                                <div class="col-md-12">

                                    <!-- CONTACTS WITH CONTROLS -->
                                    <div class="panel panel-default subform">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">SUBJECTS</h3>
                                        </div>
                                        <form id="something" method="POST" action="scripts/ajax/subdel.php">

                                            <input type="hidden" id="hide" name="hid"/>


                                            <div class="panel-body list-group list-group-contacts ">
                                                <a href="#" class="list-group-item " id="jaxitem1">

                                                    <div class="form-group grp-center" style="margin-left: auto; margin-right: auto">

                                                        <div class="col-md-6">
                                                            <div class="input-group input-group-lg">
                                                                <span class="input-group-addon">+</span>
                                                                <input type="text" class="form-control" placeholder="Large"/>
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class="list-group-controls">

                                                        <!--<button class="btn btn-primary btn-rounded sub_remove" id="del"><span class="fa fa-times"></span></button>-->
                                                    </div>
                                                    <span class="help-block">ADD SUBJECT</span><br/>
                                                </a>


                                            </div>


                                            <div class="panel-body list-group list-group-contacts ">
                                                <a href="#" class="list-group-item " id="jaxitem1">

                                                    <span class="contacts-title">MATHS</span>
                                                    <p><span id="sub_id">213</span></p>
                                                    <div class="list-group-controls">
                                                        <button class="btn btn-primary btn-rounded"><span class="fa fa-pencil"></span></button>
                                                        <button class="btn btn-primary btn-rounded sub_remove" id="del"><span class="fa fa-times"></span></button>
                                                    </div>
                                                </a>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-fifth">
                                <div class="col-md-12">

                                    <!-- CONTACTS WITH CONTROLS -->
                                    <div class="panel panel-default subform">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">SUBJECTS</h3>
                                        </div>
                                        <form id="something" method="POST" action="scripts/ajax/subdel.php">

                                            <input type="hidden" id="hide" name="hid"/>


                                            <div class="panel-body list-group list-group-contacts ">
                                                <a href="#" class="list-group-item " id="jaxitem1">

                                                    <div class="form-group grp-center" style="margin-left: auto; margin-right: auto">

                                                        <div class="col-md-6">
                                                            <div class="input-group input-group-lg">
                                                                <span class="input-group-addon">+</span>
                                                                <input type="text" class="form-control" placeholder="Large"/>
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class="list-group-controls">

                                                        <!--<button class="btn btn-primary btn-rounded sub_remove" id="del"><span class="fa fa-times"></span></button>-->
                                                    </div>
                                                    <span class="help-block">ADD SUBJECT</span><br/>
                                                </a>


                                            </div>


                                            <div class="panel-body list-group list-group-contacts ">
                                                <a href="#" class="list-group-item " id="jaxitem1">

                                                    <span class="contacts-title">MATHS</span>
                                                    <p><span id="sub_id">213</span></p>
                                                    <div class="list-group-controls">
                                                        <button class="btn btn-primary btn-rounded"><span class="fa fa-pencil"></span></button>
                                                        <button class="btn btn-primary btn-rounded sub_remove" id="del"><span class="fa fa-times"></span></button>
                                                    </div>
                                                </a>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-sixth">
                                <div class="col-md-12">

                                    <!-- CONTACTS WITH CONTROLS -->
                                    <div class="panel panel-default subform">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">SUBJECTS</h3>
                                        </div>
                                        <form id="something" method="POST" action="scripts/ajax/subdel.php">

                                            <input type="hidden" id="hide" name="hid"/>


                                            <div class="panel-body list-group list-group-contacts ">
                                                <a href="#" class="list-group-item " id="jaxitem1">

                                                    <div class="form-group grp-center" style="margin-left: auto; margin-right: auto">

                                                        <div class="col-md-6">
                                                            <div class="input-group input-group-lg">
                                                                <span class="input-group-addon">+</span>
                                                                <input type="text" class="form-control" placeholder="Large"/>
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class="list-group-controls">

                                                        <!--<button class="btn btn-primary btn-rounded sub_remove" id="del"><span class="fa fa-times"></span></button>-->
                                                    </div>
                                                    <span class="help-block">ADD SUBJECT</span><br/>
                                                </a>


                                            </div>


                                            <div class="panel-body list-group list-group-contacts ">
                                                <a href="#" class="list-group-item " id="jaxitem1">

                                                    <span class="contacts-title">MATHS</span>
                                                    <p><span id="sub_id">213</span></p>
                                                    <div class="list-group-controls">
                                                        <button class="btn btn-primary btn-rounded"><span class="fa fa-pencil"></span></button>
                                                        <button class="btn btn-primary btn-rounded sub_remove" id="del"><span class="fa fa-times"></span></button>
                                                    </div>
                                                </a>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-seventh">
                                <div class="col-md-12">

                                    <!-- CONTACTS WITH CONTROLS -->
                                    <div class="panel panel-default subform">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">SUBJECTS</h3>
                                        </div>
                                        <form id="something" method="POST" action="scripts/ajax/subdel.php">

                                            <input type="hidden" id="hide" name="hid"/>


                                            <div class="panel-body list-group list-group-contacts ">
                                                <a href="#" class="list-group-item " id="jaxitem1">

                                                    <div class="form-group grp-center" style="margin-left: auto; margin-right: auto">

                                                        <div class="col-md-6">
                                                            <div class="input-group input-group-lg">
                                                                <span class="input-group-addon">+</span>
                                                                <input type="text" class="form-control" placeholder="Large"/>
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class="list-group-controls">

                                                        <!--<button class="btn btn-primary btn-rounded sub_remove" id="del"><span class="fa fa-times"></span></button>-->
                                                    </div>
                                                    <span class="help-block">ADD SUBJECT</span><br/>
                                                </a>


                                            </div>


                                            <div class="panel-body list-group list-group-contacts ">
                                                <a href="#" class="list-group-item " id="jaxitem1">

                                                    <span class="contacts-title">MATHS</span>
                                                    <p><span id="sub_id">213</span></p>
                                                    <div class="list-group-controls">
                                                        <button class="btn btn-primary btn-rounded"><span class="fa fa-pencil"></span></button>
                                                        <button class="btn btn-primary btn-rounded sub_remove" id="del"><span class="fa fa-times"></span></button>
                                                    </div>
                                                </a>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-eighth">
                                <div class="col-md-12">

                                    <!-- CONTACTS WITH CONTROLS -->
                                    <div class="panel panel-default subform">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">SUBJECTS</h3>
                                        </div>
                                        <form id="something" method="POST" action="scripts/ajax/subdel.php">

                                            <input type="hidden" id="hide" name="hid"/>


                                            <div class="panel-body list-group list-group-contacts ">
                                                <a href="#" class="list-group-item " id="jaxitem1">

                                                    <div class="form-group grp-center" style="margin-left: auto; margin-right: auto">

                                                        <div class="col-md-6">
                                                            <div class="input-group input-group-lg">
                                                                <span class="input-group-addon">+</span>
                                                                <input type="text" class="form-control" placeholder="Large"/>
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class="list-group-controls">

                                                        <!--<button class="btn btn-primary btn-rounded sub_remove" id="del"><span class="fa fa-times"></span></button>-->
                                                    </div>
                                                    <span class="help-block">ADD SUBJECT</span><br/>
                                                </a>


                                            </div>


                                            <div class="panel-body list-group list-group-contacts ">
                                                <a href="#" class="list-group-item " id="jaxitem1">

                                                    <span class="contacts-title">MATHS</span>
                                                    <p><span id="sub_id">213</span></p>
                                                    <div class="list-group-controls">
                                                        <button class="btn btn-primary btn-rounded"><span class="fa fa-pencil"></span></button>
                                                        <button class="btn btn-primary btn-rounded sub_remove" id="del"><span class="fa fa-times"></span></button>
                                                    </div>
                                                </a>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END TABS -->
                </div>


    </div>
        <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
        <!-- END PLUGINS -->

        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <!-- END PAGE PLUGINS -->

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>

        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/actions.js"></script>
        <!-- END TEMPLATE -->
        <!-- END SCRIPTS -->

            <script type="text/javascript">
                $(".subform").on('click','.sub_remove', function(e){
                    e.preventDefault();
                    console.log('Clicked');
                    $('#jaxitem1').css('display','none');
                    $('#hide').val($('#sub_id').text());

                        $.ajax({
                            type:'POST',
                            url:'scripts/ajax/subdel.php',
                            data:$('#something').serialize(),
                            success: function(data){
                                console.log(data);
                            }
                        });

                });
            </script>
</body>
</html>
