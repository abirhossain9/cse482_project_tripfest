<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"  />
    <title>Tripfest</title>
  </head>
  <body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
        </label>
        <label class="logo">Tripfest</label>
        <ul>
          <li><a class="" href="index.php">Home</a></li>
          <li><a href="feedback.php">Feedback</a></li>
          <li><a class href="Register.php">Sign Up</a></li>
          <li><a href="Sign-In.php">Log In</a></li>
          <li><a href="Order-form.php">Book trip</a></li>
        </ul>
      </nav>
      <div class= "regcontainer">
        <form name='form' onSubmit="return formValidation()" action="action_page.php">

          <li><label for="name">Name:</label></li>
          <li><input type="text" id="name" name="name" /></li>
          <li><label for="username">Username:</label></li>
          <li><input type="text" id="username" name="username" required/></li>
          <li><label for="passid">Password:</label></li>
          <li><input type="password" id="password" name="passid"  /></li>
          <li><label for="re-passid">Re-type password:</label></li>
          <li><input type="password" id="passwordRetype" name="re-passid"  /></li>
          <li><label id="gender">Sex:</label></li>


          <li><input type="radio" id="male" name="sex" value="Male" /><span>Male</span></li>
          <li><input type="radio" id="female" name="sex" value="Female" /><span>Female</span></li>
          <li><input type="radio" id="other" name="sex" value="Other" /><span>Other</span></li>
          
         
<!-- 
          <input type="radio" id="male" name="gender" value="Male">
          <label for="male">Male</label><br>
          <input type="radio" id="female" name="gender" value="Female">
          <label for="female">Female</label><br>
          <input type="radio" id="other" name="gender" value="Other">
          <label for="other">Other</label> -->

          <li><label for="contact">Contact number:</label></li>
          <li><input type="text" id="contact" name="contact"></li>
          <li><label for="email">Email:</label></li>
          <li><input type="email" name="email"  /></li>
          <li><input type="submit" name="submit" value="Submit" /></li>
          <li>
          <div class="container signin">
            <p>Already have an account? <a href="Sign-In.php">Sign in</a>.</p>
          </div>
          </li>
          </form>
      </div>
    <div class="contact">
        <div>
          <h4>Contact Us</h4>
        </div>
        <div class="contact-box">
          <p>
              Holdind no - 231/1 ECB Chattar, Dhaka Cantonment, Dhaka- 1206.
          </p>
          <p>
            Email- Tripfest@gmail.com.
          </p>
          <p>
            Phone- 01701010101.
          </p>
        </div>
</div>
      <footer class="footer-box">
        <h1>©Tripfest</h1>
      </footer>
      <script src="formvalidation.js"></script>
  </body>
</html>
