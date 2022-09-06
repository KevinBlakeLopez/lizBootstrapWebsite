<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:locale" content="en_US">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Luminary Astrology and Tarot">

  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">

  <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles/styles.css">
  <title>Luminary Astrology and Tarot</title>
</head>

<body>
<?php
include("navTop.php");
include ("loginModal.php");
include ("readingModals.php");
?>

  <header class="p-5 mb-5 text-white" id="jumbotron">
    <div class="container">
      <section class="row">
        <div class="col">
          <h1><em>Luminary Astrology and Tarot</em></h1>
          <h2>Ever looked at the stars and wondered what the meaning of life is?</h2>
          <h4 class="mt-5">Know thyself - Book a reading today!</h4>
        </div>
        <div class="col-md-4 col-xl-2">
          <a class="btn btn-dark btn-lg text-nowrap" data-bs-toggle="modal" data-bs-target="#bookReadingModal">Schedule consult</a>
        </div>
      </section>
    </div>
  </header>

  <main class="container">
    <section class="row">
      <article class="col">
        <p>Do you want to understand why things are the way that they are? Do you want insight in something that is
          puzzling you? Or maybe you just don't know where to go in life? If so, book an appointment with Liz T of Luminary Astrology and Tarot. Liz has studied modern psychological astrology and traditional Arabic astrology. She can guide you in your quest to find answers.</p>
      </article>
    </section>
    <section class="row">
      <figure class="col-12 col-md-6">
        <img id="readingHome" class="d-flex ml-3 img-thumbnail" src="pictures/blackCatAltar2.jpg">
        <figcaption class="media-body align-self-center">
          <h4><a class="btn btn-dark" href="services.html">Consultation Options</a></h4>
          <!--<h6>Find out something about yourself that you didn't already know</h6>-->
        </figcaption>
      </figure>
      <figure class="col-12 col-md-6">
        <img id="aboutHome" class="d-flex ml-3 img-thumbnail" src="pictures/lizT.jpg">
        <figcaption>
          <h4 class="d-none d-sm-block"><a class="btn btn-dark" href="aboutme.html">About Liz</a></h4>
          <!--<h6>Learn more about Liz T's experience gazing at the stars and unraveling the secrets of the
                Tarot.</h6>-->
        </figcaption>
      </figure>
    </section>


  </main>

  <footer>
    <nav>
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="AboutMe.html">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Blog.html">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Contact.html">Contact</a>
        </li>
      </ul>
    </nav>

  </footer>

  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>

</html>
