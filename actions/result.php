<?php


session_start();
@include('connect.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <style>
            thead{
                background-color: #f2f2f2;
                color: black;
            }

            .border{
                border-color: aqua;
            }
        </style>
     <!-- BOOTSTRAP CSS LINK -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body class="bg-primary">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div>
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            <a href="../"><button class="btn btn-dark text-light px-3">Home </button></a>
            </li>
          </ul>
        </div>
      </nav>
<div class="container my-4 pt-4 align-center">

    <div>
      <h3 class="pb-2"> Final Result </h3>
          </div>
    <table class="table" id="myTable" >
   <thead>
    <tr>
      <th scope="col">Candidate Name</th>
      <!-- <th scope="col">Photo</th> -->
      <th scope="col">Total Votes</th>
    </tr>
    </thead>
    <tbody>


    <?php
    $groups = $_SESSION['groups'];
    for($i = 0 ; $i<count($groups) ; $i++)
    {
       ?>
       <?php
       echo "<tr class='border'>
       <th scope='row'>".$groups[$i]['username']."</th>
       <td>".$groups[$i]['votes']."</td>
     </tr>";
    }
    ?>


   </tbody>
  </table>

</body>
</html>

<?php
session_destroy();
?>