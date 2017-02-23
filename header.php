<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Laboratório de Ferrovias e Asfalto</title>

  <!-- CSS  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/slippry.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/lightbox.min.css" rel="stylesheet">

  <!--JS-->	
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="js/slippry.min.js"></script>
    <script> 
    $(document).ready(function(){ 
      $("#demo1").slippry({
          transition: 'kenburns', // fade, horizontal, kenburns, false
          kenZoom: 140,
          speed: 2000, // time the transition takes (ms)
          captions:'overlay'
        });
    });
    </script>
</head>