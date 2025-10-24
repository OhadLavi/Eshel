<!DOCTYPE html>

<?php $thisPage="Contact Us"; ?>
<?php include 'include/head.php';?>

	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript">
	
		/* Default values for contact form fields */
		var defaultValues = {
			FirstName: 'שם מלא',
			PhoneNumber: 'טלפון',
			Email: 'אימייל',
			Comments: 'הודעה'
		};
		/***/
		/* Adds a validation criteria to avoid sending the inputs' default values */
		jQuery.validator.addMethod("allowedValue", function(value, element) {
			if ( value == defaultValues[element.id] ) {
				return false;
			}else{
				return true;
			}
		}, "Data provided is not a valid.");
		/***/

		$(document).ready(function(){
			
			/* Contact form stuff */
			$('.editbox, .textbox')
				.on("focus", function(event){
					$(this).removeClass("invalidInput");
					var id = $(this).attr("id");
					if ( $(this).val() == defaultValues[id] ) {
						$(this).val("");
					}
				})
				.on("blur", function(event){
					if ( $(this).val() == "" ) {
						var id = $(this).attr("id");
						$(this).val(defaultValues[id]);
					} else {
					}
				});
			
			$("#contactForm").validate({
				focusInvalid: false,
				errorClass: "invalidInput",
				invalidHandler: function(event, validator) { var errors = validator.numberOfInvalids(); },
				errorPlacement: function(error, element) {
					return true;
				}
			});
		
		});
		
	</script>
	
</head>





<body id="contact-page">
	<?php include 'include/header.php';?>
	<section id="page-content">
		<h1 id="page-title">צור קשר</h1>
		<form onsubmit="return validate()" id="contactForm" name="contactForm" method="post" action="DealContact.php">
        <input type="hidden" name="CampaignId" value="88" />
        <!--<input type="hidden" name="ExternalSystemPassword" value="" />
        <input type="hidden" name="ExternalSystemProId" value="" />
        <input type="hidden" name="RefName" value="<%= Server.HtmlEncode(Request("RefName")) %>" />
        <input type="hidden" name="ReturnTo" value="http://pisgat-sagi.co.il/contact-return.asp" />-->
			
            <input type="edit" class="editbox trans required allowedValue" id="FirstName" name="FirstName" value="שם מלא" />
			<br />
			<input type="edit" class="editbox trans required allowedValue" id="PhoneNumber" name="PhoneNumber" value="טלפון" />
			<br />
			<input type="edit" class="editbox trans required allowedValue email" id="Email" name="Email" value="אימייל" />
			<br />
			<textarea class="textbox trans" id="Comments" name="Comments">הודעה</textarea> 
			<br />
			<input type="submit" class="submit" value="שלח" />
		</form>
        
        <div style="float:right;width:350px; margin:30px 5px 0 0;">
	<p><strong>שיווק - יוסי מלול</strong>   050-7228833<br>
	<strong>משרד מכירות</strong>   דרך העמק 15, מגדל העמק<br>
	<strong>דוא"ל</strong>   <a href="mailto:sales@u-new.co.il" target="_top">sales@u-new.co.il</a></p>
        </div>
        <div style="float:left;width:350px; margin:30px 0 0 -25px;">
        	<p>
	<strong>כתובת האתר</strong>   קריית רבין, נחל צבי 58-60<br>
	<strong>מען למכתבים</strong>   ת.ד. 204, נשר, 3660102<br>
            </p>
        </div>
	</section>
	
	<?php include 'include/footer.php';?>
	
</body>
</html>
