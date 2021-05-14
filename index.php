<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />

    <title>Tripfest</title>
  </head>
  <body>
    <nav class="navResponse">
      <input type="checkbox" id="check" />
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo" style="cursor: pointer" onclick="home()"
        >Tripfest</label
      >
      <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <!-- <li><a href="Register.php">Sign Up</a></li> -->
        <li><a href="Order-form.php">Book trip</a></li>
        <li><a href="Sign-In.php">Admin</a></li>
      </ul>
    </nav>

    <!-- <marquee behavior="slide" direction="up" scrollamount="7" style="font-size:50px; color:#0058e693 ">TripFest</marquee>
      <marquee behavior="slide" direction="down" scrollamount="7"style="font-size:30px">Your One Stop <span style="color:#0058e693">Companion</span></marquee>
      <marquee behavior="slide" direction="down" scrollamount="7" style="font-size:30px">Choosing Your Next <span  style="color -->

    <div style="height: 70vh; padding-left: 10%; padding-top:10%; background-color:#faf9f6; background-attachment:fixed; line-height:1.6; background-image: url('images/nature3.jpg'); background-repeat: no-repeat; background-size: 100% 100%">
      <marquee behavior="slide" direction="up" scrollamount="25">
        <h1 style="font-size:50px; color:#ccf6c8">TripFest</h1>
        <h3 style="font-size:40px; color:#d8e3e7">Your One Stop <span style="color:#ccf6c8">Companion</span></h3>
        <h3 style="font-size:40px; color:#d8e3e7">Choosing Your Next <span  style="color:#ccf6c8">Destination</span></h3>
      </marquee>
    </div>
    <div class="slideshow-container">
      <div class="mySlides fade">
        <div class="numbertext"></div>
        <img src="images/img1.jpg" class="slideImage" style="width: 100%" />
      </div>

      <div class="mySlides fade">
        <div class="numbertext"></div>
        <img src="images/img2.jpg" class="slideImage" style="width: 100%" />
      </div>

      <div class="mySlides fade">
        <div class="numbertext"></div>
        <img src="images/img3.jpg" class="slideImage" style="width: 100%" />
      </div>
    </div>
    <br />

    <div style="text-align: center">
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>

    <div class="cardholder">
      <h1 style="text-align : center; margin : 50px 0px">Destinations</h1>
      <div class="row">
        <div class="column">
          <div class="card">
            <img src="images/pic1.jpg" class="card-image" />
            <h1>Venice, Italy</h1>
            <p class="price">BDT 86,500/-</p>
            <p>3 day and 2 Nights for 1 person</p>
            <button onclick="venice()">Detail</button>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <img src="images/pic2.jfif" class="card-image" />
            <h1>Paris,France</h1>
            <p class="price">BDT 175,000/-</p>
            <p>5 days and 4 nights for 1 person.</p>
            <button onclick="paris()">Detail</button>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <img src="images/pic3.jpg" class="card-image" />
            <h1>Agra, India</h1>
            <p class="price">BDT 30,200/-</p>
            <p>3 days and 2 nights for one person</p>
            <button onclick="delhi()">Detail</button>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <img src="images/pic4.jpg" class="card-image" />
            <h1>Kuala Lumpur, Malaysia</h1>
            <p class="price">BDT 67,000/-</p>
            <p>2 days and 2 nights</p>
            <button onclick="malaysia()">Detail</button>
          </div>
        </div>
      </div>
    </div>
    <div class='feedback-div'>
      <h1 class='bs'>Feedback</h1>
      <div id="test-file-display">
        
      </div>
    </div>
      <div class="contact">
        <div>
          <h4>Contact Us</h4>
        </div>
        <div class="contact-box">
          <p>Holdind no - 231/1 ECB Chattar, Dhaka Cantonment, Dhaka- 1206.</p>
          <p>Email- Tripfest@gmail.com.</p>
          <p>Phone- 01701010101.</p>
        </div>
      </div>
      <footer class="footer-box">
        <h1>©Tripfest</h1>
      </footer>
      <script src="Slider.js"></script>
    <script>
      const venice = () => {
        location.replace("./venice.php");
      };
      const paris = () => {
        location.replace("./paris.php");
      };
      const delhi = () => {
        location.replace("./delhi.php");
      };
      const malaysia = () => {
        location.replace("./kualalumpur.php");
      };
      const home = () => {
        location.replace("./index.php");
      };

      // const r = new XMLHttpRequest();
      // r.open("GET", "test_file.json", async = true)
      // r.onload = () => {
      //   if(r.status == 200){
      //     let obj = JSON.parse(r.responseText);
      //     console.log(obj);
      //     document.getElementById("test-file-display").innerHTML = "<div class='feedback-showcase column'><h1 class='feedback-name'>" + obj.objects[0].name + "</h1><p>" + obj.objects[0].comment + "</p></div><div class='feedback-showcase column'><h1 class='feedback-name'>" + obj.objects[0].name + "</h1><p>" + obj.objects[0].comment + "</p></div><div class='feedback-showcase column'><h1 class='feedback-name'>" + obj.objects[0].name + "</h1><p>" + obj.objects[0].comment + "</p></div><div class='feedback-showcase column'><h1 class='feedback-name'>" + obj.objects[0].name + "</h1><p>" + obj.objects[0].comment + "</p></div><div class='feedback-showcase column'><h1 class='feedback-name'>" + obj.objects[0].name + "</h1><p>" + obj.objects[1].comment + "</p></div>"
      //   }
      // }
      // r.send();

      const p = new XMLHttpRequest();
      p.open("GET", "empdata.json", async = true);
      p.onload = () => {
        if(p.status == 200){
          let objP = JSON.parse(p.responseText);
          let docWrite = document.getElementById("test-file-display");
          for(let i=0; i<6; i++){
            docWrite.innerHTML +="<div class='feedback-showcase column'><h1 class='feedback-name'>" + objP[i].f_name + "</h1><small class='feedback-mail'>" + objP[i].email +"</small><p>" + objP[i].subject + "</p></div>"
          }
        }
      }
      p.send();

    </script>
  </body>
</html>
