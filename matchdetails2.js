var val;
function fun(y)
{
	el=document.getElementById(y);
	if(el.checked==true)
		val=false;
	else
		val=true;
}
function rad(x)
{
	var e=document.getElementById(x);	
	e.checked=val;
	if(e.checked)
	{
		a=x.split("_");
		document.getElementById("r_"+a[1]).required=false;
		document.getElementById("b_"+a[1]).required=false;
		document.getElementById("f_"+a[1]).required=false;
		document.getElementById("s_"+a[1]).required=false;
		document.getElementById("m_"+a[1]).required=false;
	}
	else
	{
		a=x.split("_");
		document.getElementById("r_"+a[1]).required=true;
		document.getElementById("b_"+a[1]).required=true;
		document.getElementById("f_"+a[1]).required=true;
		document.getElementById("s_"+a[1]).required=true;
		document.getElementById("m_"+a[1]).required=true;
	}
		
}
var val2;
function fun2(y)
{
	el=document.getElementById(y);
	if(el.checked==true)
		val2=false;
	else
		val2=true;
}
function rad2(x)
{
	var e=document.getElementById(x);	
	e.checked=val2;
	if(e.checked)
	{
		a=x.split("_");
		document.getElementById("o_"+a[1]).required=false;
		document.getElementById("ma_"+a[1]).required=false;
		document.getElementById("rg_"+a[1]).required=false;
		document.getElementById("w_"+a[1]).required=false;
	}
	else
	{
		a=x.split("_");
		document.getElementById("o_"+a[1]).required=true;
		document.getElementById("ma_"+a[1]).required=true;
		document.getElementById("rg_"+a[1]).required=true;
		document.getElementById("w_"+a[1]).required=true;
	}
		
}
function presubmit()
{
	var ret=confirm("Data once recorded can not be chaanged, please make sure you have entered right data");
	return ret;
}