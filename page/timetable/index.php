<?php
require_once BASE_PATH . '/init.php';

?>
<?php

require_once STATICDATAS_PATH . '/busRoutes.staticData.php';

date_default_timezone_set("Asia/Manila"); // Set your timezone
$currentTime = strtotime(date("H:i"));

$busLogos = [
    "Victory Liner" => "/assets/img/vli-logo.png",
    "Genesis Transport Service" => "/assets/img/genesis_colored.png",
    "Partas Trans" => "/assets/img/partas-wordmark.png"
];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelEZ - Live Timetable</title>
    <link rel="icon" href="../../assets/img/live-icon.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="../../assets/css/style.css">


</head>

<body>

    <!-- header section -->
    <?php
    include_once TEMPLATES_PATH . '/header.component.php';
    ?>

    <!-- Timetable section -->

    <div></div>
    <?php
    require_once LAYOUTS_PATH . '/busTimetable.layout.php';
    ?>

    <!-- footer section -->
    <?php
    include_once TEMPLATES_PATH . '/footer.component.php';

    ?>


</body>

</html>