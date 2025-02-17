<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Largest Cities</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: black;
            margin: 0;
            padding: 0;
            color: white;
        }

        h1 {
            font-family: "Abril Fatface", serif;
            font-weight: 400;
            font-style: normal;
            text-align: center;
            color: white;
            padding: 50px 200px;
            font-size: 100px;
        }

        p {
            font-family: "Montserrat", serif;
            font-weight: 500;
            letter-spacing: 4px;
            background-color: rgba(255, 255, 255, 0.5); 
            text-align: center;
            font-size: 1.2rem;
            color: white;
            padding: 20px;
        }

        .container {
            /* max-width: 800px; */
            margin: 0 auto;
            /* padding: 0 20px; */
        }

        .section {
            width: 100%;
            max-width: 600px;
            margin: 150px auto;
            padding: 30px;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 50px;
        }

        .section-title {
            margin: 5px 0;
            font-family: "Montserrat", serif;
            font-size: 40px;
            font-weight: 800;
            color: #4f3f35;
            margin-bottom: 20px;
            text-align: center;
            text-transform: uppercase;
        }

        .section-description {
            font-family: "Montserrat", serif;
            font-size: 17px;
            color: #7f8c8d;
            margin-bottom: 30px;
            text-align: center;
            line-height: 1.6;
        }

        .cities-list {
            list-style-type: none;
            padding-left: 0;
            margin: 0;
        }

        .cities-list li {
            text-align: center;
            background-color:#ece6e2;
            padding: 15px;
            font-size: 17px;
            color: black;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .cities-list li:hover {
            background-color:rgb(201, 195, 190);
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>LARGEST CITIES IN THE WORLD</h1>
        <?php
            $cities = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");
            $cities_string = "";
            foreach ($cities as $index => $city) {
                $cities_string .= $city;
                if ($index < count($cities) - 1) {
                    $cities_string .= ", ";
                }
            }
            echo "<p>$cities_string</p>";

            sort($cities);
        ?>

        <div class="section">
            <div class="section-title">10 Largest Cities</div>
            <div class="section-description">
                A sorted selection of the largest cities around the world.
            </div>
            <ul class="cities-list">
                <?php
                    foreach ($cities as $city) {
                        echo "<li>$city</li>";
                    }
                ?>
            </ul>
        </div>
        
        <?php
            array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing");
            sort($cities);
        ?>

        <div class="section">
            <div class="section-title">More Largest Cities </div>
            <div class="section-description">
                An expanded list of cities with additional selections.
            </div>
            <ul class="cities-list">
                <?php
                    foreach ($cities as $city) {
                        echo "<li>$city</li>";
                    }
                ?>
            </ul>
        </div>
    </div>
</body>
</html>
