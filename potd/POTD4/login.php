<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- required to handle IE -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP form handling</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <style>
    label {
      display: block;
    }

    input,
    textarea {
      display: inline-block;
      font-family: arial;
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

    h1 {
      text-align: center;
    }

    input[type=submit] {
      padding: 5px 15px;
      border: 0 none;
      cursor: pointer;
      border-radius: 5px;
    }

    input[type=submit]:hover {
      background-color: #ccceee;
    }

    .msg {
      margin-left: 40px;
      font-style: italic;
      color: red;
    }

    html {
      height: 100%;
    }

    body {
      min-height: 100%;
      padding: 0;
      margin: 0;
      position: relative;
    }

    footer {
      position: absolute;
      bottom: 0;
      width: 100%;
      height: 50px;
      color: WhiteSmoke;
      padding: 10px;
    }
  </style>
</head>

<body>

  <?php include('header.html')?>

  <div>
    <h1>PHP: Form Handling</h1>
    <form action="login.php" method="post">
      Username: <input type="text" name="name" required /> <br/>
      Password: <input type="password" name="pwd" required /> <br/>
      <input type="submit" value="Submit" class="btn btn-secondary" />
    </form>
  </div>

  <?php
    //$pwd = password_hash('demo', PASSWORD_BCRYPT);


    function authenticate()
    {
        $pwd = htmlspecialchars($_POST['pwd']);
        $name = htmlspecialchars($_POST['name']);
        $hash = '$2y$10$c7C6oSAfEf14lG3.UyDD2OJlZkGY0tdyzf28uQDmEWrCRBUz2ccqC';
        $user = 'admin';
        echo "user: $name <br/>";
        echo "pwd: $pwd <br/>";
        if (password_verify($pwd, $hash) && $user==$name) {
            echo "match password <br/>";
            header("Location: form.php");
        } else {
            echo "no match <br/>**hint** usr:admin pwd:demo";
        }
    }

    if (!empty($_POST['pwd'])) {
        authenticate();
    }
  ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>
