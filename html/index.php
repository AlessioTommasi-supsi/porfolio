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
            <!-- Responsive content inside the glass effect div -->
            <div class="glass_content">
                <h1>About me: </h1>
                <h2>Welcome to my porfolio!</h2>
                <p>Resize the browser window to see the responsiveness in action.</p>
            </div>

            <div class="glass_content">
                <h1>Title</h1>
                <p>This is a paragraph of content. You can add more content here and it will adjust responsively within the glass container.</p>
                <p>Resize the browser window to see the responsiveness in action.</p>
            </div>

            <div class="glass_content">
                <h1>About me</h1>
                <p>This is a paragraph of content. You can add more content here and it will adjust responsively within the glass container.</p>
                <p>Resize the browser window to see the responsiveness in action.</p>
            </div>


        </div>

        <div class="glass_container">
            <!-- Responsive content inside the glass effect div -->
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

            <div class="glass_content">
                <h1>Title</h1>
                <p>This is a paragraph of content. You can add more content here and it will adjust responsively within the glass container.</p>
                <p>Resize the browser window to see the responsiveness in action.</p>
            </div>

        </div>
    </div>


    <button id="aboutMeBtn">😊</button>
    <button id="backToTopBtn">&#8593;</button>

    <!--  JavaScript files -->
    <script src="./view/js/rotation_on_scroll.js"></script>
    <script src="./view/js/autoType.js"></script>
    <script src="./view/js/scrollUp.js"></script>
</body>

</html>