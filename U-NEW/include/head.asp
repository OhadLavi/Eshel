<!--[if lt IE 8 ]> <html class="ie ie7 lt-ie8 lt-ie9 lt-ie10" lang="he"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 lt-ie9 lt-ie10" lang="he"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 lt-ie10" lang="he"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="he"> <!--<![endif]-->

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta charset="utf-8" />
	<meta http-equiv="Cache-control" content="public">
    
    <link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
	
	<meta name="description" content="description " />
	<meta name="keywords" content="keywords" />
	<meta name="author" content="EvolveMedia" />
 
	<title>פסגת מכוש – <%=HeadTitle%></title>
	
	<script type="text/javascript">
		var Imgs = new Array();
	<% 
	
		Dim k
		k = 0
		For Each Img in Images
			Response.Write("Imgs[" & k & "] = new Image();" & vbCrLf)
			Response.Write("Imgs[" & k & "].src = "" " & Img & " ""; " & vbCrLf)
			k = k + 1
		Next
		
	%>
	</script>	
	
	
	<link href="css/default.css" type="text/css" rel="stylesheet" media="screen" />
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script type="text/javascript" src="js/jquery-1.10.1.min.js"><\/script>')</script>
	<!--[if lt IE 9]><script src="js/html5shiv.js"></script><![endif]-->
	<script src="js/modernizr.custom.37743.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>

<!--ANALYTICS --> 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44644123-13', 'pisgat-makosh.co.il');
  ga('send', 'pageview');

</script>