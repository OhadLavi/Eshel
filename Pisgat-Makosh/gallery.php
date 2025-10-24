<?php
$HeadTitle = "גלרייה";
$PageID = 3; // gallery = 3

$Images = array("img/bg/gallery-bg.jpg");
// The page background image is set here.
// It is used in <head> section
?>

<!DOCTYPE html>

<?php include 'include/head.php'; ?>

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
