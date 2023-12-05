<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Portofolio</title>

    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" >
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/unicons.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="css/tooplate-style.css">
    <style>
		body{
			font-family: 'Poppins', sans-serif !important;
		}
	</style>
<!--

Tooplate 2115 Marvel

https://www.tooplate.com/view/2115-marvel

-->
  </head>
  <body>

    <!-- MENU -->
    <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.html"><i class='uil uil-user'></i> Huda Muhammad </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link"><span data-hover="Home">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link"><span data-hover="about me">About Me</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#service" class="nav-link"><span data-hover="service">Services</span></a>
                    </li>
                    <li class="nav-item">
                      <a href="#portfolio" class="nav-link"><span data-hover="portfolio">Portfolio</span></a>
                   </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link"><span data-hover="contact">Contact</span></a>
                    </li>
                    <li class="nav-item">
                      <a href="{{route('logout')}}" class="nav-link"><span data-hover="Log Out">Log Out</span></a>
                    </li>
                  
                </ul>

                <ul class="navbar-nav ml-lg-auto">
                    <div class="ml-lg-4">
                      <div class="color-mode d-lg-flex justify-content-center align-items-center">
                        <i class="color-mode-icon"></i>
                        Color mode
                      </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ABOUT -->
    <section class="home" id="home">
      <div class="home-text">
        <div class="slide">
          <span class="one">Hello</span>
          <span class="two">I'm</span>
        </div>
        <h1>Huda Muhammad Nur</h1>
        <h3>UI/UX<span>Designer.</span></h3>
        <p>
          I am a passionate UI/UX designer dedicated to creating visually appealing and user-friendly designs. With a keen eye for detail and a strong understanding of design principles, I strive to deliver the best user experience. I believe in the power of design to make a positive impact and bring ideas to life. Let's work together to create something amazing!
        </p>
        <div class="button">
          <a href="#" class="btn">Say Hello</a>
        </div>
      </div>
    </section>

    <!-- PROJECTS -->
    <section class="about" id="about">
      <div class="about-img">
        <img src="images\img2.jpeg" alt="" />
      </div>

      <div class="about-text">
        <h2>About<span>Me</span></h2>
        <h4>Creative UI/UX Designer!</h4>
        <p>
          I am a creative UI/UX designer with a passion for crafting intuitive and visually appealing designs. I believe in the power of design to solve problems and enhance user experiences. Through my work, I strive to create designs that not only look great but also deliver seamless interactions and engaging user interfaces. Let's bring your ideas to life with thoughtful design!</p>
        <a href="https://drive.google.com/file/d/1Ab80TZ4I7jHrYkFi0QXuIL6G6jLdUCXw/view?usp=sharing" class="btn2">
          <span><i class="bx bx-play"></i></span>Watch About Me!</a>
      </div>
    </section>

    <!-- FEATURES -->
    <section class="service" id="service">
      <div class="main-text">
        <p>What I'm Expert in</p>
        <h2><span>My</span> Services</h2>
      </div>

      <div class="services-content">
        <div class="box">
          <div class="s-icons">
            <i class="bx bx-mobile-alt"></i>
          </div>
          <h3>Web/App Designer</h3>
          <p>
            As a web/app designer, I specialize in creating stunning and user-friendly interfaces for websites and mobile applications. I combine my design skills with a deep understanding of user behavior to deliver exceptional digital experiences.
          </p>
        </div>

        <div class="box">
          <div class="s-icons">
            <i class="bx bx-edit-alt"></i>
          </div>
          <h3>Creative Design</h3>
          <p>
            Creativity is at the core of my design process. I love pushing the boundaries and exploring new ideas to create unique and memorable designs. Whether it's branding, illustrations, or visual storytelling, I strive to bring creativity to every project.
          </p>
        </div>

        <div class="box">
          <div class="s-icons">
            <i class="bx bx-code-alt"></i>
          </div>
          <h3>Expert Programmer</h3>
          <p>
            In addition to my design skills, I am also an expert programmer. I have a strong background in coding and can bring designs to life with clean and efficient code. I am proficient in various programming languages and always stay up to date with the latest technologies.
          </p>
        </div>
      </div>
    </section>

    <!-- PORTFOLIO SECTION DESIGN -->
    <section class="portfolio" id="portfolio">
      <div class="main-text">
        <p>Portfolio</p>
        <h2><span>Latest</span> Services</h2>
      </div>

      <div class="portfolio-content">
        <div class="row">
          <img
            src="images\img3.png"
            alt="portfolio1" class="imgPortfo" 
          />
          <div class="layer">
            <h5>Visual Design</h5>
            <p>
              Check out my latest visual design project.
            </p>
            <a  class="imgPortfoClick" data-value="3"><i class="bx bx-link-external"></i></a>
          </div>
        </div>

        <div class="row">
          <img
            src="images\img4.png"
            alt="portfolio2" class="imgPortfo" 
          />
          <div class="layer">
            <h5>Visual Design</h5>
            <p>
              Check out my latest visual design project.
            </p>
            <a  class="imgPortfoClick" data-value="4"><i class="bx bx-link-external"></i></a>
          </div>
        </div>

        <div class="row">
          <img
            src="images\img5.png"
            alt="portfolio3" class="imgPortfo" 
          />
          <div class="layer">
            <h5>Visual Design</h5>
            <p>
              Check out my latest visual design project.
            </p>
            <a  class="imgPortfoClick" data-value="5"><i class="bx bx-link-external"></i></a>
          </div>
        </div>

        <div class="row">
          <img
            src="images\img6.png"
            alt="portfolio4" class="imgPortfo" 
          />
          <div class="layer">
            <h5>Visual Design</h5>
            <p>
              Check out my latest visual design project.
            </p>
            <a  class="imgPortfoClick" data-value="6"><i class="bx bx-link-external"></i></a>
          </div>
        </div>

        <div class="row">
          <img
            src="images\img7.png"
            alt="portfolio5" class="imgPortfo" 
          />
          <div class="layer">
            <h5>Visual Design</h5>
            <p>
              Check out my latest visual design project.
            </p>
            <a  class="imgPortfoClick" data-value="7"><i class="bx bx-link-external"></i></a>
          </div>
        </div>

        <div class="row">
          <img
            src="images\img8.png"
            alt="portfolio6" class="imgPortfo" 
          />
          <div class="layer">
            <h5>Visual Design</h5>
            <p>
              Check out my latest visual design project.
            </p>
            <a  class="imgPortfoClick" data-value="8"><i class="bx bx-link-external"></i></a>
          </div>
        </div>
      </div>
    </section>

    <!-- CONTACT -->
    <section class="contact" id="contact">
      <div class="contact-text">
        <h2>Contact <span>Me!</span></h2>
        <h4>If You have any Project in Your mind!</h4>
        <p>
          I would love to hear from you! If you have any project in mind or need any assistance, please don't hesitate to reach out to me.
        </p>
        <div class="list">
          <li><a href="#">085156338314</a></li>
          <li><a href="#">hudamnur21@gmail.com</a></li>
          <li><a href="#">Please treat me some coffee</a></li>
        </div>

        <div class="contact-icons">
          <a href="https://instagram.com/hudaaaamn?igshid=MzNlNGNkZWQ4Mg=="><i class="bx bxl-facebook"></i></a>
          <a href="https://instagram.com/hudaaaamn?igshid=MzNlNGNkZWQ4Mg=="><i class="bx bxl-twitter"></i></a>
          <a href="https://instagram.com/hudaaaamn?igshid=MzNlNGNkZWQ4Mg=="><i class="bx bxl-instagram"></i></a>
          <a href="https://instagram.com/hudaaaamn?igshid=MzNlNGNkZWQ4Mg=="><i class="bx bxl-youtube"></i></a>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
     <footer class="footer py-5">
          <div class="container">
               <div class="row">

                    <div class="col-lg-12 col-12">                                
                        <p class="copyright-text text-center">Copyright &copy; by huddd All Rights Reserved.</p>
                    </div>
                    
               </div>
          </div>
     </footer>

     <script src="{{ asset('/js/main.js') }}"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Headroom.js"></script>
    <script src="js/jQuery.headroom.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>