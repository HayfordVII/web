<?php
    include_once 'header.php';
?>

<link rel="stylesheet" href="css/intern.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">


<section class="hero" id="home">

</section>

    <section class="services " id="services" >
        <div class="max-width">
            <h2 class="title">GRAPHIC DESIGN</h2>
        </div>
    </section>


    <!-- FOR EMPLOYERS -->
    <section class="container">
        <div class="intern-section">
            <div class="profile-box mt-3">
                <img src="imgs/me.jpg"  alt="" class="profile-pic ">
                <h3><?=$_SESSION['name']?></h3>
                <p><?=$_SESSION['course']?> , <?=$_SESSION['location']?>.</p>
                <div class="social-media">
                    <a href="<?=$_SESSION['telegram_link']?>"><i class="bi bi-telegram"></i></a>
                    <a href="<?=$_SESSION['linkedin_link']?>"><i class="bi bi-linkedin"></i></a>
                    <a href="<?=$_SESSION['git_link']?>"><i class="bi bi-github"></i></a>
                </div>
                <button type="button">Download CV</button>
                <div class="profile-bottom">
                    <p>Learn more about my Profile</p>
                    <a href="home.php"><i class="bi bi-arrow-down"></i></a>
                </div>
            </div>
            <div class="profile-box mt-3">
                <img src="imgs/IMG-20220211-WA0008.jpg" height="150px" alt="" class="profile-pic">
                <h3>Bright Hayford</h3>
                <p>Web Developer At Kumasi, Santasi.</p>
                <div class="social-media">
                    <i class="bi bi-telegram"></i>
                    <i class="bi bi-linkedin"></i>
                    <i class="bi bi-github"></i>
                </div>
                <button type="button">Download CV</button>
                <div class="profile-bottom">
                    <p>Learn more about my Profile</p>
                    <i class="bi bi-arrow-down"></i>
                </div>
            </div>
            <div class="profile-box mt-3">
                <img src="imgs/IMG-20220211-WA0008.jpg" height="150px" alt="" class="profile-pic">
                <h3>Bright Hayford</h3>
                <p>Web Developer At Kumasi, Santasi.</p>
                <div class="social-media">
                    <i class="bi bi-telegram"></i>
                    <i class="bi bi-linkedin"></i>
                    <i class="bi bi-github"></i>
                </div>
                <button type="button">Download CV</button>
                <div class="profile-bottom">
                    <p>Learn more about my Profile</p>
                    <i class="bi bi-arrow-down"></i>
                </div>
            </div>
            <div class="profile-box mt-3 ">
                <img src="imgs/IMG-20220211-WA0008.jpg" height="150px" alt="" class="profile-pic">
                <h3>Bright Hayford</h3>
                <p>Web Developer At Kumasi, Santasi.</p>
                <div class="social-media">
                    <i class="bi bi-telegram"></i>
                    <i class="bi bi-linkedin"></i>
                    <i class="bi bi-github"></i>
                </div> 
                <button type="button">Download CV</button>
                <div class="profile-bottom">
                    <p>Learn more about my Profile</p>
                    <i class="bi bi-arrow-down"></i>
                </div>
            </div>
        </div>
    </section>

    
    
    <!-- For Interns -->
    <link rel="stylesheet" href="css/pages.css">
    <section class="services " id="services" >
        <div class="max-width">
            <h2 class="title">GRAPHIC DESIGN</h2>
        </div>
    </section>


    <div class="container">
         <div class="alert alert-primary" role="alert">
            Work at home
          </div>
      
          <div class="alert alert-success" role="alert">
            Must be present there
          </div>
          <div class="alert alert-danger" role="alert">
            Both are allowed
          </div>
    </div>
       
      
    <section id="CyberSection">
        <div class="container mt-5 mb-5">
            <div class="card">
                <div class="row">
                    <div class="col-md-4">
                        <img src="imgs/logo_main.png" class="img-fluid" alt="">
                   </div>
                   <div class="col-md-8">
                       <h2 class="card-title mt-2"><?=$_SESSION['name']?></h2>
                       <h6><?=$_SESSION['location']?></h6>
                       <p><?=$_SESSION['name']?></p>
                       <a href="home.php"><button class="btn-1">Contact Us</button></a>
                    </div>
                </div>
            </div>

            <div class="card mt-5">
                <div class="row">
                    <div class="col-md-4">
                        <img src="imgs/Eitbs.jpg" class="img-fluid" alt="">
                   </div>
                   <div class="col-md-8">
                       <h2 class="card-title mt-2">EITBS LIMITED</h2>
                       <p>EITBS (Enterprise IT Business Solutions) came to life to provide consulting to enterprises with the need to run their private and hybrid clouds whilst driving cost down and maintain agility with the services they offer. For some companies, this means embracing new technologies like virtualization, the use of legacy Storage and Servers to run specific workloads or the entire orchestration of a business service consisting of multiple Applications. We believe IT Divisions should assist enterprise to be innovative, reliable and reasonably priced in the services they offer. They should be able to leverage their data for competitive advantage against their peers. Regardless of where Data resides, it should be possible to process it, run analytics on it, back it up and archive as necessary. We rely on industry proven products to design solutions for your Ecosystem.</p>
                       <button class="btn">Contact Us</button> 
                    </div>
                </div>
            </div>

            <div class="card mt-5">
                <div class="row">
                    <div class="col-md-4">
                        <img src="imgs/lion.jpg" class="img-fluid" alt="">
                   </div>
                   <div class="col-md-8">
                       <h2 class="card-title mt-2">Lion Security Services</h2>
                       <p>Lion Security is a Private Security Company with more than 25 year's experience in the expert provision of Man Guard Services, Close Protection Services (Bodyguard), Electronic Security, Event Security, Private Investigations and Bullion/Cash–in–transit services. The company is licensed by the Ministry of Interior and is a member of the Association of Private Security Organizations of Ghana(APSOG).

                        We currently have a workforce of over One Thousand (1,000) personnel which includes a Rapid Response unit complemented by a well-equipped control room set up to respond to emergencies at client's premises. With our head office in Accra, we have actively extended our operations nationwide.</p>
                       <button class="btn ">Contact Us</button> 
                    </div>
                </div>
            </div>









        </div>
    </section>

        
<!-- footer section -->
<?php
    include_once 'footer.php';
?>    