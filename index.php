<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/jpg" href="#">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AceExit</title>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <style>
            .username{
                background-color: white;
                color: black;
                border: 2px solid #07e4ce;
            }
        </style>

<!--Navigation bar for large screen size-->
<div class="homesection">

        <div class="navbar fixed-top">
            <div class="logo">Ace<span class="logo_span">Exit</span></div>
            <ul class="links" type="none">
                <li><a href="#home">Home</a></li>
                <li><a href="#courses">Programs</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#aboutus">About</a></li>
                <li><a href="#contactus">Contact</a></li>
            </ul>
          <?php
            if(isset($_SESSION["userid"])){

            ?>
                
                <a href="Login/signUp.html" class="action_btn username"><?php echo $_SESSION["username"]?></a>
                <a href="includes/logoutinc.php" class="action_btn">Log out</i></a>
            
            <?php
            }else{
            ?>
                <a href="Login/signUp.php" class="action_btn">Sign up</a>
                <a href="Login/logindex.html" class="action_btn">Log in</i></a>
            <?php
            }
            ?>
                <div class="toggle_btn">
                    <i class="fa-solid fa-bars"></i>
                </div>
        </div>

<!--Dropdown menu for small screen size-->        

    <div class="dropdown_menu">
        <li><a href="#home">Home</a></li>
        <li><a href="#courses">Programs</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#aboutus">About</a></li>
        <li><a href="#contactus">Contact</a></li>
        <li><a href="Login/signUp.html" class="action_btn">Sign up</i></a></li>
        <li><a href="Login/logindex.html" class="action_btn">Log in</a></li>
    </div>

    </header>

<!--Welcome Page-->    

    <div class="welcome" id="home">
        <h1>Let's ace the Exit exam!</h1>
        <p>Unlock your potential and excel in exams.</p>
        <button>Explore</button> 
    </div>
</div>

<!--Our Courses Section-->
<div class="containerfluid programs">

    <section class="courses" id="courses">
        <h1 id="courses">Our <span>Programs</span></h1>

        <div class="box">

        <div class="row">
            <div class="col-lg-4">
                <div class="container">
                <img src="images/img1.jpg" alt="">
                <h3>Accounting and Finance</h3>
            </div>
        </div>   
            <div class="col-lg-4">
                <div class="container">
                <img src="images/img3.jpg" alt="">
                <h3>Computer Science</h3>
                
            </div>
        </div>
            <div class="col-lg-4">
                <div class="container">
                <img src="images/img4.jpg" alt="">
                <h3>Management</h3>
                
            </div>
            </div>
        </div>
            <div class="row mt-2">
            <div class="col-lg-4">
                <div class="container">
                <img src="images/img5.jpg" alt="">
                <h3>Marketing Management</h3>
            </div>
        </div>
            <div class="col-lg-4">
                <div class="container">
                <img src="images/img5.jpg" alt="">
                <h3>Tourism</h3>
            </div>
        </div>
            <div class="col-lg-4">
                <div class="container">
                <img src="images/img2.jpg" alt="">
                <h3>Resources</h3>
                
            </div>
            </div>
        </div>   
</div>
    </section>
</div>

    <!--Our Services Section-->

    <section class="services" id="services">
        <h1 id="services">Our <span>Sevices</span></h1>

        <div class="box">

        <div class="row mt-5">
            <div class="col-lg-6">
                <div class="container">
                    <i class="fa-solid fa-book"></i>
                <h3>Exercises</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni reprehenderit necessitatibus id consequuntur impedit. Incidunt aut dolore tempore itaque doloremque iusto minus voluptate voluptas illo facere. Commodi dignissimos quia unde. </p>
                <a href="#" class="btn">Visit</a>
            </div>
        </div>
            
            <div class="col-lg-6">
                <div class="container">
                    <i class="fa-solid fa-clock"></i>
                <h3>Mock Exams</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus repellendus exercitationem blanditiis sit iste nam suscipit aut dolorem rem alias saepe quam mollitia placeat corporis, odio ab reiciendis velit accusantium?</p>
                <a href="#" class="btn">Visit</a>
            </div>
        </div>
        
        </div>

        <div class="row mt-5">
        
            <div class="col-lg-6">
                <div class="container">
                    <i class="fa-solid fa-book"></i>
                <h3>Resources</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium quidem eveniet, nam accusamus porro quaerat voluptatibus blanditiis minima voluptatem, quis aliquid. Error quasi quis placeat sit ipsam aperiam voluptatem esse.</p>
                 <a href="#" class="btn">Visit</a>
                 </div>
                 </div>
        

                  <div class="col-lg-6">
                  <div class="container">
                    <i class="fa-solid fa-laptop-code"></i>
                <h3>Progress</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde facere suscipit molestias dolorum veniam, esse repellendus tempore. Sit nostrum inventore, est cumque quod saepe quaerat maxime reiciendis, labore consequuntur et!</p>
                <a href="#" class="btn">Visit</a>
            </div>
        </div>
           
        </div>   
</div>
    </section>

    <!--About Us Section-->

    <section class="aboutus" id="aboutus">
        <h1 id="aboutus">About <span>Us</span></h1>
        <div class="box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <h3>Who we are</h3>
                        <p>
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus harum deleniti necessitatibus maxime voluptas dignissimos tempore, eius asperiores est, blanditiis inventore. Voluptatum ut ipsum minus numquam beatae iste, voluptate sit reprehenderit modi obcaecati quas laborum, eius dolor doloribus harum voluptatibus? Minima distinctio temporibus aperiam sed cum quos a, quae incidunt?
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <h3>What we do</h3>
                        <p>
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam cum odio quia aliquam consequuntur, quod quaerat nesciunt rem sapiente provident quisquam perferendis consectetur dignissimos delectus sint iste! Magni libero consectetur a sequi fuga repellendus ratione necessitatibus labore natus sapiente ex eveniet beatae eos at minima saepe voluptatum, itaque ducimus suscipit!
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <h3>Why we do it</h3>
                        <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima quae quaerat enim ratione, eum quo voluptatum expedita eligendi temporibus obcaecati exercitationem iste vero nisi quia beatae cupiditate nulla excepturi optio laboriosam. Corporis, aperiam. Quia et provident voluptatibus dolorem aliquam soluta veniam accusantium, at obcaecati nostrum distinctio officiis reiciendis illo accusamus?
                        </p>
                    </div>
                </div>

            </div>
        </div>
        </section>

<!--Contact Us section-->



        <section class="contactus" id="contactus">
            <h1 id="contactus">Contact <span>Us</span></h1>
            <div class="box">
                <div class="container">
                    <div class="row g-0">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-1"><i class="fa-brands fa-facebook"></i></div>
                        <div class="col-lg-1"><i class="fa-brands fa-instagram"></i></div>
                        <div class="col-lg-1"><i class="fa-brands fa-twitter"></i></div>
                        <div class="col-lg-1"><i class="fa-regular fa-envelope"></i></div>
                        <div class="col-lg-4"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-1"><a href="#home">Home</a></div>
                        <div class="col-lg-1"><a href="#courses">Programs</a></div>
                        <div class="col-lg-1"><a href="#services">Services</a></div>
                        <div class="col-lg-1"><a href="#aboutus">About Us</a></div>
                        <div class="col-lg-4"></div>
                    </div>
                    <div class="row g-5">
                        <div class="col-lg-12">
                            <p>Copyright 2023. Team AceExit. </p>
                        </div>
                    </div>

                </div>
            </div>

    </section>
        
    <script src="script.js"></script>   <!--JavaScript code to open and close the dropdown menu --> 

</body>
</html>