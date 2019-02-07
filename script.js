function call()
{
var a=document.form1.name.value;
var i=a.match(/[A-Za-z0-9]+/);
if(!i)
{
alert("please enter the valid name");
}
var b=document.form1.pass.value;
var q=b.match(/[A-za-z0-9\.*]{8,}/);
if(!q)
{
alert("enter valid password should contain atleast one alphabet and integer");
}
var c=document.form1.email.value;
var r=c.match(/[[A-za-z0-9\.*]+[A-za-z0-9]]+@+[[A-za-z0-9]+\.([A-Za-z]{2,3})([A-Za-z])?/);
if(!r)
{
alert("enter valid email");
}
if(r&&q&&i)
{
alert("registration successfull");
}
}

function call1()
{
var a=document.form2.email.value;
var b=document.form2.pass.value;
var p=a.match(/[A-Za-z0-9\.*]+\@[A-Za-z0-9]+\.([A-Za-z]{2,3})([A-Za-z]?)/);
var q=b.match(/[A-Za-z0-9\.*]{8,}/);
if(!p)
alert("Not a valid email");
if(!q)
alert("enter valid password-should contain atleast one alphabet and integer");
}