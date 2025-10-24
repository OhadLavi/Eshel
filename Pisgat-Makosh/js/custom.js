/**
 * Custom jquery scripts for "Pisgat Makosh" project.
 */

$(document).ready(function(){
	
	$('#three-lines').on('click', function (event) {
		event.preventDefault();
		$(event.target).toggleClass('open');
	});
	
});
