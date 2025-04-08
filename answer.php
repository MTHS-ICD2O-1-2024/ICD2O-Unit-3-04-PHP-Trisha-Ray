<!DOCTYPE html>
<!-- ICS2O-Unit2-04-HTML-MDL -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Area of Triangle, PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Trisha Ray" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link
    rel="stylesheet"
    href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link
    rel="apple-touch-icon"
    sizes="180x180"
    href="./apple-touch-icon.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="./favicon-32x32.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Area of Triangle, PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Area Of Triangle, PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/area_of_trinagle.png" alt="Area of Triangle Image"/>
      </div>
  <div class="page-content-php">
    <div id="user-info">
      <?php
      $baselength = $_GET["base-length"];
      $heightlength = $_GET["height-length"];

      // process
      $area = ($baselength * $heightlength) /2;
      // output
      echo "If a Triangle has a base length of =" . $baselength . " cm and a height of =" . $heightlength . " cm:";
      echo "<br />";
      echo "<br />";
      echo "The area of the Triangle is " . $area . " cm².";
      ?>
    </div>
    <div class="page-content-answer">
      <a href="./index.php">Return...</a>
    </div>
  </div>
  </main>
  </div>
</body>

</html>