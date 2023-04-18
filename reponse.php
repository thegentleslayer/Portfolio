<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!--==================== SWIPER CSS ====================-->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        
        <!--==================== CSS ====================-->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--==================== BOOTSTRAP ====================-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
       
        <!--==================== ICONSCOUT ====================-->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

        <!--==================== FONT AWESOME ====================-->
        <script src="https://kit.fontawesome.com/c81150d4e4.js" crossorigin="anonymous"></script>

        <title>Responsive Portfolio Website</title>

    </head>

    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">Myriam</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list grid">
                        <li class="nav__item">
                            <a href="#home" class="nav__link">
                                <i class="uil uil-estate nav__icon"></i> Home
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="#about" class="nav__link">
                                <i class="uil uil-user nav__icon"></i> À propos
                            </a> 
                        </li>

                        <li class="nav__item">
                            <a href="#skills" class="nav__link">
                                <i class="uil uil-file nav__icon"></i> Compétences 
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="#education" class="nav__link">
                                <i class="uil uil-suitcase nav__icon"></i> Qualifications
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="#portfolio" class="nav__link">
                                <i class="uil uil-folder-open nav__icon"></i> Projets
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="#contact" class="nav__link">
                                <i class="uil uil-envelope nav__icon"></i> Contact 
                            </a>
                        </li>
                    </ul>
                        <i class="uil uil-times nav__close" id="nav-close"></i>
                </div>

                <div class="nav__btns">
                    <div class="nav__toggle" id="nav-toggle">
                        <i class="uil uil-apps"></i>
                    </div>
                </div>

                <div class="toggle"> 
                    <input= type="Checkbox" class="Checkbox" id="dark-mode"/>
                    <label for = "dark-mode" class="label"> 
                        <i class="uil uil-moon"></i>
                        <i class="uil uil-sun"></i>
                        <span class="ball"></span>
                    </label>
                </div>
            </nav>
        </header> 

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home section" id="home">
                <div class="home__container container grid">
                    <div class="home__content grid">
                        <div class="home__social">
                            <a href="https://www.linkedin.com/in/myriam-faridi/" target="_blank" class="home__social-icon">
                                <i class="uil uil-linkedin"></i>
                            </a>

                            <a href="https://github.com/thegentleslayer" target="_blank" class="home__social-icon">
                                <i class="uil uil-github"></i>
                            </a>

                            <a href="https://www.instagram.com/gabfaridi/?hl=fr" target="_blank" class="home__social-icon">
                                <i class="uil uil-instagram-alt"></i>
                            </a>
                        </div>

                        <div class="home__img">
                            <svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <mask id="mask0" mask-type="alpha">
                                    <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                    130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                                    97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                    0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                                </mask>
                                <g mask="url(#mask0)">
                                    <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                    165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                                    129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                    -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                                    <image class="home__blob-img" x='12' y='18' href="assets/img/alex1.png"/>
                                </g>
                            </svg>
                        </div>
                    


                        <div class= "home__data">
                            <h1 class="home__title">Salut, Je m'appelle Myriam.</h1>
                            <h3 class="home__subtitle"> Etudiante en cybersécurité </h3>
                            <p class="home__description"> Etudiante passionée de la sécurité informatique qui aimerait travailler dans la lutte contre la cybercriminalité.</p>
                            <a href= "#contact" class="button button--flex"> 
                                Contactez-moi &nbsp;<i class="uil uil-envelope-alt button__icon"></i>
                            </a>
                        </div>
                    </div>

                    <div class="home__scroll">
                        <a href="#about" class="home__scroll-button button--flex">
                            <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                            <span class="home__scroll-name"> Scroll down </span>
                            <i class="uil uil-arrow-down home__scroll-arrow"></i>
                         </a>
                    </div>
                </div>

                
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
                <h2 class="section__title"> A Propos de Moi </h2>
                <span class="section__subtitle"> Mon introduction </span>
                <div class="about__container container grid">
                    <img src="assets/img/alex2.png" alt="" class="about__img">

                    <div class="about__data">
                        <p class="about__description"> Etudiante en première année de Bachelore en Cybersécurité, je recherche activement un stage à partir du mois du 15 mai 2023.</p>
                        <div class= "about__info">
                    </div>

                    <div class="about__buttons">
                        <a download="" href="pdf/myriam-cv.pdf" class="button button--flex"> Téléchage mon CV
                        &nbsp; <i class="fa-sharp fa-solid fa-file-arrow-down button__icon"></i>

                        </a>
                    </div>

            </section>

            <!--==================== SKILLS ====================-->
            <section class="skills section" id="skills">
                <h2 class="section__title"> Mes compétences </h2>
                <span class="section__subtitle">Mon niveau technique </span>

                <div class="skills__container container grid">
                    <div>
                        <!--==================== SKILLS 1 ====================-->
                        <div class="skills__content skills__open">
                            <div class="skills__header">
                                <i class="uil uil-brackets-curly skills__icon"></i>

                                <div>
                                    <h1 class="skills__title">Front Developpement </h1>
                                    <span class="skills__subtitle"> Moins d'un an </span>
                                </div>
                                <i class="uil uil-angle-down skills__arrow"></i>
                            </div>
                        
                            <div class="skills__list grid">
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills_name"> HTML </h3>
                                        <span class="skills__numer"> 30% </span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__html"></span>
                                    </div>
                                </div>
                            
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills_name"> CSS </h3>
                                        <span class="skills__numer"> 30% </span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__css"></span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills_name"> JavaScript </h3>
                                        <span class="skills__numer"> 30% </span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__js"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--==================== SKILLS 2 ====================-->
                        <div class="skills__content skills__open">
                            <div class="skills__header">
                                <i class="uil uil-server skills__icon"></i>

                                <div>
                                    <h1 class="skills__title">Back Developpement </h1>
                                    <span class="skills__subtitle"> Moins d'un an </span>
                                </div>
                                <i class="uil uil-angle-down skills__arrow"></i>
                            </div>
                        
                            <div class="skills__list grid">
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills_name"> PHP </h3>
                                        <span class="skills__numer"> 30% </span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__php"></span>
                                    </div>
                                </div>
                            
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills_name"> Mysql </h3>
                                        <span class="skills__numer"> 30% </span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__mysql"></span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills_name"> Python </h3>
                                        <span class="skills__numer"> 30% </span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__python"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--==================== SKILLS 3 ====================-->
                        <div class="skills__content skills__open">
                            <div class="skills__header">
                                <i class="uil uil-servers skills__icon"></i>

                                <div>
                                    <h1 class="skills__title">Langage de programmation </h1>
                                    <span class="skills__subtitle"> Moins de deux ans </span>
                                </div>
                                <i class="uil uil-angle-down skills__arrow"></i>
                            </div>
                        
                            <div class="skills__list grid">
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills_name"> Algorithmie Python | Python Scraping </h3>
                                        <span class="skills__numer"> 45% </span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__algo"></span>
                                    </div>
                                </div>
                            
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills_name"> Programme C </h3>
                                        <span class="skills__numer"> 25% </span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__c"></span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills_name"> Programme C++ </h3>
                                        <span class="skills__numer"> 15% </span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__cplus"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--==================== SKILLS 1 ====================-->
                        <div class="skills__content skills__open">
                            <div class="skills__header">
                                <i class="uil uil-brain skills__icon"></i>

                                <div>
                                    <h1 class="skills__title">Autres Compétences </h1>
                                    <span class="skills__subtitle"> Plus de deux ans </span>
                                </div>
                                <i class="uil uil-angle-down skills__arrow"></i>
                            </div>
                        
                            <div class="skills__list grid">
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills_name"> Forensique </h3>
                                        <span class="skills__numer"> 50% </span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__forensique"></span>
                                    </div>
                                </div>
                            
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills_name"> Sociologie comportementale </h3>
                                        <span class="skills__numer"> 75% </span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__sociologie"></span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills_name"> Réseau | Infrastructure Réseau </h3>
                                        <span class="skills__numer"> 50% </span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__reseau"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            </section>

            <!--==================== QUALIFICATION ====================-->
            <section class="qualification section" id = "education">
                <h2 class="section__title"> Qualifications</h2> 
                <span class="section__subtitle">Mon parcours</span>

                <div class="qualification__container container">
                    <div class="qualification__tabs">
                        <div class="qualification__button button--flex qualification__active" data-target='#education'>
                            <i class="uil uil-graduation-cap qualification__icon"></i>
                        Education
                        </div>
                    </div>

                    <div class="qualification__sections">
                        <div class="qualification__content qualification__active" data-content id="education">
                            <div class="qualification__data">
                                <div>
                                    <h3 class="qualification__title">Baccalauréat Scientifique </h3>
                                    <span class="qualification__subtitle"> Lycée Joliot-Curie, Nanterre</span>
                                    <div class="qualification__calendar">
                                        <i class="uil uil-schedule"></i>
                                        2015 - 2017
                                    </div>
                                </div>
 
                                <div>
                                    <span class="qualification__rounder"> </span>
                                    <span class="qualification__line"> </span>
                                </div>
                            </div>

                            <div class="qualification__data">
                                <div> </div>

                                
                                <div>
                                    <span class="qualification__rounder"> </span>
                                    <span class="qualification__line"> </span>
                                </div>

                                <div>
                                    <h3 class="qualification__title"> L1/L2 Langue Etrangères Appliquées - Russe/Anglais  </h3>
                                    <span class="qualification__subtitle"> Université Paris X</span>
                                    <div class="qualification__calendar">
                                        <i class="uil uil-schedule"></i>
                                        2018 - 2020 
                                    </div>
                                </div>

                            </div> 

                            <div class="qualification__data">
                                <div> </div>

                                <div>
                                    <span class="qualification__rounder"> </span>
                                    <span class="qualification__line"> </span>
                                </div>

                                <div>
                                    <h3 class="qualification__title">Bachelor : Développeur informatique option Cybersécurité </h3>
                                    <span class="qualification__subtitle"> Guardia School - Paris La Défense</span>
                                    <div class="qualification__calendar">
                                        <i class="uil uil-schedule"></i>
                                        2022 - Présent
                                    </div>
                                </div>

                                <div>
                                    <!-- <span class="qualification__rounder"> </span> -->
                                    <span class="qualification__line"> </span>
                                </div>
                            </div>

                        </div>
                    </div> 
            </section>


            <!--==================== PORTFOLIO ====================-->
            <section class="portfolio section" id="portfolio">
                <h2 class="section__title"> Projets </h2>
                <span class="section__subtitle"> Mes projets récents</span>

                <div class="portfolio__container container swiper-container">
                    <div class="swiper-wrapper">
                        <!--==================== PORTFOLIO 1====================-->
                        <div class="portfolio__content grid swiper-slide">
                            <img src="assets/img/cluedo.png" alt="Image illustrante le jeu du Cluedo" class="portfolio__img">

                            <div class="portfolio__data">
                                <h3 class="portfolio__title">Cluedo</h3>
                                <p class="portfolio__description">Réalisation d'un Cluedo en programme Python.</p>
                                <a href="#" class="button button--flex button--small portfolio__button">
                                    Demo
                                    &nbsp;<i class="uil uil-arrow-right button__icon"></i>
                                </a>
                            </div>
                        </div>
                        <!--==================== PORTFOLIO 2====================-->
                        <div class="portfolio__content grid swiper-slide">
                            <img src="assets/img/uno.png" alt="Image illustrante le jeu du Uno clas"class="portfolio__img">

                            <div class="portfolio__data">
                                <h3 class="portfolio__title">Uno</h3>
                                <p class="portfolio__description">Réalisation d'un Uno en programme C.</p>
                                <a href="#" class="button button--flex button--small portfolio__button">
                                    Demo
                                    &nbsp;<i class="uil uil-arrow-left button__icon"></i>
                                </a>
                            </div>
                        </div> 
                    </div>

                    <!-- Add Arrows -->
                    <div class="swiper-button-next">
                        <i class="uil uil-angle-right swiper-portfolio-icon"></i>
                    </div>
                    <div class="swiper-button-prev"> 
                        <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
                    </div>
                    
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"> </div>
                </div>
            </section>

            <!--==================== CONTACT ME ====================-->
            <section class="contact section" id="contact">
                <h2 class="section__title"> Contactez-moi </h2>
                <span class="section__subtitle"> Restons en contact </span>

                <div class="contact__container container grid">
                    <div>
                        <div class="contact__information">
                            <i class="uil uil-phone contact__icon"></i>
                            <div>
                                <h3 class="contact__title">Appellez-moi</h3>
                                <span class="contact__subtitle"> 07 64 55 73 95 </span>
                            </div>
                        </div>
                        
                        <div class="contact__information">
                            <i class="uil uil-envelope contact__icon"></i>
                            <div>
                                <h3 class="contact__title">Email</h3>
                                <span class="contact__subtitle"> myfaridipro@hotmail.com </span>
                            </div>
                        </div>
                        
                        <div class="contact__information">
                            <i class="uil uil-location-pin-alt contact__icon"></i>
                            <div>
                                <h3 class="contact__title"> Localisation </h3>
                                <span class="contact__subtitle"> Paris, périphérie </span>
                            </div>
                        </div>
                    </div>
                    <p class="center_absolute font_size_massive"> Message envoyé. </p>
                </div>

            </section>
        </main>

        <!--==================== FOOTER ====================-->

        <footer class="foote">
            <div class="footer__bg">
                <div class="footer__container container grid">
                    <div>
                        <h1 class="footer__title">Myriam</h1>
                        <span class="footer__subtitle"> Étudiante en Cybersécurité </span>
                    </div>

                    <ul class="footer__links">
                        <li>
                            <a href="#skills" class="footer__links">Qualifications </a>
                        </li>
                        <li>
                            <a href="#Portfolio" class="footer__link">Projets </a>
                        </li>
                        <li>
                            <a href="#contact" class="footer__link">Contact </a>
                        </li>
                    </ul>

                    <div class="footer__socials">
                        <a href="https://www.facebook.com/myriam.faridi.1/" target="_blank" class="footer__social">
                            <i class="uil uil-facebook"></i>
                        </a>
                    </div>

                    
                    <div class="footer__socials">
                        <a href="https://www.instagram.com/gabfaridi/?hl=fr" target="_blank" class="footer__social">
                            <i class="uil uil-instagram"></i>
                        </a>
                    </div>

                    
                    <div class="footer__socials">
                        <a href="https://twitter.com/?lang=fr" target="_blank" class="footer__social">
                            <i class="uil uil-twitter"></i>
                        </a>

                    </div>
                </div>

                <p class="footer__copy">&#169; gabfaridi. Tous droits réservés. </p>
            </div>
         
        </footer>
        
        <!--==================== SCROLL TOP ====================-->
        <a href="#" class="scrollup" id ="scroll-up">
            <i class="fa-solid fa-arrow-up scrollup__icon"></i>
        </a>

        <!--==================== SWIPER JS ====================-->
        <script src="assets/js/swiper-bundle.min.js"></script>

        <!--==================== BOOTSTRAP ====================-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        
        <!--==================== MAIN JS ====================-->
        <script src="./assets/js/main.js"></script>
        
    </body>
</html>