<?php
include 'C:\Users\nihar\Documents\src\database.php'
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />
    <title>Alerigia's Pizza</title>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="This is a free Bootstrap landing page theme created for BootstrapZero. Feature video background and one page design." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Codeply">
    <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
    <style>
        /*
         Landing Zero theme - A free landing page theme from BootstrapZero
         http://www.bootstrapzero.com
         */
        @import url(https://fonts.googleapis.com/css?family=Questrial);
        @import url(https://fonts.googleapis.com/css?family=Dancing+Script:700);

        html,
        body {
            width: 100%;
            height: 100%;
        }

        body {
            font-family: 'Questrial', 'Helvetica Neue', Arial, sans-serif;
            background-color: #282828;
            color: #d3d3d3;
            /*webkit-tap-highlight-color: #222;*/
        }

        hr {
            max-width: 80px;
            border-width: 3px;
            opacity: 0.09;
            margin-top: 15px;
            margin-bottom: 15px;
        }

        hr.light {
            border-color: #fff;
        }

        a {
            color: #9c27b0;
            -webkit-transition: all .35s;
            -moz-transition: all .35s;
            transition: all .35s;
        }

        a:hover,
        a:focus {
            color: #9c27c1;
            outline: 0;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Questrial', 'Helvetica Neue', Arial, sans-serif;
        }

        p {
            font-size: 17px;
            line-height: 1.7;
            margin-bottom: 20px;
        }

        .wide-space {
            letter-spacing: 1.6px;
        }

        .icon-lg {
            font-size: 50px;
            line-height: 18px;
        }

        .bg-primary {
            background-color: #333;
        }

        .bg-dark {
            color: #eee;
            background-color: #222;
        }

        .cursive {
            font-family: 'Dancing Script', cursive;
            text-transform: none;
        }

        .text-faded {
            color: rgba(245, 245, 245, 0.7);
        }

        .text-dark {
            color: #111;
        }

        .text-primary {
            color: #9c27b0;
        }

        .modal-content {
            background-color: #1d1d1d;
        }

        section {
            padding: 70px 0;
        }

        aside {
            padding: 50px 0;
        }

        footer {
            padding: 15px;
        }

        .no-padding {
            padding: 0;
        }

        .navbar-default {
            border-color: rgba(35, 35, 35, .05);
            font-family: 'Questrial', 'Helvetica Neue', Arial, sans-serif;
            background-color: #222;
            -webkit-transition: all .4s;
            -moz-transition: all .4s;
            transition: all .4s;
        }

        .navbar-header>.navbar-brand {
            font-family: 'Questrial', 'Helvetica Neue', Arial, sans-serif;
            color: #9c27b0;
            padding: 15px;
            -webkit-transition: padding .2s ease-in;
            -moz-transition: padding .2s ease-in;
            transition: padding .2s ease-in;
        }

        .navbar-header>.navbar-brand:hover,
        .navbar-header>.navbar-brand:focus {
            color: #8b27b0;
        }

        .navbar-default .navbar-toggle:focus,
        .navbar-default .navbar-toggle:hover {
            background-color: #181818;
        }

        .navbar-default .navbar-toggle,
        .navbar-default .navbar-collapse {
            border-color: transparent;
        }

        .navbar-default .nav>li>a,
        .navbar-default .nav>li>a:focus {
            text-transform: uppercase;
            font-size: 13px;
            font-weight: 700;
            color: #eee;
        }

        .navbar-default .nav>li>a:hover,
        .navbar-default .nav>li>a:focus:hover {
            color: #9c27b0;
        }

        .navbar-default .nav>li.active>a,
        .navbar-default .nav>li.active>a:focus {
            color: #9c27b0 !important;
            background-color: transparent;
        }

        .navbar-default .nav>li.active>a:hover,
        .navbar-default .nav>li.active>a:focus:hover {
            background-color: transparent;
        }

        @media(min-width:768px) {
            .navbar-default {
                border-color: transparent;
                background-color: transparent;
                min-height: 60px;
            }

            .navbar-header>.navbar-brand {
                color: rgba(255, 255, 255, 0.7);
                padding: 19px;
            }

            .navbar-default .navbar-header .navbar-brand:hover,
            .navbar-default .navbar-header .navbar-brand:focus {
                color: #f4f4f4;
            }

            .navbar-default .nav>li>a,
            .navbar-default .nav>li>a:focus {
                color: rgba(255, 255, 255, 0.8);
                padding: 20px;
                letter-spacing: 1.1px;
                text-shadow: 1px 1px 1px rgba(60, 60, 60, 0.7);
            }

            .navbar-default .nav>li>a:hover,
            .navbar-default .nav>li>a:focus:hover {
                color: #fefefe;
            }

            .navbar-default.affix {
                border-color: rgba(34, 34, 34, .05);
                background-color: #222;
            }

            .navbar-default.affix .navbar-header .navbar-brand {
                font-size: 15px;
                color: #9c27b0;
                padding: 20px;
                letter-spacing: 1px;
            }

            .navbar-default.affix .navbar-header .navbar-brand:hover,
            .navbar-default.affix .navbar-header .navbar-brand:focus {
                color: #8b27b0;
            }

            .navbar-default.affix .nav>li>a,
            .navbar-default.affix .nav>li>a:focus {
                color: #ddd;
                text-shadow: 1px 1px 1px rgba(30, 30, 30, 0.7);
            }

            .navbar-default.affix .nav>li>a:hover,
            .navbar-default.affix .nav>li>a:focus:hover {
                color: #9c27b0;
            }
        }

        header {
            position: relative;
            min-height: auto;
            text-align: center;
            color: #fff;
            width: 100%;
            background-color: #c9c9c9;
            background-image: url('https://splashbase.s3.amazonaws.com/lifeofpix/regular/Life-of-Pix-free-stock-photos-Slate-Stone-Xeromatic-1440x953.jpg');
            background-position: center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
        }

        header .header-content {
            position: relative;
            width: 100%;
            padding: 100px 15px;
            text-align: center;
            z-index: 2;
        }

        header .header-content .inner h1 {
            margin-top: 0;
            margin-bottom: 0;
        }

        header .header-content .inner p {
            margin-bottom: 50px;
            font-size: 16px;
            font-weight: 300;
            color: rgba(255, 255, 255, 0.7);
        }

        #video-background {
            position: absolute;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: 1;
        }

        #video-background.collapsing {
            display: none;
        }

        footer {
            background-color: #2d2d2d;
        }

        @media(min-width:768px) {
            .icon-lg {
                font-size: 80px;
            }

            header {
                min-height: 100%;
            }

            header .header-content {
                position: absolute;
                top: 50%;
                padding: 0 50px;
                -webkit-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                transform: translateY(-50%);
            }

            header .header-content .inner {
                margin-right: auto;
                margin-left: auto;
                max-width: 1000px;
            }

            header .header-content .inner h1 {
                font-size: 53px;
            }

            header .header-content .inner p {
                margin-right: auto;
                margin-left: auto;
                max-width: 80%;
                font-size: 18px;
            }

            section {
                min-height: 600px;
                padding: 100px 0;
            }
        }

        .form-control {
            display: block;
            width: 100%;
            height: 35px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.5;
            color: #eee;
            background-color: #36333d;
            background-image: none;
            border: 1px solid #36333d;
            border-radius: 4px;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        }

        .form-control:focus {
            color: #222;
            background-color: #ccc;
            box-shadow: none;
        }

        textarea {
            resize: none;
        }

        .margin-top-0 {
            margin-top: 0;
        }

        .feature {
            margin: 50px auto 0;
            max-width: 400px;
        }

        @media(min-width:992px) {
            .feature {
                margin: 20px auto 0;
            }
        }

        .feature p {
            margin-bottom: 0;
        }

        .call-to-action h2 {
            margin: 0 auto 20px;
        }

        .gallery-box {
            display: block;
            position: relative;
            margin: 0 auto;
            max-width: 650px;
            overflow: hidden;
        }

        .gallery-box .gallery-box-caption {
            display: block;
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 100%;
            text-align: center;
            color: #fff;
            opacity: 0;
            background: rgba(44, 44, 44, .8);
            -webkit-transition: all .35s;
            -moz-transition: all .35s;
            transition: all .35s;
        }

        .gallery-box .gallery-box-caption .gallery-box-content {
            position: absolute;
            top: 50%;
            width: 100%;
            text-align: center;
            transform: translateY(-50%);
        }

        .gallery-box:hover .gallery-box-caption {
            opacity: 1;
        }

        .gallery-box:hover img {
            -webkit-transform: scale(1.1);
            -ms-transform: scale(1.1);
            transform: scale(1.1);
        }

        .gallery-box img {
            -webkit-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
        }

        .no-gutter>[class*=col-] {
            padding-right: 0;
            padding-left: 0;
        }

        .btn-default {
            border-color: #fff;
            color: #222;
            background-color: #fff;
            -webkit-transition: all .35s;
            -moz-transition: all .35s;
            transition: all .35s;
        }

        .btn-default:hover,
        .btn-default:focus,
        .btn-default.focus,
        .btn-default:active,
        .btn-default.active,
        .open>.dropdown-toggle.btn-default {
            border-color: #ededed;
            color: #222;
            background-color: #f2f2f2;
            opacity: 0.7;
        }

        .btn-default:active,
        .btn-default.active,
        .open>.dropdown-toggle.btn-default {
            background-image: none;
        }

        .btn-default.disabled,
        .btn-default[disabled],
        fieldset[disabled] .btn-default,
        .btn-default.disabled:hover,
        .btn-default[disabled]:hover,
        fieldset[disabled] .btn-default:hover,
        .btn-default.disabled:focus,
        .btn-default[disabled]:focus,
        fieldset[disabled] .btn-default:focus,
        .btn-default.disabled.focus,
        .btn-default[disabled].focus,
        fieldset[disabled] .btn-default.focus,
        .btn-default.disabled:active,
        .btn-default[disabled]:active,
        fieldset[disabled] .btn-default:active,
        .btn-default.disabled.active,
        .btn-default[disabled].active,
        fieldset[disabled] .btn-default.active {
            border-color: #fff;
            background-color: #fff;
            opacity: 0.7;
        }

        .btn-default .badge {
            color: #fff;
            background-color: #222;
        }

        .btn.btn-primary {
            background-color: transparent;
            border: 1px solid #f0f0f0;
            border-color: #f0f0f0;
            -webkit-transition: all .35s;
            -moz-transition: all .35s;
            transition: all .35s;
        }

        .btn.btn-primary:hover {
            opacity: 0.7;
        }

        .btn {
            border: 0;
            border-radius: 290px;
            font-family: 'Helvetica Neue', Arial, sans-serif;
        }

        .btn-xl {
            padding: 15px 30px;
            font-size: 20px;
        }

        ::-moz-selection {
            text-shadow: none;
            color: #fff;
            background: #222;
        }

        ::selection {
            text-shadow: none;
            color: #fff;
            background: #222;
        }

        img::selection {
            color: #fff;
            background: 0 0;
        }

        img::-moz-selection {
            color: #fff;
            background: 0 0;
        }
    </style>
    <!-- AngularJS -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <script>
        window.console = window.console || function(t) {};
    </script>
    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
    </script>
</head>

<body>
    <nav id="topNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#first"><i class="ion-ios-analytics-outline"></i> Alerigia's Pizza</a>
            </div>
            <div class="navbar-collapse collapse" id="bs-navbar">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="page-scroll" href="#one">Intro</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#two">Menu</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#three">Catering</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#four">Gallery</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#last">Contact</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" data-toggle="modal" title="A free Bootstrap video landing theme" href="#aboutModal">About</a>
                    </li>
                    <!--<li>
                        <a id="my-dropdown" href="#" id="cart"><i class="fa fa-shopping-cart"></i> Cart <span class="badge">3</span></a>
                    </li>-->
                </ul>
            </div>
        </div>
    </nav>
    <header id="first">
        <div class="header-content">
            <div class="inner">
                <h1 class="cursive">Alergia's Pizza</h1>
                <h4>502 Union Ave Belleville, NJ</h4>
                <hr>
                <a href="#video-background" id="toggleVideo" data-toggle="collapse" class="btn btn-primary btn-xl">Toggle Video</a> &nbsp; <a href="#two" class="btn btn-primary btn-xl page-scroll">Get Started</a>
            </div>
        </div>
        <video>
        </video>
    </header>
    <section class="bg-primary" id="one">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
                    <h2 class="margin-top-0 text-primary">Intro</h2>
                    <br>
                    <p class="text-faded">
                        Coming soon
                    </p>
                    <a href="#three" class="btn btn-default btn-xl page-scroll">OK</a>
                </div>
            </div>
        </div>
    </section>
    <section id="two">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h2 class="margin-top-0 text-primary">Menu</h2>
                <hr class="primary">
            </div>
            <table class="table table-borderless table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Appetizer</th>
                        <th>Price</th>
                        <th>Large</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $tsql = "SELECT * FROM appetizer";
                    $stmt = sqlsrv_query($conn, $tsql);
                    if ($stmt === false) {
                        echo "Error";
                        die(print_r(sqlsrv_errors(), true));
                    }
                    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                    ?>
                        <tr>
                            <td>
                                <?php echo $row['Name']; ?>
                                <p><?php echo $row['Description']; ?></p>
                            </td>
                            <td style="cursor:pointer" onclick="location.href='https://www.google.com'"><?php echo $row['Price'];  ?></td>
                            <td><?php echo $row['Large']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <table class="table table-borderless table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Pizza</th>
                        <th>Price</th>
                        <th>Large</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $tsql = "SELECT * FROM pizza";
                    $stmt = sqlsrv_query($conn, $tsql);
                    if ($stmt === false) {
                        echo "Error";
                        die(print_r(sqlsrv_errors(), true));
                    }
                    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                    ?>
                        <tr>
                            <td>
                                <?php echo $row['Name']; ?>
                                <p><?php echo $row['Description']; ?></p>
                            </td>
                            <td style="cursor:pointer" onclick="location.href='https://www.google.com'"><?php echo $row['Price'];  ?></td>
                            <td><?php echo $row['Large']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <table class="table table-borderless table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Speciality Pizza</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $tsql = "SELECT * FROM speciality";
                    $stmt = sqlsrv_query($conn, $tsql);
                    if ($stmt === false) {
                        echo "Error";
                        die(print_r(sqlsrv_errors(), true));
                    }
                    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                    ?>
                        <tr>
                            <td>
                                <?php echo $row['Name']; ?>
                                <p><?php echo $row['Description']; ?></p>
                            </td>
                            <td style="cursor:pointer" onclick="location.href='https://www.google.com'"><?php echo $row['Price'];  ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <table class="table table-borderless table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Pasta</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $tsql = "SELECT * FROM pasta";
                    $stmt = sqlsrv_query($conn, $tsql);
                    if ($stmt === false) {
                        echo "Error";
                        die(print_r(sqlsrv_errors(), true));
                    }
                    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                    ?>
                        <tr>
                            <td>
                                <?php echo $row['Name']; ?>
                                <p><?php echo $row['Description']; ?></p>
                            </td>
                            <td style="cursor:pointer" onclick="location.href='https://www.google.com'"><?php echo $row['Price']; ?></td>

                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <table class="table table-borderless table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Baked Pasta</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $tsql = "SELECT * FROM bakedpasta";
                    $stmt = sqlsrv_query($conn, $tsql);
                    if ($stmt === false) {
                        echo "Error";
                        die(print_r(sqlsrv_errors(), true));
                    }
                    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                    ?>
                        <tr>
                            <td>
                                <?php echo $row['Name']; ?>
                                <p><?php echo $row['Description']; ?></p>
                            </td>
                            <td style="cursor:pointer" onclick="location.href='https://www.google.com'"><?php echo $row['Price']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <table class="table table-borderless table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Coldsub</th>
                        <th>Price</th>
                        <th>Large</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $tsql = "SELECT * FROM coldsub";
                    $stmt = sqlsrv_query($conn, $tsql);
                    if ($stmt === false) {
                        echo "Error";
                        die(print_r(sqlsrv_errors(), true));
                    }
                    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                    ?>
                        <tr>
                            <td>
                                <?php echo $row['Name']; ?>
                                <p><?php echo $row['Description']; ?></p>
                            </td>
                            <td style="cursor:pointer" onclick="location.href='https://www.google.com'"><?php echo $row['Price'];  ?></td>
                            <td><?php echo $row['Large']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <table class="table table-borderless table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Hotsub</th>
                        <th>Price</th>
                        <th>Large</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $tsql = "SELECT * FROM hotsub";
                    $stmt = sqlsrv_query($conn, $tsql);
                    if ($stmt === false) {
                        echo "Error";
                        die(print_r(sqlsrv_errors(), true));
                    }
                    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                    ?>
                        <tr>
                            <td>
                                <?php echo $row['Name']; ?>
                                <p><?php echo $row['Description']; ?></p>
                            </td>
                            <td style="cursor:pointer" onclick="location.href='https://www.google.com'"><?php echo $row['Price'];  ?></td>
                            <td><?php echo $row['Large']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <table class="table table-borderless table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Speciality Sub</th>
                        <th>Price</th>
                        <th>Large</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $tsql = "SELECT * FROM specialitysub";
                    $stmt = sqlsrv_query($conn, $tsql);
                    if ($stmt === false) {
                        echo "Error";
                        die(print_r(sqlsrv_errors(), true));
                    }
                    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                    ?>
                        <tr>
                            <td>
                                <?php echo $row['Name']; ?>
                                <p><?php echo $row['Description']; ?></p>
                            </td>
                            <td style="cursor:pointer" onclick="location.href='https://www.google.com'"><?php echo $row['Price'];  ?></td>
                            <td><?php echo $row['Large']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <table class="table table-borderless table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Burger</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $tsql = "SELECT * FROM burger";
                    $stmt = sqlsrv_query($conn, $tsql);
                    if ($stmt === false) {
                        echo "Error";
                        die(print_r(sqlsrv_errors(), true));
                    }
                    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                    ?>
                        <tr>
                            <td>
                                <?php echo $row['Name']; ?>
                                <p><?php echo $row['Description']; ?></p>
                            </td>
                            <td style="cursor:pointer" onclick="location.href='https://www.google.com'"><?php echo $row['Price'];  ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <table class="table table-borderless table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Panini</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $tsql = "SELECT * FROM panini";
                    $stmt = sqlsrv_query($conn, $tsql);
                    if ($stmt === false) {
                        echo "Error";
                        die(print_r(sqlsrv_errors(), true));
                    }
                    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                    ?>
                        <tr>
                            <td>
                                <?php echo $row['Name']; ?>
                                <p><?php echo $row['Description']; ?></p>
                            </td>
                            <td style="cursor:pointer" onclick="location.href='https://www.google.com'"><?php echo $row['Price'];  ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <table class="table table-borderless table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Wrap</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $tsql = "SELECT * FROM wrap";
                    $stmt = sqlsrv_query($conn, $tsql);
                    if ($stmt === false) {
                        echo "Error";
                        die(print_r(sqlsrv_errors(), true));
                    }
                    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                    ?>
                        <tr>
                            <td>
                                <?php echo $row['Name']; ?>
                                <p><?php echo $row['Description']; ?></p>
                            </td>
                            <td style="cursor:pointer" onclick="location.href='https://www.google.com'"><?php echo $row['Price'];  ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

            <table class="table table-borderless table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Seafood</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $tsql = "SELECT * FROM seafood";
                    $stmt = sqlsrv_query($conn, $tsql);
                    if ($stmt === false) {
                        echo "Error";
                        die(print_r(sqlsrv_errors(), true));
                    }
                    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                    ?>
                        <tr>
                            <td>
                                <?php echo $row['Name']; ?>
                                <p><?php echo $row['Description']; ?></p>
                            </td>
                            <td style="cursor:pointer" onclick="location.href='https://www.google.com'"><?php echo $row['Price']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <table class="table table-borderless table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Side</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $tsql = "SELECT * FROM side";
                    $stmt = sqlsrv_query($conn, $tsql);
                    if ($stmt === false) {
                        echo "Error";
                        die(print_r(sqlsrv_errors(), true));
                    }
                    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                    ?>
                        <tr>
                            <td>
                                <?php echo $row['Name']; ?>
                                <p><?php echo $row['Description']; ?></p>
                            </td>
                            <td style="cursor:pointer" onclick="location.href='https://www.google.com'"><?php echo $row['Price']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
    <section id="three" class="no-padding">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h2 class="margin-top-0 text-primary">Catering</h2>
                <hr class="primary">
                <p>Call to cater.</p>
            </div>
            <table class="table table-borderless table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Pollo</th>
                        <th>Price</th>
                        <th>Large</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $tsql = "SELECT * FROM pollo";
                    $stmt = sqlsrv_query($conn, $tsql);
                    if ($stmt === false) {
                        echo "Error";
                        die(print_r(sqlsrv_errors(), true));
                    }
                    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                    ?>
                        <tr>
                            <td>
                                <?php echo $row['Name']; ?>
                                <p><?php echo $row['Description']; ?></p>
                            </td>
                            <td><?php echo $row['half'];  ?></td>
                            <td><?php echo $row['fullprice']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <table class="table table-borderless table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Seafood</th>
                        <th>Price</th>
                        <th>Large</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $tsql = "SELECT * FROM sea";
                    $stmt = sqlsrv_query($conn, $tsql);
                    if ($stmt === false) {
                        echo "Error";
                        die(print_r(sqlsrv_errors(), true));
                    }
                    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                    ?>
                        <tr>
                            <td>
                                <?php echo $row['Name']; ?>
                                <p><?php echo $row['Description']; ?></p>
                            </td>
                            <td><?php echo $row['half'];  ?></td>
                            <td><?php echo $row['fullprice']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <table class="table table-borderless table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Pasta Bake</th>
                        <th>Price</th>
                        <th>Large</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $tsql = "SELECT * FROM pastabake";
                    $stmt = sqlsrv_query($conn, $tsql);
                    if ($stmt === false) {
                        echo "Error";
                        die(print_r(sqlsrv_errors(), true));
                    }
                    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                    ?>
                        <tr>
                            <td>
                                <?php echo $row['Name']; ?>
                                <p><?php echo $row['Description']; ?></p>
                            </td>
                            <td><?php echo $row['half'];  ?></td>
                            <td><?php echo $row['fullprice']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
    <section class="container-fluid" id="four">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <h2 class="text-center text-primary">Gallery</h2>
                <hr>
                <!--<div class="media wow fadeInRight">
                  <h3>Simple</h3>
                  <div class="media-body media-middle">
                     <p>What could be easier? Get started fast with this landing page starter theme.</p>
                  </div>
                  <div class="media-right">
                     <i class="icon-lg ion-ios-bolt-outline"></i>
                  </div>
               </div>
               <hr>
               <div class="media wow fadeIn">
                  <h3>Free</h3>
                  <div class="media-left">
                     <a href="#alertModal" data-toggle="modal" data-target="#alertModal"><i class="icon-lg ion-ios-cloud-download-outline"></i></a>
                  </div>
                  <div class="media-body media-middle">
                     <p>Yes, please. Grab it for yourself, and make something awesome with this.</p>
                  </div>
               </div>
               <hr>
               <div class="media wow fadeInRight">
                  <h3>Unique</h3>
                  <div class="media-body media-middle">
                     <p>Because you don't want your Bootstrap site, to look like a Bootstrap site.</p>
                  </div>
                  <div class="media-right">
                     <i class="icon-lg ion-ios-snowy"></i>
                  </div>
               </div>
               <hr>
               <div class="media wow fadeIn">
                  <h3>Popular</h3>
                  <div class="media-left">
                     <i class="icon-lg ion-ios-heart-outline"></i>
                  </div>
                  <div class="media-body media-middle">
                     <p>There's good reason why Bootstrap is the most used frontend framework in the world.</p>
                  </div>
               </div>
               <hr>
               <div class="media wow fadeInRight">
                  <h3>Tested</h3>
                  <div class="media-body media-middle">
                     <p>Bootstrap is matured and well-tested. It's a stable codebase that provides consistency.</p>
                  </div>
                  <div class="media-right">
                     <i class="icon-lg ion-ios-flask-outline"></i>
                  </div>
               </div>
            </div>
            </div>-->
    </section>
    <aside class="bg-dark">
        <!--<div class="container text-center">
            <div class="call-to-action">
               <h2 class="text-primary">Get Started</h2>
               <a href="http://www.bootstrapzero.com/bootstrap-template/landing-zero" target="ext" class="btn btn-default btn-lg wow flipInX">Free Download</a>
            </div>
            <br>
            <hr />
            <br>
            <div class="row">
               <div class="col-lg-10 col-lg-offset-1">
                  <div class="row">
                     <h6 class="wide-space text-center">BOOTSTRAP IS BASED ON THESE STANDARDS</h6>
                     <div class="col-sm-3 col-xs-6 text-center">
                        <i class="icon-lg ion-social-html5-outline" title="html 5"></i>
                     </div>
                     <div class="col-sm-3 col-xs-6 text-center">
                        <i class="icon-lg ion-social-sass" title="sass"></i>
                     </div>
                     <div class="col-sm-3 col-xs-6 text-center">
                        <i class="icon-lg ion-social-javascript-outline" title="javascript"></i>
                     </div>
                     <div class="col-sm-3 col-xs-6 text-center">
                        <i class="icon-lg ion-social-css3-outline" title="css 3"></i>
                     </div>
                  </div>
               </div>
            </div>
            </div>-->
    </aside>
    <section id="last">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="margin-top-0 wow fadeIn">Get in Touch</h2>
                    <hr class="primary">
                    <p>We love feedback. Fill out the form below and we'll get back to you as soon as possible.</p>
                </div>
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <form method="post" name="contact_form" action="mail.php">
                        <div class="col-md-4">
                            <label></label>
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="col-md-4">
                            <label></label>
                            <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="col-md-4">
                            <label></label>
                            <input type="text" class="form-control" name="phone" placeholder="Phone">
                        </div>
                        <div class="col-md-12">
                            <label></label>
                            <textarea class="form-control" rows="9" name="message" placeholder="Your message here.."></textarea>
                        </div>
                        <div class="col-md-4 col-md-offset-4">
                            <label></label>
                            <button type="button" data-toggle="modal" data-target="#alertModal" class="btn btn-primary btn-block btn-lg">Send <i class="ion-android-arrow-forward"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 col-sm-3 column">
                    <h4>Information</h4>
                    <!--<ul class="list-unstyled">
                     <li><a href="">Products</a></li>
                     <li><a href="">Services</a></li>
                     <li><a href="">Benefits</a></li>
                     <li><a href="">Developers</a></li>
                     </ul>-->
                </div>
                <div class="col-xs-6 col-sm-3 column">
                    <h4>About</h4>
                    <ul class="list-unstyled">
                        <li><a href="#first">Contact Us</a></li>
                        <li><a href="#">Delivery Information</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms &amp; Conditions</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-3 column">
                    <h4>Stay Posted</h4>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" title="No spam, we promise!" placeholder="Tell us your email">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#alertModal" type="button">Subscribe for updates</button>
                        </div>
                    </form>
                </div>
                <div class="col-xs-12 col-sm-3 text-right">
                    <h4>Follow</h4>
                    <ul class="list-inline">
                        <li><a rel="nofollow" href="" title="Twitter"><i class="icon-lg ion-social-twitter-outline"></i></a>&nbsp;</li>
                        <li><a rel="nofollow" href="https://www.facebook.com/pages/category/Pizza-Place/Algieris-Pizza-Restaurant-384754088262104/" title="Facebook"><i class="icon-lg ion-social-facebook-outline"></i></a>&nbsp;</li>
                        <li><a rel="nofollow" href="" title="Instagram"><i class="icon-lg ion-social-instagram-outline"></i></a></li>
                    </ul>
                </div>
            </div>
            <br />
        </div>
    </footer>
    <div id="galleryModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="//placehold.it/1200x700/222?text=..." id="galleryImage" class="img-responsive" />
                    <p>
                        <br />
                        <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">Close <i class="ion-android-close"></i></button>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="aboutModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h2 class="text-center">Landing Zero Theme</h2>
                    <h5 class="text-center">
                        A free, responsive landing page theme built by BootstrapZero.
                    </h5>
                    <p class="text-justify">
                        This is a single-page Bootstrap template with a sleek dark/grey color scheme, accent color and smooth scrolling. There are vertical content sections with subtle animations that are activated when scrolled into view using the jQuery WOW plugin. There is also a gallery with modals that work nicely to showcase your work portfolio. Other features include a contact form, email subscribe form, multi-column footer. Uses Questrial Google Font and Ionicons.
                    </p>
                    <p class="text-center"><a href="http://www.bootstrapzero.com">Download at BootstrapZero</a></p>
                    <br />
                    <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true"> OK </button>
                </div>
            </div>
        </div>
    </div>
    <div id="alertModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-body">
                    <h2 class="text-center">Nice Job!</h2>
                    <p class="text-center">You clicked the button, we get back to you as soon as possible.</p>
                    <p class="text-center">
                        <a></a>
                    </p>
                    <br />
                    <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">OK <i class="ion-android-close"></i></button>
                </div>
            </div>
        </div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>
    <script id="rendered-js">
        (function($) {
            "use strict";

            $('body').scrollspy({
                target: '.navbar-fixed-top',
                offset: 60
            });

            $('#topNav').affix({
                offset: {
                    top: 200
                }
            });

            new WOW().init();

            $('a.page-scroll').bind('click', function(event) {
                var $ele = $(this);
                $('html, body').stop().animate({
                        scrollTop: $($ele.attr('href')).offset().top - 60
                    },
                    1450, 'easeInOutExpo');
                event.preventDefault();
            });

            $('.navbar-collapse ul li a').click(function() {
                /* always close responsive nav after click */
                $('.navbar-toggle:visible').click();
            });

            $('#galleryModal').on('show.bs.modal', function(e) {
                $('#galleryImage').attr("src", $(e.relatedTarget).data("src"));
            });

        })(jQuery);
        //# sourceURL=pen.js
    </script>
    <!-- AngularJS code-->
</body>

</html>
