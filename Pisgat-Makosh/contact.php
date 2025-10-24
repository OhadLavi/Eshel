<?php
$HeadTitle = "צור קשר";
$PageID = 6; // contact = 6

$Images = array("img/bg/contact-bg.jpg");
// The page background image is set here.
// It is used in <head> section
?>

<!DOCTYPE html>

<?php include 'include/head.php'; ?>

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
	
	<?php include 'include/header.php'; ?>
	
	<section id="page-content">
		<h1 id="page-title">צור קשר</h1>
		<form onsubmit="return validate()" id="contactForm" name="contactForm" method="post" action="send-email.php">
        <input type="hidden" name="CampaignId" value="88" />
        <!--<input type="hidden" name="ExternalSystemPassword" value="" />
        <input type="hidden" name="ExternalSystemProId" value="" />-->
        <input type="hidden" name="RefName" value="<?php echo htmlspecialchars($_GET['RefName'] ?? ''); ?>" />
        <input type="hidden" name="ReturnTo" value="http://localhost/eshel/Pisgat-Makosh/contact-return.php" />
			
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
        	<p><strong>משרד</strong>&nbsp;3033 953 04&nbsp;&nbsp;//&nbsp;&nbsp;<strong>פקס</strong>&nbsp;4470 604 04<br>
            <strong>אימייל</strong>   sales@pisgat-makosh.co.il</p>
        </div>
        <div style="float:left;width:350px; margin:30px 0 0 20px;">
        	<p>
                רחוב שחף פינת נשר, גבעת מכוש, כרמיאל<br>
                מען למכתבים ת.ד. 204, נשר, 3660102
            </p>
        </div>
	</section>
	
	<?php include 'include/footer.php'; ?>
	
</body>
</html>
