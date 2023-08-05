<?php require '../weather.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>5ive Day Forecast</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../weatherStyle.css">
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
</head>
<body>
<div id="content" class="container">
  <div class="weather-side">
    <div class="weather-gradient"></div>
    <div class="date-container">
      <h2 class="date-dayname">
        <?php 
            $day -> set_weather_data(32);
            echo $day -> getDay();
        ?>
      </h2><span class="date-day">
        <?php
            $day -> set_weather_data(32);
            echo $day -> getDate();
        ?>
      </span>
      <i class="fa fa-map-marker"></i>
      <span class="location">
      <?php
        echo $day -> getCity_Name(). ", ";
        echo $day -> getCountry();
      ?>
      </span>
    </div>
    <div class="weather-container">
        <?php 
            $day -> set_weather_data(32);
            $icon = $day -> getWeather_Icon();
            echo "<img class='weather-icon' src='https://openweathermap.org/img/wn/$icon.png' alt='weather icon'>";
        ?>
        
      <h1 class="weather-temp">
      <?php 
            $day -> set_weather_data(32);
            echo $day -> getTemp(). '&degC';
      ?>
      <span class="weather-high-low">
            <sup>
            <?php 
                $day -> set_weather_data(32);
                echo $day -> getTemp_Max(). '&degC';
            ?>
            </sup> &frasl; 
            <sub>
                <?php 
                    $day -> set_weather_data(32);
                    echo $day -> getTemp_Min(). '&degC';
                ?>
            </sub>
      </span>
      </h1>
      
      <h3 class="weather-desc">
      <?php 
            $day -> set_weather_data(32);
            echo $day -> getClouds();
      ?>
      </h3>
    </div>
  </div>
  <div class="info-side">
    <div class="today-info-container">
      <div class="today-info">
      <div> 
            <span class="title">FEELS LIKE</span><span class="value">
            <?php 
                $day -> set_weather_data(32);
                echo $day -> getFeels_Like() . '&degC';
            ?>
        </span>
          <div class="clear"></div>
        </div>
        <div> 
            <span class="title">PRESSURE</span><span class="value">
            <?php 
                $day -> set_weather_data(32);
                echo $day -> getPressure() . ' hPa';
            ?>
        </span>
          <div class="clear"></div>
        </div>
        <div> 
            <span class="title">HUMIDITY</span><span class="value">
            <?php 
                    $day -> set_weather_data(32);
                    echo $day -> getHumidity() . ' %';
            ?>
        </span>
          <div class="clear"></div>
        </div>
        <div> 
            <span class="title">WIND SPEED</span><span class="value">
            <?php 
                $day -> set_weather_data(32);
                echo $day -> getWind_Deg() . '&deg @ ';
                echo $day -> getWind_Speed() . ' km/h';

            ?>
        </span>
          <div class="clear"></div>
        </div>


      </div>
    </div>
    <div class="week-container">
      <ul class="week-list">
        <li onclick="location.href='../weather.view.php'">
            <?php 
                $day -> set_weather_data(0);
                $icon = $day -> getWeather_Icon();
                echo "<img class='weather-icon-small' src='https://openweathermap.org/img/wn/$icon.png' alt='weather icon'>";
            ?>
        <span class="day-name">
            <?php 
                $day -> set_weather_data(0);
                echo $day -> getDay_Short();
            ?>
        </span>
            <span class="day-temp">
                <?php 
                    $day -> set_weather_data(0);
                    echo $day -> getTemp(). '&degC';
                ?>  
            </span>
        </li>
        <li onclick="location.href='weather2.view.php'">
            <?php 
                $day -> set_weather_data(8);
                $icon = $day -> getWeather_Icon();
                echo "<img class='weather-icon-small' src='https://openweathermap.org/img/wn/$icon.png' alt='weather icon'>";
            ?>
        <span class="day-name">
            <?php 
                $day -> set_weather_data(8);
                echo $day -> getDay_Short();
            ?>
        </span>
            <span class="day-temp">
                <?php 
                    $day -> set_weather_data(8);
                    echo $day -> getTemp(). '&degC';
                ?>  
            </span>
        </li>
        <li onclick="location.href='weather3.view.php'">
            <?php 
                $day -> set_weather_data(16);
                $icon = $day -> getWeather_Icon();
                echo "<img class='weather-icon-small' src='https://openweathermap.org/img/wn/$icon.png' alt='weather icon'>";
            ?>
        <span class="day-name">
            <?php 
                $day -> set_weather_data(16);
                echo $day -> getDay_Short();
            ?>
        </span>
            <span class="day-temp">
                <?php 
                    $day -> set_weather_data(16);
                    echo $day -> getTemp(). '&degC';
                ?>  
            </span>
        </li>
        <li onclick="location.href='weather4.view.php'">
            <?php 
                $day -> set_weather_data(24);
                $icon = $day -> getWeather_Icon();
                echo "<img class='weather-icon-small' src='https://openweathermap.org/img/wn/$icon.png' alt='weather icon'>";
            ?>
            <span class="day-name">
                <?php 
                    $day -> set_weather_data(24);
                    echo $day -> getDay_Short();
                ?>
            </span>
            <span class="day-temp">
                <?php 
                    $day -> set_weather_data(24);
                    echo $day -> getTemp(). '&degC';
                ?>  
            </span>
        </li>
        <li class="active" onclick="location.href='other-days/weather5.view.php'">
            <?php 
                $day -> set_weather_data(32);
                $icon = $day -> getWeather_Icon();
                echo "<img class='weather-icon-small' src='https://openweathermap.org/img/wn/$icon.png' alt='weather icon'>";
            ?>
            <span class="day-name">
                <?php 
                    $day -> set_weather_data(32);
                    echo $day -> getDay_Short();
                ?>
            </span>
            <span class="day-temp">
                <?php 
                    $day -> set_weather_data(32);
                    echo $day -> getTemp(). '&degC';
                ?>  
            </span>
        </li>
        <div class="clear"></div>
      </ul>
    </div>
  </div>
</div>




</body>
</html>