<!-- INSERT INTO `userdata` (`id`, `username`, `mobile`, `password`, `photo`, `standard`, `status`, `votes`) VALUES (NULL, 'Nehal Garg', '7759800660', 'Nehal', 'sqdq', 'group', '0', '0'); -->

<?php

@include('connect.php');

$username=$_POST['Username'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$image=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];
$std=$_POST['std'];

if($password!=$cpassword)
{
    echo '<script>
    alert("Passwords do not match");
    window.location="../partials/registration.php";
    </script>';

}

else{
   move_uploaded_file($tmp_name,"../uploads/$image");
   $sql="INSERT INTO `userdata` (`username`, `mobile`, `password`, `photo`, `standard`, `status`, `votes`) VALUES ('$username','$mobile','$password','$image','$std','0','0')";

   $result = mysqli_query($con,$sql);

   if($result)
   {
    echo '<script>
    
    alert("Registration Succesfull");
    window.location="../login.php";
    </script>';
   }

   else{
    die(mysqli_error($con));
   }
}
?>