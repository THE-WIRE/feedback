<!DOCTYPE html>
<html lang="en" class="body-full-height">
<head>
    <!-- META SECTION -->
    <title>Feedback Dashboard Login</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="../../../css/theme-default.css"/>
    <!-- EOF CSS INCLUDE -->
</head>

<body>
<div class="login-container">
<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo '<div class="alert alert-warning alert-dismissible" role="alert"><button class="close" aria-label="Close" type="button" data-dismiss="alert"><span aria-hidden="true">×</span></button>'.$message.'</div>';
        }
    }
}
?>

<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo '<div class="alert alert-danger" role="alert">'.$error.'</div';
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo '<div class="alert alert-warning alert-dismissible" role="alert"><button class="close" aria-label="Close" type="button" data-dismiss="alert"><span aria-hidden="true">×</span></button>'.$message.'</div>';
        }
    }
}
?>
