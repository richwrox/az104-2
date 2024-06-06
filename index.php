<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample PHP Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        main {
            padding: 20px;
        }
        footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome To The Second Part of  The Training</h1>
    </header>
    <main>
        <?php
            echo "<h2>Azure App Service Demo</h2>";
            echo "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent convallis dui ut sapien hendrerit, sit amet auctor orci dictum. Suspendisse potenti. Cras varius, orci a pharetra vestibulum, purus libero pharetra nisl, in fermentum purus felis vel est. Maecenas malesuada, tortor vel blandit eleifend, dolor libero tincidunt lorem, nec semper justo nulla nec felis. Sed id nunc a velit varius dapibus. Mauris a fringilla magna. Suspendisse potenti. Proin faucibus, ligula vel aliquet cursus, odio urna viverra lectus, a scelerisque elit nisi eget urna.</p>";
            
            echo "<h2>Services</h2>";
            echo "<p>Nunc feugiat, lectus a posuere dapibus, nunc eros dictum ipsum, non scelerisque dolor nisi id sapien. Aliquam erat volutpat. Sed non sollicitudin justo. Donec eget ex sem. Vestibulum ultrices tellus sit amet urna fringilla, eget consectetur eros ultrices. Vivamus euismod, tortor eu posuere condimentum, nisi est efficitur massa, vel sollicitudin eros arcu eget mauris.</p>";

            echo "<h2>Contact</h2>";
            echo "<p>Feel free to contact us at <a href='mailto:info@example.com'>info@example.com</a>.</p>";
        ?>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Sample PHP Page. All rights reserved.</p>
    </footer>
</body>
</html>
