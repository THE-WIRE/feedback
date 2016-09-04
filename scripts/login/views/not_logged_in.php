<?php include('_header.php'); ?>




    <div class="login-box animated fadeInDown">
        <div class="login-logo"></div>

        <div class="login-body">
            <div class="login-title"><strong>Welcome</strong>, Please login</div>
            <form action="index.php" class="form-horizontal" method="post">
                <div class="form-group">
                    <div class="col-md-12">
                        <input id="user_name" name="user_name" type="text" class="form-control" placeholder="Username"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <input id="user_password" name="user_password" type="password" class="form-control" placeholder="Password"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <a href="#" class="btn btn-link btn-block">Forgot your password?</a>
                    </div>
                    <div class="col-md-6">

                        <input type="submit" name="login" class="btn btn-success btn-block" value="<?php echo WORDING_LOGIN; ?>" />
                    </div>
                </div>
            </form>
        </div>
        <div class="login-footer">
            <div class="pull-left">
                &copy; 2016 Feedback Systems
            </div>
            <div class="pull-right">
                <a href="#">About</a> |
                <a href="#">Privacy</a> |
                <a href="#">Contact Us</a>
            </div>
        </div>
    </div>

</div>

</body>
<?php include('_footer.php'); ?>
