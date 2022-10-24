<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" href="css/contact.css">
  </head>
  <body>

    <?php require('navbar2.php'); ?>
    <div class="row contact">
       <div class="col-12">
         <h2 class="contact-title">Get in Touch</h2>
       </div>
       <div class="col-lg-8">
         <form class="form-contact contact_form" action="" method="post" id="contactForm" >
           <div class="row">
             <div class="col-12">
               <div class="form-group">

                   <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"  placeholder = 'Enter Message'></textarea>
               </div>
             </div>
             <div class="col-sm-6">
               <div class="form-group">
                 <input class="form-control" name="name" id="name" type="text"  placeholder = 'Enter your name'>
               </div>
             </div>
             <div class="col-sm-6">
               <div class="form-group">
                 <input class="form-control" name="email" id="email" type="email"  placeholder = 'Enter email address'>
               </div>
             </div>
             <div class="col-12">
               <div class="form-group">
                 <input class="form-control" name="subject" id="subject" type="text"  placeholder = 'Enter Subject'>
               </div>
             </div>
           </div>
           <div class="form-group mt-3" >
            <input class="sub" type="submit" name="submit" value="Submit">
           </div>
         </form>
       </div>
       <div class="col-lg-4">
         <div class="media contact-info">
           <span class="contact-info__icon"><i class="fas fa-home fa-3x"></i></span>
           <div class="media-body">
             <h3>Savar,Dhaka</h3>
             <p>CA 91770</p>
           </div>
         </div>
         <div class="media contact-info">
           <span class="contact-info__icon"><i class="fas fa-phone-square fa-3x"></i></span>
           <div class="media-body">
             <h3>01709216382</h3>
             <p>Mon to Fri 9am to 6pm</p>
           </div>
         </div>
         <div class="media contact-info">
           <span class="contact-info__icon"><i class="fas fa-envelope fa-3x"></i></span>
           <div class="media-body">
             <h3>munnycse46@gmail.com</h3>
             <p>Send us your query anytime!</p>
           </div>
         </div>
       </div>
     </div>
     <?php
     if(isset($_REQUEST['submit'])){
       $to="munnycse46@gmail.com";
       $eSubject=$_POST['subject'];
       $eMessage=$_POST['message'];

       $headers = 'From: ' . $_POST["name"] . '<' . $_POST["email"] . '>' . "\r\n" .
           'Reply-To: ' . $_POST["email"] ;

       if($_POST["name"]=="" || $_POST["email"]=="" || $eSubject=="" || $eMessage=="")
       {
         echo " <div class=\"alert alert-danger text-center\">
          *Fill up all the information
         </div>";

       }
       else{
         $send=mail($to,$eSubject,$eMessage,$headers);
         if($send)
         {
           echo " <div class=\"alert alert-success text-center\">
            Mail sends successfully
           </div>";
         }
         else{
           echo " <div class=\"alert alert-warning text-center\">
            Mail does not send
           </div>";
         }
       }
     }

     ?>

     <p>
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d98175.33478455419!2d90.20423107840939!3d23.873205710896304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755ebd3d6df9569%3A0x277b3819d4da3e91!2sSavar%20Union!5e0!3m2!1sen!2sbd!4v1603720117100!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
     </p>
     <br> <br> <br> <br> <br> <br>

     <?php require('footer.php'); ?>

   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  </body>
</html>
