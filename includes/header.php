<!--
includes/header.php
-->
<!DOCTYPE html>
<html>
  <head>
    <title></title>

    <!-- jquery -->
    <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>

    <!-- bootstrap v3.3.2 -->
    <script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <link type="text/css" rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" />

    <script type="text/javascript" src="node_modules/markdown/lib/markdown.js"></script>

    <!-- handlebars -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.5/handlebars.js"></script>

    <?php // include scripts for alpaca or datatables
     switch($lib){
        case 'alpaca':
          echo('
                <script type="text/javascript" src="node_modules/alpaca/dist/alpaca/bootstrap/alpaca.min.js"></script>
                <link type="text/css" rel="stylesheet" href="node_modules/alpaca/dist/alpaca/bootstrap/alpaca.min.css" />
            ');
          break;
        case 'datatables':
          echo('
                <script type="text/javascript" src="node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
                <link rel="stylesheet" type="text/css" href="node_modules/datatables.net-jqui/css/dataTables.jqueryui.min.css"/>
                <script type="text/javascript" src="node_modules/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
                <link rel="stylesheet" type="text/css" href="node_modules/datatables.net-responsive-jqui/css/responsive.jqueryui.min.css"/>
                <script type="text/javascript" src="node_modules/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
                <link rel="stylesheet" type="text/css" href="node_modules/datatables.net-fixedheader-jqui/css/fixedHeader.jqueryui.min.css"/>
              ');
          break;
      }
    ?>

    <!-- own stylesheet and js -->
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <script type="text/javascript" src="js/registry.js"></script>

  </head>
  <body>
  <header>
    <div class="header">
      <div class="container">
        <a href="./">
          <img id="logo" src="img/logo.png">
          <h1></h1>
        </a>
        <!-- Navigation -->
        <ul class="list-inline" >
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
        </ul>
      </div>
    </div>
  </header>
