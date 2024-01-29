<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<body>
    <div class ="dashboard">
        <ul>
            <li>
                <a href="map.php">CAMPUS MAP</a>
            </li>
            <li>
                <a href="courses.php">COURSES</a>
            </li>
            <li>
                <a href="rooms.php">ROOMS</a>
            </li>
        </ul>
    </div>  

    <div class="sidebar">
        <div class="top">
            <div class="logo">
                <i class="bx bxl-codepen"></i>
                <span> Cavite State University</span>            
            </div>
            <i class="bx bx-menu" id="btn"></i>
        </div>
        <div class="user"></div>
        <ul>
            <li>
                <a href="#">
                    <i class="bx bxs-grid-alt"></i>
                    <span class="nav-item">Dashboard</span>
                </a>
                //Hover 
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bxs-map"></i>
                    <span class="nav-item">Campus Map</span>
                </a>
                //Hover 
                <span class="tooltip">Campus Map</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bxs-grid-alt"></i>
                    <span class="nav-item">Courses</span>
                </a>
                //Hover 
                <span class="tooltip">Courses</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bxs-grid-alt"></i>
                    <span class="nav-item">Rooms</span>
                </a>
                //Hover 
                <span class="tooltip">Rooms</span>
            </li>
        </ul>
    </div>
    
</body>
</html>