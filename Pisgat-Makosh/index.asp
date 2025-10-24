<!DOCTYPE html>

<%
	dim HeadTitle
	HeadTitle = "דף הבית"
	
	dim PageID 
	PageID = 0 
	' home = 0
	
	Dim Images(2)
	Images(0) = "img/home1.jpg"
	Images(1) = "img/home2.jpg"
	Images(2) = "img/home3.jpg"
	' The page background image is set here.
	' It is used in <head> section
	
%>

<!--#include file="include/head.asp"-->

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

	<!--#include file="include/header.asp"-->
	
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
	
	<!--#include file="include/footer.asp"-->
	
</body>
</html>
