<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="MFitness reponsive webite build using HTML5, CSS3 and Javascript The complete layout of the page is build using grid layout and flexbox with some cool animations."
    />
    <title>Responsive Gym Website Template</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <!-- HEADER -->
    <header class="header" id="home">
      <div class="container">
        <nav class="header-navigation" aria-label="navigation">
          <div class="logo"><span class="yellow">M</span>Fitness</div>

          <img
            src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/nav-icon.svg"
            alt="navigation icon"
            class="nav-icon"
            width="30"
            height="30"
          />

          <ul>
            <li>
              <a href="#">Home</a>
            </li>
            <li>
              <a href="#about">About</a>
            </li>
            <li>
              <a href="#courses">Courses</a>
            </li>
            <li>
              <a href="#trainers">Trainers</a>
            </li>
            <li>
              <a href="#contact">Contact</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <main>
      <!-- HERO SECTION -->
      <section class="section-hero">
        <div class="container hero-box">
          <div class="hero-content margin-bottom">
            <h1 class="heading heading--1 margin-bottom">
              A place for your fitness goals
            </h1>
            <p class="description">
              We Offer Functional Training, Plyometric Boxes, Aerobics classes,
              TRX And Much More
            </p>
          </div>
          <div class="btn-group">
            <a href="customer/join.php">
              <button class="btn btn__primary margin-right margin-bottom">
                Join us
              </button>
            </a>
            <button class="btn btn__secondary">Our services</button>
          </div>
        </div>
      </section>

      <!-- SECTION ABOUT -->
      <section class="section-about" id="about">
        <div class="about-box container">
          <div class="about-box__content" data-aos="fade-up">
            <h2 class="heading heading--2">
              About <span class="yellow">M</span>Fitness
            </h2>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam
              dolor perferendis repellat ipsam fugiat dolorum possimus, modi ut
              est saepe tempora earum. Consectetur blanditiis voluptatibus,
              molestias explicabo tempora quae facilis.
            </p>
            <a href="#" class="link-button">Read More →</a>
          </div>
          <figure class="about-box__image" data-aos="fade-up">
            <img
              src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/about-img-1.jpg"
              alt="about-image-one"
              width="350"
              height="233"
            />
            <img
              src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/about-img-2.jpg"
              alt="about-image-twwo"
              width="350"
              height="233"
            />
            <img
              src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/about-img-3.jpg"
              alt="about-image-three"
              width="420"
              height="280"
            />
          </figure>
        </div>
      </section>

      <!-- SECTION COURSES -->
      <section class="section-courses" id="courses">
        <div class="container courses-box" data-aos="fade-up">
          <header class="courses-heading">
            <h2 class="heading heading--2 underline">Our Courses</h2>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit
              ducimus illum corporis magni voluptas, ex eum dolorum quia
              officia! Deleniti quia ut.
            </p>
          </header>

          <article class="courses-content">
            <div class="class-card">
              <img
                class="class-card__img"
                src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/courses-bodybuilding.jpg"
                alt="body building course"
                width="550"
                height="550"
              />

              <div class="class-card__overlay">
                <div class="text">
                  <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Ratione culpa
                  </p>

                  <a href="#" class="link-button">Read More →</a>
                </div>
              </div>

              <div class="class-card__title">Body Building</div>
            </div>

            <div class="class-card">
              <img
                class="class-card__img"
                src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/courses-crossfit.jpg"
                alt="cross fit course"
                width="550"
                height="550"
              />
              <div class="class-card__overlay">
                <div class="text">
                  <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Ratione culpa
                  </p>

                  <a href="#" class="link-button">Read More →</a>
                </div>
              </div>
              <div class="class-card__title">Cross Fit</div>
            </div>

            <div class="class-card">
              <img
                class="class-card__img"
                src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/courses-gymnastic.jpg"
                alt="gymnastic course"
                width="550"
                height="550"
              />

              <div class="class-card__overlay">
                <div class="text">
                  <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Ratione culpa
                  </p>

                  <a href="#" class="link-button">Read More →</a>
                </div>
              </div>

              <div class="class-card__title">Gymnastic</div>
            </div>

            <div class="class-card">
              <img
                class="class-card__img"
                src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/courses-fitness.jpg"
                alt="fitness course"
                width="550"
                height="550"
              />
              <div class="class-card__overlay">
                <div class="text">
                  <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Ratione culpa
                  </p>

                  <a href="#" class="link-button">Read More →</a>
                </div>
              </div>
              <div class="class-card__title">Fitness</div>
            </div>

            <div class="class-card">
              <img
                class="class-card__img"
                src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/courses-TRX.jpg"
                alt="fitness course"
                width="550"
                height="550"
              />
              <div class="class-card__overlay">
                <div class="text">
                  <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Ratione culpa
                  </p>

                  <a href="#" class="link-button">Read More →</a>
                </div>
              </div>
              <div class="class-card__title">TRX</div>
            </div>

            <div class="class-card">
              <img
                class="class-card__img"
                src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/courses-boxing.jpg"
                alt="fitness course"
                width="550"
                height="550"
              />
              <div class="class-card__overlay">
                <div class="text">
                  <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Ratione culpa
                  </p>

                  <a href="#" class="link-button">Read More →</a>
                </div>
              </div>
              <div class="class-card__title">Boxing</div>
            </div>
          </article>
        </div>
      </section>

      <!-- SECTION OFFER -->
      <section class="section-offer" id="offer">
        <div class="offer-box">
          <div class="offer" data-aos="fade-up">
            <h2 class="heading heading--2 margin-bottom">
              Special offer this summer get full Benefits for year with 20%
              discount.
            </h2>
            <p class="margin-bottom">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Consectetur exercitationem amet quas repellendus esse natus.
            </p>
            <button class="btn btn__primary">Become a member</button>
          </div>

          <div class="offer-img"></div>
        </div>
      </section>

      <!-- SECTION COACHES -->
      <section class="section-coaches" id="trainers">
        <div class="container coaches-box" data-aos="fade-up">
          <header class="coache-heading">
            <h2 class="heading heading--2 underline margin-bottom">
              OUR FITNESS COACHES
            </h2>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit
              ducimus illum corporis magni voluptas, ex eum dolorum quia
              officia! Deleniti quia ut.
            </p>
          </header>

          <article class="coache-content">
            <div class="c-card">
              <img
                src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/coache-1.jpg"
                alt="coache one"
                class="c-card__img"
                width="550"
                height="550"
              />

              <div class="overlay">
                <img
                  src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/logo-whatsapp.svg"
                  alt="whatsapp-icon"
                  width="30"
                  height="30"
                />

                <img
                  src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/logo-facebook.svg"
                  alt="facebook-icon"
                  width="30"
                  height="30"
                />

                <img
                  src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/logo-instagram.svg"
                  alt="instagram-icon"
                  width="30"
                  height="30"
                />

                <img
                  src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/logo-twitter.svg"
                  alt="twitter-icon"
                  width="30"
                  height="30"
                />
              </div>

              <div class="c-card__content">
                <p class="c-name">MARK BERTUL</p>
                <p class="c-title">Body Building</p>
              </div>
            </div>

            <div class="c-card">
              <img
                src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/coache-2.jpg"
                alt="coache one"
                class="c-card__img"
                width="550"
                height="550"
              />

              <div class="overlay">
                <img
                  src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/logo-whatsapp.svg"
                  alt="whatsapp-icon"
                  width="30"
                  height="30"
                />

                <img
                  src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/logo-facebook.svg"
                  alt="facebook-icon"
                  width="30"
                  height="30"
                />

                <img
                  src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/logo-instagram.svg"
                  alt="instagram-icon"
                  width="30"
                  height="30"
                />

                <img
                  src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/logo-twitter.svg"
                  alt="twitter-icon"
                  width="30"
                  height="30"
                />
              </div>

              <div class="c-card__content">
                <p class="c-name">serio mike</p>
                <p class="c-title">Cardio Expert</p>
              </div>
            </div>

            <div class="c-card">
              <img
                src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/coache-3.jpg"
                alt="coache three"
                class="c-card__img"
                width="550"
                height="550"
              />
              <div class="overlay">
                <img
                  src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/logo-whatsapp.svg"
                  alt="whatsapp-icon"
                  width="30"
                  height="30"
                />

                <img
                  src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/logo-facebook.svg"
                  alt="facebook-icon"
                  width="30"
                  height="30"
                />

                <img
                  src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/logo-instagram.svg"
                  alt="instagram-icon"
                  width="30"
                  height="30"
                />

                <img
                  src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/logo-twitter.svg"
                  alt="twitter-icon"
                  width="30"
                  height="30"
                />
              </div>

              <div class="c-card__content">
                <p class="c-name">SVEN MIEKE</p>
                <p class="c-title">Fitness Coach</p>
              </div>
            </div>
          </article>
        </div>
      </section>

      <!-- SECTION REVIEW -->
      <section class="section-review" id="review">
        <div class="review-box container" data-aos="fade-up">
          <h2 class="heading heading--2 underline margin-bottom grid-center">
            what people say
          </h2>

          <div class="review-card">
            <img
              src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/review-img-1.jpg"
              alt="user"
              class="review-card__image"
              width="100"
              height="100"
            />
            <blockquote class="review-card__content">
              <p class="text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Sapiente possimus aperiam
              </p>

              <div class="name">Cesar Rincon</div>
            </blockquote>
          </div>

          <div class="review-card">
            <img
              src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/review-img-2.jpg"
              alt="user"
              class="review-card__image"
              width="100"
              height="100"
            />
            <blockquote class="review-card__content">
              <p class="text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Sapiente possimus aperiam
              </p>
              <div class="name">Mathilde Langevin</div>
            </blockquote>
          </div>
        </div>
      </section>

      <!-- SECTION CONTACT -->
      <section class="section-contact" id="contact">
        <div class="contact-box">
          <form class="form-grp" data-aos="fade-up">
            <h2 class="heading heading--2 margin-bottom">
              Get in <span class="yellow">Touch</span>
            </h2>

            <input type="text" class="form form__input" placeholder="Name" />
            <input type="text" class="form form__input" placeholder="Email" />
            <input type="text" class="form form__input" placeholder="Phone" />
            <textarea
              name="message"
              cols="5"
              rows="3"
              class="form form__input"
              placeholder="Message"
              ></textarea>
            <button class="btn btn__primary form-flex">Send  </button>
          </form>
          <div id="mapid" data-aos="fade-up"></div>
        </div>
      </section>
    </main>

    <!-- FOOTER -->
    <footer class="section-footer" id="footer">
      <div class="footer-box container">
        <div class="contact-details">
          <h2 class="margin-bottom"><span class="yellow">M</span>Fitness</h2>

          <ul class="contact-data">
            <li class="location">Rai University</li>
            <li class="phone">+91 6359181714</li>
            <li class="email">dhruvsuthar@gmail.com</li>
            <li class="social">
              <a href="#">
              <img
                src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/logo-whatsapp.svg"
                alt="whatsapp icon"
                width="35"
                height="35"
              /></a>
              <a href="#">
              <img
                src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/logo-facebook.svg"
                alt="facebook icon"
                width="35"
                height="35"
              /></a>

              <a href="#">
              <img
                src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/logo-instagram.svg"
                alt="instagram icon"
                width="35"
                height="35"
              /></a>

              <a href="#">
              <img
                src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/logo-twitter.svg"
                alt="twitter icon"
                width="35"
                height="35"
              /></a>
            </li>
          </ul>
        </div>

        <nav class="footer-nav" aria-label="navigation">
          <div class="nav-name">Quick Links</div>
          <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#courses">Courses</a></li>
            <li><a href="#trainers">Trainers</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </nav>

        <div class="newsletter">
          <div class="newsletter__title">News Letter</div>
          <div class="newsletter__text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium,
            nisi!
          </div>
          <form class="newsletter__input">
            <input type="text" class="form" placeholder="example@domine.com" />
            <img
              src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/send.svg"
              alt="send icon"
              class="send-icon"
              width="36"
              height="36"
            />
          </form>
        </div>

        <div class="legel">
        <?php echo date("Y");?> &copy; Developed By Dhruv & harsh</a> </div>
        </div>
      </div>
    </footer>
  </body>
</html>