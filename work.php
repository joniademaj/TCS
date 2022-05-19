<?php include("database/dbConnection.php"); ?>
<?php include("header.php"); ?>
<?php 
  $sql = "SELECT * FROM `projects`";
  $statement = $pdo->query($sql);
  $projects = [];

  if($statement->RowCount() > 0){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
      $projects[] = $row;
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/8d714ffa80.js" crossorigin="anonymous"></script>
    <title>TCS - Work</title>
    <style>
      <?php include("style/style.css") ?>
    </style>
</head>
<body>

    <section class="container">
        <div>
          <h1 class="text-center">Projects</h1>
        </div>
    </section>

    <div class="circle">
        <i class="fa fa-arrow-up"></i>
    </div>

    <section class="container">
      <div class="projects">
        <?php if(count($projects) > 0): ?>
          <?php foreach($projects as $project): ?>
            <div class="project">
              <img src="assets/images/<?= $project['project-img'] ?>" id="img">
              <div class="url">
                <a href="view.php?id=<?= $project['id'] ?>" class="hidden" id="link"><i class="fa fa-link"></i></a>
              </div>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </section>
    
    <script src="main.js"></script>
    <?php include("footer.php") ?>
</body>
</html>