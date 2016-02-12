<!doctype html>
<html>
  <head>
    <meta charset="utf-8">

    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">

    <!-- Use title if it's in the page YAML frontmatter -->
    <title>Paris My Sweet</title>

    <link href="stylesheets/reset.css" rel="stylesheet" type="text/css" />

    <link href="stylesheets/main.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

    <script type="text/javascript" src="javascripts/jquery.stellar.min.js"></script>

    <script type="text/javascript" src="javascripts/js.js"></script>

    <?php
    mail( 'jesse@jdillman.com', 'Contact Form', print_r($_POST,true) );
    ?>

  </head>
  

  <body>
    <div class="container">
      <?php @include("slides/title2.inc.php"); ?>
      <?php @include("slides/synopsis.inc.php"); ?>
      <?php @include("slides/accolades.inc.php"); ?>
      <?php @include("slides/purchase2.inc.php"); ?>
    </div>
  </body>

</html>