<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAPS Digital Printing Service</title>
    
</head>
<?php require_once('header.php') ?>
<body  style=" background-image: url('img/bg.avif'); background-repeat:no-repeat, repeat ; background-size: cover;">
    
    
    <div class="content">
        <h2>Welcome to our Digital Printing Service System</h2>
        <p>We offer high-quality, affordable printing services. Below are the available printing services:</p>
        <?php
            // Simulated dynamic content from a database
            $printingServices = array("Brochures", "Business Cards", "Posters", "Flyers");
            echo "<ul>";
            foreach ($printingServices as $service) {
                echo "<li>$service</li>";
            }
            echo "</ul>";
        ?>
    </div>
    <div class="footer">
        <p>© 2024 Rise Above Printing Shop</p>
    </div>
</body>
</html>