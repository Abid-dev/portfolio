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
    <title>Abid's Portfolio</title> 
    <link rel="shortcut icon" type="image/jpg" href="favicon.png"/> 
</head>
<body class="stars">
    <!-- page preloader -->
    <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>
    <div class="pageWrapper">
        <header class="navigation  align-center">
                <div class="navigation__button ">
                    <a href="#aboutMe" class="navigation__link  aboutMe">About me</a>
                </div>
                <div class="navigation__button">
                    <a href="#projects" class="navigation__link projects">Projects</a>
                </div>
                <div class="navigation__button">
                    <a href="#contact" class="navigation__link follow">Contact me</a>
                </div>
        </header>
        <!-- <main> -->
            <div id="aboutMe" class="page_section container">
                <div class="align-center profile__container">
                    <h1 class="profile__name">Abdur Rahman Abid Test</h1>
                    <img class="profile__image" src="images/profile.png" />
                    <p class="profile__description balloon">
                        <!-- Accomidating Businesslike Insightful Developers -->
                        Hello, I'm an Ambitious Businesslike Insightful Developer (ABID) 😉 from London. This is my virtual space where I display my projects, works and anything I am passionate about 😊
                    </p>
                    <h3>Profile</h3>
                    <p class="parag map__parag">
                    I am a logical thinker, problem solver, motivator and a team player. I deem every difficulty as an opportunity to improve. I have an extreme thirst and passion for programming, progression and productivity in general. It is my passion for the latter two which drew me to fall in love with art of programming.
                    </p>
                    <h3>Languages I Work With</h3>
                    <p class="parag map__parag">
                        At this stage, I have learnt and covered HTML, CSS, JavaScript (including fundamentals of React and Node), SQL, PHP, Python, C# and Java predominantly with the Object-oriented programming paradigm. Now pursuing mastery in this craft, I am building projects and working on applications to materialise and further my knowledge. At whichever stage, I am always traversing the path of progression
                    </p>
                    <!-- <h3>Languages I Work With</h3>
                    <ul class="list">
                        <li>HTML & CSS</li>
                        <li>JavaScript
                            <ul>
                                <li>Node.js</li>
                                <li>React</li>
                            </ul>
                        </li>
                        <li>Python</li>
                        <li>Java</li>
                        <li>C#</li>
                    </ul> -->
                    <!-- <p class="parag map__parag">
                    I have learnt the latter two predominantly in the object oriented programming paradigm
                    </p> -->
                </div>
            </div>
            <div id="projects" class="container page_section">
                <h2 class="column_header">Apps and Projects</h2>
                <p class="parag map__parag">
                    The following are a couple of projects I have worked on. Check them out! I am sure you will enjoy and benefit from them as I did making them 👊🏽🙌🏽
                </p>
                <p class="parag map__parag">If you have any suggestions for any mobile or web apps, follow the links below to contact me and let me know 👊🏽🙏🏽</p>
                <div class="jobs_container">
                    <div class="job">
                        <a href="https://gazetteer.abdurrahmanabid.co.uk/" target="_blank">
                            <div class="job__image">
                                <img class="job__image__img" src="images/gazetteer.png" />
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
                        <a href="http://companydirectory.abdurrahmanabid.co.uk/" target="_blank">
                            <div class="job__image">
                                <img class="job__image__img" src="images/companyDirectory.PNG" />
                            </div>
                            <div class="job_info">
                                <div class="job__text">
                                    <h3 class="job__text__name">Company Directory</h3>
                                    <p class="job__text__summary">A simple and easy web application to manage your company</p>
                                </div>
                                <div class="job_languages_container">
                                    <p class="job_languages">Made with: HTML, CSS (bootstrap), JavaScript (jQuery), PHP, SQL</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div id="contact" class="container page_section">
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
            <div id="follow" class="container page_section">
                <h2 class="column_header">Follow Me</h2>
                <div class="links_container">
                    <div class="link_wrapper">
                        <a href="https://www.linkedin.com/in/abdur-rahman-abid-935120196/" target="_blank" class="link">
                            <div class="link__image">
                                <i class="fab fa-linkedin-in"></i>
                            </div>
                            <div class="link__text">Linkedin</div>
                        </a>
                    </div>
                    <div class="link_wrapper">
                        <a href="https://www.indiehackers.com/Abid_dev" target="_blank" class="link">
                            <div class="link__image">
                                <span>IH</span>
                            </div>
                            <div class="link__text">Indie Hackers</div>
                        </a>
                    </div>
                    <div class="link_wrapper">
                        <a href="https://github.com/Abid-dev" target="_blank" class="link">
                            <div class="link__image">
                                <i class="fab fa-github"></i>
                            </div>
                            <div class="link__text">GitHub</div>
                        </a>
                    </div>
                </div>
                <p>Feel free to contact me on any of these platforms 🙏🏽</p>
            </div>
        <!-- </main> -->
        <footer>
            <div class="container align-center">
                <p class="footer_copyright">© Abdur Rahman Abid 2021</p>
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
