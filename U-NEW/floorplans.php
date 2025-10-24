<!DOCTYPE html>

<?php $thisPage="FloorPlans"; ?>
<?php include 'include/head.php';?>
	
	<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
	<script type="text/javascript">
		
		$(document).ready(function(){
		$('#page-content').css('height', ($('#gallery').height() + $('#floorplans-filter').height() + 750));
			$('#gallery').mixitup({
				filterSelector: '.filter-item',
				easing: 'snap',
				onMixStart: function(){
					$('#page-content').css('height', ($('#gallery').height() + $('#floorplans-filter').height() + 250));
				},
				onMixEnd: function(){
					$('#page-content').animate({height: ($('#gallery').height() + $('#floorplans-filter').height() + 250)}, 200);
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
					
					$('#page-content').css('height', curTab.outerHeight());
					
					
					curTab.animate({opacity: 0}, 400, function(){
						selTab.css('opacity', 0).addClass('ontop');
					});
					//curTab.css('visibility', 'hidden');
					//selTab.css('visibility', 'hidden').addClass('ontop');
					$('#page-content').animate({
						height: (selTab.outerHeight() + 117)
					}, 400, function(){
						curTab.removeClass('ontop');
						selTab.animate({opacity: 1}, 400);
					});
				}
			});	
			
			$('#gallery > li > span').on('click', function(event){
				$(event.target).siblings('a').click();
			});
			
		});
		
	</script>
</head>

<body id="floorplans-page">
	
	<!--#include file="include/header.asp"-->
	<?php include 'include/header.php';?>
	<section id="page-content">
		<ul id="page-menu" class="first-item-selected">
			<li><a href="#">לחץ לתוכניות דירה</a></li>
			<li><a href="#">לחץ למפרטים</a></li>
		</ul>
		
		<div class="page-content-tab tab1 ontop">
			<ul id="floorplans-filter">
				<li class="filter-item" data-filter="all"><a href="#">כלל התוכניות</a></li>
				<li class="filter-item A" data-filter="A"><a href="#">בניין <font style="font-size: 16px;">A</font></a></li>
				<!-- <li class="filter-item" data-filter="mini-penthouse"><a href="#">מיני פנטהאוז</a></li> -->
				<!--<li class="filter-item" data-filter="3-bedrooms"><a href="#">דירת 3 חדרים</a></li>-->
				<li class="filter-item" data-filter="B"><a href="#">בניין <font style="font-size: 16px;">B</font></a></li>
			</ul>

			<ul id="gallery" class="gallery grid effect-2">
				<!--
					AVAILABLE COLORS ARE:
					green, yellow, orange, fuchsia, red, coral, blueviolet, cyan, statecoral
					NEW ONES CAN BE DEFINED ONLY IN CSS BECAUSE THE COLORS ARE ATTACHED TO :after PSEUDO-ELEMENTS
				-->
				<!--
				<li class="green mix mini-penthouse">
					<a href="floorplans/3_rooms_mini_pent_01.pdf" target="_blank" title="">
						<img src="floorplans/3_rooms_mini_pent_01.jpg" />
						<div></div>
					</a>
					<span>מיני פנטהאוז<br />4 חדרים</span>
				</li>
				-->
				
				
				<!--
					REMEMBER TO FILL ALL title ATTRIBUTES IN ANCHORS
					
					!!!
					DON'T REMOVE EMPTY DIV
					
					EACH LIST ITEM HAS class= " ... " 
					- 'mix' IS FOR FILTER ANIMATION
					- *color* SETS THE HOVER ANIMATION COLOR
					- *type* ... :)
				-->
				
				<li class="yellow mix 4-bedrooms A">
					<a href="floorplans/A/dira1.pdf" target="_blank" title="">
						<img src="floorplans/A/dira1.jpg" />
						<div></div>
					</a>
					<span>דירת קוטג' <br />5 חדרים</span>
				</li>

				<li class="fuchsia mix garden A">
					<a href="floorplans/A/dira5.pdf" target="_blank" title="">
						<img src="floorplans/A/dira5.jpg" />
						<div></div>
					</a>
					<span>דירת מיני פנטהאוז<br />5 חדרים</span>
				</li>

				<li class="coral mix penthouse A">
					<a href="floorplans/A/dira6.pdf" target="_blank" title="">
						<img src="floorplans/A/dira6.jpg" />
						<div></div>
					</a>
					<span>דירת<br />3 חדרים</span>
				</li>

				<li class="fuchsia mix garden B">
					<a href="floorplans/A/dira7.pdf" target="_blank" title="">
						<img src="floorplans/A/dira7.jpg" />
						<div></div>
					</a>
					<span>דירת מיני פנטהאוז<br />5 חדרים</span>
				</li>

				<li class="coral mix penthouse B">
					<a href="floorplans/A/dira9.pdf" target="_blank" title="">
						<img src="floorplans/A/dira9.jpg" />
						<div></div>
					</a>
					<span>פנטהאוז<br />5 חדרים</span>
				</li>

				<li class="cyan mix 5-bedrooms duplex CC">
					<a href="floorplans/A/dira12.pdf" target="_blank" title="">
						<img src="floorplans/A/dira12.jpg" />
						<div></div>
					</a>
					<span>דירה<br />3 חדרים</span>
				</li>

				<li class="statecoral mix 4-bedrooms-garden DD">
					<a href="floorplans/A/dira14.pdf" target="_blank" title="">
						<img src="floorplans/A/dira14.jpg" />
						<div></div>
					</a>
					<span>דירת<br />4 חדרים</span>
				</li>
			</ul>
		</div>
		
		<div class="page-content-tab tab2">
			<br /><br /><br /><br />
			<!--
				DONT REMOVE LINE BREAKS. 
			-->
			<p>
				<!--
					I AGREE, LISTS COULD BE USED HERE
					BUT IT WORKS FINE WITH REGULAR TEXT TOO
					
					THE DOT IS:
					•	
					(TO USE IN COPY-PASTE)
					
					DON'T FORGET THE ENDING <br />
				-->
				<span class="strong">/// כללי ///</span><br/>
				•	מעלית יוקרתית בבנייןA   ובבניין D מעלית יוקרתית ושקופה <br/>
				•	לובי מעוצב בבניינים A ו D <br/>
				•	מערכת אלומיניום מתקדמת ומעקות זכוכית במרפסות <br/>
				•	ויטרינות רחבות ביציאה מהסלון <br/>
				•	בניה מאיטונג או ש"ע <br/>
				•	חיפוי קירות חוץ באבן טבעית בשילוב טיח ופסיפס  <br/>
				•	הצמדת מקום חניה לכל דירה <br/>
				•	מחסן לכל דירה <br/>
				•	נקודת גז לברביקיו במרפסת או בחצר (בדירת גן) <br/>
				•	נקודת מים במרפסת ו/או בחצר <br/>
				<br/>
				<span class="strong">/// סידורים סניטאריים ///</span><br/>
				•	כלים סניטאריים איכותיים <br/>
				•	אסלות תלויות ומכלי הדחה סמויים <br/>
				•	הכנה למיזוג אויר מיני מרכזי <br/>
				•	ברזי פרח איכותיים <br/>
				•	מערכת אנרגיה סולארית בשילוב דוד חשמלי מתוצרת כרומגן או ש"ע <br/>
				<br/>
				<span class="strong">/// מסגרות, נגרות ואלומיניום ///</span><br/>
				•	דלת כניסה מעוצבת <br/>
				•	דלתות פנים איכותיות <br/>
				•	דלת בטחון בממ"ד עם הכנה לדלת עץ <br/>
				•	ארון אמבטיה בכל המקלחות <br/>
				•	חלונות בזיגוג כפול (בידודית) <br/>
				•	תריסי אלומיניום מוקצף <br/>
				•	תריסי גלילה חשמליים בכל הבית <br/>
				•	(למעט ח. אמבטיה, מקלחות,ממ"ד, מרפ' שירות) <br/>
				•	רשתות בכל הבית למעט מרפ' שירות וחדרים רטובים <br/>
				<br/>
				<span class="strong">/// ריצוף וחיפוי קירות ///</span><br/>
				•	מבחר עשיר של דוגמאות מהקולקציות של החברות המובילות (לפחות שני ספקים) <br/>
				•	ריצוף בכל הדירה למעט חדרים רטובים – גרניט פורצלן בגודל 60X60 <br/>
				•	חיפוי חדרי אמבטיה ומקלחות עד לתקרה <br/>
				•	ריצוף דמוי פרקט במרפסות <br/>
				•	ריצוף דמוי פרקט בתוספת תשלום ביחידת הורים <br/>
				<br/>
				<span class="strong">/// אינסטלציה חשמלית ///</span><br/>
				•	חיבור חשמל תלת פאזי לדירה <br/>
				•	לוח חשמל איכותי עם דלת פח <br/>
				•	10 נקודות חשמל טלפון ותאורה במטבח <br/>
				•	בכל חדר 3 שקעי חשמל נקודת טלפון ונקודת טלוויזיה <br/>
				•	הכנה לנקודות רשת מחשבים בכל חדר <br/>
				•	הכנה למערכת קולנוע ביתית <br/>
				•	מערכת אינטרקום טלוויזיה במעגל סגור בכניסה לבניין <br/>
				•	נקודות חשמל תוצרת GEWISS או ש"ע <br/>
				<br/>
				<span class="strong">/// מטבח ///</span><br/>
				•	מטבח איכותי כולל ארונות עליונים/תחתונים ויחידת בילד אין <br/>
				•	שיש למטבח אבן קיסר לבחירה מתוך מספר דגמים <br/>
				•	גוף ארון מעץ סנדוויץ' <br/>
				•	כיור מטבח אקרילי/נירוסטה בהתקנה שטוחה <br/>
				•	הכנה למדיח כלים <br/>
				<br/>

			<br/>
			</p>
		</div>
	</section>
	
	<?php include 'include/footer.php';?>
	
	<!-- HOVER EFFECT -->
	<script type="text/javascript" src="js/jquery.hoverdir.js"></script>	
	<script type="text/javascript">
		$(function() {
			$(' #gallery > li').each( function() { $(this).hoverdir(); } );
		});
	</script>

</body>
</html>
