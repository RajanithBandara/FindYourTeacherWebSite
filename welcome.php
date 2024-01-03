<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="welcome.css">
  <title>Simple Carousel</title>
</head>
<body>

<div class="carousel-container">
  <div class="carousel-wrapper">
    <div class="carousel-slide" style="background-image: url(carosel.jpg); background-position: center;background-size: cover;background-repeat: no-repeat;">
        <div class="img-content-of-welcome">

        </div>
        <div class="text-area-of-welcome" >
            <h1>WELCOME</h1>
            <h1>To</h1>
            <h1>FindYourTeacher.com</h1>
            <h1></h1>
            <p>Here you can find teachers from the best institutions around Sri Lanka.</p>
            <button class="btn">Teachers</button>
        </div>
    </div>
    <div class="carousel-slide" style="background-image: url(carosel.jpg); background-position: center;background-size: cover;background-repeat: no-repeat;">
        <div class="img-content-of-welcome">

        </div>
        <div class="text-area-of-welcome">
            <h1>There are so many institutions around Sri Lanka</h1>
            <h1>You can browse all from here</h1>
            <h1></h1>
            <p>Find the best nearby institution in your area</p>
            <button class="btn">Institution</button>
        </div>
    </div>
    <!--<div class="carousel-slide">Slide 3</div>-->
    <!-- Add more slides as needed -->
  </div>
  <button class="prev-btn">&lt;</button>
  <button class="next-btn">&gt;</button>
</div>

<script src="home.js"></script>
</body>
</html>
