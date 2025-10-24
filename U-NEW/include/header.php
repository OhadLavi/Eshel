	<header>
		<nav>
			<a href="#" id="three-lines"></a>
			<div id="right-nav">
				<ul>
					<li><a href="index.php" id="homeLink" title="">דף הבית</a></li>
					<li><a href="about.php" <?php if ($thisPage=="About Us") echo " class=\"active\""; ?> title="">אודות</a></li>
					<li><a href="location.php" <?php if ($thisPage=="Location") echo " class=\"active\""; ?> title="">מיקום</a></li>
					<li><a href="gallery.php" <?php if ($thisPage=="Gallery") echo " class=\"active\""; ?> title="">גלרייה</a></li>
				</ul>
			</div>
			<!--<a href="index.asp" id="logo"><div style="width:320px; height:106px;" class="tooltip">&nbsp;<span class="classic">לדף הבית</span></div></a>-->
            
            
<style type="text/css">
/* Tooltips*/
.tip {
	position: relative;
	width: 1px;
	height: 1px;
	/*border: 1px solid blue;*/ 
}
.pin{
	display: block;
	position: relative;
	z-index: 1;
	width: 320px;
	height: 106px;
	/*top: -25px;
	left: -45px;
	border: 1px solid green; */
}
.tip-content {
	opacity: 0; filter: alpha(opacity=0);
	position: relative;
	z-index: 2;
	width: 0px;
	height: 0px;
	left: -120px;
	overflow: hidden;
	background: #fff;
	border:2px solid #F7891F;
	box-sizing:border-box;
	padding:5px;
	text-align:center;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	-webkit-transition: opacity 0.2s ease; -moz-transition:opacity 0.2s ease; -ms-transition:opacity 0.2s ease; -o-transition:opacity 0.2s ease; transition:opacity 0.2s ease;
}

.tip-content p {
	direction:rtl;
	padding:2px 0 0 0;
	letter-spacing: -1px;
	font-family: 'FbKazefet regular', sans-serif;
	font-size: 14px;
	-webkit-text-stroke: 1px rgba(0,0,0,0.1);}

.tip.down > .tip-content {
	top: 12px;	
}
.tip.up > .tip-content {
	top: -142px;
}
.tip:hover > .tip-content {
	width: 80px;
	height: 30px;
	opacity: 1; filter: alpha(opacity=100);
}

.lt-ie10 .tip-content{
	display: none;
	opacity: 1; filter: alpha(opacity=100);
	width: 80px;
	height: 30px;
}
.lt-ie10 .tip:hover > .tip-content {
	display: block;
}

</style>
            
            
            
	<a href="index.php" id="logo">
        <div class="tip down">
            <div class="pin"></div>
            <div class="tip-content">
                <p>לדף הבית</p>
            </div>
        </div>
    </a>
            
            
			<div id="left-nav">
				<ul>
					<li><a href="floorplans.php" <?php if ($thisPage=="FloorPlans") echo " class=\"active\""; ?> title="">תוכניות ומפרטים</a></li>
					<li><a href="entrepreneurs.php" <?php if ($thisPage=="Entrepreneurs") echo " class=\"active\""; ?> title="">היזמים</a></li>
					<li><a href="contact.php" <?php if ($thisPage=="Contact Us") echo " class=\"active\""; ?> title="">צור קשר</a></li>
				</ul>
			</div>
		</nav>
	</header>
