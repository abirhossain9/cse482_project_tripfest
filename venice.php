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
    <title>Venice</title>
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
        <img class="destination-photo" src="./images/pic1.jpg" alt="" />

        <div>
          <button onclick="test()" style="margin-left: 280px">Book</button>
        </div>
      </div>
      <div class="destination-detail">
        <h1>Venice, Italy</h1>
        <br />
        <p>
          Venice, the capital of northern Italy’s Veneto region, is built on
          more than 100 small islands in a lagoon in the Adriatic Sea.
        </p>
        <br />
        <p>
          It has no roads, just canals – including the Grand Canal thoroughfare
          – lined with Renaissance and Gothic palaces. The central square,
          Piazza San Marco, contains St. Mark’s Basilica, which is tiled with
          Byzantine mosaics, and the Campanile bell tower offering views of the
          city’s red roofs.
        </p>
        <br />
        <p>BDT 86,500/-</p>
        <div class="mapouter mapdiv">
          <div class="gmap_canvas">
            <iframe
              width="700"
              height="500"
              id="gmap_canvas"
              src="https://maps.google.com/maps?q=venice&t=&z=15&ie=UTF8&iwloc=&output=embed"
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
