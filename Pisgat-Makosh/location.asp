<!DOCTYPE html>

<%
	dim HeadTitle
	HeadTitle = "מיקום"
	
	dim PageID 
	PageID = 2 
	' location = 2
	
	Dim Images(0)
	Images(0) = "img/bg/location-bg.jpg"
	' The page background image is set here.
	' It is used in <head> section
	
%>

<!--#include file="include/head.asp"-->
		
	<script type="text/javascript">
		
		$(document).ready(function(){
			
			$('#page-image').css('height', $('#page-image > img').outerHeight());
			$('#page-menu').delegate('li a', 'click', function(event){
				event.preventDefault();
				var item = $(event.target);
					index = item.parent().index();
				if ( index == 0 ) {
					$('#page-menu').removeClass('second-item-selected').addClass('first-item-selected');
					$('#page-image > img').stop().fadeIn(200);
				} else {
					$('#page-menu').removeClass('first-item-selected').addClass('second-item-selected');
					$('#page-image > img').stop().fadeOut(200);
				}
			});
			
		});
		
	</script>
	
	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script type="text/javascript">
		var map;
		function initialize() {
			var myLatlng = new google.maps.LatLng(32.902808, 35.287844);
			var mapOptions = {
				zoom: 16,
				center: myLatlng,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				mapTypeControl: false,
				panControl: false,
				scaleControl: false,
				streetViewControl: true,
				zoomControl: true,
				zoomControlOptions: {
				  style: google.maps.ZoomControlStyle.LARGE
				}
			};
			map = new google.maps.Map(document.getElementById('mapCanvas'), mapOptions);
			var marker = new google.maps.Marker({
				position: myLatlng,
				animation: google.maps.Animation.DROP,
				map: map,
				url: "https://www.google.com/maps/place/32%C2%B054'10.1%22N+35%C2%B017'16.2%22E/@32.9028083,35.2878444,15z/data=!3m1!4b1!4m2!3m1!1s0x0:0x0?hl=iw",
				title: 'Our location'
			});
			google.maps.event.addListener(marker, 'click', function() { 
				window.open(marker.url);
			}); 
			google.maps.event.addDomListener(window, 'resize', function() {
				$('#page-image').css('height', $('#page-image > img').outerHeight());
				map.setCenter(homeLatlng);
			});
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
	
</head>

<body id="location-page">
	
	<!--#include file="include/header.asp"-->
	
	<section id="page-content">
		<ul id="page-menu" class="first-item-selected">
			<li><a href="#">לחץ לתצלום אוויר</a></li>
			<li><a href="#">לחץ למפה</a></li>
		</ul>
		
		<figure id="page-image">
			<div id="mapCanvas"></div>
			<img src="img/location-img.jpg" />
		</figure>
		
		<h1 id="page-title">גבעת מכוש, כרמיאל</h1>
		<p>
		אין צורך להכביר במילים, מי שמכיר כבר יודע - פנינה גלילית אמיתית, מטופחת ונקיה, מוקפת בהרים, בלב לבו של נוף מרהיב עין ושובה לב. כבר משנת 1964, השנה בה הוקמה שכונת המייסדים הראשונה, ועד היום, נחשבת כרמיאל למקום אטרקטיבי עבור זוגות צעירים אשר רוצים לבסס את חייהם המשותפים במקום חם ובאווירה קהילתית; מגמה זו הובילה באופן טבעי לפיתוח מערך החינוך והאקדמיה בעיר, שכולל היום עשרות גני ילדים, בתי ספר יסודיים ואל יסודיים, תנועות נוער כמובן - 2 מכללות מבוקשות. 
		</p>
		<p>
		בנוסף, תושבי העיר נהנים מלמעלה מ-70 פארקים, מתקני משחקים וספורט, מרכזי בילוי וקניות, שדרות עצים יפהפיות, מסלולי טיולים וסביבה שמורה, מטופחת ונקיה. כרמיאל אינה מפסיקה להתפתח ולגדול, אך באותו זמן לשמור על צביונה לאיכות חיים גבוהה עבור תושביה, חדשים וותיקים.
		</p>
	</section>
	
	<!--#include file="include/footer.asp"-->
	
</body>
</html>
