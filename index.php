<?php include 'sendEmail.php'; 
      include 'config.php';
?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="assets/css/main.css">
    <title>Aquarium</title>
</head>
<body>

    <header>
      <!-- <div class="switch-btn">
        <a href=""></a>
      </div> -->


      <div class="switch-btn position-relative">
          <div class="lang">
          <?php 
                  if($_SESSION['lang'] === 'en'){
                    echo '<a  class="a-lang " href="index.php?lang=ar">',$lang['ar'],'<img style="width: 40px;height:40px" src="images/drapeau/arabie-saoudite.png"> </a>'; 
                  }else if($_SESSION['lang'] === 'ar'){
                    echo '<a  class="a-lang" href="index.php?lang=en">',$lang['en'],'<img style="width: 40px;height:40px;margin-left:5px" src="images/drapeau/royaume-uni.png"></a>';
                  }
                    ?>
          </div>
                  
                  
        </div>
          
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" >
            <source src="./images/video/VID_20220322_123634.mp4" type="video/mp4">
        </video>
        
        

        


        <div class="container  mt-5 naav">
            <nav class="navbar navbar-expand-lg navbar-light " style="z-index: 999;">
                <button class="navbar-toggler  " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php"><?php echo $lang['home_nav']; ?>  <span class="sr-only">(current)</span></a>
                    </li>
                   
                    <li class="nav-item">
                      <a class="nav-link" href="#album"> <?php echo $lang['album_nav']; ?> </a>
                    </li>
                    
                    <li class="nav-item">
                      <a class="nav-link " href="page1.php"><?php echo $lang['page1']; ?> </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#abous-us"> <?php echo $lang['about-us_nav']; ?>   </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#footer">  <?php echo $lang['contact-us_nav']; ?> </a>
                    </li>
                  
                  </ul>
                </div>
              </nav>
        </div>
          <!--  switch from languages -->
            



        <div id="par-header" class="d-flex  align-items-center justify-content-start container">
          <div class="col-lg-8">
            <h1><?php echo $lang['h1_header']; ?></h1>
            <h1 class="h1-head"> <?php echo $lang['h12_header']; ?></h1>
            <h1 class="h1-head"><?php echo $lang['h13_header']; ?></h1>
          </div>
        </div>

    </header>

    <nav class="social">
      <ul>
        <li><a target="_blank" href="https://twitter.com/AquariumRestau?t=LpkFJ9p6D8SA58_S6mEr5A&s=07">Twitter <i style="color: #1DA1F2" class="fab fa-twitter twitGlow"></i></a></li>
        <li><a target="_blank" href="https://www.facebook.com/restaurant.aqua.fish">Facebook <i style="color: #4267B2" class="fab fa-facebook fasGlow"></i></a></li>
        <li><a target="_blank" href="https://www.instagram.com/restaurant.aqua.project">Instagram<i  class="fab fa-instagram instGlow fa-2x"></i></a></li>
      </ul>
    </nav>

    <div  id="main">
      <i id="myTopBtn" title="Go To Top" class="fas fa-chevron-circle-up fa-3x"></i>
      <section id="section-1" class=" container">
          <div class="row">
            <div class="col-lg-5 col-xs-12">
              <p class="js-scroll fade-in-bottom lead mt-5"> <?php echo $lang['sec1_p']; ?> </p>
              <h1  class="js-scroll slide-left" > <?php echo $lang['sec1_h1']; ?> </h1>
            </div>
            <div class=" col-lg-7 col-sm-12">
              <article class="js-scroll slide-right shadow-lg art-1">
              </article>
              <article class="js-scroll slide-right shadow-lg art-2">
              </article>
              
              <img class="bg-right" src="images/section-1/image4.png" alt=""> 
  
            </div>
          </div>
        <img class="bg-all"  src="images/section-1/bground2.png" alt="">
      </section>

      <!-- slide -->
      <section id="slide-1" class="slide-1" >
        <div id="carouselExampleFade" class="carousel slide carousel-fade"  data-ride="carousel" data-interval="2000">
          <div class="carousel-inner">
          <div class="carousel-item ">
              <img src="images/img/slider3.jpg" class="d-block img-fluid w-100" alt="...">
            </div>
            <div class="carousel-item ">
              <img src="images/img/slider.jpg" class="d-block img-fluid w-100" alt="...">
            </div>
            <div class="carousel-item ">
              <img src="images/img/slider5.jpg" class="d-block img-fluid w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/img/slider1.jpg" class="d-block img-fluid w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/img/slider2.jpg" class="d-block img-fluid w-100" alt="...">
            </div>
            <div class="carousel-item active">
              <img src="images/img/0d1542e931bbb6522b42417d089ef97a.jpg" class="d-block img-fluid w-100" alt="...">
            </div>
            
          </div>
          <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </button>
        </div>
      </section>


      <!-- about-us -->
      <section id="abous-us" class="about-us">
        <div class="our-qualities">
          <div class="container">
            <div class="row ">
              <div class="col-md-6 d-none d-md-block " style="margin-bottom: 1px;">
                <div style="height: 50%;" class="row">
                  <div class="col-md-6  p-0" >
                    <img style="height:400px;margin-bottom:1px;" class="js-scroll fade-in-bottom w-100 shadow-lg rounded img-thumbnail" src="images/img/about-us1.jpg"   alt="image">
                  </div>
                  </div>
                  <div class="row d-xs-none">
                    <div class="col-md-6 offset-md-6 p-0">
                    <img style="height:400px;margin-top:1px;" class="js-scroll fade-in-bottom w-100 shadow-lg rounded img-thumbnail"  src="images/img/about-us.jpg"  alt="image">
                    </div>
                  </div>
                

              </div>
              <div class="col-md-6 col-sm-12 mt-2">
                <div class="content">
                  <h2><?php echo $lang['about_h2']; ?> </h2>
                  <h1><?php echo $lang['about_h1']; ?> </h1>
                  <p class=""><?php echo $lang['about_p']; ?> </p>
                  <ul  class=" list-unstyled two-columns">
                    <li><img  src="./images/about-us/certification.png" alt="image" style="padding-right:18px" ><span><?php echo $lang['proffesional']; ?> </span></li>	
                    <li><img  src="./images/about-us/passionate.png" alt="image"><span><?php echo $lang['passionate']; ?> </span></li>
                    <li><img  src="./images/about-us/handshake.png" alt="image"><span><?php echo $lang['welcoming']; ?> </span></li>
                    <li><img  src="./images/about-us/badge.png" alt="image" style="padding-right:18px"><span><?php echo $lang['Qualified']; ?> </span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      
      </section>


      <!-- some phto -->
      <section id="somePhoto" class="some-photo">
        <div class="bgim"></div>
          <div class="container-fluid">
            <div class="row">
              <div class="left-zone  col-lg-5 col-sm-12">
                <div class="js-scroll fade-in title ">
                <h3><?php echo $lang['some_h31']; ?> </h3>
                <h3><?php echo $lang['some_h32']; ?> </h3>
                </div>
                  <a  class="aa-1" href="#contact us"><?php echo $lang['contact_h1']; ?> </a>
              </div>

              <div class=" img-group d-flex  col-lg-7 col-sm-12  ">
                <img class=" js-scroll slide-right img-1"   src="images/img/somephotointerrisant.jpg" alt="some photo">
                <img class="js-scroll slide-right img-2"   src="images/img/some-photo.jpg" alt="some photo">
                <img class="js-scroll fade-in img-3"  src="images/img/somephoto1.jpg" alt="some photo">
                <img class="js-scroll fade-in img-4" src="images/img/somephoto2.jpg" alt="some photo">
                <img class="js-scroll fade-in img-5" src="images/img/somephoto3.jpg" alt="some photo">
              </div>
            </div>
          </div>
      
      </section>

      <div class="new-p container">
        <div class="row">
          <div class="col-xs-12">
            <p class="lead text-center"><?php echo $lang['new-p'] ?></p>
          </div>
        </div>
      </div>


      <!-- album -->
      <!-- <div id="album" class=" arrow-direc mb-5">
        <h1 class="js-scroll slide-left" ><?php echo $lang['album']; ?> </h1>
        <img class="js-scroll fade-in-bottom d-flex mx-auto" style="width: 50px; height: 80px; display: block;" src="./images/album/curve-down-arrow.png" alt="" >
      </div> -->
      <section class="gallery" id="gallery">
       
        <div class="gallery-item">
          <div class="js-scroll fade-in content"><img src="images/img/02379fee4fe0568b270f09f2b61f5d10.jpg" alt=""></div>
        </div>
        <div class="gallery-item">
          <div class="js-scroll fade-in content"><img src="images/img/070edd09d12f8ab0a1776fe1e78251c4.jpg" alt=""></div>
        </div>
        <div class="gallery-item">
          <div class="js-scroll fade-in content"><img src="images/img/db6467669b8b5f6c30cd049fdbe08807.jpg" alt=""></div>
        </div>
        <div class="gallery-item">
          <div class="js-scroll fade-in content"><img src="images/img/0b9c550b30688ba0758f24a3dd40295f.jpg" alt=""></div>
        </div>
        <div class="gallery-item">
          <div class="js-scroll fade-in content"><img src="images/img/0d97f86b36c05f3e48c1b4038a6af182.jpg" alt=""></div>
        </div>

        <div class="gallery-item">
          <div class="js-scroll fade-in content"><img src="images/img/6e22e3fb5625697414ae00fd1f21f88f.jpg" alt=""></div>
        </div>
        <div class="gallery-item">
          <div class="js-scroll fade-in content"><img src="images/img/248fc4172e49c4e289d4d00c050c3506.jpg" alt=""></div>
        </div>
        <div class="gallery-item">
          <div class="js-scroll fade-in content"><img src="images/img/a8eb941c54f770eac3b8d53fb4b37a15.jpg" alt=""></div>
        </div>
        <div class="gallery-item">
          <div class="js-scroll fade-in content"><img src="images/img/7147af9f44eaec5720028bc38b77a1ff.jpg" alt=""></div>
        </div>
        <div class="gallery-item">
          <div class="js-scroll fade-in content"><img src="images/img/2ca78e8e78343b462ce23e8b2d9fa709.jpg" alt=""></div>
        </div>
        <div class="gallery-item">
          <div class="js-scroll fade-in content"><img src="images/img/443228ffbaeec4df9fd87ae56e79a64e.jpg" alt=""></div>
        </div>
        <div class="gallery-item">
          <div class="js-scroll fade-in content"><img src="images/img/45220d11564f88c22558c8c9b370762c.jpg" alt=""></div>
        </div>
        <div class="gallery-item">
          <div class="js-scroll fade-in content"><img src="images/img/487091be977c589395d54c0f7b2aab84.jpg" alt=""></div>
        </div>
        <div class="gallery-item">
          <div class="js-scroll fade-in content"><img src="images/img/4a5984ab82ef8bc9851b4a2d93558cfc.jpg" alt=""></div>
        </div>
        <div class="gallery-item">
          <div class="js-scroll fade-in content"><img src="images/img/4b7895396c7537e38e06b8f083d0dcaa.jpg" alt=""></div>
        </div>
        <div class="gallery-item">
          <div class="js-scroll fade-in content"><img src="images/img/4e8d159b4e878ed287dc748f21925ff6.jpg" alt=""></div>
        </div>
        <div class="gallery-item">
          <div class="js-scroll fade-in content"><img src="images/img/55bd3fb2c771eadac294ffa926a51d05.jpg" alt=""></div>
        </div>
        <div class="gallery-item">
          <div class="js-scroll fade-in content"><img src="images/img/707832c9830468292bc84aa5d575b094.jpg" alt=""></div>
        </div>
        <div class="gallery-item">
          <div class="js-scroll fade-in content"><img src="images/img/fff046e01f632d4b3a779b8bdb55d5e3.jpg" alt=""></div>
        </div>
        <div class="gallery-item">
          <div class="js-scroll fade-in content"><img src="images/img/5e056d28aa79ce40af679d9f5ed1d51d.jpg" alt=""></div>
        </div>
        <!-- <div class="gallery-item">
          <div class="js-scroll fade-in content"><img src="images/img/67acb611d9e97705f4ce4dfe33e15804.jpg" alt=""></div>
        </div> -->
        <!-- <div class="gallery-item">
          <div class="js-scroll fade-in content"><img src="images/img/6bfa7899fc19c1e0720abcc43b96fbae.jpg" alt=""></div>
        </div> -->
      </section>

     <!-- ----------------------------contact us--------------------------------------- -->

     <footer class="mt-5" id="footer"  >
      <section id="lien7" class="container align-self-center ">
        <div class="container text-center">
          <h1 style="color: #ffffff; margin-bottom:10px "><?php echo $lang['contact_h1']; ?></h1>

          <form style="position: relative;z-index:999" method="post" action="">
          <div class="form-row">
            <div class="form-group col-md-6 col-sm-12">
            <input type="text" class="coordonnees form-control" name=" name" placeholder="<?php echo $lang['contact_name']; ?>" >
            </div>
            <div class="form-group col-md-6">
            <input type="text" class="coordonnees form-control" name="lastName"  placeholder="<?php echo $lang['contact_lastName']; ?>" >
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6 col-sm-12">
            <input type="text" class="coordonnees form-control" name="phone"  placeholder="<?php echo $lang['contact_phone']; ?>" >
            </div>
            <div class="form-group col-md-6 col-sm-12">
            <input type="email" class="coordonnees form-control" name="email" placeholder="<?php echo $lang['contact_email']; ?> "  >
            </div>
          </div>
          <div class="form-group">
            <textarea  class="message  form-control " name="message" id="" placeholder="<?php echo $lang['contact_message']; ?>" cols="30" rows="7"  required></textarea>  
          </div>
          <button type="submit"  name="submit" styel="border:1px solid #e6eef6;padding:8px; background-color:#e6eef6 "><?php echo $lang['contact_send']; ?></button>
          <!-- text-transform: none;
    border: 1px solid #e6eef6;
    padding: 5px 50px;
    background-color: #e6eef6;
    opacity: 0.8;
    border-radius: 15px;
    font-size: 23px; -->
          </form>
          <?php if($alert ==='send'){ 
           echo "
           <script language='javascript'>
           window.alert('hello word');
           </script>"; }?>
        </div>
        <div class="">
            <div class="container">
              <div class="row">
                <div class="col-lg-4 col-xs-12 ">
                    <h2 class="d-flex justify-content-center" style="color: #ffffff;"><?php echo $lang['contact_info']; ?></h2> 
                  <!-- affichage width < md -->
                  <div class="for-ul d-flex justify-content-center">
                  <ul class="contact list-unstyled  " style="color: #dae0ec">
                        <li style="padding-right:70px" ><i style="height: 20px; width: 20px;font-size: 15px; padding-left:0;padding-right:20px" class="fas fa-location-arrow d-inline "></i><span  class=" d-inline"><?php echo $lang['contact_location']; ?></span> </li>
                        <li ><i style="height: 20px; width: 20px;font-size: 15px;padding-right:35px" class="fas fa-envelope " ></i><span class=" d-inline">aqua@gmail.com</span></li>
                        <li style="padding-right:16px" ><i style="height: 20px; width: 20px;font-size: 15px;padding-right:32px" class="fas fa-phone-alt " ></i><span  class=" d-inline">+216 56171685</span></li>
                      </ul>
                  </div>
                  
                </div>
                <div class="d-flex justify-content-center col-lg-4 col-sm-12 ">
                  <img class="d-flex align-items-center" src="" alt="Logo">
                </div>
                <div class="col-lg-4 col-sm-12 " >
                <h2 class="d-flex justify-content-center" style="color: #ffffff;"><?php echo $lang['contact_social']; ?></h2>
                <div class="for-ul2 d-flex justify-content-center">
                <ul class="list-unstyled d-inline-flex   "  >
                  <li class="mr-2" ><a href="#" ><i style="color: #dee1db;margin-right: 10px;" class="fab fa-twitter fa-2x"></i></a></li>
                  <li class="mr-2"><a href="#" ><i style="color: #dee1db;margin-right: 10px;" class="fab fa-facebook fa-2x"></i></a></li>
                  <li ><a href="#" ><i  class="fab fa-instagram fa-2x"></i></a></li>
                </ul>
                </div>
                
                </div>
              </div>
            </div>
        </div>
      </section>
    </footer>

    
      </div>
 

<script src="assets/js/main.js" ></script>
<script src="jquery.scroll-reveal.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>
