<!DOCTYPE html>

<%
	dim HeadTitle
	HeadTitle = "Contact"
	
	dim PageID 
	PageID = 6 
	' contact = 6
	
	Dim Images(0)
	Images(0) = "img/bg/contact-bg.jpg"
	' The page background image is set here.
	' It is used in <head> section
	
%>

<?php include 'include/head.asp';?>
<META HTTP-EQUIV="refresh" CONTENT="4;URL=./index.asp">
</head>

<body id="contact-page">
	
	<!--#include file="include/header.asp"-->
	
	<section id="page-content" style="padding-bottom: 173px; background-image: url(img/deco-medium.png);">
		<h1 id="page-title">צור קשר</h1>
		<p style="text-align:center;">
			פנייתך התקבלה, תודה 
		</p>
	</section>
	
	<?php include 'include/footer.php';?>
	
</body>
</html>
