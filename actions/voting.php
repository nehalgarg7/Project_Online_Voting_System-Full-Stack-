<?php

session_start();

@include('connect.php');


$votes = $_POST['groupvotes'];
$totalvotes = $votes +1;

$gid= $_POST['groupid'];
$uid = $_SESSION['id'];

$updatevotes = mysqli_query($con, "UPDATE `userdata` SET `votes` = '$totalvotes' where `id` ='$gid'" );


$updatestatus = mysqli_query($con, "UPDATE `userdata` SET `status`=1 where id='$uid'" );

if($updatevotes && $updatestatus)
{
    $getgroups = mysqli_query($con, "SELECT `username`,`photo`,`votes`,`id` FROM `userdata` WHERE `standard` = 'group'");

    $groups = mysqli_fetch_all($getgroups, MYSQLI_ASSOC);
    $_SESSION['groups'] = $groups;
    $_SESSION['status'] =1;

    echo '<script>
    alert("Voting Successful");
    window.location = "../partials/dashboard.php";
    
    </script>';

}
else{

    echo '<script>
    alert("Technical Error");
    window.location = "../partials/dashboard.php";
    
    </script>';
}

?>