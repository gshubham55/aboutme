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
	 			$("#tabout").css("color","");
	 			$("#thobbies").css("color","");
	 			$("#ttimeline").css("color","");
	 			

	 			$(on).hide();
	 		}
	 	$('#tcontact').css("color","white");
	 	on="#contact";
	 });
	 $('#ttimeline').click(function() {
	 	$('#timeline').show();
	 	if(on!="#timeline")
	 		{
	 			$("#tabout").css("color","");
	 			$("#thobbies").css("color","");
	 			$("#tcontact").css("color","");

	 			$(on).hide();
	 		}
	 			$("#ttimeline").css("color","white");
	 	on="#timeline";
	 });
	 $('#thobbies').click(function() {
	 	$('#hobbies').show();
	 	if(on!="#hobbies")
	 		{
	 			$("#tabout").css("color","");
	 			$("#ttimeline").css("color","");
	 			$("#tcontact").css("color","");

	 			$(on).hide();
	 		}
	 			$("#thobbies").css("color","");
	 	on="#hobbies";
	 });
	 $('#tabout').click(function() {
	 	$('#aboutme').show();
	 	if(on!="#aboutme")
	 		{
	 			$("#thobbies").css("color","");
	 			$("#ttimeline").css("color","");
	 			$("#tcontact").css("color","");

	 			$(on).hide();
	 		}
	 			$("#tabout").css("color","");
	 	on="#aboutme";
	 });
});