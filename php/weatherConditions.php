<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caprasimo&family=Crafty+Girls&family=League+Spartan:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caprasimo&family=Crafty+Girls&family=League+Spartan:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Sniglet:wght@400;800&display=swap" rel="stylesheet">
    <title>Weather Conditions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ade3f5;
            text-align: center;
            justify-content: center;
            padding: 30px;
        }
        h1 {
            color: #333;
            font-family: "Caprasimo", serif;
            font-weight: 400;
            font-style: normal;
            font-size: 80px;
        }
        p {
            background-color: white;
            padding: 80px;
            border: 5px solid #619ac4;
            border-radius: 50px;
            display: inline-block;
            width: 1000px;
            font-family: "Sniglet", serif;
            font-style: normal;
            font-size: 30px;
            line-height: 50px;
        }
    </style>
</head>
<body>
    <h1>⛅ Weather Conditions ⛅</h1>
    <?php
        // Define an array of weather conditions
        $weather_conditions = array("rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind");
        
        // Echo the statement using the array values
        echo "<p>We've seen all kinds of weather this month. At the beginning of the month, we had {$weather_conditions[5]} and {$weather_conditions[6]}. 
        Then came {$weather_conditions[1]} with a few {$weather_conditions[2]} and some {$weather_conditions[0]}. 
        At least we didn't get any {$weather_conditions[3]} or {$weather_conditions[4]}.</p>";
    ?>
</body>
</html>
