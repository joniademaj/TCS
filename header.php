<?php ob_start(); ?>
<?php session_start(); ?>
<?php include("database/dbConnection.php") ?>
<?php include("languages/config.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/8d714ffa80.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/aframe/1.2.0/aframe.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>TCS - Home</title>
</head>
<body>
    <div class="loading">
        <div></div>
    </div>
  <style>
    <?php include("style/style.css"); ?>
    <?php 
      $url = $_SERVER["PHP_SELF"];
      $currentPage = explode("/", $url);
    ?>
    <?php if(end($currentPage) == "index.php"): ?>
      .background{
        /* background-image: url("assets/images/background3.jpg"); */
        background-image: url("assets/images/last-bg.png");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: left;
        height: 800px;
        position: relative;
        opacity: 0.9;
      }
      @media screen and (max-width: 500px){
        nav{
          margin-bottom: 300px;
        }
      }

    <?php endif; ?>
    <?php if(end($currentPage) == "about-us.php"): ?>
      /* about-us-bg-img.webp */
      .background{
        background-image: url("assets/images/networking-1.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        height: 600px;
        opacity: 0.9;
      }
    <?php endif; ?>
    <?php if(end($currentPage) == "work.php"): ?>
      .background{
        background-image: url("assets/images/projects-background2.webp");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        height: 600px;
        opacity: 0.9;
      }
    <?php endif; ?>
    <?php if(end($currentPage) == "dashboard.php"): ?>
      .background{
        background-image: url("assets/images/networking-2.jpeg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: left;
        height: 100vh;
        opacity: 0.9;
      }
    <?php endif; ?>

    <?php if(end($currentPage) == "contact.php"): ?>
      .background{
      background-image: url("assets/images/contact-bg.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      height: 600px;
    }
    <?php endif; ?>
    .service-content{
    }
    .services{
      /* background-image: url("assets/images/services-bg.jpg");
      background-repeat: no-repeat; */
      padding: 20px;
      background-color: #f7f9fd;
    }
    <?php if(end($currentPage) != "contact.php"): ?>
      .work-together{
        background-image: url("assets/images/contact-bg.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        height: 700px;
      }
      @media screen and (max-width: 1200px){
        .work-together{
          background-position: center;
        }
      }
    <?php endif; ?>

    .talk-to-us{
      background-image: url("assets/images/talk-to-us.jpg");
      background-size: cover;
      height: 350px;
      margin-top: 200px;
      
    }

    /* .project{
      background-image: url("assets/images/project-image.png");
      height: 300px;
      background-repeat: no-repeat;
      background-position: center;
    } */
  </style>
    <?php 
      $url = $_SERVER["PHP_SELF"];
      $currentPage = explode("/", $url);
    ?>

    <!-- <div class="languages bg-dark languages-header">
        <div class="col col-sm-12 col-md-8">
          <a href="./index.php?lang=en">English</a> <span style="color: white"> | </span>
          <a href="./index.php?lang=al">Albanian</a> <span style="color: white"> | </span>
          <a href="./index.php?lang=ge">German</a>
        </div>
      </div>
    </div> -->
    <?php if(end($currentPage) !== "view.php" && end($currentPage) !== "login.php" && end($currentPage) !== "register.php" && end($currentPage) !== "dashboard.php" && end($currentPage) !== "social-media.php" && end($currentPage) !== "privacy-cookies-policy.php"): ?>
      <div class="container-fluid background" id="back">
        
        <header class="header">
          <!-- <div class="languages languages-header">
              <div class="col col-sm-12 col-md-8">
                <a href="./index.php?lang=en">EN</a> <span style="color: white"> | </span>
                <a href="./index.php?lang=al">AL</a> <span style="color: white"> | </span>
                <a href="./index.php?lang=ge">GE</a>
              </div>
          </div> -->
        
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#"><img src="assets/images/whitelogo.png" /></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <i class="fa fa-bars burger"></i>
                    <i class="fa fa-close close"></i>
                  </button>

                  <!-- <div class="burger">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                  </div> -->

                  <div class="nav-bar collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active-lang" href="" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <?php echo $_SESSION["lang"]; ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <?php if($_SESSION["lang"] == "en"): ?>
                              <li><a class="dropdown-item" href="./index.php?lang=al">AL</a></li>
                              <li><a class="dropdown-item" href="./index.php?lang=ge">GE</a></li>
                            <?php elseif($_SESSION["lang"] == "al"): ?>
                              <li><a class="dropdown-item" href="./index.php?lang=en">EN</a></li>
                              <li><a class="dropdown-item" href="./index.php?lang=ge">GE</a></li>
                            <?php elseif($_SESSION["lang"] == "ge"): ?>
                              <li><a class="dropdown-item" href="./index.php?lang=al">AL</a></li>
                              <li><a class="dropdown-item" href="./index.php?lang=en">EN</a></li>
                            <?php endif; ?>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php"><?php echo $lang["nav-item-1"] ?></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="about-us.php"><?php echo $lang["nav-item-2"] ?></a>
                      </li>
                      <!-- <li class="nav-item">
                        <a class="nav-link" href="capabilities.php"><?php echo $lang["nav-item-3"] ?></a>
                      </li> -->
                      <li class="nav-item">
                        <a class="nav-link" href="work.php"><?php echo $lang["nav-item-4"] ?></a>
                      </li>
                      <?php if(isset($_SESSION["logged_in"]) == true && $_SESSION["is_admin"] == 1): ?>
                        <li class="nav-item">
                          <a class="nav-link" href="dashboard.php">Dashboard</a>
                        </li>
                      <?php endif; ?>
                      <?php if(isset($_SESSION["logged_in"]) == true && $_SESSION["is_admin"] == 1): ?>
                        <li class="nav-item">
                          <a class="nav-link" href="?action=log-out">Logout</a>
                        </li>  

                        <?php
                          if(isset($_GET["action"]) == "logout"){
                            unset($_SESSION["logged_in"]);
                            unset($_SESSION["is_admin"]);
                            header("Location: index.php");
                          }
                        ?>
                      <?php endif; ?>
                      <li class="nav-item contact-item">
                        <a class="nav-link contact-link" href="contact.php"><?php echo $lang["nav-item-5"] ?></a>
                      </li>
                    </ul>
                  </div>
                </div>
            </nav>
        </header> 

    <!-- <div class="all-content"> -->

    <?php endif; ?>