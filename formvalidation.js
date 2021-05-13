 const formValidation = () => {
    let name = document.forms["form"]["name"].value;
    let Uname = document.forms["form"]["username"].value;
    let email = document.forms["form"]["email"].value;
    let male = document.forms["form"]["male"].checked;
    let female = document.forms["form"]["female"].checked;
    let other = document.forms["form"]["other"].checked;
    let pass = document.forms["form"]["password"].value;
    let repass = document.forms["form"]["passwordRetype"].value;
    let conatctval=document.forms["form"]["contact"].value;
  
    if (name == "") {
      alert("Name must be filled out");
      return false;
    }
    if (!/^\S{3,}$/.test(Uname)) 
    {
      alert("White space is not allowed in username");
      return false;
    }
    if (email == "") {
      alert("Email required");
      return false;
    }
    if (pass.length < 8 || pass.length > 32) {
      alert("Password length should be 8-32 digits");
      return false;
    }
    if (pass != repass) {
      alert("Password doesn't match");
      return false;
    }
    if (male === false && female === false && other === false) {
      alert("Select gender");
      return false;
    }
    let tel= /^\d{11}$/;
    if(!conatctval.match(tel)){
      alert("Contact format not acceptable");
      return false;
    }
    
   alert("Form Submitted");


  }