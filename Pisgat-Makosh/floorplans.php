<?php
$HeadTitle = "תוכניות ומפרטים";
$PageID = 4; // floorplans = 4

$Images = array("img/bg/floorplans-bg.jpg");
// The page background image is set here.
// It is used in <head> section
?>

<!DOCTYPE html>

<?php include 'include/head.php'; ?>

	<style type="text/css">
		/* Fix floorplans gallery visibility */
		#gallery {
			list-style: none;
			margin: 32px auto 0 auto;
			max-width: 900px;
			position: relative;
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
			gap: 20px;
			padding: 20px 20px;
			justify-content: center;
		}
		#gallery li {
			opacity: 1;
			display: block;
			width: 100%;
			background: #fff;
			padding: 6px;
			position: relative;
			box-shadow: 0 1px 3px rgba(0,0,0,0.1);
			border-radius: 5px;
			transition: transform 0.3s ease, box-shadow 0.3s ease;
		}
		/* Mixitup hidden state */
		#gallery li.mixitup-hidden {
			display: none;
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
			background: rgba(75,75,75,0.9);
			width: 100%;
			height: 100%;
			opacity: 0;
			transition: opacity 0.3s ease;
		}
		#gallery li:hover a div {
			opacity: 1;
		}
		
		/* Filter button styles */
		#floorplans-filter a {
			display: inline-block;
			padding: 8px 16px;
			margin: 5px;
			background: #f0f0f0;
			color: #333;
			text-decoration: none;
			border-radius: 4px;
			transition: all 0.3s ease;
		}
		#floorplans-filter a:hover,
		#floorplans-filter a.active {
			background: #007cba;
			color: white;
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
	
	<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
	<script type="text/javascript">
		
		$(document).ready(function(){

			// Force show all floorplans items initially
			$('#gallery li').css('opacity', '1');

			// Add click handlers for filter buttons - using simple jQuery show/hide
			$('#floorplans-filter a').on('click', function(e) {
				e.preventDefault();
				var filter = $(this).attr('data-filter');
				
				console.log('Filter clicked:', filter);
				
				// Remove active class from all buttons
				$('#floorplans-filter a').removeClass('active');
				// Add active class to clicked button
				$(this).addClass('active');
				
				// Show/hide items based on filter
				if (filter === 'all') {
					$('#gallery li').fadeIn(300);
				} else {
					// Hide all items first
					$('#gallery li').fadeOut(300);
					// Show only items with matching class
					$('#gallery li' + filter).fadeIn(300);
				}
			});
			
		});

		$('#page-menu').delegate('li a', 'click', function(event){
			event.preventDefault();
			var item = $(event.target),
				index = item.parent().index(),
				curTab = $('.page-content-tab.ontop'),
				selTab = $('.page-content-tab').eq(index);
			
			if ( selTab.hasClass('ontop') ) {
				return;
			} else {
				if ( index == 0 ) {
					$('#page-menu').removeClass('second-item-selected').addClass('first-item-selected');
				} else {
					$('#page-menu').removeClass('first-item-selected').addClass('second-item-selected');
				}
				
				curTab.removeClass('ontop').addClass('behind');
				selTab.removeClass('behind').addClass('ontop');
			}
		});
		
	</script>
	
</head>

<body id="floorplans-page">
	
	<?php include 'include/header.php'; ?>
	
	<section id="page-content">
		<div id="page-menu" class="first-item-selected">
			<ul>
				<li><a href="#">תוכניות</a></li>
				<li><a href="#">מפרטים</a></li>
			</ul>
		</div>
		
		<div class="page-content-tab ontop">
			<h1 id="page-title">תוכניות דירות</h1>
			<div id="floorplans-filter">
				<ul>
					<li><a href="#" class="filter-item active" data-filter="all">הכל</a></li>
					<li><a href="#" class="filter-item" data-filter=".3rooms">3 חדרים</a></li>
					<li><a href="#" class="filter-item" data-filter=".5rooms">5 חדרים</a></li>
					<li><a href="#" class="filter-item" data-filter=".6rooms">6 חדרים</a></li>
					<li><a href="#" class="filter-item" data-filter=".penthouse">פנטהאוז</a></li>
					<li><a href="#" class="filter-item" data-filter=".garden">גן</a></li>
				</ul>
			</div>
			<ul id="gallery" class="gallery grid effect-2">
				<li class="filter-item 3rooms">
					<a href="floorplans/3_rooms_01.pdf" target="_blank">
						<img src="floorplans/3_rooms_01.jpg" />
						<div></div>
					</a>
				</li>
				<li class="filter-item 3rooms penthouse">
					<a href="floorplans/3_rooms_mini_pent_01.pdf" target="_blank">
						<img src="floorplans/3_rooms_mini_pent_01.jpg" />
						<div></div>
					</a>
				</li>
				<li class="filter-item 5rooms">
					<a href="floorplans/5_rooms_01.pdf" target="_blank">
						<img src="floorplans/5_rooms_01.jpg" />
						<div></div>
					</a>
				</li>
				<li class="filter-item 5rooms garden">
					<a href="floorplans/5_rooms_gan_01.pdf" target="_blank">
						<img src="floorplans/5_rooms_gan_01.jpg" />
						<div></div>
					</a>
				</li>
				<li class="filter-item 6rooms penthouse">
					<a href="floorplans/6_rooms_pent_01.pdf" target="_blank">
						<img src="floorplans/6_rooms_pent_01.jpg" />
						<div></div>
					</a>
				</li>
				<li class="filter-item 5rooms">
					<a href="floorplans/latest/dira-1-finel.pdf" target="_blank">
						<img src="floorplans/latest/5-apart-1.jpg" />
						<div></div>
					</a>
				</li>
				<li class="filter-item 5rooms">
					<a href="floorplans/latest/dira-2-finel.pdf" target="_blank">
						<img src="floorplans/latest/5-apart-2.jpg" />
						<div></div>
					</a>
				</li>
				<li class="filter-item 5rooms">
					<a href="floorplans/latest/dira-5-finel.pdf" target="_blank">
						<img src="floorplans/latest/5-apart-1.jpg" />
						<div></div>
					</a>
				</li>
				<li class="filter-item 6rooms">
					<a href="floorplans/latest/dira-6-finel.pdf" target="_blank">
						<img src="floorplans/latest/5-apart-2.jpg" />
						<div></div>
					</a>
				</li>
				<li class="filter-item 6rooms penthouse">
					<a href="floorplans/latest/dira-9-finel.pdf" target="_blank">
						<img src="floorplans/latest/penth.jpg" />
						<div></div>
					</a>
				</li>
				<li class="filter-item garden">
					<a href="floorplans/latest/gan-1.jpg" target="_blank">
						<img src="floorplans/latest/gan-1.jpg" />
						<div></div>
					</a>
				</li>
				<li class="filter-item garden">
					<a href="floorplans/latest/gan-2.jpg" target="_blank">
						<img src="floorplans/latest/gan-2.jpg" />
						<div></div>
					</a>
				</li>
				<li class="filter-item 3rooms">
					<a href="floorplans/plan01.pdf" target="_blank">
						<img src="floorplans/plan01.jpg" />
						<div></div>
					</a>
				</li>
				<li class="filter-item 5rooms">
					<a href="floorplans/plan02.pdf" target="_blank">
						<img src="floorplans/plan02.jpg" />
						<div></div>
					</a>
				</li>
				<li class="filter-item 6rooms">
					<a href="floorplans/plan03.pdf" target="_blank">
						<img src="floorplans/plan03.jpg" />
						<div></div>
					</a>
				</li>
				<li class="filter-item penthouse">
					<a href="floorplans/plan04.pdf" target="_blank">
						<img src="floorplans/plan04.jpg" />
						<div></div>
					</a>
				</li>
				<li class="filter-item garden">
					<a href="floorplans/plan05.pdf" target="_blank">
						<img src="floorplans/plan05.jpg" />
						<div></div>
					</a>
				</li>
			</ul>
		</div>
		
		<div class="page-content-tab behind">
			<h1 id="page-title">מפרטים טכניים</h1>
			<div style="padding: 20px; text-align: right; direction: rtl;">
				<h3>מפרט טכני כללי:</h3>
				<ul>
					<li>קירות חוץ: בטון מזוין עם בידוד תרמי</li>
					<li>קירות פנים: בלוקים עם טיח גבס</li>
					<li>רצפות: פרקט איכותי בחדרים, ריצוף קרמיקה במטבח ובמקלחת</li>
					<li>חלונות: חלונות כפולי זכוכית עם מסגרות אלומיניום</li>
					<li>דלתות: דלתות פנים מעץ איכותי</li>
					<li>מערכת חשמל: מערכת חשמל מודרנית עם לוח חשמל מרכזי</li>
					<li>מערכת מים: צנרת מים חמים וקרים עם מיכל מים על הגג</li>
					<li>מערכת ביוב: חיבור למערכת הביוב העירונית</li>
				</ul>
			</div>
		</div>
	</section>
	
	<?php include 'include/footer.php'; ?>
	
</body>
</html>
