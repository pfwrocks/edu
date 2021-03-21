<?php
  include('./assets/php/edu.php');
  $file = "./page-elements/header.php";
  $variables = array('title'=>'Index');
  includeFile($file, $variables);
?>

<body>
  <h3>Main Pages</h3>
  <p>
    <a href="./login/login.php" target="_blank"> Login </a>
  </p>
  <p>
    <a href="./pages/courselist.php" target="_blank"> Courselist </a> | main viewscreen for currently enrolled courses
  </p>
  <p>
    <a href="./pages/addpage.php" target="_blank"> Element Creation </a> | for building new pages (assignments, notes, etc.)
  </p>
  <p>
    <a href="./pages/assignment.php" target="_blank"> Standard Assignment </a> | classic view
  </p>


<hr />
<h3> Demos </h3>
  <p>
    <a href="./demos/filepage.php" target="_blank"> Page View </a> | basic layout for a page with posted attachment
  </p>

</body>
