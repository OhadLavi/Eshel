<!DOCTYPE html>

<?php $thisPage="Location"; ?>	
<?php include 'include/head.php';?>
	
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwknS59bSz0BDA7EY4FZVB83Nlpi7mQqA&callback=myMap"></script>
	<script type="text/javascript">
		var map;
		function initialize() {
			var myLatlng = new google.maps.LatLng(32.683850,35.239475);
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
				url: "https://www.google.co.il/maps/@32.683850,35.239475,17z",
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

<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

	
</head>

<body id="location-page">
	
	<?php include 'include/header.php';?>

	<section id="page-content">
		<ul id="page-menu" class="first-item-selected">
			<li><a href="#">לחץ לתצלום אוויר</a></li>
			<li><a href="#">לחץ למפה</a></li>
		</ul>
		
		<figure id="page-image">
			<div id="mapCanvas"></div>
			<img src="img/location-img.jpg" />
		</figure>
		
		<h1 id="page-title">U new, מגדל העמק</h1>
		<p>
		הפרויקט נבנה במיקום הטוב ביותר במגדל העמק, בלבה של שכונת קריית רבין, ברחוב נחל צבי 58-60. מיקומו האסטרגי של הפרויקט בתפר שבין פארק רבין והגן הארכיאולוגי, מאפשר לכם איכות חיים בסביבה ירוקה וטבעית. העיר בעלת הנגישות הטובה ביותר בעמק ומציעה לתושביה דרכי גישה נוחות ומהירות באמצעות רשת הכבישים החדישה.
		</p>
		<p>
		<p>* דקות נסיעה ואתם עולים על כביש 60 ו-65.</p>
		<p>* המשכו של כביש 6 מבטיח לדיירי השכונה קיצור משמעותי של זמן הנסיעה.</p>
		<p>* הקירבה הגדולה לתחנת הרכבת בסמוך לישוב, אשר תהווה אלטרנטיבה מהירה ונוחה להגעה לכל אזורי הארץ.</p>
		</p>
		<p>
		<br/><br/>
		</p>
	</section>
	
	<?php include 'include/footer.php';?>
	
</body>
</html>
