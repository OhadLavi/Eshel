<?php
$HeadTitle = "תוכניות ומפרטים";
$PageID = 4; // floorplans = 4

$Images = array("img/bg/floorplans-bg.jpg");
// The page background image is set here.
// It is used in <head> section
?>

<!DOCTYPE html>

<?php include 'include/head.php'; ?>
	
	<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
	<script type="text/javascript">
		
		$(document).ready(function(){

			$('#gallery').mixitup({
				filterSelector: '.filter-item',
				easing: 'snap',
				onMixStart: function(){
					$('#page-content').css('height', ($('#gallery').height() + $('#floorplans-filter').height() + 137));
				},
				onMixEnd: function(){
					$('#page-content').animate({height: ($('#gallery').height() + $('#floorplans-filter').height() + 137)}, 200);
				}
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
					<li><a href="#" class="filter-item" data-filter="all">הכל</a></li>
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
