<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System - Registration page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand px-2" href="../index.php">Home</a>
                <div>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="../login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../partials/registration.php">Registration</a>
                    </li>
                </ul>
                </div>
            </nav>

    <div class="bg-info py-4">
        <h2 class="text-center">Register Account </h2>
        <div class="container text-center my-4">
            <form action="../actions/register.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" placeholder="Enter your username" required="required" name="Username">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" placeholder="Enter your mobile number" required="required" name="mobile">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control w-50 m-auto" placeholder="Enter your password" required="required" name="password">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control w-50 m-auto" placeholder="Confrim password" required="required" name="cpassword">
                </div>
                <div class="mb-3">
                    <input type="file" class="form-control w-50 m-auto"  name="photo">
                    </input>
                </div>
                <div class="mb-3 ">
                    <select name="std" class="form-select w-50 m-auto">
                    <option value="group">Candidate</option>
                    <option value="voter">Voter</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-dark my-4">Register</button>
                <p>Already have an account <a href="../login.php" class="text-white"> Login here </a></p>
           
            </form>
        </div>
        <br>
    </div>
</body>
</html>