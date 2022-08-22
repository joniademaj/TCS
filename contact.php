<?php include("database/dbConnection.php") ?>
<?php include("header.php") ?>
<?php 
    // $to = "ademajjoni3@gmail.com";
    
    // if(isset($_POST["submit"])){
    //     if(isset($_POST["name"]) && !empty($_POST["name"]) 
    //     && isset($_POST["email"]) && !empty($_POST["email"])
    //      && isset($_POST["subject"]) && !empty($_POST["subject"]) && isset($_POST["message"]) && !empty($_POST["message"])){
    //         $subject = $_POST["subject"];
    //         $message = $_POST["message"];

    //         $retval = mail ($to,$subject,$message);

    //         if( $retval == true ) {
    //             echo "Message sent successfully...";
    //         }else {
    //             echo "Message could not be sent...";
    //         }
            
    //     }
    // }

    use PHPMailer\PHPMailer\PHPMailer;
    
        if(isset($_POST["submit"])){
            if(isset($_POST["name"]) && !empty($_POST["name"]) 
            && isset($_POST["email"]) && !empty($_POST["email"])
            && isset($_POST["subject"]) && !empty($_POST["subject"]) 
            && isset($_POST["message"]) && !empty($_POST["message"])){

                $name = $_POST["name"];
                $email = $_POST["email"];
                $subject = $_POST["subject"];
                $message = $_POST["message"];

            
            }
        }
    
?>
<section class="container-fluid work-together-contact-page">
        <div style="color: white; width: 350px">
            <h1 data-aos="zoom-in">Grow your business with our talented team</h1>
        </div>
        <div class="contact">
            <h1 class="mb-5">Contact Us</h1>
            <!-- <div class="info-section">
                <h3>Technology Computing and Solution - TCS</h3>
                <p>Find us on social media:</p>
                <div class="social-media">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.instagram.com/tcs.dev/"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/tcs.dev/"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="contact-info">
                <i class="fa fa-envelope"> <span>tcs@gmail.net</span></i>
                <i class="fa fa-phone"> <span>+38344644022</span></i>
            </div> -->
            <div class="form">
                <form method="POST">
                    <input type="text" name="name" placeholder="Your Name">
                    <input type="text" name="email" placeholder="Your Email">
                    <input type="text" name="subject" placeholder="Your Subject">
                    <textarea name="message" cols="30" rows="7" placeholder="Your Message"></textarea>
                    <div>
                        <button type="submit" class="submit" name="submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <div class="circle">
        <i class="fa fa-arrow-up"></i>
    </div>
<?php include("footer.php") ?>