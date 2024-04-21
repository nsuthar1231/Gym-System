<?php
session_start();
include('dbcon.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gym System Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="css/matrix-style.css" />
    <link rel="stylesheet" href="css/matrix-login.css" />
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>

<body>

    <div id="loginbox">
        <form id="registerform" action="../customer/pages/register-cust.php" method="POST" class="form-vertical">
            <p class="normal_text">Enter your details below and we will send your details for further activation process.</p>

            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_lo"><i class="icon-pencil"></i></span><input type="text" name="fullname" placeholder="Fullname" />
                </div>
            </div>

            <br>

            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_lo"><i class="icon-leaf"></i></span><input type="text" name="username" placeholder="@username" />
                </div>
            </div>

            <br>

            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_lo"><i class="icon-asterisk"></i></span><input type="password" name="password" placeholder="Password" />
                </div>
            </div>

            <br>

            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_lo"><i class="icon-leaf"></i></span><input type="number" name="contact" placeholder="7878787878" />
                </div>
            </div>

            <br>

            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_lo"><i class="icon-asterisk"></i></span><input type="text" name="address" placeholder="Address" />
                </div>
            </div>

            <br>

            <div class="controls">
                <div class="main_input_box">
                    <select name="gender" required="required">
                        <option value="Male" selected="selected">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
            </div>

            <br>

            <div class="controls">
                <div class="main_input_box">
                    <select name="plan" required="required">
                        <option selected="true" disabled="disabled">Select Plans</option>
                        <option value="1">One Month</option>
                        <option value="3">Three Month</option>
                        <option value="6">Six Month</option>
                        <option value="12">One Year</option>
                    </select>
                </div>
            </div>

            <br>

            <div class="controls">
                <div class="main_input_box">
                    <select name="services" required="required">
                        <option selected="true" disabled="disabled">Select Service</option>
                        <option value="Fitness">Fitness</option>
                        <option value="Sauna">Sauna</option>
                        <option value="Cardio">Cardio</option>
                    </select>
                </div>
            </div>


            <div class="form-actions">
                <span class="pull-left"><a href="index.php" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
                <span class="pull-right"><button class="btn btn-info" type="submit">Submit Details</button></span>
            </div>
        </form>
    </div>


    <script src="js/jquery.min.js"></script>
    <script src="js/matrix.login.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/matrix.js"></script>
</body>

</html>