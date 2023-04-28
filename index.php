<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="cache-control" content="max-age=1">

    <meta name="viewport"
        content="width=device-width, height=device-height,  initial-scale=1.0, user-scalable=no, user-scalable=0" />
    <meta name="author" content="Abdur Rahman Abid">
    <meta name="description"
        content="Hello, I'm an Ambitious Businesslike Insightful Developer (ABID) 😉 from London. This is my virtual
        space where I display my projects, works and anything I am passionate about 😊">
    <link rel="stylesheet" href="styles/normalize.css">
    <script src="https://kit.fontawesome.com/f26bb953d6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles/styles.css?<?php echo date("YmdHis");?>" type="text/css">
    </link>
    <title>Abid | Software Developer</title> 
    <link rel="shortcut icon" type="image/jpg" href="favicon.png"/> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">
</head>
<body class="stars">
    <!-- page preloader -->
    <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>
    <div class="pageWrapper">
        <header class="navigation  align-center">
                <div class="navigation__button ">
                    <a href="#home" class="navigation__link  home">Home</a>
                </div>
                <div class="navigation__button ">
                    <a href="#aboutMe" class="navigation__link  aboutMe">About</a>
                </div>
                <div class="navigation__button">
                    <a href="#projects" class="navigation__link projects">Projects</a>
                </div>
                <div class="navigation__button">
                    <a href="#contact" class="navigation__link follow">Contact</a>
                </div>
        </header>
        <!-- <main> -->
            <div id="home" class="page_section section container">
                <div class="align-center profile__container">
                    <div class="aboutme-main">
                        <h1 class="profile__name">Abdur Rahman Abid</h1>
                        <div class="aboutme-me">
                            <div class="profile-image-container"><img class="profile__image" src="images/profile.jpeg"/></div>
                            <div class="ballon-container">
                                <p class="profile__description balloon" id="balloon-profile-desc"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="aboutMe" class="page_section section container">
                <div class="align-center profile__container">
                    <div class="glass-card-container">
                        <div class="glass-card">
                            <h3>Profile</h3>
                            <p class="parag map__parag">
                            I am a logical thinker, problem solver, motivator and a team player. I deem every difficulty as an opportunity to improve. I have an extreme thirst and passion for programming, progression and productivity in general. It is my passion for the latter two which drew me to fall in love with art of programming.
                            </p>
                        </div>
                        <div class="glass-card">
                            <h3>Languages & Technologies</h3>
                            <h4>Used @ Work</h4>
                            <div class="languages-container">
                                <div>HTML</div>
                                <div>CSS</div>
                                <div>JavaScript</div>
                                <div>PHP</div>
                                <div>Laravel</div>
                                <div>Yii2</div>
                                <div>jQuery</div>
                                <div>Vue.js</div>
                                <div>MYSQL</div>
                                <div>Postgresql</div>
                                <div>Bootstrap</div>
                                <div>git</div>
                            </div>
                            <h4>Others Used In Personal Projects</h4>
                            <div class="languages-container">
                                <div>Python</div>
                                <div>Flask</div>
                                <div>Bulma</div>
                                <div>Webpack</div>
                                <div>Tailwind</div>
                                <div>Docker</div>
                                <div>SQLite</div>
                            </div>
                            <h4>Others Learnt Without Projects</h4>
                            <div class="languages-container">
                                <div>Java</div>
                                <div>C#</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="projects" class="container page_section section">
                <h2 class="column_header">Apps and Projects</h2>
                <p class="parag map__parag" style="text-align:center">The following are a couple of projects I have worked on. Check them out!  👊🏽🙌🏽</p>
                <p class="parag map__parag" style="text-align:center">If you have any suggestions for any mobile or web apps, drop me a message in the contact section below 👊🏽🙏🏽</p>
                <div class="jobs_container">
                    <div class="job">
                        <a href="https://gazetteer.aabid.co.uk/" target="_blank">
                            <div class="job__image">
                                <img class="job__image__img" src="images/gazetteer.PNG" />
                            </div>
                            <div class="job_info">
                                <div class="job__text">
                                    <h3 class="job__text__name">Gazetteer</h3>
                                    <p class="job__text__summary">A friendly gazetteer wep app connecting you to different countries of the world</p>
                                    <!-- <p class="job_languages">Made with: HTML, CSS, JavaScript (jQuery), PHP (cURL)</p> -->
                                </div>
                                <div class="job_languages_container">
                                    <p class="job_languages">Made with: HTML, CSS, JavaScript (jQuery, Leaflet), PHP (cURL)</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="job">
                        <a href="https://companydirectory.aabid.co.uk/" target="_blank">
                            <div class="job__image">
                                <img class="job__image__img" src="images/companyDirectory.PNG" />
                            </div>
                            <div class="job_info">
                                <div class="job__text">
                                    <h3 class="job__text__name">Company Directory</h3>
                                    <p class="job__text__summary">A simple and easy web application to manage your company</p>
                                </div>
                                <div class="job_languages_container">
                                    <p class="job_languages">Made with: HTML, CSS (bootstrap), JavaScript (jQuery), PHP, MYSQL</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="job">
                        <a href="https://github.com/Abid-dev/job-shop" target="_blank">
                            <div class="job__image">
                                <img class="job__image__img" src="images/jobshop2.png" />
                            </div>
                            <div class="job_info">
                                <div class="job__text">
                                    <h3 class="job__text__name">Job Shop</h3>
                                    <p class="job__text__summary">A simple web app to browse manage jobs and employers</p>
                                </div>
                                <div class="job_languages_container">
                                    <p class="job_languages">Made with: Python (flask), CSS (bulma), JaveScript, Webpack, HTML, SQLite</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="job">
                        <a href="https://youthoftheummah.com" target="_blank">
                            <div class="job__image">
                                <img class="job__image__img" src="images/you.png" />
                            </div>
                            <div class="job_info">
                                <div class="job__text">
                                    <h3 class="job__text__name">Youth Of the Ummah Website</h3>
                                    <p class="job__text__summary">A website design and created for a local youth organisation</p>
                                </div>
                                <div class="job_languages_container">
                                    <p class="job_languages">Made with: HTML, CSS, JaveScript, Vanilla PHP</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div id="contact" class="container section">
                <h2 class="column_header">Contact Me</h2>
                <form id="contactForm">
                    <div class="contactRequiredFields">
                        <div class="contactName">
                            <label for="enquirerName">Name</label>
                            <input type="text" id="enquirerName" max="70" placeholder="Name" required>
                        </div>
                        <div class="contactEmail">
                            <label for="enquirerEmail">Email</label>
                            <input type="email" name="enquirerEmail" id="enquirerEmail" placeholder="Email" required>
                        </div>
                    </div>
                    <!-- <details class="contactDropdown" id="contactDropdown"> -->
                        <div class="contactDropdownText" id="contactDropdownText">Add a message</div>
                        <textarea name="contactMessage" id="contactMessage" cols="30" rows="3" placeholder="Your message"></textarea>
                    <!-- </details> -->
                    <button type="submit" id="contactSubmit">Send</button>
            </form>
            </div>
            <div id="follow" class="container">
                <div class="links_container">
                    <div class="link_wrapper">
                        <a href="https://www.linkedin.com/in/abdur-rahman-abid-935120196/" target="_blank" class="link">
                            <div class="link__image" style="background-color: #0b66c2; opacity: 100%">
                                <i class="fab fa-linkedin-in"></i>
                            </div>
                            <div class="link__text">Linkedin</div>
                        </a>
                    </div>
                    <!-- <div class="link_wrapper">
                        <a href="https://www.indiehackers.com/Abid_dev" target="_blank" class="link">
                            <div class="link__image">
                                <span>IH</span>
                            </div>
                            <div class="link__text">Indie Hackers</div>
                        </a>
                    </div> -->
                    <div class="link_wrapper">
                        <a href="https://github.com/Abid-dev" target="_blank" class="link">
                            <div class="link__image">
                                <i class="fab fa-github"></i>
                            </div>
                            <div class="link__text">GitHub</div>
                        </a>
                    </div>
                </div>
            </div>
        <!-- </main> -->
        <footer>
            <div class="container align-center">
                <p class="footer_copyright">© Abdur Rahman Abid <?php echo date("Y");?></p>
            </div>
        </footer>
    </div>

    <div id="contactModal" class="modal">
        <div class="modalContent">
            <!-- <span class="modalClose">&times</span> -->
            <h3 class="modalMessageTitle" id="contactModalMessageTitle">Thank you for getting in touch! 😀</h3>
            <p class="modalMessage" id="contactModalMessage">I appreciate you getting in contact and reaching out. I will get in touch with you soon! Have a great day!</p>
            <button class="modalCloseBtn" id="contactModalCloseBtn">Close</button>
        </div>
    </div>

    <script src="./scripts/jquery.js"></script>
    <script src="scripts/smooth-scroll-master/dist/smooth-scroll.polyfills.min.js"></script>    
    <script src="scripts/main.js?<?php echo date("YmdHis");?>"></script>
</body>
</html>
