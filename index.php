<!DOCTYPE html>
<html lang="en">

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
  <header>
      <div>
          <nav id="widescreen">
              <div class="headerlogo">
                <a href="index.php" target="_blank" rel="noopener noreferrer" aria-label="navigate to home">
                  <img src="images/apple-harvest-logo.svg" alt="home">
                </a>
              </div>
              <div>
                <ul class="desktop-nav-links">
                  <li>
                      <a href="index.php" aria-label="navigate to home"><strong>Home</strong></a>
                  </li>
                  <li>
                      <a href="exploreapplefest.php" aria-label="navigate to exploring Apple Fest"><strong>Explore Apple Fest</strong></a>
                  </li>
                  <li>
                    <a href="FAQs.php"><strong>FAQs</strong></a>
                  </li>
                </ul>
              </div>
            </nav>
      </div>
    <!-- Narrow Hamburger Menu -->
    <div id="header">
      <div class="centerlogo">
        <a href="index.php" target="_blank" rel="noopener noreferrer" aria-label="navigate to home">
          <img src="images/apple-harvest-logo.svg" alt="home">
        </a>
      </div>
      <button id="menubutton" aria-label="open hamburger menu">≡</button>
      </div>
          <nav id="navmenu" class="accessible-hidden">
          <ul>
            <li>
              <a href="index.php" aria-label="navigate to home"><strong>Home</strong></a>
          </li>
          <li>
              <a href="exploreapplefest.php" aria-label="navigate to exploring Apple Fest"><strong>Explore Apple Fest</strong></a>
          </li>
          <li>
            <a href="FAQs.php"><strong>FAQs</strong></a>
          </li>
          </ul>
      </nav>
</header>

<main>
    <div class="fullscreen-image" >
      <picture>
        <img src="images/apples-bins.jpg" alt="">
      </picture>
      <div class="overlay-text">
        <h2>Ithaca Commons Apple Harvest Festival</h2>
        <p class="additional-text">Join us for three days of farm-fresh bites, local crafts, live music, and fall activities for all ages.</p>
      </div>
    </div>
    <div class="homepage-content">
      <div class="column-left">
        <p>
          We are excited to welcome you back to one of Ithaca’s most celebrated events: the Apple Harvest Festival! Join us for three days of farm-fresh bites, local crafts, live music, and fall activities for all ages.
        </p>
        <p>
          This annual festival marks the beginning of the fall harvest season, and features local apples and the Finger Lakes food, craft, and entertainment community! The weekend's happenings gives Ithaca residents, students, and visitors an opportunity to interact with small businesses and creators in the area. Welcome fall with us by visiting one of Ithaca's most famous events!
                <!-- Source: Instructor provided content -->
        </p>
      </div>
      <div class="column-right">
        <h2>Details</h2>
        <p><strong>Dates:</strong></p>
        <p>September 28-30th, 2023</p>
        <p><strong>Time:</strong></p>
        <p>10:00AM - 6:00PM</p>
        <p><strong>Location:</strong></p>
        <p>Ithaca Commons</p>
          <!-- Source: Instructor provided content -->
      </div>
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

<footer>
    <h2>Contact Us</h2>
    <h3></h3>
      <p>
      171 E. State St. PMB #136
      Center Ithaca
      Ithaca, NY 14850
      </p>
    <p><strong>Phone: </strong>(607) 277-8679</p>
    <p><strong>Email:</strong> info@downtownithaca.com</p>
    <cite class="footer"><a href="https://www.downtownithaca.com/contact-us/">Downtown Ithaca Contact Info</a></cite>
</footer>
<script src="scripts/jquery-3.7.1.js"></script>
<script src="scripts/hamburgermenu.js"></script>
<script src="scripts/accordion.js"></script>
</body>

</html>
