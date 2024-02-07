<!DOCTYPE html>
<html lang="en">
  <?php
    $home_class = '';
    $planningyourvisit_class = 'current';
    $faqs_class = '';
  ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Explore Apple Fest</title>
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
          <img id="originalA" src="images/people-eating-apples.jpg" alt="">
        </picture>
        <div class="overlay-text">
          <h2>Let's Explore and Plan Your Visit</h2>
            <h3>September 28-30th, 2023</h3>
            <h3>10:00AM - 6:00PM</h3>
            <h3>Ithaca Commons</h3>
              <p class="additional-text">
                Join us for three days of farm-fresh bites, local crafts, live music, and fall activities for all ages.
              </p>
        </div>
      </div>
      <div class="second-content">
       <p>
          <strong>Apple Harvest Festival</strong> will host <em>farmstand fresh apples and produce</em>, delectable apple and seasonal baked goods, a variety of food trucks offering tasty bites, a <em>craft</em> fair with artisans from around the region, and live music and entertainment.
        </p>
    </div>
    <div class="two-column">
      <div class="two-column-image">
        <picture>
          <img src="images/cider-apples-stand.jpg" alt="">
          <!-- Source: Instructor provided content -->
        </picture>
        </div>
      <div class="two-column-text">
         <h2>Food and Drinks</h2>
         <p> Our food vendors feature apple-centric and other fall classics for you to taste.</p>
            <!-- Source: Instructor provided content -->
          <p>There will be <em>cider trail</em> to enjoy refreshing cider in store and plenty of great apple and <em>apples-inspired products</em> for sale inside shops in and around Downtown.</p>
          <p>You can taste Farm Fresh Apples & Produce, Cider Houses & Wineries, and food vendors at Schoolyard Sugarbush, Blackduck Cidery, or Kettle Corn Shoppe.</p>
          <!-- Source: Instructor provided content -->
      </div>
    </div>

      <div class="two-column">
      <div class="two-column-text">
        <h2>Crafts</h2>
          <p>
          Enjoy the homemade goods like soaps, jewelry, sculptures, and clothing that our craft vendors offer!
          </p>
            <!-- Source: Instructor provided content -->
            <p>
          Immerse yourself in the beautifully crafted homemade goods like soaps, jewelry, sculptures, and clothing. With over <em>100 vendors</em> present at the festival, this is the perfect place to learn about and support Ithaca's <em>small businesses and artisan community</em> that encompass the heart of the town.
        </p>
        <p>
          You can check out A&K Creations, Alchemist's Whim, All Forked Up Art, and more!
        </p>
          <!-- Source: Instructor provided content -->
      </div>
      <div class="two-column-image">
          <picture>
            <img src="images/craft.jpg" alt="">
          <!-- Source: Instructor provided content -->
          </picture>
        </div>
      </div>

      <div class="two-column">
        <div class="two-column-image">
          <picture>
          <img src="images/bandmusic.jpg" alt="">
          <!-- Source: Instructor provided content -->
          </picture>
        </div>
      <div class="two-column-text">
        <h2>Live Music & Entertainment</h2>
            <cite class="picture-citation"><a href="https://www.mytwintiers.com/wp-content/uploads/sites/89/2022/10/Ithaca-Apple-Harvest-Festival-2022-2.jpg?w=900">My Twin Tiers</a></cite>
            <p class="additional-text">Engage yourself in listening to live musical performances and engaging entertainment at Bernie Milton Pavilion!</p>
            <!-- Source: Instructor provided content -->
            <p>Immerse yourself in the <em>enchanting melodies and rhythms</em> as you trail across the apple wonderland by listening to Rachel Beverly, Firefly Jazz Quartet, or Janet Batch.</p>
               <!-- Source: Instructor provided content -->
      </div>
      </div>
      <div class="second-content">
            <p>
              Join us on <strong>September 28-30th, 2023</strong> from <strong>10:00AM - 6:00PM</strong> at the Ithaca Commons to explore the <em>wonders and adventures</em>!</p>
      </div>
  </main>

  <?php include('includes/footer.php'); ?>

<script src="scripts/jquery-3.7.1.js"></script>
<script src="scripts/hamburgermenu.js"></script>
<script src="scripts/accordion.js"></script>
</body>

</html>
