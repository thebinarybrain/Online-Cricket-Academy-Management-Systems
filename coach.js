function deleteConfirm()
{
	var res=confirm("Are you sure you want to delete it");
	return res;
}
function changepass()
{
	res=true;
	p1=document.getElementById("pas1").value;
	p2=document.getElementById("pas2").value;
	if(p1!=p2)
	{
		res=false;
		alert("Password Mismatch");
	}
	return res;
}
function validateNotice()
{
	res=true;
    	p1=document.getElementById("p1").value;
		p2=document.getElementById("p2").value;
		p3=document.getElementById("p3").value;
		p4=document.getElementById("p4").value;
		p5=document.getElementById("p5").value;
		p6=document.getElementById("p6").value;
		p7=document.getElementById("p7").value;
		p8=document.getElementById("p8").value;
		p9=document.getElementById("p9").value;
		p10=document.getElementById("p10").value;
		p11=document.getElementById("p11").value;
		p12=document.getElementById("p12").value;
		var ar=[p1,p2,p3,p4,p5,p6,p7,p8,p9,p10,p11,p12];
		for(i=0;i<ar.length;i++)
		{
			if(res==false)
				break;
			for(j=i+1;j<ar.length;j++)
			{
				if((ar[i]==ar[j]) && (ar[i].length!=0 || ar[i].length!=0))
				{
					res=false;
					alert("Players name cannot be same");
					break;
				}
			}
		}
		x=document.getElementById("expire").value;
	a=x.split("-");
y=new Date();
m=y.getMonth()+1;
ye=y.getFullYear();
d=y.getDate();
if(ye>a[0])
{
res=false;
alert("Expire Date Cannot be smaller than Current Date");
}
else if(ye==a[0])
{
if(m>a[1])
{
res=false;
alert("Expire Date Cannot be smaller than Current Date");
}
else if(m==a[1])
{
if(d>a[2])
{
res=false;
alert("Expire Date Cannot be smaller than Current Date");
}
}
}
		return res;
}
function validateNoticee()
{
	res=true;
    	p1=document.getElementById("p1e").value;
		p2=document.getElementById("p2e").value;
		p3=document.getElementById("p3e").value;
		p4=document.getElementById("p4e").value;
		p5=document.getElementById("p5e").value;
		p6=document.getElementById("p6e").value;
		p7=document.getElementById("p7e").value;
		p8=document.getElementById("p8e").value;
		p9=document.getElementById("p9e").value;
		p10=document.getElementById("p10e").value;
		p11=document.getElementById("p11e").value;
		p12=document.getElementById("p12e").value;
		var ar=[p1,p2,p3,p4,p5,p6,p7,p8,p9,p10,p11,p12];
		for(i=0;i<ar.length;i++)
		{
			if(res==false)
				break;
			for(j=i+1;j<ar.length;j++)
			{
				if((ar[i]==ar[j]) && (ar[i].length!=0 || ar[i].length!=0))
				{
					res=false;
					alert("Players name cannot be same");
					break;
				}
			}
		}
		x=document.getElementById("expiree").value;
	a=x.split("-");
y=new Date();
m=y.getMonth()+1;
ye=y.getFullYear();
d=y.getDate();
if(ye>a[0])
{
res=false;
alert("Expire Date Cannot be smaller than Current Date");
}
else if(ye==a[0])
{
if(m>a[1])
{
res=false;
alert("Expire Date Cannot be smaller than Current Date");
}
else if(m==a[1])
{
if(d>a[2])
{
res=false;
alert("Expire Date Cannot be smaller than Current Date");
}
}
}
		return res;
}
function notice()
{
	e1=document.getElementById("gen");
	e2=document.getElementById("tm");
	e3=document.getElementById("hand");
	if(e1.checked)
	{
		document.getElementById("p1").required=false;
		document.getElementById("p2").required=false;
		document.getElementById("p3").required=false;
		document.getElementById("p4").required=false;
		document.getElementById("p5").required=false;
		document.getElementById("p6").required=false;
		document.getElementById("p7").required=false;
		document.getElementById("p8").required=false;
		document.getElementById("p9").required=false;
		document.getElementById("p10").required=false;
		document.getElementById("p11").required=false;
		document.getElementById("p12").required=false;
		e3.setAttribute("style","display:none");
	}
	else if(e2.checked)
	{
		e3.setAttribute("style","display:block");
		document.getElementById("p1").required=true;
		document.getElementById("p2").required=true;
		document.getElementById("p3").required=true;
		document.getElementById("p4").required=true;
		document.getElementById("p5").required=true;
		document.getElementById("p6").required=true;
		document.getElementById("p7").required=true;
		document.getElementById("p8").required=true;
		document.getElementById("p9").required=true;
		document.getElementById("p10").required=true;
		document.getElementById("p11").required=true;
		document.getElementById("p12").required=true;
	}
}
function toss()
{
	var t1=document.getElementById("team_1").value;
	var t2=document.getElementById("team_2").value;
	var e=document.getElementById("op1");
	e.innerHTML=t1;
	var e1=document.getElementById("op2");
	e1.innerHTML=t2;
}
function wtoss()
{
	var t1=document.getElementById("wteam_1").value;
	var t2=document.getElementById("wteam_2").value;
	var e=document.getElementById("wop1");
	e.innerHTML=t1;
	var e1=document.getElementById("wop2");
	e1.innerHTML=t2;
}
function validateDate()
{
	res=true;
	s=new Date(document.getElementById("s_date").value);
	e=new Date(document.getElementById("e_date").value);
	if(s>e)
	{
		res=false;
		alert("End date can not be greater than start date");
	}
	return res;
}
function validateForm()
{
	res=true;
	var t1=document.getElementById("team_1").value;
	var t2=document.getElementById("team_2").value;
	var p1=document.getElementById("team_1_p_1").value;
	var p2=document.getElementById("team_1_p_2").value;
	var p3=document.getElementById("team_1_p_3").value;
	var p4=document.getElementById("team_1_p_4").value;
	var p5=document.getElementById("team_1_p_5").value;
	var p6=document.getElementById("team_1_p_6").value;
	var p7=document.getElementById("team_1_p_7").value;
	var p8=document.getElementById("team_1_p_8").value;
	var p9=document.getElementById("team_1_p_9").value;
	var p10=document.getElementById("team_1_p_10").value;
	var p11=document.getElementById("team_1_p_11").value;
	var q1=document.getElementById("team_2_p_1").value;
	var q2=document.getElementById("team_2_p_2").value;
	var q3=document.getElementById("team_2_p_3").value;
	var q4=document.getElementById("team_2_p_4").value;
	var q5=document.getElementById("team_2_p_5").value;
	var q6=document.getElementById("team_2_p_6").value;
	var q7=document.getElementById("team_2_p_7").value;
	var q8=document.getElementById("team_2_p_8").value;
	var q9=document.getElementById("team_2_p_9").value;
	var q10=document.getElementById("team_2_p_10").value;
	var q11=document.getElementById("team_2_p_11").value;
	var ar=[p1,p2,p3,p4,p5,p6,p7,p8,p9,p10,p11,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11];
	for(i=0;i<ar.length;i++)
	{
		if(res==false)
			break;
		for(j=i+1;j<ar.length;j++)
		{
			if(ar[i]==ar[j])
			{
				res=false;
				alert("Players name cannot be same");
				break;
			}
		}
	}
	if(t1==t2)
	{
		res=false;
		alert("Teams name can not be same");
	}
	x=document.getElementById("m_date").value;
	a=x.split("-");
y=new Date();
m=y.getMonth()+1;
ye=y.getFullYear();
d=y.getDate();
if(ye<a[0])
{
res=false;
alert("Match Date Cannot be greater than Current Date");
}
else if(ye==a[0])
{
if(m<a[1])
{
res=false;
alert("Match Date Cannot be greater than Current Date");
}
else if(m==a[1])
{
if(d<a[2])
{
res=false;
alert("Match Date Cannot be greater than Current Date");
}
}
}
return res;
}
function wvalidateForm()
{
	res=true;
	var t1=document.getElementById("wteam_1").value;
	var t2=document.getElementById("wteam_2").value;
	var p1=document.getElementById("wteam_1_p_1").value;
	var p2=document.getElementById("wteam_1_p_2").value;
	var p3=document.getElementById("wteam_1_p_3").value;
	var p4=document.getElementById("wteam_1_p_4").value;
	var p5=document.getElementById("wteam_1_p_5").value;
	var p6=document.getElementById("wteam_1_p_6").value;
	var p7=document.getElementById("wteam_1_p_7").value;
	var p8=document.getElementById("wteam_1_p_8").value;
	var p9=document.getElementById("wteam_1_p_9").value;
	var p10=document.getElementById("wteam_1_p_10").value;
	var p11=document.getElementById("wteam_1_p_11").value;
	var q1=document.getElementById("wteam_2_p_1").value;
	var q2=document.getElementById("wteam_2_p_2").value;
	var q3=document.getElementById("wteam_2_p_3").value;
	var q4=document.getElementById("wteam_2_p_4").value;
	var q5=document.getElementById("wteam_2_p_5").value;
	var q6=document.getElementById("wteam_2_p_6").value;
	var q7=document.getElementById("wteam_2_p_7").value;
	var q8=document.getElementById("wteam_2_p_8").value;
	var q9=document.getElementById("wteam_2_p_9").value;
	var q10=document.getElementById("wteam_2_p_10").value;
	var q11=document.getElementById("wteam_2_p_11").value;
	var ar=[p1,p2,p3,p4,p5,p6,p7,p8,p9,p10,p11,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11];
	for(i=0;i<ar.length;i++)
	{
		if(res==false)
			break;
		for(j=i+1;j<ar.length;j++)
		{
			if(ar[i]==ar[j])
			{
				res=false;
				alert("Players name cannot be same");
				break;
			}
		}
	}
	if(t1==t2)
	{
		res=false;
		alert("Teams name can not be same");
	}
	x=document.getElementById("wm_date").value;
	a=x.split("-");
y=new Date();
m=y.getMonth()+1;
ye=y.getFullYear();
d=y.getDate();
if(ye<a[0])
{
res=false;
alert("Match Date Cannot be greater than Current Date");
}
else if(ye==a[0])
{
if(m<a[1])
{
res=false;
alert("Match Date Cannot be greater than Current Date");
}
else if(m==a[1])
{
if(d<a[2])
{
res=false;
alert("Match Date Cannot be greater than Current Date");
}
}
}	
	return res;
}
function playerlist_1()
{
var req=new XMLHttpRequest();
req.open("get","http://localhost/Bootstrap/Major_project/teamlist1.php",true);
req.send();
req.onreadystatechange=function(){
	if(req.status==200 && req.readyState==4)
		document.getElementById("teamplayer1").innerHTML=req.responseText;
};
}
function wplayerlist_1()
{
var req=new XMLHttpRequest();
req.open("get","http://localhost/Bootstrap/Major_project/wteamlist1.php",true);
req.send();
req.onreadystatechange=function(){
	if(req.status==200 && req.readyState==4)
		document.getElementById("wteamplayer1").innerHTML=req.responseText;
};
}
function playerlist_2()
{
var req=new XMLHttpRequest();
req.open("get","http://localhost/Bootstrap/Major_project/teamlist2.php",true);
req.send();
req.onreadystatechange=function(){
	if(req.status==200 && req.readyState==4)
		document.getElementById("teamplayer2").innerHTML=req.responseText;
};
}
function wplayerlist_2()
{
var req=new XMLHttpRequest();
req.open("get","http://localhost/Bootstrap/Major_project/wteamlist2.php",true);
req.send();
req.onreadystatechange=function(){
	if(req.status==200 && req.readyState==4)
		document.getElementById("wteamplayer2").innerHTML=req.responseText;
};
}