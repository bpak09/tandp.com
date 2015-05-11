<?php
     function redirect_to($new_location){
                         header("Location: " . $new_location);
                         exit;
                     }



    if(isset($_POST['submit'])){
        $username = $_POST["user"];
        $password =$_POST["pass"];

        if($username == "bpak09" && $password == "boberg01"){
            redirect_to("parent.php");

        }else{
            $message = "There were some issues";
        }
    }else{
        $username = "";
        $message = "Please login";
    }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
	<title>T &amp; P</title>

    <!-- Modal -->
    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <script src="js/modernizr.custom.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" type='text/css' />
    <link href="css/font-awesome.css" rel="stylesheet" type='text/css' />

	<link href="css/slider.css" rel="stylesheet" type='text/css' />
	<link href="css/style.css" rel="stylesheet" type='text/css' />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<div class="content" id="home">
        <div class="navbg"></div>
		<div class="wrap">
			<div class="header_style">
				<div class="h_menu">
                    <ul class="flexy-menu thick orange">
                        <li><a href="#home" class="active"><img src="images/homethumb.png" alt="" width="50px" height="40px"/>HOME</a></li>
                        <li><a href="about.html" ><img src="images/aboutthumb.png" alt="" width="50px" height="40px"/>ABOUT</a></li>
                        <li><a><button class="md-trigger" data-modal="modal-1"><img src="images/signupthumb.png" alt="" width="50px" height="40px"/>SIGNUP</button></a></li>
                    </ul>
				</div>
				<div class="logo">
                    <a href="index.html"><img src="images/tpw.png" alt=""/></a>
				</div>
				<div class="clearfix"></div>
			</div>

		   	<div class="slider">
				<div id="da-slider" class="da-slider">
					<div class="da-slide">
						<h2>Helping Teachers, Parents, &amp; Children<br/> make the Connection!</h2>
                        <a href="#"><p><br/>Refer a T &amp; P NOW! >>></p></a>
					</div>
				</div>
                <section>
                    <img class="signup" src="images/signupicon.png" alt="" width="100px" height="100"/>
                    <h2><button class="md-trigger" data-modal="modal-1">Sign up!</button></h2><!--343px w -->
                </section>
                <section>
                    <img class="signup" src="images/parenticon.png" alt="" width="100px" height="100"/>
                    <h2><button class="md-trigger" data-modal="modal-2">Parents!</button></h2>
                </section>
                <section>
                    <img class="signup" src="images/teachericon.png" alt="" width="100px" height="100"/>
                    <h2><button class="md-trigger" data-modal="modal-3">Teachers!</button></h2>
                </section>
				<div class="down-arrow">
				    <a href="#why" class="scroll" ><span> </span></a>
				</div>
			</div>
		</div>
	</div>

    <!-- =======================================
		Modal 1
		======================================== -->
    <div class="md-modal md-effect-1" id="modal-1">
        <h3 class="modalhead">Sign Up</h3><a href="#close" class="md-close">X</a>
        <div class="md-content">
            <div>
                <form class="sign" action="form_processing.php" method="post">
                    <img class="formicon" src="images/signupicon.png" alt="" width="90px" height="90px"/>
                    <label for="first-name">First Name</label>
                    <input id="first" type="text" name="first-name" title="Please provide your firstname." value="Please provide your firstname."><br>

                    <label for="last-name">Last Name</label>
                    <input id="last" type="text" name="last-name" title="Please enter your last name." value="Please enter your last name."><br>

                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" title="Please enter your email address." value="Please enter your email address."
                           required><br>
                    <label for="confirm">Confirm Address</label>
                    <input type="email" name="confirm" title="Confirm your email address" value="Confirm your email address"
                           required><br>
                    <label for="user-name">Username</label>
                    <input id="userName" type="text" name="user-name" title="Enter your username" value="Enter your username"
                           required><br>
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" title="Enter a password"
                           required><br>
                    <label for="pass-confirm">Confirm Password</label>
                    <input type="password" name="pass-confirm" title="Confirm your password"
                           required><br>
                    <input name="signinButton" type="button" id="register" value="Sign Up" />
                </form>
            </div>
        </div>
    </div>
    <div class="md-overlay"id="modal1"></div>
<?php echo $message; ?>
    <!-- =======================================
		Modal 2
		======================================== -->
    <div class="md-modal md-effect-2" id="modal-2">
        <h3 class="modalhead">Parent Login</h3><a href="#close" class="md-close">X</a>
        <div class="md-content">
            <div>
                <form class="plogin" action= "index.php" method="post">
                    <img class="ticon" src="images/parenticon.png" alt="" width="90px" height="90px"/>
                    <label>Username:</label><input name="user" class="inputs" type="text" id="user" value ="<?php echo htmlspecialchars($username) ?>"/><br>
                    <label>Password:</label><input name="pass" class="inputs" type="password" id="pass"/><br>
                    <input name="submit" type="submit" id="signinButton" value="Sign In" />
                </form>
            </div>
        </div>
    </div>
    <div class="md-overlay" id="modal2"></div>
    <!-- =======================================
		Modal 3
		======================================== -->
    <div class="md-modal md-effect-3" id="modal-3">
        <h3 class="modalhead">Teacher Login</h3><a href="#close" class="md-close">X</a>
        <div class="md-content">
            <div>
                <form class="plogin">
                    <img class="ticon" src="images/teachericon.png" alt="" width="90px" height="90px"/>
                    <label>Username:</label><input name="user" class="inputs" type="text" id="user2"/><br>
                    <label>Password:</label><input name="pass" class="inputs" type="password" id="pass2"/><br>
                    <input name="signinButton" type="button" id="signinButton2" value="Sign In" />
                </form>
            </div>
        </div>
    </div>
    <div class="md-overlay" id="modal3"></div>
    <!-- =======================================
		Why T&P
		======================================== -->
    <div class="content5" id="why">
        <section class="text-light">
            <div  class="wrap">
                <div class="row-content1">
                    <h1>Why T &amp; P?</h1>
                    <div class="col-md-12 text-center">
                        <aside>
                            <div class="whycontent">
                                <h1 class="title">Higher Test Scores!</h1>
                                <img src="images/tandpwhite.png" width="95" height="57" alt=""/>
                                <h4>Parental involvement is associated with higher student achievement outcomes!
                                </h4>
                                <a href="#">Learn more here!</a>
                            </div>
                        </aside>
                        <aside>
                            <div class="whycontent">
                                <h1 class="title">Fast, Easy, Effective!</h1>
                                <img src="images/tandpwhite.png" width="95" height="57" alt=""/>
                                <h4>T&P is focused on Teacher, Parent and Student success! We promise your experience will help make the connection while keeping it simple.
                                </h4>
                                <a href="about.html">Learn more here!</a>
                            </div>
                        </aside>
                        <aside>
                            <div class="whycontent">
                                <h1 class="title">Learn At Home!</h1>
                                <img src="images/tandpwhite.png" width="95" height="57" alt=""/>
                                <h4>Our focus is bringing the classroom home. Helping parents to understand what is happening in the classroom so they can help their child succeed in the class.
                                </h4>
                                <a href="about.html">Learn more here!</a>
                            </div>
                        </aside>
                    </div><!-- col-md-12 -->
                    <div class="clearfix"></div>
                </div>
            </div>
        </section>
    </div>
		<!-- =======================================
		Footer
		======================================== -->
		<footer class="dark-bg">
			<div class="footer-bottom">
				<div class="container inner">
				    <div class="row">
					    <div class="col-md-6">
					        <p class="copy">&copy; 2014 T &amp; P All Rights Reserved.</p>
					    </div>
                        <div class="col-md-6">
                            <div class="socialmedia">
                                <a href="#"><img src="images/facebook.png" width="50px" height="50px"></a>
                                <a href="#"><img src="images/twitter.png" width="50px" height="50px"></a>
                                <a href="#"><img src="images/pintrest.png" width="50px" height="50px"></a>
                            </div>
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

    <!-- for the blur effect -->
    <!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
    <script>
        // this is important for IEs
        var polyfilter_scriptpath = '/js/';
    </script>
    <script src="js/cssParser.js"></script>
    <script src="js/css-filters-polyfill.js"></script>
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

    //Slider
    $(function() {
        $('#da-slider').cslider({
            autoplay	: true,
            bgincrement	: 450
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
    <script type="text/javascript" src="js/login.js"></script>
	 </body>
</html>

