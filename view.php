<?php include("database/dbConnection.php") ?>
<?php include("header.php") ?>
<?php 

    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $sql = "SELECT * FROM `projects` WHERE `id` = ?";
        $statement = $pdo->prepare($sql);
        
        if($statement->execute([$id])){
            if($statement->RowCount() > 0){
                $project = $statement->fetch(PDO::FETCH_ASSOC);
            }
        }
    }

?>

<section class="view-section">
    <style>
        <?php include("style/style.css") ?>
    </style>
    <div class="container view">
        <img src="assets/images/<?= $project['project-img'] ?>">
        <div class="project-info">
            <div class="item">
                <strong><p>Project Name: </p></strong> <span><?= $project["project_name"] ?></span>
            </div>
            <div class="item">
                <strong><p>Technologies: </p></strong> <span><?= $project["technologies"] ?></span>
            </div>
            <div class="item">
                <strong><p>URL: </p></strong> <a href="<?= $project['url'] ?>"><?= $project["url"] ?></a>
            </div>
        </div>
    </div>
</section>

<script src="main.js"></script>

<?php include("footer.php") ?>