<?php
$HeadTitle = "דף הבית";
$PageID = 0; // home = 0

$Images = array(
    "img/home1.jpg",
    "img/home2.jpg", 
    "img/home3.jpg"
);
// The page background image is set here.
// It is used in <head> section
?>

<!DOCTYPE html>
<!--[if lt IE 8 ]> <html class="ie ie7 lt-ie8 lt-ie9 lt-ie10" lang="he"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 lt-ie9 lt-ie10" lang="he"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 lt-ie10" lang="he"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="he"> <!--<![endif]-->

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta charset="utf-8" />
	<meta http-equiv="Cache-control" content="public">
    
    <link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
	
	<meta name="description" content="description " />
	<meta name="keywords" content="keywords" />
	<meta name="author" content="EvolveMedia" />
 
	<title>פסגת מכוש – <?php echo $HeadTitle; ?></title>
	
	<script type="text/javascript">
		var Imgs = new Array();
		<?php 
		$k = 0;
		foreach($Images as $Img) {
			echo "Imgs[" . $k . "] = new Image();\n";
			echo "Imgs[" . $k . "].src = \"" . $Img . "\";\n";
			$k++;
		}
		?>
	</script>	
	
	<link href="css/default.css" type="text/css" rel="stylesheet" media="screen" />
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script type="text/javascript" src="js/jquery-1.10.1.min.js"><\/script>')</script>
	<!--[if lt IE 9]><script src="js/html5shiv.js"></script><![endif]-->
	<script src="js/modernizr.custom.37743.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>

<!--ANALYTICS --> 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44644123-13', 'pisgat-makosh.co.il');
  ga('send', 'pageview');

</script>

	<script type="text/javascript">
	
		function initSlide() {
			var activeSlide = $('#homeSlider > li:nth-child(1)');
			activeSlide.addClass('activeSlide');
			activeSlide.children('h1').delay(500).fadeIn(500);
		}
		
		function changeSlide() {
			var activeSlide = $('.activeSlide');
			if ( activeSlide.next().length > 0 ) {
				var nextSlide = activeSlide.next();
			} else {	
				var nextSlide = activeSlide.prevAll().last();
			}
			activeSlide.children('h1').fadeOut(500);
			nextSlide.css('z-index',2);
			nextSlide.css('display','block');
			activeSlide.delay(700).fadeOut(800,function(){
				activeSlide.css('z-index',1).show().removeClass('activeSlide');
				nextSlide.css('z-index',3).addClass('activeSlide');
				nextSlide.children('h1').delay(200).fadeIn(500);
			});
		}
		
		$(document).ready(function(){

			initSlide();
			
			if ( $("#homeSlider > li").length > 1 ) {
				setInterval('changeSlide()', 5200);
			}
		
			if ( $('html').hasClass('lt-ie9') ) {
				alert("You are using an obsolete version of Internet Explorer for which this website is not optimised. \n In order to get the appropiate display of its content, please consider upgrading to the last compatible version of your browser.");
			}
			
		});
		
	</script>
</head>

<body id="homePage">

	<?php include 'include/header.php'; ?>
	
	<ul id="homeSlider">
		<li id="slide1">
			<h1>מגיע לכם לגור בפסגה</h1>
		</li>
		<li id="slide2">
			<h1>מגיע לכם 
				<br/>
				&nbsp;&nbsp;&nbsp;
				לגור בפסגה	
			</h1>
		</li>
		<li id="slide3">
			<h1>מגיע לכם 
				&nbsp;&nbsp;&nbsp;
				<br />
				לגור בפסגה
			</h1>
		</li>
	</ul>
	
	<?php include 'include/footer.php'; ?>
	
</body>
</html>
