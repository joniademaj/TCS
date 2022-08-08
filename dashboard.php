<?php include("header.php"); ?>
<?php include("database/dbConnection.php"); ?>
<?php 
    $sql = "SELECT * FROM `users`";
    $statement = $pdo->query($sql);
    $users = $statement->fetchAll();

    $sql = "SELECT * FROM `projects`";
    $statement = $pdo->query($sql);
    $projects = $statement->fetchAll();

    $sql = "SELECT * FROM `viewers`";
    $statement = $pdo->query($sql);
    $viewers = $statement->fetchAll();

    if(isset($_POST["add-project"])){
        if(isset($_POST["project-name"]) && !empty($_POST["project-name"]) 
        && isset($_POST["technologies"]) && !empty($_POST["technologies"])
        && isset($_POST["link"]) && !empty($_POST["link"])){
        
            try{
                $project_name = $_POST["project-name"];  
                $technologies = $_POST["technologies"];    
                $link = $_POST["link"];  
                $project_image = $_FILES["project-image"]["name"];  

                $sql = "INSERT INTO `projects` (`project_name`, `url`, `technologies`, `project-img`) 
                VALUES (?, ?, ?, ?)";
                $statement = $pdo->prepare($sql);
                
                if($statement->execute([$project_name, $link, $technologies, $project_image])){
                    move_uploaded_file($_FILES["project-image"]["tmp_name"], "assets/images/" . $project_image);
                }else{
                    echo "Something went wrong";
                }
                

            }catch(Exception $e){
                echo $e->getMessage();
            }
        }
    }
    
    if(isset($_GET["action"])){
        $action = $_GET["action"];

        switch($action){
            case "delete-project":
                if(isset($_GET["id"])){
                    $id = $_GET["id"];
                    $sql = "DELETE FROM `projects` WHERE id = ?";
                    $statement = $pdo->prepare($sql);
                    $statement->execute([$id]);
                    header("Location: ?action=menage-projects");
                }
            break;

            case "edit-project":
                if(isset($_POST["save"])){
                    if(isset($_POST["project-name"]) && !empty($_POST["project-name"]) 
                    && isset($_POST["technologies"]) && !empty($_POST["technologies"])
                    && isset($_POST["link"]) && !empty($_POST["link"])){
                        $project_name = $_POST["project-name"];
                        $technologies = $_POST["technologies"];
                        $link = $_POST["link"];
                        $project_image = $_FILES["project-img"]["name"];
                        $id = $_GET["id"];

                        $sql = "UPDATE `projects` SET `project_name` = ?,
                        `technologies` = ?, `url` = ?, `project-img` = ? WHERE `id` = ?";
                        $statement = $pdo->prepare($sql);

                        if($statement->execute([$project_name, $technologies, $link, $project_image, $id])){
                               move_uploaded_file($_FILES["project-img"]["tmp_name"], "assets/images/" . time() .$project_image);
                               header("Location: ?action=menage-projects");
                        }
                    }
                }
            break;

            case "delete-user":
                if(isset($_GET["id"])){
                    $id = $_GET["id"];
                    $sql = "DELETE FROM `users` WHERE id = ?";
                    $statement = $pdo->prepare($sql);
                    $statement->execute([$id]);
                    header("Location: ?action=menage-users");
                }
            break;

            case "edit-user":
                if(isset($_POST["save-user"])){
                    if(isset($_POST["name"]) && !empty($_POST["name"]) 
                    && isset($_POST["email"]) && !empty($_POST["email"])
                    && isset($_POST["status"]) && !empty($_POST["status"])){
                        $name = $_POST["name"];
                        $email = $_POST["email"];
                        $status = $_POST["status"];
                        $id = $_GET["id"];

                        $sql = "UPDATE `users` SET `name` = ?,
                        `email` = ?, `is_admin` = ? WHERE `id` = ?";
                        $statement = $pdo->prepare($sql);

                        if($statement->execute([$name, $email, $status, $id])){
                            header("Location: ?action=menage-users");
                        }
                    }
                }
        }
    }

    

?>
<?php if(!isset($_GET["action"])): ?>
<section class="dashboard">
    <div class="sidebar">
        <div class="navigation">
            <ul>
                <li><a href="?action=add-project"><i class="fa fa-plus"></i>Add Project</a></li>
                <li><a href="?action=menage-projects"><i class="fa fa-list"></i>Menage Projects</a></li>
                <li><a href="?action=menage-users"><i class="fa fa-users"></i>Menage Users</a></li>
                <li><a href="index.php"><i class="fa fa-arrow-left"></i>Leave</a></li>
            </ul>
        </div>
        <div class="responsive">
            <ul>
                <li><a href="?action=add-project"><i class="fa fa-plus"></i></a></li>
                <li><a href="?action=menage-projects"><i class="fa fa-list"></i></a></li>
                <li><a href="?action=menage-users"><i class="fa fa-users"></i></a></li>
                <li><a href="index.php"><i class="fa fa-arrow-left"></i></a></li>
            </ul>
        </div>
    </div>

    

    <div class="dashboard-content">

        <div class="dashboard-header">
            <h1>TCS - Dashboard</h1>
        </div>
        <div class="dashboard-cards">
            <div class="dashboard-card">
                <p>Users</p>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <p>
                    <?php echo count($users); ?>
                </p>

            </div>
            <div class="dashboard-card">
                <p>Projects</p>
                <div class="icon">
                    <i class="fa fa-list"></i>
                </div>
                <p>
                    <?php echo count($projects); ?>
                </p>
            </div>

            <div class="dashboard-card">
                <p>Viewers</p>
                <div class="icon">
                    <i class="fa fa-eye"></i>
                </div>
                <p>
                    <?php echo count($viewers); ?>
                </p>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if(isset($_GET["action"])): 
    $action = $_GET["action"]; ?>
    <?php switch($action):
        case "add-project": ?>
        <section class="add-project">
            <div class="add-project-content container">
                <div>
                    <h1 class="text-center">Add Project</h1>
                </div>
                <div>
                    <form class="row g-3" method="POST" enctype="multipart/form-data">
                        <input type="text" name="project-name" placeholder="Enter project name ">
                        <input type="text" name="technologies" placeholder="Enter used technologies ">
                        <input type="text" name="link" placeholder="Enter the project link ">
                        <input type="file" name="project-image" placeholder="Enter project image ">
                        <div class="button-container">
                            <button type="submit" class="submit add-project" name="add-project">Add Project</button>  
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <?php break; ?>

        <?php case "menage-projects": ?>
        <section class="menage-projects">
            <div class="menage-projects container">
                <div>
                    <h1 class="text-center mt-5 mb-5">Menage Projects</h1>
                </div>
                <div>
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Project Name</th>
                            <th scope="col">Technologies</th>
                            <th scope="col">Link</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php foreach($projects as $index => $project): ?>
                              <tr>
                                <th scope="row"><?= $index + 1 ?></th>
                                <td><?= $project["project_name"]; ?></td>
                                <td><?= $project["technologies"]; ?></td>
                                <td><a href="<?= $project["url"]; ?>"><?= $project["url"]; ?></a></td>
                                <td>
                                    <a href="?action=edit-project&id=<?= $project["id"]; ?>" class="edit">Edit</a>
                                    <a href="?action=delete-project&id=<?= $project["id"]; ?>" class="delete">Delete</a>
                                </td>
                              </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <?php break; ?>

        <?php case "edit-project": ?>
            <section class="edit-projects container">
                <div>
                    <h1 class="text-center mb-5 mt-5">Edit Project</h1>
                </div>
                <?php 
                if(isset($_GET["id"])){
                    $id = $_GET["id"];
                }
                $sql = "SELECT * FROM `projects` WHERE id = ?";
                $statement = $pdo->prepare($sql);
                $statement->execute([$id]);
                $projects = $statement->fetchAll(); ?>
                <?php foreach($projects as $project): ?>
                    <div>
                        <form class="row g-3" method="POST" enctype="multipart/form-data">
                            <input type="text" name="project-name" value=<?= $project["project_name"] ?>>
                            <input type="text" name="technologies" value=<?= $project["technologies"] ?>>
                            <input type="text" name="link" value=<?= $project["url"] ?>>
                            <input type="file" name="project-image" value=<?= $project["project-img"] ?>>
                            <img src="assets/images/<?= $project["project-img"] ?>" class="edit-img">
                            <div class="button-container">
                                <button type="submit" class="submit save-project" name="save">Save</button>  
                            </div>
                        </form>
                    </div>
                <?php endforeach; ?>
            </section>
        <?php break; ?>

        <?php case "menage-users": ?>
            <section class="menage-projects">
            <div class="menage-projects container">
                <div>
                    <h1 class="text-center mt-5 mb-5">Menage Users</h1>
                </div>
                <div>
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php foreach($users as $index => $user): ?>
                              <tr>
                                <th scope="row"><?= $index + 1 ?></th>
                                <td><?= $user["name"]; ?></td>
                                <td><?= $user["email"]; ?></td>
                                <td><?= ($user["is_admin"] == 1) ? "Admin" : "User"?></td>
                                <td>
                                    <a href="?action=edit-user&id=<?= $user["id"]; ?>" class="edit">Edit</a>
                                    <a href="?action=delete-user&id=<?= $user["id"]; ?>" class="delete">Delete</a>
                                </td>
                              </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <?php break; ?>

        <?php case "edit-user": ?>
            <section class="edit-projects container">
                <div>
                    <h1 class="text-center mb-5 mt-5">Edit User</h1>
                </div>
                <?php 
                if(isset($_GET["id"])){
                    $id = $_GET["id"];
                }
                $sql = "SELECT * FROM `users` WHERE id = ?";
                $statement = $pdo->prepare($sql);
                $statement->execute([$id]);
                $users = $statement->fetchAll(); ?>
                <?php foreach($users as $user): ?>
                    <div>
                        <form class="row g-3" method="POST" enctype="multipart/form-data">
                            <input type="text" name="name" value=<?= $user["name"] ?>>
                            <input type="text" name="email" value=<?= $user["email"] ?>>
                            <input type="text" name="status" value=<?= $user["is_admin"] ?>>
                            <div class="button-container">
                                <button type="submit" class="submit save-user" name="save-user">Save</button>  
                            </div>
                        </form>
                    </div>
                <?php endforeach; ?>
            </section>
        <?php break; ?>
    <?php endswitch; ?>
<?php endif; ?>
<div class="circle">
        <i class="fa fa-arrow-up"></i>
    </div>
<script src="main.js"></script>