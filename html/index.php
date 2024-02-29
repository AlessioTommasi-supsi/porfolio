<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/controller/System/importer.php");
//Importer::import();
//require_once($_SERVER["DOCUMENT_ROOT"] . "/controller/Managers/FileManager.php");
//FileManager::printFolderThree();
//FileManager::printFolderContent();
//require_once($_SERVER["DOCUMENT_ROOT"] . "/controller/system/importer.php");
//Importer::import();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porfolio - Alessio Tommasi</title>
    <link rel="icon" href="./view/images/logo.png" type="image/png">
    <link rel="stylesheet" href="./view/css/style.css">
    <link rel="stylesheet" href="./view/css/gear.css">
    <link rel="stylesheet" href="./view/css/logo.css">
    <link rel="stylesheet" href="./view/css/glass_effect.css">
    <link rel="stylesheet" href="./view/css/autoType.css">
    <link rel="stylesheet" href="./view/css/buttons.css">
    <link rel="stylesheet" href="./view/css/dashboard.css">
</head>

<body>


    <div id="textTypingContainer">
        <div id="textTypingAnimation" class="glassEffect"></div>
    </div>

    <div class="absolute_dashboard_button_container">
        <div class="dashboard_button_container">
            <button id="goAboutMeBtn" class="dashboard_link-button">&#9660;</button>
        </div>
    </div>

    <div>


        <div class="no_overflow">

            <div class="logo_container">
                <div class="gear_logo_container">
                    <img class="gear" src="./view/images/gearNobg.png" alt="Immagine senza sfondo">
                </div>
                <div class="logo">
                    <img class="logo_image" src="./view/images/logo.png" alt="Immagine senza sfondo">
                </div>
            </div>

            <div class="gear_container_left">
                <img class="gear" src="./view/images/gearNobg.png" alt="Immagine senza sfondo">
            </div>

            <div class="gear_container_bottom">
                <img class="gear" src="./view/images/gearNobg.png" alt="Immagine senza sfondo">
            </div>

        </div>



        <div class="next_page" id="aboutMeTitle">
            <div class="glass_container">
                <div class="glass_content">
                    <img class="cover_img" src="./view/images/aboutMeImgCover.jpg" alt="Immagine senza sfondo">
                    <h1>About me: </h1>
                    <p>
                        Recent Computer Engineering
                        graduate from Politecnico di Milano
                        with a strong academic foundation in
                        computer science and engineering
                        principles.
                        <br>
                        Eager to apply my knowledge and
                        analytical skills to contribute to
                        innovative projects
                    </p>

                    <p>
                        My enginieering passion started in childhood, driven by a passion for creating tangible results.
                        <br>
                        <br>
                        Progressing swiftly into programming and I discovered joy in crafting digital solutions.
                        <br>
                        Today, I am a full-stack developer with a passion for creating and deploying complex IT solutions.
                        <br>
                    </p>
                </div>
            </div>
            <br>
            <div class="glass_container" id="EducationTitle">
                <div class="glass_content">
                    <img class="cover_img" src="./view/images/school_logo.jpg" alt="Immagine senza sfondo">
                    <h1>Education </h1>
                    <p>
                    <h3>
                        <a href="https://www.supsi.ch/mse-computer-science" target="_blank">
                            <button class="link-button"> SUPSI- Master of Science in Engineering - Computer Science 2023 – in progress </button>
                        </a>
                    </h3>
                    </p>
                    In this school, I was able to enhance my professional and theoretical skills thanks to the creation of numerous projects spanning the entire IT lifecycle.
                    <br>
                    Additionally, thanks to stimulating, talented, and highly competent colleagues, I had the opportunity to experience excellent teamwork on multiple occasions.
                    <br>
                    <p>
                    <h3>
                        <a href=" https://www4.ceda.polimi.it/manifesti/manifesti/controller/ManifestoPublic.do?check_params=1&aa=2022&k_corso_la=358&k_indir=I3I&polij_device_category=DESKTOP&__pj0=0&__pj1=d02fafbfc57e186724383aeeffdc54ee" target="_blank">
                            <button class="link-button">Politecnico di Milano – Ingegneria informatica 2019 – 2023 </button>
                        </a>
                    </h3>
                    </p>
                    At this school, I owe my first experiences of teamwork, and I learned solid foundations in mathematics and design.
                    <br>
                    Moreover, I have frequently engaged in demanding national-level challenges such as hackathons and additional optional projects proposed by my faculty

                    computer science and engineering
                    principles.
                    <br>

                    <p>
                    <h3>
                        <a href=" https://www.marcopolocolico.edu.it/" target="_blank">
                            <button class="link-button">Marco Polo - informatics and telecommunications 2014 – 2019 </button>
                        </a>
                    </h3>
                    </p>
                    This institute introduced me to the IT world both through the educational curriculum and through optional afternoon workshops,
                    <br>such as the one dedicated to 3D printing,robotics and mobile application development, which I attended.
                    <br>Here, I also gained my first basic knowledge of web development and protocol management.
                    <br>

                </div>
            </div>
            <br>
            <div class="glass_container">

                <div class="glass_container">
                    <div class="glass_content">
                        <img class="cover_img" src="./view/images/aboutMeImgCover.jpg" alt="Immagine senza sfondo">
                        <h1>About me: </h1>
                        <p>
                            Recent Computer Engineering
                            graduate from Politecnico di Milano
                            with a strong academic foundation in
                            computer science and engineering
                            principles.
                            <br>
                            Eager to apply my knowledge and
                            analytical skills to contribute to
                            innovative projects
                        </p>

                        <p>
                            My enginieering passion started in childhood, driven by a passion for creating tangible results.
                            <br>
                            <br>
                            Progressing swiftly into programming and I discovered joy in crafting digital solutions.
                            <br>
                            Today, I am a full-stack developer with a passion for creating and deploying complex IT solutions.
                            <br>
                        </p>
                    </div>
                </div>

                <!-- Responsive content inside the glass effect div -->
                <div class="glass_content">
                    <h1>Project</h1>
                    <p>
                    <h3>
                        <a href="https://github.com/AlessioTommasi-supsi">
                            <button class="link-button">Here there is my public Github repo! </button>
                        </a>
                    </h3>
                    </p>
                    <p> 🤝<a href="mailto:alessio.tommasi.lavoro@gmail.com">Contact me</a>🤝<br> if you like to contribute!</p>
                </div>

                <div class="glass_content">
                    <h1>Other intresting Project</h1>
                </div>

                <div class="glass_container">
                    <div class="glass_content">
                        <img class="cover_img" src="./view/images/Threejs.png" alt="Description of the image">
                        <div class="">
                            <h3>ThreeJs - Lugano</h3>
                            <p>
                                <button class="knowledge-button">JS</button>
                                <button class="knowledge-button">Threejs</button>
                                <button class="knowledge-button">HTML</button>
                                <button class="knowledge-button">CSS</button>
                            </p>
                            <p>
                                A project deveoped in collaboration with SUPSI and the city of Lugano to create a 3D model of the city.
                            </p>
                            <a href="./model/docs/threejs_lugano.docx"> <button class="download-button">docs</button> </a>
                        </div>
                    </div>
                </div>

                <div class="glass_content">
                    <div class="glass_container">
                        <div class="image-with-text responsive_div">
                            <img class="project_maxwidth responsive_img" src="./view/images/Threejs.png" alt="Description of the image">
                            <div class="project_maxwidth responsive_text">
                                <h3>ThreeJs - Lugano</h3>
                                <p>
                                    <button class="knowledge-button">JS</button>
                                    <button class="knowledge-button">Threejs</button>
                                    <button class="knowledge-button">HTML</button>
                                    <button class="knowledge-button">CSS</button>
                                </p>
                                <p>
                                    A project deveoped in collaboration with SUPSI and the city of Lugano to create a 3D model of the city.
                                </p>
                                <a href="./model/docs/threejs_lugano.docx"> <button class="download-button">docs</button> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="glass_content">
                    <div class="glass_container">
                        <figure class="image-with-text">
                            <img class="project_maxwidth" src="./view/images/c.png" alt="Description of the image">
                            <figcaption class="project_maxwidth">
                                <h3>Dijkstra Ottimizzato</h3>
                                <p>
                                    <button class="knowledge-button">C</button>
                                    <button class="knowledge-button">CMake</button>
                                    <button class="knowledge-button">Valgrind</button>
                                </p>
                                <p>
                                    Project of algorithm and data structure
                                    developed in the second year of university, the goal was to optimize the Dijkstra algorithm evaluated as 30/30 with laude.
                                </p>
                                <p>
                                    <a href="./model/docs/specifica.pdf"> <button class="download-button">docs</button> </a>
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <div class="glass_content">
                    <div class="glass_container">
                        <figure class="image-with-text">
                            <img class="project_maxwidth" src="./view/images/Dantes.png" alt="Description of the image">
                            <figcaption class="project_maxwidth">
                                <h3>Dantes Trip</h3>
                                <p>
                                    <button class="knowledge-button">C#</button>
                                    <button class="knowledge-button">Unity</button>
                                    <button class="knowledge-button">Blender</button>
                                </p>
                                <p>
                                    Indie 3D Game deveplop in SUPSI based on the Divine Comedy of Dante Alighieri.
                                </p>
                                <p>
                                    <a href="./model/docs/DantesTrip.pptx"> <button class="download-button">pptx</button> </a>
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <div class="glass_content">
                    <div class="glass_container">
                        <figure class="image-with-text">
                            <img class="project_maxwidth" src="./view/images/MyShelfie.png" alt="Description of the image">
                            <figcaption class="project_maxwidth">
                                <h3>MyShelfie</h3>
                                <p>
                                    <button class="knowledge-button">Java</button>
                                    <button class="knowledge-button">JavaFX</button>
                                    <button class="knowledge-button">RMI</button>
                                    <button class="knowledge-button">Socket</button>
                                </p>
                                <p>
                                    A Java application of the table game "MyShelfie" with both RMI and Socket protocol.
                                </p>
                                <p>
                                    <a href="https://github.com/AlessioTommasi-supsi/ing-sw-2023-paganini-tommasi-russo-porfiri/blob/main/deliveries/documentation/requirements.pdf"> <button class="download-button">docs</button> </a>
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <div class="glass_content">
                    <div class="glass_container">
                        <figure class="image-with-text">
                            <img class="project_maxwidth" src="./view/images/kebHub.png" alt="Description of the image">
                            <figcaption class="project_maxwidth">
                                <h3>KebHub</h3>
                                <p>
                                    <button class="knowledge-button">Java</button>
                                    <button class="knowledge-button">AndroidStudio</button>
                                </p>
                                <p>
                                    In the early years of high school,
                                    I developed an app on the Android operating system,
                                    an e-commerce platform for buying and selling sandwiches within the school.
                                </p>

                                <p>The initiative for the application was born with the idea of facilitating both students and the sandwich vendor.</p>
                                <p> The objective is to make the reservation process more efficient and to avoid paper waste. </p>
                                <p>Here is the documentation for this application:</p>
                                <p>
                                    <a href="./model/docs/kebHub.docx"> <button class="download-button">docs</button> </a>
                                    <a href="./model/docs/kebHub.pptx"><button class="download-button">pptx</button> </a>

                                </p>
                            </figcaption>
                        </figure>
                    </div>
                </div>


            </div>
            <br>

            <div class="glass_container">
                <!-- Responsive content inside the glass effect div -->
                <div class="glass_content">
                    <h1>Professional Experience</h1>

                    <br>

                    <div class="professional_container">

                        <div class="professional_box">
                            <div class="glass_content">
                                <div class="glass_container">
                                    <h3><b>Backend Developer </b><br>- CCapital -
                                        <div class="date_project">2023/02/20 – 2023/04/20</div>
                                    </h3>
                                    <p>
                                        <button class="knowledge-button">SQL</button>
                                        <button class="knowledge-button">PHP</button>
                                    </p>
                                    <p>
                                        group of companies spanning industries like catering, footwear, marketing, and business consulting,
                                        I manage the local ERP system as
                                        well as participation in the creation of the "Money Maker" and "C-personale" projects aimed
                                        at providing management support for the restaurant industry and staff
                                    </p>

                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="professional_box">
                            <div class="glass_content">
                                <div class="glass_container">
                                    <h3>
                                        Junior frontend developer
                                        <br>
                                        iPlus Service S.r.l.
                                        <div class="date_project">2017/09/15 – 2017/12/22</div>
                                    </h3>
                                    <p>
                                        <button class="knowledge-button">JS</button>
                                        <button class="knowledge-button">CSS</button>
                                        <button class="knowledge-button">HTML</button>
                                    </p>
                                    <p>
                                        I developed several websites using JavaScript, HTML, and CSS,
                                        and I also had to learn AMP technologies to optimize the performance of the websites.
                                    </p>

                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="professional_box">
                            <div class="glass_content">
                                <div class="glass_container">
                                    <h3>
                                        Junior Java Developer
                                        <br>
                                        Metaj solutions S.R.L.
                                        <div class="date_project">2016/11/11 – 2017/2/1</div>
                                    </h3>

                                    <p>
                                        <button class="knowledge-button">Java</button>
                                        <button class="knowledge-button">Tomcat</button>
                                        <button class="knowledge-button">HTML</button>
                                    </p>
                                    <p>
                                        In this stage i learn how to create and manage Java servlet and JSP pages to create a web application.
                                    </p>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="professional_box">
                            <div class="glass_content">
                                <div class="glass_container">

                                    <h3>
                                        Junior frontend developer
                                        <br>
                                        Noratech S.r.l.
                                        <div class="date_project">2017/04/04 – 2017/05/06</div>
                                    </h3>
                                    <p>
                                        <button class="knowledge-button">Boostrap</button>
                                        <button class="knowledge-button">CSS</button>
                                        <button class="knowledge-button">HTML</button>
                                    </p>
                                    <p>
                                        I developed several frontend websites using Boostrap library, HTML, and CSS.
                                    </p>

                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Aggiungi più div con classe "box" qui -->
                    </div>
                </div>





            </div>


            <footer>
                &copy; 2024 Alessio Tommasi - Tutti i diritti riservati.
            </footer>

        </div>
        <a href="mailto:alessio.tommasi.lavoro@gmail.com"><button id="GetInTouchBtn">📲</button></a>
        <a href="./model/docs/curruculum.pdf"><button id="ResumeBtn">📖</button></a>

        <button id="ExperienceBtn">🗃️</button>
        <button id="ProjectBtn">🎯</button>
        <button id="EducationBtn">📚</button>
        <button id="aboutMeBtn">😊</button>
        <button id="backToTopBtn">&#8593;</button>

        <!--  JavaScript files -->
        <script src="./view/js/rotation_on_scroll.js"></script>
        <script src="./view/js/autoType.js"></script>
        <script src="./view/js/scrollUp.js"></script>
        <script src="./view/js/class_switcher.js"></script>
</body>

</html>