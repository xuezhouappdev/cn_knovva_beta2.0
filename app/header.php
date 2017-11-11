<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="cn" xml:lang="cn">
<head>
    <!-- Required meta tags -->

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!--    <link rel="icon" href="img/favicon.ico">-->

    <title><?php echo $pageTitle; ?></title>

    <meta property="og:url"           content="<?php echo $og_url; ?>" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="<?php echo $pageTitle; ?>" />
    <meta property="og:description"   content="<?php echo $og_des; ?>" />
    <meta property="og:image"         content="<?php echo $og_img; ?>" />
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!--bootstrap-->
    <!--bs file is in the scss -->

    <!-- Font Awesome Icons -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Animated -->
    <link rel="stylesheet" href="vendor/animate/animate.min.css">

    <!--fancybox-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" />

    <!--sweeralert-->
    <link rel="stylesheet" href="vendor/sweetalert2/dist/sweetalert2.min.css" />

    <!-- Costom CSS This file is converted from scss-->
    <link rel="stylesheet" href="./css/app.css">

    <!---->
    <link rel="stylesheet" href="vendor/lightgallery.js/dist/css/lightgallery.css">


    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-97114237-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-97114237-1');
    </script>


</head>

<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Header -->
<nav class="navbar navbar-toggleable-sm navbar-light sticky-top bg-faded <?php echo $headerClass; ?>" id="mynav">
    <div class="container">
    <!--        <button class="navbar-toggler navbar-toggler-left" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">-->
    <!--            <i class="fa fa-bars burgericon" aria-hidden="true"></i>-->
    <!--            <span class="icon-burger">&#xe900;</span>-->
    <!---->
    <!--        </button>-->

        <!--hamburger animation version-->
        <button class="hamburger hamburger--elastic navbar-toggler navbar-toggler-left" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
        </button>

        <a class="navbar-brand" href="index.php">
        <!--<img src="img/logo-trim.png" width="90" height="30" alt="Knovva Academy">-->
            <p class="animated flipInX"><img id="logoimg" src="img/KAlogo2.png" width="auto" height="30px" name="logoimg"> </p>
        </a>

        <a class="hidden-md-up program-visible" style="cursor: pointer" href="programs.php">
            <i class="fa fa-leanpub programsign" aria-hidden="true" ></i>
        </a>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" id="showwhencollapse">
                    <a class="nav-link" href="programs.php">学术项目</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="about.php">关于我们</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="careers.php">招聘信息</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal">联系我们</a>
                </li>

<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="http://blog.knovva.com/" target="_blank">blog</a>-->
<!--                </li>-->

<!--                <li class="nav-item dropdown">-->
<!--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                        更多-->
<!--                    </a>-->
<!--                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">-->
<!--                        <a class="dropdown-item" href="careers.php">招聘信息</a>-->
<!--                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#myModal">联系我们</a>-->
<!--                    </div>-->
<!--                </li>-->
            </ul>
        </div>
    </div>
</nav>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="contact-form-wrapper jumbotron" >
                    <div class="container">

                        <div class="contact-banner"  style="background: url('img/telegraph.jpg') center center no-repeat;background-size: cover; "  >
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-12">
<!--                                        <h3 >get in touch</h3>-->
                                        <!--               <p>we are looking forward to your  </p>-->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="form-area">

                                    <form role="form"  novalidate id="contact-form"  >
                                        <br style="clear:both">

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="名" minlength="2" REQUIRED>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="姓" required>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="邮箱" required>
                                        </div>

                                        <div class="form-group">
                                            <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="电话" >
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control" type="textarea" id="message" name="message" placeholder="留下您的信息" maxlength="140" rows="4" required></textarea>
                                        </div>

                                        <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right contact-submit">提交</button>

                                    </form>


                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
<!--            <div class="modal-footer">-->
<!--                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
<!--                <button type="button" class="btn btn-primary">Save changes</button>-->
<!--            </div>-->
        </div>
    </div>
</div>


