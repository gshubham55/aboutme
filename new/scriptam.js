$(document).ready(function(){

	 $('#hobbies').hide();
	 $('#timeline').hide();
	 $('#contact').hide();
	 var on="#aboutme";
	 //$('#aboutme').hide();
	 $('#tcontact').click(function() {
	 	$('#contact').show();
	 	if(on!="#contact")
	 		{
	 			$(on).hide();
	 		}
	 	on="#contact";
	 });
	 $('#ttimeline').click(function() {
	 	$('#timeline').show();
	 	if(on!="#timeline")
	 		{
	 			$(on).hide();
	 		}
	 	on="#timeline";
	 });
	 $('#thobbies').click(function() {
	 	$('#hobbies').show();
	 	if(on!="#hobbies")
	 		{
	 			$(on).hide();
	 		}
	 	on="#hobbies";
	 });
	 $('#tabout').click(function() {
	 	$('#aboutme').show();
	 	if(on!="#aboutme")
	 		{
	 			$(on).hide();
	 		}
	 	on="#aboutme";
	 });
});