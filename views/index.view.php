<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>
<h1>pasakumi</h1>

<ul>
<?php
  foreach($pasakumi as $pasak) {
  echo "<li>" . $pasak["date_and_time"] . " / " . $pasak["title"] . " / " . $pasak["place"] . "</li>";
  }
  ?>
</ul>
<?php require "components/footer.php" ?>