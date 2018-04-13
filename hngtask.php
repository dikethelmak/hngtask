<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="hngtask.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo+2|Merriweather" rel="stylesheet">
    <title>My Task</title>
</head>
<body>
    <div class="container">             
        <div class="navbar">
            <ul class="list-group">
                <li class="list-item">
                    Home
                </li>
                <li class="list-item">
                    AboutUs
                </li>
                <li class="list-item">
                    ContactUs
                </li>
            </ul>
        </div>    
        
        <div class="content">
            <h2 class="header">
                Hng 4.0
            </h2>
            <p class="body-text">
                hotels.ng Remote Internship
            </p>
        </div>

        <div class="footer">
            <h4 class="time">
                <?php
                    echo date("h:i:sa");
                ?>
            </h4>
            <p class="body-text2">
                    Let’s bring in some light
            </p>
        </div>
    </div>
</body>
</html>