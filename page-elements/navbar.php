<!-- NAVBAR TOP -->
<nav class="navbar navbar-dark navbar-expand-sm bg-dark justify-content-center sticky-top">
  <!-- LEFT -->
  <a href="../index.php" class="navbar-brand d-flex w-50 mr-auto">
    <div class="">
      <span class="fas fa-mountain"></span>
      <span>EDU</span>
    </div>
  </a>

  <!-- NAVBAR TOGGLER -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- MIDDLE -->
  <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
    <ul class="navbar-nav w-100 justify-content-center">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </ul>
    <!-- Right -->
    <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
      <li class="nav-item">
        <a class="nav-link" href="../pages/courselist.php">Courses</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../login/login.php">My Account</a>
      </li>
    </ul>
  </div>
</nav>

<?php if ($nav2) { ?>
<!-- BOT NAVBAR -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">4640</a>
    </li>
    <li class="nav-item">
      <a class="nav-link">/</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">ch2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link">/</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">proposal</a>
    </li>
  </ul>
</nav>
<?php } ?>
