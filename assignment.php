<?php
  include('./assets/php/edu.php');
  $file = "./page-elements/header.php";
  $variables = array('title'=>'Assignment');
  includeFile($file, $variables);
?>

<body>
  <?php
    $file = './page-elements/navbar.php';
    $variables = array('nav2'=>true);
    includeFile($file, $variables);
  ?>


  <div class="row">
    <div class="col-sm-6"> <?php include('./page-elements/tag.html')?> </div>
    <div class="col-sm-6"> <h1 class="float-right" id="timeleft" style="padding-right:5%">Test</h1> </div>
  </div>

  <br />

  <div class="row" id="objectives">
    <div class="col-sm-1"> </div>
    <!-- ACTUAL CONTENT -->
    <div class="col-sm-8">
      <h1 id="header"></h1>
      <script>
          var head = function (ch, pgType, title) {
            return '['+ch+']'+' [' + pgType + '] ' + title;
          };
          document.getElementById("header").innerHTML = head('CH2','Assignment','Proposal');
      </script>
      <br />
      <!-- Objective/TO DO -->
      <div class="row" id="objective" style="padding-bottom:300px;">
        <div class="col-sm-7">
          <h3>Objectives</h3>
          <p>Dolores neque quisquam rerum voluptatem. Rerum quasi mollitia similique cum dolorem impedit. Placeat ipsa soluta ut quis rem ea optio. Excepturi nobis omnis quisquam recusandae voluptatem accusantium voluptatem</p>
        </div>
        <div class="col-sm-5">
          <h3> TODO </h3>
          <input type="checkbox" checked> <span>Complete Ch2 readings 1 & 2</span> </input>
          <br>
          <input type="checkbox"> <span>Find 6 sources for the initial proposal</span> </input>
          <br>
          <input type="checkbox"> <span>Submit proposals</span> </input>
        </div>
      </div>

      <hr />

      <!-- Background -->
        <h3 id="background"> Background </h3>
        <br />
      <div class="row" id="interrupts">
        <div class="col-sm-1"> </div>
        <div class="col-sm-11">
          <h4> Interrupts </h4>
          <p> Dolores neque quisquam rerum voluptatem. Rerum quasi mollitia similique cum dolorem impedit. Placeat ipsa soluta ut quis rem ea optio. Excepturi nobis omnis quisquam recusandae voluptatem accusantium voluptatem </p>
        </div>
      </div>
      <div class="row" id="exception-vectors" style="padding-bottom:300px;">
        <div class="col-sm-1"> </div>
        <div class="col-sm-11">
          <h4> Exception Vectors </h4>
          <p> Dolores neque quisquam rerum voluptatem. Rerum quasi mollitia similique cum dolorem impedit. Placeat ipsa soluta ut quis rem ea optio. Excepturi nobis omnis quisquam recusandae voluptatem accusantium voluptatem </p>
        </div>
      </div>

      <hr />

      <!-- Assignment Submission -->
      <h3> Assignment Submission </h3>
      <div class="mb-3" id="submission">
        <input class="form-control" type="file" id="formFileMultiple" multiple>
      </div>
    </div>
    <!-- Table of Contents -->
    <div class="col-sm-3">
      <nav class="md-nav md-nav--secondary sticky-top" aria-label="Table of contents" style="padding-top: 120px;">
        <label class="md-nav__title" for="__toc">
          <h5>Table of contents</h5>
        </label>
        <ul class="md-nav__list" data-md-scrollfix>

          <li class="md-nav__item">
            <a href="#objectives" class="md-nav__link">
              Objectives
            </a>

          </li>

          <li class="md-nav__item">
            <a href="#background" class="md-nav__link">
              Background
            </a>

            <nav class="md-nav">
              <ul class="md-nav__list">

                <li class="md-nav__item">
                  <a href="#interrupts" class="md-nav__link">
                    Interrupts
                  </a>

                </li>

                <li class="md-nav__item">
                  <a href="#exception-vectors" class="md-nav__link">
                    Exception vectors
                  </a>

                </li>

              </ul>

              <li class="md-nav__item">
                <a href="#submission" class="md-nav__link">
                  Submission
                </a>
            </nav>
    </div>
  </div>

  <script>
    var d = new Date();
    document.getElementById("timeleft").innerHTML = d.getHours()+' hours left';
  </script>

</body
