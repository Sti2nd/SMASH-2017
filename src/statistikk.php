<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once('include/header.php'); ?>
        <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/carousel.css">

        <script type="text/javascript" src="https://www.google.com/jsapi"></script>

      	<script type="text/javascript" src="statistikk/orkester.js"></script>
      	<script type="text/javascript" src="statistikk/instrument.js"></script>
      	<script type="text/javascript" src="statistikk/kjonn.js"></script>
      	<script type="text/javascript" src="statistikk/revy.js"></script>
    </head>

    <body>
    <?php include_once('include/navbar.php'); ?>

    <center>
    <div class="container">
        <h1>Statistikk fra forrige Trondheim SMASH</h1>
        <p>Oppdatert statistikk kommer etter 1.september<p>
        <h2>Antall påmeldte fra hvert orchester</h2>
        <div id="orkester" style="height:400px"></div>
        <br>
        <h2>Hvor mange spilte hva</h2>
        <div id="instrument" style="height:400px"></div>
        <br>
        <h2>Kjønnsfordeling</h2>
        <div id="kjonn" style="height:400px"></div>
    </div>
    </center>


    <?php include_once('include/footer.php'); ?>
    </body>
</html>