<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Election</title>



    <link rel="apple-touch-icon" sizes="180x180" href="./admin/images/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./admin/images/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./admin/images/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">


    <link rel="stylesheet" href="./style.css">


    <!-- BOOTSTRAP CSS LINK -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body class="bg-white">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="./">Home</a>
        <div>
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="./login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./partials/registration.php">Registration</a>
            </li>
          </ul>
        </div>
      </nav>

    <header class="bg-light py-2">
        <img src="./admin/images/banner.jpeg" alt="Election" class="banner">
    </header>

    <section>
    <div class="preamble py-4">
     <P>

        <h1 class="selector">Preamble of India</h1><br>
        <img src="./admin/images/preamble.jpg" alt="Preamble" id="box">

        <b>WE, THE PEOPLE OF INDIA,</b> having solemnly resolved to constitute India into a <b>SOVEREIGN SOCIALIST SECULAR DEMOCRATIC REPUBLIC</b> and to secure to all its citizens:<br>

        <b>JUSTICE</b>, social, economic and political;<br>
        
        <b>LIBERTY</b> of thought, expression, belief, faith and worship;<br>

        <b>EQUALITY</b> of status and of opportunity

        and to promote among them all;<br>
        
        <b>FRATERNITY</b> assuring the dignity of the individual and the unity and integrity of the Nation;<br>

        <b>IN OUR CONSTITUENT ASSEMBLY</b> this twenty-sixth day of November, 1949, do <b>HEREBY ADOPT, ENACT AND GIVE TO OURSELVES THIS CONSTITUTION</b>.<br><br>
     </P>
    </div>
    </section>

    <footer>
        <div class="footer">
            Election Commission : &copy; <?php 
            $array=getdate();
            $year= $array['year']; 
            echo $year;
            ?>
        </div>
    </footer>
</body>
</html>