
function validate()
		{
		var pass1 = document.getElementById("pass").value;
		var pass2 = document.getElementById("conpass").value;
		var abc123= /[0-9a-zA-Z]/;	
	
		if(pass1 != pass2)
			{
				alert("*Passwords do not match.\n*Atleast 5 Chars.\n*Letters & Numbers.");
				return false;
			}
			else if(pass1.length < 5)
			{
				alert("Password should contain atleast FIVE characters");
				return false;

			}
		}
