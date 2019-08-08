<?php
/**
* @file index.php
* Display overview of all existing entries
*
* uses datatables https://www.datatables.net/
*/
  $lib = 'datatables';
  require_once("includes/header.php");
?>
<div class="container">

  <p>
    <a href="form.php">Add new entry</a>
  </p>

  <table id="datatable" class="display"></table>

</div>

<script type="text/javascript" src="js/index.js"></script>

<?php
  require_once("includes/footer.php");
?>
