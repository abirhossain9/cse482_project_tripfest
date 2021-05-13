const formValidation = () => {
    let name = document.forms["form"]["name"].value;
    let email = document.forms["form"]["email"].value;
    let male = document.forms["form"]["male"].checked;
    let female = document.forms["form"]["female"].checked;
    let other = document.forms["form"]["other"].checked;
    let conatctval=document.forms["form"]["contact"].value;
    let date = document.forms["form"]["date"].value;
    let destination = document.forms["form"]["destination"].value;
    if (name == "") {
      alert("Name must be filled out");
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

    if (email == "") {
      alert("Email required");
      return false;
    }
    if (date == false) {
        alert("Date must be selected");
        return false;
      }
      if (destination == false) {
        alert("Destination must be selected");
        return false;
      }


    
   alert("Order Placed");


  }