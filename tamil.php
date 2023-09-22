<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tamil Language Learning</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
       
   body {
     background-image: url('https://wallpaperset.com/w/full/e/9/8/31136.jpg');
     background-repeat: no-repeat;
     background-attachment: fixed;
     background-size: cover;
   }

        .video-container {
            position: relative;
            padding-bottom: 56.25%; 
            height: 0;
            overflow: hidden;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .notes{
         text-align: right;
        }
    </style>
</head>
<body>
<?php include 'components/user_header.php'; ?>
   <!-- <header class="header">
   
        <section class="flex">
     
           <a href="home.html" class="logo">Happy Learning</a>
     
           <form action="search.html" method="post" class="search-form">
              <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
              <button type="submit" class="fas fa-search"></button>
           </form>
     
           <div class="icons">
              <div id="menu-btn" class="fas fa-bars"></div>
              <div id="search-btn" class="fas fa-search"></div>
              <div id="user-btn" class="fas fa-user"></div>
              <div id="toggle-btn" class="fas fa-sun"></div>
           </div>
     
           <div class="profile">
              <img src="images/pic-1.jpg" class="image" alt="">
              <h3 class="name">Dev</h3>
              <p class="role">Student</p>
              <a href="profile.html" class="btn">View Profile</a>
              <div class="flex-btn">
                 <a href="login.html" class="option-btn">Login</a>
                 <a href="register.html" class="option-btn">Register</a>
              </div>
           </div>
     
        </section>
     
     </header>   
     
     <div class="side-bar">
     
        <div id="close-btn">
           <i class="fas fa-times"></i>
        </div>
     
        <div class="profile">
           <img src="images/pic-1.jpg" class="image" alt="">
           <h3 class="name">Dev</h3>
           <p class="role">Student</p>
           <a href="profile.html" class="btn">View Profile</a>
        </div>
     
        <nav class="navbar">
           <a href="home.html"><i class="fas fa-home"></i><span>Home</span></a>
           <a href="about.html"><i class="fas fa-question"></i><span>About</span></a>
           <a href="courses.html"><i class="fas fa-graduation-cap"></i><span>Courses</span></a>
           <a href="teachers.html"><i class="fas fa-chalkboard-user"></i><span>Teachers</span></a>
           <a href="contact.html"><i class="fas fa-headset"></i><span>Contact Us</span></a>
        </nav>
     
     </div>-->
    <header>
        <center><h1 style="color:black;font-size:30px;">"தமிழ்மொழி கற்றல்"</h1>
        <p style="color:black;font-size:25px;">தமிழ் மொழியை கற்க அடிப்படை பாடத்திற்கு வரவேற்கிறோம்</p></center>
    </header>
    <section class="courses">

        <h1 class="heading">our courses</h1>
        <div class="notes">
     
      <a href="text/index.html" class="inline-btn" style>Pronounce words</a></div><br>
        <div class="box-container">
     
           <div class="box">
              <div class="tutor">
                 <div class="info">
                    <h3>Tamil Letters</h3>
                 </div>
              </div>
              <div class="thumb">
                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/VG0GhHB3IgI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
            
            <a href="numbergerman.html" class="inline-btn">Take Test</a>
            <a href="notes.html" class="inline-btn" style>Take Notes</a>
         </div>
         <div class="box">
            <div class="tutor">
               <div class="info">
                  <h3>Numbers and Counting</h3>
                  
               </div>
            </div>
            <div class="thumb">
              <div class="video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/ZE3wrY98qv8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
             </div>
          </div>
          
          <a href="" class="inline-btn">Take Test</a>
          <a href="notes.html" class="inline-btn" style>Take Notes</a>
       </div>
       <div class="box">
        <div class="tutor">
           <div class="info">
              <h3>Words and Relationships</h3>
              
           </div>
        </div>
        <div class="thumb">
          <div class="video-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/wH1DFa3r3ZI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
      </div>
      
      <a href="numbergerman.html" class="inline-btn">Take Test</a>
      <a href="notes.html" class="inline-btn" style>Take Notes</a>
   </div>
   <div class="box">
   <div class="tutor">
    <div class="info">
       <h3>Family Relatives</h3>
       
    </div>
 </div>
 <div class="thumb">
   <div class="video-container">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/fQlhsf0QX4o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

 </div>
</div>

<a href="" class="inline-btn">Take Test</a>
<a href="notes.html" class="inline-btn" style>Take Notes</a>
</div>
<div class="box">
    <div class="tutor">
       <div class="info">
          <h3>Colors</h3>
       </div>
    </div>
    <div class="thumb">
      <div class="video-container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/IwNiUR7Ccgg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
     </div>
  </div>
  
  <a href="" class="inline-btn">Take Test</a>
  <a href="notes.html" class="inline-btn" style>Take Notes</a>
</div>
<div class="box">
    <div class="tutor">
       <div class="info">
          <h3>Days of the week</h3>
       </div>
    </div>
    <div class="thumb">
      <div class="video-container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Xc2_ecrHET8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
  </div>
  
  <a href="" class="inline-btn">Take Test</a>
</div>
<div class="box">
    <div class="tutor">
       <div class="info">
          <h3>Months of the year</h3>
       </div>
    </div>
    <div class="thumb">
      <div class="video-container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/gwsIKutJmLA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
  </div>
  
  <a href="" class="inline-btn">Take Test</a>
</div>
<div class="box">
    <div class="tutor">
       <div class="info">
          <h3>Food and Beverages</h3>
       </div>
    </div>
    <div class="thumb">
      <div class="video-container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/4sgzRSXXp8E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
  </div>
  
  <a href="" class="inline-btn">Take Test</a>
</div>
<div class="box">
    <div class="tutor">
       <div class="info">
          <h3>Clothes or parts of clothes</h3>
       </div>
    </div>
    <div class="thumb">
      <div class="video-container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/H5-FUtVE8x4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>       
    </div>
  </div>
  
  <a href="" class="inline-btn">Take Test</a>
</div>
<div class="box">
    <div class="tutor">
       <div class="info">
          <h3>Basic Sentences</h3>
       </div>
    </div>
    <div class="thumb">
      <div class="video-container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Wu7rNXVO_PY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
  </div>
  
  <a href="" class="inline-btn">Take Test</a>
</div>
<div class="notes" style="align:left";>
     
      <a href="wordguess/index.html" class="inline-btn" >Take Game</a></div><br>
    

    </section>
    <?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>
