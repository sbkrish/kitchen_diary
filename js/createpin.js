

function validate()

    {

    var mail = document.getElementById("email").value;  
    var pass1 = document.getElementById("pas").value;

    var pass2 = document.getElementById("conpass").value;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    var abc123= /[0-9]/;  

    if (mail != mailformat) {
      alert("wrong format");
      return false;
    }
  

    if(pass1 != pass2)

      {

        alert("*Passwords do not match");

        return false;

      }

      else if(pass1.length != 4)

      {

        alert("Password should contain four characters only");

        return false;



      }

    }

/*function validateEmail(inputText)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(inputText.value.match(mailformat))
{
document.createpass.email.focus();
$("#errfn").hide();
return true;
}
else
{
// alert("You have entered an invalid email address!");
document.getElementById('errfn').innerHTML="Invalid Email address";
document.createpass.email.focus();
return false;
}
}
*/