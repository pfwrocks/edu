<?php
  include('../assets/php/edu.php');
  $file = "../page-elements/header.php";
  $variables = array('title'=>'Course List');
  includeFile($file, $variables);
?>

<body style="background-color:lavender;">

  <?php
    $file = '../page-elements/navbar.php';
    $variables = array('nav2'=>false);
    includeFile($file, $variables);
  ?>

  <br/>

  <div class="row">
    <div class="col-sm-1"> </div>
    <div class="col-sm-8">
      <h1> PDF EXAMPLE </h1>
      <embed src="../assets/files/syllabus.pdf" width="100%" height="900px" />
      <h1> WORD EXAMPLE </h1>
      <iframe src='https://view.officeapps.live.com/op/embed.aspx?src=http://www.learningaboutelectronics.com/Articles/NP-modernization-act-new-york-state.doc' width='100%' height='565px' frameborder='0'> </iframe>
    </div>
    <!-- Table of Contents -->
    <div class="col-sm-3" style="background-color:lavender;">
      <nav class="md-nav md-nav--secondary sticky-top" aria-label="Table of contents" style="padding-top: 70px">
        <label class="md-nav__title" for="__toc">
          <span class="md-nav__icon md-icon"></span>
          Table of contents
        </label>
        <ul class="md-nav__list" data-md-scrollfix>

          <li class="md-nav__item">
            <a href="#objectives" class="md-nav__link">
              Objectives
            </a>

          </li>

          <li class="md-nav__item">
            <a href="#terms" class="md-nav__link">
              Terms
            </a>

          </li>

          <li class="md-nav__item">
            <a href="#background-interrupts-exceptions-in-arm64" class="md-nav__link">
              Background: interrupts &amp; exceptions in ARM64
            </a>

            <nav class="md-nav" aria-label="Background: interrupts &amp; exceptions in ARM64">
              <ul class="md-nav__list">

                <li class="md-nav__item">
                  <a href="#interrupts" class="md-nav__link">
                    Interrupts
                  </a>

                </li>

                <li class="md-nav__item">
                  <a href="#interrupts-exceptions-on-aarch64" class="md-nav__link">
                    Interrupts &amp; Exceptions on aarch64
                  </a>

                </li>

                <li class="md-nav__item">
                  <a href="#exception-vectors" class="md-nav__link">
                    Exception vectors
                  </a>

                </li>

                <li class="md-nav__item">
                  <a href="#arm64-vector-table" class="md-nav__link">
                    ARM64 vector table
                  </a>

                </li>

              </ul>
            </nav>
    </div>
  </div>



</body>

</html>
