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
</head>

<body>

    <div id="textTypingContainer">
        <div id="textTypingAnimation" class="glassEffect"></div>
    </div>


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
                        SUPSI- Master of Science in Engineering - Computer Science 2023 – in progress
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
                        Politecnico di Milano – Ingegneria informatica 2019 – 2023
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
                        Marco Polo - informatics and telecommunications 2014 – 2019
                    </a>
                </h3>
                </p>
                This institute introduced me to the IT world both through the educational curriculum and through optional afternoon workshops,
                <br>such as the one dedicated to 3D printing,robotics and mobile application development, which I attended.
                <br>Here, I also gained my first basic knowledge of web development and protocol management.
                <br>

            </div>
        </div>

        <div class="glass_container">
            <!-- Responsive content inside the glass effect div -->
            <div class="glass_content">
                <h1>Academic journey</h1>
                <p>This is a paragraph of content. You can add more content here and it will adjust responsively within the glass container.</p>
                <p>Resize the browser window to see the responsiveness in action.</p>
            </div>

            <div class="glass_content">
                <h1>Title</h1>
                <p>This is a paragraph of content. You can add more content here and it will adjust responsively within the glass container.</p>
                <p>Resize the browser window to see the responsiveness in action.</p>
            </div>

            <div class="glass_content">
                <figure class="image-with-text">
                    <img src="./view/images/aboutMeImgCover.jpg" alt="Description of the image">
                    <figcaption>
                        <h1>Academic journey</h1>
                        <p>This is a paragraph of content. You can add more content here and it will adjust responsively within the glass container.</p>
                        <p>Resize the browser window to see the responsiveness in action.</p>
                    </figcaption>
                </figure>
            </div>
        </div>

        <div class="glass_container">
            <!-- Responsive content inside the glass effect div -->
            <div class="glass_content">
                <h1>Academic journey</h1>
                <p>This is a paragraph of content. You can add more content here and it will adjust responsively within the glass container.</p>
                <p>Resize the browser window to see the responsiveness in action.</p>
            </div>

            <div class="glass_content">
                <h1>Title</h1>
                <p>This is a paragraph of content. You can add more content here and it will adjust responsively within the glass container.</p>
                <p>Resize the browser window to see the responsiveness in action.</p>
            </div>

            <div class="glass_content">
                <h1>Title</h1>
                <p>This is a paragraph of content. You can add more content here and it will adjust responsively within the glass container.</p>
                <p>Resize the browser window to see the responsiveness in action.</p>
            </div>

        </div>
    </div>

    <button id="EducationBtn">📚</button>
    <button id="aboutMeBtn">😊</button>
    <button id="backToTopBtn">&#8593;</button>

    <!--  JavaScript files -->
    <script src="./view/js/rotation_on_scroll.js"></script>
    <script src="./view/js/autoType.js"></script>
    <script src="./view/js/scrollUp.js"></script>
</body>

</html>