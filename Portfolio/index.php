<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Mejdi's Portfolio</title>


   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!--  css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!--  css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

   <!-- header section starts  -->

   <header class="header">

      <div id="menu-btn" class="fas fa-bars"></div>

      <a href="#home" class="logo">Mejdi's Portfolio</a>

      <nav class="navbar">
         <a href="#home" class="active">Home</a>
         <a href="#about">About</a>
         <a href="#services">Services</a>
         <a href="#portfolio">Portfolio</a>
         <a href="#contact">Contact</a>
      </nav>

      <div class="follow">
         <a href="https://www.facebook.com/mejdi.provoliu" class="fab fa-facebook-f" target="_blank"></a>
         <!-- <a href="#" class="fab fa-twitter"></a> -->
         <a href="https://www.instagram.com/mejdiprovoliuu/" class="fab fa-instagram" target="_blank"></a>
         <a href="https://www.linkedin.com/in/mejdi-provolija-a8085b221/" class="fab fa-linkedin" target="_blank"></a>
         <a href="https://github.com/Mejdi12" class="fab fa-github" target="_blank"></a>
      </div>

   </header>

   <!-- header section ends -->

   <!-- home section starts  -->

   <section class="home" id="home">

      <div class="image" data-aos="fade-right">
         <img  src="images/photo1.png" alt="Official Photo">
      </div>

      <div class="content">
         <h3 data-aos="fade-up">Hi, i am Mejdi Provolija</h3>
         <span data-aos="fade-up">Web designer & developer</span>
         <p data-aos="fade-up">A beginner programmer with the great will to achieve a brilliant career.
            My desire, will and dedication to programming I believe make me one of the right candidates for your
            projects.
            I am extremely motivated for a long and bright career, and I hope that my skills will serve your company.
         </p>
         <a data-aos="fade-up" href="#about" class="btn">About me</a>
      </div>

   </section>

   <!-- home section ends -->

   <!-- about section starts  -->

   <section class="about" id="about">

      <h1 class="heading" data-aos="fade-up"> <span>Biography</span> </h1>

      <div class="biography">

         <p data-aos="fade-up">A beginner programmer with the great will to achieve a brilliant career.
            My desire, will and dedication to programming I believe make me one of the right candidates for your
            projects.
            I am extremely motivated for a long and bright career, and I hope that my skills will serve your company.
         </p>

         <div class="bio">
            <h3 data-aos="zoom-in"> <span>name : </span> Mejdi Provolija</h3>
            <h3 data-aos="zoom-in"> <span>email : </span> mprovoliu@gmail.com </h3>
            <h3 data-aos="zoom-in"> <span>address : </span> Kacanik, Kosovo </h3>
            <h3 data-aos="zoom-in"> <span>phone : </span> +383-558-670 </h3>
            <h3 data-aos="zoom-in"> <span>age : </span> 21 years </h3>
            <h3 data-aos="zoom-in"> <span>experience : 6 months</span> </h3>
         </div>

         <a href="Users\megzo\OneDrive\Documents\CV-s/Mejdi" class="btn" data-aos="fade-up" Download>Download CV</a> 
         <!-- <a href="http://localhost/portfolio/index.php#about/download.php?file=Mejdi.pdf" class="btn" data-aos="fade-up" Download>Download CV</a> -->

      </div>

      <div class="skills" data-aos="fade-up">

         <h1 class="heading"> <span>Skills</span> </h1>
         
         <div class="progress">
            <div class="bar" data-aos="fade-left">
               <h3><span>HTML</span> <span>60%</span></h3>
            </div>
            <div class="bar" data-aos="fade-right">
               <h3><span>CSS</span> <span>55%</span></h3>
            </div>
            <div class="bar" data-aos="fade-right">
               <h3><span>PHP</span> <span>40%</span></h3>
            </div>
         </div>

      </div>

      <div class="edu-exp">

         <h1 class="heading" data-aos="fade-up"> <span>Education & Experience</span> </h1>

         <div class="row">

            <div class="box-container">

               <h3 class="title" data-aos="fade-right">Education</h3>

               <div class="box" data-aos="fade-right">
                  <span>( 2016 - 2019 )</span>
                  <h3>Nature Sciences - Gjimnazi "Skenderbeu", Kacanik</h3>
                  <p>I've studied for nature sciences in High School.</p>
               </div>

               <div class="box" data-aos="fade-right">
                  <span>( 2019 - Current )</span>
                  <h3>Computer Science And Engineering - UBT Ferizaj</h3>
                  <p>Currently I'm Studying For Computer Science And Engineering At UBT-Ferizaj.</p>
               </div>

               <div class="box" data-aos="fade-right">
                  <span>( 2020 )</span>
                  <h3>Training-FrontEnd/BackEnd - (Xhez-Academy)</h3>
                  <p>I have followed this course for one month ,where we learned about basics of HTML/CSS and PHP/MYSQL.
                     It was a good experience and a good time spent for my future career.
                  </p>
               </div>

            </div>

            <div class="box-container">

               <h3 class="title" data-aos="fade-left">Experience</h3>

               <div class="box" data-aos="fade-left">
                  <span>( 2019 - Current )</span>
                  <h3>Laravel/Html/Css </h3>
                  <h3>Freelancer</h3>
                  <h3>City:Prishtine </h3>
                  <h3>Country:Kosovo </h3>
                  <p>Worked on Erp Program with Laravel,
                     Build some invoice templates with Html and Css.
                  </p>
               </div>

               <div class="box" data-aos="fade-left">
                  <span>( 01/06/2021 – 01/11/2021 )</span>
                  <h3>OUTKOS -Back-End Intern </h3>
                  <h3>City:Prishtine </h3>
                  <h3>Country:Kosovo </h3>
                  <p>Worked with Laravel/Lumen projects,
                     Api documentations ,
                     Endpoints & Testing routes(Postman),
                     Building Database and
                     Design Database,
                     FileServer project
                  </p>
               </div>



            </div>

         </div>

      </div>

   </section>

   <!-- about section ends -->


   <!-- contact section starts  -->

   <section class="contact" id="contact">

      <h1 class="heading" data-aos="fade-up"> <span>Contact me</span> </h1>
      <form action="" method="post">
         <div class="flex">
            <input data-aos="fade-right" type="text" name="name" placeholder="Enter your name" class="box" required>
            <input data-aos="fade-left" type="email" name="email" placeholder="Enter your email" class="box" required>
         </div>
         <input data-aos="fade-up" type="number" min="0" name="number" placeholder="Enter your number" class="box"
            required>
         <textarea data-aos="fade-up" name="message" class="box" required placeholder="Enter your message" cols="30"
            rows="10"></textarea>
         <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
      </form>

      <div class="box-container">

         <div class="box" data-aos="zoom-in">
            <i class="fas fa-phone"></i>
            <h3>Phone</h3>
            <p>+383-558-670</p>
         </div>

         <div class="box" data-aos="zoom-in">
            <i class="fas fa-envelope"></i>
            <h3>Email</h3>
            <p>mprovoliu@gmail.com</p>
         </div>

         <div class="box" data-aos="zoom-in">
            <i class="fas fa-map-marker-alt"></i>
            <h3>Address</h3>
            <p>Kacanik, Kosovo - 71000</p>
         </div>

      </div>

   </section>

   <!-- contact section ends -->

   <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Mejdi Provolija</span> </div>












   <!-- custom js file link  -->
   <script src="js/script.js"></script>

   <!-- aos js link  -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

   <script>
      AOS.init({
         duration: 800,
         delay: 300
      });
   </script>

</body>

</html>