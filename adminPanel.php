
<?php
  require_once("includes/dbh.inc.php");
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Real Estate Site</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/adminPanel.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        
    </head>

    <body>
      <!-- Navigation -->
      <div id="navigation">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div id="logo">
            <p class="text-center font-weight-bolder mt-3">Admin panel</p>
          </div>

<!-- 
          <div class="bd-highlight font-weight-bold" id="dropdownProfile">
            <li class="nav-item dropdown mt-2">
                <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="img/profileIcon.png" alt="Smiley face" height="25" width="25">
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item font-weight-bold profileColor" href="#">Signed in as:</a>
                  <a class="dropdown-item font-weight-bold profileColor" href="#">Pero Peric</a>
                  <a class="dropdown-item font-weight-bold profileColor" href="includes/login.php"><img src="img/loginIcon.png" alt="Smiley face" height="20" width="20">Log In</a>
                  <a class="dropdown-item font-weight-bold profileColor" href="includes/register.php"><img src="img/signupIcon.png" alt="Smiley face" height="20" width="20">Sign Up</a>
                </div>
            </li>
          </div>  -->

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>


        
          <div class="collapse navbar-collapse text-center" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Real estate</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Terms</a>
              </li>
              <li class="nav-item mobileOnly">
                <a class="nav-link" href="#">Signed in as: Pero Peric</a>
              </li>
              <li class="nav-item mobileOnly">
                <a class="nav-link" href="#"><img src="img/loginIcon.png" alt="Smiley face" height="20" width="20">Log In</a>
              </li>
              <li class="nav-item mobileOnly">
                <a class="nav-link" href="#"><img src="img/signupIcon.png" alt="Smiley face" height="20" width="20">Sign Up</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <!-- Navigation !END! -->      
      

      <div class="outer">
        <div class="inner-fixed">
            <nav class="admin-nav">
                <ul class="admin-list">
                <?php
                $adminOptions=scandir("includes/adminInc");
                unset($adminOptions[0]);
                unset($adminOptions[1]);
                foreach ($adminOptions as $key => $value) {
                  $item=rtrim($value, ".php");
                  echo '<li class="nav-item"><a class="text-dark p-0 d-block h-100 text-center" href="adminPanel.php?p='.$item.'">'.$item.'</a></li>';
                }
              ?>
                </ul>
              </nav>
        </div>

        <div class="admin-info inner-remaining text-center text-white d-flex flex-column justify-content-around py-4">
          <div>
              <p>Signed in as admin user:</p>
              <p>Pero Perić</p>
          </div>

          

          <p>Changes made: 17</p>

          <p><i class='far fa-calendar-alt'></i>  Current date: 20.10.2019.</p>
          <div id="">
              <a href="#"><button type="button" class="btn btn-dark mt-3 pl-5 pr-5">Sign out</button></a>
            </div>

        </div>
      </div>

      <div class="content">
          
          <?php
            if (isset($_GET["p"])) {
              $file='includes/adminInc/'.$_GET["p"].'.php';
              include $file;  
            }
          ?>

      </div>
      


      <!-- END -->


      <!-- JavaScript -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    </body>
</html>