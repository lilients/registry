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
<div class="section">

  <div class="container">

    <div id="about"></div>

    <table id="datatable" class="display"></table>
    <p><a href="form.php">Add new entry</a></p>
  </div>

</div>

<script>
 $.get("pages/about.md", function(data){
   about.innerHTML = markdown.toHTML(data);
 });
</script>


<script type="text/javascript" src="js/index.js"></script>

<?php
  require_once("includes/footer.php");
?>
