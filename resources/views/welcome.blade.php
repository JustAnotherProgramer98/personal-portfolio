<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  

  <!-- Put your site title here -->
  <title>{{config('app.name')}}  | SSr Developer from Tucuman, Argentina</title>

  <meta name="description" content="Add small description of yourslef.">
  <!-- Add some coding keywords below, Ex: (React, CSS etc) -->
  <meta name="keywords" content="Put your name, skills and some coding keywords" />

  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

  <!-- ***** Header ***** -->

  <header class="header" role="banner" id="top">
    
      <nav class="nav" role="navigation">
        <ul class="nav__items">
          <li class="nav__item"><a href="#projects" class="nav__link">Projects I have worked on</a></li>
          <li class="nav__item"><a href="#skills" class="nav__link">Hard & Soft Skills</a></li>
          <li class="nav__item"><a href="#about" class="nav__link">About Me</a></li>
          <li class="nav__item"><a href="#contact" class="nav__link">Contact Me</a></li>
        </ul>
      </nav>
    
    <div class="header__text-box row">
      <div class="header__text">
        <h1 class="heading-primary">
          <!-- Replace the following name with your name -->
          <span>Evangelista Santiago</span>
        </h1>
        <!-- Put a small paragraph about yourself -->
        <div id="text-change"></div>
        <a href="#projects" class="btn btn--pink">Begin the tour</a>
      </div>
    </div>
  </header>

  <main role="main">

    <!-- ***** Work ***** -->

    <section class="work" id="projects">
      <div class="row">
        <h2>Projects I have worked on</h2>
        <div class="work__boxes">

          <!-- Each div with the work__box class is a project. -->

          <div class="work__box">
            <div class="work__text">
              <h3>Doquina</h3>
              <h5>Medical Care Solutions</h5>
              <p>Doquina is a platform that connects patients with doctors as well as with pharmacies</p>
              <p>Technologies applied:</p>
              <ul class="work__list">
                <li>HTML</li>
                <li>Bootstrap</li>
                <li>JavaScript</li>
                <li>Jquery</li>
              </ul>

              <div class="work__links">
                <a href="http://doquina.com/" target="_blank" class="link__text">
                  Visit Site <span>&rarr;</span>
                </a>
              </div>
            </div>
            <div class="work__image-box">
              <img src="{{asset('assets/doquina-preview.png')}}" alt="">
            </div>
          </div>

          <div class="work__box">
            <div class="work__text">
              <h3>Verde Valle</h3>
              <p>Verde Valle is a distributor of the best harvests of rice, bean, seeds and ingredients from Mexico to the world</p>
              <ul class="work__list">
                <li>React</li>
                <li>Next.js</li>
                <li>Node</li>
                <li>MongoDB</li>
              </ul>

              <div class="work__links">
                <a href="#" class="link__text">Visit Site <span>&rarr;</span></a>
              </div>
            </div>
            <div class="work__image-box">
              <img src="{{asset('assets/verde-valle-preview.png')}}" alt="">
            </div>
          </div>

          <div class="work__box">
            <div class="work__text">
              <h3>Yeah!</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod,
                eius.
              </p>
              <ul class="work__list">
                <li>React</li>
                <li>Next.js</li>
                <li>Node</li>
                <li>MongoDB</li>
              </ul>

              <div class="work__links">
                <a href="https://www.verdevalle.com" target="_blank" class="link__text">
                  Visit Site <span>&rarr;</span>
                </a>
                <a href="#">
                  {{-- <img src="./images/github.svg" class="work__code" title="View Source Code" alt="GitHub"> --}}
                </a>
              </div>
            </div>
            <div class="work__image-box">
              <img src="{{asset('assets/yeah-preview.png')}}" alt="">
            </div>
          </div>
          <div class="work__box">
            <div class="work__text">
              <h3>VolksWagen -Colombia</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod,eius.</p>
              <ul class="work__list">
                <li>React</li>
                <li>Next.js</li>
                <li>Node</li>
                <li>MongoDB</li>
              </ul>

              <div class="work__links">
                <a href="https://www.verdevalle.com" target="_blank" class="link__text">
                  Visit Site <span>&rarr;</span>
                </a>
                <a href="#">
                  {{-- <img src="./images/github.svg" class="work__code" title="View Source Code" alt="GitHub"> --}}
                </a>
              </div>
            </div>
            <div class="work__image-box">
              <img src="{{asset('assets/volkswagen-preview.png')}}" alt="">
            </div>
          </div>
                    <div class="work__box">
            <div class="work__text">
              <h3>Agip</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod,eius.</p>
              <ul class="work__list">
                <li>React</li>
                <li>Next.js</li>
                <li>Node</li>
                <li>MongoDB</li>
              </ul>

              <div class="work__links">
                <a href="https://www.verdevalle.com" target="_blank" class="link__text">
                  Visit Site <span>&rarr;</span>
                </a>
                <a href="#">
                  {{-- <img src="./images/github.svg" class="work__code" title="View Source Code" alt="GitHub"> --}}
                </a>
              </div>
            </div>
            <div class="work__image-box">
              <img src="{{asset('assets/agip-preview.png')}}" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ***** Clients ***** -->

    <section class="client" id="skills">
      <div class="row">
        <h2>Hard & Soft Skills</h2>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="rectangle">
          <div class="content" style="display: flex;justify-content: space-between;width: 100%;">
          <ul class="left-list">
            <li>Teamwork</li>
            <li>Adaptability</li>
            <li>Creativity</li>
            <li>Conflict resolution</li>
            <li>Communication</li>
            <li>Leadership</li>
            <li>Time management</li>
          </ul>
          <ul class="right-list">
            <li>HTML5</li>
            <li>Laravel Framework</li>
            <li>Css</li>
            <li>Tailwind & Bootstrap</li>
            <li>Flutter & Dart</li>
            <li>Javascript  </li>
            <li>Knowledge and use of Git</li>
            <li>Vue.Js</li>
            <li>Agile strategies</li>
            <li>Scrum</li>
            <li>Linux</li>
          </ul>
          <div id="blue-square">
            <p>Hard Skills</p>
          </div>
        </div>
        </div>
      </div>
    </section>

    <!-- ***** About ***** -->

    <section class="about" id="about">
      <div class="row">
        <h2>About Me</h2>
        <div class="about__content">
          <div class="about__text">
            <!-- Replace the below paragraph with info about yourself -->
            <p>
            Im a Full Stack Developer with 3 years of experience in the field, I have worked with different technologies such
            as MySQL, PHP, Laravel, Bootstrap, HTML, CSS, JavaScript, Jquery, Git, Github, Bitbucket, Jira,Trello,Figma, Dart, Flutter and others.
            <br>My profesonal goal is improve my skills by being part of a group where I will always be learning and getting 
            the opportunity to upgrade my abilities taking part of new projects and using the latest technologies requested on the market
            </p>
            <!-- Provide a link to your resume -->
            <a href="#" class="btn">My Resume</a>
          </div>

          <div class="about__photo-container">
            <!-- Add a nice photo of yourself -->
            {{-- <img class="about__photo" src="./images/syed-ali-hussnain.jpg" alt="" /> --}}
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- ***** Contact ***** -->

  <section class="contact" id="contact">
    <div class="row">
      <h2>Get in Touch</h2>
      <form class="form-wrapper">
        <div class="form-card">
          <label class="form-label" for="full_name"><i class="fa-solid fa-user"></i>Full Name </label>
          <input class="form-input" type="text" name="full_name" required="required"/>
        </div>

        <div class="form-card">
          <label class="form-label" for="email"><i class="fa-solid fa-envelope" aria-hidden="true"></i> Email </label>
          <input class="form-input" type="email" name="email" required="required"/>
        </div>

        <div class="form-card">
          <label class="form-label" for="phone_number"><i class="fa-solid fa-phone"></i>Phone number</label>
          <input class="form-input" type="number" name="phone_number"required="required"/>
        </div>

        <div class="btn-wrap">
          <button> Submit </button>
        </div>
      </form>
    </div>
  </section>

  <!-- ***** Footer ***** -->

  <footer role="contentinfo" class="footer">
    <div class="row">
      <p>My Social Media</p>
      <!-- Update the links to point to your accounts -->
      <ul class="footer__social-links">
        <li class="footer__social-link-item">
          <a href="https://twitter.com/nisarhassan12/" title="Instagram Profile">
            <i class="fa-brands fa-instagram"></i>
          </a>
        </li>
        <li class="footer__social-link-item">
          <a href="https://github.com/nisarhassan12/" title="Link to Github Profile">
            <i class="fa-brands fa-github"></i>
          </a>
        </li>
        <li class="footer__social-link-item">
          <a href=https://www.linkedin.com/in/nisar-hassan-naqvi-413466199/">
            <i class="fa-brands fa-linkedin"></i>
          </a>
        </li>
      </ul>
      <p>{{Carbon\Carbon::now()->year}} - Template  developed by <a href="https://github.com/JustAnotherProgramer98" class="link">Santiago Evangelista</a></p>
    </div>
  </footer>

  <a href="#top" class="back-to-top" title="Back to Top">
    <i class="fas fa-arrow-alt-circle-up"></i>
  </a>
</body>

</html>