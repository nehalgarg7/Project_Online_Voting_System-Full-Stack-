<?php

session_start();

if(!isset($_SESSION['id']))
{
    header('location:../');
}

$data=$_SESSION['data'];

if($_SESSION["status"]==1)
{
    $status = '<b  class="text-success bg-dark"> Voted </b>';
}
else
{
    $status = '<b class="text-danger"> Not Voted </b>';
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System-Dashboard</title>
    
    <style>
        .link{
            text-decoration:none;
            background-attachment: fixed;
            background-color: black;
        }
        </style>


    <!-- BOOTSTRAP CSS LINK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS FILE -->
    <link rel="stylesheet" href="../partials/style.css">
</head>
<body class = "bg-secondary text-light">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div>
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            <a href="../"><button class="btn btn-dark text-light px-3">Back </button></a>
            </li>
            <li class="nav-item">
            <a href="logout.php"><button class="btn btn-dark text-light px-3">Logout</button></a>
            </li>
          </ul>
        </div>
      </nav>

    <div class="container my-5">
    
    <!-- <a href="../"><button class="btn btn-dark text-light px-3">Back </button></a>
    <a href="logout.php"><button class="btn btn-dark text-light px-3">Logout</button></a> -->

    <h1 class="my-3 text-dark"> Candidate Details </h1>

    <div class="row my-5">

        <div class="col-md-7">
            <?php
            if(isset( $_SESSION['groups'])){
                $groups = $_SESSION['groups'];
                for($i=0;$i<count($groups);$i++)
                {
                    ?>
                    <div class="row">
                    <div class="col-md-4">
                        <img src="../uploads/<?php echo $groups[$i]['photo'] ?>" alt="Group image">
                    </div>
                    <div class="col-md-8">
                        <strong class="text-dark h5">Candidate Name : <p class="text-white d-inline "><?php echo $groups[$i]['username'] ?> </p></strong> <br> 
                        <?php
                        $temp="group";
                        if($data['standard']==$temp){
                            ?><strong class="text-dark h5">Votes:  <p class="text-white d-inline "> <?php echo $groups[$i]['votes'] ?></p></strong> <br>
                            <?php
                        }
                        else{
                            ?>
                            <?php
                        }
                        ?>
                         </p></strong> <br>
                    </div>
                </div>
                
                <form action="../actions/voting.php" method = "POST">
                
                <input type="hidden" name="groupvotes" value="<?php echo $groups[$i]['votes'] ?>">
                <input type="hidden" name="groupid" value="<?php echo $groups[$i]['id'] ?>">

                
                <?php 
                if($_SESSION['status']==1)
                    {
                        ?>
                    <button class = "bg-success my-4 text-white px-3" disabled> voted </button>
                    <?php
                    } else{
                        ?>
                        <button class = "bg-danger my-4 text-white px-3" type = "submit"> vote </button>
                        <?php
                    }
                ?>
            

                </form>

                <hr>
                <?php
                }
            } else{
                ?>
                <div class="container">
                    <p> No Groups to display </p>
                </div>
                <?php
            }
?>
            
            <!-- groups -->

            
        </div>
        <div class="col-md-5 px-5 align-middle ">
        <!-- user profile -->
        <p>
            <h4><b class="text-dark">User Profile</b></h4>
        </p>
        <img src="../uploads/<?php  echo $data['photo']?>" alt="User image">
        <br>
        <br>
        <strong class="text-dark h5">Voter Name :</strong> 
        <b>
        <?php  echo $data['username'];  ?> </b>
        <br> <br>
        <strong class="text-dark h5">Voter Mobile No. :</strong> 
        <b><?php  echo $data['mobile'];  ?><b>
        <br> <br>
        <strong class="text-dark h5">Status :</strong>
        <b><?php  echo $status; ?> <b>
        <!-- //temp(); -->
        <br> <br>
        <button class="bg-dark my-4 text-white px-3"> <a class="link bg-dark" href="../actions/result.php"> Result </a></button>
        </div>
    </div>
</div>
</body>
</html>