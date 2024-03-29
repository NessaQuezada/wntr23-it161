<!DOCTYPE html>
<html lang="en">
   <head>
     <title>Shackles Coffee Review</title>
     <meta name="robots" content="noindex,nofollow" >
     <meta name="viewport" content="width=device-width" />
     <meta charset="utf-8" />
     <link rel="stylesheet" href="css/main.css" />
     <link rel="stylesheet" href="css/nav.css" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
   </head>
   <body>
       <header>
        <h1>
        <a href="shacklescoffeereview.com">shacklescoffeereview.com</a>
        </h1>
       <nav class="topnav" id="myTopnav">
        <a href="index.html">Home</a>
        <a href="about.html">About Me</a> 
        <a href="schedule.html">Stream Schedule</a> 
        <a href="videos.html">Videos</a>
        <a href="chat.html">Chat</a>
        <a href="contact.php" class="active">Contact Shackles</a>
       </nav>
       </header>

     <div class="wrapper">


     <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "teaserstudios.mv@gmail.com";  //place your/your client's email address here
        $toName = "Shackles"; //place your client's name here
        $website = "shackles coffee review";  //place NAME of your client's website

       // echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>


        <footer>
            <div class="social-container">
                <div><a href="#" class="fa fa-facebook"></a></div>
                <div><a href="#" class="fa fa-twitter"></a></div>
                <div><a href="#" class="fa fa-youtube"></a></div>
                <div><a href="#" class="fa fa-instagram"></a></div>
            </div>
            
            <p><small>&copy; 2023 by 
                <a href="contact.php">Shackles</a>, All Rights Reserved ~ 
                <a id="html-checker" href="#">Check HTML</a> ~ 
                <a id="css-checker" href="#">Check CSS</a></small>
            </p>   
            <a href="readme.txt">Disclaimer</a> 
        </footer>
     </div>  

     <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
     <script>
    //https://tinyurl.com/dynamic-html-checker
    document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
      
    document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);  
    
    //manages mobile nav 
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
     </script>

   </body>
   </html>