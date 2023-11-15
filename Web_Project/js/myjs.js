function validateForm() 
{
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  if (username == "") 
  {
    document.getElementById("mytext").innerHTML="Please enter username Javascript";
    return false;
  }
  if ( password.length < 5) {
    document.getElementById("mytext").innerHTML="Please enter password js";
    return false;
  }
}

function validateSignUpForm() 
{
  var name = document.getElementById("name").value;
  var regName = /^[a-zA-Z]+ [a-zA-Z]+$/
  var username = document.getElementById("username").value;
  var contact= document.getElementById("contact").value;
  var passw=  /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
  var password = document.getElementById("password").value;
  var email=document.getElementById("email").value;
  var x = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  var fileInput = document.getElementById("document");
  var filePath = fileInput.value;

  var allowedExtensions = /(\.doc|\.pdf|\.docx)$/i;

  var allowedExtensions = /(\.jpg|\.png|\.jpeg)$/i;


  if (!(regName.test(name))) 
  {
    document.getElementById("mytext").innerHTML="Please enter name js";
    return false;
  }
  if (username == "") 
  {
    document.getElementById("mytext").innerHTML="Please enter username js";
    return false;
  }
  if (!(x.test(email)))
  {
    document.getElementById("mytext").innerHTML="Please enter valid email js";
    return false;
  }
  if (!(contact.length==11 || contact.length==14)) 
  {
    document.getElementById("mytext").innerHTML="Please enter valid contact no js";
    return false;
  } 
  if (!(passw.test(password))) 
  {
    document.getElementById("mytext").innerHTML="Please enter valid password js";
    return false;
  }
  if (!allowedExtensions.exec(filePath)) 
  {
    document.getElementById("mytext").innerHTML="Please select a valid file js";
    fileInput.value = '';
    return false;
  } 

}
 function finduserName()
 {
    var x = document.getElementById("username").value;
    
    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() 
  {
    if (this.readyState == 4 && this.status == 200) 
    {
      document.getElementById("check").innerHTML = this.responseText;
    }

	
  };
  xhttp.open("POST", "/Web_Project/Control/Form_handle.php?x="+x, true);
  xhttp.send();
 }

  //ajax for email 
  function findEmail()
  {
     var y = document.getElementById("email").value;
     
     var xhttp = new XMLHttpRequest();
   xhttp.onreadystatechange = function() 
   {
     if (this.readyState == 4 && this.status == 200) 
     {
       document.getElementById("check1").innerHTML = this.responseText;
     }
 
   
   };
   xhttp.open("POST", "/Web_Project/Control/Email_handle.php?y="+y, true);
   xhttp.send();
 

  }

 
