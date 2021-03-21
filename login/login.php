<?php
  include('../assets/php/edu.php');
  $file = "../page-elements/header.php";
  $variables = array('title'=>'Login');
  includeFile($file, $variables);
?>

<body style="background-image: url('./mountain.jpg')">

  <style>
    label { display: block; }
    input, textarea {
      display:inline-block;
      font-family:arial;
      margin: 5px 10px 5px 40px;
      padding: 8px 12px 8px 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      width: 90%;
      font-size: small;
    }
    div {
      margin-left: auto;
      margin-right: auto;
      width: 60%;
    }
    h1 { text-align: center; }

    input[type=submit] {
      padding:5px 15px;
      background:#ccc;
      border:0 none;
      cursor:pointer;
      border-radius: 5px;
    }

    input[type=submit]:hover {
      background-color: #ccceee;
    }

    .msg {
	  margin-left:40px;
	  font-style: italic;
	  color: red;
    }

    html{ height:100%; }
    body{ min-height:100%; padding:0; margin:0; position:relative; }
    footer {
      position: absolute;
      bottom: 0;
      width: 100%;
      height: 50px;
      color: WhiteSmoke;
      padding: 10px;
    }
   </style>

  <?php
    $num_attempts = 0;
    if (isset($_GET['attempt'])) {
        $num_attempts = intval($_GET['attempt']);
        echo $num_attempts;
    }
  ?>

  <div style="padding-bottom:15%"> </div>
  <div>
    <h1>
      <div class="">
        <span class="fas fa-mountain" style="color:green"></span>
        <span>EDU</span>
      </div>
    </h1>
    <form action="login.php" method="post">

      Username: <input type="text" name="name" required <?php if (isset($_GET['attempt']) && $_GET['attempt']>=3) { ?>disabled<?php } ?>/> <br/>
      Password: <input type="password" name="pwd" required <?php if (isset($_GET['attempt']) && $_GET['attempt']>=3) { ?>disabled<?php } ?>/> <br/>
      <br>
      <input hidden type="text" name="attempt" value="<?php echo $num_attempts ?>"/>
      <input type="submit" value="Submit" class="btn btn-secondary" <?php if (isset($_GET['attempt']) && $_GET['attempt']>=3) { ?>disabled<?php } ?> />
    </form>

    <?php if (isset($_GET['attempt']) && $_GET['attempt']>=3) { ?><h1>Too Many Attempts</h1><?php } ?>


<?php

function authenticate()
{
    global $mainpage;
    global $num_attempts;

    // Assume there exists a hashed password for a user (username='demo', password='nan')
   // in a database or file and we've retrieved and assigned it to a $hash variable
   // $hash = '$2y$10$BybeAVqd1A6/fl5yl/pTzuloZXYzSnc0S1hz6HYm/JzrKFP7Y6hCu';     // hash for 'nan'
   $hash = '$2y$10$7yMQ/KY5uHu1CwMBdptV5O12zpR9jJA4WcxAZxCT6zXIjyg8G4AWa';     // hash for 'demo'

   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       // htmlspecialchars() stops script tags from being able to be executed and renders them as plaintext
       $pwd = htmlspecialchars($_POST['pwd']);

//       echo "password = $pwd <br />";
//       echo "password_hash =" . password_hash($pwd, PASSWORD_BCRYPT);
//       echo '<br/> password_verify =' . password_verify($pwd, $hash) . "<br/>";

       // password_hash(incoming_password, algo_to_hash) creates a password hash

       // password_verify(incoming_password, existing_password) returns
       //   true (1) if the incoming_password and existing_password match
       //   false ('') otherwise

       if (password_verify($pwd, $hash)) {
           // successfully login, redirect a user to the main page
           header("Location: ".$mainpage);

       // Alternatively, we can hardcoard the redirected URL here
         // header("Location: http://localhost/cs4640/php-form/form.php");
       } else {
           echo "<span class='msg'>Username and password do not match our record</span> <br/>";
           $num_attempts = intval($_POST['attempt'])+1;
           header("Location: " . $_SERVER['PHP_SELF'] . "?attempt=$num_attempts&msg=Username and password do not match our record");
       }
   }
}

// $mainpage = "form.php";       // handle form data on a separated page
$mainpage = "sticky-form.php";
authenticate();

?>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>
