<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>
<h1>pasakumi</h1>

<table>
<?php
  foreach($kolektivi as $kolek) {
  echo "<h1>" . $kolek["NAME"] . "</h1>" . "<p>" .$kolek["DESCRIPTION"] . "</p>";
  }
  ?>
</table>
<?php require "components/footer.php" ?>