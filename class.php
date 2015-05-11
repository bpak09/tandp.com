<?php
        session_start();
        require ("includes/db.php");
        //get page id
        $stmt = $db->prepare("SELECT id, forum_name FROM forum_table;");
        $stmt->bindParam(':id',$id);
        $stmt->bindParam(':forum_name', $forum_name);
        $stmt->execute();

        $result = $stmt->fetchall(PDO::FETCH_ASSOC);

        $mysql = $db->prepare("SELECT id, title, body FROM forum_posts WHERE forum_id ='$id AND type = 'o'");
        $stmt->bindParam(':id',$id);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':body', $body);
        $stmt->execute();

        $result = $stmt->fetchall(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Class Portal</title>

    <!-- Modal -->
    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <script src="js/modernizr.custom.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" type='text/css' />
    <link href="css/font-awesome.css" rel="stylesheet" type='text/css' />

    <!-- Owl Carousel Assets -->
    <link href="css/owl.carousel.css" rel="stylesheet" type='text/css' />
    <link href="css/slider.css" rel="stylesheet" type='text/css' />
    <link href="css/style.css" rel="stylesheet" type='text/css' />

    <!-- Custom styles for this template -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet" type="text/css" />

    <!-- Demo Examples -->
    <link href="css/switcher.css" rel="stylesheet" type='text/css' />
    <link rel="alternate stylesheet" type="text/css" href="css/style.css" title="one" />
    <!-- END Demo Examples -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="content6" id="home">
    <div class="navbg"></div>
    <div class="wrap">
        <div class="header_style">
            <div class="h_menu">
                <ul class="flexy-menu thick orange">
                    <li> <a href="index.html"><img src="images/homethumb.png" alt="" width="50px" height="40px"/>HOME</a></li>
                    <li><a href="about.html" ><img src="images/aboutthumb.png" alt="" width="50px" height="40px"/>ABOUT</a></li>
                </ul>
            </div>
            <div class="logo">
                <a href="index.html"><img src="images/tpw.png" alt=""/></a>
            </div>
            <div class="clearfix"></div>
        </div></div>
        <div class="slider">
            <div id="da-slider" class="da-slider">
                <div class="da-slide">
                    <div class="tandp">
                        <img class="tp" src="images/forum1.png" alt="" width="130px" height="120"/>
                        <h1>Class Portal</h1>
                    </div>
                </div>
            </div>
            <div class="down-arrow">
                <a href="#why" class="scroll" ><span> </span></a>
            </div>
        </div>
    </div>
</div>
<!--forms-->
<div class="content5" id="why">
    <section class="text-light">
        <div  class="wrap">
            <div class="row-content1">
                <h1>Forms</h1>
                <div class="col-md-12 text-center">
                    <aside>
                        <div class="formcontent">
                            <h1 class="title">School Forms</h1>
                            <img src="images/forms.png" width="95" height="97" alt=""/>
                            <br/>
                            <a href="#">Registration Form</a>
                            <a href="#">Emergency Contact</a>
                        </div>
                    </aside>
                    <aside>
                        <div class="formcontent">
                            <h1 class="title">Class Forms</h1>
                            <img src="images/forms.png" width="95" height="97" alt=""/>
                            <br/>
                            <a href="#">Field Trip</a><br/>
                            <a href="#">Volunteer Form</a>
                        </div>
                    </aside>
                    <aside>
                        <div class="formcontent">
                            <h1 class="title">Allergy Forms</h1>
                            <img src="images/forms.png" width="95" height="97" alt=""/>
                            <br/>
                            <a href="#">Allergy Form</a>
                            <a href="#">Medication Form</a>
                        </div>
                    </aside>
                </div><!-- col-md-12 -->
                <div class="clearfix"></div>
            </div>
        </div>
    </section>
</div>
<!--Gallery-->
<div class="content5" id="gallery">
    <h3>Class Gallery Below</h3>
    <p>(click to scroll)</p>
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/fieldtrip2.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Our class field trips!</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/fieldtrip.jpg');"></div>
                <div class="carousel-caption">
                    <h2>It's so much fun!</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/fieldtrip3.jpg');"></div>
                <div class="carousel-caption">
                    <h2>We love to learn!</h2>
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
</div>
<button id="gbutton" class="md-trigger" data-modal="modal-4">Image Gallery>>></button>
<div class="md-modal md-effect-4" id="modal-4">
    <h3 class="modalhead1">Class Gallery</h3><a href="#close" class="md-close">X</a>
    <div class="md-content">
        <div>
            <div class="container">
                <img class="gallery" src="images/gallery.png" alt="" width="90px" height="90px"/>
                <ul class="row">
                    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"><img src="images/parent.jpg"/></li>
                    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"><img src="images/class.jpg"/></li>
                    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"><img src="images/fieldtrip3.jpg"/></li>
                    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"><img src="images/fieldtrip2.jpg"/></li>
                    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"><img src="images/fieldtrip.jpg"/></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="md-overlay" id="modal4"></div>
<div class="content5">
    <div class="calendar" id="calendar">
        <section class="text-light">
            <div  class="wrap">
                <div class="row-content1">
                    <h1>Calendar</h1>
                    <section class="calendarcontent">
                        <h3>Welcome to Week 1!</h3>
                        <h4>Date:</h4>
                        <h4>This is the Happ's for the week:</h4>
                    </section>
                    <section class="calendarcontent">
                        <h3>Welcome to Week 2!</h3>
                        <h4>Date:</h4>
                        <h4>This is the Happ's for the week:</h4>
                    </section>
                    <section class="calendarcontent">
                        <h3>Welcome to Week 3!</h3>
                        <h4>Date:</h4>
                        <h4>This is the Happ's for the week:</h4>
                    </section>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </section>
    </div>
</div>
<div id="container">
    <table>
        <tbody>
            <?php foreach($result as $row): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['forum_name']; ?></td>
                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
</div>
<div class="content5">
    <div class="parent" id="forum">
        <section class="text-light">
            <div  class="wrap">
                <div class="row-content1">
                    <h1>Class Forum</h1>
                    <div class="forum-header">
                        <h4>Comments</h4>
                    </div>
                    <div class="response">
                        <form id="new_comment" class="content-form disabled-form" method="post" data-remote="true" action="" accept-charset="UTF-8">
                        </form>
                    </div>
                    <div class="comments">
                        <ul class="responselist">
                            <li id="comment" class="response">
                                <div class="response-avatar">
                                    <a href="#">
                                        <img class="avatar avatar-small" width="80" height="80" src="https://secure.gravatar.com/avatar/2330e26b44d05ca02015ab48282a7e9c?secure=true&d=identicon" alt="chartrandf">
                                    </a>
                                </div>
                                <div>
                                    <div class="response-name">
                                        <a href="#">username</a>
                                    </div>
                                    <div class="response-time">
                                        <a rel="nofollow" href="#">date</a>
                                    </div>
                                </div>
                                <div class="response-body">
                                    <p>This is the forum content!</p>
                                </div>
                                <div class="clear"></div>
                            </li>
                            <li  class="response">
                                <div class="response-avatar">
                                    <a href="#">
                                        <img class="avatar avatar-small" width="80" height="80" src="https://secure.gravatar.com/avatar/2330e26b44d05ca02015ab48282a7e9c?secure=true&d=identicon" alt="chartrandf">
                                    </a>
                                </div>
                                <div>
                                    <div class="response-name">
                                        <a href="#">username</a>
                                    </div>
                                    <div class="response-time">
                                        <a rel="nofollow" href="#">date</a>
                                    </div>
                                </div>
                                <div class="response-body">
                                    <p>This is the forum content!</p>
                                </div>
                                <div class="clear"></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<!-- =======================================
Footer
======================================== -->
<footer class="dark-bg">
<div class="footer-bottom">
    <div class="container inner">
        <div class="row">
            <div class="col-md-6">
                <p class="copy">&copy; 2014 A.K. All Rights Reserved.</p>
            </div>
            <div class="col-md-6">
                <ul class="footer-menu">
                    <li><a href="#home" class="scroll">Home</a></li>
                    <li><a href="#why" class="scroll">Forms</a></li>
                    <li><a href="#gallery" class="scroll">Gallery</a></li>
                    <li><a href="#calendar" class="scroll">Calendar</a></li>
                    <li><a href="#forum" class="scroll">Forum</a></li>
                </ul>
            </div>
            <div class="socialmedia2">
                <a href="#"><img src="images/facebook.png" width="50px" height="50px"></a>
                <a href="#"><img src="images/twitter.png" width="50px" height="50px"></a>
                <a href="#"><img src="images/pintrest.png" width="50px" height="50px"></a>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
</footer>
<!-- =======================================
Footer End
======================================== -->
<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
<script src="js/classie.js"></script>
<script src="js/modalEffects.js"></script>



<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

<!--menu -->
<script type="text/javascript" src="js/flexy-menu.js"></script>
<!-- slider -->
<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
<script type="text/javascript" src="js/jquery.cslider.js"></script>

<!-- scroll_top_btn -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>

<!-- chart -->
<script type="text/javascript" src="js/plugins.js"></script>
<script type="text/javascript" src="js/script.js"></script>


<script type="text/javascript">
    $(document).ready(function(){
        $(".flexy-menu").flexymenu({
            speed: 400,type: "horizontal",align: "right"
        });
    });

    //scroll
    $(document).ready(function() {
        var defaults = {
            containerID: 'toTop',
            containerHoverID: 'toTopHover',
            scrollSpeed: 1200,
            easingType: 'linear'
        };
        $().UItoTop({ easingType: 'easeOutQuart' });
    });
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
        });
    });
</script>
</body>
</html>
