<?php include("../database/dbConnection.php"); ?>
<?php include("../header.php"); ?>
<?php include("../methods/functions.php"); ?>
<?php 
    $errors = [];
    $_SESSION["logged_in"] = false;
    
    if(isset($_POST["login"])){
        if(isset($_POST["email"]) && !empty($_POST["email"])
        && isset($_POST["password"]) && !empty($_POST["password"])){
            $email = $_POST["email"];
            $password = $_POST["password"];

            $sql = "SELECT * FROM `users` WHERE `email` = ?";
            $statement = $pdo->prepare($sql);
            $statement->execute([$email]);
            $user = $statement->fetch(PDO::FETCH_ASSOC);
            $hashedPassword = $user["password"];

            if($user != null){
                if(password_verify($password, $hashedPassword)){
                    $_SESSION["logged_in"] = true;
                    $_SESSION["user_id"] = $user["id"];
                    $_SESSION["user_name"] = $user["name"];
                    $_SESSION["is_admin"] = $user["is_admin"];
                    header("Location: ../index.php");
                }else{
                    $errors[] = "Password is incorrect";
                }
            }else{
                $errors[] = "User doesn't exist";
            }
        }
    }

?>

<div class="container w-70">
    <?php if(count($errors) > 0): ?>
        <?php foreach($errors as $error): ?>
            <div class="alert alert-warning mt-5" role="alert">
                <?= $error; ?>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
    <div class="form login-form">
    <div class="text-center mb-5 mt-3">
        <h3>Log in</h3>
    </div>
        <form class="row g-3" method="POST">
            <input type="text" name="email" placeholder="Enter your email">
            <input type="password" name="password" placeholder="Enter your password">
            <div class="button-container">
                <button type="submit" class="submit log-in" name="login">Log in</button>  
            </div>
        </form>
    </div>
</div>
