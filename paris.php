<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <title>Paris</title>
  </head>
  <body>
    <nav class="navResponse">
      <input type="checkbox" id="check" />
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">Tripfest</label>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <li><a href="Order-form.php">Book trip</a></li>
        <li><a href="Sign-In.php">Admin</a></li>
      </ul>
    </nav>
    <div class="destination-div">
      <div class="destination-image">
        <img class="destination-photo" src="./images/pic2.jfif" alt="" />

        <div>
          <button onclick="test()" style="margin-left: 280px">Book</button>
        </div>
      </div>
      <div class="destination-detail">
        <h1>Paris, France</h1>
        <br />
        <p>
          Paris, France's capital, is a major European city and a global center
          for art, fashion, gastronomy and culture.
        </p>
        <br />
        <p>
          Its 19th-century cityscape is crisscrossed by wide boulevards and the
          River Seine. Beyond such landmarks as the Eiffel Tower and the
          12th-century, Gothic Notre-Dame cathedral, the city is known for its
          cafe culture and designer boutiques along the Rue du Faubourg
          Saint-Honoré.
        </p>
        <br />
        <p>BDT 1,75,000/-</p>
        <div class="mapouter mapdiv">
          <div class="gmap_canvas">
            <iframe
              width="700"
              height="500"
              id="gmap_canvas"
              src="https://maps.google.com/maps?q=paris&t=&z=15&ie=UTF8&iwloc=&output=embed"
              frameborder="0"
              scrolling="no"
              marginheight="0"
              marginwidth="0"
            ></iframe
            ><a href="https://123movies-to.org"></a><br /><style>
              .mapouter {
                position: relative;
                text-align: right;
                height: 500px;
                width: 700px;
              }</style
            ><a href="https://www.embedgooglemap.net"
              >custom google map for website</a
            ><style>
              .gmap_canvas {
                overflow: hidden;
                background: none !important;
                height: 500px;
                width: 700px;
              }
            </style>
          </div>
        </div>
      </div>
    </div>

    <script>
      const test = () => {
        location.replace("./Order-form.php");
      };
    </script>
  </body>
</html>
