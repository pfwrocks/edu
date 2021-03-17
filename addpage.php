<?php
  include('./assets/php/edu.php');
  $file = "./page-elements/header.php";
  $variables = array('title'=>'Add Page');
  includeFile($file, $variables);
?>

<body>
  <?php
    $file = './page-elements/navbar.php';
    $variables = array('nav2'=>false);
    includeFile($file, $variables);
  ?>
  <script src="./assets/js/addpage.js" defer="true"></script>


  <div class="row">
    <!-- FORM -->
    <div class="col-md-9" id="div-form">
      <h2>Creating a New Page Element</h2>
      <form class="edu-active">
        <input class="form-control form-control-lg" type="text" placeholder="Main Title" required>
        <input class="form-control form-control-lg" type="text" placeholder="subtitle (optional)">
        <input class="form-control form-control-lg" type="text" placeholder="overview (optional)">
      </form>
    </div>
    <!-- CONTROL PANEL -->
    <div class="col-md-3">
      <center>
        <h1> Add Element </h1>
        <hr />
        <h3> Headers </h3>
        <button type="button" class="btn btn-success" onclick="add_header('LG')" id="lg-list">+LG</button>
        <button type="button" class="btn btn-danger" onclick="remove_div('LG')">-LG</button>
        <p></p>
        <button type="button" class="btn btn-success" onclick="add_header('MED')" id="md-list">+MD</button>
        <button type="button" class="btn btn-danger" onclick="remove_div('MED')">-MD</button>
        <p></p>
        <button type="button" class="btn btn-success" onclick="add_header('SM')" id="sm-list">+SM</button>
        <button type="button" class="btn btn-danger" onclick="remove_div('SM')">-SM</button>
        <hr />
        <h3> Text </h3>
        <button type="button" class="btn btn-success" onclick="add_text()" id="txt-list">+txt</button>
        <button type="button" class="btn btn-danger" onclick="remove_div('text')">-txt</button>
        <hr />
        <button type="button" class="btn btn-primary" onclick="add_submit()">Finished</button>
      </center>
    </div>
  </div>

<!-- EVENT LISTENERS -->
  <script type="text/javascript">
    window.onload = function() {
      document.getElementById("lg-list").addEventListener("click", remove_submits);
      document.getElementById("md-list").addEventListener("click", remove_submits);
      document.getElementById("sm-list").addEventListener("click", remove_submits);
      document.getElementById("txt-list").addEventListener("click", remove_submits);
      console.log("event listener added")
    }
  </script>

</body>

</html>
