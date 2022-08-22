<?php include("header.php") ?>

    <section class="banner container-fluid">
        <div class="text-content" id="text-content">
        <!-- We transform businesses with powerful digital solutions -->
            <h1 class="title-text-content animated-title" data-aos="zoom-in"><?php echo $lang["banner-title"] ?></h1>
            <div>
                <p data-aos="zoom-out"><?php echo $lang["banner-text"]; ?></p>
            </div>
            <div class="project-start-option">
                <a data-aos="zoom-in" href="contact.php" class="start-project"><?php echo $lang["get-in-touch"] ?></a>
                <!-- <div>
                    <span class="call-us">Call us</span>
                    <span class="number">(+383) 044-644-022</span>
                </div> -->
            </div>
        </div>
        <!-- <div>
            <img src="assets/images/banner3.svg" alt="">
        </div> -->
    </section>

    <div class="circle">
        <i class="fa fa-arrow-up"></i>
    </div>
    <section class="tools-technologies container">
        <div class="tools-technologies-title">
            <h1 class="text-center"><?php echo $lang["technologies-title-section"] ?></h1>
            <p class="text-center mt-3 mb-3"><?php echo $lang["technologies-text"] ?></p>
        </div>
        <div class="tools-technologies-content" data-aos="zoom-in-up">
            <div class="tech languages-content left">
                <div class="tech-title">
                    <i class="fa fa-code"></i> 
                    <span><?php echo $lang["languages"] ?></span>
                </div>
                <div class="languages">
                    <p>Html</p>
                    <p>Css</p>
                    <p>Java Script</p>
                    <p>PHP</p>
                    <p>Java</p>
                    <p>C#</p>
                    <p>Python</p>
                </div>
            </div>
            <div class="tech languages-content right">
                <div>
                    <i class="fa fa-gear"></i>
                    <span><?php echo $lang["frameworks"] ?></span>
                </div>
                <div class="languages">
                    <p>React</p>
                    <p>Laravel</p>
                    <p>Django</p>
                </div>
            </div>
            <div class="tech languages-content left-bottom">
                <div>
                    <i class="fa fa-database"></i>
                    <span><?php echo $lang["database-menagment"] ?></span>
                </div>
                <div class="languages">
                    <p>Mysql</p>
                    <p>Sql Server</p>
                    <p>Sqlite</p>
                </div>
            </div>
            <div class="tech languages-content right-bottom">
                <div>
                    <i class="fa fa-cloud"></i>
                    <span><?php echo $lang["cloud"] ?></span>
                </div>
                <div class="languages">
                    <p>Google Cloud</p>
                    <p>Amazon Web Services (AWS)</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="service-content">
            <div class="services-title container">
                <h1 class="text-center"><?php echo $lang["services-title-section"] ?></h1>
                <p class="text-center mt-3 mb-3"><?php echo $lang["services-text-section"] ?></p>
            </div>
            <div class="services container-fluid"> 
                <div class="container services-content" data-aos="zoom-in-up">
                    <div class="service web-development">
                        <i class="fa fa-window-maximize"></i>
                        <h5><?php echo $lang["web-development"] ?></h5>
                        <p><?php echo $lang["web-development-text"] ?></p>
                    </div>
                    <div class="service web-hosting">
                        <i class="fa fa-cloud"></i>
                        <h5><?php echo $lang["web-hosting"] ?></h5>
                        <p><?php echo $lang["web-hosting-text"] ?></p>
                    </div>
                    <div class="service desktop-apps-development">
                        <i class="fa fa-desktop"></i>
                        <h5><?php echo $lang["desktop-apps"] ?></h5>
                        <p><?php echo $lang["desktop-apps-text"] ?></p>
                    </div>
                    <div class="service ssl">
                        <i class="fa fa-lock"></i>
                        <h5><?php echo $lang["ssl"] ?></h5>
                        <p><?php echo $lang["ssl-text"] ?></p>
                    </div>
                    <div class="service cyber-security">
                        <i class="fa fa-user-secret"></i>
                        <h5>Cyber Security</h5>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. A eum nulla quam aut repellat beatae!</p>
                    </div>
                    <div class="service cyber-security">
                        <i class="fa fa-bullhorn"></i>
                        <h5><?php echo $lang["social-media-menagment"] ?></h5>
                        <p><?php echo $lang["social-media-menagment-text"] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container path">
        <div>
            <div class="path-title container">
                <h1 class="text-center"><?php echo $lang["software-development-title-section"] ?></h1>
                <p class="text-center mt-3 mb-3"><?php echo $lang["software-development-text"] ?></p>
            </div>
            <div class="path-content">
                <div class="accordions" data-aos="zoom-in-up">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                              <span class="plan-number">1</span> <?php echo $lang["planning-title"] ?> 
                            </button>
                          </h2>
                          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body"><?php echo $lang["planning"] ?></div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                <span class="plan-number">2</span> <?php echo $lang["analysis-title"] ?>
                            </button>
                          </h2>
                          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body"><?php echo $lang["analysis"] ?></div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                <span class="plan-number">3</span> <?php echo $lang["design-title"] ?>
                            </button>
                          </h2>
                          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body"><?php echo $lang["design"] ?></div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                <span class="plan-number">4</span> <?php echo $lang["client-approval-title"] ?>
                            </button>
                          </h2>
                          <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body"><?php echo $lang["client-approval"] ?></div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                <span class="plan-number">5</span> <?php echo $lang["development-title"] ?>
                            </button>
                          </h2>
                          <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body"><?php echo $lang["development"] ?></div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                <span class="plan-number">6</span> <?php echo $lang["testing-title"] ?>
                            </button>
                          </h2>
                          <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body"><?php echo $lang["testing"] ?></div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                <span class="plan-number">7</span> <?php echo $lang["client-feedback-title"] ?>
                            </button>
                          </h2>
                          <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body"><?php echo $lang["client-feedback"] ?></div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                                <span class="plan-number">8</span><?php echo $lang["launch-title"] ?>
                            </button>
                          </h2>
                          <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body"><?php echo $lang["launch"] ?></div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="path-image" data-aos="zoom-in-up">
                    <img src="assets/images/software-development-path.png" alt="">
                </div>
            </div>
            
        </div>
    </section>

    <section class="social-media-offers">
        <div class="social-media-title container">
            <h1 class="text-center">Social Media</h1>
            <p class="text-center mt-3 mb-3">Besides software development we provide services for social media as well, such as social media menagment, account disable and advertisement, which are very important for a business growth</p>
        </div>
        <div class="social-media-content container-fluid">
            <div class="container social-media-cards" data-aos="zoom-in-up">
                <div class="social-media-card">
                    <div class="social-media-menagment">
                        <div class="image">
                            <img src="assets/images/social-media-img.png">
                        </div>
                        <div>
                            <h3>Social Media Menagment</h3>
                        </div>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore sed tempora aspernatur dolore cum a, beatae sunt.</p>
                        </div>
                    </div>
                </div>
                <div class="social-media-card">
                    <div class="social-media-menagment">
                        <div class="image">
                            <img src="assets/images/disable-image.png">
                        </div>
                        <div>
                            <h3>Account Disable</h3>
                        </div>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore sed tempora aspernatur dolore cum a, beatae sunt.</p>
                        </div>
                    </div>
                </div>
                <div class="social-media-card">
                    <div class="social-media-menagment">
                        <div class="image">
                            <img src="assets/images/ads-image.png">
                        </div>
                        <div>
                            <h3>Advertisement</h3>
                        </div>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore sed tempora aspernatur dolore cum a, beatae sunt.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="quotes">
        <div class="container">
            <div class="quote-content">
                <div>
                    <img src="assets/images/bill-gates.webp" alt="">
                </div>
                <div class="text-content">
                    <i class="fa fa-quote-left"></i>
                    <p>IF YOUR BUSINESS IS NOT ON THE INTERNET, THEN YOUR BUSINESS WILL BE OUT OF BUSINESS</p>

                    <div class="author">
                        <h4>- Bill Gates,</h4>
                        <p>(Microsoft Founder)</p>
                    </div>
                </div>
            </div>
            
        </div>
    </section> -->

    <section class="talk-to-us">
        <div class="talk-to-us-content">
            <div class="text">
                <p>TALK TO US TO GET AN OFFER THAT WILL HELP YOUR BUSINESS GROW FASTER </p>
            </div>
            <div>
                <a href="contact.php" class="start-project">Talk to us</a>
            </div>
        </div>
    </section>

    <section class="why-choose-us">
        <div class="container-fluid">
            <div class="why-us-title container">
                <h1 class="text-center">Why Choose Us</h1>
                <p class="text-center mt-3 mb-3">
                    We have highly skilled developers with excellent technical knowledge and experience in using latest software standards, tools, platforms, frameworks and technologies, we invest continuously in training and education 
                    to be able to help clients with any new technology
                </p>
            </div>
            <div class="cards-content-bg">
                <div class="cards-content container" data-aos="zoom-in-up">
                    <div class="why-us-card">
                        <span class="card-number">1</span>
                        <div class="card-text">
                            <h3>Creating Ideas with Passion</h3>
                            <p>We provide digital solutions by bringing fresh ideas to the table every time with our team. We always believe that passion for codes create extraordinary things happen.</p>
                        </div>
                    </div>
                    <div class="why-us-card">
                        <span class="card-number">2</span>
                        <div class="card-text">
                            <h3>On Time Delivery</h3>
                            <p>We deliver what others promise with on-time and affordable range.</p>
                        </div>
                    </div>
                    <div class="why-us-card">
                        <span class="card-number">3</span>
                        <div class="card-text">
                            <h3>Because we focus on results</h3>
                            <p>For us, it's all about what helps your bussiness grow.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid work-together">
        
        <div class="contact">
            <h1 class="mb-5">Contact Us</h1>
            <div class="form">
                <form method="POST">
                    <input type="text" name="name" placeholder="Your Name">
                    <input type="text" name="email" id="email" placeholder="Your Email">
                    <input type="text" name="subject" id="subject" placeholder="Your Subject">
                    <textarea name="message" cols="30" id="message" rows="7" placeholder="Your Message"></textarea>
                    <div>
                        <button type="submit" class="submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="what-next">
            <div>
                <h2>What Happens Next?</h2>
            </div>
            <div class="steps">
                <div class="step">
                    <span class="step-number">1</span>
                    <p>Our sales menager reaches you out a few days after analyzing your business requirements</p>
                </div>
                <div class="step">
                    <span class="step-number">2</span>
                    <p>Our sales menager reaches you out a few days after analyzing your business requirements</p>
                </div>
                <div class="step">
                    <span class="step-number">3</span>
                    <p>Our sales menager reaches you out a few days after analyzing your business requirements</p>
                </div>
            </div>
        </div>
    </section>
    <?php if(!isset($_COOKIE["user"]) && isset($_SESSION["logged_in"]) == false): ?>
        <section class="container cookies">
            <div>
                <p>We use cookies to improve your experience.
                    By your continued use of this site you accept such use.
                    Please see our policy for more information.
                </p>
                <div class="cookies-btn">
                    <form class="cookies-form" action="" method="POST">
                        <button name="accept-cookies">I Accept Cookies</button>
                        <button name="refuse-cookies">I Refuse Cookies</button>
                    </form>
                    <a href="privacy-cookies-policy.php" class="cookie-policy">Privacy Policy</a>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php
        if(isset($_POST["accept-cookies"])){

            setcookie("user", true, time() + 24 * 3600);
            $newViewer = 1;
        
            if(!isset($_COOKIE["user"])){
                $sql = "INSERT INTO `viewers` (`number`) VALUES (?)";
                $statement = $pdo->prepare($sql);
                $statement->execute([$newViewer]);
            }

            echo "
                <script>
                    const cookies = document.querySelector('.cookies');

                    cookies.style.display = 'none';
                </script>
            ";            
        }else if(isset($_POST["refuse-cookies"])){
            echo "
                <script>
                    const cookies = document.querySelector('.cookies');

                    cookies.style.display = 'none';
                </script>
            ";
        }
        
    ?>
    <script src="main.js"></script>
    
    <script>
        
    </script>
    
<?php include("footer.php") ?>