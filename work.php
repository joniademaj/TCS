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

    <section class="container our-work">
      <div>
        <h1 data-aos="zoom-in">Our Projects</h1>
        <p data-aos="zoom-out">In the section below you will find our projects build by our professional team</p>
      </div>
    </section>

    <section class="container mt-5" style="margin-top: 250px !important">
      <div class="projects-title container">
        <h1 class="text-center">Projects</h1>
          <p>
            Our selection from some recent projects build by our team for some 
            of our clients and how we have
            helped them to take their business to the next level with digital solutions
          </p>
      </div>    
    </section>

    <div class="circle">
        <i class="fa fa-arrow-up"></i>
    </div>

    <section class="container our-projects">
      <div class="projects">
        <?php if(count($projects) > 0): ?>
          <?php foreach($projects as $project): ?>
            <div class="project-content">
              <div class="project-background">
                <img src="assets/images/project-image.png" alt="">
              </div>
              <div class="project">
                <a href="view.php?id=<?= $project['id'] ?>">
                  <img src="assets/images/<?= $project['project-img'] ?>" id="img">
                </a>
                
                <!-- <div class="url">
                  <a href="view.php?id=<?= $project['id'] ?>" class="hidden" id="link"><i class="fa fa-link"></i></a>
                </div> -->

              </div>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </section>
    
    <script src="main.js"></script>
    <?php include("footer.php") ?>