<html>
 <head>
  <title>Prueba de PHP Heroku</title>
 </head>
 <body>
 <?php echo '<p>Hola Jorge</p>'; ?>
 <?php
echo '¡Hola ' . htmlspecialchars($_GET["name"]) . '!';
?>
 </body>
</html>


