<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link rel="stylesheet" href="Main.css" />
    <link rel="stylesheet" href="lawyers.css" />
    <link rel="stylesheet" href="pricing.css" />
    <link rel="stylesheet" href="boot.css" />
    <link rel="stylesheet" href="last.css" />
    <link rel="stylesheet" href="resp-nav.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <script>
      $(function () {
        $(".toggle").on("click", function () {
          if ($(".item").hasClass("active")) {
            $(".item").removeClass("active");
          } else {
            $(".item").addClass("active");
          }
        });
      });
    </script>
  </head>
  <body>
    <div class="header">
      <!-- Navbar -->
      <div class="navbar">
        <div class="left-nav"><p>LETSPART</p></div>
        <div class="right-nav">
          <div class="all" id="home"><a href="Main.php">HOME</a></div>
          <div class="all"><a href="#about">ABOUT </a></div>
          <div class="all"><a href="#lawyers">LAWYERS</a></div>
          <div class="all"><a href="#testimonials">TESTIMONIALS</a></div>
          <div class="all"><a href="#contact">CONTACT</a></div>
          <div class="all"><a href="login.php">LOGIN/SIGNUP</a></div>
        </div>
        <div class="hamburger">
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
        </div>
      </div>
      <div class="resp-nav">
        <ul class="menu">
          <li class="resp-logo"><a href="">LETSPART</a></li>
          <li class="item" style="background-color: #222">
            <a href="">HOME</a>
          </li>
          <li class="item" style="background: black"><a href="">ABOUT</a></li>
          <li class="item" style="background: black"><a href="">LAWYERS</a></li>
          <li class="item" style="background: black">
            <a href="">TESTIMONIALS</a>
          </li>
          <li class="item" style="background: black"><a href="">CONTACT</a></li>
          <li class="item" style="background: black">
            <a href="login.php">LOGIN/SIGNUP</a>
          </li>
          <li
            class="toggle"
            style="padding: 20px 25px 20px 25px; border-left: 1px solid #a19c9c"
          >
            <span class="bars"></span>
          </li>
        </ul>
      </div>
      <!-- Carousel -->
      <div class="carousel">
        <div class="carousel-inner">
          <input
            class="carousel-open"
            type="radio"
            id="carousel-1"
            name="carousel"
            aria-hidden="true"
            hidden=""
            checked="checked"
          />
          <div class="carousel-item">
            <img
              src="Backgrounds/5fd930c0d3e37afabef9d090_unsplash_524010c76b52a_1-min.jpg"
            />
            <div class="intro">
              <p id="intro-p1" class="carousel-heading">
                THE BEST FAMILY LAWYERS
              </p>
              <p id="intro-p2" class="carousel-sub-heading">
                WE DO THINGS DIFFERENTLY
              </p>
              <button class="carousel-button">FIND ONE NOW</button>
            </div>
          </div>
          <input
            class="carousel-open"
            type="radio"
            id="carousel-2"
            name="carousel"
            aria-hidden="true"
            hidden=""
          />
          <div class="carousel-item">
            <img
              src="Backgrounds/5fd930c0d3e37afabef9d090_unsplash_524010c76b52a_1-min.jpg"
            />
            <div class="intro">
              <h1 class="carousel-heading">Second Slider</h1>
              <p class="carousel-sub-heading">WE DO THINGS DIFFERENTLY</p>
              <button class="carousel-button">FIND ONE NOW</button>
            </div>
          </div>

          <label
            for="carousel-3"
            class="carousel-control prev control-1"
            id="arrow"
            >‹</label
          >
          <label
            for="carousel-2"
            class="carousel-control next control-1"
            id="arrow"
            >›</label
          >
          <label
            for="carousel-1"
            class="carousel-control prev control-2"
            id="arrow"
            >‹</label
          >
          <label
            for="carousel-3"
            class="carousel-control next control-2"
            id="arrow"
            >›</label
          >

          <ol class="carousel-indicators">
            <li>
              <label for="carousel-1" class="carousel-bullet">•</label>
            </li>
            <li>
              <label for="carousel-2" class="carousel-bullet">•</label>
            </li>
          </ol>
        </div>
      </div>
    </div>
    <!-- First Section -->
    <div class="section1">
      <div class="first" id="eye">
        <div class="inner">
          <img src="Icons/eye.png" alt="" />
          <h5>PERSONALLY VERIFIED</h5>
          <p>
            All lawyers are personally met by us. <br />
            Many times.
          </p>
          <button id="section1-button">VIEW SERVICES</button>
        </div>
      </div>
      <div class="second" id="sun">
        <div class="inner">
          <img src="Icons/eye.png" alt="" />
          <h5>CHOOSE FROM FEW</h5>
          <p>
            We don't have a million lawyers <br />
            In fact, we have fewer than 50.
          </p>
          <button id="section1-button2">VIEW SERVICES</button>
        </div>
      </div>
      <div class="third" id="tv">
        <div class="inner">
          <img src="Icons/eye.png" alt="" />
          <h5>WE UNDERSTAND</h5>
          <p>
            We make sure that you are treated <br />
            with care and respect.
          </p>
          <button id="section1-button3">VIEW SERVICES</button>
        </div>
      </div>
    </div>
    <!-- This is the about section -->
    <div class="about-us" id="about">
      <div class="about-inner">
        <p id="p1">JOIN OUR CAMPAIGN</p>
        <br />
        <h1>WELCOME TO NATURAL</h1>
        <br />
        <p id="p2">
          Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut
          commodo diam libero vitae erat.
        </p>
        <br />
        <p id="p3">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
          varius enim in eros elementum tristique. Duis cursus, mi quis viverra
          ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat.
          Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc
          ut sem vitae risus posuere.
        </p>
        <br />
        <buttton class="promote">PROMOTE NOW</buttton>
      </div>
    </div>
    <!-- This is the lawyer section -->
    <div class="lawyers" id="lawyers">
      <div class="lawyers-heading">
        <p>A SMALL SELECTION OF PERSONALLY</p>
        <br />
        <h1>VERIFIED LAWYERS</h1>
        <div class="lawyers-main">
          <div class="eva">
            <div class="photo1"></div>
            <div class="sub-heading">
              <h3>EVA MORDOC</h3>
              <p>CEO OF COMPANY</p>
            </div>

            <div class="icons">
              <img
                class="small"
                src="Icons/5fd97fa00dbe5676d757e693_facebook-logo (1).png"
                alt=""
              />
              <img
                class="small"
                src="Icons/5fd97fa00dbe56653357e68f_twitter.png"
                alt=""
              />
              <img
                class="small"
                src="Icons/5fd97fa00dbe56349957e697_instagram (1).png"
                alt=""
              />
              <img
                class="small"
                src="Icons/5fd97fa00dbe565cf457e695_behance (1).png"
                alt=""
              />
            </div>
          </div>
          <div class="tommy">
            <div class="photo2"></div>
            <div class="sub-heading">
              <h3>TOMMY MORIO</h3>
              <p>YOLUNTEER</p>
            </div>

            <div class="icons">
              <img
                class="small"
                src="Icons/5fd97fa00dbe5676d757e693_facebook-logo (1).png"
                alt=""
              />
              <img
                class="small"
                src="Icons/5fd97fa00dbe56653357e68f_twitter.png"
                alt=""
              />
              <img
                class="small"
                src="Icons/5fd97fa00dbe56349957e697_instagram (1).png"
                alt=""
              />
              <img
                class="small"
                src="Icons/5fd97fa00dbe565cf457e695_behance (1).png"
                alt=""
              />
            </div>
          </div>
          <div class="maria">
            <div class="photo3"></div>
            <div class="sub-heading">
              <h3>MARIA CHINOTA</h3>
              <p>HR EMPLOYEE</p>
            </div>

            <div class="icons">
              <img
                class="small"
                src="Icons/5fd97fa00dbe5676d757e693_facebook-logo (1).png"
                alt=""
              />
              <img
                class="small"
                src="Icons/5fd97fa00dbe56653357e68f_twitter.png"
                alt=""
              />
              <img
                class="small"
                src="Icons/5fd97fa00dbe56349957e697_instagram (1).png"
                alt=""
              />
              <img
                class="small"
                src="Icons/5fd97fa00dbe565cf457e695_behance (1).png"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
      <buttton class="promote">FIND YOUR LAWYER</buttton>
    </div>
    <!-- This is the pricing and questions section -->
    <div class="lawyers-second">
      <div class="pricing" style="text-align: center; padding-top: 100px">
        <p style="color: #77bb77">WAYS WE WORK</p>
        <h1>OUR PRICING</h1>
      </div>
      <div class="lawyers-second-inner">
        <div class="buy">
          <div class="free-design">
            <div id="free">FREE DESIGN</div>
            <div id="usd">$2,500.00 USD</div>
            <hr id="line" />
          </div>
          <div class="team">
            <p>1 TEAM</p>
            <br />
            <p>1 INSTALLED AGENT</p>
            <br />
            <p>REAL-TIME FEEDBACK</p>
            <br />
            <p>2 ATTACKED TARGETS PER MONTH</p>
            <br />
            <p>AUTOMATED WORKFLOWS</p>
            <br />
            <p>1 DEVELOPER TOOLS</p>
            <br />
            <br />
            <br />
            <hr />
            <br />
            <br />
            <br />
            <button class="cart">ADD TO CART</button>
          </div>
        </div>
        <div class="questions">
          <div class="questions-heading">
            <p id="frequently">FREQUENTLY ASKED QUESTIONS</p>
            <br />
            <p>
              Study hard what interests you the most in the most undisciplined,
              irreverent and original manner possible.
            </p>
            <div class="questions-main">
              <button type="button" class="collapsible">
                DO YOU PROVIDE CUSTOMER SUPPORT?
              </button>
              <div class="content">
                <br />
                <br />
                <p>
                  Don't take too much advice. Most people who have a lot of
                  advice to give - with a few exceptions - generalize whatever
                  they did. Don't over-analyze everything. I myself have been
                  guilty of over-thinking problems. Just build things and find
                  out if they work.
                </p>
                <br />
              </div>
              <button type="button" class="collapsible">
                WHAT IS THE BENEFIT OF MONTHLY PLAN?
              </button>
              <div class="content">
                <br /><br />
                <p>
                  The stars will never align, and the traffic lights of life
                  will never all be green at the same time. The universe doesn’t
                  conspire against you, but it doesn’t go out of its way to line
                  up the pins either. Conditions are never perfect. ‘Someday’ is
                  a disease that will take your dreams to the grave with you.
                  Pro and con lists are just as bad. If it’s important to you
                  and you want to do it ‘eventually,’ just do it and correct
                  course along the way.
                </p>
                <br />
              </div>
              <button type="button" class="collapsible">
                WHAT IS YOUR RETURN POLICY?
              </button>
              <div class="content">
                <br /><br />
                <p>
                  What do you need to start a business? Three simple things:
                  know your product better than anyone, know your customer, and
                  have a burning desire to succeed
                </p>
                <br />
              </div>
              <button type="button" class="collapsible">
                HOW MUCH TRAFFIC CAN THE HOSTING HANDLE?
              </button>
              <div class="content">
                <br /><br />
                <p>
                  Your work is going to fill a large part of your life, and the
                  only way to be truly satisfied is to do what you believe is
                  great work. And the only way to do great work is to love what
                  you do.
                </p>
                <br />
              </div>
              <button type="button" class="collapsible">
                DO YOU HAVE ANY QUESTIONS FOR US?
              </button>
              <div class="content">
                <br /><br />
                <p>
                  The most dangerous poison is the feeling of achievement. The
                  antidote is to every evening think what can be done better
                  tomorrow.
                </p>
                <br />
              </div>
              <button type="button" class="collapsible">
                CAN I USE WEBFLOW IN THIS PLAN?
              </button>
              <div class="content">
                <br /><br />
                <p>
                  The most dangerous poison is the feeling of achievement. The
                  antidote is to every evening think what can be done better
                  tomorrow.
                </p>
                <br />
              </div>
              <button type="button" class="collapsible">
                IS WEBFLOW A GOOD FEAT FOR YOUR CAMPAIGN?
              </button>
              <div class="content">
                <br /><br />
                <p>
                  The most dangerous poison is the feeling of achievement. The
                  antidote is to every evening think what can be done better
                  tomorrow.
                </p>
                <br />
              </div>
            </div>
          </div>
        </div>
      </div>
      <button id="plans">VIEW ALL PLANS</button>
    </div>
    <!-- This is carousel section -->
    <div class="slideshow-container" id="testimonials">
      <div class="mySlides fade">
        <div class="numbertext"></div>
        <div class="text">
          <p>TESTIMONIALS</p>
          <br />

          <h1>WHAT THEY SAY?</h1>
          <br /><br />
          <br />
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
            varius enim in eros elementum tristique. Duis cursus, mi quis
            viverra ornare, eros dolor interdum nulla, ut commodo diam libero
            vitae erat.
          </p>
          <br />
          <h3>GEORGE SANTAYANA</h3>
        </div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext"></div>
        <div class="text">
          <p>TESTIMONIALS</p>
          <h1>WHAT THEY SAY?</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
            varius enim in eros elementum tristique. Duis cursus, mi quis
            viverra ornare, eros dolor interdum nulla, ut commodo diam libero
            vitae erat.
          </p>
          <h3>GERARD HELCING</h3>
        </div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext"></div>
        <div class="text">
          <p>TESTIMONIALS</p>
          <h1>WHAT THEY SAY?</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
            varius enim in eros elementum tristique. Duis cursus, mi quis
            viverra ornare, eros dolor interdum nulla, ut commodo diam libero
            vitae erat.
          </p>
          <h3>BEN TOMASCH</h3>
        </div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext"></div>
        <div class="text">
          <p>TESTIMONIALS</p>
          <h1>WHAT THEY SAY?</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
            varius enim in eros elementum tristique. Duis cursus, mi quis
            viverra ornare, eros dolor interdum nulla, ut commodo diam libero
            vitae erat.
          </p>
          <h3>ROMAN POLANSKI</h3>
        </div>
      </div>

      <a class="prev" onclick="plusSlides(-1)">❮</a>
      <a class="next" onclick="plusSlides(1)">❯</a>

      <div id="dots">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
      </div>
    </div>
    <!-- This is contact section -->
    <div class="contact" id="contact">
      <div class="heading-contact">
        <p>HOW TO FIND US?</p>
        <br />
        <h1>CONTACT US</h1>
      </div>
      <div class="main-contact">
        <div class="main-form">
          <form action="">
            NAME: <br />
            <input type="text" id="name" /> <br />
            EMAIL ADDRESS: <br />
            <input type="email" id="email" /> <br />
            SUBMIT:
            <br />
            <input type="text" name="" id="submit" /> <br />
            MESSAGE:
            <br />
            <textarea name="" id="message" cols="30" rows="10"></textarea>
          </form>
          <button id="submit-message">SUBMIT MESSAGE</button>
        </div>
        <div class="side-info">
          <p
            style="
              font-size: 20px;
              font-weight: bold;
              font-style: italic;
              color: green;
            "
          >
            Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut
            commodo diam libero vitae erat.
          </p>
          <br />
          <br />
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
            varius enim in eros elementum tristique. Duis cursus, mi quis
            viverra ornare, eros dolor interdum nulla, ut commodo diam libero
            vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem
            imperdiet. Nunc ut sem vitae risus tristique posuere.
          </p>
          <br />
          <br />
          <h4>OUT ADDRESS</h4>
          <br />
          <p>
            Some city, another street 12/345 <br />
            One more city, Some street 12/345
          </p>
          <br />
          <h4>PHONE & EMAIL</h4>
          <br />
          <p>
            Call us please: 065 123 456 789 <br />
            066 123 456 789 <br />
            supportteam@gmail.com <br />
            supportteam@yhaoo.com
          </p>
        </div>
      </div>
    </div>
    <!-- This is footer section -->
    <div class="footer">
      <div class="footer-heading">
        <button id="last-button">LETS PART</button>
        <hr id="line" />
      </div>
      <div class="footer-footer">
        <div class="footer-start">
          <p>POWERED BY <a href="">LETSPART</a></p>
        </div>
        <div class="icons">
          <img
            class="small"
            src="Icons/5fd97fa00dbe5676d757e693_facebook-logo (1).png"
            alt=""
          />
          <img
            class="small"
            src="Icons/5fd97fa00dbe56653357e68f_twitter.png"
            alt=""
          />
          <img
            class="small"
            src="Icons/5fd97fa00dbe56349957e697_instagram (1).png"
            alt=""
          />
          <img
            class="small"
            src="Icons/5fd97fa00dbe565cf457e695_behance (1).png"
            alt=""
          />
        </div>
        <div class="end">
          <a href="">TERMS OF USE </a>
          <a href="">PRIVACY POLICY </a>
          <a href="">ABOUT US</a>
        </div>
      </div>
    </div>

    <script>
      let slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides((slideIndex += n));
      }

      function currentSlide(n) {
        showSlides((slideIndex = n));
      }

      function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
          slideIndex = 1;
        }
        if (n < 1) {
          slideIndex = slides.length;
        }
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
      }
    </script>
    <script>
      var coll = document.getElementsByClassName("collapsible");
      var j;

      for (j = 0; j < coll.length; j++) {
        coll[j].addEventListener("click", function () {
          this.classList.toggle("active");
          var content = this.nextElementSibling;
          if (content.style.display === "block") {
            content.style.display = "none";
          } else {
            content.style.display = "block";
          }
        });
      }
    </script>
  </body>
</html>
