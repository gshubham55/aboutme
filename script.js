function today()
{
	var monthNames = [ "January", "February", "March", "April", "May", "June",
	    "July", "August", "September", "October", "November", "December" ];
	var dayNames= ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]

	var newDate = new Date();
	newDate.setDate(newDate.getDate() + 1);    
	var day = newDate.getDay();
	var seconds=newDate.getSeconds();
	$('#date').html(dayNames[day] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear() +' ' + seconds )	;
}

setInterval(today, 1000);