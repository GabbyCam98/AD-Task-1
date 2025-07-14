<?php
require_once __DIR__ . '/init.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelEz - Know Where to Go, When to Go!</title>
    <link rel="icon" href="../../assets/img/travelez-icon-green.png">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">


</head>

<body>

    <!-- header section -->
    <?php
    include 'components/templates/header.component.php';
    ?>

    <main>
        <section class="landing-page">
            <div class="description-container">
                <div class="travelez-description">
                    <h1>Welcome to TravelEZ!</h1>
                    <p class="description">TravelEZ is a user-friendly website that provides a comprehensive timetable
                        of bus routes across the Philippines. Whether you're planning a trip from Manila to North Luzon
                        or other key destinations, TravelEZ helps you explore available routes offered by various bus
                        companies!</p>
                </div>
                <div class="button-container">
                    <a href="page/timetable/index.php">
                        <button class="btn-1">Let's Go!</button>
                    </a>
                </div>
            </div>


        </section>

    </main>

    <!-- footer section -->
    <?php
    include 'components/templates/footer.component.php';
    ?>

</body>

</html>