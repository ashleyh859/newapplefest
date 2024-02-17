<!DOCTYPE html>
<html lang="en">
  <?php
  $home_class = '';
  $planningyourvisit_class = '';
  $faqs_class = '';
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

<main class="error-content">
    <h2> 404 Page Not Found</h2>

    <p>Sorry, the page you're looking for isn't here. Use the navigation bar above to redirect to another page, or return back to the homepage. </p>
    <a href="/" aria-label="navigate to home" class="return-home-button">Return to Home</a>
</main>

<?php include('includes/footer.php'); ?>

<script src="/public/scripts/jquery-3.7.1.js"></script>
<script src="/public/scripts/hamburgermenu.js"></script>
<script src="/public/scripts/accordion.js"></script>
</body>

</html>
