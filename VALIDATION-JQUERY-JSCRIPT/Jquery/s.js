$(document).ready(function(){
    $("#subm").click(function(){
        var sEmail = $('#email1').val();
       	var pas=$('#pass1').val();
    	  var nm=$('#fname1').val();
	      var nm1=$('#lname1').val();
	      var mb=$('#mob1').val();
        $("#form11").validate({
    	  
  
        rules:
        {
    	   fname1:"required",
	       lname1:"required",
           pass1:"required",
           pass2:
        	   {    	   
        	   equalTo:"#pass1",
        	   },

           mob:{
        	   minlength:"10",
        	   maxlength:"10",
        	   },
        	   date:"required",
           pin:{
        	   minlength:"6",
        	   maxlength:"6",   		   
        	   },
        	  
        	   email1:"required",
        	   Text1:"required",
       },
       
       messages:
       {
       fname1:"<br>This field is required.",
	lname1:"<br>This field is required.",
       pass1:"<br>This field is required.",
       pass2:"<br>Password and C-password field must be same.",
       date:"<br>This field is required.",
       mob:"<br>length should be 10.",
       pin:"<br>Pin code should be of 6 digits.",
       email1:"<br>This field is required.",
      Text1:"<br>This field is required.",
       },
       });
       
       if (!validateName(nm)) 
   	   {
   		   alert('Enter characters in first name field');
   		 
	   }
	 if (!validateName1(nm1)) 
   	   {
   		   alert('Enter characters in last name field');
   		 
	   }
	   if (!validatePass(pas)) 
   	   {
   		   alert('Invalid Password');
   		 
	   }

	
   	   if (!validateEmail(sEmail)) 
   	   {
   		   alert('Invalid Email Address');
   		 
	   }
  	 if (!validateMob(mb)) 
   	   {
   		   alert('Invalid Mob no');
   		 
	   }
   	   
   	  
    });
    
});
function validateEmail(sEmail)
{
	var filter = /[A-Za-z0-9]+@[^@]+\.[a-zA-Z]{2,6}/;
	if (filter.test(sEmail))
	{
		return true;
	}
	else 
	{
		return false;
	}
}
function validateName(nm)
{
	var filter1 = /^[a-zA-z]*$/;
	if (filter1.test(nm))
	{
		return true;
	}
	else 
	{
		return false;
	}
}
function validatePass(pas)
{
	var filter2 = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,12}/;
	if (filter2.test(pas))
	{
		return true;
	}
	else 
	{
		return false;
	}
}
 
function validateName1(nm1)
{
	var filter3 = /^[a-zA-z]*$/;
	if (filter3.test(nm1))
	{
		return true;
	}
	else 
	{
		return false;
	}
}

function validateMob(mb)
{
	var filter4 = /(7|8|9)\d{9}/;
	if (filter4.test(mb))
	{
		return true;
	}
	else 
	{
		return false;
	}
}
