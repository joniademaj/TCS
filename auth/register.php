<?php include("../database/dbConnection.php"); ?>
<?php include("../header.php"); ?>
<?php include("../methods/functions.php"); ?>

<?php 
    $errors = [];
    $users = [];

    $sql = "SELECT * FROM `users`";
    $statement = $pdo->query($sql);
    
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
        $users[] = $row;
    }
    
    if(isset($_POST["sign-up"])){
        if(isset($_POST["name"]) && !empty($_POST["name"])
        && isset($_POST["email"]) && !empty($_POST["email"])
        && isset($_POST["password"]) && !empty($_POST["password"])
        && isset($_POST["confirm-password"]) && !empty($_POST["confirm-password"])){
            $name = $_POST["name"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $confirm_password = $_POST["confirm-password"];

            if(strlen($name) > 3){ 
                if(is_email($email)){
                    if(!in_array($email, $users)){
                        if(strlen($password) > 6){
                            if($password == $confirm_password){
                                $hashed_password = password_hash($password, PASSWORD_BCRYPT);
                                $sql = "INSERT INTO `users` (`name`, `email`, `password`) VALUES (?, ?, ?)"; 
                                $statement = $pdo->prepare($sql);
                                
                                if($statement->execute([$name, $email, $hashed_password])){
                                    header("Location: login.php");
                                }
                            }else{
                                $errors[] = "Confirm password and password doesn't match";
                            }
                        }else{
                            $errors[] = "Password is too short";
                        }
                    }else{
                        $errors[] = "A user with the same email address already exists";
                    }
                }else{
                    $errors[] = "Email is not in right format";
                }
            }else{
                $errors[] = "Name is too short";
            }
        }else{
            $errors[] = "All fields are required";
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
    
    <div class="form register-form">
    <div class="text-center mb-5 mt-3">
        <h3>Register</h3>
    </div>
        <form class="row g-3" method="POST">
            <input type="text" name="name" placeholder="Enter your name">
            <input type="text" name="email" placeholder="Enter your email">
            <input type="password" name="password" placeholder="Enter your password">
            <input type="password" name="confirm-password" placeholder="Confirm your password">
            <div class="button-container">
                <button type="submit" class="submit sign-up" name="sign-up">Sign Up</button>  
            </div>
        </form>
    </div>

</div>


<?php include("../footer.php"); ?>