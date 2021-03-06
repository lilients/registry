<?php
/**
* @file display.php
* Display existing entry
* uses alpaca http://alpacajs.org
*/
  $lib = 'alpaca';
  require_once("includes/header.php");
?>
<div class="container">

  <div id="form"></div>   <!-- alpaca will fill in the form in this div -->

  <div class="section">
    <div id="read_more"></div>   <!-- read more (links to CORE and BASE are added via js)-->
  </div>

  <a href="index.php">back to overview</a>

  <?php
    echo '<a href="form.php?entryId='.$_GET['entryId'].'">edit</a>';
  ?>

</div>

<script type="text/javascript" src="js/display.js"></script>

<?php
  require_once("includes/footer.php");
?>
