<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:locale" content="en_US">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Luminary Astrology and Tarot services">

  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">

  <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles/styles.css">
  <title>Luminary Astrology and Tarot services</title>

</head>

<body>
<?php
include ("navTop.php");
include ("loginModal.php");
include ("readingModals.php");
?>

  <header class="p-5 mb-5 text-white" id="jumbotron2">
    <section class="container">
      <article class="row">
        <div class="col">
          <h2>Consultations</h2>
          <p>For when you want to know your life story...</p>
        </div>
        <div class="col-md-4 col-xl-2">
          <a class="btn btn-dark btn-lg text-nowrap" id="bookReadingBtn" data-bs-toggle="modal" data-bs-target="#bookReadingModal">Book a Reading</a>
        </div>
      </article>
    </section>
  </header>

  <main>
    <section class="container">
      <h2>Astrology and Tarot Store</h2>
      <dl class="row">
        <figure class="col-12 col-md-4">
          <img src="pictures/3cards.jpeg" alt="3 card tarot spread">
          <figcaption>
            <dt>Quick 3 Card Tarot</dt>
            <dd class="text-success">$10</dd>
            <dd>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum voluptas voluptatem, a totam eligendi,
              aperiam odio suscipit necessitatibus doloribus quia officia exercitationem commodi voluptates adipisci
              excepturi! Quod eum ipsum at.</dd>
          </figcaption>
        </figure>
        <figure class="col-12 col-md-4">
          <img src="pictures/tarotCards.JPG" alt="tarot cards">
          <figcaption>
            <dt>Large Spread Tarot Reading</dt>
            <dd class="text-success">$20</dd>
            <dd>Celtic Cross, or other spreads as needed. I am committed to providing ethical readings from an eclectic
              perspective for
              all people who seek them no matter if they
              are looking for more insight into self, relationships guidance, or just someone to chat with.</dd>
          </figcaption>
        </figure>
        <figure class="col-12 col-md-4">
          <img src="pictures/horoscope.JPG" alt="horoscope">
          <figcaption>
            <dt>Natal chart reading</dt>
            <dd class="text-success">$30</dd>
            <dd>My approach to astrology is both modern and traditional. I am able to read the natal chart in a
              down-to-earth,
              psychologically informed way that brings clarity to your life experience. My primary method is to read the
              astrological
              chart in terms of planetary dynamics–which becomes the backdrop for an analysis of your life experience.</dd>
          </figcaption>
        </figure>
      </dl>
    </section>

    <section class="container">
      <h2>LOGISTICS AND TERMS OF PURCHASE:</h2>
      <ul>
        <li>After purchase, you will receive an email with a link to my calendar. If you do not receive this email, please
          email me
          at xxx@luminaryastrologyandtarot.com.</li>
        <li>Readings are conducted over Skype or Zoom meeting (zoom.us) for the time alloted, and are audio recorded. You
          will be
          given the option to record on your end, or sent the audio afterward.</li>
        <li>Readings are conversational and friendly. I invite you always to ask for clarification, to ask questions, or
          share
          reflection along the way.</li>
        <li>My cancellation policy is that you give notice of the need to reschedule with at least 24 hours notice.
          Otherwise, and
          in the case of no-shows, the reading is forfeited.</li>
        <li>I do not offer refunds so please be certain of your decision to work with me.</li>
        <li>If you have any questions about astrology readings with me, please email me at
          xxx@luminaryastrologyandtarot.com.</li>
      </ul>
    </section>
  </main>

  <footer>
    <nav>
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="AboutMe.html">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Services.html">Services</a>
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

  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>
