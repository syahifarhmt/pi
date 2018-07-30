<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title> Welcome to Zoonologia! </title>

    <!--<link href="http://fonts.googleapis.com/css?family=Raleway:100,600"rel="stylesheet" type="text/css" >-->

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<meta charset="utf-8">
	
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
				background-color: #f2d216;
		        color: #121010;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #121010;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;}
	</style>

</head>
<body>

<!--<div id="container">-->
<div class="flex-center position-ref full-height">
	<div class="content">
        <div class="title m-b-md">
                    Welcome to Zoonologia!
        </div>

        <div class="links">
                    <a href="<?php echo base_url("welcome") ?>">Home</a>
                    <a href="<?php echo base_url("blog") ?>">Article</a>
                    <a href="<?php echo base_url("about") ?>">About Us</a>
                    <a href="<?php echo base_url("login") ?>">Login</a>
        </div>
				
	</div>
</div>

	<!--<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>-->
</div>

</body>

</html>