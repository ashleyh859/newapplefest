<!DOCTYPE html>
<html lang="en">
  <?php
  $home_class = '';
  $planningyourvisit_class = '';
  $faqs_class = 'current';
    ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FAQs</title>
  <link rel="icon" type="image/svg" href="/public/images/apple-harvest-logo.svg">
  <link rel="stylesheet"
  type="text/css"
  href="/public/styles/site.css" >
</head>

<body>
<?php include('includes/header.php'); ?>

<main>
<h2> Frequently Asked Questions</h2>
<div class="accordion">
  <div class="accordion-item">
      <button class="accordion-header" id="header1" aria-label="Toggle description for How do I get there?">
        <span class="accordion-title">How do I get there?</span>
        <span class="icon" id="icon1">+</span>
      </button>
        <div class="accordion-content accessible-hidden" id="content1">
          <p><strong>Tompkins Consolidated Area Transit (TCAT)</strong> offers public bus transportation from all over the county. One-way fares are <em>$1.50</em> per adult. Cornell University students can ride without a fare on weekends and after 6pm with their student ID card. <em>Learn more about fares at <a href="https://tcatbus.com/fare-pass-options" target="_blank">tcatbus.com/fare-pass-options.</a></em>
          </p>
          <p>Residents and visitors can park in the <em>Seneca and Cayuga Street garages</em> and walk to anywhere in Downtown Ithaca. Please note the Green Garage is <em>closed</em> for construction.
          </p>
          <p>Garage parking is <em>$1.00</em> per hour in the garages. On-street parking is <em>$1.50</em> per hour during the week until 6pm.
          </p>
          <p>For additional downtown parking, visit <em><a href="https://www.cityofithaca.org/243/Parking" target="_blank">cityofithaca.org/243/Parking.</a></em>
          </p>
        </div>
      </div>
  <div class="accordion-item">
    <button class="accordion-header" id="header2" aria-label="Toggle description for How much money should I bring?">
      <span class="accordion-title">How much money should I bring?</span>
      <span class="icon" id="icon2">+</span>
    </button>
        <div class="accordion-content accessible-hidden" id="content2">
          <p>Entry to the event is completely <em>free</em>!The amount of money you should bring is <em>dependent</em> on what, if anything, you wish to purchase at the festival. </p>
          <p>If you are <em>driving</em>, there is a $5 charge to park at the parking garage. If you plan to <em>eat</em> at the festival, you may also wish to bring at least $10.Prices of the various baked goods, produce, and crafts <em>vary</em> by vendor.</p>
          <!-- Source: Instructor provided content -->
        </div>
    </div>
  <div class="accordion-item">
    <button class="accordion-header" id="header3" aria-label="Toggle description for Can I pay with a credit card?">
      <span class="accordion-title">Can I pay with a credit card?</span>
      <span class="icon" id="icon3">+</span>
    </button>
      <div class="accordion-content accessible-hidden" id="content3">
        <p><em>Most</em> of our vendors accept credit cards.</p>
        <p>However, you should bring some <em>cash</em> in case a shop you are interested in does not accept them.</p>
      </div>
  </div>
  <div class="accordion-item">
    <button class="accordion-header" id="header4" aria-label="Toggle description for Sheng">
      <span class="accordion-title">What should I wear?</span>
      <span class="icon" id="icon4">+</span>
    </button>
        <div class="accordion-content accessible-hidden" id="content4">
          <p>If you are not familiar with the Ithaca area, it can get quite cold in the fall!</p>
          <p><em>Check the weather</em> and bring layers.</p>
          <!-- Source: Instructor provided content -->
        </div>
  </div>
  <div class="accordion-item">
    <button class="accordion-header" id="header5" aria-label="Toggle description for When is the best time to attend?">
      <span class="accordion-title">When is the best time to attend?</span>
      <span class="icon" id="icon5">+</span>
    </button>
       <div class="accordion-content accessible-hidden" id="content5">
          <p>If you are looking to avoid the crowds, attending <em>midday Friday</em> is a good idea.</p>
          <p>However, many attendees find that the crowds on the <em>weekend</em> add to the energy and fun of the festival.</p>
        </div>
    </div>
</div>
</main>

<?php include('includes/footer.php'); ?>

<script src="/public/scripts/jquery-3.7.1.js"></script>
<script src="/public/scripts/hamburgermenu.js"></script>
<script src="/public/scripts/accordion.js"></script>
</body>

</html>
