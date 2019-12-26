function ValidateEmail(inputText,pass1,pass2)
{
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	
	if(inputText.value.match(mailformat))
	{
		document.regform.email.focus();
		


		if(pass1.value.length || pass2.value.length == 0)
		{
			alert("error message");
			return false;
		}

		else
		{
			return true;
		}

		return true;
	}
	else
	{
		alert("You have entered an invalid email address!");
		document.regform.email.focus();
		return false;
	}


}

