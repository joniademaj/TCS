<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/8d714ffa80.js" crossorigin="anonymous"></script>
    <title>TCS - Home</title>
</head>
<body>
  <style>
      <?php include("style/style.css"); ?>
  </style>
    <?php 
      $url = $_SERVER["PHP_SELF"];
      $currentPage = explode("/", $url);
    ?>

    <?php if(end($currentPage) !== "view.php"): ?>
      <div class="container">
        <header class="header">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#"><img src="assets/images/tcs-logo.png"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="about-us.php">About us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="capabilities.php">Capabilities</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="work.php">Work</a>
                      </li>
                      <li class="nav-item contact-item">
                        <a class="nav-link contact-link" href="contact.php">Contact</a>
                      </li>
                    </ul>
                  </div>
                </div>
            </nav>
        </header> 
      </div>
    <?php endif; ?>