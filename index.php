<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />


  <title>Banking website</title>
  

</head>
<body>
<nav class="navbar"> 
      <div class="navbar-container container">
        <input type="checkbox" >
        <div class="hamburger-lines">
           <span class="line line1"></span>
           <span class="line line2"></span>
           <span class="line line3"></span>
        </div>
        
        <ul class="menu-items">
          
            <li><a href="index.php">Home</a></li>
           <li><a href="transfermoney.php">Customers</a></li>
           <li><a href="transactionhistory.php">History</a></li>
           <li><a href="#contact">Contact us</a></li>
         
        </ul>
         <h1 class="logo">Sparks foundation</h1>
      </div>
    </nav> 

   <header class="site-header">
    <section class="showcase-area" id="showcase" >
    <div class="showcase-container">

    <div class="left">
    <img src="./image/home_bank.jpg" alt="">
    </div>

    <div class="right">
      <h1 class="main-title">Better solution for your transactions</h1>
      <h5>Start transferring your money in very smarter way</h5>
      <a href="transfer.php" class="btn btn-primary">Get started</a>
    </div>

    </div>
    </section>
   </header>
  

    <section id="contact">
      <div class="contact-container container">
         
         <div class="contact-image">
          <img src="./image/contact1.jpg" alt="">
        </div>
      <div class="form-container">
        <h2>Contact Us</h2>
        <input type="text" placeholder="Your name">
        <input type="email" name="" id="" placeholder="Your email">
        <textarea name="" id="" cols="30" rows="10" placeholder="Send message"></textarea>
        <a href="#" class="btn btn-primary">SUBMIT</a>
      </div>
      </div>
    </section>

    <footer id="footer"> 
      <h2> &copy; 2021 THE SPARKS FOUNDATION | DESIGNED BY RUPAL PATIL</h2>
    </footer>

    
    
    <!-- ############ for smooth scrolling ############## -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>

  
</body>
</html>