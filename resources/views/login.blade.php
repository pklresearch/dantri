<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | Three_de</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{'frontend'}}/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ 'frontend' }}/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{ 'frontend' }}/css/owl.carousel.css">
    <link rel="stylesheet" href="{{ 'frontend' }}/css/owl.theme.css">
    <link rel="stylesheet" href="{{ 'frontend' }}/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ 'frontend' }}/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ 'frontend' }}/css/normalize.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ 'frontend' }}/css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{ 'frontend' }}/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ 'frontend' }}/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{ 'frontend' }}//metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="{{ 'frontend' }}/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ 'frontend' }}/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="{{ 'frontend' }}/css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="{{ 'frontend' }}/css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ 'frontend' }}/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ 'frontend' }}/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
				<h3> LOGIN TO APP</h3>
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form action="/input" id="loginForm">
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" placeholder="_ _ _@gmail.com" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">
                                <span class="help-block small">Your unique username to app</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                                <span class="help-block small">Yur strong password</span>
                            </div>
                            <div class="checkbox login-checkbox">
                                <label>
										<input type="checkbox" class="i-checks"> Remember me </label>
                                <p class="help-block small">(if this is a private computer)</p>
                            </div>
                            <button class="btn btn-success btn-block loginbtn" href="/input">Login</button>
                            <a class="btn btn-default btn-block" href="/input">Register</a>
                        </form>
                    </div>
                </div>
			</div>
			<div class="text-center login-footer">
				<p>Copyright © 2020.Three_de <a href="https://colorlib.com/wp/templates/"></a></p>
			</div>
		</div>   
    </div>
    <!-- jquery
		============================================ -->
    <script src="{{ 'frontend' }}/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{ 'frontend' }}/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{ 'frontend' }}/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{ 'frontend' }}/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{ 'frontend' }}/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{ 'frontend' }}/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{ 'frontend' }}/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{ 'frontend' }}/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{ 'frontend' }}/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{ 'frontend' }}/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{ 'frontend' }}/js/metisMenu/metisMenu.min.js"></script>
    <script src="{{ 'frontend' }}/js/metisMenu/metisMenu-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="{{ 'frontend' }}/js/tab.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="{{ 'frontend' }}/js/icheck/icheck.min.js"></script>
    <script src="{{ 'frontend' }}/js/icheck/icheck-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{ 'frontend' }}/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="{{ 'frontend' }}/js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="{{ 'frontend' }}/js/tawk-chat.js"></script>
</body>

</html>