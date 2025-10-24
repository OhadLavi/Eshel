<!DOCTYPE html>

<%
	dim HeadTitle
	HeadTitle = "תוכניות ומפרטים"
	
	dim PageID 
	PageID = 4 
	' floorplans = 4
	
	Dim Images(0)
	Images(0) = "img/bg/floorplans-bg.jpg"
	' The page background image is set here.
	' It is used in <head> section
	
%>

<!--#include file="include/head.asp"-->
	
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
	
	<section id="page-content">
		<ul id="page-menu" class="first-item-selected">
			<li><a href="#">לחץ לתוכניות דירה</a></li>
			<li><a href="#">לחץ למפרטים</a></li>
		</ul>
		
		<div class="page-content-tab tab1 ontop">
			<ul id="floorplans-filter">
				<li class="filter-item" data-filter="all"><a href="#">כלל התוכניות</a></li>
				<!-- <li class="filter-item" data-filter="mini-penthouse"><a href="#">מיני פנטהאוז</a></li> -->
				<!--<li class="filter-item" data-filter="3-bedrooms"><a href="#">דירת 3 חדרים</a></li>-->
				<li class="filter-item" data-filter="5-bedrooms"><a href="#">דירות 5 חדרים</a></li>
				<li class="filter-item" data-filter="garden"><a href="#">דירות גן</a></li>
				<li class="filter-item" data-filter="penthouse"><a href="#">פנטהאוז</a></li>
				
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
				
				<li class="yellow mix garden">
					<a href="floorplans/latest/dira-2-finel.pdf" target="_blank" title="">
						<img src="floorplans/latest/gan-1.jpg" />
						<div></div>
					</a>
					<span>דירת גן<br />5 חדרים</span>
				</li>

			<!--	<li class="orange mix 3-bedrooms">
					<a href="floorplans/3_rooms_01.pdf" target="_blank" title="">
						<img src="floorplans/3_rooms_01.jpg" />
						<div></div>
					</a>
					<span>דירת<br />3 חדרים</span>
				</li>
-->
				<li class="fuchsia mix garden">
					<a href="floorplans/latest/dira-1-finel.pdf" target="_blank" title="">
						<img src="floorplans/latest/gan-2.jpg" />
						<div></div>
					</a>
					<span>דירת גן<br />5 חדרים</span>
				</li>
				
				<li class="fuchsia mix 5-bedrooms">
					<a href="floorplans/latest/dira-5-finel.pdf" target="_blank" title="">
						<img src="floorplans/latest/5-apart-1.jpg" />
						<div></div>
					</a>
					<span>דירת<br />5 חדרים</span>
				</li>
				
				<li class="fuchsia mix 5-bedrooms">
					<a href="floorplans/latest/dira-6-finel.pdf" target="_blank" title="">
						<img src="floorplans/latest/5-apart-2.jpg" />
						<div></div>
					</a>
					<span>דירת<br />5 חדרים</span>
				</li>

				<li class="red mix penthouse">
					<a href="floorplans/latest/dira-9-finel.pdf" target="_blank" title="">
						<img src="floorplans/latest/penth.jpg" />
						<div></div>
					</a>
					<span>פנטהאוז<br />6 חדרים</span>
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
				•	מעליות מעוצבות<br/>
				•	לובי כניסה מפואר, המעוצב ע"י אדריכל פנים<br/>
				•	מערכת אלומיניום מתקדמת ומעקות זכוכית במרפסות<br/>
				•	ויטרינות רחבות ביציאה מהסלון<br/>
				•	קירות חוץ מבודדים בבידוד תרמי<br/>
				•	חיפוי קירות חוץ באבן טבעית בשילוב טיח ופסיפס<br/>
				•	הצמדת מקום חניה לכל דירה<br/>
				•	מחסן לכל דירה<br/>
				•	יחידת הורים עם חימום תת רצפתי בחדר רחצה בכל דירה<br/>
				•	נקודת גז לברביקיו במרפסת או בחצר (בדירת גן)<br/>
				<br/>
				<span class="strong">/// סידורים סניטאריים ///</span><br/>
				•	כלים סניטאריים איכותיים<br/>
				•	אסלות תלויות ומכלי הדחה סמויים<br/>
				•	הכנה למיזוג אויר מיני מרכזי<br/>
				•	ברזי פרח איכותיים<br/>
				•	מערכת אנרגיה סולארית בשילוב דוד חשמלי מתוצרת כרומגן או ש"ע<br/>
				<br/>
				<span class="strong">/// ריצוף וחיפוי קירות ///</span><br/>
				•	מבחר עשיר של דוגמאות מהקולקציות של חברת נגב<br/>
				•	ריצוף בכל הדירה למעט חדרים רטובים- גרניט פורצלן בגודל 60X60<br/>
				•	ריצוף וחיפוי חדרי אמבטיה לפי עיצוב מיוחד של מעצבת פנים במספר אפשרויות<br/>
				<br/>
				<span class="strong">/// אינסטלציה חשמלית ///</span><br/>
				•	חיבור חשמל תלת פזי לדירה<br/>
				•	לוח חשמל איכותי עם דלת פח<br/>
				•	10 נקודות חשמל טלפון ותאורה במטבח<br/>
				•	בכל חדר 3 שקעי חשמל נקודת טלפון ונקודת טלביזיה<br/>
				•	הכנה לנקודות רשת מחשבים בכל חדר<br/>
				•	הכנה למערכת קולנוע ביתית<br/>
				•	תריס גלילה חשמלי ביציאה למרפסת (או לחצר בדירות הגן)<br/>
				•	מערכת אינטרקום טלביזיה במעגל סגור בכניסה לבניין<br/>
				•	נקודות חשמל תוצרת GEWISS<br/>
				<br/>
				<span class="strong">/// מטבח ///</span><br/>
				•	מטבח איכותי כולל ארונות עליונים ותחתונים<br/>
				•	שיש למטבח אבן קיסר לבחירה מתוך מספר דגמים <br/>
				•	גוף ארון מעץ סנדוויץ' ע"פ תכנון מעצבת פנים   <br/>  
				•	כיור מטבח אקרילי / נירוסטה בהתקנה שטוחה<br/>
				•	הכנה למדיח כלים        <br/>
				<br/>
				<span class="strong">/// נגרות ואלומיניום ///</span><br/>
				•	דלת כניסה מעוצבת<br/>
				•	דלתות פנים יוקרתיות<br/>
				•	דלת בטחון בממ"ד עם הכנה לדלת עץ<br/>
				•	ארון אמבטיה מעוצב בחדר האמבטיה המרכזי<br/>
				•	חלונות בזיגוג כפול (בידודית)<br/>
				•	תריסי אלומיניום מוקצף<br/>
				•	תריסי גלילה חשמליים בויטרינות בסלון וביחידת הורים<br/>
			<br/>
			</p>
		</div>
	</section>
	
	<!--#include file="include/footer.asp"-->
	
	<!-- HOVER EFFECT -->
	<script type="text/javascript" src="js/jquery.hoverdir.js"></script>	
	<script type="text/javascript">
		$(function() {
			$(' #gallery > li').each( function() { $(this).hoverdir(); } );
		});
	</script>

</body>
</html>
