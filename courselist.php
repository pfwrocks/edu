<?php
  include('./assets/php/edu.php');
  $file = "./page-elements/header.php";
  $variables = array('title'=>'Course List');
  includeFile($file, $variables);
?>

<body>
  <!-- CSS -->
  <style type="text/css">
    .card
    {
      /* Add shadows to create the "card" effect */
      box-shadow: 0 5px 8px 0 rgba(0,0,0,0.2);
      transition: 0.3s;
      border-radius: 5px; /* 5px rounded corners */
    }

    /* On mouse-over, add a deeper shadow */
    .card:hover
    {
      box-shadow: 0 8px 16px 8px rgba(0,0,0,0.2);
      transform: scale(1.05);
    }

    .row
    {
        padding-top:3%;
    }

    a:hover
    {
        text-decoration:none;
    }
  </style>

  <?php
    $file = './page-elements/navbar.php';
    $variables = array('nav2'=>false);
    includeFile($file, $variables);
  ?>

  <h1 style="text-align:center">Course List</h1>
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-9">
        <table id="mytable" class="table" >
            <thead>   <!-- set table headers -->
                <tr ></tr>
            </thead>
            <!-- use JS to dynamically create rows  -->
      </table>
    </div>
    <div class="col-md-1 mx-auto">
        <hr>
        <button type="button" class="btn btn-success" onClick="addCourse()">Add Course</button>
        <hr>
        <button type="button" class="btn btn-danger" onClick="removeCourse()">Remove Course</button>
        <hr>
    </div>
</div>

<script>
  var num_rows = 0;
  var num_cols = 0;
  var num_classes = 0;
  var row_size = 3;

  function delRow()
  {
     // since deletion action is unrecoverable, add hesitation to minimize/avoid user error
     if (confirm("Removing a course is unrecoverable, continue?") == true)
        document.getElementById("mytable").deleteRow(document.getElementById("mytable").clickedRowIndex);
  }

  function addCourse()  // fixes to proper index at end
  {
    tableRef = document.getElementById("mytable");

    selected_row = tableRef.rows[num_rows];
    newCell = selected_row.insertCell(num_cols);    // specify which column
    newCell.innerHTML = demo_card;                  // assign what content
    num_cols++;
    num_classes++;

    if (num_cols >= row_size) { num_cols=0; tableRef.insertRow(tableRef.rows.length); num_rows++; }

    console.log("Added, next add at ("+num_rows+","+num_cols+") num_classes:"+num_classes);
  }

  function removeCourse()
  {
    tableRef = document.getElementById("mytable");

    if (num_classes==0) { return; }

    // convert to where the value actual is (num_cols-1)
    if(num_cols==0) { tableRef.deleteRow(tableRef.rows.length-1); num_rows--; num_cols=row_size-1; }
    else { num_cols--; }

    // delete (indexes guarentteed correct)
    selected_row = tableRef.rows[num_rows];
    newCell = selected_row.deleteCell(num_cols);    // specify which column


    num_classes--;

    console.log("After Delete");
    console.log("num_rows:"+num_rows+" | num_cols:"+num_cols+" | num_classes:"+num_classes);
  }

  var demo_card = '<div class=""><a href="#"><div class="card text-white bg-secondary"><div class="card-header bg-secondary"><div style="width:50%;display:inline-block;"><div style="width:10%;display:inline-block;"> <h4 class="card-text text-danger" style="width:5%">1</h4> </div> <div style="width:10%;display:inline-block;"> <h4 class="card-text text-info">5</h4> </div> <div style="width:10%;display:inline-block;"> <h4 class="card-text text-success" style="width:5%">2</h4> </div> </div><div style="width:50%;display:inline-block; text-align:right"> <h5 class="card-text text-light">9:00-9:50</h5> </div> </div> <div class="card-body"> <div style="font-size: 700%; text-align:center;"> <i class="fab fa-raspberry-pi"></i> <h5 class="card-title"> Operating Systems </h5> </div> </div> <div class="card-footer"> <div class="row"> <div class="col" style="text-overflow:left">CS 4414</div> <div class="col" style="text-align:right">Prof Lin</div> </div> </div> </div> </a> </div>'
  </script>



  <br/><br/>
  </body>
</html>
