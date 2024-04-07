<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      

      <div class="content">
         <h3>Why choose us?</h3>
         <p>Discover Why Bookan Stands Out:

•	Diverse Selection
•	Quality Assurance
•	Seamless Shopping
•	Swift Delivery
•	Personalized Service
•	Competitive Pricing
•	Community Connection

Experience the difference with us. Happy reading!</p>
        <a href="contact.php" class="btn">Contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Absolutely love this book website! The selection is incredible, and the prices are unbeatable. My orders always arrive quickly and in perfect condition. Highly recommend!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Arjun patel</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Such a convenient platform for book lovers! I've discovered so many new authors and titles here. Plus, the customer service is top-notch. They're always helpful and responsive</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Priya Desai</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Happy with the unique selection and fast delivery. Surely I'll be using this website again. Customer Service is very supportive and responsive. Loved the simplicity </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Raj Kapoor</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>I'm a frequent shopper on this site, and I've never been disappointed. The interface is intuitive, making it easy to find what I'm looking for. Plus, the discounts and promotions are a nice bonus.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Aisha Khan</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>Received a damaged book in my last order, but customer service quickly resolved the issue and sent a replacement. Appreciate their dedication to customer satisfaction.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Vikram Sharma</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>Love the community aspect of this website! The forums and book clubs provide a great space for connecting with fellow readers and sharing recommendations.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Nisha Gupta</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-1.jpg" alt="">
         <div class="share">
            <a href="https://www.facebook.com" class="fab fa-facebook-f"></a>
            <a href="https://www.twitter.com" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com" class="fab fa-linkedin"></a>
         </div>
         <h3>Ankiet Singh</h3>
      </div>

      <div class="box">
         <img src="images/author-2.jpg" alt="">
         <div class="share">
            <a href="https://www.facebook.com" class="fab fa-facebook-f"></a>
            <a href="https://www.twitter.com" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com" class="fab fa-linkedin"></a>
         </div>
         <h3>Purbi rao</h3>
      </div>

      <div class="box">
         <img src="images/author-3.jpg" alt="">
         <div class="share">
            <a href="https://www.facebook.com" class="fab fa-facebook-f"></a>
            <a href="https://www.twitter.com" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com" class="fab fa-linkedin"></a>
         </div>
         <h3>Hima khan</h3>
      </div>

      <div class="box">
         <img src="images/author-4.jpg" alt="">
         <div class="share">
            <a href="https://www.facebook.com" class="fab fa-facebook-f"></a>
            <a href="https://www.twitter.com" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com" class="fab fa-linkedin"></a>
         </div>
         <h3>Souvik Dey</h3>
      </div>

      <div class="box">
         <img src="images/author-5.jpg" alt="">
         <div class="share">
            <a href="https://www.facebook.com" class="fab fa-facebook-f"></a>
            <a href="https://www.twitter.com" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com" class="fab fa-linkedin"></a>
         </div>
         <h3>Tina das</h3>
      </div>

      <div class="box">
         <img src="images/author-6.jpg" alt="">
         <div class="share">
            <a href="https://www.facebook.com" class="fab fa-facebook-f"></a>
            <a href="https://www.twitter.com" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com" class="fab fa-linkedin"></a>
         </div>
         <h3>Arun Jha</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>