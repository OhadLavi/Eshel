<?php
$HeadTitle = "גלרייה";
$PageID = 3; // gallery = 3

$Images = array("img/bg/gallery-bg.jpg");
// The page background image is set here.
// It is used in <head> section
?>

<!DOCTYPE html>

<?php include 'include/head.php'; ?>

	<script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
	<script type="text/javascript" src="js/imagesloaded.js"></script>
	<script type="text/javascript" src="js/lightbox-2.6.js"></script>
	<style type="text/css">
		/* Override the default CSS that hides gallery items */
		#gallery li {
			opacity: 1 !important;
			display: block !important;
		}
		#gallery {
			list-style: none;
			margin: 32px auto 0 auto;
			max-width: 1200px;
			position: relative;
			display: flex;
			flex-wrap: wrap;
			gap: 20px;
			padding: 20px;
			justify-content: center;
		}
		#gallery li {
			width: 200px;
			background: #fff;
			padding: 6px;
			position: relative;
			box-shadow: 0 1px 3px rgba(0,0,0,0.1);
			opacity: 1;
			border-radius: 5px;
			transition: transform 0.3s ease, box-shadow 0.3s ease;
		}
		#gallery li:hover {
			transform: translateY(-5px);
			box-shadow: 0 5px 15px rgba(0,0,0,0.2);
		}
		#gallery li a,
		#gallery li a img {
			display: block;
			position: relative;
			width: 100%;
			height: 200px;
		}
		#gallery li a {
			overflow: hidden;
			border-radius: 3px;
		}
		#gallery li a img {
			object-fit: cover;
			transition: transform 0.3s ease;
		}
		#gallery li:hover a img {
			transform: scale(1.05);
		}
		#gallery li a div {
			position: absolute;
			background: #333;
			background: rgba(75,75,75,0.9) url(../img/thumb-hover2.png) no-repeat 50% 50%;
			width: 100%;
			height: 100%;
			opacity: 0;
			transition: opacity 0.3s ease;
		}
		#gallery li:hover a div {
			opacity: 1;
		}
		#gallery li.green 	a div { background-color: #7ebc3e; background-color: rgba(126,188,62,0.9); }
		#gallery li.yellow 	a div { background-color: #fdd50a; background-color: rgba(253,210,10,0.9); }
		#gallery li.orange 	a div { background-color: #f7891f; background-color: rgba(247,137,31,0.9); }
		#gallery li.fuchsia 	a div { background-color: #c90180; background-color: rgba(201,1,128,0.9); }
		#gallery li.red 		a div { background-color: #b91c26; background-color: rgba(185,28,38,0.9); }
		#gallery li.coral 	a div { background-color: #ee4a23; background-color: rgba(238,74,35,0.9); }
		#gallery li.blueviolet a div { background-color: #4a247f; background-color: rgba(74,36,127,0.9); }
		#gallery li.cyan 		a div { background-color: #059cde; background-color: rgba(5,156,222,0.9); }
		#gallery li.statecoral a div { background-color: #174674; background-color: rgba(23,70,116,0.9); }
		
		/* Animation */
		@keyframes fadeInUp {
			from {
				opacity: 0;
				transform: translateY(30px);
			}
			to {
				opacity: 1;
				transform: translateY(0);
			}
		}
		
		/* Responsive grid */
		@media (max-width: 768px) {
			#gallery {
				grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
				gap: 15px;
				padding: 15px;
			}
			#gallery li a,
			#gallery li a img {
				height: 150px;
			}
		}
		@media (max-width: 480px) {
			#gallery {
				grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
				gap: 10px;
				padding: 10px;
			}
			#gallery li a,
			#gallery li a img {
				height: 120px;
			}
		}
	</style>
	<script type="text/javascript">
		
		$(document).ready(function(){
			
			// Debug: Check if gallery exists
			console.log('Gallery container found:', $('#gallery').length);
			console.log('Gallery items found:', $('#gallery li').length);
			
			// Force show all gallery items
			$('#gallery li').addClass('shown').css('opacity', '1');
			
			// Grid layout is handled by CSS Grid, no need for masonry
			// But we can add some animation for the items
			$('#gallery li').each(function(index) {
				$(this).css({
					'animation-delay': (index * 0.1) + 's',
					'animation': 'fadeInUp 0.6s ease forwards'
				});
			});
			
		});
		
	</script>

</head>

<body id="gallery-page">
	
	<?php include 'include/header.php'; ?>
	
	<section id="page-content">
		<ul id="gallery" class="gallery grid effect-2">
				<!--
					AVAILABLE COLORS ARE:
					green, yellow, orange, fuchsia, red, coral, blueviolet, cyan, statecoral
					NEW ONES CAN BE DEFINED ONLY IN CSS BECAUSE THE COLORS ARE ATTACHED TO :after PSEUDO-ELEMENTS
				-->
			<li class="green">
				<a href="gallery/large01.jpg" data-lightbox="example-set" rel="gallery">
					<img src="gallery/th01.jpg" />
					<div></div>
				</a>
			</li>
				<!--
					IN THESE <a> TAGS, YOU HAVE TO KEEP
						data-lightbox="example-set"
					FOR THE LIGHTBOX PLUGIN
					
					!!!
					DON't REMOVE EMPTY DIV
				-->
			<li class="yellow">
				<a href="gallery/large02.jpg" data-lightbox="example-set" rel="gallery">
					<img src="gallery/th02.jpg" />
					<div></div>
				</a>
			</li>
			<li class="orange">
				<a href="gallery/large03.jpg" data-lightbox="example-set" rel="gallery">
					<img src="gallery/th03.jpg" />
					<div></div>
				</a>
			</li>
			<li class="fuchsia">
				<a href="gallery/large04.jpg" data-lightbox="example-set" rel="gallery">
					<img src="gallery/th04.jpg" />
					<div></div>
				</a>
			</li>
			<li class="red">
				<a href="gallery/large05.jpg" data-lightbox="example-set" rel="gallery">
					<img src="gallery/th05.jpg" />
					<div></div>
				</a>
			</li>
			<li class="coral">
				<a href="gallery/large06.jpg" data-lightbox="example-set" rel="gallery">
					<img src="gallery/th06.jpg" />
					<div></div>
				</a>
			</li>
			<li class="blueviolet">
				<a href="gallery/large07.jpg" data-lightbox="example-set" rel="gallery">
					<img src="gallery/th07.jpg" />
					<div></div>
				</a>
			</li>
			<li class="cyan">
				<a href="gallery/large08.jpg" data-lightbox="example-set" rel="gallery">
					<img src="gallery/th08.jpg" />
					<div></div>
				</a>
			</li>
			<li class="statecoral">
				<a href="gallery/large09.jpg" data-lightbox="example-set" rel="gallery">
					<img src="gallery/th09.jpg" />
					<div></div>
				</a>
			</li>
			<li class="green">
				<a href="gallery/pic_00.jpg" data-lightbox="example-set" rel="gallery">
					<img src="gallery/pic_00_tmb.jpg" />
					<div></div>
				</a>
			</li>
			<li class="yellow">
				<a href="gallery/pic_01.jpg" data-lightbox="example-set" rel="gallery">
					<img src="gallery/pic_01_tmb.jpg" />
					<div></div>
				</a>
			</li>
			<li class="orange">
				<a href="gallery/pic_02.jpg" data-lightbox="example-set" rel="gallery">
					<img src="gallery/pic_02_tmb.jpg" />
					<div></div>
				</a>
			</li>
			<li class="fuchsia">
				<a href="gallery/pic_03.jpg" data-lightbox="example-set" rel="gallery">
					<img src="gallery/pic_03_tmb.jpg" />
					<div></div>
				</a>
			</li>
			<li class="red">
				<a href="gallery/pic_04.jpg" data-lightbox="example-set" rel="gallery">
					<img src="gallery/pic_04_tmb.jpg" />
					<div></div>
				</a>
			</li>
			<li class="coral">
				<a href="gallery/pic_05.jpg" data-lightbox="example-set" rel="gallery">
					<img src="gallery/pic_05_tmb.jpg" />
					<div></div>
				</a>
			</li>
			<li class="blueviolet">
				<a href="gallery/pic_06.jpg" data-lightbox="example-set" rel="gallery">
					<img src="gallery/pic_06_tmb.jpg" />
					<div></div>
				</a>
			</li>
			<li class="cyan">
				<a href="gallery/pic_07.jpg" data-lightbox="example-set" rel="gallery">
					<img src="gallery/pic_07_tmb.jpg" />
					<div></div>
				</a>
			</li>
			<li class="statecoral">
				<a href="gallery/pic_08.jpg" data-lightbox="example-set" rel="gallery">
					<img src="gallery/pic_08_tmb.jpg" />
					<div></div>
				</a>
			</li>
			<li class="green">
				<a href="gallery/pic_09.jpg" data-lightbox="example-set" rel="gallery">
					<img src="gallery/pic_09_tmb.jpg" />
					<div></div>
				</a>
			</li>
			<li class="yellow">
				<a href="gallery/pic_10.jpg" data-lightbox="example-set" rel="gallery">
					<img src="gallery/pic_10_tmb.jpg" />
					<div></div>
				</a>
			</li>
			<li class="orange">
				<a href="gallery/pic_11.jpg" data-lightbox="example-set" rel="gallery">
					<img src="gallery/pic_11_tmb.jpg" />
					<div></div>
				</a>
			</li>
			<li class="fuchsia">
				<a href="gallery/pic_12.jpg" data-lightbox="example-set" rel="gallery">
					<img src="gallery/pic_12_tmb.jpg" />
					<div></div>
				</a>
			</li>
			<li class="red">
				<a href="gallery/pic_13.jpg" data-lightbox="example-set" rel="gallery">
					<img src="gallery/pic_13_tmb.jpg" />
					<div></div>
				</a>
			</li>
			<li class="coral">
				<a href="gallery/pic_14.jpg" data-lightbox="example-set" rel="gallery">
					<img src="gallery/pic_14_tmb.jpg" />
					<div></div>
				</a>
			</li>
			<li class="blueviolet">
				<a href="gallery/pic_15.jpg" data-lightbox="example-set" rel="gallery">
					<img src="gallery/pic_15_tmb.jpg" />
					<div></div>
				</a>
			</li>
		</ul>
	</section>
	
	<?php include 'include/footer.php'; ?>
	
</body>
</html>
