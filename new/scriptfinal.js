function today() 
{
	var now = new Date();
	var ndate= now.getDate();
	var nmonth= now.getMonth();
	var nyear= now.getFullYear();
	var nseconds= now.getSeconds();
	var nminutes= now.getMinutes();
	var nhours= now.getHours();
	var lday=0,lhours,lminutes,lmonths,lseconds;
	if(ndate<20)
	{
		lday=19-ndate;
		lmonths=9-nmonth;

	}
	else if(ndate>=20)
	{
		if(ndate!=20) {lday = 50-1-ndate;}//20+30=50
		lmonths=9-nmonth-1;
	}
	if (nminutes>0||nseconds>0)
	{
		lhours=23-nhours;
	}
	else 
	{
		lhours = 24-nhours;
	}
	if(nminutes>0)
	{
		lminutes=60-1-nminutes;
	}
	else lminutes =0;
	if(nseconds>=0)
	{
		lseconds=60-1-nseconds;
	}
	else
	{
		lseconds=0;
	}

	$("#date").html( "My birthday is "+lmonths + " months, " +lday + " days, " + lhours + " hours, " + lminutes + " minutes, " + lseconds+ " seconds"+ " away." );
}
setInterval(today, 1000);