<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- boostrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <title>resume</title>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="slick-theme.css">
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="0" class="scrollspy-example" tabindex="0">
  <!-- header -->
  <header class="top">
<img src="img/LOGO.png" alt="" width="5px">
    <!-- 導覽列 -->
<nav id="navbar" class="navbar navbar-expand-md navbar-light fixed-top fw-bolder">





  <div class="container">

    <a class="navbar-brand" href="#">JENWEN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#Nav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="Nav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <!-- fafw ->fix width -->
          <a class="nav-link active" href="#about"><i class="fas fa-fw fa-bed me-2"></i>ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#mySkills"><i class="fas fa-fw fa-dumbbell me-2"></i>SKILLS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#portfolioWEB"><i class="fas fa-fw fa-utensils me-2"></i>PORTFOLIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#time"><i class="fas fa-fw fa-map-marker-alt me-2"></i>TIMELINE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact"><i class="fas fa-fw fa-envelope me-2"></i>CONTACT</a>
        </li>
      </ul>
    </div>

         <!-- Button trigger modal -->
 <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</button>
 <!-- <button onclick="window.location.href='backend/login.php'">LOGIN</button> -->



  </div>
</nav>

 <!-- Modal -->
<form action="?" method="post" id="form">
 <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">WELCOME</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <div class="form-floating mb-3">
          <!-- <input type="text" class="form-control" id="floatingInput" placeholder="Account"> -->
          <!-- <label  for="floatingInput">Account</label> -->
          <input onfocus="this.value=''" type="text" name="acc" id="acc" onclick="hide()">
          <div id="error1"></div>
        </div>
        <div class="form-floating">
          <!-- <input type="password" class="form-control" id="floatingPassword" placeholder="Password"> -->
          <!-- <label for="floatingPassword">Password</label> -->
          <input type="password" name="pw" id="pw" onclick="hide()">
          <div id="error2"></div>
        </div>
      </div>
      <div class="modal-footer">
        <!-- <button id="close" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
        <button id="close" type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="reset()">Close</button>
        <!-- <input type="submit" class="btn btn-primary" value="Login"></button> -->
        <input type="button" onclick="login()" value="登入">
      </div>
    </div>
  </div>
</div>
</form>

    <!-- maintitle -->
    <div class="container">
      <h1 class="maintitle" style="margin-top: 13rem;">LIVE A LIV​E</h1>
      <h1 class="maintitle fw-light" id="textchange">POSITIVELY</h1>
      <h1 class="maintitle d-flex" style="margin-bottom: 13rem;"><div class="d-inline-flex">TO</div><div class="">&nbspYOU​RSELF</div></h1>
      

      <!-- breif intro -->
      <div class="boxcover" id="about">
        <div class="whitebox"></div>
        <div class="name">
          <img src="img/ginger.png" alt="">
          <p class="text-center" style="margin-bottom: -15px;">JENWEN</p>
          <p class="text-center fs-4">WEB DEVELOPER</p>
        </div>

        <div class="intro">
          <div class="card-body">
            <h5 class="card-title fw-bolder fs-2 txwhite" style="margin: 1em auto;">INTRODUCTION</h5>
            <p class="card-text lh-lg fw-bold fs-6 mb-5 txwhite">HELLO Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <button type="button" class="btn btn-light mb-4 fw-bolder">CONTACT ME</button>
          </div>
        </div>
      </div>

    </div>
  </header>

  <!-- my skills -->
  <div class="skills  py-5" id="mySkills">
    <div class="container">
      <div class="text-center pt-5" data-aos="fade-down"
      data-aos-easing="linear"
      data-aos-duration="1500"><img src="img/drip.png" height="120px"></div>
      <h1 class="text-center skilltitle mt-3 mb-5">MY SKILLS</h1>
      
      <!-- 卡片 -->
      <section class=" d-flex flex-wrap">
          <!-- WEB DEV. -->
          <div class= " text-center col-lg-3 col-md-6 col-sm-12 px-3">
            <div class="card-body skillcard">    
                <img src="img/global.svg" class="svg my-5" alt="" >
  
              <h5 class="card-title">WEB DEVELOPE</h5>
              <p class="card-text fst-italic text-muted mb-5">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="link-dark -5">MORE</a>
            </div>
        </div>

          <!-- ENGLISH -->
          <div class= " text-center col-lg-3 col-md-6 col-sm-12 px-3">
            <div class="card-body skillcard skillcard2">
          
                <img src="img/loud-speaker.svg" class="svg my-5" alt="" >
  
              <h5 class="card-title">ENGLISH</h5>
              <p class="card-text fst-italic text-muted mb-5">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="link-dark -5">MORE</a>
            </div>
        </div>

          <!-- GRAPHIC DESIGN -->
          <div class= " text-center col-lg-3 col-md-6 col-sm-12 px-3">
            <div class="card-body skillcard">    
                <img src="img/diamond.svg" class="svg my-5" alt="" >
  
              <h5 class="card-title">GRPHIC DESIGN</h5>
              <p class="card-text fst-italic text-muted mb-5">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="link-dark -5">MORE</a>
            </div>
        </div>
          <!-- MARKETING -->
          <div class= " text-center col-lg-3 col-md-6 col-sm-12 px-3 ">
            <div class="card-body skillcard skillcard2">
          
                <img src="img/lightbulb.svg" class="svg my-5" alt="" >
  
              <h5 class="card-title">MARKETING</h5>
              <p class="card-text fst-italic text-muted mb-5">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="link-dark -5">MORE</a>
            </div>
        </div>
  
      <div class="inspace">
      <div class="row py-5 g-3">
        <h2 class="col-lg-6 col-12 skilltitle fs-1">I advise organizations in value creation strategies</h2>
        <p class="col-lg-6 col-12 lh-lg">Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      </div>
      </div>
      </section>
    </div>
  </div>
  
  <!-- web dev -->
  <div class="english" id="web" style="margin-top: -20px;">
    <section class="container">
      <div class="inkE ink2"><img  data-aos="zoom-in" data-aos-delay="500" data-aos-duration="2000" src="img/ink-1.png"></div>
      <div class="contentS">
        <h1 class="col-lg-6 col-12">WEB DEVELOPE</h1>
        <div class="row justify-content-center">
          <p class="col-lg-5 col-10 text-end mt-5 fs-2 fw-bolder">
            PHP<br>
            JAVASCRIPT<br>
            MYSQL<br>
          </p>
          <section class="col-lg-7 col-10">
            <p class="paraS p-5">Dignissim suspendisse in est ante in nibh mauris. Varius quam quisque id diam vel quam elementum pulvinar etiam. Nunc pulvinar sapien et ligula ullamcorper malesuada proin. Nunc mattis enim ut tellus elementum sagittis vitae et leo.</p>
          </section>
        </div>
      </div>
    </section>
  </div>
  <!-- 分頁介紹 -->
<div style="background-color: #f5f7fa; margin-top: -10px;" id="portfolioWEB">
<section  class="container py-5" >
  <header  class="text-center" >
    <h2 class="p-5" style="color: rgb(255, 255, 255); padding-top: 70px;text-shadow: 2px 2px 4px rgb(0 0 0 / 35%);">WEB DEVELOPE PORTFOILO</h2>
    <div class="nav nav-tabs flex-nowrap justify-content-around" id="nav-tab" role="tablist" >
        <button class="nav-link active"  data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="nav-home" aria-selected="true">ALL</button>
        <button class="nav-link"  data-bs-toggle="tab" data-bs-target="#back" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">後端</button>
        <button class="nav-link"  data-bs-toggle="tab" data-bs-target="#front" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">前端</button>
    </div>
  </header>
  <div class="tab-content py-5" id="nav-tabContent" style="background-color: white;" >
    <!-- all 前後端-->
    <div class=" tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="nav-home-tab">
        <p class="text-muted text-center">包含前端及後端</p>
              <!-- 卡片row -->
              <div class=" row container">
                <!-- card1 -->
                  <a href="#"  class="col-md-6 col-lg-4 mb-4">
                  <div class="card">
                    <img src="https://fakeimg.pl/300x200" class="card-img-top">
                    <div class="card-body">
                      <h5>EXAMPLE</h5>
                      <p class="card-text">title<small class="text-muted float-end">PHP</small></p>
                    </div>
                  </div>
                </a>
                <!-- card2 -->
                <a href="#"  class="col-md-6 col-lg-4 mb-4">
                  <div class="card">
                    <img src="https://fakeimg.pl/300x200" class="card-img-top">
                    <div class="card-body">
                      <h5>EXAMPLE</h5>
                      <p class="card-text">title<small class="text-muted float-end">PHP</small></p>
                    </div>
                  </div>
                </a>
                <!-- card3 -->
                <a href="#"  class="col-md-6 col-lg-4 mb-4">
                  <div class="card">
                    <img src="https://fakeimg.pl/300x200" class="card-img-top">
                    <div class="card-body">
                      <h5>EXAMPLE</h5>
                      <p class="card-text">title<small class="text-muted float-end">PHP</small></p>
                    </div>
                  </div>
                </a>
                <!-- card4 -->
                <a href="#"  class="col-md-6 col-lg-4 mb-4">
                  <div class="card">
                    <img src="https://fakeimg.pl/300x200" class="card-img-top">
                    <div class="card-body">
                      <h5>EXAMPLE</h5>
                      <p class="card-text">title<small class="text-muted float-end">PHP</small></p>
                    </div>
                  </div>
                </a>
                <!-- card5 -->
                <a href="#"  class="col-md-6 col-lg-4 mb-4">
                  <div class="card">
                    <img src="https://fakeimg.pl/300x200" class="card-img-top">
                    <div class="card-body">
                      <h5>EXAMPLE</h5>
                      <p class="card-text">title<small class="text-muted float-end">PHP</small></p>
                    </div>
                  </div>
                </a>

              </div>
    </div>

    <!-- back -->
    <div class="tab-pane fade" id="back" role="tabpanel" aria-labelledby="nav-profile-tab">
      <p class="text-muted text-center">運用PHP、SQL</p>
            <!-- 卡片row -->
            <div class="row container">
              <!-- card1 -->
              <a href="#"  class="col-md-6 col-lg-4 mb-4">
                <div class="card">
                  <img src="https://fakeimg.pl/300x200" class="card-img-top">
                  <div class="card-body">
                    <h5>EXAMPLE</h5>
                    <p class="card-text">title<small class="text-muted float-end">PHP</small></p>
                  </div>
                </div>
              </a>
              <!-- card2 -->
              <a href="#"  class="col-md-6 col-lg-4 mb-4">
                <div class="card">
                  <img src="https://fakeimg.pl/300x200" class="card-img-top">
                  <div class="card-body">
                    <h5>EXAMPLE</h5>
                    <p class="card-text">title<small class="text-muted float-end">PHP</small></p>
                  </div>
                </div>
              </a>
            </div>
    </div>
    <!-- front -->
    <div class="tab-pane fade" id="front" role="tabpanel" aria-labelledby="nav-profile-tab">
      <p class="text-muted text-center">運用CSS、JAVASCRIPT</p>
            <!-- 卡片row -->
            <div class="row container">
              <!-- card1 -->
              <a href="#"  class="col-md-6 col-lg-4 mb-4">
                <div class="card">
                  <img src="https://fakeimg.pl/300x200" class="card-img-top">
                  <div class="card-body">
                    <h5>EXAMPLE</h5>
                    <p class="card-text">title<small class="text-muted float-end">PHP</small></p>
                  </div>
                </div>
              </a>
              <!-- card2 -->
              <a href="#"  class="col-md-6 col-lg-4 mb-4">
                <div class="card">
                  <img src="https://fakeimg.pl/300x200" class="card-img-top">
                  <div class="card-body">
                    <h5>EXAMPLE</h5>
                    <p class="card-text">title<small class="text-muted float-end">PHP</small></p>
                  </div>
                </div>
              </a>
              <!-- card3 -->
              <a href="#"  class="col-md-6 col-lg-4 mb-4">
                <div class="card">
                  <img src="https://fakeimg.pl/300x200" class="card-img-top">
                  <div class="card-body">
                    <h5>EXAMPLE</h5>
                    <p class="card-text">title<small class="text-muted float-end">PHP</small></p>
                  </div>
                </div>
              </a>
            </div>
    </div>
    
  </div>
</section>
</div>
  <!-- graphic design -->
  <div id="design">
    <section class="container">
      <div class="inkE ink" ><img data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="2000" src="img/ink-2.png" alt=""></div>
      <div class="contentS">
        <h1>GRAPHIC<br>DESIGN</h1>
        <div class="row justify-content-center">
          <p class="col-lg-5 col-10 text-end mt-5 fs-2 fw-bolder">
            POHTOSHOP<br>
            ILLUSTRATOR<br>
            VIDEO EDITING<br>
          </p>
          <section class="col-lg-7 col-10">
            <p class="paraS p-5">Dignissim suspendisse in est ante in nibh mauris. Varius quam quisque id diam vel quam elementum pulvinar etiam. Nunc pulvinar sapien et ligula ullamcorper malesuada proin. Nunc mattis enim ut tellus elementum sagittis vitae et leo.</p>
          </section>
        </div>
      </div>
    </section>
  </div>
<!-- design portfolio -->
<!-- slick套件 -->
<div id="dportfolio" style="padding: 50px 0;">
  <h1 class="text-center fw-bolder fs-2" style="color: rgb(255, 255, 255); padding-top: 70px;text-shadow: 2px 2px 4px rgb(0 0 0 / 35%);">GRAPHIC DESIGN PORTFOLIO</h1>
  <ul class="responsive" style="width: 80vw; left: 8vw; padding:50px 0;">
    <li><img src="portfolio/01.jpg" width="250px"></li>
    <li><img src="portfolio/02.jpg" width="250px"></li>
    <li><img src="portfolio/03.jpg" width="250px"></li>
    <li><img src="portfolio/04.jpg" width="250px"></li>
    <li><img src="portfolio/04.jpg" width="250px"></li>
  </ul>
</div>
  <!-- english -->
  <div class="english" style="margin-top: -20px;">
    <section class="container">
      <div class="inkE ink"><img  data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="2000" src="img/ink-4.png" alt=""></div>
      <div class="contentS">
        <h1 class="col-lg-6 col-12">ENGLISH</h1>
        <div class="row justify-content-center">
          <p class="col-lg-5 col-10 text-end mt-5 fs-2 fw-bolder">
            TOIEC 835<br>
            INTERNATIONAL TRADE<br>
            US CUSTOMER SERVICE<br>
          </p>
          <section class="col-lg-7 col-10">
            <p class="paraS p-5">Dignissim suspendisse in est ante in nibh mauris. Varius quam quisque id diam vel quam elementum pulvinar etiam. Nunc pulvinar sapien et ligula ullamcorper malesuada proin. Nunc mattis enim ut tellus elementum sagittis vitae et leo.</p>
          </section>
        </div>
      </div>
    </section>
  </div>
  <!-- marketing -->
  <div class="english" style="margin-top: -20px; background-color: #fffcfa;">
    <section class="container">
      <div class="inkE ink"><img  data-aos="zoom-in" data-aos-delay="1200" data-aos-duration="2000" src="img/ink-3.png" alt=""></div>
      <div class="contentS">
        <h1 class="col-lg-6 col-12">MARKETING</h1>
        <div class="row justify-content-center">
          <p class="col-lg-5 col-10 text-end mt-5 fs-2 fw-bolder">
            E-COMMERCE<br>
            PROPOSAL<br>
            SEO<br>
          </p>
          <section class="col-lg-7 col-10">
            <p class="paraS p-5">Dignissim suspendisse in est ante in nibh mauris. Varius quam quisque id diam vel quam elementum pulvinar etiam. Nunc pulvinar sapien et ligula ullamcorper malesuada proin. Nunc mattis enim ut tellus elementum sagittis vitae et leo.</p>
          </section>
        </div>
      </div>
    </section>
  </div>
  <!-- timeline -->
  <section class=" parallax" style="overflow: hidden;">

    <img class="  parallaxLayer"   style="position:absolute; z-index: -999; width: 100%; height: 800px;"  data-depth="0.7"  src="img/timebg.jpg" alt="">

  <div  class="time" id="time">
    <div class="m row"> TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE TIMELINE</div>
    <div class="row justify-content-center mb-4 parallaxLayer">
      <div class="col-md-2 col-10 align-self-center"><p class="skilltitle text-center fs-1 fw-bolder ">2021</p><p class="text-center">泰山職訓中心</p></div>
      <article class="col-md-4 col-10 whitebox2 p-4">Recruitment Agency that strives to help businesses put together a staff of highly efficient and skilled professionals, and also serve employees by opening up new vistas of job opportunities for them.</article>
    </div>

    <div class="row justify-content-center mb-4" >
      <div class="col-md-2 col-10 align-self-center"><p class="skilltitle text-center fs-1 fw-bolder ">2021</p><p class="text-center">泰山職訓中心</p></div>
      <article class="col-md-4 col-10 whitebox2 p-4">Recruitment Agency that strives to help businesses put together a staff of highly efficient and skilled professionals, and also serve employees by opening up new vistas of job opportunities for them.</article>
    </div>

    <div class="row justify-content-center mb-4" >
      <div class="col-md-2 col-10 align-self-center"><p class="skilltitle text-center fs-1 fw-bolder ">2021</p><p class="text-center">泰山職訓中心</p></div>
      <article class="col-md-4 col-10 whitebox2 p-4">Recruitment Agency that strives to help businesses put together a staff of highly efficient and skilled professionals, and also serve employees by opening up new vistas of job opportunities for them.</article>
    </div>

    <div class="row justify-content-center mb-4" >
      <div class="col-md-2 col-10 align-self-center"><p class="skilltitle text-center fs-1 fw-bolder ">2021</p><p class="text-center">泰山職訓中心</p></div>
      <article class="col-md-4 col-10 whitebox2 p-4">Recruitment Agency that strives to help businesses put together a staff of highly efficient and skilled professionals, and also serve employees by opening up new vistas of job opportunities for them.</article>
    </div>
    <div class="row justify-content-center mb-5" >
      <div class="col-md-2 col-10 align-self-center"><p class="skilltitle text-center fs-1 fw-bolder ">2021</p><p class="text-center">泰山職訓中心</p></div>
      <article class="col-md-4 col-10 whitebox2 p-4">Recruitment Agency that strives to help businesses put together a staff of highly efficient and skilled professionals, and also serve employees by opening up new vistas of job opportunities for them.</article>
    </div>


  </div>
</section>
  <!-- contact -->
  <div class="contact" id="contact">
    <div class="contactimg" style="overflow: hidden;">
      <img src="img\contact1.png" alt="">
    </div>
    <div class="contactpara row justify-content-center mt-3" >
      <div class=" p-5 col-md-4 col-10  order-md-2 contactbox2 "  style="box-shadow: 5px 5px 20px 0 rgb(0 0 0 / 40%);">
        <p class="contactme text-end fw-bold">CONTACT</p>
        <p class="contactme text-end fw-bold">ME</p>
      </div>

      <div class="p-5 col-md-4 col-10   order-md-1 " style="background-color: white;box-shadow: 5px 5px 20px 0 rgb(0 0 0 / 40%);">
        <p class="fw-bolder mb-0">PHONE NUMBER</p>
        <p> ​886 1234567888</p>
        <p class="fw-bolder mb-0">LOCATION</p>
        <p>TPE</p>
      </div>
    </div>
    </div>

  <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  <!-- AOS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <!-- slick -->
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  
  <script src="js.js"></script>
  <script>
    $('.responsive').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,

  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
      }
    },
    {
      breakpoint: 800,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      }
    },
    {
      breakpoint: 680,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,

      }
    }
  ]
});


// 登入
function login(){
  let acc=$("#acc").val();
  let pw=$("#pw").val();
  $.get("api/chk_acc.php",{acc},(res)=>{
    if(res!=1){
      console.log(res);
            $('#error1').html('<p style="color:red;font-weight:bolder">&nbsp*帳號錯誤</p>');
        }else{
            $.get('api/chk_pw.php',{acc,pw},(chk)=>{
                if(chk!=1){
                    // alert('密碼錯誤')
                    $('#error2').html('<p style="color:red;font-weight:bolder">&nbsp*密碼錯誤</p>');
                }else{

                    if(acc=='admin'){
                        location.href="backend.php";
                    }else{
                        location.href="index.php";
                    }
                }
            })
        }
    })
}

function hide(){
  $('#error1').html('')
  $('#error2').html('')
}

function reset(){
  $('#form').reset()
}


  </script>

</body>
</html>