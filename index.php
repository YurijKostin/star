<!DOCTYPE html>
<html>
	<head>

		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>.Star - Go out into space!</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<meta property="og:title" content=".Star - Go out into space!"/>
		<meta property="og:image" content="http://star.to-rate.com/images/s-logo.png">
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://star.to-rate.com"/>
		<meta property="og:description" content=".Star - this is space project."/>
		<meta property="fb:app_id" content="651847471515307" />
		<meta name="title" content=".Star - Go out into space!" />
		<meta name="description" content=".Star - thi is space project!" />
    	<meta name="keywords" content=".star, star, space project, project, projects, earth, orbit, space shuttle, astronaut" />
    	<link rel="image_src" href="http://star.to-rate.com/images/vk-logo.png" />
		<link rel="shortcut icon" href="images/favicon.png">

		<link type="text/css" rel="stylesheet" href="css/style.css" media="all" />
		<link type="text/css" rel="stylesheet" href="css/onepage-scroll.css" media="all" />

		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script type="text/javascript" src="js/star.js"></script>
		<script type="text/javascript" src="js/browser.js"></script>
		<script type="text/javascript" src="js/jquery.onepage-scroll.js"></script>
		<script type="text/javascript" src="js/onepage-scroll.js"></script>
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

	</head>

	<body>


		<!-- Facebook plugin -->
		<div id="fb-root"></div>
		<script>
			(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1&appId=651847471515307";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
		<!-- End of Facebook plugin -->

		<!-- VK plugin -->
		<script type="text/javascript" src="//vk.com/js/api/openapi.js?101"></script>
		<script type="text/javascript">
  			VK.init({apiId: 3944530, onlyWidgets: true});
		</script>
		<!-- End of VK plugin -->

		<div class="main">
		
			<section>

				<!-- Styles of Header panel -->		
				<div id="header">
					
					<div id="logo">
						<a href="index.php">
							<img src="images/logo.png">
						</a>
					</div>

					<!-- Facebook like button -->
					<div class="fb-like" data-href="http://star.to-rate.com/" data-width="60" data-height="24" data-colorscheme="light" data-layout="button_count" data-action="like" data-show-faces="false" data-send="false"></div>
					<!-- End of Facebook like button -->

					<!-- VK like button -->
					<div id="vk_like"></div>
					<script type="text/javascript">
						VK.Widgets.Like("vk_like", {type: "button", height: 24});
					</script>
					<!-- End of VK like button -->

					<audio id="player" class="audio" src="sound/star.mp3" autoplay loop></audio>
					<!-- <div>
		    			<button onclick="document.getElementById('player').play()">Воспроизведение</button>
		    			<button onclick="document.getElementById('player').pause()">Пауза</button>
		    			<button onclick="document.getElementById('player').volume+=0.1">Громкость +</button>
		    			<button onclick="document.getElementById('player').volume-=0.1">Громкость -</button>
					</div> -->
				
				</div>
				<!-- End of styles of Header panel -->

				<div id="earth"></div>
				<div id="star-content"></div>

			</section>

		

		</div><!-- End of .main -->

		<!-- Google Analytics plugin -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-44998557-1', 'to-rate.com');
		  ga('send', 'pageview');
		</script>
		<!-- End of Google Analytics plugin -->

	</body>
</html>
