<?php
$HeadTitle = "מיקום";
$PageID = 2; // location = 2

$Images = array("img/bg/location-bg.jpg");
// The page background image is set here.
// It is used in <head> section
?>

<!DOCTYPE html>

<?php include 'include/head.php'; ?>
		
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
				mapTypeId: google.maps.MapTypeId.ROADMAP
			};
			map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
			
			var marker = new google.maps.Marker({
				position: myLatlng,
				map: map,
				title: 'פסגת מכוש'
			});
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
	
</head>

<body id="location-page">
	
	<?php include 'include/header.php'; ?>
	
	<section id="page-content">
		<h1 id="page-title">מיקום</h1>
		<div id="page-menu" class="first-item-selected">
			<ul>
				<li><a href="#">תמונה</a></li>
				<li><a href="#">מפה</a></li>
			</ul>
		</div>
		<div id="page-image">
			<img src="img/location-img.jpg" />
		</div>
		<div id="map-canvas"></div>
	</section>
	
	<?php include 'include/footer.php'; ?>
	
</body>
</html>
