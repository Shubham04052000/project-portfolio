<?php
$server = "localhost";
$username = "root";
$password ="";
$database = "puneet";

$con = mysqli_connect($server, $username, $password, $database );

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>responsive personal portfolio website design tutorail</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style1.css">

</head>

<body>

    <!-- header section starts  -->

    <header>

        <div class="user">
            <img src="portfolio.jpeg" alt="Profile image">
            <h3 class="name">Puneet Dhuriya</h3>
            <p class="post">Web Designer</p>
        </div>

        <nav class="navbar">
            <ul>
                <li><a href="#home">home</a></li>
                <li><a href="#about">about</a></li>
                <li><a href="#education">education</a></li>
                <li><a href="#portfolio">portfolio</a></li>
                <li><a href="#contact">contact</a></li>
            </ul>
        </nav>

    </header>

    <!-- header section ends -->

    <div id="menu" class="fas fa-bars"></div>

    <!-- home section starts  -->

    <section class="home" id="home">

        <h3>HI THERE !</h3>
        <h1>I'M <span>puneet Dhuriya</span></h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio deserunt aspernatur fugiat minus enim
            ullam repudiandae sint sed magnam tenetur! Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Necessitatibus, at.
        </p>
        <a href="#about"><button class="btn">about me <i class="fas fa-user"></i></button></a>

    </section>

    <!-- home section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <h1 class="heading"> <span>about</span> me </h1>

        <div class="row">

            <div class="info">
                <h3> <span> name : </span> Puneet Dhuriya </h3>
                <h3> <span> age : </span> 21 </h3>
                <h3> <span> qualification : </span> BSC IT </h3>
                <h3> <span> post : </span> Web Designer </h3>
                <h3> <span> language : </span> English </h3>
                <a
                    href="https://docs.google.com/document/d/12t999b_MdgTBgzEbdB5D44NTwxia2NHT/edit?usp=drivesdk&ouid=101436226334092796381&rtpof=true&sd=tru"><button
                        class="btn"> download CV <i class="fas fa-download"></i> </button></a>
            </div>

            <div class="counter">

                <div class="box">
                    <span>2+</span>
                    <h3>years of experience</h3>
                </div>

                <div class="box">
                    <span>100+</span>
                    <h3>porject completed</h3>
                </div>

                <div class="box">
                    <span>430+</span>
                    <h3>happy clients</h3>
                </div>

                <div class="box">
                    <span>12+</span>
                    <h3>awards won</h3>
                </div>

            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- education section starts  -->

    <section class="education" id="education">

        <h1 class="heading"> my <span>education</span> </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2016</span>
                <h3>SSC</h3>
                <p>I'm complete my SSC Exam from Board of maharashtra and I got 60.40%</p>
            </div>

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2018</span>
                <h3>HSC</h3>
                <p>I'm complete my HSC Exam in Science field from Board of maharashtra and I got 48.15%</p>
            </div>

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2021</span>
                <h3>Graduation</h3>
                <p>I'm complete my BSC IT Graduation from Mumbai University and my total aggrigate 8.40 CGPI</p>
            </div>

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2021</span>
                <h3>Diploma in Web programming with PHP</h3>
                <p>I'm complete Diploma in Web programming with PHP from Anudip foundation Thane in 2021</p>
            </div>

        </div>

    </section>

    <!-- education section ends -->

    <!-- portfolio section starts  -->

    <section class="portfolio" id="portfolio">

        <h1 class="heading"> my <span>portfolio</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="image1.png" alt="">
            </div>

            <div class="box">
                <img src="image2.png" alt="">
            </div>

            <div class="box">
                <img src="image3.png" alt="">
            </div>

            <div class="box">
                <img src="image4.png" alt="">
            </div>

            <div class="box">
                <img src="image5.png" alt="">
            </div>

            <div class="box">
                <img src="image6.jpeg" alt="">
            </div>

        </div>

    </section>

    <!-- portfolio section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <h1 class="heading"> <span>contact</span> me </h1>

        <div class="row">

            <div class="content">

                <h3 class="title">contact info</h3>

                <div class="info">
                    <h3> <i class="fas fa-envelope"></i> puneetdhuriya679@gmail.com </h3>
                    <h3> <i class="fas fa-phone"></i> +91-8369230248 </h3>
                    <h3> <i class="fas fa-phone"></i> +91-8070735999 </h3>
                    <h3> <i class="fas fa-map-marker-alt"></i> mumbai, india - 400604. </h3>
                </div>

            </div>

            <?php

                if (isset($_POST["submit"])) {
                    $name = $_POST['name'];
                    $email = $_POST['Email'];

                    $message = $_POST['Message'];

                    $sqlq = "INSERT INTO `user` (`sir`, `name`, `Email`, `Message`, `datetime`) VALUES (NULL, '$name', '$email', '$message', current_timestamp());
                    ";

                    if (mysqli_query($con, $sqlq)) {
                        echo "<script> alert('Registed Succesfully!!!!') ;</script>";
                        echo "<script> document.location.href='index1.php'; </Script>";
                    }
                }
                ?>

            <form action="index1.php" method="post">

                <input type="text" placeholder="name" name="name" required class="box">
                <input type="email" placeholder="email" name="Email" required class="box">
                <textarea name="" id="" cols="30" rows="10" name="Message" required class="box message" placeholder="message"></textarea>
                <button type="submit"  name="submit" class="btn"> send <i class="fas fa-paper-plane"></i> </button>

            </form>

        </div>

    </section>

    <!-- contact section ends -->


    <!-- scroll top button  -->

    <a href="#home" class="top">
        <img src="rocket3.png" id="puneet" alt=" image top missing">
    </a>















    <!-- jquery cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- custom js file link  -->
    <script src="script1.js"></script>


</body>

</html>