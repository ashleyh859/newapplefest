<!DOCTYPE html>
<html lang="en">
<?php
  $home_class = 'current';
  $planningyourvisit_class = '';
  $faqs_class = '';
    ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Home</title>
  <link rel="icon" type="image/svg" href="/images/apple-harvest-logo.svg">
  <link rel="stylesheet"
  type="text/css"
  href="styles/site.css" >
</head>

<body>
  <?php include('includes/header.php'); ?>

<main>
    <div class="fullscreen-image" >
      <picture>
        <img src="images/apples-bins.jpg" alt="">
      </picture>
      <div class="overlay-text">
        <h2>Ithaca Commons Apple Harvest Festival</h2>
        <h3>September 28-30th, 2023</h3>
        <h3>10:00AM - 6:00PM</h3>
        <h3>Ithaca Commons</h3>
        <p class="additional-text">Join us for three days of farm-fresh bites, local crafts, live music, and fall activities for all ages.</p>
      </div>
    </div>
    <div class="homepage-content">
        <h2>
          Welcome to our 34th Annual LaFayette Apple Festival!
        </h2>
        <p>
          We are excited to welcome you back to one of Ithaca’s most celebrated events: the Apple Harvest Festival! Join us for three days of farm-fresh bites, local crafts, live music, and fall activities for all ages.
        </p>
        <p>
          This annual festival marks the beginning of the fall harvest season, and features local apples and the Finger Lakes food, craft, and entertainment community! The weekend's happenings gives Ithaca residents, students, and visitors an opportunity to interact with small businesses and creators in the area.
        </p>
        <p>
          Welcome fall with us by visiting one of Ithaca's most famous events!
          <!-- Source: Instructor provided content -->
        </p>
        <div class="schedule">
          <h3>September 28-30th, 2023</h3>
          <h3>10:00AM - 6:00PM</h3>
          <h3>Ithaca Commons</h3>
        </div>
          <!-- Source: Instructor provided content -->
    </div>
    <div class="four-grid-image">
      <div class="column">
        <picture>
          <img src="images/apple-basket-many.jpg" alt="">
        </picture>
      </div>
      <div class="column">
        <picture>
          <img src="images/sign-vendor.jpg" alt="">
        </picture>
      </div>
      <div class="column">
        <picture>
          <img src="images/vendor-stall.jpg" alt="">
        </picture>
      </div>
      <div class="column">
        <picture>
          <img src="images/cider-apples-stand.jpg" alt="">
        </picture>
      </div>
    </div>
    <div>
      <figure class="map center">
        <img id="originalE" class="map" src="images/apple-harvest-map.svg" alt="Map of Apple Fest activities">
    </figure>
    </div>
</main>

<?php include('includes/footer.php'); ?>

<script src="scripts/jquery-3.7.1.js"></script>
<script src="scripts/hamburgermenu.js"></script>
<script src="scripts/accordion.js"></script>
</body>

</html>
