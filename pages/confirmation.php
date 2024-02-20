<!DOCTYPE html>
<html lang="en">
  <?php
    $home_class = '';
    $planningyourvisit_class = 'current';
    $faqs_class = '';

    $form_class_email = $_POST['email'];

    $form_class_date = $_POST['date'];

    $form_class_activites1 = $_POST['activities1'];
    $form_class_activites2 = $_POST['activities2'];
    $form_class_activites3 = $_POST['activities3'];
  ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Planning Your Visit</title>
  <link rel="icon" type="image/svg" href="/public/images/apple-harvest-logo.svg">
  <link rel="stylesheet"
  type="text/css"
  href="/public/styles/site.css" >
</head>

<body>
  <?php include('includes/header.php'); ?>
    <main>

      <section class="form upwards">
      <h2>Thank you for signing up!</h2>

      <p>Your event subscription request has been successfully processed! We will send a confirmation email to <strong><?php echo htmlspecialchars($form_class_email); ?></strong> shortly.</p>

        <p>You have been registered for the following dates:</p>
        <ul>
            <li class="form-font">
              <?php echo htmlspecialchars($form_class_date); ?>
            </li>
        </ul>

        <p>You have been registered for the following activities:</p>
          <ul>
              <li class="form-font">
              Food and Drinks: <?php echo htmlspecialchars($form_class_activites1); ?>
              </li>
              <li class="form-font">
              Crafts: <?php echo htmlspecialchars($form_class_activites2); ?>
              </li>
              <li class="form-font">
              Live Music & Entertainment: <?php echo htmlspecialchars($form_class_activites3); ?>
              </li>
          </ul>
    </section>
  </main>


  <?php include('includes/footer.php'); ?>

<script src="/public/scripts/jquery-3.7.1.js"></script>
<script src="/public/scripts/hamburgermenu.js"></script>
<script src="/public/scripts/accordion.js"></script>
</body>

</html>
